CREATE DATABASE Lekce12PCSWD20230117;

DROP table IF EXIST Users;
CREATE table Users(
Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
Username varchar(100) NOT NULL,
Password varchar(500) NOT NULL,
FirstName varchar(500) NOT NULL,
LastName varchar(500) NOT NULL

)

DROP TABLE IF EXIST Groups;
CREATE TABLE Groups(
    Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Name varchar(500) NOT NULL,
    CreateOn datetime NOT NULL,
    UpdatedOn datetime NULL,
    UserId int NOT NULL,
    CONSTRAINT `fk_group_users`
        FOREIGN KEY (UserId) REFERENCES Users(Id)
        ON DELETE CASCADE 
        ON UPDATE CASCADE 
);

DROP TABLE IF EXIST Items;
CREATE TABLE Items(
    Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Content varchar(5000) NOT NULL,
    Done bit NOT NULL,
    CreateOn datetime NOT NULL,
    UpdatedOn datetime NULL,
    GroupId int NOT NULL,
    CONSTRAINT `fk_group_users`
        FOREIGN KEY (GroupId) REFERENCES Groups(Id)
        ON DELETE CASCADE 
        ON UPDATE CASCADE 
);
