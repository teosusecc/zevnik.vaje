        <a href="index.php">Domov</a>
        <a href="trnerji.php">Trenerji</a>
        <a href="tekme.php">Tekme</a>
        <?php
            if (isset($_SESSION['vloga']) && $_SESSION['vloga'] == 2) {
                echo '<a href="trnerji_vnasanje.php">Dodaj trenerja</a>';
                echo '<a href="tekme_vnasanje.php">Dodaj tekmo</a>';
                echo '<a href="komentar.php">Komentar</a>';
            }
        ?>
        <?php
            if (isset($_SESSION['vloga']) && $_SESSION['vloga'] == 3) {
              echo '<a href="komentar.php">Komentar</a>';
               
            }
        ?>