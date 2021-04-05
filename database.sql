use heroku_a8ca269478ee9f2;

create table user (
	email Varchar(64) Not Null UNIQUE,
    password Varchar(16) Not null,
    access int DEFAULT '0',
    userID int AUTO_INCREMENT,
    Primary Key (userID)
);

create table events (
	eventID int Not Null AUTO_INCREMENT,
	eventName Varchar(64) Not Null,
    eventStartTime datetime Not Null,
    eventEndTime datetime Not Null,
    eventCreatorEmail Varchar(64) Not Null,
    eventDescription varchar(200) Not Null,
    eventParticipants int Not Null,
    Primary Key (eventID)
    );
    
create table guests (
	guestID int Not Null AUTO_INCREMENT,
	guestEmail varchar(64) Not Null,
    guestFirstName varchar(45) Not Null,
    guestLastName varchar(45) Not Null,
    isAttending bit Not Null,
    guestComment varchar(200) Not Null,
	Primary Key (guestID)
);


create table preferences(
    preferencesID int Not Null AUTO_INCREMENT,
    background varchar(64) Not Null,
    fontColor varchar(64) Not Null,
    image varchar(64) Not Null,
    Primary Key(preferencesID)
);

create table questions (
    questionID int Not Null AUTO_INCREMENT,
    questionEmail varchar(64) Not Null,
    questionAsk varchar(200) Not Null,
    questionAnswer varchar(200) Not Null,
    Primary Key (questionID)
);

insert into user (email, password, access)
values ("admin@admin.com", "Pa$$w0rd", "1");
insert into user (email, password)
values ("test@test.com", "Pa$$w0rd");

select * from user;
DELETE FROM user WHERE access='1'
