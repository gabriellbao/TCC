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

<!-- Page Contents -->
<br><br>
<div class="pusher" >

<div class="ui secondary pointing fixed hidden menu" style="background-color: #f4511e; display: flex !important; ">
    <a class="item" href="index.php">
        <p style="font-size: 20px; color: white;">Compraki</p>
    </a>
   <div id="menuzinho" class="right menu" style="background-color: #f4511e; padding-right: 40px; ">
            <a class="item" href="index.php" style="color: white;">
                Home
            </a>
            <a href="carrinho.php" class=" active item" style="color: white;border-color: #ffffff;">
                Carrinho
            </a>
            <a class="item" href="login.php" style="color: white;">
                Login
            </a>
             <a href="sobre.php" class="item"style="color: white;">
                Sobre Nós
            </a>

        </div>
</div>
    
    <div>&nbsp;</div>
        <div>&nbsp;</div>
       <div class="ui last container">
  <div class="ui three steps">
    
    <div class="step">
      <div class="content">
        <div class="title">Carrinho</div>
        <div class="description">Revise seus Produtos</div>
      </div>
    </div> 
 

    <div class="step">
      <div class="content">
        <div class="title">Cadastrar Dados</div>
        <div class="description">Informaçoes de Entrega</div>
      </div>
    </div>

    <div class="active step">
      <div class="content">
        <div class="title">Finalizar Compra</div>
        <div class="description">Revise suas Informações</div>
      </div>
    </div>
  </div>
</div>
 <h4 class="ui dividing header" style="margin-left: 8%;margin-top: 2%;">Dados Cadastrados</h4>
<a href="cadastroDados.php">
<button class="positive ui button" style="background-color:#147ece;width: 19%;padding: 2%;margin-top: 4%;margin-left: 31%;">Editar Dados de Entrega</button>
</a>
<a href="index.php">
<button class="positive ui button" style="background-color:#189618;width: 19%;padding: 2%;">Confirmar Pedido</button>
</a>
</div>
</body>
</html>




