<html>    

    <head>
    
        <title>BTW BEREKENEN</title>
        
    </head>
    
    <body>        
    

    

    
    <form method="post" action="">
    
    Bedrag exclusief BTW
      <input type="text" name="test" />

     <br>
    
      <input class="nostyle" type="radio" name="btw1" value="laag, 6%" />laag, 9%  
      
      <br>
      
      <input class="nostyle" type="radio" name="btw2" value="hoog, 21%" />hoog, 21%
      
      <br>
      
      <input class="uitrekenen" type="submit" name="uitrekenen" value="uitrekenen" />
      
    
</form>
 <p>Antwoord is:</p>

<?php
if(isset($_POST['uitrekenen'])){
  $btw1 = $_POST['btw1'];
  $btw2 = $_POST['btw2'];
  
  echo ""
}
?>

    </body>
</html>