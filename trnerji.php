<?php
    require_once("baza.php");
    include_once("seja.php")
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
     <link rel="icon" href="slike/zogica.jpg" type="image/jpg">
    <link href="trnerji.css" type="text/css" rel="stylesheet" />
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
            <h2>Izpis Trenerjev</h2>
        <div>
    <?php
        $sql = "SELECT t.*, k.* ,tipt.*, k.ime AS kime,tipt.naziv AS tiptnaziv,t.ime AS time,t.priimek AS tpriimek,t.spol AS tspol,t.višina AS tvišina,t.opis AS topis,t.datum_roj AS tdatumroj FROM trnerji t INNER                JOIN kraji k ON k.id_kra=t.id_k INNER JOIN tip_trenerja tipt ON tipt.id_tipt=t.id_tipt ;"; 
        $query = mysqli_query($LINK, $sql);
        echo '<table class="trnerji_tab">';
        echo '<tr><td><b>Ime</b></td><td><b>Priimek</b></td><td><b>Spol</b></td><td><b>Višina</b></td><td><b>Datum rojstva</b></td><td><b>Opis</b></td><td><b>Kraj</b></td><td><b>Tip Trenerja</b></td></tr>';
        while ($row = mysqli_fetch_array($query)){
            echo "<tr><td>".$row['time'].'</td><td> '.$row['tpriimek'].'</td><td>'.$row['tspol'].'</td><td>'.$row['tvišina'].'</td>  <td> '.$row['tdatumroj'].'</td>  <td>'.$row['topis'].'</td><td>'.$row['kime'].'</td><td>'.$row['tiptnaziv'].'</td>';
            if(isset($_SESSION['vloga']) && $_SESSION['vloga'] == 2){
                echo '<td><a href="uredi.php?id_t=' . $row['id_t'] . '">Uredi</a></td><td><a href="izbris_trnerjev.php?id_t=' . $row['id_t'] . '">Izbrisi</a></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
    <hr>
    <div class="poravnava">
        <a href="index.php" class="nazaj">Nazaj na domov</a>
    </div>
        </section>
    </main>
     <footer>
        <a href="https://slovenska-kosarka.com">Slovenska košarka</a>
        <span class="separator">|</span>
        <a href="https://www.kzs.si">KZS</a>
    </footer>
</body>
</html>