use modeldb;

create table Models 
(
	ModelId int primary key auto_increment,
    ModelName varchar(30) not null,
    ModelSurname varchar(30),
    ModelEmail varchar(30),
    ModelPhoneNumber varchar(30),
    ModelCountry varchar(30),
    ModelCity varchar(30)
);


create table ModelParametrs 
(	
	ParametrId int primary key auto_increment,
    ModelId int,
	ModelBirthday date,
    ModelAge int,
    ModelHeight int,
    ModelWeight int,
    ModelEyeColor varchar(20),
    ModelHairColor varchar(20),
    ModelFaceType varchar(20),
    ModelType set('dancer','actor','model','musician'),
    ModelIsTatto bool,
    ModelIsProfessional bool,
    ModelDescription text,
    foreign key (ModelId) references Models (ModelId)
);

create table Projects(
	ProjectId int primary key auto_increment,
    ProjectName varchar(100),
    ProjectDescription text,
    ProjectLinks text
);

create table ModelsProjects
(
	ModelId int,
    Projectid int,
	foreign key (ModelId) references Models(ModelId),
    foreign key (ProjectId) references Projects(ProjectId)
);

create table Users(
	UserId int primary key auto_increment, 
    UserName varchar(50) not null,
    UserEmail varchar(50) not null,
    UserPassword varchar(50) not null,
    UserRole enum('user','admin','model','project_manager') not null
);







