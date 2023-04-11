<?php

require "Movie.php";

class Main
{
    public function __construct() {
        $movies =
            [
                new Movie("Casino Royale", "Eon Productions", "PG-13"),
                new Movie("Glass", "Buena Vista International", "PG-13"),
                new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
            ];

        $filteredMovies = Movie::getPG($movies);

        foreach ($filteredMovies as $movie) {
            $movie->displayInfo();
        }
    }
}

new Main;