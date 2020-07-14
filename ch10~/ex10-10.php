
<?php
  require_once 'ex10-1.php'; //login.php
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $query  = "INSERT INTO cats VALUES(NULL, 'lion', 'Leo', '4')";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed");
 ?>
