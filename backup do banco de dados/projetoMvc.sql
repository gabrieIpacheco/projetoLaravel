CREATE TABLE especializacao(
	id serial,
	descricao varchar(30)  NOT NULL,
	imagem varchar(100),
	PRIMARY KEY(id)
);

CREATE TABLE consulta(
	id serial,
	descricao varchar(200), 
	data date NOT NULL,
	hora time NOT NULL,
	especializacao_id int,
	PRIMARY KEY(id),
	FOREIGN KEY (especializacao_id) REFERENCES especializacao(id)
);

CREATE TABLE usuario(
	id serial,
	email varchar(50) NOT NULL UNIQUE,
	senha varchar(32) NOT NULL,
	PRIMARY KEY(id)	
);

CREATE TABLE avaliacao(
	id serial,
	nota int,
	descricao varchar(500),
	PRIMARY KEY(id)
);

CREATE TABLE sugestao(
	id serial,
	descricao varchar(100),
	PRIMARY KEY(id)	
);


INSERT INTO usuario(email, senha) VALUES ('admin@gmail.com', MD5('123456'));

INSERT INTO especializacao(descricao) VALUES('Dentistas');
INSERT INTO especializacao(descricao) VALUES('Dermatologista');
INSERT INTO especializacao(descricao) VALUES('psiquiatra');
INSERT INTO especializacao(descricao) VALUES('clinico geral');
INSERT INTO especializacao(descricao) VALUES('infectologista');


INSERT INTO consulta(descricao, data, hora, especializacao_id) VALUES('consulta de rotina', '2021-05-15', '13:00', 1);
INSERT INTO consulta(descricao, data, hora, especializacao_id) VALUES('consulta de rotina', '2021-05-15', '13:30', 1);
INSERT INTO consulta(descricao, data, hora, especializacao_id) VALUES('consulta de rotina', '2021-05-15', '14:00', 1);
INSERT INTO consulta(descricao, data, hora, especializacao_id) VALUES('consulta de rotina', '2021-05-15', '15:30', 1);
INSERT INTO consulta(descricao, data, hora, especializacao_id) VALUES('consulta de rotina', '2021-05-15', '14:30', 2);

INSERT INTO sugestao(descricao) VALUES('mudar a cor das cortina para verde');
INSERT INTO sugestao(descricao) VALUES('mudar a cor das cortina para azul');
INSERT INTO sugestao(descricao) VALUES('mudar a cor das poltronas para verde');
INSERT INTO sugestao(descricao) VALUES('estabelecimento ruim, sugiro fechar');

INSERT INTO avaliacao(nota, descricao) VALUES(1, 'estabelecimento ruim, sugiro fechar');
INSERT INTO avaliacao(nota, descricao) VALUES(10,'otimo atendimento');
INSERT INTO avaliacao(nota, descricao) VALUES(6, '');
INSERT INTO avaliacao(nota, descricao) VALUES(10, 'nada a comentar');

Delete from consulta where id=34;
