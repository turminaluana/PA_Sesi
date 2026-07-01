<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM alunos WHERE id = $id";
$resultado = mysqli_query($conn, $sql);

$aluno = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="container">

    <h2>Editar Aluno</h2>

    <form action="atualizar.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">

        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>" required><br><br>

        <label>E-mail</label><br>
        <input type="email" name="email" value="<?php echo $aluno['email']; ?>" required><br><br>

        <label>Curso</label><br>
        <input type="text" name="curso" value="<?php echo $aluno['curso']; ?>" required><br><br>

        <label>Idade</label><br>
        <input type="number" name="idade" value="<?php echo $aluno['idade']; ?>" required><br><br>

        <button type="submit" class="btn azul">Salvar Alterações</button>

        <a href="index.php" class="btn vermelho">Cancelar</a>

    </form>

</div>

</body>
</html>