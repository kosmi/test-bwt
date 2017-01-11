<?php

class Core {
    
    static function init() {
        
        $config = new Config();
        
        $urls = explode('/', $_SERVER['REQUEST_URI']);
//        var_dump($urls);
                
        if(empty($urls[1])) {
            $contr = $config->get('home_controller');
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
    }
    
    public function get($name) {
        return $this->config[$name];
    }
    
    public function set($name, $value) {
        $this->config[$name] = $value;
    }
}