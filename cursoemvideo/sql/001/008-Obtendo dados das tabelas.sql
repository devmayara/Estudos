Imigrar bd

-> selecionar tabela e ordenar por ordem crescente: adicionando desc no final fica decrecente.
select * from tabela order by nome (asc ou desc);

-> selecionando colunas: em ordem crescente
select nome, idade from tabela;
order by nome, idade;

-> selecionando linhas:
select * from cursos 
where ano = 2016    -- = <= >= <> !=
order by nome;

-> selecionando linhas e colunas:
select nome, carga from cursos 
where ano = 2016
order by nome;

-> selecionando intervalo:
select * from cursos
where totaulas between 20 and 30
order by nome;

select nome, ano from cursos --- especificando faixa de valores
where ano between 2014 and 2016
order by ano desc, nome asc;

-> selecionando valores:
select nome, ano from cursos --- especificando valores
where ano in (2014, 2016, 2018)
order by ano desc, nome asc;

-> combinando testes:
select * from cursos
where carga > 35 and totaulas < 30
order by nome;

-> operadores logicos: and quando todos forem verdadeiros or quando um for verdadeiro.
p q p AND q     p q p OR q
v v    v        v v    v
v f    f        v f    v
f v    f        f v    v
f f    f        f f    f