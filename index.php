<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RankMax</title>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <?php
        session_start();
        error_reporting(0);

        $menuNames = ["Home", "Populares", "Tecnologias", "Contato", "Créditos"];
        $menuLinks = ["index.php", "popular.php", "tecnologias.php", "contato.php", "creditos.php"];
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

    <div class="icon">
        
        <div id="Opai">
            <img src="assets/icone.png" id="O">
        </div>

        <div id="T1">
            
            <h1>RankMax - Seu ranking de séries favorito!</h1>

            <br>

            <h2>Escolha um gênero de série para ver o ranking.</h2>
            
        </div>
    </div>

    <br>
    
    <div id="one">
        <div class="card">
            <img src="assets/terror/haunting-of-hill-house.jpg" alt="Terror" class="card-image">
            <div class="card-content">
                <h2>Terror</h2>
                <p>Descubra as melhores séries de terror do momento!</p>
                <form action="ranking.php" method="POST">
                    <input type="hidden" name="genero" value="Terror">
                    <button type="submit" class="card-button">Clique aqui para ver o ranking</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/acao/vikings.jpg" alt="Ação" class="card-image">
            <div class="card-content">
                <h2>Ação</h2>
                <p>Descubra as melhores séries de ação do momento!</p>
                <form action="ranking.php" method="POST">
                    <input type="hidden" name="genero" value="Ação">
                    <button type="submit" class="card-button">Clique aqui para ver o ranking</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/comedia/friends.jpg" alt="Comédia" class="card-image">
            <div class="card-content">
                <h2>Comédia</h2>
                <p>Descubra as melhores séries de comédia do momento!</p>
                <form action="ranking.php" method="POST">
                    <input type="hidden" name="genero" value="Comédia">
                    <button type="submit" class="card-button">Clique aqui para ver o ranking</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/drama/the-crown.jpg" alt="Drama" class="card-image">
            <div class="card-content">
                <h2>Drama</h2>
                <p>Descubra as melhores séries de comédia do momento!</p>
                <form action="ranking.php" method="POST">
                    <input type="hidden" name="genero" value="Drama">
                    <button type="submit" class="card-button">Clique aqui para ver o ranking</button>
                </form>
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