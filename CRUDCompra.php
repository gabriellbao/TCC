<?php

class Conexao
{

    public static $conexao = null;

    public static function getConexao()
    {

        $con = new PDO("mysql:host=localhost;charset=utf8;dbname=compraki", "aluno", "aluno");
        return $con;

    }

}

class CRUDCompra
{

    private $conexao;

    function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function cadastrarEndereco($nome, $sobrenome, $endereco, $numero, $estado, $bandeiraCartao, $numeroCartao, $cvc, $mesVencimento, $anoVencimento)
    {

        $inserir = $this->conexao->prepare('INSERT INTO endereco (nome, sobrenome, endereco, numero, estado, bandeiraCartao, numeroCartao, cvc, mesVencimento, anoVencimento) values (:nome, :sobrenome, :endereco, :numero, :estado, :bandeiraCartao, :numeroCartao, :cvc, :mesVencimento, :anoVencimento)');
        $inserir->execute(array(
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':endereco' => $endereco,
            ':numero' => $numero,
            ':estado' => $estado,
            ':bandeiraCartao' => $bandeiraCartao,
            ':numeroCartao' => $numeroCartao,
            ':cvc' => $cvc,
            ':mesVencimento' => $mesVencimento,
            ':anoVencimento' => $anoVencimento
        ));
        header("location: finalizaCompra.php");
    }
    public function mostrarDados(){
        $consulta = $this->conexao->query('SELECT * FROM endereco');
        return $consulta;
    }
}

;
$crud = new CRUDCompra();
//echo $crud->cadastrarEndereco($_POST['nome'], $_POST['sobrenome'], $_POST['endereco'], $_POST['numero'], $_POST['estado'], $_POST['bandeiraCartao'], $_POST['numeroCartao'], $_POST['cvc'], $_POST['mesVencimento'], $_POST['anoVencimento'], $_POST['formaPagamento']);
echo $crud->mostrarDados();
