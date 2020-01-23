<!DOCTYPE html>
<html>
<head>
	<title>Pizza Net</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
	<?php 
		include('padrao.php');
	?>
	<img class="bg" oncontextmenu="return false" onselectstart="return false" src="../pizza_net/background/spacebox2.png">
	<div style="position: absolute; top: 35vh; left: 100vh;">
	<?php 
		$sabor   = @$_POST["sabor_pizza"];
		$tamanho = @$_POST["tam_pizza"];

		if($tamanho == " "){
			echo "<p style='color:#FF0000;' class='fonte'>Tamanho nao escolhido, por isso nao foi possível concluir o pedido!</p>";
			echo "<p style='color:#FF0000;' class='fonte'>Escolha novamente...</p>";
			echo "<meta http-equiv='refresh' content='3;url=../pizza_net/pedido.php'>";
		}
		else{
			echo "<br><p style='color:white; font-weight:bolder; font-size:22px;'>SABOR: ". $sabor . "<br><br>TAMANHO: " . $tamanho . "</p>";
			echo "<form action='concluir_pedido.php' method='POST'> " . "<input style='position:absolute; top: 40vh; left: -5vh;' class='enviar' type='Submit' value='Concluir Pedido'>" . "</form>";
		}
	?>
	</div>

</body>
</html>