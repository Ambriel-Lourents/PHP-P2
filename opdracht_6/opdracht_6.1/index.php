<html>

<head>

  <title>BTW BEREKENEN</title>

</head>

<body>





  <form method="post" action="">

    <input type="number" name="input" /> Bedrag exclusief BTW<br>
    <input type="radio" name="percent" value="9" /> Laag, 9%<br>
    <input type="radio" name="percent" value="21" />Hoog, 21%<br>
    <input type="submit" name="submit" value="submit" /><br>

  </form>

  <?php
  if (isset($_POST['submit'])) {
    $value = ($_POST['input']);
    $percent = ($_POST['percent']);


    if ($percent == "laag") {
      echo "checked='checked'";
    }
    if ($percent == "hoog") {
      echo "checked='checked'";
    }

    $answer = number_format($value + ($value / 100 * $percent));
    echo "Bedrag inclusief $percent%  BTW:  $answer";
  }
  ?>

</body>

</html>