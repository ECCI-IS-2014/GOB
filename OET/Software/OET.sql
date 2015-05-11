create table users(
id number NOT NULL,
name varchar2(255),
role varchar2(255),
email varchar2(255),
password varchar2(255),

primary key(id)
);

create table data_Types(
id number not null,
data_type_id numeric,
description varchar2(2550),
temporality VARCHAR2(255),
primary key(id)
);

create table sensors(
id number NOT NULL,
serial VARCHAR2(255),
price float,
type_ varchar2(255), 
model_ varchar2(255),
installation_date date,
removal_date date,
calibration_date date,
brand varchar2(255),
description varchar2(2550),
provider varchar2(255),
coordinate_x float,
coordinate_y float,

primary key(id)
);


create table features(
id number NOT NULL,
name varchar2(255),
sensor_id numeric,

primary key(id)
);

create table logbooks(
id number NOT NULL,
data varchar2(255),
user_id numeric,
table_name varchar2(255),
newvalue numeric, 
oldvalue numeric,
sensor_id number,

constraint PK_logbook primary key(id)
);


--select sig from siguientes where tabla = 'usuarios';

INSERT INTO usuarios (name, role, email, password) VALUES ( 'rafa', 'admin', 'da@rafa.com', 'rafa');    
--INSERT INTO usuarios (id, name, role, email, password) VALUES (usuarios_seq.nextval, 'rafa', 'admin', 'da@rafa.com', 'rafa');    

--create sequence usuarios_seq START WITH 20 INCREMENT BY 1;
create sequence sensors_seq START WITH 1 INCREMENT BY 1;
create sequence features_seq START WITH 1 INCREMENT BY 1;
create sequence logbooks_seq START WITH 1 INCREMENT BY 1;
create sequence data_types_seq START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER Data_Types_trigger
BEFORE INSERT
ON data_types
REFERENCING NEW AS NEW
FOR EACH ROW
BEGIN
SELECT data_types_seq.nextval INTO :NEW.ID FROM dual;
END;


CREATE OR REPLACE TRIGGER Logbooks_trigger
BEFORE INSERT
ON logbooks
REFERENCING NEW AS NEW
FOR EACH ROW
BEGIN
SELECT logbooks_seq.nextval INTO :NEW.ID FROM dual;
END;



CREATE OR REPLACE TRIGGER SENSORS_trigger
BEFORE INSERT
ON sensors
REFERENCING NEW AS NEW
FOR EACH ROW
BEGIN
SELECT SENSORS_SEQ.nextval INTO :NEW.ID FROM dual;
END;

CREATE OR REPLACE TRIGGER Features_trigger
BEFORE INSERT
ON features
REFERENCING NEW AS NEW
FOR EACH ROW
BEGIN
SELECT features_seq.nextval INTO :NEW.ID FROM dual;
END;

commit;

create table features(
sensor_id number NOT NULL,
name varchar2(255),

primary key(sensor_id)
);

select * from sensors;