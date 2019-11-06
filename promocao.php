<?php

$json = file_get_contents('data_bases/produtos.json');
$array_produtos = json_decode($json, true);
?>

<html>
    <head>
        <link rel="stylesheet" href="semantic.css" type="text/css">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <script type="text/javascript" src="semantic.js"></script>
        <title >Compraki</title>
        <style>
            #menuzinho a:hover{
                background-color: #ff6a00;
            }
            body{

            }
            #imagem{
                background-image: url(data_bases/img/index.png);
                background-repeat: no-repeat;
            }
            h1{
                font-weight: 100;
                line-height: 1.1;
            }
        </style>
    </head>
<body>
    <div class="ui pointing fixed hidden menu" style=" display: flex !important;background-color: #f4511e;">
        <a class="item" href="index.php">
            <p style="font-size: 20px; color: white;">Compraki</p>
        </a>
        <div id="menuzinho" class="right menu" style="padding-right: 40px; ">
            <a href="index.php" class="item" style="border-color: #f4511e;background-color: #f4511e;border-bottom: 1px solid #f4511e;border-right: 1px solid #f4511e;color: white;">
                Home
            </a>
            <a href="carrinho.php" class="item" style="color: white">
                Carrinho
            </a>
            <a class="item" href="login.php" style="color: white">
                Login
            </a>
             <a href="sobre.php" class="item" style="color: white">
                Sobre Nós
            </a>

        </div> 
    </div>
    <div style="background-color: #f4511e; color: white; margin-top: 2%;
    padding-top: 4%;">
    <h1 style="font-size: 73px;text-align: center; font-family:"Lucida Sans Unicode", "Lucida Grande", "sans-serif";>PROMOÇÕES</h1>
        <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7; margin-bottom: 4%;"></h3>
        <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
    </div>
    <div class="ui fluid three item menu" style="margin-top: 0%;">
        <a href="index.php" class="item" style="padding: 1%;font-size: 121%;">Página Inicial</a>
        <a href="top.php" class="item" style="padding: 1%;font-size: 121%;">TOP Ofertas</a>
        <a href="produto.php" class="item" style="padding: 1%;font-size: 121%;">Todos os Produtos</a>
</div>
    <br>
    <br><br><br><br>

    <div class="ui link cards" id="cards" style="margin-left: 3.7%;"><?php foreach($array_produtos as $produto): ?>
    <div class="card" id="cardsJogos">
        <div class="image">
            <img src="data_bases/img/<?= $produto['img'] ?>" style="width: 200px; height: 230px;">
        </div>
        <div class="content" >
            <div class="description">
                <?= $produto['desc'] ?>
            </div>
        </div>
        <div class="extra content">
      <span class="right floated" style="padding-right: 20px">

      </span>
            <span>
        <?= $produto['preco'] ?><i class="tag up icon blue" style="color-text: black; padding-left: 200px;"></i>
      </span>
        </div>
    </div>
<?php endforeach ?>
</div>
</body>
</html>