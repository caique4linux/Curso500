<?php

$config = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '4linux',
    'db' => 'blog'
];

$conexao = mysqli_connect($config['host'], $config['user'],
    $config['pass'], $config['db']);


if (mysqli_connect_errno()) {
    print("Erro ao se conectar ao banco de dados!<br>");
    print(mysqli_connect_error());
    exit();
}