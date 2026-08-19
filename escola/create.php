<?php

include "conexao.php";

$nome = $_GET["nome"];
$email = $_GET["email"];
$idade = $_GET["idade"];

$sql = "INSERT INTO alunos (nome, email, idade)
        VALUES ('$nome', '$email', '$idade')";

if ($conexao->query($sql) === TRUE) {

    echo "Aluno cadastrado com sucesso!";

} else {

    echo "Erro: " . $conexao->error;

}

$conexao->close();

?>