
<?php
  require_once 'ex10-1.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $query  = "DELETE FROM cats WHERE name='Growler'";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed");
 ?>
