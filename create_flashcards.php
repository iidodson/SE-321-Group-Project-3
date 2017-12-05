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
            <form action="save_flashcards.php" method="get">
              <div class="form-spacing">
                <table class="table">
                    <tr class="table-container" ><td class="table-td">Subject:</td><td><input class="input" type="text" name="subject"></td></tr>
                    <tr class="table-container" ><td>Term:</td> <td><input class="input"type="text" name="term"></td></tr>
                    <tr class="table-container" ><td>Definition:</td> <td><input class="input" type="text" name="definition"></td></tr>
                </table>
              </div>
                <div class="nav">
                  <button class="nav-text" onclick="window.location = 'view_flashcards.php';return false;">Cancel</button>
                  <input class="nav-text" type="submit" value='Done'></td>
                </div>
            </form>
        </div>
    </body>
</html>
