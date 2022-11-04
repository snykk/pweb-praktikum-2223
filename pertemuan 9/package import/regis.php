<?php require_once("./db.php");

if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $verif_password = $_POST["verif-password"];

    $sql = "SELECT * FROM user WHERE username = '{$username}' OR email = '{$email}'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo "<script> alert('username atau email sudah digunakan') </script>";
    } else if ($password == $verif_password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        // $sql = "INSERT INTO user (first_name,last_name,username,jenis_kelamin,email,password)
        //         VALUES('{$first_name}','{$last_name}','{$username}','{$jenis_kelamin}','{$email}','{$password}')
        //         ";
        // $db->query($sql);

        $sql = "INSERT INTO user (first_name,last_name,username,jenis_kelamin,email,password)
        VALUES(?,?,?,?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssssss", $first_name, $last_name, $username, $jenis_kelamin, $email, $password);
        $stmt->execute();
        header("Location: index.php");
    } else {
        echo "<script> alert('password verifikasi tidak sesuai') </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regis</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .bg-custom {
            background-color: rgb(98, 221, 232);
        }

        .form {
            text-transform: capitalize;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container bg-custom my-5">
        <h1 class="text-center">Form Regis</h1>
        <form class="form" action="" method="post">
            <div class="mb-3">
                <label for="first_name" class="form-label">first name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">last name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="mb-1">
                <div class="mb-2">jenis kelamin</div>
                <label for="laki_laki" class="form-label">laki laki</label>
                <input type="radio" name="jenis_kelamin" value="L" id="laki_laki" required>
                <label for="wanita" class="form-label">wanita</label>
                <input type="radio" name="jenis_kelamin" value="P" id="wanita" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="verif-password" class="form-label">verif password</label>
                <input type="password" name="verif-password" class="form-control" id="verif-password" required>
            </div>
            <button type="submit" name="submit" value="daftar" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>