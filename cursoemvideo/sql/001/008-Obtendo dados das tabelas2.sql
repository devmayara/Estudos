-> selecao por nome: usando o operador like = parecido
SELECT * FROM cursos
WHERE nome like 'P%' --- % substitui nenhum ou qualquer caracter

-> wildcard: % substitui nenhum ou qualquer caracter
SELECT * FROM cursos
WHERE nome like '%P'
