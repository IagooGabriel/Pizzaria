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
    <img class="bg" oncontextmenu="return false" onselectstart="return false" src="../pizza_net/background/spacebox2.png">
    <div class="login">
    <form action="../pizza_net/index.php" method="POST">
	    <table>
	    	<tr>
	    		<td class="fonte">OPINIÃO</p></td>
	    	</tr>
	        <tr>
	            <td class="fonte">Usuário: <input required class="input_form" autocomplete="off" type="text" name="usuario"></td>
	        </tr>
	        <tr>
	            <td class="fonte">E-mail: <input required class="input_form" autocomplete="off" type="email" name="tel"></td>
	        </tr>
	        <tr>
	        	<td>
	        		<textarea placeholder="Deixe aqui a sua opiniao..." name="opiniao" rows="12" cols="30"></textarea>
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	                <br><br><input class="enviar" type="submit" value="ENVIAR" name="enviar">
	            </td>
	        </tr>
	    </table>
    </form>    
            
        </div>


</body>
</html>