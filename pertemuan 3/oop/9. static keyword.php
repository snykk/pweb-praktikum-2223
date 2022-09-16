<?php

class Manusia
{
  public static $nama = "F. Samboz";

  public function sayHello()
  {
    return "Hallooo " . self::$nama;
  }
}

$obyek = new Manusia;

echo Manusia::$nama . "<br>";

echo $obyek->sayHello();
