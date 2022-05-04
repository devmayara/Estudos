-> adicionando dados a tabela: pode substituir "id" ou "nacionalidade" por DEFAULT.
INSERT INTO pessoas
(nome, nascimento, sexo, peso, altura, nacionalidade)
VALUES
('Godofredo', '1984-01-02', 'M','78.5', '1.83', 'Brasil');

->simplificando
INSERT INTO pessoas VALUES
(DEFAULT, 'Adalgiza', '1930-11-17', 'F','63.5', '1.67', 'Irlanda');

