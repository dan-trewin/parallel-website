<?php

    session_start();

    include 'darioDBConnection.php';

   
    if ($_POST["oldUsername"] != "") {
        
        //checking to make sure all fields work
        //////////////////////////////////////////////////////////////////////////////
        $query =   "select user_id
                    from parallel_user
                    where user_username = :user";
        
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":user", $_POST["oldUsername"]);
        $stmt->execute();


        if($stmt->rowCount() == 0) {
            $conn = null;
            header("Location:acct.php?message=old_username_not_match");
        }
          

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":user", $_POST["newUsername"]);
        $stmt->execute();


        if($stmt->rowCount() > 0) {
            $conn = null;
            header("Location:acct.php?message=new_username_exists");
        }
        //////////////////////////////////////////////////////////////////////////////
        
        
        $query =    "UPDATE parallel_user
                    SET user_username = :user
                    WHERE user_id = ".$_SESSION["user_id"];
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":user", $_POST["newUsername"]);
        $stmt->execute();
        
        $_SESSION['user_username'] = $_POST["newUsername"];
        
        
        $conn = null;
        header("Location:acct.php?message=username_changed");
        
    } 
    else if ($_POST["oldEmail"] != "") {
        
        //checking to make sure all fields work
        //////////////////////////////////////////////////////////////////////////////
        $query =    "select user_id
                    from parallel_user
                    where user_email = :email";
        
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $_POST["oldEmail"]);
        $stmt->execute();


        if($stmt->rowCount() == 0) {
            $conn = null;
            header("Location:acct.php?message=old_email_not_match");
        }
          

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $_POST["newEmail"]);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $conn = null;
            header("Location:acct.php?message=new_email_exists");
        }
        //////////////////////////////////////////////////////////////////////////////
        
        $query =    "UPDATE parallel_user
                    SET user_email = :email
                    WHERE user_id = ".$_SESSION["user_id"];
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $_POST["newEmail"]);
        $stmt->execute();
        
        $_SESSION['user_email'] = $_POST["newEmail"];
        
        
        $conn = null;
        header("Location:acct.php?message=email_changed");
        
    }
    else if ($_POST["oldPassword"] != "") {
        
        
        //checking to make sure all fields work
        //////////////////////////////////////////////////////////////////////////////
        $query =    "select user_id
                    from parallel_user
                    where user_id = ".$_SESSION["user_id"]." and user_password = :password";
        
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":password", $_POST["oldPassword"]);
        $stmt->execute();


        if($stmt->rowCount() == 0) {
            $conn = null;
            header("Location:acct.php?message=old_password_not_match");
        }
        //////////////////////////////////////////////////////////////////////////////
        
        $query =    "UPDATE parallel_user
                    SET user_password = :password
                    WHERE user_id = ".$_SESSION["user_id"];
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":password", $_POST["newPassword"]);
        $stmt->execute();
        
        $conn = null;
        header("Location:acct.php?message=password_changed");
    }
             
?>