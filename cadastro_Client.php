<?php
include("sessao.php");
include("formatacao.html");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="cadastro">
    <form action="cad_clientes.php" method="post">
        <label for="">CPF</label>
        <input type="text" name="cpf" id=""><br><br>

        <label for="">NOME</label>
        <input type="text" name="nome" id=""><br><br>

        <label for="">TELEFONE</label>
        <input type="text" name="telefone" id=""><br><br>

        <input type="submit", value="cadastrar">
    </form>
    </div>
</body>
</html>