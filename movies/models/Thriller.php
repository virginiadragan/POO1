<?php
include 'Movies.php';
class Thriller extends Movies {

    protected $filmList = array (
        array("movie"=>"Movie1","country"=>"Country","year"=>2000),
        array("movie"=>"Movie2","country"=>"Country","year"=>2000),
        array("movie"=>"Movie3","country"=>"Country","year"=>2000),
        array("movie"=>"Movie4","country"=>"Country","year"=>2000)
    );
    private $genre;
    public function __construct($genre) {
     $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

    public  function getList () {
     return $this->filmList;
    }
}