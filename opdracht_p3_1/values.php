<html>
<head>
  <title></title>
</head>
<body>
  <form action="" method="post">
    Enter a number: <input type="text" name="number"><br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
  <?php

if (isset($_POST['submit'])) {
 
    $number = $_POST["number"];
    $sum = 0; 
      echo "Waarde van variabele \$number = $number<br> <br>"; 
    for ($i = 1; $i <= $number; $i++) {
      $sum += $i;
      echo " $i + ";
    }

  }  echo " = $sum"; 
  
  ?>



</body>
</html>



