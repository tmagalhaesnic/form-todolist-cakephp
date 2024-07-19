CREATE DATABASE todolistcake IF NOT EXISTS 

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    concluded VARCHAR(255),
    priority INT(3)
);
