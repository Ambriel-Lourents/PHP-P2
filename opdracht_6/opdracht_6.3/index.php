<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>




<form method="post">
    <input type="radio" name="color" value="red"> Red
    <input type="radio" name="color" value="green"> Green
    <input type="radio" name="color" value="blue"> Blue
    <input type="radio" name="color" value="pink"> Pink
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
        echo "<body style='background-color: $color;'>";
    }
}
?>









</body>

</html>