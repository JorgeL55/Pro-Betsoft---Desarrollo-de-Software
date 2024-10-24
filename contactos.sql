-- Crear la base de datos
CREATE DATABASE pro_betsoft;

-- Usar la base de datos
USE pro_betsoft;

-- Crear tabla de contactos
CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);
