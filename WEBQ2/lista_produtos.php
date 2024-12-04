<?php
$produtos = [
    1 => "Produto 1",
    2 => "Produto 2",
    3 => "Produto 3",
    4 => "Produto 4",
    5 => "Produto 5"
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <ul>
        <?php foreach ($produtos as $id => $nome): ?>
            <li><a href="avaliar_produto.php?id=<?php echo $id; ?>"><?php echo $nome; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>