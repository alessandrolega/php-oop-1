<?php 
    class Movie {
        // ATTRIBUTI CLASSE
        public $title;
        public $genre;
        public $age;

        // COSTRUTTORE

        function __construct( $_x, $_y, $_z){
            $this->title = $_x;
            $this->genre = $_y;
            $this->age = $_z;

        }

        // METODO

        public function isForadult(){
            if( $this->age > 18){
                return "La visione de $this->title è stata autorizzata";
            } else {
                return "La visione di questo film è riservata ad un pubblico adulto";
            }
        }
    }
?>