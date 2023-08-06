-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2023 a las 04:57:21
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisven`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `NomCategoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `NomCategoria`) VALUES
(1, 'Carnes y embutidos'),
(2, 'Lácteos y huevos'),
(3, 'Cereales y panadería'),
(4, 'Conservas y enlatados'),
(5, 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ruc` varchar(11) NOT NULL,
  `dircliente` varchar(64) NOT NULL,
  `telcliente` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombre`, `ruc`, `dircliente`, `telcliente`) VALUES
(1, 'Ana López', '20123456789', 'Av. Primavera 123, Lima, Perú', '987654321'),
(2, 'Juan Pérez', '20654321987', 'Jr. Independencia 456, Arequipa, Perú', '999888777'),
(3, 'María Gómez', '20456789123', 'Calle del Sol 789, Trujillo, Perú', '955444333'),
(4, 'Carlos Vargas', '20987654321', 'Av. Montaña 234, Cusco, Perú', '966777888'),
(5, 'Laura Torres', '20876543210', 'Carretera Panamericana 567, Chiclayo, Perú', '977222111'),
(6, 'Pedro Rodríguez', '20765432109', 'Calle del Pan 876, Piura, Perú', '999333444'),
(7, 'Sofia Mendoza', '20321098765', 'Av. Marítima 654, Huanchaco, Perú', '977999888'),
(8, 'Luis González', '20234567890', 'Jr. Playa 234, Ica, Perú', '966222333'),
(9, 'Andrea Silva', '20567890123', 'Av. Solitaria 789, Tacna, Perú', '955777666'),
(10, 'Oscar Ruiz', '20901234567', ' Calle del Bosque 987, Tarapoto, Perú', '988111222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idProveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompras`
--

CREATE TABLE `detallecompras` (
  `idDetalleCompra` int(11) NOT NULL,
  `idCompra` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `idDetalleVenta` int(11) NOT NULL,
  `idVenta` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `precioTotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `idDocumento` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `NroDocumento` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`idDocumento`, `nombre`, `NroDocumento`) VALUES
(1, 'Boleta', '1'),
(2, 'Factura', '000000001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `Usuario` varchar(25) DEFAULT NULL,
  `Contraseña` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `nombre`, `telefono`, `Usuario`, `Contraseña`) VALUES
(9, 'Andrew', '987654321', 'IceWolf', '$2y$10$WscYebMDc36VgAesO5taK.2qlPNRMPR8xSh7fECt9E7NktHfzOKXu'),
(10, 'Samuel', '987654321', 'PachinLoco', '$2y$10$R8fNSlIDl/6dDp9MUEOdnO9GkLQJQofE0fZYQd4CW6QE2PjMq2Suu'),
(11, 'Yubert', '987645321', 'Chubert', '$2y$10$TOie1RRkZMuGrtiZP0HsV.7/upv35/Xe9gM8fIcuJBGASThudy78a'),
(12, 'Profesor', '987645321', 'Profesor', '$2y$10$anTVKprZdBR7fEW7pm/hSex1tq4OqAE99YE0FxC0Yn3KQjMNDvNP6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nomproducto` varchar(50) NOT NULL,
  `unimed` varchar(15) NOT NULL,
  `stock` int(11) NOT NULL,
  `idProveedor` int(11) DEFAULT NULL,
  `preuni` decimal(10,2) DEFAULT NULL,
  `cosuni` decimal(10,2) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nomproducto`, `unimed`, `stock`, `idProveedor`, `preuni`, `cosuni`, `idCategoria`) VALUES
(1, 'Carne de res', 'Kg', 20, 1, 25.00, 20.00, 1),
(2, 'Jamón', 'g', 4000, 2, 9.50, 8.00, 1),
(3, 'Leche entera', 'Lt', 20, 4, 5.00, 3.00, 2),
(4, 'Queso fresco', 'g', 3750, 3, 7.00, 5.00, 2),
(5, 'Arroz', 'Kg', 40, 5, 4.00, 2.50, 3),
(6, 'Pan de molde ', 'g', 10000, 6, 3.50, 2.50, 3),
(7, 'Atún en lata', 'g', 3200, 7, 6.50, 5.50, 4),
(8, 'Sopa de pollo en lata', 'g', 8000, 8, 4.00, 2.00, 4),
(9, 'Gaseosa', 'Lt', 40, 9, 6.00, 5.00, 5),
(10, 'Jugo de naranja', 'Lt', 30, 10, 8.00, 6.00, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `RUC` varchar(10) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `nombre`, `RUC`, `Direccion`, `Telefono`, `Correo`) VALUES
(1, 'Proveedor Carnes del Norte', '9876541232', 'Av. Principal 123, Lima, Perú', '987654321', ' ventas@carnesdelnorte.com'),
(2, 'Proveedor Delicias Ahumadas', '9876541232', 'Calle Secundaria 456, Arequipa, Perú', '998765432', 'contacto@deliciasahumadas.com'),
(3, 'Proveedor Quesos del Valle', '9876541232', 'Av. Quesera 321, Cusco, Perú', '955678234', ' ventas@quesosdelvalle.com'),
(4, 'Proveedor Lácteos Frescos S.A.', '9876541232', 'Jr. Lechería 789, Trujillo, Perú', '987123456', 'info@lacteosfrescos.com'),
(5, 'Proveedor Arrocería Nacional', '9876541232', 'Carretera de los Granos 987, Chiclayo, Perú', '999765123', ' contacto@arrocerianacional.com'),
(6, ' Proveedor Panadería La Tradición', '9876541232', 'Calle Panificadora 567, Piura, Perú', '976543789', ' pedidos@panerialatradicion.com'),
(7, 'Proveedor Conservas del Mar', '9876541232', 'Av. Marítima 654, Huanchaco, Perú', '995234876', 'ventas@conservasdelmar.com'),
(8, 'Proveedor Sopas Caseras', '9876541232', 'Jr. Sopera 432, Ica, Perú', '987567890', ' info@sopascaseras.com'),
(9, 'Proveedor Refrescos del Sur', '9876541232', 'Av. Refrescante 789, Tacna, Perú', '955876543', 'pedidos@refrescosdelsur.com'),
(10, 'Proveedor Jugos Naturales', '9876541232', 'Proveedor Jugos Naturales', '987345678', ' ventas@jugosnaturales.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `fecha`, `idCliente`, `idEmpleado`, `idProducto`) VALUES
(10, '2023-08-11', 1, 9, 5),
(11, '2023-08-05', 1, 9, 1),
(12, '2023-08-05', 1, 12, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idProveedor` (`idProveedor`);

--
-- Indices de la tabla `detallecompras`
--
ALTER TABLE `detallecompras`
  ADD PRIMARY KEY (`idDetalleCompra`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`idDetalleVenta`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`idDocumento`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallecompras`
--
ALTER TABLE `detallecompras`
  MODIFY `idDetalleCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  MODIFY `idDetalleVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`);

--
-- Filtros para la tabla `detallecompras`
--
ALTER TABLE `detallecompras`
  ADD CONSTRAINT `fk_detallecompras_compra` FOREIGN KEY (`idCompra`) REFERENCES `compras` (`idCompra`),
  ADD CONSTRAINT `fk_detallecompras_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`);

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `fk_detalleProducto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`),
  ADD CONSTRAINT `fk_detalleventas_producto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productoProveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_VentaCliente` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `fk_VentaEmpleado` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`),
  ADD CONSTRAINT `fk_ventas_cliente` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `fk_ventas_empleado` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
