<?php

require_once(__DIR__ . "/./Conexao.class.php");
require_once(__DIR__ . "/../modelo/Funcionario.class.php");
require_once(__DIR__ . "/../modelo/Cliente.class.php");
require_once(__DIR__ . "/../modelo/Produto.class.php");


class VendaDAO {

    private $conexao;

    function __construct() {
        $this->conexao = Conexao::get();
    }

    public function insert(Venda $venda) {
        $sql = "INSERT INTO tb_vendas (ven_fun_matricula, ven_cli_id, ven_total_venda) VALUES (:funcionario, :cliente, :total)";
        try {
            $funcionario = $venda->getFuncionario()->getMatricula();
            $cliente = $venda->getCliente()->getId();
            $total = $venda->getValor();
            $statement = $this->conexao->prepare($sql);
            $statement->bindParam(':funcionario', $funcionario);
            $statement->bindParam(':cliente', $cliente);
            $statement->bindParam(':total', $total);
            $statement->execute();
            $venda->setId($this->conexao->lastInsertId());
            foreach($venda->getProdutos() as $produto) {
                $sql = "INSERT INTO tb_itens_vendas (idv_ven_id, idv_pro_id) VALUES (:venda, :produto)";
                $venda_id = $venda->getId();
                $produto_id = $produto->getId();
                $statement = $this->conexao->prepare($sql);
                $statement->bindParam(':venda', $venda_id);
                $statement->bindParam(':produto', $produto_id);
                $statement->execute();
            }
            return $venda;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return null;
        }
    }

}
