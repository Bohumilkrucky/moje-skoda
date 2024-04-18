<?php


require "assets/database.php";

$connection = connectionDB ();

$_SERVER["REQUEST_METHOD"] === "GET";
$_GET["vyber_modelu"];
$model = ($_GET['vyber_modelu']);
$sql = "SELECT * FROM cars WHERE model = '$model'";
$result = mysqli_query($connection, $sql);

$cars = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vase recenze</title>
    <link rel="stylesheet" href="style-recenze.css">
</head>
<body>
  <?php require "assets/header.php";?>
    <main>
    </main>
    <button id="openModalBtn">Přihlásit</button>
     <a href="./comentary.php">vložit komentář</a>
     <a href="./user-coment.php">uzivatel</a>
   
    <h1>Vaše recenze </h1>
    


<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Vyplňte formulář</h2>
        <form>
            <label for="username">Uživatelské jméno:</label> <br>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Heslo:</label> <br>
            <input type="password" id="password" name="password">
            
            <input id="prihlaseni" type="submit" value="Odeslat">
            <p>nemáte registraci? <a href="">registrujte se</a></p>
        </form>
    </div>
</div>
    
    <table>

        <thead><td><h2>Model</h2></td><td><h2>Recenze</h2></td><td id="autor"><h2>Autor</h2></td></thead>
    </table>

    <form >
    <select name="vyber_modelu">
        
        <optgroup label= "Favorit">Favorit
            <option value="Favorit">Favorit</option>
        </optgroup>
        <optgroup label="Felicia">
            <option value="Felicia">Felicia</option>
        </optgroup>
        <optgroup label="Citigo">
            <option value="Citigo">Citigo</option>
        </optgroup>
        <optgroup label="Fabia">
            <option value="Fabia">Fabia I</option>
            <option value="Fabia II">Fabia II</option>
            <option value="Fabia III">Fabia III</option>
            <option value="Fabia IV">Fabia IV</option>
        </optgroup>
        <optgroup label="Roomster">
            <option value="Roomster">Roomster</option>
        </optgroup>
        <optgroup label="Rapid">
            <option value="Rapid">Rapid</option>
        </optgroup>
        <optgroup label="Scala">
            <option value="Scala">Scala</option>
        </optgroup>
        <optgroup label="Octavia">
            <option value="Octavia">Octavia I</option>
            <option value="Octavia II">Octavia II</option>
            <option value="Octavia III">Octavia III</option>
            <option value="Octavia IV">Octavia IV</option>
        </optgroup>
        <optgroup label="Superb">
            <option value="Superb">Superb I</option>
            <option value="Superb II">Superb II</option>
            <option value="Superb III">Superb III</option>
            <option value="Superb IV">Superb IV</option>
        </optgroup>
        <optgroup label="Yeti">
            <option value="Yeti">Yeti</option>
        </optgroup>
        <optgroup label="Kamiq">
            <option value="Kamiq">Kamiq</option>
        </optgroup>
        <optgroup label="Karoq">
            <option value="Karoq">Karoq</option>
        </optgroup>
        <optgroup label="Kodiaq">
            <option value="Kodiaq">Kodiaq I</option>
            <option value="Kodiaq II">Kodiaq II</option>
        </optgroup>
        <optgroup label="Enyaq">
            <option value="Enyaq">Enyaq</option>
        </optgroup>
      </select>

      <button type="submit">odeslat</button>
      </form>
    <?php
    echo("<table >  ");
     foreach ($cars as $one_car)
      {
    echo('<tr><td>' . htmlspecialchars($one_car['Model']));
    echo('</td><td>' . htmlspecialchars($one_car['comentary']));
    echo('</td><td>' . htmlspecialchars($one_car['autor']));

}
echo('</table>');
 ?>

<script src="./index.js"></script>
</body>
</html>
