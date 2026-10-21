CREATE DATABASE IF NOT EXISTS `practica2`;
USE `practica2`;

DROP TABLE IF EXISTS `Mascotas`;
DROP TABLE IF EXISTS `Clientes`;

CREATE TABLE `Clientes` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Estado` bit(1) NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `Mascotas` (
  `IdMascota` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Especie` varchar(100) NOT NULL,
  `Raza` varchar(100) NOT NULL,
  `Peso` decimal(18,2) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  PRIMARY KEY (`IdMascota`),
  KEY `FK_Mascotas_Clientes` (`IdCliente`),
  CONSTRAINT `FK_Mascotas_Clientes` FOREIGN KEY (`IdCliente`) REFERENCES `Clientes` (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Procedimientos almacenados de Practica 2 
--

DROP PROCEDURE IF EXISTS `spRegistrarCliente`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spRegistrarCliente`(
	pCedula 	varchar(50),
	pNombre		varchar(100),
	pCorreo		varchar(100)
)
BEGIN

	INSERT INTO Clientes(Cedula,Nombre,Correo,Estado)
	VALUES (pCedula,pNombre,pCorreo,1);

END ;;
DELIMITER ;

DROP PROCEDURE IF EXISTS `spConsultarClientes`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultarClientes`()
BEGIN

	SELECT 	IdCliente,Cedula,Nombre
	FROM	Clientes
	WHERE 	Estado = 1;
    
END ;;
DELIMITER ;

DROP PROCEDURE IF EXISTS `spRegistrarMascota`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spRegistrarMascota`(
	pNombre 	varchar(100),
	pEspecie	varchar(100),
	pRaza		varchar(100),
	pPeso		decimal(18,2),
	pIdCliente	int
)
BEGIN

	INSERT INTO Mascotas(Nombre,Especie,Raza,Peso,IdCliente)
	VALUES (pNombre,pEspecie,pRaza,pPeso,pIdCliente);

END ;;
DELIMITER ;

DROP PROCEDURE IF EXISTS `spConsultarMascotas`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultarMascotas`()
BEGIN

	SELECT 	C.Cedula,C.Nombre 'NombreCliente',M.Nombre 'NombreMascota',M.Especie,M.Peso
	FROM	Mascotas M
	INNER JOIN Clientes C ON M.IdCliente = C.IdCliente;
    
END ;;
DELIMITER ;