<?php
$id = $_POST['id'];
$sql = "DELETE FROM Paciente WHERE ID = $id";
//CONECTAR NO BANCO DE DADOS

$bd = mysqli_connect("localhost", "root", "alunoifba", "HGVC");
//EXECUTAR O COMANDO NO BANCO

print $sql;
mysqli_query($bd, $sql);
//DESCONECTAR DO BANCO DE DADOS

mysqli_close($bd);

?>