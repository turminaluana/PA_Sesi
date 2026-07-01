<?php
include("conexao.php");

$sql = "SELECT * FROM alunos";
$resultado = mysqli_query($conn, $sql);

if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Alunos</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

    <div class="topo">
        <h2>Lista de Alunos</h2>

        <a href="cadastro.php" class="btn azul">
            + Novo Aluno
        </a>
    </div>

    <table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Curso</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>

        </thead>

        <tbody>

        <?php

        if(mysqli_num_rows($resultado) > 0){

            while($aluno = mysqli_fetch_assoc($resultado)){

                echo "<tr>";

                echo "<td>".$aluno['id']."</td>";
                echo "<td>".$aluno['nome']."</td>";
                echo "<td>".$aluno['email']."</td>";
                echo "<td>".$aluno['curso']."</td>";
                echo "<td>".$aluno['idade']."</td>";

                echo "<td>

                <a class='btn azul'
                href='editar.php?id=".$aluno['id']."'>
                Editar
                </a>

                <a class='btn vermelho'
                href='excluir.php?id=".$aluno['id']."'>
                Excluir
                </a>

                </td>";

                echo "</tr>";

            }

        }else{

            echo "<tr>
            <td colspan='6'>
            Nenhum aluno cadastrado.
            </td>
            </tr>";

        }

        ?>

        </tbody>

    </table>

</div>

</body>
</html>