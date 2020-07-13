<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Basic Exercise 6</title>
</head>

<body>
  <?php
  $characters = array(
    array(
      "name" => "Mickey Mouse",
      "firstAppearance" => 1928,
      "creator" => "Walt Disney"
    ),
    array(
      "name" => "Super Mario",
      "firstAppearance" => 1985,
      "creator" => "Shigeru Miyamoto"
    ),
    array(
      "name" => "Goku",
      "firstAppearance" => 1984,
      "creator" => "Akira Toriyama"
    ),
    array(
      "name" => "Pokemon",
      "firstAppearance" => 1996,
      "creator" => "Satoshi Tajiri"
    )
  );
  foreach ($characters as $character) {
    echo "<p>" . $character["name"] . "</p>";
  };
  ?>
</body>

</html>