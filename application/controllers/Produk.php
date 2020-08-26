<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('DataProduk');
    }

	public function index()
	{
		$data['produk'] = $this->DataProduk->printProduk();
		$this->load->view('Header');
		$this->load->view('Content', $data);
		$this->load->view('Footer');
 	}

	public function InsertProduk()
	{
		$this->load->view('Header');
		$this->load->view('InputProduk');
		$this->load->view('Footer');
	}

	public function InsDbProduk()
    {
		$this->DataProduk->saveData();
		$this->session->set_flashdata('msg', 'You success insert the data!');
        redirect('Produk');
	}

	public function DelDbProduk($id)
    {
		$this->DataProduk->DelData($id);
		$this->session->set_flashdata('msg', 'You success delete the data!');
        redirect('Produk');
	}
	
	public function ChangeProduk($id){
		$data['produk'] = $this->DataProduk->printProdukId($id);
		$this->load->view('Header');
		$this->load->view('ChangeProduk', $data);
		$this->load->view('Footer');
	}

	public function ChangeDbProduk($id)
    {
		$this->DataProduk->ChangeData($id);
		$this->session->set_flashdata('msg', 'You success change the data!');
		redirect('Produk');
    }
}
