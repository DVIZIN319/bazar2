<?php
$id_cliente = $_POST['id_cliente']
$cliente = $_POST['cliente'];
$id_produto = $_POST['id_produto'];
$produto = $_POST['produto'];

$conexao = mysqli_connect('localhost','root','','bazar');
$sql = "insert into vendas (id_cliente, nome_cliente, id_produto, produto) 
    values('$id_cliente', '$nome_cliente', $id_produto, '$produto')";

echo"cadastrado" ;
$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);
?>