-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE endereco (
rua varchar(100) NOT NULL,
bairro varchar(100) NOT NULL,
complemento varchar(15) NOT NULL,
cidade varchar(100) NOT NULL,
num_casa int(7) NOT NULL
);

CREATE TABLE pagamento (
cpf_user varchar(15) NOT NULL,
num_cartao int(17) NOT NULL,
cod_seguranca int(3) NOT NULL,
data_validade date NOT NULL,
PRIMARY KEY (cpf_user)
);

CREATE TABLE produtos (
nome varchar(150) NOT NULL,
desc_prod varchar(300) NOT NULL,
preco varchar(8) NOT NULL,
cod_prod int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
qtd_emb int(3) NOT NULL,
categoria varchar(25) NOT NULL,
preco_unit varchar(8) NOT NULL
);

CREATE TABLE pedidos (
cod_pedido int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
end_pedido varchar(150) NOT NULL,
preco_pedido varchar(8) NOT NULL
);

CREATE TABLE cad_usuario (
email varchar(60) NOT NULL,
senha varchar(16) NOT NULL,
login varchar(20) NOT NULL,
telefone varchar(14) NOT NULL,
cpf varchar(15) PRIMARY KEY NOT NULL,
tip_pagamento varchar(30) NOT NULL,
nome varchar(100)
);


