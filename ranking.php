<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        session_start();
        error_reporting(0);

        $menuNames = ["Home", "Populares", "Tecnologias", "Contato"];
        $menuLinks = ["index.php", "popular.php", "tecnologias.php", "contato.php"];
        $menuCount = count($menuNames);

        if(!isset($_SESSION['genero'])) {
            header("Location: index.php");
        }

        $_SESSION['genero'] = $_POST['genero'];
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

    <div class="RR">   
        <?php
            echo "<br>";
            $seriesTerror = ["The Haunting of Hill House", "American Horror Story", "The Walking Dead", "Stranger Things", "Penny Dreadful", "The Exorcist"];
            $imagensTerror = ["haunting-of-hill-house.jpg", "american-horror-story.webp", "twd.webp",  "stranger-things.jpg",  "penny-dreadful.jpg",  "exorcist.jpg"];
            //o código acima referencia para a pasta assets, e então para a pasta destinada, exemplo terro, lá refencia o nome de cada imagem para ser usada no for ali embaixo

            $seriesAcao = ["24 Hours", "Jack Ryan", "Arrow", "The Mandalorian", "Vikings", "The Witcher"];
            $imagensAcao = ["24.jpg", "jack.jpg", "arrow.webp", "mandalorian.jpeg" ,"vikings.jpg", "the-witcher.webp",];

            $seriesComedia = ["Friends", "The Office", "Brooklyn Nine-Nine", "Parks and Recreation", "How I Met Your Mother", "The Big Bang Theory"];
            $imagensComedia = ["friends.jpg", "the-office.jpg", "b99.jpg", "parks.jpg", "how-i-met.webp", "big-bang.jpg"];

            $seriesDrama = ["Breaking Bad", "The Crown", "The Handmaid's Tale", "This Is Us", "Succession", "Mad Men"];
            $imagensDrama = ["breaking-bad.jpg", "the-crown.jpg", "handmaid.webp", "us.webp", "succession.webp", "mad.jpg"];
            
            $menuItems = 6;
    

            
            switch($_SESSION['genero']) {
                case 'Terror':
                    for ($i = 0; $i < $menuItems; $i++) {
                        echo "<div class='card'>
                                <img src='assets/terror/" . $imagensTerror[$i] . "' alt='Terror' class='card-image'>
                                <div class='card-content'>
                                    <h2>" . $seriesTerror[$i] . "</h2>
                                </div>
                            </div>
                            <br>
                            ";
                    }
                    break;

                case 'Ação':
                    for ($i = 0; $i < $menuItems; $i++) {
                        echo "<div class='card'>
                                <img src='assets/acao/" . $imagensAcao[$i] . "' alt='acao' class='card-image'>
                                <div class='card-content'>
                                    <h2>" . $seriesAcao[$i] . "</h2>
                                </div>
                            </div>
                            <br>
                            ";
                    }
                    break;

                case 'Comédia':
                    for ($i = 0; $i < $menuItems; $i++) {
                        echo "<div class='card'>
                                <img src='assets/comedia/" . $imagensComedia[$i] . "' alt='comedia' class='card-image'>
                                <div class='card-content'>
                                    <h2>" . $seriesComedia[$i] . "</h2>
                                </div>
                            </div>
                            <br>
                            ";
                    }
                    break;

                case 'Drama':
                    for ($i = 0; $i < $menuItems; $i++) {
                        echo "<div class='card'>
                                <img src='assets/drama/" . $imagensDrama[$i] . "' alt='drama' class='card-image'>
                                <div class='card-content'>
                                    <h2>" . $seriesDrama[$i] . "</h2>
                                </div>
                            </div>
                            <br>
                            ";
                    }
                    break;

                default:
                    echo "Opção inválida";
                    break;
            }
        ?>
    </div>

    <footer>
        <div class="footer-content">
            <p>© 2024 Nome da Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>