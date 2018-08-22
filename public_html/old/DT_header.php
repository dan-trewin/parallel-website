

<?php

    if (is_null($_SESSION["user_id"])) {
        $loggedIn = false;
    }
    else {
        $loggedIn = true;
    }


    //display various alerts
    if ($_GET['message'] == 'logout') {
        echo "<div class='alert alert-info alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>You successfully<strong> logged out</strong>. As always, thanks for supporting Parallel Games!</div>";
    }
    else if ($_GET['message'] == 'acct_created') {
        echo "<div class='alert alert-success alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Congratulations, you created an account with Parallel Games :)</div>";
    }


    else if ($_GET['message'] == 'new_username_exists') {
        echo "<div class='alert alert-danger alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Account update failed: There is already a user with the username you are trying to change yours to.</div>";
    }
    else if ($_GET['message'] == 'old_username_not_match') {
         echo "<div class='alert alert-danger alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Account update failed: The old username you entered doesn't match your current username. Please try again.</div>";
    }
    else if ($_GET['message'] == 'new_email_exists') {
        echo "<div class='alert alert-danger alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Account update failed: There is already a user with the email you are trying to change yours to.</div>";
    }
    else if ($_GET['message'] == 'old_email_not_match') {
         echo "<div class='alert alert-danger alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Account update failed: The old email you entered doesn't match your current email. Please try again.</div>";
    }
    else if ($_GET['message'] == 'old_password_not_match') {
         echo "<div class='alert alert-danger alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Account update failed: The old password you entered doesn't match your current password. Please try again.</div>";
    }
     else if ($_GET['message'] == 'username_changed' || $_GET['message'] == 'email_changed' || $_GET['message'] == 'password_changed') {
         echo "<div class='alert alert-success alert-dismissable fade in DT_alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Account update successful!</div>";
    }

?>

<div id ="DT_logo">
    <a onclick="shiftContainer('./index.php')" href="javascript:void(0);"><img class = "img-responsive" src="images/logo.png"></a>
</div>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand navHeader" onclick="shiftContainer('./index.php')" href="#">Parallel</a>  
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li <?php if ($page_id==0){echo "class='active'";} ?>><a class = "navLink" onclick="shiftContainer('./index.php')" href="#">Blog</a></li>
                <li <?php if ($page_id==1){echo "class='active'";} ?>><a class = "navLink" onclick="shiftContainer('./games.php')" href="#">Games</a></li>
                <li <?php if ($page_id==2){echo "class='active'";} ?>><a class = "navLink" onclick="shiftContainer('./about.php')" href="#">About</a></li>
                <li <?php if ($page_id==3){echo "class='active'";} ?>><a class = "navLink" onclick="shiftContainer('./contact.php')" href="#">Contact</a></li>
                <li <?php if ($page_id==4){echo "class='active'";} ?>><a class = "navLink" onclick="shiftContainer('./highscores.php')" href="#"><!--<span class='glyphicon glyphicon-th-list'></span> -->Highscores</a></li>
                <li><a class = "navLink" style = "color:#f67979 !important;" href="https://lavaflyer.itch.io/">itch.io</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if ($loggedIn == false) {
                        
                        if ($page_id==5) {
                            echo "<li class ='active'><a class = 'navLink' href='./createAcct.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>"; 
                        }
                        else {
                            echo "<li><a class = 'navLink' href='./createAcct.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                        }
                        
                        if ($page_id==6) {
                            echo "<li class ='active'><a class = 'navLink'' href='./login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                        }
                        else {
                            echo "<li><a class = 'navLink'' href='./login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                        }
                            
                    }
                    else {
                        echo "<li><p class = 'navbar-text navText'>".date("m-d-y")."</p></li>";
                        echo "<li><p class = 'navbar-text navText'>".date("h:ia")."</p></li>";
                        
                        echo "<li><p class = 'navbar-text navText'></p></li>";
                        
                        echo "<li><p class = 'navbar-text navText' href='#'>User: ".$_SESSION['user_username']."</p></li>";
                        
                        if ($page_id==7) {
                            echo "<li class ='active'><a class = 'navLink' href='./acct.php'><span class='glyphicon glyphicon-user'></span> Account</a></li>"; 
                        }
                        else {
                            echo "<li><a class = 'navLink' href='./acct.php'><span class='glyphicon glyphicon-user'></span> Account</a></li>";
                        }
                        
                        echo "<li><a class = 'navLink' href='./logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
                    }
                ?>
                
            </ul>
        </div>
    </div>
</nav>




<!--

-->




