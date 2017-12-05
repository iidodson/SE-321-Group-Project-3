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
        <link rel="stylesheet" href="css/default.css" id="theme-stylesheet">
        <link rel="stylesheet" href="css/TermsStyle.css" id="theme-stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1 class="text-header">Flashcards</h1>
            <form action="update_flashcard.php" method="get">
              <div class="form-spacing">
                <table class="table">
                    <tr class="table-container" ><td class="table-td">Subject:</td> <td><input class="input" type="text" name="subject" value=<?php echo $_COOKIE['subject']; ?>></td></tr>
                    <tr class="table-container" ><td>Term:</td> <td><input class="input" type="text" name="term" value=<?php echo $_COOKIE['term']; ?>></td></tr>
                    <tr class="table-container" ><td>Definition:</td> <td><input class="input" type="text" name="definition" value=<?php echo $_COOKIE['definition']; ?>></td></tr>
                  </table>
              </div>
                  <div class="nav">
                    <button class="nav-text" onclick="window.location = 'view_flashcards.php';return false;">Cancel</button>
                    <input class="nav-text" type="submit" value='Done'>
                  </div>
            </form>
        </div>
    </body>
</html>
