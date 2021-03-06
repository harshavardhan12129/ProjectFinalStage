ALTER TABLE RESOURCES DROP CONSTRAINT Resource_Type_FK  ;
ALTER TABLE RESOURCES DROP CONSTRAINT Resource_Category_FK  ;
DROP TABLE CATEGORY;
DROP TABLE RESOURCES;
DROP TABLE CONTACT_US;
DROP TABLE TYPE;
DROP TABLE USERS;


CREATE TABLE Category
  (
    Category_id        NUMBER NOT NULL ,
    Category_name      VARCHAR2 (60) NOT NULL ,
    CATEGORY_SHORT_DSC VARCHAR2 (1000) ,
    CATEGORY_DSC      LONG ,
    BANNER_IMG         VARCHAR2 (100) 
  ) ;
ALTER TABLE Category ADD CONSTRAINT Category_PK PRIMARY KEY ( Category_id ) ;


CREATE TABLE Contact_us
  (
    Id       NUMBER NOT NULL ,
    Name     Varchar2 (50),
    Email    VARCHAR2 (200) ,
    Subject  VARCHAR2 (200) ,
    Comments VARCHAR2 (2000)
  ) ;
ALTER TABLE Contact_us ADD CONSTRAINT Contact_us_PK PRIMARY KEY ( Id ) ;


CREATE TABLE RESOURCES
  (
    Resource_id         NUMBER NOT NULL ,
    Resource_name       VARCHAR2 (80) NOT NULL ,
    RESOURCE_SHORT_DSC  VARCHAR2 (1000),
    RESOURCE_DSC        LONG,
    Resource_access     VARCHAR2 (1) , -- F = Free ; P = Paid
    SOURCE              NUMBER(1), --0 = 'On Site'  1 = 'External'  
    resource_views      NUMBER ,
    RESOURCE_THUMBNAIL  BLOB,
    Category_id         NUMBER NOT NULL ,
    Type_id             NUMBER NOT NULL ,
    resource_url varchar2(200)
  ) ;
ALTER TABLE RESOURCES ADD CONSTRAINT Resource_PK PRIMARY KEY ( Resource_id ) ;


CREATE TABLE Type
  ( Type_id NUMBER NOT NULL , Type_Dsc VARCHAR2 (50)
  ) ;
ALTER TABLE Type ADD CONSTRAINT Type_PK PRIMARY KEY ( Type_id ) ;


create table users
(
  name varchar2(50) not null ,
  email varchar2(50) primary key,
  password varchar2(30) not null,
  photo blob null,
  user_id number not null UNIQUE
  
);



ALTER TABLE RESOURCES ADD CONSTRAINT Resource_Category_FK FOREIGN KEY ( Category_id ) REFERENCES Category ( Category_id ) ;

ALTER TABLE RESOURCES ADD CONSTRAINT Resource_Type_FK FOREIGN KEY ( Type_id ) REFERENCES Type ( Type_id ) ;


CREATE UNIQUE INDEX IDX_NAME_UNQ ON CATEGORY (CATEGORY_NAME ASC);
CREATE UNIQUE INDEX IDX_RES_NAME_UNQ ON RESOURCES (RESOURCE_NAME ASC);
CREATE UNIQUE INDEX IDX_DSC_UNQ ON TYPE (TYPE_DSC ASC);

DROP SEQUENCE user_seq;
CREATE SEQUENCE user_seq INCREMENT BY 1 NOCACHE NOCYCLE;

create or replace trigger insert_user_id 
before insert 
on users  
for each row
begin
  :new.user_id := user_seq.nextval;
end;
