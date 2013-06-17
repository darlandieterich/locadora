<?php
class Model_filme_emprestimo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function listaFilmesEmprestimo($codigo = NULL)
	{
		if (!isset($codigo)) {
			$query = $this->db->get('filme_emprestimo');
			return $query->result();	
		}
		else
		{
			$this->db->where('fil_cod',$codigo);
			$query = $this->db->get('filme_emprestimo');
			return $query->result();	
		}
	}	
	function cadastraFilmesEmprestimo()
	{
		$this->fil_cod = $_POST['fil_cod'];
		$this->emp_cod = $_POST['emp_cod'];		
		$this->db->insert('filme_emprestimo',$this);
	}	
	function removeFilmesEmprestimo($codfil = NULL,$codemp = NULL)
	{
		$this->db->where('fil_cod',$codfil);
		$this->db->where('emp_cod',$codemp);
		$this->db->delete('filme_emprestimo');
	}
	function removeTodosFilmesEmprestimo($codemp = NULL)
	{		
		$this->db->where('emp_cod',$codemp);
		$this->db->delete('filme_emprestimo');
	}
}