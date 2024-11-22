<?php
$i = $_GET['id'];
$n = $_GET['nome'];
$c = $_GET['cpf'];
$p = $_GET['peso'];
$dn = $_GET['data_nascimento'];
$sql = "UPDATE Paciente SET nome = '$n', cpf = '$c', peso = '$p', data_nascimento = '$dn' WHERE id = '$i'";
$bd = mysqli_connect("localhost", "root","alunoifba", "HGVC");
print $sql;
mysqli_query($bd, $sql);
mysqli_close($bd);
?>