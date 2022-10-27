CREATE DATABASE IF NOT EXISTS os_teste
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

/*DROP DATABASE os_teste;*/
USE os_teste;

CREATE TABLE IF NOT EXISTS tb_cliente(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_cliente VARCHAR(45) NOT NULL,
    ddd VARCHAR(3) NOT NULL,
    telefone VARCHAR(9) NOT NULL,
    dt_cadastro TIMESTAMP NOT NULL
)ENGINE=InnoDB,DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tb_carro(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    placa VARCHAR(8) NOT NULL,
    modelo VARCHAR(15) NOT NULL,
    marca VARCHAR(15) NOT NULL,
    ano VARCHAR(4) NOT NULL,
    cor VARCHAR(15) NOT NULL,
    motor VARCHAR(5) NOT NULL,
    valvulas VARCHAR(4) NOT NULL,
    dt_cadastro TIMESTAMP NOT NULL
)ENGINE=InnoDB,DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tb_funcionario(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    porcentagem VARCHAR(2)
)ENGINE=InnoDB,DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tb_servico(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    valor DECIMAL(6,2) NOT NULL,
    fk_funcionario INT NOT NULL,
    FOREIGN KEY (fk_funcionario) REFERENCES tb_funcionario(id)
)ENGINE=InnoDB,DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tb_produto(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(60) NOT NULL,
    qtd TINYINT NOT NULL,
    valor DECIMAL(6,2) NOT NULL
)ENGINE=InnoDB,DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tb_os(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    dt_os TIMESTAMP,
    valor_mo DECIMAL(6,2) NOT NULL,
    valor_produtos DECIMAL(6,2) NOT NULL,
    descricao TEXT,
    valor_total DECIMAL(7,2) NOT NULL,
    status_os ENUM('finalizado','cancelado','andamento') NOT NULL,
    fk_carro INT,
    fk_cliente INT,
    fk_servico INT,
    fk_produto INT,
    FOREIGN KEY (fk_carro) REFERENCES tb_carro(id),
    FOREIGN KEY (fk_cliente) REFERENCES tb_cliente(id),
    FOREIGN KEY (fk_servico) REFERENCES tb_servico(id),
    FOREIGN KEY (fk_produto) REFERENCES tb_produto(id)
)ENGINE=InnoDB,DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_funcionario VALUES (DEFAULT,'Vitor','60');

INSERT INTO tb_os VALUES (DEFAULT,'2022-10-21 14:54:42','100.00','150.00',null,'250.00','finalizado','1','1',null,null);

INSERT INTO tb_carro VALUES (DEFAULT,'AAA-4444','GOL G5','VW','2011','PRATA','1.0','8V','2022-10-21 14:54:42');

INSERT INTO tb_cliente VALUES 
(DEFAULT,'Bruno','61','123456789','2022-10-20 21:52'),
(DEFAULT,'Bianca','61','123456789','2022-10-20 21:52'),
(DEFAULT,'Italo','61','123456789','2022-10-20 21:52'),
(DEFAULT,'Renan','61','123456789','2022-10-20 21:52');

SELECT * FROM tb_funcionario;
SELECT * FROM tb_os;
SELECT * FROM tb_cliente;
SELECT * FROM tb_carro;