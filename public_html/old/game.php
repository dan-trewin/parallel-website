<!DOCTYPE html>
<html>
<?php
    //only up here for title, code repeated at the beginning of the body
    $game_name = $_GET['game'];
?>

<head>
	
	<title>Parallel Games | <?php echo $game_name?> </title>
	
    
    <!-- META -->
    <meta name="description" content="This is the <?php echo $game_name?> page for Parallel Games">
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
        $page_id = -1;
        session_start();
        include 'DT_header.php';
        include 'darioDBConnection.php';
        
        $game_name = $_GET['game'];
        $game_id = getGameId($conn, $game_name);
    ?>
    
    <?php
    
     
        ////////////////////////////////
        //QUERY 1 - Get & set $game_id
        ////////////////////////////////
    
        /*
        $query =    "SELECT game_id ".
                    "FROM parallel_game ".
                    "WHERE game_name = '".$game_name."'";

        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        foreach($stmt as $row) {
            $game_id = $row['game_id'];
        }*/
    
        
    
        ////////////////////////////////
        //QUERY 2 - Get & set $game_subtitle
        ////////////////////////////////
    
        $query =    "SELECT game_subtitle ".
                    "FROM parallel_game ".
                    "WHERE game_id = ".$game_id;

        $stmt = $conn->prepare($query);
        $stmt->execute();

        foreach($stmt as $row) {
            $game_subtitle = $row['game_subtitle'];
        }
    
        ////////////////////////////////
        //QUERY 3 - Get & set $game_download_links
        ////////////////////////////////
    
        $query =    "SELECT game_download_links ".
                    "FROM parallel_game ".
                    "WHERE game_id = ".$game_id;

        $stmt = $conn->prepare($query);
        $stmt->execute();

        foreach($stmt as $row) {
            $game_download_links = $row['game_download_links'];
        }
    
    
        ////////////////////////////////
        //QUERY 4 - Get & set $game_pic_link
        ////////////////////////////////
    
        $query =    "SELECT game_pic_link ".
                    "FROM parallel_game ".
                    "WHERE game_id = ".$game_id;

        $stmt = $conn->prepare($query);
        $stmt->execute();

        foreach($stmt as $row) {
            $game_pic_link = $row['game_pic_link'];
        }
    
    
        ////////////////////////////////
        //QUERY 5 Get & set $game_description
        ////////////////////////////////
    
        $query =    "SELECT game_description ".
                    "FROM parallel_game ".
                    "WHERE game_id = ".$game_id;


        $stmt = $conn->prepare($query);
        $stmt->execute();


        foreach($stmt as $row) {
            $game_description = $row['game_description'];
        }
        
    
        ////////////////////////////////
        //QUERY 6 Get & set $game_features
        ////////////////////////////////
    
        $game_features = array();

        $query =    "SELECT feature_text ".
                    "FROM parallel_feature ".
                    "WHERE feature_game_id = ".$game_id;

        $stmt = $conn->prepare($query);
        $stmt->execute();

        foreach($stmt as $row) {
            $feature = $row['feature_text'];
            array_push($game_features, $feature);
        }
    
    
        ////////////////////////////////
        //QUERY 7 Get & set $game_screenshots
        ////////////////////////////////
    
        $game_screenshots = array();

        $query =    "SELECT screenshot_link ".
                    "FROM parallel_screenshot ".
                    "WHERE screenshot_game_id = ".$game_id;

        $stmt = $conn->prepare($query);
        $stmt->execute();

        foreach($stmt as $row) {
            $screenshot = $row['screenshot_link'];
            array_push($game_screenshots, $screenshot);
        }
    
    
        ////////////////////////////////
        //QUERY 8 Get & set $game_widget
        ////////////////////////////////

        $query =    "SELECT game_widget ".
                    "FROM parallel_game ".
                    "WHERE game_id = ".$game_id;

        $stmt = $conn->prepare($query);
        $stmt->execute();

        foreach($stmt as $row) {
            $game_widget = $row['game_widget'];
        }
     

    
        $conn = null;
    ?>
    
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-1">
    </div>
        
    
           
    <div class="col-sm-10">
           
    <div id = "DT_container" class ="container-fluid">
    
        <div class = "generalContainer">
            
            
            <div class='row'>
                
                <div class='col-sm-4'>
            
                    <h1><?php echo $game_name?></h1>
                </div>
                <div class='col-sm-3'>
                    <?php
                        if (!is_null($game_subtitle)) {
                            echo "<h3>".$game_subtitle."</h3>";
                        }
                    ?>
                </div>
                <div class='col-sm-1'>
                </div>
                <div class='col-sm-4'>
                    <?php
                        if (!is_null($game_download_links)) {
                            //echo "<a class = 'gamePageLink' target='_blank' href = '".$game_download_link."'><span class='glyphicon glyphicon-download-alt'></span> Download from itch.io</a>";
                            echo $game_download_links;
                        }
                    ?>
                </div>
                
            </div>
            
            <br><br>
            
            <div class='row'>
                <div class='col-sm-6'>
                    <?php
                        if (!is_null($game_pic_link)) {
                    ?>
                    <img class = 'img-responsive' src ='<?php echo $game_pic_link?>'>
                    <?php
                         }
                    ?>
                </div>
            
                <div class='col-sm-6'>
                    <?php
                        if (!is_null($game_description)) {
                    ?>
                    <button class = 'btn btn-primary DT_collapse' data-toggle='collapse' data-target='#CLPSE_description'><span class='glyphicon glyphicon-plus'></span></button>
                    <h1 style='display:inline;'>Description</h1>
                    <div id = 'CLPSE_description' class = 'collapse'>
                        <p><?php echo $game_description?></p>
                    </div>
                    <?php
                         }
                    ?>
                </div>
            </div>
            
            <br><br>
            
            <div class='row'>
                <div class='col-sm-6'>
                    <?php
                        if (!is_null($feature)) {
                    ?>
                    <button class = 'btn btn-primary DT_collapse' data-toggle='collapse' data-target='#CLPSE_features'><span class='glyphicon glyphicon-plus'></span></button>
                    <h1 style='display:inline;'>Features</h1>
                    <div id = 'CLPSE_features' class = 'collapse'>
                        <ul>
                        <?php
                            foreach ($game_features as $feature) {
                                echo "<li>".$feature."</li>";
                            }
                        ?>
                        </ul>
                    </div>
                    <?php
                         }
                    ?>
                </div>
                
                <div class='col-sm-6'>
                    <?php
                        if (!is_null($screenshot)) {
                    ?>
                    <button class = 'btn btn-primary DT_collapse' data-toggle='collapse' data-target='#CLPSE_screenshots'><span class='glyphicon glyphicon-plus'></span></button>
                    <h1 style='display:inline;'>Screenshots</h1>
                    <div id = 'CLPSE_screenshots' class = 'collapse'>
                        
                        
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                
                                <?php
                                    $index = 0;
                                    foreach ($game_screenshots as $screenshot) {
                                        if ($index ==0) { 
                                            echo "<li data-target='#myCarousel' data-slide-to='".$index."' class='active'></li>";
                                        }
                                        else {
                                            echo "<li data-target='#myCarousel' data-slide-to='".$index."'></li>";
                                        }
                                        $index++;
                                    }
                                ?>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                
                                <?php
                                    $index = 0;
                                    foreach ($game_screenshots as $screenshot) {
                                        if ($index ==0) { echo "<div class = 'item active'>";} else { echo "<div class = 'item'>";}
                                        echo "<a href='".$screenshot."'><img src='".$screenshot."' alt='Screenshot ".$index."'></a>";
                                        echo "</div>";
                                        $index++;
                                    }
                                ?>
                                
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        
                    </div>
                    <?php
                         }
                    ?>
                </div>
            </div>
            
            <br><br>
            
            <?php
                if (!is_null($game_widget)) {
                    echo $game_widget;
                }
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