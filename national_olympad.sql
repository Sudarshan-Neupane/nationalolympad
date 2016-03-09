-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2014 at 12:49 PM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `national_olympad`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_protfilio`
--

CREATE TABLE IF NOT EXISTS `category_protfilio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(300) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category_protfilio`
--

INSERT INTO `category_protfilio` (`id`, `category`, `datetime`) VALUES
(1, 'web', '2012-05-06 16:27:55'),
(2, 'marketing', '2012-05-06 16:27:55'),
(3, 'consulting', '2012-05-06 16:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `menu_services`
--

CREATE TABLE IF NOT EXISTS `menu_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `category` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu_services`
--

INSERT INTO `menu_services` (`id`, `title`, `description`, `category`) VALUES
(1, 'Abour Recurtmant', 'This is content of Abour Recurtmant This is content of Abour Recurtmant This is content of Abour \r\nRecurtmant This is content of Abour Recurtmant This is content of Abour Recurtmant ', 'Recurrtment'),
(2, 'About CMS', ' About CMS This is about csmAbout CMS This is about csmAbout CMS This is about csmAbout CMS This is about csmAbout CMS This is about csmAbout CMS This is about csmAbout CMS This is about csmAbout CMS This is about csm', 'cms'),
(3, 'About Mobile', 'This is about mobile About Mobile This is about mobile About MobileThis is about mobile About MobileThis is about mobile About MobileThis is about mobile About MobileThis is about mobile About Mobile', 'Mobile'),
(4, 'About Serch Search ', 'The hse kljalad kajd The hse kljalad kajd The hse kljalad kajd The hse kljalad kajd The hse kljalad kajd The hse kljalad kajd ', 'Search');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `itable_id` int(11) NOT NULL AUTO_INCREMENT,
  `vtitle` text NOT NULL,
  `vposition` varchar(100) NOT NULL,
  `ltdescription` text NOT NULL,
  `tsdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`itable_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`itable_id`, `vtitle`, `vposition`, `ltdescription`, `tsdate`) VALUES
(1, 'We provide good services', '', 'f you are pasting the description from a WORD document, you will be  asked to clean up the text. Click ALLOW ACCESS on the first box that  pops up (if applicable) and if you get a message from the webpage  stating that The text you want to paste seems to be copied from Word. Do  you want to clean it before pasting ? CLICK OK. On the POPUP box, click  Ignore Font Face Definitions AND Remove Style Definitions and past your  text in. Then click OK. **BE SURE TO CHECK THE PARAGRAPH SPACING in the  editor.', '2012-05-08 18:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `itable_id` int(11) NOT NULL AUTO_INCREMENT,
  `vtitle` varchar(250) NOT NULL,
  `vposition` varchar(200) NOT NULL,
  `ltdescription` text NOT NULL,
  `tsdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`itable_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`itable_id`, `vtitle`, `vposition`, `ltdescription`, `tsdate`) VALUES
(3, 'sdfsdf', '', 'f you are pasting the description from a WORD document, you will be  asked to clean up the text. Click ALLOW ACCESS on the first box that  pops up (if applicable) and if you get a message from the webpage  stating that The text you want to paste seems to be copied from Word. Do  you want to clean it before pasting ? CLICK OK. On the POPUP box, click  Ignore Font Face Definitions AND Remove Style Definitions and past your  text in. Then click OK. **BE SURE TO CHECK THE PARAGRAPH SPACING in the', '2012-05-06 18:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `iadmin_id` int(17) NOT NULL AUTO_INCREMENT,
  `vfull_name` varchar(255) NOT NULL,
  `vemail` varchar(255) NOT NULL,
  `vpassword` varchar(255) NOT NULL,
  PRIMARY KEY (`iadmin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`iadmin_id`, `vfull_name`, `vemail`, `vpassword`) VALUES
(13, 'a', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_images`
--

CREATE TABLE IF NOT EXISTS `tbl_banner_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `ordering` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `tdatetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_banner_images`
--

INSERT INTO `tbl_banner_images` (`id`, `title`, `img`, `ordering`, `status`, `tdatetime`) VALUES
(13, '', '532891_587330731277796_1159698878_n.jpg', 0, 0, '0000-00-00 00:00:00'),
(15, '', '_DSC7597.jpg', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_testimonial`
--

CREATE TABLE IF NOT EXISTS `tbl_candidate_testimonial` (
  `itable_id` int(17) NOT NULL AUTO_INCREMENT,
  `vtitle` varchar(255) NOT NULL,
  `vposition` varchar(255) NOT NULL,
  `ltdescription` longtext NOT NULL,
  `tsdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`itable_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_candidate_testimonial`
--

INSERT INTO `tbl_candidate_testimonial` (`itable_id`, `vtitle`, `vposition`, `ltdescription`, `tsdate`) VALUES
(9, 'Alister', '', '<p align=\\"left\\">&ldquo;Jade is a highly dependable and outgoing professional who strives for excellence in all that she does. Her verbal and written communication skills are impeccable. Furthermore, she is a people person who has a knack for developing a rapport with others and bringing the best out of her team. Jades strong organisational skills and her knowledge of the industry and practices is evidenced in all her work.&rdquo; </p>', '2012-04-01 12:27:51'),
(14, 'sdfsd', '', 'fsdfsdf', '2012-05-06 12:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE IF NOT EXISTS `tbl_career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`id`, `job_title`, `description`) VALUES
(5, 'Php Programmer', '<p>Php programmer</p>\r\n\r\n<p>Please send resume along with cover letter to career@rbrs.com. Only Short-listed candidates will be contacted.</p>\r\n'),
(22, 'Manager', '<p><strong>Manager Job Duties:</strong></p>\r\n\r\n<ul>\r\n <li>Maintains staff by recruiting, selecting, orienting, and training employees; maintaining a safe, secure, and legal work environment; developing personal growth opportunities.</li>\r\n <li>Accomplishes staff results by communicating job expectations; planning, monitoring, and appraising job results; coaching, counseling, and disciplining employees; developing, coordinating, and enforcing systems, policies, procedures, and productivity standards.</li>\r\n <li>Establishes strategic goals by gathering pertinent business, financial, service, and operations information; identifying and evaluating trends and options; choosing a course of action; defining objectives; evaluating outcomes.</li>\r\n <li>Accomplishes financial objectives by forecasting requirements; preparing an annual budget; scheduling expenditures; analyzing variances; initiating corrective actions.</li>\r\n <li>Maintains quality service by enforcing quality and customer service standards; analyzing and resolving quality and customer service problems; identifying trends; recommending system improvements.</li>\r\n <li>Maintains professional and technical knowledge by attending educational workshops; reviewing professional publications; establishing personal networks; benchmarking state-of-the-art practices; participating in professional societies.</li>\r\n <li>Contributes to team effort by accomplishing related results as needed.</li>\r\n</ul>\r\n\r\n<p><strong>Skills/Qualifications:</strong> Performance Management, Project Management, Coaching, Supervision, Quality Management, Results Driven, Developing Budgets, Developing Standards, Foster Teamwork, Handles Pressure, Giving Feedback</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `categories`, `image`, `Description`) VALUES
(40, ' CONTACT US', 'Final_Logo-WEB4.jpg', '<div  750px; float: right; margin: 5px;">\n<h4><u><strong>Mr. Rajendra Basyal</strong></u></h4>\n\n<h4>Director of Bishow Dev English Boarding School</h4>\n\n<p>Malunga VDC Syangja</p>\n\n<p>phone no :9847049664</p>\n</div>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `name`, `image`, `description`) VALUES
(55, 'Mr. Rajendra Basyal', 'facebook-default3.jpg', '<h4>Director of Bishow Dev English Boarding School</h4>\n\n<p>Malunga VDC Syangja</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companylogo_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_companylogo_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_companylogo_banner`
--

INSERT INTO `tbl_companylogo_banner` (`id`, `title`, `img`) VALUES
(6, '', 'slide1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE IF NOT EXISTS `tbl_events` (
  `eventId` int(11) NOT NULL AUTO_INCREMENT,
  `eventTitle` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `eventDetail` longtext COLLATE latin1_general_ci NOT NULL,
  `news_date` date NOT NULL,
  PRIMARY KEY (`eventId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`eventId`, `eventTitle`, `eventDetail`, `news_date`) VALUES
(38, 'Start a Movement', '<p>\r\n	<span class="userContent">we are going to start a. movement about .unemployment.social discrimination.reform in education system equal distribution.of opportunities of all peopl.so we.urequest.u to join .us.for making civilized society</span></p>\r\n', '2012-02-25'),
(37, 'Knowledge sharing Workshop', '<p>\r\n	Planning Workshop of Project on Way out of Informality: Facilitating Formalization of Informal Economy in Nepal.</p>\r\n', '2012-12-27'),
(41, 'Friday moment', 'friday party now start', '0000-00-00'),
(42, 'sunday ', 'sunday program sunday program start', '0000-00-00'),
(43, 'Friday moment', 'friday party now start', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculties`
--

CREATE TABLE IF NOT EXISTS `tbl_faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_faculties`
--

INSERT INTO `tbl_faculties` (`id`, `program`, `image`, `description`) VALUES
(3, 'Management', 'programs.jpg', '<p>The BBS program at Trijyoti prepares you for more than a career, business and management. It trains you for life. It develops your ability to think critically, to analyze data, to make recommendations, and to communicate effectively. Besides knowledge, it creates an environment to explore and enhance your ability and skills, and builds confidence to create good citizen. Affiliated to Tribhuvan &nbsp;University, the BBS program at Trijyoti is a four-year, 126 credit-hour, intensive program that teaches, motivates, challenges and stretches you to explore and find solutions to today&rsquo;s most significant business and social issues in the global environment.</p>\r\n'),
(6, 'Science', 'science.jpg', '<p><strong>Science</strong> &nbsp;is a systematic enterprise that builds and organizes knowledge in the form of testable explanations and predictions about the universe. In an older and closely related meaning, &quot;science&quot; also refers to a body of knowledge itself, of the type that can be rationally explained and reliably applied. Since classical antiquity, science as a type of knowledge has been closely linked to philosophy. In the early modern period the words &quot;science&quot; and &quot;philosophy&quot; were sometimes used interchangeably. By the 17th century, natural philosophy (which is today called &quot;natural science&quot;) was considered a separate branch of philosophy. However, &quot;science&quot; continued to be used in a broad sense denoting reliable knowledge about a topic, in the same way it is still used in modern terms such as library science or political science.</p>\r\n'),
(7, 'IT', '', '<p>under Construction</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontpage`
--

CREATE TABLE IF NOT EXISTS `tbl_frontpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `pagetitle` text NOT NULL,
  `keyword` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_frontpage`
--

INSERT INTO `tbl_frontpage` (`id`, `category`, `title`, `pagetitle`, `keyword`, `description`, `image`) VALUES
(1, 'call-to-action', 'welcome', 'Welcome to  Peace and Humanity', '', '<p>&nbsp;</p>\n\n<p>The National Astronomy Olympiad (NAO) Programme is jointly designed by Nepal Astronomical Society (NASO) and ESPRO Foundation to encourage Nepalese students with good foundations in Physics and Mathematics and an interest in Astronomy to pursue their further studies in this field.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Nepal Astronomical Society (NASO):</strong></p>\n\n<p>Nepal Astronomical Society (NASO) which was formed in 2007 is the leading astronomical society in Nepal. Since then it has been continuously working for the astronomy and space science outreach, education and research in Nepal. NASO&nbsp;experts on different areas especially outreach have been extensively taken astronomy to many parts of Nepal. With the celebrations of International HelioPhysical Year 2007 - 2008 and International Year of Astronomy 2009 with many exciting programmes in Nepal, NASO is now moving ahead with&nbsp;greater responsibilities and the human resources than before for the enhancement of astronomical community in Nepal. NASO is committed for the ProAm collaboration for enriching the astronomical community in Nepal and has been collaborating with Astrophysics and Cosmology Research Group&nbsp;along with other stake holders promoting outreach, education and research works in the fields of science and technology in Nepal.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>ESPRO Foundation:</strong></p>\n\n<p>ESPRO Foundation was established in 2009 by Mr. Probodh Rijal, Founder Principal of Eureka High School, Nepaltar, Kathmandu, Nepal. It promotes different educational activities at school level especially in science. The founder is also&nbsp;the organizer&nbsp;of the Young Scientist Fair, an event where schools students from different schools in Nepal exhibits their talents and get awarded for their best practices. &nbsp;ESPRO&nbsp;is actively working to establish a science city with interactive science museum and a planetarium for the students.</p>\n', '0000-00-00 00:00:00'),
(2, 'collect-emails', 'Collect Emails', 'Awareness Education', '', '<p>\r\n	Nepal is passing through very critical times in its history. While most of today&rsquo;s highlighted issues tend to be political, policy makers can ignore various economic challenges facing the country only at the cost of nation&rsquo;s peril.&nbsp; Inability to channelize this vital resource in productive undertakings not only retards the country&rsquo;s economic progress but also leads to various social problems.Employment opportunities become vital for economic and social stability.</p>\r\n', '0000-00-00 00:00:00'),
(3, 'create-event', 'Create Events', 'Unemployment Rate', '', '<p>\r\n	In Nepal, people from low-opportunity areas have always moved to areas where jobs are aplenty. Also, a dearth of jobs means quitting one to find another has not been a luxury available to Nepali workers. So, frictional unemployment isn&rsquo;t really a big issue for us. Also, the Nepali economy has been growing steadily at around 3 percent a year. We are not in a recession, and thus, we should not worry too much about cyclical unemployment.</p>\r\n', '0000-00-00 00:00:00'),
(4, 'aboutus', 'About Us', 'About Us', 'About Us', '<p>We as a provider of professional recruitment service clearly understand the points of view of both the employer and the employee. We maintain an up to date comprehensive computerized database as well as advertising in popular National daily newspaper and the network of a local sub-agent (who brings the people from their home town). With a large database of quality professional and experience of over a decade in the manpower recruitment and supply Industry gives us the cutting edge in and previous clients has initiated us to start rendering our services to its best level. Our constant effort into the needs of our clients have led us to attract&nbsp; specialized&nbsp; manpower in operation&nbsp; and maintenance, Engineering, Project Management, Health, Janitorial, Industrial manpower&nbsp; from highly skilled to unskilled level which we are confident&nbsp; would meet your requirement in every respect. Interviews are conducted by professional of difference disciples. Trade test, if required, are carried out at well recognized technicial institution</p>\r\n', '0000-00-00 00:00:00'),
(5, 'Mission and Vision ', 'Mission and Vision', 'Mission and Vision ', 'Mission and Vision ', '<p>We are committed to assure lifelong learning experiences in a safe and challenging learning environment that will assist our students to achieve their greatest potential to adopt and adjust to a diverse and ever changing society. We are dedicated to serve our students with the understanding that diversity of gender, physical or mental ability, culture, and background is a strength to be respected. We focus to provide individualized education that addresses students&#39; unique learning styles, cultivates independent thought, and promotes building of character, enabling them to contribute to their communities in meaningful and positive ways. To create socially responsible, independent individuals who have the knowledge and attitude to be successful in an ever-changing world.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'activities1.jpg'),
(6, 'Programs', 'Programs', 'Programs', 'Programs', 'Programs', 'Programs'),
(7, 'Facilities And Services', 'Facilities And Services', 'Facilities And Services', 'Facilities And Services', 'Facilities And Services', 'Admission'),
(8, 'Contact Us', 'Contact Us', 'Contact UsContact UsContact Us', 'Contact UsContact Us', '<p>Phone No.: 01-4821886, 4821064</p>\r\n\r\n<p>Addres: Faika, Kapan, Kathmandu, Nepal</p>\r\n\r\n<p>E-mail: <a href="../../client/home#" target="_blank"> info@trijyoti.edu.np </a></p>\r\n\r\n<p>URL: <a href="../../client/www.trijyoti.edu.np" target="_blank"> www.trijyoti.edu.np </a></p>\r\n\r\n<p>SMS: PRIMA to 4555</p>\r\n', 'Contact Us'),
(9, 'Admission', 'Admission', '', '', '<p>We are committed to assure lifelong learning experiences in a safe and challenging learning environment that will assist our students to achieve their greatest potential to adopt and adjust to a diverse and ever changing society. We are dedicated to serve our students with the understanding that diversity of gender, physical or mental ability, culture, and background is a strength to be respected. We focus to provide individualized education that addresses students&#39; unique learning styles, cultivates independent thought, and promotes building of character, enabling them to contribute to their communities in meaningful and positive ways. To create socially responsible, independent individuals</p>\r\n\r\n<ol>\r\n <li><strong>who have the knowledge and attitude to be successful in an ever-changing world.</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n <li>\r\n <h1>who have the knowledge and attitude to be successful in an ever-changing world&nbsp; !</h1>\r\n </li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `ordering` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tdatetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `title`, `image`, `ordering`, `status`, `tdatetime`) VALUES
(27, '', 'categorie-gallery1.jpg', 0, 0, '0000-00-00 00:00:00'),
(28, '', 'categorie-gallery2.jpg', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headerlinks`
--

CREATE TABLE IF NOT EXISTS `tbl_headerlinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(400) NOT NULL,
  `title` varchar(400) NOT NULL,
  `displayname` varchar(2000) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_headerlinks`
--

INSERT INTO `tbl_headerlinks` (`id`, `category`, `title`, `displayname`, `description`) VALUES
(27, '', 'Contact Us', '', '<p>contact Us</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homepage`
--

CREATE TABLE IF NOT EXISTS `tbl_homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_homepage`
--

INSERT INTO `tbl_homepage` (`id`, `title`, `image`, `description`) VALUES
(1, 'Co-Curricular Activities ', 'schoolActivities.jpg', '<p>&nbsp;Arts: theater, music, dance, painting, photography, creative writing and other creative endeavors. Religious activity: community outreach, helping the elderly, event planning, community suppers, sponsored music and athletic programs, teaching or organizing for summer camps and retreats, religious work, and any other activity. Clubs: Chess club, mathletes, mock trial, debate, role playing club, language clubs, film club, skateboarding club, diversity/minority groups and so on. Community activity: Community Theater, event organizing, festival staff, and many other activities that are organized through the community. Governance: Student government, prom committee, community youth boards and so on. Hobbies: Be creative here. Also, school is interested in your passion whether it is rocketry, model railroads, collecting, blogging or quilting. These interests show that you have interests outside of the classroom. Media: local television, school radio or television, yearbook staff, school newspaper, literary journal, blogging and online journaling, local newspaper, and any other work that leads to a television show, movie or publication (online or print). Music: Chorus, band (marching, jazz, symphonic, concert), orchestra, ensembles and solo. These musical groups could be through school, the community or your personal group or solo efforts. Sports: Football, volleyball, basketball, hockey, cricket, gymnastics, dance, swimming, soccer, cheerleading and so on. Volunteer Work and Community Service: Key Club, Habitat for Humanity, tutoring and mentoring, community fund-raising, Rotary, Temple &amp; Monasteries outreach, hospital works, animal rescue, nursing home work, poll worker, volunteer fire department, creating hiking trails, Adopt-a-Highway, and any other work that helps the world and is not for pay.</p>\r\n'),
(2, 'Missions', 'pic21.jpg', '<p>&nbsp;</p>\n\n<p><span  rgb(34, 34, 34); font-family: Arial, sans-serif; line-height: normal; text-align: justify;">School students will be trained to be abundantly versed with astronomy for logically convincing and communicating with any member of local or international society on the importance and indispensability of cosmic entities dwelling in our universe.</span></p>\n\n<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\n'),
(3, 'Vision', 'BoysObserving_Sun1.jpg', '<p><span  rgb(34, 34, 34); font-family: Arial, sans-serif; line-height: normal; text-align: justify;">School students will be empowered to recognize and comprehend the celestial objects inhabiting our universe and their association with the evolution and preservation of our lives on earth thereby dispelling superstitious beliefs of their influences prevailing in our society.</span></p>\n'),
(4, 'objectives', 'pic1.jpg', '<p><span id="yui_3_13_0_ym1_1_1393059960998_3367" ><i id="yui_3_13_0_ym1_1_1393059960998_3366">School Students will be selected, prepared, facilitated and qualified for their successful participation in annual international astronomy Olympiad.</i></span><br />\n&nbsp;</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE IF NOT EXISTS `tbl_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'sudarshan.jpg',
  `Price` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `featured` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`id`, `name`, `image`, `Price`, `description`, `item_type_id`, `featured`) VALUES
(21, 'Under Construction', 'pendrive2.jpg', '250', '', 15, 'NO'),
(22, 'aaa', 'lenova1.jpg', '', '', 15, 'YES'),
(23, 'Keyboard', 'keyboard.jpg', '520', '<p>Nepali keyboard</p>\r\n', 17, 'NO'),
(20, 'cooling Fans', 'adaptor1.jpg', '352', '', 15, 'YES'),
(37, 'Test No Image', 'sudarshan.jpg', 'Image', '<p>No Image</p>\r\n', 30, 'YES'),
(38, 'Laptop ', 'Tulips1.jpg', 'Laptop ', '<p>Laptop</p>\r\n', 30, 'NO'),
(36, 'Samsung ', '543459_357638367645321_835477899_n1.jpg', '12052', '<p>Samsung Mobile&nbsp;</p>\r\n', 40, 'YES'),
(24, 'aaa ', '004.jpg', '2500', '<p>description</p>\r\n', 20, 'NO'),
(35, 'MMs software', 'Penguins.jpg', 'categories of mms', '<p>description of the mms</p>\r\n', 38, 'NO'),
(27, 'Samsung', '26611_113465998676504_1761775_n1.jpg', '2500', '', 21, 'YES'),
(28, 'Galaxy', '298655_357637764312048_2121900272_n.jpg', '', '', 21, 'YES'),
(29, 'samsung', '543459_357638367645321_835477899_n.jpg', '2555', '', 21, 'YES'),
(33, 'web development', 'images.jpg', 'Rs.3500', '<p>Description of our web hosting</p>\r\n', 31, 'NO'),
(34, 'Out source', 'galaxy.jpg', '5200', '<p>Description of the outsourcing</p>\r\n', 31, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_type`
--

CREATE TABLE IF NOT EXISTS `tbl_item_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `postname` varchar(100) NOT NULL,
  `postdetail` varchar(20000) NOT NULL,
  `c_website` varchar(255) NOT NULL,
  `postimage` varchar(1000) NOT NULL,
  `postdate` date NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`postid`, `postname`, `postdetail`, `c_website`, `postimage`, `postdate`) VALUES
(7, 'Revolution For Peace', '&lt;p&gt;\r\n	PEACE is the ONLY doctor designed program proven&amp;nbsp; help you reclaim a young, lean and effortlessly energetic body in as little as twelve minutes&amp;mdash;guaranteed! PACE is a growing revolution. It&amp;rsquo;s already practiced by thousands of people in dozens of countries around the world. PACE overturns years of failed ideas and exercise advice. PACE upends current exercise trends by revealing their flaws and offering a more effective, more natural way of moving our bodies.&lt;/p&gt;\r\n', '', 'banner_14-07-2009-14-40-12_918365.jpg', '2011-02-03'),
(10, 'aaaaaa', '&lt;p&gt;\r\n	aaa&lt;/p&gt;\r\n', 'http://www.primaits.com', 'aaaaaaaaaa', '0000-00-00'),
(14, 'sudarshan neuapane ', '&lt;p&gt;\r\n	thisc_websitec_websitec_websitec_websitec_website&lt;/p&gt;\r\n&lt;p&gt;\r\n	c_websitec_websitec_websitec_websitec_website&lt;/p&gt;\r\n&lt;p&gt;\r\n	thisc_websitec_websitec_websitec_websitec_website&lt;/p&gt;\r\n&lt;p&gt;\r\n	c_websitec_websitec_websitec_websitec_website&lt;/p&gt;\r\n&lt;p&gt;\r\n	thisc_websitec_websitec_websitec_websitec_website&lt;/p&gt;\r\n&lt;p&gt;\r\n	c_websitec_websitec_websitec_websitec_website&lt;/p&gt;\r\n', 'http://www.primaits.comgfsdfsd', 'banner_10-01-2013-0-38-03_346649.jpg', '1212-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_protfilio`
--

CREATE TABLE IF NOT EXISTS `tbl_protfilio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text,
  `ordering` int(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_protfilio`
--

INSERT INTO `tbl_protfilio` (`id`, `category`, `title`, `description`, `ordering`, `datetime`) VALUES
(1, 'Web', 'sdf', '  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf  sdfsdfsdfsdf ', 2, '2012-05-07 13:43:03'),
(9, 'CONSULTING', 'CONSULTING', 'If you are pasting the description from a WORD document, you will be  asked to clean up the text. Click ALLOW ACCESS on the first box that  pops up (if applicable) and if you get a message from the webpage  stating that The text you want to paste seems to be copied from Word. Do  you want to clean it before pasting ? CLICK OK. On the POPUP box, click  Ignore Font Face Definitions AND Remove Style Definitions and past your  text in. Then click OK. **BE SURE TO CHECK THE PARAGRAPH SPACINGSDFSDFSDFDSF in the  editor.', 0, '2012-05-07 14:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `name`, `date_time`, `description`) VALUES
(65, 'VYC as Outreach Partner!', '2014-01-01', '<p>National Astronomy Olympiad 2014 (NAO2014)&nbsp;Organizing Team Has Now Partnered With View Your Choice (VYC). VYC Will Be Working as Our Official Outreach Partner To Acomplish This First Ever Astronomy Olympiad in Nepal.</p>\n'),
(66, 'Application is Open Now!', '2014-01-01', '<p>Nepal Astronomical Society (NASO) and ESPRO Foundation has teamed up to organize the first National Astronomy Olympiad in Nepal. The registration for National Astronomy Olympiad 2014 is open today! <a href="https://docs.google.com/forms/d/1Q39949ZYN4rc2GgqEYx3GXoxEz6O7y4NDINL5wSYDQA/viewform">Apply Now</a>!</p>\n'),
(69, 'Congratulations Kapil!', '2013-12-28', '<p>The organizing committee of National Astronomy Olympiad 2014 (NAO2014) Nepal has announced Mr. Kapil Rokaya as the winner of National Astronomy Olympiad 2014 Logo Competition now! &nbsp;For details: <a href="http://astronomy-nepal.blogspot.com/2013/12/the-winner-of-national-astronomy.html">Chick Here!</a></p>\n'),
(70, 'Apply Today!', '2014-01-01', '<p>NAO2014 has announced different application centers in Nepal. Interested students are enrougaed to visit one of the application centers to apply for the program.</p>\n'),
(71, 'fdf', 'fdfdfdf', '<p>fdf</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `isetting_id` int(17) NOT NULL AUTO_INCREMENT,
  `vcompany_name` varchar(255) NOT NULL,
  `vwebsite_url` varchar(255) NOT NULL,
  `vaddress1` varchar(255) NOT NULL,
  `vaddress2` varchar(255) NOT NULL,
  `vaddress3` varchar(255) NOT NULL,
  `vemail` varchar(255) NOT NULL,
  `vphone` varchar(255) NOT NULL,
  `vfax` varchar(255) NOT NULL,
  `vsmtp_host` varchar(255) NOT NULL,
  `vga_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vga_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vga_profileid` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`isetting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`isetting_id`, `vcompany_name`, `vwebsite_url`, `vaddress1`, `vaddress2`, `vaddress3`, `vemail`, `vphone`, `vfax`, `vsmtp_host`, `vga_username`, `vga_password`, `vga_profileid`) VALUES
(1, 'prima it solution', 'http://www.prima.com.np', 'Baneshwor Kathmandu', 'Baneswor', 'Kathmanud', 'info@prima.com', '01-4456897', '020 7397 1260', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `urls` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `name`, `urls`) VALUES
(13, 'first', 'http://www.youtube.com/watch?v=jn5fVRzpKYE'),
(14, 'second', 'http://www.youtube.com/watch?v=jn5fVRzpKYE'),
(15, 'third', 'http://www.youtube.com/watch?v=jn5fVRzpKYE'),
(12, 'our latest', 'http://www.youtube.com/watch?v=jn5fVRzpKYE'),
(16, 'fourth', 'http://www.youtube.com/watch?v=jn5fVRzpKYE'),
(17, 'five', 'http://www.youtube.com/watch?v=jn5fVRzpKYE'),
(18, 'kinjol', 'https://www.youtube.com/watch?v=dcQCKSkhyOw');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
