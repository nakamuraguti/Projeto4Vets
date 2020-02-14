create database projeto_4Vets;
use projeto_4Vets;
-- drop database projeto_4Vets;

create table Funcionario(
	id_func int not null auto_increment,
    cpf_func decimal(11,0) not null unique,
    nome_func varchar(25),
    sobrenome_func varchar(30),
    telefone decimal(11,0) not null unique,
    dt_nasc date,
    salario decimal(7,2),
    dt_cadastro datetime null DEFAULT NOW(),
	constraint id_func_pk primary key (id_func)
);
select * from Funcionario;
