<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Basic Exercise 5</title>
</head>

<body>
  <?php
  $numbers = array(1, 4, 9, 16, 25, 36, 49, 64, 81, 100);
  foreach ($numbers as $number) {
    echo "<p>$number</p>";
  };
  ?>
</body>

</html>