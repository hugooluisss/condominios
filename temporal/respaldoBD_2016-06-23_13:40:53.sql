set SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE `area` (
  `idArea` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `incisos` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
insert into area('idArea', 'nombre', 'incisos') values ('3', 'Alberca', '12');
insert into area('idArea', 'nombre', 'incisos') values ('4', 'Asadores', '32');
insert into area('idArea', 'nombre', 'incisos') values ('5', 'Canchas', '1');
CREATE TABLE `configuracion` (
  `clave` char(20) NOT NULL,
  `valor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
insert into configuracion('clave', 'valor') values ('costoMantenimiento', '300');
CREATE TABLE `departamento` (
  `idDepartamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(10) DEFAULT NULL,
  `condominio` varchar(10) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL,
  `inquilino` varchar(100) DEFAULT NULL,
  `correo` varchar(250) DEFAULT NULL,
  `referencia` char(2) DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`),
  UNIQUE KEY `codigo_UNIQUE` (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
insert into departamento('idDepartamento', 'clave', 'condominio', 'ubicacion', 'inquilino', 'correo', 'referencia') values ('4', '001', '001', 'Enfrente de las canchas de futbol', 'Hugo Luis Santiago Altamirano', 'hugooluisss@gmail.com', '2');
CREATE TABLE `estado` (
  `idEstado` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `color` char(7) DEFAULT NULL,
  `termino` char(1) DEFAULT 'N' COMMENT 'Indica si este es un estado de termino, es decir, que después de este no puede seguir otro estado',
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
insert into estado('idEstado', 'nombre', 'color', 'termino') values ('1', 'Registrada', '#00ff53', 'N');
insert into estado('idEstado', 'nombre', 'color', 'termino') values ('2', 'Autorizada', '#0069ff', 'N');
insert into estado('idEstado', 'nombre', 'color', 'termino') values ('3', 'No autorizada', '#ff0000', 'S');
insert into estado('idEstado', 'nombre', 'color', 'termino') values ('4', 'Pagada', '#d7db4b', 'S');
CREATE TABLE `infraccion` (
  `idInfraccion` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idDepartamento` int(10) unsigned NOT NULL,
  `idEstado` smallint(5) unsigned NOT NULL,
  `idUsuario` bigint(20) unsigned NOT NULL,
  `idArea` int(10) unsigned NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `servidor` smallint(5) unsigned DEFAULT NULL,
  `camara` smallint(5) unsigned DEFAULT NULL,
  `descripcion` text,
  `inciso` char(10) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT '0.00',
  `ocasion` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`idInfraccion`),
  KEY `i_departamento` (`idDepartamento`),
  KEY `i_estado` (`idEstado`),
  KEY `i_usuario` (`idUsuario`),
  KEY `i_area` (`idArea`),
  CONSTRAINT `fk_areainfraccion` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_departamentoinfraccion` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_estadoinfraccion` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_estadousuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
insert into infraccion('idInfraccion', 'idDepartamento', 'idEstado', 'idUsuario', 'idArea', 'fecha', 'hora', 'servidor', 'camara', 'descripcion', 'inciso', 'monto', 'ocasion') values ('12', '4', '2', '1', '4', '2016-06-20', '12:48:00', '1', '5', 'Prueba de la primera infracción', '1', '150.00', '2');
insert into infraccion('idInfraccion', 'idDepartamento', 'idEstado', 'idUsuario', 'idArea', 'fecha', 'hora', 'servidor', 'camara', 'descripcion', 'inciso', 'monto', 'ocasion') values ('13', '4', '2', '1', '4', '2016-06-20', '13:09:00', '1', '1', 'Segunda prueba', '1', '30.00', '1');
insert into infraccion('idInfraccion', 'idDepartamento', 'idEstado', 'idUsuario', 'idArea', 'fecha', 'hora', 'servidor', 'camara', 'descripcion', 'inciso', 'monto', 'ocasion') values ('14', '4', '1', '1', '4', '2016-06-20', '21:58:00', '2', '2', 'Esta es la tercer prueba', 'C', '30.00', '1');
insert into infraccion('idInfraccion', 'idDepartamento', 'idEstado', 'idUsuario', 'idArea', 'fecha', 'hora', 'servidor', 'camara', 'descripcion', 'inciso', 'monto', 'ocasion') values ('15', '4', '1', '1', '3', '2016-06-21', '09:57:00', '1', '3', 'Esta es la pruena del 2016-06-21', 'D', '30.00', '1');
insert into infraccion('idInfraccion', 'idDepartamento', 'idEstado', 'idUsuario', 'idArea', 'fecha', 'hora', 'servidor', 'camara', 'descripcion', 'inciso', 'monto', 'ocasion') values ('16', '4', '2', '1', '4', '2016-06-21', '13:21:00', '3', '1', 'asdfasdfasdf asdfasdfasd sdaf', '2', '30.00', '1');
insert into infraccion('idInfraccion', 'idDepartamento', 'idEstado', 'idUsuario', 'idArea', 'fecha', 'hora', 'servidor', 'camara', 'descripcion', 'inciso', 'monto', 'ocasion') values ('17', '4', '2', '1', '3', '2016-06-21', '13:39:00', '2', '2', 'asdf asdf asdf ', '2', '30.00', '1');
insert into infraccion('idInfraccion', 'idDepartamento', 'idEstado', 'idUsuario', 'idArea', 'fecha', 'hora', 'servidor', 'camara', 'descripcion', 'inciso', 'monto', 'ocasion') values ('18', '4', '2', '1', '3', '2016-06-21', '21:50:00', '1', '1', 'asdf', '1', '30.00', '1');
CREATE TABLE `tipoUsuario` (
  `idTipoUsuario` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
insert into tipoUsuario('idTipoUsuario', 'nombre') values ('1', 'Administrador');
insert into tipoUsuario('idTipoUsuario', 'nombre') values ('2', 'Gerente');
insert into tipoUsuario('idTipoUsuario', 'nombre') values ('3', 'Capturista');
insert into tipoUsuario('idTipoUsuario', 'nombre') values ('4', 'Contabilidad');
CREATE TABLE `usuario` (
  `idUsuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idTipo` tinyint(3) unsigned DEFAULT NULL,
  `app` varchar(45) DEFAULT NULL,
  `apm` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `usuarioTipo` (`idTipo`),
  CONSTRAINT `fk_usuarioTipo` FOREIGN KEY (`idTipo`) REFERENCES `tipoUsuario` (`idTipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
insert into usuario('idUsuario', 'idTipo', 'app', 'apm', 'nombre', 'email', 'pass') values ('1', '1', 'Santiago', 'Altamirano', 'Hugo Luis', 'hugooluisss@gmail.com', 'k0rgk0rg');
insert into usuario('idUsuario', 'idTipo', 'app', 'apm', 'nombre', 'email', 'pass') values ('2', '2', 'gerente', 'gerente', 'Gerente', 'gerente@gerente.com', 'k0rgk0rg');
