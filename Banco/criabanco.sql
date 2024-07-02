-- Deleta banco de cados caso exista 
DROP DATABASE IF EXISTS IFSP;

-- Cria banco de cados caso não exista 
CREATE DATABASE IF NOT EXISTS IFSP;

-- Seleciona banco de dados para uso
USE IFSP;

-- Cria a tabela de cidades
CREATE TABLE Cidade
(
    id      INT AUTO INCREMENT,
    nome    VARCHAR(100),
    estado  VARCHAR (002),
    PRIMARY KEY(id)
);

-- Cria tabela de clientes.
CREATE TABLE Cliente
(
id          INT AUTO INCREMENT,
nome        VARCHAR(100),
email       VARCHAR(100),
senha       VARCHAR(50),
ativo       BOOL,
id_cidade   INT,
PRIMARY KEY(id),
CONSTRAINT FK_ClienteCidade FOREIGN KEY (id_cidade) REFERENCES Cidade(id)
);