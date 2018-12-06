-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Dez 2018 um 17:44
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `web_e`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

CREATE TABLE `courses` (
  `CID` int(5) NOT NULL,
  `UID` int(5) NOT NULL,
  `Course` varchar(120) COLLATE utf8_unicode_520_ci NOT NULL,
  `Link` varchar(120) COLLATE utf8_unicode_520_ci NOT NULL,
  `Duration` int(5) NOT NULL,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Form` varchar(8) COLLATE utf8_unicode_520_ci NOT NULL,
  `Place` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `Created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`CID`, `UID`, `Course`, `Link`, `Duration`, `Start`, `End`, `Form`, `Place`, `Created`) VALUES
(1, 1, 'Bachelor of Science in Agronomie', 'https://www.bfh.ch/de/studium/bachelor/agrar_forst_und_lebensmittelwissenschaften/agronomie.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Zollikofen', '2018-12-02'),
(2, 1, 'Bachelor of Science in Agronomie', 'https://www.bfh.ch/de/studium/bachelor/agrar_forst_und_lebensmittelwissenschaften/agronomie.html', 8, '2019-09-17', '2019-06-30', 'TZ', 'Zollikofen', '2018-12-02'),
(3, 1, 'Bachelor of Arts in Musik', 'https://www.bfh.ch/de/studium/bachelor/design_musik_theater_und_andere_kuenste/musik.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Bern', '2018-12-02'),
(4, 1, 'Bachelor of Science in Sports', 'https://www.bfh.ch/de/studium/bachelor/sport.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Magglingen', '2018-12-02'),
(5, 1, 'Bachelor of Science in Sports', 'https://www.bfh.ch/de/studium/bachelor/sport.html', 8, '2019-09-17', '2019-06-30', 'TZ', 'Magglingen', '2018-12-02'),
(6, 1, 'Bachelor of Science in Medical Informatics', 'https://www.bfh.ch/de/studium/bachelor/technik_und_informatik/medizininformatik.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Biel', '2018-12-02'),
(7, 1, 'Bachelor of Arts in Konservierung', 'https://www.bfh.ch/de/studium/bachelor/design_musik_theater_und_andere_kuenste/konservierung.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Biel', '2018-12-02'),
(8, 1, 'Bachelor of Arts in Konservierung', 'https://www.bfh.ch/de/studium/bachelor/design_musik_theater_und_andere_kuenste/konservierung.html', 8, '2019-09-17', '2019-06-30', 'TZ', 'Biel', '2018-12-02'),
(9, 1, 'Bachelor of Science in Informatik', 'https://www.bfh.ch/de/studium/bachelor/technik_und_informatik/informatik.html', 8, '2019-09-17', '2019-06-30', 'TZ', 'Bern', '2018-12-02'),
(10, 1, 'Bachelor of Science in Informatik', 'https://www.bfh.ch/de/studium/bachelor/technik_und_informatik/informatik.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Bern', '2018-12-02'),
(11, 1, 'Bachelor of Science in Physiotherapie', 'https://www.bfh.ch/de/studium/bachelor/gesundheit/physiotherapie.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Basel', '2018-12-02'),
(12, 1, 'Bachelor of Science in Mikrotechnik', 'https://www.bfh.ch/de/studium/bachelor/technik_und_informatik/mikro_und_medizintechnik.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Biel', '2018-12-02'),
(13, 1, 'Bachelor of Science in Mikrotechnik', 'https://www.bfh.ch/de/studium/bachelor/technik_und_informatik/mikro_und_medizintechnik.html', 8, '2019-09-17', '2019-06-30', 'TZ', 'Biel', '2018-12-02'),
(14, 1, 'Bachelor of Science in Wirtschaftsinformatik', 'https://www.bfh.ch/de/studium/bachelor/wirtschaft/wirtschaftsinformatik.html', 8, '2019-09-17', '2019-06-30', 'TZ', 'Bern', '2018-12-02'),
(15, 1, 'Bachelor of Science in Wirtschaftsinformatik', 'https://www.bfh.ch/de/studium/bachelor/wirtschaft/wirtschaftsinformatik.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Bern', '2018-12-02'),
(16, 1, 'Bachelor of Science in Sozialer Arbeit', 'https://www.bfh.ch/de/studium/bachelor/soziale_arbeit.html', 6, '2019-09-17', '2019-06-30', 'VZ', 'Bern', '2018-12-02'),
(17, 1, 'Bachelor of Science in Sozialer Arbeit', 'https://www.bfh.ch/de/studium/bachelor/soziale_arbeit.html', 8, '2019-09-17', '2019-06-30', 'TZ', 'Bern', '2018-12-02'),
(18, 2, 'Bachelor in Wirtschaftsinformatik', 'https://www.fhnw.ch/de/studium/wirtschaft/wi', 6, '2019-09-12', '2019-06-30', 'VZ', 'Olten', '2018-12-02'),
(19, 2, 'Bachelor in Wirtschaftsinformatik', 'https://www.fhnw.ch/de/studium/wirtschaft/wi', 8, '2019-09-12', '2019-06-30', 'TZ', 'Olten', '2018-12-02'),
(20, 2, 'Bachelor in Sozialer Arbeit', 'https://www.fhnw.ch/de/studium/soziale-arbeit/bachelor', 8, '2019-09-17', '2019-06-30', 'TZ', 'Muttenz', '2018-12-02'),
(21, 2, 'Bachelor in Sozialer Arbeit', 'https://www.fhnw.ch/de/studium/soziale-arbeit/bachelor', 6, '2019-09-17', '2019-06-30', 'VZ', 'Muttenz', '2018-12-02'),
(22, 2, 'Bachelor of Science in Life Sciences', 'https://www.fhnw.ch/de/studium/lifesciences/bachelor/chemie', 6, '2019-09-12', '2019-06-30', 'VZ', 'Muttenz', '2018-12-02'),
(23, 2, 'Bachelor of Science in Life Sciences', 'https://www.fhnw.ch/de/studium/lifesciences/bachelor/chemie', 8, '2019-09-12', '2019-06-30', 'TZ', 'Muttenz', '2018-12-02'),
(24, 2, 'Master of Arts FHNW in Architektur', 'https://www.fhnw.ch/de/studium/architektur-bau-geomatik/master-studiengang-architektur', 4, '2019-09-17', '2019-06-30', 'VZ', 'Muttenz', '2018-12-02'),
(25, 2, 'Master of Science in Life Sciences', 'https://www.fhnw.ch/de/studium/lifesciences/master/chemie', 4, '2019-09-12', '2019-06-30', 'VZ', 'Muttenz', '2018-12-02'),
(26, 2, 'Master of Science in Life Sciences', 'https://www.fhnw.ch/de/studium/lifesciences/master/chemie', 6, '2019-09-12', '2019-06-30', 'TZ', 'Muttenz', '2018-12-02'),
(27, 2, 'Master of Science FHNW in International Management', 'https://www.fhnw.ch/de/studium/wirtschaft/msc-im', 5, '2019-09-12', '2019-06-30', 'TZ', 'Olten', '2018-12-02'),
(28, 2, 'Master of Science FHNW in International Management', 'https://www.fhnw.ch/de/studium/wirtschaft/msc-im', 3, '2019-09-12', '2019-06-30', 'VZ', 'Olten', '2018-12-02'),
(29, 2, 'Bachelor of Arts FHNW in Musik, Studienrichtung Komposition', 'https://www.fhnw.ch/de/studium/musik/klassik/bachelor-of-arts-in-musik/komposition', 6, '2019-09-12', '2019-06-30', 'VZ', 'Basel', '2018-12-02'),
(30, 2, 'Bachelor of Science FHNW in Maschinenbau', 'https://www.fhnw.ch/de/studium/technik/maschinenbau', 6, '2019-09-12', '2019-06-30', 'VZ', 'Brugg-Windisch', '2018-12-02'),
(31, 2, 'Bachelor of Science FHNW in Maschinenbau', 'https://www.fhnw.ch/de/studium/technik/maschinenbau', 8, '2019-09-12', '2019-06-30', 'TZ', 'Brugg-Windisch', '2018-12-02'),
(32, 2, 'Bachelor of Science FHNW in Informatik', 'https://www.fhnw.ch/de/studium/technik/informatik', 8, '2019-09-12', '2019-06-30', 'TZ', 'Brugg-Windisch', '2018-12-02'),
(33, 2, 'Bachelor of Science FHNW in Informatik', 'https://www.fhnw.ch/de/studium/technik/informatik', 6, '2019-09-12', '2019-06-30', 'VZ', 'Brugg-Windisch', '2018-12-02'),
(34, 2, 'Master of Science FHNW in Engineering mit Vertiefung in Geomatics', 'https://www.fhnw.ch/de/studium/architektur-bau-geomatik/master-studiengang-mse-geoinformationstechnologie', 3, '2019-09-17', '2019-06-30', 'VZ', 'Muttenz', '2018-12-02'),
(35, 2, 'Master of Science FHNW in Engineering mit Vertiefung in Geomatics', 'https://www.fhnw.ch/de/studium/architektur-bau-geomatik/master-studiengang-mse-geoinformationstechnologie', 5, '2019-09-17', '2019-06-30', 'TZ', 'Muttenz', '2018-12-02'),
(36, 3, 'Bachelor of Arts ZFH in Architektur', 'https://www.zhaw.ch/de/archbau/studium/bachelorstudiengang-architektur/', 6, '2019-09-12', '2019-06-30', 'VZ', 'Winterthur', '2018-12-02'),
(37, 3, 'Master of Arts ZFH in Architektur', 'https://www.zhaw.ch/de/archbau/studium/masterstudiengang-architektur/', 4, '2019-09-12', '2019-06-30', 'VZ', 'Winterthur', '2018-12-02'),
(38, 3, 'Bachelor of Science ZFH in Facility Management', 'https://www.zhaw.ch/de/lsfm/studium/bachelor/bachelor-in-facility-management/', 6, '2019-09-12', '2019-06-30', 'VZ', 'Wädenswil', '2018-12-02'),
(39, 3, 'Master of  Science (MSc) ZFH in Facility Management', 'https://www.zhaw.ch/de/lsfm/studium/master-of-science-in-facility-management/', 3, '2019-09-12', '2019-06-30', 'VZ', 'Wädenswil', '2018-12-02'),
(40, 3, 'Master of  Science (MSc) ZFH in Facility Management', 'https://www.zhaw.ch/de/lsfm/studium/master-of-science-in-facility-management/', 5, '2019-09-12', '2019-06-30', 'TZ', 'Wädenswil', '2018-12-02'),
(41, 3, 'Bachelor of Science (BSc) ZFH in Wirtschaftsinformatik', 'https://www.zhaw.ch/de/sml/studium/bachelor/wirtschaftsinformatik/', 6, '2019-09-19', '2019-06-30', 'VZ', 'Winterthur', '2018-12-02'),
(42, 3, 'Bachelor of Science (BSc) ZFH in Wirtschaftsinformatik', 'https://www.zhaw.ch/de/sml/studium/bachelor/wirtschaftsinformatik/', 8, '2019-09-19', '2019-06-30', 'TZ', 'Winterthur', '2018-12-02'),
(43, 3, 'Bachelor of Science ZFH in Sozialer Arbeit', 'https://www.zhaw.ch/de/sozialearbeit/studium/bachelor-in-sozialer-arbeit/', 9, '2019-09-19', '2019-06-30', 'TZ', 'Zürich', '2018-12-02'),
(44, 3, 'Bachelor of Science ZFH in Sozialer Arbeit', 'https://www.zhaw.ch/de/sozialearbeit/studium/bachelor-in-sozialer-arbeit/', 6, '2019-09-19', '2019-06-30', 'VZ', 'Zürich', '2018-12-02'),
(45, 3, 'Bachelor of Science ZFH in Betriebsökonomie', 'https://www.zhaw.ch/de/sml/studium/bachelor/betriebsoekonomie/', 6, '2019-09-19', '2019-06-30', 'VZ', 'Winterthur', '2018-12-02'),
(46, 3, 'Bachelor of Science ZFH in Betriebsökonomie', 'https://www.zhaw.ch/de/sml/studium/bachelor/betriebsoekonomie/', 8, '2019-09-19', '2019-06-30', 'TZ', 'Winterthur', '2018-12-02'),
(47, 3, 'Master of Science (MSc) ZFH in Accounting and Controlling', 'https://www.zhaw.ch/de/sml/studium/master/accounting-and-controlling/', 4, '2019-09-19', '2019-06-30', 'VZ', 'Winterthur', '2018-12-02');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `UID` int(5) NOT NULL,
  `School` varchar(80) COLLATE utf8_unicode_520_ci NOT NULL,
  `Street` varchar(60) COLLATE utf8_unicode_520_ci NOT NULL,
  `Place` varchar(60) COLLATE utf8_unicode_520_ci NOT NULL,
  `Postcode` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `E-Mail` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`UID`, `School`, `Street`, `Place`, `Postcode`, `E-Mail`, `Password`) VALUES
(1, 'BFH', 'Falkenplatz 24', 'Bern', '3012', 'admin@bfh.ch', 'bern'),
(2, 'FHNW', 'Riggenbachstrasse 16', 'Olten', '4600', 'admin@fhnw.ch', 'olten'),
(3, 'ZHAW', 'Gertrudstrasse 15', 'Winterthur', '8401', 'admin@zhaw.ch', 'winterthur');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `courses`
--
ALTER TABLE `courses`
  MODIFY `CID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
