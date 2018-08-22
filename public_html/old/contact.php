<!DOCTYPE html>
<html>

<head>
	
	<title>Parallel Games | Contact</title>
	
    
    <!-- META -->
    <meta name="description" content="This is the contact page for Parallel Games">
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
        $page_id = 3;
        session_start();
        include 'DT_header.php';
    ?>
    
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-1">
    </div>
           
    <div class="col-sm-10">
           
    <div id = "DT_container" class ="container-fluid">
    
        <div class = "generalContainer">
            
            <h1>Contact</h1>
            <p>
                If you have any questions, comments, or concerns please use the form below to contact us. Alternatively, you can send emails directly to our support email: lavaflyer@live.com
            </p>
            
            <div class="row">
                
                <div class="col-sm-2">
                </div>
                
                <div class="col-sm-8">
                    <div id = "formContainer">
                        <form name = "emailForm" method = "post" action= "sendEmail.php" onsubmit="return validateEmailForm();">

                            <table class = "table">
                                <tr>
                                    <td>
                                        <h1>Name</h1>
                                    </td>

                                    <td>
                                        <input type="text" name="name">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h1>Email</h1>
                                    </td>

                                    <td>
                                        <input type="text" name="email">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h1>Subject</h1>
                                    </td>

                                    <td>
                                        <input type="text" name="subject">
                                    </td>
                                </tr>
                            </table>

                            <textarea style="width:100%; font-size:1.3em;" name="message" cols="48em" rows="12em"></textarea>
                            <br><br>
                            <input class = "btn btn-primary btn-lg" type="submit" value="Send Message">
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