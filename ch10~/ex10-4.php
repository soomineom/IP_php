<?php
  require_once 'ex10-1.php';
  $connection = new mysquli($hn, $un, $pw, $db);

  if ($connection->connect_error) die("fatal error");

  $query = "SELECT * FROM classics";
  $result = $connection->query($query);

  if(!$result) die("Fatal error");

  $rows = $result-num_rows;

  for($j=0; $j<$rows; ++$j)
  {
    $result->data_seek($j);
    echo 'Author: '  .htmlspecialchars($result->fetch_asooc['author'])  .'<br>';
    $result->data_seek($j);
    echo 'Title: '  .htmlspecialchars($result->fetch_asooc['title'])  .'<br>';
    $result->data_seek($j);
    echo 'Year: '  .htmlspecialchars($result->fetch_asooc['year'])  .'<br>';
    $result->data_seek($j);
    echo 'ISBN: '  .htmlspecialchars($result->fetch_asooc['isbn'])  .'<br>';
  }

  $result->close();
  $connection->close();
 ?>
