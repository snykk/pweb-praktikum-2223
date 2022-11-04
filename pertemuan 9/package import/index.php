<?php require_once("./db.php");

session_start();
if (isset($_SESSION["error"])) {
    if ($_SESSION["error"] == 1) {
        echo "<script> alert('password yang anda masukkan salah') </script>";
    } else if ($_SESSION["error"] == 2) {
        echo "<script> alert('username yang anda masukkan belum terdaftar') </script>";
    }
}
if (isset($_COOKIE["user"])) {
    $cookieUser = $_COOKIE["user"];
    $sql = "SELECT email, password FROM user WHERE username = '{$cookieUser}'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .bg-custom {
            background-color: rgb(98, 221, 232);
        }

        a {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container bg-custom my-5">
        <h1 class="text-center">Form Login</h1>
        <form action="./portal.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php if (isset($_COOKIE["user"])) echo $row["email"]; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php if (isset($_COOKIE["user"])) echo $row["password"]; ?>">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="checkbox" value="1" class="form-check-input" id="checkbox">
                <label class="form-check-label" for="checkbox">Remember me</label>
            </div>
            <div class="mb-3">
                <a href="./regis.php">Daftar</a>
            </div>
            <button type="submit" name="masuk" value="1" class="btn btn-primary">Submit</button>
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