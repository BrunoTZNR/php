/* ---------------------- SESSION ---------------------*/

CREATE DATABASE IF NOT EXISTS exemplo
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

USE exemplo;

CREATE TABLE IF NOT EXISTS tb_usuario(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(200) NOT NULL,
    senha VARCHAR(50) NOT NULL
)ENGINE=InnoDB, DEFAULT CHARSET = utf8mb4;

SELECT * FROM tb_usuario;

INSERT INTO tb_usuario VALUES 
(DEFAULT,'Bruno','bruno@teste.com','123456'),
(DEFAULT,'Bianca','bianca@teste.com','123456'),
(DEFAULT,'Renan','renan@teste.com','123456'),
(DEFAULT,'Italo','italo@teste.com','123456');