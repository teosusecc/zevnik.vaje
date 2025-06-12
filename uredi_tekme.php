<?php 
    require_once "baza.php";
    include("seja.php");
?>
<!DOCTYPE html>
<html lang="sl">
    <head>
        <title>posodobi tekmo</title>
        <link href="uredi_tekme.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
     <header>
        <h1>Slovenska Košarkaska Zveza</h1>
        <div class="prijava_prikaz">
    <?php 
            include("glava.php");
        ?>
        </div>
    </header>

    <nav class="zavihki">
        <?php
        include("zavihki.php");
        ?>
    </nav>
    <main>
    <section>

    <h1>Posodobitev</h1>
    <?php
        $id_tek = $_GET['id_tek'];
        $sql = "SELECT * FROM tekme WHERE id_tek = '$id_tek'";
        $result = mysqli_query($LINK, $sql);
        $tekma = mysqli_fetch_assoc($result);
    ?>
    <h2>Uredi tekmo</h2>
    <form method="post" action="">
        Datum tekme:<br>
        <input type="date" id="datum_tek" name="datum_tek" value="<?php echo $tekma['datum_tek']; ?>"><br><br>

        Rezultat:<br>
        <input type="text" id="rezultat_tek" name="rezultat_tek" value="<?php echo $tekma['rezultat_tek']; ?>"><br><br>

        Domači klub:<br>
        <select name="domaci">
            <?php
                $sql = "SELECT * FROM klubi"; 
                $query = mysqli_query($LINK, $sql);
                while($row = mysqli_fetch_array($query)){
                    echo '<option value="'.$row["id_k"].'"';
                    if ($tekma['domaci'] == $row["id_k"]) echo 'selected';
                    echo '>'.$row["ime"].'</option>';
                }
            ?>
        </select><br><br>

        Gostujoči klub:<br>
        <select name="gostje">
            <?php
                $sql = "SELECT * FROM klubi"; 
                $query = mysqli_query($LINK, $sql);
                while($row = mysqli_fetch_array($query)){
                   echo '<option value="'.$row["id_k"].'"';
                    if ($tekma['gostje'] == $row["id_k"]) echo 'selected';
                    echo '>'.$row["ime"].'</option>';
                }
            ?>
            
        </select><br><br>

        Dvorana:<br>
        <select name="dvorana">
            <?php
                $sql = "SELECT * FROM dvorane"; 
                $query = mysqli_query($LINK, $sql);
                while($row = mysqli_fetch_array($query)){
                    echo '<option value ="'.$row["id_dv"].'">'.$row["ime"]."</option>";
                }
            ?>
        </select><br><br>

        <button name="submit" type="submit">Uredi</button>
        <a href="tekme.php">Nazaj</a>
    </form>
    </section>
    </main>

    <?php
        if(isset($_POST['submit'])){
            $datum_tek = $_POST['datum_tek'];
            $rezultat_tek = $_POST['rezultat_tek'];
            $domaci = $_POST['domaci'];
            $gostje = $_POST['gostje'];
            $dvorana = $_POST['dvorana'];

            $sql = "UPDATE tekme 
                    SET datum_tek = '$datum_tek', 
                        rezultat_tek = '$rezultat_tek', 
                        domaci = $domaci, 
                        gostje = $gostje, 
                        id_dv = $dvorana 
                    WHERE id_tek = $id_tek";  

            $result = mysqli_query($LINK, $sql);
            if($result){
                echo 'Uspešen vnos';
                header("refresh:2; url=tekme.php");
            }
            else{
                echo 'Neuspešen vnos';
                header("refresh:2; url=tekme.php");
            }
        }
    ?>
    </body>
</html>
