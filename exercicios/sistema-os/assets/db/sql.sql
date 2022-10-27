CREATE DATABASE IF NOT EXISTS sistema_os
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

USE sistema_os;

CREATE TABLE IF NOT EXISTS tb_usuario(
	email VARCHAR(120) NOT NULL PRIMARY KEY,
    senha VARCHAR(20) NOT NULL,
    dt_cadastro DATE NOT NULL,
    status ENUM('T','F'),
    token_acesso VARCHAR(50),
    token_validacao VARCHAR(50),
    token_recupera_senha VARCHAR(50)
    );
    
    ALTER TABLE tb_usuario ADD COLUMN nome VARCHAR(30) NOT NULL AFTER senha;
    ALTER TABLE tb_usuario ADD COLUMN sobrenome VARCHAR(30) NOT NULL AFTER nome;
    
    DESC tb_usuario;
    SELECT * FROM tb_usuario;