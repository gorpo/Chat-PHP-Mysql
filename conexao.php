
<!-- @Guilherme Paluch 2021 -->
<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'daimonae');
define('DB', 'site_vendas');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');