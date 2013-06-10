<?php
class Model_login extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function Login($usuario,$senha,$tipo)
	{
		$this->db->where('pes_usuario',$usuario);
		$this->db->where('pes_senha',$senha);
		$this->db->where('pes_tipo',$tipo);
		$query = $this->db->get('pessoa');
		if($query->result()->count == 1)
			return $query->result()
		else
			return 0
	}
}