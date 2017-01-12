<?php

Class Feedbacks extends Controller {
    
    public function index() {
        
        $content_page = $this->get_view('feedback_list', array(), false);
        
        $this->get_view('page', array('content' => $content_page));
    }
    
}
