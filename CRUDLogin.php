<?php

class Conexao {

    public static $conexao = null;
    public static function getConexao(){

        $con = new PDO("mysql:host=localhost;dbname=compraki", "aluno", "aluno");
        return $con;

    }

}

class CRUDLogin{

        private $conexao;

        function __construct()
        {
            $this->conexao = Conexao::getConexao();
        }

        public function login($email, $pwd){
            $consulta = $this->conexao->query("SELECT nome FROM cad_usuario WHERE email = '$email' AND pwd = '$pwd'");
            $row = $consulta->fetch(PDO::FETCH_OBJ);
            return "ola ".$row->nome;
        }

        public function cadastrarUsuario($cpf, $rg, $nome, $email, $tel, $cel, $pwd, $tipuser_cd){

            $inserir = $this->conexao->prepare('INSERT INTO cad_usuario (cpf, rg, nome, email, tel, cel, pwd, tipuser_cd) values (:cpf, :rg,:nome, :email, :tel, :cel, :pwd, :tipuser_cd)');
            $inserir->execute(array(
                ':cpf' => $cpf,
                ':rg' => $rg,
                ':nome' => $nome,
                ':email' => $email,
                ':tel' => $tel,
                ':cel' => $cel,
                ':pwd' => $pwd,
                ':tipuser_cd' => $tipuser_cd
        ));
        }
        public function alterarUsuario($cpf, $rg, $nome, $email, $tel, $cel, $pwd){
            $alterar = $this->conexao->prepare('UPDATE cad_usuario set cpf = :cpf and rg = :rg and nome = :nome and email = :email and tel = :tel and cel = :cel and pwd = :pwd where nome = :nome');
            $alterar->execute(array(
                ':cpf' => $cpf,
                ':rg' => $rg,
                ':nome' => $nome,
                ':email' => $email,
                ':tel' => $tel,
                ':cel' => $cel,
                ':pwd' => $pwd,
            ));
        }
    }
        $crud = new CRUDLogin();
        echo $crud->cadastrarUsuario($_POST['cpf'], $_POST['rg'], $_POST['nome'], $_POST['email'], $_POST['tel'],$_POST['cel'],$_POST['pwd'], "1");
        echo $crud->login($_POST['email'], $_POST['pwd']);
