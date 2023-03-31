
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form method="post">
    <label for="length"> lengte van een remspoor (in meters) :</label>
    <input type="number" id="length" name="length" value="" required>
    <br>
    <button type="submit">berekenen</button>
  </form>
</body>
</html>

<?php

function calculateSpeed($length, $deceleration = 5.5) {
  $speed = sqrt(2 * $deceleration * $length);
  $speed_kph = ($speed * 3600) / 1000;
  return round($speed_kph);
}

$length = '';
$deceleration = 5.5;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $length = $_POST['length'];
  $speed = calculateSpeed($length, $deceleration);
  echo "Snelheid van een auto met remspoor van $length is: $speed km/h.";
}

?>