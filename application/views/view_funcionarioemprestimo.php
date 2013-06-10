<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Área Administrativa</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/estilo.css" />	
</head>
<body>
<?php $this->load->view('layout/cabecalho'); ?>
<div id="container">
	<h1>Área do Funcionário!</h1>
	
	<ul id="tabmenu">
    	<li ><a href="funcionariopessoas" class="">Pessoas</a></li> 
     	<li ><a href="funcionariofilmes" class="">Filmes</a></li> 
     	<li ><a href="funcionariogenero" class="">Generos</a></li> 
     	<li ><a href="funcionarioemprestimo" class="active">Emprestimos</a></li> 
    </ul>	
	<div id="body">
		conteudo
	</div>
	
<?php $this->load->view('layout/rodape'); ?>	
</div>

</body>
</html>