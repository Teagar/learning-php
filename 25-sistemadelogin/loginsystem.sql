CREATE DATABASE IF NOT EXISTS loginsystem; 
USE loginsystem;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  login VARCHAR(255),
  password VARCHAR(32)
);

INSERT INTO users (name, login, password ) VALUES (
  "Thiago Cerqueira",
  "admin",
  MD5("teste12")
);
