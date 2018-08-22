<?php

    //GoDaddy Database
    $server = "107.180.2.65";
    $username = "DanTree18";
    $password = "MM@?R5N[ix@w";
    $dbName = "ares_17";
    $port = "3306";

/*
    $conn = mysqli_connect($server,$username,$password,$dbName,$port);

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
*/

    try {
        $conn = new PDO("mysql:host=".$server.";dbname=".$dbName.";port=".$port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    //use $conn = NULL; after all queries have been executed on a page!

?>