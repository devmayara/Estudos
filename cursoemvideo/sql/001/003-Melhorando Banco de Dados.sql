-> deletar o bd "cadastro", criado anteriomente.
DROP DATABASE cadastro;

-> criar novo bd "cadastro" com duas variaveis uma é constraints a outra é collation.
CREATE DATABASE cadastro
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

->criar tabela corretamente.
CREATE TABLE pessoas (
    id int NOT null AUTO_INCREMENT,
    nome varchar(30) NOT null,
    nascimento date,
    sexo enum('M','F'),
    peso decimal(5,2),
    altura decimal(3,2),
    nacionalidade varchar(20) DEFAULT 'Brasil',
    PRIMARY KEY(id)
)DEFAULT CHARSET = utf8;