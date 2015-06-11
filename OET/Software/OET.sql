create table oet_users(
id number NOT NULL,
name_ varchar2(255),
role_ varchar2(255),
email varchar2(255),
password_ varchar2(255),

primary key(id)
);

create table Doc_types(
id number NOT NULL,
id_doc_types number,
description varchar2(255),

primary key(id)
);

create table Documentations(
id number NOT NULL,
doc_types_id number,
sensor_id number,
station_id number,
description varchar2(255),
upload_date date,
path varchar2(255),
doc_name varchar2(255),
id_documentations number,
type number,

primary key(id)
);

create table data_types(
  id number not null,
  NAME varchar2(255),
  SENSOR_ID number,
  TEMPORALITY varchar2(255),
  ID_DATA_TYPE number,
  primary key(id)
);

create table automaticdatalogs(
  id number not null,
  station_id number,
  recolection_date date,
  primary key(id)
);

create table valuesdatatypes(
  id number not null,
  data_type_id number,
  automaticdatalog_id number,
  data_value varchar2(255),
  primary key(id)
);

create table manualDatalogs(
id number not null,
recolection_date date,
station_id number,
temp number,
mintemp number,
maxtemp number,
relative_humidity number,
barometric_pressure number,
rainfall number,
recolector varchar2(255),
comments varchar2(255),
id_manualdatalogs number,
insertion_date date,

primary key(id)
);

create table stations(
id number not null,
station number not null,
description varchar2(2550),
ID_STATION NUMBER,
coordinate_x float,
coordinate_y float,
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
station_id number,
ID_SENSOR NUMBER,
primary key(id)
);

create table features(
id number NOT NULL,
name varchar2(255),
sensor_id numeric,
ID_FEATURE NUMBER, 
primary key(id)
);

create table logbooks(
id number NOT NULL,
data_ varchar2(255),
oet_user_id numeric,
table_name varchar2(255),
newvalue numeric, 
oldvalue numeric,
log_date Date,
action varchar2(255),

constraint PK_logbook primary key(id)
);

--create sequence usuarios_seq START WITH 20 INCREMENT BY 1;
create sequence sensors_seq START WITH 1 INCREMENT BY 1;
create sequence features_seq START WITH 1 INCREMENT BY 1;
create sequence logbooks_seq START WITH 1 INCREMENT BY 1;
create sequence DATA_TYPES_SEQ START WITH 1 INCREMENT BY 1;
create sequence automaticdatalogs_seq START WITH 1 INCREMENT BY 1;
create sequence valuesdatatypes_seq START WITH 1 INCREMENT BY 1;
create sequence manualDatalogs_seq START WITH 1 INCREMENT BY 1;
create sequence stations_seq START WITH 1 INCREMENT BY 1;
create sequence oet_users_seq START WITH 1 INCREMENT BY 1;
create sequence doc_types_seq START WITH 1 INCREMENT BY 1;
create sequence documentations_seq START WITH 1 INCREMENT BY 1;

create or replace TRIGGER documentations_trigger
BEFORE INSERT
ON documentations
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := documentations_seq.nextval;
SELECT valor INTO :NEW.ID FROM dual;
SELECT valor INTO :NEW.id_documentations FROM dual;
END;

create or replace TRIGGER doc_types_trigger
BEFORE INSERT
ON doc_types
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := doc_types_seq.nextval;
SELECT valor INTO :NEW.ID FROM dual;
SELECT valor INTO :NEW.id_doc_types FROM dual;
END;

CREATE OR REPLACE TRIGGER stations_trigger
BEFORE INSERT
ON stations
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := :NEW.ID_STATION;
SELECT valor INTO :NEW.ID FROM dual;
END;

create or replace TRIGGER manualDatalogs_trigger
BEFORE INSERT
ON manualDatalogs
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := manualDatalogs_seq.nextval;
SELECT valor INTO :NEW.ID FROM dual;
SELECT valor INTO :NEW.ID_MANUALDATALOGS FROM dual;
END;

create or replace TRIGGER DATA_TYPES_trigger
BEFORE INSERT
ON DATA_TYPES
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := DATA_TYPES_SEQ.nextval;
SELECT valor INTO :NEW.ID FROM dual;
END;

create or replace TRIGGER automaticdatalogs_trigger
BEFORE INSERT
ON automaticdatalogs
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := automaticdatalogs_seq.nextval;
SELECT valor INTO :NEW.ID FROM dual;
END;

create or replace TRIGGER valuesdatatypes_trigger
BEFORE INSERT
ON valuesdatatypes
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := valuesdatatypes_seq.nextval;
SELECT valor INTO :NEW.ID FROM dual;
END;

CREATE OR REPLACE TRIGGER Logbooks_trigger
BEFORE INSERT
ON logbooks
REFERENCING NEW AS NEW
FOR EACH ROW
BEGIN
SELECT logbooks_seq.nextval INTO :NEW.ID FROM dual;
END;

create or replace TRIGGER SENSORS_trigger
BEFORE INSERT
ON sensors
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := SENSORS_SEQ.nextval;
SELECT valor INTO :NEW.ID FROM dual;
SELECT valor INTO :NEW.ID_SENSOR FROM dual;
END;

create or replace TRIGGER Features_trigger
BEFORE INSERT
ON features
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := features_seq.nextval;
SELECT valor INTO :NEW.ID FROM dual;
SELECT valor INTO :NEW.ID_FEATURE FROM dual;
END;

CREATE OR REPLACE TRIGGER oet_users_trigger
BEFORE INSERT
ON oet_users
REFERENCING NEW AS NEW
FOR EACH ROW
BEGIN
SELECT oet_users_seq.nextval INTO :NEW.ID FROM dual;
END;

create or replace trigger new_logbook_sensors
before insert or delete or update
on sensors
REFERENCING NEW AS NEW OLD AS OLD
for each row 
begin
if inserting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.Serial,:new.serial,null,sysdate,'sensors','INSERT');
 end if;
 if updating then
  if(:new.serial != :old.serial) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Serial',:new.serial,:old.serial,sysdate,'sensors','UPDATE');
  end if;
  if(:new.price != :old.price) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Price',:new.price,:old.price,sysdate,'sensors','UPDATE');
  end if;
  if(:new.type_ != :old.type_) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Type',:new.type_,:old.type_,sysdate,'sensors','UPDATE');
  end if;
  if(:new.model_ != :old.model_) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Model',:new.model_,:old.model_,sysdate,'sensors','UPDATE');
  end if;
  if(:new.station_id != :old.station_id) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Station',:new.station_id,:old.station_id,sysdate,'sensors','UPDATE');
  end if;
  if(:new.installation_date != :old.installation_date) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Installation Date',:new.installation_date,:old.installation_date,sysdate,'sensors','UPDATE');
  end if;
  if(:new.removal_date != :old.removal_date) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Removal Date',:new.removal_date,:old.removal_date,sysdate,'sensors','UPDATE');
  end if;
  if(:new.calibration_date != :old.calibration_date) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Calibration Date',:new.calibration_date,:old.calibration_date,sysdate,'sensors','UPDATE');
  end if;
  if(:new.brand != :old.brand) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Brand',:new.brand,:old.brand,sysdate,'sensors','UPDATE');
  end if;
  if(:new.description != :old.description) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Description',:new.description,:old.description,sysdate,'sensors','UPDATE');
  end if;
  if(:new.provider != :old.provider) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Provider',:new.provider,:old.provider,sysdate,'sensors','UPDATE');
  end if;
  if(:new.coordinate_x != :old.coordinate_x) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Coordinate X',:new.coordinate_x,:old.coordinate_x,sysdate,'sensors','UPDATE');
  end if;
  if(:new.coordinate_y != :old.coordinate_y) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Coordinate Y',:new.coordinate_y,:old.coordinate_y,sysdate,'sensors','UPDATE');
  end if;
end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.Serial,null,:old.Serial,sysdate,'sensors','DELETE');
 end if;
 end new_logbook_sensors;
 
 create or replace trigger new_logbook_data_types
before insert or delete or update
on data_types
REFERENCING NEW AS NEW OLD AS OLD
for each row 
begin
if inserting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.data_type,:new.data_type,null,sysdate,'data_types','INSERT');
 end if;
 if updating then
  if(:new.data_type != :old.data_type) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Data Type',:new.data_type,:old.data_type,sysdate,'data_types','UPDATE');
  end if;
  if(:new.description != :old.description) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Description',:new.description,:old.description,sysdate,'data_types','UPDATE');
  end if;
  if(:new.temporality != :old.temporality) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Temporality',:new.temporality,:old.temporality,sysdate,'data_types','UPDATE');
  end if;
end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.data_type,null,:old.data_type,sysdate,'data_types','DELETE');
 end if;
 end new_logbook_data_types;
 
create or replace trigger new_logbook_features
before insert or delete or update
on features
REFERENCING NEW AS NEW OLD AS OLD
for each row 
begin
if inserting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.name,:new.name,null,sysdate,'Features','INSERT');
 end if;
 if updating then
  if(:new.name != :old.name) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Name',:new.name,:old.name,sysdate,'Features','UPDATE');
  end if;
  if(:new.sensor_id != :old.sensor_id) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Id Sensor',:new.sensor_id,:old.sensor_id,sysdate,'Features','UPDATE');
  end if;
  if(:new.id_feature != :old.id_feature) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Id Feature',:new.id_feature,:old.id_feature,sysdate,'Features','UPDATE');
  end if;
end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.name,null,:old.name,sysdate,'Features','DELETE');
 end if;
 end new_logbook_features;
 
create or replace trigger new_logbook_manual_datalogs
after insert or delete or update
on manualdatalogs
REFERENCING NEW AS NEW OLD AS OLD
for each row 
begin
if inserting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.ID_MANUALDATALOGS,:new.ID_MANUALDATALOGS,null,sysdate,'Manual Datalogs','INSERT');
 end if;
 if updating then
  if(:new.ID_MANUALDATALOGS != :old.ID_MANUALDATALOGS) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Id Manual Datalogs',:new.ID_MANUALDATALOGS,:old.ID_MANUALDATALOGS,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.temp != :old.temp) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Temperature',:new.temp,:old.temp,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.recolection_date != :old.recolection_date) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Recolection Date',:new.recolection_date,:old.recolection_date,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.mintemp != :old.mintemp) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Min Temperature',:new.mintemp,:old.mintemp,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.maxtemp != :old.maxtemp) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Max Temperature',:new.maxtemp,:old.maxtemp,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.relative_humidity != :old.relative_humidity) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Relative Humidity',:new.relative_humidity,:old.relative_humidity,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.station_id != :old.station_id) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Station Id',:new.station_id,:old.station_id,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.barometric_pressure != :old.barometric_pressure) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Barometric Pressure',:new.barometric_pressure,:old.barometric_pressure,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.rainfall != :old.rainfall) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Rainfall',:new.rainfall,:old.rainfall,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.recolector != :old.recolector) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Station Id',:new.recolector,:old.recolector,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.comments != :old.comments) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Comments',:new.comments,:old.comments,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.insertion_date != :old.insertion_date) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Insertion Date',:new.insertion_date,:old.insertion_date,sysdate,'Manual Datalogs','UPDATE');
  end if;
end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.ID_MANUALDATALOGS,null,:old.ID_MANUALDATALOGS,sysdate,'Manual Datalogs','DELETE');
 end if;
 end new_logbook_manual_datalogs;
 
create or replace trigger new_logbook_stations
before insert or delete or update
on stations
REFERENCING NEW AS NEW OLD AS OLD
for each row 
begin
if inserting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.station,:new.station,null,sysdate,'Stations','INSERT');
 end if;
 if updating then
  if(:new.id_station != :old.id_station) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Id Station',:new.id_station,:old.id_station,sysdate,'Stations','UPDATE');
  end if;
  if(:new.description != :old.description) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Description',:new.description,:old.description,sysdate,'Stations','UPDATE');
  end if;
  if(:new.station != :old.station) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Station',:new.station,:old.station,sysdate,'Stations','UPDATE');
  end if;
   if(:new.coordinate_x != :old.coordinate_x) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Coordinate x',:new.coordinate_x,:old.coordinate_x,sysdate,'Stations','UPDATE');
  end if;
   if(:new.coordinate_y != :old.coordinate_y) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Coordinate y',:new.coordinate_y,:old.coordinate_y,sysdate,'Stations','UPDATE');
  end if;
end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.station,null,:old.station,sysdate,'Stations','DELETE');
 end if;
 end new_logbook_stations;

 
 create or replace trigger new_logbook_documentations
after insert or delete or update
on documentations
REFERENCING NEW AS NEW OLD AS OLD
for each row 
begin
if inserting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.id_documentations,:new.id_documentations,null,sysdate,'Documentations','INSERT');
 end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:old.description,null,:old.description,sysdate,'Documentations','DELETE');
 end if;
 end new_logbook_documentations;
 
 create or replace trigger new_logbook_doc_types
after insert or delete or update
on doc_types
REFERENCING NEW AS NEW OLD AS OLD
for each row 
begin
if inserting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.description,:new.description,null,sysdate,'Doc_types','INSERT');
 end if;
 if updating then
	insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action) values ('Description',:new.description,:old.description,sysdate,'Doc_types','UPDATE');
 end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:old.description,null,:old.description,sysdate,'Doc_types','DELETE');
 end if;
 end new_logbook_doc_types;