<?php
    require_once "baza.php";
    $id_t = $_GET['id_t'];
    $sql = "DELETE FROM trnerji WHERE id_t = $id_t";
    $query = mysqli_query($LINK, $sql);
    if ($query){
        header("url=trnerji.php");
        echo "uspešno izbrisano";
    }
    else{
        header("refresh:3; url=trnerji.php");
        echo "Izbris ni uspelo";
    }
?>