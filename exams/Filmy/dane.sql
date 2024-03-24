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
-- Baza danych: `dane`
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
(9, 'VideoFun', 'Cybernetyki 3', 'Warszawa', 2000),
(10, 'Video', 'Harcerska 3', 'Tychy', 2010),
(11, 'NaszeFilmy', '23 Kwietnia 44', 'Szczecin', 1990);
 
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
  `opis` text,
  `cena` double DEFAULT NULL,
  `zdjecie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Zrzut danych tabeli `produkty`
--
 
INSERT INTO `produkty` (`id`, `Rodzaje_id`, `Producenci_id`, `nazwa`, `ilosc`, `opis`, `cena`, `zdjecie`) VALUES
(9, 12, 8, 'Star Wars 1', 20, 'Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy', 12.56, 'obraz1.jpg'),
(11, 12, 6, 'E.T.', 30, 'Przybysz z innej planety zaprzyjaznia sie z chlopcem i jego rodzina', 15.78, 'obraz2.jpg'),
(13, 12, 8, 'hobbit2', 2, 'Hobbit Bilbo Baggins wyrusza w niebezpieczna podroz z czarodziejem Gandalfem', 21.56, 'obraz3.jpg'),
(14, 12, 5, 'Fantasy2', 5, 'Elfy, krasnoludy i inne fantastyczne istoty w walce o swoja planete', 16.99, 'obraz4.jpg'),
(15, 12, 4, 'Za płotem vol. 2', 100, 'U sasasiada jest impreza...', 14.56, 'obraz5.jpg'),
(16, 12, 7, 'Warzywniak', 120, 'Warzywa i ich przygody', 13.33, 'obraz6.jpg'),
(17, 12, 7, 'Hen daleko...', 120, 'Za gorami, za lasami zyl sobie...', 23.33, 'obraz7.jpg'),
(18, 7, 7, 'Alien4', 2, 'Zaloga statku Nostromo odbiera tajemniczy sygnal laduje na planetoidzie', 17.56, 'obraz8.jpg'),
(22, 11, 4, 'Koralowa wyspa', 50, 'Hamprey Bogart w jednej ze swoich wielkich rol.', 12.99, 'obraz9.jpg'),
(23, 13, 4, 'krokodyl', 50, 'Gigantyczy krokodyl atakuje pewne miasto.', 11.99, 'obraz10.jpg'),
(25, 7, 4, 'SteamPunk', 50, 'Wizja postapokaliptycznej planety', 14.99, 'obraz11.jpg');
 
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
(7, 'horrory'),
(8, 'kryminalne'),
(9, 'komedie'),
(10, 'familijne'),
(11, 'obyczajowe'),
(12, 'fantastyczne'),
(13, 'przygodowe');
 
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