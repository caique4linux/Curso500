<html>
<body>
<h1><center>Revisão - aula 6</center></h1>
<h2><center>https://github.com/caique4linux/Curso500</center></h2>
<br><br>
<h3>Trabalhando com arrays</h3>
<a href="https://www.php.net/manual/pt_BR/book.array.php" target="_blank">https://www.php.net/manual/pt_BR/book.array.php</a>
<br>
<br>
<p><b>range</b> Gera uma array com números entre o intervalo informado</p>
<pre>
    $lista = range(0, 20); // Lista de numeros de 0 a 20
</pre>
<p><b>array_key_exists</b> Checa se array possui a chave informada</p>
<pre>
    $cursos = [
        'PHP 1' => "Programação para WEB",
        'PHP 2' => "Orientação a Objetos"
    ];

    print_r(array_key_exists('PHP 1', $cursos));
</pre>
<p><b>in_array</b> Checa se array possui um valor</p>
<pre>
    $cursos = ["PHP 1", "PHP 2"];

    print_r(in_array('PHP 1', $cursos));
</pre>
<p><b>shuffle</b> Mistura ordem de elemtos em uma array</p>
<pre>
    $cursos = ["PHP 1", "PHP 2", "PHP 3", "PHP 4"];
    print_r($cursos);
    shuffle($cursos);
    print_r($cursos);
</pre>
<p><b>sort</b> Ordena do menor para o maior</p>
<p><b>rsort</b> Ordena do maior para o menor</p>
<p><b>asort</b> 'sort' mantendo a relação chave valor</p>
<p><b>arsort</b> 'rsort' matendo a relação chave valor</p>
<p><b>ksort</b> Ordena pela chave do menor para o maior</p>
<pre>
    $frutas = array("d"=>"limao", "a"=>"laranja", "b" =>"banana", "c"=>"maçã");
    ksort($frutas);

    print_r($frutas);
</pre>
<p><b>krsort</b> Ordena pela chave do maior para o menor</p>
<p><b>usort</b> Recebe uma função para ordenação</p>
<pre>
    $frutas = array("d"=>"limao", "a"=>"laranja", "b" =>"banana", "c"=>"maçã");

    usort($frutas, function($a, $b) {
        return ($a > $b) ? 1 : -1;
    });

    print_r($frutas);
</pre>
<p><b>natsort</b> Ordem natual humana</p>
<pre>
    $imagens = ["img12.png", "img10.png", "img2.png", "img1.png"];

    sort($imagens);
    var_dump($imagens);

    echo '&lt;br&gt;&lt;br&gt;';

    natsort($imagens);

    var_dump($imagens);
</pre>
<p><b>array_push</b> Adiciona um ou varios itens ao final</p>
<p><b>array_pop</b> Remove o ultimo item</p>
<p><b>array_shift</b> Remove o primeiro item</p>
<p><b>array_walk</b> Executar função de callback na array. Não altera ela a menos que passe por referencia. Pode receber chave.</p>
<pre>
    $numeros = range(0,10);

    array_walk($numeros, function (&$numero, $chave) {
        $numero *= $chave;
    });

    var_dump($numeros);
</pre>
<p>Usando o 'use':</p>
<pre>
    $numeros = range(0,10);

    $total = 0;

    array_walk($numeros, function (&$numero, $chave) use (&$total) {
        $numero *= $chave;
        $total++;
    });

    var_dump($numeros);

    echo '&lt;br&gt;&lt;br&gt;';

    echo $total;
</pre>
<p><b>array_merge</b> Juntar arrays</p>
<pre>
    $numeros = range(0,10);

    $frutas = [
        'banana',
        'manga',
        'melancia',
        'abacaxi',
        'goiaba'
    ];

    $nova = array_merge($numeros, $frutas);

    var_dump($nova);
</pre>
<p><b>array_diff</b> Calcula diferença entre arrays (todos que estão no A e não no B)</p>
<pre>
    $array1 = array("a" => "verde", "vermelho", "azul", "vermelho");
    $array2 = array("b" => "verde", "amarelo", "vermelho");
    $result = array_diff($array1, $array2);

    var_dump($result);
</pre>
<p><b>array_diff_assoc</b> Checa diferença de chave e valor</p>
<pre>
    $array1 = array("a" => "verde", "b" => "marrom", "c" => "azul", "vermelho");
    $array2 = array("a" => "verde", "amarelo", "vermelho");
    $result = array_diff_assoc($array1, $array2);
    var_dump($result);
</pre>
<p><b>array_diff_key</b> Checa diferença apenas de chaves</p>
<pre>
    $array1 = array('azul'  => 1, 'vermelho'  => 2, 'verde'  => 3, 'roxo' => 4);
    $array2 = array('verde' => 5, 'azul' => 6, 'amarelo' => 7, 'rosa'   => 8);

    var_dump(array_diff_key($array1, $array2));
</pre>
<p><b>array_map</b> Aplica uma função em todos elementos</p>
<pre>
    $itens = range(0, 20);

    $itensNovos = array_map(function($item) {
        return $item * 2;
    }, $itens);

    var_dump($itensNovos);
</pre>
<p><b>array_filter</b> Aplica função em todos elementos, se retornar true o valor é adicionado a nova array</p>
<pre>
    $itens = range(0, 20);

    $itensNovos = array_filter($itens, function($item) {
        return ($item % 2 === 0);
    });

    var_dump($itensNovos);
</pre>
<p><b>array_reduce</b> Transforma array em um unico valor utilizando a função</p>
<pre>
    $itens = range(0, 20);

    $itensNovos = array_reduce($itens, function($anterior, $item) {
        return $anterior + $item;
    });

    print($itensNovos);
</pre>
<p><b>array_unique</b> Remove valores duplicados</p>
<pre>
    $input = array("a" => "verde", "vermelho", "b" => "verde", "azul", "vermelho");
    $result = array_unique($input);
    print_r($result);
</pre>
<p><b>array_chunk</b> Quebra array em pedaços. Ex: array_chunk($array, tamanhodopedaco)</p>
<p><b>array_combine</b> Cria uma array a partir de uma array para chaves e um para valor</p>
<pre>
    $a = array('verde', 'vermelho', 'amarelo');
    $b = array('abacate', 'maçã', 'banana');
    $c = array_combine($a, $b);

    var_dump($c);
</pre>
<p><b>array_search</b> Procura valor e retorna chave</p>
<pre>
    $array = array('blue', 'red', 'green', 'red');

    echo array_search('green', $array);
</pre>
<p><b>array_replace</b> Substitui itens</p>
<pre>
    $cores = ['blue', 'yellow', 'green', 'red'];
    $procura = ['blue', 'yellow'];
    $substitui = ['azul', 'amarelo'];

    var_dump(array_replace($cores, $procura, $substitui));
</pre>
<p><b>array_sum</b> Soma elementos da array</p>
<pre>
    $numeros = range(1,10);

    echo array_sum($numeros);
</pre>
<br><br>
<h3>Variaveis globais</h3>
<br>
<p><b>$GLOBALS </b> Array associativo com todas variaveis globais do PHP</p>
<pre>
    function mostrar() {
        $nome = "Maria";

        echo '$nome no escopo local: ' . $nome . '&lt;br&gt;';
        echo '$nome no escopo global: ' . $GLOBALS['nome'] . '&lt;br&gt;';
    }

    $nome = "João";
    mostrar();
    print_r($_SERVER);
</pre>
<p><b>$_SERVER</b> Possui diversas informações sobre a requisição (servidor e cliente)</p>
<p><b>$_GET</b> Possui informações passadas via get</p>
<p><b>$_POST</b> Possui informações passadas via post</p>
<p><b>$_FILES</b> Dados de arquivos enviados via post</p>
<p><b>$_COOKIE </b> Informações dos cookies </p>
<p><b>$_SESSION</b> Dados registrados na sessão</p>
<p><b>$_REQUEST</b> Possui dados de $_GET, $_POST e $_COOKIE</p>
<p><b>$_ENV</b> Mostra variaveis de ambiente da maquina (precisa habilitar no php.ini na opção variables_order)</p>
<br><br>
<h3>Protocolo HTTP</h3>
<p>Toda requisição possui um método que indica a ação a ser realizada</p>
<p>Toda requisição possui um cabeçalho de envio e de resposta com informações adicionais</p>
<p>Toda reposta possui um código que indica a situação</p>
<p>Apesar requisições seguras utilizando HTTPS é encriptada</p>
<p>Pode-se visualizar as informações das requisições no console do navegador (Normalmente F12)</p>
<p>Quando se fala de sites e todo funcionamento da WEB, basicamente se resume no uso do HTTP</p>
<p>Atualmente com o uso de APIs REST, tende-se a ser utilizado em todo tipo de dispositivo como meio de comunicação entre aplicações e a persistencia de dados.</p>
<br>
<p>Pode-se adicionar cabeçalhos na resposta do PHP com a função 'header()'</p>
<pre>
    // Redireciona cliente
    header('location: https://www.google.com.br');

    // Retorna mensagem de erro 404
    header("HTTP/1.0 404 Not Found");
</pre>
<p>Um exemplo de código para exibir informações da requisição independente do método</p>
<pre>
    header('Content-Type: application/json');

    $dados = json_decode(file_get_contents('php://input'));


    echo json_encode([
        'metodo' => $_SERVER['REQUEST_METHOD'],
        'dados' => $dados,
        'query' => $_SERVER['QUERY_STRING'],
        'path' => $_SERVER['PATH_INFO']
    ]);
</pre>
<br><br>
<h3>Cookie</h3>
<p>Utilizado para armazenar informações do utilizador do site</p>
<p>Comumente usado pra guardar histórico de página acessadas, itens visualizados, etc.</p>
<p>Utilizado para eviar marketing</p>
<pre>
    // Defini um cookie
    setcookie('chave', 'valor');
    
    // Apaga um cookie
    setcookie('chave', null);
</pre>
<p>Função possui parametros adicionais para fornecer tempo de existencia, nivel de acesso em relação a dominios do site, etc.</p>
<br><br>
<h3>Sessão</h3>
<p>Armazena dados da sessão atual do usuário</p>
<p>Ex: Persistir dados do usuário que está logado no site</p>
<br>
<p><b>session_start</b> Inicia a sessão ou resume (sempre necessário)</p>
<p><b>session_status</b> Retorna a situação</p>
<p><b>session_write_close</b> Salva dados e fecha</p>
<p><b>session_destroy</b> Destroi todas sessões ativas</p>
<br><br>
<h3>E-email</h3>
<p>PHP nativamente possui função de envio de e-mails mas que depende da existência de um servidor local configurado</p>
<p>Como alternativa existem algumas bibliotecas que auxiliam com esse processo</p>
<p>Uma das mais utilizadas é o PHPMailer <a href="https://github.com/PHPMailer/PHPMailer" target="_blank">https://github.com/PHPMailer/PHPMailer</a></p>
<br>
<p>Exemplo utilizando a versão 6.1.4 com um e-mail Gmail</p>
<pre>
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require_once './lib/PHPMailer-6.1.4/src/PHPMailer.php';
    require_once './lib/PHPMailer-6.1.4/src/SMTP.php';

    $email = new PHPMailer();
    $email->setLanguage('pt_br', './lib/PHPMailer-6.1.4/language');
    $email->isSMTP();
    $email->SMTPDebug = SMTP::DEBUG_SERVER;
    $email->Host = 'smtp.gmail.com';
    $email->Port = 587;
    $email->SMTPSecure = 'tls';
    $email->SMTPAuth = true;
    $email->CharSet = PHPMailer::CHARSET_UTF8;
    $email->Username = 'becapizzaiola@gmail.com';
    $email->Password = '123mudar@';
    $email->setFrom('becapizzaiola@gmail.com', 'Turma 500');
    $email->addAddress('caiquesportela@gmail.com', 'Caique Portela');
    $email->Subject = 'Teste de e-mail com PHP';
    $email->isHTML(true);
    $email->Body = '&lt;h1&gt;Estou testando o envio de e-mail!&lt;/h1&gt;&lt;br&gt;&lt;br&gt;Um email em HTML. Veja, &lt;b&gt;negrito!&lt;/b&gt;';
    $email->AltBody = 'Você não vê HTML em 2020?!';

    if (!$email->send()) {
        print("Erro no envio:. {$email->ErrorInfo}");
    } else {
        print("Mensagem enviada!");
    }
</pre>
</body>
</html>