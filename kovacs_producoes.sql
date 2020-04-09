--
-- File generated with SQLiteStudio v3.2.1 on dom mar 29 21:56:43 2020
--
-- Text encoding used: System
--
create schema kovacs_producoes;
-- drop schema kovacs_producoes;
use kovacs_producoes;
-- Table: Aluguel_Produto
CREATE TABLE Aluguel_Produto (
	id_produto int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    desconto_aluguel_produto int,
    preco_alguel_produto int NOT NULL);

-- Table: Cliente
CREATE TABLE Cliente (
	Matricula_Cliente int (5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    CPF int (12) NOT NULL,
    nome_cliente TEXT (100) NOT NULL,
    email_cliente TEXT (50) NOT NULL,
    telefone_cliente int (15) NOT NULL,
    endereco_cliente TEXT (200) NOT NULL);

-- Table: Estoque
CREATE TABLE Estoque (
	id_movimento_estoque int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    qtd_movimento_estoque int NOT NULL, 
    quantidade int NOT NULL
);

-- Table: Funcionario
CREATE TABLE Funcionario (
	Matricula int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    CPF_funcionario int (12) NOT NULL,
    nome_funcionario TEXT (100) NOT NULL, 
    cargo_funcionairo TEXT (50) NOT NULL, 
    hora_trabalho_funcionario DATETIME,
    email_funcionario TEXT (50) NOT NULL, 
    salario_funcionario int (6) NOT NULL, 
    telefone_funcionario int (15) NOT NULL, 
    endereco_funcionario TEXT (200) NOT NULL, 
    meta_funcionario int (7), 
    comissao_funcionario int (7), 
    vendas_funcionario int (5)
);

INSERT INTO Funcionario (
	Matricula, CPF_funcionario, nome_funcionario, 
    cargo_funcionairo, hora_trabalho_funcionario, email_funcionario, 
    salario_funcionario, telefone_funcionario, endereco_funcionario, 
    meta_funcionario, comissao_funcionario, vendas_funcionario) 
    VALUES (0, 47498755890, 'Vinicius Bucioli', 'Vendedor', '', 'vini123@gmail.com', 10000, 19988038368, 'rua1nuemiroasdasdfasdf', 1000, 12, 5);

-- Table: Ponto
CREATE TABLE Ponto (
	id_ponto INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    matricula_funcionario int (8) NOT NULL REFERENCES Funcionario (Matricula), 
    entrada_funcionario DATETIME, 
    saida_funcionario DATETIME);

-- Table: Portifolio
CREATE TABLE Portifolio (
	id_portifolio INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    arquivo_portifolio BLOB NOT NULL, 
    nome_portifolio TEXT (100) NOT NULL
);

-- Table: Produto
CREATE TABLE Produto (
    id_produto int PRIMARY KEY NOT NULL AUTO_INCREMENT,
     nome_produto TEXT (100) NOT NULL,
      categoria_produto TEXT (50) NOT NULL, 
      preco_custo_produto int NOT NULL, 
      descricao_produto TEXT (200) NOT NULL);
insert into produto values (default, "Câmera Nikom 15200", "Camera", 1200, "Câmera Nikom com alta qualidade");
insert into produto values (default, "Tripe", "Acessorios", 300, "Tripe para camera, altura máxima 2.5 m");
insert into produto values (default, "Pano verde", "Estudio", 200, "Pano verde para o plano de fundo 5m x 5m");

-- Table: Servico
CREATE TABLE Servico (
	id_servico int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    categoria_servico TEXT (50) NOT NULL, 
    preco_servico int NOT NULL, 
    descricao_servico TEXT (200) NOT NULL, 
    nome_servico TEXT (100) NOT NULL
);

-- Table: Venda
CREATE TABLE Venda (
	id_venda int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    data_venda DATE NOT NULL, 
    preco_venda int NOT NULL, 
    desconto_venda int, 
    preco_total_venda int NOT NULL
);

-- Table: Venda_Produto
CREATE TABLE Venda_Produto (
	id_venda_produto int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    desconto_venda_produto int, 
    preco_venda_produto int NOT NULL
);
