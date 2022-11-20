<?php

require_once("db.php");


if (isset($_POST["film_id"])) {
    $id = $_POST["film_id"];
    $query = "DELETE FROM films WHERE id = $id";

    mysqli_query($conn, $query);
}
