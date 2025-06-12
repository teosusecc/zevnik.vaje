<?php

require_once 'baza.php';
include_once 'seja.php';

$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$spol = $_POST['spol'];
$visina = $_POST['visina'];
$datum_roj = $_POST['datum_roj'];
$opis = $_POST['opis'];
$kraji = $_POST['kraji'];
$trnerji = $_POST['trnerji'];


$sql = "INSERT INTO trnerji (ime, priimek, spol, višina, datum_roj, opis, id_k, id_tipt)
        VALUES ('$ime', '$priimek', '$spol', '$visina', '$datum_roj', '$opis', '$kraji', '$trnerji')";

$result = mysqli_query($LINK, $sql);

if ($result) {
    echo "Uspešen vnos";
    header("refresh:1; url=trnerji.php");
} else {
    echo "Napaka pri vnosu.";
    header("refresh:2; url=trnerji_vnasanje.php");
}

?>
