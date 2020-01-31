<?php

$config = [
    'host' => 'localhost',
    'user' => 'developer',
    'pass' => '4linux',
    'db' => 'blog'
];

$conexao = pg_connect("host={$config['host']} 
                dbname={$config['db']} 
                user={$config['user']} 
                password={$config['pass']}");

if (!$conexao) {
    print("Erro ao conectar-se ao banco de dados!<br>");
    exit();
}