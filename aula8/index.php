<?php

require_once './db-post.php';

// $consulta = "SELECT * FROM usuario";

// if ($result = pg_query($conexao, $consulta)) {
//     while ($linha = pg_fetch_assoc($result)) {
//         foreach ($linha as $campo => $dado) {
//             echo "$campo : $dado <br>";
//         }
//         echo '<hr>';
//     }
// }

// pg_free_result($result);

// $nome = "Caique";
// $email = "caique.portela@4linux.com.br";
// $senha = '4linux';

// $inserir = "INSERT INTO usuario (nome, senha, email) " .
//             "VALUES ('$nome', '$senha', '$email')";

// if ($resultado = pg_query($conexao, $inserir)) {
//     print("Linhas afetadas: " . pg_affected_rows($resultado));
// } else {
//     print("Erro: " . pg_result_error($resultado));
// }


// $parametro = '%gmail%';
// $consulta = "SELECT * FROM usuario WHERE email LIKE $1";

// if (pg_prepare($conexao, '', $consulta)) {
//     if ($resultado = pg_execute($conexao, '', [$parametro])) {
//         while ($linha = pg_fetch_assoc($resultado)) {
//             foreach ($linha as $campo => $dado) {
//                 echo "$campo => $dado <br>";
//             }
            
//             echo '<hr>';
//         }
//     }

//     pg_free_result($resultado);
// }

$email = "jose.oliveira@gmail.com";
$id = 3;
$atualiza = "UPDATE usuario SET email = $1 WHERE id = $2";

if (pg_prepare($conexao, 'att_user', $atualiza)) {
    if ($resultado = pg_execute($conexao, 'att_user', [$email, $id])) {
        $linhas = pg_affected_rows($resultado);

        if ($linhas > 0) {
            print("Atualização bem sucedida! $linhas foram atualizada!");
        }
    }

    pg_free_result($resultado);
} else {
    print("Erro ao preparar: " . pg_last_error($conexao));
}


pg_close($conexao);