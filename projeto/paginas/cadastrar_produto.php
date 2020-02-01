<?php
require_once('./acoes/cadastrar_produto.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];

    if (
        empty($nome) || empty($descricao) || empty($tipo) ||
        empty($preco)
    ) {
        $resultado = "Todos os campos são obrigatórios!";
    } else {
        $resultado = cadastrarProduto(
            $nome,
            $descricao,
            $tipo,
            $preco,
            $conexao
        );
    }
}
?>

<div class="container">

    <?php if (isset($resultado)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $resultado; ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="custom-select" id="tipo" name="tipo" required>
                <option value="">Selecione um tipo</option>
                <option value="comida">Comida</option>
                <option value="eletronico">Eletronico</option>
                <option value="roupa">Roupa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" step="any" class="form-control" id="preco" name="preco" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>