<?php

require_once "productM.php";

class SepatuModel extends Product
{
    public $ukuran;

    public function __construct($nama, $harga, $deskripsi, $ukuran)
    {
        parent::__construct($nama, $harga, $deskripsi);
        $this->ukuran = $ukuran;
    }
}
