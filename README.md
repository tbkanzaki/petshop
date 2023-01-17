PROJETO PETSHOP
Este projeto é um exercício de CRUD utilizando o PHP com MySQL.
O estudo também contempla exercitar os comandos gits e trabalhar com a ferramenta GitHub

Base de dados:

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `dogs` (
  `id` int NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `raca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `dogs` (`id`, `nome`, `raca`, `data_nascimento`) VALUES
(1, 'Phoebe', 'dachshund', '2020-03-01'),
(2, 'Harry', 'dachshund', '2019-01-01'),
(3, 'Ronnie', 'dachshund', '2022-02-01'),
(4, 'Aiko', 'shih tzu', '2019-04-01'),
(5, 'Yuki', 'rottweiler', '2017-07-01'),
(6, 'Neal', 'vira lata', '2023-08-01'),
(7, 'Veneza', 'Pastor Alemão', '2000-09-01'),
(8, 'Thor', 'Golden retriever', '2015-10-01'),
(9, 'Blitz', 'Akita', '2010-11-01'),
(10, 'Blitz 2', 'Akita 2', '2005-12-01'),
(11, 'Hulk', 'Husky siberiano', '2018-08-01'),
(12, 'Zorro', 'Fila brasileiro', '2000-03-01');

ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;



