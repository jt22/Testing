<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('SiteAct/home');
	}
	
	public function log()
	{
		if ($this->input->post()){
			$this->load->model("site_model");
			
			$data = $this->input->post();
			
			$result = $this->site_model->login($data['username'], $data['password']);
			
			if($result!=TRUE){
				redirect('/site');
			}
			else{
				redirect('/site/userlist');
			}
				
			
		}
	}
	
	
	public function userlist(){
		$this->load->model('welcome_message');
		
	}
}
