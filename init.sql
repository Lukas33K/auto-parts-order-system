CREATE DATABASE IF NOT EXISTS pekarnadb CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE pekarnadb;

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    items TEXT,
    pickup_date DATE,
    is_completed TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO users (username, password)
VALUES ('admin', 'REPLACE_ME_WITH_HASHED_PASSWORD');