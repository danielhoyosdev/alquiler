<header>
    <div class="header-container">
        <a href="<?= $config->get('http') ?>" class="logo">
            <img src="<?= $config->get('images')?>logo.png" alt="Logo CityScape" />
        </a>

        <nav>
            <ul>
                <li>
                    <a href="<?= $config->get('http') ?>">
                        Inicio
                    </a>
                </li>
                <li>
                    <a>
                        Alojamiento
                    </a>
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
                    <label>
                        <?php
                        if(isset($_SESSION["usuario"])) {
                            echo $usuario->nombre . "" . $usuario->apellido. " ";
                        } else {
                            echo "Usuario ";
                        }
                        ?>
                    </label>
                    <!-- <img src="default_user.png" alt="Imagén de Usuario"/> -->
                    <i class="fa-solid fa-circle-user"></i>
                </div>
            </div>
            <ul class="submenu">
                <?php
                if(!isset($_SESSION["usuario"])) { ?>
                    <li>
                        <a href="<?= $config->get('http') ?>usuarios\registrarse">Registrarse</a>
                    </li>
                    <li>
                        <a href="<?= $config->get('http') ?>usuarios\ingresar">Iniciar sesión</a>
                    </li>
                    <?php
                }
                ?>

                <?php
                    if(isset($_SESSION["usuario"])) { ?>
                        <li>
                            <a href="<?= $config->get('http') ?>usuarios\logout">Cerrar sesión</a>
                        </li>
                <?php
                    }
                ?>

            </ul>
        </div>
    </div>
</header>

<nav class="menu">
    <div class="wrapper-menu">
        <ul class="item-menu">
            <li>
                <a href="<?= $config->get('http') ?>usuarios/dashboard">
                    <i class="fa-solid fa-user"></i>
                    <label>Perfil</label>
                </a>
            </li>
            <li>
                <a href="<?= $config->get('http') ?>propiedad/admin">
                    <i class="fa-solid fa-building-user"></i>
                    <label>Propiedades</label>
                </a>
            </li>
        </ul>
    </div>
</nav>