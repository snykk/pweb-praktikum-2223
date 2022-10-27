<?php

class Film
{

    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "sakila", "3306");
    }

    public function getAll()
    {
        $query = "SELECT * FROM film ORDER BY film_id DESC LIMIT 10";
        $result = $this->conn->query($query);

        if ($result->num_rows == 0) {
            die("Tabel Kosong");
        }

        return $result;
    }

    public function getById()
    {
        $film_id = $_POST["film_id"];

        $query = "SELECT * FROM film WHERE film_id = '$film_id'";

        $result = $this->conn->query($query);

        return $result;
    }

    public function insert()
    {
        $title = $_POST["title"];
        $language = $_POST["language"];

        $query = "INSERT INTO film (title, language_id) VALUES ('$title', '$language')";

        $this->conn->query($query);

        header("Location: index.php");
    }

    public function update()
    {
        $film_id = $_POST["film_id"];
        $title = $_POST["title"];
        $language = $_POST["language"];

        $query = "UPDATE film SET title='$title', language_id='$language' WHERE film_id='$film_id'";

        $this->conn->query($query);

        header("Location: index.php");
    }

    public function delete()
    {
        $film_id = $_POST["film_id"];

        $query = "DELETE FROM film WHERE film_id = '$film_id'";

        $this->conn->query($query);

        header("Location: index.php");
    }
}
