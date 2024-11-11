use cadastro;

select * from cursos;

select ano, carga, nome from cursos -- com * aparace tudo, já aqui você filtra a coluna que vai aparecer --
where ano = '2016' -- aqui eu seleciono os dados apenas de 2016 --
order by ano, nome; -- order by será sempre em asc (ordem crescente) , já o desc é pra ficar de trás para frente (ordem decrescente) --

select ano, descrição, nome from cursos
where ano <= '2015' -- aqui só vai aparecer os dados de 2015 e antes --
order by ano desc; 

select ano, nome from cursos
where ano between 2014 and 2016 -- vai exibir o dados que estão entre 2014 e 2016 --
order by ano desc, nome asc; -- o ano vai estar decrescente, e  o nome estará crescente --

select nome, descrição, ano from cursos
where ano in (2014, 2016) -- aqui vai exibir apenas os dados de 2014 e 2016 --
order by ano;
 
select * from cursos
where carga > 35 and totalaulas < 30 -- aqui vai exibir apenas a carga maior do que 35 e total de aulas menores que 30 --
-- se utilizadormos o or vai ser exibido um OU outro --
order by nome;

select * from cursos
where nome like 'P%'; -- aqui vai ser exibir todos os cursos que começem com P, o % representa nenhum  ou vários caracteres --

select * from cursos
where nome like '%A'; -- aqui vai ser exibir todos os cursos que terminem com A, o % representa nenhum  ou vários caracteres --

select * from cursos
where nome like '%A%'; -- aqui vai ser exibir todos os cursos que tenham A em qualquer lugar, o % representa nenhum  ou vários caracteres --

select * from cursos
where nome not like '%A%'; -- aqui vai ser exibir todos os cursos que não tenham A, o % representa nenhum  ou vários caracteres --

select * from cursos
where nome like 'ph%p_'; -- aqui o _ exige que tenha algum valor após o P --

select distinct nacionalidade from gafanhotos; -- distinct vai repetir apenas uma vez uma ocorrencia --

select count(*) from cursos -- o count vai apresentar a quantidade daquela ocorrencia --
where carga > 30; -- existem 5 cargas maiores do que 30 --

select max(carga) from cursos -- max vai ser usado pra representar o valor com o MAIOR CARGA --
order by carga;

select max(totalaulas) from cursos -- aqui vai exibir o valor quem tem o maior total de aula --
where ano = '2016';

select min(totalaulas) from cursos -- aqui vai exibir o valor quem tem o menor total de aula --
where ano = '2016';

-- OBS: vai ser selecionado apenas o primeiro registro das condições --

select sum(totalaulas) from cursos; -- calcula todas as horas de aulas --

select avg(totalaulas) from cursos; -- divide o total de aulas com a quantidade de cursos --

select * from gafanhotos
where sexo = 'F';

select  * from gafanhotos
where nascimento between '1985-01-01' and '2000-12-31';

select * from gafanhotos
where sexo = 'M';
