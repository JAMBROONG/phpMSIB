<?php 
require_once "Bentuk2D.php";
class PersegiPanjang extends Bentuk2D
{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang()
    {
        $nama = "Persegi Panjang";
        return $nama;
    }
    public function luasBidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang()
    {
        $keliling = ($this->panjang * 2) + ($this->lebar * 2);
        return $keliling;
    }

    public function keterangan()
    {
        return "
        Panjang : ".$this->panjang."<br>
        Lebar : ".$this->lebar."
        ";
    }
}

?>