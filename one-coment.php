<?php
require "assets/database.php";

$connection = connectionDB ();

$_SERVER["REQUEST_METHOD"] === "GET";
$_GET["id"];
$id = ($_GET['id']);
$sql = "SELECT * FROM cars WHERE id = '$id'";
$result = mysqli_query($connection, $sql);
if ($result === false) {
    echo mysqli_error($connection);
} else {
    $cars = mysqli_fetch_assoc($result);
}

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

     <h1>Váš komentář</h1>

     <section>
     
     <?php if ($cars === null): ?>
                <p>Komentář nenalezen</p>
            <?php else: ?>
                
                <h2>Model:  <?= $cars["Model"] ?></h2><br>
                <p>Komentář: <br> <?= $cars["comentary"] ?></p><br>
                <p>Autor: <?= $cars["autor"] ?></p>
                
           <?php endif ?> 
       
        </section>
        <section class="buttons">
   <a href="delete-comentary.php?id=<?= $cars['id'] ?>">Smazat</a>
</section>  




          
        </body>
</html>


