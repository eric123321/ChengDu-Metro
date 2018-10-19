<?php

// 1. open database connection
    $dbhost = "localhost";
    $dbuser = "li-jun";
    $dbpass = "iS3T6RDp29c7";
    $dbname = "2201613130207";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok 
    if (mysqli_connect_errno()) {
        die("Database connection failed: " .
        mysqli_connect_error() .
        "(" . mysqli_connect_error() . ")"
        );
}

?>