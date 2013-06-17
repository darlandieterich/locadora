<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcionarioemprestimo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_emprestimo','emprestimo');
		$this->load->model('Model_pessoa','pessoa');
		$this->load->model('Model_filme','filme');
		$this->load->model('Model_filme_emprestimo','filme_emprestimo');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		$data['emprestimo'] = $this->emprestimo->listaEmprestimo();
		$data['pessoa'] = $this->pessoa->listaPessoa();		
		$data['sucesso'] = "";
		$data['erro'] = "";
		$this->load->view('view_funcionarioemprestimo',$data);
	}
	public function gravaEmprestimo()
	{	
		$this->emprestimo->cadastraEmprestimo();
		$data['emprestimo'] = $this->emprestimo->listaEmprestimo();
		$data['pessoa'] = $this->pessoa->listaPessoa();
		$this->load->view('view_funcionarioemprestimo',$data);	
	}
	public function carregaEmprestimo($codigo = NULL)
	{
		$data['filme'] = $this->filme->listaFilme();
		$codigoemp = $this->uri->segment(3);		
		$data['filmes'] = $this->emprestimo->listaEmprestimoFilme($codigoemp);
		$this->load->view('view_funcionarioemprestimoaddfilme.php',$data);
	}
	public function excluiEmprestimo($codigo = NULL)
	{		
		$codigo = $this->uri->segment(3);
		$this->emprestimo->removeEmprestimo($codigo);
		$this->filme_emprestimo->removeTodosFilmesEmprestimo($codigo);		
		redirect(base_url()."funcionarioemprestimo");
	}
	public function excluiEmprestimoFilme($codigoemp = NULL,$codigofil = NULL,$codigopes = NULL)
	{		
		$this->filme_emprestimo->removeFilmesEmprestimo($codigofil,$codigoemp);
		redirect(base_url()."funcionarioemprestimo/carregaEmprestimo/".$codigoemp."/".$codigopes."");
		
	}
	public function adicionarFilme()
	{		
		$codemprestimo = $this->uri->segment(3);
		$codpessoa = $this->uri->segment(4);
		if(!$this->filme_emprestimo->cadastraFilmesEmprestimo())
			redirect(base_url()."funcionarioemprestimo/carregaEmprestimo/".$codemprestimo."/".$codpessoa."");
		else
			redirect(base_url()."funcionarioemprestimo/");
	}	
}
