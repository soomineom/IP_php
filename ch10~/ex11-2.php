
<?php
  if (isset($_POST['name'])) $name=$_POST['name'];
  else $name = "(Noe entered)";

  echo <<<_END
  <html>
    <head>
      <title>Form test</title>
    </head>
    <body>
    <form method="post" action="ex11-1.php">
      What is your name?
      <input type="text" name="name">
      <input type="submit">
    </form>
    </body>
  </html>
_END;
 ?>
