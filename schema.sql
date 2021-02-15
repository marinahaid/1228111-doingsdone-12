CREATE DATABASE doings CHARACTER SET utf8 COLLATE utf8_general_ci;
USE doings;

CREATE TABLE categories (
  id_category int (10) AUTO_INCREMENT,
category varchar(100) NOT NULL,
PRIMARY KEY (id_category),
FOREIGN KEY (id_category) REFERENCES users (id_user)
);

CREATE TABLE tasks (
  id_task INT AUTO_INCREMENT PRIMARY KEY,
  date_add DATETIME,
  status_task BOOLEAN,
  file_task CHAR(64),
  date_end DATETIME,
FOREIGN KEY (id_task) REFERENCES users (id_user),
FOREIGN KEY (id_task) REFERENCES categories (id_user),
);

CREATE TABLE users (
id_user int (10) AUTO_INCREMENT,
email varchar(50) NOT NULL,
password varchar(15) NOT NULL,
name varchar(20) NOT NULL,
PRIMARY KEY (id_user)
);
);