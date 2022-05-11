--------------------------------------------------------------------------------
cria tabela de USUÁRIOS e insere dados
--------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    nivel TINYINT NOT NULL   
)

INSERT INTO usuarios (nome, usuario, senha, nivel) VALUES ('Morgana', 'morgana@hotmail.com', '123', 'comum');
INSERT INTO usuarios (nome, usuario, senha, nivel) VALUES ('Jórdan', 'jordan@hotmail.com', '123', 'comum');
INSERT INTO usuarios (nome, usuario, senha, nivel) VALUES ('Júlia', 'julia@hotmail.com', '123', 'comum');
INSERT INTO usuarios (nome, usuario, senha, nivel) VALUES ('Alianir', 'lia@hotmail.com', '123', 'comum');

--------------------------------------------------------------------------------
cria tabela de TIPO_RECEITAS e insere dados
--------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS receitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
)

INSERT INTO despesas (nome) VALUES ('Aluguel');
INSERT INTO despesas (nome) VALUES ('Cartão Alimentação');
INSERT INTO despesas (nome) VALUES ('Cartão Convênio/Prêmio');
INSERT INTO despesas (nome) VALUES ('Cartão Refeição');
INSERT INTO despesas (nome) VALUES ('Empréstimo');
INSERT INTO despesas (nome) VALUES ('FGTS');
INSERT INTO despesas (nome) VALUES ('Investimentos');
INSERT INTO despesas (nome) VALUES ('Salário');
INSERT INTO despesas (nome) VALUES ('Venda de bens');


--------------------------------------------------------------------------------
cria tabela de TIPO_DESPESAS e insere dados
--------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS despesas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
)

INSERT INTO despesas (nome) VALUES ('Água');
INSERT INTO despesas (nome) VALUES ('Aluguel');
INSERT INTO despesas (nome) VALUES ('Bazar');
INSERT INTO despesas (nome) VALUES ('Calçados');
INSERT INTO despesas (nome) VALUES ('Condomínio');
INSERT INTO despesas (nome) VALUES ('Gás');
INSERT INTO despesas (nome) VALUES ('Internet');
INSERT INTO despesas (nome) VALUES ('Luz');
INSERT INTO despesas (nome) VALUES ('Manutenção de imóvel');
INSERT INTO despesas (nome) VALUES ('Manutenção de veículo');
INSERT INTO despesas (nome) VALUES ('Mercado');
INSERT INTO despesas (nome) VALUES ('Roupas');
INSERT INTO despesas (nome) VALUES ('Streaming de áudio');
INSERT INTO despesas (nome) VALUES ('Streaming de vídeo');
INSERT INTO despesas (nome) VALUES ('Telefonia Fixa');
INSERT INTO despesas (nome) VALUES ('Telefonia Móvel');

