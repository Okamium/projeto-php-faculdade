<?php

session_start();
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario === "Pintovosqui" && $senha === "Aula09") {
    $_SESSION["login"] = "s";
    $_SESSION["user"] = $usuario;
    $_SESSION["erro"] = "";
    echo "Usuário correto!";
}
else {
    $_SESSION["erro"] = "Usuário ou senha incorretos!";
    echo $_SESSION["erro"];
}

?>