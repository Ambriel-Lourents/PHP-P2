<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

function Postcode() {
  $numbers = mt_rand(1000, 9999);
  $letters = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90));
  return " $numbers $letters ";
}

$postcode = Postcode();
echo " Een willekeurige postcode is: $postcode ";

?>

</body>
</html>