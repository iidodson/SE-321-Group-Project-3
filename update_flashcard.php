<?php
$dbname = "2534580_notetakerdb";
$servername = "fdb4.awardspace.net";
$username = "2534580_notetakerdb";
$password = "Password123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$subject = $_GET["subject"];
$term = $_GET["term"];
$definition = $_GET["definition"];

$sql = "UPDATE flashcards SET subject = '";
$sql .= $subject . "', term = '";
$sql .= $term . "', definition = '";
$sql .= $definition . "' WHERE ID = " . $_COOKIE[id] . ";";

//check if statement was successfully executed on database
if ($conn->query($sql) === TRUE) {
    echo "Flashcard was updated.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
    <button onclick="window.location = 'view_flashcards.php'">Return</button>
</html>