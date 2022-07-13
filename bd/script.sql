create database if not exists animeshouse;
use animeshouse;

create or replace table animes(
    id int primary key auto_increment,
    nome varchar(250) not null unique,
    foto longtext not null,
    sinopse longtext not null,
    genero varchar(250) not null ,
    episodios varchar(250) not null,
    lancamento date not null,
    zip longtext not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

create or replace table login(
    id int primary key auto_increment,
    email varchar(250) not null unique,
    senha varchar(255) not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into login (email, senha) values ('animes@gmail.com', md5('senha@123'));