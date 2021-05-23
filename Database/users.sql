-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 09:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protonbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(12) NOT NULL,
  `usersNAME` varchar(32) NOT NULL,
  `usersEMAIL` varchar(128) NOT NULL,
  `usersPASS` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersNAME`, `usersEMAIL`, `usersPASS`) VALUES
(1, 'PineappleDavid', 'davidvuescu@gmail.com', '$2y$10$otBwaTy2cY1d76OKqbLLi..754/zFtLSrkNJjSi9xI98YVpJewLRa'),
(5, '123', '123@yahoo.com', '$2y$10$OdKBlFSkbBiQD5lgKHLSgufB6IWY7AiCXscSFOrDCnk64PnAIi8rC'),
(6, '4', '1234@yahoo.com', '$2y$10$XnMGVkcsg17.PX4Mpsgsoe0.35cVBSjUhEqqAab5/OdqxxXofe.ES'),
(7, 'kljadhsf', 'asdf@gmail.com', '$2y$10$T/6apCOtk7XuGb3Al08OhOaePrKN/ODYpLVtMdDS7r/HBGkL.5kb.'),
(8, 'asdfmovie', 'jasdhfkj@protonmail.com', '$2y$10$HtBfQuMAN8FrJLy5q7HelebQyD5Lvi.S70.A3CsuLbxTJ1s3cCwMC'),
(9, 'AristideTania942', 'Aristide.Tania@yahoo.com', 'd81bcacc7d018498fdbc4ba3332a7389'),
(10, 'CatrinelIuliu444', 'Catrinel.Iuliu@outlook.com', '24648ef7727db1d7c986fe4de048ca54'),
(11, 'ValentinAmza483', 'Valentin.Amza@yahoo.com', '10fa8e4f580fe249f4fa05f45d81e573'),
(12, 'SilvanaJaneta529', 'Silvana.Janeta@gmail.com', '2f38b5e1b2f645138bfd006f14dd37ff'),
(13, 'AntonelaOctaviana492', 'Antonela.Octaviana@protonmail.com', '98af9b125e9db8decc320107fdcc1095'),
(14, 'DoruCecil934', 'Doru.Cecil@protonmail.com', 'ae60f68e0af5346b111c1f67719c4c12'),
(15, 'TiberiaTania833', 'Tiberia.Tania@outlook.com', '89e35b4f3e1749d54eb9bfaba67bfac1'),
(16, 'CantemirIlarie437', 'Cantemir.Ilarie@yahoo.com', '3271cb03174872d5bb227b806cfc9354'),
(17, 'GeaninaTiberia488', 'Geanina.Tiberia@zoho.com', '0b365812b35105942f0bdb840bb34ed4'),
(18, 'TeohariAndreea852', 'Teohari.Andreea@zoho.com', 'bf9fb3759a3aa855b4625fdc67b8eed1'),
(19, 'FloareCarol942', 'Floare.Carol@outlook.com', 'f2c501a666a92406106f64da7a2de6fe'),
(20, 'SavaRafael955', 'Sava.Rafael@outlook.com', '7f020e8818a929a45db767d5b99dcd55'),
(21, 'AlexandrinaSilviana393', 'Alexandrina.Silviana@zoho.com', 'ea2623419b9e68f35f8ac76e4d5c43f5'),
(22, 'ElodiaMilena781', 'Elodia.Milena@zoho.com', '482f67a7b60831a079fcdb347c2b5f32'),
(23, 'GeorgiaMaximilian302', 'Georgia.Maximilian@zoho.com', 'f6c6185ca6c74076140de2db2eea2566'),
(24, 'NicolaieOtilia690', 'Nicolaie.Otilia@zoho.com', 'b9dc627b0cb6169c7d0c52834c55725f'),
(25, 'GeorgianaParaschiva564', 'Georgiana.Paraschiva@protonmail.com', 'c3ed8b0e3f7ba74af7bd92d8c440ac0a'),
(26, 'IonLuiza503', 'Ion.Luiza@yahoo.com', 'c558b689757aea949e7b274d92f53296'),
(27, 'GhenadieEdmond118', 'Ghenadie.Edmond@protonmail.com', 'e9ca18ca9687ce6c59bbd9a18d0118a8'),
(28, 'RomiParaschiva19', 'Romi.Paraschiva@yahoo.com', 'c325dcc421c77f3d8d8532abc3870322'),
(29, 'OctaviuOzana827', 'Octaviu.Ozana@protonmail.com', '5fbd53e83b5d671697459fe7d817936f'),
(30, 'IanisDominic410', 'Ianis.Dominic@protonmail.com', '47d88b4cbbd36067e80a139027819f7b'),
(31, 'PaulVioleta94', 'Paul.Violeta@protonmail.com', 'f6030e41a1208e88658d30e428d575cc'),
(32, 'BasarabAdina217', 'Basarab.Adina@protonmail.com', 'dbb5174d7bd3a88f024b466477901433'),
(33, 'RitaIlie527', 'Rita.Ilie@yahoo.com', 'e86a50782390512f06619b1eb19f4ade'),
(34, 'EdgarAndrian893', 'Edgar.Andrian@protonmail.com', '245adab4a24726b41e1621dc7ffc126f'),
(35, 'OrtansaDaniel448', 'Ortansa.Daniel@yahoo.com', '1c3a885401b3eeaf18824d856b0b1492'),
(36, 'SeverEmanuela375', 'Sever.Emanuela@yahoo.com', '2c3516abf3bb5d54116bb89cf2c4a812'),
(37, 'ElisabetaPanait31', 'Elisabeta.Panait@yahoo.com', '57c187c7f042d62fcf5334480835b6f7'),
(38, 'FlorianSuzana102', 'Florian.Suzana@yahoo.com', 'ff0f01ceb2e8cbeb096662676ad13be4'),
(39, 'AlexandruMonalisa263', 'Alexandru.Monalisa@yahoo.com', 'dbbdc605aea41275826d915abed613a7'),
(40, 'ZahariaFloriana844', 'Zaharia.Floriana@outlook.com', 'e68d2addc97e8fc3979d1571cd88d9bb'),
(41, 'RomanaNidia750', 'Romana.Nidia@yahoo.com', '0e7b6ea9ff9caef08671d672400ceb69'),
(42, 'DanaGherghina250', 'Dana.Gherghina@yahoo.com', 'b991d5939154f2b4592fa6ed0e6c71e5'),
(43, 'MirabelaVasile389', 'Mirabela.Vasile@yahoo.com', 'd84da8703ea9986853a59f62937ea185'),
(44, 'AuricaZeno570', 'Aurica.Zeno@zoho.com', 'e5224d18305dbd1178487968034b6dd4'),
(45, 'EusebiaLioara250', 'Eusebia.Lioara@gmail.com', '220217d88ea1495cda1fb4fdb70e84fc'),
(46, 'ZenoCarol641', 'Zeno.Carol@yahoo.com', '4db77ad4b2c07006011fd974f4097670'),
(47, 'FrusinaAlbertina31', 'Frusina.Albertina@yahoo.com', '4159de47cd6e21d9c2b2ffe1f25de614'),
(48, 'IonBernard399', 'Ion.Bernard@outlook.com', 'dae6425ee71eba5131e496b08019e37a'),
(49, 'SoranaSilviu702', 'Sorana.Silviu@protonmail.com', 'b0788c902e71d4bd94df513aa4ca2f1f'),
(50, 'IorguMina961', 'Iorgu.Mina@gmail.com', '5d55c8f2fc22a9f24611e95bab15a727'),
(51, 'EugeniaPanagachie832', 'Eugenia.Panagachie@protonmail.com', '9d0bb949154fc894faac88a134a32c5a'),
(52, 'CaterinaAtena45', 'Caterina.Atena@outlook.com', 'ad95762ce9ce6e1bfd16bfd762a30408'),
(53, 'AdaOctavian149', 'Ada.Octavian@gmail.com', '14a6c86e19d194074055ebc8c03aa409'),
(54, 'TiberiaPetrina37', 'Tiberia.Petrina@zoho.com', '13cdc8517a62b4e647fccd5bda08bb19'),
(55, 'ValterFausta197', 'Valter.Fausta@zoho.com', '5f67927811ac957788e097e0f589545a'),
(56, 'FabiaBartolomeu254', 'Fabia.Bartolomeu@outlook.com', 'fea296aad7cf135a47252f97413ef90b'),
(57, 'FabiaEliana863', 'Fabia.Eliana@zoho.com', '017d0b45fce4f5b2aab187af56373167'),
(58, 'DragaSabrina832', 'Draga.Sabrina@gmail.com', 'f5f163bc4001eb81f7d144962c0104ab'),
(59, 'SidoniaBogdan650', 'Sidonia.Bogdan@gmail.com', 'a3cf2d32cf27dc7de19a95600fa47999'),
(60, 'IlieMarcela678', 'Ilie.Marcela@gmail.com', 'fc451f05e294e2cf8e6a6d4c0142c3aa'),
(61, 'FlaviaLucia193', 'Flavia.Lucia@zoho.com', 'f7f2fbe022d55f70a036c1acdb8799b4'),
(62, 'EmilianIlona157', 'Emilian.Ilona@gmail.com', '9ce4d52eb7a0da5efd295944fc521b0d'),
(63, 'CorinaTeofil864', 'Corina.Teofil@zoho.com', '6882659fec1d903dc385840d0d10706f'),
(64, 'AchimMarinel36', 'Achim.Marinel@yahoo.com', '6526fe67aacfb77504c3f70aa337875f'),
(65, 'HoreaAvram632', 'Horea.Avram@gmail.com', '746603da6466d5070ff38850d718e036'),
(66, 'MarilenaIoan682', 'Marilena.Ioan@protonmail.com', '4fd1e18acd3ed175caf63c0569b78ce3'),
(67, 'EricJean640', 'Eric.Jean@yahoo.com', 'e41385e5a2db075fcda741feed04d1f2'),
(68, 'DomnicaAlina14', 'Domnica.Alina@gmail.com', 'c3dc37d7fc8c01b894831e97733365cb'),
(69, 'SvetlanaCarmen250', 'Svetlana.Carmen@zoho.com', '5bb35a8db0189e0e9386cadb1f255e10'),
(70, 'AndrianNelu931', 'Andrian.Nelu@yahoo.com', '61e351b0a2ca8fbf201a852a1b626b85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
