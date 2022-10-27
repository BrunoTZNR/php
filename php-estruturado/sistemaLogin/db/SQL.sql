CREATE DATABASE IF NOT EXISTS login
DEFAULT CHARACTER SET = utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

USE login;

CREATE TABLE IF NOT EXISTS usuarios(
	id_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(35) NOT NULL,
    email VARCHAR(120) NOT NULL,
    senha VARCHAR(120) NOT NULL,
    recupera_senha VARCHAR(120),
    token VARCHAR(255),
    status VARCHAR(20),
    dt_cadastro DATE NOT NULL
)ENGINE=InnoDB, DEFAULT CHARSET = utf8mb4;

TRUNCATE TABLE usuarios;
DROP TABLE usuarios;
DESC usuarios;
SELECT * FROM usuarios;
ALTER TABLE usuarios ADD codigo_confirmacao VARCHAR(255) AFTER status;