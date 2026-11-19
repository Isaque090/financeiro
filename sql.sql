create DATABASE financias;
USE financias;

CREATE TABLE tb_usuarios (
    cd_usuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_usuario VARCHAR(105) NOT NULL,
    ds_cpf CHAR(11) UNIQUE NOT NULL,
    ds_telefone VARCHAR(20) NOT NULL,
    dt_nascimento DATE NOT NULL,
    ds_senha VARCHAR(255) NOT NULL,
    ds_email VARCHAR(255) UNIQUE NOT NULL,
    ds_foto VARCHAR(255) NULL,
    ds_status ENUM('ativo', 'inativo') NOT NULL,
    ds_conta ENUM('admin', 'funcionario', 'gerente') NOT NULL DEFAULT 'funcionario',
    dt_criado DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_categorias (
    cd_categoria INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_usuario INT NOT NULL,
    ds_nome VARCHAR(255) NOT NULL,
    ds_tipo ENUM('receita', 'despesa') NOT NULL,
    ds_status ENUM('ativo', 'inativo') NOT NULL,
    CONSTRAINT fk_categorias_usuario
        FOREIGN KEY (id_usuario) REFERENCES tb_usuarios(cd_usuario)
);

CREATE TABLE tb_metas (
    cd_meta INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_usuario INT NOT NULL,
    ds_nome VARCHAR(255) NOT NULL,
    vl_atual DECIMAL(12,2) NOT NULL DEFAULT 0,
    vl_meta DECIMAL(12,2) NOT NULL,
    dt_limite DATE NOT NULL,
    ds_concluido TINYINT(1) DEFAULT 0,
    CONSTRAINT fk_metas_usuario
        FOREIGN KEY (id_usuario) REFERENCES tb_usuarios(cd_usuario)
);

CREATE TABLE tb_orcamentos (
    cd_orcamento INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_usuario INT NOT NULL,
    id_categoria INT NOT NULL,
    vl_limite DECIMAL(12,2) NOT NULL,
    nr_mes INT NOT NULL,
    nr_ano INT NOT NULL,
    UNIQUE KEY uk_orcamento (id_usuario, id_categoria, nr_mes, nr_ano),
    CONSTRAINT fk_orcamentos_usuario
        FOREIGN KEY (id_usuario) REFERENCES tb_usuarios(cd_usuario),
    CONSTRAINT fk_orcamentos_categoria
        FOREIGN KEY (id_categoria) REFERENCES tb_categorias(cd_categoria)
);

CREATE TABLE tb_transacoes (
    cd_transacao INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_usuario INT NOT NULL,
    id_categoria INT NOT NULL,
    ds_transacao VARCHAR(255) NOT NULL,
    ds_tipo ENUM('receita', 'despesa') NOT NULL,
    vl_transacao DECIMAL(12,2) NOT NULL,
    dt_transacao DATE NOT NULL,
    dt_criado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_transacoes_usuario
        FOREIGN KEY (id_usuario) REFERENCES tb_usuarios(cd_usuario),
    CONSTRAINT fk_transacoes_categoria
        FOREIGN KEY (id_categoria) REFERENCES tb_categorias(cd_categoria)
);

CREATE TABLE tb_recorrencias (
    cd_recorrencia INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_transacao INT NOT NULL,
    ds_recorrencia VARCHAR(255) NOT NULL,
    vl_valor DECIMAL(12,2) NOT NULL,
    ds_tipo VARCHAR(20) NOT NULL,
    dt_inicio DATE NOT NULL,
    dt_fim DATE,
    ds_periodicidade VARCHAR(25) NOT NULL,
    CONSTRAINT fk_recorrencias_transacao
        FOREIGN KEY (id_transacao) REFERENCES tb_transacoes(cd_transacao)
);
CREATE TABLE tb_cartoes (
    cd_cartao INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_usuario INT NOT NULL,
    ds_nome VARCHAR(100) NOT NULL,
    ds_bandeira VARCHAR(30) NOT NULL,
    nr_final CHAR(4) NOT NULL,
    vl_limite DECIMAL(12,2) NOT NULL,
    vl_fatura_atual DECIMAL(12,2) NOT NULL DEFAULT 0,
    nr_dia_fechamento TINYINT NOT NULL,
    nr_dia_vencimento TINYINT NOT NULL,

    CONSTRAINT fk_cartoes_usuario
        FOREIGN KEY (id_usuario) REFERENCES tb_usuarios(cd_usuario)

);
USE financias;
select * from  tb_orcamentos ;
INSERT INTO tb_usuarios (cd_usuario, nm_usuario, ds_cpf, ds_telefone, dt_nascimento, ds_senha, ds_email, ds_foto, ds_status, ds_conta)
VALUES (1, 'João lucas', '12345678990', '(13) 99999-9999', '2010-07-03',
        '123456789', 'Joao.aura@chad.com', NULL, 'ativo', 'admin'),
	   (2, 'Isaque severo', '98765432100', '(13) 99999-9999', '2000-01-15',
        '123456789', 'Isaque.aura@sigma.com', NULL, 'ativo', 'admin');

INSERT INTO tb_categorias (cd_categoria, id_usuario, ds_nome, ds_tipo, ds_status) VALUES
(1, 1, 'Alimentação', 'despesa', 'ativo'),
(2, 1, 'Moradia',     'despesa', 'ativo'),
(3, 1, 'Transporte',  'despesa', 'ativo'),
(4, 1, 'Educação',    'despesa', 'ativo'),
(5, 1, 'Contas',      'despesa', 'ativo'),
(6, 1, 'Lazer',       'de
spesa', 'ativo'),
(7, 1, 'Renda',       'receita', 'ativo');

INSERT INTO tb_transacoes (id_usuario, id_categoria, ds_transacao, ds_tipo, vl_transacao, dt_transacao) VALUES
(3, 7, 'Salário',        'receita', 4500.00, '2026-11-05'),
(3, 7, 'Freelance',      'receita',  650.00, '2026-11-03'),
(3, 2, 'Aluguel',        'despesa', 1200.00, '2026-11-05'),
(5, 1, 'Supermercado',   'despesa',  312.00, '2026-11-05'),
(5, 3, 'Uber',           'despesa',   28.50, '2026-11-04'),
(5, 3, 'Combustível',    'despesa',  152.30, '2026-11-02'),
(5, 7, 'Salário',        'receita', 4500.00, '2026-10-05'),
(5, 2, 'Aluguel',        'despesa', 1200.00, '2026-10-05'),
(5, 1, 'Supermercado',   'despesa',  480.00, '2026-10-12'),
(5, 4, 'Boleto da Facul','despesa',  900.00, '2026-10-10'),
(1, 5, 'Boleto de Energia','despesa', 200.00, '2026-10-15'),
(1, 5, 'Boleto de água', 'despesa',   78.87, '2026-10-18');

INSERT INTO tb_orcamentos (id_usuario, id_categoria, vl_limite, nr_mes, nr_ano) VALUES
(1, 1,  400.00, 11, 2026),
(1, 2, 1200.00, 11, 2026),
(1, 3,  250.00, 11, 2026),
(1, 6,  300.00, 11, 2026);

INSERT INTO tb_metas (id_usuario, ds_nome, vl_atual, vl_meta, dt_limite, ds_concluido) VALUES
(3, 'Reserva de emergência', 6000.00, 10000.00, '2027-06-30', 0),
(3, 'Viagem de férias',       800.00,  3000.00, '2027-01-15', 0);

INSERT INTO tb_orcamentos
(id_usuario, id_categoria, vl_limite, nr_mes, nr_ano)
VALUES
(3, 1, 500.00, 11, 2026),  
(3, 2, 1200.00, 11, 2026), 
(3, 3, 150.00, 11, 2026),  
(3, 6, 300.00, 11, 2026); 
INSERT INTO tb_cartoes
(id_usuario, ds_nome, ds_bandeira, nr_final, vl_limite,
vl_fatura_atual, nr_dia_fechamento, nr_dia_vencimento)
VALUES
(3, 'Cartão principal', 'Visa', '4821', 5000.00, 1250.00, 18, 25),
(3, 'Cartão secundário', 'Mastercard', '7732', 2500.00, 640.00, 3, 10),
(3, 'Cartão Nubank', 'Mastercard', '1234', 3000.00, 800.00, 5, 12);
