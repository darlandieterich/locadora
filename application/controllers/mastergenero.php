<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mastergenero extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_genero','genero');
	}

	public function index()
	{
		$data['genero'] = $this->genero->listaGenero();		
		$this->load->view('view_mastergenero',$data);
	}
}
