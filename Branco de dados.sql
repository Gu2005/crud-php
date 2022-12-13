drop database crudphp;
create database crudphp;
use crudphp;

create table usuario(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) DEFAULT NULL,
    email VARCHAR(80) DEFAULT NULL,
    cpf VARCHAR(25) DEFAULT NULL,
    datanascimento VARCHAR(20) DEFAULT NULL,
    endereco VARCHAR(150) DEFAULT NULL,
	telefone VARCHAR(15) DEFAULT NULL
);

select * from usuario;