create database filmesdb;
use filmesdb;

create table nome(
id int primary key auto_increment,
nome_filme varchar(255)not null,
descricao text,
ano year not null null)

INSERT INTO nome (nome_filme, descricao, ano) 
VALUES 