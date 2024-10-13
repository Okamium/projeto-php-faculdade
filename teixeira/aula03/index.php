<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="index.php" method="GET">
        <h1>Formulário</h1>

        <label for="nome">Nome</label>    
        <input type="text" name="nome" maxlength="150" placeholder="Digite seu nome">

        <label for="cpf">CPF</label>    
        <input type="text" name="cpf" maxlength="30" placeholder="Digite seu CPF">

        <label for="idade">Idade</label>    
        <input type="number" name="idade" placeholder="Digite sua idade">

        <label for="email">Email</label>    
        <input type="text" name="email" maxlength="30" placeholder="Digite seu email">

        <input type="submit" value="Enviar">
    </form>
    
    <?php
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $idade = $_GET["idade"];
        $email = $_GET["email"];
    ?>

    <?php 
        echo( " <p>O seu nome é $nome</p> </br>");
        echo( " <p>O seu cpf é $cpf</p> </br>");
        echo( " <p>Sua idade é $idade</p> </br>");
        echo( " <p>O seu email é $email</p> </br>");
    ?> 
</body>
</html>