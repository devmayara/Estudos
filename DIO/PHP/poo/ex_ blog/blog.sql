CREATE DATABASE blog;

use blog;
CREATE TABLE post (
    id int(11) NOT NULL AUTO_INCREMENT,
    titulo varchar(50) DEFAULT NULL,
    descricao varchar(100) DEFAULT NULL,
    PRIMARY KEY (id)
);
