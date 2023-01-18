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
        <input type=" radio" name="rad1""/>Optellen
        <input type=" radio" name="rad2" " />Aftrekken
        <input type=" radio" name="rad3" " />Vermenigvuldigen
        <input type=" radio" name="rad4" " />Delen <br>
        Getal 2
        <input type=" number" name="getall" " /> <br>
        <button type=" submit" name="submit" ">Berekenen</button>
    </form>

    <?php

    if (isset($_POST['submit'])) {
        if (isset($_POST['rad1'])) {
            $optellen = $_POST['rad1'];

            $answer1 = ($_POST['getal']) + ($_POST['getall']);

            echo " $answer1 ";
        }
        if (isset($_POST['rad2'])) {
            $aftrekken = $_POST['rad2'];
            $answer2 = ($_POST['getal']) - ($_POST['getall']);

            echo " $answer2";
        }

        if (isset($_POST['rad3'])) {
            $multiply = $_POST['rad3'];

            $answer3 = ($_POST['getal']) * ($_POST['getall']);

            echo " $answer3";
        }

        if (isset($_POST['rad4'])) {
            $divide = $_POST['rad4'];

            $answer4 = ($_POST['getal']) / ($_POST['getall']);

            echo " $answer4";
        }
    }
    ?>




</body>

</html>