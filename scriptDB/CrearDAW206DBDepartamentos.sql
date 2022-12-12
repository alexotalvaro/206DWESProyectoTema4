
/**
 * Author:  Alejandro Otalvaro
 * Created: 3 nov 2022
 */

/*CREACION DE LA BASE DE DATOS*/
create database if not exists DAW206DBDepartamentos; 

/*CREACION DEL USUARIO*/
create user if not exists 'usuarioDAW206DBDepartamentos' identified by 'paso';

/*OTORGAR PRIVILEGIOS*/
GRANT ALL PRIVILEGES ON DAW206DBDepartamentos.* TO 'usuarioDAW206DBDepartamentos'@'%'; 
flush privileges ;


use DAW206DBDepartamentos;

/*CREACION DE LA TABLA CON SUS RESPECTIVOS CAMPOS*/
create table if not exists Departamento (
  CodDepartamento varchar(3) Primary key,
  DescDepartamento varchar (255),
  fechaAlta timestamp(6),
  fechaBaja timestamp(6) NULL,
  volumenNegocio float);

