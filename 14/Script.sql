
-- Criando o banco de dados "contatos"
CREATE DATABASE IF NOT EXISTS contatos;

-- Usando o banco de dados "contatos"
USE contatos;

-- Criando a tabela "contatos_info"
CREATE TABLE IF NOT EXISTS contatos_info (
   id INT AUTO_INCREMENT PRIMARY KEY,
   nome VARCHAR(100)NOT NULL,
   telefone VARCHAR(20),
   EMAIL varchar(100)NOT NULL
);

-- Criando um usuario para acessar o banco de dados
CREATE USER 'usuario_contatos'@'localhost' IDENTIFIED BY 'senha123';


-- Concedendo permissoes para o usuario no banco "contatos"
GRANT ALL PRIVILEGES ON contatos.* TO 'usuario_contatos'@'localhost';
FLUSH PRIVILEGES;

-- Inserindo dados no banco
INSERT INTO contatos_info (nome, telefone, email) VALUES
('João','123456789','João@mail.com'),
('Patricia','987654321','Patricia@mail.com');




