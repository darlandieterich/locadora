/*
Created		09/05/2013
Modified		14/05/2013
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


drop table IF EXISTS filme_emprestimo;
drop table IF EXISTS emprestimo;
drop table IF EXISTS filme;
drop table IF EXISTS genero;
drop table IF EXISTS pessoa;


Create table pessoa (
	pes_cod Int NOT NULL AUTO_INCREMENT,
	pes_nome Varchar(50),
	pes_cpf Char(30),
	pes_cidade Varchar(150),
	pes_endereco Text,
	pes_usuario Char(20),
	pes_senha Text,
	pes_tipo Char(20) COMMENT 'cliente ou funcionario',
	pes_status Char(1) COMMENT 'a == ativo
i == inativo',
 Primary Key (pes_cod)) ENGINE = MyISAM;

Create table genero (
	gen_cod Int NOT NULL AUTO_INCREMENT,
	gen_nome Varchar(50),
	gen_status Char(1) COMMENT 'a == aberto
f == fechado',
 Primary Key (gen_cod)) ENGINE = MyISAM;

Create table filme (
	fil_cod Int NOT NULL AUTO_INCREMENT,
	gen_cod Int NOT NULL,
	fil_nome Varchar(50),
	fil_sinopse Text,
	fil_autor Varchar(100),
	fil_duracao Time,
	fil_idade Int,
	fil_linguagem Varchar(50),
	fil_valor Int,
	fil_lancamento Date,
	fil_midia Char(20) COMMENT 'fita, dvd, blu-ray',
	fil_img Varchar(150),
	fil_status Char(1) COMMENT 'o == ocupado
v == vago',
 Primary Key (fil_cod)) ENGINE = MyISAM;

Create table emprestimo (
	emp_cod Int NOT NULL AUTO_INCREMENT,
	pes_cod Int NOT NULL,
	emp_tipo Char(10) COMMENT 'reserva ou locação',
	emp_total Int,
	emp_forma Char(50) COMMENT 'retirada ou entrega',
	emp_data_retirada Date,
	emp_data_entrega Date,
	emp_situacao Char(20) COMMENT 'pago, aberto, pendente',
 Primary Key (emp_cod)) ENGINE = MyISAM;

Create table filme_emprestimo (
	fil_cod Int NOT NULL,
	emp_cod Int NOT NULL,
 Primary Key (fil_cod,emp_cod)) ENGINE = MyISAM;


Alter table emprestimo add Foreign Key (pes_cod) references pessoa (pes_cod) on delete  restrict on update  restrict;
Alter table filme add Foreign Key (gen_cod) references genero (gen_cod) on delete  restrict on update  restrict;
Alter table filme_emprestimo add Foreign Key (fil_cod) references filme (fil_cod) on delete  restrict on update  restrict;
Alter table filme_emprestimo add Foreign Key (emp_cod) references emprestimo (emp_cod) on delete  restrict on update  restrict;


/* Users permissions */


