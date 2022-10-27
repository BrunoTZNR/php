CREATE DATABASE IF NOT EXISTS execicio_cliente
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

DROP DATABASE execicio_cliente;

USE execicio_cliente;

CREATE TABLE IF NOT EXISTS tb_cliente(
	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nm_cliente VARCHAR(25) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    dt_cadastro TIMESTAMP
)ENGINE=InnoDB, DEFAULT CHARSET = utf8mb4;

CREATE TABLE IF NOT EXISTS tb_pf(
    cpf VARCHAR(11) NOT NULL PRIMARY KEY,
    fk_cliente INT,
    FOREIGN KEY (fk_cliente) REFERENCES tb_cliente(id_cliente)
)ENGINE=InnoDB, DEFAULT CHARSET = utf8mb4;

CREATE TABLE IF NOT EXISTS tb_pj(
    cnpj VARCHAR(14) PRIMARY KEY NOT NULL,
    nm_empresa VARCHAR(100) NOT NULL,
    fk_cliente INT,
    FOREIGN KEY (fk_cliente) REFERENCES tb_cliente(id_cliente)
)ENGINE=InnoDB, DEFAULT CHARSET = utf8mb4;

SELECT * FROM tb_cliente;