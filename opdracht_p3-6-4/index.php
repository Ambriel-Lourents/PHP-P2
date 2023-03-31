<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form method="post">
    <label for="radius">Berekekenen</label>
    <input type="number" id="radius" name="radius" value="<?php echo htmlspecialchars($radius); ?>">
    <button type="submit">Calculate</button>
  </form>

  
</body>
</html>
<?php

define('PI', 3.14159);

function calculate($radius) {
  $circumference = 2 * PI * $radius;
  return round($circumference, 1);
}

function calculateCircle($radius) {
  $area = PI * pow($radius, 2);
  return round($area, 1);
}

$radius = '';
$circumference = '';
$area = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $radius = $_POST['radius'];
  $circumference = calculate($radius);
  $area = calculateCircle($radius);
}
echo "De omtrek van een cirkelmet straal $radius is: $circumference <br> De oppervlakte van een cirkel met straal $radius is: $area" ; 


?>

