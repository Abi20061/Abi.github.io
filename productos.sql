-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:36:47
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_en_linea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(1, 'Mochila K-swiss Jhon', 679, 'Mochila Casual\r\nMarca: K-swiss\r\nComodidad y estilo.\r\nPerfectamente empacada para su transporte.\r\nGarantía de 30 días por defecto de fabricación.', 'Negro', 12, 'K-swiss', 'Altura x Ancho x Profundidad: '),
(2, 'Mochila Modelo: Super Transformer', 799, 'Mochila Casual\r\nMarca: K-swiss\r\nComodidad y estilo.\r\nPerfectamente empacada para su transporte.\r\nGarantía de 30 días por defecto de fabricación.', 'Azul marino-Rojo', 20, 'k-swiss', 'Altura x Ancho x Profundidad: '),
(3, 'Mochila K-swiss Coconut', 679, 'Mochila Casual\r\nMarca: K-swiss\r\nComodidad y estilo.\r\nPerfectamente empacada para su transporte.\r\nGarantía de 30 días por defecto de fabricación', 'Negro/Azul', 320, 'K-swiss', 'Medidas: Alto 45 cm x Largo 28'),
(4, 'Mochila K-swiss Ronni', 649, 'Tu mejor opción en mochila casual te acompaña a todos lados!!!.\r\nLa K-swiss backpack Ronni cuenta con 3 compartimentos y una de ellas exclusiva para laptop, con revestimiento de polyester así como su excelente diseño y calidad.', 'Verde musgo', 56, 'K-swiss', 'Medidas: 45 X 30 X 18 CM Capac'),
(5, 'Mochila Para Laptop Mujer Escolar Juvenil Chenson 1818 Rosa', 597, 'Bolsillo frontal con cierre\r\nCompartimento para laptop de 13 pulgadas\r\nAsas de hombro acolchadas', 'Rosa', 23, 'Chenson', 'Altura x Ancho x Profundidad: '),
(6, 'Mochila Chenson Escolar Juvenil 1818 1863321-w', 434, 'Amplio compartimento principal con cierre.\r\nBolsillo frontal con cierre.\r\nBolsillo interno con cierre.', 'Blanco', 80, 'Chenson', 'Altura x Ancho x Profundidad: '),
(7, 'Wilson Mochila Casual Original', 329, 'Esta mochila Wilson es ideal para uso deportivo, estudiantil, y / o casual\r\n\r\nCuenta con 2 compartimentos, el principal con amplio espacio y un bolsillo frontal con cierre.\r\n\r\nAdemás cuenta con 1 bolsillo a cada lado ideal para cargar botellas u objetos pequeños. Sus tiros son ergonómicos y con tela', 'Negro/Rojo', 30, 'Wilson', 'Altura x Ancho x Profundidad: '),
(8, 'Wilson Mochila Juvenil Y Practica', 349, '----------------------------------\r\n• Producto 100% original de la marca WILSON\r\n• Aquí pueden visitar nuestra tienda oficial PAKIT\r\nhttps://tienda.mercadolibre.com.mx/pakit\r\n----------------------------------------------', 'Morado', 68, 'Wilson', 'Altura x Ancho x Profundidad: '),
(9, 'Wilson Mochila Casual Liviana', 379, 'Esta mochila no tiene bolsillos internos ni bolsillo porta laptop', 'Negro', 45, 'Wilson', 'Altura x Ancho x Profundidad: '),
(10, 'Mochila Umbro® Deportiva Casual Con Porta Laptop 16 Inch', 499, 'Material: 100% Poliéster de alta resistencia. ', 'Azul claro', 59, 'Umbro', 'Altura x Ancho x Profundidad: ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
