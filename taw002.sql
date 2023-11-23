create database taw002;

use taw002;

create table usuarios
(
	login char (100) not null primary key,
	pass char(10) not null,
	nombre char(100),
	apellidos char(100),
	fechaNac date,
	privilegio char(1) not null,
	donde char(255),
	email char (255) not null
);

create table pedidos
(
	id_pex int unsigned not null auto_increment primary key,
	login char(100) not null,
	fecha_hora datetime,
	coste_total float(7,2) not null
);

create table productos
(
	id_prod int unsigned not null auto_increment primary key,
	titulo char(100) not null,
	descrip text not null,
	categoria char(100) not null,
	precio float(5,2) not null,
	imagen char(100) not null 

);

create table pedido_productos
(
	id_prod int unsigned not null,
	id_pex int unsigned not null,
	cantidad tinyint unsigned,
	
	primary key (id_prod, id_pex)
);
