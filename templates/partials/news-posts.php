<?php

function jm_news_posts_data_file()
{
    return dirname(dirname(__DIR__)) . '/static/assets/data/news-posts.json';
}

function jm_news_posts_upload_dir()
{
    return dirname(dirname(__DIR__)) . '/static/assets/uploads/news';
}

function jm_news_posts_upload_url_base()
{
    return '../static/assets/uploads/news/';
}

function jm_news_posts_default_items()
{
    return array(
        array(
            'title' => 'Yanga SC sharpen title push with a new training plan',
            'description' => "A closer look at the club's tactical work, finishing drills, and title ambitions.",
            'image' => '../static/assets/images/img_1.jpg',
            'published_at' => 'Mar 22, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'Simba SC reaction dominates the weekend football debate',
            'description' => 'Supporters and analysts break down the result, the key moments, and what comes next.',
            'image' => '../static/assets/images/img_2.jpg',
            'published_at' => 'Mar 20, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'Azam FC and Singida Black Stars set up a tough midweek battle',
            'description' => 'Predictions, player form, and tactical battles ahead of the next matchday.',
            'image' => '../static/assets/images/img_3.jpg',
            'published_at' => 'Mar 18, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'Yanga academy graduates earn first-team attention',
            'description' => 'The next wave of local talent is moving into the spotlight.',
            'image' => '../static/assets/images/img_1.jpg',
            'published_at' => 'Mar 16, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'Simba SC receive a boost from returning players',
            'description' => 'Fitness, squad depth, and timing matter as the season intensifies.',
            'image' => '../static/assets/images/img_2.jpg',
            'published_at' => 'Mar 15, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'Transfer update: Azam FC linked with a new signing',
            'description' => 'The latest transfer talk from the club scene and the local market.',
            'image' => '../static/assets/images/img_3.jpg',
            'published_at' => 'Mar 14, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'JM News TV launches stronger live analysis coverage',
            'description' => 'Live football discussions now reach fans across all major platforms.',
            'image' => '../static/assets/images/img_1.jpg',
            'published_at' => 'Mar 12, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'Singida Black Stars prepare for a key home fixture',
            'description' => "The club's home form and tactical shape could decide the result.",
            'image' => '../static/assets/images/img_2.jpg',
            'published_at' => 'Mar 10, 2026',
            'author' => 'JM News TV',
        ),
        array(
            'title' => 'Tanzania Premier League weekly roundup',
            'description' => 'Weekly results, top performers, and what to expect from the next round.',
            'image' => '../static/assets/images/img_3.jpg',
            'published_at' => 'Mar 8, 2026',
            'author' => 'JM News TV',
        ),
    );
}

function jm_news_posts_normalize_item($item)
{
    if (!isset($item['author']) || trim($item['author']) === '') {
        $item['author'] = 'JM News TV';
    }
    if (!isset($item['published_at'])) {
        $item['published_at'] = '';
    }
    if (!isset($item['image']) || trim($item['image']) === '') {
        $item['image'] = '../static/assets/images/img_1.jpg';
    }
    return $item;
}

function jm_news_posts_get_items()
{
    $file = jm_news_posts_data_file();
    if (is_file($file)) {
        $raw = file_get_contents($file);
        $items = json_decode($raw, true);
        if (is_array($items) && count($items) > 0) {
            return array_map('jm_news_posts_normalize_item', $items);
        }
    }

    return array_map('jm_news_posts_normalize_item', jm_news_posts_default_items());
}

function jm_news_posts_save_items($items)
{
    $file = jm_news_posts_data_file();
    $dir = dirname($file);

    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    file_put_contents($file, json_encode(array_values($items), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}

function jm_news_posts_handle_image_upload($fileField)
{
    if (!isset($fileField) || !is_array($fileField) || !isset($fileField['tmp_name']) || $fileField['error'] !== UPLOAD_ERR_OK) {
        return '';
    }

    $uploadDir = jm_news_posts_upload_dir();
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $originalName = isset($fileField['name']) ? $fileField['name'] : 'image';
    $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
    $allowed = array('jpg', 'jpeg', 'png', 'webp');
    if (!in_array($extension, $allowed, true)) {
        return '';
    }

    $fileName = 'news-' . time() . '-' . mt_rand(1000, 9999) . '.' . $extension;
    $targetPath = $uploadDir . '/' . $fileName;

    if (move_uploaded_file($fileField['tmp_name'], $targetPath)) {
        return jm_news_posts_upload_url_base() . $fileName;
    }

    return '';
}

