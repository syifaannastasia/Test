<?php 

class Inventaris extends CI_Model{	
	
	function tambah_barang($nama_barang,$kategori,$jumlah,$deskripsi,$gambar,$status){		
		return $this->db->query("INSERT INTO `barang_inventaris`(`id_barang`, `nama_barang`, `kategori`, `jumlah`, `deskripsi`, `gambar`, `status`) VALUES ('', '$nama_barang', '$kategori', '$jumlah', '$deskripsi', '', 'tersedia')");
	}
	public function hapusData($id)
	{
		//use query builder to delete data based on id
		$this->db->where("id_barang", $id);  
        $query = $this->db->delete("barang_inventaris");
		//$query = $this->db->delete('barang_inventaris', array('id_barang' => $id));
		return $query;
	}	
}