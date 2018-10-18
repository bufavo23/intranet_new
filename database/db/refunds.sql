-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2018 a las 19:21:45
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refunds`
--

CREATE TABLE `refunds` (
  `id` int(10) UNSIGNED NOT NULL,
  `pax_nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pax_apellido` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_factura` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negocio` int(11) NOT NULL,
  `factura` int(11) NOT NULL,
  `providers_id` int(10) UNSIGNED NOT NULL,
  `n_tkt` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tramo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneda` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_servicio` double(8,2) NOT NULL,
  `tax` double(8,2) NOT NULL,
  `multa` double(8,2) NOT NULL,
  `regulaciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_limite_envio` datetime NOT NULL,
  `motives_id` int(10) UNSIGNED NOT NULL,
  `destinations_id` int(10) UNSIGNED NOT NULL,
  `obs_ventas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `statu_sends_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `obs_rechazo` text COLLATE utf8mb4_unicode_ci,
  `fecha_correccion` datetime DEFAULT NULL,
  `n_refound` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_factura` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forma_pago_factura` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_envio_bsp` datetime DEFAULT NULL,
  `nc_proveedor` int(11) DEFAULT NULL,
  `fecha_recepcion_nc` datetime DEFAULT NULL,
  `monto_estimado_bsp` double(8,2) DEFAULT NULL,
  `obs_auditoria` text COLLATE utf8mb4_unicode_ci,
  `fechaRecepcionBSP` datetime DEFAULT NULL,
  `voucher_ingreso` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obs_tesoreria` text COLLATE utf8mb4_unicode_ci,
  `voucher_devolucion` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_devolucion` datetime DEFAULT NULL,
  `destino_final` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nc_cliente` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto_devolucion` double(8,2) DEFAULT NULL,
  `obs_final` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refunds_providers_id_foreign` (`providers_id`),
  ADD KEY `refunds_motives_id_foreign` (`motives_id`),
  ADD KEY `refunds_destinations_id_foreign` (`destinations_id`),
  ADD KEY `refunds_statu_sends_id_foreign` (`statu_sends_id`),
  ADD KEY `refunds_status_id_foreign` (`status_id`),
  ADD KEY `refunds_users_id_foreign` (`users_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_destinations_id_foreign` FOREIGN KEY (`destinations_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_motives_id_foreign` FOREIGN KEY (`motives_id`) REFERENCES `motives` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_providers_id_foreign` FOREIGN KEY (`providers_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_statu_sends_id_foreign` FOREIGN KEY (`statu_sends_id`) REFERENCES `statu_sends` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
