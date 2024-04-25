-- Criar Banco de Dados

CREATE DATABASE IF NOT EXISTS loja;

-- Usar o banco de Dados
USE loja;

-- Criar Tabela Produto
CREATE TABLE IF NOT EXISTS produto (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
descricao TEXT,
preco DECIMAL (10,2) NOT NULL
);

-- Inserir alguns produtos
INSERT INTO produto (nome, descricao, preco) VALUES
('Camiseta','Camiseta preta de algodão',29.99),
('Calça Jeans','Calça Jeans azul',59.99),
('Tenis','Tenis esportivo preto',99.99);

-- Criar tabela pedido
CREATE TABLE IF NOT EXISTS pedido (
id INT AUTO_INCREMENT PRIMARY KEY,
data_pedido DATE NOT NULL,
status ENUM('pendente','em_andamento','concluido')NOT NULL
);

-- Inserir pedidos
INSERT INTO pedido(data_pedido,status)VALUES 
('2024-04-24','pendente'),
('2024-04-23','concluido');

-- Criar tabela Produto_pedido (
CREATE TABLE produto_pedido(
id INT AUTO_INCREMENT PRIMARY KEY,
produto_id INT NOT NULL,
pedido_id INT NOT NULL,
quantidade INT NOT NULL,
FOREIGN KEY (produto_id) REFERENCES produto (id),
FOREIGN KEY (pedido_id) REFERENCES pedido(id)
);

-- Inserir alguns itens nos pedidos de exemplo
INSERT INTO produto_pedido (produto_id,pedido_id,quantidade)VALUES
(1,1,2),
(2,1,5),
(3,2,8);




