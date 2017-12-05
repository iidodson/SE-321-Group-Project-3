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
        <link rel="stylesheet" href="css/default.css" id="theme-stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
      <div class="buttons">
        <button class="buttons-large buttons-colors text-title" onclick="window.location = 'view_notes.php'">Notes</button>
        <button class="buttons-large buttons-colors2 text-title"onclick="window.location = 'view_flashcards.php'">Flashcards</button>
      </div>
    </body>
</html>
