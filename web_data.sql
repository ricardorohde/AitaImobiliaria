CREATE TABLE usuarios(
user VARCHAR(30) PRIMARY KEY,
password VARCHAR(30),
reg_date TIMESTAMP
);

CREATE TABLE imoveis(
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
transacao VARCHAR(1),
tp_imovel VARCHAR(1),
sb_tp_imovel VARCHAR(1),
categoria VARCHAR(1),
cep INT(8),
estado VARCHAR(1),
cidade VARCHAR(1),
bairro VARCHAR(1),
endereco VARCHAR(255),
numero INT(4),
complemento INT(4),
descricao BLOB,
a_util INT(5),
a_total INT(5),
v_t_venda INT(7),
v_entrada INT(7),
mensais INT(7),
cond_com VARCHAR(1),
d_cond BLOB,
V_aluguel INT(7),
diaria INT(7),
isento VARCHAR(1),
v_cond INT(7),
v_iptu INT(7),
nm_empr VARCHAR(255),
capacidade INT(3),
andares INT (3),
un_andar INT(3),
elevadores INT(3),
banheiros INT(3),
salas INT(3),
quartos INT(3),
suites INT(3),
garagens INT(3),
ano_contrucao INT(4),
texto BLOB,
status VARCHAR(1),
click INT(6) UNSIGNED AUTO_INCREMENT,
dir VARCHAR(255)
);

CREATE TABLE imagens(
id INT(1) PRIMARY KEY,
dir VARCHAR(255)
);