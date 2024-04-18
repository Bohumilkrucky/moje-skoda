<?php

require "assets/database.php";

$connection = connectionDB ();

$_SERVER["REQUEST_METHOD"] === "GET";
$_GET["id"];
$id = ($_GET['id']);
function deleteCar($connection, $id) {
$sql = "DELETE * FROM cars WHERE id = '$id'";

$stmt = mysqli_prepare($connection, $sql);

if ($stmt === false) {
    echo mysqli_error($connection);
} else {
    mysqli_stmt_bind_param($stmt, "i", $id);


    if (mysqli_stmt_execute($stmt)) {
        redirectUrl("/moje-skoda/user-coment.php");

}
}
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    deleteCar($connection, $_GET["id"]);
}

?>





<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smazání</title>
    <link rel="stylesheet" href="style-recenze.css">
</head>
<body>
  <?php require "assets/header.php";?>
<main>


<main>
<section class="delete-form">
            <form method="POST">
                <p>Jste si jisti, že chcete tohoto žáka smazat?</p>
                <button>Smazat</button>
                <a href="one-coment.php=<?= $_GET['id'] ?>">Zrušit</a>
            </form>
        </section>

</main>