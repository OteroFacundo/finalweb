USE finalPaw;

CREATE TABLE usuarios (
    nombre varchar(15) PRIMARY KEY ,
    password varchar(15),
    nombrePersona TEXT NOT NULL,
apellido TEXT NOT NULL ,
    email varchar(35) NOT NULL,
    telefono TEXT NOT NULL,
    idRol integer(8),
    foreing key (idRol) references roles (idRol)
);
