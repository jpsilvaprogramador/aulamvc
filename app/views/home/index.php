<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <p>Esta é a Home</p>
    <p> Nome: <?= $nome ?? ''; ?></p>
    <p> Idade: <?= $idade ?? ''; ?></p>
    <p>Email: <?= $email ?? ''; ?></p>
    <hr>
</body>
</html>