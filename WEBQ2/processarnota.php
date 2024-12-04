<?php

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$nota = isset($_POST['nota']) ? intval($_POST['nota']) : 0;

if ($id <= 0 || $nota < 1 || $nota > 5) {
    echo "Dados inválidos!";
    exit;
}

echo "Obrigado por avaliar o Produto $id com a nota $nota.";
?>