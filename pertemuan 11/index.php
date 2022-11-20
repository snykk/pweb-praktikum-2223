<?php
require_once("db.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Film</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

</head>

<body>
    <!-- //!! >>> SEARCH <<< -->
    <div class="d-flex flex-row-reverse my-3 mx-2">
        <form class="d-flex col-4" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_text" id="search_text">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

    </div>
    <!-- //!! >>> SORT <<< -->
    <div class="d-flex flex-row-reverse mx-2">
        <button class="btn btn-outline-primary mx-1" type="submit" id="ZA">Z - A</button>
        <button class="btn btn-outline-primary mx-1" type="submit" id="AZ">A - Z</button>
        <h4>Urut berdasarkan abjad - </h4>
    </div>
    <!-- //!! >>> TITLE DAN BODY <<< -->
    <div class="container py-5">
        <h1 class="text-center">Data Film</h1>
        <p class="text-right"><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">Tambah Film</a></p>
        <div class="row" id="content">

        </div>
    </div>
    <!-- //!! >>> MODAL UNTUK ADD DATA <<< -->
    <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="email" class="form-control" id="title" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="description"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="save">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>