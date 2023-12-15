<?php

    $host = "localhost:3307"; 
    $username = "root"; 
    $password = ""; 
    $database = "vagifahmadov";
    
    // MYSQLi (object-oriented, procedural)
    // PDO

    $conection = mysqli_connect($host,$username,$password,$database);

    if(mysqli_connect_errno() > 0) {
        die("hata: ".mysqli_connect_errno());
    }

?>