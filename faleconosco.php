<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo "Mensagem recebida!<br>";
    echo "Nome: $nome<br>";
    echo "E-mail: $email<br>";
    echo "Mensagem: $mensagem";
}
?>
