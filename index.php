<?php

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

$routes = array(
    'home' => 'views/index.php',
    'about' => 'views/about.php',
    'contact' => 'views/404.php'
);

if (array_key_exists($url, $routes)) {
    require_once('./includes/header.php');
    require_once($routes[$url]);
    require_once('./includes/Footer.php');
} else {
    require_once('./views/404.php');
}

// require_once('includes/footer.php');
