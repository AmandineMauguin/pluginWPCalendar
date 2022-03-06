<?php

    class Event 
    {
             //Constructor    
        function __construct(protected int $id_event, protected int $id_type_event, protected string $name_event, protected date $choice_deadline, protected date $chosen_date) {

        }

        //GETTER & SETTER 

        public function getIdEvent() {
            return $this->id_event;
        }

        public function getIdTypeEvent() {
            return $this->id_type_event;
        }

        public function getNameEvent() {
            return $this->name_event;
        }

        public function getChoiceDeadline() {
            return $this->choice_deadline;
        }

        public function getChosenDate() {
            return $this->chosen_date;
        }

        public function setIdEvent($id_event) {
            $this->id_event = $id_event;
        }

        public function setIdTypeEvent($id_type_event) {
            $this->id_type_event = $id_type_event;
        }

        public function setNameEvent($name_event) {
            $this->name_event = $name_event;
        }

        public function setChoiceDeadline($choice_deadline) {
            $this->choice_deadline = $choice_deadline;
        }

        public function setChosenDate($chosen_date) {
            $this->chosenDate = $chosen_date;
        }
    }
?>