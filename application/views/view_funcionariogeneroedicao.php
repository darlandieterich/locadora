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
    	<li ><a href="<?php echo base_url() ?>funcionariopessoas" class="">Pessoas</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionariofilmes" class="">Filmes</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionariogenero" class="active">Generos</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionarioemprestimo" class="">Emprestimos</a></li> 
    </ul>	
	<div id="body" style="padding-top:10px">		
		<div class="bloco">
			<form action="<?php echo base_url()."funcionariogenero/atualizaGenero"?>" method="POST">	<input type="hidden" name="gen_cod" value="<?php echo $genero[0]->gen_cod ?>"/>
				<div class="linha">
					<div class="celula">Nome</div>
					<div class="celula"><input type="text" name="gen_nome" value="<?php echo $genero[0]->gen_nome ?>"/></div>
				</div>
				<div class="linha">
					<div class="celula"></div>
					<div class="celula"><input type="submit" value="Editar"> </div>
				</div>							
			</form>
		</div>
	</div>
	
<?php $this->load->view('layout/rodape'); ?>	
</div>

</body>
</html>