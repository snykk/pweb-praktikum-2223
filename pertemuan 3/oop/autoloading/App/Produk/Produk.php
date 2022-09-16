<?php

abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $dikson = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setjudul($judul)
    {
        // if (!is_string($judul)) {
        //     throw new Exception("judul harus string");
        // }
        $this->judul = $judul;
    }

    public function getjudul()
    {
        return $this->judul;
    }

    public function setpenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getpenulis()
    {
        return $this->penulis;
    }

    public function setpenerbit($penulis)
    {
        $this->penerbit = $penulis;
    }

    public function getpenerbit()
    {
        return $this->penerbit;
    }

    public function setharga($harga)
    {
        $this->harga = $harga;
    }

    public function getharga()
    {
        return (1 - ($this->diskon) / 100) * $this->harga;
    }

    public function setDiskon($Diskon)
    {
        $this->diskon = $Diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
}
