<?php 
require_once "Bentuk2D.php";

class Segitiga extends Bentuk2D
{
    public $alas;
    public function __construct($alas)
    {
        $this->alas = $alas;
    }

    public function namaBidang()
    {
        $nama = "Segitiga";
        return $nama;
    }

    public function tinggi()
    {
        $s2 = pow($this->alas, 2) - pow($this->alas / 2, 2);
        $tinggi = sqrt($s2);
        return $tinggi;
    }

    public function luasBidang()
    {
        $luas = 0.5 * $this->alas * $this->tinggi();
        return $luas;
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
        Tinggi : ".$this->tinggi()."
        ";
    }
}

?>