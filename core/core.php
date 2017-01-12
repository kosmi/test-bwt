<?php

class Core {
    
    public static $config;
    
    static function init() {
        
        self::$config = new Config();
        
        $urls = explode('/', $_SERVER['REQUEST_URI']);
                
        if(empty($urls[1])) {
            $contr = self::$config->get('home_controller');
        } else {
            $contr = $urls[1];
        }
        
        if(empty($urls[2])) {
            $action = 'index';
        } else {
            $action = $urls[2];
        }
        
        $args = array_slice($urls, 3);
        
        Core::get_controller($contr, $action, $args);
    }
    
    static function get_controller($name, $action = 'index', $args = array()) {
        $file = "controllers/$name.php";

        if(!file_exists($file)) {
            include "views/404.php";
            die();
        }
        
        require_once $file;

        $controller = new $name;
        if(method_exists($controller, $action)) {
            $controller->$action($args);
        } else {
            include "views/404.php";
            die();
        }
        
    }
}

class Controller {
    
    public function index() {
        
    }
    
    public function get_view($name, $data = array(), $print = true) {
        $file = "views/$name.php";
        
        if(!file_exists($file)) {
            $file = "views/404.php";
        }
        
        $content = file_get_contents($file);
        foreach ($data as $key => $item) {
            $content = str_replace("{{{$key}}}", $item, $content);
        }
        
        if($print) {
            echo $content;
        } else {
            return $content;
        }
        
    }
    
}

class Config {
    private $config = array();
    
    function __construct() {
        require_once 'config/config.php';
        
        $this->config = $config;
        
//        var_dump($this->config);
//        echo '<br>';
        
    }
    
    public function get($name) {
        return $this->config[$name];
    }
    
    public function set($name, $value) {
        $this->config[$name] = $value;
    }
}

class DBTool  {  // класс для работы с базой данных

	static function connect() { // подключение к БД MySQL строка подключения
            
            $dsn = 'mysql:host='.Core::$config->get('db_host').';dbname='.Core::$config->get('db_name').'; charset=utf8;';
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // если произойдет ошибка сразу прерывать работу
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
            );
            
            try {
                $pdo = new PDO($dsn,Core::$config->get('db_user'), Core::$config->get('db_password'), $options);
                return $pdo;
            } catch (Exception $ex) {
                echo "<code>DB Error: $ex</code>";
                return false;
            }
            
	}	

}