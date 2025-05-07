<div class="propiedades-container">
    <h2>Alojamientos</h2>

    <div class="propiedades-wrapper">
        <?php foreach ($propiedades as $propiedad) { ?>
            <div class="propiedad-item">
                <div class="propiedad-header">
                    <img src="<?= $propiedad->getImagen(); ?>" alt="">
                </div>

                <div class="propiedad-body">
                    <div class="title-item">
                        <h4><?= $propiedad->getNombre(); ?></h4>

                        <div>
                            <i class="fa-solid fa-star"></i>
                            <span>4.5</span>
                        </div>
                    </div>

                    <div class="pin-item">
                        <span><?= $propiedad->getCiudad(); ?>, <?= $propiedad->getDepartamento(); ?></span>
                    </div>

                    <h4>$ <?= number_format($propiedad->getPrecio(), 0, ',', '.'); ?> COP</h4>
                </div>

                <div class="propiedad-footer">
                    <a href="propiedad/ver/<?= $propiedad->getIdPropiedad(); ?>">
                        <span>Ver más</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>