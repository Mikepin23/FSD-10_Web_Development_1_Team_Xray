/*
CREATE DATABASE toytower
;
*/

USE toytower
;

CREATE TABLE Users -- Create account
(
	UserID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Username varchar(50) NOT NULL,
    UserPass varchar(50) NOT NULL,
    UserFN varchar(50) NOT NULL,
    UserLN varchar(50) NOT NULL,
    UserEmail varchar(150) NOT NULL,
    Phone varchar(10) NOT NULL,
    PostalCode varchar(7) NOT NULL
)
;

/*
CREATE TABLE Login
;
*/

CREATE TABLE Brands
(
	BrandID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    BrandName varchar(50) NOT NULL
)
;

