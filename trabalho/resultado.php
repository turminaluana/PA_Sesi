<?php

include 'conexao.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$curso = $_POST['curso'];

if(empty($nome) || empty($idade) || empty($email) || empty($curso)){
    echo "<h2>Todos os campos são obrigatórios!</h2>";
    echo "<a href='index.php'>Voltar</a>";
    exit();
}

try{
    $processamento = mysqli_query($conn, "INSERT INTO alunos(nome, idade, email, curso) VALUES ('$nome', '$idade', '$email', '$curso')");
}
catch(Exception $e){
    echo $e;
}
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Aluno cadastrado com sucesso!</h2>

<p><strong>Nome:</strong> <?php echo $nome; ?></p>

<p><strong>Idade:</strong> <?php echo $idade; ?></p>

<p><strong>E-mail:</strong> <?php echo $email; ?></p>

<p><strong>Curso:</strong> <?php echo $curso; ?></p>

<a class="botao" href="index.php">Voltar</a>

</div>

</body>
</html>