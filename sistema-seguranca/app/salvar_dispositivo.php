<?php

include 'conexao.php';

$nome = $_POST['nome'];
$localizacao = $_POST['localizacao'];
$status = $_POST['status'];

$sql = "INSERT INTO dispositivos
(nome, localizacao, status)
VALUES
(:nome, :localizacao, :status)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':nome' => $nome,
    ':localizacao' => $localizacao,
    ':status' => $status
]);

header("Location: dispositivos.php");

?>