<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		
			$data['konten']="v_dashboard";
			$this->load->view('v_dashboard', $data);
		} 
	}



