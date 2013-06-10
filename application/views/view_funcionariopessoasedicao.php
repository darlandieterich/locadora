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
    	<li ><a href="<?php echo base_url() ?>funcionariopessoas" class="active">Pessoas</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionariofilmes" class="">Filmes</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionariogenero" class="">Generos</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionarioemprestimo" class="">Emprestimos</a></li> 
    </ul>	
	<div id="body" style="padding-top:10px">		
		<div class="bloco">
			<form action="<?php echo base_url()."funcionariopessoas/atualizaPessoa"?>" method="POST">	
				<input type="hidden" name="pes_cod" value="<?php echo $pessoa[0]->pes_cod ?>"/>
				<input type="hidden" name="pes_tipo" value="<?php echo $pessoa[0]->pes_tipo ?>"/>
				<div class="linha">
					<div class="celula">Nome</div>
					<div class="celula"><input type="text" name="pes_nome" value="<?php echo $pessoa[0]->pes_nome ?>"/></div>
				</div>
				<div class="linha">
					<div class="celula">CPF</div>
					<div class="celula"><input type="text" name="pes_cpf" value="<?php echo $pessoa[0]->pes_cpf ?>"/></div>
				</div>
				<div class="linha">
					<div class="celula">Cidade</div>
					<div class="celula"><input type="text" name="pes_cidade" value="<?php echo $pessoa[0]->pes_cidade ?>"/></div>
				</div>
				<div class="linha">
					<div class="celula">Endereço</div>
					<div class="celula"><input type="text" name="pes_endereco" value="<?php echo $pessoa[0]->pes_endereco ?>"/></div>
				</div>
				<div class="linha">
					<div class="celula">Usuario</div>
					<div class="celula"><input type="text" name="pes_usuario" value="<?php echo $pessoa[0]->pes_usuario ?>"/></div>
				</div>
				<div class="linha">
					<div class="celula">Senha</div>
					<div class="celula"><input type="password" name="pes_senha" value="<?php echo $pessoa[0]->pes_senha ?>"/></div>
				</div>				
				<div class="linha">
					<div class="celula"></div>
					<div class="celula"><input type="submit" value="Editar"><input type="reset" value="Limpar"> </div>
				</div>							
			</form>
		</div>
	</div>
	
<?php $this->load->view('layout/rodape'); ?>	
</div>

</body>
</html>