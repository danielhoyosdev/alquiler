<?php
// Archivos de Configuración
require_once "config.php";

class AppController {
    public static function main(){
        $config = Config::singleton();

        // Verificamos los controladores y las acciones
        $controllerName = empty($_GET["controller"]) ? "IndexController" : "{$_GET["controller"]}Controller";
        $actionName = empty($_GET["action"]) ? "index" : "{$_GET["action"]}";

        // Path del Controlador
        $controllerPath = "{$config->get("controllers")}{$controllerName}.php";

        // Verificamos si el controlador existe y llamamos la función solicitada
        if(is_file($controllerPath)){
            if(class_exists($controllerName) && method_exists($controllerName, $actionName)){
                $controller = new $controllerName();
                $controller->$actionName();
            }else{
                trigger_error("{$controllerName} -> {$actionName} no existe la función {$actionName}", E_USER_NOTICE);
            }
        }else{

            exit("Controller \"{$controllerName}\" no existe - 404 file not found");
        }
    }
}