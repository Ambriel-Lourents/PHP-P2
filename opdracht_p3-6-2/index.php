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
session_start();

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

echo "Deze pagina heb je al : " . $_SESSION['count'] . " keer bekeken voordat je de internet broswer hebt afgesloten <br>";

if (!isset($_COOKIE['count'])) {
    setcookie('count', 1, time() + (86400 * 30), "/"); // 86400 = 1 day
  } else {
    setcookie('count', ++$_COOKIE['count'], time() + (86400 * 30), "/");
  }
  
  echo "In totaal heb je deze pagina al : " . $_COOKIE['count'] . " keer bekeken";
?>


</body>
</html>