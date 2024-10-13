<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RankMax</title>
    <link rel="stylesheet" href="styles/style.css">
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

    <h1>RankMax - Seu ranking de séries favorito!</h1>

    <br>

    <h2>Escolha um gênero de série para ver o ranking.</h2>

    <br>

    <div class="card">
        <img src="assets/terror.webp" alt="Terror" class="card-image">
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
        <img src="assets/terror.webp" alt="Terror" class="card-image">
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
        <img src="assets/terror.webp" alt="Terror" class="card-image">
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
        <img src="assets/terror.webp" alt="Terror" class="card-image">
        <div class="card-content">
            <h2>Drama</h2>
            <p>Descubra as melhores séries de comédia do momento!</p>
            <form action="ranking.php" method="POST">
                <input type="hidden" name="genero" value="Drama">
                <button type="submit" class="card-button">Clique aqui para ver o ranking</button>
            </form>
        </div>
    </div>


   
</body>
</html>