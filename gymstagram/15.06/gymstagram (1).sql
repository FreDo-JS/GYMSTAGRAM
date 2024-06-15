-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 15, 2024 at 08:25 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymstagram`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `KomentarzID` int(11) NOT NULL,
  `PostID` int(11) DEFAULT NULL,
  `UżytkownikID` int(11) DEFAULT NULL,
  `Treść` text NOT NULL,
  `DataDodania` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentarze`
--

INSERT INTO `komentarze` (`KomentarzID`, `PostID`, `UżytkownikID`, `Treść`, `DataDodania`) VALUES
(1, 1, 2, 'Świetny post, Jan!', '2024-06-09 08:36:21'),
(2, 1, 3, 'Witaj na portalu!', '2024-06-09 08:36:21'),
(3, 2, 1, 'Zgadzam się, Anno!', '2024-06-09 08:36:21'),
(4, 3, 4, 'Cześć Piotr! Witamy!', '2024-06-09 08:36:21'),
(5, 4, 1, 'Ja chętnie! Gdzie i kiedy?', '2024-06-09 08:36:21'),
(6, 1, 2, 'Świetny post, Jan!', '2024-06-15 14:26:31'),
(7, 1, 3, 'Witaj na portalu!', '2024-06-15 14:26:31'),
(8, 2, 1, 'Zgadzam się, Anno!', '2024-06-15 14:26:31'),
(9, 3, 4, 'Cześć Piotr! Witamy!', '2024-06-15 14:26:31'),
(10, 4, 1, 'Ja chętnie! Gdzie i kiedy?', '2024-06-15 14:26:31'),
(26, 1, 2, 'To jest świetny post!', '2024-06-15 14:34:53'),
(27, 2, 3, 'Dzięki za podzielenie się!', '2024-06-15 14:34:53'),
(28, 3, 1, 'Super wpis, gratulacje!', '2024-06-15 14:34:53'),
(29, 4, 4, 'Miło Cię poznać!', '2024-06-15 14:34:53'),
(30, 5, 1, 'Zgadzam się z Tobą!', '2024-06-15 14:34:53');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posty`
--

CREATE TABLE `posty` (
  `PostID` int(11) NOT NULL,
  `UżytkownikID` int(11) DEFAULT NULL,
  `Treść` text NOT NULL,
  `DataDodania` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posty`
--

INSERT INTO `posty` (`PostID`, `UżytkownikID`, `Treść`, `DataDodania`) VALUES
(1, 1, 'To jest mój pierwszy post!', '2024-06-09 08:36:21'),
(2, 2, 'Dzisiaj jest piękny dzień!', '2024-06-09 08:36:21'),
(3, 3, 'Cześć wszystkim, to jest mój pierwszy wpis na tej stronie.', '2024-06-09 08:36:21'),
(4, 4, 'Ktoś ma ochotę na kawę?', '2024-06-09 08:36:21'),
(5, 6, 'Zaczynam nowy program treningowy dziś!', '2024-06-15 14:31:34'),
(6, 7, 'Trening na bicepsach był świetny!', '2024-06-15 14:31:34'),
(7, 9, 'Dzisiejszy trening nogi mnie zabił...', '2024-06-15 14:31:34'),
(8, 5, 'Zaczynam nowy program treningowy dziś!', '2024-06-15 14:33:05'),
(9, 6, 'Trening na bicepsach był świetny!', '2024-06-15 14:33:05'),
(10, 7, 'Zdobyłem nowy rekord w przysiadach!', '2024-06-15 14:33:05'),
(11, 8, 'Dzisiejszy trening nogi mnie zabił...', '2024-06-15 14:33:05'),
(12, 9, 'Pierwszy dzień na siłowni. Czas na zmiany!', '2024-06-15 14:33:05'),
(13, 8, 'Zdobyłem nowy rekord w przysiadach!', '2024-06-15 14:31:34');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownicy`
--

CREATE TABLE `użytkownicy` (
  `UżytkownikID` int(11) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Hasło` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Imię` varchar(50) DEFAULT NULL,
  `Nazwisko` varchar(50) DEFAULT NULL,
  `DataUrodzenia` date DEFAULT NULL,
  `DataRejestracji` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `użytkownicy`
--

INSERT INTO `użytkownicy` (`UżytkownikID`, `Login`, `Hasło`, `Email`, `Imię`, `Nazwisko`, `DataUrodzenia`, `DataRejestracji`) VALUES
(1, 'jan.kowalski', 'haslo123', 'jan.kowalski@example.com', 'Jan', 'Kowalski', '1990-01-15', '2024-06-09 08:36:21'),
(2, 'anna.nowak', 'haslo456', 'anna.nowak@example.com', 'Anna', 'Nowak', '1985-05-22', '2024-06-09 08:36:21'),
(3, 'piotr.wisniewski', 'haslo789', 'piotr.wisniewski@example.com', 'Piotr', 'Wiśniewski', '1992-11-08', '2024-06-09 08:36:21'),
(4, 'katarzyna.zielinska', 'haslo101', 'katarzyna.zielinska@example.com', 'Katarzyna', 'Zielińska', '1995-07-30', '2024-06-09 08:36:21'),
(5, 'adam.kowalski', 'haslo123', 'adam.kowalski@example.com', 'Adam', 'Kowalski', '1992-08-25', '2024-06-15 14:27:49'),
(6, 'ewa.nowak', 'haslo456', 'ewa.nowak@example.com', 'Ewa', 'Nowak', '1990-04-12', '2024-06-15 14:27:49'),
(7, 'mateusz.wisniewski', 'haslo789', 'mateusz.wisniewski@example.com', 'Mateusz', 'Wiśniewski', '1995-11-30', '2024-06-15 14:27:49'),
(8, 'agnieszka.zielinska', 'haslo101', 'agnieszka.zielinska@example.com', 'Agnieszka', 'Zielińska', '1988-07-18', '2024-06-15 14:27:49'),
(9, 'karolina.szymanska', 'haslo202', 'karolina.szymanska@example.com', 'Karolina', 'Szymańska', '1993-02-09', '2024-06-15 14:27:49');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `znajomi`
--

CREATE TABLE `znajomi` (
  `ZnajomośćID` int(11) NOT NULL,
  `UżytkownikID1` int(11) DEFAULT NULL,
  `UżytkownikID2` int(11) DEFAULT NULL,
  `DataDodania` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` enum('oczekujące','zaakceptowane','odrzucone') DEFAULT 'oczekujące'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `znajomi`
--

INSERT INTO `znajomi` (`ZnajomośćID`, `UżytkownikID1`, `UżytkownikID2`, `DataDodania`, `Status`) VALUES
(1, 1, 2, '2024-06-09 08:36:21', 'zaakceptowane'),
(2, 1, 3, '2024-06-09 08:36:21', 'zaakceptowane'),
(3, 2, 4, '2024-06-09 08:36:21', 'oczekujące'),
(4, 3, 4, '2024-06-09 08:36:21', 'zaakceptowane');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`KomentarzID`),
  ADD KEY `PostID` (`PostID`),
  ADD KEY `UżytkownikID` (`UżytkownikID`);

--
-- Indeksy dla tabeli `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `UżytkownikID` (`UżytkownikID`);

--
-- Indeksy dla tabeli `użytkownicy`
--
ALTER TABLE `użytkownicy`
  ADD PRIMARY KEY (`UżytkownikID`),
  ADD UNIQUE KEY `Login` (`Login`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indeksy dla tabeli `znajomi`
--
ALTER TABLE `znajomi`
  ADD PRIMARY KEY (`ZnajomośćID`),
  ADD UNIQUE KEY `UżytkownikID1` (`UżytkownikID1`,`UżytkownikID2`),
  ADD KEY `UżytkownikID2` (`UżytkownikID2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `KomentarzID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `posty`
--
ALTER TABLE `posty`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2213;

--
-- AUTO_INCREMENT for table `użytkownicy`
--
ALTER TABLE `użytkownicy`
  MODIFY `UżytkownikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `znajomi`
--
ALTER TABLE `znajomi`
  MODIFY `ZnajomośćID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentarze`
--
ALTER TABLE `komentarze`
  ADD CONSTRAINT `komentarze_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `posty` (`PostID`),
  ADD CONSTRAINT `komentarze_ibfk_2` FOREIGN KEY (`UżytkownikID`) REFERENCES `użytkownicy` (`UżytkownikID`);

--
-- Constraints for table `posty`
--
ALTER TABLE `posty`
  ADD CONSTRAINT `posty_ibfk_1` FOREIGN KEY (`UżytkownikID`) REFERENCES `użytkownicy` (`UżytkownikID`);

--
-- Constraints for table `znajomi`
--
ALTER TABLE `znajomi`
  ADD CONSTRAINT `znajomi_ibfk_1` FOREIGN KEY (`UżytkownikID1`) REFERENCES `użytkownicy` (`UżytkownikID`),
  ADD CONSTRAINT `znajomi_ibfk_2` FOREIGN KEY (`UżytkownikID2`) REFERENCES `użytkownicy` (`UżytkownikID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
