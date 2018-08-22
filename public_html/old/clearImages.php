<?php


    include 'databaseConn.php';

    echo $_POST['validation'];

    if ($_POST['validation'] == "@82&^TYFQ") {
        
        $query =    "delete from market_image";

        $stmt = $conn->prepare($query);
        $stmt->execute();
        

        array_map('unlink', glob("uploads/*"));
        
        $message = "Successfully cleared all images from site.";
    }
    else {
        
        $message = "Failed clearing images from site.";
    }
    

    echo $message;

    $url = strtok($_SERVER["HTTP_REFERER"],'?');

    echo $url;
    header('Location: ' . $url . "?message=" . $message);

?>