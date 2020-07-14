//renaming Charly -> Charylie

<?php
  require_once 'ex10-1.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $query  = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed");

?> 
