
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="slike/zogica.jpg" type="image/jpg">
    <link href="index.css" type="text/css" rel="stylesheet" />
    <title>Slovenska Košarkarska Zveza</title>
</head>
<body>
    <header>
        <h1>Slovenska Košarkarska Zveza</h1>
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
            <h2>Moška Košarka</h2>
            <p>Moška košarka ponuja celovit pregled košarkarskih aktivnosti v Sloveniji. Oglejte si sezname trenerjev in pripadajoče klube, rezultate tekem, dvorane, ter najnovejše novice iz sveta košarke.</p>
        </section>
        <section class="nov_section">
            <h2>Novice</h2>
            <table class="tabela">
                <tr>
                    <td class="tabela-celica">
                        <img src="slike/doncic-poraz-1.jpg" alt="Novica 1">
                        <h3>Konec sanj za Luko Dončića</h3>
                    </td>
                    <td class="tabela-celica" colspan="2">
                        <img src="slike/tri-senc.jpg" alt="Novica 2">
                        <h3>Zadnje tekme rednega dela razdelile mesta v četrtfinalu</h3>
                    </td>
                </tr>
                <tr>
                    <td class="tabela-celica" colspan="2">
                        <img src="slike/min-lak-eddon-768x560.jpg" alt="Novica 3">
                        <h3>Slaba zadnja četrtina še poglobila krizo Jezernikov</h3>
                    </td>
                    <td class="tabela-celica">
                        <img src="slike/1.skl-zogaa-1.jpg" alt="Novica 4">
                        <h3>Prvi dve tekmi zadnjega kroga dali imeni najboljšega in najslabšega kluba</h3>
                    </td>
                </tr>
                <tr>
                    <td class="tabela-celica">
                        <img src="slike/zmaga-mladi-1-1024x683.jpg" alt="Novica 5">
                        <h3>Najbolj uspešen podmladek domuje v Ljubljani</h3>
                    </td>
                    <td class="tabela-celica" colspan="2">
                        <img src="slike/doncic-poraz-konc-1024x692.jpg" alt="Novica 6">
                        <h3>Minnesota izkoristila želodčne težave Dončića in znova povedla v seriji</h3>
                    </td>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        <a href="https://slovenska-kosarka.com">Slovenska košarka</a>
        <span class="separator">|</span>
        <a href="https://www.kzs.si">KZS</a>
    </footer>
</body>
</html>