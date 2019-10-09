#Modificar tabla (Agregar llave foránea)
ALTER TABLE pokemons
ADD FOREIGN KEY(trainer_id)
REFERENCES trainers(id);

#Modificar tabla (Renombrar columna)
ALTER TABLE trainers
CHANGE gym gym_id INT NOT NULL;

#Crear tabla
CREATE TABLE gyms (
id INT AUTO_INCREMENT,
name VARCHAR(32) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO gyms VALUES(DEFAULT, "Ciudad Paleta");
INSERT INTO gyms VALUES(DEFAULT, "Ciudad Celeste");
INSERT INTO gyms VALUES(DEFAULT, "Ciudad Fucsia");
INSERT INTO gyms VALUES(DEFAULT, "Ciudad Azulona");
INSERT INTO gyms VALUES(DEFAULT, "Ciudad Olivo");

#Modificar tabla (Agregar llave foránea)
ALTER TABLE trainers
ADD FOREIGN KEY(gym_id)
REFERENCES gyms(id);