




<?php
    /*
    //UWEC Database
    $server = "dario.cs.uwec.edu";
    $username = "TREWINDP5336";
    $password = "LTFO2NXN";
    $dbName = $username;
    $port = "3306";
    */
    /*
    //db4free Databse
    $server = "db4free.net:3307/poseidon";
    $username = "lavaflyer";
    $password = "dB1218iAyF!4f";
    $dbName = "poseidon";
    $port = "3307";
    */
    
    //GoDaddy Database
    $server = "107.180.2.65";
    $username = "DanTree18";
    $password = "MM@?R5N[ix@w";
    $dbName = "ares_17";
    $port = "3306";
    
    try {
        $conn = new PDO("mysql:host=".$server.";dbname=".$dbName.";port=".$port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        //Include all database queries here
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    //$conn = null;

    
    
   

    function getGameId($conn, $game_name) {
        
        
        ////////////////////////////////
        //QUERY 1 - Get & set $game_id
        ////////////////////////////////
    
        $query =    "SELECT game_id ".
                    "FROM parallel_game ".
                    "WHERE game_name = '".$game_name."'";
        
        //echo $query;
        //echo "<br>";

        $stmt = $conn->prepare($query);
        $stmt->execute();
        
    
        
        foreach($stmt as $row) {
            $game_id = $row['game_id'];
        }
        
        //echo "Result: ".$game_id;
        
        return $game_id;
        
        
    }
    
?>


