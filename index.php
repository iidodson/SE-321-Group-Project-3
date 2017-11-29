 <?php
$servername = "fdb4.awardspace.net";
$username = "2534580_notetakerdb";
$password = "Password123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to database successfully";
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
    <a href="create_notes.html">
      <div class="container container-high">
        <h2 class="title title-high">Create Notes</h2>
      </div>
    </a>
    <a href="Terms_Page.html">
      <div class="container container-low">
        <h2 class="title title-low">Create Flashcards</h2>
      </div>
    </a>
    <a href="resetDatabase.php">
	 <button type="button">Reset Database</button> 
    </a>
  </body>
</html>
