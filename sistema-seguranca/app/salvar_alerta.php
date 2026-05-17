<?php

include 'conexao.php';

$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$risco = $_POST['risco'];

$sql = "INSERT INTO alertas
(tipo, descricao, risco)
VALUES
(:tipo, :descricao, :risco)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':tipo' => $tipo,
    ':descricao' => $descricao,
    ':risco' => $risco
]);

header("Location: alertas.php");

?>