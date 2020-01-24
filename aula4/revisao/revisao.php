<html>
<body>
<h1><center>Revisão - aula 4</center></h1>
<h2><center>https://github.com/caique4linux/Curso500</center></h2>
<br><br>
<h3>Vários arquivos</h3>
<br>
<p><b>include </b> Importa arquivo, se não existe da warning</p>
<p><b>include_once </b> Importa arquivo se já não tiver sido importado</p>
<p><b>require </b> Importa arquivo, se não existe da fatal error</p>
<p><b>require_once </b> Importar arquivo se já não tiver sido importado</p>
<br>
<h3>Função</h3>
<p>"Dar nome" a um bloco de código com uma funcionalidade especifica e torna-lo reutilizável</p>
<p>Assim como em variaveis, seu nome deve ser sugestivo</p>
<br>
<pre>
    function mostraTexto($texto) {
        echo $texto . '&lt;br&gt;';
    }
</pre>
<br>
<p>Posso chamar antes mesmo de definir</p>
<pre>
    exibe();

    function exibe() {
        echo 'Já existo!';
    }
</pre>
<br>
<p>Posso criar condicionalmente</p>
<pre>
    $devoCriar = true;

    if ($devoCriar) {
        function exibe() {
            echo 'Fui criada condicionalmente';
        }
    }
    
    exibe();
</pre>
<br>
<p>Pode ser criada a partir de outra função</p>
<pre>
    function pai() {
        function filha() {
            echo "Sou a função filha";
        }
        echo "Criei uma função filha";
    }

    pai();
    filha();
</pre>
<br>
<p>Pode se utilizar como recursão, semelhante a um loop</p>
<pre>
    function fibonacci($limite, $ultimo = [0, 1]) {
        echo "{$ultimo[0]} ";
        array_push($ultimo, ($ultimo[0] + $ultimo[1]));
        array_shift($ultimo);
        if ($ultimo[0] < $limite) fibonacci($limite, $ultimo);
    }

    fibonacci(100);
</pre>
<br>
<p>Aceita tipagem de argumentos e retorno. Gera erro caso não obedeça</p>
<pre>
    function soma(int $a, int $b): int {
        return ($a + $b);
    }
</pre>
<p>declare(strict_types=1);</p>
<p>Com ? antes do tipo de retorno indica null possivel</p>
<br>
<p>Funções em variaveis</p>
<pre>
    $operacao = 'somar';

    function somar($a, $b) {
        echo ($a + $b);
    }

    $operacao(10, 20);
</pre>
<br>
<p>Função anonima</p>
<pre>
    $somar = function($a, $b) {
        return ($a + $b);
    };

    $somar(3, 5);
</pre>
<p>Ponto e virgula é importante</p>
<br>
<p>Escopo de variaveis</p>
<pre>
    $texto = "Olá";

    $exibe = function() {
        echo $texto;
    };

    $exibe();
</pre>
<p>Apresenta erro</p>
<pre>
    $texto = "Olá";

    function exibe() {
        echo $texto;
    }

    exibe();
</pre>
<p>Apresenta erro</p>
<br>
<p>Funciona</p>
<pre>
    $texto = "Olá";

    $exibe = function() use ($texto) {
        echo $texto;
    };

    $exibe();
</pre>
<p>Funciona</p>
<pre>
    $texto = "Olá";

    function exibe() {
        global $exibe;
        echo $texto;
    }

    exibe();
</pre>
<p>Funciona</p>
<pre>
    define('TEXTO', "Olá");

    function exibe() {
        global $exibe;
        echo TEXTO;
    }

    exibe();
</pre>
<br>
<p>Passagem por referência</p>
<pre>
    $meses = ['Janeiro', 'Favereiro', 'Março'];

    function juntarLista(&$lista) {
        $lista = implode('-', $lista);
    }

    juntarLista($meses);

    echo $meses;
</pre>
<p>Janeiro-Favereiro-Março</p>
<br><br>
<h3>Funções internas</h3>
<h4>https://www.php.net/manual/pt_BR/</h4>
<br>
<p><b>isset </b> Verifica se variavel existe</p>
<p><b>empty </b> Verifica se valor é vazio</p>
<p><b>is_null </b> Verifica se valor é nulo (null)</p>
<p><b>unset </b> Destroi uma variavel</p>
<p><b>sqrt </b> Calcula raiz quadrada de um numero</p>
<p><b>pow </b> Calcula potencia dos valores informados</p>
<p><b>print </b> Exibe texto</p>
<p><b>echo </b> Exibe texto, aceita muitos textos como argumento</p>
<p><b>print_r </b> Exibe variaveis de forma legivel</p>
<p><b>var_dump </b> Exibe variaveis de forma legivel com informações adicionais</p>
<p><b>is_array </b> Checa se variável é do tipo array</p>
<p><b>is_bool </b> Checa se variável é do tipo boolean</p>
<p><b>is_float </b> Checa se variável é do tipo float</p>
<p><b>is_int </b> Checa se variável é do tipo int</p>
<p><b>is_numeric </b> Checa se variável é numerico</p>
<p><b>is_string </b> Checa se variável é texto</p>
<p><b>gettype </b> Retorna tipo da variavel</p>
<p><b>printf </b> Mostra texto formatado</p>
<p><b>count </b> Conta quantidade de itens em uma array</p>
<p><b>explode </b> Quebra texto em uma array</p>
<p><b>implode </b> Junta array em um texto</p>
<p><b>trim </b> Remove espaços no final e começo</p>
<p><b>str_replace </b> Substitui valor em um texto</p>
<p><b>strtolower </b> Transforma texto em letra minusculas</p>
<p><b>strtoupper </b> Transforma texto em letra maiscula</p>
<p><b>ucfirst </b> Transforma primeiro caracter do texto em maisculo</p>
<p><b>ucwords </b> Transforma primeiro caracter de cada palavra em maisculo</p>
<p><b>lcfist </b> Transforma primeiro caracter do texto em minusculo</p>
<p><b>nl2br </b> Substitui \n por quebra de linha do HTML</p>
<p><b>str_split </b> Quebra texto a cada n caracteres</p>
<p><b>str_repeat </b> Exibe texto n vezes</p>
<p><b>strlen </b> Exibe tamanho do texto</p>
<p><b>strpos </b> Encontra a posição da primeira ocorrencia</p>
<p><b>substr </b> Retorna parte de um texto</p>
<p><b>strstr </b> Retorna texto antes ou depois de um valor informado</p>
<p><b>file_put_contents </b> Salva dados em arquivo</p>
<p><b>file_get_contents </b> Lê dados de arquivo</p>
</body>
</html>