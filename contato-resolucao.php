<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        session_start();
        error_reporting(0);

        $menuNames = ["Home", "Populares", "Tecnologias", "Contato", "Créditos"];
        $menuLinks = ["index.php", "popular.php", "tecnologias.php", "contato.php", "creditos.php"];
        $menuCount = count($menuNames);

        $nome = $_POST['nome'];

        if (!isset($nome)) {
            header("Location: index.php");
        }

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
    
    <?php 
        echo "<h1>Obrigado pelo seu contato $nome! </h1>";
    ?>
</body>
</html>