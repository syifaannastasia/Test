<?php 
 
class Admin_login extends CI_Model{	
	
	function cek_login($username,$password){		
		return $this->db->query("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password' LIMIT 1");
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