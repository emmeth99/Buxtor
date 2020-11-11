
<?php

    $servername = "utbweb.its.ltu.se";
    $username = "991001";
    $password = "blåfisken";
    $db = "db991001"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        echo "det gick inteee :(";
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected successfully";

?>