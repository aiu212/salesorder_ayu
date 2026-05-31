-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2026 at 05:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `no_order` varchar(30) DEFAULT NULL,
  `pelanggan_id` int(11) DEFAULT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` enum('draft','dikirim','selesai','dibatalkan') DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `no_order`, `pelanggan_id`, `sales_id`, `tanggal`, `total`, `status`, `created_by`) VALUES
(1, 'SO20260531100535', 2, 1, '2026-05-31', 12000000, 'selesai', 1),
(2, 'SO20260531101908', 2, 1, '2026-05-31', 30000000, 'dibatalkan', 1),
(3, 'SO20260531152040', 6, 5, '2026-05-31', 1900000, 'dikirim', 1),
(4, 'SO20260531152102', 7, 4, '2026-05-31', 500000, 'dikirim', 1),
(5, 'SO20260531152125', 5, 8, '2026-05-31', 2250000, 'selesai', 1),
(6, 'SO20260531152152', 8, 5, '2026-05-31', 2600000, 'dikirim', 1),
(7, 'SO20260531152211', 9, 7, '2026-05-31', 4600000, 'dikirim', 1),
(8, 'SO20260531152227', 10, 6, '2026-05-31', 25500000, 'selesai', 1),
(9, 'SO20260531152254', 4, 3, '2026-05-31', 10000000, 'selesai', 1),
(10, 'SO20260531152531', 2, 1, '2026-05-31', 15600000, 'selesai', 1),
(11, 'SO20260531155334', 6, 4, '2026-05-31', 2250000, 'dikirim', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `produk_id`, `qty`, `subtotal`) VALUES
(1, 1, 1, 1, 12000000),
(2, 2, 3, 3, 30000000),
(3, 3, 10, 2, 1900000),
(4, 4, 8, 2, 500000),
(5, 5, 13, 5, 2250000),
(6, 6, 12, 4, 2600000),
(7, 7, 11, 2, 4600000),
(8, 8, 4, 3, 25500000),
(9, 9, 3, 1, 10000000),
(10, 10, 9, 3, 15600000),
(11, 11, 5, 3, 2250000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `alamat`, `telp`) VALUES
(2, 'Aurel', 'Sukamanah', '08438392675'),
(3, 'Aurel Putri', 'Tangerang', '081234567890'),
(4, 'Dimas Pratama', 'Jakarta', '082112223333'),
(5, 'Nadia Safira', 'Bekasi', '083144455566'),
(6, 'Rizky Maulana', 'Tangerang Selatan', '081288889999'),
(7, 'Salsa Amelia', 'Cikupa', '082299998888'),
(8, 'Fajar Ramadhan', 'Karawaci', '083377776666'),
(9, 'Intan Permata', 'Ciledug', '081311112222'),
(10, 'Yoga Prasetyo', 'Serpong', '085211113333');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `harga`, `stok`) VALUES
(1, 'KP1', 'Televisi', 12000000, 17),
(3, 'KP2', 'GPS Tracker', 10000000, 25),
(4, 'PRD001', 'Laptop ASUS VivoBook', 8500000, 15),
(5, 'PRD002', 'Headset Sony WH-CH520', 750000, 30),
(6, 'PRD003', 'Keyboard Logitech K380', 450000, 25),
(7, 'PRD004', 'Monitor Samsung 24 Inch', 1800000, 12),
(8, 'PRD005', 'Mouse Wireless Logitech', 250000, 40),
(9, 'PRD006', 'Smart TV Samsung 43 Inch', 5200000, 10),
(10, 'PRD007', 'Speaker Bluetooth JBL', 950000, 18),
(11, 'PRD008', 'Printer Epson L3210', 2300000, 8),
(12, 'PRD009', 'Kamera CCTV Hikvision', 650000, 20),
(13, 'PRD010', 'Powerbank Anker 10000mAh', 450000, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `nama_sales` varchar(100) DEFAULT NULL,
  `kode_sales` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `nama_sales`, `kode_sales`) VALUES
(1, 'Diana', 'SLS007'),
(3, 'Marko', 'SLS001'),
(4, 'Rani', 'SLS002'),
(5, 'Bagas', 'SLS003'),
(6, 'Ayu', 'SLS004'),
(7, 'Rizal', 'SLS005'),
(8, 'Maya', 'SLS006');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','sales','manager') DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`, `last_login`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2026-05-31 17:00:01'),
(2, 'Sales User', 'sales', '9ed083b1436e5f40ef984b28255eef18', 'sales', '2026-05-31 17:40:14'),
(3, 'Manager User', 'manager', '1d0258c2440a8d19e716292b231e3190', 'manager', '2026-05-31 17:40:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
