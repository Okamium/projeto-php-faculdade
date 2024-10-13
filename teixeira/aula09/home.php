<html>
	<head>
	<style>
		#card{
			background: blue;
			border-radius: 10px;
			width: 40%;
			margin: 0px auto;
			padding: 5px;
		}
		
	</style>
	</head> 
	<body>  
    
    <div id="card">
    <?php 
    error_reporting(0);
    session_start();

        if($_SESSION["erro"] != "") {
            echo "<div style='background-color:red;'>";
            echo $_SESSION["erro"];
            echo "</div>";
        }
    ?>
        <form action="login.php" method="POST">
                        <label for="usr">Usuário:</label>
                        <input type="text" id="usr" name="usuario"><br/>
                        <label for="pwd">Senha</label>
                        <input type="password" id="pwd" name="senha"><br/>
                        <center><input type="submit" value="Enviar">
                        <input type="reset" value="Limpar"></center>
        </form>		
    </div>
</html>