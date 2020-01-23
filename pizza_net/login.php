<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css">

    </head>
    <body>
        <?php include('padrao.php')?>
        <img class="bg" oncontextmenu="return false" onselectstart="return false" src="../pizza_net/background/spacebox2.png">
        <div class="login">

            <table>
                <tr>
                    <td class="fonte">Já tem uma conta? Faça seu LOGIN </td>
                </tr>
                <tr>
                    <form action="" method="POST">
                    <td class="fonte"><br>Usuário:<input required class="input_form" autocomplete="off" type="text" name="usuario"></td>
                </tr>
                <tr>
                    <td class="fonte">Senha:<input required class="input_form" autocomplete="off" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td class="fonte"><br><br>
                    <input class="enviar" type="submit" value="ENVIAR" name="enviar">
                    </form>
                    </td>
                </tr>
            </table>
        </div>
        <?php
				/* Declaração de Variáveis */
				$user = @$_REQUEST['usuario'];
				$pass = @$_REQUEST['senha'];
				$submit = @$_REQUEST['enviar'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'viniciusm' || 'VINICIUSM';
				$pass1 = '123';
				
				
				/* Testa se o botão submit foi ativado */
				if($submit){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
						if(($user == $user1 && $pass == $pass1)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: logado.php");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
				}
			?>
    </body>
</html>