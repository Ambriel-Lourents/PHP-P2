<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style type="text/css">
table {
border-collapse:collapse;
border: 1px solid black;
}
td {
    border: 1px solid black;
    width:25px;
    text-align:center;
}
</style>



</head>
<body>
    

<?php

$number = 7;
echo "<table border='1>";
for ($i = 1; $i <= 10; $i++){
echo "<tr>";
echo "<td>$i</td>";
echo "<td> x </td>";
echo "<td>$number</td>";
echo "<td>=</td>";
echo "<td>" . ($i * $number) . "</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>