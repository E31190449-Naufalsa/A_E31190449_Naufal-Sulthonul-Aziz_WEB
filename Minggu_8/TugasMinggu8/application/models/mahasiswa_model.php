<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Naufal","prodi"=>"MIF"],
			["nama"=>"Sulthonul","prodi"=>"TKK"],
			["nama"=>"Aziz","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
}
?>