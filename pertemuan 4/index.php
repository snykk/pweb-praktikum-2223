<?php
// import file product.php
require_once "productC.php";

$products = new ProductC();

// Naming Convention

// kata benda 
// $nama = 1;
// $umur = 2;

// kata kerja
// function getNama() {

// }

// Class -> Diawali dengan huruf besar
// class AuthService {

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products->products as $product) : ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/536/354" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->nama ?></h5>
                            <p class="card-text"><?= $product->deksripsi ?>.</p>
                            <a href="#" class="btn btn-primary">Rp <?= $product->harga ?></a>
                            <?php if (isset($product->rasa)) : ?>
                                <a href="#" class="btn btn-primary">Rasa <?= $product->rasa ?></a>
                            <?php elseif (isset($product->ukuran)) : ?>
                                <a href="#" class="btn btn-primary">Ukuran <?= $product->ukuran ?></a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


</body>

</html>