<?php
$jsonObj = json_decode(file_get_contents("schema.json"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container text-center mt-[10rem]">
    <!-- <h1 class="text-5xl mb-5">My App</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, odio!</p>
    <div class="mt-4">
      <a href="./views/login.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Login</a>
      <a href="./views/register.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</a>
    </div> -->
    <?php foreach ($jsonObj as $key => $value) : ?>

      <?php if (gettype($value) == "string") : ?>
        <div class="mb-6">
          <label class="block text-red-700 text-sm font-bold mb-2" for="password">
            <?= $value ?>
          </label>
          <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Insert your password">
        </div>

      <?php elseif (gettype($value) == "boolean") : ?>
        <input type="radio" value=""> <?= $value ?>
      <?php endif; ?>

    <?php endforeach; ?>

  </div>
</body>

</html>