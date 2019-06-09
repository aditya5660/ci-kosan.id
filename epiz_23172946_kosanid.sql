-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql311.epizy.com
-- Generation Time: Jan 09, 2019 at 08:12 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23172946_kosanid`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `idArtikel` varchar(255) NOT NULL,
  `judulArtikel` varchar(45) DEFAULT NULL,
  `isiArtikel` text,
  `tglArtikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idArtikel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`idArtikel`, `judulArtikel`, `isiArtikel`, `tglArtikel`, `image`) VALUES
('5c1672020755e', 'Kosan Ku', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-12-17 07:29:54', '5c1672020755e.png'),
('5c16ee858bd5d', 'Kost Idaman', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-12-17 07:29:45', '5c16ee858bd5d.png'),
('5c1997c8d384b', 'Jualan Kost', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet eget sit amet tellus cras adipiscing. Non diam phasellus vestibulum lorem sed risus ultricies tristique. Elit sed vulputate mi sit amet. Diam phasellus vestibulum lorem sed risus ultricies tristique. Enim nunc faucibus a pellentesque sit amet. Elementum integer enim neque volutpat ac. At consectetur lorem donec massa. Scelerisque in dictum non consectetur a erat. Nunc lobortis mattis aliquam faucibus purus. Aliquam sem fringilla ut morbi tincidunt augue interdum velit euismod. Vivamus arcu felis bibendum ut tristique et egestas quis ipsum. Tellus orci ac auctor augue mauris augue neque gravida. Eu feugiat pretium nibh ipsum.</p><p>Scelerisque purus semper eget duis at. Auctor augue mauris augue neque gravida in fermentum. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Eget arcu dictum varius duis. Ullamcorper malesuada proin libero nunc consequat. Vel pharetra vel turpis nunc. Interdum posuere lorem ipsum dolor sit. Mattis aliquam faucibus purus in massa tempor nec. Semper risus in hendrerit gravida rutrum quisque non. Nec ultrices dui sapien eget mi proin sed. Egestas sed sed risus pretium. Vitae et leo duis ut diam quam nulla porttitor massa. Lacus vel facilisis volutpat est velit. Leo vel orci porta non pulvinar neque. Arcu risus quis varius quam. Id leo in vitae turpis. Diam maecenas sed enim ut.</p><p>Nibh ipsum consequat nisl vel pretium lectus. Nulla pellentesque dignissim enim sit amet. Purus viverra accumsan in nisl nisi. Quisque id diam vel quam elementum pulvinar. Et malesuada fames ac turpis egestas maecenas pharetra convallis. Eleifend donec pretium vulputate sapien nec sagittis aliquam. Elit scelerisque mauris pellentesque pulvinar. Sed euismod nisi porta lorem mollis aliquam ut porttitor. Hac habitasse platea dictumst quisque sagittis. Faucibus turpis in eu mi. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Quis lectus nulla at volutpat diam ut venenatis tellus. Nascetur ridiculus mus mauris vitae ultricies leo integer. Id semper risus in hendrerit gravida rutrum quisque non. Mattis rhoncus urna neque viverra justo nec. Enim sit amet venenatis urna cursus eget. Amet luctus venenatis lectus magna fringilla.</p><p>Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Aliquam purus sit amet luctus. At tempor commodo ullamcorper a lacus vestibulum sed arcu non. Gravida dictum fusce ut placerat orci nulla. Risus pretium quam vulputate dignissim. Pretium vulputate sapien nec sagittis aliquam. Consequat id porta nibh venenatis. Fringilla urna porttitor rhoncus dolor purus non enim. Eget nullam non nisi est sit amet. Et molestie ac feugiat sed. Consectetur lorem donec massa sapien. Sed viverra ipsum nunc aliquet bibendum enim. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. At consectetur lorem donec massa sapien faucibus et.</p><p>Sodales ut etiam sit amet nisl purus in. Tempus imperdiet nulla malesuada pellentesque elit. Viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat. Ultricies lacus sed turpis tincidunt id. Aliquam nulla facilisi cras fermentum odio. Semper quis lectus nulla at volutpat diam. Augue neque gravida in fermentum. Laoreet sit amet cursus sit. Tristique senectus et netus et malesuada fames. Molestie a iaculis at erat pellentesque adipiscing commodo. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Interdum varius sit amet mattis vulputate. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Turpis egestas maecenas pharetra convallis. Convallis tellus id interdum velit laoreet id. Eget aliquet nibh praesent tristique magna. Nec tincidunt praesent semper feugiat nibh sed pulvinar proin gravida. Egestas dui id ornare arcu odio ut.</p><p>Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Sagittis purus sit amet volutpat consequat. Pharetra vel turpis nunc eget lorem. Cursus metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Commodo viverra maecenas accumsan lacus vel facilisis. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Arcu odio ut sem nulla pharetra diam sit amet nisl. Ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Congue mauris rhoncus aenean vel elit. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Semper risus in hendrerit gravida rutrum quisque. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus aenean. Sit amet commodo nulla facilisi. Orci eu lobortis elementum nibh tellus molestie nunc non blandit.</p><p>Nam at lectus urna duis convallis convallis tellus id interdum. Enim nunc faucibus a pellentesque sit amet porttitor. Mi proin sed libero enim sed. Nisl rhoncus mattis rhoncus urna neque. Pellentesque id nibh tortor id aliquet lectus. Auctor neque vitae tempus quam pellentesque nec nam. Tempus urna et pharetra pharetra massa massa. Amet nulla facilisi morbi tempus iaculis urna id volutpat. Ornare suspendisse sed nisi lacus sed viverra tellus. Bibendum enim facilisis gravida neque convallis a. Aliquet sagittis id consectetur purus ut faucibus pulvinar. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Mauris sit amet massa vitae tortor. Semper viverra nam libero justo laoreet sit amet cursus sit. At tellus at urna condimentum mattis pellentesque id nibh. Sodales ut eu sem integer vitae justo eget magna fermentum. Sit amet mauris commodo quis. Massa tempor nec feugiat nisl pretium fusce. Volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque.</p><p>Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Malesuada pellentesque elit eget gravida cum sociis. Odio aenean sed adipiscing diam donec adipiscing tristique risus. In fermentum et sollicitudin ac orci. Risus at ultrices mi tempus imperdiet nulla malesuada. Non tellus orci ac auctor augue mauris augue neque. Mattis enim ut tellus elementum sagittis vitae et leo. In hac habitasse platea dictumst. Vestibulum rhoncus est pellentesque elit.</p><p>Nisl condimentum id venenatis a condimentum vitae sapien. Ornare massa eget egestas purus viverra accumsan in nisl nisi. Vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt. Faucibus pulvinar elementum integer enim. Ultricies integer quis auctor elit sed vulputate mi. Bibendum enim facilisis gravida neque convallis a cras. Mauris sit amet massa vitae tortor condimentum lacinia quis. Pharetra sit amet aliquam id diam maecenas. In vitae turpis massa sed elementum tempus. Lobortis elementum nibh tellus molestie nunc non. Dapibus ultrices in iaculis nunc sed augue lacus. Purus ut faucibus pulvinar elementum integer. Mi quis hendrerit dolor magna.</p><p>Commodo quis imperdiet massa tincidunt. Et netus et malesuada fames ac. Condimentum lacinia quis vel eros donec ac. Tortor id aliquet lectus proin nibh nisl condimentum. Sit amet risus nullam eget felis eget nunc. Ultrices dui sapien eget mi. Magna fermentum iaculis eu non diam phasellus. Diam quis enim lobortis scelerisque fermentum dui faucibus in. Pellentesque massa placerat duis ultricies lacus. Odio tempor orci dapibus ultrices in iaculis nunc. Massa tempor nec feugiat nisl pretium. Nisl nisi scelerisque eu ultrices vitae auctor eu augue. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Interdum velit laoreet id donec ultrices tincidunt arcu. Quis auctor elit sed vulputate mi sit amet mauris. Maecenas sed enim ut sem. Pellentesque sit amet porttitor eget dolor morbi.</p>', '2018-12-19 00:58:48', '5c1997c8d384b.jpg'),
('5c25905881f21', 'Kost Idaman', '<p>asdjaklsdjhjklashdkljashd&nbsp;</p>', '2018-12-28 02:54:16', '5c25905881f21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `idBooking` varchar(255) NOT NULL,
  `idUser` varchar(255) NOT NULL,
  `idKost` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  `tglBooking` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idBooking`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idBooking`, `idUser`, `idKost`, `status`, `tglBooking`) VALUES
('5c278ba7508fd', '5c2637b84c9ce', '5c26452477daa', 0, '2018-12-29 14:58:47'),
('5c27b30385ced', '5c2637b84c9ce', '5c17c4dc734fa', 0, '2018-12-29 17:46:43'),
('5c27b5759a6c8', '2', '5c1e4855da041', 0, '2018-12-29 17:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `idfasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `NamaFasilitas` varchar(45) NOT NULL,
  `KodeFasilitas` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL,
  PRIMARY KEY (`idfasilitas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`idfasilitas`, `NamaFasilitas`, `KodeFasilitas`, `Status`) VALUES
(1, 'Wifi', '01', ''),
(2, 'AC', '02', ''),
(3, 'TV', '03', ''),
(4, 'Kamar Mandi Luar', '04', ''),
(5, 'Kasur', '04', ''),
(6, 'Kamar Mandi Dalam', '05', ''),
(7, 'Kipas Angin', '06', ''),
(8, 'Dapur Bersama', '07', ''),
(9, 'Kamar Kosongan', '08', ''),
(10, 'Lemari Pakaian', '09', ''),
(11, 'Meja Belajar', '10', ''),
(12, 'Free Listrik', '11', ''),
(13, 'Free Loundry', '12', '');

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE IF NOT EXISTS `kost` (
  `idKost` varchar(255) NOT NULL,
  `idUser` int(11) NOT NULL,
  `namaKost` varchar(45) DEFAULT NULL,
  `tipeKost` varchar(45) DEFAULT NULL,
  `ukuranKamar` int(11) DEFAULT NULL,
  `hargaBulanan` int(11) DEFAULT NULL,
  `hargaTahunan` int(11) DEFAULT NULL,
  `jamKunjung` varchar(45) DEFAULT NULL,
  `alamat` text,
  `kecamatan` varchar(45) DEFAULT NULL,
  `kabupatenKota` varchar(45) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `kodepos` int(11) DEFAULT NULL,
  `deskripsi` text,
  `fasilitas` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tglKost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idKost`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`idKost`, `idUser`, `namaKost`, `tipeKost`, `ukuranKamar`, `hargaBulanan`, `hargaTahunan`, `jamKunjung`, `alamat`, `kecamatan`, `kabupatenKota`, `provinsi`, `kodepos`, `deskripsi`, `fasilitas`, `image`, `tglKost`) VALUES
('5c17bf8e79ba9', 4, 'Kost Aditya Putra', 'Kost Pasutri', 0, 500000, 4000000, '', 'jl, Amikom', 'Condong Catur', 'Sleman', 'Yogyakarta', 55382, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Wifi//AC//TV//Kamar Mandi Luar//Kasur//Kamar Mandi Dalam//Kipas Angin//Dapur Bersama//Kamar Kosongan//Lemari Pakaian//Meja Belajar//Free Listrik//Free Loundry', '5c17bf8e79ba9.jpg', '2018-12-17 15:23:58'),
('5c17c4dc734fa', 4, 'Kost Ekslusif Seturan', 'Kost Putra', 12, 999999, 9999000, 'Bebas 24Jam', 'jl, Seturan', 'Condong Catur', 'Sleman', 'Yogyakarta', 55382, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Wifi//AC//TV//Kamar Mandi Luar//Kasur//Kamar Mandi Dalam//Kipas Angin//Dapur Bersama//Kamar Kosongan//Lemari Pakaian//Meja Belajar//Free Listrik//Free Loundry', '5c17c4dc734fa.jpg', '2018-12-17 15:46:54'),
('5c1e4855da041', 3, 'Kost Bima Mbantul', 'Kost Putra', 12, 999999, 4000000, 'Dibatasi', 'jl, Prawiro Kuat 129B', 'Condong Catur', 'Sleman', 'Yogyakarta', 55382, 'asdasdasdasd', 'Wifi//AC//TV//Kamar Mandi Luar//Kasur//Kamar Mandi Dalam//Kipas Angin//Dapur Bersama//Kamar Kosongan//Lemari Pakaian//Meja Belajar//Free Listrik//Free Loundry', '5c1e4855da041.jpg', '2018-12-26 08:01:47'),
('5c26452477daa', 5, 'Kost UIN Jakarta', 'Kost Putra', 12, 350000, 4000000, '', 'Jl. Nangka', 'Kebayoran Baru', 'Jakarta Selatan', 'Jakarta', 12312, 'Lorem', 'Wifi//AC//TV//Kamar Mandi Luar//Kasur//Kamar Mandi Dalam//Kipas Angin//Dapur Bersama//Kamar Kosongan//Lemari Pakaian//Meja Belajar//Free Listrik//Free Loundry', '5c26452477daa.jpg', '2018-12-28 15:45:40'),
('5c2c0d045ab24', 3, 'Kost Pak Sabar', 'Kost Campur', 12, 350000, 7000000, '', 'jl, Prawiro Kuat 129B', 'Condong Catur', 'Sleman', 'Yogyakarta', 55382, '', 'Wifi//AC//TV//Kamar Mandi Luar//Kasur//Kamar Mandi Dalam//Kipas Angin//Dapur Bersama//Kamar Kosongan//Lemari Pakaian//Meja Belajar//Free Listrik//Free Loundry', '5c2c0d045ab24.png', '2019-01-02 00:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` varchar(255) NOT NULL,
  `namaDepan` varchar(45) NOT NULL,
  `namaBelakang` varchar(45) NOT NULL,
  `noHp` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(45) NOT NULL DEFAULT 'default.jpg',
  `level` int(45) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `namaDepan`, `namaBelakang`, `noHp`, `email`, `password`, `image`, `level`) VALUES
('1', '', '', '', 'admin@kosan.id', '123qweasd', 'default.jpg', 2),
('2', 'Aditya', '', '', 'user@kosan.id', '123qweasd', 'default.jpg', 1),
('3', 'Bangkit', 'Prayogi', '085123456789', 'bangkit@gmail.com', '123qweasd', 'default.jpg', 0),
('4', '', '', '', 'owner1@kosan.id', '123qweasd', 'default.jpg', 0),
('5c2637b84c9ce', 'Aditya', 'Putra', '085334376496', 'aditya5660@gmail.com', '123qweasd', 'default.jpg', 1),
('5c26394e0a340', '', '', '', 'imadit@akbidkudus.ac.id', '123qweasd', 'default.jpg', 0),
('5c27b0573a768', '', '', '', 'user@gmail.com', '123qweasd`', 'default.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
