
<?php
include('formatacao.html');
$conexao = mysqli_connect('localhost', 'root', '', 'bazar');
$sql = "SELECT * FROM clientes";
$executar = mysqli_query($conexao, $sql);
echo "<table border='2' align= center><tr><th>CPF</th><th>NOME</th>
    <th>TELEFONE</th><th>APAGAR</th>
    <th>ATUALIZAR</th></tr>";
while ($resultado = mysqli_fetch_array($executar)){
    $id = $resultado ['cpf'] ;
    $nome = $resultado [ 'nome'];
    $telefone = $resultado ['telefone'];

    echo "<tr><td>$id</td><td>$nome</td><td>$telefone</td>
        <td><a href='deletar.php?id=$id'>Excluir</a></td>
        <td><a href='upd_prod.php?id=$id'>Atualizar</a></td></tr>";

}
echo "</table>";
$fechar = mysqli_close($conexao)



?> 

