<?php
    require_once('./acoes/produto_usuario.php');

    $dados = buscarRelacao($conexao);

?>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Tipo</th>
                <th scope="col">Preço</th>
                <th scope="col">Usuário</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dado = mysqli_fetch_assoc($dados)) : ?>
                <tr>
                    <th scope="row"><?= $dado['id'] ?></th>
                    <td><?= $dado['nome'] ?></td>
                    <td><?= $dado['descricao'] ?></td>
                    <td><?= $dado['tipo'] ?></td>
                    <td>R$ <?= number_format($dado['preco'], 2, ',', '.'); ?></td>
                    <td><?= $dado['username'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>