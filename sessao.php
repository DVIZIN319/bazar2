<?php
session_start();
$nome = $_SESSION['nome'];
if($nome == null){
	die("Usuário não autenticado!
	<a href='pag_login.html'>Logar</a>");
}
?>