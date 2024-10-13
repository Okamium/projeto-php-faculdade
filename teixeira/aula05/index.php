<html>
	<head>
	</head>
	<body>
		<form action="index.php" method="POST">
			<label>Nome:</label>
            <input type="text" placeholder="Digite seu nome">
            <hr>

			<label>Copo</label>
            <p>Valor Base: R$10,00</p>
            <br>

            <input type="radio" name="pedro" value="pequeno">Pequeno <br>
            <input type="radio" name="pedro" value="medio">Médio (+50%) <br>
            <input type="radio" name="pedro" value="grande">Grande (+100%)           
            <hr>

            <label>Condimentos: </label>
            <p>Valor Base: </p>
            <br>
            
            <input type="checkbox" name="checkbox1" value="ninho">Leite Ninho - R$3,00 <br>
            <input type="checkbox" name="checkbox2" value="leiteCondensado">Leite Condensado - R$3,50 <br>
            <input type="checkbox" name="checkbox3" value="confete">Confete - R$2,50 <br>
            <input type="checkbox" name="checkbox3" value="pacoca">Paçoca - 1,50 <br>    
            <hr>
			
			<input type="submit" value="Enviar"/>
		</form>
				
		<?php
            error_reporting(0);
            $preco_base = 10;
            $nome = $_POST["nome"];

		//isset verifica se a variável está definida.
			if(isset($_POST["mes"])){
				$mes = $_POST["mes"];
				switch($mes){
					case 1:
						echo "Janeiro";
					break;
					case 2:
						echo "Fevereiro";
					break;
					case 3:
						echo "Março";
					break;
					case 4:
						echo "Abril";
					break;
					case 5:
						echo "Maio";
					break;
					case 6:
						echo "Junho";
					break;
					case 7:
					case 8:
					case 9:
						echo "Terceiro Trimestre";
					break;
					case 10:
					case 11:
					case 12:
						echo "Quarto Trimestre";
					break;
				}
			}
		?>
		
	</body>
</html>
