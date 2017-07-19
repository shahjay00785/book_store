-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2017 at 02:41 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_author`
--

CREATE TABLE `tbl_author` (
  `author_id` int(100) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_gender` varchar(100) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_contactnum` double NOT NULL,
  `author_website` varchar(255) NOT NULL,
  `author_desc` text NOT NULL,
  `author_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_author`
--

INSERT INTO `tbl_author` (`author_id`, `author_name`, `author_gender`, `author_email`, `author_contactnum`, `author_website`, `author_desc`, `author_status`) VALUES
(1, 'Nora Roberts ', 'male', 'NoraRobat@gmail.com', 7405407804, 'roma.com', ' Nora Roberts  Jane Austen 1775–1817  Lisa Kleypas  Jessica Bird  Judith McNaught  Diana Gabaldon  Susan Elizabeth Phillips  Julie Garwood  Sarah MacLean  Loretta Chase  Jude Deveraux  Johanna Lindsey  Julia Quinn  Jennifer Crusie  Danielle Steel  Nicholas Sparks  Debbie Macomber  Georgette Heyer 1902–1974  Jayne Ann Krentz  Tessa Dare  Kresley Cole  Charlotte Brontë 1816–1855  Eloisa James  Kathleen E. Woodiwiss 1939–2007  Maya Banks  Linda Howard  Mary Balogh  Stephenie Meyer  Beverly Jenkins  Nalini Singh  Margaret Mitchell 1900–1949  LaVyrle Spencer  Sherrilyn Kenyon  Stephanie Laurens  Mary Jo Putney  Christine Feehan  Daphne du Maurier 1907–1989  Jill Shalvis  Christina Dodd  James Patterson  Catherine Coulter  Laura Kinsale  Leo Tolstoy 1828–1910  Teresa Medeiros  E. L. James  Christina Lauren  Anne Stuart  Anne Rice  Francine Rivers  Robyn Carr  Robert Louis Stevenson 1850–1894', 'Yes'),
(2, 'Jane Austen  ', 'female', 'abc@gmail.com', 7405407804, 'abc,com', 'Jane Austen  Nora Roberts  Jane Austen 1775–1817  Lisa Kleypas  Jessica Bird  Judith McNaught  Diana Gabaldon  Susan Elizabeth Phillips  Julie Garwood  Sarah MacLean  Loretta Chase  Jude Deveraux  Johanna Lindsey  Julia Quinn  Jennifer Crusie  Danielle Steel  Nicholas Sparks  Debbie Macomber  Georgette Heyer 1902–1974  Jayne Ann Krentz  Tessa Dare  Kresley Cole  Charlotte Brontë 1816–1855  Eloisa James  Kathleen E. Woodiwiss 1939–2007  Maya Banks  Linda Howard  Mary Balogh  Stephenie Meyer  Beverly Jenkins  Nalini Singh  Margaret Mitchell 1900–1949  LaVyrle Spencer  Sherrilyn Kenyon  Stephanie Laurens  Mary Jo Putney  Christine Feehan  Daphne du Maurier 1907–1989  Jill Shalvis  Christina Dodd  James Patterson  Catherine Coulter  Laura Kinsale  Leo Tolstoy 1828–1910  Teresa Medeiros  E. L. James  Christina Lauren  Anne Stuart  Anne Rice  Francine Rivers  Robyn Carr  Robert Louis Stevenson 1850–1894', 'Yes'),
(3, 'Agatha Christie ', 'female', 'xyz@gmail.com', 7405407804, 'xyz.com', 'Agatha Christie  Agatha Christie 1890–1976  Arthur Conan Doyle 1859–1930  Ruth Rendell 1930–2015  Michael Connelly  P. D. James 1920–2014  Raymond Chandler 1888–1959  Dashiell Hammett 1894–1961  Dorothy L. Sayers 1893–1957  Patricia Cornwell  Josephine Tey 1896–1952  Patricia Highsmith 1921–1995  James Patterson  Sue Grafton  Wilkie Collins 1824–1889  John Grisham  Stieg Larsson 1954–2004  Louise Penny  Rex Stout 1886–1975  David Baldacci  Tony Hillerman 1925–2008  Robert B. Parker 1932–2010  Ngaio Marsh 1895–1982  John Dickson Carr 1906–1977  Ross Macdonald 1915–1983  Jeffery Deaver  Mary Higgins Clark  Sara Paretsky  Mickey Spillane 1918–2006  Jonathan Kellerman  James Lee Burke  Lee Child  Margery Allingham 1904–1966  Tess Gerritsen  Nora Roberts  Kathy Reichs  Stephen King  Donald E. Westlake 1933–2008  Lawrence Block  Dick Francis 1920–2010  Minette Walters  John le Carré  James Ellroy  Val McDermid  Elmore Leonard 1925–2013  John D. MacDonald 1916–1986  Laurie R. King  Janet Evanovich  Ian Rankin  James M. Cain 1892–1977  Georges Simenon 1903–1989  Harlan Coben', 'Yes'),
(4, 'Ruth Rendell  ', 'female', 'ruth@gmail.com', 7405407804, 'ruth.com', 'Ruth Rendell  Agatha Christie 1890–1976  Arthur Conan Doyle 1859–1930  Ruth Rendell 1930–2015  Michael Connelly  P. D. James 1920–2014  Raymond Chandler 1888–1959  Dashiell Hammett 1894–1961  Dorothy L. Sayers 1893–1957  Patricia Cornwell  Josephine Tey 1896–1952  Patricia Highsmith 1921–1995  James Patterson  Sue Grafton  Wilkie Collins 1824–1889  John Grisham  Stieg Larsson 1954–2004  Louise Penny  Rex Stout 1886–1975  David Baldacci  Tony Hillerman 1925–2008  Robert B. Parker 1932–2010  Ngaio Marsh 1895–1982  John Dickson Carr 1906–1977  Ross Macdonald 1915–1983  Jeffery Deaver  Mary Higgins Clark  Sara Paretsky  Mickey Spillane 1918–2006  Jonathan Kellerman  James Lee Burke  Lee Child  Margery Allingham 1904–1966  Tess Gerritsen  Nora Roberts  Kathy Reichs  Stephen King  Donald E. Westlake 1933–2008  Lawrence Block  Dick Francis 1920–2010  Minette Walters  John le Carré  James Ellroy  Val McDermid  Elmore Leonard 1925–2013  John D. MacDonald 1916–1986  Laurie R. King  Janet Evanovich  Ian Rankin  James M. Cain 1892–1977  Georges Simenon 1903–1989  Harlan Coben', 'No'),
(5, 'P. D. James  ', 'female', 'pd@gmail.com', 7405407804, 'pdx.com', 'P. D. James  Agatha Christie 1890–1976  Arthur Conan Doyle 1859–1930  Ruth Rendell 1930–2015  Michael Connelly  P. D. James 1920–2014  Raymond Chandler 1888–1959  Dashiell Hammett 1894–1961  Dorothy L. Sayers 1893–1957  Patricia Cornwell  Josephine Tey 1896–1952  Patricia Highsmith 1921–1995  James Patterson  Sue Grafton  Wilkie Collins 1824–1889  John Grisham  Stieg Larsson 1954–2004  Louise Penny  Rex Stout 1886–1975  David Baldacci  Tony Hillerman 1925–2008  Robert B. Parker 1932–2010  Ngaio Marsh 1895–1982  John Dickson Carr 1906–1977  Ross Macdonald 1915–1983  Jeffery Deaver  Mary Higgins Clark  Sara Paretsky  Mickey Spillane 1918–2006  Jonathan Kellerman  James Lee Burke  Lee Child  Margery Allingham 1904–1966  Tess Gerritsen  Nora Roberts  Kathy Reichs  Stephen King  Donald E. Westlake 1933–2008  Lawrence Block  Dick Francis 1920–2010  Minette Walters  John le Carré  James Ellroy  Val McDermid  Elmore Leonard 1925–2013  John D. MacDonald 1916–1986  Laurie R. King  Janet Evanovich  Ian Rankin  James M. Cain 1892–1977  Georges Simenon 1903–1989  Harlan Coben', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_master`
--

CREATE TABLE `tbl_book_master` (
  `book_master_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `book_master_name` varchar(100) NOT NULL,
  `book_master_img` varchar(100) NOT NULL,
  `author_id` int(100) NOT NULL,
  `publisher_id` int(100) NOT NULL,
  `book_master_isbn` varchar(100) NOT NULL,
  `book_master_status` varchar(100) NOT NULL,
  `book_master_desc` text NOT NULL,
  `book_master_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book_master`
--

INSERT INTO `tbl_book_master` (`book_master_id`, `cat_id`, `book_master_name`, `book_master_img`, `author_id`, `publisher_id`, `book_master_isbn`, `book_master_status`, `book_master_desc`, `book_master_price`) VALUES
(1, 4, 'book1', 'math1.jpg', 1, 1, '1800-2500-5055-802', 'No', 'nice', 89),
(2, 4, 'book2', 'science2.jpg', 1, 1, '1825-2842-2582', 'Yes', 'nice', 987),
(3, 4, 'book3', 'friction_novel.jpg', 1, 1, '10000000000', 'Yes', 'nice and new', 500),
(4, 4, 'book4', '2b.jpg', 1, 1, '1800', 'Yes', 'nice check it', 890),
(5, 4, 'book5', '', 1, 2, '1800-2500-5055-802', 'Yes', 'nice', 50),
(6, 4, 'abc', 'larawel.png', 5, 2, '1800-2500-5055-802', 'Yes', 'good', 500),
(7, 3, 'jay', 'larawel', 1, 1, '18', 'Yes', '', 100),
(8, 5, 'hj', 'jayshah.pdf', 1, 1, '', 'Yes', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_master_img`
--

CREATE TABLE `tbl_book_master_img` (
  `book_master_img_id` int(100) NOT NULL,
  `book_master_id` int(100) NOT NULL,
  `book_masrter_img_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_qty` int(100) NOT NULL,
  `session_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `product_qty`, `session_id`) VALUES
(1, 2, 12, 'ficj2uo62m8t4ll3u1gb4ljo50'),
(2, 3, 28, 'ficj2uo62m8t4ll3u1gb4ljo50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_img` varchar(100) DEFAULT NULL,
  `cat_desc` text NOT NULL,
  `cat_status` varchar(100) NOT NULL,
  `cat_update_date` date NOT NULL,
  `cat_parent_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_img`, `cat_desc`, `cat_status`, `cat_update_date`, `cat_parent_id`) VALUES
(1, 'Novel', NULL, 'Novel', 'Yes', '2017-07-13', 0),
(2, 'Books', NULL, 'Books', 'Yes', '2017-07-13', 0),
(3, 'Mysteries', NULL, 'Mysteries Novel', 'Yes', '2017-07-13', 1),
(4, ' Romance', NULL, ' Romance Novel', 'Yes', '2017-07-13', 1),
(5, 'Thrillers.', NULL, ' Thrillers Novel', 'Yes', '2017-07-13', 1),
(6, 'computer science ', NULL, 'computer science  books', 'Yes', '2017-07-13', 2),
(7, 'NCERT', NULL, 'NCERT book', 'Yes', '2017-07-13', 2),
(8, '10 th Standard', NULL, '', 'Yes', '2017-07-13', 7),
(9, '11 th STd', NULL, '', 'Yes', '2017-07-13', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_code` varchar(100) NOT NULL,
  `state_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`, `city_code`, `state_id`) VALUES
(1, 'SURAT', 'ST', 1),
(2, 'GANDHINAGAR', 'GNC', 1),
(3, 'MUMBAI', 'MUM', 2),
(4, 'PUNE', 'PN', 2),
(5, 'BANGLURU', 'BAN', 3),
(6, 'MAGLORE', 'MAG', 3),
(7, 'JAIPUR', 'JP', 4),
(8, 'UDAIPUR', 'UDI', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE `tbl_college` (
  `college_id` int(100) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `city_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`college_id`, `college_name`, `city_id`) VALUES
(11, 'SVNIT', 1),
(12, 'J,p Dawer', 1),
(13, 'DA-IICT', 2),
(14, 'IIT Mumbai', 3),
(15, 'Symbiosis ', 4),
(16, 'Agarwal College ', 7),
(17, 'IISc', 5),
(18, 'Pacific College', 8),
(19, 'Manglore College', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college_book`
--

CREATE TABLE `tbl_college_book` (
  `book_college_id` int(100) NOT NULL,
  `college_id` int(100) NOT NULL,
  `book_master_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college_book`
--

INSERT INTO `tbl_college_book` (`book_college_id`, `college_id`, `book_master_id`) VALUES
(2, 12, 2),
(3, 11, 1),
(4, 11, 2),
(5, 11, 3),
(6, 13, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` double NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_pincode` int(100) NOT NULL,
  `user_landmark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publisher`
--

CREATE TABLE `tbl_publisher` (
  `publisher_id` int(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_email` varchar(100) NOT NULL,
  `publisher_contactnum` double NOT NULL,
  `publisher_website` varchar(100) NOT NULL,
  `publisher_desc` text NOT NULL,
  `publisher_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_publisher`
--

INSERT INTO `tbl_publisher` (`publisher_id`, `publisher_name`, `publisher_email`, `publisher_contactnum`, `publisher_website`, `publisher_desc`, `publisher_status`) VALUES
(1, 'tata mcgraw hill', 'tmc@gmail.com', 87454545451, 'tmc.com', '', 'Yes'),
(2, 'Arhint Publisher', 'ang@gmail.com', 9825060668, 'asx.com', 'good', 'Yes'),
(3, 'PHI Learning Pvt. Ltd', 'PHI@gmail.com', 85252054514, 'Phi.com', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `registration_id` int(100) NOT NULL,
  `registration_full_name` varchar(100) NOT NULL,
  `registrayion_phone_number` varchar(100) NOT NULL,
  `registration_email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`registration_id`, `registration_full_name`, `registrayion_phone_number`, `registration_email_id`) VALUES
(1, 's', '4', 's'),
(2, 's', '4', 's'),
(3, 's', '4', 's'),
(4, '', 'a', 'a'),
(5, '', 'a', 'a'),
(6, '', 'a', 'a'),
(7, '', '', ''),
(8, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semester_id` int(100) NOT NULL,
  `semester_num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `semester_num`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(100) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_code` varchar(100) NOT NULL,
  `country_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`, `state_code`, `country_id`) VALUES
(1, 'GUJARAT', 'GJ', 99),
(2, 'MAHARASTRA', 'MH', 99),
(3, 'KARNAKATA', 'KA', 99),
(4, 'RAJESTAN', 'RJ', 99);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_gender` varchar(100) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_contactnum` double NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_address1` varchar(255) NOT NULL,
  `user_address2` varchar(255) NOT NULL,
  `city_id` int(255) NOT NULL,
  `state_id` int(255) NOT NULL,
  `country_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_first_name`, `user_last_name`, `user_gender`, `user_email`, `user_contactnum`, `user_password`, `user_address1`, `user_address2`, `city_id`, `state_id`, `country_id`) VALUES
(1, 'jay', 'shah', 'male', 'shahjay00785@gmail.com', 7405407804, 'jay123', '', '', 0, 0, 0),
(2, 'jay', 'shah', NULL, 'shahjay00785@gmail.com', 7405407804, 'jay123', '', '', 0, 0, 0),
(3, 'JAY', 'SHAH', NULL, 'shahjay00785@gmail.com', 7405407804, '2451074', '', '', 0, 0, 0),
(4, 'jay', 'shah', NULL, 'shahjay00785@gmail.com', 7405407804, '2451074', '', '', 0, 0, 0),
(5, 'RAMESH', 'SHAH', NULL, 'RAMESH@GMAIL.COM', 7405407804, '45210', '', '', 0, 0, 0),
(6, 'RAMESH', 'SHAH', NULL, 'RAMESH@GMAIL.COM', 7405407804, '123', '', '', 0, 0, 0),
(7, 'raj', 'raj', NULL, 'raj@gmail.com', 7405407804, '0794b4c809275278392b42a91839a4ab', '', '', 0, 0, 0),
(8, 'kajal', 'shah', NULL, 'shahkajal912@gmail.com', 940292015205, 'ramesh', '', '', 0, 0, 0),
(9, 'abc', 'abc', NULL, 'abc', 0, 'abc', '', '', 0, 0, 0),
(10, 'ramesh', 'sharm', NULL, 'ramesh@gmail.com', 0, '0794b4c809275278392b42a91839a4ab', '', '', 0, 0, 0),
(11, 'ramesh', 'shah', NULL, 'shahjay00785@gmail.com', 7405407804, '0794b4c809275278392b42a91839a4ab', '', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_author`
--
ALTER TABLE `tbl_author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `tbl_book_master`
--
ALTER TABLE `tbl_book_master`
  ADD PRIMARY KEY (`book_master_id`);

--
-- Indexes for table `tbl_book_master_img`
--
ALTER TABLE `tbl_book_master_img`
  ADD PRIMARY KEY (`book_master_img_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `tbl_college_book`
--
ALTER TABLE `tbl_college_book`
  ADD PRIMARY KEY (`book_college_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_publisher`
--
ALTER TABLE `tbl_publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_author`
--
ALTER TABLE `tbl_author`
  MODIFY `author_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_book_master`
--
ALTER TABLE `tbl_book_master`
  MODIFY `book_master_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_book_master_img`
--
ALTER TABLE `tbl_book_master_img`
  MODIFY `book_master_img_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `college_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_college_book`
--
ALTER TABLE `tbl_college_book`
  MODIFY `book_college_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_publisher`
--
ALTER TABLE `tbl_publisher`
  MODIFY `publisher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `registration_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
