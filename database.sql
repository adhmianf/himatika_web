CREATE DATABASE IF NOT EXISTS db_himatika;
USE db_himatika;

CREATE TABLE kegiatan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    deskripsi TEXT
);

CREATE TABLE kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    pesan TEXT
);

INSERT INTO kegiatan (judul, deskripsi) VALUES
('Seminar Matematika', 'Pembicara dari alumni dan dosen Matematika.'),
('Pelatihan LaTeX', 'Belajar menulis dokumen ilmiah dengan LaTeX.');
