<?php

Class Home extends Controller {
    
    public function index() {
        
        //$db = DBTool::connect();
        
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
    
    public function signup() {
        if(empty($_POST['adduser'])) {
            $this->show_404();
        } else {
            if($this->signup_validate($_POST)) {
                
            } else {
                exit('Sign Up Error!');
            }
        }
    }
    
    private function signup_validate($data = array()) {
        if(empty($data['name']) || empty($data['surname']) || empty($data['email']) || empty($data['pass']) || empty($data['confirm']) || $data['pass'] != $data['confirm'] ) {
            return false;
        } else {
            return true;
        }
    }
}

