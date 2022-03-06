<?php

    class User 
    {
             //Constructor    
        function __construct(protected int $id_user,protected string $id_type_event) {

        }

        //GETTER & SETTER 

        public function getIdUser() {
            return $this->id_user;
        }

        public function getIdTypeEvent() {
            return $this->id_type_event;
        }

        public function setIdUser($id_user) {
            $this->id_user = $id_user;
        }

        public function setIdTypeEvent($id_type_event) {
            $this->id_type_event = $id_type_event;
        }

    }
?>