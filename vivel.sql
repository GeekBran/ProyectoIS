-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 08:06 PM
-- Server version: 11.1.0-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) NOT NULL,
  `Imagen` varchar(100) DEFAULT NULL,
  `Texto` text NOT NULL,
  `Autor` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`id`, `Titulo`, `Imagen`, `Texto`, `Autor`) VALUES
(1, 'El dolar al día de hoy', 'imagenes/DOLAR.jpg', '¿Sabías que el dolar alcanzo su nivel más bajo desde hace 30 años?', 'Gibran Palma');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `Clave` int(11) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(40) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Numero` varchar(12) NOT NULL,
  `Pregunta` varchar(100) NOT NULL,
  PRIMARY KEY (`Clave`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `Titulo`, `Imagen`, `Texto`) VALUES
(1, 'CREACIÓN DE EMPRESAS', 'imagenes/empresa.jpg', 'Si de verdad quieres dar el paso para emprender, este es el programa ideal para ti. Te llevaremos de la mano y a través de 12 sesiones impartidas por mentores expertos que te ayudarán a construir de 0 a 100 tu modelo de negocio.'),
(2, 'MARKETING PARA EMPRENDEDORES', 'imagenes/MARKETING.jpg', '¿Eres emprendedor y te cuesta llegar a más clientes para aumentar tus ventas? ¿Haces inversiones en publicidad, pero no obtienes los resultados que buscas? Sin duda este programa te ayudará a comunicar y conectar mejor con tus clientes potenciales, generar el interés y ventas para que tu inversión en marketing sea más efectiva.'),
(3, 'FINANZAS PARA EMPRENDEDORES', 'imagenes/mobile-phone-5836879_1280.png', 'Todo emprendedor exitoso debe llevar las finanzas de su empresa en orden, es por ello que este programa está diseñado para que cualquier persona, aún sin ser especialista en finanzas, pueda comprender las finanzas de su negocio y lo más importante, ponerlas en orden para tener una empresa sana financieramente.'),
(4, 'ASESORÍAS PERSONALIZADA PARA EMPRESAS', 'imagenes/asesor-1-e1562661405109.jpg', 'Si tienes una empresa en funcionamiento y deseas dar el paso en su siguiente nivel de desarrollo, las asesorías especializadas y orientadas a tus necesidades, son la mejor opción para que puedas resolver los obstáculos actuales y generar crecimiento en tu industria.'),
(5, 'MENTORING DIRECTIVO', 'imagenes/mentoring-beneficios-1200x675.jpg', 'Toda organización requiere de tomadores de decisiones capaces y preparados para afrontar los retos que demanda el mundo actual. Este programa de Mentoring Directivo está hecho especialmente para acompañar y desarrollar a los líderes organizacionales a través de sesiones de aprendizaje significativo enfocadas en ayudarles a mejorar aspectos muy específicos que los hagan seguir su camino de crecimiento.');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` varchar(40) NOT NULL,
  `contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario`, `contraseña`) VALUES
('ADMIN', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
