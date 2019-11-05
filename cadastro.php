<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <style>

    </style>
</head>
<body>
<br><br>

<a href="index.php"><i class="arrow alternate circle left outline icon" style="margin-left: 3%;font-size: -webkit-xxx-large;color: #f4511e;
"></i></a> 

<div class="ui middle aligned center aligned grid" style="padding-left: 30%; padding-right: 30%; margin-top: -6%;">
    <div class="column" style="margin-top: 14%;">
        <h2 class="ui orange image header">
            <i class="user circle icon" style="color: #f4511e;"></i>
            <div class="content"style="color: #f4511e;">
              Cadastre sua Conta
            </div>
        </h2>
        <form class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="nomeCompleto" placeholder="Nome Completo">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="emailUser" placeholder="Email ou Username">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="confirmaSenha" placeholder="Confirmação de Senha">
                    </div>
                </div>
                <input type="submit" class="ui fluid large orange submit button" name="Cadastrar" style="background-color: #f4511e">
            </div>

        </form>

        <div class="ui message">
            Já possui cadastro? <a href="login.php" style=";font-weight: bolder;">Login</a><br>

        </div>
    </div>
</div>

</body>
</html>