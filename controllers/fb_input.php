<?php

Class Fb_input extends Controller {
    
    public function index() {
        $this->get_view('reg');
    }
    
    public function test($params) {
        var_dump($params);
    }
}

