DROP DATABASE if exists modeldb;
create database if not exists modeldb;

use modeldb;

create table models
(
	ModelId int primary key auto_increment,
    ModelName varchar(30),
    ModelSurname varchar(30),
    ModelE_mail varchar(50),
    ModelBirthDate date,
    ModelAge tinyint unsigned,
    ModelSex enum("man","woman"),
    ModelHeight smallint unsigned,
    ModelWeight smallint unsigned
);



