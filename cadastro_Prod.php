<?php
include("sessao.php");
include("formatacao.html");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="cadastro">
    <form action="cad_produtos.php" method="post">
        <label for="">RPODUTO</label>
        <input type="text" name="produto" id=""><br><br>

        <label for="">PREÇO</label>
        <input type="text" name="preco" id=""><br><br>

        <label for="">CATEGORIA</label>
        <input type="text" name="categoria" id=""><br><br>

        <label for="">ESTADO DO PRUDUTO</label>
        <input type="text" name="estado" id=""><br><br>

        <input type="submit", value="cadastrar">
    </form>
    </div>
</body>
</html>