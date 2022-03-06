<?php

    class EventDate 
    {
             //Constructor    
        function __construct(protected int $id_event_date,protected string $id_event, protected int $compteur_vote, protected date $date) {

        }

        //GETTER & SETTER 

        public function getIdEventDate() {
            return $this->id_event_date;
        }

        public function getIdEvent() {
            return $this->id_event;
        }

        public function getCompteurVote() {
            return $this->compteur_vote;
        }

        public function getDate() {
            return $this->date;
        }

        public function setIdEventDate($id_event_date) {
            $this->id_event_date = $id_event_date;
        }

        public function setIdEvent($id_event) {
            $this->id_event = $id_event;
        }

        public function setCompteurVote($xompteur_vote) {
            $this->compteur_vote = $compteur_vote;
        }

        public function setDate($date) {
            $this->date = $date;
        }
    }
?>