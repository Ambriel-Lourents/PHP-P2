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

function Triangle($a, $b, $c) {
  if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    return true;
  } else {
    return false;
  }
}

$a = 5;
$b = 7;
$c = 10;

if (Triangle($a, $b, $c)) {
  echo " Zijde 1 = $a  <br>";
  echo " Zijde 2 = $b  <br>";
  echo " Zijde 3 = $c  <br> ";
  echo "Kan wel!";
} else {
  echo " Zijde 1 = $a  <br>";
  echo " Zijde 2 = $b  <br>";
  echo " Zijde 3 = $c  <br>";
  echo "Kan niet! <br>";
}

?>











<div> <a href="index.html">Terug</a></div>
</body>
</html>