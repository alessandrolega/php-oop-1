<?php 
    class Movie {
        // ATTRIBUTI CLASSE
        public $title;
        public $genre;
        public $age;

        // COSTRUTTORE

        function __construct( $title, $genre, $age){
            $this->title = $title;
            $this->genre = $genre;
            $this->age = $age;

        }

        // METODO

        public function isForadult(){
            if( $this->age > 18){
                return "La visione de $this->title è stata autorizzata";
            } else {
                return "La visione de $this->title è riservata ad un pubblico adulto";
            }

            echo $this -> title;
        }

        // FUNZIONE STAMPA IN PAGINA

        public function stamp(){
            echo "<strong>Title:</strong> " . $this ->title;
            echo "<br>";
            echo "<strong>Genre:</strong> " . $this ->genre;
            echo "<br>";
            echo "<strong>Age:</strong> " . $this ->age;
            echo "<br>";
            echo $this->isForadult();
            echo "<br>";
            echo "<br>";
            echo "<br>";
      }

        
    }
?>