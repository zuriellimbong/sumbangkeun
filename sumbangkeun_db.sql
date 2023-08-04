-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 04:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumbangkeun_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamats`
--

CREATE TABLE `alamats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alamats`
--

INSERT INTO `alamats` (`id`, `alamat_name`, `created_at`, `updated_at`) VALUES
(1, 'Bandung', NULL, NULL),
(2, 'Jakarta', NULL, NULL),
(3, 'Medan', NULL, NULL),
(4, 'Surabaya', NULL, NULL),
(5, 'Malang', NULL, NULL),
(6, 'Makassar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donaturs`
--

CREATE TABLE `donaturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donaturs`
--

INSERT INTO `donaturs` (`id`, `username`, `nama`, `email`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 'riel', 'Riel', 'riel@gmail.com', '150000', '2021-05-05 16:36:23', '2021-05-05 16:36:23'),
(2, 'asta', 'Asta', 'asta@gmail.com', '53000', '2021-05-05 16:37:33', '2021-05-05 19:20:52'),
(3, 'shin', 'Shin Gi', 'shi@gmail.com', '391000', '2021-05-05 16:37:56', '2021-05-05 19:32:45'),
(4, 'ran', 'Ran Mou', 'ran@gmail.com', '4220000', '2021-05-05 16:38:18', '2021-05-05 19:32:55'),
(5, 'sera', 'Sera Su', 'sera@gmail.com', '311199', '2021-05-05 16:38:42', '2021-05-05 19:33:05'),
(6, 'zuriel', 'Zuriel L', 'zuriel@gmail.com', '242929', '2021-05-05 19:26:07', '2021-05-05 19:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_14_090835_create_news_table', 2),
(5, '2021_04_14_095018_add_category_to_news_table', 3),
(6, '2021_04_14_100022_add_status_to_news_table', 4),
(7, '2021_04_14_101838_create_countries_table', 5),
(8, '2021_04_14_102152_add_country_id_to_news_table', 6),
(9, '2021_04_14_151848_create_donaturs_table', 7),
(10, '2021_04_14_162532_create_penggalangs_table', 8),
(11, '2021_04_14_173123_create_yayasans_table', 9),
(12, '2021_04_14_173647_create_alamats_table', 9),
(13, '2021_04_14_174802_add_alamat_id_to_yayasans_table', 10),
(14, '2021_05_05_163543_add_population_to_countries_table', 11),
(16, '2021_05_05_180016_add_biaya_to_penggalangs_table', 12),
(17, '2021_05_05_180549_add_url_to_penggalangs_table', 13),
(18, '2021_05_05_182639_add_url_to_yayasans_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggalangs`
--

CREATE TABLE `penggalangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggalangs`
--

INSERT INTO `penggalangs` (`id`, `judul`, `nama`, `status`, `kategori`, `biaya`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Mengalami Kelainan pada Sel Darah Merah, Di Butuh Pertolonganmu Segera!', 'Di', 1, 'Balita', '23000000', 'https://qtxasset.com/fiercehealthcare/1551657723/gettyimages-872923768_hacs2019.jpg?GDYPMJVOVFQAQdZm84EDL4NAtRWzAAXw', '2021-05-05 16:40:23', '2021-05-05 16:40:38'),
(2, 'Ila Belum Bisa Berjalan Akibat Menderita Penyakit Infeksi Bawaan!', 'Ila', 1, 'Kesehatan', '34000000', 'https://www.statnews.com/wp-content/uploads/2020/11/GettyImages-1229570333.jpg', '2021-05-05 16:42:07', '2021-05-05 16:42:07'),
(3, 'Raih Pahala Berlimpah: Santunan 10.000 Anak Yatim', 'Rumah Yatim', 1, 'Pendidikan', '100000000', 'https://www.garutexpress.id/wp-content/uploads/2020/07/Kades-di-Garut-Jual-Bangunan-dan-Tanah-Sekolah-Berikut-Penjelasan-Pihak-Desa.png', '2021-05-05 16:45:10', '2021-05-05 16:45:10'),
(4, 'Bantu Mereka Yang Sedang Berusaha Bangkit Berkarya', 'Aminah', 1, 'Lainnya', '55000000', 'https://www.itb.ac.id/files/dokumentasi/1602643220-ilustrasi---kriya.png', '2021-05-05 16:49:07', '2021-05-05 16:49:07'),
(5, 'Hampir Lumpuh, Bantu Pak Ra Sembuh', 'Ra', 1, 'Kesehatan', '43305000', 'https://www.honestdocs.id/system/blog_articles/main_hero_images/000/007/091/medium/iStock-1146207405_%281%29_%281%29.jpg', '2021-05-05 16:50:58', '2021-05-05 16:50:58'),
(6, 'Berbagi Berkah Ramadhan untuk Anak Bersama Kita', 'Kita', 1, 'Lainnya', '53001000', 'https://static.republika.co.id/uploads/images/inpicture_slide/019276600-1587728431-830-556.jpg', '2021-05-05 16:53:07', '2021-05-05 16:53:07'),
(7, 'Bantu Hew melawan tumor otak', 'Hew', 1, 'Kesehatan', '15030200', 'https://doktersehat.com/wp-content/uploads/2018/07/ciri-ciri-kanker-otak-doktersehat.jpg', '2021-05-05 16:54:30', '2021-05-05 16:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zuriel', '1981009@unai.edu', NULL, '$2y$10$HKyGkLgowug2Io6xkH0B5eCadB8g7nzV4b61Glg.MvrrPgBjQj1UO', NULL, '2021-05-05 10:08:11', '2021-05-05 10:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `yayasans`
--

CREATE TABLE `yayasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `alamat_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yayasans`
--

INSERT INTO `yayasans` (`id`, `nama`, `status`, `alamat_id`, `deskripsi`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Anak', 1, 6, 'Membantu, melindungi, memberikan tempat tinggal bagi anak - anak kurang mampu yang kehilangan orang tuanya', 'https://121clicks.com/wp-content/uploads/2012/03/street_children_photography_17.jpg', '2021-05-05 16:58:23', '2021-05-05 17:20:40'),
(2, 'Yayasan Indonesia Hijau', 1, 3, 'Sebuah lembaga yang bergerak dibidang sosial, kesehatan, dan pendidikan serta lingkungan hidup', 'https://wallpaperaccess.com/full/1516404.jpg', '2021-05-05 17:01:14', '2021-05-05 17:01:14'),
(3, 'Rumah Anyar', 1, 1, 'Memberikan perawatan dan terapi bagi pasien kanker', 'https://lh3.googleusercontent.com/proxy/NMYdkmEeAtSflOhSZNMfWCV3qZtZQsmYgoROAfN_WTIdtIPhe-DE45kPqwoWihxzkPTVVKUtF4BxetJhKoEHkzg9M79ITgZFJv-FSvFj93JCvmDylYeetag7A8A2QrxScj0alj4', '2021-05-05 17:03:04', '2021-05-05 17:07:25'),
(4, 'Mandiri Yatim', 1, 5, 'Lembaga Amil Zakat Nasional Indonesia yang berkhidmat mengangkat harkat sosial kemanusiaan yatim dan dhuafa dengan dana sosial yang diberikan', 'https://www.biem.co/wp-content/uploads/2017/11/karakter-780x390.jpg', '2021-05-05 17:05:30', '2021-05-05 17:11:58'),
(5, 'Indonesia Membangun', 1, 2, 'Membantu membangun Indonesia ke arah yang lebih baik', 'https://cdn0-production-images-kly.akamaized.net/qpxZmrmhtTv1bsk3WAy0JhCkrXI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/thumbnails/259383/original/bendera-setengah-tiang130609b-v.jpg', '2021-05-05 17:13:33', '2021-05-05 17:13:33'),
(6, 'Yayasan Negeri Belajar', 1, 1, 'Membantu memberikan pendidikan yang berkualitas untuk mencerdaskan dan mensejahterakan kehidupan rakyat', 'https://img.inews.co.id/media/822/files/inews_new/2020/08/27/belajar_online.jpg', '2021-05-05 17:15:33', '2021-05-05 17:15:33'),
(7, 'Bumi Sehat', 1, 2, 'Membantu menyediakan fasilitas kesehatan untuk siapa saja', 'https://image.freepik.com/free-photo/suspension-bridge-travel-nature-scenery-building_1417-264.jpg', '2021-05-05 17:19:42', '2021-05-05 19:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamats`
--
ALTER TABLE `alamats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donaturs`
--
ALTER TABLE `donaturs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penggalangs`
--
ALTER TABLE `penggalangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `yayasans`
--
ALTER TABLE `yayasans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamats`
--
ALTER TABLE `alamats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donaturs`
--
ALTER TABLE `donaturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penggalangs`
--
ALTER TABLE `penggalangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yayasans`
--
ALTER TABLE `yayasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
