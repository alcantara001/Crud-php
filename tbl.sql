create database projeto_php;
use projeto_php;

create table cliente(
cod_cliente int not null auto_increment primary key,
nome varchar(255),
marca varchar(255),
cor varchar(255),
ano varchar(255),
quilometragem varchar(255),
preco varchar(255));

create table usuario(
login varchar(255),
senha varchar(255));

insert into usuario values("nicolas", "123");

select * from cliente;
select * from usuario;