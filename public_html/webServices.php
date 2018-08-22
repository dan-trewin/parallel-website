<?php

session_start();

// Pulls in passwords and db config info
include 'secrets.php';

// ArchHosting Database Connection
// Create Connection
try {
    $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname . ";port=" . $port, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Include all database queries here
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Error message - if action wasn't provided at all
if (!isset($_GET['action'])) {
    echo "You must provide the GET variable: action <br>";
    echo "Available Parallel Games webServices.php actions are: <br>";
    echo "  getScores <br>";
    echo "  postScore";

    return;
}

// Sets $action equal to the action the user requested
$action = $_GET["action"];

// Error messages - if enough GET variables weren't provided
if ($action == "getScores") {

    $status = 0;

    if (!isset($_GET['gameName'])) {
        echo "You must provide the GET variable: gameName <br>";
        $status = 1;
    }
    if (!isset($_GET['scoreType'])) {
        echo "You must provide the GET variable: scoreType <br>";
        $status = 1;
    }
    if ($status == 1) {return;}
}
if ($action == "postScore") {

    $status = 0;

    if (!isset($_GET['name'])) {
        echo "You must provide the GET variable: name <br>";
        $status = 1;
    }
    if (!isset($_GET['score'])) {
        echo "You must provide the GET variable: score <br>";
        $status = 1;
    }
    if (!isset($_GET['hash'])) {
        echo "You must provide the GET variable: hash <br>";
        $status = 1;
    }
    if ($status == 1) {return;}
}

///////////////////////////////////////////////////
//Actions Logic
///////////////////////////////////////////////////

if ($action == "getScores") {

    $status = 0;

    $gameName = $_GET["gameName"];
    $scoreType = $_GET["scoreType"];

    $scoresData = array();

    if ($scoreType == "Top") {
        $query = "SELECT highscore_name, highscore_score " .
            "FROM parallel_highscore " .
            "JOIN parallel_game ON game_id = highscore_game_id " .
            "WHERE game_name = :gameName " .
            "ORDER BY CAST(highscore_score AS signed) desc";

    } elseif ($scoreType == "Recent") {
        $query = "SELECT highscore_name, highscore_score " .
            "FROM parallel_highscore " .
            "JOIN parallel_game ON game_id = highscore_game_id " .
            "WHERE game_name = :gameName " .
            "ORDER BY highscore_time desc";
    } else {
        $status = 1;
    }

    if ($status == 0) {
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':gameName', $gameName);
        $stmt->execute();

        foreach ($stmt as $row) {

            $score_item = array(
                "name" => $row['highscore_name'],
                "score" => $row['highscore_score'],
            );
            array_push($scoresData, $score_item);
        }

        echo json_encode($scoresData, JSON_PRETTY_PRINT);
    } else {
        echo "Failure - Bad GET Variables";
    }
} elseif ($action == "postScore") {

    $gameId = $_GET['gameId'];
    $name = $_GET['name'];
    $score = $_GET['score'];
    $hash = $_GET['hash'];

    $expected_hash = md5($name . $score . $hashkey);

    if ($expected_hash == $hash) {

        $query = "INSERT INTO parallel_highscore (highscore_name, highscore_score, highscore_game_id, highscore_time) VALUES
            (:name, :score, :gameId, CURRENT_TIMESTAMP())";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':score', $score);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();

        echo "Success - Posted Score";
    } else {
        echo "Failure - Invalid Credentials, Bad Hash";
    }
}
