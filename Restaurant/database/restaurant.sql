-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 05:43 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `articol`
--

CREATE TABLE `articol` (
  `ArticolID` int(11) NOT NULL,
  `NumeArticol` varchar(50) NOT NULL,
  `CategorieID` int(11) NOT NULL,
  `Pret` decimal(10,0) NOT NULL,
  `Ingrediente` varchar(100) NOT NULL,
  `ImagineArticol` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articol`
--

INSERT INTO `articol` (`ArticolID`, `NumeArticol`, `CategorieID`, `Pret`, `Ingrediente`, `ImagineArticol`) VALUES
(1, 'Pizza Al Tono', 1, '29', 'blat, ulei de masline, salsa di pomodoro, mozzarella, ton, masline, ceapa, 850g', 0x70697a7a612f70697a7a612d616c2d746f6e6f2e706e67),
(2, 'Pizza Superdeluxe', 1, '30', 'blat, ulei de masline, salsa di pomodoro, extra mozzarella, salam, sunca, cabanos, ciuperci, ceapa, ', 0x70697a7a612f70697a7a612d737570657264656c7578652e706e67),
(3, 'Pizza Deluxe', 1, '30', 'blat, ulei de masline, salsa di pomodoro, mozzarella, salam, sunca, ciuperci proaspete, ceapa, ardei', 0x70697a7a612f70697a7a612d64656c7578652e706e67),
(4, 'Pizza Meat Deluxe', 1, '30', 'blat, ulei de masline, salsa di pomodoro, mozzarella, cabanos, sunca presata, piept de pui, extra sa', 0x70697a7a612f70697a7a612d6d6561742d64656c7578652e706e67),
(5, 'Pizza Gurmand', 1, '30', 'blat, ulei de masline, mozzarella, salsa di pomodoro, salam, sunca presata, kaizer, carnati ardelene', 0x70697a7a612f70697a7a612d6775726d616e642e706e67),
(6, 'Pizza Capriciosa', 1, '30', 'blat, ulei de masline, salsa di pomodoro, mozzarella, cabanos, ton, ceapa, rosii, lamaie, 850g', 0x70697a7a612f70697a7a612d636170726963696f73612e706e67),
(7, 'Pizza Salami', 1, '29', 'blat, ulei de masline, salsa di pomodoro, mozzarella, extra salam uscat, 850g', 0x70697a7a612f70697a7a612d73616c616d692e706e67),
(8, 'Pizza Prosciutto', 1, '38', 'blat, ulei de masline, salsa di pomodoro, extra mozzarella, gorgonzola, prosciutto crudo, 850g', 0x70697a7a612f70697a7a612d70726f7363697574746f2e706e67),
(9, 'Pizza Formaggi', 1, '35', 'blat, ulei de masline, salsa di pomodoro, extra mozzarella, cascaval, gorgonzola, parmezan, mascarpo', 0x70697a7a612f70697a7a612d666f726d616767692e706e67),
(10, 'Pizza Fresca', 1, '29', 'blat, ulei de masline, salsa di pomodoro, mozzarella, gorgonzola, salam uscat, piept de pui, rosii, ', 0x70697a7a612f70697a7a612d6672657363612e706e67),
(11, 'Pizza Prosciutto Funghi', 1, '29', 'blat, ulei de masline, salsa di pomodoro, extra mozzarella, sunca, ciuperci cu usturoi, 850g', 0x70697a7a612f70697a7a612d70726f7363697574746f2d66756e6768692e706e67),
(12, 'Pizza Picante', 1, '29', 'blat, ulei de masline, mozzarella, salsa di pomodoro, chorizo, 850g', 0x70697a7a612f70697a7a612d706963616e74652e706e67),
(13, 'Pizza Bacon', 1, '30', 'blat, ulei de masline, salsa di pomodoro, mozzarella, sunca presata, ciuperci proaspete, ceapa rosie', 0x70697a7a612f70697a7a612d6261636f6e2e706e67),
(14, 'Manly', 2, '62', 'branza cheddar, bacon, ceapa, sos', 0x627572676572692f6d616e6c792e706e67),
(15, 'Cali', 2, '56', 'salata, rosii, ceapa, mustar, castraveti, unt', 0x627572676572692f63616c692e706e67),
(16, 'The Original Burger', 2, '68', 'ceapa, branza, mustar, muraturi, salata, rosii', 0x627572676572692f7468655f6f726967696e616c5f6275726765722e706e67),
(17, 'Ultimate Bacon', 2, '60', 'bacon, branza cheddar, ceapa, salata, unt', 0x627572676572692f756c74696d6174655f6261636f6e2e706e67),
(18, 'Vegan BBQ', 2, '51', 'mustar, salsa, bbq, sos, salata coleslaw, jalapeno', 0x627572676572692f766567616e5f6262712e706e67),
(19, 'Umami', 2, '58', 'parmesan frico, ciuperci shiitake, rosii, ceapa caramelizata, sos', 0x627572676572692f756d616d692e706e67),
(20, 'Classic Cheeseburger', 2, '51', 'sos, branza, salata, ceapa, rosii', 0x627572676572692f636c61737369635f6368656573656275726765722e706e67),
(21, 'Throwback', 2, '56', 'branza alba cheddar, mustar, sos, castraveti, ceapa', 0x627572676572692f7468726f776261636b2e706e67),
(22, 'Trufflemaker', 2, '55', 'mustar, salsa, trufe', 0x627572676572692f74727566666c656d616b65722e706e67),
(23, 'Paste Cu Fructe De Mare', 3, '45', 'paste, creveti decortificati, calamar, creveti black tiger, carne scoici, busuioc, verdeata, rosii, ', 0x70617374652f70617374655f7370656369616c69746174695f6672756374655f6d6172655f6269672e706e67),
(24, 'Penne Cu Ton', 3, '30', 'penne, ton in ulei, rosii decojite, patrunjel, ardei iute, usturoi, busuioc', 0x70617374652f70656e6e652d63752d746f6e2d646f706f2d706f636f2e706e67),
(25, 'Penne Quattro Formaggi', 3, '29', 'penne, smantana, gorgonzola, parmezan, mozzarella, branza Brie', 0x70617374652f70617374655f70656e6e655f71756174726f5f666f726d616767695f6269672e706e67),
(26, 'Spaghetti Carbonara', 3, '25', 'spaghetti, ou, smantana, parmezan, bacon', 0x70617374652f70617374655f73706167686574695f636172626f6e6172615f6269672e706e67),
(27, 'Spaghetti Cu Scoici', 3, '30', 'spaghetti, scoici, usturoi, rosii, busuioc, vin alb, verdeata, ardei iute', 0x70617374652f7370616768657474692d63752d73636f6963692e706e67),
(28, 'Spaghetti Torinesse', 3, '29', 'spaghetti, file de vita, sos de rosii, ciuperci, usturoi, busuioc', 0x70617374652f7370616768657474692d746f72696e657373652e706e67),
(29, 'Tagliatelle Cu Ragu De Vita', 3, '25', 'tagliatelle, carne ragu de vita, smantana, parmezan, verdeata', 0x70617374652f70617374655f7461676c696174656c6c655f626f6c6f676e657a655f6269672e706e67),
(30, 'Tagliatelle Cu Somon Afumat', 3, '29', 'tagliatelle, somon fume, smantana', 0x70617374652f70617374655f7461676c696174656c6c655f736f6d6f6e5f6166756d61745f6269672e706e67),
(31, 'Tortelini Cu Sunca', 3, '29', 'paste umplute, parmezan, sunca, smantana', 0x70617374652f70617374655f746f7274656c696e695f73756e63615f736d616e74616e615f6269672e706e67),
(32, 'Salata Caesar', 4, '24', 'salata verde, crutoane, anchois, iaurt, piept de pui grill, focaccia', 0x73616c6174652f73616c6174655f6361657361725f6269672e706e67),
(33, 'Salata Cu Piept De Pui', 4, '19', 'rosii, castraveti, salata verde, iaurt, piept de pui grill, porumb, ardei gras, marar, focaccia', 0x73616c6174652f73616c6174655f70696570745f7075695f6269672e706e67),
(34, 'Salata Cu Ton', 4, '28', 'salata verde, ton, rosii, castraveti, ou, ardei gras, avocado, focaccia', 0x73616c6174652f73616c6174655f746f6e5f6269672e706e67),
(35, 'Salata Greceasca', 4, '19', 'rosii, castraveti, ardei gras, ceapa, branza feta, masline, oregano, focaccia', 0x73616c6174652f73616c6174655f6772656365617363615f7075695f6269672e706e67),
(36, 'Ciorba De Burta', 5, '15', 'supa de vita, burta de vita, smantana, oua, legume, ceapa, telina, focaccia', 0x737570652f63696f7262615f64655f62757274615f6269672e706e67),
(37, 'Ciorba De Vacuta', 5, '15', 'pulpa de vita, morcov, telina, ceapa, mazare, ardei gras, focaccia', 0x737570652f63696f7262615f64655f7661637574615f6269672e706e67),
(38, 'Supa De Pui', 5, '14', 'piept de pui, telina, morcov, ceapa, pastarnac, patrunjel, taitei de casa, focaccia', 0x737570652f63696f7262655f737570615f7075695f6269672e706e67),
(39, 'Coca Cola', 7, '8', '1,25L', 0x626175747572692f636f63612d636f6c612d312d373137392e706e67),
(40, 'Fanta de Portocal', 7, '8', '1,25L', 0x626175747572692f46616e74612e706e67),
(41, 'Sprite', 7, '8', '1,25L', 0x626175747572692f7370726974652e706e67),
(42, 'Dorna Apa Plata', 7, '6', '2L', 0x626175747572692f446f726e612e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `CategorieID` int(11) NOT NULL,
  `Nume` varchar(30) NOT NULL,
  `MenuID` int(11) NOT NULL,
  `FurnitorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`CategorieID`, `Nume`, `MenuID`, `FurnitorID`) VALUES
(1, 'Pizza', 1, 1),
(2, 'Burgeri', 1, 2),
(3, 'Paste', 1, 1),
(4, 'Salate', 2, 3),
(5, 'Supe', 2, 3),
(6, 'Deserturi', 3, 4),
(7, 'Bauturi', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categorie_furnitor`
--

CREATE TABLE `categorie_furnitor` (
  `CategorieID` int(11) NOT NULL,
  `FurnitorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ClientID` int(11) NOT NULL,
  `NumeClient` varchar(30) NOT NULL,
  `PrenumeClient` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefon` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ClientID`, `NumeClient`, `PrenumeClient`, `Email`, `Telefon`) VALUES
(1, 'Alexandru', 'Andrei', 'andrei@gmail.com', '0720654321'),
(2, 'Stoica', 'Maria', 'maria@gmail.com', '0730224321'),
(3, 'Constantinescu', 'Alin', 'alin@gmail.com', '0730552255'),
(4, 'Bobescu', 'Andreea', 'andreea@gmail.com', '0720223422'),
(5, 'Florinescu', 'Florin', 'florin@gmail.com', '0730335633');

-- --------------------------------------------------------

--
-- Table structure for table `comanda`
--

CREATE TABLE `comanda` (
  `ComandaID` int(11) NOT NULL,
  `ArticolID` int(11) NOT NULL,
  `DataComanda` date NOT NULL,
  `ClientID` int(11) NOT NULL,
  `Cantitate` int(11) NOT NULL,
  `DataRidicare` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comanda`
--

INSERT INTO `comanda` (`ComandaID`, `ArticolID`, `DataComanda`, `ClientID`, `Cantitate`, `DataRidicare`) VALUES
(1, 34, '2020-09-12', 3, 1, '2020-09-12'),
(2, 3, '2020-09-12', 1, 1, '2020-09-12'),
(3, 22, '2020-09-13', 1, 2, '2020-09-13'),
(4, 11, '2020-09-12', 2, 1, '2020-09-12'),
(5, 2, '2020-09-12', 4, 1, '2020-09-12'),
(6, 12, '2020-09-13', 5, 2, '2020-09-13'),
(7, 40, '2020-09-13', 2, 1, '2020-09-13'),
(8, 17, '2020-09-13', 3, 2, '2020-09-13'),
(9, 21, '2020-09-13', 1, 1, '2020-09-13'),
(10, 9, '2020-09-14', 4, 1, '2020-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `comanda_articole`
--

CREATE TABLE `comanda_articole` (
  `ComandaID` int(11) NOT NULL,
  `ArticolID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `furnitor`
--

CREATE TABLE `furnitor` (
  `FurnitorID` int(11) NOT NULL,
  `NumeFurnitor` varchar(30) NOT NULL,
  `Adresa` varchar(30) NOT NULL,
  `Telefon` char(10) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `furnitor`
--

INSERT INTO `furnitor` (`FurnitorID`, `NumeFurnitor`, `Adresa`, `Telefon`, `Email`) VALUES
(1, 'Pizza&Spaghetti', 'Bucuresti', '072039811', 'pizza_spaghetti@gmail.com'),
(2, 'BurgersCo', 'Cluj', '073024631', 'burgersco@gmail.com'),
(3, 'FermaRo', 'Galati', '073032945', 'fermaro@gmail.com'),
(4, 'DulcuriTraditionale', 'Timisoara', '072022215', 'dulcuri@gmail.com'),
(5, 'CocaCola', 'Bucuresti', '072229812', 'cocacola@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuID` int(11) NOT NULL,
  `DataInceput` date NOT NULL,
  `DataIncheiere` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuID`, `DataInceput`, `DataIncheiere`) VALUES
(1, '2020-09-12', '2020-09-13'),
(2, '2020-09-12', '2020-09-13'),
(3, '2020-09-12', '2020-09-13'),
(4, '2020-09-12', '2020-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `plata`
--

CREATE TABLE `plata` (
  `PlataID` int(11) NOT NULL,
  `ComandaID` int(11) NOT NULL,
  `DataPlata` date NOT NULL,
  `Suma` decimal(10,0) NOT NULL,
  `TipPlata` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plata`
--

INSERT INTO `plata` (`PlataID`, `ComandaID`, `DataPlata`, `Suma`, `TipPlata`) VALUES
(1, 1, '2020-09-12', '28', 'Cash'),
(2, 2, '2020-09-12', '30', 'Cash'),
(3, 3, '2020-09-12', '111', 'Cash'),
(4, 4, '2020-09-12', '29', 'Card'),
(5, 5, '2020-09-12', '30', 'Card'),
(6, 6, '2020-09-12', '57', 'Cash'),
(7, 7, '2020-09-12', '8', 'Cash'),
(8, 8, '2020-09-12', '120', 'Card'),
(9, 9, '2020-09-12', '56', 'Cash'),
(10, 10, '2020-09-12', '29', 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registration_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articol`
--
ALTER TABLE `articol`
  ADD PRIMARY KEY (`ArticolID`),
  ADD KEY `CategorieID` (`CategorieID`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`CategorieID`),
  ADD KEY `MenuID` (`MenuID`),
  ADD KEY `FurnitorID` (`FurnitorID`);

--
-- Indexes for table `categorie_furnitor`
--
ALTER TABLE `categorie_furnitor`
  ADD KEY `CategorieID` (`CategorieID`),
  ADD KEY `FurnitorID` (`FurnitorID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `comanda`
--
ALTER TABLE `comanda`
  ADD PRIMARY KEY (`ComandaID`),
  ADD KEY `ArticolID` (`ArticolID`),
  ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `comanda_articole`
--
ALTER TABLE `comanda_articole`
  ADD KEY `ComandaID` (`ComandaID`),
  ADD KEY `ArticolID` (`ArticolID`);

--
-- Indexes for table `furnitor`
--
ALTER TABLE `furnitor`
  ADD PRIMARY KEY (`FurnitorID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuID`);

--
-- Indexes for table `plata`
--
ALTER TABLE `plata`
  ADD PRIMARY KEY (`PlataID`),
  ADD KEY `ComandaID` (`ComandaID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comanda`
--
ALTER TABLE `comanda`
  MODIFY `ComandaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articol`
--
ALTER TABLE `articol`
  ADD CONSTRAINT `articol_ibfk_1` FOREIGN KEY (`CategorieID`) REFERENCES `categorie` (`CategorieID`);

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`MenuID`) REFERENCES `menu` (`MenuID`);

--
-- Constraints for table `categorie_furnitor`
--
ALTER TABLE `categorie_furnitor`
  ADD CONSTRAINT `categorie_furnitor_ibfk_1` FOREIGN KEY (`CategorieID`) REFERENCES `categorie` (`CategorieID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorie_furnitor_ibfk_2` FOREIGN KEY (`FurnitorID`) REFERENCES `furnitor` (`FurnitorID`);

--
-- Constraints for table `comanda`
--
ALTER TABLE `comanda`
  ADD CONSTRAINT `comanda_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `client` (`ClientID`);

--
-- Constraints for table `comanda_articole`
--
ALTER TABLE `comanda_articole`
  ADD CONSTRAINT `comanda_articole_ibfk_1` FOREIGN KEY (`ComandaID`) REFERENCES `comanda` (`ComandaID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comanda_articole_ibfk_2` FOREIGN KEY (`ArticolID`) REFERENCES `articol` (`ArticolID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plata`
--
ALTER TABLE `plata`
  ADD CONSTRAINT `plata_ibfk_1` FOREIGN KEY (`ComandaID`) REFERENCES `comanda` (`ComandaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
