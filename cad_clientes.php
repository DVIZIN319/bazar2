<?php
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$conexao = mysqli_connect('localhost','root','','bazar');
$sql = "insert into clientes (cpf, nome, telefone) 
    values('$cpf', '$nome', '$telefone')";
echo"cadastrado" ;
$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);

?>
