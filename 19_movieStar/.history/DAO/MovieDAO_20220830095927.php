<?php
require_once("models/Movie.php");
require_once("models/Message.php");

// Review DAO

class MovieDAO implements movieDAOInterface
{

    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }
    public function builMovie($data)
    {
        $movie = new Movie();

        $movie->id = $data["id"];
        $movie->title = $data["title"];
        $movie->description = $data["description"];
        $movie->image = $data["image"];
        $movie->trailer = $data["trailer"];
        $movie->category = $data["category"];
        $movie->length = $data["length"];
        $movie->users_id = $data["users_id"];

        return $movie;
    }
    public function findAll()
    {
    }
    public function getLatestMovies()
    {
        $movie = [];

        $stmt = $this->conn->query("SELECT ");
    }
    public function getMoviesByCategory($category)
    {
    }
    public function getMoviesById($id)
    {
    }
    public function findById($id)
    {
    }
    public function findByTitle($title)
    {
    }
    public function create(Movie $movie)
    {
        $stmt = $this->conn->prepare("INSERT INTO movies(
            title,description, image, trailer, category, length, users_id
        ) VALUES(
            :title, :description, :image, :trailer, :category, :length, :users_id
        )");

        $stmt->bindParam(":title", $movie->title);
        $stmt->bindParam(":description", $movie->description);
        $stmt->bindParam(":image", $movie->image);
        $stmt->bindParam(":trailer", $movie->trailer);
        $stmt->bindParam(":category", $movie->category);
        $stmt->bindParam(":length", $movie->length);
        $stmt->bindParam(":users_id", $movie->users_id);

        $stmt->execute();

        //Msg de sucesso por adicionar filme
        $this->message->setMessage("Filme adicionado com sucesso!", "success");
    }
    public function update(Movie $movie)
    {
    }
    public function destroy($id)
    {
    }
}
