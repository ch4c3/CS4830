/* creating a new user on mysql*/
CREATE USER 'ch4c3'@'localhost' IDENTIFIED BY 'omitted';
/*giving administrator access to that user and giving it the option to grant privileges to other users*/
GRANT ALL PRIVILEGES ON *.* TO 'ch4c3'@'localhost' WITH GRANT OPTION;

/*Creating a database on the server*/
CREATE DATABASE CS4830;

/*Going into database*/
USE CS4830;
/* creating a table to store the pictures*/
CREATE TABLE pictures(
  photo_path VARCHAR(20) NOT NULL,
  id int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id)
);

/*Storing default images into the table*/
INSERT INTO pictures (photo_path) VALUES ('candace.jpg');
INSERT INTO pictures (photo_path) VALUES ('candace.1.jpg'),
                      ('candace2.jpg'),
                      ('candace3.jpg'),
                      ('candace4.jpg'),
                      ('candace5,jpg');
