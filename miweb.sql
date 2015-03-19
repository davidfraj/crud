-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2015 a las 13:49:50
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `miweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
`id_ima` int(11) NOT NULL,
  `archivo_ima` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_ima` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_ima`, `archivo_ima`, `descripcion_ima`) VALUES
(1, 'leon.jpg', 'Arte digital con leon de transfondo'),
(2, 'tigre.jpg', 'Arte digital, con un tigre como protagonista'),
(3, 'guitarra.jpg', 'Composicion artistica de hacha, guitarra, cinta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
`id_not` int(11) NOT NULL,
  `titulo_not` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `contenido_not` longtext COLLATE utf8_spanish_ci NOT NULL,
  `imagen_not` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_not`, `titulo_not`, `contenido_not`, `imagen_not`) VALUES
(1, 'Felipe VI y Doña Letizia visitan Zaragoza para inaugurar la exposición sobre Fernando II de Aragón', 'Los Reyes de España, don Felipe y doña Letizia, han llegado a Zaragoza para presidir el acto de inauguración de la exposición Fernando II de Aragón. El rey que imaginó España y la abrió a Europa''.<br><br>\r\n\r\nAntes de proceder a la apertura de la muestra, los Reyes se han informado a través de cuatro paneles informativos sobre los efectos de la crecida del río Ebro en los municipios ribereños, que ha anegado unas 19.000 hectáreas.<br><br>\r\n\r\nEn el acto, han estado presentes los alcaldes de Boquiñeni, Gelsa y Velilla de Ebro, que han explicado a don Felipe y doña Letizia la situación de sus pueblos, y el jefe de Protección Civil, Miguel Ángel Clavero, quien les ha detallado los trabajos que se están llevando a cabo para la recuperación tras la riada.<br><br>', '1.gif'),
(2, 'Las redes neuronales toman el control de la reducción de ruido en los coches de Mitsubishi', 'Las redes neuronales y las máquinas que aprenden ya os dijimos que estaban de vuelta. Mitsubishi ha tomado esa base para crear un sistema de reducción de ruido que funcione en entornos donde hay elementos no previstos que interfieren en la comunicación con manos libres.<br><br>\r\nEl sistema de los japoneses recurre al aprendizaje basado en una amplia base de datos para poder eliminar ruidos no esperados que, por su frecuencia parecida a la voz humana o corta duración, no son actualmente manejados por los sistemas activos de reducción de ruido, que basan su fiabilidad en un entorno no cambiante y con ruido básico de fondo.<br><br>\r\nEl método de Mitsubishi usa redes neuronales para detectar la voz y diferenciarla completamente de cualquier otro ruido. Esos parámetros para distinguir y separar la voz del ruido se va optimizando al incorporar y analizar continuamente datos.\r\nCon toda esa información el sistema es capaz de aplicar filtros que modifican en tiempo real la reducción de ruido según las necesidades del entorno en que se está buscando aplicar una reducción de ruido que mejore la comunicación.<br><br>', '2.jpg'),
(3, 'Magic Leap contra Hololens: su fundador dice que la realidad aumentada de Microsoft te mareará', 'Una gran competencia en el mercado de la realidad virtual se avecina, y si no has sacado todavía tu producto pero afirmas que va a ser el mejor, nada como atacar a la competencia. Y afirmar que otros sistemas te causarán mareo y confusión es una grave pero intencionada acusación en este nuevo mundo.<br><br>\r\nPues justo eso es lo que ha hecho Rony Abovitz, creador de Magic Leap, la compañía que lleva ya un tiempo diciendo que va a revolucionar el mercado pero de la que todavía no hemos visto nada de nada.<br><br>', '3.jpg\r\n'),
(4, 'Apple Watch, esto es lo que necesitas saber', 'Seguramente uno de los lanzamiento de este 2015 se producirá el próximo mes de abril. Hablamos del Apple Watch, la entrada de la firma de Cupertino en el novísimo mercado de los smartwatchs donde hasta ahora, Android Wear y en menor medida Tizen con el último modelo de Samsung han sido los protagonistas absolutos.<br><br>\r\nEste mercado todavía naciendo, con los usuarios dubitativos sobre la utilidad real de un reloj avanzado, recibirá pues al Apple Watch sin un camino muy claro creado todavía. Por ahora el deporte, la cuantificación y las notificaciones son los ámbitos donde el smartwatch quiere coger el sitio del smartphone en determinadas circunstancias. Toma nota de cómo planea hacerlo el Apple Watch<br><br>', '650_1000_apple-watch-home.jpg'),
(5, 'Aragón registra la menor bajada en el número de viajeros de autobús en enero', 'Zaragoza.- El número de viajeros en autobús urbano ha bajado en Aragón en enero un 1,3% respecto al mismo mes del año anterior, lo que supone que un total de 9.934.000 personas han utilizado este transporte público.\r\n\r\nEl descenso interanual sitúa a Aragón como la que menos baja en el conjunto de las comunidades, según publica este viernes el Instituto Nacional de Estadística (INE).\r\n\r\nEn el conjunto nacional, más de 363,2 millones de pasajeros utilizan el transporte público en enero, un 2,3% menos que en enero de 2014. El transporte urbano disminuye un 2,0% y el interurbano baja un 1,9% en tasa anual. Dentro de este, el transporte por autobús es el que más disminuye, con una tasa del –2,5%.', 'img1303332s.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usu` int(11) NOT NULL,
  `correo_usu` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_usu` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `clave_usu` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `correo_usu`, `nombre_usu`, `clave_usu`) VALUES
(1, 'davidfraj@gmail.com', 'David Fraj Blesa', '25d55ad283aa400af464c76d713c07ad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`id_ima`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`id_not`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `id_ima` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
