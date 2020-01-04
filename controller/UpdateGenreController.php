<?php


class GenreUpdateController
{
    private $genreDao;

    public function __construct()
    {
        $this->genreDao = new GenreDao();
    }

    public function index()
    {
        // Block below for fetch data
        $genre_id = filter_input(INPUT_GET, 'genre_id');
        if(isset($genre_id)){
            $genre_id = $this->insuranceDao->getInsurance($genre_id);
        }

        // Block below for update
        $submitted = filter_input(INPUT_POST,'btnUpdate');
        if(isset($submitted)){
            $genre_name = filter_input(INPUT_POST,'txtGenreNama');
            $updatedGenre = new Genre();
            $updatedGenre->setGenreName($genre_name);
            $updatedGenre->setGenreId($genre_id);
            $this->genreDao->updateGenre($updatedGenre);
            header("location:index.php?menu=gen");
        }
    }
}