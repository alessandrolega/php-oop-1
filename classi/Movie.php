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
            echo "<h1>Title:</h1> " . $this ->title;
            echo "<br>";
            echo "<span>Genre:</span> " . $this ->genre;
            echo "<br>";
            echo "<span>Age:</span> " . $this ->age;
            echo "<br>";
            echo $this->isForadult();
            echo "<br>";
            echo "<br>";
            echo "<br>";
      }

        
    }
?>