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
    <form action="../pizza_net/index.php" method="POST">
        <table>
            <tr>
                <td class="fonte">Nome Completo: <input required class="input_form" autocomplete="off" type="text" name="nome"></td>
            </tr>
            <tr>
                <td class="fonte">E-mail: <input required class="input_form" autocomplete="off" type="email" name="usuario"></td>
            </tr>
            <tr>
                <td class="fonte">Telefone: <input required class="input_form" autocomplete="off" type="tel" name="tel"></td>
            </tr>
            <tr>
                <td class="fonte">Endereço: <input required class="input_form" autocomplete="off" type="text" name="end"></td>
            </tr>
            <tr>
                <td class="fonte">Senha: <input required class="input_form" autocomplete="off" type="password" name="senha"></td>
            </tr>
            <tr>
                <td class="fonte">Confirma Senha: <input required class="input_form" autocomplete="off" type="password" name="confirma_senha">
                    <br><br><input class="enviar" type="submit" value="ENVIAR" name="enviar">
                </td>
            </tr>
        </table>
    </form>
                    
                
            
        </div>
    </body>
</html>