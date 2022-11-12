<?php

include "../config.php";
require_once PATH_MODELS . "user_model.php";

class PortalController
{
  private $userModel;
  public function __construct()
  {
    $this->userModel = new UserModel();
  }

  public function index($email)
  {
    $user = $this->userModel->getUserByEmail($email);
    return $user;
  }

  public function uploadImage($userId)
  {
    $image = $_FILES["image"];

    $imageName = $image["name"];
    $imageType = pathinfo($imageName, PATHINFO_EXTENSION);

    // ! Cek file extension [ jpg, png dan jpeg ]
    if ($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg") {
      return "invalid type";
    }

    // ? Cek ukuran gambar [ < 1000000 ]
    $imageSize = $image["size"];
    if ($imageSize > 1000000) {
      return "image size too large";
    }

    $timeMili =   round(microtime(true) * 1000);

    $imagePath = "$timeMili" . "." . $imageType;
    $from = $image["tmp_name"];
    $to = "../assets/profile/" . $imagePath;

    if (move_uploaded_file($from, $to)) {
      $this->userModel->saveImageUrl($imagePath, $userId);
      header("Location: portal.php");
    } else {
      return "error occurred";
    }

    return;
  }
}
