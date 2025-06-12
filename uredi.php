<?php 
    require_once "baza.php";
    include("seja.php");
?>
<!DOCTYPE html>
<html lang="sl">
    <head>
    <link href="uredi.css" type="text/css" rel="stylesheet" />
        <title>posodobi trenerje</title>
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
                $id_t = $_GET['id_t'];
                $sql = "SELECT * FROM trnerji WHERE id_t = '$id_t'";
                $result = mysqli_query($LINK, $sql);
                $trener = mysqli_fetch_assoc($result);
            ?>
						<h2>Uredi trenerja</h2>
						<form method="post" action="">
						Ime:<br>
						<input type="text" id="ime" name="ime" value="<?php echo $tekma['ime']; ?>" required><br><br>

						Priimek:<br>
						<input type="text" id="priimek" name="priimek" value="<?php echo $tekma['priimek']; ?>" required><br><br>

						Spol:<br>
						<input type="text" id="spol" name="spol" vvalue="<?php echo $tekma['spol']; ?>"" required><br><br>

						Višina (cm):<br>
						<input type="number" id="visina" name="visina" value="<?php echo $tekma['višina']; ?>" required><br><br>

						Leto rojstva:<br>
						<input type="date" id="datum_roj" name="datum_roj"value="<?php echo $tekma['datum_roj']; ?>" required><br><br>

						Kratek opis:<br>
						<input type="text" id="opis" name="opis" value="<?php echo $tekma['opis']; ?>" required><br><br>

						Kraj:<br>
								<select name="kraji">
						<?php
							$sql = "SELECT * FROM kraji;"; 
							$query = mysqli_query($LINK, $sql);
							while($row = mysqli_fetch_array($query)){
								echo '<option value ="'.$row["id_kra"].'">'.$row["ime"]."</option>";
							}
						?>
					</select><br><br>

						Tip trnerja:<br>
								<select name="trnerji">
						<?php
							$sql = "SELECT * FROM tip_trenerja;"; 
							$query = mysqli_query($LINK, $sql);
							while($row = mysqli_fetch_array($query)){
								echo '<option value ="'.$row["id_tipt"].'">'.$row["naziv"]."</option>";
							}
						?>
					</select><br><br>

						<button name="submit" type="submit">Uredi</button>
                        <a href="trnerji.php">Nazaj</a>
						</form>
                        
                        </section>
                        </main>

                        <?php
                            if(isset($_POST['submit'])){
                                $ime = $_POST['ime'];
                                $priimek = $_POST['priimek'];
                                $spol = $_POST['spol'];
                                $visina = $_POST['visina'];
                                $datum_roj = $_POST['datum_roj'];
                                $opis = $_POST['opis'];
                                $kraj = $_POST['kraji'];
                                $tip_trenerja = $_POST['trnerji'];

                                $sql = "UPDATE trnerji 
                                        SET ime = '$ime', 
                                            priimek = '$priimek', 
                                            spol = '$spol', 
                                            višina = $visina, 
                                            datum_roj = '$datum_roj', 
                                            opis = '$opis', 
                                            id_k = $kraj, 
                                            id_tipt = $tip_trenerja 
                                        WHERE id_t = $id_t";  

                                $result = mysqli_query($LINK, $sql);
                                if($result){
                                    echo 'Uspešen vnos';
                                    header("refresh:2; url=trnerji.php");
                                }
                                else{
                                    echo 'Neuspešen vnos';
                                    header("refresh:2; url=trnerji.php");
                                }
                              }
                        ?>
    </body>
</html>