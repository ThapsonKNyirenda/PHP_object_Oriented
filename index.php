<?php

    class User{
        public $name;
        public $email;  

        public function __construct($name, $email) { 
            $this->name = $name;
            $this->email = $email; 
        }

        public function login(){
            echo $this->name. " is logged in";
        }
    }

    $userOne=new User('Thapson','thap@gmail.com');

    // $userOne->login();
    $userOne->login();

?>