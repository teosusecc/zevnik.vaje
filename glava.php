


<?php
include_once "seja.php";
if (!isset($_SESSION['id1'])) {
echo '<div class="top-right">
            <a href="prijava.php" class="login-register">Prijava</a>
            <span class="separator">/</span>
            <a href="registracija.php" class="login-register">Registracija</a>
        </div>';
} else {
echo 'Prijavljeni: ' . $_SESSION['ime'] . ' ' . $_SESSION['priimek'];
echo ' | <a href="odjava.php">Odjava</a>';

}
?>
