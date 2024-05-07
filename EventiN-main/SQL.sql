-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2024 at 07:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `EventiN`
CREATE DATABASE IF NOT EXISTS `EventiN` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `EventiN`;

-- Table structure for table `events`
CREATE TABLE `events` (
                          `event_id` int(11) NOT NULL,
                          `event_name` varchar(45) DEFAULT NULL,
                          `event_date` date NOT NULL,
                          `event_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `events`
INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_price`) VALUES
                                                                                 (1, 'Концерт на Лора Караджова', '2024-02-20', 20),
                                                                                 (2, 'Представление "Ромео и Жулиета"', '2024-02-25', 15),
                                                                                 (3, 'Футболен мач "Левски" - "ЦСКА"', '2024-02-28', 30);

-- Table structure for table `reservations`

-- Table structure for table `users`
CREATE TABLE `users` (
                         `user_id` int(11) NOT NULL,
                         `username` varchar(45) NOT NULL,
                         `password` varchar(45) NOT NULL,
                         `isAdmin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `users`
INSERT INTO `users` (`user_id`, `username`, `password`, `isAdmin`) VALUES
                                                                       (1, 'IvanIvanov', 'ivanov123', 0),
                                                                       (2, 'Petar Stoqnov', 'stoqnov34', 0),
                                                                       (3, 'Marina Aleksandrova', 'aleksandrova11', 0),
                                                                       (4, 'demo', '1234', 1);

CREATE TABLE `reservations` (
                                `reservation_id` int(11) NOT NULL,
                                `user_id` int(11) DEFAULT NULL,
                                `event_id` int(11) DEFAULT NULL,
                                `num_tickets` int(11) DEFAULT NULL,
                                `reservation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `reservations`
INSERT INTO `reservations` (`reservation_id`, `user_id`, `event_id`, `num_tickets`, `reservation_date`) VALUES
                                                                                                            (1, 1, 2, 2, '2024-01-15 00:00:00'),
                                                                                                            (2, 2, 1, 1, '2024-01-22 00:00:00'),
                                                                                                            (3, 3, 3, 4, '2024-02-02 00:00:00');


-- Indexes for dumped tables
--
-- Indexes for table `events`
ALTER TABLE `events`
    ADD PRIMARY KEY (`event_id`);

-- Indexes for table `reservations`
ALTER TABLE `reservations`
    ADD PRIMARY KEY (`reservation_id`);

-- Indexes for table `users`
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`);

-- AUTO_INCREMENT for dumped tables
--
-- AUTO_INCREMENT for table `events`
ALTER TABLE `events`
    MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT for table `reservations`
ALTER TABLE `reservations`
    MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `reservations`
    ADD CONSTRAINT `fk_user_id`
        FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
    ADD CONSTRAINT `fk_event_id`
    FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);
COMMIT;