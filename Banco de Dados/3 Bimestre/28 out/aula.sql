create database aula;
show databases;
use aula;

create table medico(
codMed int primary key,
nomeMed varchar(40) not null,
dataNasc date not null,
cpf char(11),
cidade varchar(30) not null,
especialidade varchar(30) not null
);

create table paciente(
codpaciente int primary key,
nomepac varchar(40) not null,
dataNasc date not null,
cpg char(11),
cidade varchar(30) not null);


create table consulta(
codMed int not null,
codpaciente int not null,
data_consulta date not null,
hora time not null,
primary key(codMed, codpaciente),
foreign key(codMed) references medico(codMed),
foreign key(codpaciente) references paciente(codpaciente)
);

show databases;
use aula;
insert into medico values(1,'joao','1984/06/28', '10000100000','Florianópolis', 'Ortopedista');
insert into medico values(3,'joao','1984/06/28', '10000100000','Florianópolis', 'Ortopedista');
insert into medico values(4,'Maria','1970/07/13', '11100100000','Blumenau', 'Traumatologia');
insert into medico values(5,'Pedro','1956/11/25', '11100100000','Porto Velho', 'Pediatria');
insert into medico values(6,'Carlos','1985/02/07', '10101010101','Joinville', 'Ortopedia');
insert into medico values(7,'Marcia','1945/08/15', '10101010111','Fortaleza', 'Neurologia');
insert into medico values(8,'Luciana','1975/04/25', '10110011010','Rio Branco', 'Oftalmologia');

insert into paciente values(1,'Ana','1978/09/13', '10000100000','Florianópolis');
insert into paciente values(2,'Paulo','1940/03/17', '10000100000','Porto Velho');
insert into paciente values(3,'Lucia','1957/06/24', '10000100000','Blumenau');
insert into paciente values(4,'Carlos','2001/10/14', '10000100000','Joinvile');
insert into paciente values(5,'Luiz','2000/08/14', '10000100000','Fortaleza');
insert into paciente values(6,'Mauricio','1980/01/01', '10000100000','Rio Branco');

insert into consulta values(3, 4, '2021/05/12', '14:00');
insert into consulta values(2, 4, '2021/05/13', '10:00');
insert into consulta values(3, 1, '2020/10/13', '9:00');
insert into consulta values(5, 2, '2021/03/13', '11:00');
insert into consulta values(8, 3, '2020/08/14', '14:00');
insert into consulta values(4, 4, '2020/08/14', '17:00');
insert into consulta values(3, 6, '2020/05/19', '18:00');
insert into consulta values(7, 3, '2021/04/12', '10:00');
insert into consulta values(9, 1, '2021/04/19', '13:00');
insert into consulta values(2, 1, '2021/04/20', '13:00');
insert into consulta values(0, 1,' 2020/10/22', '19:30');

show databases;

select * from medico;
select * from paciente;
select * from consulta;

use aula;

alter table medico ADD crm int;

alter table medico DROP crm;

alter table medico CHANGE cidade cidadeNasc varchar(20);

desc medico;

alter table paciente CHANGE cpg cpf char(11);

alter table paciente MODIFY cpf varchar(11);

update medico 
set especialidade = 'Dermatologia' 
where nomeMed = 'Pedro';

select * from paciente;

select * from consulta;

delete 
from consulta
where codpaciente = 3;

delete
from paciente
where nomepac = "Lucia";
