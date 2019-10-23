<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('logged_in')== TRUE){
			$data['konten']="dashboard";
			$this->load->view('template', $data);
		} else {
			redirect('login/index');
			}
	}

}

