<?php
$servername = "fdb4.awardspace.net";
$username = "2534580_notetakerdb";
$password = "Password123";
$dbname = "2534580_notetakerdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to database successfully\n";

$conn->query("DROP DATABASE");

echo "Cleared Database\n";

$conn->query("CREATE TABLE notes (subject varchar(20), 
				name varchar(20), 
				notes varchar(200))");
$conn->query("CREATE TABLE flash_cards (subject varchar(20), 
					term varchar(20), 
					definition varchar(50))");

echo "Created tables\nDone!"
?> 
<html>
    <a href="index.php">
	 <button type="button">Return</button> 
    </a>
</html>