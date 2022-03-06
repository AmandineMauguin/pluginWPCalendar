<?php

    class TypeEvent 
    {
             //Constructor    
        function __construct(protected int $id_type_event,protected string $name_type_event) {

        }

        //GETTER & SETTER 

        public function getIdTypeEvent() {
            return $this->id_type_event;
        }

        public function getNameEvent() {
            return $this->name_type_event;
        }

        public function setIdTypeEvent($id_type_event) {
            $this->id_type_event = $id_type_event;
        }

        public function setNameEvent($name_type_event) {
            $this->name_type_event = $name_type_event;
        }
    }
?>