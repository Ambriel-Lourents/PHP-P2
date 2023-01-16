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

date_default_timezone_set ("Europe/Amsterdam");

$today = date (" l j F Y");
echo "Het is vandaag: $today.";

echo "<br>";

$jaardag = date("z");
echo "Vandaag is het de $jaardag e  dag van het jaar.";

echo "<br>";

$week = date("l");
$day = date("w");
echo "$week is de $day e dag van de week.";

echo "<br>";

$maand = date("F");
$maanddagen = date("t");
echo "De maand $maand heeft in totaal $maanddagen dagen.";

echo "<br>";

$jaar = date("Y");
$schrikkel = date("L");

if ("$schrikkel < 1"){
echo "Het jaar $jaar is geen schrikkeljaar.";
}

elseif ("$schrikkel < 0"){
echo"Het jaar $jaar is een schrikkeljaar";
}
?>


</body>
</html>