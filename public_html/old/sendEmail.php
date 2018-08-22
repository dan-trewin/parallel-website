<!DOCTYPE html>
<html>

<head>
	
	<title>Parallel Games | Contact</title>
	
    
    <!-- META -->
    <meta name="description" content="This is the send email page for Parallel Games">
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
    ?>
          
        
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-1">
    </div>
           
    <div class="col-sm-10">
           
    <div id = "DT_container" class ="container-fluid">
    
        <div class = "generalContainer">
            
            
            <?php
                // The message
                $to = 'lavaflyer@live.com';
                $subject = 'Parallel Games Support - '.$_POST["subject"];
                $message = "Name:\r\n".$_POST["name"]."\r\n\r\nEmail:\r\n".$_POST["email"]."\r\n\r\nMessage:\r\n".$_POST["message"]; 

                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                //$message = wordwrap($message, 70, "\r\n");

                $headers = 'From: <test@test.com>' . "\r\n" . 'Reply-To: <test@test.com>';


                /*echo "<h1>".$to."</h1>";*/
                echo "<h1>".$subject."</h1>";
                echo "<h1>".$message."</h1>";

                // Send
                $result = mail($to, $subject , $message, $headers);

                echo "<h1>".$result."</h1>";

                //echo '<h3>Email successfully sent.</h3><p>We will try to get back to you soon!</p>';
                echo '<h3>Email failed to send.</h3><p>Form didnt work properly.</p>';
            ?>
		
        
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