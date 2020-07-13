<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Basic Exercise 4</title>
</head>

<body>
  <?php
  for ($i = 1; $i <51; $i++) {
    echo "<p>for $i: Patrick Freinschlag</p>";
  }
  $i = 1;
  while ($i <51) {
    echo "<p>while $i: Patrick Freinschlag</p>";
    $i++;
  }
  $i = 1;
  do {
    echo "<p>do while $i: Patrick Freinschlag</p>";
    $i++;
  } while ($i <51);
  ?>
</body>

</html>