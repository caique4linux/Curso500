<html>
<body>
<h1><center>Revisão - aula 8</center></h1>
<h2><center>https://github.com/caique4linux/Curso500</center></h2>
<br><br>
<br>
<h3>MySql</h3>
<p><b>mysql -u root -p</b> Conecta ao mysql com o usuário root solicitando senha</p>
<p><b>CREATE DATABASE nome;</b> Cria um banco de dados com o nome informado</p>
<p><b>SHOW DATABASES;</b> Lista os bancos existentes</p>
<p><b>DROP DATABASE nome;</b> Apaga o banco com o nome informado</p>
<p><b>USE nome;</b> Selecina o banco para executa comandos nele</p>
<p><b>CREATE TABLE nome ...;</b> Cria uma tabela com o nome informado e as colunas fornecidas</p>
<pre>
    CREATE TABLE usuario (
        id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(200) NOT NULL,
        PRIMARY KEY(id)
    );
</pre>
<p><b>SHOW TABLES;</b> Lista as tabelas existentes no banco selecionado</p>
<p><b>DROP TABLE nome;</b> Apaga a tabela com o nome informado;</p>
<p><b>ALTER TABLE nome ...;</b> Altera a tabela informada</p>
<pre>
    ALTER TABLE usuario 
        ADD COLUMN senha char(60) NOT NULL AFTER nome;
</pre>
<pre>
    ALTER TABLE usuario
        DROP COLUMN senha;
</pre>
<p><b>SHOW COLUMNS FROM nome;</b> Lista as colunas da tabela informada</p>
<p><b>INSERT INTO nome ...;</b> Insere dados na tabela informada</p>
<pre>
    INSERT INTO usuario (nome, senha, email) VALUES
        ('Maria', '123456', 'maria@gmail.com');
</pre>
<p><b>SELECT * FROM nome;</b> Busca dados da tabela informada</p>
<pre>
    SELECT * FROM usuario;
</pre>
<pre>
    SELECT nome, senha, email FROM usuario;
</pre>
<p><b>UPDATE nome ...;</b> Atualizada dados da tabela informada</p>
<pre>
    UPDATE usuario SET email = 'maria.silva@gmail.com', 
        nome = 'Maria Silva' WHERE id = 1;
</pre>
<p><b>DELETE FROM usuario ...;</b> Apaga registros da tabela informada</p>
<pre>
    DELETE FROM usuario WHERE id = 1;
</pre>
<p><b>exit;</b> Desconecta do banco</p>
<br>
<h3>PostgreSQL</h3>
<p><b>su - postgres</b> Para realizar acesso ao postgres precisa estar com o usuário que ele cria</p>
<p><b>psql</b> Comando padrão para se conectar ao banco</p>
<p><b>CREATE DATABASE nome OWNER usuario;</b> Cria um banco de dados atribuindo ao usuário especificado</p>
<pre>
CREATE DATABASE blog OWNER developer;
</pre>
<p><b>\q</b> Desconecta do banco</p>
<p><b>psql nome</b> Conecta do banco informado com o usuário atual</p>
<pre>
    psql blog
</pre>
<p><b>CREATE TABLE nome ...;</b> Cria uma tabela com o nome informado e as colunas fornecidas</p>
<pre>
    CREATE TABLE usuario (
        id serial NOT NULL,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(200) NOT NULL,
        PRIMARY KEY(id)
    );
</pre>
<p><b>\dt</b> Lista as tabelas existentes no banco</p>
<p><b>DROP TABLE nome;</b> Apaga a tabela com o nome informado;</p>
<p><b>ALTER TABLE nome ...;</b> Altera a tabela informada</p>
<pre>
    ALTER TABLE usuario 
        ADD COLUMN senha char(60) NOT NULL AFTER nome;
</pre>
<pre>
    ALTER TABLE usuario
        DROP COLUMN senha;
</pre>
<p><b>\d nome;</b> Lista as colunas da tabela informada</p>
<p><b>INSERT INTO nome ...;</b> Insere dados na tabela informada</p>
<pre>
    INSERT INTO usuario (nome, senha, email) VALUES
        ('Maria', '123456', 'maria@gmail.com');
</pre>
<p><b>SELECT * FROM nome;</b> Busca dados da tabela informada</p>
<pre>
    SELECT * FROM usuario;
</pre>
<pre>
    SELECT nome, senha, email FROM usuario;
</pre>
<p><b>UPDATE nome ...;</b> Atualizada dados da tabela informada</p>
<pre>
    UPDATE usuario SET email = 'maria.silva@gmail.com', 
        nome = 'Maria Silva' WHERE id = 1;
</pre>
<p><b>DELETE FROM usuario ...;</b> Apaga registros da tabela informada</p>
<pre>
    DELETE FROM usuario WHERE id = 1;
</pre>
<br>
<h3>PHP - MySql</h3>
<p><b>mysqli_connect()</b> Realiza conexão com o banco</p>
<p><b>mysqli_connect_errno()</b> Retorna o código de erro da ultima tentativa de conexão</p>
<p><b>mysqli_connect_error()</b> Retorna a descrição do erro da ultima tentativa de conexão</p>
<p><b>mysqli_get_host_info()</b> Retorna informações sobre a conexão com o banco</p>
<p><b>mysqli_query()</b> Executa um comando SQL com a conexão fornecida</p>
<p><b>mysqli_fetch_assoc()</b> Extrai registros resultantes de um comando SQL formando uma array associativa</p>
<p><b>mysqli_close()</b> Fecha conexão com o banco</p>
<p><b>mysqli_free_result()</b> Libera memória reservada com dados de um resultado</p>
<p><b>mysqli_affected_rows()</b> Retorna o numero de linhas afetadas pelo ultimo INSERT/DELETE/UPDATE</p>
<p><b>mysqli_errno()</b> Retorna o código de erro do ultima comando SQL executado</p>
<p><b>mysqli_error()</b> Retorna descrição do erro do ultima comando SQL executado</p>
<p><b>mysqli_stmt_init()</b> Inicia statement (Instrução SQL)</p>
<p><b>mysqli_stmt_prepare()</b> Prepara um comando SQL para ser executado na statement (Valida formato)</p>
<p><b>mysqli_stmt_bind_param()</b> Substitui parametros do comando SQL pelos valores apropriados</p>
<p><b>mysqli_stmt_execute()</b> Executa comando do statement</p>
<p><b>mysqli_stmt_affected_rows()</b> Retorna o numero de linhas afetadas pela execução</p>
<p><b>mysqli_stmt_get_result()</b> Retorna o resultado de um statement</p>
<p><b>mysqli_stmt_close()</b> Fecha o statement</p>
<p><b>mysqli_stmt_error_list()</b> Retorna lista de erros da ultima tentativa de preparação de um statement</p>
</body>
</html>