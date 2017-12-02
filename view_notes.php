<html>
    <head>
        <meta charset="utf-8">
        <title>SE-321 Group Project </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/default.css" id="theme-stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <button onclick="window.location = 'create_notes.php'">New</button>
    <button onclick="window.location = 'index.php'">Return</button><br>
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
        echo '</tr>';

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["subject"] . '</td>';
            echo '<td>' . $row["title"] . '</td>';
            echo '<td>' . $row["note"] . '</td>';
            echo '<td><button onclick="storeIdAndRedirect(' . $row["ID"] . ')">Edit</button></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "nothing to show";
    }
    ?>
</html>

<script>
    function storeIdAndRedirect(id) {
        document.cookie = "id=" + id;
        document.location.href = "edit_note.php";
    }
</script>