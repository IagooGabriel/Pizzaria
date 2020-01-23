<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Pizza Net</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">

</head>
<body>

	<?php include('padrao.php') ?>
	<div style="color:black;" class="login fonte">
	<form action="visualizar_pedido.php" method="post"><br>
 		<p style="text-decoration: underline;" class="fonte">Realizar Pedidos:</p>
		Sabor Pizza:
		<select class="input_form" name="sabor_pizza">
			<option value="Nao selecionado">-------Sabor-------</option>  
			<option value="Bacalhau">BACALHAU</option>
			<option value="Da casa">DA CASA</option>
			<option value="Banana">BANANA</option>
			<option value="Chocolate">CHOCOLATE</option>
			<option value="Chocolate Branco">CHOCOLATE BRANCO</option>
			<option value="Prestigio">PRESTÍGIO</option>
			<option value="Sensacao">SENSAÇAO</option>
			<option value="Frango com Catupiry">FRANGO COM CATUPIRY</option>
			<option value="Calabresa com Catupiry">CALABRESA COM CATUPIRY</option>
			<option value="Marguerita">MARGUERITA</option>
			<option value="Portuguesa">PORTUGUESA</option>
			<option value="Strognoff de Carne">STROGNOFF DE CARNE</option>
			<option value="Peperoni">PEPERONI</option>
			<option value="Bacon">BACON</option>
		</select><br>

		Tamanho Pizza:
		<select class="input_form" name="tam_pizza">
			<option style="text-align: center;"  value=" ">-----Tamanho-----</option>
			<option value="Broto">BROTO</option>
			<option value="Media">MEDIA</option>
			<option value="Grande">GRANDE</option>
		</select><br><br>
		<input class="enviar" type="Submit" value="Enviar "> 
		<input class="enviar" type="Reset" value="Limpar Dados">
	</form>
</div>
</body>
</html>