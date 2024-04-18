<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

    <section class="registration-form">
    <form action="admin/after-registration.php" method="POST">
           <input type="text" name="first-name" placeholder="Křestní jméno"><br>
             <input type="text" name="second-name" placeholder="Příjmení"><br>
             <input type="email" name="email" placeholder="Email"><br>
             <input type="password" name="password" placeholder="Heslo"><br>
             <input type="password" name="password-again" placeholder="Heslo znovu"><br>
            <input type="submit" value="Zaregistrovat">
        </form>

        </section>

    </main>
</body>
</html>