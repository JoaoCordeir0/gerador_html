create database primeiro_software;

use primeiro_software;

create table usuarios(
	id int primary key auto_increment,
    nome varchar(255),
    user varchar(255),
    senha varchar(255)
);