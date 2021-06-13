<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Mahasiswa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');//berfungsi untuk memanggil file mahasiswa _model1.php yang terdapat di file model

	}

	public function tambah(){//berfungsi untuk memamnggil tambah pada template didalam view tambah mahasiswa
		$this->template->views('crud/tambah_mahasiswa');
	}

	public function input(){//memanggil fungsi input username, password , nama , grup
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(//berfungsi untuk mendeklarasikan array data
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
		$this->Mahasiswa_model->input_data($data, 'tm_user');//menginput data ke database dengan menggunakan mahasiswa_model
		redirect('Mahasiswa/index');//parameter yang bersisi data-data yang diinputkan
	}

	public function index()//untuk memanggil fuunsi index
	{
		$data['user'] = $this->Mahasiswa_model->getAll()->result();//untuk menyimpan data user untuk dipasangkan di view
		$this->template->views('crud/home_mahasiswa',$data);
	}
}
