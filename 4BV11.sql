CREATE DATABASE formulario;
USE formulario;
CREATE TABLE datos(
NomCompleto text NOT NULL,
Correo text NOT NULL,
Contraseña text NOT NULL
);
CREATE TABLE sugerencias(
Nom text NOT NULL,
Correo text NOT NULL,
Sugerencia text NOT NULL
);
INSERT INTO sugerencias VALUES('','','');