<!DOCTYPE html>
<html>

<head>
	
	<title>Parallel Games | Account</title>
	
    
    <!-- META -->
    <meta name="description" content="This is the account page for Parallel Games">
    <meta name="keywords" content="parallel, games, video-games, block-ooo, nomad-quest">
        
    <meta name="viewport" content="width=device-width,initial-scale=1">
        
    
    
    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="parallel.css">
    
    
    <!-- FONTS -->
    <script src="//use.edgefonts.net/aladin;abril-fatface.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">

	
    <!-- SCRIPTS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
    <script src="parallel.js"></script>
	
</head>


<body> 
    
    <?php
        $page_id = 7;
        session_start();
        include 'DT_header.php';
    
        //ensure user is logged in to access this page!
        if ($loggedIn == false) {
            header( "Location:login.php?login=required" );
        }
    ?>
    
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-1">
    </div>
           
    <div class="col-sm-10">
           
    <div id = "DT_container" class ="container-fluid">
    
        <div class = "generalContainer">
            
            <h1>Account</h1>
            
            
             <div class="row">
                
                <div class="col-sm-6">
                    <div id = "formContainer">

                        <table class = "table">
                            <tr>
                                <td><h1>Username</h1></td>
                                <td><h3><?php echo $_SESSION['user_username']?></h3></td>
                            </tr>
                            <tr>
                                <td><h1>Email</h1></td>
                                <td><h3><?php echo $_SESSION['user_email']?></h3></td>
                            </tr>
                            <tr>
                                <td><h1>User since</h1></td>
                                <td><h3><?php echo date("m-d-y", strtotime($_SESSION['user_time']))?></h3></td>
                            </tr>
                            <tr>
                                <td><h1>Comments</h1></td>
                                <td><h3>Not supported yet</h3></td>
                            </tr>
                        </table>   

                    </div>
                 </div>
                 
                 <div class="col-sm-6">
                 </div>
            </div>
            
            <br><br><hr><br>
            <h1>Settings</h1>
        
            <div class="row">
                <div class="col-sm-6">
                    <form name = "changeUsernameForm" method = "post" action= "processUpdateAcct.php" onsubmit="return validateChangeUsernameForm();">
                    <div id = "formContainer">

                        <h3>Change Username</h3>
                        <table class = "table">
                            <tr>
                                <td><h1>Old</h1></td>
                                <td><input type="text" name="oldUsername"></td>
                            </tr>
                            <tr>
                                <td><h1>New</h1></td>
                                <td><input type="text" name="newUsername"></td>
                            </tr>
                            
                        </table>   
                        <input class = "btn btn-primary btn-lg" type="submit" value="Submit">
                    </div>
                    </form>
                </div>
                
                <div class="col-sm-6">
                    <form name = "changeEmailForm" method = "post" action= "processUpdateAcct.php" onsubmit="return validateChangeEmailForm();">
                    <div id = "formContainer">

                        <h3>Change Email</h3>
                        <table class = "table">
                            <tr>
                                <td><h1>Old</h1></td>
                                <td><input type="text" name="oldEmail"></td>
                            </tr>
                            <tr>
                                <td><h1>New</h1></td>
                                <td><input type="text" name="newEmail"></td>
                            </tr>
                            <tr>
                                <td><h1>Newsletter</h1></td>
                                <td><input type="checkbox" value="dfas" name="newsletter"></td>
                            </tr>
                        </table>   
                        <input class = "btn btn-primary btn-lg" type="submit" value="Submit">
                    </div>
                    </form>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <form name = "changePasswordForm" method = "post" action= "processUpdateAcct.php" onsubmit="return validateChangePasswordForm();">
                    <div id = "formContainer">

                        <h3>Change Password</h3>
                        <table class = "table">
                            <tr>
                                <td><h1>Old</h1></td>
                                <td><input type="password" name="oldPassword"></td>
                            </tr>
                            <tr>
                                <td><h1>New</h1></td>
                                <td><input type="password" name="newPassword"></td>
                            </tr>
                            
                        </table>   
                        <input class = "btn btn-primary btn-lg" type="submit" value="Submit">
                    </div>
                    </form>
                </div>
                
                <div class="col-sm-6">
                    
                </div>
            </div>
           
        </div>
            
        <div id = "DT_footer">
            &copy Parallel Games 2012-2017. All rights reserved.
        </div> 
            
    </div>
    </div>
    <div class="col-sm-1">       
    </div>
    </div> 
    </div>
    

</body>


</html>