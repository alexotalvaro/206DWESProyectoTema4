
/**
 * Author:  Alejandro Otalvaro
 * Created: 3 nov 2022
 */

use dbs9174059;

/*CREACION DE LA TABLA CON SUS RESPECTIVOS CAMPOS*/
create table if not exists Departamento (
  CodDepartamento varchar(3) Primary key,
  DescDepartamento varchar (255),
  fechaAlta timestamp(6),
  fechaBaja timestamp(6),
  volumenNegocio float);

