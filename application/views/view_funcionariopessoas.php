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
	<div id="body">
		<div class="bloco">
			<div class="linha">
				<div class="celula">
					<form action="<?php echo base_url()."funcionariopessoas/gravaPessoa"?>" method="POST">				
						<div class="linha">
							<div class="celula">Nome</div>
							<div class="celula"><input type="text" name="pes_nome"/></div>
						</div>
						<div class="linha">
							<div class="celula">CPF</div>
							<div class="celula"><input type="text" name="pes_cpf"/></div>
						</div>
						<div class="linha">
							<div class="celula">Cidade</div>
							<div class="celula"><input type="text" name="pes_cidade"/></div>
						</div>
						<div class="linha">
							<div class="celula">Endereço</div>
							<div class="celula"><input type="text" name="pes_endereco"/></div>
						</div>
						<div class="linha">
							<div class="celula">Usuario</div>
							<div class="celula"><input type="text" name="pes_usuario"/></div>
						</div>
						<div class="linha">
							<div class="celula">Senha</div>
							<div class="celula"><input type="password" name="pes_senha"/></div>
						</div>
						<div class="linha">
							<div class="celula">Tipo</div>
							<div class="celula">
							<input type="radio" name="pes_tipo" value="c" checked>Cliente
<input type="radio" name="pes_tipo" value="f">Funcionário
							</div>
						</div>
						<div class="linha">
							<div class="celula"></div>
							<div class="celula"><input type="submit" value="Enviar"><input type="reset" value="Limpar"> </div>
						</div>							
					</form>
				</div>
				<div class="celula" style="padding-left:20px">
<?php
		foreach ($pessoa as $campo) {
			echo '<div class="linha">';
			echo '<div class="celula">'.$campo->pes_nome.'</div>';
			echo '<div class="celula"><a href="'.base_url().'funcionariopessoas/carregaPessoa/'.$campo->pes_cod.'">Editar</a></div>';
			echo '<div class="celula"><a href="'.base_url().'funcionariopessoas/excluiPessoa/'.$campo->pes_cod.'">Excluir</a></div>';			
			echo '</div>';
		}
?>					
				</div>
			</div>

		</div>
	</div>
	
<?php $this->load->view('layout/rodape'); ?>	
</div>

</body>
</html>