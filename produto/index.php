<?php
require_once(__DIR__ . "/../classes/modelo/Marca.class.php");
require_once(__DIR__ . "/../classes/dao/MarcaDAO.class.php");
require_once(__DIR__ . "/../classes/modelo/Produto.class.php");
require_once(__DIR__ . "/../classes/dao/ProdutoDAO.class.php");

$marcaDao = new MarcaDAO();
$marcas = $marcaDao->findAll();

$produtoDao = new ProdutoDAO();
$produtos = $produtoDao->findAll();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6"><!-- Formulario -->
                <fieldset>
                    <legend>Dados do Produto</legend>
                    <form method="post">
                        <div class="form-group"><!-- input produto -->
                            <label for="produto">produto</label>
                            <input type="text" class="form-control" name="produto" id="produto">
                        </div>
                        <div class="form-group"><!-- select marca -->
                            <label for="marca">marca</label>
                            <select class="form-control" name="marca" id="marca">
                                <?php foreach($marcas as $marca): ?>
                                    <option value="<?=$marca->getId();?>"><?=$marca->getNome();?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group"><!-- input preco -->
                            <label for="preco">preço</label>
                            <input type="text" class="form-control" name="preco" id="preco">
                        </div>
                        <div class="form-group"><!-- button salvar -->
                            <button type="submit" class="btn btn-primary btn-block" name="salvar" value="salvar">
                                <i class="fas fa-save"></i> Salvar
                            </button>
                        </div>
                    </form>
                </fieldset>
            </div>
            <div class="col-6"><!-- Tabela -->
                <fieldset>
                    <legend>Lista de Produtos</legend>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>produto</th>
                                <th>marca</th>
                                <th>preco</th>
                                <th>ações</th>                        
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($produtos as $produto): ?>
                                <tr>
                                    <td><?=$produto->getId();?></td>
                                    <td><?=$produto->getNome();?></td>
                                    <td><?=$produto->getMarca()->getNome();?></td>
                                    <td><?=$produto->getPreco();?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>    
</body>
</html>