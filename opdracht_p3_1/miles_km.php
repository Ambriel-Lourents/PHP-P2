<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="4">
    <tr>
      <th>Miles</th>
      <th>Kilometers</th>
    </tr>




<?php
    for ($miles = 1; $miles <= 10; $miles++) {
      $kilometers = $miles * 1.609;
      echo "<tr>";
      echo "<td>$miles</td>";
      echo "<td>$kilometers</td>";
      echo "</tr>";
    }
    ?>





</body>
</html>