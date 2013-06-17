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
     	<li ><a href="<?php echo base_url() ?>funcionariogenero" class="">Generos</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionarioemprestimo" class="active">Emprestimos</a></li> 
    </ul>	
	<div id="body" style="padding-top:10px">
		<div class="bloco">
			<div class="linha">
				<div class="celula">
					<form action="<?php echo base_url()."funcionarioemprestimo/gravaEmprestimo"?>" method="POST">				
						<div class="linha">
							<div class="celula">Cliente</div>
							<div class="celula">
								<select name="pes_cod" required>
								<option value="">Selecione</option>
<?php 
	foreach ($pessoa as $campo) {
		echo '<option value="'.$campo->pes_cod.'">'.$campo->pes_nome.'</option>';
	}
 ?>
								</select>
							</div>
						</div>
						<div class="linha">
							<div class="celula">Tipo</div>
							<div class="celula">
								<input type="radio" name="emp_tipo" value="l"checked>Locação
								<input type="radio" name="emp_tipo" value="r" >Reserva
							</div>
						</div>
						<div class="linha">
							<div class="celula">Data Retirada</div>
							<div class="celula">
								<input type="date" name="emp_data_retirada" min="<?php 
								$time = strtotime("-1 day", time());
								echo date("Y-m-d",$time);
								?>" required>
							</div>
						</div>
						<div class="linha">
							<div class="celula">Forma</div>
							<div class="celula">
								<input type="radio" name="emp_forma" value="r" checked>Retirada
<input type="radio" name="emp_forma" value="e">Entrega
							</div>
						</div>

						<div class="linha">
							<div class="celula"></div>
							<div class="celula"><input type="submit" value="Enviar"> <input type="reset" value="Limpar"></div>							
						</div>							
					</form>
				</div>
				<div class="celula" style="padding-left:20px">
<?php
		foreach ($emprestimo as $campo) {
			echo '<div class="linha">';
			echo '<div class="celula">';
				foreach ($pessoa as $pes) {		
					if ($campo->pes_cod == $pes->pes_cod) {
						echo $pes->pes_nome;
					}
				};
			echo '</div>';
			echo '<div class="celula"><a href="'.base_url().'funcionarioemprestimo/carregaEmprestimo/'.$campo->emp_cod.'/'.$campo->pes_cod.'">Adicionar Filme(s)</a></div>';
			echo '<div class="celula"><a href="'.base_url().'funcionarioemprestimo/excluiEmprestimo/'.$campo->emp_cod.'">Excluir emprestimo</a></div>';			
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