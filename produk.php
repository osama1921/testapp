<?php

class Produk{
	public $judul= "Judul", 
	$penulis="penulis",
	$penerbit="penerbit",
	$harga=0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul ="Uncharted";
// $produk2->tambahProperty = "Hahah";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashi kishimoto";
$produk3->penerbit="Shonen Jump";
$produk3->harga=30000;

echo "Komik  : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();

echo "<hr>";
$produk4 = new Produk();
$produk4 ->judl= "uncharted";
$produk4->penulis = "Neiil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 2500000;


echo "Game : ".$produk4->getLabel();