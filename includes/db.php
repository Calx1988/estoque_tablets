<?php
    
    $connection = mysqli_connect('localhost','root', '', 'estoque_tablets');

    //check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL ". mysqli_connect_errno();
    }

    //errors report
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

?>