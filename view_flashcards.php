<html>
    <head>
        <meta charset="utf-8">
        <title>SE-321 Group Project </title>
        <link rel="stylesheet" href="css/default.css" id="theme-stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <h1 class="text-header">Flashcards</h1>
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


    $sql = "SELECT * FROM flashcards";

    if (!($result = $conn->query($sql))) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    // output database query

    if ($result->num_rows > 0) {
        echo '<table style="width:100%">';
        echo '<tr>';

        // Table column names
        echo '<th>Subject</th>';
        echo '<th>Term</th>';
        echo '<th>Definition</th>';
        echo '<th></th>';
        echo '</tr>';

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["subject"] . '</td>';
            echo '<td>' . $row["term"] . '</td>';
            echo '<td>' . $row["definition"] . '</td>';
            echo '<td><button class="edit" onclick="storeIdAndRedirect(' . $row["ID"] . ')">Edit</button></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "nothing to show";
    }
    ?>
    <br>
    <div class="nav">
      <button class="nav-text" onclick="window.location = 'index.php'">Back</button>
      <button class="nav-text" onclick="window.location = 'create_flashcards.php'">New</button>
    </div>
</html>

<script>
    function storeIdAndRedirect(id) {
        document.cookie = "id=" + id;
        document.location.href = "edit_flashcard.php";
    }
</script>
