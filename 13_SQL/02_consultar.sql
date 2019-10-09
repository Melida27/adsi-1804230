#Consultar todos los registros:
SELECT * 
FROM pokemons;

#Consultar solo un campo:
SELECT name 
FROM pokemons;

#Consultar varios campos:
SELECT name, speed 
FROM pokemons;

#Consultar valores distintos:
SELECT DISTINCT type FROM pokemons;

#Consultar registros con un criterío específico
SELECT * 
FROM pokemons 
WHERE type = 'Agua';

SELECT * 
FROM pokemons 
WHERE type = 'Agua' OR type = 'Electrico';

SELECT * 
FROM pokemons 
WHERE type IN ('Agua','Electrico');

SELECT * 
FROM pokemons 
WHERE strength > 1000;

SELECT * 
FROM pokemons 
WHERE type <> 'Agua';

SELECT * 
FROM pokemons 
WHERE type = 'Agua' AND speed > 80;

SELECT * 
FROM pokemons 
WHERE stamina BETWEEN 200 AND 300;

#Orden Ascendente
SELECT * FROM pokemons ORDER BY strength;
SELECT * FROM pokemons ORDER BY strength ASC;

#Orden Descendente
SELECT * FROM pokemons ORDER BY strength DESC;
SELECT * FROM pokemons WHERE speed > 100 ORDER BY speed DESC;

#Limites
SELECT * 
FROM pokemons 
LIMIT 10;

SELECT * 
FROM pokemons 
LIMIT 5 
OFFSET 10;

SELECT * 
FROM pokemons 
LIMIT 10, 5;

#Buscar (LIKE)
#Mostrar resultado que inician en "A"
SELECT *
FROM pokemons
WHERE type
LIKE "A%";
#Mostrar resultado que terminan en "L"
SELECT *
FROM pokemons
WHERE type
LIKE "%l";
#Mostrar resultado que contengan "ma"
SELECT *
FROM pokemons
WHERE name
LIKE "%ma%";
#Mostrar resultado que cumple "Pikachu"
SELECT *
FROM pokemons
WHERE name
LIKE "P_k_c_u";
#Mostrar resultado que no contengan "ma"
SELECT *
FROM pokemons
WHERE name
NOT LIKE "%ma%";

#Mostrar resultados con varios valores ('IN')
SELECT *
FROM pokemons
WHERE type
IN ('Fuego', 'Electrico');

#Mostrar resultados dentro de un rango
SELECT * 
FROM pokemons 
WHERE speed
BETWEEN 90 AND 100;

#Alias
SELECT trainers.name AS "name_trainers", pokemons.name AS "name_pokemons",pokemons.type AS "type_pokemon" 
FROM pokemons, trainers 
WHERE pokemons.trainer_id = trainers.id 
ORDER BY trainers.name ASC;

SELECT trainers.name AS "name_trainers", pokemons.name AS "name_pokemons",pokemons.type AS "type_pokemon" 
FROM pokemons, trainers 
WHERE pokemons.trainer_id = trainers.id 
AND pokemons.type = "Agua" OR pokemons.type = "Fuego" 
ORDER BY trainers.name ASC;

SELECT COUNT(*) AS "numPoke" FROM pokemons WHERE trainer_id = 1;
SELECT COUNT(p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
AND t.id = 1;

SELECT t.name AS name_trainer, COUNT(p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
GROUP BY t.name;

#INNER JOIN
SELECT trainers.name AS "name_trainer", gyms.name AS "name_gym", pokemons.name AS "name_pokemon"
FROM pokemons INNER JOIN trainers
ON pokemons.trainer_id = trainers.id
INNER JOIN gyms
ON gyms.id = trainers.gym_id
ORDER BY trainers.id;

SELECT trainers.name AS "name_trainer", gyms.name AS "name_gym", COUNT(pokemons.id) AS "num_pokemons"
FROM pokemons INNER JOIN trainers
ON pokemons.trainer_id = trainers.id
INNER JOIN gyms
ON gyms.id = trainers.gym_id
GROUP BY trainers.name;

#LEFT JOIN
SELECT trainers.name AS name_trainer, gyms.name AS name_gym,
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

#RIGHT JOIN
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, pokemons.name AS name_pokemon
FROM trainers
RIGHT JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
RIGHT JOIN pokemons
ON pokemons.trainer_id = trainers.id;

#JOIN
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

#UNION
SELECT name 
FROM trainers
UNION 
SELECT name FROM gyms
UNION
SELECT name FROM pokemons

#Vistas (views)
CREATE VIEW num_pokemons AS
SELECT trainers.name AS name_trainer, gyms.name AS name_gym,
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

#Consultar vista
