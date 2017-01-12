<?php

Class Your_feedback extends Controller {
    
    public function index() {
        
        $content_page = $this->get_view('feedback_input', array(), false);
        
        $this->get_view('page', array('content' => $content_page));
    }
    
}

