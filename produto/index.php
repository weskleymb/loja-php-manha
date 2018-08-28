<?php 

require_once(__DIR__ . "/../classes/modelo/Produto.class.php");
require_once(__DIR__ . "/../classes/modelo/Marca.class.php");
require_once(__DIR__ . "/../classes/dao/ProdutoDAO.class.php");

$marca = new Marca();
$marca->setId(2);

$produto = new Produto();
$produto->setNome("Fone");
$produto->setPreco(500.39);
$produto->setMarca($marca);

$dao = new ProdutoDAO();

echo("<pre>");
var_dump($dao->save($produto));
echo("</pre>");
