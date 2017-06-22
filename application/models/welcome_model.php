<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	
	Public function get_data(){

		return $this->db->get('user_tasks')->result(); // return all datas in array form
	}
	Public function get_edit_data(){
		$data = array();
		if($this->uri->segment(3)!=''){
			$where = array('id' =>$this->uri->segment(3));
		$data =  $this->db->get_where('user_tasks',$where)->row(); // return all datas in array form	
		}
		return $data;
		
	}
	Public function insert()
	{
		$data = array(
			'name' => $_POST['name'],
			'description' => $_POST['description'],
			'date_created' =>date('Y-m-d')
			);
		return $this->db->insert('user_tasks',$data);
	}
	Public function update()
	{
		$data = array(
			'name' => $_POST['name'],
			'description' => $_POST['description']
			);
		$where = array('id' => $_POST['hidden_id']);
		return $this->db->update('user_tasks',$data,$where);
	}
	Public function delete()
	{
		$id = $this->uri->segment(3);		
		$where = array('id' => $id);
		return $this->db->delete('user_tasks',$where);
	}


}

/* End of file  */
/* Location: ./application/models/ */