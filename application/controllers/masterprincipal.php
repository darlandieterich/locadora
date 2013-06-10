<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class masterprincipal extends CI_Controller {
	
	public function index()
	{
		$this->load->view('view_masterprincipal');
	}
}
