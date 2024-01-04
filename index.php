<?php

    class User{
        public $name;
        public $email;  

        public function login(){
            echo "the user is logged in";
        }
    }

    $userOne=new User();

    $userOne->login();

?>