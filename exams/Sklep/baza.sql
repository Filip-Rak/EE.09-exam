-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Paź 2019, 09:28
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 
--
-- Baza danych: `sklep`
--
 
-- --------------------------------------------------------
 
--
-- Struktura tabeli dla tabeli `producenci`
--
 
CREATE TABLE `producenci` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(100) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `miasto` varchar(20) DEFAULT NULL,
  `rokWspolpraca` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Zrzut danych tabeli `producenci`
--
 
INSERT INTO `producenci` (`id`, `nazwa`, `adres`, `miasto`, `rokWspolpraca`) VALUES
(1, 'warzywa-rolnik', '12', 'Jany', 1990),
(2, 'Owoce-rolnik', '23', 'Kosatka', 2010),
(3, 'Owoce4You', '2', 'Jany', 1990),
(4, 'Warzywa4You', '65', 'Krasznice', 2015),
(5, 'FruitFarm', '1', 'Jany', 2001);
 
-- --------------------------------------------------------
 
--
-- Struktura tabeli dla tabeli `produkty`
--
 
CREATE TABLE `produkty` (
  `id` int(10) UNSIGNED NOT NULL,
  `Rodzaje_id` int(10) UNSIGNED NOT NULL,
  `Producenci_id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(100) DEFAULT NULL,
  `ilosc` double DEFAULT NULL,
  `cena` double DEFAULT NULL,
  `zdjecie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Zrzut danych tabeli `produkty`
--
 
INSERT INTO `produkty` (`id`, `Rodzaje_id`, `Producenci_id`, `nazwa`, `ilosc`, `cena`, `zdjecie`) VALUES
(1, 1, 2, 'gruszka', 20, 2.56, 'gruszka.jpg'),
(2, 1, 5, 'morela', 30, 5.78, 'morela.jpg'),
(3, 1, 3, 'arbuz', 2, 2.56, 'arbuz.jpg'),
(4, 1, 2, 'papaja', 5, 6.99, 'papaja.jpg'),
(5, 2, 4, 'marchew', 100, 1.56, 'marchew.jpg'),
(6, 2, 1, 'ziemniak', 120, 3.33, 'ziemniak.jpg'),
(7, 2, 4, 'koper', 2, 1.56, 'koper.jpg'),
(8, 2, 4, 'papryka', 50, 10.99, 'papryka.jpg');
 
-- --------------------------------------------------------
 
--
-- Struktura tabeli dla tabeli `rodzaje`
--
 
CREATE TABLE `rodzaje` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Zrzut danych tabeli `rodzaje`
--
 
INSERT INTO `rodzaje` (`id`, `nazwa`) VALUES
(1, 'owoce'),
(2, 'warzywa');
 
-- --------------------------------------------------------
 
--
-- Indeksy dla zrzutów tabel
--
 
--
-- Indeksy dla tabeli `producenci`
--
ALTER TABLE `producenci`
  ADD PRIMARY KEY (`id`);
 
--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);
 
--
-- Indeksy dla tabeli `rodzaje`
--
ALTER TABLE `rodzaje`
  ADD PRIMARY KEY (`id`);
 
-- --------------------------------------------------------
 
--
-- AUTO_INCREMENT for dumped tables
--
 
--
-- AUTO_INCREMENT dla tabeli `producenci`
--
ALTER TABLE `producenci`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
 
--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
 
--
-- AUTO_INCREMENT dla tabeli `rodzaje`
--
ALTER TABLE `rodzaje`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;