<?php
session_start();
$senha = $_POST['senha'];
$login = $_POST['login'];
$conexao = mysqli_connect('localhost','root','','bazar');
$sql = "SELECT * FROM clientes WHERE nome like '$login'
and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['nome'] != NULL){
   $_SESSION['nome'] = $res['nome'];
   echo "login correto<br><a href='clientes.php'>clientes</a>";

}
else{
   echo "Login e/ou senha incorretos<br><a href='pag_login.html'>Tentar novamente</a>";
}
$fechar = mysqli_close($conexao);
?>