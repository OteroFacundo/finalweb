CREATE SCHEMA finalPaw;
USE finalPaw;

CREATE TABLE usuarios (
    nombre varchar(15) PRIMARY KEY ,
    password varchar(15),
    nombrePersona TEXT NOT NULL,
apellido TEXT NOT NULL ,
    email varchar(35) NOT NULL,
    telefono TEXT NOT NULL,
    idRol integer(11),
    foreign key (idRol) references roles (idRol)
);

create table roles(
    idRol integer PRIMARY key auto_increment,
    descripcion text
);

create table eventos (
    idEvento integer(11) PRIMARY key auto_increment,
    descripcionEvento text(50)
);
USE finalpaw;
CREATE TABLE presupuesto (
  idPresupuesto integer  PRIMARY KEY auto_increment ,
    mensaje text not null,
    fechaInicio date not null,
    fechaFin date not null,
    cantidadInvitados int not null,
    estado text not null,
    nombre varchar(15),
    idEvento integer(11),
    
 FOREIGN KEY (nombre) REFERENCES usuarios(nombre),
    FOREIGN KEY (idEvento) REFERENCES eventos(idEvento)
   
);

use finalpaw;
CREATE TABLE galeriaimagenes (
  id int(15)  AUTO_INCREMENT,
  archivo varchar(20) NOT NULL,
  directorio varchar(20) NOT NULL,
  PRIMARY KEY (id)
);
