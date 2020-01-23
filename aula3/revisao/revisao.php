<html>
<body>
<h1><center>Revisão</center></h1>
<h2><center>https://github.com/caique4linux/Curso500</center></h2>
<br><br>
<h3>IF</h3>
<p>Valida uma condição, se verdadeira, executa o código</p>
<br>
<p>$a = 10;</p>
<p>$b = 5;</p>
<p>if ($a > $b) {</p>
<p>echo '$a é maior que $b';</p>
<p>}</p>
<p><b>Irá exibir "$a é maior que $b"</b></p>
<br>
<p>$a = 2;</p>
<p>$b = 5;</p>
<p>if ($a > $b) {</p>
<p>echo '$a é maior que $b';</p>
<p>} else {</p>
<p>echo '$b é maior que $a';</p>
<p>}</p>
<p><b>Irá exibir "$b é maior que $a"</b></p>
<br>
<p>$a = 3;</p>
<p>$b = 3;</p>
<p>if ($a > $b) {</p>
<p>echo '$a é maior que $b';</p>
<p>} elseif ($a < $b) {</p>
<p>echo '$b é maior que $a';</p>
<p>} else {</p>
<p>echo '$a e $b são iguais';</p>
<p>}</p>
<p><b>Irá exibir "$a e $b são iguais"</b></p>
<br>
<h3>Operador ternário</h3>
<p>Um "IF" simples. Permite comparar valor de uma variável e atribuir um valor caso verdadeiro ou falso.</p>
<br>
<p>$resultado = (1 == "1") ? "São iguais" : "São diferentes";</p>
<p>echo $resultado;</p>
<p><b>Irá resultar em "São iguais"</b></p>
<br>
<p>$resultado = (1 === "1") ? "São iguais" : "São diferentes";</p>
<p>echo $resultado;</p>
<p><b>Irá resultar em "São diferentes"</b></p>
<br>
<p>$resultado = ((30 % 2 === 0) && (30 % 3 === 0)) ? "Par e divisivell por 3" : "Não é par e/ou não é divisível por 3";</p>
<p>echo $resultado;</p>
<p><b>Irá resultar em "Par e divisivel por 3"</b></p>
<br>
<h3>Operador null coalescing</h3>
<p>Valida se valor existe, caso não define um padrão</p>
<br>
<p>echo ($var ?? "Não existe");</p>
<p><b>Irá exibir "Nao existe"</b></p>
<br>
<p>$var = "padrão";</p>
<p>echo ($var ?? "Não existe");</p>
<p><b>Irá exibir "padrão"</b></p>
<br>
<br>
<h3>Switch</h3>
<p>Compara valor da variavel e executa código dependendo do valor encontrado.</p>
<br>
<h3>While</h3>
<p>Executa bloco de código enquanto expressão for verdadeira</p>
<br>
<p>$i = 1;</p>
<p>while ($i <= 10) {</p>
<p>echo $i++;</p>
<p>}</p>
<p><br>Irá exibir todos os números entre 1 e 10</p></p>
<br>
<p>Possui variação 'do while' que primeiro executa o código e depois valida a expressão</p>
<br>
<h3>For</h3>
<p>Funcionamento semelhante ao while, mas aceita mais argumentos.</p>
<br>
<p>for ($i = 1; $i <= 10, $i++) {</p>
<p>echo $i;</p>
<p>}</p>
<p><br>Irá exibir todos os números entre 1 e 10</p></p>
<br>
<h3>break</h3>
<br>
<h3>continue</h3>
</body>
</html>