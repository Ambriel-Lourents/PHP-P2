<html>

<body>

    <?php
    session_start();

    $name = $_SESSION["voornaam"];
    $lastname = $_SESSION['achternaam'];
    $radio = $_SESSION['geslacht'];
    $street_number = $_SESSION['straat'];
    $city = $_SESSION['stad'];
    $country = $_SESSION['land'];
    $email = $_SESSION["email"];
    $password = $_SESSION['wachtwoord'];

    ?>

    <form method="post" action="form1.php">
        <label for="voornaam">Voornaam:</label><br>
        <input type="text" id="voornaam" name="voornaam" value="<?php echo $name; ?>"><br>
        <label for="achternaam">Achternaam:</label><br>
        <input type="text" id="achternaam" name="achternaam" value="<?php echo $lastname; ?>"><br>
        <label for="geslacht">Geslacht:</label><br>
        <input type="radio" id="geslacht" name="geslacht" value="Male" <?php if ($radio == "Male") echo "checked"; ?>>Man<br>
        <input type="radio" id="geslacht" name="geslacht" value="Female" <?php if ($radio == "Female") echo "checked"; ?>>Vrouw<br>
        <label for="straat">Straat en huisnummer:</label><br>
        <input type="text" id="straat" name="straat" value="<?php echo $street_number; ?>"><br>
        <label for="stad">Stad:</label><br>
        <input type="text" id="stad" name="stad" value="<?php echo $city; ?>"><br>
        <label for="land">Land:</label><br>
        <select id="land" name="land" value="<?php echo $country; ?>">
            <option value="Nederland">Nederland</option>
            <option value="België">België</option>
            <option value="Duitsland">Duitsland</option>
            <option value="Frankrijk">Frankrijk</option>
            <option value="Spanje">Spanje</option>
        </select><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
        <label for="wachtwoord">Wachtwoord:</label><br>
        <input type="password" id="wachtwoord" name="wachtwoord" value="<?php echo $password; ?>"><br>
        <input type="submit" value="Verzenden">
    </form>

</body>

</html>