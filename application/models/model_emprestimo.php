<?php
class Model_emprestimo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function listaEmprestimo($codigo = NULL)
	{
		if (!isset($codigo)) {
			$query = $this->db->get('emprestimo');
			return $query->result();	
		}
		else
		{
			$this->db->where('emp_cod',$codigo);
			$query = $this->db->get('emprestimo');
			return $query->result();	
		}
	}
	function cadastraEmprestimo()
	{		
		$this->pes_cod = $_POST['pes_cod'];
		$this->emp_tipo = $_POST['emp_tipo'];
		$this->emp_total = $_POST['emp_total'];
		$this->emp_forma = $_POST['emp_forma'];
		$this->emp_data_retirada = $_POST['emp_data_retirada'];
		$this->emp_data_entrega = $_POST['emp_data_entrega'];
		$this->emp_situacao = 'aberto';		
		$this->db->insert('emprestimo',$this);
	}
	function editaEmprestimo($codigo = NULL)
	{
		$this->emp_cod = $_POST['emp_cod'];
		$this->pes_cod = $_POST['pes_cod'];
		$this->emp_tipo = $_POST['emp_tipo'];
		$this->emp_total = $_POST['emp_total'];
		$this->emp_forma = $_POST['emp_forma'];
		$this->emp_data_retirada = $_POST['emp_data_retirada'];
		$this->emp_data_entrega = $_POST['emp_data_entrega'];
		$this->emp_situacao = $_POST['emp_situacao'];
		$this->db->update('emprestimo',$this,array('emp_cod' => $codigo));
	}
	function removeEmprestimo($codigo = NULL)
	{
		$this->db->where('emp_cod',$codigo);
		$this->db->delete('emprestimo');
	}
}