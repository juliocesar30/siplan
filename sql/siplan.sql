CREATE DATABASE  IF NOT EXISTS `siplan` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `siplan`;
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion` (
  `id_conf` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la configuracion',
  `valor` varchar(16) COLLATE utf8_spanish_ci NOT NULL COMMENT 'valor de la configuración',
  `descripcion` varchar(128) COLLATE utf8_spanish_ci NOT NULL COMMENT 'descripcion de la configuración',
  PRIMARY KEY (`id_conf`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Configuración del SIPLAN';
LOCK TABLES `configuracion` WRITE;
INSERT INTO `configuracion` VALUES (1,'1','Sistema Activo'),(2,'11-07-2016','Fecha Fin de mantenimiento'),(3,'0','Modo Elecciones');
UNLOCK TABLES;
DROP TABLE IF EXISTS `dependencias`;
CREATE TABLE `dependencias` (
  `id_dependencia` smallint(6) NOT NULL COMMENT 'Identificador de la Dependencia',
  `id_sector` tinyint(4) NOT NULL COMMENT 'Identificador del Sector al que pertenece la dependencia, relacionado con la tabla sectores',
  `nombre` varchar(128) NOT NULL COMMENT 'Nombre de la dependencia',
  `acronimo` varchar(16) NOT NULL COMMENT 'Acronimo de la dependencia',
  `nom_titular` varchar(200) NOT NULL,
  `cargo_titular` varchar(200) NOT NULL,
  PRIMARY KEY (`id_dependencia`),
  KEY `id_sector_idx` (`id_sector`),
  CONSTRAINT `id_sector` FOREIGN KEY (`id_sector`) REFERENCES `sectores` (`id_sector`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='nombre de las dependencias';
LOCK TABLES `dependencias` WRITE;
INSERT INTO `dependencias` VALUES (1,2,'Jefatura de la Oficina del Gobernador','JEFATURA','LIC. RAFAEL SESSCOSE SOTO','JEFE DE OFICINA DEL C. GOBERNADOR'),(2,1,'Secretaría General de Gobierno','SEGOB','LIC. JAIME SANTOYO CASTRO','SECRETARIO GENERAL DE GOBIERNO'),(3,2,'Secretaría de Finanzas','SEFIN','ING. FERNANDO ENRIQUE SOTO ACOSTA','SECRETARIO DE FINANZAS'),(4,2,'Secretaría de Administración','SAD','LIC. LE ROY BARRAGÁN OCAMPO','SECRETARIO DE ADMINISTRACIÓN'),(5,2,'Secretaría de la Función Pública','SFP','C.P. GUILLERMO HUIZAR CARRANZA','SECRETARIO DE LA FUNCIÓN PÚBLICA'),(6,3,'Secretaría de Economía','SEZAC','L.A.E. ADOLFO BONILLA GÓMEZ','SECRETARIO DE ECONOMÍA'),(7,3,'Secretaría del Campo','SECAMPO','LIC. ENRIQUE GUADALUPE FLORES MENDOZA','SECRETARIO DEL CAMPO'),(8,3,'Secretaría del Agua y Medio Ambiente','SAMA','M. EN I. ALMA FABIOLA RIVERA SALINAS','SECRETARÍA DEL AGUA Y MEDIO AMBIENTE'),(9,3,'Secretaría de Infraestructura','SINFRA','ARQ. JOSÉ FRANCISCO IBARGÜENGOYTIA BORREGO','SECRETARIO DE INFRAESTRUCTURA'),(10,3,'Secretaría de Turismo','SECTURZ','LIC. PEDRO INGUANZO GONZÁLEZ','SECRETARIO DE TURISMO'),(11,4,'Secretaría de Educación','SEDUZAC','LIC. MARCO VINICIO FLORES CHÁVEZ','SECRETARIO DE EDUCACIÓN'),(12,4,'Secretaría de Desarrollo Social','SEDESOL','ING. JOSÉ MA. GONZÁLEZ NAVA','SECRETARIO DE DESARROLLO SOCIAL'),(13,4,'Secretaría de la Mujer','SEMUJER','LIC. ANGÉLICA NAÑEZ RODRÍGUEZ','SECRETARIA DE LAS MUJERES'),(14,1,'Secretaría de Seguridad Pública','SSP','GRAL. JESÚS PINTO ORTÍZ','SECRETARIO DE SEGURIDAD PÚBLICA'),(15,1,'Coordinación General Jurídica','CGJ','LIC. URIEL MÁRQUEZ CRISTERNA','COORDINADOR GENERAL JURÍDICO'),(16,1,'Procuraduria General de Justicia del Estado','PGJE','LIC. ARTURO NAHLE GARCÍA','PROCURADOR GENERAL DE JUSTICIA DEL ESTADO'),(17,4,'Secretaría del Zacatecano Migrante','SEZAMI','C. LUIS RIGOBERTO CASTAÑEDA ESPINOSA','SECRETARIO DEL ZACATECANO MIGRANTE'),(61,4,'Servicios de Salud de Zacatecas','SSZ','DR. RAÚL ESTRADA DAY','DIRECTOR DE LOS SERVICIOS DE SALUD'),(62,4,'Sistema Estatal para el Desarrollo Integral de la Familia','SDIF','DR. ÁLVARO ELÍAS IBARGÜENGOYTIA','DIRECTOR GENERAL DEL SISTEMA ESTATAL DIF'),(63,4,'Junta de Protección y Conservación de Monumentos y Zonas Típicas del Estado de Zacatecas','JPCMCZT','ING. RAFAEL SÁNCHEZ PREZA','PRESIDENTE DE LA JUNTA DE PROT. Y CONS. DE MONUMENTOS COLONIALES Y ZONAS TÍPICAS DE ZAC.'),(64,4,'Instituto Zacatecano de Cultura -Ramón López Velarde-','IZC','LIC. GUSTAVO SALINAS ÍÑIGUEZ','DIRECTOR GENERAL DEL INSTITUTO ZACATECANO DE CULTURA \"RAMÓN LÓPEZ VELARDE\"'),(65,4,'Instituto Zacatecano de Educación para Adultos','IZEA','PROFR. JOSÉ MANUEL MALDONADO ROMERO','DIRECTOR GENERAL DEL INSTITUTO ZACATECANO DE EDUCACIÓN PARA ADULTOS'),(66,4,'Instituto de Cultura Física y Deporte del Estado de Zacatecas','INCUFIDEZ','LIC. MARTÍN BARRAZA LUNA','DIRECTOR DEL INSTITUTO DE CULTURA FÍSICA Y DEPORTE DEL ESTADO DE ZACATECAS'),(67,3,'Consejo Zacatecano de Ciencia. Tecnología e Innovación','COZCYT','DRA. GEMA MERCADO SÁNCHEZ','DIRECTORA GENERAL DEL CONSEJO ZACATECANO DE CIENCIA Y TECNOLOGÍA'),(70,2,'Instituto de Selección y Capacitación del Estado de Zacatecas','INSELCAP','LIC. SAMUEL MONTOYA ÁLVAREZ','DIRECTOR GENERAL DEL INSTITUTO DE SELECCIÓN Y CAPACITACIÓN'),(71,4,'Colegio de Bachilleres del Estado de Zacatecas','COBAEZ','M.C. FELIPE RAMÍREZ CHÁVEZ','DIRECTOR GENERAL DEL COBAEZ'),(72,4,'Colegio de Educación Profesional Técnica del Estado de Zacatecas','CONALEP','JOSÉ GUADALUPE INFANTE SOTO','DIRECTOR GENERAL'),(73,4,'Colegio de Estudios Científicos y Tecnológicos del Estado de Zacatecas','CECYTEZ','RENATO RODRÍGUEZ DOMÍNGUEZ','DIRECTOR GENERAL'),(74,4,'Instituto Tecnológico Superior de Jerez','ITSJ','C.P. JESÚS LIMONES HERNANDEZ','DIRECTOR GENERAL'),(75,4,'Instituto Tecnológico Superior de Loreto','ITSL','DR. SALVADOR LARA MARTÍNEZ','DIRECTOR GENERAL'),(76,4,'Instituto Tecnológico Superior de Nochistlán','ITSN','MTRO. HÉCTOR MANUEL GALINDO FLORES','DIRECTOR GENERAL'),(77,4,'Instituto Tecnológico Superior de Fresnillo','ITSF','LIC. HUGO JIMÉNEZ ÁLVAREZ','DIRECTOR GENERAL'),(78,4,'Instituto Tecnológico Superior Zacatecas Norte','ITSZN','LIC. JOSÉ MANUEL PEÑA BADILLO','DIRECTOR GENERAL'),(79,4,'Instituto Tecnológico Superior Zacatecas Occidente','ITSZO','ING. CECILIO MURILLO MURILLO','DIRECTOR GENERAL'),(80,4,'Instituto Tecnológico Superior Zacatecas - Sur','ITSZS','L.A.E. MIGUEL ÁNGEL DIAZ ACUÑA','DIRECTOR GENERAL'),(82,4,'Universidad Politécnica del Sur de Zacatecas','UPSZ','DR. JOSÉ GUADALUPE ESTRADA RODRÍGUEZ','RECTOR DE LA UNIVERSIDAD POLITÉCNICA DEL SUR DE ZACATECAS'),(83,4,'Universidad Tecnológica del Estado de Zacatecas','UTEZ','DRA. ANA MARÍA ROMO FONSECA','RECTORA DE LA UNIVERSIDAD TECNOLÓGICA DEL ESTADO DE ZACATECAS'),(84,4,'Universidad Politécnica de Zacatecas','UPZ','DR. EN C. HÉCTOR ARTEMIO ROMO MORENO','RECTOR DE LA UNIVERSIDAD POLITÉCNICA DE ZACATECAS'),(85,3,'Consejo Estatal de Desarrollo Economico','CEDEZ','LIC. FERNANDO LÓPEZ DEL BOSQUE','DIRECTOR GENERAL DEL CEDEZ'),(86,4,'Patronato Estatal de Promotores Voluntarios','VOL','C.P. EVANGELINA AVALOS VILLARREAL','SECRETARIA EJECUTIVA DEL PATRONATO ESTATAL DE PROMOTORES VOLUNTARIOS'),(87,3,'Organismo Regularizador de la Tenencia de la Tierra en Zacatecas','ORETZA','M. en D. OSCAR GABRIEL CAMPOS CAMPOS','DIRECTOR GENERAL DE ORETZA'),(88,4,'Escuela Estatal de Conservación y Restauración de Zacatecas \"Refugio Reyes\"','EECRZ','ARQ. FEDERICO CARLOS LOPEZ REVELES','DIRECTOR GENERAL');
UNLOCK TABLES;
DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `id_evento` smallint(6) NOT NULL AUTO_INCREMENT,
  `evento` varchar(128) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
LOCK TABLES `eventos` WRITE;
INSERT INTO `eventos` VALUES (1,'Acceso al Sistema');
UNLOCK TABLES;
DROP TABLE IF EXISTS `historial`;
CREATE TABLE `historial` (
  `id_historial` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_evento` smallint(6) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_usuario` smallint(6) NOT NULL,
  `ip_remota` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_historial`),
  KEY `id_usuario_idx` (`id_usuario`),
  KEY `id_evento_idx` (`id_evento`),
  CONSTRAINT `id_evento` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
LOCK TABLES `historial` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `marco_estrategico`;
CREATE TABLE `marco_estrategico` (
  `id_dependencia` smallint(6) NOT NULL DEFAULT '0',
  `res_poa` text,
  `activ_sustantivas` text,
  `mision` text,
  `vision` text,
  `objetivo_estrategico` text,
  `perspec_anual` text,
  `firmas_validacion` text,
  `ejercicio` char(4) NOT NULL,
  `completo` char(1) DEFAULT '0',
  PRIMARY KEY (`id_dependencia`),
  CONSTRAINT `id_dependencia` FOREIGN KEY (`id_dependencia`) REFERENCES `dependencias` (`id_dependencia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `marco_estrategico` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE `perfiles` (
  `id_perfil` tinyint(4) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(32) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
LOCK TABLES `perfiles` WRITE;
INSERT INTO `perfiles` VALUES (1,'Administrador'),(2,'Dependencia'),(3,'Planeación'),(4,'Evaluación'),(5,'Consulta');
UNLOCK TABLES;
DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `id_dependencia` varchar(3) NOT NULL,
  `id_eje` varchar(2) NOT NULL,
  `id_linea` smallint(6) NOT NULL,
  `id_estrategia` smallint(6) NOT NULL,
  `estatus` char(1) NOT NULL DEFAULT '0',
  `grado` tinyint(4) NOT NULL,
  `no_proyecto` smallint(6) NOT NULL,
  `nombre` text NOT NULL,
  `clasificacion` tinyint(4) DEFAULT NULL,
  `inversion` double DEFAULT NULL,
  `ponderacion` float DEFAULT NULL,
  `unidad_medida` varchar(128) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `prog_sem` float DEFAULT NULL,
  `g_vulnerable` tinyint(4) DEFAULT NULL,
  `beneficiarios_h` int(11) DEFAULT NULL,
  `beneficiarios_m` int(11) DEFAULT NULL,
  `justificacion` text,
  `finalidad` smallint(6) DEFAULT NULL,
  `funcion` mediumint(9) DEFAULT NULL,
  `subfuncion` mediumint(9) DEFAULT NULL,
  `proposito` text,
  `observaciones` text,
  `anual_pr` varchar(4) DEFAULT '2014',
  `uresponsable` varchar(128) DEFAULT NULL,
  `titular` varchar(256) DEFAULT NULL,
  `objetivo` text,
  `pnd_eje` char(1) DEFAULT NULL,
  `pnd_objetivo` char(2) DEFAULT NULL,
  `pnd_estrategia` char(3) DEFAULT NULL,
  `pnd_linea_accion` char(3) DEFAULT NULL,
  `prog_pres` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `id_dependencia` (`id_dependencia`),
  KEY `id_eje` (`id_eje`),
  KEY `id_linea` (`id_linea`),
  KEY `id_estrategia` (`id_estrategia`),
  KEY `no_proyecto` (`no_proyecto`),
  KEY `finalidad` (`finalidad`),
  KEY `funcion` (`funcion`),
  KEY `subfuncion` (`subfuncion`),
  KEY `pnd_eje` (`pnd_eje`),
  KEY `pnd_objetivo` (`pnd_objetivo`),
  KEY `pnd_estrategia` (`pnd_estrategia`),
  KEY `pnd_linea_accion` (`pnd_linea_accion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Proyectos del siplan';
LOCK TABLES `proyectos` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sectores`;
CREATE TABLE `sectores` (
  `id_sector` tinyint(11) NOT NULL,
  `sector` varchar(45) NOT NULL,
  PRIMARY KEY (`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `sectores` WRITE;
INSERT INTO `sectores` VALUES (1,'Política Interna y Seguridad'),(2,'Administración'),(3,'Desarrollo Económico'),(4,'Desarrollo Social');
UNLOCK TABLES;
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` smallint(6) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(16) NOT NULL,
  `clave` char(32) NOT NULL,
  `dependencia` smallint(6) NOT NULL,
  `perfil` tinyint(4) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `correo` varchar(128) DEFAULT NULL,
  `activo` char(1) NOT NULL DEFAULT '1',
  `avatar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `dep_idx` (`dependencia`),
  KEY `per_idx` (`perfil`),
  CONSTRAINT `dep` FOREIGN KEY (`dependencia`) REFERENCES `dependencias` (`id_dependencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `per` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
LOCK TABLES `usuarios` WRITE;
INSERT INTO `usuarios` VALUES (1,'admin','5f500739cc60ec1881e5acc279442d80',1,1,'Administrador','jose.gamboa@zacatecas.gob.mx','1','img01.png'),(2,'planeacion','7f45e9d7932f5733d4f2c7c5b53bb09c',1,2,'Planeacion','no data','1','img01.png'),(3,'evaluacion','ee5d32c60e081fee6a5dbb65fd0a1a07',1,3,'Evauador','no data','1','img01.png'),(4,'dependencia','7b4c14267e3e521277ed737b76cef564',1,4,'Dependencia','no data','1','img01.png'),(5,'consulta','e8ab33b2f6466d6a5431e805b6a4a212',1,5,'Consulta','no data','1','img01.png');
UNLOCK TABLES;
DELIMITER ;;
CREATE PROCEDURE `acceso`(in u varchar(16), in c char(32))
begin
	SELECT count(*) FROM usuarios where usuario = u and clave = c;
end ;;
DELIMITER ;
DELIMITER ;;
CREATE  PROCEDURE `infoUsuario`(in u varchar(16),in c char(32))
BEGIN
	SELECT 
u.id_usuario,
u.dependencia as id_dependencia,
u.perfil as id_perfil,
u.nombre,
u.activo, 
u.avatar,
d.acronimo as dependencia
from usuarios u
inner join dependencias d on (u.dependencia = d.id_dependencia) 
where usuario = u and clave = c;
END ;;
DELIMITER ;