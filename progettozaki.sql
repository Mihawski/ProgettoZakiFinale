-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 25, 2022 alle 15:55
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progettozaki`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `africa`
--

CREATE TABLE `africa` (
  `nomeCittaAf` varchar(20) NOT NULL,
  `descrizioneCittaAf` varchar(255) NOT NULL,
  `immagineCittaAf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `africa`
--

INSERT INTO `africa` (`nomeCittaAf`, `descrizioneCittaAf`, `immagineCittaAf`) VALUES
('Cairo', 'Cairo is the capital of Egypt and the largest city in the Arab world.', 'afcairo.jpg'),
('Casablanca', 'Casablanca, also known in Arabic as Dar al-Bayda is the largest city in Morocco.', 'afcasablanca.jpg'),
('Addis Abeba', 'Addis Ababa, also known as Finfinne, is the capital and largest city of Ethiopia.', 'afaddisabeba.jpg'),
('Kampala', 'Kampala is the capital and largest city of Uganda and is divided into the five political divisions.', 'afkampala.jpg'),
('Dakar', 'Dakar is the capital and largest city of Senegal. The city of Dakar proper has a population of 1,030,594.', 'afdakar.jpg'),
('Windhoek', 'Windhoek is the capital and largest city of Namibia. It is located in central Namibia.', 'afwindhoek.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `america`
--

CREATE TABLE `america` (
  `nomeCittaAm` varchar(20) NOT NULL,
  `descrizioneCittaAm` varchar(255) NOT NULL,
  `immagineCittaAm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `america`
--

INSERT INTO `america` (`nomeCittaAm`, `descrizioneCittaAm`, `immagineCittaAm`) VALUES
('New York', 'New York, often called New York City, is the most populous city in the United States.', 'amnewyork.jpg'),
('Las Vegas', 'Las Vegas, often known simply as Vegas, is the 25th-most populous city in the United States.', 'amlasvegas.jpg'),
('Miami', 'Miami, officially the City of Miami, is a coastal metropolis in South Florida.', 'ammiami.jpg'),
('California', 'California is a state in the Western United States, located along the Pacific Coast.', 'amcalifornia.jpg'),
('Washington D.C.', 'Washington, D.C. is the capital city and federal district of the United States.', 'amwashington.jpg'),
('Texas', 'Texas is a state in the South Central region of the United States.', 'amtexas.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `asia`
--

CREATE TABLE `asia` (
  `nomeCitta` varchar(20) NOT NULL,
  `descrizioneCitta` varchar(255) NOT NULL,
  `immagineCitta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `asia`
--

INSERT INTO `asia` (`nomeCitta`, `descrizioneCitta`, `immagineCitta`) VALUES
('Thailand', 'Thailand, historically known as Siam and officially the Kingdom of Thailand, is a country in Southeast Asia.', 'thailand.jpg'),
('Singapore', 'Singapore is a sovereign island country and city-state in maritime Southeast Asia.', 'singapore,jpg.jpg'),
('New Delhi ', 'New Delhi is the capital of India and a part of the National Capital Territory of Delhi.', 'asianewdelhi.jpg'),
('Jerusalem', 'Jerusalem is a city in Western Asia and it is one of the oldest cities in the world.', 'asiagerusalemme.jpg'),
('Tokyo', 'Tokyo, officially the Tokyo Metropolis, is the capital and largest city of Japan', 'asiatokyo.jpg'),
('Bora Bora', 'Bora Bora is an island group in the Leeward Islands and has a total land area of 30.55 km².', 'borabora.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `europa`
--

CREATE TABLE `europa` (
  `nomeCittaEu` varchar(20) NOT NULL,
  `descrizioneCittaEu` varchar(255) NOT NULL,
  `immagineCittaEu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `europa`
--

INSERT INTO `europa` (`nomeCittaEu`, `descrizioneCittaEu`, `immagineCittaEu`) VALUES
('Paris', 'Paris is the capital and most populous city of France, with an estimated population of 2,165,423 residents.', 'paris.jpg'),
('Madrid', 'Madrid is the capital and most populous city of Spain. The city has almost 3.4 million inhabitants.', 'eumadrid.jpg'),
('Bruxelles', 'Brussels, officially the Brussels-Capital Region, is a region of Belgium comprising 19 municipalities.', 'eubruxelles.jpg'),
('Prague', 'Prague is the capital and largest city in the Czech Republic, and the historical capital of Bohemia.', 'euprague.jpg'),
('Budapest', 'Budapest is the capital and most populous city of Hungary. It is the ninth-largest city in the European Union.', 'eubudapest.jpg'),
('Florence', 'Florence is a city in Central Italy and the capital city of the Tuscany region.', 'euflorence.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
