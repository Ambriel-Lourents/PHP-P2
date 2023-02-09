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
        Type in je leeftijd
        <input type="text" name="leeftijd" id="age">
        <input type="submit" value="Verzenden" name="submit"> <br>
        <?php
        if (isset($_POST['submit'])) {
            $age =  ($_POST['leeftijd']);
            if ($age > 15) {
                echo "Je mag de praktijkexamen voor je scooterrijbewijs doen.";
            } elseif ($age < 16) {
                echo "Je mag helaas de praktijkexamen niet doen.";
            }
        }
        ?> <br><br><br>
        Type in je leeftijd <br><br>
        <input type="text" name="leeftijdd" id="age"><br>
        Heb je, je stempas al ontvangen? <br>
        <input type="radio" name="radio" value="ja" /> Ja
        <input type="radio" name="radio" value="nee" /> Nee
        <input type="submit" value="Verzenden" name="submitt" /> <br>
        <?php


 if (isset($_POST['submitt'])) {
        $age =  ($_POST['leeftijdd']);
        $voting_pass = $_POST['radio'];

        if ($age >= 18) {
            if ($voting_pass == "ja" ) {
                echo "Je mag stemmen, want je hebt een stempas!";
            } else {
                 echo "Je mag niet stemmen, want je hebt geen stempas!";
            }
        } else{
                echo "Je mag niet stemmen want je bent te jong!";
            }
        }
        

        ?>
    </form> <br>



    <div> <a href="index.html">Terug</a></div>


</body>

</html>