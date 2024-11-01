<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = 5.5;
        $nota2 = 6;
        $nota3 = 8;
        $media = 0;
        $Astring = "Sua média é: ";
    ?>

    <h1>AAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    In animi aspernatur molestias placeat sequi nam dolorum vel sapiente 
    sit tempora dolores ipsam sunt numquam cum doloribus inventore, nulla, minus temporibus!</p>

    <?php 
    echo( "<p>Teste dentro do PHP</p>" );
    echo( "<h3>PHP</h3>" );
    echo( "<p>Teste dentro do PHP</p>" );
    echo( " <div>
                <center><h1>PHP</h1></center>
                <p> <a href='https://www.php.net/' target='_blank'> Link do PHP </a> </p>
                <hr>
            </div>" );   
            
    echo( $Astring . ($nota1 +  $nota2 +  $nota3) / 3 );
    echo( "<br>" );
    echo( "<br>" );
    echo( "Também dá pra fazer assim, média: " . ($nota1 +  $nota2 +  $nota3) / 3 );
    echo( "<br>" );
    echo( "<br>" );
    echo( "Também dá pra fazer assim, média: " . ($nota1 +  $nota2 +  $nota3) / 3 );
    echo( "<br>" );
    echo( "<br>" );
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo( "Ou assim: " . $media );    
    echo( "<br>" );
    echo( "<br>" );
    echo( "Multiplicação´é " . ($nota1 * $nota2) )   
    ?>
</body>
</html>
