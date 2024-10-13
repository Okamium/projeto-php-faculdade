<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula de Session</title>
</head>
<body>
    
<?php
    $_SESSION["favcolor"] = "green"; 
    $_SESSION["favanimal"] = "cat";
    if(isset($_SESSION["value"])) {
        echo $_SESSION["value"];
    }
    else {
        echo "Inicia a sessão ai";
    }
   // print_r($_SESSION);
?>
    
</body>
</html>