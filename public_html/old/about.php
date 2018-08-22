<!DOCTYPE html>
<html>

<head>
	
	<title>Parallel Games | About</title>
	
    
    <!-- META -->
    <meta name="description" content="This is the about page for Parallel Games">
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
        $page_id = 2;
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
            
            <h1>About</h1>
            <p>
                Parallel Games is a small indie game development studio.
                We started getting serious about making games back in 2012. Parallel Games was founded with the release of our first game Block Ooo. None of us work 
                full time at our studio, but we love to program games in our spare time. We plan on releasing many more quality games in the future. Please consider 
                supporting us by purchasing our games. <br/><br/>Our current project is Nomad Quest. Nomad Quest is an action & adventure game heavily inspired by the Zelda games of old 
                (primarily The Legend of Zelda and The Legend of Zelda: a Link to the Past). The game stars a user-named wizard protagonist. His goal is to grow in magical 
                power by conquering the dungeons around the realm. 
            </p>
            
            <div class = "row">
            
                <div class = "col-sm-6">
                    <a href="images/dan.png"><IMG class = "img-responsive" SRC="images/dan.png"></a>
                </div>
                
                <div class = "col-sm-6">
                    <br><br>
                    <h1>Daniel Trewin</h1>
                    <ul>
                        <li>Founder of Parallel Games</li>
                        <li>Lead Programmer & Designer</li>
                        <li><a class ="defaultLink" href="./contact.php">Contact</a></li>
                    </ul>
                </div>
                
            
            </div>
        
        <br>
        <br>
        <h3>Add me on Heroes of the Storm!</h3>
        <a href="https://www.hotslogs.com/Player/Profile?PlayerID=2585923"><img alt="HOTS Logs Player Profile" src="https://www.hotslogs.com/Images/PlayerProfileImage/2585923.jpeg" width="563" height="125" /></a>
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