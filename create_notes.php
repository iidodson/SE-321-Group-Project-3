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
            <form action="save_notes.php" method="get">
                <table>
                    <tr><td>Subject:</td><td><input type="text" name="subject"></td></tr>
                    <tr><td>Title:</td><td><input type="text" name="title"></td></tr>
                    <tr><td></td><td><textarea class="form-textarea" name="note"></textarea></td></tr>
                    <tr>
                        <td>
                            <button onclick="window.location = 'view_notes.php';return false;">Cancel</button>
                        </td>
                        <td><input type="submit" value='Done'></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
