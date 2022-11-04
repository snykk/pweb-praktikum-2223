<?php

$db = new mysqli("localhost", "root", "", "yolo");

if ($db->connect_error) {
    die("Koneksi Gagal");
}

$sql = "CREATE TABLE IF NOT EXISTS user (
            id_user INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            username VARCHAR(50) NOT NULL,
            jenis_kelamin CHAR(1) NOT NULL,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL
);";

$db->query($sql);
