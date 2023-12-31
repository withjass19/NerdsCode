<?php

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

$routes = array(
    // Main Pages routing
    'home' => 'views/home.php',
    'courses' => 'views/courses.php',
    // 'courses' => 'api/v1/courses.php',
    'tutorial' => 'views/tutorial.php',
    'about' => 'views/about.php',
    'contact' => 'views/contact.php',
    'sign-up' => 'views/SignUp.php',
    'sign-in' => 'views/SignIn.php',
    // 'Java' => 'views/pages/java/java.php',
    'Java' => 'views/java.php',
    'javastart' => 'views/JavaStart.php',
    'PHP' => 'views/php.php'
);

// require_once('./includes/header.php');

if (array_key_exists($url, $routes)) {
    require_once('./includes/header.php');
    require_once($routes[$url]);
    require_once('./includes/Footer.php');
} else {
    require_once('./views/404.php');
}

// require_once('includes/footer.php');
