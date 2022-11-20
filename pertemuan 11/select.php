<?php
require_once("db.php");

if (isset($_POST["sort"])) {
    $query = '';
    if ($_POST["sort"] == "asc") {
        $query = "SELECT * FROM films ORDER BY title ASC";
    } else {
        $query = "SELECT * FROM films ORDER BY title DESC";
    }
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($result)) {
        echo '
        <div class="col-md-4 col-xxl-3">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/536/354" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $data["title"] . '</h5>
                    <p class="card-text">' . $data["description"] . '</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <a href="#" class="btn btn-danger" id="' . $data["id"] . '" onclick="hapus(' . $data["id"] . ')">Hapus</a>
                </div>
            </div>
        </div>';
    }
} else {

    //!! >>> SEARCH <<<
    $output = '';
    if (isset($_POST["query"])) {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "SELECT * FROM films WHERE title LIKE '%" . $search . "%' ";
    } else {
        $query = "SELECT * FROM films";
    }
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_array($result)) {
            $output .= '
        <div class="col-md-4 col-xxl-3">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/536/354" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $data["title"] . '</h5>
                    <p class="card-text">' . $data["description"] . '</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <a href="#" class="btn btn-danger" id="' . $data["id"] . '" onclick="hapus(' . $data["id"] . ')">Hapus</a>
                </div>
            </div>
        </div>';
        }
        echo $output;
    } else {
        echo 'Data tidak ditemukan';
    }
}

?>

<script>
    //!! >>> HAPUS DATA <<<
    function hapus(id) {
        if (confirm("Apakah anda yakin?")) {
            $.ajax({
                url: "delete.php",
                method: "POST",
                data: {
                    film_id: id
                },
                success: function(data) {
                    console.log("Data berhasil dihapus")
                    $.ajax({
                        url: "select.php",
                        method: "POST",
                        data: {
                            query: ''
                        },
                        success: function(data) {
                            $('#content').html(data);
                        }
                    });
                }
            });

        }
    }
</script>