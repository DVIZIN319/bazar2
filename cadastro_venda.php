<?php
$conexao = mysqli_connect('localhost','root','','bazar');
$sql = "select * from clientes order by nome asc";
$executar = mysqli_query($conexao, $sql);

$sql = "select * from produtos order by produto asc";
$executar_produto = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendas</title>
</head>
<body>
    <label for="">CLIENTE</label>
    <select name="nome" id="">
    <?php
         while($resultado = mysqli_fetch_array($executar)){
            $id = $resultado['cpf'];
            $nome = $resultado['nome'];
            echo "<option value='$cpf'>$nome</option>";
             }
    ?>
    </select><br><br>
    <label for="">PRODUTOS</label>
    <select name="produto" id="produtos" onchange="getProduto()">
        <?php
            while($resultado = mysqli_fetch_array($executar_produto)){
                $id = $resultado['id'];
                $nome = $resultado['produto'];
                echo "<option value='$id'>$nome</option>";
                
                 }
        ?>  
    </select>

    <br><br>

    <div id="informacoesProduto">
        <p>**Nome: <span id="nomeProduto"></span></p>
        <p>**Preço: <span id="precoProduto"></span></p>
        <p>**Descrição: <span id="descricaoProduto"></span></p>
    </div>
    
    <script>
        function getProduto() {
  // Recupera o ID do produto selecionado
  const idProduto = document.getElementById("produto").value;

  // Cria um objeto XMLHttpRequest
  const xhr = new XMLHttpRequest();

  // Configura a solicitação
  xhr.open("GET", "produto.php?id=" + idProduto, true);

  // Define o manipulador de eventos para o evento "load"
  xhr.onload = function() {
    // Verifica se a solicitação foi bem-sucedida
    if (xhr.status === 200) {
      // Recupera a resposta do servidor
      const dadosProduto = JSON.parse(xhr.responseText);

      // Exibe as informações do produto na tela
      document.getElementById("nomeProduto").innerHTML = dadosProduto.nome;
      document.getElementById("precoProduto").innerHTML = dadosProduto.preco;
      document.getElementById("descricaoProduto").innerHTML = dadosProduto.descricao;
    } else {
      // Trata o erro
      alert("Erro ao obter informações do produto.");
    }
  };

  // Envia a solicitação
  xhr.send();
}
    </script>
    <input type="submit" value="realizar venda">
</body>
</html>
```

**Observações:**

* Certifique-se de que o arquivo `get_produto.php` esteja no mesmo servidor que o arquivo HTML.
* Você pode personalizar o código para exibir as informações do produto em diferentes elementos HTML na página.