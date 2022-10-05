<?php 
require_once "Bentuk2D.php";

class Segitiga extends Bentuk2D
{
    public $alas;
    public $tinggi;
    public function __construct($alas)
    {
        $this->alas = $alas;
        $this->tinggi = sqrt(pow($this->alas, 2) - pow($this->alas / 2, 2));
    }

    public function namaBidang()
    {
        $nama = "Segitiga";
        return $nama;
    }

    public function luasBidang()
    {
        $luas = ($this->alas * $this->tinggi) / 2;
        return number_format($luas, 2);
    }

    public function kelilingBidang()
    {
        $keliling = 3 * $this->alas;
        return $keliling;
    }
    public function keterangan()
    {
        return "
        Alas : ".$this->alas."<br>
        Tinggi : ".number_format($this->tinggi,2);
    }
}

?>