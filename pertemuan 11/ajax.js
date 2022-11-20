$(document).ready(function () {
    //!! >>> MENAMBAHKAN DATA KE DB <<<
    $("#save").click(function () {
        $title = $("#title").val()
        $description = $("#description").val()

        $.ajax({
            url: "insert.php",
            method: "POST",
            data: {
                title: $title,
                description: $description,
            },
            success: function (_) {
                $("#insertModal").modal("hide")
                $.ajax({
                    url: "select.php",
                    success: function (val) {
                        $("#content").html(val);
                    }
                });
                document.getElementById("title").value = "";
                document.getElementById("description").value = "";
            }
        })
    })

    load();
    //!! >>> MENGAMBIL DATA DARI DB <<<
    function load(query) {
        $.ajax({
            url: "select.php",
            method: "POST",
            data: { query: query },
            success: function (data) {
                $('#content').html(data);
            }
        });
    }
    $('#search_text').keyup(function () {
        var search = $(this).val();
        if (search != '') {
            load(search);
        }
        else {
            load();
        }
    });

    //!! >>> SORT A - Z <<<
    $('#AZ').click(function () {
        $.ajax({
            url: "select.php",
            method: "POST",
            data: { sort: 'asc' },
            success: function (data) {
                $('#content').html(data);
            }
        });
    })
    //!! >>> SORT Z - A <<<
    $('#ZA').click(function () {
        $.ajax({
            url: "select.php",
            method: "POST",
            data: { sort: 'dsc' },
            success: function (data) {
                $('#content').html(data);
            }
        });
    })
});