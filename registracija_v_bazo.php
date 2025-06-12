
<?php

    require_once 'baza.php';
    include_once 'seja.php';

    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $datum_rojs = $_POST['datum_rojs'];
    $mail = $_POST['mail'];
    $geslo = $_POST['geslo'];
    $geslo_sifra =password_hash($geslo,PASSWORD_DEFAULT);
   



    $sql = "SELECT * FROM uporabniki WHERE mail = '$mail'";
    $result = mysqli_query($LINK, $sql);
    $results_string = mysqli_fetch_assoc($result);

    if ($results_string == NULL) {
    
        $sql = "INSERT INTO uporabniki (ime, priimek,datum_rojs, mail, geslo, id_tu )
                VALUES ('$ime', '$priimek','$datum_rojs', '$mail', '$geslo_sifra',3)";

        $result = mysqli_query($LINK, $sql);

        if ($result) {
            echo "uspešen vnos";
            header("refresh:1; url=prijava.php");
        } else {
            echo "Napaka pri vnosu.";
            header("refresh:2; url=registracija.php");
        }
    } else {
        echo "Uporabnik z tem mailom je že vpisan";
        header("refresh:2; url=registracija.php");
    }
?>
