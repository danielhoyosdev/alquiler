<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios:</h1>
    <?php
    if (!empty($usuarios)) {
        foreach ($usuarios as $usuario) { ?>
            <pre>
                <?= $usuario->nombre ?>
            </pre>
    <?php }
    } ?>
</body>
</html>