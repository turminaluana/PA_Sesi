<?php
include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$idade = $_POST['idade'];

$sql = "UPDATE alunos SET
            nome = '$nome',
            email = '$email',
            curso = '$curso',
            idade = '$idade'
        WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao atualizar o aluno: " . mysqli_error($conn);
}
?>