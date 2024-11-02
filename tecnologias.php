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
    

    <div id="title">
        <h1>Desenvolvedores</h1>
    </div>


    <div class="dev-container">
        <div class="developer">
            <h2>Lucas Buzo</h2>
            <h4>Função: Código PHP</h4>
        </div>
        <div class="developer">
            <h2>Nathan Souza</h2>
            <h4>Função: Código PHP</h4>
        </div>
        <div class="developer">
            <h2>Henrique Tomoki</h2>
            <h4>Função: Estruturação HTML</h4>
        </div>
        <div class="developer">
            <h2>Davi Gabriel</h2>
            <h4>Função: Estilização CSS</h4>
        </div>
    </div>

    <div id="title2">
        <h1>Tecnologias</h1>
    </div>

    <div id="one">
        <div class="Ptec">
            <p class="fonte">Todas as páginas do nosso site contam com um menu para navegação entre as páginas, esse menu é feito com variáveis e array  $menuNames para 
                armazenar os valores dos nomes e  $menuLinks para o endereço onde a página deve levar, e também, a variável $menuCount que serve 
                para verificar a quantidade de menus existentes de forma dinâmica, a lógica de colocar os menus na tela e feita através de um for que verificia o 
                tamanho da lista e concatena o nome e o link da página.
            </p>
        </div>


        <br>

        <div class="Ptec">
            <p class="fonte">Na tela inicial (Index.php) foi usado a SESSION do PHP para passar os valores do ranking das séries, ou seja, caso o usuário tente entrar
                via URL para a tela de rankings, sem ter antes passado pela home e clicado no botão do gênero desejado, ele vai ser redirecionado para a tela inicial, esse controle
                é feito através da variável $_SESSION["genero"] e um if que verifica se essa variável foi setada, através da função isset do PHP.
            </p>
        </div>

        <br>

        <div class="Ptec">
            <p class="fonte">Na tela de ranking, após feita a validação se o usuário pode estar nessa página, usamos mais uma vez arrays e a estrutura for para de forma dinâmica,
                exibir as séries do gênero selecionado através da estrutura Switch que verifica qual foi o gênero escolhido, e com base nisso mostra na tela.
            </p>
        </div>

    </div>
    


    <footer>
        <div class="footer-content">
            <p>© 2024 RankMax. Todos os direitos reservados.</p>
        </div>
    </footer>
    
   
</body>
</html>