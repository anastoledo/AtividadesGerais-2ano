create database revisao;
use revisao;

create table funcionarios (
    codigo int primary key,
    primeiroNome varchar(50),
    ultimoNome varchar(50),
    dataNasci date,
    cidade varchar(50),
    salario decimal(10,2),
    codigoDepartamento int
);

create table departamentos (
    codigo int primary key,
    nome varchar(50)
);

create table funcionario_departamento (
    codigoFuncionario int,
    codigoDepartamento int,
    primary key (codigoFuncionario, codigoDepartamento)
);

insert into departamentos (codigo, nome) values
(1, 'Recursos Humanos'),
(2, 'TI'),
(3, 'Financeiro');

insert into funcionarios (codigo, primeiroNome, ultimoNome, dataNasci, cidade, salario, codigoDepartamento) values
(1, 'Ana', 'Silva', '1985-03-10', 'Belo Horizonte', 8000.00, 1),
(2, 'Carlos', 'Pereira', '1990-06-15', 'São Paulo', 5000.00, 2),
(3, 'Mariana', 'Souza', '1995-09-25', 'Rio de Janeiro', 3500.00, 3),
(4, 'Pedro', 'Almeida', '2000-01-01', 'Recife', 2000.00, 2),
(5, 'Joana', 'Santos', '1980-12-05', 'Recife', 1800.00, 1);

insert into funcionario_departamento (codigoFuncionario, codigoDepartamento) values
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 1);

-- a) listar nome e sobrenome ordenado por sobrenome
select primeiroNome, ultimoNome
from funcionarios
order by ultimoNome;

-- b) listar todos os campos de funcionários ordenados por cidade
select *
from funcionarios
order by cidade;

-- c) liste os funcionários que têm salário superior a r$ 1.000,00 ordenados pelo nome completo
select primeiroNome, ultimoNome
from funcionarios
where salario > 1000
order by primeiroNome, ultimoNome;

-- d) liste a data de nascimento e o primeiro nome dos funcionários ordenados do mais novo para o mais velho
select dataNasci, primeiroNome
from funcionarios
order by dataNasci desc;

-- e) liste os funcionários como uma listagem telefônica (somente nome e cidade aqui)
select primeiroNome, ultimoNome, cidade
from funcionarios;

-- f) liste o total da folha de pagamento
select sum(salario) as totalFolhaPagamento
from funcionarios;

-- g) liste o nome, o nome do departamento e o salário de todos os funcionários
select funcionarios.primeiroNome, funcionarios.ultimoNome, departamentos.nome as nomeDepartamento, funcionarios.salario
from funcionarios
join departamentos on funcionarios.codigoDepartamento = departamentos.codigo;

-- h) liste todos departamentos com seus respectivos funcionários
select departamentos.nome as nomeDepartamento, funcionarios.primeiroNome, funcionarios.ultimoNome
from departamentos
join funcionarios on departamentos.codigo = funcionarios.codigoDepartamento
order by departamentos.nome;

-- i) liste o valor da folha de pagamento de cada departamento
select departamentos.nome as nomeDepartamento, sum(funcionarios.salario) as totalFolha
from departamentos
join funcionarios on departamentos.codigo = funcionarios.codigoDepartamento
group by departamentos.nome;

-- j) liste os departamentos que têm funcionários com salário maior que 3000
select distinct departamentos.nome as nomeDepartamento
from departamentos
join funcionarios on departamentos.codigo = funcionarios.codigoDepartamento
where funcionarios.salario > 3000;

-- k) liste a quantidade de funcionários da empresa
select count(*) as quantidadeFuncionarios
from funcionarios;

-- l) liste o salário médio pago pela empresa
select avg(salario) as salarioMedio
from funcionarios;

-- m) liste os nomes dos funcionários que moram em Recife
select primeiroNome, ultimoNome
from funcionarios
where cidade = 'Recife';

-- n) liste o nome do departamento e do funcionário ordenados por departamento
select departamentos.nome as nomeDepartamento, funcionarios.primeiroNome, funcionarios.ultimoNome
from departamentos
join funcionarios on departamentos.codigo = funcionarios.codigoDepartamento
order by departamentos.nome, funcionarios.primeiroNome;

-- o) liste o nome completo de todos os funcionários que não têm último nome
select primeiroNome
from funcionarios
where ultimoNome is null or ultimoNome = '';

-- p) liste o menor salário pago pela empresa
select min(salario) as menorSalario
from funcionarios;
