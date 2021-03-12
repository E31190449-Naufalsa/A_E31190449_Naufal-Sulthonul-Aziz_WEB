<?php 
/**
 * 
 */
// soal 1
class Laptop
{
	// membuat properties dan method untuk soal 2 dan 3
	public $pemilik;
	public $merek;

	// membuat method untuk soal no 4
		public function hidupkan_laptop(){
		$keterangan = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// membuat method untuk soal no 3
	public function matikan_laptop(){
		$keterangan = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// membuat method untuk soal no 6
	public function restart_laptop(){
		$keterangan1 = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		$keterangan2 = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan1.". ".$keterangan2;
	}

}
 // membuat 3 objek untuk soal no 7
$Ivan= new Laptop();
$Budi= new Laptop();
$Imamz= new Laptop();

// set value objek Ivan
$Ivan -> pemilik ='A';
$Ivan -> merek ='Asus';

// set value objek Ivan
$Budi -> pemilik ='B';
$Budi -> merek ='Acer';

// set value objek Ivan
$Imamz -> pemilik ='C';
$Imamz -> merek ='Lenovo';

// memanggil dan eksekusi method 
echo $Ivan-> hidupkan_laptop()."<br>";
echo $Budi -> matikan_laptop()."<br>";
echo $Imamz-> restart_laptop()."<br>";

?>