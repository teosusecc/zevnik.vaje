<?php
        include("baza.php");
 ?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
     <link rel="icon" href="slike/zogica.jpg" type="image/jpg">
    <link href="komentar.css" type="text/css" rel="stylesheet" />
    <title>Slovenska Košarkarska Zveza - Tekme</title>
</head>
<body>
    <header>
        <h1>Slovenska Košarkarska Zveza</h1>
        <div class="prijava_prikaz">
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
        <section class="section">
        <h2>Ocenite našo spletno stran</h2>
    <form method="post" action="komentar_v_bazo.php">
        <select name="ocena" required>
        <option value="">Izberi</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button type="submit">Pošlji</button>
</form>

  </section>
    </main>
    <footer>
        <a href="https://slovenska-kosarka.com">Slovenska košarka</a>
        <span class="separator">|</span>
        <a href="https://www.kzs.si">KZS</a>
    </footer>
</body>
</html>