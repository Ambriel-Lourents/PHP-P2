<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

<?php

$currencies = array(
  "USD" => 1.22,
  "GBP" => 0.86,
  "JPY" => 131.10,
  "NAF/NAG" => 0.52,
);

echo "<table border='10'>";
echo "<tr><th>Euros</th>";
foreach ($currencies as $currency => $exchange_rate) {
  echo "<th>$currency</th>";
}
echo "</tr>";

for ($amount = 1; $amount <= 10; $amount++) {
  echo "<tr><td>$amount</td>";
  foreach ($currencies as $exchange_rate) {
    $converted_amount = $amount * $exchange_rate;
    echo "<td>$converted_amount</td>";
  }
  echo "</tr>";
}

echo "</table>";

?>





<div> <a href="index.html">Terug</a></div>
</body>
</html>