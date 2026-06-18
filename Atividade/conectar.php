<?php

include("connection.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nome_pai = $_POST['nome_pai'];
$nome_mae = $_POST['nome_mae'];
$turma = $_POST['turma'];
$serie = $_POST['serie'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO alunos
(nome, sobrenome, nome_pai, nome_mae, turma, serie, cpf)
VALUES
('$nome','$sobrenome','$nome_pai','$nome_mae','$turma','$serie','$cpf')";

if($conexao->query($sql) === TRUE){
    echo "Aluno cadastrado com sucesso!";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>