<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/home.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/home_js.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    case '':
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/home.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/home_js.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    case '/home':
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/home.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/home_js.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    case '/contact-us':
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/contact_us.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/pages/404.php';
        break;
}
