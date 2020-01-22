<?php
function quebraLinha($qtd = 1) {
    for ($i = 0; $i < $qtd; $i++) {
        echo "<BR>";
    }
}
?>
<html>
<body>
<h1><center>Revisão</center></h1>
<h2><center>https://github.com/caique4linux/Curso500</center></h2>
<?=quebraLinha(2)?>
<h3>Tags</h3>
<p>Completa: <b><\?php ?></b></p>
<p>Curta: <b><\? ?></b></p>
<?=quebraLinha(1)?>
<h3>Variaveis</h3>
<p>Sempre começam com $: <b>$variavel</b></p>
<p>Utilizar nomes claros: <b>$abc</b></p>
<p>Padrão camel case para nomes (PSR): <b>$nomeCompletoUsuario</b></p>
<p>Tipagem dinamica</p>
<?=quebraLinha(1)?>
<h3>Tipos</h3>
<p>boolean <b>$alunoFaltou = false;</b></p>
<p>integer <b>$idade = 20;</b></p>
<p>float (double) <b>$preço = 50.99;</b></p>
<p>string <b>$nome = "Caique";</b></p>
<p>array <b>$alunos = ["Maria, "Jose"];</b></p>
<p>object <b>$data = new DateTime();</b></p>
<p>callable (Função de callback)</p>
<p>iterable</p>
<p>resource (IO)</p>
<p>null <b>$valor = null;</b></p>
<?=quebraLinha(1)?>
<h3>Variaveis variaveis</h3>
<?=quebraLinha(1)?>
<h3>Operações com texto</h3>
<?=quebraLinha(1)?>
<h3>Operadores</h3>
<p>Soma <b>$soma = 1 + 1;</b></p>
<p>Subtração <b>$subtracao = 10 - 2;</b></p>
<p>Multiplicação <b>$multiplicacao = 3 * 7;</b></p>
<p>Divisão <b>$sivisao = 10 / 5;</b></p>
<p>Módulo (resto) <b>$resto = 5 % 2;</b></p>
<p>Potencia <b>$potencia = 2 ** 2;</b></p>
<p>Atribuição <b>$variavel = "valor";</b></p>
<p>Atalhos <b>$calculo += 5;</b></p>
<p>Incremento <b>$var++;</b></p>
<p>Decremento <b>$var--;</b></p>
<p>Comparação <b>$a == $b</b></p>
<p>Diferente <b>$a != $b</b></p>
<p>Menor <b>$a < $b</b></p>
<p>Menor ou igual <b>$a <= $b;</b></p>
<p>Maior <b>$a > $b;</b></p>
<p>Maior ou igual <b>$a >= $b;</b></p>
<p>E lógico (&& AND)<b>$a == $b && $a == $c</b></p>
<p>OU lógico (|| OR)<b>$a == $b || $a == $c</b></p>
<?=quebraLinha(1)?>
<h3>Comentários</h3>
<p><b>/* */</b></p>
<p><b>//</b></p>
<p><b>#</b></p>
</body>
</html>