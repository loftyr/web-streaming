-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2019 pada 04.11
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nonton`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_anime`
--

CREATE TABLE `list_anime` (
  `id_anime` int(11) NOT NULL,
  `judul_anime` varchar(255) NOT NULL,
  `status` varchar(11) CHARACTER SET utf8 NOT NULL,
  `alur_cerita` text DEFAULT NULL,
  `url_img` varchar(255) NOT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `studio` varchar(100) DEFAULT NULL,
  `encoder` varchar(100) DEFAULT NULL,
  `uploader` varchar(100) DEFAULT NULL,
  `rating` decimal(10,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_anime`
--

INSERT INTO `list_anime` (`id_anime`, `judul_anime`, `status`, `alur_cerita`, `url_img`, `genre`, `studio`, `encoder`, `uploader`, `rating`) VALUES
(1, 'Sword Art Online', '1', 'In the year 2022, virtual reality has progressed by leaps and bounds, and a massive online role-playing game called Sword Art Online (SAO) is launched. With the aid of \"NerveGear\" technology, players can control their avatars within the game using nothing but their own thoughts.\r\n\r\nKazuto Kirigaya, nicknamed \"Kirito,\" is among the lucky few enthusiasts who get their hands on the first shipment of the game. He logs in to find himself, with ten-thousand others, in the scenic and elaborate world of Aincrad, one full of fantastic medieval weapons and gruesome monsters. However, in a cruel turn of events, the players soon realize they cannot log out; the game\'s creator has trapped them in his new world until they complete all one hundred levels of the game.\r\n\r\nIn order to escape Aincrad, Kirito will now have to interact and cooperate with his fellow players. Some are allies, while others are foes, like Asuna Yuuki, who commands the leading group attempting to escape from the ruthless game. To make matters worse, Sword Art Online is not all fun and games: if they die in Aincrad, they die in real life. Kirito must adapt to his new reality, fight for his survival, and hopefully break free from his virtual hell.', '3147c6fa93fd750b7fa4755d6a54892f.jpg', 'Action, Adventure, Fantasy, Game, Romance', 'A-1 Pictures', '-', '-', '0.0'),
(2, 'Kono Subarashii Sekai ni Shukufuku wo!', '0', 'After dying a laughable and pathetic death on his way back from buying a game, high school student and recluse Kazuma Satou finds himself sitting before a beautiful but obnoxious goddess named Aqua. She provides the NEET with two options: continue on to heaven or reincarnate in every gamer\'s dream?a real fantasy world! Choosing to start a new life, Kazuma is quickly tasked with defeating a Demon King who is terrorizing villages. But before he goes, he can choose one item of any kind to aid him in his quest, and the future hero selects Aqua. But Kazuma has made a grave mistake?Aqua is completely useless!\r\n\r\nUnfortunately, their troubles don\'t end here; it turns out that living in such a world is far different from how it plays out in a game. Instead of going on a thrilling adventure, the duo must first work to pay for their living expenses. Indeed, their misfortunes have only just begun!', 'cd20a232a525a907cd43a48bacfe6f21.jpg', 'Adventure, Comedy, Fantasy, Magic, Parody, Supernatural', 'Studio Deen', '-', '-', '0.0'),
(4, 'Grand Blue', '1', 'Iori Kitahara moves to the coastal town of Izu for his freshman year at its university, taking residence above Grand Blue, his uncle\'s scuba diving shop. Iori has high hopes and dreams about having the ideal college experience, but when he enters the shop he is sucked into the alcoholic activities of the carefree members of the Diving Club who frequent the place. Persuaded by upperclassmen Shinji Tokita and Ryuujirou Kotobuki, Iori reluctantly joins their bizarre party. His cousin Chisa Kotegawa later walks in and catches him in the act, earning Iori her utter disdain.\r\n\r\nBased on Kenji Inoue and Kimitake Yoshioka\'s popular comedy manga, Grand Blue follows Iori\'s misadventures with his eccentric new friends as he strives to realize his ideal college dream, while also learning how to scuba dive.', 'f7b1f0ddaa6d4036da810e17e218fbf5.jpg', 'Slice of Life, Comedy, Seinen', 'Zero-G', '-', '-', '0.0'),
(5, 'Dimension W', '1', 'In the near future, humans have discovered a fourth dimension, Dimension W, and a supposedly infinite source of energy within. In order to harness this profound new energy, mankind develops advanced &quot;coils,&quot; devices that link to and use the power of Dimension W. However, by year 2071, the New Tesla Energy corporation has monopolized the energy industry with coils, soon leading to the illegal distribution of unofficial coils that begin flooding the markets.\r\n\r\nKyouma Mabuchi is an ex-soldier who is wary of all coil-based technology to the extent that he still drives a gas-powered car. Kyouma is a &quot;Collector,&quot; individuals with the sole duty of hunting down illegal coils in exchange for money. What started out as just any other mission is turned on its head when he bumps in Mira Yurizaki, an android with a connection to the &quot;father&quot; of coils. When a series of strange events begin to take place, these two unlikely allies band together to uncover the mysteries of Dimension W.', '15e3d19b72ef106fd1b8d2d80d53b5a4.jpg', 'Action, Sci-Fi, Seinen', 'Orange, Studio 3Hz', '-', '-', '0.0'),
(6, 'Domestic na Kanojo', '1', 'n their teenage years, few things can hurt people more than the heartaches that come with unrequited love. Such is the case for Natsuo Fujii, who has found himself entranced by his school\'s ever-cheerful teacher Hina. Deflated by this unreachable desire, Natsuo humors his friends and attends a mixer. There he meets Rui, a girl whose lack of excitement rivals that of himself. After bonding over their mutual awkwardness, Rui takes Natsuo to her house and asks him to have sex with her, hoping that the experience will stop her friends from treating her like a clueless child. With his hopeless feelings towards Hina still on his mind, Natsuo hesitantly agrees.\r\n\r\nEqually unfulfilled by their &quot;first times,&quot; the two decide to part ways as strangers. However, before he even has a chance to process this experience, Natsuo\'s father drops a major bombshell: he is getting remarried, and his new wife Tsukiko Tachibana is coming over now to meet Natsuo. As if that was not enough of a shock, her daughters?and, in turn, Natsuo\'s new sisters?are Hina and Rui Tachibana, the woman he\'s in love with and the girl with whom he shared his first night. Now, Natsuo must come to terms with the feelings he has for his step-siblings as his eyes open to a darker side of love.', '0510adb935e12529733e19482a8e9cc1.jpg', 'Drama, Romance, School, Shounen', 'Diomedea', '-', '-', '0.0'),
(7, 'Tensei shitara Slime Datta Ken', '1', 'Thirty-seven-year-old Satoru Mikami is a typical corporate worker, who is perfectly content with his monotonous lifestyle in Tokyo, other than failing to nail down a girlfriend even once throughout his life. In the midst of a casual encounter with his colleague, he falls victim to a random assailant on the streets and is stabbed. However, while succumbing to his injuries, a peculiar voice echoes in his mind, and recites a bunch of commands which the dying man cannot make sense of.\r\n\r\nWhen Satoru regains consciousness, he discovers that he has reincarnated as a goop of slime in an unfamiliar realm. In doing so, he acquires newfound skills?notably, the power to devour anything and mimic its appearance and abilities. He then stumbles upon the sealed Catastrophe-level monster &quot;Storm Dragon&quot; Verudora who had been sealed away for the past 300 years for devastating a town to ashes. Sympathetic to his predicament, Satoru befriends him, promising to assist in destroying the seal. In return, Verudora bestows upon him the name Rimuru Tempest to grant him divine protection. \r\n\r\nNow, liberated from the mundanities of his past life, Rimuru embarks on a fresh journey with a distinct goal in mind. As he grows accustomed to his new physique, his gooey antics ripple throughout the world, gradually altering his fate.', '1a8ff10e4749820441d7a401aa7c7b00.jpg', 'Fantasy, Shounen', '8bit', '-', '-', '0.0'),
(8, 'Goblin Slayer', '1', 'Goblins are known for their ferocity, cunning, and rapid reproduction, but their reputation as the lowliest of monsters causes their threat to be overlooked. Raiding rural civilizations to kidnap females of other species for breeding, these vile creatures are free to continue their onslaught as adventurers turn a blind eye in favor of more rewarding assignments with larger bounties.\r\n\r\nTo commemorate her first day as a Porcelain-ranked adventurer, the 15-year-old Priestess joins a band of young, enthusiastic rookies to investigate a tribe of goblins responsible for the disappearance of several village women. Unprepared and inexperienced, the group soon faces its inevitable demise from an ambush while exploring a cave. With no one else left standing, the terrified Priestess accepts her fate?until the Goblin Slayer unexpectedly appears to not only rescue her with little effort, but destroy the entire goblin nest. \r\n\r\nAs a holder of the prestigious Silver rank, the Goblin Slayer allows her to accompany him as he assists the Adventurer\'s Guild in all goblin-related matters. Together with the Priestess, High Elf, Dwarf, and Lizard-man, the armored warrior will not rest until every single goblin in the frontier lands has been eradicated for good.', '5747cf1849bdde04c19c4a7a8f3bec67.jpg', 'Action, Adventure, Fantasy', 'White Fox', '-', '-', '0.0'),
(9, 'Island', '1', 'Urashima, an island far from the mainland. The people who live there lead carefree lives. But five years ago, the island\'s three great families suffered a series of misfortunes and succumbed to suspicion. The people of the island cut off all contact with the mainland and began a slow decline. The key to saving the island lies in three girls who belong to the three families. But they are bound by old traditions, and are conflicted. On that island, a lone man washes ashore. The man claims to be from the future, and he begins a solitary struggle to change the island\'s fate.', '916e266939e970492af1b54f64e64735.jpg', 'Sci-Fi, Drama', 'feel', '-', '-', '0.0'),
(10, 'Kenja no Mago', '0', 'In the kingdom of Earlshide, Merlin Walford was once regarded as a national hero, hailed for both his power and achievements. Preferring a quiet life however, he secludes himself deep in the rural woods, dedicating his time to raising an orphan that he saved. This orphan is Shin, a normal salaryman in modern-day Japan who was reincarnated into Merlin\'s world while still retaining his past memories. As the years pass, Shin displays unparalleled talent in both magic casting and martial arts, much to Merlin\'s constant amazement. \r\n\r\nOn his 15th birthday however, it becomes apparent that Shin only developed his combat skills and nothing else, leaving him with blatant social awkwardness, a lack of common sense, and a middling sense of responsibility. As a result, Shin enrolls in the kingdom\'s Magic Academy to hone his skills and mature among other teenagers. However, living a normal life is impossible, as he is established as a local celebrity almost as soon as he arrives.\r\n\r\nKenja no Mago follows Shin Walford\'s high school life in the capital as he makes new friends, learns about the world, and fights off the various forces of evil surrounding him and his city.', 'a2cac9873a22aee46ac240f677ec19aa.jpg', 'Action, Comedy, Fantasy, Magic, Romance', 'Silver Link', '-', '-', '0.0'),
(11, 'Sword Art Online Alicization', '1', 'The Soul Translator is a state-of-the-art full-dive interface which interacts with the user\'s Fluctlight—the technological equivalent of a human soul—and fundamentally differs from the orthodox method of sending signals to the brain. The private institute Rath aims to perfect their creation by enlisting the aid of Sword Art Online survivor Kazuto Kirigaya. He works there as a part-time employee to test the system\'s capabilities in the Underworld: the fantastical realm generated by the Soul Translator. As per the confidentiality contract, any memories created by the machine in the virtual world are wiped upon returning to the real world. Kazuto can only vaguely recall a single name, Alice, which provokes a sense of unease when mentioned in reality.\r\n\r\nWhen Kazuto escorts Asuna Yuuki home one evening, they chance upon a familiar foe. Kazuto is mortally wounded in the ensuing fight and loses consciousness. When he comes to, he discovers that he has made a full-dive into the Underworld with seemingly no way to escape. He sets off on a quest, seeking a way back to the physical world once again.', 'dd6dc8133520da70c0560238c9f83e16.jpg', 'Action, Game, Adventure, Romance, Fantasy', 'A-1 Pictures', '-', '-', '0.0'),
(12, 'One Punch Man Season 2', '0', 'The second season of One Punch Man.', '353d18d5c7c27b94f01f5b9d8c7bdd0f.jpg', 'Action, Sci-Fi, Comedy, Parody, Super Power, Supernatural, Seinen', 'J.C.Staff', '-', '-', '7.0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_chapter_manga`
--

CREATE TABLE `list_chapter_manga` (
  `no_id` int(11) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `judul_chapter` varchar(225) NOT NULL,
  `chapter` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_chapter_manga`
--

INSERT INTO `list_chapter_manga` (`no_id`, `id_manga`, `judul_chapter`, `chapter`, `link`, `tgl_upload`) VALUES
(1, 4, 'Judul 1', '1', 'https://drive.google.com/file/d/18_dKiGh3U9zPB16HqZY90R9s0IbDzcx_/preview', '2019-10-01 12:25:12'),
(2, 4, 'Judul 2', '2', 'https://drive.google.com/file/d/18_dKiGh3U9zPB16HqZY90R9s0IbDzcx_/preview', '2019-10-02 12:25:18'),
(3, 4, 'Judul 3', '3', 'https://drive.google.com/file/d/18_dKiGh3U9zPB16HqZY90R9s0IbDzcx_/preview', '2019-10-03 12:25:21'),
(4, 4, 'Judul 4', '4', '', '2019-10-18 03:11:29'),
(5, 4, 'Judul 5', '5', '', '2019-10-18 03:12:04'),
(6, 4, 'Judul 6', '6', '', '2019-10-18 03:12:21'),
(7, 4, 'Judul 7', '7', '', '2019-10-19 03:12:36'),
(8, 4, 'Judul 8', '8', '', '2019-10-19 03:12:49'),
(9, 4, 'Judul 9', '9', '', '2019-10-19 03:13:03'),
(10, 4, 'Judul 10', '10', '', '2019-10-19 03:13:16'),
(11, 4, 'Judul 11', '11', '', '2019-10-19 03:13:36'),
(12, 4, 'Judul 12', '12', '', '2019-10-19 03:13:52'),
(13, 4, 'Judul 13', '13', '', '2019-10-19 03:14:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_episode_anime`
--

CREATE TABLE `list_episode_anime` (
  `no_id` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `episode` int(11) NOT NULL,
  `judul_episode` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link_gd_fullhd` varchar(255) DEFAULT NULL,
  `link_gd_hd` varchar(255) DEFAULT NULL,
  `link_gd_mhd` varchar(255) DEFAULT NULL,
  `link_zy_fullhd` varchar(255) DEFAULT NULL,
  `link_zy_hd` varchar(255) DEFAULT NULL,
  `link_zy_mhd` varchar(255) DEFAULT NULL,
  `link_streaming` varchar(255) DEFAULT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_episode_anime`
--

INSERT INTO `list_episode_anime` (`no_id`, `id_anime`, `episode`, `judul_episode`, `link_gd_fullhd`, `link_gd_hd`, `link_gd_mhd`, `link_zy_fullhd`, `link_zy_hd`, `link_zy_mhd`, `link_streaming`, `tgl_upload`) VALUES
(2, 1, 1, 'Sword Art Online Episode 1', '', '', '', '', '', '', 'https://drive.google.com/file/d/1mdJS7Gc7LeeAwY0LBTUuSPfta_lfMAmJ/preview', '2019-01-05 09:55:09'),
(3, 1, 2, 'Sword Art Online Episode 2', '', '', '', '', '', '', 'https://drive.google.com/file/d/1lJzLMhfT5yjx_5tPjDtmIu-1sd_XFmaY/preview', '2019-01-12 09:56:08'),
(4, 1, 3, 'Sword Art Online Episode 3', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-01-19 13:15:03'),
(5, 1, 4, 'Sword Art Online Episode 4', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-01-26 13:15:20'),
(6, 1, 5, 'Sword Art Online Episode 5', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-02-02 13:15:59'),
(7, 1, 6, 'Sword Art Online Episode 6', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-02-09 13:21:58'),
(8, 1, 7, 'Sword Art Online Episode 7', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-02-16 13:42:34'),
(9, 1, 8, 'Sword Art Online Episode 8', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-02-23 16:13:37'),
(10, 1, 9, 'Sword Art Online Episode 9', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-03-02 16:20:26'),
(11, 1, 10, 'Sword Art Online Episode 10', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-03-09 16:22:10'),
(12, 1, 11, 'Sword Art Online Episode 11', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-03-16 16:24:11'),
(13, 1, 12, 'Sword Art Online Episode 12', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-03-23 16:25:29'),
(14, 1, 13, 'Sword Art Online Episode 13', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-03-30 16:27:32'),
(15, 1, 14, 'Sword Art Online Episode 14', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-04-06 16:28:52'),
(16, 1, 15, 'Sword Art Online Episode 15', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-04-13 16:29:07'),
(17, 1, 16, 'Sword Art Online Episode 16', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-04-20 16:29:21'),
(18, 1, 17, 'Sword Art Online Episode 17', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-04-27 16:30:39'),
(19, 1, 18, 'Sword Art Online Episode 18', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-05-04 16:30:57'),
(20, 1, 19, 'Sword Art Online Episode 19', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-05-11 16:31:37'),
(21, 1, 20, 'Sword Art Online Episode 20', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-05-18 16:31:49'),
(22, 1, 21, 'Sword Art Online Episode 21', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-05-25 16:32:25'),
(23, 1, 22, 'Sword Art Online Episode 22', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-06-01 16:32:54'),
(24, 1, 23, 'Sword Art Online Episode 23', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-06-08 16:33:19'),
(27, 10, 1, 'Kenja no Mago Episode 01', 'https://drive.google.com/file/d/15yM_bqkCnP1AzS5Y-bywYyhO7QU970-3/preview', '', '', '', '', '', 'https://drive.google.com/file/d/15yM_bqkCnP1AzS5Y-bywYyhO7QU970-3/preview', '2019-04-11 09:07:40'),
(29, 10, 2, 'Kenja no Mago Episode 02', '', '', '', '', '', '', 'https://drive.google.com/file/d/19jcUkrqpTfpxu6RmA81S8ySvcFMYLv4e/preview', '2019-04-18 09:07:47'),
(30, 10, 3, 'Kenja no Mago Episode 03', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-04-25 09:07:57'),
(31, 1, 24, 'Sword Art Online Episode 24', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E8ReQGp5UfAE8JGmuLKCItTRyf4Z7L95/preview', '2019-06-15 09:52:01'),
(32, 1, 25, 'Sword Art Online Episode 25', '', '', '', '', '', '', '...', '2019-06-19 09:53:00'),
(33, 10, 4, 'Kenja no Mago Episode 04', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-05-02 15:13:19'),
(34, 10, 5, 'Kenja no Mago Episode 05', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-05-09 15:13:53'),
(35, 10, 6, 'Kenja no Mago Episode 06', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-05-16 15:14:16'),
(36, 10, 7, 'Kenja no Mago Episode 07', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-05-23 15:14:36'),
(37, 10, 8, 'Kenja no Mago Episode 08', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-05-30 15:15:09'),
(38, 10, 9, 'Kenja no Mago Episode 09', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-06-06 09:07:29'),
(39, 10, 10, 'Kenja no Mago Episode 10', '', '', '', '', '', '', 'https://drive.google.com/file/d/1HLHgnSViNk8p18Jnirgy5G7MIVmVuOPY/preview', '2019-06-13 15:19:18'),
(40, 9, 1, 'Island Episode 01', '', '', '', '', '', '', 'https://drive.google.com/file/d/1D5OGda7zKnnniSAI1o9FrnKnTG1f2Dj0/preview', '2019-06-20 18:31:41'),
(41, 9, 2, 'Island Episode 02', '', '', '', '', '', '', '...', '2019-06-20 16:16:09'),
(42, 9, 3, 'Island Episode 03', '', '', '', '', '', '', '...', '2019-06-20 16:13:53'),
(43, 9, 4, 'Island Episode 04', '', '', '', '', '', '', '...', '2019-06-20 16:15:48'),
(44, 9, 5, 'Island Episode 05', '', '', '', '', '', '', '...', '2019-06-20 16:17:00'),
(45, 9, 6, 'Island Episode 06', '', '', '', '', '', '', '...', '2019-06-20 16:17:15'),
(46, 9, 7, 'Island Episode 07', '', '', '', '', '', '', '...', '2019-06-20 16:17:32'),
(47, 9, 8, 'Island Episode 08', '', '', '', '', '', '', '...', '2019-06-20 16:17:53'),
(48, 9, 9, 'Island Episode 09', '', '', '', '', '', '', '...', '2019-06-20 16:18:24'),
(49, 9, 10, 'Island Episode 10', '', '', '', '', '', '', '...', '2019-06-20 16:19:47'),
(50, 9, 11, 'Island Episode 11', '', '', '', '', '', '', '...', '2019-06-20 16:21:59'),
(51, 9, 12, 'Island Episode 12', '', '', '', '', '', '', '...', '2019-06-20 16:22:19'),
(52, 8, 1, 'Gobin Slayer Episode 01', '', '', '', '', '', '', '...', '2019-06-20 16:22:48'),
(53, 8, 2, 'Gobin Slayer Episode 02', '', '', '', '', '', '', '...', '2019-06-20 16:23:01'),
(54, 8, 3, 'Gobin Slayer Episode 03', '', '', '', '', '', '', '...', '2019-06-20 16:23:17'),
(55, 8, 4, 'Gobin Slayer Episode 04', '', '', '', '', '', '', '...', '2019-06-20 16:23:31'),
(56, 8, 5, 'Gobin Slayer Episode 05', '', '', '', '', '', '', '...', '2019-06-20 16:23:45'),
(57, 8, 6, 'Goblin Slayer Episode 06', '', '', '', '', '', '', '...', '2019-06-20 18:34:43'),
(58, 8, 7, 'Goblin Slayer Episode 07', '', '', '', '', '', '', '...', '2019-06-20 18:35:02'),
(59, 8, 8, 'Goblin Slayer Episode 08', '', '', '', '', '', '', '...', '2019-06-20 18:35:19'),
(60, 8, 9, 'Goblin Slayer Episode 09', '', '', '', '', '', '', '...', '2019-06-20 18:35:31'),
(61, 8, 10, 'Goblin Slayer Episode 10', '', '', '', '', '', '', '...', '2019-06-20 18:35:43'),
(62, 8, 11, 'Goblin Slayer Episode 11', '', '', '', '', '', '', '...', '2019-06-20 18:38:07'),
(63, 8, 12, 'Goblin Slayer Episode 12', '', '', '', '', '', '', '...', '2019-06-20 18:38:18'),
(64, 7, 1, 'Tensei shitara Slime Datta Ken 01', '', '', '', '', '', '', '...', '2019-06-20 18:40:07'),
(65, 7, 2, 'Tensei shitara Slime Datta Ken 02', '', '', '', '', '', '', '...', '2019-06-20 18:40:27'),
(66, 7, 3, 'Tensei shitara Slime Datta Ken 03', '', '', '', '', '', '', '...', '2019-06-20 18:40:40'),
(67, 7, 4, 'Tensei shitara Slime Datta Ken 04', '', '', '', '', '', '', '...', '2019-06-20 18:40:50'),
(68, 7, 5, 'Tensei shitara Slime Datta Ken 05', '', '', '', '', '', '', '...', '2019-06-20 18:41:05'),
(69, 10, 11, 'Kenja no Mago Episode 11', '', '', '', '', '', '', '...', '2019-06-21 09:08:32'),
(70, 10, 12, 'Kenja no Mago Episode 12', '', '', '', '', '', '', '...', '2019-06-21 09:08:46'),
(71, 7, 6, 'Tensei shitara Slime Datta Ken 06', '', '', '', '', '', '', '...', '2019-06-21 09:13:51'),
(72, 7, 7, 'Tensei shitara Slime Datta Ken 07', '', '', '', '', '', '', '...', '2019-06-21 09:14:06'),
(73, 7, 8, 'Tensei shitara Slime Datta Ken 08', '', '', '', '', '', '', '...', '2019-06-21 09:14:30'),
(74, 7, 9, 'Tensei shitara Slime Datta Ken 09', '', '', '', '', '', '', '...', '2019-06-21 09:14:46'),
(75, 7, 10, 'Tensei shitara Slime Datta Ken 10', '', '', '', '', '', '', '...', '2019-06-21 09:15:01'),
(76, 7, 11, 'Tensei shitara Slime Datta Ken 11', '', '', '', '', '', '', '...', '2019-06-21 09:15:33'),
(77, 7, 12, 'Tensei shitara Slime Datta Ken 12', '', '', '', '', '', '', '...', '2019-06-21 09:15:54'),
(78, 7, 13, 'Tensei shitara Slime Datta Ken 13', '', '', '', '', '', '', '...', '2019-06-21 09:16:09'),
(79, 7, 14, 'Tensei shitara Slime Datta Ken 14', '', '', '', '', '', '', '...', '2019-06-21 09:17:21'),
(80, 7, 15, 'Tensei shitara Slime Datta Ken 15', '', '', '', '', '', '', '...', '2019-06-21 09:18:04'),
(81, 7, 16, 'Tensei shitara Slime Datta Ken 16', '', '', '', '', '', '', '...', '2019-06-21 09:18:16'),
(82, 7, 17, 'Tensei shitara Slime Datta Ken 17', '', '', '', '', '', '', '...', '2019-06-21 09:18:27'),
(83, 7, 18, 'Tensei shitara Slime Datta Ken 18', '', '', '', '', '', '', '...', '2019-06-21 09:18:37'),
(84, 7, 19, 'Tensei shitara Slime Datta Ken 19', '', '', '', '', '', '', '...', '2019-06-21 09:18:52'),
(85, 7, 20, 'Tensei shitara Slime Datta Ken 20', '', '', '', '', '', '', '...', '2019-06-21 09:19:37'),
(86, 7, 21, 'Tensei shitara Slime Datta Ken 21', '', '', '', '', '', '', '...', '2019-06-21 09:19:55'),
(87, 7, 22, 'Tensei shitara Slime Datta Ken 22', '', '', '', '', '', '', '...', '2019-06-21 09:20:17'),
(88, 7, 23, 'Tensei shitara Slime Datta Ken 23', '', '', '', '', '', '', '...', '2019-06-21 09:20:37'),
(89, 7, 24, 'Tensei shitara Slime Datta Ken 24', '', '', '', '', '', '', '...', '2019-06-21 09:20:51'),
(90, 6, 1, 'Domestic na Kanojo 01', '', '', '', '', '', '', '...', '2019-06-21 09:22:32'),
(91, 6, 2, 'Domestic na Kanojo 02', '', '', '', '', '', '', '...', '2019-06-21 09:22:46'),
(92, 6, 3, 'Domestic na Kanojo 03', '', '', '', '', '', '', '...', '2019-06-21 09:22:59'),
(93, 6, 4, 'Domestic na Kanojo 04', '', '', '', '', '', '', '...', '2019-06-21 09:23:11'),
(94, 6, 5, 'Domestic na Kanojo 05', '', '', '', '', '', '', '...', '2019-06-21 09:23:24'),
(95, 6, 6, 'Domestic na Kanojo 06', '', '', '', '', '', '', '...', '2019-06-21 09:23:41'),
(96, 6, 7, 'Domestic na Kanojo 07', '', '', '', '', '', '', '...', '2019-06-21 09:23:54'),
(97, 6, 8, 'Domestic na Kanojo 08', '', '', '', '', '', '', '...', '2019-06-21 09:24:08'),
(98, 6, 9, 'Domestic na Kanojo 09', '', '', '', '', '', '', '...', '2019-06-21 09:24:23'),
(99, 6, 10, 'Domestic na Kanojo 10', '', '', '', '', '', '', '...', '2019-06-21 09:24:38'),
(100, 6, 11, 'Domestic na Kanojo 11', '', '', '', '', '', '', '...', '2019-06-21 09:24:50'),
(101, 6, 12, 'Domestic na Kanojo 12', '', '', '', '', '', '', '...', '2019-06-21 09:25:06'),
(102, 5, 1, 'Dimension W Episode 01', '', '', '', '', '', '', '...', '2019-06-21 09:26:10'),
(103, 5, 2, 'Dimension W Episode 02', '', '', '', '', '', '', '...', '2019-06-21 09:26:21'),
(104, 5, 3, 'Dimension W Episode 03', '', '', '', '', '', '', '...', '2019-06-21 09:26:40'),
(105, 5, 4, 'Dimension W Episode 04', '', '', '', '', '', '', '...', '2019-06-21 09:27:04'),
(106, 5, 5, 'Dimension W Episode 05', '', '', '', '', '', '', '...', '2019-06-21 09:27:20'),
(107, 5, 6, 'Dimension W Episode 06', '', '', '', '', '', '', '...', '2019-06-21 09:27:36'),
(108, 5, 7, 'Dimension W Episode 07', '', '', '', '', '', '', '...', '2019-06-21 09:27:48'),
(109, 5, 8, 'Dimension W Episode 08', '', '', '', '', '', '', '...', '2019-06-21 09:28:11'),
(110, 5, 9, 'Dimension W Episode 09', '', '', '', '', '', '', '...', '2019-06-21 09:28:31'),
(111, 5, 10, 'Dimension W Episode 10', '', '', '', '', '', '', '...', '2019-06-21 09:28:46'),
(112, 5, 11, 'Dimension W Episode 11', '', '', '', '', '', '', '...', '2019-06-21 09:28:58'),
(113, 5, 12, 'Dimension W Episode 12', '', '', '', '', '', '', '...', '2019-06-21 09:29:08'),
(114, 2, 1, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 01', '', '', '', '', '', '', '...', '2019-06-21 09:30:28'),
(115, 2, 2, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 02', '', '', '', '', '', '', '...', '2019-06-21 09:30:56'),
(116, 2, 3, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 03', '', '', '', '', '', '', '...', '2019-06-21 09:31:12'),
(117, 2, 4, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 04', '', '', '', '', '', '', '...', '2019-06-21 09:31:23'),
(118, 2, 5, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 05', '', '', '', '', '', '', '...', '2019-06-21 09:31:40'),
(119, 2, 6, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 06', '', '', '', '', '', '', '...', '2019-06-21 09:31:53'),
(120, 2, 7, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 07', '', '', '', '', '', '', '...', '2019-06-21 09:32:13'),
(121, 2, 8, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 08', '', '', '', '', '', '', '...', '2019-06-21 09:32:30'),
(122, 2, 9, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 09', '', '', '', '', '', '', '...', '2019-06-21 09:32:44'),
(123, 2, 10, 'Kono Subarashii Sekai ni Shukufuku wo! Episode 10', '', '', '', '', '', '', '...', '2019-06-21 09:33:01'),
(124, 4, 1, 'Grand Blue Episode 01', '', '', '', '', '', '', '...', '2019-06-21 09:36:19'),
(125, 4, 2, 'Grand Blue Episode 02', '', '', '', '', '', '', '...', '2019-06-21 09:36:31'),
(126, 4, 3, 'Grand Blue Episode 03', '', '', '', '', '', '', '...', '2019-06-21 09:37:05'),
(127, 4, 4, 'Grand Blue Episode 04', '', '', '', '', '', '', '...', '2019-06-21 09:37:22'),
(128, 4, 5, 'Grand Blue Episode 05', '', '', '', '', '', '', '...', '2019-06-21 09:37:37'),
(129, 4, 6, 'Grand Blue Episode 06', '', '', '', '', '', '', '...', '2019-06-21 09:37:52'),
(130, 4, 7, 'Grand Blue Episode 07', '', '', '', '', '', '', '...', '2019-06-21 09:38:14'),
(131, 4, 8, 'Grand Blue Episode 08', '', '', '', '', '', '', '...', '2019-06-21 09:38:31'),
(132, 4, 9, 'Grand Blue Episode 09', '', '', '', '', '', '', '...', '2019-06-21 09:39:21'),
(133, 4, 10, 'Grand Blue Episode 10', '', '', '', '', '', '', '...', '2019-06-21 09:39:30'),
(134, 4, 11, 'Grand Blue Episode 11', '', '', '', '', '', '', '...', '2019-06-21 09:39:44'),
(135, 4, 12, 'Grand Blue Episode 12', '', '', '', '', '', '', '...', '2019-06-21 09:39:54'),
(136, 11, 1, 'Sword Art Online Alicization Episode 01', '', '', '', '', '', '', 'https://drive.google.com/file/d/1qbPKENA5QVd09K6NAgLhpgZQfWH4d9fh/preview', '2019-06-21 19:49:52'),
(137, 11, 2, 'Sword Art Online Alicization Episode 02', '', '', '', '', '', '', 'https://drive.google.com/file/d/1KO1S6fDqmb7BcL-J5DDa1rM3ZJS-tJ2H/preview', '2019-06-21 19:50:56'),
(138, 11, 3, 'Sword Art Online Alicization Episode 03', '', '', '', '', '', '', 'https://drive.google.com/file/d/19skg25tk1k8W8fGD4YqKD3701XaULeNj/preview', '2019-06-21 19:52:04'),
(139, 11, 4, 'Sword Art Online Alicization Episode 04', '', '', '', '', '', '', 'https://drive.google.com/file/d/1__DRNyJAZP8jChCJl4MY7TM3MPfRESC1/preview', '2019-06-21 19:53:44'),
(140, 11, 5, 'Sword Art Online Alicization Episode 05', '', '', '', '', '', '', 'https://drive.google.com/file/d/1v7PP4XO9nalt_CxQZq-foktIcdpOEw5_/preview', '2019-06-21 19:56:18'),
(141, 11, 6, 'Sword Art Online Alicization Episode 06', '', '', '', '', '', '', 'https://drive.google.com/file/d/1uIigIz8Sw9xpn7zjr3v1SlKV5S_jPH2p/preview', '2019-06-21 20:08:46'),
(142, 11, 7, 'Sword Art Online Alicization Episode 07', '', '', '', '', '', '', 'https://drive.google.com/file/d/1GediV1FYgFjJpV9AvHa0y8hWPsaJZ_6O/preview', '2019-06-21 20:09:55'),
(143, 11, 8, 'Sword Art Online Alicization Episode 08', '', '', '', '', '', '', 'https://drive.google.com/file/d/1Hi99rjcLfZMhOXNUeGgL4_eiQGzhQtzG/preview', '2019-06-21 20:10:37'),
(144, 11, 9, 'Sword Art Online Alicization Episode 09', '', '', '', '', '', '', 'https://drive.google.com/file/d/15aMeAl6fCdzud8f09MJacMKG_D6buDDD/preview', '2019-06-21 20:11:31'),
(145, 11, 10, 'Sword Art Online Alicization Episode 10', '', '', '', '', '', '', 'https://drive.google.com/file/d/1Vn8QQSmCAOGtgiE5XdHlxQzy-I32DaZg/preview', '2019-06-21 20:12:34'),
(146, 11, 11, 'Sword Art Online Alicization Episode 11', '', '', '', '', '', '', 'https://drive.google.com/file/d/1WRnGdlxUmCAGXJEbiae9VJsGn_zKq6rC/preview', '2019-06-21 20:14:08'),
(147, 11, 12, 'Sword Art Online Alicization Episode 12', '', '', '', '', '', '', 'https://drive.google.com/file/d/1E3qEA3SB35HLDrmJdCJ9Z43aBlH7XreB/preview', '2019-06-21 20:55:56'),
(148, 11, 13, 'Sword Art Online Alicization Episode 13', '', '', '', '', '', '', 'https://drive.google.com/file/d/1NdOlSXPCK6QKw1-sYzUYzsSCbqWal-P9/preview', '2019-06-21 20:56:31'),
(149, 11, 14, 'Sword Art Online Alicization Episode 14', '', '', '', '', '', '', 'https://drive.google.com/file/d/1wCTP52wMxKuN_W-4pf6YWnlXBLETQFic/preview', '2019-06-21 20:56:55'),
(150, 11, 15, 'Sword Art Online Alicization Episode 15', '', '', '', '', '', '', 'https://drive.google.com/file/d/1onnLFfbnR65N0GOpUuta4XW8bnVE8uX7/preview', '2019-06-21 20:57:19'),
(151, 11, 16, 'Sword Art Online Alicization Episode 16', '', '', '', '', '', '', 'https://drive.google.com/file/d/18qJkZR3UC8Ydje1fp-2Z9hEvElywhSZc/preview', '2019-06-21 20:59:59'),
(152, 11, 17, 'Sword Art Online Alicization Episode 17', '', '', '', '', '', '', 'https://drive.google.com/file/d/1LZE3EMfFBwr4M90YMGnGVo2g4IXbL7Fk/preview', '2019-06-21 21:00:09'),
(153, 11, 18, 'Sword Art Online Alicization Episode 18', '', '', '', '', '', '', 'https://drive.google.com/file/d/1rpjMRvBxciofiruYNiL7v1jTvrHUgs3x/preview', '2019-06-21 21:00:22'),
(154, 11, 19, 'Sword Art Online Alicization Episode 19', '', '', '', '', '', '', 'https://drive.google.com/file/d/1gV_Vh2qVYfx140GDXHCVVO0ibkAe7s6m/preview', '2019-06-21 21:00:35'),
(155, 11, 20, 'Sword Art Online Alicization Episode 20', '', '', '', '', '', '', 'https://drive.google.com/file/d/1tTftUpiBrPWxLzplrVvxVbbqAdKEAHsP/preview', '2019-06-21 21:00:47'),
(156, 11, 21, 'Sword Art Online Alicization Episode 21', '', '', '', '', '', '', 'https://drive.google.com/file/d/1oAq1ZpVrE1cOQDHXlFcC31-QMDM5nYgu/preview', '2019-06-21 21:01:01'),
(157, 11, 22, 'Sword Art Online Alicization Episode 22', '', '', '', '', '', '', 'https://drive.google.com/file/d/1Q_xPQjpnceF4MEff7egj_i5gKcXq0n8H/preview', '2019-06-21 21:01:13'),
(158, 11, 23, 'Sword Art Online Alicization Episode 23', '', '', '', '', '', '', 'https://drive.google.com/file/d/1d6v8q2N1PkOTWyhMVn8575DWmLB4vtNP/preview', '2019-06-21 21:01:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_film`
--

CREATE TABLE `list_film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `alur_cerita` varchar(255) DEFAULT NULL,
  `genre` varchar(255) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `kualitas` varchar(10) DEFAULT NULL,
  `rating` decimal(11,1) DEFAULT NULL,
  `tgl_upload` datetime NOT NULL,
  `url_img` varchar(255) DEFAULT NULL,
  `link_streaming` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_film`
--

INSERT INTO `list_film` (`id_film`, `judul_film`, `alur_cerita`, `genre`, `tahun`, `kualitas`, `rating`, `tgl_upload`, `url_img`, `link_streaming`) VALUES
(2, 'Daughter of the Wolf', 'laire (Gina Carano), an ex-military specialist, comes home to the recent news of her father’s passing only to find herself at odds with her defiant 13-year-old son, Charlie (Anton Gillis-Adelman). With the news that Claire has inherited a large sum of mon', 'Action, Thriller', 2019, 'FHD', '7.1', '2019-06-24 11:04:54', '4ec0eca70030f8addc0433b61cb00cb6.jpg', ''),
(3, 'Blackbear (Submission)', 'After two marines make it home following an ISIS interrogation, one struggles to survive while the other fights his way back into the mixed martial arts world that he left behind years ago. ', 'Drama, Sport', 2019, 'FHD', '6.9', '2019-06-24 15:59:37', '13845ca5a97585fcb814645635b3605b.jpg', ''),
(4, 'Big Brother', 'Big Brother adalah sebuah film drama dan aksi yang disutradarai oleh Ka-Wai Kam. Film ini menceritakan guru yang bernama Henry Chen Xia ( Donnie Yen ) seorang mantan tentara yang pulang ke kampung halamannya di Hong Kong dan memilih mengajar di sekolah Ta', 'Action, Drama', 2019, 'FHD', '6.5', '2019-06-24 11:03:15', 'b7e4aef862e5af5da660b055049116f7.jpg', ''),
(5, 'Brick Mansions', 'Brick Mansions akan mendatang Aksi Film Prancis oleh Camilie Delamarre dan ditulis oleh Luc Besson, Robert Mark Kanmen dan Bibi Naceri. Ini membuat ulang saat 2004 pada film District 13. Salah satunya adalah Paul Walker, yang membintangi dan bermain di Fr', 'Action, Crime', 2014, 'FHD', '7.8', '2019-06-24 15:51:23', 'bda8c16ed5038fc7a0e07b16827a1cb1.jpg', ''),
(6, 'Touch by Touch', 'Seon-mi (Koo Ji-sung) hands a name card to Joo-hee (Ha Na-kyeong) who is about to get married, saying that she\'ll be able to feel sexual satisfaction like never before. Joo-hee experiences something new and starts expressing her rising emotions to her fia', '-', 2015, 'HD', '7.0', '2019-06-24 14:52:37', NULL, ''),
(7, 'Tomb Raider', 'Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she discovers the island where her father disappeared.', 'Action, Adventure, Fantasy', 2018, 'FHD', '7.8', '2019-06-24 14:54:47', NULL, ''),
(8, 'Tinker Tailor Soldier Spy', 'Tahun 1970-an, pensiunan agen rahasia MI6 George Smiley sedang mencoba untuk menyesuaikan diri dengan kehidupan sipil saat seorang agen lainnya muncul kembali dengan informasi penting. Smiley menemukan dirinya ditarik kembali ke arena spionase Diberi tuga', 'Drama, Mystery', 2011, 'HD', '7.0', '2019-06-24 14:56:30', NULL, ''),
(9, 'The Unknown Soldier', 'A film adaptation of Väinö Linna\'s best selling novel The Unknown Soldier (1954) and the novel\'s unedited manuscript version, Sotaromaani.', 'Drama, War', 2017, 'HD', '6.9', '2019-06-24 14:58:57', NULL, ''),
(10, 'Red Sparrow', 'Ballerina Dominika Egorova is recruited to \'Sparrow School,\' a Russian intelligence service where she is forced to use her body as a weapon. Her first mission, targeting a C.I.A. agent, threatens to unravel the security of both nations.', 'Action, Drama, Thriller', 2018, 'FHD', '7.8', '2019-06-24 15:00:14', NULL, ''),
(11, 'Romulus & Remus The First King', 'Romulus and Remus, two shepherds and loyal brothers, end up taking part to a journey that will lead one of them to be the founder of the greatest nation ever seen. However, the fate of the chosen one will pass from killing his own brother.', 'Drama, History', 2019, 'HD', '7.4', '2019-06-24 15:02:04', NULL, ''),
(12, 'Spider-Man: Homecoming', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', 'Action, Adventure, Sci-Fi', 2017, 'HD', '7.5', '2019-06-24 16:16:59', '5b79c62cbd0b19ea2a4679a56fb3d11c.jpg', ''),
(13, 'T2 Trainspotting', 'After 20 years abroad, Mark Renton returns to Scotland and reunites with his old friends Sick Boy, Spud, and Begbie.', 'Drama', 2017, 'HD', '5.8', '2019-06-24 15:10:48', NULL, ''),
(14, 'The Last Warrior', 'When Ivan meets his new friends in another place called Belogorie, his quest on the new country begins with sparkling immortals effect within love in the pass from his childhood up on his time.', 'Action, Adventure, Comedy', 2017, 'HD', '6.6', '2019-06-24 15:14:05', NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_manga`
--

CREATE TABLE `list_manga` (
  `id_manga` int(11) NOT NULL,
  `judul_manga` varchar(225) CHARACTER SET utf8 NOT NULL,
  `alur_cerita` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `genre` varchar(225) DEFAULT NULL,
  `rating` decimal(10,1) DEFAULT NULL,
  `published` datetime NOT NULL,
  `url_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_manga`
--

INSERT INTO `list_manga` (`id_manga`, `judul_manga`, `alur_cerita`, `status`, `genre`, `rating`, `published`, `url_img`) VALUES
(4, 'Boku no Hero Academia', 'The story is set in the modern day, except people with special powers have become commonplace throughout the world. A boy named Izuku Midoriya has no powers, but he still dreams.', 1, 'Action, Comedy, Parody, School, Shounen, Super Power', '7.0', '2014-07-14 05:17:36', NULL),
(5, 'Demon Slayer: Kimetsu no Yaiba', 'Since ancient times, rumors have abounded of man-eating demons lurking in the woods. Because of this, the local townsfolk never venture outside at night. Legend has it that a demon slayer also roams the night, hunting down these bloodthirsty demons. For young Tanjirou, these rumors will soon to become his harsh reality...\r\n\r\nEver since the death of his father, Tanjirou has taken it upon himself to support his family. Although their lives may be hardened by tragedy, they\'ve found happiness. But that ephemeral warmth is shattered one day when Tanjirou finds his family slaughtered and the lone survivor, his sister Nezuko, turned into a demon. To his surprise, however, Nezuko still shows signs of human emotion and thought...\r\n\r\nThus begins Tanjirou\'s quest to fight demons and turn his sister human again.', 1, 'Action, Demons, Historical, Shounen, Supernatural', '8.0', '2016-02-15 05:16:29', NULL),
(6, 'World Trigger', 'Earth is under constant threat from Neighbors, invincible monsters from another dimension that destroy our way of life. At least we have the elite warriors of Border, who co-opt alien technology to fight back! Our hero Osamu Mikumo may not be the best agent, but he\'ll do whatever it takes to defend life on Earth as we know it. When Osamu meets a feisty humanoid Neighbor named Yuma, everything that he thinks is right is turned on its head. Can the two natural enemies ever become friends?', 0, 'Action, School, Sci-Fi, Shounen, Space, Supernatural', '8.0', '2013-02-08 19:59:11', 'eeae2f4cea68c00d4edad4b42e86651d.jpg'),
(7, 'Log Horizon', 'Elder Tale\" is a long-established and popular online game: but the day in which was introduced the 11th expansion pack, 30,000 Japanese users have been confined to the world of the game. In the world that is a fusion of reality and the game, our hero Shiroe begins his fight from the city of Akiba.', 0, 'Action, Adventure, Fantasy, Magic, Sci-Fi', '8.0', '2010-04-13 20:02:35', 'bf676a7ebb6fab62a4a23c2bb0aaf8e4.jpg'),
(8, 'Utsuro no Hako to Zero no Maria', 'Kazuki Hoshino values his everyday life above all else. He spends the days carefree with his friends at school, until the uneventful bliss suddenly comes to a halt with the transfer of the aloof beauty Aya Otonashi into his class and her cold, dramatic statement to him immediately upon arrival:\r\n\r\n\"I\'m here to break you. This is the 13,118th time I\'ve transferred. After so many occasions, I have to say that this is all starting to grate on me, which is why this time I\'m spicing things up with a proper declaration of war.\"\r\n\r\nAnd with those puzzling words, the ordinary days that Kazuki loved so dearly become a cycle of turmoil and fear—Aya\'s sudden appearance signals the unraveling of unseen mysteries surrounding Kazuki\'s seemingly normal friends, including the discovery of mysterious devices known as \"boxes.\"', 0, 'Action, Mystery, Drama, Horror, Romance, School, Supernatural, Psychological, Thriller', '8.9', '2019-10-17 08:44:36', '492f4300380a452ef5e1826965d5acc1.jpg'),
(9, 'Solo Leveling', 'Ten years ago, after \"the Gate\" that connected the real world with the monster world opened, some of the ordinary, everyday people received the power to hunt monsters within the Gate. They are known as \"Hunters.\" However, not all Hunters are powerful. My name is Sung Jin-Woo, an E-rank Hunter. I\'m someone who has to risk his life in the lowliest of dungeons, the \"World\'s Weakest.\" Having no skills whatsoever to display, I barely earned the required money by fighting in low-leveled dungeons... at least until I found a hidden dungeon with the hardest difficulty within the D-rank dungeons! In the end, as I was accepting death, I suddenly received a strange power, a quest log that only I could see, a secret to leveling up that only I know about! If I trained in accordance with my quests and hunted monsters, my level would rise. Changing from the weakest Hunter to the strongest S-rank Hunter!', 0, 'Action, Adventure, Fantasy', '8.9', '2018-05-04 08:49:43', '9f8a06f55c7371073dc59ab1ffa1e3bf.jpg'),
(10, 'Yahari Ore no Seishun Love Comedy wa Machigatteiru', 'Hachiman Hikigaya, a student in Soubu High School, is a cynical loner due to his traumatic past experiences in his social life. This eventually led to him developing a set of \"dead fish eyes\" and a twisted personality similar to that of a petty criminal. Believing that the concept of youth is a lie made up by youngsters who face their failures in denial, he turns in an essay that criticizes this exact mentality of youths. Irritated by the submission, his homeroom teacher, Shizuka Hiratsuka forces him to join the Volunteer Service Club—a club that assists students to solve their problems in life, hoping that helping other people would change his personality.\r\n\r\nHowever, Yukino Yukinoshita, the most beautiful girl in school, is surprisingly the sole member of the club and a loner, albeit colder and smarter than Hikigaya. Their club soon expands when Yui Yuigahama joins them after being helped with her plight, and they begin to accept more requests.\r\n\r\nWith his status quo as a recluse, Hikigaya attempts to solve problems in his own way, but his methods may prove to be a double-edged sword.', 0, 'Comedy, Romance, School', '8.0', '2011-03-23 09:04:02', '3e082cfc12c17a8946d5c85ba524602f.jpg'),
(11, 'Nogi Wakaba wa Yuusha de Aru', 'The story of Nogi Wakaba wa Yuusha de Aru takes place 300 years in the past, in 2018, the first days of the Divine Era. The six main characters form the first ever Hero Team: Nogi Wakaba, Nogi Sonoko\'s ancestor; Uesato Hinata, Takashima Yuna, Koori Chikage, Doi Tamako and Iyojima Anzu.', 0, 'Fantasy, Magic', '8.8', '2015-07-30 09:07:28', '5856a688b6a7d3ec7af02705e3089477.jpg'),
(12, 'Shuumatsu Nani Shitemasu ka? Isogashii desu ka? Sukutte Moratte Ii desu ka?', 'Five hundred years have passed since the humans went extinct at the hands of the fearsome and mysterious \'Beasts.\' The surviving races now make their homes up on floating islands in the sky, out of reach of all but the most mobile of Beasts. However, this new safe haven Regul Aire has a dark secret behind it.\r\n\r\nOnly a small group of young girls, the Leprechauns, can wield the ancient weapons needed to fend off invasions from these creatures. Into the girls\' unstable and fleeting lives, where a call to certain death could come at any moment, enters an unlikely character: a young man who lost everything in his final battle five hundred years ago, the last living human awakened from a long, icy slumber.\r\n\r\nUnable to fight any longer, Willem becomes the father that the girls never had, caring for and nurturing them even as he struggles to come to terms with his new life, in which he feels the pain of helplessly waiting for his loved ones to return home from battle that his \'Daughter\' once felt for him so long ago. Together, through their everyday interactions in the \'orphanage,\' Willem and the girls gradually come to understand what family means and what is truly worth protecting.', 0, 'Drama, Fantasy, Romance, Sci-Fi', '8.8', '2014-11-01 09:20:19', 'b7af971fa208d38968b20aae2525eb24.jpg'),
(13, 'One Punch-Man', 'After rigorously training for three years, the ordinary Saitama has gained immense strength which allows him to take out anyone and anything with just one punch. He decides to put his new skill to good use by becoming a hero. However, he quickly becomes bored with easily defeating monsters, and wants someone to give him a challenge to bring back the spark of being a hero.\r\n\r\nUpon bearing witness to Saitama\'s amazing power, Genos, a cyborg, is determined to become Saitama\'s apprentice. During this time, Saitama realizes he is neither getting the recognition that he deserves nor known by the people due to him not being a part of the Hero Association. Wanting to boost his reputation, Saitama decides to have Genos register with him, in exchange for taking him in as a pupil. Together, the two begin working their way up toward becoming true heroes, hoping to find strong enemies and earn respect in the process.', 0, 'Action, Comedy, Parody, Sci-Fi, Super Power, Supernatural', '8.8', '2012-06-14 09:22:48', '36c9771996a5c1db0d54638ffb9284e8.jpg'),
(14, 'Re:Zero kara Hajimeru Isekai Seikatsu', 'Suddenly, high school student Subaru Natsuki has been summoned to another world on the way back from the convenience store. With the biggest crisis of his life being summoned to another world, and with no sign of the one who summoned him, things become even worse when he is attacked. But when he is saved by a mysterious, silver-haired girl with a fairy cat, Subaru attempts to return the favor by helping her track down something that was stolen from her. When they finally manage to get a clue, Subaru and the girl are attacked and killed by someone. Subaru then awakens in the place he was summoned and notices he gained the ability \"Returns by Death\" and has become a helpless boy that only has the ability to rewind time to a certain point by dying. Beyond the despair, can he save the girl from the fate of death?', 0, 'Action, Drama, Fantasy', '8.8', '2014-01-23 09:25:06', 'a99b033b3ef111ee31d64963237d335b.jpg'),
(15, 'manga 1', 'asdfadfasdf', 0, 'asdfadf', '8.0', '2019-10-28 05:00:12', 'aa38300b4bc4f7e5ef24ef37d1e1f983.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list_anime`
--
ALTER TABLE `list_anime`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indeks untuk tabel `list_chapter_manga`
--
ALTER TABLE `list_chapter_manga`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `list_episode_anime`
--
ALTER TABLE `list_episode_anime`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `id_anime` (`id_anime`);

--
-- Indeks untuk tabel `list_film`
--
ALTER TABLE `list_film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `list_manga`
--
ALTER TABLE `list_manga`
  ADD PRIMARY KEY (`id_manga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list_anime`
--
ALTER TABLE `list_anime`
  MODIFY `id_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `list_chapter_manga`
--
ALTER TABLE `list_chapter_manga`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `list_episode_anime`
--
ALTER TABLE `list_episode_anime`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT untuk tabel `list_film`
--
ALTER TABLE `list_film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `list_manga`
--
ALTER TABLE `list_manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `list_episode_anime`
--
ALTER TABLE `list_episode_anime`
  ADD CONSTRAINT `list_episode_anime_ibfk_1` FOREIGN KEY (`id_anime`) REFERENCES `list_anime` (`id_anime`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
