<?php 
    include_once __DIR__ . '/classi/Movie.php';

        
        $movie1 = new Movie( 'Interstellar', 'Fantasy', 20);
        $movie2 = new Movie ('Le Colline hanno Gli Occhi', 'Horror', 12);
        $movie3 = new Movie ('Natale a Rio', 'Comico', 21);
        $movie4 = new Movie ('The Killer', 'Horror', 15);

        // RICHIAMO FUNZIONE STAMPA 

        echo $movie1 -> stamp();
        echo $movie2 -> stamp();
        echo $movie3 -> stamp();
        echo $movie4 -> stamp();
?>
