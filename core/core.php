<?php

class Core {
    
    static function init() {
        $page = empty($_GET['page'])? 'home' : $_GET['page'];
        
        Core::get_controller($page);
    }
    
    static function get_controller($name) {
        $file = "controllers/$name.php";

        if(!file_exists($file)) {
            include "views/404.php";
            die();
        }
        
        require_once $file;

        $controller = new $name;
        $controller->index();
    }
}

class Controller {
    
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