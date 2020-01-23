<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head style="margin:0; border:0;">
    <link rel="stylesheet" href="../pizza_net/estilo.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Pizza NET</title>
<body class="topo">

<?php session_start(); $user = $_SESSION['usuario'] ?>
    <div align="center">
        <img class="banner" oncontextmenu="return false" onselectstart="return false" src="../pizza_net/background/logo.png">
    </div>
    <div>
        <img class="boxagenda" oncontextmenu="return false" onselectstart="return false" src="../pizza_net/background/boxagenda.png">
        <p class="sobre">
            SOBRE NÓS:<br><br>
            Nossa intenção é levar a boa pizza á todos os clientes e manter<br> a tradição na produção artesanal de pizzas,<br>
            assadas em forno à lenha. Contamos com uma equipe<br> de mestres pizzaiolos muito experientes no preparo das pizzas.<br><br>

            A diferença na sua qualidade deve-se ao preparo de uma massa<br> preparada na hora, o que agrada muito. Os fornecedores são<br> escolhidos a dedo, pois ingredientes de qualidade<br> são referência para nossos clientes.<br><br>

            <font color="black">Endereço: Rua IX de Setembro - Centro, Curitiba PR.<br>
            Tel.: (41)98768-7657</font>

        </p>
    </div>
    <div>
        <img class="atend banner_atend" oncontextmenu="return false" onselectstart="return false" src="../pizza_net/background/atendimento_hr.png">
    </div>
<div class="pos">
<ul class="menu">

    <li><a href="#"><?php echo $user ?></a><br>
        <ul>
            <li><a href="index.php">LOG OFF</a></li>
        </ul>
    </li>
    <li><a href="pizzas.php">PIZZAS</a></li>

    <li><a href="bebidas.php">BEBIDAS</a></li>
    <li><a href="visualizar_pedido.php">VISUALIZAR PEDIDO</a></li>
    <li><a href="mais_pedi.php">SABORES MAIS PEDIDOS</a></li>
    <li><a href="pedidos_anteriores.php">PEDIDOS ANTERIORES</a></li>
    <li><a href="concluir_pedido.php">CONCLUIR PEDIDO</a></li>
    <li><a href="opinar.php">OPINAR</a></li>
    </ul>
<div>
</body>
</html>