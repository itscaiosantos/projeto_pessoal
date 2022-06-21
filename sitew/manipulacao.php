<?php

$nome = $_POST['nome'];
$nasc = $_POST['nascimento'];
$email = $_POST['email'];
$tel = $POST['tel'];

$servidor = "0.0.0.0";
$bdname = "cadastro";
$usuario = "root";
$senha = "root";

$conexao = mysqli_connect ($servidor, $usuario, $senha, $bdname, 3306);

if (!$conexao) 
    die("Problemas com a conexão. Descrição: " . mysqli_connect_error($conexao));

$sql = "INSERT INTO usuarios (nome, nascimento, email, tel) VALUES ('$nome', '$nasc', '$email', '$tel');";

if (mysqli_query($conexao, $sql))
    echo "Dados Cadastrados!";

else 
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);

mysqli_close($conexao);

?>