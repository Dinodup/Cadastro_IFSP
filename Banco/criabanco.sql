create database IFSP;
use IFSP;
create table cidade
(
	id int auto_increment,
	nome varchar(50),
    estado varchar(02),
	primary key (id)
);

create table cliente
(
	id int auto_increment,
	nome varchar(50),
	email varchar(50),
	senha varchar(10),
	ativo bool,
	id_cidade int,
	primary key (id),
	constraint fk_ClienteCidade foreign key(id_cidade) references cidade(id)
);

insert into cidade(nome, estado) values
('Birigui','SP'),
('Fortaleza','CE'),
('Rio de Janeiro','RJ'),
('Araçatuba','SP');
select * from cidade where estado = 'SP';
insert into cliente(nome, email, senha,id_cidade) values
('Abrao','Abrao@gmail.com','123','1'),
('Bruna','Bruna@gmail.com','1234','1'),
('Carlinhos','C@outlook.com','12345','2'),
('Dudu','Dudu@hotmail.com','123456','3'),
('Ednaldo','edna@outlook.com','1234567','4');
select * from cliente where id_cidade = '1';
update cidade set nome='Birigui' where id = 1;
update cliente set nome='Murilo' where id = 1;
update cliente set id_cidade = '5' where id = '5';
delete from cidade where id = 4;
delete from cliente where id = 1;