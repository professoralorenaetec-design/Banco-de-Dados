<?php

require 'conexao.php'


?>

<!DOCTYPE html>
<html>

<head>
    <title>Minha Escola</title>
</head>

<body>

    <h1>Meu primeiro sistema</h1>

    <p>Estou aprendendo VS Code + XAMPP!</p>

    <h1>Cadastro de Alunos</h1>

<form action="create.php" method="get">

    <label>Nome:</label>
    <input type="text" name="nome">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email">

    <br><br>

    <label>Idade:</label>
    <input type="number"name="idade">

    <br><br>

    <button>Cadastrar</button>

</form>


</body>

</html>