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


$sql = 'SELECT * FROM notes WHERE ID = ' . $_COOKIE[id];
if (!($result = $conn->query($sql))) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//echo $sql;
if ($row = $result->fetch_assoc()) {
    setcookie('subject', $row["subject"]);
    setcookie('title', $row["title"]);
    setcookie('note', $row["note"]);
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
          <h1 class="text-header">Notes</h1>
            <form action="update_note.php" method="get">
              <div class="form-spacing" >
                <table class="table">
                    <tr class="table-container" ><td class="table-td">Subject:</td> <td><input class="input" type="text" name="subject" value=<?php echo $_COOKIE['subject']; ?>></td></tr>
                    <tr class="table-container" ><td>Title:</td> <td><input class="input" type="text" name="title" value=<?php echo $_COOKIE['title']; ?>></td></tr>
                </table>
              </div>
                <textarea class="form-textarea" name="note"><?php echo $_COOKIE['note']; ?></textarea>
                <div class="nav">
                  <button class="nav-text" onclick="window.location = 'view_notes.php';return false;">Cancel</button>
                  <input class="nav-text" type="submit" value='Done'></td>
                </div>
            </form>
        </div>
    </body>
</html>
