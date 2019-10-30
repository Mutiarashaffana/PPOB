<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_tarif extends CI_Model {

	public function get_tarif()
	{
		return $this->db->get('tarif')->result();
	}
	 public function masuk_db()
	{
		
			$data_tarif=array(
				
				'tarifperkwh'=>$this->input->post('tarifperkwh'),
			);
			$sql_masuk=$this->db->insert('tarif', $data_tarif);
			return $sql_masuk;	
	}
	public function detail_tarif($id_tarif)
	{
		return $this->db->where('id_tarif',$id_tarif)->get('tarif')->row();
	}
	public function update_tarif()
	{
		
		$dt_up_tarif=array(
				
				'tarifperkwh'=>$this->input->post('tarifperkwh'),
		);
	return $this->db->where('id_tarif',$this->input->post('id_tarif'))->update('tarif', $dt_up_tarif);
	}
	public function hapus_tarif($id_tarif)
	{
		return $this->db->where('id_tarif',$id_tarif)->delete('tarif');
	}
}

