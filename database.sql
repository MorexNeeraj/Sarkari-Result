CREATE DATABASE jobportal;
USE jobportal;

CREATE TABLE jobs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  organization VARCHAR(255),
  last_date VARCHAR(50),
  link VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);