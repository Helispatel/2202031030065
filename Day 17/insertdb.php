<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'abhi01';
    
    $conn = mysqli_connect($host ,$user ,$password ,$dbname);

    if (! $conn){
        die("Connection Faild: ");
    }
    echo "connected sucessfully";
    $sql ="INSERT INTO fisttab(FirstName ,LastName ,email)VALUES('hij','DEF','ABC@gmail.com')
          ;INSERT INTO fisttab(FirstName ,LastName ,email)VALUES('RST','UVW','DEF@gmail.com')";
    $checkconn = mysqli_multi_query($conn,$sql);
    if(! $checkconn){
        die("DATA could not Entered: ");
    
    }
    
        echo "Data Entered Sucessfully";
        mysqli_close($conn);
?>