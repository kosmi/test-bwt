<?php

Class Home extends Controller {
    
    public function index() {
        
        $content_data = array(
            'some_data' => 'HaHaHa!'
        );
        $content_page = $this->get_view('reg', $content_data, false);
        
        $main_data = array(
            'content' => $content_page,
            'title' => 'Home'
        );
        
        $this->get_view('page', $main_data);
    }
}

