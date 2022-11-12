<?php
include "../config.php";
require PATH_CONTROLLERS . "auth_controller.php";
require PATH_CONTROLLERS . "portal_controller.php";

if (session_status() === PHP_SESSION_NONE) {
  session_start();
};

if (isset($_POST["logout"])) {
  $objAuth = new AuthController();
  $err = $objAuth->logout();
}

if (!isset($_COOKIE["user"])) {
  $_SESSION["not-authenticated"] = "user not authenticated";
  header("Location:login.php");
}

if (isset($_COOKIE["user"])) {
  $portalController = new PortalController();
  $userData = $portalController->index($_COOKIE["user"]);
}

if (isset($_POST["upload"])) {
  $portalC = new PortalController();
  if (isset($userData)) {
    $err = $portalC->uploadImage($userData["id"]);
  } else {
    echo "error";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal MyApp</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container p-10 text-center">
    <?php if (isset($userData["image_url"])) : ?>
      <img src="../assets/profile/<?= $userData["image_url"] ?>" alt="image profile" class="w-40 h-40 mx-[auto] rounded-full">
    <?php else : ?>
      <img src="../assets/image/person.jpg" alt="image profile" class="w-40 h-40 mx-[auto] rounded-full">
    <?php endif; ?>
    <h1 class="text-3xl mt-4">Welcome to <strong class="text-red-400"><?= $userData["email"] ?></strong></h1>
    <p>Your password hash :D <span class="text-blue-500"><?= $userData["password"] ?></span></p>
    <form action="" method="POST">
      <button type="submit" name="logout" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-5" onclick="return confirm('Are you sure to logout?');">logout</button>
    </form>
    </br>

    <?php
    if (isset($err)) {
      include "partials/error_message_partial.php";
    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
      <input type="file" name="image">
      <button type="submit" name="upload" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-5">upload</button>
    </form>
  </div>
</body>

</html>