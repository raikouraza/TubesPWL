<?php

class CreateGenreController
{
    private $genreDao;

    public function __construct()
    {
        $this->genreDao = new GenreDao();
    }

    public function index()
    {
        // Block below for insert
        $submitted =filter_input(INPUT_POST,'btnSubmit');
        if(isset($submitted)){
            $name = filter_input(INPUT_POST,'txtName');
            $newGenre = new Genre();
            $newGenre->setGenreId($name);
            $this->genreDao->addGenre($newGenre);
        }
    }
}