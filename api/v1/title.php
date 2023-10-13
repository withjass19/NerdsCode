<?php
    $page = $_GET['url'];
    // echo basename($_SERVER['PHP_SELF']);
    // echo basename($_SERVER['PHP_SELF']);
    switch ($page) {
        case 'home':
            // echo "<h1 class='text-white'>HomePage</h1>";
            $page_title = "Home";
            break;
        case 'courses':
            $page_title = "Courses";
            break;
        
        case 'tutorial':
            $page_title = "Tutorial";
            break;
        
        case 'about':
            $page_title = "About";
            break;
               
        case 'contact':
            $page_title = "Contact";
            break;
        
        case 'sign-up':
            $page_title = "Sign Up";
            break;
        
        case 'sign-in':
            $page_title = "Sign In";
            break;
    }
?>
    