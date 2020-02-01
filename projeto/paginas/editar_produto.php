<?php

require_once('./acoes/editar_produto.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];

    if (
        empty($id) || empty($nome) || empty($descricao) || empty($tipo) ||
        empty($preco)
    ) {
        $erro = "Todos os campos precisam ser preenchidos!";
    } else {
        $erro = atualizaProduto(
            $id,
            $nome,
            $descricao,
            $tipo,
            $preco,
            $conexao
        );
    }
}

$produto = buscarProduto($_GET['id'], $conexao);

?>

<div class="container">

    <?php if (isset($erro)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro; ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <input type="hidden" id="id" name="id" value="<?= $produto['id']; ?>">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $produto['nome']; ?>" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $produto['descricao']; ?>" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="custom-select" id="tipo" name="tipo" required>
                <option value="">Selecione um tipo</option>
                <option <?php if ($produto['tipo'] === "comida") echo "selected"; ?> value="comida">Comida</option>
                <option <?php if ($produto['tipo'] === "eletronico") echo "selected"; ?> value="eletronico">Eletronico</option>
                <option <?php if ($produto['tipo'] === "roupa") echo "selected"; ?> value="roupa">Roupa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" step="any" class="form-control" id="preco" name="preco" value="<?= $produto['preco']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>