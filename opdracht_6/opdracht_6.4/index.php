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

        <input type="number" name="getal" value="prijs">Prijs <br>
        <input type="number" name="korting" value="korting">Korting % <br>
        <input type="submit" name="submit" value="Submit"> <br>
    </form>

    <?php


    if (isset($_POST['submit'])) {
        if (isset($_POST['getal'])) {
            $getal = $_POST['getal'];
            if (isset($_POST['korting'])) {
            $korting = 100 - $_POST['korting'] ;
$answer = ($_POST['getal']) / 100 * $korting;


            echo " Bedrag inclusief $korting% korting: $answer ";
    }
}
    }
    ?>






</body>

</html>