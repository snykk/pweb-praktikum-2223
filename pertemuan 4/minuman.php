<?php

require_once "productM.php";

class MinumanModel extends Product
{
    public $rasa;

    public function __construct($nama, $harga, $deskripsi, $rasa)
    {
        parent::__construct($nama, $harga, $deskripsi);
        $this->rasa = $rasa;
    }
}
