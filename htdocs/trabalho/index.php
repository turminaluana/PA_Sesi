<?php
include 'connection.php';

$usuarios = mysqli_query($conn, "SELECT * FROM aluno");
?>
<button><a href="registro.php">Cadastrar usuário</a></button>
<h2>Usuarios cadastrados</h2>

<table border=2>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>
        <th>Curso</th>
    </tr>

    <?php while($user = mysqli_fetch_assoc($usuarios)): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= htmlspecialchars($user['nome']) ?></td>
        <td><?= htmlspecialchars($user['idade']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
        <td><?= htmlspecialchars($user['curso']) ?></td>
         <td><button>Deletar</button></td>
         <td><button>Atualizar</button></td>
    </tr>
    <?php endwhile; ?>
</table>