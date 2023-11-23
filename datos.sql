use taw002; -- use nombre_de_la_BD

-- S�lo se insertan inicialmente los datos necesarios para que funcione la p�gina web, en este caso, los libros
-- Aqu� hago una inserci�n en todas las tablas, para que ve�is distintos ejemplos

insert into usuarios values
	("LauraF", "plataNo123", "Laura", "Fernandez" , "2000-10-9","A","internet, web, radio","LauraF@gmail.com"),
	("PepeG", "1234", "Pepe", "Gonzalez" , "2003-04-17","C","web, radio", "Pepe_G@gmail.uva.es");




insert into productos values
	(NULL, "Mainsplaning Decoded", "The ultimate mansplaning guide", "libro", 10.00, "mansplaining.png"),
	(NULL, "Grandpa voted for Trump", "How to deal with racists",  "libro", 12.00, "grandpaTrump.png"),
	(NULL, "Is that creepy old guy still behind us?", "When to run for the hills", "libro", 7.00, "creepyGuy.png"),
	(NULL, "The little engine that literally can`t even", "When life´s too much","libro", 9.00,"EngineThatCould.png"),
	(NULL, "Rosalia", "El mal querer","CD", 7.90,"rosalia.png"),
	(NULL, "Queen", "Greatest Hits","CD", 11.99,"queen.png"),
	(NULL, "Gata Cattana", "Banzai","CD", 14.00,"banzai.png"),
	(NULL, "Nirvana", "Nevermind","CD", 10.00,"nirvana.png"),
	(NULL, "Extremoduro", "Material Defectuoso","CD", 7.99,"extremo.png"),
	(NULL, "U2", "October","CD", 9.90,"u2.png");


