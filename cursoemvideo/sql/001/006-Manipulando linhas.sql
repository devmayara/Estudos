-> criar tabela
INSERT INTO cursos VALUES
('1', 'HTML4', 'Curso de HTML5', '40', '37', '2014'),
('2', 'Algoritmos', 'Lógica de Programação', '20', '15', '2014'),
('3', 'Photoshop', 'Dicas de Photoshop CC', '10', '8', '2014'),
('4', 'PGP', 'Curso de PHP para iniciantes', '40', '20', '2010'),
('5', 'Jarva', 'Introdução à Linguagem Java', '10', '29', '2000'),
('6', 'MySQL', 'Banco de Dados MySQL', '30', '16', '2016'),
('7', 'Word', 'Curso Completo de Word', '40', '31', '2016'),
('8', 'Sapateado', 'Danças Rítmicas', '40', '30', '2018'),
('9', 'Cozinha Árabe', 'Aprenda a fazer Kibe', '40', '32', '2018'),
('10', 'YouTube', 'Gerar polêmica e ganhar inscritos', '5', '2', '2018');

-> modificar linhas incoretas:
UPDATE cursos
SET nome = 'HTML5', ano = '2018'
WHERE id_curso = '1';
LIMIT 1;

-> apagar linhas:
DELETE FROM cursos
WHERE id_curso = '1';

-> apagar todas as linhas:
truncate cursos;