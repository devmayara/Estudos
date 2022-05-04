-- Criando a tabela extra:
create table gafanhoto_assiste_curso (
    id int not null auto_increment,
    data date,
    idgafanhoto int,
    idcurso int,
    primary key (id),
    foreign key (idgafanhoto) references gafanhotos(id),
    foreign key (idcurso) references cursos(idcurso)
) default charset = utf8;

-- Inserindo dados na tabela extra:
insert into gafanhoto_assiste_curso values
(default, '2014-03-01', '1', '2');

-- Verificando se os dados foram inseridos:
select * from gafanhoto_assiste_curso;

-- Junção de tabelas:
select 
	g.nome,
    c.nome
from gafanhotos g
join gafanhoto_assiste_curso a
on g.id = a.idgafanhoto
JOIN cursos c
ON a.idcurso = c.idcurso
ORDER BY g.nome;