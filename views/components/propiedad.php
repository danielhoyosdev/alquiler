<div class="propiedades-container">
    <h2><?= $propiedad->nombre ?></h2>

    <div class="slide-container">
        <?php
            foreach ($imagenes as $imagen) { ?>
                <div class="slide">
                    <img src="<?= $imagen->getPath(); ?>" alt="<?= $imagen->getDescripcion() ?>">
                </div>
            <?php }
        ?>
    </div>
</div>