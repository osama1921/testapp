<?php

class Produk{
	public $judul, 
	$penulis,
	$penerbit,
	$harga;
	

	public function __construct($judul,$penulis,$penerbit,$harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoProduk(){
		 $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		 
		 return $str;
	}
}

class Komik extends Produk{
	public $jmlHalaman; 
	public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman=0){

		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jmlHalaman = $jmlHalaman;

	}
	public function getInfoProduk(){
		 $str = "Komik : ". parent::getInfoProduk() ."- {$this->jmlHalaman} Halaman.";
		 return $str;
	}
}

class Game extends Produk{
	public $wkatuMain;
	public function __construct($judul,$penulis,$penerbit,$harga,$wkatuMain=0){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->wkatuMain = $wkatuMain;
	}
	public function getInfoProduk(){
		 $str = "Game : ". parent::getInfoProduk() ." - {$this->wkatuMain} Jam.";
		 return $str;
	}
}


class CetakInfoProduk{
	public function cetak(Produk $produk){

		$str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
		return $str;
	}
}

$komik = new Komik("Naruto","Masashi kishimoto", "Shonen Jump", 30000,100);
$Game = new Game("uncharted","Neil Druckmann","Sony Computer",250000,50);
 
 echo $komik->getInfoProduk();
 echo "<br>";
 echo $Game->getInfoProduk();