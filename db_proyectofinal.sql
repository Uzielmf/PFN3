-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2023 at 05:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proyectofinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `dni` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `dni`, `nombre`, `correo`, `direccion`, `fecha_nacimiento`) VALUES
(1, '1234567890', 'Colin Floodgate', 'gpeaseeb@gmail.com', '901 autumn leaf circle', '2023-07-10'),
(2, '1423515143', 'emily chapellow', 'emilychap@gmail.com', '481 beilgrove lane', '2023-11-02'),
(3, '7376468363', 'Blinni Maccole', 'Blinni@gmail.com', '490 Orion lane', '2005-11-02'),
(4, '1451627257', 'Tanney Kenan', 'Tanney@gmail.com', '908 Esch vay lane', '2019-04-02'),
(5, '7457354542', 'Madlin Crips', 'Madlim@gmail.com', '123 north way', '2022-11-21'),
(6, '0980794324', 'Stweard Onreat', 'Steward@gmail.com', '324 east way', '2018-11-28'),
(7, '2459801835', 'Cassydi Usmar', 'Cassdiy@gmail.com', '0989 beach port', '2015-12-01'),
(8, '1452452352', 'Saunderson Brecons', 'Saunderson@gmail.com', '0984 Hitzie ', '2011-01-12'),
(9, '6542549980', 'Ejemplo Ejemplo', 'Ejemplo@gmail.com', '481 ejemplo lane', '2017-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `id_maestro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clases`
--

INSERT INTO `clases` (`id`, `clase`, `id_maestro`) VALUES
(1, 'Biologia', 1),
(2, 'Matematicas', NULL),
(3, 'Idiomas', 2),
(4, 'Astronomia', 7),
(5, 'Psicologia', NULL),
(6, 'Programacion', 4),
(7, 'Calculo', NULL),
(8, 'Algoritmia', 6),
(9, 'Derecho', NULL),
(10, 'Nutricion', 5),
(11, 'Confeccion', NULL),
(12, 'Photoshop', 8),
(13, 'Diseno de modas', NULL),
(14, 'Cocina', 9),
(15, 'Musica', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `id_clase` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maestros`
--

INSERT INTO `maestros` (`id`, `correo`, `nombre`, `direccion`, `fecha_nacimiento`, `id_clase`) VALUES
(1, 'Jorge@gmail.com', 'Jorge Martinez', 'arroto seco 1300', '1974-07-04', 1),
(2, 'Laura@gmail.com', 'Laura Nunez', '232 Universidad del valle', '1997-07-04', 3),
(3, 'Leslie@gmail.com', 'Leslie Mann', '60 Raven Center', '1954-01-04', 2),
(4, 'Ana@gmail.com', 'Ana Sandoval', 'Lazaro Cardenas', '1999-11-01', 5),
(5, 'Natalia@gmail.com', 'Natalia Brito', '555 Beverli hills', '1974-07-04', 7),
(6, 'Alicia@gmail.com', 'Alicia Enriquez', '789 Downtown', '1974-07-04', 11),
(7, 'Gabriela@gmail.com', 'Gabriela Orozco', '812 center', '1974-07-04', 15),
(8, 'Azul@gmail.com', 'Azul Bulova', '123 Time Squared', '1974-07-04', 12),
(9, 'Lea@gmail.com', 'Lea Fernandez', '123 Hill way', '1974-07-04', 9);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'maestro'),
(3, 'alumno');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `correo` varchar(220) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `rol_id`) VALUES
(1, 'Admin', 'admin@admin', 'admin', 1),
(2, 'Maestros', 'maestro@maestro', 'maestro', 2),
(3, 'Alumnos', 'alumno@alumno', 'alumno', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_maestro` (`id_maestro`);

--
-- Indexes for table `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_clase` (`id_clase`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id`);

--
-- Constraints for table `maestros`
--
ALTER TABLE `maestros`
  ADD CONSTRAINT `maestros_ibfk_1` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
