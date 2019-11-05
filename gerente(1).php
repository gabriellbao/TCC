<?php

$json = file_get_contents('data_bases/produtos.json');
$array_produtos = json_decode($json, true);
?>
<html>
<head>
        <title>Gerente</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="semantic.css" type="text/css">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <script type="text/javascript" src="semantic.js"></script>

</head>
<body>

    <div style="background-color: #f4511e; color: white; margin-top: 2%;
    padding-top: 4%;margin-bottom: -1%;padding-bottom: 3%;">
        <h1 style="font-size: 73px;text-align: center; font-family:"Lucida Sans Unicode, Lucida Grande, sans-serif;>GERENTE</h1>
        <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;"></h3>
        <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
    </div>

    
 <div class="ui three item menu" style="background-color: #f4511e;
    font-size: 119%;">
  <a class="active item" style="color: white;">Pedidos</a>
  <a class="item" style="color: white;">Entregas</a>
  <a class="item"style="color: white;">Produtos</a>
  </div>

  <div class="right menu">
    <div class="item">
      <div class="ui transparent inverted icon input">
        <i class="search icon"></i>
        <input type="text" placeholder="Pesquisar">
      </div>
    </div>
    <a class="item"></a>
  </div>
</div>
  </div>
  <div style="margin-top: 4%; margin-left: 25%;">
     <button class="large ui button" style="padding: 2.785714em 3.5em 2.785714em;border-radius: -14.714286rem;"><i class=" plus icon"></i> Adicionar produto</button>
     <button class="large ui button" style="padding: 2.785714em 3.5em 2.785714em;border-radius: -14.714286rem;"><i class=" plus icon"></i> Editar produto</button>
     <button class="large ui button" style="padding: 2.785714em 3.5em 2.785714em;border-radius: -14.714286rem;"><i class=" plus icon"></i> Excluir produto</button>
  </div>


<div class="ui secondary pointing fixed hidden menu" style="background-color: #f4511e; display: flex !important; ">
        <a class="item" href="index.php">
            <p style="font-size: 20px; color: white;">Compraki</p>
        </a>
        <div id="menuzinho" class="right menu" style="background-color: #f4511e; padding-right: 40px; ">
            <a class="active item" style="color: white; border-color: white;">
                Home
            </a>
            <a class="item" style="color: white;">
                Carrinho
            </a>
            <a class="item" href="login.php" style="color: white;">
                Login
            </a>
        </div>
    </div>
    <br>
</body>
</html>