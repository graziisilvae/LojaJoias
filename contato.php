<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="../CSSLOJA.css">
</head>
<body>

    <h1>Entre em Contato</h1>
    <form action="envia_contato.php" method="POST">
        <input type="text" name="nome" placeholder="Seu Nome" required>
        <input type="email" name="email" placeholder="Seu Email" required>
        <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
        <button type="submit">Enviar</button>
    </form>

    <?php include 'footer.php'; ?>

</body>
</html>
