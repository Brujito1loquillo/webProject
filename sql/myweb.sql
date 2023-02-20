/**
 * Script que genera la base de datos entera para 
 */

/* Ver las bases de datos actuales */
show databases;

/* Consultar el contenido de myweb en el caso de existir */
/* use myweb; show tables; */

/* Recrear la base de datos */
drop database if exists `myweb`;
show databases;

create database if not exists `myweb`;
show databases;

/* Creacion de los usuarios para la web */
/* Mostrar los usuarios */
select * from mysql.user where User like "usr_%";

/* Los eliminamos si existen */
/* No va
delete from mysql.user where user like "usr_%";
delete from mysql.user where user = "usr_generic";
delete from mysql.user where user = "usr_consulta";
drop user if exists "usr_generic", "usr_consulta";
drop user if exists "usr_generic@localhost", "usr_consulta@localhost";
drop user if exists "usr_generic@localhost";
drop user if exists "usr_generic@localhost", "usr_consulta@localhost";
drop user if exists "usr_generic"@"localhost", "usr_consulta"@"localhost";
*/
drop user if exists "usr_generic"@"localhost", "usr_consulta"@"localhost";
/*
drop user if exists "usr_generic"@"localhost";
drop user if exists "usr_consulta"@"loaclhost";
*/
select * from mysql.user where User like "usr_%";


/* Crearem un usuari de consulta amb les següents dades:
Nom d'usuari: usr_consulta
Servidor: localhost
Contrasenya: 2022@Thos
i només li donarem accés a dades SELECT.*/
create user if not exists "usr_consulta"@"localhost" identified by "2022@Thos";
grant select on myweb.* to "usr_consulta"@"localhost";

/* I un usuari de treball amb les següents dades:
Nom d'usuari: usr_generic
Servidor: localhost
Contrasenya: 2022@Thos
i només li donarem accés a dades INSERT, UPDATE ...
*/
create user if not exists "usr_generic"@"localhost" identified by "2022@Thos";
grant insert, update, select on myweb.* to "usr_generic"@"localhost";

select * from mysql.user where user like "usr_%";

/* Creamos la tabla de usuarios */
use myweb;
show tables;

/* NO VA
create table `tbl_usuaris` (
	`id` int auto_increment not null,
    `email` varchar(40) not null,
    `password` varchar(60) not null,
    `tipusIdent` varchar(10) not null,
    `numeroIdent` varchar(15) not null,
    `nom` varchar(30) not null,
    `cognoms` varchar(30) not null,
    `sexe` varchar(4) not null,
    `naixement` varchar(10) character set utf8mb3 collate utf8mb3_general_ci not null,
    `adreca` varchar(100) default null,
    `codiPostal` varchar(5) default null,
    `poblacio` varchar(40) default null,
    `provincia` varchar(40) default null,
    `telefon` varchar(9) default null,
    `imatge` varchar(100) default null,
    `status` int not null default '0' comment "0:Pendent 1:Confirmat 2:Administradors",
    `navegador` varchar(50) not null,
    `plataforma` varchar(50) not null,
    `dataCreacio` timestamp not null default current_timestamp,
    `dataDarrerAcces` timestamp not null default current_timestamp on update current_timestamp
) engine=InnoDB default charset=utf8mb3;

alter table `tbl_usuaris` add primary key (`id`), add unique key (`email`);
*/

/*
CREATE TABLE `myweb`.`tml_usuaris` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE
);
*/

create table `myweb`.`tbl_usuaris` (
	`id` int not null auto_increment,
    `email` varchar(40) not null,
    `password` varchar(60) not null,
    `tipusIdent` varchar(10) not null,
    `numeroIdent` varchar(15) not null,
    `nom` varchar(30) not null,
    `cognoms` varchar(30) not null,
    `sexe` varchar(4) not null,
    `naixement` varchar(10) character set utf8mb3 collate utf8mb3_general_ci not null,
    `adreca` varchar(100) default null,
    `codiPostal` varchar(5) default null,
    `poblacio` varchar(40) default null,
    `provincia` varchar(40) default null,
    `telefon` varchar(9) default null,
    `imatge` varchar(100) default null,
    `status` int not null default '0' comment "0:Pendent 1:Confirmat 2:Administradors",
    `navegador` varchar(50) not null,
    `plataforma` varchar(50) not null,
    `dataCreacio` timestamp not null default current_timestamp,
    `dataDarrerAcces` timestamp not null default current_timestamp on update current_timestamp,
    
    primary key(`id`)
) engine=InnoDB default charset=utf8mb3;

alter table `tbl_usuaris` add unique key (`email`);

show tables;
select * from tbl_usuaris;