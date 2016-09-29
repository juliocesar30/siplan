use siplan2017;
DELIMITER $$
CREATE PROCEDURE `acceso`(in u varchar(16), in c char(32))
begin
	SELECT count(*) FROM usuarios where usuario = u and clave = c;
end$$
DELIMITER ;
DELIMITER $$
CREATE PROCEDURE `actualizaMarcoEstrategico`(in d smallint,in m text,in v text, in o text, in a text, in e char(4))
begin

    update marco_estrategico
    set
    mision = m,
    vision = v,
    objetivo_estrategico = o,
    activ_sustantivas = a
    Where id_dependencia = d and ejercicio = e;

end$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `contarMarcoEstrategico`(in d smallint,in e char(4))
begin
select count(*) from marco_estrategico where id_dependencia = d and ejercicio = e;
end$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `guardar_proyecto`(
in dep smallint,
in eje tinyint,
in linea tinyint,
in estrategia smallint,
in num tinyint,
in nomb text,
in inversion double,
in pondera float,
in umedida varchar(128),
in progAnual float,
in proSem float,
in secpob tinyint,
in benh int,
in benm int,
in just text,
in fin tinyint,
in fun tinyint,
in subf smallint,
in prop text,
in obspro text,
in uresp varchar(128),
in titular varchar(128),
in obj text,
in pndeje tinyint,
in pndobj tinyint,
in pndest smallint,
in pndlin smallint,
in progpres tinyint,
in ejercicio varchar(4))
begin

   insert into proyectos (
   id_dependencia,id_eje,
   id_linea,id_estrategia,num_proyecto,nombre,inversion,ponderacion,unidad_medida,cantidad,prog_sem,
   sector_poblacion,beneficiarios_h,beneficiarios_m,justificacion,finalidad,funcion,subfuncion,proposito,observaciones,uresponsable,
   titular,objetivo,pnd_eje,pnd_objetivo,pnd_estrategia,pnd_linea,prog_pres,ejercicio)
	values
    (dep,eje,linea,estrategia,num,nomb,inversion,pondera,umedida,progAnual,proSem,secpob,benh,benm,just,fin,fun,subf,prop,obspro,uresp,titular,obj,pndeje
    ,pndobj,pndest,pndlin,progpres,ejercicio);

end$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `infoMarcoEstrategico`(in d smallint,in e char(4))
begin
select mision,vision,objetivo_estrategico,activ_sustantivas from marco_estrategico where id_dependencia = d and ejercicio = e;
end$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `infoUsuario`(in u varchar(16),in c char(32))
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
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `listarProyectos`(in d smallint,in e varchar(4))
begin

   select id_proyecto,num_proyecto,nombre,id_estrategia,ponderacion,estatus from proyectos WHERE id_dependencia = d AND ejercicio = e;

END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `registraMarcoEstrategico`(in d smallint,in m text,in v text, in o text, in a text, in e char(4))
begin
	insert into
    marco_estrategico
    (id_dependencia,
    res_poa,
    activ_sustantivas,
    mision,
    vision,
    objetivo_estrategico,
    perspec_anual,
    firmas_validacion,
    ejercicio)
    values
    (d,'n.a',a,m,v,o,'n.a','n.a',e);
end$$
DELIMITER ;
