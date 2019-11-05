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

            ;
        }
        h1{
            font-weight: 100;
            line-height: 1.1;
        }
    </style>
    <script src="assets/library/jquery.min.js"></script>
    <script src="../dist/components/visibility.js"></script>
    <script src="../dist/components/sidebar.js"></script>
    <script src="../dist/components/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>
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
            <a href="carrinho.php" class="active item" style="color: white;border-color: #ffffff; ">
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
      <a href="carrinho.php">
      <div class="content">
        <div class="title">Carrinho</div>
        <div class="description">Revise seus Produtos</div>
      </div>
      </a>
    </div>   

	<div class="active step" style="background: #eaeaea;">
      <a href="cadastroDados.php">
      <div class="content">
        <a href="cadastroDados.php"><div class="title">Cadastrar Dados</div></a>
        <div class="description">Informaçoes de Entrega</div>
      </div>
      </a>
    </div>

    <div class="step">
      <a href="finalizaCompra.php">
      <div class="content">
        <div class="title">Finalizar Compra</div>
        <div class="description">Revise suas Informações</div>
      </div>
  	</a>
    </div>
  </div>
</div>

<form class="ui form" style="margin-top: 2%;margin-left: 17%;width: 65%;background-color: #e0e0e0;padding-left: 1%;
    padding-top: 1%;
    padding-right: 1%;
    padding-bottom: 1%; margin-bottom: 5%;">
  <h4 class="ui dividing header">Informações de Entrega</h4>
  <div class="field">
    <label>Nome</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="shipping[first-name]" placeholder="Primeiro Nome">
      </div>
      <div class="field">
        <input type="text" name="shipping[last-name]" placeholder="Sobrenome">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Endereço de Cobrança</label>
    <div class="fields">
      <div class="twelve wide field">
        <input type="text" name="shipping[address]" placeholder="Endereço">
      </div>
      <div class="four wide field">
        <input type="text" name="shipping[address-2]" placeholder="Número">
      </div>
    </div>
  </div>
  <div class="two fields">
    <div class="field">
      <label>Estado</label>
      <select class="ui fluid dropdown">
        <option value="">Estado</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AM">Amapá</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PE">Pernanbuco</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Michigan</option>
    <option value="TO">Sergipe</option>
    <option value="MS">Tocantins</option>
      </select>
    </div>
    <div class="field">
      <label>País</label>
      <div class="ui fluid search selection dropdown">
        <input type="hidden" name="País">
        <i class="dropdown icon"></i>
        <div class="default text">Selecione país</div>
        <div class="menu">
     <div class="item" data-value="br"><i class="br flag"></i>Brazil</div>
  </div>
       </div>
    </div>
  </div>
  <h4 class="ui dividing header">Informações de pagamento</h4>
  <div class="field">
    <label>Bandeira do Cartão</label>
    <div class="ui selection dropdown">
      <input type="hidden" name="card[type]">
      <div class="default text">Tipo</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="visa">
          <i class="visa icon"></i>
          Visa
        </div>
        <div class="item" data-value="amex">
          <i class="amex icon"></i>
          American Express
        </div>
        <div class="item" data-value="discover">
          <i class="discover icon"></i>
          Discover
        </div>
      </div>
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Número do Cartão</label>
      <input type="text" name="card[number]" maxlength="16" placeholder="Número Cartão">
    </div>
    <div class="three wide field">
      <label>CVC</label>
      <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
    </div>
    <div class="six wide field">
      <label>Expira em:</label>
      <div class="two fields">
        <div class="field">
          <select class="ui fluid search dropdown" name="card[expire-month]">
            <option value="">Mês</option>
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Augosto</option>
            <option value="9">Septembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
          </select>
        </div>
        <div class="field">
          <input type="text" name="card[expire-year]" maxlength="4" placeholder="Ano">
        </div>
      </div>
    </div>
  </div>
   <h4 class="ui dividing header">Recibo</h4>
   <div class="field">
    <label>Enviar para:</label>
    <div class="ui fluid multiple search selection dropdown">
      <input type="hidden" name="receipt">
      <i class="dropdown icon"></i>
      <div class="default text">Saved Contacts</div>
      <div class="menu">
      </div>
    </div>
  </div>
   <div class="ui segment">
    <div class="field">
      <div class="ui toggle checkbox">
        <input type="checkbox" name="gift" tabindex="0" class="hidden">
        <label>Não incluir o recibo no pacote</label>
      </div>
    </div>
  </div>
  <a href="finalizaCompra.php">
  <div class="ui button" tabindex="0" style="color: #ffffff;margin-top: 2%;margin-left: 36%;background-color: #147ece;width: 28%;padding: 2%;">Enviar pedido</div>
  </a>
</form>