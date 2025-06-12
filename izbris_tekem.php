<?php
    require_once "baza.php";
   
    $id_t = $_GET['id_tek'];

    $sql = "DELETE FROM tekme WHERE id_tek = $id_t";
    $query = mysqli_query($LINK, $sql);
    if ($query){
        header("refresh:2;url=tekme.php");
        echo "uspešno izbrisano";
    }
    else{
        header("refresh:2; url=tekme.php");
        echo "Izbris ni uspelo";
    }
?>