<?php
    $server = '192.168.1.19';
    $username = 'Nerds';
    $password = 'Nerds@1234';

    $dbname = 'nerds';

    $con = mysqli_connect($server, $username, $password, $dbname);

    if($con){
        echo "Connected Successfully";
    }
    else{
        die("Connection Faild: ".mysqli_connect_error());
    }
