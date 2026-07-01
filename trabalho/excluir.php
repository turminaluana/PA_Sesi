<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM alunos WHERE id=$id";
$resultado = mysqli_query($conn,$sql);

$aluno = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Excluir Aluno</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Excluir Aluno</h2>

<p>Tem certeza que deseja excluir o aluno abaixo?</p>

<table>

<tr>
<td><strong>Nome:</strong></td>
<td><?php echo $aluno['nome']; ?></td>
</tr>

<tr>
<td><strong>E-mail:</strong></td>
<td><?php echo $aluno['email']; ?></td>
</tr>

<tr>
<td><strong>Curso:</strong></td>
<td><?php echo $aluno['curso']; ?></td>
</tr>

<tr>
<td><strong>Idade:</strong></td>
<td><?php echo $aluno['idade']; ?></td>
</tr>

</table>

<br>

<a href="deletar.php?id=<?php echo $aluno['id']; ?>" class="btn vermelho">
Excluir
</a>

<a href="index.php" class="btn azul">
Cancelar
</a>

</div>

</body>
</html>