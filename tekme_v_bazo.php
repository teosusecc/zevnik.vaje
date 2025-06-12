<?php
  
    require_once 'baza.php';
    include_once 'seja.php';

    $datum_tek = $_POST['datum_tek'];
    $dvorane = $_POST['dvorane'];
    $rezultat_tek = $_POST['rezultat_tek'];
    $domaci = $_POST['domaci'];
    $gostje = $_POST['gostje'];

  
    if ($domaci == $gostje) {
        echo "Domača in gostujoča ekipa ne smeta biti enaki.";
    }   else {
        $sql = "INSERT INTO tekme (datum_tek, id_dv, rezultat_tek, domaci, gostje)
                VALUES ('".$datum_tek."',".$dvorane.", '$rezultat_tek', ".$domaci.", ".$gostje.");";
              
        
        $result = mysqli_query($LINK, $sql);

        if ($result) {
            echo "Uspešen vnos.";
            header("refresh:2; url=tekme.php");
            
            
        } else {
            echo"Napaka pri vnosu";
            header("refresh:5;tekme.php");
        }
    }

?>
