<!DOCTYPE html>
<html>
    
    
<head>
	
	<title>Parallel Games | Highscores</title>
	
    
    <!-- META -->
    <meta name="description" content="This is the highscores page for Parallel Games">
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
        $page_id = 4;
        session_start();
        include 'DT_header.php';
        include 'darioDBConnection.php';
    
        if (is_null($_GET['game'])) {
            $game_name = 'Wraith';
        }
        else {
            $game_name = $_GET['game'];
        }

        if (is_null($_GET['type'])) {
            $highscore_type = 'Top';
        }
        else {
            $highscore_type = $_GET['type'];
        }

        $game_id = getGameId($conn, $game_name);
    ?>
    
    <?php
    
        ////////////////////////////////
        //QUERY 1 Get & set $highscore_names and $highscore_scores
        ////////////////////////////////
    
        $highscore_names = array();
        $highscore_scores = array();

        if ($highscore_type == "Top") {
        $query =    "SELECT highscore_name, highscore_score ".
                    "FROM parallel_highscore ".
                    "WHERE highscore_game_id = ".$game_id." ".
                    "ORDER BY CAST(highscore_score AS signed) desc";
        }
        else {
        $query =    "SELECT highscore_name, highscore_score ".
                    "FROM parallel_highscore ".
                    "WHERE highscore_game_id = ".$game_id." ".
                    "ORDER BY highscore_time desc";
        }

        $stmt = $conn->prepare($query);
        $stmt->execute();

        foreach($stmt as $row) {
            $name = $row['highscore_name'];
            array_push($highscore_names, $name);
            
            $score = $row['highscore_score'];
            array_push($highscore_scores, $score);
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
            
            
            <h1>Highscores</h1>
            
            <div class="row">
                
                <div class="col-sm-4">
                    <!--<form name = "highscoresForm" method = "post">-->
                    <div id = "formContainer">
                        <h3>Game</h3>
                        <br>
                        
                        <table class = "table">
                            <tr>
                                <td><label onclick="refreshHighscores()"><input type="radio" <?php if ($game_name=="Wraith"){ echo "checked='checked'";} ?> name="gameRadio" value="Wraith"> <a class = "gamePageLink">Wraith</a></label></td>

                            </tr>
                            <tr>
                                <td><label onclick="refreshHighscores()"><input type="radio" <?php if ($game_name=="Ridiculous History"){ echo "checked='checked'";} ?> name="gameRadio" value="Ridiculous History"> <a class = "gamePageLink">Ridiculous History</a></label></td>
                            </tr>
                            <tr>
                                <td><label onclick="refreshHighscores()"><input type="radio" <?php if ($game_name=="Block Ooo"){ echo "checked='checked'";} ?> name="gameRadio" value="Block Ooo"> <a class = "gamePageLink">Block Ooo</a></label></td>
                            </tr>
                        </table>   
                        
                    </div>
                    
                    <br>
                    
                    <div id = "formContainer">
                        <h3>Type</h3>
                        <br>
                        
                        <table class = "table">
                            <tr>
                                <td><label onclick="refreshHighscores()"><input type="radio" <?php if ($highscore_type=="Top"){ echo "checked='checked'";} ?> name="sortRadio" value="Top"> <a class = "gamePageLink">Top</a></label></td>

                            </tr>
                            <tr>
                                <td><label onclick="refreshHighscores()"><input type="radio" <?php if ($highscore_type=="Recent"){ echo "checked='checked'";} ?> name="sortRadio" value="Recent"> <a class = "gamePageLink">Recent</a></label></td>
                            </tr>
                            
                        </table>   
                        
                    </div>
                    <!--</form>-->
                </div>
                
               
                
                <div class="col-sm-8">
                    <div id = "formContainer">

                        <h3 style = "font-size: 2.5em;"><?php echo $game_name.' - '.$highscore_type?></h3>
                        <br>
                        <table class = "table">

                            <?php

                                if (!is_null($name)) {
                                    for ($i = 0; $i < count($highscore_names); $i++) {
                                        echo "<tr>";
                                            echo "<td><h1>".($i+1)."</h1></td>";
                                            echo "<td><h1>".$highscore_names[$i]."</h1></td>";
                                            echo "<td><h1>".$highscore_scores[$i]."</h1></td>";
                                        echo "</tr>";
                                    }
                                }
                                else {
                                    echo "<h1>Highscores not currently supported for this game.</h1>";
                                }
                            ?>


                        </table>

                    </div>
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