-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране: 23 фев 2024 в 11:41
-- Версия на сървъра: 10.4.24-MariaDB
-- Версия на PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `20412`
--

CREATE SCHEMA EventiN;
-- --------------------------------------------------------

--
-- Структура на таблица `events_table`
--

CREATE TABLE EventiN.events (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(45) DEFAULT NULL,
  `event_date` date NOT NULL,
  `event_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `events_table`
--

INSERT INTO EventiN.events (`event_id`, `event_name`, `event_date`, `event_price`) VALUES
(1, 'Концерт на Лора Караджова', '2024-02-20', 20),
(2, 'Представление \"Ромео и Жулиета\"', '2024-02-25', 15),
(3, 'Футболен мач \"Левски\" - \"ЦСКА\"', '2024-02-28', 30);

-- --------------------------------------------------------

--
-- Структура на таблица `reservations_table`
--

CREATE TABLE EventiN.reservations (
  `reservation_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `event_id` varchar(45) DEFAULT NULL,
  `num_tickets` int(11) DEFAULT NULL,
  `reservation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `reservations_table`
--

INSERT INTO EventiN.reservations (`reservation_id`, `user_id`, `event_id`, `num_tickets`, `reservation_date`) VALUES
(1, '1', '2', 2, '2024-01-15 00:00:00'),
(2, '2', '1', 1, '2024-01-22 00:00:00'),
(3, '3', '3', 4, '2024-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Структура на таблица `users_table`
--

CREATE TABLE EventiN.users (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `users_table`
--

INSERT INTO EventiN.users (`user_id`, `username`, `password`) VALUES
(1, 'IvanIvanov', 'ivanov123'),
(2, 'Petar Stoqnov', 'stoqnov34'),
(3, 'Marina Aleksandrova', 'aleksandrova11');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `events_table`
--
ALTER TABLE EventiN.events
  ADD PRIMARY KEY (`event_id`);

--
-- Индекси за таблица `reservations_table`
--
ALTER TABLE EventiN.reservations
  ADD PRIMARY KEY (`reservation_id`);

--
-- Индекси за таблица `users_table`
--
ALTER TABLE EventiN.users
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events_table`
--
ALTER TABLE EventiN.events
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations_table`
--
ALTER TABLE EventiN.reservations
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE EventiN.users
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;