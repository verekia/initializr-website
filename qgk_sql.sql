MYSQL -D qgk -u qgk_user -pPASSWORD 
USE qgk;
CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT,
	email  varchar(60) NOT NULL,
	ripple varchar(60) NOT NULL,
	fname varchar(60) NOT NULL,
	lname varchar(60) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE public (
	id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL AUTO_INCREMENT,
	key varchar(60) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE private (
	id int NOT NULL AUTO_INCREMENT,
	key varchar(60) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE redeem (
	id int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id)
);
