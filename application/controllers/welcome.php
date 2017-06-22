<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model','welcome'); // Intiating the model 
		
	}
	
	public function task()
	{
		
		$data['data']=$this->welcome->get_data(); // Getting datas from model
		$data['edit_data']=$this->welcome->get_edit_data(); // Getting edit datas from model

		$this->load->view('welcome_message',$data); // view page function 
	}
	Public function action(){

		if($_POST['hidden_id']==''){

			$result = $this->welcome->insert();
			$this->session->set_flashdata('msg', 'Task added successfully!');
		}else{
			$result = $this->welcome->update();
			$this->session->set_flashdata('msg', 'Task updated successfully!');
		}
			redirect('welcome/task');

	}

	Public function delete()
	{
		$this->welcome->delete();
		$this->session->set_flashdata('msg', 'Task deleted successfully!');
		redirect('welcome/task');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */