CREATE DATABASE academia_yellowfit;
USE academia_yellowfit;
CREATE TABLE  alunos(
id INT PRIMARY KEY auto_increment,
nome varchar(100),
descricao text,
horario TIME,
dia_semana VARCHAR(10)
);
CREATE TABLE if not exists inscricoes(
id INT PRIMARY KEY auto_increment,
 aluno_id INT,
 aula_id int,
 data_inscricao timestamp DEFAULT current_timestamp,
 FOREIGN KEY (aluno_id) references alunos(id),
 FOREIGN KEY (aula_id) references aulas(id)
);
CREATE TABLE IF NOT EXISTS pagamento(
id INT PRIMARY KEY auto_increment,
aluno_id INT,
valor decimal (10,2),
data_pagamento DATE,
FOREIGN KEY (aluno_id) references alunos(id)



);