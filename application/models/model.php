<?php

class Model extends CI_Model{
	

	function get_storage_table()
		{
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('storage');
			return $query->result();
		}

	function get_log_table()
		{
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('log');
			return $query->result();
		}

	function insert_log($user,$aktifitas,$status){
			$data = array('user'=>$user, 'aktifitas'=>$aktifitas, 'status'=>$status);
			$this->db->insert('log', $data);
		}


	function backup($data=NULL)
		{
			if($data==NULL){
			$query = $this->db->get('jadwal');
			return $query->result();
			}else{
		      $this->db->where('id', '1');
		      $this->db->update('jadwal',$data);
			}
		}
		
	function tagline($data=NULL)
		{
			if($data==NULL){
			$query = $this->db->get('tagline');
			return $query->result();
			}else{
		      $this->db->where('id', '150');
		      $this->db->update('tagline',$data);
			}
		}

	function kamera($id=NULL,$data=NULL)
		{
			if($id==NULL && $data==NULL){
			$query = $this->db->get('kamera');
			return $query->result();
			}if($id!=NULL && $data==NULL){
			$this->db->where('id', $id);
			$query = $this->db->get('kamera');
			return $query->result();
			}if($id!=NULL && $data!=NULL){
				$this->db->where('id', $id);
		      $this->db->update('kamera',$data);
			}
		}


	function insert_post(){
			$nama1 = $this->input->post('nama1');
			$nama2 = $this->input->post('nama2');
			$nim1 = $this->input->post('nim1');
			$nim2 = $this->input->post('nim2');
			$judul = $this->input->post('judul');
			$content = $this->input->post('content');
			$data = array('nama1'=>$nama1, 'nama2'=>$nama2, 'nama1'=>$nama1, 'nama2'=>$nama2, 'nim1'=>$nim1, 'nim2'=>$nim2, 'status'=>'1', 'dosbing'=>'Pending', 'judul'=>$judul, 'content'=>$content);
			$this->db->set('date_post', 'NOW()', FALSE);
			$this->db->insert('pengisian', $data);
		}


	function get_post_table()
		{
			$this->db->order_by('id', 'ascd');
			$query = $this->db->get('pengisian');
			return $query->result();
		}
	
	public function get_post_pagi($num, $offset)
	 {
		$this->db->order_by('id', 'ASC');
		$data = $this->db->get('log', $num, $offset);
		return $data->result();
	}
	
	function get_post_table_by_id($id)
		{
			$this->db->order_by('id', 'ascd');
			$this->db->where('id', $id);
			$query = $this->db->get('pengisian');
			return $query->result();
		}
		
	function cek_nim()
		{
			$nim1 = $this->input->post('nim1');
			$nim2 = $this->input->post('nim2');
			$this->db->where('status', '1');
			$this->db->where('status', '3');
			$this->db->where('nim1', $nim1);
			$this->db->or_where('nim1', $nim2);
			$this->db->or_where('nim2', $nim1);
			$this->db->or_where('nim2', $nim2);
			

			$query = $this->db->count_all_results('pengisian');
			echo $query;
			return $query;
		}
	function get_post_table_pending()
		{
			$this->db->order_by('id', 'desc');
			$this->db->where('status','1');
			$query = $this->db->get('pengisian');
			return $query->result();
		}
		
	function get_post_table_approve()
		{
			$this->db->order_by('id', 'desc');
			$this->db->where('status','3');
			$query = $this->db->get('pengisian');
			return $query->result();
		}
	
	function get_post_table_reject()
		{
			$this->db->order_by('id', 'desc');
			$this->db->where('status','2');
			$query = $this->db->get('pengisian');
			return $query->result();
		}
	
	function informasi()
		{
			$query = $this->db->get('informasi');
			return $query->result();
		}
	function approve($id)
		{
			$dosbing = $this->input->post('dosbing');
			$data = array('dosbing'=>$dosbing, 'status'=>3);
			$this->db->where('id', $id);
			$this->db->update('pengisian', $data); 
		}
	
	function edit_table($id){
			$dosbing = $this->input->post('dosbing');
			$data = array('dosbing'=>$dosbing);
			$this->db->where('id', $id);
			$this->db->update('pengisian', $data);
		}
		
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pengisian');
	}
	
	function reject($id)
		{
			$data = array('status'=>2);
			$this->db->where('id', $id);
			$this->db->update('pengisian', $data); 
		}
	public function ambil_pagi($num, $offset)
	 {
		$this->db->order_by('id', 'ASC');
		$data = $this->db->get('pengisian', $num, $offset);
		return $data->result();
	}
	
	public function stat()
	{		
			$this->db->order_by('nim1', 'ascd');
			$query = $this->db->get('informasi');
			return $query->result();
	}
	
	
	public function search(){
		$cari = $this->input->post('cari');
		$this->db->like('nim1', $cari);
		$this->db->or_like('nim2', $cari); 
		$query=$this->db->get('pengisian');
		return $query->result();
	}
	
	public function get_post_pagiapprove($num, $offset)
	 {
		$this->db->order_by('id', 'ASC');
		$data = $this->db->get('pengisian', $num, $offset);
		return $data->result();
	}
	
}