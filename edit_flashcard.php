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


$sql = 'SELECT * FROM flashcards WHERE ID = ' . $_COOKIE[id];
if (!($result = $conn->query($sql))) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

if ($row = $result->fetch_assoc()) {
    setcookie('subject', $row["subject"]);
    setcookie('term', $row["term"]);
    setcookie('definition', $row["definition"]);
}
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
        <div>
            <form action="update_flashcard.php" method="get">
                <table>
                    <tr><td>Subject:</td> <td><input type="text" name="subject" value=<?php echo $_COOKIE['subject']; ?>></td></tr>
                    <tr><td>Term:</td> <td><input type="text" name="term" value=<?php echo $_COOKIE['term']; ?>></td></tr>
                    <tr><td>Definition:</td> <td><input type="text" name="definition" value=<?php echo $_COOKIE['definition']; ?>></td></tr>
                    <tr>
                        <td>
                            <button onclick="window.location = 'view_flashcards.php';return false;">Cancel</button>
                        </td>
                        <td><input type="submit" value='Done'></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>