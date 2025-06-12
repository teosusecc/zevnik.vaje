<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
     <link rel="icon" href="slike/zogica.jpg" type="image/jpg">
    <link href="registracija.css" type="text/css" rel="stylesheet" />
    <title>Slovenska Košarkarska Zveza</title>
</head>
<body>
    <header>
        <h1>Slovenska Košarkarska Zveza</h1>
        <div class="login-container">
        <?php
         include("glava.php");
?>
</div>
    </header>
        <nav class="zavihki">
        <?php
        include("zavihki.php");
        ?>
    </nav>
    <main>
   <section class="register-container">
    <h2>Registracija</h2>
    <form action="registracija_v_bazo.php" method="post">
        <div class="form-group">
            <input type="text" id="ime" name="ime" required placeholder="Vnesite ime">
        </div>
        <div class="form-group">
            <input type="text" id="priimek" name="priimek" required placeholder="Vnesite priimek">
        </div>
        <div class="form-group">
            <input type="date" id="datum-rojs" name="datum_rojs" required>
        </div>
        <div class="form-group">
            <input type="email" id="gmail" name="mail" required placeholder="Vnesite Gmail">
        </div>
        <div class="form-group">
            <input type="password" id="geslo" name="geslo" required placeholder="Vnesite geslo">
        </div>
        <div class="vprasanje">
            Že imaš raučun?<a href="prijava.php">Prijavi se.</a>
            </div><br>
        <div class="form-group">
            <button type="submit">Registracija</button>
        </div>
    </form>
    <hr>
    <div class="poravnava">
        <a href="index.php" class="nazaj">Nazaj na domov</a>
    </div>
</section>

</main>
</body>
</html>