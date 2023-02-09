<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    Vul in een getal: <input type="text" name="number"><br><br>
    <input type="submit" value="Submit" name="submit">
  </form>



<?php
if (isset($_POST['submit'])) {
  $number = $_POST["number"];
  $number2 = 1;
  for ($i = 1; $i <= $number; $i++) {
    $number2 *= $i;
  }
  echo "De faculteit van $number is $number2";
}

?>




</body>
</html>