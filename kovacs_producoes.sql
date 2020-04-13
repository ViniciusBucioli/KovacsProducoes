start transaction;
create schema kovacs_producoes;
-- drop schema kovacs_producoes;
use kovacs_producoes;
-- Table: Aluguel_Produto
CREATE TABLE Aluguel_Produto (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    desconto int,
    preco int NOT NULL);

-- Table: Cliente
CREATE TABLE Cliente (
	id int (5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    CPF int (12) NOT NULL,
    nome TEXT (100) NOT NULL,
    email TEXT (50) NOT NULL,
    telefone int (15) NOT NULL,
    endereco TEXT (200) NOT NULL);

-- Table: Estoque
CREATE TABLE Estoque (
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    qtd int NOT NULL, 
    quantidade int NOT NULL
);

-- Table: Funcionario
CREATE TABLE Funcionario (
	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    cpf int (12) NOT NULL,
    nome TEXT (100) NOT NULL, 
    cargo TEXT (50) NOT NULL, 
    hora DATETIME,
    email TEXT (50) NOT NULL, 
    salario int (6) NOT NULL, 
    telefone int (15) NOT NULL, 
    endereco TEXT (200) NOT NULL, 
    meta int (7), 
    comissao int (7), 
    vendas int (5)
);

INSERT INTO Funcionario (
	id, cpf, nome, 
    cargo, hora, email, 
    salario, telefone, endereco, 
    meta, comissao, vendas) 
    VALUES (0, 47498755890, 'Vinicius Bucioli', 'Vendedor', '', 'vini123@gmail.com', 10000, 19988038368, 'rua1nuemiroasdasdfasdf', 1000, 12, 5);

-- Table: Ponto
CREATE TABLE Ponto (
	id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    matricula int (8) NOT NULL REFERENCES Funcionario (id), 
    entrada DATETIME, 
    saida DATETIME);

-- Table: Portifolio
CREATE TABLE Portifolio (
	id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    arquivo BLOB NOT NULL, 
    nome TEXT (100) NOT NULL
);

-- Table: Produto
CREATE TABLE Produto (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
     nome TEXT (100) NOT NULL,
      categoria TEXT (50) NOT NULL, 
      preco int NOT NULL, 
      descricao TEXT (200) NOT NULL);
insert into produto values (default, "Câmera Nikom 15200", "Camera", 1200, "Câmera Nikom com alta qualidade");
insert into produto values (default, "Tripe", "Acessorios", 300, "Tripe para camera, altura máxima 2.5 m");
insert into produto values (default, "Pano verde", "Estudio", 200, "Pano verde para o plano de fundo 5m x 5m");

-- Table: Servico
CREATE TABLE Servico (
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    oferecido_por int NOT NULL REFERENCES Funcionario (id),
    categoria TEXT (50) NOT NULL, 
    preco int NOT NULL, 
    descricao TEXT (200) NOT NULL, 
    nome TEXT (100) NOT NULL
);

-- Table: Venda
CREATE TABLE Venda (
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    id_produto int NOT NULL REFERENCES Produto (id),
    vendido_por int Not NULL REFERENCES Funcionario (id),
    data DATE NOT NULL, 
    preco int NOT NULL, 
    desconto int, 
    preco_total int NOT NULL
);
commit;