<?php
$dbname = "2534580_notetakerdb";
$servername = "fdb4.awardspace.net";
$username = "2534580_notetakerdb";
$password = "Password123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Failed database connection";
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?> 
<html>
    <head>
        <meta charset="utf-8">
        <title>SE-321 Group Project </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/default.css" id="theme-stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
        <button onclick="window.location = 'view_notes.php'">View Notes</button>
        <button onclick="window.location = 'view_flashcards.php'">View Flashcards</button>
    </body>
</html>
