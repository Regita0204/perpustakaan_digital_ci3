
CREATE DATABASE IF NOT EXISTS perpus_ci3;
USE perpus_ci3;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255),
    penulis VARCHAR(255),
    penerbit VARCHAR(255),
    tahun_terbit INT
);

CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO user (username, password) VALUES ('admin', 'admin123');
