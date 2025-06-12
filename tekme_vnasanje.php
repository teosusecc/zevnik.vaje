<?php
    require_once "baza.php";
    include_once 'seja.php';
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
   
    <h2>Vnos tekme</h2>
    <form method="post" action="tekme_v_bazo.php">
    Datum Tekme:<br>
    <input type="date" id="datum_tek" name="datum_tek" required><br><br>

    Kje se tekma odvija<br>
            <select name="dvorane">
    <?php
        $sql = "SELECT * FROM dvorane;"; 
        $query = mysqli_query($LINK, $sql);
        while($row = mysqli_fetch_array($query)){
            echo '<option value ="'.$row["id_dv"].'">'.$row["ime"]."</option>";
        }
    ?>
</select><br><br>

    Rezultat tekme:<br>
    <input type="text" id="rezultat_tek" name="rezultat_tek" required><br><br>

    Domaci<br>
            <select name="domaci">
    <?php
        $sql = "SELECT * FROM klubi ;"; 
        $query = mysqli_query($LINK, $sql);
        while($row = mysqli_fetch_array($query)){
            echo '<option value ="'.$row["id_k"].'">'.$row["ime"]."</option>";
        }
    ?>
</select><br><br>

   Gostje<br>
            <select name="gostje">
    <?php
        $sql = "SELECT * FROM klubi ;"; 
        $query = mysqli_query($LINK, $sql);
        while($row = mysqli_fetch_array($query)){
            echo '<option value ="'.$row["id_k"].'">'.$row["ime"]."</option>";
        }
    ?>
</select><br><br>

    <button type="submit">Dodaj tekmo</button>
    </form>
    </section>
    </main>
</body>
</html>