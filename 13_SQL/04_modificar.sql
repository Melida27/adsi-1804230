#Modificar
UPDATE pokemons
SET trainer_id = 4
WHERE id IN (15, 17, 19);

UPDATE pokemons
SET trainer_id = 5
WHERE id >= 12 AND id <= 14;

UPDATE trainers
SET name = "Brock", level = 5
WHERE id = 3;