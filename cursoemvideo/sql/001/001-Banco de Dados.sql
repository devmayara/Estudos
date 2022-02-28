-> cria o banco de dados chamado "cadastro".
CREATE DATABASE cadastro;       

-> cria as tabelas:
CREATE TABLE pessoas (      
    nome,
    idade,
    sexo,
    peso,
    altura,
    nacionalidade,
);

TIPOS PRIMITIVOS:
-Numerico:
    Inteiro:
        TinyInt, SmallInt, Int, MediumInt, BigInt.
    Real:
        Decimal, Float, Double, Real.
    Logico:
        Bit, Boolean.
-Data/Tempo:
    Data, DataTime, TimeStamp, Time, Year.
-Literal:
    Caractere:
        Char, VarChar.
    Texto:
        TinyText, Text, MediumText, LongText.
    Binário:
        TinyBlob, Blob, MediumBlob, longBlob.
    Coleção:
        Enum, Set.
-Especial:
    Geometry, Point, Polygon, MultiPolygon.

-> adicionando os tipos:
CREATE TABLE pessoas (
    nome varchar(30),
    idade tinyint(3),
    sexo char(1),
    peso float,
    altura float,
    nacionalidade varchar(20)
);

-> abrir bd:
USE cadastro;

-> descrever as tabelas:
SHOW TABLES; 

-> descrever as colunas da tabela "pessoas":
DESCRIBE pessoas;
