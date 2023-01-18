<html>

<head>

    <title>BTW BEREKENEN</title>

</head>

<body>





    <form method="post" action="">

        <input type="number" name="input" />Bedrag exclusief BTW<br>
        <input type="radio" name="percent1" /> Laag, 9%<br>
        <input type="radio" name="percent2" />Hoog, 21%<br>
        <input type="submit" name="submit" /><br>

    </form>

    <?php

    if (isset($_POST['submit'])) {
        if (isset($_POST['percent1'])) {
            $percent1 = 9;
            $answer1 = ($_POST['input']) / 100 * $percent1 + ($_POST['input']);

            echo "Bedrag inclusief $percent1% BTW : $answer1";
        }
        if (isset($_POST['submit'])) {
            if (isset($_POST['percent2'])) {
                $percent2 = 21;
                $answer2 = ($_POST['input']) / 100 * $percent2 + ($_POST['input']);

                echo "Bedrag inclusief $percent2% BTW : $answer2";
            }
        }
    }



    ?>

</body>

</html>