<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulário</h3>
    
    <?php foreach ($pessoas as $index => $pessoa): ?>
        <p><?= $index ?>: <?= $pessoa->nome ?> <?= $pessoa->email ?></p>
    <?php endforeach; ?>

    <form action="" method="get">
        <input class="form-control mb-4" type="text" name="nome">
        <input class="form-control mb-4" type="text" name="idade">

        <button class="btn btn-primary mb-4" type="submit">Enviar</button>
    </form>
</body>
</html>