<?php

    session_start();

    include 'darioDBConnection.php';


    if ($_POST["name"] != "" && $_POST["score"] != "") {
        
        
        $query =    "INSERT INTO parallel_highscore (highscore_name, highscore_score, highscore_game_id, highscore_time) VALUES
                    (:name, :score, 4, CURRENT_TIMESTAMP())";
          

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $_POST["name"]);
        $stmt->bindParam(":score", $_POST["score"]);
        $stmt->execute();
        
    }


?>