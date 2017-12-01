<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<script type="text/javascript" src="js/script.js"></script>

	<title>Todos professores</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>
		<h1 id="nome_site">Agenda de tarefas</h1>
		<div id="perfil">
<?php
	//isset()- verifica se uma variavel esta definida
if (isset($_SESSION['login'])) {

?>

		<!--MENSAGEM QUANDO LOGADO -->
		<p>Usuário: Administrador</p>
		<a href="logout.php">Sair</a>

<?php
}else{
?>

	<!--Formulario de login-->
		<form method="post" action="login.php">
				<label for="login">Login</label>
				<input type="text" name="login">
<br>
				<label for="senha">Senha</label>
				<input type="password" name="senha">
<br>
				<input type="submit" name="enviar">
		</form>
	<!--Formulario de login-->

<?php
}
?>
		</div>

	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Próximas tarefas</section></a>
		<a href=""><section class="item menu">Todas Tarefas</section></a>
		<a href="listaDisciplinas.php"><section class="item menu">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu">Tarefas por data</section></a>
		<a href="listaProfessores.php"><section class="item menu ativo">Professores</section></a>
		<a href="listaAlunos.php"><section class="item menu">Colegas</section></a>
	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>
