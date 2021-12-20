-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 30 Σεπ 2017 στις 17:06:50
-- Έκδοση διακομιστή: 10.1.24-MariaDB
-- Έκδοση PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `project2017`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(128) CHARACTER SET utf16 NOT NULL,
  `admin_pwd` varchar(128) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_pwd`) VALUES
(1, 'zakkas', '1234'),
(2, 'lyras', '2112'),
(3, 'tuxaiousername', '4444');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `employees2`
--

CREATE TABLE `employees2` (
  `emplo2_id` int(11) NOT NULL,
  `emplo2_name` varchar(128) NOT NULL,
  `emplo2_pwd` varchar(128) NOT NULL,
  `emplo2_kata` varchar(128) NOT NULL,
  `emplo2_city` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `employees2`
--

INSERT INTO `employees2` (`emplo2_id`, `emplo2_name`, `emplo2_pwd`, `emplo2_kata`, `emplo2_city`) VALUES
(22, 'athanasiou', '4321', 'SpeedTurtle', ''),
(23, 'ksla', 'jdj=`', 'ndsk', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `emplo_transit2`
--

CREATE TABLE `emplo_transit2` (
  `emplo3_id` int(10) NOT NULL,
  `emplo3_hub` varchar(128) NOT NULL,
  `emplo3_name` varchar(128) NOT NULL,
  `emplo3_pwd` varchar(128) NOT NULL,
  `emplo3_city` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `emplo_transit2`
--

INSERT INTO `emplo_transit2` (`emplo3_id`, `emplo3_hub`, `emplo3_name`, `emplo3_pwd`, `emplo3_city`) VALUES
(7, 'speedturtle Î§Î±Î½Î¹Î±', 'admin', 'admin', 'Πατρα');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `katasthmata`
--

CREATE TABLE `katasthmata` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET latin1 NOT NULL,
  `street` varchar(128) CHARACTER SET latin1 NOT NULL,
  `number` int(10) NOT NULL,
  `city` varchar(128) CHARACTER SET latin1 NOT NULL,
  `TK` int(10) NOT NULL,
  `tel` bigint(10) NOT NULL,
  `hub` varchar(128) CHARACTER SET latin1 NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `katasthmata`
--

INSERT INTO `katasthmata` (`id`, `name`, `street`, `number`, `city`, `TK`, `tel`, `hub`, `lat`, `lng`) VALUES
(27, 'SpeedTurtle Mavrogenous 25', 'Mavrogenous', 25, 'Larisa', 41334, 241098725, 'SpeedTurtle Larisas', 39.625450, 22.394278),
(6, 'SpeedTurtle 62 Martiron', '62 Martiron', 193, 'Herakion', 71304, 281084736, 'SpeedTurtle Heraklion', 35.329765, 25.110767),
(7, 'SpeedTurtle Ermi 2', 'Ermi', 2, 'Heraklion', 71409, 281086749, 'SpeedTurtle Heraklion', 35.312138, 25.154617),
(8, 'SpeedTurtle Dimokratias 93', 'Dimokratias', 93, 'Heraklion', 71306, 281974529, 'SpeedTurtle Heraklion', 35.329071, 25.138140),
(9, 'SpeedTurtle Aspropyrgos', 'Salaminos', 72, 'Aspropyrgos', 19300, 2105585794, '', 38.056187, 23.586929),
(10, 'SpeedTurtle Agias Marinas 21', 'Agias Marinas', 21, 'Aspropyrgos', 19300, 2109765243, 'SpeedTurtle Aspropyrgos', 38.062492, 23.582834),
(11, 'SpeedTurtle Papaflessa 6', 'Papaflessa', 6, 'Aspropyrgos', 19300, 2109837465, 'SpeedTurtle Aspropyrgos', 38.065239, 23.592001),
(12, 'SpeedTurtle Philis 100', 'Philis', 100, 'Aspropyrgos', 19300, 2109873645, 'SpeeTurtle Aspropyrgos', 38.065090, 23.598305),
(33, 'SpeedTurtle Mitilinis', 'Kavetsou', 6, 'Mitilini', 81100, 2251043572, '', 39.102879, 26.554344),
(34, 'SpeedTurtle Komninaki 47', 'Komninaki', 47, 'Mitilini', 81100, 2251055948, 'SpeedTurtle Mitilinis', 39.105953, 26.559019),
(35, 'SpeedTurtle Zalogou 25', 'Zalogou', 25, 'Mitilini', 81100, 2251086721, 'SpeedTurtle Mitilinis', 39.109364, 26.552830),
(24, 'SpeedTurtle Halkidikis 51', 'Halkidikis', 51, 'Thessaloniki', 55535, 2310348090, 'SpeedTurtle Thessaloniki', 40.595222, 22.994411),
(21, 'SpeedTurtle Thessaloniki', '28is Oktovriou', 47, 'Thessaloniki', 56123, 2310720555, '', 40.652836, 22.930849),
(23, 'SpeedTurtle Paraskevopoulou 9', 'Paraskevopoulou', 9, 'Thessaloniki', 54640, 2310819523, 'SpeedTurtle Thessaloniki', 40.616364, 22.955214),
(22, 'SpeedTurtle 25is Martiou', '25is Martiou', 63, 'Thessaloniki', 54248, 2310887982, 'SpeedTurtle Thessaloniki', 40.600742, 22.959084),
(25, 'SpeedTurtle Larisas', 'Karanasiou', 4, 'Larisa', 41447, 2410281778, '', 39.641926, 22.930849),
(28, 'SpeedTurtle Ioanninon 115', 'Ioanninon', 115, 'Larisa', 41334, 2410374861, 'SpeedTurtle Larisas', 39.633080, 22.387863),
(26, 'SpeedTurtle Alkamenous', 'Alkamenous', 12, 'Larisa', 41222, 2410619652, 'SpeedTurtle Larisas', 39.635918, 22.401520),
(1, 'SpeedTurtle Alexandroupolis', 'Agiou Dimitriou 28-32', 28, 'Alexandroupoli', 68100, 2551026725, '', 40.855343, 25.861790),
(4, 'SpeedTurtle Solonos 41', 'Solonos', 41, 'Alexandroupoli', 68100, 2551087594, 'SpeedTurtle Alexandroupolis', 40.857105, 25.890688),
(3, 'SpeedTurtle 14is Maiou 30', '14is Maiou', 30, 'Alexandroupoli', 68100, 2551093829, 'SpeedTurtle Alexandroupolis', 40.847286, 25.875090),
(2, 'SpeedTurtle Kondili 35', 'Kondili', 35, 'Alexandroupoli', 68100, 2551093875, 'SpeedTurtle Alexandroupolis', 40.859261, 25.872768),
(16, 'SpeedTurtle Erithrou Stavrou 1', 'Erithrou Stavrou', 1, 'Patra', 26331, 2610279873, 'SpeedTurtle Patras', 38.237923, 21.755352),
(15, 'SpeedTurtle Parnassou 2', 'Parnassou', 2, 'Patra', 26222, 2610318960, 'SpeedTurtle Patra', 38.232494, 21.724949),
(36, 'SpeedTurtle Efstathiou Vostani 8', 'Efstratiou Vostani', 8, 'Mitilini', 81100, 2610987263, 'SpeedTurtle Mitilinis', 39.102207, 26.547985),
(14, 'SpeedTurtle Ionias 134', 'Ionias', 134, 'Patra', 26224, 2610998274, 'SpeedTurtle Patra', 38.232430, 21.740313),
(13, 'SpeedTurtle Patras', 'Maizonos', 87, 'Patra', 26221, 2619670594, '', 38.249802, 21.739080),
(18, 'SpeedTurtle Aneksartisias 129', 'Aneksartisias', 129, 'Ioannina', 45444, 2651023590, 'SpeedTurtle Ioanninon', 39.670467, 20.850679),
(17, 'SpeedTurtle Ioanninon', 'Thoma Paschidi', 66, 'Ioannina', 45445, 2651039945, '', 39.680855, 20.832848),
(19, 'SpeedTurtle Tepeleniou 6', 'Tepeleniou', 6, 'Ioannina', 45333, 2651046987, 'SpeedTurtle Ioanninon', 39.667545, 20.845070),
(20, 'SpeedTurtle Akadimias 4', 'Akadimias', 4, 'Ioannina', 45332, 2651077878, 'SpeedTurtle Ioanninon', 39.661686, 20.849108),
(32, 'SpeedTurtle Psaron 154', 'Psaron', 154, 'Kalamata', 24100, 2721099827, 'SpeedTurtle Kalamatas', 37.025990, 22.109449),
(31, 'SpeedTurtle Athinon 99', 'Athinon', 99, 'Kalamata', 24100, 2721378492, 'SpeedTurtle Kalamatas', 37.040936, 22.101641),
(30, 'SpeedTirtle Aristomenous 23', 'Aristomenous', 23, 'Kalamata', 24100, 2721869344, 'SpeedTurtle Kalamatas', 37.040581, 22.111792),
(29, 'SpeedTurtle Kalamatas', 'Mavromichali', 85, 'Kalamata', 24100, 2721980392, '', 37.040886, 22.120020),
(5, 'SpeedTurtle Heraklion', 'Par. 3i Posidonos 1', 3, 'Heraklion', 71307, 2810222800, '', 35.339783, 25.147717);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) CHARACTER SET latin1 NOT NULL,
  `address` varchar(128) CHARACTER SET latin1 NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(1, 'SpeedTurtle Alexandroupoli', 'Agiou Dimitriou 28-32, Alexandroupoli,\r\nTK:681 00, tel:2551026725', 40.855343, 25.861790),
(2, 'SpeedTurtle Kondili 35', 'Kondili 35, Alexandroupoli,TK:68100, tel:2551093875, hub:SpeedTurtle Alexandroupoli', 40.859261, 25.872768),
(3, 'SpeedTurtle 14is Maiou 30', '14is Maiou 30, Alexandroupoli, TK:68100, tel:2551093829, hub:SpeedTurtle Alexandroupolis\r\n', 40.847286, 25.875090),
(4, 'SpeedTurtle Solonos 41', 'Solonos 41, Alexandroupoli, TK:68100, tel:2551087594, hub:SpeedTurtle Alexandroupolis', 40.857105, 25.890688),
(5, 'SpeedTurtle Heraklion', 'Par. 3i Posidonos 1, Heraklion, TK:71307, tel:2810222800', 35.339783, 25.147717),
(6, 'SpeedTurtle 62 Martiron', '62 Martiron 193, Herakion, TK:71304, tel:281084736, hub:SpeedTurtle Heraklion', 35.329765, 25.110767),
(7, 'SpeedTurtle Ermi 2', 'Ermi 2, Heraklion, TK:71409, tel:281086749, hub:SpeedTurtle Heraklion', 35.312138, 25.154617),
(8, 'SpeedTurtle Dimokratias 93', 'Dimokratias 93, Heraklion, TK:71306, tel:281974529, hub:SpeedTurtle Heraklion', 35.329071, 25.138140),
(9, 'SpeedTurtle Aspropyrgos', 'Salaminos 72, Aspropyrgos, TK:19300, tel:2105585794', 38.056187, 23.586929),
(10, 'SpeedTurtle Agias Marinas 21', 'Agias Marinas 21, Aspropyrgos, TK:19300, tel:2109765243, hub:SpeedTurtle Aspropyrgos', 38.062492, 23.582834),
(11, 'SpeedTurtle Papaflessa 6', 'Papaflessa 6, Aspropyrgos, TK:19300, tel:2109837465, hub:SpeedTurtle Aspropyrgos', 38.065239, 23.592001),
(12, 'SpeedTurtle Philis 100', 'Philis 100, Aspropyrgos, TK:19300, tel:2109873645, hub:SpeeTurtle Aspropyrgos', 38.065090, 23.598305),
(13, 'SpeedTurtle Patras', 'Maizonos 87, Patra, TK:26221, tel:2619670594\r\n', 38.249802, 21.739080),
(14, 'SpeedTurtle Ionias 134', 'Ionias 134, Patra, TK:26224, tel:2610998274, hub:SpeedTurtle Patra', 38.232430, 21.740313),
(15, 'SpeedTurtle Parnassou 2', 'Parnassou 2, Patra, TK:26222, tel:2610318960, hub:SpeedTurtle Patra', 38.232494, 21.724949),
(16, 'SpeedTurtle Erithrou Stavrou 1', 'Erithrou Stavrou 1, Patra, TK:26331, tel:2610279873, hub:SpeedTurtle Patras', 38.237923, 21.755352),
(17, 'SpeedTurtle Ioanninon', 'Thoma Paschidi 66, Ioannina, TK:45445, tel:2651039945', 39.680855, 20.832848),
(18, 'SpeedTurtle Aneksartisias 129', 'Aneksartisias 129, Ioannina, TK:45444, tel:2651023590, hub:SpeedTurtle Ioanninon', 39.670467, 20.850679),
(19, 'SpeedTurtle Tepeleniou 6', 'Tepeleniou 6, Ioannina, TK:45333, tel:2651046987, hub:SpeedTurtle Ioanninon', 39.667545, 20.845070),
(20, 'SpeedTurtle Akadimias 4', 'Akadimias 4, Ioannina, TK:45332, tel:2651077878, hub:SpeedTurtle Ioanninon', 39.661686, 20.845070),
(21, 'SpeedTurtle Thessaloniki', '28is Oktovriou 47, Thessaloniki, TK:56123, tel:2310720555', 40.652836, 22.930849),
(22, 'SpeedTurtle 25is Martiou', '25is Martiou 63, Thessaloniki, TK:54248, tel:2310887982, hub:SpeedTurtle Thessaloniki', 40.600742, 22.959084),
(23, 'SpeedTurtle Paraskevopoulou 9', 'Paraskevopoulou 9, Thessaloniki, TK:54640, tel:2310819523, hub:SpeedTurtle Thessaloniki', 40.616364, 22.955214),
(24, 'SpeedTurtle Halkidikis 51', 'Halkidikis 51, Thessaloniki, TK:55535, tel:2310348090, hub:SpeedTurtle Thessaloniki', 40.595222, 22.994411),
(25, 'SpeedTurtle Larisas', 'Karanasiou 4, Larisa, TK:41447, tel:2410281778', 39.641926, 22.930849),
(26, 'SpeedTurtle Alkamenous', 'Alkamenous 12, Larisa, TK:41222, tel:2410619652, hub:SpeedTurtle Larisas', 39.635918, 22.401520),
(27, 'SpeedTurtle Mavrogenous 25', 'Mavrogenous 25, Larisa, TK:41334, tel:241098725, hub:SpeedTurtle Larisas', 39.625450, 22.394278),
(28, 'SpeedTurtle Ioanninon 115', 'Ioanninon 115, Larisa, TK:41334, tel:2410374861, hub:SpeedTurtle Larisas', 39.633080, 22.387863),
(29, 'SpeedTurtle Kalamatas', 'Mavromichali 85, Kalamata, TK:24100, tel:2721980392\r\n', 37.040886, 22.120020),
(30, 'SpeedTirtle Aristomenous 23', 'Aristomenous 23, Kalamata, TK:24100, tel:2721869344, hub:SpeedTurtle Kalamatas', 37.040581, 22.111792),
(31, 'SpeedTurtle Athinon 99', 'Athinon 99, Kalamata, TK:24100, tel:2721378492, hub:SpeedTurtle Kalamatas', 37.040936, 22.101641),
(32, 'SpeedTurtle Psaron 154', 'Psaron 154, Kalamata, TK:24100, tel:2721099827, hub:SpeedTurtle Kalamatas', 37.025990, 22.109449),
(33, 'SpeedTurtle Mitilinis', 'Kavetsou 6, Mitilini, TK:81100, tel:2251043572', 39.102879, 26.554344),
(34, 'SpeedTurtle Komninaki 47', 'Komninaki 47, Mitilini, TK:81100, tel:2251055948, hub:SpeedTurtle Mitilinis', 39.105953, 26.559019),
(35, 'SpeedTurtle Zalogou 25', 'Zalogou 25, Mitilini, TK:81100, tel:2251086721, hub:SpeedTurtle Mitilinis', 39.109364, 26.552830),
(36, 'SpeedTurtle Efstathiou Vostani 8', 'Efstratiou Vostani 8, Mitilini, TK:81100, tel:2610987263, hub:SpeedTurtle Mitilinis', 39.102207, 26.547985);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `katasthma_ap` varchar(128) CHARACTER SET latin1 NOT NULL,
  `city_ap` varchar(128) CHARACTER SET latin1 NOT NULL,
  `time` varchar(64) CHARACTER SET latin1 NOT NULL,
  `katasthma_pa` varchar(128) CHARACTER SET latin1 NOT NULL,
  `city_pa` varchar(128) CHARACTER SET latin1 NOT NULL,
  `track_id` varchar(32) CHARACTER SET latin1 NOT NULL,
  `speed` varchar(128) CHARACTER SET latin1 NOT NULL,
  `cost` int(11) NOT NULL,
  `qr_code` varchar(128) CHARACTER SET latin1 NOT NULL,
  `wait` int(11) NOT NULL,
  `locations` varchar(128) CHARACTER SET latin1 NOT NULL,
  `location` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `orders`
--

INSERT INTO `orders` (`order_id`, `katasthma_ap`, `city_ap`, `time`, `katasthma_pa`, `city_pa`, `track_id`, `speed`, `cost`, `qr_code`, `wait`, `locations`, `location`) VALUES
(37, 'Patra', 'Patra', '10:13:07pm', 'Kalamata', 'Kalamata', 'PA1503947587KA', 'express', 3, 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=PA1503947587KA&choe=UTF-8', 1, '', ''),
(38, 'Patras', 'Patra', '07:07:03pm', 'Ioanninon', 'Ioannina', '- scanning -', 'express', 4, '', 1, 'Patra-Heraklion-Tokyo', 'Tokyo');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Ευρετήρια για πίνακα `employees2`
--
ALTER TABLE `employees2`
  ADD PRIMARY KEY (`emplo2_id`);

--
-- Ευρετήρια για πίνακα `emplo_transit2`
--
ALTER TABLE `emplo_transit2`
  ADD PRIMARY KEY (`emplo3_id`);

--
-- Ευρετήρια για πίνακα `katasthmata`
--
ALTER TABLE `katasthmata`
  ADD PRIMARY KEY (`tel`);

--
-- Ευρετήρια για πίνακα `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT για πίνακα `employees2`
--
ALTER TABLE `employees2`
  MODIFY `emplo2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT για πίνακα `emplo_transit2`
--
ALTER TABLE `emplo_transit2`
  MODIFY `emplo3_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT για πίνακα `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT για πίνακα `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
