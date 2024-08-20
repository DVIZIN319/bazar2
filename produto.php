<?php
include("sessao.php");
include('formatacao.html');
$conexao = mysqli_connect('localhost', 'root', '', 'bazar');
$sql = "SELECT * FROM produtos";
$executar = mysqli_query($conexao, $sql);
echo "<table border='1'align = center><tr><th>Id</th><th>produto</th>
    <th>Preço R$</th><th>categoria</th><th>estado</th><th>Apagar</th>
    <th>Atualizar</th></tr>";
while ($resultado = mysqli_fetch_array($executar)){
    $id = $resultado ['id'] ;
    $nome = $resultado [ 'produto'];
    $preco = $resultado ['preco'];
    $categ = $resultado ['categoria'];
    $estado = $resultado ['estado'];
    echo "<tr><td>$id</td><td>$nome</td><td>R$$preco</td>
        <td>$categ</td><td>$estado</td><td><a href='deletar_produtos.php?id=$id'>Excluir</a></td>
        <td><a href='upd_prod.php?id=$id'>Atualizar</a></td></tr>";

}
echo "</table>";
$fechar = mysqli_close($conexao)



?>