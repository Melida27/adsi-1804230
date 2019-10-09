/*# Acceder a Base de Datos en el navegador;
localhost/phpmyadmin

# Acceder a Base de Datos en la línea de comandos:
cd ../cd ../ --Salir del directorio
#Ingresar hasta el directorio
cd xampp/ cd mysql/ cd bin/ 
#Versión Mysql
mysql --version
#Iniciarlo
mysql -u root -p */

#Mostrar versión de Mysql:
SELECT version();

#Mostrar Bases de datos:
SHOW databases;

#Crear base de datos:
CREATE DATABASE adsi1804230;

#Conectar a base de datos:
CONNECT mysql;

#Usar Base de datos:
USE adsi1804230;

#Mostrar tablas:
SHOW tables;

#Crear Tabla:
CREATE TABLE pokemons (
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    type VARCHAR(32) NOT NULL,
    strength INT NOT NULL,
    stamina INT NOT NULL,
    speed INT NOT NULL,
    accuracy INT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE pokemons2 (
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    type VARCHAR(32) NOT NULL,
    strength INT NOT NULL,
    stamina INT NOT NULL,
    speed INT NOT NULL,
    accuracy INT NOT NULL,
    trainer_id INT NOT NULL,
    FOREIGN KEY(trainer_id) REFERENCES trainers(id),
    PRIMARY KEY (id)
);

CREATE TABLE trainers (
    -> id INT AUTO_INCREMENT,
    -> name VARCHAR(32) NOT NULL,
    -> level INT NOT NULL,
    -> gym_id INT NOT NULL,
    -> FOREIGN KEY(gym_id) REFERENCES gyms(id),
    -> PRIMARY KEY(id)
    -> );


CREATE TABLE types (
    -> id INT AUTO_INCREMENT,
    -> name VARCHAR(32) NOT NULL,
    -> PRIMARY KEY (id)
    -> );

#Eiminar columna
ALTER TABLE pokemons DROP COLUMN trainer_id;

#Agregar columna
ALTER TABLE pokemons ADD COLUMN trainer_id INT NOT NULL AFTER accuracy;

#Descripción tabla:
DESCRIBE pokemons;
DESCRIBE trainers;

#Insertar Registros:
INSERT INTO pokemons VALUES (DEFAULT, 'Pikachu','Electrico', 90, 80, 96, 79);
INSERT INTO pokemons VALUES (Default, 'Charmander', 'Fuego', 95, 78, 80, 82);
INSERT INTO pokemons VALUES (Default, 'Bulbasaour', 'Planta', 80, 88, 70, 75);
INSERT INTO pokemons VALUES (Default, 'Squirtle', 'Agua', 70, 90, 75, 90);
INSERT INTO pokemons VALUES (Default, 'Snorlax', 'Normal', 180, 320, 50, 180);
INSERT INTO pokemons VALUES (Default, 'Vaporeon', 'Agua', 186, 260, 90, 168);
INSERT INTO pokemons VALUES (Default, 'Lapras', 'Agua', 111, 255, 100, 168);
INSERT INTO pokemons VALUES (Default, 'Blastoise', 'Agua', 720, 158, 70, 222);
INSERT INTO pokemons VALUES (Default, 'Golem', 'Roca', 500, 160, 80, 198);
INSERT INTO pokemons VALUES (Default, 'Dragonite', 'Dragon', 900, 250, 120, 182);
INSERT INTO pokemons VALUES (Default, 'Exeggutor', 'Planta', 596, 190, 90, 232);
INSERT INTO pokemons VALUES (Default, 'Omaster', 'Roca', 1500, 140, 112, 202);
INSERT INTO pokemons VALUES (Default, 'Muk', 'Veneno', 1070, 210, 112, 180);
INSERT INTO pokemons VALUES (Default, 'Onix', 'Roca', 662, 70, 80, 90);
INSERT INTO pokemons VALUES (Default, 'Poliwag', 'Agua', 815, 80, 70, 108);
INSERT INTO pokemons VALUES (Default, 'Mankey', 'Pelea', 563, 80, 70, 122);
INSERT INTO pokemons VALUES (Default, 'Magnemite', 'Electrico', 750, 50, 40, 128);
INSERT INTO pokemons VALUES (Default, 'Pidgey', 'Normal', 818, 80, 95, 90);
INSERT INTO pokemons VALUES (Default, 'Gastly', 'Fantasma', 750, 60, 60, 82);
INSERT INTO pokemons VALUES (Default, 'Rattata', 'Normal', 810, 60, 65, 22);

INSERT INTO trainers VALUES (DEFAULT, "Ash Ketchum", 7, "Paleta");
INSERT INTO trainers VALUES (DEFAULT, "Misty", 4, "Estrella");
INSERT INTO trainers VALUES (DEFAULT, "Brok", 6, "Tierra");

#Actualizar campos
UPDATE pokemons SET trainer_id = 1 WHERE id IN(1, 2, 3, 4);
UPDATE pokemons SET trainer_id = 2 WHERE id IN(5, 7, 9, 11, 13, 15, 17, 19);
UPDATE pokemons SET trainer_id = 3 WHERE id IN(6, 8, 10, 12, 14, 16, 18, 20);

#Mostrar registros:
SELECT * FROM pokemons;
SELECT¨* FROM trainers;

#Crear copia de seguridad (Backup) de BD:
mysqldump -u root -p adsi1804230 > C:\Users\Melida\Documents\adsi-1804230\13_SQL\backup.sql

#Eliminar BD
DROP DATABASE adsi1804230;

#Recuperar copia de seguridad (Backup) de BD:
mysql -u root -p adsi1804230 < C:\Users\Melida\Documents\adsi-1804230\13_SQL\backup.sql

SELECT trainers.name AS "name_trainers", pokemons.name AS "name_pokemons", pokemons.type AS "type_pokemon" FROM pokemons, trainers WHERE pokemons.trainer_id = trainers.id;

#Insertar datos de una tabla a otra
INSERT INTO pokemons2 SELECT * FROM pokemons;