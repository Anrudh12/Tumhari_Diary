

-- Generation Time: Aug 23, 2023 at 07:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumhari_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_id`, `name`, `email`, `password`, `time`, `status`) VALUES
(12, 'ASHLL', 'jl@JKD.COM', 'e807f1fcf82d132f9bb018ca6738a19f', '0000-00-00 00:00:00', 1),
(13, '', '', '', '0000-00-00 00:00:00', 0),
(14, 'asdjk', 'kjsd@ds.com', 'e807f1fcf82d132f9bb018ca6738a19f', '0000-00-00 00:00:00', 1),
(15, 'sdhj', 'Ajslak@c.om', 'e807f1fcf82d132f9bb018ca6738a19f', '17-0808-23 01:08:22', 1),
(16, 'lhlh', 'Ar@jsdkl.com', 'faad19301a55b8eecc9ee67682807f78', '17-0808-23 04:08:26', 1),
(17, 'sdfjk', 'dashj@hf.com', 'e807f1fcf82d132f9bb018ca6738a19f', '17-08-23 04:08:56', 1),
(18, 'A', 'a@a.com', 'e807f1fcf82d132f9bb018ca6738a19f', '17-08-23 04:08:21', 1),
(19, 'Archit ', 'archit.yadav000@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '21-08-23 06:08:03', 1),
(20, 'Archit', 'q@q.com', 'e807f1fcf82d132f9bb018ca6738a19f', '22-08-23 11:08:58', 1),
(21, 'qwer', 'a@jsd.com', 'e807f1fcf82d132f9bb018ca6738a19f', '23-08-23 10:08:44', 1),
(22, 'archit singh yadav', 'w@w.com', 'e807f1fcf82d132f9bb018ca6738a19f', '23-08-23 10:08:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_entries`
--

CREATE TABLE `user_entries` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `title` varchar(80) NOT NULL,
  `entry` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_entries`
--

INSERT INTO `user_entries` (`id`, `user_id`, `title`, `entry`, `time`) VALUES
(1, 0, 'asdklj', 'kldjflsjfdDear Diary,\r\n', '2020-08-23 02:08:44'),
(2, 0, 'sdfjsj', 'hjhdsfjkDear Diary,\r\n', '2020-08-23 02:08:23'),
(57, 19, 'Untitled.....', 'Dear Diary,				\r\n', '2023-08-23 02:08:08'),
(66, 18, 'Untitled.....', 'Dear Diary,				\r\n', '2023-08-23 10:08:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_entries`
--
ALTER TABLE `user_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_entries`
--
ALTER TABLE `user_entries`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
