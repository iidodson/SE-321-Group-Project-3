<html>
    <head>
        <meta charset="utf-8">
        <title>SE-321 Group Project </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/default.css" id="theme-stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <h1 class="text-header">Notes</h1>
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


    $sql = "SELECT * FROM notes";
    $result = $conn->query($sql);
    $conn->close();



    // output database query

    if ($result->num_rows > 0) {
        echo '<table style="width:100%">';
        echo '<tr>';
        // Table column names
        echo '<th>Subject</th>';
        echo '<th>Title</th>';
        echo '<th>Preview</th>';
        echo '<th></th>';
        echo '</tr>';

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["subject"] . '</td>';
            echo '<td>' . $row["title"] . '</td>';

            // truncate notes to only preview
            $note = $row["note"];
            echo '<td>' . truncate($note) . '</td>';

            echo '<td><button class="edit" onclick="storeIdAndRedirect(' . $row["ID"] . ')">Edit</button></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "nothing to show";
    }

    function truncate($string, $length = 20, $append = "&hellip;") {
        $string = trim($string);

        if (strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = explode("\n", $string, 2);
            $string = $string[0] . $append;
        }

        return $string;
    }
    ?>

    <br>
    <div class="nav">
        <button class="nav-text" onclick="window.location = 'index.php'">Back</button><br>
        <button class="nav-text" onclick="window.location = 'create_notes.php'">New</button>
    </div>
</html>

<script>
    function storeIdAndRedirect(id) {
        document.cookie = "id=" + id;
        document.location.href = "edit_note.php";
    }
</script>
