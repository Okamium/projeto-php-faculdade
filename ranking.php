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

        $menuNames = ["Home", "Populares", "Tecnologias", "Contato", "Créditos"];
        $menuLinks = ["index.php", "popular.php", "tecnologias.php", "contato.php", "creditos.php"];
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

    <?php
        echo "<br>";

        $seriesTerror = ["The Haunting of Hill House", "American Horror Story", "The Walking Dead", "Stranger Things", "Penny Dreadful", "The Exorcist"];
        $imagensTerror = ["haunting-of-hill-house.jpg", "american-horror-story.webp", "twd.webp",  "stranger-things.jpg",  "penny-dreadful.jpg",  "exorcist.jpg"];

        $seriesAcao = ["24 Horas", "Jack Ryan", "Arrow", "The Mandalorian", "Vikings", "The Witcher"];
        $imagensAcao = [""];

        $seriesComedia = ["Friends", "The Office", "Brooklyn Nine-Nine", "Parks and Recreation", "How I Met Your Mother", "The Big Bang Theory"];
        $imagensComedia = [""];

        $seriesDrama = ["Breaking Bad", "The Crown", "The Handmaid's Tale", "This Is Us", "Succession", "Mad Men"];
        $imagensComedia = [""];
        
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
                        <img src='assets/terror.webp' alt='Terror' class='card-image'>
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
                        <img src='assets/terror.webp' alt='Terror' class='card-image'>
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
                        <img src='assets/terror.webp' alt='Terror' class='card-image'>
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
</body>
</html>