--ver tabela:
use cadastro;

--descrição da tabela:
describe gafanhotos;

--alteração da tabela: add column
ALTER TABLE gafanhotos
ADD COLUMN cursopreferido int;

--alteração da tabela: add foreign key
ALTER TABLE gafanhotos
ADD FOREIGN KEY (cursopreferido)
REFERENCES cursos(idcurso);

SELECT * FROM gafanhotos;
SELECT * FROM cursos;

update gafanhotos set cursopreferido = '6' 
where id = '1';

--Junção de tabelas:
SELECT 
    g.nome aluno,
    c.nome curso_preferido,
    c.ano
FROM gafanhotos g
JOIN cursos c
on g.cursopreferido = c.idcurso
ORDER BY g.nome;

-- left join: <- da preferencia a tabela da esquerda
-- inner join: da preferencia a junção
-- right join: -> da preferencia a tabela da direita
