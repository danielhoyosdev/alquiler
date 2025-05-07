<?php
    class Conexion extends PDO {
        private static $instance = null;
        private $config;

        public function __construct() {
            $this->config = Config::singleton();
            try{
                parent::__construct("mysql:host={$this->config->get("host")};dbname={$this->config->get("dbname")}", $this->config->get("user"), $this->config->get("password"));
                $this->exec("SET CHARACTER SET UTF8");
                $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }catch(PDOException $e){
                exit("Error: {$e->getMessage()}");
            }
        }

        public static function singleton(){
            if(self::$instance == null){
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function __clone(){
            trigger_error("La clonación no es permitida!, " . E_USER_ERROR);
        }
    }
?>