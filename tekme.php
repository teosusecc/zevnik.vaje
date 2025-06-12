<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
     <link rel="icon" href="slike/zogica.jpg" type="image/jpg">
    <link href="tekme.css" type="text/css" rel="stylesheet" />
    <title>Slovenska Košarkarska Zveza - Tekme</title>
</head>
<body>
    <header>
        <h1>Slovenska Košarkarska Zveza</h1>
        <div class="prijava_prikaz">
        <?php
         include("glava.php");
         include("baza.php");
         include("seja.php");

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
        <h2>Statistika Tekem</h2>
<div>
    <?php
        $sql = "SELECT d.ime AS dvorana, tek.*, k1.ime AS domaci, k2.ime AS gostje FROM tekme tek INNER JOIN dvorane d ON d.id_dv=tek.id_dv INNER JOIN klubi k1 ON k1.id_k=tek.domaci INNER JOIN klubi k2 ON k2.id_k = tek.gostje
"; 
        $query = mysqli_query($LINK, $sql);
        echo '<table class="tekme_tab">';
        echo '<tr><td><b>Datum Tekme</b></td><td><b>Kje se bo odvijala</b></td><td><b>Trenutni Rezultat</b></td><td><b>Domaci</b></td><td><b>Gostje</b></td><tr>';
        while ($row = mysqli_fetch_array($query)){
            echo "<tr><td>".$row['datum_tek'].'</td><td> '.$row['dvorana'].'</td><td>'.$row['rezultat_tek'].'</td><td>'.$row['domaci'].'</td>  <td> '.$row['gostje'].'</td>';
            if(isset($_SESSION['vloga']) && $_SESSION['vloga'] == 2){
                echo '<td><a href="uredi_tekme.php?id_tek=' . $row['id_tek'] . '">Uredi</a></td><td><a href="izbris_tekem.php?id_tek=' . $row['id_tek'] . '">Izbrisi</a></td>';
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