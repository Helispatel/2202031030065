<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    
    $conn = mysqli_connect($host ,$user ,$password);

    if (! $conn){
        die("Connection Faild: ");
    }
    echo "connected sucessfully";

    $sql = "Create DATABASE abhi01";
    $checkconn = mysqli_query($conn,$sql);
    if(! $checkconn){
        die("could not create database: ");
    
    }
    
        echo "connection sucessful";
        mysqli_close($conn);
?>