<?php
include 'conexao.php';

$sql = "SELECT * FROM dispositivos ORDER BY id DESC";
$dados = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dispositivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>📷 Dispositivos</h1>

    <form action="salvar_dispositivo.php" method="POST">

        <input type="text" name="nome" placeholder="Nome" required>

        <input type="text" name="localizacao" placeholder="Localização" required>

        <select name="status">
            <option>Ativo</option>
            <option>Inativo</option>
            <option>Manutenção</option>
        </select>

        <button type="submit">Salvar</button>

    </form>

    <hr>

    <table border="1" width="100%">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Localização</th>
            <th>Status</th>
        </tr>

        <?php while($linha = $dados->fetch(PDO::FETCH_ASSOC)): ?>

        <tr>
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['localizacao'] ?></td>
            <td><?= $linha['status'] ?></td>
        </tr>

        <?php endwhile; ?>

    </table>

</div>

<a href="index.php" class="voltar">
    ⬅ Voltar ao início
</a>

</body>
</html>