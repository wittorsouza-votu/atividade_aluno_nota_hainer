<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$linha =  date('s/m/y h:i:s') . $nome . " | " . $nota1 . " | " . $nota2 . PHP_EOL;
file_put_contents("cadastro.txt", $linha, FILE_APPEND);

header("Location: soma.php");

?>