CREATE TABLE `DetalleAdicional` (
	`CodDetalleAdicional` INT NOT NULL AUTO_INCREMENT,
	`CodPuestoComercial` INT NOT NULL,
	PRIMARY KEY (`CodDetalleAdicional`)
);

CREATE TABLE `PuestoComercial` (
	`CodPuestoComercial` INT NOT NULL AUTO_INCREMENT,
	`Rubro` varchar(255) NOT NULL,
	`UbicacionPuesto` varchar(255) NOT NULL,
	`AudioTienda_URL` varchar(255) NOT NULL,
	`ImagenTienda` varchar(255) NOT NULL,
	PRIMARY KEY (`CodPuestoComercial`)
);

CREATE TABLE `Beacon` (
	`CodBeacon` INT NOT NULL AUTO_INCREMENT,
	`Protocolo` varchar(255) NOT NULL,
	PRIMARY KEY (`CodBeacon`)
);

CREATE TABLE `Direccion` (
	`CodDireccion` INT NOT NULL AUTO_INCREMENT,
	`DescripcionDireccion` varchar(255) NOT NULL,
	`AudioDireccion_URL` varchar(255) NOT NULL,
	PRIMARY KEY (`CodDireccion`)
);

CREATE TABLE `Ubicacion` (
	`CodUbicacion` INT NOT NULL AUTO_INCREMENT,
	`CodDireccion` INT NOT NULL,
	`CodDetalleAdicional` INT NOT NULL,
	`CodBeacon` INT NOT NULL,
	PRIMARY KEY (`CodUbicacion`)
);

ALTER TABLE `DetalleAdicional` ADD CONSTRAINT `DetalleAdicional_fk0` FOREIGN KEY (`CodPuestoComercial`) REFERENCES `PuestoComercial`(`CodPuestoComercial`);

ALTER TABLE `Ubicacion` ADD CONSTRAINT `Ubicacion_fk0` FOREIGN KEY (`CodDireccion`) REFERENCES `Direccion`(`CodDireccion`);

ALTER TABLE `Ubicacion` ADD CONSTRAINT `Ubicacion_fk1` FOREIGN KEY (`CodDetalleAdicional`) REFERENCES `DetalleAdicional`(`CodDetalleAdicional`);

ALTER TABLE `Ubicacion` ADD CONSTRAINT `Ubicacion_fk2` FOREIGN KEY (`CodBeacon`) REFERENCES `Beacon`(`CodBeacon`);

