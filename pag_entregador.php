<html>
<head>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <title>Compraki</title>
    <style>
        #menuzinho a:hover {
            background-color: #ff6a00;
        }

        body {

        }

        #imagem {
            background-image: url(data_bases/img/index.png);
            background-repeat: no-repeat;
        }

        h1 {
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
        <a class="item"
           style="border-color: #f4511e;background-color: #f4511e;border-bottom: 1px solid #f4511e;border-right: 1px solid #f4511e;color: white;">
            Home
        </a>
        <a href="Carrinho.php" class="item" style="color: white">
            Carrinho
        </a>
        <a class="item" href="Login.php" style="color: white">
            Login
        </a>
        <a href="sobre.php" class="item" style="color: white">
            Sobre Nós
        </a>

    </div>
</div>

<div class="ui inverted menu">
    <div class="header item">Brand</div>
    <div class="active item">Link</div>
    <a class="item">Link</a>
    <div class="ui dropdown item">
        Dropdown
        <i class="dropdown icon"></i>
        <div class="menu">
            <div class="item">Action</div>
            <div class="item">Another Action</div>
            <div class="item">Something else here</div>
            <div class="divider"></div>
            <div class="item">Separated Link</div>
            <div class="divider"></div>
            <div class="item">One more separated link</div>
        </div>
    </div>
    <div class="right menu">
        <div class="item">
            <div class="ui transparent inverted icon input">
                <i class="search icon"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>
        <a class="item">Link</a>
    </div>
</div>
&nbsp;
&nbsp;
&nbsp;
<div class="ui card">
    <div class="ui slide right reveal image">
        <div class="visible content">
            <img class="ui fluid image" src="img/arroz.png">
        </div>
        <div class="hidden content">
            <img class="ui fluid image" src="img/cafe.png">
        </div>
    </div>
    <div class="content">
        <div class="content">
            <div class="header">Title of product</div>
            <div class="meta">
                <a class="group">Price</a>
            </div>
            <div class="description">One or two sentence description that may go to several lines</div>
        </div>
    </div>
</div>
