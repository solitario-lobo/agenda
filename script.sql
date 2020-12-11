CREATE DATABASE agencia CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;

CREATE TABLE auto(
id BIGINT NOT NULL AUTO_INCREMENT
, matricula INT NOT NULL 
, nombre VARCHAR(50) NOT NULL
, semestre ENUM('primero','tercero','quinto','septimo','noveno') NOT NULL
, edad BIGINT NOT NULL
, descripcion CHAR(30) NOT NULL
, CONSTRAINT pkAlumno PRIMARY KEY(id)
)ENGINE=InnoDB;

INSERT INTO auto(
matricula, nombre, semestre, edad, descripcion)
VALUES(
'169208','juan','2', '20','alto');

INSERT INTO auto(
matricula, nombre, semestre, edad, descripcion)
VALUES(
'169207','pedro','1', '20','alto');

INSERT INTO auto(
matricula, nombre, semestre, edad, descripcion)
VALUES(
'169206','maria','1', '20','alto');

INSERT INTO auto(
matricula, nombre, semestre, edad, descripcion)
VALUES(
'169205','maria','2', '20','baja');

INSERT INTO auto(
matricula, nombre, semestre, edad, descripcion)
VALUES(
'169204','marcos','2', '20','alto');