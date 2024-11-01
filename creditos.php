<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créditos</title>
    <link rel="stylesheet" href="styles/style.css">
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

   
</body>
</html>