<?php
// herder('Content-Type: application/json');
$url = isset($_GET['url']) ? $_GET['url'] : 'courses';

echo $url."<br>";
echo __DIR__."<br>";
$dir = realpath(__DIR__ . '/../..');
echo $dir;
if($url == 'courses'){
    echo "Hello Courses";
}
elseif($url == 'courses/java'){
    echo "java";
    $dir = realpath(__DIR__ . '/../../views/java.php');
}
?>