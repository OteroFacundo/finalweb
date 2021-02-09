
USE finalpaw;
CREATE TABLE presupuesto (
  idPresupuesto integer  PRIMARY KEY auto_increment ,
    mensaje text not null,
    fechaInicio date not null,
    fechaFin date not null,
    cantidadInvitados int not null,
    estado text not null,
    nombre integer(8),
    idTipoEvento integer(10),
    
 FOREIGN KEY (nombre) REFERENCES usuarios(nombre),
    FOREIGN KEY (idEvento) REFERENCES eventos(idEvento)
   
);