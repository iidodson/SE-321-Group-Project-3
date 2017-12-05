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
            <form action="save_notes.php" method="get">
              <div class="form-spacing" >
                <table class="table">
                    <tr class="table-container" ><td class="table-td">Subject:</td><td><input  class="input" type="text" name="subject"></td></tr>
                    <tr class="table-container" ><td>Title:</td><td><input class="input" type="text" name="title"></td></tr>
                </table>
              </div>
                    <textarea class="form-textarea" name="note"></textarea>
                    <div class="nav">
                      <button class="nav-text" onclick="window.location = 'view_notes.php';return false;">Cancel</button>
                      <input class="nav-text" type="submit" value='Done'></td>
                    </div>
            </form>
        </div>
    </body>
</html>
