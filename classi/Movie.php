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
    }
?>