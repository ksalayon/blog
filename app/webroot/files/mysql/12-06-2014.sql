-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table myblog_db.business
DROP TABLE IF EXISTS `business`;
CREATE TABLE IF NOT EXISTS `business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '0',
  `body` varchar(50) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.business: ~0 rows (approximately)
DELETE FROM `business`;
/*!40000 ALTER TABLE `business` DISABLE KEYS */;
/*!40000 ALTER TABLE `business` ENABLE KEYS */;


-- Dumping structure for table myblog_db.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.categories: ~8 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`, `description`, `created`) VALUES
	(1, 'World', NULL, NULL),
	(2, 'Politics', NULL, NULL),
	(3, 'Sport', NULL, NULL),
	(4, 'Living', NULL, NULL),
	(5, 'Entertainment', NULL, NULL),
	(6, 'Technology', NULL, NULL),
	(7, 'National', NULL, NULL),
	(8, 'Global', NULL, NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table myblog_db.comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime DEFAULT '0000-00-00 00:00:00',
  `emailAddress` varchar(100) DEFAULT '0000-00-00 00:00:00',
  `rating` tinyint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.comments: ~4 rows (approximately)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `post_id`, `name`, `comment`, `created`, `emailAddress`, `rating`) VALUES
	(41, 43, 'asd', 'asdasd', '2014-03-11 01:29:31', 'asdasd', NULL),
	(42, 43, 'asd', 'asd', '2014-03-11 01:57:05', 'asd', NULL),
	(43, 43, 'asd', 'asd', '2014-03-11 02:12:35', 'asd', NULL),
	(44, 43, 'asd', 'asd', '2014-03-11 02:17:04', 'asd', NULL),
	(45, 43, 'asd', 'asd', '2014-03-11 02:17:41', 'asd', NULL);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Dumping structure for table myblog_db.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.contacts: ~15 rows (approximately)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `email`, `subject`, `message`, `created`) VALUES
	(37, 'asdasd', 'asda', 'fasfa', '0000-00-00 00:00:00'),
	(38, 'kin@immagine.co.nz', '', 'Lorem ipsum dasdfasdfasdf', '0000-00-00 00:00:00'),
	(39, 'asdasda@nkasfnas.com', '', 'asdasda', '0000-00-00 00:00:00'),
	(40, 'Newentry@test.com', '', 'knanf.kas', '0000-00-00 00:00:00'),
	(41, 'jack@testing.com', '', 'hjbfjhabyuasbasbasbasbfa', '0000-00-00 00:00:00'),
	(42, 'njkasnjkasnf@jfank.com', '', 'bykasfasf', '0000-00-00 00:00:00'),
	(43, 'jack@jack.jack', '', 'fasfasf', '0000-00-00 00:00:00'),
	(44, 'testing@gmail.com', '', 'MESSAGE TEST', '0000-00-00 00:00:00'),
	(45, 'vhasdh@bhabfa.com', 'hbfkafky', 'kbaybfa', '0000-00-00 00:00:00'),
	(46, '', '', '', '0000-00-00 00:00:00'),
	(47, '', '', '', '0000-00-00 00:00:00'),
	(48, '', '', '', '0000-00-00 00:00:00'),
	(49, '', '', '', '0000-00-00 00:00:00'),
	(50, '', '', '', '0000-00-00 00:00:00'),
	(51, '', '', '', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;


-- Dumping structure for table myblog_db.main_topics
DROP TABLE IF EXISTS `main_topics`;
CREATE TABLE IF NOT EXISTS `main_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.main_topics: ~0 rows (approximately)
DELETE FROM `main_topics`;
/*!40000 ALTER TABLE `main_topics` DISABLE KEYS */;
INSERT INTO `main_topics` (`id`, `title`, `body`) VALUES
	(2, 'Clients', 'Test'),
	(3, 'Calendar', 'asd'),
	(4, 'Lookups', 'asd'),
	(5, 'Mail', 'nd'),
	(6, 'Products', 'asd'),
	(7, 'Consultants', 'tes'),
	(8, 'Billing', 'lmkjn ');
/*!40000 ALTER TABLE `main_topics` ENABLE KEYS */;


-- Dumping structure for table myblog_db.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `featured_image` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.posts: ~27 rows (approximately)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `category_id`, `title`, `body`, `featured_image`, `created`, `user_id`, `modified`) VALUES
	(16, 2, 'asdfasdf', '<p>asdfasdf</p>', 'download.jpg', '2013-12-15 22:45:54', NULL, '2014-02-09 21:07:31'),
	(17, 3, 'This is the title', '<h1 style="border: 0px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12px; margin: 0px 0px 1.625em; outline: 0px; padding: 0px; vertical-align: baseline; color: #373737; line-height: 19.5px;"><em><strong>YOL</strong>O</em> incididunt kitsch, enim keffiyeh ad scenester sustainable. Marfa culpa hashtag Vice enim. Polaroid kale chips gentrify, High Life Godard meh sriracha leggings excepteur quis Cosby sweater pop-up culpa. McSweeney\'s authentic paleo drinking vinegar, Pinterest disrupt esse proident fashion axe single-origin coffee id cray. Irony deserunt dreamcatcher irure gluten-free. Officia exercitation minim, consequat ennui quinoa Williamsburg wolf sartorial. Thundercats Etsy aliquip, McSweeney\'s dreamcatcher est synth Helvetica sunt whatever tofu.</h1>\r\n<p>&nbsp;<img src="http://grossify.com/wp-content/uploads/2013/04/Say-Yolo-Again.png" alt="YOLO!" width="500" height="622" /></p>\r\n<h1>asdfasdf</h1>\r\n<p>&nbsp;</p>\r\n<p style="border: 0px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12px; margin: 0px 0px 1.625em; outline: 0px; padding: 0px; vertical-align: baseline; color: #373737; line-height: 19.5px;">Marfa minim 8-bit, McSweeney\'s banh mi hashtag tofu flexitarian salvia. Beard roof party dreamcatcher ethical. Mlkshk labore enim veniam, quinoa ex biodiesel tote bag anim pug polaroid. Aesthetic sunt fugiat labore, reprehenderit tattooed whatever. Consectetur Tonx DIY, Thundercats commodo street art bicycle rights four loko selfies craft beer. Squid polaroid PBR&amp;B laborum kitsch. Enim synth deserunt, ethical flexitarian authentic pariatur pop-up dreamcatcher selvage.</p>\r\n<p style="border: 0px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12px; margin: 0px 0px 1.625em; outline: 0px; padding: 0px; vertical-align: baseline; color: #373737; line-height: 19.5px;">Meh selvage voluptate ea, deep v cray fingerstache. Blog American Apparel polaroid retro twee, asymmetrical Wes Anderson cray roof party wolf cupidatat. Dreamcatcher +1 hashtag, mlkshk vinyl sartorial pickled ethical YOLO delectus nulla small batch. Lo-fi adipisicing kale chips twee. Pariatur eu mumblecore 8-bit, brunch Banksy Austin odio cillum et banjo assumenda fingerstache minim +1. Aesthetic laboris aliquip nostrud, dolore Vice organic esse banjo food truck. Bushwick proident scenester, ad chia aliqua Helvetica mustache sartorial umami you probably haven\'t heard of them VHS.</p>\r\n<p style="border: 0px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12px; margin: 0px 0px 1.625em; outline: 0px; padding: 0px; vertical-align: baseline; color: #373737; line-height: 19.5px;">Nulla dolore qui, synth flexitarian cornhole fingerstache adipisicing brunch typewriter fugiat biodiesel master cleanse. Pickled hoodie Bushwick next level, polaroid readymade tousled Wes Anderson. Aliqua cray reprehenderit next level Pinterest four loko. Single-origin coffee polaroid flexitarian bicycle rights ennui velit. Next level roof party occaecat sed, cred qui Brooklyn put a bird on it biodiesel. Sint Neutra mollit, photo booth mustache officia 90\'s chambray Brooklyn direct trade. Et bespoke exercitation, cliche semiotics shabby chic chillwave nulla Marfa put a bird on it dolor.</p>', 'images.jpg', '2013-12-15 23:24:25', NULL, '2014-02-10 00:33:26'),
	(18, 4, 'Qwerty', 'nuasyufas fausfyasasfas', NULL, '2013-12-15 23:24:39', NULL, '2013-12-15 23:24:39'),
	(19, 3, 'asdasd', 'This is the sports cat\r\n', NULL, '2013-12-15 23:27:49', NULL, '2013-12-15 23:27:49'),
	(20, 2, 'Testing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL, NULL, NULL),
	(21, 1, 'Lorem - multiple tags', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'cat.jpg', '2013-12-17 20:22:50', NULL, '2014-02-10 00:59:14'),
	(22, 1, 'This is the world test', '<p>The domestic dog (Canis lupus familiaris)[2][3] is a subspecies of the gray wolf (Canis lupus), a member of the Canidae family of the mammalian order Carnivora. The term "domestic dog" is generally used for both domesticated and feral varieties. The dog was the first domesticated animal[4] and has been the most widely kept working, hunting, and pet animal in human history. The word "dog" can also refer to the male of a canine species,[5] as opposed to the word "bitch" which refers to the female of the species. MtDNA evidence shows an evolutionary split between the modern dog\'s lineage and the modern wolf\'s lineage around 100,000 years ago but, as of 2013, the oldest fossil specimens genetically linked to the modern dog\'s lineage date to approximately 33,000&ndash;36,000 years ago.[4][6] Dogs\' value to early human hunter-gatherers led to them quickly becoming ubiquitous across world cultures. Dogs perform many roles for people, such as hunting, herding, pulling loads, protection, assisting police and military, companionship, and, more recently, aiding handicapped individuals. This impact on human society has given them the nickname "man\'s best friend" in the Western world. In some cultures, however, dogs are also a source of meat.[7][8] In 2001, there were estimated to be 400 million dogs in the</p>', NULL, '2013-12-17 22:42:02', NULL, '2014-01-20 21:37:04'),
	(23, 2, 'Politics in New Zealand', '<p>Is it possible to get a mayor who doesn\'t concede to power and greed, has two year affairs with his PA and takes taxpayer\'s money to book hotels and room service whilst failing to declare any of it?</p>', 'images.jpg', '2013-12-17 22:49:59', NULL, '2014-02-10 01:01:52'),
	(24, 4, 'Sun, sun and more sun!', 'New Zealand seems to have been blessed this year with above average temperatures predicted for this summer! wooooooo', NULL, '2013-12-17 22:53:43', NULL, '2013-12-17 22:53:43'),
	(25, 1, 'safasfasfasfasfasfasfasffafasfasfasfasasfasfasfasf', 'sfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfassfasfasfasfas', NULL, '2014-01-19 21:31:49', NULL, '2014-01-19 21:31:49'),
	(26, 8, 'Global test', 'Testing the global form', NULL, '2014-01-20 21:03:12', NULL, '2014-01-20 21:03:12'),
	(27, 5, 'Eminem comes to NZ', 'Its a true story. 15th Feb.', NULL, '2014-01-21 00:11:05', NULL, '2014-01-21 00:11:05'),
	(28, 4, 'Need more dummy entries', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', NULL, '2014-01-21 21:59:40', NULL, '2014-01-21 21:59:40'),
	(29, 5, 'Testing 4', '\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, '2014-01-21 21:59:57', NULL, '2014-01-21 21:59:57'),
	(30, 5, 'gasgasgas', 'asfasfasfas', NULL, '2014-01-21 22:00:08', NULL, '2014-01-21 22:00:08'),
	(31, 6, 'ml.ilnl', 'inilnilansfli.as bhf asfunashu fhluashfuhasuhf oashfl kasfh ihlfm ashfasf', NULL, '2014-01-21 22:00:21', NULL, '2014-01-21 22:00:21'),
	(32, 7, 'asfdasfasf', 'asfasfasfasfasdasdasdasd', NULL, '2014-01-21 22:00:27', NULL, '2014-01-21 22:00:27'),
	(33, 7, 'uerrutrurtu', 'rturturturturturturturt', NULL, '2014-01-21 22:00:43', NULL, '2014-01-21 22:00:43'),
	(34, 7, 'jhkhjkhjkhj', 'khjkhjkhjkhjkhjkhjkhjk', NULL, '2014-01-21 22:00:55', NULL, '2014-01-21 22:00:55'),
	(35, 5, 'George FM needs to play more house music', '<p>Etiam ut dapibus felis, sed elementum nibh. Ut semper purus vel sem pulvinar scelerisque. Ut suscipit pellentesque tincidunt. Ut facilisis volutpat porttitor. Aenean in egestas est. Curabitur tempus ut mauris vehicula blandit. Quisque vel mauris ac lacus sodales tristique eget ac urna. Nam semper elementum eros, eget fringilla purus dapibus sodales. Maecenas laoreet posuere dolor non euismod. Sed ipsum nulla, iaculis id diam ac, blandit volutpat turpis. Proin quis mi vel urna dignissim aliquam nec eu ipsum. Aenean ac nulla ac nisl dapibus tempus eu sed nulla. Nam ipsum metus, dapibus eu malesuada fermentum, vestibulum sed risus. Fusce luctus eros id justo tempor, ac elementum lorem blandit.</p>\r\n<p>Morbi sit amet varius ante, vitae elementum felis. Vestibulum aliquam leo at massa ultricies volutpat. Pellentesque libero sem, molestie et velit ut, molestie congue nunc. Nunc euismod magna vel turpis sagittis consequat. Donec sit amet justo non orci porta convallis fringilla nec lectus. Mauris eget tempor erat. Fusce ultrices pulvinar enim. Integer metus felis, vehicula sed scelerisque vitae, aliquam vitae urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed feugiat mollis libero et placerat. Curabitur cursus, neque in pharetra elementum, turpis lectus consectetur dui, sit amet posuere metus libero sit amet leo. Donec commodo feugiat eros non tincidunt. Curabitur felis nibh, dignissim id elit nec, iaculis ornare nisi. Maecenas adipiscing turpis eget mauris imperdiet dictum. Quisque fringilla, ligula ut fermentum cursus, augue mi bibendum lorem, et pulvinar nibh tortor quis lectus. Mauris augue metus, gravida sit amet metus et, aliquet tincidunt magna.</p>\r\n<p>Nunc elementum felis in odio iaculis, eleifend scelerisque lorem egestas. Quisque et leo a eros pretium ultrices a ut lorem. Integer lobortis orci mauris. In nec mi sapien. Pellentesque lobortis mi ut massa ultricies ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent accumsan lacus sed sapien tempor, sit amet eleifend sapien fringilla. Maecenas congue faucibus massa at blandit. Sed ultricies fermentum euismod. Nulla facilisi. Curabitur iaculis turpis neque, quis vestibulum erat dictum eget. Nulla facilisis, arcu nec placerat viverra, diam justo cursus erat, a luctus nibh ipsum nec mi. Integer neque tortor, fringilla sit amet egestas quis, adipiscing nec odio. In hac habitasse platea dictumst. Cras auctor bibendum metus.</p>', 'bananas.jpg', '2014-02-03 21:58:44', NULL, '2014-02-04 22:54:05'),
	(37, 7, 'This is a banana test test test', '<p>BananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananavBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBananananananaBanananananana</p>', 'bananas.jpg', '2014-02-03 23:01:44', NULL, '2014-02-03 23:41:22'),
	(38, 1, 'This is testing the tags', '<p>TAGS TAGS TAGS TAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGSTAGS TAGS TAGS</p>', NULL, '2014-02-10 01:08:20', NULL, '2014-02-10 01:09:32'),
	(39, 8, 'This is the globe', 'This is a pretty cool picture of the globe. I used to want to become an astronaut until I found out my brain doesn\'t comprehend genius level mathematics.', 'earth.jpg', '2014-02-16 23:01:17', NULL, '2014-02-16 23:01:17'),
	(40, 3, '\'The Greatest Weekend\'', 'This previous weekend was the official launch of the first ever nines tournament in the world. Luckily for us, it was showcased in Auckland\'s very own Eden Park. Unfortunately the Warriors got knocked out in the semi-finals (being our home team) after being favoured winners of the competition. Shaun Johnson received MVP despite claiming the nines title, and the Warriors look strong carrying momentum into this years NRL starting in a few months time.', 'Nines.jpg', '2014-02-17 00:29:10', NULL, '2014-02-17 00:29:10'),
	(42, 1, 'Money', 'money', 'money 300x0300.jpg', '2014-02-18 00:43:29', NULL, '2014-02-18 00:43:29'),
	(43, 4, 'Living', 'It seems to be a couch', 'couch.jpg', '2014-02-18 00:46:29', NULL, '2014-02-18 00:46:29'),
	(44, 6, 'This is a computer chip', 'This is what technology looks like', 'comp.jpg', '2014-02-18 00:48:18', NULL, '2014-02-18 00:48:18');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping structure for table myblog_db.posts_tags
DROP TABLE IF EXISTS `posts_tags`;
CREATE TABLE IF NOT EXISTS `posts_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT '0',
  `tag_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id_tag_id` (`post_id`,`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.posts_tags: ~29 rows (approximately)
DELETE FROM `posts_tags`;
/*!40000 ALTER TABLE `posts_tags` DISABLE KEYS */;
INSERT INTO `posts_tags` (`id`, `post_id`, `tag_id`) VALUES
	(2, 1, 3),
	(3, 1, 8),
	(5, 3, 7),
	(9, 17, 3),
	(10, 17, 8),
	(14, 21, 1),
	(15, 21, 4),
	(7, 22, 1),
	(8, 22, 2),
	(6, 23, 2),
	(1, 24, 1),
	(19, 38, 1),
	(21, 38, 3),
	(18, 38, 6),
	(16, 38, 7),
	(20, 38, 10),
	(22, 39, 5),
	(24, 40, 1),
	(27, 40, 3),
	(25, 40, 4),
	(28, 40, 5),
	(23, 40, 8),
	(26, 40, 10),
	(30, 42, 5),
	(32, 43, 1),
	(34, 43, 3),
	(31, 43, 8),
	(33, 43, 10),
	(37, 44, 5),
	(35, 44, 6),
	(36, 44, 7);
/*!40000 ALTER TABLE `posts_tags` ENABLE KEYS */;


-- Dumping structure for table myblog_db.sub_topics
DROP TABLE IF EXISTS `sub_topics`;
CREATE TABLE IF NOT EXISTS `sub_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_topic_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_topics_main_topic_id` (`main_topic_id`),
  CONSTRAINT `sub_topics_main_topic_id` FOREIGN KEY (`main_topic_id`) REFERENCES `main_topics` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.sub_topics: ~0 rows (approximately)
DELETE FROM `sub_topics`;
/*!40000 ALTER TABLE `sub_topics` DISABLE KEYS */;
INSERT INTO `sub_topics` (`id`, `main_topic_id`, `title`, `body`) VALUES
	(1, 2, 'Adding A Client', 'Adding A Client'),
	(2, 2, 'Editing a client', 'Editing a client'),
	(3, 2, 'Deleting a client', 'sadasdasd'),
	(5, 2, 'How to search for a client', 'test'),
	(6, 3, 'Navigating around the calendar', 'sad'),
	(7, 5, 'How to create mail', 'First press create'),
	(8, 6, 'How do i delete an existing product?', 'sad'),
	(9, 7, 'Changing consultants', 'testing'),
	(10, 8, 'Creating a bill', 'sad');
/*!40000 ALTER TABLE `sub_topics` ENABLE KEYS */;


-- Dumping structure for table myblog_db.tags
DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.tags: ~8 rows (approximately)
DELETE FROM `tags`;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `title`, `created`) VALUES
	(1, 'living', NULL),
	(2, 'politics', NULL),
	(3, 'travel', NULL),
	(4, 'national', NULL),
	(5, 'world', NULL),
	(6, 'business', NULL),
	(7, 'technology', NULL),
	(8, 'entertainment', NULL),
	(9, 'opinion', NULL),
	(10, 'sport', NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;


-- Dumping structure for table myblog_db.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table myblog_db.users: ~4 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
	(1, 'Jack', '31d39fce104fc3d1394b090041284e92541a71b4', 'admin', '2014-02-23 22:37:47', '2014-02-23 22:37:47'),
	(2, 'jack', '155d8318e098c214004a55f5d69d4e9f5833e826', 'admin', '2014-02-23 22:40:19', '2014-02-23 22:40:19'),
	(3, 'admin', '18eae876e8298c27266b81c7761a52a6d61c8327', 'admin', '2014-02-23 22:41:04', '2014-02-23 22:41:04'),
	(4, 'test', 'e7cd13675ae509af329249e6b5adf51e83b5015c', 'author', '2014-02-23 23:07:10', '2014-02-23 23:07:10'),
	(5, 'qwerty', 'e733180d36877e3372f97d3905de083b2ca1258a', 'author', '2014-02-24 00:54:13', '2014-02-24 00:54:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
