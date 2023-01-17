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
    Getal 1
<input type="number" name="getal1" /> <br>
<input type="radio" name="rad1"/>Optellen
<input type="radio" name="rad2"/>Aftrekken
<input type="radio" name="rad3"/>Vermenigvuldigen
<input type="radio" name="rad4"/>Delen <br>
Getal 2
<input type="number" name="getal2"/> <br>
<button type="submit" name="berekenen">Berekenen</button>
</form>

<?php

if(isset($_POST['berekenen'])){

$value1 = $_POST['getal1'];
$value2 = $_POST['getal2'];
$plus =  $value1 + $value2;
$min =  $value1 - $value2;
$keer = $value1 * $value2;
$gedeeld = $value1 / $value2;

echo  "$value1" ;

}



?>




</body>
</html>