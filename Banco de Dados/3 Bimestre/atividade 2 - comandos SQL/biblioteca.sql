create database biblioteca;
use biblioteca;

create table livros (
id int primary key,
titulo varchar(100),
ano_publicacao year,
id_autor int,
id_categoria int,
foreign key (id_autor) references autores (id),
foreign key (id_categoria) references categorias (id)
);

create table autores (
id int primary key,
nome varchar(100),
nacionalidade varchar(50)
);

create table categorias (
id int primary key,
descricao varchar(50)
);

alter table livros add column preco decimal(5,2);
desc livros;

alter table categorias add column quantidade int;
desc categorias;

insert into autores (id, nome, nacionalidade) values
(1, 'Machado de Assis', 'Brasileira'),
(2, 'Jane Austen', 'Inglesa'),
(3, 'Gabriel García Márquez', 'Colombiana');

insert into categorias (id, descricao, quantidade) values
(1, 'Romance', 50),
(2, 'Ficção Científica', 30),
(3, 'Biografia', 20);


insert into livros (id, titulo, ano_publicacao, id_autor, id_categoria, preco) values
(1, 'Esaú e Jacó', 1904, 1, 1, 49.90),
(2, 'Orgulho e Preconceito', 1913, 2, 1, 39.90),
(3, 'Cem Anos de Solidão', 1967, 3, 1, 59.90);

insert into autores (id, nome, nacionalidade) values
(4, 'Clarice Lispector', 'Brasileira');

insert into livros (id, titulo, ano_publicacao, id_autor, id_categoria, preco) values
(4, 'A Hora da Estrela', 1977, 4, 1, 24.10);

show databases;
select * from livros;
select * from autores;
select * from categorias;

update categorias
set descricao = 'Romance'
where id = 1;

update livros
set preco = preco * 1.10
where ano_publicacao < 2000;

delete 
from livros
where ano_publicacao < 1950;

delete
from categorias
where quantidade < 5;

alter table categorias drop quantidade;

desc categorias;