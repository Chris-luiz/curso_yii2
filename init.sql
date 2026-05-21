CREATE TABLE IF NOT EXISTS pessoa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    idade INT,
    cidade VARCHAR(50) DEFAULT 'Manaus'
);

INSERT INTO pessoa (nome, email, idade, cidade) VALUES 
('Christian Luiz', 'christian@email.com', 25, 'Manaus'),
('Ana Silva', 'ana.silva@email.com', 30, 'Itacoatiara'),
('Bruno Costa', 'bruno@email.com', 22, 'Manacapuru'),
('Carla Souza', 'carla@email.com', 28, 'Manaus'),
('Diego Lima', 'diego@email.com', 35, 'Parintins'),
('Elena Rosa', 'elena@email.com', 27, 'Manaus'),
('Fabio Santos', 'fabio@email.com', 40, 'Coari'),
('Gisele Melo', 'gisele@email.com', 19, 'Manaus'),
('Hugo Vieira', 'hugo@email.com', 31, 'Tefé'),
('Iris Neves', 'iris@email.com', 24, 'Manaus');