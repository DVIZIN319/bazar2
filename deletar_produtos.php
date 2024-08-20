<?php
$id = $_GET['id'];

$conexao = mysqli_connect('localhost','root','','bazar');
$sql = "DELETE FROM produtos WHERE id = $id";
$executar = mysqli_query($conexao, $sql);

if($executar == 1){
    echo "Sucesso!";
}
else{
    echo "Erro";
}
$fechar = mysqli_close($conexao);

?>