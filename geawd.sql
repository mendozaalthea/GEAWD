CREATE DATABASE geawd;

USE geawd;

CREATE TABLE admin(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50),

password VARCHAR(50)

);

INSERT INTO admin(username,password)

VALUES('admin','admin123');

CREATE TABLE announcements(

id INT AUTO_INCREMENT PRIMARY KEY,

title VARCHAR(255),

message TEXT,

date_posted VARCHAR(100)

);

CREATE TABLE messages(

id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100),

email VARCHAR(100),

subject VARCHAR(255),

message TEXT

);

CREATE TABLE downloads(

id INT AUTO_INCREMENT PRIMARY KEY,

title VARCHAR(255),

file VARCHAR(255)

);