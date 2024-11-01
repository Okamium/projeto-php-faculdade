<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado</title>
    <link rel="stylesheet" href="styles/back-end.css">
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
    
    <div id="BE">
        <fieldset id="F2">
            <div id="Epai">
                <div id="E1">    
                    <?php 
                        echo "<h1>Obrigado pela contribuição, $nome! </h1> \n"; "<br><br >";
                    ?>  
                </div>

                <div id="E2">
                    <?php
                        echo "<h2>A série que você escolheu será alocada em nosso ranking de acordo com a 
                        quantidade de indicações!</h2>";
                    ?>
                </div>
            </div>
            
        </fieldset>
    </div>


    <footer>
        <div class="footer-content">
            <p>© 2024 Nome da Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>
   

</body>
</html>