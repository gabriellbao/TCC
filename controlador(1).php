<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    function olaUsuario(){
        echo "Olá usuário";
    }
    function olaAdmin(){
        echo "Olá Admin";
    }
    if($email == "admin" AND $senha == "admin"){

        header("location:index.php?msg=Bem_vindo:$email");

    }elseif($email == "usuario" AND $senha == "12345") {
        header("location:index.php?msg=Bem_vindo:$email");
    }else{
        header("location:login.php?msg=usuario_$email nao_encontrado");
    }


     if($email == "entregador" AND $senha == "entregador"){

        header("location:pag_entregador.php?msg=Bem_vindo:$email");
    }