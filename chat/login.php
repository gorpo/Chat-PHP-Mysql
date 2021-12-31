<!-- @Guilherme Paluch 2021 -->
<?php
session_start();
require '../database.php';
require '../assets/functions/Bcrypt.php';


//variaveis recebidas via POST
$email = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');
$ip = $_SERVER['REMOTE_ADDR']; 


//se usuario ou senha estiverem vazios leva o usuario para o login novamente
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}


//verifica o usuario
$pdo = Database::conectar();
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = '$email'");
$sql->execute();
$info = $sql->fetchAll();
foreach($info as $key => $row){
	if($row['email'] != $email){
		$_SESSION['nao_autenticado'] = true;
		header('Location: ./index.php');
		exit();
	}else{
		if($row['email'] == $email)
			$hash = $row['senha'];
		    if (Bcrypt::check($senha, $hash)) {

		        //cria banco de dados do usuario
				$pdo = Database::conectar();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo->exec("CREATE DATABASE IF NOT EXISTS `$email`");
				$pdo = Database::desconectar();

				//CRIA A TABELA DE USUARIOS NAO EXISTA
			    $pdo = Database::conectar($dbNome=$email);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `usuarios` (
			    `id` mediumint(9) NOT NULL AUTO_INCREMENT,
			    `nome` varchar(200) NOT NULL,
			    `usuario` varchar(200) NOT NULL,
			    `telefone` varchar(200) NOT NULL,
			    `email` varchar(329) NOT NULL,
			    `senha` varchar(999) NOT NULL,
			    `nivel` varchar(999) NOT NULL,
			    `prazo` varchar(999) NOT NULL,
			    `imagem` varchar(999) NOT NULL,
			    `cadastro` datetime NOT NULL,
			    PRIMARY KEY (id)
			    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
			    $sql->execute();
			    $pdo = Database::desconectar();

			    //CRIA A TABELA DE CUSTOMIZAÇÃO
			    $pdo = Database::conectar($dbNome=$email);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `customizar` (
			      `id` int(11) NOT NULL,
				  `dark_mode` varchar(200) NOT NULL,
				  `fixar_cabecalho` varchar(200) NOT NULL,
				  `dropdown_legacy` varchar(200) NOT NULL,
				  `sem_bordas` varchar(200) NOT NULL,
				  `menu_fechado` varchar(200) NOT NULL,
				  `menu_flat` varchar(200) NOT NULL,
				  `menu_legacy` varchar(200) NOT NULL,
				  `menu_compact` varchar(200) NOT NULL,
				  `submenu` varchar(200) NOT NULL,
				  `submenu_esconder` varchar(200) NOT NULL,
				  `desabilitar_auto_expand` varchar(200) NOT NULL,
				  `fixa_rodape` varchar(200) NOT NULL,
				  `texto_corpo` varchar(200) NOT NULL,
				  `texto_barra_navegacao` varchar(200) NOT NULL,
				  `texto_logotipo` varchar(200) NOT NULL,
				  `texto_barra_lateral` varchar(200) NOT NULL,
				  `texto_rodape` varchar(200) NOT NULL,
				  `cor_barra_topo` varchar(200) NOT NULL,
				  `cor_logo` varchar(200) NOT NULL,
				  `cor_menu_esquerda` varchar(200) NOT NULL,
			    PRIMARY KEY (id)
			    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
			    $sql->execute();
			    $pdo = Database::desconectar();

			    //CRIA A TABELA DE INFORMACOES
			    $pdo = Database::conectar($dbNome=$email);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `informacoes` (
				  `id` mediumint(9) NOT NULL,
				  `informacao` varchar(999) NOT NULL,
				  `confirmacao` varchar(999) NOT NULL,
				  `status` varchar(999) NOT NULL,
				  `data` datetime NOT NULL,
			    PRIMARY KEY (id)
			    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
			    $sql->execute();
			    $pdo = Database::desconectar();

			    //CRIA A TABELA DE LOGIN REPRESENTANTES
			    $pdo = Database::conectar($dbNome=$email);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `login_representantes` (
			      `id` int(11) NOT NULL,
				  `usuario` varchar(200) NOT NULL,
				  `imagem` varchar(200) NOT NULL,
				  `senha` varchar(329) NOT NULL,
				  `nome` varchar(999) NOT NULL,
				  `cadastro` datetime NOT NULL,
				  `nivel` varchar(999) NOT NULL,
			    PRIMARY KEY (id)
			    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
			    $sql->execute();
			    $pdo = Database::desconectar();

			    //CRIA A TABELA REPRESENTANTES
			    $pdo = Database::conectar($dbNome=$email);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `representantes` (
				  `id` int(11) NOT NULL,
				  `imagem` varchar(300) DEFAULT NULL,
				  `representante` varchar(300) DEFAULT NULL,
				  `nome_fantasia` varchar(300) DEFAULT NULL,
				  `cnpj` varchar(300) DEFAULT NULL,
				  `inscricao_estadual` varchar(300) DEFAULT NULL,
				  `email` varchar(300) DEFAULT NULL,
				  `telefone` varchar(300) DEFAULT NULL,
				  `endereco` varchar(300) DEFAULT NULL,
				  `cidade` varchar(300) DEFAULT NULL,
				  `estado` varchar(300) DEFAULT NULL,
				  `cep` varchar(300) DEFAULT NULL,
				  `data_atual` datetime DEFAULT NULL,
			    PRIMARY KEY (id)
			    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
			    $sql->execute();
			    $pdo = Database::desconectar();

			    //CRIA A TABELA ORDEM DE SERVICO
			    $pdo = Database::conectar($dbNome=$email);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `ordem_servico` (
				  `id` int(11) NOT NULL,
				  `produto` varchar(300) DEFAULT NULL,
				  `quantidade` varchar(300) DEFAULT NULL,
				  `data` datetime DEFAULT NULL,
			    PRIMARY KEY (id)
			    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
			    $sql->execute();
			    $pdo = Database::desconectar();

			    //CRIA A TABELA DE PRODUTOS
			    $pdo = Database::conectar($dbNome=$email);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `produtos` (
				  `id` mediumint(9) NOT NULL,
				  `produto` varchar(200) NOT NULL,
				  `tipo_produto` varchar(200) NOT NULL,
				  `genero` varchar(200) NOT NULL,
				  `imagem` varchar(329) NOT NULL,
				  `referencia` varchar(999) NOT NULL,
				  `cor` varchar(329) NOT NULL,
				  `tamanho` varchar(999) NOT NULL,
				  `codigo_barra` varchar(999) NOT NULL,
				  `valor` varchar(999) NOT NULL,
				  `lote` varchar(999) NOT NULL,
				  `quantidade` varchar(999) NOT NULL,
				  `data` datetime NOT NULL,
			    PRIMARY KEY (id)
			    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
			    $sql->execute();
			    $pdo = Database::desconectar();


			  




			    //pega os dados no banco principal para gravar no banco do usuario
			    $pdo = Database::conectar();
			    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email = '$email'  ");
			    $sql->execute();
			    $info = $sql->fetchAll();
			    $pdo = Database::desconectar();
			    foreach($info as $key => $row){
			    	$nome_cadastrado = $row['nome'];
			    	$usuario_cadastrado = $row['usuario'];
			    	$telefone_cadastrado = $row['telefone'];
			        $email_cadastrado = $row['email'];
			        $senha_cadastrada = $row['senha'];
			        $nivel_cadastrado = $row['nivel'];
			        $prazo_cadastrado = $row['prazo'];
			        $imagem_cadastrada = $row['imagem'];
			        $data_cadastrada = $row['cadastro']; 

			        if($email_cadastrado == $email){
			        	//verifica se a tabela esta vazia
			            $pdo = Database::conectar($dbNome = $email);
			            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			            $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email = '$email'  ");
					    $sql->execute();
					    $info = $sql->fetchAll();
					    $pdo = Database::desconectar();
					    $rows = $sql->rowCount(); // conta a quantidade de rows

						if($rows == 0){
							$pdo = Database::conectar($dbNome = $email);
				            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				            $sql = $pdo->prepare("INSERT INTO `usuarios` (`nome`,`usuario`, `telefone`, `email`, `senha`, `nivel`, `prazo`,`imagem`, `cadastro`) VALUES 
				            (?,?,?,?,?,?,?,?,?);");
				            $sql->execute(array($nome_cadastrado, $usuario_cadastrado, $telefone_cadastrado, $email_cadastrado, $senha_cadastrada, $nivel_cadastrado, $prazo_cadastrado, $imagem_cadastrada, $data_cadastrada));
				            $pdo = Database::desconectar();
				            $existe = '1';

				            //cria a tabela de login que armazena dados como ip dos usuarios caso nao exista
						    $pdo = Database::conectar($dbNome=$email);
						    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `user_$usuario_cadastrado` (
						    `id` mediumint(9) NOT NULL AUTO_INCREMENT,
						    `usuario` varchar(200) NOT NULL,
						    `senha` varchar(999) NOT NULL,
						    `ip` varchar(999) NOT NULL,
						    `data_atual` datetime NOT NULL,
						    `cor` varchar(999) NOT NULL,
						    PRIMARY KEY (id)
						    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
						    $sql->execute();
						    $pdo = Database::desconectar();

						    //CRIA A TABELA RETIRADAS DO USUARIO
						    $pdo = Database::conectar($dbNome=$email);
						    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `retiradas_$usuario_cadastrado` (
							  `id` int(11) NOT NULL,
							  `usuario` varchar(300) DEFAULT NULL,
							  `produto` varchar(300) DEFAULT NULL,
							  `tipo_produto` varchar(300) DEFAULT NULL,
							  `genero` varchar(300) DEFAULT NULL,
							  `imagem` varchar(300) DEFAULT NULL,
							  `referencia` varchar(300) DEFAULT NULL,
							  `cor` varchar(300) DEFAULT NULL,
							  `tamanho` varchar(300) DEFAULT NULL,
							  `codigo_barra` varchar(300) DEFAULT NULL,
							  `lote` varchar(300) DEFAULT NULL,
							  `quantidade` varchar(300) DEFAULT NULL,
							  `data_atual` datetime DEFAULT NULL,
						    PRIMARY KEY (id)
						    )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;");
						    $sql->execute();
						    $pdo = Database::desconectar();
			        	} else{
				        	//grava os acessos dos usuarios nas suas tabelas
						    $pdo = Database::conectar($dbNome = $email);
				            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				            $sql = $pdo->prepare("INSERT INTO user_$usuario_cadastrado (usuario, senha, ip, data_atual, cor ) VALUES ('$usuario_cadastrado','$senha_cadastrada','$ip',NOW(), 'none');");
				            $sql->execute();
				            $pdo = Database::desconectar();
				            $existe = '0';
				        	}
			        }
			    }

			    


				//verifica a data de cadastro no banco de dados
				$pdo = Database::conectar();
				$sql = $pdo->prepare("SELECT cadastro FROM usuarios WHERE email = '$email' ");
				$sql->execute();
				$info = $sql->fetch();
				$expiracao = date("Y-m-d",strtotime($info[0] .'+29 days'));
				$hoje = date('Y-m-d');

				//bane usuario expirado
				if ($expiracao == $hoje) {
					echo 'Prazo do usuario expirou, sera redirecionado em 5 segundos...';
					header("refresh:5; url=./index.php"); 
				}else{
				//envia o usuario para a sessão
				$_SESSION['email'] = $email;
				$_SESSION['nome'] = $nome_cadastrado;
				$_SESSION['usuario'] = $usuario_cadastrado;
				$_SESSION['imagem'] = $imagem_cadastrada;
				$_SESSION['nivel'] = $nivel_cadastrado;
				$_SESSION['data_cadastrada'] = $data_cadastrada;
				$_SESSION['prazo_cadastrado'] = $prazo_cadastrado;
				header('Location: estoque/index.php');
				}
			}
		}
}//foreach

?>
