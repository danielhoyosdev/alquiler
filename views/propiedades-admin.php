<?php $config = Config::singleton() ?>

<!Doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Propiedades - CityScape</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= $config->get('images') ?>icon.ico" type="image/x-icon">

    <!-- Syles -->
    <link rel="stylesheet" href="<?= $config->get('css')?>styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Fonts -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
    <?php include_once 'components/header-admin.php'; ?>

    <div class="propiedades-container">
        <h2>Propiedades:</h2>

        <table>
            <tr>
                <th>Imagén</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Habiaciones</th>
                <th>Baños</th>
                <th>Wifi</th>
                <th>Parqueadero</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($propiedades as $propiedad) { ?>
                <tr>
                    <td class="propiedad-img-admin">
                        <img src="<?= $propiedad->getImagen(); ?>" alt=""/>
                    </td>
                    <td><?= $propiedad->getNombre(); ?></td>
                    <td>$ <?= number_format($propiedad->getPrecio(), 0, ',', '.'); ?> COP</td>
                    <td><?= $propiedad->getNumHabitaciones(); ?></td>
                    <td><?= $propiedad->getNumBanos(); ?></td>
                    <td><?php
                        if($propiedad->getWifi()) {
                            echo "SI";
                        }else {
                            echo "NO";
                        }?>
                    </td>
                    <td><?php
                        if($propiedad->getParqueadero()) {
                            echo "SI";
                        }else {
                            echo "NO";
                        }?>
                    </td>
                    <td>
                        <a href="<?= $config->get('http') ?>propiedad/eliminar/<?= $propiedad->getIdPropiedad(); ?>">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="<?= $config->get('js')?>script.js"></script>
</body>

</html>