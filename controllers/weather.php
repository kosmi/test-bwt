<?php

Class Weather extends Controller {
    
    public function index() {
        
        $content_page = $this->get_view('weather', array(), false);
        
        $this->get_view('page', array('content' => $content_page));
    }
    
}
