#Eliminar
DELETE FROM trainers
WHERE id = 5;

#Eliminar todos los registrs de una tabla
DELETE * FROM trainers;

#Vaciar tabla
TRUNCATE trainers;

#Transacciones
#Iniciar Transacción
BEGIN;

#Realizar cambios
DELETE FROM trainers
WHERE id > 2;

#Los cambios son permanentes
#COMMIT;

#Devolver los cambios
ROLLBACK;