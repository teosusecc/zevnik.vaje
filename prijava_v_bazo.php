
<?php

require_once 'baza.php';
include_once 'seja.php';

$email = $_POST['gmail'];
$geslo = $_POST['geslo'];


$mail = mysqli_real_escape_string($LINK, $email);
$ges = mysqli_real_escape_string($LINK, $geslo);

$sql = "SELECT * FROM uporabniki WHERE mail = '$mail'";


$result = mysqli_query($LINK, $sql);


if (mysqli_num_rows($result) === 1) {

$row = mysqli_fetch_array($result); 
if(password_verify($ges,$row['geslo'])){
$_SESSION['ime'] = $row['ime'];
$_SESSION['priimek'] = $row['priimek'];
$_SESSION['id1'] = $row['id_up'];
$_SESSION ['vloga'] = $row['id_tu'];
echo 'Prijava uspešna.';
header("Refresh: 1; URL=index.php");
}

} else {
echo 'Prijava NI uspešna.';
header("Refresh: 3; URL=index.php");
}
?>