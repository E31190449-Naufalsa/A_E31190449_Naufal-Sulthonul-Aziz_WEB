<?php
class kendaraan {
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi(){
	if($this -> tahunpembuatan < 2005 && $this -> bahanbakar == "Premium")
		$status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}

	public function hargaSecond() {
		if ($this -> tahunpembuatan >= 2010) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*20)/100;
		} else if ($this -> tahunpembuatan < 2010 && $this -> tahunpembuatan >= 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*30)/100;
		} else if ($this -> tahunpembuatan < 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaAwal*40)/100;
		}
		return $hargaBekas;
	}

}


$akasasri = new kendaraan ();
echo $akasasri -> jeniskendaraan="Jenis Kendaraan : angkutan Umum (BUS)";
echo "<br>";
echo $akasasri -> Trayek=" Trayek : Antar Kota Antar Provinsi";
echo "<br>";
echo $akasasri -> namamerk=" NamaMerk : Akas asri";
echo "<br>";
echo " Tahun pembuatan";
echo "<br>";
echo $akasasri -> tahunpembuatan=2007; 
echo "<br>";
echo " Bahan Bakar Yang Digunakan";
echo "<br>";
echo $akasasri -> bahanbakar="SOLAR";
echo "<br>";
echo " Harga Yang Dijual";
echo "<br>";
echo $akasasri -> harga="1000000"; echo " $";
echo "<br>";
echo " Harga Bekas atau Second";
echo "<br>";
echo $akasasri -> hargaSecond(); echo " $";
echo "<br>";


echo "Mendapat Subsidi ?";
echo $akasasri -> dapatSubsidi()


?>