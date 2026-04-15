<?php

function jm_site_base_url()
{
    $configured = getenv('JM_NEWS_SITE_URL');
    if (is_string($configured) && trim($configured) !== '') {
        return rtrim(trim($configured), '/');
    }

    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['SERVER_PORT']) && (int) $_SERVER['SERVER_PORT'] === 443);
    $scheme = $https ? 'https' : 'http';
    $host = isset($_SERVER['HTTP_HOST']) && trim($_SERVER['HTTP_HOST']) !== '' ? $_SERVER['HTTP_HOST'] : 'localhost';

    return $scheme . '://' . $host;
}

function jm_site_url($path = '')
{
    $path = ltrim((string) $path, '/');
    return $path === '' ? jm_site_base_url() : jm_site_base_url() . '/' . $path;
}

function jm_asset_url($path = '')
{
    $path = (string) $path;
    $path = preg_replace('#^(\./|\.\./)+#', '', $path);

    return jm_site_url($path);
}

function jm_current_path()
{
    $scriptName = isset($_SERVER['PHP_SELF']) ? parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH) : '/index.php';
    $scriptName = is_string($scriptName) && $scriptName !== '' ? $scriptName : '/index.php';

    return basename($scriptName);
}
