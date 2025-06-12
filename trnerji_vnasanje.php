<?php
    require_once "baza.php";
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="slike/zogica.jpg" type="image/jpg">
    <link href="trnerji_vnasanje.css" type="text/css" rel="stylesheet" />
    <title>Slovenska Košarkarska Zveza</title>
</head>
<body>
    <header>
        <h1>Slovenska Košarkarska Zveza</h1>
        <div class="prijava_prikaz">
        <?php
         include("glava.php");
?>
    </header>
        <nav class="zavihki">
        <?php
        include("zavihki.php");
        ?>
    </nav>
    <main>
    <section>
    <h2>Vnos novega trenerja</h2>
    <form method="post" action="trnerji_vnasanje_v_bazo.php">
    Ime:<br>
    <input type="text" id="ime" name="ime" required><br><br>

    Priimek:<br>
    <input type="text" id="priimek" name="priimek" required><br><br>

    Spol:<br>
    <input type="text" id="spol" name="spol" required><br><br>

    Višina (cm):<br>
    <input type="number" id="visina" name="visina" required><br><br>

    Leto rojstva:<br>
    <input type="date" id="datum_roj" name="datum_roj" required><br><br>

    Kratek opis:<br>
    <input type="text" id="opis" name="opis" required><br><br>

    Kraj:<br>
            <select name="kraji">
    <?php
        $sql = "SELECT * FROM kraji;"; 
        $query = mysqli_query($LINK, $sql);
        while($row = mysqli_fetch_array($query)){
            echo '<option value ="'.$row["id_kra"].'">'.$row["ime"]."</option>";
        }
    ?>
</select><br><br>

    Tip trnerja:<br>
            <select name="trnerji">
    <?php
        $sql = "SELECT * FROM tip_trenerja;"; 
        $query = mysqli_query($LINK, $sql);
        while($row = mysqli_fetch_array($query)){
            echo '<option value ="'.$row["id_tipt"].'">'.$row["naziv"]."</option>";
        }
    ?>
</select><br><br>

    <button type="submit">Dodaj</button>
    </form>
    </section>
    </main>
</body>
</html>