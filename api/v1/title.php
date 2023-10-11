<?php
    $page = $_GET['url'];
    // echo basename($_SERVER['PHP_SELF']);
    // echo basename($_SERVER['PHP_SELF']);
    switch ($page) {
        case 'home':
            // echo "<h1 class='text-white'>HomePage</h1>";
            echo "Home";
            break;
        case 'courses':
            echo "Courses";
            break;
        
        case 'tutorial':
            echo "Tutorial";
            break;
        
        case 'about':
            echo "About";
            break;
               
        case 'contact':
            echo "Contact";
            break;
        
        case 'sign-up':
            echo "Sign Up";
            break;
        
        case 'sign-in':
            echo "Sign In";
            break;
    }
?>
    