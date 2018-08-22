


<?php

    session_start();

    include 'darioDBConnection.php';


    $usernameExists = false;
    $emailExists = false;
    /*
    $query =    "SELECT * ".
                "FROM parallel_user ".
                "WHERE user_username = :user AND user_password = :pass";*/


    $query =    "select user_id
                from parallel_user
                where user_username = :user";
          

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":user", $_POST["username"]);
    $stmt->execute();


    if($stmt->rowCount() > 0) {
        $usernameExists = true;
    } 


    $query =    "select user_id
                from parallel_user
                where user_email = :email";
          

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":email", $_POST["email"]);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        $emailExists = true;
    } 
   

    if ($usernameExists == false && $emailExists == false) {
        
        
        $query =    "INSERT INTO parallel_user (user_username, user_password, user_email, user_time) VALUES
                    (:user, :password, :email, current_timestamp())";
          

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":user", $_POST["username"]);
        $stmt->bindParam(":password", $_POST["password"]);
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->execute();
        
        
        
        
            //Now that an account has been created, login the user!! (by setting session variables)
            $query =    "SELECT * ".
                        "FROM parallel_user ".
                        "WHERE user_username = :user AND user_password = :pass";
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

                }
            } 
            //SESSION VARIABLES SET
        
        $conn = null;
        header("Location:index.php?message=acct_created");
    }
    else {
        
        $location = 'Location:createAcct.php?';
        if ($usernameExists && $emailExists) {
            $location = $location.'username=already_exists&email=already_exists';
        }
        else if ($usernameExists) {
            $location = $location.'username=already_exists';
        }
        else if ($emailExists) {
            $location = $location.'email=already_exists';
        }
        
        $conn = null;
        header($location);
    }


    

?>