<?php
// Obter o ID do produto enviado via GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Verificar se o ID é válido
if ($id <= 0) {
    echo "Produto inválido!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar Produto</title>
</head>
<body>
    <h1>Avaliar Produto <?php echo $id; ?></h1>
    <form action="processarnota.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nota">Nota (1 a 5):</label>
        <select name="nota" id="nota" required>
            <option value="">Selecione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br><br>
        <button type="submit">Enviar Avaliação</button>
    </form>
</body>
</html>