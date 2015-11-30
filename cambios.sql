-- agregar cantidad
-- CREATE TABLE `detalleventa` (
--   `codVenta` int(10) NOT NULL,
--   `codExistencia` int(6) NOT NULL,
--   `cantidad` int(5) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- agregar estado
-- CREATE TABLE `tventa` (
--   `codVenta` int(10) NOT NULL,
--   `fecEjec` date DEFAULT NULL,
--   `codCtaCliente` int(6) NOT NULL,
--   `codCtaVendedor` int(4) NOT NULL,
--   `codCanal` int(2) NOT NULL,
--   `estado` varchar(10) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- agregar descripcion
-- CREATE TABLE `tcatcliente` (
--   `codCatCliente` int(5) NOT NULL,
--   `compMin` float DEFAULT NULL,
--   `compMax` float DEFAULT NULL,
--   `antMin` float DEFAULT NULL,
--   `antMax` float DEFAULT NULL,
--   `saldCredMax` float DEFAULT NULL,
--   `descripcion` varchar(20) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tcatcliente` (`codCatCliente`, `compMin`, `compMax`, `antMin`, `antMax`, `saldCredMax`, `descripcion`) VALUES
(111, 100, 1000, 24, 467, 30, 'Cliente Frecuente'),
(222, 50, 100, 50, 68, 48, 'Cliente Habitual'),
(333, 5, 50, 7, 45, 45, 'Cliente Ocasional'),
(444, 500, 10000, 500, 2000, 1500, 'Empresas');

-- agregar a partir de correo
-- CREATE TABLE `tpersona` (
--   `codPersona` int(5) NOT NULL,
--   `dni` char(8) DEFAULT NULL,
--   `nomb` varchar(20) DEFAULT NULL,
--   `apPat` varchar(20) DEFAULT NULL,
--   `apMat` varchar(20) DEFAULT NULL,
--   `correo` varchar(20) NOT NULL,
--   `telefono` varchar(7) NOT NULL,
--   `celular` varchar(10) NOT NULL,
--   `direccion` varchar(40) NOT NULL,
--   `pais` varchar(20) NOT NULL,
--   `region` varchar(20) NOT NULL,
--   `provincia` varchar(20) NOT NULL,
--   `distrito` varchar(20) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tpersona` (`codPersona`, `dni`, `nomb`, `apPat`, `apMat`, `correo`, `telefono`, `celular`, `direccion`, `pais`, `region`, `provincia`, `distrito`) VALUES
(1, '76310420', 'Victor Danny', 'Moreno', 'Lopez', 'daniel@gmail.com', '3456587', '987654347', 'Av Naranjal', 'Peru', 'Lima', 'Lima', 'Rimac'),
(2, '47551103', 'Erick', 'Bedoya', 'Baca', 'erick@gmail.com', '4456587', '987654378', 'Av Brasil', 'Peru', 'Lima', 'Lima', 'Breña'),
(3, '70768251', 'Hans', 'Hidalgo', 'Alta', 'hans@gmail.com', '5456587', '987654310', 'Av Tupac Amaru', 'Peru', 'Lima', 'Lima', 'Independencia'),
(4, '76205210', 'Luis', 'Fuerte', 'Espinoza', 'Luisl@gmail.com', '6456587', '987654378', 'Av Habich', 'Peru', 'Lima', 'Lima', 'San Martin'),
(5, '76205214', 'Hans', 'Armas', 'Delago', 'had@gmail.com', '7456587', '987654363', 'Av Peru', 'Peru', 'Lima', 'Lima', 'San Martin'),
(6, '76205215', 'Han', 'Delgado', 'Armas', 'hanDel@gmail.com', '8456587', '987654321', 'Av Arequipa', 'Peru', 'Lima', 'Lima', 'Lince'),
(7, '75426982', 'Fernanda', 'Rosa', 'Suarez', 'fernanda@gmail.com', '2447076', '986310257', 'Av. Siempre Viiva', 'Peru', 'Lima', 'Lima', 'Comas'),
(8, '75756982', 'Rosa', 'Chavez', 'Suarez', 'fernanda@gmail.com', '2447076', '986310257', 'Av. Siempre Viiva', 'Peru', 'Lima', 'Lima', 'Comas'),
(9, '85210546', 'Ana', 'Contreras', 'Magallanes', 'ana@gmail.com', '2547956', '975021462', 'Av Por ahi', 'Peru', 'Lima', 'Lima', 'Rimac'),
(10, '54265742', 'Ivan', 'De la Cruz', 'Rodriguez', 'ivan@example.com', '125478', '930125478', 'Av Tacna', 'Peru', 'Lima', 'Lima', 'Rimac'),
(11, '78526458', 'Frank', 'Castlel', 'Punisher', 'frank@gmail.com', '8521654', '952102653', 'Av Lima', 'Peru', 'Huaral', 'Lima', 'Comas'),
(12, '75426981', 'Maria', 'Del ', 'Barrio', 'maria@gmail.co', '666666', '955555555', 'Av Por ahi', 'Peru', 'Lima', 'Lima', 'Rimac'),
(13, '86102547', 'Rosario', 'Espiritu', 'Anco', 'rosario@hotmail.com', '4301225', '999920114', 'Av Tarapaca', 'Peru', 'Lima', 'Lima', 'Rimac'),
(14, '78945612', 'Juan', 'Alfonso', 'Marco', 'juan@example.com', '9875421', '987542103', 'Av', 'Peru', 'Lima', 'Lima', 'Rimac'),
(15, '75426981', 'Maria', 'Del ', 'Barrio', 'maria@gmail.com.pe', '55553', '955555555', 'Av Por ahi', 'Peru', 'Lima', 'Lima', 'Rimac');



INSERT INTO `tcanal` (`codCanal`, `desc`) VALUES
(1, 'TPV 102'),
(2, 'Web'),
(3, 'Call Center');

INSERT INTO `tcatcaja` (`codCatCaja`, `desc`, `montoIngMin`, `montoIngMax`) VALUES
(1, 'Caja 1', 20, 100),
(2, 'Caja 2', 100, 1000),
(3, 'Caja 3', 1000, 5000),
(4, 'Caja 4', 5000, 10000);

INSERT INTO `tctacaja` (`codCtaCaja`, `desc`, `montIng`, `montSal`) VALUES
(1, 'Caja 1', 2000, 200),
(2, 'Caja 2', 3000, 300),
(3, 'Caja 3', 4000, 400),
(4, 'Caja 4', 5000, 500);

INSERT INTO `tclase` (`codClase`, `desc`, `codFamilia`) VALUES
(1, 'Instrumentos de escritura', 2),
(2, 'Suministros de Escritorio', 2);

INSERT INTO `tcatproducto` (`codCatProducto`, `desc`, `prec`, `codTipoProducto`, `codCuantia`) VALUES
(1, 'Lapicero Pilot', 2, 1, 1),
(2, 'Lapicero Fabell Castel', 0.5, 1, 1),
(3, 'Cuaderno Alpha', 4, 2, 1),
(4, 'Hojas Bond Standar', 10, 3, 1000),
(5, 'Cuaderno Loro Pequeño', 2, 2, 1);

INSERT INTO `tcatvendedor` (`codCatVendedor`, `montVentMin`, `montVentMax`, `antMin`, `antMax`, `montDevMin`, `montDevMax`) VALUES
(1, 100, 500, 50, 250, 50, 200),
(2, 500, 1000, 250, 500, 200, 800),
(3, 1000, 5000, 500, 2000, 800, 2500),
(4, 5000, 10000, 2000, 5000, 2500, 6000);

INSERT INTO `tctacliente` (`codCtaCliente`, `saldComp`, `montDev`, `fecIng`, `saldCred`, `codCatCliente`, `codPersona`) VALUES
(1, 567, 23, '2012-12-12', 23, 222, 1),
(2, 344, 34, '2014-06-24', 34, 111, 5),
(3, 32, 23, '2012-04-21', 34, 111, 3),
(4, 23, 54, '2015-11-16', 344, 333, 2),
(5, 3453, 3232, '2014-08-02', 500, 444, 6),
(7, NULL, NULL, '2015-11-21', NULL, 111, 7),
(8, NULL, NULL, '2015-11-21', NULL, 111, 8),
(9, NULL, NULL, '2015-11-21', NULL, 111, 9),
(10, NULL, NULL, '2015-11-21', NULL, 111, 13),
(11, NULL, NULL, '2015-11-22', NULL, 111, 14),
(12, NULL, NULL, '2015-11-22', NULL, 111, 15);

INSERT INTO `tctavendedor` (`codCtaVendedor`, `montVent`, `fecIng`, `montDev`, `codCatVendedor`, `codPersona`) VALUES
(1, 3000, '2012-12-02', 1200, 2, 1),
(2, 664, '2013-11-22', 125, 1, 2),
(3, 1521, '2014-05-12', 254, 2, 3),
(4, 455, '2014-12-04', 578, 4, 4),
(5, 5454, '2012-05-05', 1221, 3, 5),
(6, 4554, '2014-11-11', 154545, 1, 6);

INSERT INTO `tcuantia` (`codCuantia`, `desc`, `max`, `min`, `codUM(2)`) VALUES
(1, 'Unidad', '1', '50', 1),
(1000, 'Millar', '1', '100', 1000);

INSERT INTO `tdetallepago_venta` (`codVenta`, `codFormaPago`, `codCtaCaja`, `mont`) VALUES
(2122, 1, 1, 300),
(2123, 1, 2, 450),
(2124, 2, 2, 200),
(2125, 1, 3, 2300),
(2126, 3, 4, 200),
(2127, 2, 2, 3230);

INSERT INTO `texistencia` (`codExistencia`, `cant`, `codCatProducto`) VALUES
(1, 100, 1),
(2, 200, 2),
(3, 300, 3),
(4, 440, 4);

INSERT INTO `detalleventa` (`codVenta`, `codExistencia`, `cantidad`) VALUES
(2122, 1, 5),
(2122, 2, 47),
(2122, 3, 2),
(2122, 4, 2),
(2123, 1, 6),
(2123, 4, 7);

INSERT INTO `tfamilia` (`codFamilia`, `desc`, `codSegmento`) VALUES
(1, 'Accesorios de oficina y escritorio', 2),
(2, 'Suministro de oficina', 2);

INSERT INTO `tformapago` (`codFormaPago`, `desc`) VALUES
(1, 'Presencial'),
(2, 'PayPal'),
(3, 'Cheque');

INSERT INTO `tsegmento` (`codSegmento`, `desc`) VALUES
(2, 'suministros');

INSERT INTO `ttipoproducto` (`codTipoProducto`, `desc`, `codClase`) VALUES
(1, 'Lapicer', 2),
(2, 'Cuadernos de Papel', 2),
(3, 'Hojas Bond', 2);

INSERT INTO `tunidadmedida` (`codUM`, `desc`) VALUES
(1, 'Unidad'),
(1000, 'Millar');

INSERT INTO `tventa` (`codVenta`, `fecEjec`, `codCtaCliente`, `codCtaVendedor`, `codCanal`, `estado`) VALUES
(2122, '2015-11-15', 1, 6, 1, 'Pendiente'),
(2123, '2015-10-05', 2, 3, 2, 'Pendiente'),
(2124, '2015-09-25', 1, 4, 3, 'Pendiente'),
(2125, '2015-08-04', 3, 4, 2, 'Entregado'),
(2126, '2015-07-24', 4, 3, 2, 'Entregado'),
(2127, '2015-06-06', 5, 1, 1, 'Cancelado');


--
-- Estructura para la vista `detallepedido`
--
DROP TABLE IF EXISTS `detallepedido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detallepedido`  AS  select `tv`.`codVenta` AS `numero`,`tv`.`fecEjec` AS `fecha`,`tv`.`estado` AS `estado`,`tper2`.`nomb` AS `nombreCliente`,`tper2`.`apPat` AS `apellidoPaternoCliente`,`tper2`.`apMat` AS `apellidoMaternoCliente`,`tper2`.`telefono` AS `telefono`,`tper2`.`celular` AS `celular`,`tper2`.`correo` AS `correo`,`tper1`.`nomb` AS `nombreVendedor`,`tper1`.`apPat` AS `apellidoPaternoVendedor`,`tper1`.`apMat` AS `apellidoMaternoVendedor`,`tca`.`desc` AS `canal`,`pa_ven`.`mont` AS `Monto`,`tcatpro`.`codCatProducto` AS `codigo`,`tcatpro`.`desc` AS `descripcionProducto`,`detven`.`cantidad` AS `cantidad`,`tcatpro`.`prec` AS `precio` from (((((((((`tventa` `tv` join `tcanal` `tca` on((`tca`.`codCanal` = `tv`.`codCanal`))) join `tdetallepago_venta` `pa_ven` on((`pa_ven`.`codVenta` = `tv`.`codVenta`))) join `tctavendedor` `ttven` on((`ttven`.`codCtaVendedor` = `tv`.`codCtaVendedor`))) join `tpersona` `tper1` on((`tper1`.`codPersona` = `ttven`.`codPersona`))) join `tctacliente` `ttcli` on((`ttcli`.`codCtaCliente` = `tv`.`codCtaCliente`))) join `tpersona` `tper2` on((`tper2`.`codPersona` = `ttcli`.`codPersona`))) join `detalleventa` `detven` on((`detven`.`codVenta` = `tv`.`codVenta`))) join `texistencia` `tex` on((`tex`.`codExistencia` = `detven`.`codExistencia`))) join `tcatproducto` `tcatpro` on((`tcatpro`.`codCatProducto` = `tex`.`codCatProducto`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `listaclientes`
--
DROP TABLE IF EXISTS `listaclientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listaclientes`  AS  select `cliente`.`codCtaCliente` AS `codigo`,`persona`.`codPersona` AS `codPersona`,`persona`.`dni` AS `dni`,`persona`.`nomb` AS `nombre`,`persona`.`apPat` AS `apPat`,`persona`.`apMat` AS `apMat`,`persona`.`correo` AS `correo`,`persona`.`telefono` AS `telefono`,`persona`.`celular` AS `celular`,`persona`.`direccion` AS `direccion`,`persona`.`pais` AS `pais`,`persona`.`region` AS `region`,`persona`.`provincia` AS `provincia`,`persona`.`distrito` AS `distrito`,`tcliente`.`descripcion` AS `descripcion` from ((`tctacliente` `cliente` join `tpersona` `persona` on((`cliente`.`codPersona` = `persona`.`codPersona`))) join `tcatcliente` `tcliente` on((`tcliente`.`codCatCliente` = `cliente`.`codCatCliente`))) order by `cliente`.`codCtaCliente` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `listapedidos`
--
DROP TABLE IF EXISTS `listapedidos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listapedidos`  AS  select `tv`.`codVenta` AS `numero`,`tv`.`fecEjec` AS `fecha`,`tper2`.`nomb` AS `nombreCliente`,`tper2`.`apPat` AS `apellidoPaternoCliente`,`tper2`.`apMat` AS `apellidoMaternoCliente`,`tper1`.`nomb` AS `nombreVendedor`,`tper1`.`apPat` AS `apellidoPaternoVendedor`,`tper1`.`apMat` AS `apellidoMaternoVendedor`,`tca`.`desc` AS `canal`,`pa_ven`.`mont` AS `Monto`,`tv`.`estado` AS `estado` from ((((((`tventa` `tv` join `tcanal` `tca` on((`tca`.`codCanal` = `tv`.`codCanal`))) join `tdetallepago_venta` `pa_ven` on((`pa_ven`.`codVenta` = `tv`.`codVenta`))) join `tctavendedor` `ttven` on((`ttven`.`codCtaVendedor` = `tv`.`codCtaVendedor`))) join `tpersona` `tper1` on((`tper1`.`codPersona` = `ttven`.`codPersona`))) join `tctacliente` `ttcli` on((`ttcli`.`codCtaCliente` = `tv`.`codCtaCliente`))) join `tpersona` `tper2` on((`tper2`.`codPersona` = `ttcli`.`codPersona`))) ;


