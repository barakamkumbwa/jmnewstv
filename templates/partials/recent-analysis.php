<?php

function jm_recent_analysis_data_file()
{
    return dirname(dirname(__DIR__)) . '/static/assets/data/recent-analysis.json';
}

function jm_recent_analysis_upload_dir()
{
    return dirname(dirname(__DIR__)) . '/static/assets/uploads/recent-analysis';
}

function jm_recent_analysis_upload_url_base()
{
    return '../static/assets/uploads/recent-analysis/';
}

function jm_recent_analysis_default_items()
{
    return array(
        array(
            'title' => 'Yanga SC vs Simba SC Tactical Breakdown',
            'description' => 'Analysis of the derby shape, pressing traps, and the decisive moments that changed the game.',
            'youtube_url' => 'https://youtu.be/3e2wFY0hgCk',
            'thumbnail' => '../static/assets/images/img_1.jpg',
            'published_at' => 'Apr 14, 2026',
        ),
        array(
            'title' => 'Azam FC Midfield Control Review',
            'description' => 'How Azam dictated tempo in midfield and used possession to control the match rhythm.',
            'youtube_url' => 'https://youtu.be/2VcYk5U7C8s',
            'thumbnail' => '../static/assets/images/img_2.jpg',
            'published_at' => 'Apr 14, 2026',
        ),
        array(
            'title' => 'Singida Black Stars Match Reaction',
            'description' => 'Reaction from the dugout and the key takeaways after a hard-fought result on the road.',
            'youtube_url' => 'https://youtu.be/gs5XNd9VFPc',
            'thumbnail' => '../static/assets/images/img_3.jpg',
            'published_at' => 'Apr 14, 2026',
        ),
    );
}

function jm_recent_analysis_parse_youtube_id($url)
{
    if (!is_string($url) || $url === '') {
        return '';
    }

    $patterns = array(
        '/youtu\.be\/([A-Za-z0-9_-]{6,})/i',
        '/youtube\.com\/watch\?v=([A-Za-z0-9_-]{6,})/i',
        '/youtube\.com\/embed\/([A-Za-z0-9_-]{6,})/i',
        '/youtube\.com\/shorts\/([A-Za-z0-9_-]{6,})/i',
    );

    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
        }
    }

    return '';
}

function jm_recent_analysis_normalize_item($item)
{
    $youtubeUrl = isset($item['youtube_url']) ? trim($item['youtube_url']) : '';
    $videoId = jm_recent_analysis_parse_youtube_id($youtubeUrl);

    if ($videoId !== '') {
        $item['embed_url'] = 'https://www.youtube.com/embed/' . $videoId;
        if (!isset($item['thumbnail']) || trim($item['thumbnail']) === '') {
            $item['thumbnail'] = 'https://img.youtube.com/vi/' . $videoId . '/hqdefault.jpg';
        }
        if (!isset($item['watch_url']) || trim($item['watch_url']) === '') {
            $item['watch_url'] = 'https://www.youtube.com/watch?v=' . $videoId;
        }
    } else {
        $item['embed_url'] = $youtubeUrl;
        if (!isset($item['watch_url']) || trim($item['watch_url']) === '') {
            $item['watch_url'] = $youtubeUrl;
        }
        if (!isset($item['thumbnail']) || trim($item['thumbnail']) === '') {
            $item['thumbnail'] = '../static/assets/images/img_1.jpg';
        }
    }

    if (!isset($item['published_at'])) {
        $item['published_at'] = '';
    }

    return $item;
}

function jm_recent_analysis_get_items()
{
    $file = jm_recent_analysis_data_file();

    if (is_file($file)) {
        $raw = file_get_contents($file);
        $items = json_decode($raw, true);
        if (is_array($items) && count($items) > 0) {
            return array_map('jm_recent_analysis_normalize_item', $items);
        }
    }

    return array_map('jm_recent_analysis_normalize_item', jm_recent_analysis_default_items());
}

function jm_recent_analysis_save_items($items)
{
    $file = jm_recent_analysis_data_file();
    $dir = dirname($file);

    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    file_put_contents($file, json_encode(array_values($items), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}

function jm_recent_analysis_handle_thumbnail_upload($fileField)
{
    if (!isset($fileField) || !is_array($fileField) || !isset($fileField['tmp_name']) || $fileField['error'] !== UPLOAD_ERR_OK) {
        return '';
    }

    $uploadDir = jm_recent_analysis_upload_dir();
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $originalName = isset($fileField['name']) ? $fileField['name'] : 'thumbnail';
    $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
    $allowed = array('jpg', 'jpeg', 'png', 'webp');

    if (!in_array($extension, $allowed, true)) {
        return '';
    }

    $fileName = 'recent-analysis-' . time() . '-' . mt_rand(1000, 9999) . '.' . $extension;
    $targetPath = $uploadDir . '/' . $fileName;

    if (move_uploaded_file($fileField['tmp_name'], $targetPath)) {
        return jm_recent_analysis_upload_url_base() . $fileName;
    }

    return '';
}
