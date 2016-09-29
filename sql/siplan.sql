use siplan2017;

CREATE TABLE `configuracion` (
  `id_conf` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la configuracion',
  `valor` varchar(16) COLLATE utf8_spanish_ci NOT NULL COMMENT 'valor de la configuración',
  `descripcion` varchar(128) COLLATE utf8_spanish_ci NOT NULL COMMENT 'descripcion de la configuración',
  PRIMARY KEY (`id_conf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Configuración del SIPLAN';


CREATE TABLE `eventos` (
  `id_evento` smallint(6) NOT NULL AUTO_INCREMENT,
  `evento` varchar(128) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

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




CREATE TABLE `sectores` (
  `id_sector` tinyint(11) NOT NULL,
  `sector` varchar(45) NOT NULL,
  PRIMARY KEY (`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `ejes` (
  `id_eje` tinyint(4) NOT NULL AUTO_INCREMENT,
  `eje` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id_eje`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Eje';

CREATE TABLE `lineas` (
  `id_linea` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_eje` tinyint(4) NOT NULL,
  `linea` varchar(128) NOT NULL,
  PRIMARY KEY (`id_linea`),
  KEY `eje_linea_idx` (`id_eje`),
  CONSTRAINT `eje_linea` FOREIGN KEY (`id_eje`) REFERENCES `ejes` (`id_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `estrategias` (
  `id_estrategia` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_linea` tinyint(4) NOT NULL,
  `id_eje` tinyint(4) NOT NULL,
  `estrategia` text NOT NULL,
  PRIMARY KEY (`id_estrategia`),
  KEY `estrategia_linea_idx` (`id_linea`),
  KEY `estrategia_eje_idx` (`id_eje`),
  CONSTRAINT `estrategia_eje` FOREIGN KEY (`id_eje`) REFERENCES `ejes` (`id_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `estrategia_linea` FOREIGN KEY (`id_linea`) REFERENCES `lineas` (`id_linea`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `finalidad` (
  `id_finalidad` tinyint(4) NOT NULL AUTO_INCREMENT,
  `finalidad` varchar(254) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_finalidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `funcion` (
  `id_funcion` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_finalidad` tinyint(4) NOT NULL,
  `id_funf` tinyint(4) NOT NULL,
  `funcion` varchar(254) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_funcion`),
  KEY `funcion_finalidad_idx` (`id_finalidad`),
  KEY `subfuncion_funcion` (`id_funf`),
  CONSTRAINT `funcion_finalidad` FOREIGN KEY (`id_finalidad`) REFERENCES `finalidad` (`id_finalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `subfuncion` (
  `id_subfuncion` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_finalidad` tinyint(4) NOT NULL,
  `id_funcion_f` tinyint(4) NOT NULL,
  `id_subf` tinyint(4) NOT NULL,
  `subfuncion` varchar(254) NOT NULL,
  PRIMARY KEY (`id_subfuncion`),
  KEY `sub_fin_idx` (`id_finalidad`),
  CONSTRAINT `sub_fin` FOREIGN KEY (`id_finalidad`) REFERENCES `finalidad` (`id_finalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `pnd_ejes` (
  `id_pnd_eje` tinyint(4) NOT NULL AUTO_INCREMENT,
  `pnd_eje` varchar(64) NOT NULL,
  PRIMARY KEY (`id_pnd_eje`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `pnd_objetivos` (
  `id_pnd_objetivo` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_pnd_eje` tinyint(4) NOT NULL,
  `pnd_objetivo` varchar(254) NOT NULL,
  PRIMARY KEY (`id_pnd_objetivo`),
  KEY `pnd_obj_eje_idx` (`id_pnd_eje`),
  CONSTRAINT `pnd_obj_eje` FOREIGN KEY (`id_pnd_eje`) REFERENCES `pnd_ejes` (`id_pnd_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `pnd_estrategias` (
  `id_pnd_estrategia` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_pnd_objetivo` tinyint(4) NOT NULL,
  `id_pnd_eje` tinyint(4) NOT NULL,
  `pnd_estrategia` text NOT NULL,
  PRIMARY KEY (`id_pnd_estrategia`),
  KEY `pnd_estrategia_obj_idx` (`id_pnd_objetivo`),
  KEY `pnd_estrategia_eje_idx` (`id_pnd_eje`),
  CONSTRAINT `pnd_estrategia_eje` FOREIGN KEY (`id_pnd_eje`) REFERENCES `pnd_ejes` (`id_pnd_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pnd_estrategia_obj` FOREIGN KEY (`id_pnd_objetivo`) REFERENCES `pnd_objetivos` (`id_pnd_objetivo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pnd_lineas_accion` (
  `id_pnd_linea_accion` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_pnd_estrategia` smallint(6) NOT NULL,
  `id_pnd_objetivo` tinyint(4) NOT NULL,
  `id_pnd_eje` tinyint(4) NOT NULL,
  `linea_accion` text NOT NULL,
  PRIMARY KEY (`id_pnd_linea_accion`),
  KEY `pnd_linea_objetivo_idx` (`id_pnd_objetivo`),
  KEY `pnd_linea_eje_idx` (`id_pnd_eje`),
  KEY `pnd_linea_estrategia_idx` (`id_pnd_estrategia`),
  CONSTRAINT `pnd_linea_eje` FOREIGN KEY (`id_pnd_eje`) REFERENCES `pnd_ejes` (`id_pnd_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pnd_linea_estrategia` FOREIGN KEY (`id_pnd_estrategia`) REFERENCES `pnd_estrategias` (`id_pnd_estrategia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pnd_linea_objetivo` FOREIGN KEY (`id_pnd_objetivo`) REFERENCES `pnd_objetivos` (`id_pnd_objetivo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`id_dependencia`),
  CONSTRAINT `id_dependencia` FOREIGN KEY (`id_dependencia`) REFERENCES `dependencias` (`id_dependencia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `perfiles` (
  `id_perfil` tinyint(4) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(32) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `clasificaciones` (
  `id_clasificacion` tinyint(4) NOT NULL AUTO_INCREMENT,
  `clasificacion` varchar(64) NOT NULL,
  PRIMARY KEY (`id_clasificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `sector_poblacional` (
  `id_sec_pob` tinyint(4) NOT NULL AUTO_INCREMENT,
  `sector_poblacional` varchar(64) NOT NULL,
  PRIMARY KEY (`id_sec_pob`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `prog_presupuestarios` (
  `id_prog_pres` tinyint(4) NOT NULL AUTO_INCREMENT,
  `clave` varchar(4) NOT NULL,
  `descripcion` varchar(128) NOT NULL,
  PRIMARY KEY (`id_prog_pres`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE `proyectos` (
  `id_proyecto` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_dependencia` smallint(6) NOT NULL,
  `id_eje` tinyint(4) NOT NULL,
  `id_linea` tinyint(4) NOT NULL,
  `id_estrategia` smallint(6) NOT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '0',
  `grado` varchar(4) DEFAULT 'n.a.',
  `num_proyecto` tinyint(4) NOT NULL,
  `nombre` text NOT NULL,
  `clasificacion` tinyint(4) DEFAULT NULL,
  `inversion` varchar(16) DEFAULT NULL,
  `ponderacion` tinyint(4) NOT NULL DEFAULT '1',
  `unidad_medida` varchar(128) DEFAULT NULL,
  `cantidad` varchar(16) NOT NULL DEFAULT '0',
  `prog_sem` varchar(16) DEFAULT NULL,
  `sector_poblacion` tinyint(4) DEFAULT NULL,
  `beneficiarios_h` int(11) DEFAULT NULL,
  `beneficiarios_m` int(11) DEFAULT NULL,
  `justificacion` text,
  `finalidad` tinyint(4) DEFAULT NULL,
  `funcion` tinyint(4) DEFAULT NULL,
  `subfuncion` smallint(6) DEFAULT NULL,
  `proposito` text,
  `observaciones` text,
  `uresponsable` varchar(128) DEFAULT NULL,
  `titular` varchar(128) DEFAULT NULL,
  `objetivo` text,
  `pnd_eje` tinyint(4) DEFAULT NULL,
  `pnd_objetivo` tinyint(4) DEFAULT NULL,
  `pnd_estrategia` smallint(6) DEFAULT NULL,
  `pnd_linea` smallint(6) DEFAULT NULL,
  `prog_pres` tinyint(4) DEFAULT NULL,
  `ejercicio` varchar(4) NOT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `proy_dep_idx` (`id_dependencia`),
  KEY `proy_eje_idx` (`id_eje`),
  KEY `proy_linea_idx` (`id_linea`),
  KEY `proy_estrategia_idx` (`id_estrategia`),
  KEY `proy_clasificacion_idx` (`clasificacion`),
  KEY `proy_sector_idx` (`sector_poblacion`),
  KEY `proy_finalidad_idx` (`finalidad`),
  KEY `proy_funcion_idx` (`funcion`),
  KEY `proy_subfuncion_idx` (`subfuncion`),
  KEY `proy_pnd_eje_idx` (`pnd_eje`),
  KEY `proy_pnd_estrategia_idx` (`pnd_estrategia`),
  KEY `proy_pnd_objetivo_idx` (`pnd_objetivo`),
  KEY `proy_pnd_linea_idx` (`pnd_linea`),
  KEY `proy_prog_pres_idx` (`prog_pres`),
  CONSTRAINT `proy_clasificacion` FOREIGN KEY (`clasificacion`) REFERENCES `clasificaciones` (`id_clasificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_dep` FOREIGN KEY (`id_dependencia`) REFERENCES `dependencias` (`id_dependencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_eje` FOREIGN KEY (`id_eje`) REFERENCES `ejes` (`id_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_estrategia` FOREIGN KEY (`id_estrategia`) REFERENCES `estrategias` (`id_estrategia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_finalidad` FOREIGN KEY (`finalidad`) REFERENCES `finalidad` (`id_finalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_funcion` FOREIGN KEY (`funcion`) REFERENCES `funcion` (`id_funcion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_linea` FOREIGN KEY (`id_linea`) REFERENCES `lineas` (`id_linea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_pnd_eje` FOREIGN KEY (`pnd_eje`) REFERENCES `pnd_ejes` (`id_pnd_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_pnd_estrategia` FOREIGN KEY (`pnd_estrategia`) REFERENCES `pnd_estrategias` (`id_pnd_estrategia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_pnd_linea` FOREIGN KEY (`pnd_linea`) REFERENCES `pnd_lineas_accion` (`id_pnd_linea_accion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_pnd_objetivo` FOREIGN KEY (`pnd_objetivo`) REFERENCES `pnd_objetivos` (`id_pnd_objetivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_prog_pres` FOREIGN KEY (`prog_pres`) REFERENCES `prog_presupuestarios` (`id_prog_pres`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_sector` FOREIGN KEY (`sector_poblacion`) REFERENCES `sector_poblacional` (`id_sec_pob`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proy_subfuncion` FOREIGN KEY (`subfuncion`) REFERENCES `subfuncion` (`id_subfuncion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `u_medida_prog01` (
  `id_unidad` smallint(6) NOT NULL AUTO_INCREMENT,
  `unidad_medida` varchar(128) NOT NULL,
  PRIMARY KEY (`id_unidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_unidad_prog01` (
  `id_tipo_unidad` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_unidad_medida` smallint(6) NOT NULL,
  `tipo_unidad` varchar(128) NOT NULL,
  PRIMARY KEY (`id_tipo_unidad`),
  KEY `tipo_umed_idx` (`id_unidad_medida`),
  CONSTRAINT `tipo_umed` FOREIGN KEY (`id_unidad_medida`) REFERENCES `u_medida_prog01` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_indicador` (
  `id_tipo_indicador` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tipo_indicador` varchar(16) NOT NULL,
  PRIMARY KEY (`id_tipo_indicador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `dimension_indicador` (
  `id_dimension_indicador` tinyint(4) NOT NULL AUTO_INCREMENT,
  `dimension_indicador` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dimension_indicador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `frecuencia_indicador` (
  `id_frecuencia` tinyint(4) NOT NULL AUTO_INCREMENT,
  `frecuencia` varchar(16) NOT NULL,
  PRIMARY KEY (`id_frecuencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `sentido_indicador` (
  `id_sentido` tinyint(4) NOT NULL AUTO_INCREMENT,
  `sentido` varchar(16) NOT NULL,
  PRIMARY KEY (`id_sentido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `indicadores_proyecto` (
  `id_proyecto` smallint(6) NOT NULL,
  `fin_objetivo` text NOT NULL,
  `fin_nombre` text NOT NULL,
  `fin_metodo` text NOT NULL,
  `fin_tipo` tinyint(4) NOT NULL,
  `fin_dimension` tinyint(4) NOT NULL,
  `fin_frecuencia` tinyint(4) NOT NULL,
  `fin_sentido` tinyint(4) NOT NULL,
  `fin_umedida` varchar(32) NOT NULL,
  `fin_meta` varchar(16) NOT NULL,
  `fin_medio_verifica` text NOT NULL,
  `fin_supuesto` text NOT NULL,
  `proposito_objetivo` text NOT NULL,
  `proposito_nombre` text NOT NULL,
  `proposito_metodo` text NOT NULL,
  `proposito_tipo` tinyint(4) NOT NULL,
  `proposito_dimension` tinyint(4) NOT NULL,
  `proposito_frecuencia` tinyint(4) NOT NULL,
  `proposito_sentido` tinyint(4) NOT NULL,
  `proposito_umedida` varchar(32) NOT NULL,
  `proposito_meta` varchar(16) NOT NULL,
  `proposito_medio_verifica` text NOT NULL,
  `proposito_supuesto` text NOT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `tipo_fin_idx` (`fin_tipo`),
  KEY `dim_fin_idx` (`fin_dimension`),
  KEY `fre_fin_idx` (`fin_frecuencia`),
  KEY `sen_fin_idx` (`fin_sentido`),
  KEY `pro_tipo_idx` (`proposito_tipo`),
  KEY `pro_fre_idx` (`proposito_frecuencia`),
  KEY `pro_dim_idx` (`proposito_dimension`),
  KEY `pro_sentido_idx` (`proposito_sentido`),
  CONSTRAINT `dim_fin` FOREIGN KEY (`fin_dimension`) REFERENCES `dimension_indicador` (`id_dimension_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fre_fin` FOREIGN KEY (`fin_frecuencia`) REFERENCES `frecuencia_indicador` (`id_frecuencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `indicador_pro` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pro_dim` FOREIGN KEY (`proposito_dimension`) REFERENCES `dimension_indicador` (`id_dimension_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pro_fre` FOREIGN KEY (`proposito_frecuencia`) REFERENCES `frecuencia_indicador` (`id_frecuencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pro_sentido` FOREIGN KEY (`proposito_sentido`) REFERENCES `sentido_indicador` (`id_sentido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pro_tipo` FOREIGN KEY (`proposito_tipo`) REFERENCES `tipo_indicador` (`id_tipo_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `sen_fin` FOREIGN KEY (`fin_sentido`) REFERENCES `sentido_indicador` (`id_sentido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tipo_fin` FOREIGN KEY (`fin_tipo`) REFERENCES `tipo_indicador` (`id_tipo_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `componentes` (
  `id_componente` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_proyecto` smallint(6) NOT NULL,
  `num_componente` tinyint(4) NOT NULL,
  `descripcion` text NOT NULL,
  `u_responsable` varchar(128) NOT NULL,
  `prog_pres` tinyint(4) NOT NULL,
  `u_medida` smallint(6) NOT NULL,
  `tipo_medida` smallint(6) NOT NULL,
  `cantidad` varchar(16) NOT NULL,
  `ponderacion` tinyint(4) NOT NULL,
  `eje` tinyint(4) NOT NULL,
  `linea` tinyint(4) NOT NULL,
  `estrategia` smallint(6) NOT NULL,
  `nombre_indicador` text NOT NULL,
  `metodo_calculo` text NOT NULL,
  `tipo_indicador` tinyint(4) NOT NULL,
  `dimension_indicador` tinyint(4) NOT NULL,
  `frecuencia_indicador` tinyint(4) NOT NULL,
  `sentido_indicador` tinyint(4) NOT NULL,
  `u_medida_indicador` varchar(32) NOT NULL,
  `meta_indicador` varchar(16) NOT NULL,
  `medio_verifica_indicador` text NOT NULL,
  `supuesto_indicador` text NOT NULL,
  PRIMARY KEY (`id_componente`),
  KEY `comp_proy_idx` (`id_proyecto`),
  KEY `comp_prog_pres_idx` (`prog_pres`),
  KEY `comp_umedida_idx` (`u_medida`),
  KEY `comp_tmedida_idx` (`tipo_medida`),
  KEY `comp_eje_idx` (`eje`),
  KEY `comp_linea_idx` (`linea`),
  KEY `comp_est_idx` (`estrategia`),
  KEY `comp_tind_idx` (`tipo_indicador`),
  KEY `comp_dind_idx` (`dimension_indicador`),
  KEY `comp_find_idx` (`frecuencia_indicador`),
  KEY `comp_sind_idx` (`sentido_indicador`),
  CONSTRAINT `comp_dind` FOREIGN KEY (`dimension_indicador`) REFERENCES `dimension_indicador` (`id_dimension_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_eje` FOREIGN KEY (`eje`) REFERENCES `ejes` (`id_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_est` FOREIGN KEY (`estrategia`) REFERENCES `estrategias` (`id_estrategia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_find` FOREIGN KEY (`frecuencia_indicador`) REFERENCES `frecuencia_indicador` (`id_frecuencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_linea` FOREIGN KEY (`linea`) REFERENCES `lineas` (`id_linea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_prog_pres` FOREIGN KEY (`prog_pres`) REFERENCES `prog_presupuestarios` (`id_prog_pres`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_proy` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_sind` FOREIGN KEY (`sentido_indicador`) REFERENCES `sentido_indicador` (`id_sentido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_tind` FOREIGN KEY (`tipo_indicador`) REFERENCES `tipo_indicador` (`id_tipo_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_tmedida` FOREIGN KEY (`tipo_medida`) REFERENCES `tipo_unidad_prog01` (`id_tipo_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_umedida` FOREIGN KEY (`u_medida`) REFERENCES `u_medida_prog01` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `actividades` (
  `id_actividad` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_componente` smallint(6) NOT NULL,
  `id_proyecto` smallint(6) NOT NULL,
  `demanda` varchar(1) NOT NULL,
  `num_actividad` tinyint(4) NOT NULL,
  `descripcion` text NOT NULL,
  `eje` tinyint(4) NOT NULL,
  `linea` tinyint(4) NOT NULL,
  `estrategia` smallint(6) NOT NULL,
  `u_medida` smallint(6) NOT NULL,
  `t_medida` smallint(6) NOT NULL,
  `cantidad` varchar(16) NOT NULL,
  `ponderacion` tinyint(4) NOT NULL,
  `enero` int(11) NOT NULL,
  `febrero` int(11) NOT NULL,
  `marzo` int(11) NOT NULL,
  `abril` int(11) NOT NULL,
  `mayo` int(11) NOT NULL,
  `junio` int(11) NOT NULL,
  `julio` int(11) NOT NULL,
  `agosto` int(11) NOT NULL,
  `septiembre` int(11) NOT NULL,
  `octubre` int(11) NOT NULL,
  `noviembre` int(11) NOT NULL,
  `diciembre` int(11) NOT NULL,
  `nombre_indicador` text NOT NULL,
  `metodo_calculo` text NOT NULL,
  `tipo_indicador` tinyint(4) NOT NULL,
  `dimension_indicador` tinyint(4) NOT NULL,
  `frecuencia_indicador` tinyint(4) NOT NULL,
  `sentido_indicador` tinyint(4) NOT NULL,
  `umedida_indicador` varchar(32) NOT NULL,
  `meta_indicador` varchar(16) NOT NULL,
  `medio_verificacion` text NOT NULL,
  `supuesto` text NOT NULL,
  PRIMARY KEY (`id_actividad`),
  KEY `actividad_componente_idx` (`id_componente`),
  KEY `act_pro_idx` (`id_proyecto`),
  KEY `act_eje_idx` (`eje`),
  KEY `act_linea_idx` (`linea`),
  KEY `act_est_idx` (`estrategia`),
  KEY `act_umed_idx` (`u_medida`),
  KEY `act_tmed_idx` (`t_medida`),
  KEY `act_indt_idx` (`tipo_indicador`),
  KEY `actindd_idx` (`dimension_indicador`),
  KEY `act_indf_idx` (`frecuencia_indicador`),
  KEY `act_inds_idx` (`sentido_indicador`),
  CONSTRAINT `act_eje` FOREIGN KEY (`eje`) REFERENCES `ejes` (`id_eje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_est` FOREIGN KEY (`estrategia`) REFERENCES `estrategias` (`id_estrategia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_indf` FOREIGN KEY (`frecuencia_indicador`) REFERENCES `frecuencia_indicador` (`id_frecuencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_inds` FOREIGN KEY (`sentido_indicador`) REFERENCES `sentido_indicador` (`id_sentido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_indt` FOREIGN KEY (`tipo_indicador`) REFERENCES `tipo_indicador` (`id_tipo_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_linea` FOREIGN KEY (`linea`) REFERENCES `lineas` (`id_linea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_pro` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_tmed` FOREIGN KEY (`t_medida`) REFERENCES `tipo_unidad_prog01` (`id_tipo_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `act_umed` FOREIGN KEY (`u_medida`) REFERENCES `tipo_unidad_prog01` (`id_tipo_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `actindd` FOREIGN KEY (`dimension_indicador`) REFERENCES `dimension_indicador` (`id_dimension_indicador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `actividad_componente` FOREIGN KEY (`id_componente`) REFERENCES `componentes` (`id_componente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

