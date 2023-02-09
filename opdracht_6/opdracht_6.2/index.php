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
        <input type="number" name="getal" "/> <br>
        <input type="radio" name="rad" value="Optellen"/>Optellen
        <input type="radio" name="rad" value="Aftrekken" " />Aftrekken
        <input type="radio" name="rad" value="multiply" " />Vermenigvuldigen
        <input type="radio" name="rad" value="divide" " />Delen <br>
        Getal 2
        <input type="number" name="getall" " /> <br>
        <button type="submit" name="submit" ">Berekenen</button>
    </form>

    <?php
  
  if (isset($_POST['submit'])) {
  $rad = ($_POST['rad']);
$value1 = ($_POST['getal']);
$value2 = ($_POST['getall']);
$answer;


if ($rad == "Optellen") {
    $answer = $value1 + $value2;
}
if ($rad == "Aftrekken") {
    $answer = $value1 - $value2;
}
if ($rad == "multiply") {
    $answer = $value1 * $value2;
}
if ($rad == "divide") {
    $answer = $value1 / $value2;
}

 echo " $answer";
}
  
?>





</body>

</html>