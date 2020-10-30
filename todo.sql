DROP DATABASE IF EXISTS todo;

CREATE DATABASE todo;

use todo;

CREATE TABLE task (
	id int PRIMARY KEY AUTO_INCREMENT,
    title varchar(255) not null,
    added timestamp DEFAULT CURRENT_TIMESTAMP,
    description text
)