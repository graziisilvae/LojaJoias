<?php
include 'navbar.php'; 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSSLOJA/index.css">
    <title>Produtos</title>
</head>
<body>

    <h1>Produtos</h1>
    <div class="produtos">
        <?php while($produto = mysqli_fetch_assoc($result)): ?>
            <div class="produto">
                <h2><?= htmlspecialchars($produto['nome']); ?></h2>
                <p><?= htmlspecialchars($produto['descricao']); ?></p>
                <p>R$ <?= htmlspecialchars($produto['preco']); ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <?php include 'footer.php'; // Inclui o arquivo de rodapé ?>

</body>
</html>
