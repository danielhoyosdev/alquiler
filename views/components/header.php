<header>
    <div class="header-container">
        <div class="logo">
            <img src="<?= $config->get('images')?>logo.png" alt="Logo CityScape" />
        </div>

        <nav>
            <ul>
                <li>
                    <a>Inicio</a>
                </li>
                <li>
                    <a>Alojamiento</a>
                </li>
                <li>
                    <a>Ofertas</a>
                </li>
            </ul>
        </nav>

        <div class="header-user">
            <div class="wrapper-user">
                <i class="fa-solid fa-angles-down item-submenu"></i>

                <div>
                    <label>Daniel Hoyos</label>
                    <!-- <img src="default_user.png" alt="Imagén de Usuario"/> -->
                    <i class="fa-solid fa-circle-user"></i>
                </div>
            </div>
            <ul class="submenu">
                <li>
                    <a href="?controller=usuarios&action=registrarse">Registrarse</a>
                </li>
                <li>
                    <a href="?controller=usuarios&action=ingresar">Iniciar sesión</a>
                </li>
                <li>
                    <a href="#">Centro de ayuda</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<nav class="menu">
    <div class="wrapper-menu">
        <ul class="item-menu">
        <?php foreach ($tiposPropiedad as $tipo) { ?>
            <li>
                <a>
                    <i class="<?= $tipo->getIcon() ?>"></i>
                    <label><?= $tipo->getNombre() ?></label>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
</nav>