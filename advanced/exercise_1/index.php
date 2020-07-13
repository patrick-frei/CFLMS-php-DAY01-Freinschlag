<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Exercise 6</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <?php
  function convertToCelsius($fahrenheit)
  {
    return number_format(($fahrenheit - 32) * 5 / 9, 1);
  }
  switch (true) {
    case !isset($_GET['fahrenheit']) || !is_numeric($_GET['fahrenheit']):
      $result = "No result available!";
      $image = "no-result.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) < 0:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is frosty!";
      $image = "frosty.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 0 && convertToCelsius($_GET['fahrenheit']) < 6:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is very cold!";
      $image = "very-cold.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 6 && convertToCelsius($_GET['fahrenheit']) < 11:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is cold!";
      $image = "cold.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 11 && convertToCelsius($_GET['fahrenheit']) < 16:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is pleasant!";
      $image = "pleasant.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 16 && convertToCelsius($_GET['fahrenheit']) < 21:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is warm!";
      $image = "warm.jpg";
      break;
    case convertToCelsius($_GET['fahrenheit']) >= 21:
      $result = convertToCelsius($_GET['fahrenheit']) . "°C is hot!";
      $image = "hot.jpg";
      break;
  }
  ?>
  <div class="container">
    <h1 class="mt-2">Convert Fahrenheit into Celsius</h1>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Fahrenheit</label>
        <?php
        if (!isset($_GET['fahrenheit']) || !is_numeric($_GET['fahrenheit']))
          echo "<input type='number' step='0.1' class='form-control' name='fahrenheit'>";
        else
          echo "<input type='number' step='0.1' class='form-control' name='fahrenheit' value='" . $_GET['fahrenheit'] . "'>";
        ?>
      </div>
      <button type="submit" class="btn btn-primary">Convert</button>
    </form>
    <div class="card mt-3">
      <?php
      echo "<img src='img/" . $image . "' class='card-img-top'>";
      ?>
      <div class="card-body">
        <h5 class="card-title mb-0">
          <?php
          echo $result;
          ?>
        </h5>
      </div>
    </div>
  </div>
</body>

</html>