<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    if ($usuario == 'admin' && $senha == '12345') {
        header("Location: bemvindo.html?usuario=$usuario");
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>
