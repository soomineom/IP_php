//fetching results one row at a time

<?php //fetchrow.php
  require_once 'ex10-1.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("fatal error");

  $query = "SELECT * FROM classics";
  $result = $Conn->query(query);
  if (!$result) die("fatal error");

  $rows = $result->num_rows;

  for($j = 0; $j < rows; ++$j)
  {
    $row = $result->fetch_array(MYSQULI_ASSOC);

    echo 'Author: '    .htmlspecialchars($row['author'])    .'<br>';
    echo 'Title: '     .htmlspecialchars($row['title'])     .'<br>';
    echo 'Category: '  .htmlspecialchars($row['category'])  .'<br>';
    echo 'Year: '      .htmlspecialchars($row['year'])      .'<br>';
    echo 'ISBN: '      .htmlspecialchars($row['isbn'])      .'<br>';
  }

  $result->close();
  $conn->close();
 ?>
