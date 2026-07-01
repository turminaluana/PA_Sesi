<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="container">

<h2>Cadastro de Alunos</h2>

<form action="resultado.php" method="POST">

<label>Nome Completo</label>
<input type="text" name="nome">

<label>Idade</label>
<input type="number" name="idade">

<label>E-mail</label>
<input type="email" name="email">

<label>Curso</label>
<input type="text" name="curso">

<input type="submit" value="Cadastrar">

</form>

</div>

</body>
</html>