create table oet_users(
id number NOT NULL,
name varchar2(255),
role varchar2(255),
email varchar2(255),
password varchar2(255),

primary key(id)
);

create table data_Types(
id number not null,
data_type numeric,
description varchar2(2550),
temporality VARCHAR2(255),
primary key(id)
);

create table manualDatalogs(
id number not null,
data_type_id numeric,
recolection_date timestamp,
data_ numeric,
sensor_id number,
datalog numeric not null,
station_id numeric,
ID_MANUALDATALOGS NUMBER, 
primary key(id)
);

create table stations(
id number not null,
station number not null,
description varchar2(2550),
ID_STATION NUMBER,
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
data varchar2(255),
oet_user_id numeric,
table_name varchar2(255),
newvalue numeric, 
oldvalue numeric,
sensor_id number,
log_date Date,
action varchar2(255),

constraint PK_logbook primary key(id)
);

--create sequence usuarios_seq START WITH 20 INCREMENT BY 1;
create sequence sensors_seq START WITH 1 INCREMENT BY 1;
create sequence features_seq START WITH 1 INCREMENT BY 1;
create sequence logbooks_seq START WITH 1 INCREMENT BY 1;
create sequence data_types_seq START WITH 1 INCREMENT BY 1;
create sequence manualDatalogs_seq START WITH 1 INCREMENT BY 1;
create sequence stations_seq START WITH 1 INCREMENT BY 1;
create sequence oet_users_seq START WITH 1 INCREMENT BY 1;

create or replace TRIGGER stations_trigger
BEFORE INSERT
ON stations
REFERENCING NEW AS NEW
FOR EACH ROW
DECLARE valor number;
BEGIN
valor := stations_seq.nextval;
SELECT valor INTO :NEW.ID FROM dual;
SELECT valor INTO :NEW.ID_STATION FROM dual;
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
before insert or delete or update
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
  if(:new.data_type_id != :old.data_type_id) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Data Type Id',:new.data_type_id,:old.data_type_id,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.recolection_date != :old.recolection_date) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Recolection Date',:new.recolection_date,:old.recolection_date,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.data_ != :old.data_) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Id Feature',:new.data_,:old.data_,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.sensor_id != :old.sensor_id) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Sensor Id',:new.sensor_id,:old.sensor_id,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.datalog != :old.datalog) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Datalog',:new.datalog,:old.datalog,sysdate,'Manual Datalogs','UPDATE');
  end if;
  if(:new.station_id != :old.station_id) then 
    insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values ('Station Id',:new.station_id,:old.station_id,sysdate,'Manual Datalogs','UPDATE');
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
end if;
 if deleting then
   insert into Logbooks(Data_,newvalue,oldvalue,log_date,table_name,action)  values (:new.station,null,:old.station,sysdate,'Stations','DELETE');
 end if;
 end new_logbook_stations;

commit;