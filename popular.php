<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Populares</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php
        error_reporting(0);

        $menuNames = ["Home", "Populares", "Tecnologias", "Contato"];
        $menuLinks = ["index.php", "popular.php", "tecnologias.php", "contato.php"];
        $menuCount = count($menuNames);
    ?>

    <nav>
        <ul class="menu">
            <?php
                for ($i = 0; $i < $menuCount; $i++) {
                    echo "<li><a href='" . $menuLinks[$i] . "'>" . $menuNames[$i] . "</a></li>";
                }
            ?>
        </ul>
    </nav>
    <div id="one">

        <div class="card">
                <img src="assets/acao/vikings.jpg" alt="Ação" class="card-image">
                <div class="card-content">
                    <h2>Vikings</h2>
                </div>
        </div>

        <div class="card">
                <img src="assets/terror/exorcist.jpg" alt="Ação" class="card-image">
                <div class="card-content">
                    <h2>O exorcista</h2>
                </div>
        </div>

        <div class="card">
                <img src="assets/drama/handmaid.webp" alt="Ação" class="card-image">
                <div class="card-content">
                    <h2>The Handmaid's Tale</h2>
                </div>
        </div>

        
    </div>

    <div id="one" style="margin-top: 5rem;">
        <div class="card">
                <img src="assets/comedia/friends.jpg" alt="Ação" class="card-image">
                <div class="card-content">
                    <h2>Friends</h2>
                </div>
        </div>

        <div class="card">
                <img src="assets/acao/mandalorian.jpeg" alt="Ação" class="card-image">
                <div class="card-content">
                    <h2>The Mandalorian</h2>
                </div>
        </div>

        <div class="card">
                <img src="assets/drama/the-crown.jpg" alt="Ação" class="card-image">
                <div class="card-content">
                    <h2>The crown</h2>
                </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>© 2024 Nome da Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>