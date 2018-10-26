-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 26, 2018 at 01:44 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `FED18`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `amount`, `username`) VALUES
(138, 'Rubinstar', 4, 6, 'maja');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`) VALUES
(1, 'Ingrid_Marie', 2),
(2, 'Honey_Crunch', 3),
(3, 'Rubinstar', 4),
(4, 'Discovery', 250);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(3, 'person2', '$2y$10$l1SordhhhyNkWNii6eCSaO1ETqFJQ.IpaDOxO7JXV.CJlzHl8F.za'),
(4, 'person2', '$2y$10$4bvoeBir0XKYouBhqBCpd.rR.tgYi0s6NRD7h9hs7kVq0h1IWmOAq'),
(5, 'hej', '$2y$10$eX2eoBujwOWLv7p8RMRkw.TGvYjAqis/BgUhsGbpHTA7nNq6MxlHy'),
(6, 'linda', '$2y$10$f7R54AiLMf91UuKCvQZSyuoB4wqRQefBEeZyDWTPRP97BEV38moq.'),
(7, 'my', '$2y$10$N1W80k33O/LQjrF18FoVMeV/NR4nI6CJvNqNkZMLga69AuOhDg8sO'),
(8, 'hej', '$2y$10$DyvQdpE9AqKmx/CuVxSlpeIxpxCNlmulb8HrSySpASr7wcm9jpzoW'),
(9, 'lisa', '$2y$10$hGE8dU03lHkNP2j1fPGu1.j6OH2drXXOFbsPNGxCUL6v0SNIcLEQ2'),
(10, 'alfons', '$2y$10$FWT1mRLPxNgaIw1l6Gl1/.Ii5J4UszCVMoGXB1w2O1ITgTyRuZF1m'),
(11, 'sonja', '$2y$10$Dev1kqIc/WfEokGO8ZQFYe3y/d4gehjVgfrTYJyLNNibxQxvoiIBi'),
(12, 'rut', '$2y$10$1Hd5OnEVvy7jd7Fa8nb2x.1lTfxqJIafvq6uUOtr90eZNfuK56Yo2'),
(13, 'sixten', '$2y$10$cT8pjyZPyqr4SdO932botOqwkGlBqTyYROQ/ITtVweLKgOUhje8g2'),
(14, 'lindas', '$2y$10$0khznrHOmdRrY8I9LEzcJOZO349gWnTF5JJxjil0KAKNZIF/ZVuMW'),
(15, 'axel', '$2y$10$lmxDcQyjvnOUGUiRpNxr.O8.nC2Ll0egPHxJu1C8kNClZ6EgtPRU6'),
(16, 'leif', '$2y$10$.7KooYqBrOCnJej.B.01PentJQyeefi1TtS0hFTqyEmIRHb.H90gS'),
(17, 'sonja', '$2y$10$8LMPkMxGLZ2CqT46d0epXe3u8O4I0o42j7KbbRx0XIVsNN8b7IqIi'),
(18, 'olof', '$2y$10$/B0R/TdrheMkN/2XhiTIiOsvagnF1jLutUqii8UvxFirRcESEMmFu'),
(19, 'östen', '$2y$10$wfFNLEHVEZZ7xdR1fQE5EeWvKhwWY946Qn3ccfcFz9SyODyMUW4JK'),
(20, 'hans', '$2y$10$.kALQGO11pxU5pY/U37k1erE8pLQGFSoiBaeRjCbBbZq8P/Bd8Mxy'),
(21, 'lotta', '$2y$10$u4oc2uWnnnf33H.20e.G4ObphvfQXvpRnqRLdKx4r8rt6L7TeBtea'),
(22, 'sofia', '$2y$10$Uvsjm2Adg6fybIgCbYvUb.Trc6rLXPc54jWl8.hPWLmstgNPa/dU.'),
(23, 'hans', '$2y$10$rgMcBoKrzH4Bn94g3EQJIumsx02XOiB6l/wZN2aIUzP07D1YtEcey'),
(24, 'minna', '$2y$10$fCumgwSPVQbFk4bGTnMDxeUnGC76gYWxxETBmpr0s4upMAsQG7pA2'),
(25, 'hej', '$2y$10$aNXY5h0AknXEF1FqLi/W4eFhTSF7sWJ0/VpIvPb2v.f4u6d5lGQ/G'),
(26, 'hej', '$2y$10$l5RbCuflb7Wv2GU8H7KXPOLeGLlZDzJWHimtBC8jSM5SfSGId3Aqq'),
(27, 'sonja', '$2y$10$PwgH85p0GTw2Xo2/UewOGOm0trWgYeIwMtNkymY5S6/3dKUTosthW'),
(28, 'soffa', '$2y$10$goLeYgvCiurS89Sfu73XpO3w/oTCgRVsld5M8QoiRUXNb4BFPQWOe'),
(29, 'rut', '$2y$10$v6fRu3Xjp7fzcgJkkYtlyuyBgNGDM4wljV2V3wwjNH9LGeJ.TQEbu'),
(30, 'test', '$2y$10$BGgyh3BGP0nlCqeoembRb.ZU5x3WuQhloIztYW71MQ5yUquj5GA8K'),
(31, 'maja', '$2y$10$O7/K9CSVi3MtoFt2.qxNUe5Gt6WdJ9FjHfAtPinKshlNtqaW9yIwa'),
(32, 'sol', '$2y$10$VRAPrXhYjRWXkfuZvzRgkeu3sspwACSxhFUfZN..pzgH6YK7A9Say'),
(33, 'linda', '$2y$10$0fCCBTpmr.RNMpD5wjm4l.9/PaNSt3lgOK.5IwRwrZhK1vY8v91ji'),
(34, 'linda', '$2y$10$.Kdu0u9PTyaEAGgVtmM//OjeyuCPCkLCQd/Fs2e.zZ.96e2raDdFW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
