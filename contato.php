<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="styles/contato.css">
</head>
<body>
    <?php
        session_start();
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

   
    <div id="contato">
        <fieldset id="F1">
        <form action="contato-resolucao.php" method="POST">
            <h2 id="h2f1">Nos mande sua sugestão de série aqui!</h2> <br>
            <legend></legend>
            <div class="form-group">
                <label for="nome" class="labelf1">Nome:</label> <br>
                <input type="text" class="fill" name="nome" placeholder="Digite seu nome..."  required> 
            </div><br>
            <div class="form-group">
                <label for="email" class="labelf1">Email:</label> <br>
                <input type="email" class="fill" name="email" placeholder="Digite seu email..."  required>
            </div><br>
            <div class="form-group">
                <label for="assunto" class="labelf1">Série:</label> <br>
                <input type="text" class="fill" name="assunto" placeholder="Digite a série..."  required>
            </div><br>
            <div class="form-group">
                <label for="mensagem" class="labelf1">Mensagem:</label><br>
                <textarea class="fill" name="mensagem" rows="5" placeholder="Digite a mensagem..."></textarea>
            </div><br><br>
            <button type="submit" id="submit" >Enviar</button>
        </fieldset> 
    </div>

        </form>
    

    <footer>
        <div class="footer-content">
            <p>© 2024 RankMax. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>