<?php 
    session_start();

    $valor = 3;

    $_SESSION["value"] = $valor * 8/5**3;

    echo "Conta gravada com sucesso </br>"; 
    echo $_SESSION["value"];
    echo " </br> <a href='index.php'> Voltar para a home </a>";
?>