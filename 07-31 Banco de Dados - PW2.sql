/* Gustavo Felix Ferreira da Silva & Nayara Aparecida Silva Fioraneli — 2MD2 */

/* Criação do Banco de Dados: */
create database bd_loja;
use bd_loja;

/* Criação da Tabela - Funcionário: */
create table tb_funcionario(
id_funcionario int auto_increment primary key,
nm_funcionario varchar(25) not null,
nm_sobrenome varchar(25) not null,
dt_nascimento date not null,
nm_cargo varchar(30) not null,
vl_salario decimal(10,2) not null,
dt_admissao date not null,
nm_senha text
);

/* Criação da Tabela - Cliente: */
create table tb_cliente(
id_cliente int auto_increment primary key,
nm_cliente varchar(25) not null,
nm_sobrenome varchar(25) not null,
nm_email varchar(80),
nr_telefone varchar(13),
nm_endereco varchar(45) not null,
nr_endereco int
);

/* Criação da Tabela - Fornecedor: */
create table tb_fornecedor(
id_fornecedor int auto_increment primary key,
nm_fornecedor varchar(25) not null,
nm_contato varchar(45),
nm_email varchar(80),
nr_telefone varchar(13),
nm_endereco varchar(25) not null,
nr_endereco int
);
