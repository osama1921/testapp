<?php

class Produk{
	public $judul= "Judul", 
	$penulis="penulis",
	$penerbit="penerbit",
	$harga=0;

	public function __construct($judul,$penulis,$penerbit,$harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}


$produk1 = new Produk("Naruto","Masashi kishimoto", "Shonen Jump", 30000);

echo "Komik  : $produk1->penulis, $produk1->penerbit";
echo "<br>";

echo "<hr>";
$produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer","250000");



echo "Game : ".$produk2->getLabel();