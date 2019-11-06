<?php
include("CRUDprodutos.php");


if ($_GET['categoria'] != "todos") {
    $produtos = $crud->categoriaProduto($_GET['categoria']);
} elseif ($_GET['categoria'] == "todos") {
    $produtos = $crud->lerProdutos();
} else {
    header("location: erro.php");
}
?>
<html>

<head>
    <title>CompreAki</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js">
    </script>

</head>
<body>
<div style="background-color: #f4511e; color: white; margin-top: 2%; padding-top: 4%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;"><?= ucfirst($_GET['categoria']) ?></h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7; margin-bottom: 4%;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>
<div>

</div>
<div class="ui secondary pointing menu">
    <a href="produto.php?categoria=bebidas" class="item">
        Bebidas
    </a>
    <a href="produto.php?categoria=açougue" class="item">
        Açougue
    </a>
    <a href="produto.php?categoria=comidas" class="item">
        Comidas
    </a>
    <a href="produto.php?categoria=higiene" class="item">
        Higiêne
    </a>
    <a href="produto.php?categoria=verdureira" class="item">
        Verdureira
    </a>
    <a href="produto.php?categoria=frios" class="item">
        Frios
    </a>
    <div class="ui right menu">
        <form method="get">
            <div class="ui transparent icon input">
                <input class="prompt" type="text" name="categoria" id="categoria" placeholder="Buscar">
                <i class="search link icon" href="produto.php?categoria=<?= $_GET['categoria'] ?>"></i>
            </div>
        </form>
    </div>
</div>

<?php require "menuLogado.php" ?>

<div class="ui link cards" id="cards" style="margin-left: 3.7%;"
"><?php foreach ($produtos as $produto): ?>
    <div class="card" id="cardsJogos">
        <div class="image">
            <img src="data_bases/img/<?= $produto['img'] ?>" style="width: 200px; height: 230px;">
        </div>
        <div class="content">
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
        <button class="ui green button"
                onclick="confirmarCompra('<?php echo $produto['nome'] ?>\n<?php echo $produto['preco'] ?>\n<?php echo $produto['desc_prod'] ?>')">
            Comprar
        </button>
    </div>
    <script type="text/javascript">
        function confirmarCompra(nome) {
            confirm("Deseja mesmo comprar?\n\n" + nome + "\n")
        }
    </script>
<?php endforeach ?>
</div>

</body>
</html>
