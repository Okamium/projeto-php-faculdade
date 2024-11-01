<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnologias</title>
    <link rel="stylesheet" href="styles/tecnologias.css">
</head>
<body>
    <?php
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
    

    <div id="title">
        <h1>Desenvolvedores</h1>
    </div>


    <div class="dev-container">
        <div class="developer">
            <h2>Lucas</h2>
            <p>Função: Backend</p>
        </div>
        <div class="developer">
            <h2>Natan</h2>
            <p>Função: Backend</p>
        </div>
        <div class="developer">
            <h2>Henrique</h2>
            <p>Função: Frontend</p>
        </div>
        <div class="developer">
            <h2>Davi</h2>
            <p>Função: Frontend</p>

        </div>
    </div>

    <div id="title2">
        <h1>Tecnologias</h1>
    </div>

    
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, rem eius quos facere est deleniti. Quae sequ
    i fugiat earum quia, eos corporis quasi consequatur voluptatem? Quibusdam enim doloribus commodi totam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur veritatis quae id amet labore, dolore 
    optio dolor, molestiae dolores dolorum similique natus temporibus incidunt accusamus eos voluptatibus, at in iusto!
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea ex amet sapiente suscipit voluptatibus ve
    ritatis quia officiis vel ducimus at. Cum enim culpa adipisci non porro magnam dignissimos placeat cumque.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit modi illo atque quibusdam! Dolores 
    explicabo eos odio, tempore blanditiis aspernatur recusandae quibusdam? Provident recusandae qui sit molli
    tia non ipsam debitis.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi fugiat sed natus debitis tempore qu
    aerat illo, optio repellendus impedit consequuntur repellat doloribus consequatur omnis deleniti, quasi a
    met eligendi. Quasi, repellendus?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quis porro quas, quam consequatur,
     obcaecati minus modi voluptate error illum, maxime nemo et optio mollitia cum enim odit magni nesciunt.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis similique, reprehenderit pariatur doloribus
     corrupti illum quasi quod eaque exercitationem necessitatibus sapiente quos, voluptates iusto fugit distinc
     io reiciendis magni animi adipisci!



    <footer>
        <div class="footer-content">
            <p>© 2024 Nome da Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>
    
   
</body>
</html>