<?php $config = Config::singleton() ?>

<!Doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse - CityScape</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= $config->get('images') ?>icon.ico" type="image/x-icon">

    <!-- Syles -->
    <link rel="stylesheet" href="<?= $config->get('css')?>styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Fonts -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
    <?php include_once 'components/header.php'; ?>

    <div class="form-auth">
        <form action="ingresarPost" method="POST">
            <h2>Ingresar</h2>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="juanperez@correo.com" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="************" required minlength="6">

            <div class="form-footer">
                <button type="submit">Ingresar</button>
            </div>

            <p>
                ¿Olvidaste tu contraseña?
            </p>

            <div class="mensaje" id="mensajeError"></div>
        </form>
    </div>

    <script src="<?= $config->get('js')?>script.js"></script>
</body>

</html>