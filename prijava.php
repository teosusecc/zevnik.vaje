<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
     <link rel="icon" href="slike/zogica.jpg" type="image/jpg">
    <link href="prijava.css" type="text/css" rel="stylesheet" />
    <title>Slovenska Košarkarska Zveza</title>
</head>
<body>
    <header>
        <h1>Slovenska Košarkarska Zveza</h1>
        <div>
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
    <section class="sectio">
        <h2>Prijava</h2>
        <form action="prijava_v_bazo.php" method="post">
            <div class="form-group">
                <input type="email" name="gmail" id="gmail" required placeholder="Vnesite Gmail">
            </div>
            <div class="form-group">
                <input type="password" name="geslo" id="geslo" required placeholder="Vnesite geslo">
            </div>
             <div class="vprasanje">
             Še nimaš raučuna? <a href="registracija.php">Registriraj se.</a>
             </div><br>
            <div class="form-group">
             <button type="submit">Prijava</button>
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