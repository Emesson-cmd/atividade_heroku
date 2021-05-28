<?php
    $servername = " sqlXXX.epizy.com";
    $username = "epiz_28731693";
    $password = "nl801mg7iPTbM";
    // $dbname = "epiz_28731693_escola";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?> 