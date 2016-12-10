<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_model{
	public function __construct(){
		parent::__construct();
	}
	
	public function login($username,$password)
	{
		$this->db->where('username',$username);
		$result = $this->db->get('user');
		
		$result = $result->result_array();
		
		if(strcmp($result[0]['password'], $password) != 0){
			return FALSE;
		}
		
		return TRUE;
	}
	
	public function get($username = null) {
		
		if(!isset($username) && $username == null)
			$result = $this->db->get('user');
		else {
			$this->db->where('username', $username);
			$result = $this->db->get('user');
		}
		
		return $result->result_array();
	}
	
	public function prof(){
		
	}
}