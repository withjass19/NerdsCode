<?php
require_once('includes/header.php');

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

$routes = array(
    'home' => 'views/index.php',
    'about' => 'views/about.php',
    'contact' => 'views/404.php'
);

if (array_key_exists($url, $routes)) {
    require_once($routes[$url]);
} else {
    echo "404 Page Not Found";
}

// require_once('includes/footer.php');
