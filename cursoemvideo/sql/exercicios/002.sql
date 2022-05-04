--1) Uma lista com as profissôes dos gafanhotos e seus respectivos quantitativos.
SELECT profissao, COUNT(profissao) FROM gafanhotos
GROUP BY profissao;

--2) Quantos gafanhotos homens e quantas mulheres nasceram apos 01/jan/2005?
SELECT sexo, COUNT(*) FROM gafanhotos
WHERE nascimento >= '2005-01-01'
GROUP BY sexo;

--3) Uma lista com os gafanhotos que nasceram fora do Brasil, mostrando o pais de origem e o total de pessoas nascidas la. So nos interessam os paises que tiverem mais de 3 gafanhotos com essa nacionalidade.
SELECT nacionalidade, COUNT(nacionalidade) FROM gafanhotos
WHERE nacionalidade != 'brasil'
GROUP BY nacionalidade
HAVING COUNT(nacionalidade) > 3;

--4) Uma lista agrupada pela altura dos gafanhotos, mostrando quantas pessoas pesam mais de 100kg e que estao acima da media de altura de todos os cadastrados.
SELECT peso, altura, COUNT(*) FROM gafanhotos
WHERE peso > '100'
GROUP BY altura
HAVING altura > (SELECT AVG(altura) FROM gafanhotos);