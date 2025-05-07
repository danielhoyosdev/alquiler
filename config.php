<?php
require_once "./config/Config.php";

$config = Config::singleton();

// Configuraciones de Base de datos
$config->set("host", "localhost");
$config->set("dbname", "alquiler");
$config->set("user", "root");
$config->set("password", "");

// Configuraciones Globales
$config->set("appName", "Alquiler");
$config->set("folderApp", "alquiler");
$config->set("root", "{$_SERVER["DOCUMENT_ROOT"]}/{$config->get("folderApp")}/");
$config->set("http", "http://{$_SERVER["HTTP_HOST"]}/{$config->get("folderApp")}/");

// Configuraciones AppClient
$config->set("imagesRoot", "{$config->get("root")}assets/images/");
$config->set("images", "{$config->get("http")}assets/images/");
$config->set("fonts", "{$config->get("http")}assets/fonts/");
$config->set("css", "{$config->get("http")}assets/css/");
$config->set("js", "{$config->get("http")}assets/js/");

// Configuraciones AppServer
$config->set("config", "{$config->get("root")}config/");
$config->set("controllers", "{$config->get("root")}controllers/");
$config->set("entities", "{$config->get("root")}entities/");
$config->set("models", "{$config->get("root")}models/");
$config->set("views", "{$config->get("root")}views/");

// Configuramos el llamado a las Clases
spl_autoload_register(function ($class) {
    $config = Config::singleton();
    $directories = ["config", "controllers", "entities", "models", "views"];

    foreach ($directories as $dir) {
        $pathFile = "{$config->get($dir)}{$class}.php";
        if (is_file($pathFile)) {
            require_once $pathFile;
            break;
        }
    }
});
