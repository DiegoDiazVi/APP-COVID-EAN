-- Generado por Oracle SQL Developer Data Modeler 4.1.1.888
--   en:        2020-11-27 18:53:09 COT
--   sitio:      Oracle Database 11g
--   tipo:      Oracle Database 11g




CREATE TABLE ACTIVIDAD
  (
    idactividad           NUMBER NOT NULL ,
    actividad             VARCHAR2 (4000) NOT NULL ,
    idplan                NUMBER NOT NULL ,
    PLAN_OPERACION_idplan NUMBER NOT NULL
  ) ;
ALTER TABLE ACTIVIDAD ADD CONSTRAINT ACTIVIDAD_PK PRIMARY KEY ( idactividad ) ;


CREATE TABLE EST
  (
    idest           NUMBER NOT NULL ,
    establecimiento VARCHAR2 (4000) NOT NULL ,
    idsector        NUMBER NOT NULL ,
    SECTOR_idsector NUMBER NOT NULL
  ) ;
ALTER TABLE EST ADD CONSTRAINT EST_PK PRIMARY KEY ( idest ) ;


CREATE TABLE PERSONA
  (
    identificacion    NUMBER NOT NULL ,
    tipodocumento     NUMBER NOT NULL ,
    nombre            VARCHAR2 (4000) NOT NULL ,
    apellidopaterno   VARCHAR2 (4000) NOT NULL ,
    apellidomaterno   VARCHAR2 (4000) NOT NULL ,
    correoelectronico VARCHAR2 (4000) NOT NULL ,
    numerocelular     NUMBER NOT NULL ,
    usuario           VARCHAR2 (4000) NOT NULL ,
    contraseña        VARCHAR2 (4000) NOT NULL ,
    rol               NUMBER NOT NULL
  ) ;
ALTER TABLE PERSONA ADD CHECK ( tipodocumento IN (1, 2, 3)) ;
ALTER TABLE PERSONA ADD CHECK ( rol           IN (1, 2)) ;
ALTER TABLE PERSONA ADD CONSTRAINT PERSONA_PK PRIMARY KEY ( identificacion ) ;


CREATE TABLE PLAN_OPERACION
  (
    idplan                NUMBER NOT NULL ,
    plan                  VARCHAR2 (4000) NOT NULL ,
    idpropuesta           NUMBER NOT NULL ,
    PROPUESTA_idpropuesta NUMBER NOT NULL
  ) ;
ALTER TABLE PLAN_OPERACION ADD CONSTRAINT PLAN_OPERACION_PK PRIMARY KEY ( idplan ) ;


CREATE TABLE PROPUESTA
  (
    idpropuesta   NUMBER NOT NULL ,
    descripcion   VARCHAR2 (4000) NOT NULL ,
    tipopropuesta VARCHAR2 (4000) NOT NULL ,
    fecharegistro DATE NOT NULL ,
    estado        VARCHAR2 (4000) NOT NULL ,
    idest         NUMBER NOT NULL ,
    EST_idest     NUMBER NOT NULL
  ) ;
ALTER TABLE PROPUESTA ADD CHECK ( tipopropuesta IN ('Ambiental', 'Cultural', 'Economica', 'Social')) ;
ALTER TABLE PROPUESTA ADD CHECK ( estado        IN ('Aprobada', 'Rechazada', 'Recibida')) ;
ALTER TABLE PROPUESTA ADD CONSTRAINT PROPUESTA_PK PRIMARY KEY ( idpropuesta ) ;


CREATE TABLE SECTOR
  (
    idsector         NUMBER NOT NULL ,
    sector           VARCHAR2 (4000) NOT NULL ,
    idsececo         NUMBER NOT NULL ,
    SEC_ECO_idsececo NUMBER NOT NULL
  ) ;
ALTER TABLE SECTOR ADD CONSTRAINT SECTOR_PK PRIMARY KEY ( idsector ) ;


CREATE TABLE SEC_ECO
  (
    idsececo        NUMBER NOT NULL ,
    sectoreconomico VARCHAR2 (4000) NOT NULL
  ) ;
ALTER TABLE SEC_ECO ADD CONSTRAINT SEC_ECO_PK PRIMARY KEY ( idsececo ) ;


CREATE TABLE aportes
  (
    PERSONA_identificacion NUMBER NOT NULL ,
    PROPUESTA_idpropuesta  NUMBER NOT NULL ,
    modificacion           VARCHAR2 (4000)
  ) ;
ALTER TABLE aportes ADD CONSTRAINT aportes_PK PRIMARY KEY ( PERSONA_identificacion, PROPUESTA_idpropuesta ) ;


ALTER TABLE ACTIVIDAD ADD CONSTRAINT ACTIVIDAD_PLAN_OPERACION_FK FOREIGN KEY ( PLAN_OPERACION_idplan ) REFERENCES PLAN_OPERACION ( idplan ) ;

ALTER TABLE EST ADD CONSTRAINT EST_SECTOR_FK FOREIGN KEY ( SECTOR_idsector ) REFERENCES SECTOR ( idsector ) ;

ALTER TABLE aportes ADD CONSTRAINT FK_ASS_1 FOREIGN KEY ( PERSONA_identificacion ) REFERENCES PERSONA ( identificacion ) ;

ALTER TABLE aportes ADD CONSTRAINT FK_ASS_2 FOREIGN KEY ( PROPUESTA_idpropuesta ) REFERENCES PROPUESTA ( idpropuesta ) ;

ALTER TABLE PLAN_OPERACION ADD CONSTRAINT PLAN_OPERACION_PROPUESTA_FK FOREIGN KEY ( PROPUESTA_idpropuesta ) REFERENCES PROPUESTA ( idpropuesta ) ;

ALTER TABLE PROPUESTA ADD CONSTRAINT PROPUESTA_EST_FK FOREIGN KEY ( EST_idest ) REFERENCES EST ( idest ) ;

ALTER TABLE SECTOR ADD CONSTRAINT SECTOR_SEC_ECO_FK FOREIGN KEY ( SEC_ECO_idsececo ) REFERENCES SEC_ECO ( idsececo ) ;


-- Informe de Resumen de Oracle SQL Developer Data Modeler: 
-- 
-- CREATE TABLE                             8
-- CREATE INDEX                             0
-- ALTER TABLE                             19
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0
