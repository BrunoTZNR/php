CREATE DATABASE wdev_vagas
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

USE wdev_vagas;

CREATE TABLE vagas(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    descricao TEXT,
    ativo ENUM('s','n'),
    dt TIMESTAMP
);

SELECT * FROM vagas;