<?php
  require_once 'ex10-1.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("fatal error");
 ?>
