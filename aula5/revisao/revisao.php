<html>
<body>
<h1><center>Revisão - aula 5</center></h1>
<h2><center>https://github.com/caique4linux/Curso500</center></h2>
<br><br>
<h3>Array</h3>
<br>
<p>Uma lista de dados diversos</p>
<p>Possui relação de chave valor</p>
<p>As chaves só podem ser numericas inteiras e texto</p>
<p>Qualquer valor pode ser declarado</p>
<br>
<p>Formas de declaração</p>
<pre>
    $lista = array(
        'Item 0',
        'Item 1',
        'Item 2'
    );
</pre>
<pre>
    $lista = [
        'Item 0',
        'Item 1',
        'Item 2'
    ];
</pre>
<p>Lista vazia</p>
<pre>
    $lista = [];
</pre>
<br>
<p>Para exibir utilizar var_dump() ou print_r()</p>
<p>Acessar um valor pela sua chave</p>
<pre>
    $lista = [ 'Item 0', 'Item 1' ];

    echo $lista[0]; // Irá exibir 'Item 0'
</pre>
<br>
<p>Usando associação</p>
<pre>
    $lista = [
        'chave0' => 'Item 0',
        'chave1' => 'Item 1',
        'chave2' => 'Item 2'
    ];

    echo $lista['chave1']; // Irá exibir 'Item 1'
</pre>
<br>
<p>Adiciona valor o final da array</p>
<pre>
    $lista = [
        'Item 1'
    ];

    $lista[] = 'Item 2'; // Irá adicionar o valor no final da array

    $lista[2] = 'Item 3'; // Irá adicionar o valor na chave 2

    $lista['chave3'] = 'Item 4'; // Irá adicionar o valor na chave 'chave3'
</pre>
<br>
<h3>Percorrendo arrays</h3>
<p>Utiliza-se o foreach</p>
<pre>
    $lista  = [ 'Item 0', 'Item 1' ];

    // Exibe todos os itens da lista
    foreach ($lista as $item) {
        echo nl2br("$item \n");
    }
</pre>
<br>
<p>Mostrando as chaves</p>
<pre>
    $lista = [
        'chave0' => 'Item 0',
        'chave1' => 'Item 1',
        'chave2' => 'Item 2'
    ];

    // Exibe todos as chaves e seus valores na lista
    foreach ($lista as $chave => $item) {
        echo nl2br("$chave possui valor $item \n");
    }
</pre>
<br>
</body>
</html>