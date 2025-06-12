
<?php
     $host = "sql306.infinityfree.com";
     $user = "if0_38922956";
     $password = "teosusec2007";
     $database = "if0_38922956_zakljucna_baza";
     $LINK = mysqli_connect($host, $user, $password, $database)
             or die("ne morem do baze");
     mysqli_set_charset($LINK,"utf8");
?>
