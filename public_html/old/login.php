<!DOCTYPE html>
<html>

<head>
	
	<title>Parallel Games | Login</title>
	
    
    <!-- META -->
    <meta name="description" content="This is the login page for Parallel Games">
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
        $page_id = 6;
        session_start();
        session_unset();
        include 'DT_header.php';
    ?>
    
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-1">
    </div>
           
    <div class="col-sm-10">
           
    <div id = "DT_container" class ="container-fluid">
    
        <div class = "generalContainer">
            
            <h1>Login</h1>
        
            <?php
                if ($_GET['login'] == 'required') {
                    echo "<h4 class = 'errorMsg'>Login required!</h4><br>";
                }
                else if ($_GET['login'] == 'failed') {
                    echo "<h4 class = 'errorMsg'>Invalid username and/or password!</h4><br>";
                }
            ?>
            
            <div class="row">
                
                <div class="col-sm-2">
                </div>
                
                <div class="col-sm-8">
                    
                    <div id = "formContainer">
                        <form name = "loginForm" method = "post" action= "processLogin.php" onsubmit="return validateLoginForm();">

                            <table class="table">

                                <tr>
                                    <td>
                                        <h1>Username</h1>
                                    </td>

                                    <td>
                                        <input type="text" name="username">
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <h1>Password</h1>
                                    </td>

                                    <td>
                                        <input type="password" name="password">
                                    </td>
                                </tr>

                            </table>


                            <!--<input class = "sendButton" type="submit" value="Login">-->
                            <input class = "btn btn-primary btn-lg" type="submit" value="Login">



                        </form>
                    </div>

                </div>

                <div class="col-sm-2">
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





