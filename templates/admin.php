<?php
$sessionName = 'jm_news_admin_auth';
if (session_status() === PHP_SESSION_NONE) {
    session_name($sessionName);
    session_start();
}

$pageTitle = 'JM News TV | Content Admin';
$pageDescription = 'Manage JM News TV news posts and recent analysis videos.';
require_once __DIR__ . '/partials/recent-analysis.php';
require_once __DIR__ . '/partials/news-posts.php';

$adminUsername = getenv('JM_NEWS_ADMIN_USERNAME') ?: 'admin';
$adminPassword = getenv('JM_NEWS_ADMIN_PASSWORD') ?: 'jmnews2026';
$isAuthenticated = !empty($_SESSION['jm_news_admin_authenticated']);
$message = '';
$error = '';
$activeSection = isset($_GET['section']) ? $_GET['section'] : (isset($_POST['section']) ? $_POST['section'] : 'analysis');
if (!in_array($activeSection, array('analysis', 'news'), true)) {
    $activeSection = 'analysis';
}
$recentAnalysisItems = jm_recent_analysis_get_items();
$newsItems = jm_news_posts_get_items();
$newsPerPage = 6;
$newsPage = isset($_GET['news_page']) ? max(1, intval($_GET['news_page'])) : (isset($_POST['news_page']) ? max(1, intval($_POST['news_page'])) : 1);
$newsTotalItems = count($newsItems);
$newsTotalPages = max(1, (int) ceil($newsTotalItems / $newsPerPage));
$newsPage = min($newsPage, $newsTotalPages);
$newsOffset = ($newsPage - 1) * $newsPerPage;
$newsItemsPage = array_slice($newsItems, $newsOffset, $newsPerPage);
$editIndex = isset($_GET['edit']) ? intval($_GET['edit']) : -1;
$editingItem = ($editIndex >= 0 && isset($recentAnalysisItems[$editIndex])) ? $recentAnalysisItems[$editIndex] : null;
$newsEditIndex = isset($_GET['news_edit']) ? intval($_GET['news_edit']) : -1;
$editingNewsItem = ($newsEditIndex >= 0 && isset($newsItems[$newsEditIndex])) ? $newsItems[$newsEditIndex] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action === 'login') {
        $submittedUsername = isset($_POST['username']) ? trim($_POST['username']) : '';
        $submittedPassword = isset($_POST['password']) ? (string) $_POST['password'] : '';

        if ($submittedUsername === $adminUsername && hash_equals($adminPassword, $submittedPassword)) {
            session_regenerate_id(true);
            $_SESSION['jm_news_admin_authenticated'] = true;
            $isAuthenticated = true;
            $message = 'Login successful.';
        } else {
            $error = 'Invalid username or password.';
        }
    } elseif ($action === 'logout') {
        $_SESSION = array();
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }
        session_destroy();
        $isAuthenticated = false;
        $message = 'Logged out successfully.';
    } elseif (!$isAuthenticated) {
        $error = 'Please log in to continue.';
    } elseif ($action === 'save') {
        $itemIndex = isset($_POST['item_index']) ? intval($_POST['item_index']) : -1;
        $title = isset($_POST['title']) ? trim(strip_tags($_POST['title'])) : '';
        $description = isset($_POST['description']) ? trim(strip_tags($_POST['description'])) : '';
        $youtubeUrl = isset($_POST['youtube_url']) ? trim($_POST['youtube_url']) : '';
        $thumbnailUrl = isset($_POST['thumbnail_url']) ? trim($_POST['thumbnail_url']) : '';
        $thumbnailUpload = isset($_FILES['thumbnail_file']) ? $_FILES['thumbnail_file'] : null;
        $uploadedThumbnail = jm_recent_analysis_handle_thumbnail_upload($thumbnailUpload);

        if ($title === '' || $youtubeUrl === '') {
            $error = 'Title and YouTube link are required.';
        } else {
            $newItem = array(
                'title' => $title,
                'description' => $description,
                'youtube_url' => $youtubeUrl,
                'thumbnail' => $uploadedThumbnail !== '' ? $uploadedThumbnail : $thumbnailUrl,
                'published_at' => date('M d, Y'),
            );

            $normalizedItem = jm_recent_analysis_normalize_item($newItem);
            if ($itemIndex >= 0 && isset($recentAnalysisItems[$itemIndex])) {
                $normalizedItem['published_at'] = $recentAnalysisItems[$itemIndex]['published_at'];
                $recentAnalysisItems[$itemIndex] = $normalizedItem;
                $message = 'Recent Analysis video updated successfully.';
            } else {
                array_unshift($recentAnalysisItems, $normalizedItem);
                $message = 'Recent Analysis video saved successfully.';
            }

            jm_recent_analysis_save_items($recentAnalysisItems);
            $recentAnalysisItems = jm_recent_analysis_get_items();
        }
    } elseif ($action === 'delete') {
        $index = isset($_POST['item_index']) ? intval($_POST['item_index']) : -1;
        if (isset($recentAnalysisItems[$index])) {
            unset($recentAnalysisItems[$index]);
            jm_recent_analysis_save_items(array_values($recentAnalysisItems));
            $recentAnalysisItems = jm_recent_analysis_get_items();
            $message = 'Video deleted successfully.';
        } else {
            $error = 'Unable to delete the selected video.';
        }
    } elseif ($action === 'news_save') {
        $itemIndex = isset($_POST['news_item_index']) ? intval($_POST['news_item_index']) : -1;
        $title = isset($_POST['news_title']) ? trim(strip_tags($_POST['news_title'])) : '';
        $description = isset($_POST['news_description']) ? trim(strip_tags($_POST['news_description'])) : '';
        $publishedAt = isset($_POST['news_published_at']) ? trim(strip_tags($_POST['news_published_at'])) : '';
        $author = isset($_POST['news_author']) ? trim(strip_tags($_POST['news_author'])) : 'JM News TV';
        $imageUrl = isset($_POST['news_image_url']) ? trim($_POST['news_image_url']) : '';
        $imageUpload = isset($_FILES['news_image_file']) ? $_FILES['news_image_file'] : null;
        $uploadedImage = jm_news_posts_handle_image_upload($imageUpload);

        if ($title === '') {
            $error = 'News title is required.';
        } else {
            $newNewsItem = array(
                'title' => $title,
                'description' => $description,
                'published_at' => $publishedAt !== '' ? $publishedAt : date('M d, Y'),
                'author' => $author !== '' ? $author : 'JM News TV',
                'image' => $uploadedImage !== '' ? $uploadedImage : $imageUrl,
            );

            $normalizedNews = jm_news_posts_normalize_item($newNewsItem);
            if ($itemIndex >= 0 && isset($newsItems[$itemIndex])) {
                $newsItems[$itemIndex] = $normalizedNews;
                $message = 'News post updated successfully.';
            } else {
                array_unshift($newsItems, $normalizedNews);
                $message = 'News post saved successfully.';
            }

            jm_news_posts_save_items($newsItems);
            $newsItems = jm_news_posts_get_items();
            $newsTotalItems = count($newsItems);
            $newsTotalPages = max(1, (int) ceil($newsTotalItems / $newsPerPage));
            $newsPage = min($newsPage, $newsTotalPages);
            $newsOffset = ($newsPage - 1) * $newsPerPage;
            $newsItemsPage = array_slice($newsItems, $newsOffset, $newsPerPage);
        }
    } elseif ($action === 'news_delete') {
        $index = isset($_POST['news_item_index']) ? intval($_POST['news_item_index']) : -1;
        if (isset($newsItems[$index])) {
            unset($newsItems[$index]);
            jm_news_posts_save_items(array_values($newsItems));
            $newsItems = jm_news_posts_get_items();
            $message = 'News post deleted successfully.';
            $newsTotalItems = count($newsItems);
            $newsTotalPages = max(1, (int) ceil($newsTotalItems / $newsPerPage));
            $newsPage = min($newsPage, $newsTotalPages);
            $newsOffset = ($newsPage - 1) * $newsPerPage;
            $newsItemsPage = array_slice($newsItems, $newsOffset, $newsPerPage);
        } else {
            $error = 'Unable to delete the selected news post.';
        }
    }
}

include __DIR__ . '/partials/header.php';
?>

<div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-start">
      <div class="col-md-7 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
        <h1 class="bg-text-line">Content Admin</h1>
        <p class="mt-4">Manage News and Recent Analysis updates for JM News TV.</p>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <?php if ($message !== ''): ?>
      <div class="alert alert-success"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></div>
    <?php endif; ?>
    <?php if ($error !== ''): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
    <?php endif; ?>

    <?php if (!$isAuthenticated): ?>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="p-4 p-lg-5 bg-white shadow-sm">
            <h2 class="h4 text-black mb-4">Admin Login</h2>
            <form method="post">
              <input type="hidden" name="action" value="login">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="admin" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
              </div>
              <button type="submit" class="btn btn-primary rounded-0 px-4 py-2">Login</button>
            </form>
          </div>
        </div>
      </div>
    <?php else: ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h2 class="h4 text-black mb-1">Content Manager</h2>
        <p class="mb-0">Switch between Recent Analysis and News using the tabs below.</p>
      </div>
      <form method="post" class="mb-0">
        <input type="hidden" name="action" value="logout">
        <button type="submit" class="btn btn-outline-secondary btn-sm rounded-0">Logout</button>
      </form>
    </div>

    <div class="mb-4">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link <?= $activeSection === 'analysis' ? 'active' : '' ?>" href="admin.php?section=analysis">Recent Analysis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $activeSection === 'news' ? 'active' : '' ?>" href="admin.php?section=news">News</a>
        </li>
      </ul>
    </div>

    <?php if ($activeSection === 'analysis'): ?>
    <div class="row">
      <div class="col-lg-5 mb-5">
        <div class="p-4 p-lg-5 bg-white shadow-sm">
          <h2 class="h4 text-black mb-4"><?= $editingItem ? 'Edit Analysis' : 'Upload New Analysis' ?></h2>
          <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="save">
            <input type="hidden" name="section" value="analysis">
            <input type="hidden" name="item_index" value="<?= $editingItem ? (int) $editIndex : -1 ?>">
            <div class="form-group">
              <label for="title">Video Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Yanga SC vs Simba SC Tactical Breakdown" required value="<?= $editingItem ? htmlspecialchars($editingItem['title'], ENT_QUOTES, 'UTF-8') : '' ?>">
            </div>
            <div class="form-group">
              <label for="description">Short Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" placeholder="Write a short description for the video."><?= $editingItem ? htmlspecialchars($editingItem['description'], ENT_QUOTES, 'UTF-8') : '' ?></textarea>
            </div>
            <div class="form-group">
              <label for="youtube_url">YouTube Link</label>
              <input type="url" class="form-control" id="youtube_url" name="youtube_url" placeholder="https://youtu.be/..." required value="<?= $editingItem ? htmlspecialchars($editingItem['youtube_url'], ENT_QUOTES, 'UTF-8') : '' ?>">
            </div>
            <div class="form-group">
              <label for="thumbnail_url">Thumbnail URL</label>
              <input type="text" class="form-control" id="thumbnail_url" name="thumbnail_url" placeholder="Optional image URL or leave blank if uploading a file" value="<?= $editingItem && !empty($editingItem['thumbnail']) ? htmlspecialchars($editingItem['thumbnail'], ENT_QUOTES, 'UTF-8') : '' ?>">
            </div>
            <div class="form-group">
              <label for="thumbnail_file">Upload Thumbnail</label>
              <input type="file" class="form-control-file" id="thumbnail_file" name="thumbnail_file" accept=".jpg,.jpeg,.png,.webp">
            </div>
            <div class="d-flex align-items-center">
              <button type="submit" class="btn btn-primary rounded-0 px-4 py-2"><?= $editingItem ? 'Update Video' : 'Save Video' ?></button>
              <?php if ($editingItem): ?>
                <a href="admin.php?section=analysis" class="btn btn-link text-secondary ml-3">Cancel</a>
              <?php endif; ?>
            </div>
          </form>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="row">
          <?php foreach ($recentAnalysisItems as $index => $item): ?>
            <div class="col-md-6 mb-4">
              <div class="post-entry">
                <div class="image">
                  <img src="<?= htmlspecialchars($item['thumbnail'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" class="img-fluid">
                </div>
                <div class="text p-4">
                  <h2 class="h5 text-black"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                  <span class="text-uppercase date d-block mb-3"><small><?= htmlspecialchars($item['published_at'], ENT_QUOTES, 'UTF-8') ?></small></span>
                  <p class="mb-3"><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?= htmlspecialchars($item['watch_url'], ENT_QUOTES, 'UTF-8') ?>" class="btn btn-outline-primary btn-sm rounded-0" target="_blank" rel="noopener">Preview</a>
                    <div class="d-flex">
                      <a href="admin.php?section=analysis&edit=<?= (int) $index ?>" class="btn btn-warning btn-sm rounded-0 mr-2">Edit</a>
                      <form method="post" onsubmit="return confirm('Delete this video?');">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="section" value="analysis">
                        <input type="hidden" name="item_index" value="<?= (int) $index ?>">
                        <button type="submit" class="btn btn-danger btn-sm rounded-0">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <?php if ($activeSection === 'news'): ?>
    <div class="row">
      <div class="col-12 mb-3">
        <h2 class="h4 text-black mb-1">News Manager</h2>
        <p class="mb-0">Add, preview, edit, and remove football news posts for the News page.</p>
      </div>
      <div class="col-lg-5 mb-5">
        <div class="p-4 p-lg-5 bg-white shadow-sm">
          <h2 class="h4 text-black mb-4"><?= $editingNewsItem ? 'Edit News Post' : 'Upload News Post' ?></h2>
          <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="news_save">
            <input type="hidden" name="section" value="news">
            <input type="hidden" name="news_page" value="<?= (int) $newsPage ?>">
            <input type="hidden" name="news_item_index" value="<?= $editingNewsItem ? (int) $newsEditIndex : -1 ?>">
            <div class="form-group">
              <label for="news_title">News Title</label>
              <input type="text" class="form-control" id="news_title" name="news_title" required value="<?= $editingNewsItem ? htmlspecialchars($editingNewsItem['title'], ENT_QUOTES, 'UTF-8') : '' ?>">
            </div>
            <div class="form-group">
              <label for="news_description">Description</label>
              <textarea class="form-control" id="news_description" name="news_description" rows="4"><?= $editingNewsItem ? htmlspecialchars($editingNewsItem['description'], ENT_QUOTES, 'UTF-8') : '' ?></textarea>
            </div>
            <div class="form-group">
              <label for="news_published_at">Published Date</label>
              <input type="text" class="form-control" id="news_published_at" name="news_published_at" placeholder="Mar 22, 2026" value="<?= $editingNewsItem ? htmlspecialchars($editingNewsItem['published_at'], ENT_QUOTES, 'UTF-8') : '' ?>">
            </div>
            <div class="form-group">
              <label for="news_author">Author</label>
              <input type="text" class="form-control" id="news_author" name="news_author" placeholder="JM News TV" value="<?= $editingNewsItem ? htmlspecialchars($editingNewsItem['author'], ENT_QUOTES, 'UTF-8') : 'JM News TV' ?>">
            </div>
            <div class="form-group">
              <label for="news_image_url">Image URL</label>
              <input type="text" class="form-control" id="news_image_url" name="news_image_url" value="<?= $editingNewsItem ? htmlspecialchars($editingNewsItem['image'], ENT_QUOTES, 'UTF-8') : '' ?>">
            </div>
            <div class="form-group">
              <label for="news_image_file">Upload Image</label>
              <input type="file" class="form-control-file" id="news_image_file" name="news_image_file" accept=".jpg,.jpeg,.png,.webp">
            </div>
            <div class="d-flex align-items-center">
              <button type="submit" class="btn btn-primary rounded-0 px-4 py-2"><?= $editingNewsItem ? 'Update Post' : 'Save Post' ?></button>
              <?php if ($editingNewsItem): ?>
                <a href="admin.php?section=news" class="btn btn-link text-secondary ml-3">Cancel</a>
              <?php endif; ?>
            </div>
          </form>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="row">
          <?php foreach ($newsItemsPage as $index => $item): ?>
            <div class="col-md-6 mb-4">
              <div class="post-entry">
                <div class="image">
                  <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" class="img-fluid">
                </div>
                <div class="text p-4">
                  <h2 class="h5 text-black"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                  <span class="text-uppercase date d-block mb-3"><small>By <?= htmlspecialchars($item['author'], ENT_QUOTES, 'UTF-8') ?> - <?= htmlspecialchars($item['published_at'], ENT_QUOTES, 'UTF-8') ?></small></span>
                  <p class="mb-3"><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="admin.php?section=news&news_page=<?= (int) $newsPage ?>&news_edit=<?= (int) $index ?>" class="btn btn-warning btn-sm rounded-0 mr-2">Edit</a>
                    <form method="post" onsubmit="return confirm('Delete this news post?');">
                      <input type="hidden" name="action" value="news_delete">
                      <input type="hidden" name="section" value="news">
                      <input type="hidden" name="news_page" value="<?= (int) $newsPage ?>">
                      <input type="hidden" name="news_item_index" value="<?= (int) $index ?>">
                      <button type="submit" class="btn btn-danger btn-sm rounded-0">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php if ($newsTotalPages > 1): ?>
          <div class="row mt-3">
            <div class="col-12 text-center">
              <div class="site-block-27">
                <ul>
                  <?php if ($newsPage > 1): ?>
                    <li><a href="admin.php?section=news&news_page=<?= (int) ($newsPage - 1) ?>">&lt;</a></li>
                  <?php else: ?>
                    <li class="disabled"><span>&lt;</span></li>
                  <?php endif; ?>
                  <?php for ($page = 1; $page <= $newsTotalPages; $page++): ?>
                    <li class="<?= $page === $newsPage ? 'active' : '' ?>">
                      <?php if ($page === $newsPage): ?>
                        <span><?= (int) $page ?></span>
                      <?php else: ?>
                        <a href="admin.php?section=news&news_page=<?= (int) $page ?>"><?= (int) $page ?></a>
                      <?php endif; ?>
                    </li>
                  <?php endfor; ?>
                  <?php if ($newsPage < $newsTotalPages): ?>
                    <li><a href="admin.php?section=news&news_page=<?= (int) ($newsPage + 1) ?>">&gt;</a></li>
                  <?php else: ?>
                    <li class="disabled"><span>&gt;</span></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
  </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
