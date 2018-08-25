DROP DATABASE pets;
CREATE DATABASE pets CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE pets;

CREATE TABLE cachorros (
	cachorro_id INT PRIMARY KEY,
	nome VARCHAR(255) NOT NULL UNIQUE,
	foto VARCHAR(255) NOT NULL UNIQUE,
	brincalhao INT NOT NULL,
	peso float NOT NULL,
	agressividade INT NOT NULL,
	agilidade INT NOT NULL,
	obediencia INT NOT NULL
);

CREATE TABLE dados (
	dado_id INT PRIMARY KEY,
	sbrin int NOT NULL,
	speso float NOT NULL,
	sagre int NOT NULL,
	sagil int NOT NULL,
	sobed int NOT NULL,
	rnd int NOT NULL,
	correto int NOT NULL
);

CREATE TABLE selecionados (
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	selecionado INT NOT NULL 
);

INSERT INTO dados(dado_id, sbrin, speso, sagre, sagil, sobed, rnd, correto)
VALUES (1, 0, 0.0, 0, 0, 0, 0, 0);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (1, 'Akita', 'akita.jpg', 2, 50.0, 7, 2, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (2, 'Pit Bull', 'pitbull.jpg', 1, 27.0, 9, 8, 10);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (3, 'Poodle Toy', 'poodle.jpg', 7, 5.5, 4, 7, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (4, 'Fila Brasileiro', 'filabrasileiro.jpg', 2, 45.0, 10, 6, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (5, 'Basset Hound', 'bassethound.jpg', 1, 27.0, 1, 1, 5);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (6, 'Beagle', 'beagle.jpg', 5, 13.5, 5, 9, 1);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (7, 'Bedlington Terrier', 'bedlingtonterrier.jpg', 4, 10.5, 2, 9, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (8, 'Pastor Australiano', 'pastoraustraliano.jpg', 6, 24.0, 3, 9, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (9, 'Boxer', 'boxer.jpg', 5, 28.0, 6, 4, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (10, 'Buldogue', 'buldogue.jpg', 7, 50.0, 4, 3, 2);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (11, 'Chow Chow', 'chowchow.jpg', 1, 32.0, 10, 2, 1);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (12, 'Cocker Spaniel Americano', 'cockerspanielamericano.jpg', 6, 14.0, 3, 5, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (13, 'Collie', 'collie.jpg', 5, 34.0, 2, 1, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (14, 'Dobermann', 'dobermann.jpg', 4, 40.0, 8, 4, 10);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (15, 'Dogue Alemao', 'doguealemao.jpg', 3, 70.0, 4, 2, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (16, 'Husky Siberiano', 'huskysiberiano.jpg', 4, 27.0, 8, 6, 5);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (17, 'Old English Sheepdog', 'oldenglishsheepdog.jpg', 3, 58.0, 6, 3, 3);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (18, 'Pug', 'pug.jpg', 5, 8.0, 5, 6, 2);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (19, 'Samoiedo', 'samoiedo.jpg', 2, 26.5, 9, 3, 4);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (20, 'Sharpei', 'sharpei.jpg', 5, 21.0, 2, 3, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (21, 'Weimaraner', 'weimaraner.jpg', 6, 23.0, 7, 7, 4);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (22, 'Malute do Alaska', 'alaskanmalute.jpg', 3, 48.0, 3, 6, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (23, 'Chihuahua', 'chihuahua.jpg', 4, 2.0, 7, 8, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (24, 'Basenji', 'basenji.jpg', 3, 10.0, 6, 9, 2);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (25, 'Pastor de Shetland', 'pastorshetland.jpg', 5, 7.0, 6, 10, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (26, 'Spitz Alemao', 'spitzalemao.jpg', 6, 9.0, 2, 5, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (27, 'Maltes', 'maltes.jpg', 7, 2.5, 2, 7, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (28, 'Pastor Alemao', 'pastoralemao.jpg', 7, 42.0, 8, 4, 10);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (29, 'Golden Retriever', 'goldenretriever.jpg', 9, 34.0, 1, 4, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (30, 'Labrador', 'labrador.jpg', 8, 57.0, 3, 6, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (31, 'Dalmata', 'dalmata.jpg', 6, 58.0, 7, 6, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (32, 'Dogo Argentino', 'dogoargentino.jpg', 1, 43.0, 10, 6, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (33, 'Lhasa Apso', 'lhasaapso.jpg', 5, 6.5, 4, 4, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (34, 'Mastim Napolitano', 'mastimnapolitano.jpg', 1, 70.0, 10, 2, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (35, 'Rottweiler', 'rottweiler.jpg', 2, 50.0, 9, 2, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (36, 'Sao Bernardo', 'saobernardo.jpg', 1, 110.0, 6, 1, 3);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (37, 'Schnauzer Anao', 'schnauzeranao.jpg', 10, 6.0, 8, 10, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (38, 'Setter Irlandes Ruivo', 'setterirlandesruivo.jpg', 10, 30.0, 2, 10, 3);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (39, 'West Highland White', 'westhighlandwhite.jpg', 8, 6.0, 10, 10, 2);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (40, 'Yorkshire', 'yorkshire.jpg', 8, 3.5, 7, 9, 3);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (41, 'Border Collie', 'bordercollie.jpg', 6, 22.0, 2, 8, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (42, 'Boston Terrier', 'bostonterrier.jpg', 8, 9.0, 6, 8, 5);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (43, 'Bull Terrier', 'bullterrier.jpg', 3, 30.0, 8, 8, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (44, 'Stafford Shire Terrier', 'staffordshireterrier.jpg', 3, 23.0, 8, 8, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (45, 'Water Spaniel Irlandes', 'waterspanielirlandes.jpg', 5, 24.5, 4, 4, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (46, 'Bichon Frise', 'bichonfrise.jpg', 8, 4.5, 1, 6, 4);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (47, 'Teckel', 'teckel.jpg', 4, 4.5, 6, 7, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (48, 'Shih Tzu', 'shihtzu.jpg', 9, 6.0, 5, 7, 5);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (49, 'Pointer', 'pointer.jpg', 4, 25.0, 5, 10, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (50, 'Fox Paulistinha', 'foxpaulistinha.jpg', 8, 8.0, 2, 9, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (51, 'Leonberger', 'leonberger.jpg', 7,42.0, 5, 4, 10);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (52, 'Pinscher Miniatura', 'pinscherminiatura.jpg', 4, 4.5, 8, 8, 5);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (53, 'Fox Terrier', 'foxterrier.jpg', 4, 7.0, 6, 8, 4);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (54, 'Pastor Belga', 'pastorbelga.jpg', 2, 28.0, 6, 8, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (55, 'Smooth Collie', 'smoothcollie.jpg', 7,25.0, 4, 6, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (56, 'Kuvasz', 'kuvasz.jpg', 8, 43.0, 4, 5, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (57, 'Esquimo Americano', 'esquimoamericano.jpg', 5,4.0, 1, 8, 7);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (58, 'Jack Russel Terrier', 'jackrusselterrier.jpg', 10,7.5, 1, 8, 9);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (59, 'Pequines', 'pequines.jpg', 3,4.5, 3, 4, 6);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (60, 'King Charles Spaniel', 'kingcharlesspaniel.jpg', 4, 5.0, 3, 4, 10);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (61, 'Bernese Montanhes', 'bernesemontanhes.jpg', 3, 42.0, 6, 5, 8);

INSERT INTO cachorros(cachorro_id, nome, foto, brincalhao, peso, agressividade, agilidade,	obediencia)
VALUES (62, 'Afghan Hound', 'afghanhound.jpg', 3, 25.0, 2, 4, 8);



