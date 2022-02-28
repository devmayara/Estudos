-> mais uma tabela:
CREATE TABLE IF NOT EXISTS cursos (
    nome varchar(30) NOT null UNIQUE,
    descricao text,
    carga int unsigned,
    totaulas int unsigned,
    ano year DEFAULT '2016'
) DEFAULT CHARSET = utf8;

-> adicionando chave primaria:
ALTER TABLE cursos
ADD COLUMN id_curso int FIRST;

ALTER TABLE cursos
ADD PRIMARY KEY(id_curso);

-> apagando a tabela:
DROP TABLE cursos;