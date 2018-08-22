<?php

    session_start();

    include 'darioDBConnection.php';


    $query =    "SELECT * ".
                "FROM parallel_user ".
                "WHERE BINARY user_username = :user AND BINARY user_password = :pass";

          

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":user", $_POST["username"]);
    $stmt->bindParam(":pass", $_POST["password"]);
    $stmt->execute();


    if($stmt->rowCount() > 0) {
        foreach($stmt as $row) {
            
            
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["user_username"] = $row["user_username"];
            $_SESSION["user_email"] = $row["user_email"];
            $_SESSION["user_time"] = $row["user_time"];
            
            $conn = null;
            
            header("Location:index.php");
        }
    } 
    else {
        
        //session_unset();
        
        $conn = null;
        header( "Location:login.php?login=failed" );
    }

?>