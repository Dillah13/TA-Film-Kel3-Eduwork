-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 02:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film_ref`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_film`
--

CREATE TABLE `tb_film` (
  `id_film` int(10) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `tahun_film` int(4) NOT NULL,
  `id_sutradara` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `rating_film` float NOT NULL,
  `id_genre` int(10) NOT NULL,
  `daftar_pemain` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_film`
--

INSERT INTO `tb_film` (`id_film`, `nama_film`, `tahun_film`, `id_sutradara`, `gambar`, `rating_film`, `id_genre`, `daftar_pemain`, `sinopsis`) VALUES
(33, 'Blood', 2023, 2, 'https://awsimages.detik.net.id/community/media/visual/2023/03/01/sinopsi-film-blood-yang-akan-tayang-di-bioskop-medan.jpeg?w=1200', 4, 18, 'Michelle Monaghan', 'Jess (Michelle Monaghan), seorang ibu dan perawat yang baru saja berpisah dari suaminya, memindahkan anak-anaknya ke rumah pertanian keluarganya. Tak lama setelah menetap, Owen (Finlay Wojtak-Hissong), putra Jess yang masih kecil digigit oleh anjing pelih'),
(34, 'Ratu Dansa', 2022, 3, 'https://production-bo-indonesia.s3.ap-southeast-3.amazonaws.com/images/videos/portraits/WTk1FWrYqr3cIxZ2tAIYluk0PFpGUQ66oN4Jlg11.jpg', 3.5, 22, 'Marsha Aruan', 'Ratu Dansa mengisahkan tentang Hana dan Hira, dua gadis muda yang hidup di era yang berbeda, pada 2022 dan Sama-sama menghadapi dilema kehidupan muda, mereka berharap ada keajaiban yang menjawab harapan masing-masing.'),
(40, 'Fast X', 2023, 1, 'https://m.media-amazon.com/images/M/MV5BNzZmOTU1ZTEtYzVhNi00NzQxLWI5ZjAtNWNhNjEwY2E3YmZjXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg', 0, 17, 'Vin Diesel', 'Selama banyak misi dan melawan rintangan yang mustahil, Dom Toretto dan keluarganya telah mengakali dan mengalahkan setiap musuh di jalan mereka. Sekarang, mereka menghadapi lawan paling mematikan yang pernah mereka hadapi: Ancaman mengerikan yang muncul '),
(41, 'Jhonny English Reborn', 2011, 4, 'https://bacaterus.com/wp-content/uploads/2022/08/Johnny-English-Reborn_.webp', 0, 19, 'Rowan Atkinson', 'Delapan tahun setelah fim pertama, Johnny English berlatih beladiri di Tibet untuk melupakan kesalahannya akibat kegagalannya di Mozambik. Setelah mengalami berbagai latihan, MI7 meminta Johnny kembali bergabung bersama mereka. Sesampainya di London, John'),
(42, 'Fifty Shades Freed', 2018, 2, 'https://images.tokopedia.net/img/cache/700/hDjmkQ/2021/2/4/69190ff4-85df-4883-a66f-9f9a9109f0bb.jpg', 0, 23, 'Christian Grey', 'Setelah Ana berhasil meyakinkan Christian bahwa dirinya patut di cinta dan bisa menjalani kehidupan normal seperti pasangan lainnya. Ana pun berkomitmen dengan jati dirinya untuk bisa lebur dengan ’mainan’ Christian, yang sangat di sadarinya, tak mungkin '),
(43, 'Fury', 2014, 1, 'https://i.pinimg.com/originals/b3/72/3b/b3723b1a5a16ccbe684715da3ea30516.jpg', 0, 24, 'Brad Pitt', 'Cerita Fury diambil saat April 1945. Saat Sekutu melakukan serangan terakhir mereka di Palagan  Eropa, Sersan Angkatan Darat AS dari Divisi Lapis Baja ke-2, Don \"Wardaddy\" Collier  (Brad Pitt) memimpin sebuah tank Sherman dan lima awaknya dalam misi memat'),
(44, 'Cars 3', 2017, 3, 'https://lumiere-a.akamaihd.net/v1/images/p_cars3_19643_3ab8aca1.jpeg', 0, 19, 'Owen Wilson', 'Lightning McQueen, yang sekarang menjadi legenda balap Piston Cup tujuh kali, beserta pembalap veteran lainnya menemukan dirinya kesulitan menang melawan Jackson Storm, salah satu pembalap rookie generasi berikutnya yang menggunakan teknologi terbaru untu'),
(45, 'Insidious: The Red Door', 2023, 4, 'data:image/jpeg;base64,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', 0, 18, 'Lin Shaye', 'Pada film ini, keluarga Josh Lambert diganggu kembali oleh iblis paling jahat. Kali ini, teror tersebut dirasakan oleh anaknya, Dalton yang sudah beranjak dewasa. Keduanya berurusan dengan masalah ingatan dari masa lalu mereka, yang mereka sendiri tidak t');

-- --------------------------------------------------------

--
-- Table structure for table `tb_genre`
--

CREATE TABLE `tb_genre` (
  `id_genre` int(10) NOT NULL,
  `nama_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_genre`
--

INSERT INTO `tb_genre` (`id_genre`, `nama_genre`) VALUES
(17, 'Action'),
(18, 'Horror'),
(19, 'Comedy'),
(22, 'Drama'),
(23, 'Romance'),
(24, 'War');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(10) NOT NULL,
  `nama_komentar` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL,
  `id_film` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `nama_komentar`, `rating`, `isi_komentar`, `tanggal_komentar`, `id_film`) VALUES
(148, 'Udin', 3, 'Bagus Sekali Film nya', '2023-06-20', 33),
(149, 'Udin', 4, 'Filmnya Mantap', '2023-06-20', 33),
(150, 'Udin', 5, 'Filmnya baik', '2023-06-20', 34),
(151, 'Udin', 3, 'Tailwind Ku ', '2023-06-20', 33),
(152, 'Fathan M', 2, 'Baik', '2023-06-21', 34),
(153, 'Fadillah Kusnandar', 5, 'kerennn', '2023-06-21', 33),
(154, 'Fadillah Kusnandar', 5, 'p', '2023-06-21', 33);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sutradara`
--

CREATE TABLE `tb_sutradara` (
  `id_sutradara` int(11) NOT NULL,
  `nama_sutradara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sutradara`
--

INSERT INTO `tb_sutradara` (`id_sutradara`, `nama_sutradara`) VALUES
(1, 'Fadillah Kusnandar'),
(2, 'Ezra Maulana'),
(3, 'Ida Ayu Bintang'),
(4, 'Fattah Ilham');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `photo_profile` text NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_lengkap`, `photo_profile`, `role`) VALUES
(2, 'falonez', '$2y$10$S7dYryAcuoW6jKIQk2YvHu.l6nd7LD7krbmtlJ275jFaSc7C1Lbhu', 'Alonez', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fbustanulathfal.sch.id%2Fgambar-mewarnai-masjid-tiga-kubah%2F&psig=AOvVaw1HlREvA_4B6RJEIM_iW5LE&ust=1687163312375000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCLiBrKCzzP8CFQAAAAAdAAAAABAJ', 'admin'),
(6, 'ezra', '$2y$10$jQvKdaolYe2XEXOjwDv5.eJdZz7XUI2324o0Td5L1JOtBwrC5sLNK', 'Ezra', 'https://www.copaster.com/wp-content/uploads/2023/03/pp-kosong-wa-default-300x279.jpeg', 'admin'),
(7, 'fadil123', '$2y$10$zr0Cof0kEBoSW0ZVJgjcGOSSlH2hnENqJiVf/5tTYChNrFY80QtzO', 'Fadillah Kusnandar', '', 'admin'),
(8, 'userfadil', '$2y$10$Jdn7yKrCLjiWmSx6MRAkd.IOw6bWtjrHXeH9URf7PBYdvelvwHVri', 'fadilah', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_film`
--
ALTER TABLE `tb_film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `relasi_genre` (`id_genre`),
  ADD KEY `id_sutradara` (`id_sutradara`),
  ADD KEY `id_gambar` (`gambar`(3072));

--
-- Indexes for table `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `relasi_komentar` (`id_film`);

--
-- Indexes for table `tb_sutradara`
--
ALTER TABLE `tb_sutradara`
  ADD PRIMARY KEY (`id_sutradara`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_film`
--
ALTER TABLE `tb_film`
  MODIFY `id_film` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id_genre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `tb_sutradara`
--
ALTER TABLE `tb_sutradara`
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_film`
--
ALTER TABLE `tb_film`
  ADD CONSTRAINT `tb_film_ibfk_2` FOREIGN KEY (`id_sutradara`) REFERENCES `tb_sutradara` (`id_sutradara`),
  ADD CONSTRAINT `tb_film_ibfk_3` FOREIGN KEY (`id_genre`) REFERENCES `tb_genre` (`id_genre`);

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `tb_film` (`id_film`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
