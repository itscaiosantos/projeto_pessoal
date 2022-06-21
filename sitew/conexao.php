<?php

$servidor = "100.115.92.14";
$bdname = "cadastro";
$usuario = "root";
$senha = "root";

$conexao = mysqli_connect ($servidor, $usuario, $senha, $bdname);

if (!$conexao) 
    die("Problmeas com a conexão com o banco de dados. Descrição do problema: " . mysqli_connect_error($conexao));

?>