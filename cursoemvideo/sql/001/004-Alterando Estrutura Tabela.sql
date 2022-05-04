-> alterar a estrutura da tabela: add coluna.
ALTER TABLE pessoas
ADD COLUMN profissao varchar(10);

-> remover uma coluna:
ALTER TABLE pessoas
DROP COLUMN profissao;

-> add coluna escolhendo posição: para colocar em primeiro lugar usar "FIRST".
ALTER TABLE pessoas
ADD COLUMN profissao varchar(10) AFTER nome;

-> modificar definição de uma coluna:
ALTER TABLE pessoas
MODIFY COLUMN profissao varchar(20) NOT NULL DEFAULT ' '; 

-> alterar nome de uma coluna:
ALTER TABLE pessoas
CHANGE COLUMN profissao prof varchar(20);

-> alterar nome de uma tabela:
ALTER TABLE pessoas
RENAME TO gafonhotos;