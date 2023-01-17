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
        <input type="radio" name="rad1" />Optellen
        <input type="radio" name="rad2" />Aftrekken
        <input type="radio" name="rad3" />Vermenigvuldigen
        <input type="radio" name="rad4" />Delen <br>
        Getal 2
        <input type="number" name="getal2" /> <br>
        <button type="submit" name="berekenen">Berekenen</button>
    </form>

    <?php

    if (isset($_POST['berekenen'])) {
        if (isset($_POST['rad1'])) {
            $_optellen = $_POST['rad1'];
            if (isset($_POST['rad2'])) {
            $_aftrekken = $_POST['rad2'];
            if (isset($_POST['rad3'])) {
                $_Vermenigvuldigen = $_POST['rad3'];
                if (isset($_POST['rad4'])) {
                    $_delen = $_POST['rad4'];
                    if (isset($_POST['getal1'])) {
                        $_value1 = $_POST['getal1'];
                        if (isset($_POST['getal2'])) {
                            $_value2 = $_POST['getal2'];


        if (isset($_POST['rad1'])) {
            $answer = ($getal1 + $getal2);

            if (isset($_POST['rad2'])) {
                $answer =  $getal1 - $getal2;

                if (isset($_POST['rad3'])) {
                    $answer = ($_POST['$getal1']) * ($_POST['$getal2']);


                    if (isset($_POST['rad4'])) {
                        $answer =   ($_POST['$getal1'] / $getal2);



                        echo  "$answer";
                    }
                }
            }
        }
    }
                    }}}}}}





    ?>




</body>

</html>