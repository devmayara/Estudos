-> selecao por nome: usando o operador like = parecido
SELECT * FROM cursos
WHERE nome like 'P%' --- % substitui nenhum ou qualquer caracter

-> wildcard: % substitui nenhum ou qualquer caracter
SELECT * FROM cursos
WHERE nome like '%P' -- _ substitui qualquer caracter

-> Distinguindo
SELECT DISTINCT nacionalidade FROM gafanhotos
ORDER by nacionalidade;

->funções de agregação
SELECT COUNT(nome) FROM gafanhotos;

SELECT MAX(totaulas) FROM cursos;

SELECT MAX(totaulas) FROM cursos WHERE ano =2016

SELECT nome, MIN(totaulas) FROM cursos WHERE ano ='2016'

SELECT SUM(totaulas) FROM cursos WHERE ano ='2016'

SELECT AVG(totaulas) FROM cursos WHERE ano ='2016'