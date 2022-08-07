<?php

echo "Hewan";
echo "<hr>";

class Hewan {
    public $jumlah_kaki,$bisa_terbang;
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "meow meow meow";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return "guk guk guk ";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Elang extends Hewan {
    function bersuara()
    {
        return "Miiipp";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

class Angsa extends Hewan {
    function bersuara()
    {
        return "kwaakkkk kwakkkk";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

$Abu = new Kucing;
$Abu->jumlah_kaki = 4;
echo "Abu adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$Abu->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Abu->bisa_terbang()."<br>";
echo "Bersuara: " .$Abu->bersuara()."<br>";

echo "<hr>";

$Holly = new Anjing;
$Holly->jumlah_kaki = 4;
echo "Holly Adalah Anjing <br>";
echo "Punya Kaki Sebanyak:" .$Holly->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Holly->bisa_terbang()."<br>";
echo "Bersuara: " .$Holly->bersuara()."<br>";

echo "<hr>";

$Moa= new Elang;
$Moa->jumlah_kaki = 2;
echo "Moa Adalah Elang <br>";
echo "Punya Kaki Sebanyak: " .$Moa->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Moa->bisa_terbang()."<br>";
echo "Bersuara: " .$Moa->bersuara()."<br>";

echo "<hr>";

$Shoky = new Angsa;
$Shoky->jumlah_kaki = 2;
echo "Shoky Adalah Angsa <br>";
echo "Punya Kaki Sebanyak: " .$Shoky->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Shoky->bisa_terbang()."<br>";
echo "Bersuara: " .$Shoky->bersuara()."<br>";

echo "<hr>";

?>