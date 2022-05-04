
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