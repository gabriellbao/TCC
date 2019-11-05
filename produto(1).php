<?php
include ("CRUDprodutos.php");
$produtos = $crud->categoriaProduto("Cozinha");

?>
<!DOCTYPE html>


        <title>CompreAki</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="semantic.css" type="text/css">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <script type="text/javascript" src="semantic.js">
        </script>

        <style>
        body {

  }
  .ui.menu {
    margin: 3em 0em;
  }
  .ui.menu:last-child {
    margin-bottom: 110px;
  }
  </style>

  <!--- Example Javascript -->
  <script>
  $(document)
    .ready(function() {
      $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
      });
      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
          ;
        })
      ;
    })
  ;
  </script>
</style>
<head></
<body>
    <div style="background-color: #f4511e; color: white; margin-top: 2%;
    padding-top: 4%;">
        <h1 style="font-size: 73px;text-align: center; font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;">HIGIÊNE</h1>
        <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7; margin-bottom: 4%;"></h3>
        <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
    </div>    


<div class="ui fluid three item menu" style="margin-top: 0%;">
  <a class="item" style="padding: 1%;font-size: 115%;">Página Inicial</a>
  <a class="item" style="padding: 1%;font-size: 115%;">Promoção</a>
  <a class="item active" style="padding: 1%;font-size: 115%;">Todos os Produtos</a>
</div>


<div class="ui secondary pointing fixed hidden menu" style="background-color: #f4511e; display: flex !important; ">
        <a class="item" href="index.php">
            <p style="font-size: 20px; color: white;">Compraki</p>
        </a>
        <div id="menuzinho" class="right menu" style="background-color: #f4511e; padding-right: 40px; ">
            <a class="active item" style="color: white; border-color: white;">
                Home
            </a>
            <a class="item" href="carrinho.php" style="color: white;">
                Carrinho
            </a>
            <a class="item" href="login.php" style="color: white;">
                Login
            </a>
        </div>
    </div>
    <br>
    <br><br><br><br>

<div class="ui link cards" id="cards" style="margin-left: 3.7%;" "><?php foreach($produtos as $produto): ?>
    <div class="card" id="cardsJogos" >
        <div class="image">
            <img src="data_bases/img/<?= $produto['img'] ?>" style="width: 200px; height: 230px;">
        </div>
        <div class="content" >
            <div class="description">
                <?= $produto['nome'] ?>
            </div>
        </div>
        <div class="extra content">
      <span class="right floated" style="padding-right: 20px">

      </span>
            <span>
        <?= $produto['preco'] ?><i class="tag up icon blue" style="color-text: black; padding-left: 200px;"></i>
      </span>
        </div>
             <button class="ui green button" onclick="confirmarCompra('<?php echo $produto['nome']?>\n<?php echo $produto['preco']?>\n<?php echo $produto['desc_prod']?>')">Comprar</button>
    </div>
         <script type="text/javascript">
                function confirmarCompra(nome) {
                    confirm("Deseja mesmo comprar?\n\n"+nome+"\n")
                }
        </script>
<?php endforeach ?>
</div>

</body>
</html>
