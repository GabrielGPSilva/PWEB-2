<?php
$nome = $_POST['nome'];
$sql = "DELETE FROM Paciente WHERE nome like '$nome'";
print "Ok!";

$bd = mysqli_connect("localhost", "root", "alunoifba", "HGVC");

mysqli_query($bd, $sql);

mysqli_close($bd);


?>