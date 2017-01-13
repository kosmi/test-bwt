<?php

Class User extends Model {
    
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $birthday;
    private $gender;
    
    public function __construct($name = null, $surname = null, $email = null, $password = null, $birthday = null, $gender = null) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->birthday = $birthday;
        $this->gender = $gender;
    }
    
    public function add() {
        
        if(!$this->is_fullvalid_data()) {
            exit('incorrect data for insert!');
        }
        
        $data = array(
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'pass' => $this->password,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
        );
        
        $db = DBTool::connect();
        
        $sql=$db->prepare('INSERT INTO user (
            name, surname, email, pass, birthday, gender
            ) VALUES (
            :name, :surname, :email, :pass, :birthday, :gender
            )');
        try {
            $sql->execute($data);
            return $db::lastInsertId;
        } catch (PDOException $ex) {
            exit('SQL Error: ' . $ex);
        }
    }
    
    private function is_fullvalid_data() {
        if($this->name === null || $this->surname === null || $this->email === null || $this->password  === null
                || ($this->gender !== null && $this->gender !== 'male' && $this->gender !== 'female')) {
            return false;
        } else {
            return true;
        }
    }
}

