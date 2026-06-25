<?php
include 'connection.php';

$nome  = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$curso = $_POST['curso'];


$stmt = mysqli_prepare($conn, "INSERT INTO aluno(nome, idade, email, curso) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "siss", $nome, $idade, $email, $curso);

if (mysqli_stmt_execute($stmt)) {
    echo "Registrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);