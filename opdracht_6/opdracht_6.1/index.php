<html>

<head>

  <title>BTW BEREKENEN</title>

</head>

<body>





<form method="post">
    <label for="value">Enter a value:</label>
    <input type="text" name="value" id="value">
    <select name="percent">
        <option value=".1">9%</option>
        <option value=".2">21%</option>
    </select>
    <input type="submit" name="submit" value="Calculate">
</form>
<?php
if (isset($_POST['submit'])) {
    $value = $_POST['value'];
    $percent = $_POST['percent'];
    $result = $value * $percent;
    echo ($percent / 100) * ".% of $value is $result" ;
}
?>

</body>

</html>