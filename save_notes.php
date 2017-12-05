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
$title = $_GET["title"];
$note = $_GET["note"];

$sql = "INSERT INTO notes (subject, title, note) VALUES ('";
$sql .= $subject . "', '";
$sql .= $title . "', '";
$sql .= $note . "');";

if ($conn->query($sql) === TRUE) {
    echo "Note was added.<br>";
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
    <br>
    <button class="nav nav-text--one" onclick="window.location = 'view_notes.php'">Return</button>

</html>
