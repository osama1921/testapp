<?php

class Produk{
	public $judul, 
	$penulis,
	$penerbit,
	$harga,
	$jmlHalaman,
	$wkatuMain,
	$tipe;

	public function __construct($judul,$penulis,$penerbit,$harga, $jmlHalaman=0, $wkatuMain=0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->wkatuMain = $wkatuMain;
		$this->tipe = $tipe;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoLengkap(){
		 $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		 if ($this->tipe == "Komik") {
		 	$str .= " - {$this->jmlHalaman} Halaman";
		 }else if ($this->tipe == "Game") {
		 	$str .= " ~ {$this->wkatuMain} Jam";
		 	
		 }
		 return $str;
	}
}

class CetakInfoProduk{
	public function cetak(Produk $produk){

		$str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto","Masashi kishimoto", "Shonen Jump", 30000,100,0, "Komik");
$produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",250000,0,50, "Game");
 
 echo $produk1->getInfoLengkap();
 echo "<br>";
 echo $produk2->getInfoLengkap();