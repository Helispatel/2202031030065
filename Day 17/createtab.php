<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    
    $conn = mysqli_connect($host ,$user ,$password);

    if (! $conn){
        die("Connection Faild: ");
    }
    echo "connected sucessfully";
    mysqli_select_db($conn ,'abhi01');
    $sql = "create Table fisttab(FirstName varchar(20),LastName varchar(20),email varchar(50) ,Id int(5) AUTO_INCREMENT PRIMARY KEY)";
    $checkconn = mysqli_query($conn,$sql);
    if(! $checkconn){
        die("could not create Table: ");
    
    }
    
        echo "Table Created Sucessfully";
        mysqli_close($conn);
?>