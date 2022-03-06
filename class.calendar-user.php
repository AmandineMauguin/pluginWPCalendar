<?php

    class User 
    {
             //Constructor    
        function __construct(protected int $id_user,protected string $login, protected string $password) {

        }

        //GETTER & SETTER 

        public function getIdUser() {
            return $this->id_user;
        }

        public function getLogin() {
            return $this->login;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setIdUser($id_user) {
            $this->id_user = $id_user;
        }

        public function setLogin($login) {
            $this->login = $login;
        }

        public function setPassword($password) {
            $this->password = $password;
        }
    }
?>