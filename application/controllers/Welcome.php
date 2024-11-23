<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
	function latihan(){
		$data["nilai1"] = 500000000000;
		$data["nilai2"] = 500000000000;
		$isi = $this->load->view("latihan",$data,true);
		$data["konten"] = $isi;
		$this->template($data);
	}
	
	
	 function template($value){
		$this->load->view('template/index',$value);
		
	}	
}
