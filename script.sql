CREATE DATABASE aplic;

use aplic;

CREATE TABLE tb_aluno (
  id_aluno int(10) NOT NULL,
  nome varchar(250) NOT NULL,
  idade int(11) NOT NULL,
  matricula int(11) NOT NULL,
  status_aluno char(1) NOT NULL,
PRIMARY KEY (id_aluno)
);