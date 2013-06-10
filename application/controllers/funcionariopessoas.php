<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcionariopessoas extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_pessoa','pessoa');
	}		
	public function index()
	{
		$data['pessoa'] = $this->pessoa->listaPessoa();
		$this->load->view('view_funcionariopessoas',$data);
	}
	public function gravaPessoa()
	{	
		$this->pessoa->cadastraPessoa();		
		redirect(base_url()."funcionariopessoas");		
	}
	public function carregaPessoa($codigo = NULL)
	{
		$codigo = $this->uri->segment(3);
		$data['pessoa'] = $this->pessoa->listaPessoa($codigo);
		$this->load->view('view_funcionariopessoasedicao',$data);
	}
	public function atualizaPessoa($codigo = NULL)
	{		
		$codigo = $this->input->post('pes_cod');
		$this->pessoa->editaPessoa($codigo);
		redirect(base_url()."funcionariopessoas");		
	}
	public function excluiPessoa($codigo = NULL)
	{		
		$codigo = $this->uri->segment(3);
		$this->pessoa->removePessoa($codigo);		
		redirect(base_url()."funcionariopessoas");
	}
}
