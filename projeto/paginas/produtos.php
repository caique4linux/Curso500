<?php

require_once('./acoes/produtos.php');

$nome = $_GET['nome'] ?? '';
$produtos = buscaTodosProdutos($conexao, $nome);
if (!$produtos) {
    $erro = "Falha ao buscar produtos cadastrados";
}

?>

<a class="btn btn-primary" href="?pagina=cadastrar_produto">Criar novo</a>

<div class="container">

    <?php if (isset($erro)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro; ?>
        </div>
    <?php endif; ?>

    <form class="form-inline" action="">
        <input type="hidden" name="pagina" value="produtos">
        <label class="sr-only" for="nome">Nome</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="nome" name="nome" placeholder="Nome do produto..." required>
        <button type="submit" class="btn btn-success mb-2">Buscar</button>
    </form>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($produto = mysqli_fetch_assoc($produtos)) : ?>
                <tr>
                    <th scope="row"><?= $produto['id'] ?></th>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['descricao'] ?></td>
                    <td>R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></td>
                    <td>
                        <a class="btn btn-danger" href="?pagina=deletar_produto&id=<?= $produto['id']; ?>">Apagar</a>
                        <a class="btn btn-primary" href="?pagina=editar_produto&id=<?= $produto['id']; ?>">Editar</a>
                        <a class="btn btn-success" href="?pagina=comprar_produto&id=<?= $produto['id']; ?>">Comprar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>