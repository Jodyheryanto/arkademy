<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_Model
{

    public function printProduk()
    {
        $query = $this->db->query(
            "SELECT * 
            FROM produk"
        );

        return $query->result_array();
    }

    public function printProdukId($id)
    {
        $query = $this->db->query(
            "SELECT * 
            FROM produk
            WHERE Id = $id"
        );

        return $query->result_array();
    }

    public function saveData(){
        $nama	= $this->input->post('nama');
		$keterangan	= $this->input->post('keterangan');
		$harga	= $this->input->post('harga');
		$jumlah	= $this->input->post('jumlah');
		$data_produk = [
			'nama' => $nama,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah
        ];
        $this->db->insert('Produk', $data_produk);
    }

    public function DelData($id)
    {
        //  $this->db->where('nim', $nim);
        $this->db->delete('produk', ['id' => $id]);
    }

    public function ChangeData($id)
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "keterangan" => $this->input->post('keterangan'),
            "harga" => $this->input->post('harga'),
            "jumlah" => $this->input->post('jumlah')
        ];
        $this->db->where('id', $id);
        $this->db->update('produk', $data);
    }
}