CREATE DATABASE LOGIN;
USE LOGIN;

CREATE TABLE USUARIO (
    USUARIO_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    USUARIO VARCHAR(200) NOT NULL,
    SENHA VARCHAR(32) NOT NULL
);

ALTER TABLE USUARIO;
INSERT INTO USUARIO (USUARIO, SENHA) VALUES ("matheus", md5("mecontrata"));

CREATE TABLE MENSAGEM (
    MENSAGEM_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    TIPO VARCHAR(10) NOT NULL,
    TEXTO VARCHAR(500) NOT NULL
);

ALTER TABLE MENSAGEM;
INSERT INTO MENSAGEM (TIPO, TEXTO) VALUES ("sugestao", "Trocar todas as fontes para Wingdings");
INSERT INTO MENSAGEM (TIPO, TEXTO) VALUES ("elogio", "Gostei dos seus projetos!");
INSERT INTO MENSAGEM (TIPO, TEXTO) VALUES ("duvida", "Qual é o sentido da vida?");