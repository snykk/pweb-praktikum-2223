<?php

require_once("db.php");

$title = $_POST["title"];
$description = $_POST["description"];


$query = "INSERT INTO films (title, description) VALUES ('" . $title . "', '" . $description . "')";

mysqli_query($conn, $query);