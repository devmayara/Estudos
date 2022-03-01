Imigrar bd

-> selecionar tabela e ordenar por ordem crescente: adicionando desc no final fica decrecente.
select * from tabela order by nome (asc ou desc);

-> selecionando colunas: em ordem crescente
select nome, idade from tabela;
order by nome, idade;

-> selecionando linhas:
select * from cursos 
where ano = 2016
order by nome;

-> selecionando linhas e colunas:
select nome, carga from cursos 
where ano = 2016
order by nome;