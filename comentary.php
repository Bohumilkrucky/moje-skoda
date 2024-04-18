<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    require "assets/database.php";


    $connection = connectionDB ();


    $sql = "INSERT INTO cars (Model, comentary, autor)
      VALUES (?, ?, ?)";
   
     $statement = mysqli_prepare($connection, $sql);


    mysqli_stmt_bind_param($statement, "sss", $_POST["Model"], $_POST["comentary"], $_POST["autor"]);

     if(mysqli_stmt_execute($statement)) {
        $id = mysqli_insert_id($connection);
        header("location: one-coment.php?id=$id"); }
      else {
        echo mysqli_stmt_error($statement);

      }  




 }

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vlozit komentar</title>
    <link rel="stylesheet" href="style_comentary.css">
</head>
<body>
<?php require "assets/header.php";?>


    <main>
    <a id="zpet" href="./vase-recenze.php?vyber_modelu=Favorit">Zpět</a>
    <h1>Napsat Komentář</h1>

       

        <section class="add-form">
            <form action="comentary.php" method="POST">
 <?php require "assets/select.php";?>
                <br>
                <textarea type="text" name="comentary" placeholder="vložit komentář" required></textarea><br>
                <input id= "jmeno" type="text" name="autor" placeholder="jméno" required >
                <input id="pridat" type="submit" value="Přidat">

            </form>
        </section>
    </main>

    <?php require "assets/footer.php";?>

    

</body>
</html>