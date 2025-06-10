CREATE TABLE utenti (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50),
  cognome VARCHAR(50),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);