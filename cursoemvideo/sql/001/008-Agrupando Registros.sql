-- Agrupando Registros
SELECT carga FROM cursos
GROUP BY carga;

-- Agrupando e Agregando Registros
SELECT carga, COUNT(nome) FROM cursos
GROUP BY carga;

SELECT carga, COUNT(nome) FROM cursos
GROUP BY carga
HAVING COUNT(nome) > 3;     -- having é pro group oq o where é pro select, e so posso usar pro count!

SELECT ano, COUNT(*)FROM cursos
WHERE totaulas > 30
GROUP BY ano
HAVING COUNT(ano) >=5 -- ou HAVING ano > 2013
ORDER BY COUNT(*)

SELECT AVG(carga) FROM cursos   -- media de carga do curso

SELECT carga, COUNT(*) FROM cursos
WHERE ano > 2013
GROUP BY carga
HAVING carga > (SELECT AVG(carga) FROM cursos)