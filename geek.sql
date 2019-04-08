-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 08 Kwi 2019, 15:11
-- Wersja serwera: 5.6.13
-- Wersja PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `geek`
--
CREATE DATABASE IF NOT EXISTS `geek` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `geek`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `flights`
--

CREATE TABLE IF NOT EXISTS `flights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `airplane` varchar(255) NOT NULL,
  `flightDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `flights`
--

INSERT INTO `flights` (`id`, `airplane`, `flightDate`) VALUES
(1, 'test', '2019-04-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
