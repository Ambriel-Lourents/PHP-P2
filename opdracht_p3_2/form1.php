<html>

<body>

    <?php
    session_start();

    $name = $_POST["voornaam"];
    $lastname = $_POST['achternaam'];
    $gender = $_POST['geslacht'];
    $street_number = $_POST['straat'];
    $city = $_POST['stad'];
    $country = $_POST['land'];
    $email = $_POST["email"];
    $password = $_POST['wachtwoord'];


    $_SESSION["voornaam"] = $name;
    $_SESSION['achternaam'] = $lastname;
    $_SESSION['geslacht'] = $gender;
    $_SESSION['straat'] = $street_number;
    $_SESSION['stad'] = $city;
    $_SESSION['land'] = $country;
    $_SESSION["email"] = $email;
    $_SESSION["wachtwoord"] = $password;

    echo "<h1>Resultaat</h1> <br>";
    echo " $name <br>";
    echo " $lastname <br>";
    echo " $gender <br>";
    echo " $street_number <br>";
    echo " $city <br>";
    echo " $country <br>";
    echo " $email <br>";
    echo " $password<br>";

    ?>

    <br><br>
    <form action="form2.php">
        <input type="submit" value="Pagina 3">
    </form>

</body>

</html>