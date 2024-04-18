<?php
require "assets/database.php";

$connection = connectionDB ();

$_SERVER["REQUEST_METHOD"] === "GET";
$_GET["autor"];
$autor = ($_GET['autor']);
$sql = "SELECT * FROM cars WHERE autor = '$autor'";
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
     <a href="./comentary.php">vložit komentář</a>
   
    <h1>Vaše komentáře </h1>
    
    <h4>Komentáře</h4>
    <?php if(empty($cars)): ?>
        <p>Žádné komentáře nalezeny</p>
    <?php else: ?>
        <ul>
            <?php foreach($cars as $one_car): ?>
                <li>
                    <?php echo $one_car["Model"]?>
                </li>
                <a href="one-coment.php?id=<?= $one_car["id"] ?>">Více informací</a>
            <?php endforeach ?>
        </ul>
    <?php endif ?>


    
 

<script src="./index.js"></script>
</body>
</html>
