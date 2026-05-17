<?php
include 'conexao.php';

$sql = "SELECT * FROM alertas ORDER BY id DESC";
$dados = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alertas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>🚨 Alertas</h1>

    <form action="salvar_alerta.php" method="POST">

        <input type="text" name="tipo" placeholder="Tipo do alerta" required>

        <textarea name="descricao" placeholder="Descrição"></textarea>

        <select name="risco">
            <option>Baixo</option>
            <option>Médio</option>
            <option>Alto</option>
        </select>

        <button type="submit">Salvar</button>

    </form>

    <hr>

    <table border="1" width="100%">

        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Descrição</th>
            <th>Risco</th>
        </tr>

        <?php while($linha = $dados->fetch(PDO::FETCH_ASSOC)): ?>

        <tr>
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['tipo'] ?></td>
            <td><?= $linha['descricao'] ?></td>
            <td><?= $linha['risco'] ?></td>
        </tr>

        <?php endwhile; ?>

    </table>

</div>

<a href="index.php" class="voltar">
    ⬅ Voltar ao início
</a>

</body>
</html>