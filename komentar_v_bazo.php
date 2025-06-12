<?php
require_once 'baza.php';
include_once 'seja.php';


$ocena = $_POST['ocena'];

$sql = "INSERT INTO komentarji (ime_kom,id_up) VALUES ('$ocena',".$_SESSION['id1'].");";

$result = mysqli_query($LINK, $sql);

if ($result) {
    echo "Uspesno vnesen komentar";
    header("refresh:1; komentar.php");
    exit;
} else {
    echo "Napaka pri vnosu.";
    header("refresh:2; url=komentar.php");
    exit;
}
?>