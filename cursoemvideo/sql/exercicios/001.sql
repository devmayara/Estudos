--1) Uma lista com o nome de todas as gafanhotas que são mulheres
SELECT nome FROM gafanhotos
WHERE sexo = 'F';

--2) Uma lista com os dados de todos aqueles que nasceram entre 1/Jan/2000 e 31/Dec/2015
SELECT * FROM gafanhotos
WHERE nascimento >= '2000/01/01' AND
	  nascimento <= '2015/12/31'
ORDER by nascimento

--3) Uma lista com o nome de todos os homens que trabalham como programadores
SELECT nome FROM gafanhotos
WHERE sexo = 'M' AND 
	  profissao = 'programador'

--4) Uma lista com os dados de todas as mulheres que nasceram no Brasil e que tem seu nome iniciando com a letra J
SELECT * FROM gafanhotos
WHERE sexo = 'F' AND
	  nacionalidade = 'Brasil' AND
      nome like 'J%'

--5) Uma lista com o nome e nacionalidade de todos os homens que tem Silva no nome, nao nasceram no Brasil e pesam menos de 100kg
SELECT nome, nacionalidade FROM gafanhotos
WHERE sexo = 'M' AND
      nome like '%silva%' AND
	  nacionalidade != 'Brasil' AND
      peso <= '100'

--6) Qual é a maior altura entre gafonhotos homens que moram no Brasil?
SELECT MAX(altura) FROM gafanhotos
WHERE sexo = 'M' AND
	  nacionalidade = 'Brasil'

--7) Qual é a media de peso dos gafanhotos cadastrados?
SELECT AVG(peso) FROM gafanhotos

--8) Qual é o menor peso entre as gafanhotas mulheres que nasceram fora do Brasil e entre 1/Jan/1990 e 31/Dec/2000?
SELECT MIN(peso) FROM gafanhotos
WHERE sexo = 'F' AND
	  nacionalidade != 'Brasil' AND
      nascimento >= '1990/01/01' AND
      nascimento <= '2000/12/31'

--9) Quantas gafanhotas mulheres tem mais de 1.90m de altura?
SELECT SUM(sexo) FROM gafanhotos
WHERE sexo = 'F' AND
	  altura >= '1.9'