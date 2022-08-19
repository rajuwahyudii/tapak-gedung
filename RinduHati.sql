-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 04:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT 0,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `status` enum('draf','aktif') COLLATE utf8mb4_unicode_ci DEFAULT 'draf',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `wisata_id`, `urutan`, `judul`, `slug`, `kontent`, `thumbnail`, `author`, `status`, `created_at`, `updated_at`) VALUES
(77, 25, 20, NULL, 'Glamping, Akomodasi Modern ala Camping Milenial yang Lagi Booming', 'glamping-akomodasi-modern-ala-camping-milenial-yang-lagi-booming', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\"><i style=\"outline: none !important;\">Glamping&nbsp;</i>telah menjadi salah satu bentuk akomodasi yang semakin populer selama beberapa tahun terakhir. Hal ini dibuktikan dari banyaknya penginapan yang menawarkan menginap ala&nbsp;<i style=\"outline: none !important;\">glamping&nbsp;</i>yang beridiri setiap tahunnya di seluruh dunia.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">Tapi apa itu glamping? Dan mengapa&nbsp;<i style=\"outline: none !important;\">glamping</i>&nbsp;menjadi sangat populer sekarang ini? Biar gak bingung dan menjawab rasa penasaran, berikut ini beberapa fakta mengenai&nbsp;<i style=\"outline: none !important;\">glamping&nbsp;</i>yang mungkin membuat kamu ingin buru-buru liburan dan mencoba akomodasi yang satu ini.</p></body></html>\n', '16299752415.jpg', 'harizaldy', 'aktif', '2021-08-23 23:10:26', '2021-08-26 03:54:01'),
(78, 25, 20, NULL, 'Apakah itu glamping?', 'apakah-itu-glamping', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">Kata&nbsp;<i style=\"outline: none !important;\">glamping&nbsp;</i>merupakan gabungan dari dua kata, yakni \"<i style=\"outline: none !important;\">glamour\"&nbsp;</i>dan \"<i style=\"outline: none !important;\">camping\".&nbsp;</i>Hal ini berarti&nbsp;<i style=\"outline: none !important;\">glamping&nbsp;</i>merujuk pada suatu bentuk perkemahan modern dengan menggabungkan esensi alam dan dengan adanya fasilitas yang memadai.</p><div style=\"height: 0px; outline: none !important;\"></div><div id=\"_forkInArticleAdContainer\" data-contextads-viberetg=\"undefined\" style=\"width: 0px; height: 0px; outline: none !important;\"><ins data-zoneid=\"\" class=\"prd698945407\" data-seq=\"0\" id=\"revive-0-0\" data-loaded=\"1\" style=\"outline: none !important;\"></ins></div><p></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">Beberapa fasilitas yang biasanya sudah tersedia di&nbsp;<i style=\"outline: none !important;\">glamping adalah</i>&nbsp;tempat tidur, listrik, air, bak air panas dan beranda pribadi, tapi layanan ini mungkin saja berbeda pada tiap situs&nbsp;<i style=\"outline: none !important;\">glamping</i>. Jadi, kamu tak perlu mendirikan tenda, mencari sumber air, mencari sumber makanan atau yang lainnya saat<i style=\"outline: none !important;\">&nbsp;</i>karena biasanya kebutuhan inti sudah tersedia saat&nbsp;<i style=\"outline: none !important;\">glamping.</i>&nbsp;Seru ya!</p></body></html>\n', '162997522042ae6d70605ed5324e6dba0e3ebee8fe-e8d2408250e33a25018b0a75fab01731.jpg', 'harizaldy', 'aktif', '2021-08-23 23:13:19', '2021-08-26 03:53:40'),
(79, 25, 20, NULL, 'Akomodasi berbasis ramah lingkungan', 'akomodasi-berbasis-ramah-lingkungan', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">Meski \"<i style=\"outline: none !important;\">glamour\", glamping&nbsp;</i>memiliki unsur yang sama dengan berkemah tradisional, yakni ramah lingkungan. Mereka yang lebih suka&nbsp;<i style=\"outline: none !important;\">glamping&nbsp;</i>tetap suka akan aktifitas alam dan sebagainya, namun dengan kenyamanan seperti layaknya rumah bila memasuki \"kamar\".</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">Terlebih lagi,&nbsp;<i style=\"outline: none !important;\">glamping&nbsp;</i>biasanya tidak memerlukan biaya pemanasan dan listrik dari konstruksi modern. Selain itu, energi listriknya juga didapat dari tenaga surya atau angin.</p></body></html>\n', '1629975204beachcamp03-5361c02512199234f0b1178ee98f83c6.jpg', 'harizaldy', 'aktif', '2021-08-23 23:13:54', '2021-08-26 03:53:24'),
(80, 25, 20, NULL, 'Bisa memilih jenis glamping yang diinginkan sesuai budget-mu', 'bisa-memilih-jenis-glamping-yang-diinginkan-sesuai-budget-mu', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">Dari tenda modrn, kabin,&nbsp;<i style=\"outline: none !important;\">cottage</i>, hingga rumah pohon, ada lusinan jenis akomodasi yang tersedia bagi mereka yang ingin mencari kenyamanan di alam tebuka yang indah. Harganya berkisar dari ratusan ribu hingga jutaan rupiah per malamnya, tergantung pada fasilitas yang ditawarkan.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">Penggemar akomodasi ini tentu bisa memilih sesuai dengan&nbsp;<i style=\"outline: none !important;\">budget&nbsp;</i>dan tingkat kenyamanan yang diingkan. Yang terpenting, apapun pilihan jenis akomodasi&nbsp;<i style=\"outline: none !important;\">glamping-</i>mu, suara burung berkicau di pagi hari dan suara aliran air sungai yang begitu menangkan tak akan bisa kamu temukan bila menginap di hotel.</p></body></html>\n', '1629975267headerfinal-bfac76ff801ea5f7b20c8946a34571c2.jpg', 'harizaldy', 'aktif', '2021-08-23 23:14:36', '2021-08-26 03:54:27'),
(84, 24, NULL, NULL, 'Lewat D\'Lucky Coffe, Kopi Rindu Hati Pertahankan Brand', 'lewat-dlucky-coffe-kopi-rindu-hati-pertahankan-brand', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Pencanangan komoditas unggulan jadi serba-serbi kuliner secara kompleks sudah mulai dibranding. Pemberdayaan pelaku Usaha Kecil Mikro Menengah (UMKM) menjadi tanggung jawab pemerintah dalam memaksimalkan kreatifitas dan produktifitas pelaku bisnis ini. Kopi, jadi salah satu kekayaan alam yang dimiliki Bengkulu.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Kekayaan komoditas kopi Bengkulu, sudah tidak diragukan lagi. Di sejumlah kabupaten, kopi petik merah yang memiliki daya jual tinggi terus dikembangkan. Seperti halnya di Desa Rindu Hati Kabupaten Bengkulu Tengah.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Di desa ini, kopi petik merah menjadi salah satu komoditi unggulan desa. Sejak dicanangkan sebagai daerah penghasil kopi pada Tahun 2017 lalu, nama Kopi Rindu Hati sudah mulai dikenal. Hal ini karena pada Tahun 2017 lalu robusta Rindu Hati meraih juara I dalam Festival Kopi dalam rangka Festival Bumi Rafflesia pada 2017 lalu.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Kopi Rindu Hati dikenal atas kualitasnya yang diolah dengan baik. Kopi robusta ditanam pada ketinggian 200-800 meter diatas permukaan laut (mdpl). Kandungan kadar air bijinya 13 persen (green beans).</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Salah satu barista Kopi Rindu Hati, Alfatah mengatakan, pengelolaan branding ini redup setahun terakhir. Namun, setelah adanya kesadaran pemerintah dalam pemaksimalan produktifitas pelaku UMKM dengan membuat Bencoolen Marine Festival di Bengkulu Indah Mall, ia kini mulai kembali percaya diri.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>&acirc;&#128;&#156;Panen dilakukan dengan selektif. Kopi yang diolah menjadi kopi bubuk adalah buah petik merah. Bukan petik pelangi,&acirc;&#128;&#157; kata Alfatah, Senin (23/12/2019) malam.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Alfatah menuturkan, ada beberapa tahapan yang dilakukan untuk menjaga kualitas kopi agar tetap baik. Setelah memilih buah petik merah, kopi direndam dulu dengan air.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>&acirc;&#128;&#156;Yang terapung, langsung dibuang. Artinya ada yang busuk di dalam buah itu,&acirc;&#128;&#157; terang Mukhlis.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Saat menjemur, Kopi Rindu Hati tidak dihampar begitu saja diatas tanah. Penjemuran dilakukan di atas terpal atau di pondokan yang dibuat waring.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>&acirc;&#128;&#156;Aroma tanah akan melekat kalau menjemurnya sembarang. Jadi tidak sedap,&acirc;&#128;&#157; kata pria tambun ini, kemudian kopi disangrai dengan suhu 130 derajat.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>&acirc;&#128;&#156;Keunggulan Kopi Rindu Hati terletak pada biji kopi robusta yang menghasilkan cream yang lezat (lapisan busa tipis). Oleh karena itu merupakan tambahan yang sempurna untuk berbagai paduan espresso,&acirc;&#128;&#157; lanjutnya.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Kopi petik merah, terang Mukhlis, memiliki nilai jual yang lebih mahal dibandingkan kopi biasa. Seperti halnya Kopi Rindu Hati.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Alfatah secara kolektif memilih brand dari Kopi Rindu Hati, yakni dengan nama D\'Lucky Coffe. Hal ini sebagai bentuk perhatiannya dalam mengelola potensi di desanya.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Tak hanya berani membuka bisnis perkopian di tengah maraknya brand lain, Alfatah secara tegas hanya ingin terus menjalankan tradisi.</p><p dir=\"ltr\" style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Saat pertama kali menyajikan Kopi Rindu Hati dengan Teko, tercium aroma segar kopi robusta, perlahan memanjakan hidung dan hangat tenggorakan pada seduhan pertamanya. (<em>Bisri</em>)</p></body></html>\n', '16299318114.jpg', 'harizaldy', 'aktif', '2021-08-25 15:50:11', '2021-08-25 15:55:56'),
(85, 24, NULL, NULL, 'Robusta Rindu Hati, Kopi Petik Merah Unggulan Bengkulu', 'robusta-rindu-hati-kopi-petik-merah-unggulan-bengkulu', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Bengkulu Tengah: Kekayaan komoditas kopi Bengkulu, sudah tidak diragukan lagi. Di sejumlah kabupaten, kopi petik merah yang memiliki daya jual tinggi terus dikembangkan. Seperti halnya di Desa Rindu Hati Kabupaten Bengkulu Tengah.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Di desa ini, kopi petik merah menjadi salah satu komoditi unggulan desa. Sejak dicanangkan sebagai daerah penghasil kopi pada tahun 2017 lalu, nama Kopi Rindu Hati sudah mulai dikenal. Hal ini karena pada tahun 2017 lalu robusta Rindu Hati meraih juara I dalam Festival Kopi dalam rangka Festival Bumi Rafflesia pada 2017 lalu.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Kepala Desa Rindu Hati Sultan Mukhlis, SH mengatakan, Kopi Rindu Hati menjadi produk unggulan karena kualitasnya yang diolah dengan baik. Kopi robusta ditanam pada ketinggian 200-800 meter diatas permukaan laut (mdpl). Kandungan kadar air biji nya 13 persen (green beans).</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Saat ini pengolahan Kopi Rindu Hati mendapat pendampingan dari KTH Makmur bersama dan Badan Usaha Milik Desa (BumDes) 2 Tei Mandiri.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">&acirc;&#128;&#156;Panen dilakukan dengan selektif. Kopi yang diolah menjadi kopi bubuk adalah buah petik merah. Bukan petik pelangi,&acirc;&#128;&#157; kata Mukhlis saat ditemui di rumahnya disela Kemah Bakti Sosial (KBS) Fakultas Ilmu-ilmu Sosial pada 25 November 2018 lalu.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Mukhlis menuturkan, ada beberapa tahapan yang dilakukan untuk menjaga kualitas kopi agar tetap baik. Setelah memilih buah petik merah, kopi direndam dulu dengan air.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">&acirc;&#128;&#156;Yang terapung, langsung dibuang. Artinya ada yang busuk di dalam buah itu,&acirc;&#128;&#157; terang Mukhlis.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Saat menjemur, Kopi Rindu Hati tidak dihampar begitu saja diatas tanah. Penjemuran dilakukan di atas terpal atau di pondokan yang dibuat waring. &acirc;&#128;&#156;Aroma tanah akan melekat kalau menjemurnya sembarang. Jadi tidak sedap,&acirc;&#128;&#157; kata pria keturunan Pagaruyung, Sumatera Barat itu.Kopi disangrai dengan suhu 130 derajat.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Untuk proses penggilingannya, sekarang di Desa Rindu Hati sudah ada mesin sendiri. Pengemasannya pun dilakukan oleh warga desa setempat.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">&acirc;&#128;&#156;Keunggulan Kopi Rindu Hati terletak pada biji kopi robusta yang menghasilkan cream yang lezat (lapisan busa tipis). Oleh karena itu merupakan tambahan yang sempurna untuk berbagai paduan espresso,&acirc;&#128;&#157; lanjutnya.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Kopi petik merah, terang Mukhlis, memiliki nilai jual yang lebih mahal dibandingkan kopi biasa. Seperti halnya Kopi Rindu Hati. Ada tiga kemasan yang dijual di pasaran. Kopi bubuk kemasan 1 ons harganya Rp 15.000. Bubuk kemasan 2 ons Rp 25 ribu. Dan yang paling kecil ukuran setengah ons seharga Rp 8.000 saja.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Kopi sementara ini dijual di etalase yang ada di rumah kepala desa. Bagi yang ingin merasakan Kopi Rindu Hati bisa juga menghubungi 082269273922. Untuk pemeasannya juga bisa dilakukan melalui Facebook UlayatID, twitter Ulayat atau melalui situs ulayat.or.id.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">Disisi lain, Sultan Mukhlis mengakui masih perlu ada yang dibenahi agar produksi kopi lebih maksimal. Salah satunya terkait izin Produksi Industri Rumah Tangga (PIRT) yang hingga sekarang belum dikantongi.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; outline: none; list-style: none; border: 0px none; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">&acirc;&#128;&#156;Bantuan pembuatan PIRT ini kami harap bisa ada bantuan dari Pemda Bengkulu Tengah,&acirc;&#128;&#157; kata Mukhlis. (ken)</p></body></html>\n', '1629932105kbs-1.jpg', 'harizaldy', 'aktif', '2021-08-25 15:55:05', '2021-08-25 15:55:54'),
(86, 24, NULL, NULL, 'Desa Rindu Hati Menjadi Produk Kopi Merah Unggulan', 'desa-rindu-hati-menjadi-produk-kopi-merah-unggulan', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Desa Rindu Hati adalah salah satu Desa yang memiliki cerita sejarah yang dikenal pada zaman dulu hingga kini. Meskipun Desa ini hanya tersendiri dan jauh dari desa-desa lain namun desa rindu hati mempunya ciri khas sejarah sendiri di wilayah Kabupaten Bengkulu Tengah.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Desa Rindu hati jika kita lihat dari biografis desa ini terpencil namun tidak membuat warga desa untuk ketinggalan dengan desa-desa lain sehingga warga tetap semangat dalam meningkatkan hasil panennya seperti kopi dan objek wisata alam, hutan dan sungai yang cukup menarik yang membuat banyak orang ingin berkunjung di desa tersebut.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Meski Warga Desa Rindu yang kehidupan hanya mayoritas petani, lewat aktivitas inilah warga desa bisa memperkenalkan hasil panennya yang terkenal dengan kopi merah sekaligus mengenalkan Desa Rindu Hati ketingkat nasional.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Sutan Muklis Kepala Desa Rindu Hati mengatakan bukan produk kopi saja yang di kelola saat ini, namun seperti objek wisata yang akan keindahan alamnya juga membuat wisatawan lokal maupun luar terpukau menikmatinya.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">&acirc;&#128;&#156;Kini Desa Rindu Hati selain di kenal sejarahnya, desa ini memiliki rumah Gadang Minang kabau dan Kopi merah yang di kenal oleh orang luar yang berwisata di desa ini. Sehingga pengunjung betah untuk berwisata di objek yang ada di desa rindu hati,&acirc;&#128;&#157; ungkap Kades Rindu Hati, Sutan Muklis.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Lanjut Sutan Muklis, kopi merah merupakan salah satu objek yang membuat Desa Rindu Hati di kenal.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">&acirc;&#128;&#156;Kopi Merah yang di kenal salah satu produk unggulan. Kopi merah ini juga membuat desa Rindu Hati menjadi terkenal secara Nasional. Kopi merah ini selalu di produksi oleh warga untuk di jadikan mata pencarian warga dan warga di wajibkan untuk memproduksikan kopi merah sehingga kopi ini menjadi kopi unggulan untuk wilayah kopi kabupaten Bengkulu Tengah,&acirc;&#128;&#157; Ujarnya.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Kades Rindu Hati juga berharap kepada pemerintah setempat untuk memberikan dorongan atau dukungan agar kopi merah ini bisa di manfaatkan.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">&acirc;&#128;&#156;Setiap jajaran Pemda dan OPD yang seharusnya wajib memanfaatkan kopi ini sehingga setiap Pemerintahan baik itu dari tingkat desa dan OPD wajib mengkonsumsi produk kopi merah ini, sehingga kopi yang ada bisa di kenal secara luas,&acirc;&#128;&#157; jelasnya.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">&acirc;&#128;&#156;Siapa lagi yang harus memanfaatkan produk lokal yang ada di wilayah ini kalau tidak Pemerintah setempat yang harus lebih dulu memanfaatkan produk lokal seperti Kopi dan hasil tani lainnya,&acirc;&#128;&#157; tutup Sutan Muklis.&nbsp;</p></body></html>\n', '1629932149IMG-20181205-WA0013.jpg', 'harizaldy', 'aktif', '2021-08-25 15:55:49', '2021-08-25 15:55:52'),
(91, 23, NULL, NULL, 'Transportasi', 'transportasi', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Desa Rindu Hati, sebuah nama desa yang tersembunyi dibalik sejuta pesona permaatanya. Desa ini terletak di Kecamatan Taba Penajung, Kabupaten Bengkulu Tengah&nbsp;Provinsi Bengkulu. Desa ini memiliki 11 jenis wisata yang unik dan jarang ditemukan khususnya di Provinsi Bengkulu diantaranya Glamping ,Air terjun, camping Ground, Tubing, Rock climbing, Persawahan,Telaga putri, Batu kapal, Air terjun Supit, Pemakaman Tuanku Gagok dan Raja Pembesar Alam, dan Rumah Besar Minang.</p><p style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Wisata-wisata tersebut&nbsp;menyuguhkan tempat menginap yang seru dan menyatu dengan alam. Dan kalian bisa pilih paket glamping atau camping around, menginap seru pakai tenda dengan pemandagan air sungai langsung didepan mata dan dibawah pondok-pondok gazebo, ada tubing buat kalian yang suka memanjat dan masih banyak lagi.&nbsp;</p><p style=\'margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(0, 0, 0); font-family: \"Open Sans\", serif; font-size: 16px;\'>Desa yang memiliki nama unik ini, berjarak hanya 40 menit dari pusat Kota Bengkulu. Wisatanya mulai dibangun dari bulan Agustus 2020 dan resmi dibuka untuk umum pada tanggal 25 Desember 2020. Dengan 11 jenis wisata yang disuguhkan tak heran mereka mampu mendapatkan omset sebesar 50 juta perbulannya dan membuka lapangan pekerjaannya di desa tersebut. Tercatat sampai saat ini karyawan disana sekitar 45 orang.&nbsp;</p></body></html>\n', '16300463812.jpg', 'harizaldy', 'aktif', '2021-08-26 23:37:35', '2021-08-26 23:39:43');

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
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `wisata_id`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 12, '1630044888shutterstock_228278305.jpg', '2021-08-26 23:14:48', '2021-08-26 23:14:48'),
(8, 12, '163004490160534e42d7c6f.jpg', '2021-08-26 23:15:01', '2021-08-26 23:15:01'),
(13, 12, '1630045994Tegenungan_corendon_45_20190305184907KVuqgC.jpg', '2021-08-26 23:33:14', '2021-08-26 23:33:14'),
(14, 20, '1630329929Wisata-Desa-Rindu-Hati-Bengkulu-Tengah-17012021-dm-1.jpg', '2021-08-30 06:25:29', '2021-08-30 06:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `bahasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `urutan`, `bahasa`, `menu`, `slug`, `created_at`, `updated_at`) VALUES
(23, 1, NULL, 'Panduan Wisata', 'panduan-wisata', '2021-08-23 19:42:01', '2021-08-23 19:42:01'),
(24, 2, NULL, 'Produk Desa', 'produk-desa', '2021-08-23 19:42:08', '2021-08-23 19:42:08'),
(25, 3, NULL, 'Lainnya', 'lainnya', '2021-08-23 19:42:21', '2021-08-23 19:53:51');

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
(4, '2021_03_07_170639_create_contents_table', 1),
(5, '2021_03_10_075309_create_menus_table', 1),
(6, '2021_03_10_171338_create_beritas_table', 1),
(7, '2021_03_14_083753_create_sliders_table', 1),
(8, '2021_03_16_120534_create_berandakontens_table', 1),
(9, '2021_03_17_174539_create_menutunggals_table', 1),
(10, '2021_03_18_065535_create_artikeldosens_table', 1),
(11, '2021_04_06_021116_create_sosialmedias_table', 1),
(12, '2021_04_16_022645_create_membershipakreditasis_table', 2),
(13, '2021_08_20_074442_create_wisata_table', 3),
(14, '2021_08_20_074848_create_wisatas_table', 4),
(15, '2021_08_27_021210_create_youtube_table', 5),
(16, '2021_08_27_021932_create_youtube_table', 6),
(17, '2021_08_27_023146_create_youtubes_table', 7),
(18, '2021_08_27_031643_create_galeris_table', 8);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'super admin', 'harizaldy', 'harizaldy@gmail.com', NULL, '$2y$10$AwVYDKUlX8s2TXhvvrBGn.hb9FexX3UpU6Yysihdc8R43ikG3V9HW', NULL, '2021-03-25 14:15:13', '2021-08-19 21:27:16'),
(12, 'admin', 'Testing', 'testing@gmail.com', NULL, '$2y$10$xEeqyKHrxltNn9bqgBvUYuBRn.qTKyc5hXuZxbxgl8iVfIRwxoV5a', NULL, '2021-08-17 23:59:01', '2021-08-18 00:04:07'),
(13, 'super admin', 'superadmin@gmail.com', 'superadmin@gmail.com', NULL, '$2y$10$GCpybEldI3d1QgnK7xheLOejZom/10kHavOaiqpt9iHUAT9ARy6oO', NULL, '2021-08-18 00:04:38', '2021-08-18 00:04:38'),
(14, 'admin', 'sahrial', 'sahrial@gmail.com', NULL, '$2y$10$mTKDJNRnJrIoqrDBNA3K3ud2LAG8e6erTajPMec8gSTdVxYTLlA/.', NULL, '2021-08-19 21:27:43', '2021-08-26 20:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `wisatas`
--

CREATE TABLE `wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `wisata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisatas`
--

INSERT INTO `wisatas` (`id`, `urutan`, `thumbnail`, `wisata`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(12, 2, '1629973560cuupjen.jpg', 'Air Terjun', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'air-terjun', '2021-08-23 21:28:04', '2021-08-26 03:26:00'),
(14, 4, '1629973576tubing.jpg', 'Tubing', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'tubing', '2021-08-23 21:28:39', '2021-08-26 03:26:16'),
(15, 5, '1629973698pasted-image-0-3-2.png', 'Rock Climbing', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'rock-climbing', '2021-08-23 21:28:55', '2021-08-26 03:28:18'),
(16, 6, '1629973710WhatsApp-Image-2018-03-12-at-11.48.52.jpeg', 'Persawahan', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'persawahan', '2021-08-23 21:29:13', '2021-08-26 03:28:30'),
(17, 7, '162997372549648276_223535211796732_632314421424648557_n.jpg', 'Telaga Putri', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'telaga-putri', '2021-08-23 21:29:36', '2021-08-26 03:28:46'),
(18, 8, '162997379620863281_1432045403499381_5611837969522714537_o.jpg', 'Batu Kapal', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'batu-kapal', '2021-08-23 21:30:03', '2021-08-26 03:29:56'),
(19, 9, '1629973876rumah pagaruyung.jpg', 'Rumah Besar Minang', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'rumah-besar-minang', '2021-08-23 21:30:38', '2021-08-26 03:31:17'),
(20, 1, '16299735061629971603fb2ff9_1629780981.jpeg', 'Glamping', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>-</p></body></html>\n', 'glamping', '2021-08-26 02:53:23', '2021-08-26 03:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `youtubes`
--

CREATE TABLE `youtubes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtubes`
--

INSERT INTO `youtubes` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=v5V1Xy6_khM', NULL, '2021-08-30 06:23:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtubes`
--
ALTER TABLE `youtubes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `youtubes`
--
ALTER TABLE `youtubes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
