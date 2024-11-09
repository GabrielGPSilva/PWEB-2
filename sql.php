<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNasc = $_POST['data_nascimento'];
$peso = $_POST ['peso'];

//Inserir dados.
$sql = "INSERT INTO Paciente (nome, cpf, data_nascimento, peso)
VALUES ('$nome', '$cpf', '$dataNasc', $peso)";
print $sql;

$bd = mysqli_connect("localhost", "root", "alunoifba", "HGVC");

mysqli_query($bd, $sql);

mysqli_close($bd);

print "Gravou com sucesso!";
?>