SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `Person` (
  `id` int(11) NOT NULL, PRIMARY
  `Nombres` varchar(80) NOT NULL
  `Apellidos` varchar(80) NOT NULL
  `Correo_Electronico` varchar(80) NOT NULL
  `	Telefono` varchar(80) NOT NULL
  `Detalle_Pais` varchar(80) NOT NULL
  `Detalle_Estado` varchar(80) NOT NULL
  `Detalle_Cuidad` varchar(80) NOT NULL
  `Comentarios` varchar(80) NOT NULL
  `Comprobación_poliza` varchar(80) NOT NULL
  `area` varchar(200) NOT NULL
  `programa` varchar(200) NOT NULL
  
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
