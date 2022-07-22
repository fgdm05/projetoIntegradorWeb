DROP DATABASE IF EXISTS barbeariaPI;
CREATE DATABASE IF NOT EXISTS barbeariaPI;
USE barbeariaPI;

CREATE TABLE logins(
    tipoLogin ENUM('BARBEIRO', 'CLIENTE') NOT NULL,
    cdUsuario VARCHAR(50) NOT NULL PRIMARY KEY,
    senha VARCHAR(50) NOT NULL);
    
INSERT INTO logins (tipoLogin, cdUsuario, senha) VALUES 
    ('BARBEIRO', 'rodrigo.farias', 'rodrigo.farias'),
    ('CLIENTE', 'carlos.eduardo', 'carlos.eduardo'),
    ('CLIENTE', 'fernando.rodrigues', 'fernando.rodrigues');

CREATE TABLE servicos(
    tipoServico ENUM("NAVALHA", "DESENHADA", "BARBOTERAPIA", "TOALHA_QUENTE", "PIGMENTACAO", "COMBO") NOT NULL PRIMARY KEY,
    descricaoServico VARCHAR(255) NOT NULL,
    precoServico DOUBLE NOT NULL);

INSERT INTO servicos (tipoServico, descricaoServico, precoServico) VALUES
    ("NAVALHA", "Barba na Navalha", 20.00),
    ("DESENHADA", "3 tipos: barba c/ ou s/ cavanhaque", 30.00),
    ("BARBOTERAPIA", "Hidratação, óleos, toalha quente e corte", 60.00),
    ("TOALHA_QUENTE", "Toalha quente e corte na barba.", 35.00),
    ("PIGMENTACAO", "Clareamento, tintura e luzes", 40.00),
    ("COMBO", "Clareamento, barboterapia e corte desenhado", 85.00);

CREATE TABLE pessoas(
    idPessoa INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cdUsuario VARCHAR(50) NOT NULL,
    CONSTRAINT cdUsuario_FK FOREIGN KEY (cdUsuario) REFERENCES logins(cdUsuario),
    nome VARCHAR(30) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    telefone VARCHAR(40),
    email VARCHAR(255) NOT NULL);

INSERT INTO pessoas (cdUsuario, nome, sobrenome, telefone, email) VALUES 
    ('rodrigo.farias', 'Rodrigo', 'Farias', '99999 9999', 'rodrigofarias@gmail.com'),
    ('carlos.eduardo', 'Carlos', 'Eduardo', '98283 9213', 'carloseduardo@yahoo.com.br'),
    ('fernando.rodrigues', 'Fernando', 'Rodrigues', '93584 9234', 'fernandorodrigues@outlook.com');

CREATE TABLE agendas(
    idAgenda INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cdUsuario VARCHAR(50) NOT NULL,
    tipoServico ENUM("NAVALHA", "DESENHADA", "BARBOTERAPIA", "TOALHA_QUENTE", "PIGMENTACAO", "COMBO") NOT NULL,  
    dataAgenda DATE NOT NULL,
    horaAgenda TIME NOT NULL,
    estado ENUM('AGENDADO', 'FINALIZADO') NOT NULL DEFAULT 'AGENDADO',
    UNIQUE KEY(dataAgenda, horaAgenda),
    CONSTRAINT cdUsuario_FK2 FOREIGN KEY (cdUsuario) REFERENCES logins(cdUsuario),
    CONSTRAINT tipoServico_FK FOREIGN KEY (tipoServico) REFERENCES servicos(tipoServico));

INSERT INTO agendas (cdUsuario, tipoServico, dataAgenda, horaAgenda) VALUES 
    ("carlos.eduardo", "NAVALHA", DATE "2022-02-13", TIME "15:30"),
    ("carlos.eduardo", "BARBOTERAPIA", DATE "2022-05-20", TIME "16:00"),
    ("fernando.rodrigues", 'DESENHADA', DATE "2022-05-22", TIME "14:00");

CREATE TABLE feedback(
    idAvaliacao int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idAgenda INT NOT NULL,
    cdUsuario VARCHAR(50) NOT NULL,
    dsAvaliacao varchar(4000),
    CONSTRAINT idAgenda_FK FOREIGN KEY (idAgenda) REFERENCES agendas(idAgenda),
    CONSTRAINT cdUsuario_FK3 FOREIGN KEY (cdUsuario) REFERENCES logins(cdUsuario));

INSERT INTO feedback (idAgenda, cdUsuario, dsAvaliacao) VALUES 
    (1, 'carlos.eduardo', 'Ótimo atendimento, pessoal muito prestativo!'),
    (2, 'carlos.eduardo', 'Não conhecia a barboterapia, mas depois de uma indicação de um amigo e esse pessoal foi uma experiência incrível!');