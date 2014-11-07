<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class What extends CI_Controller 
{
	public function index ()
	{
		$this->load->view("ADS");
	}
	
	public function test ($dafaq)
	{
		echo "ASDASD\n";
		echo $dafaq;
	}
}
?>