<?php

$request = $_SERVER['REQUEST_URI'];
$page = "";
switch ($request) {
    case '/':
        $page = "home";
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/resource/home_css.php';
        require __DIR__ . '/pages/template/sub_header.php';
        require __DIR__ . '/pages/home.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/resource/home_js.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    case '':
        $page = "home";
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/resource/home_css.php';
        require __DIR__ . '/pages/template/sub_header.php';
        require __DIR__ . '/pages/home.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/resource/home_js.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    case '/home':
        $page = "home";
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/resource/home_css.php';
        require __DIR__ . '/pages/template/sub_header.php';
        require __DIR__ . '/pages/home.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/resource/home_js.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    case '/contact-us':
        $page = "contact_us";
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/resource/contact_css.php';
        require __DIR__ . '/pages/template/sub_header.php';
        require __DIR__ . '/pages/contact_us.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    case '/pricing':
        $page = "pricing";
        require __DIR__ . '/pages/template/header.php';
        require __DIR__ . '/pages/resource/pricing_css.php';
        require __DIR__ . '/pages/template/sub_header.php';
        require __DIR__ . '/pages/pricing.php';
        require __DIR__ . '/pages/template/sub_footer.php';
        require __DIR__ . '/pages/resource/pricing_js.php';
        require __DIR__ . '/pages/template/footer.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/pages/404.html';
        break;
}
