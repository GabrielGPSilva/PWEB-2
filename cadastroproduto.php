<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    echo "Produto cadastrado com sucesso!<br>";
    echo "Nome: $nome<br>";
    echo "Descrição: $descricao<br>";
    echo "Preço: R$ $preco<br>";
}
?>
