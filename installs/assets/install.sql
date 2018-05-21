-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 03:34 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `idCountry` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`idCountry`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`idCountry`, `countryCode`, `countryName`) VALUES
(1, 'AD', 'Andorra'),
(2, 'AE', 'United Arab Emirates'),
(3, 'AF', 'Afghanistan'),
(4, 'AG', 'Antigua and Barbuda'),
(5, 'AI', 'Anguilla'),
(6, 'AL', 'Albania'),
(7, 'AM', 'Armenia'),
(8, 'AO', 'Angola'),
(9, 'AQ', 'Antarctica'),
(10, 'AR', 'Argentina'),
(11, 'AS', 'American Samoa'),
(12, 'AT', 'Austria'),
(13, 'AU', 'Australia'),
(14, 'AW', 'Aruba'),
(15, 'AX', 'Åland'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BA', 'Bosnia and Herzegovina'),
(18, 'BB', 'Barbados'),
(19, 'BD', 'Bangladesh'),
(20, 'BE', 'Belgium'),
(21, 'BF', 'Burkina Faso'),
(22, 'BG', 'Bulgaria'),
(23, 'BH', 'Bahrain'),
(24, 'BI', 'Burundi'),
(25, 'BJ', 'Benin'),
(26, 'BL', 'Saint Barthélemy'),
(27, 'BM', 'Bermuda'),
(28, 'BN', 'Brunei'),
(29, 'BO', 'Bolivia'),
(30, 'BQ', 'Bonaire'),
(31, 'BR', 'Brazil'),
(32, 'BS', 'Bahamas'),
(33, 'BT', 'Bhutan'),
(34, 'BV', 'Bouvet Island'),
(35, 'BW', 'Botswana'),
(36, 'BY', 'Belarus'),
(37, 'BZ', 'Belize'),
(38, 'CA', 'Canada'),
(39, 'CC', 'Cocos [Keeling] Islands'),
(40, 'CD', 'Democratic Republic of the Congo'),
(41, 'CF', 'Central African Republic'),
(42, 'CG', 'Republic of the Congo'),
(43, 'CH', 'Switzerland'),
(44, 'CI', 'Ivory Coast'),
(45, 'CK', 'Cook Islands'),
(46, 'CL', 'Chile'),
(47, 'CM', 'Cameroon'),
(48, 'CN', 'China'),
(49, 'CO', 'Colombia'),
(50, 'CR', 'Costa Rica'),
(51, 'CU', 'Cuba'),
(52, 'CV', 'Cape Verde'),
(53, 'CW', 'Curacao'),
(54, 'CX', 'Christmas Island'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DE', 'Germany'),
(58, 'DJ', 'Djibouti'),
(59, 'DK', 'Denmark'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'DZ', 'Algeria'),
(63, 'EC', 'Ecuador'),
(64, 'EE', 'Estonia'),
(65, 'EG', 'Egypt'),
(66, 'EH', 'Western Sahara'),
(67, 'ER', 'Eritrea'),
(68, 'ES', 'Spain'),
(69, 'ET', 'Ethiopia'),
(70, 'FI', 'Finland'),
(71, 'FJ', 'Fiji'),
(72, 'FK', 'Falkland Islands'),
(73, 'FM', 'Micronesia'),
(74, 'FO', 'Faroe Islands'),
(75, 'FR', 'France'),
(76, 'GA', 'Gabon'),
(77, 'GB', 'United Kingdom'),
(78, 'GD', 'Grenada'),
(79, 'GE', 'Georgia'),
(80, 'GF', 'French Guiana'),
(81, 'GG', 'Guernsey'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GL', 'Greenland'),
(85, 'GM', 'Gambia'),
(86, 'GN', 'Guinea'),
(87, 'GP', 'Guadeloupe'),
(88, 'GQ', 'Equatorial Guinea'),
(89, 'GR', 'Greece'),
(90, 'GS', 'South Georgia and the South Sandwich Islands'),
(91, 'GT', 'Guatemala'),
(92, 'GU', 'Guam'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HK', 'Hong Kong'),
(96, 'HM', 'Heard Island and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HR', 'Croatia'),
(99, 'HT', 'Haiti'),
(100, 'HU', 'Hungary'),
(101, 'ID', 'Indonesia'),
(102, 'IE', 'Ireland'),
(103, 'IL', 'Israel'),
(104, 'IM', 'Isle of Man'),
(105, 'IN', 'India'),
(106, 'IO', 'British Indian Ocean Territory'),
(107, 'IQ', 'Iraq'),
(108, 'IR', 'Iran'),
(109, 'IS', 'Iceland'),
(110, 'IT', 'Italy'),
(111, 'JE', 'Jersey'),
(112, 'JM', 'Jamaica'),
(113, 'JO', 'Jordan'),
(114, 'JP', 'Japan'),
(115, 'KE', 'Kenya'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'KH', 'Cambodia'),
(118, 'KI', 'Kiribati'),
(119, 'KM', 'Comoros'),
(120, 'KN', 'Saint Kitts and Nevis'),
(121, 'KP', 'North Korea'),
(122, 'KR', 'South Korea'),
(123, 'KW', 'Kuwait'),
(124, 'KY', 'Cayman Islands'),
(125, 'KZ', 'Kazakhstan'),
(126, 'LA', 'Laos'),
(127, 'LB', 'Lebanon'),
(128, 'LC', 'Saint Lucia'),
(129, 'LI', 'Liechtenstein'),
(130, 'LK', 'Sri Lanka'),
(131, 'LR', 'Liberia'),
(132, 'LS', 'Lesotho'),
(133, 'LT', 'Lithuania'),
(134, 'LU', 'Luxembourg'),
(135, 'LV', 'Latvia'),
(136, 'LY', 'Libya'),
(137, 'MA', 'Morocco'),
(138, 'MC', 'Monaco'),
(139, 'MD', 'Moldova'),
(140, 'ME', 'Montenegro'),
(141, 'MF', 'Saint Martin'),
(142, 'MG', 'Madagascar'),
(143, 'MH', 'Marshall Islands'),
(144, 'MK', 'Macedonia'),
(145, 'ML', 'Mali'),
(146, 'MM', 'Myanmar [Burma]'),
(147, 'MN', 'Mongolia'),
(148, 'MO', 'Macao'),
(149, 'MP', 'Northern Mariana Islands'),
(150, 'MQ', 'Martinique'),
(151, 'MR', 'Mauritania'),
(152, 'MS', 'Montserrat'),
(153, 'MT', 'Malta'),
(154, 'MU', 'Mauritius'),
(155, 'MV', 'Maldives'),
(156, 'MW', 'Malawi'),
(157, 'MX', 'Mexico'),
(158, 'MY', 'Malaysia'),
(159, 'MZ', 'Mozambique'),
(160, 'NA', 'Namibia'),
(161, 'NC', 'New Caledonia'),
(162, 'NE', 'Niger'),
(163, 'NF', 'Norfolk Island'),
(164, 'NG', 'Nigeria'),
(165, 'NI', 'Nicaragua'),
(166, 'NL', 'Netherlands'),
(167, 'NO', 'Norway'),
(168, 'NP', 'Nepal'),
(169, 'NR', 'Nauru'),
(170, 'NU', 'Niue'),
(171, 'NZ', 'New Zealand'),
(172, 'OM', 'Oman'),
(173, 'PA', 'Panama'),
(174, 'PE', 'Peru'),
(175, 'PF', 'French Polynesia'),
(176, 'PG', 'Papua New Guinea'),
(177, 'PH', 'Philippines'),
(178, 'PK', 'Pakistan'),
(179, 'PL', 'Poland'),
(180, 'PM', 'Saint Pierre and Miquelon'),
(181, 'PN', 'Pitcairn Islands'),
(182, 'PR', 'Puerto Rico'),
(183, 'PS', 'Palestine'),
(184, 'PT', 'Portugal'),
(185, 'PW', 'Palau'),
(186, 'PY', 'Paraguay'),
(187, 'QA', 'Qatar'),
(188, 'RE', 'Réunion'),
(189, 'RO', 'Romania'),
(190, 'RS', 'Serbia'),
(191, 'RU', 'Russia'),
(192, 'RW', 'Rwanda'),
(193, 'SA', 'Saudi Arabia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SC', 'Seychelles'),
(196, 'SD', 'Sudan'),
(197, 'SE', 'Sweden'),
(198, 'SG', 'Singapore'),
(199, 'SH', 'Saint Helena'),
(200, 'SI', 'Slovenia'),
(201, 'SJ', 'Svalbard and Jan Mayen'),
(202, 'SK', 'Slovakia'),
(203, 'SL', 'Sierra Leone'),
(204, 'SM', 'San Marino'),
(205, 'SN', 'Senegal'),
(206, 'SO', 'Somalia'),
(207, 'SR', 'Suriname'),
(208, 'SS', 'South Sudan'),
(209, 'ST', 'São Tomé and Príncipe'),
(210, 'SV', 'El Salvador'),
(211, 'SX', 'Sint Maarten'),
(212, 'SY', 'Syria'),
(213, 'SZ', 'Swaziland'),
(214, 'TC', 'Turks and Caicos Islands'),
(215, 'TD', 'Chad'),
(216, 'TF', 'French Southern Territories'),
(217, 'TG', 'Togo'),
(218, 'TH', 'Thailand'),
(219, 'TJ', 'Tajikistan'),
(220, 'TK', 'Tokelau'),
(221, 'TL', 'East Timor'),
(222, 'TM', 'Turkmenistan'),
(223, 'TN', 'Tunisia'),
(224, 'TO', 'Tonga'),
(225, 'TR', 'Turkey'),
(226, 'TT', 'Trinidad and Tobago'),
(227, 'TV', 'Tuvalu'),
(228, 'TW', 'Taiwan'),
(229, 'TZ', 'Tanzania'),
(230, 'UA', 'Ukraine'),
(231, 'UG', 'Uganda'),
(232, 'UM', 'U.S. Minor Outlying Islands'),
(233, 'US', 'United States'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VA', 'Vatican City'),
(237, 'VC', 'Saint Vincent and the Grenadines'),
(238, 'VE', 'Venezuela'),
(239, 'VG', 'British Virgin Islands'),
(240, 'VI', 'U.S. Virgin Islands'),
(241, 'VN', 'Vietnam'),
(242, 'VU', 'Vanuatu'),
(243, 'WF', 'Wallis and Futuna'),
(244, 'WS', 'Samoa'),
(245, 'XK', 'Kosovo'),
(246, 'YE', 'Yemen'),
(247, 'YT', 'Mayotte'),
(248, 'ZA', 'South Africa'),
(249, 'ZM', 'Zambia'),
(250, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_code` char(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `country_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  KEY `idx_country_code` (`country_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_code`, `country_name`) VALUES
('AD', 'Andorra'),
('AE', 'United Arab Emirates'),
('AF', 'Afghanistan'),
('AG', 'Antigua and Barbuda'),
('AI', 'Anguilla'),
('AL', 'Albania'),
('AM', 'Armenia'),
('AN', 'Netherlands Antilles'),
('AO', 'Angola'),
('AQ', 'Antarctica'),
('AR', 'Argentina'),
('AS', 'American Samoa'),
('AT', 'Austria'),
('AU', 'Australia'),
('AW', 'Aruba'),
('AX', 'Aland Islands'),
('AZ', 'Azerbaijan'),
('BA', 'Bosnia and Herzegovina'),
('BB', 'Barbados'),
('BD', 'Bangladesh'),
('BE', 'Belgium'),
('BF', 'Burkina Faso'),
('BG', 'Bulgaria'),
('BH', 'Bahrain'),
('BI', 'Burundi'),
('BJ', 'Benin'),
('BL', 'Saint Barthélemy'),
('BM', 'Bermuda'),
('BN', 'Brunei'),
('BO', 'Bolivia'),
('BQ', 'Bonaire, Saint Eustatius and Saba '),
('BR', 'Brazil'),
('BS', 'Bahamas'),
('BT', 'Bhutan'),
('BV', 'Bouvet Island'),
('BW', 'Botswana'),
('BY', 'Belarus'),
('BZ', 'Belize'),
('CA', 'Canada'),
('CC', 'Cocos Islands'),
('CD', 'Democratic Republic of the Congo'),
('CF', 'Central African Republic'),
('CG', 'Republic of the Congo'),
('CH', 'Switzerland'),
('CI', 'Ivory Coast'),
('CK', 'Cook Islands'),
('CL', 'Chile'),
('CM', 'Cameroon'),
('CN', 'China'),
('CO', 'Colombia'),
('CR', 'Costa Rica'),
('CS', 'Serbia and Montenegro'),
('CU', 'Cuba'),
('CV', 'Cape Verde'),
('CW', 'Curaçao'),
('CX', 'Christmas Island'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DE', 'Germany'),
('DJ', 'Djibouti'),
('DK', 'Denmark'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('DZ', 'Algeria'),
('EC', 'Ecuador'),
('EE', 'Estonia'),
('EG', 'Egypt'),
('EH', 'Western Sahara'),
('ER', 'Eritrea'),
('ES', 'Spain'),
('ET', 'Ethiopia'),
('FI', 'Finland'),
('FJ', 'Fiji'),
('FK', 'Falkland Islands'),
('FM', 'Micronesia'),
('FO', 'Faroe Islands'),
('FR', 'France'),
('GA', 'Gabon'),
('GB', 'United Kingdom'),
('GD', 'Grenada'),
('GE', 'Georgia'),
('GF', 'French Guiana'),
('GG', 'Guernsey'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GL', 'Greenland'),
('GM', 'Gambia'),
('GN', 'Guinea'),
('GP', 'Guadeloupe'),
('GQ', 'Equatorial Guinea'),
('GR', 'Greece'),
('GS', 'South Georgia and the South Sandwich Islands'),
('GT', 'Guatemala'),
('GU', 'Guam'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HK', 'Hong Kong'),
('HM', 'Heard Island and McDonald Islands'),
('HN', 'Honduras'),
('HR', 'Croatia'),
('HT', 'Haiti'),
('HU', 'Hungary'),
('ID', 'Indonesia'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IM', 'Isle of Man'),
('IN', 'India'),
('IO', 'British Indian Ocean Territory'),
('IQ', 'Iraq'),
('IR', 'Iran'),
('IS', 'Iceland'),
('IT', 'Italy'),
('JE', 'Jersey'),
('JM', 'Jamaica'),
('JO', 'Jordan'),
('JP', 'Japan'),
('KE', 'Kenya'),
('KG', 'Kyrgyzstan'),
('KH', 'Cambodia'),
('KI', 'Kiribati'),
('KM', 'Comoros'),
('KN', 'Saint Kitts and Nevis'),
('KP', 'North Korea'),
('KR', 'South Korea'),
('KW', 'Kuwait'),
('KY', 'Cayman Islands'),
('KZ', 'Kazakhstan'),
('LA', 'Laos'),
('LB', 'Lebanon'),
('LC', 'Saint Lucia'),
('LI', 'Liechtenstein'),
('LK', 'Sri Lanka'),
('LR', 'Liberia'),
('LS', 'Lesotho'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('LV', 'Latvia'),
('LY', 'Libya'),
('MA', 'Morocco'),
('MC', 'Monaco'),
('MD', 'Moldova'),
('ME', 'Montenegro'),
('MF', 'Saint Martin'),
('MG', 'Madagascar'),
('MH', 'Marshall Islands'),
('MK', 'Macedonia'),
('ML', 'Mali'),
('MM', 'Myanmar'),
('MN', 'Mongolia'),
('MO', 'Macao'),
('MP', 'Northern Mariana Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MS', 'Montserrat'),
('MT', 'Malta'),
('MU', 'Mauritius'),
('MV', 'Maldives'),
('MW', 'Malawi'),
('MX', 'Mexico'),
('MY', 'Malaysia'),
('MZ', 'Mozambique'),
('NA', 'Namibia'),
('NC', 'New Caledonia'),
('NE', 'Niger'),
('NF', 'Norfolk Island'),
('NG', 'Nigeria'),
('NI', 'Nicaragua'),
('NL', 'Netherlands'),
('NO', 'Norway'),
('NP', 'Nepal'),
('NR', 'Nauru'),
('NU', 'Niue'),
('NZ', 'New Zealand'),
('OM', 'Oman'),
('PA', 'Panama'),
('PE', 'Peru'),
('PF', 'French Polynesia'),
('PG', 'Papua New Guinea'),
('PH', 'Philippines'),
('PK', 'Pakistan'),
('PL', 'Poland'),
('PM', 'Saint Pierre and Miquelon'),
('PN', 'Pitcairn'),
('PR', 'Puerto Rico'),
('PS', 'Palestinian Territory'),
('PT', 'Portugal'),
('PW', 'Palau'),
('PY', 'Paraguay'),
('QA', 'Qatar'),
('RE', 'Reunion'),
('RO', 'Romania'),
('RS', 'Serbia'),
('RU', 'Russia'),
('RW', 'Rwanda'),
('SA', 'Saudi Arabia'),
('SB', 'Solomon Islands'),
('SC', 'Seychelles'),
('SD', 'Sudan'),
('SE', 'Sweden'),
('SG', 'Singapore'),
('SH', 'Saint Helena'),
('SI', 'Slovenia'),
('SJ', 'Svalbard and Jan Mayen'),
('SK', 'Slovakia'),
('SL', 'Sierra Leone'),
('SM', 'San Marino'),
('SN', 'Senegal'),
('SO', 'Somalia'),
('SR', 'Suriname'),
('SS', 'South Sudan'),
('ST', 'Sao Tome and Principe'),
('SV', 'El Salvador'),
('SX', 'Sint Maarten'),
('SY', 'Syria'),
('SZ', 'Swaziland'),
('TC', 'Turks and Caicos Islands'),
('TD', 'Chad'),
('TF', 'French Southern Territories'),
('TG', 'Togo'),
('TH', 'Thailand'),
('TJ', 'Tajikistan'),
('TK', 'Tokelau'),
('TL', 'East Timor'),
('TM', 'Turkmenistan'),
('TN', 'Tunisia'),
('TO', 'Tonga'),
('TR', 'Turkey'),
('TT', 'Trinidad and Tobago'),
('TV', 'Tuvalu'),
('TW', 'Taiwan'),
('TZ', 'Tanzania'),
('UA', 'Ukraine'),
('UG', 'Uganda'),
('UM', 'United States Minor Outlying Islands'),
('US', 'United States'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VA', 'Vatican'),
('VC', 'Saint Vincent and the Grenadines'),
('VE', 'Venezuela'),
('VG', 'British Virgin Islands'),
('VI', 'U.S. Virgin Islands'),
('VN', 'Vietnam'),
('VU', 'Vanuatu'),
('WF', 'Wallis and Futuna'),
('WS', 'Samoa'),
('XK', 'Kosovo'),
('YE', 'Yemen'),
('YT', 'Mayotte'),
('ZA', 'South Africa'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(64) DEFAULT NULL,
  `currency_code` char(3) DEFAULT NULL,
  PRIMARY KEY (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_name`, `currency_code`) VALUES
(1, 'Andorran Peseta', 'ADP'),
(2, 'United Arab Emirates Dirham', 'AED'),
(3, 'Afghanistan Afghani', 'AFA'),
(4, 'Albanian Lek', 'ALL'),
(5, 'Netherlands Antillian Guilder', 'ANG'),
(6, 'Angolan Kwanza', 'AOK'),
(7, 'Argentine Peso', 'ARS'),
(9, 'Australian Dollar', 'AUD'),
(10, 'Aruban Florin', 'AWG'),
(11, 'Barbados Dollar', 'BBD'),
(12, 'Bangladeshi Taka', 'BDT'),
(14, 'Bulgarian Lev', 'BGN'),
(15, 'Bahraini Dinar', 'BHD'),
(16, 'Burundi Franc', 'BIF'),
(17, 'Bermudian Dollar', 'BMD'),
(18, 'Brunei Dollar', 'BND'),
(19, 'Bolivian Boliviano', 'BOB'),
(20, 'Brazilian Real', 'BRL'),
(21, 'Bahamian Dollar', 'BSD'),
(22, 'Bhutan Ngultrum', 'BTN'),
(23, 'Burma Kyat', 'BUK'),
(24, 'Botswanian Pula', 'BWP'),
(25, 'Belize Dollar', 'BZD'),
(26, 'Canadian Dollar', 'CAD'),
(27, 'Swiss Franc', 'CHF'),
(28, 'Chilean Unidades de Fomento', 'CLF'),
(29, 'Chilean Peso', 'CLP'),
(30, 'Yuan (Chinese) Renminbi', 'CNY'),
(31, 'Colombian Peso', 'COP'),
(32, 'Costa Rican Colon', 'CRC'),
(33, 'Czech Republic Koruna', 'CZK'),
(34, 'Cuban Peso', 'CUP'),
(35, 'Cape Verde Escudo', 'CVE'),
(36, 'Cyprus Pound', 'CYP'),
(40, 'Danish Krone', 'DKK'),
(41, 'Dominican Peso', 'DOP'),
(42, 'Algerian Dinar', 'DZD'),
(43, 'Ecuador Sucre', 'ECS'),
(44, 'Egyptian Pound', 'EGP'),
(45, 'Estonian Kroon (EEK)', 'EEK'),
(46, 'Ethiopian Birr', 'ETB'),
(47, 'Euro', 'EUR'),
(49, 'Fiji Dollar', 'FJD'),
(50, 'Falkland Islands Pound', 'FKP'),
(52, 'British Pound', 'GBP'),
(53, 'Ghanaian Cedi', 'GHC'),
(54, 'Gibraltar Pound', 'GIP'),
(55, 'Gambian Dalasi', 'GMD'),
(56, 'Guinea Franc', 'GNF'),
(58, 'Guatemalan Quetzal', 'GTQ'),
(59, 'Guinea-Bissau Peso', 'GWP'),
(60, 'Guyanan Dollar', 'GYD'),
(61, 'Hong Kong Dollar', 'HKD'),
(62, 'Honduran Lempira', 'HNL'),
(63, 'Haitian Gourde', 'HTG'),
(64, 'Hungarian Forint', 'HUF'),
(65, 'Indonesian Rupiah', 'IDR'),
(66, 'Irish Punt', 'IEP'),
(67, 'Israeli Shekel', 'ILS'),
(68, 'Indian Rupee', 'INR'),
(69, 'Iraqi Dinar', 'IQD'),
(70, 'Iranian Rial', 'IRR'),
(73, 'Jamaican Dollar', 'JMD'),
(74, 'Jordanian Dinar', 'JOD'),
(75, 'Japanese Yen', 'JPY'),
(76, 'Kenyan Schilling', 'KES'),
(77, 'Kampuchean (Cambodian) Riel', 'KHR'),
(78, 'Comoros Franc', 'KMF'),
(79, 'North Korean Won', 'KPW'),
(80, '(South) Korean Won', 'KRW'),
(81, 'Kuwaiti Dinar', 'KWD'),
(82, 'Cayman Islands Dollar', 'KYD'),
(83, 'Lao Kip', 'LAK'),
(84, 'Lebanese Pound', 'LBP'),
(85, 'Sri Lanka Rupee', 'LKR'),
(86, 'Liberian Dollar', 'LRD'),
(87, 'Lesotho Loti', 'LSL'),
(89, 'Libyan Dinar', 'LYD'),
(90, 'Moroccan Dirham', 'MAD'),
(91, 'Malagasy Franc', 'MGF'),
(92, 'Mongolian Tugrik', 'MNT'),
(93, 'Macau Pataca', 'MOP'),
(94, 'Mauritanian Ouguiya', 'MRO'),
(95, 'Maltese Lira', 'MTL'),
(96, 'Mauritius Rupee', 'MUR'),
(97, 'Maldive Rufiyaa', 'MVR'),
(98, 'Malawi Kwacha', 'MWK'),
(99, 'Mexican Peso', 'MXP'),
(100, 'Malaysian Ringgit', 'MYR'),
(101, 'Mozambique Metical', 'MZM'),
(102, 'Namibian Dollar', 'NAD'),
(103, 'Nigerian Naira', 'NGN'),
(104, 'Nicaraguan Cordoba', 'NIO'),
(105, 'Norwegian Kroner', 'NOK'),
(106, 'Nepalese Rupee', 'NPR'),
(107, 'New Zealand Dollar', 'NZD'),
(108, 'Omani Rial', 'OMR'),
(109, 'Panamanian Balboa', 'PAB'),
(110, 'Peruvian Nuevo Sol', 'PEN'),
(111, 'Papua New Guinea Kina', 'PGK'),
(112, 'Philippine Peso', 'PHP'),
(113, 'Pakistan Rupee', 'PKR'),
(114, 'Polish Zloty', 'PLN'),
(116, 'Paraguay Guarani', 'PYG'),
(117, 'Qatari Rial', 'QAR'),
(118, 'Romanian Leu', 'RON'),
(119, 'Rwanda Franc', 'RWF'),
(120, 'Saudi Arabian Riyal', 'SAR'),
(121, 'Solomon Islands Dollar', 'SBD'),
(122, 'Seychelles Rupee', 'SCR'),
(123, 'Sudanese Pound', 'SDP'),
(124, 'Swedish Krona', 'SEK'),
(125, 'Singapore Dollar', 'SGD'),
(126, 'St. Helena Pound', 'SHP'),
(127, 'Sierra Leone Leone', 'SLL'),
(128, 'Somali Schilling', 'SOS'),
(129, 'Suriname Guilder', 'SRG'),
(130, 'Sao Tome and Principe Dobra', 'STD'),
(131, 'Russian Ruble', 'RUB'),
(132, 'El Salvador Colon', 'SVC'),
(133, 'Syrian Potmd', 'SYP'),
(134, 'Swaziland Lilangeni', 'SZL'),
(135, 'Thai Baht', 'THB'),
(136, 'Tunisian Dinar', 'TND'),
(137, 'Tongan Paanga', 'TOP'),
(138, 'East Timor Escudo', 'TPE'),
(139, 'Turkish Lira', 'TRY'),
(140, 'Trinidad and Tobago Dollar', 'TTD'),
(141, 'Taiwan Dollar', 'TWD'),
(142, 'Tanzanian Schilling', 'TZS'),
(143, 'Uganda Shilling', 'UGX'),
(144, 'US Dollar', 'USD'),
(145, 'Uruguayan Peso', 'UYU'),
(146, 'Venezualan Bolivar', 'VEF'),
(147, 'Vietnamese Dong', 'VND'),
(148, 'Vanuatu Vatu', 'VUV'),
(149, 'Samoan Tala', 'WST'),
(150, 'CommunautÃ© FinanciÃ¨re Africaine BEAC, Francs', 'XAF'),
(151, 'Silver, Ounces', 'XAG'),
(152, 'Gold, Ounces', 'XAU'),
(153, 'East Caribbean Dollar', 'XCD'),
(154, 'International Monetary Fund (IMF) Special Drawing Rights', 'XDR'),
(155, 'CommunautÃ© FinanciÃ¨re Africaine BCEAO - Francs', 'XOF'),
(156, 'Palladium Ounces', 'XPD'),
(157, 'Comptoirs FranÃ§ais du Pacifique Francs', 'XPF'),
(158, 'Platinum, Ounces', 'XPT'),
(159, 'Democratic Yemeni Dinar', 'YDD'),
(160, 'Yemeni Rial', 'YER'),
(161, 'New Yugoslavia Dinar', 'YUD'),
(162, 'South African Rand', 'ZAR'),
(163, 'Zambian Kwacha', 'ZMK'),
(164, 'Zaire Zaire', 'ZRZ'),
(165, 'Zimbabwe Dollar', 'ZWD'),
(166, 'Slovak Koruna', 'SKK'),
(167, 'Armenian Dram', 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `installer`
--

CREATE TABLE IF NOT EXISTS `installer` (
  `id` int(1) NOT NULL,
  `installer_flag` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `installer`
--

INSERT INTO `installer` (`id`, `installer_flag`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application_list`
--

CREATE TABLE IF NOT EXISTS `tbl_application_list` (
  `application_list_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `leave_category_id` int(2) NOT NULL,
  `reason` text NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `application_status` int(2) NOT NULL DEFAULT '1' COMMENT '1=pending,2=accepted 3=rejected',
  `comments` text,
  `view_status` tinyint(1) NOT NULL DEFAULT '2',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1',
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approve_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`application_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign_item`
--

CREATE TABLE IF NOT EXISTS `tbl_assign_item` (
  `assign_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `assign_inventory` int(5) NOT NULL,
  `assign_date` date NOT NULL,
  PRIMARY KEY (`assign_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `leave_category_id` int(11) DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `attendance_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'status 0=absent 1=present 3 = onleave',
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock`
--

CREATE TABLE IF NOT EXISTS `tbl_clock` (
  `clock_id` int(11) NOT NULL AUTO_INCREMENT,
  `attendance_id` int(11) NOT NULL,
  `clockin_time` time DEFAULT NULL,
  `clockout_time` time DEFAULT NULL,
  `comments` text NOT NULL,
  `clocking_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1= clockin_time',
  PRIMARY KEY (`clock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock_history`
--

CREATE TABLE IF NOT EXISTS `tbl_clock_history` (
  `clock_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `clock_id` int(11) NOT NULL,
  `clockin_edit` time NOT NULL,
  `clockout_edit` time DEFAULT NULL,
  `reason` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=pending and 2 = accept  3= reject',
  `notify_me` tinyint(4) NOT NULL DEFAULT '1',
  `view_status` tinyint(4) NOT NULL DEFAULT '2',
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`clock_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE IF NOT EXISTS `tbl_days` (
  `day_id` int(5) NOT NULL AUTO_INCREMENT,
  `day` varchar(100) NOT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`day_id`, `day`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `department_id` int(5) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(1, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE IF NOT EXISTS `tbl_designations` (
  `designations_id` int(5) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `designations` varchar(100) NOT NULL,
  PRIMARY KEY (`designations_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_designations`
--

INSERT INTO `tbl_designations` (`designations_id`, `department_id`, `designations`) VALUES
(1, 1, 'Senior Developer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_draft`
--

CREATE TABLE IF NOT EXISTS `tbl_draft` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `to` text NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text,
  `attach_filename` text,
  `message_time` datetime NOT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`draft_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `employee_id` int(5) NOT NULL AUTO_INCREMENT,
  `employment_id` varchar(200) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maratial_status` varchar(20) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `passport_number` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `photo_a_path` varchar(150) NOT NULL,
  `present_address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_id` int(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designations_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 2=blocked',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`employee_id`, `employment_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `maratial_status`, `middle_name`, `nationality`, `passport_number`, `photo`, `photo_a_path`, `present_address`, `city`, `country_id`, `mobile`, `phone`, `email`, `designations_id`, `joining_date`, `status`) VALUES
(1, 'employee', 'John', 'Doe', '1989-03-15', 'Male', 'Un-Married', 'Lob Chandra Saha', '19', '', 'img/uploads/125683333.jpg', 'E:/xampp/htdocs/hr_lite_main/img/uploads/125683333.jpg', 'Dhaka', 'Dhaka', 19, '019229449469', '', 'abc@gmail.com', 1, '2015-03-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_award`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_award` (
  `employee_award_id` int(11) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(100) NOT NULL,
  `employee_id` int(2) NOT NULL,
  `gift_item` varchar(300) NOT NULL,
  `award_amount` int(5) NOT NULL,
  `award_date` varchar(10) NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  PRIMARY KEY (`employee_award_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_bank`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_bank` (
  `employee_bank_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `branch_name` varchar(300) NOT NULL,
  `account_name` varchar(300) NOT NULL,
  `account_number` varchar(300) NOT NULL,
  PRIMARY KEY (`employee_bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employee_bank`
--

INSERT INTO `tbl_employee_bank` (`employee_bank_id`, `employee_id`, `bank_name`, `branch_name`, `account_name`, `account_number`) VALUES
(1, 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_document`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_document` (
  `document_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `resume` varchar(300) DEFAULT NULL,
  `resume_path` varchar(300) DEFAULT NULL,
  `resume_filename` varchar(100) DEFAULT NULL,
  `offer_letter` varchar(300) DEFAULT NULL,
  `offer_letter_filename` varchar(200) DEFAULT NULL,
  `offer_letter_path` varchar(300) DEFAULT NULL,
  `joining_letter` varchar(300) DEFAULT NULL,
  `joining_letter_filename` varchar(200) DEFAULT NULL,
  `joining_letter_path` varchar(300) DEFAULT NULL,
  `contract_paper` varchar(300) DEFAULT NULL,
  `contract_paper_filename` varchar(200) DEFAULT NULL,
  `contract_paper_path` varchar(300) DEFAULT NULL,
  `id_proff` varchar(300) DEFAULT NULL,
  `id_proff_filename` varchar(200) DEFAULT NULL,
  `id_proff_path` varchar(300) DEFAULT NULL,
  `other_document` varchar(300) DEFAULT NULL,
  `other_document_filename` varchar(200) DEFAULT NULL,
  `other_document_path` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employee_document`
--

INSERT INTO `tbl_employee_document` (`document_id`, `employee_id`, `resume`, `resume_path`, `resume_filename`, `offer_letter`, `offer_letter_filename`, `offer_letter_path`, `joining_letter`, `joining_letter_filename`, `joining_letter_path`, `contract_paper`, `contract_paper_filename`, `contract_paper_path`, `id_proff`, `id_proff_filename`, `id_proff_path`, `other_document`, `other_document_filename`, `other_document_path`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_login`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_login` (
  `employee_login_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `activate` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employee_login`
--

INSERT INTO `tbl_employee_login` (`employee_login_id`, `employee_id`, `user_name`, `password`, `activate`) VALUES
(1, 1, 'employee', '46e96e9600c0ee62ee81f20a380ba5b6a7548601335d4f0f48627d06c4d518ba5a8c569b26875b6891882fa7ae1e492fe1a89e063309424e3537bbd17d039c4d', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_payroll`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_payroll` (
  `payroll_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `hourly_rate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`payroll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `event_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense`
--

CREATE TABLE IF NOT EXISTS `tbl_expense` (
  `expense_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `item_name` varchar(300) NOT NULL,
  `purchase_from` varchar(300) NOT NULL,
  `purchase_date` date NOT NULL,
  `amount` double NOT NULL,
  `expense_status` enum('pending','approved','cancel') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_bill_copy`
--

CREATE TABLE IF NOT EXISTS `tbl_expense_bill_copy` (
  `expense_bill_copy_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_id` int(11) NOT NULL,
  `bill_copy` text CHARACTER SET latin1 NOT NULL,
  `bill_copy_filename` text CHARACTER SET latin1 NOT NULL,
  `bill_copy_path` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`expense_bill_copy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gsettings`
--

CREATE TABLE IF NOT EXISTS `tbl_gsettings` (
  `id_gsettings` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `full_path` varchar(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_id` int(3) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `hotline` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `timezone_name` varchar(35) NOT NULL,
  PRIMARY KEY (`id_gsettings`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gsettings`
--

INSERT INTO `tbl_gsettings` (`id_gsettings`, `name`, `logo`, `full_path`, `email`, `address`, `city`, `country_id`, `phone`, `mobile`, `hotline`, `fax`, `website`, `currency`, `timezone_name`) VALUES
(1, 'HR - Lite', 'img/uploads/lite2.png', 'E:/xampp/htdocs/hr_lite_main/img/uploads/lite2.png', 'admin@example.com', 'Dhaka', 'Dhaka', 19, '', '01723611125', '', '', '', 'USD', 'Asia/Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE IF NOT EXISTS `tbl_holiday` (
  `holiday_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`holiday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hourly_rate`
--

CREATE TABLE IF NOT EXISTS `tbl_hourly_rate` (
  `hourly_rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `hourly_grade` varchar(200) NOT NULL,
  `hourly_rate` varchar(50) NOT NULL,
  `overtime_hours` varchar(20) NOT NULL,
  PRIMARY KEY (`hourly_rate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE IF NOT EXISTS `tbl_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `to` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text,
  `attach_filename` text,
  `message_time` datetime NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_history`
--

CREATE TABLE IF NOT EXISTS `tbl_item_history` (
  `item_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `inventory` int(5) NOT NULL,
  `purchase_date` date NOT NULL,
  PRIMARY KEY (`item_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_appliactions`
--

CREATE TABLE IF NOT EXISTS `tbl_job_appliactions` (
  `job_appliactions_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_circular_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `cover_letter` text NOT NULL,
  `resume` text NOT NULL,
  `application_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=pending 1=accept 2 = reject',
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_appliactions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_circular`
--

CREATE TABLE IF NOT EXISTS `tbl_job_circular` (
  `job_circular_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_position` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `last_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=publish 2=unpublish',
  `published_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_circular_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE IF NOT EXISTS `tbl_languages` (
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(2) DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`code`, `name`, `icon`, `active`) VALUES
('en', 'english', 'us', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_category`
--

CREATE TABLE IF NOT EXISTS `tbl_leave_category` (
  `leave_category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `leave_quota` int(2) NOT NULL,
  PRIMARY KEY (`leave_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locales`
--

CREATE TABLE IF NOT EXISTS `tbl_locales` (
  `locale` varchar(10) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_locales`
--

INSERT INTO `tbl_locales` (`locale`, `code`, `language`, `name`) VALUES
('aa_DJ', 'aa', 'afar', 'Afar (Djibouti)'),
('aa_ER', 'aa', 'afar', 'Afar (Eritrea)'),
('aa_ET', 'aa', 'afar', 'Afar (Ethiopia)'),
('af_ZA', 'af', 'afrikaans', 'Afrikaans (South Africa)'),
('am_ET', 'am', 'amharic', 'Amharic (Ethiopia)'),
('an_ES', 'an', 'aragonese', 'Aragonese (Spain)'),
('ar_AE', 'ar', 'arabic', 'Arabic (United Arab Emirates)'),
('ar_BH', 'ar', 'arabic', 'Arabic (Bahrain)'),
('ar_DZ', 'ar', 'arabic', 'Arabic (Algeria)'),
('ar_EG', 'ar', 'arabic', 'Arabic (Egypt)'),
('ar_IN', 'ar', 'arabic', 'Arabic (India)'),
('ar_IQ', 'ar', 'arabic', 'Arabic (Iraq)'),
('ar_JO', 'ar', 'arabic', 'Arabic (Jordan)'),
('ar_KW', 'ar', 'arabic', 'Arabic (Kuwait)'),
('ar_LB', 'ar', 'arabic', 'Arabic (Lebanon)'),
('ar_LY', 'ar', 'arabic', 'Arabic (Libya)'),
('ar_MA', 'ar', 'arabic', 'Arabic (Morocco)'),
('ar_OM', 'ar', 'arabic', 'Arabic (Oman)'),
('ar_QA', 'ar', 'arabic', 'Arabic (Qatar)'),
('ar_SA', 'ar', 'arabic', 'Arabic (Saudi Arabia)'),
('ar_SD', 'ar', 'arabic', 'Arabic (Sudan)'),
('ar_SY', 'ar', 'arabic', 'Arabic (Syria)'),
('ar_TN', 'ar', 'arabic', 'Arabic (Tunisia)'),
('ar_YE', 'ar', 'arabic', 'Arabic (Yemen)'),
('ast_ES', 'ast', 'asturian', 'Asturian (Spain)'),
('as_IN', 'as', 'assamese', 'Assamese (India)'),
('az_AZ', 'az', 'azerbaijani', 'Azerbaijani (Azerbaijan)'),
('az_TR', 'az', 'azerbaijani', 'Azerbaijani (Turkey)'),
('bem_ZM', 'bem', 'bemba', 'Bemba (Zambia)'),
('ber_DZ', 'ber', 'berber', 'Berber (Algeria)'),
('ber_MA', 'ber', 'berber', 'Berber (Morocco)'),
('be_BY', 'be', 'belarusian', 'Belarusian (Belarus)'),
('bg_BG', 'bg', 'bulgarian', 'Bulgarian (Bulgaria)'),
('bn_BD', 'bn', 'bengali', 'Bengali (Bangladesh)'),
('bn_IN', 'bn', 'bengali', 'Bengali (India)'),
('bo_CN', 'bo', 'tibetan', 'Tibetan (China)'),
('bo_IN', 'bo', 'tibetan', 'Tibetan (India)'),
('br_FR', 'br', 'breton', 'Breton (France)'),
('bs_BA', 'bs', 'bosnian', 'Bosnian (Bosnia and Herzegovina)'),
('byn_ER', 'byn', 'blin', 'Blin (Eritrea)'),
('ca_AD', 'ca', 'catalan', 'Catalan (Andorra)'),
('ca_ES', 'ca', 'catalan', 'Catalan (Spain)'),
('ca_FR', 'ca', 'catalan', 'Catalan (France)'),
('ca_IT', 'ca', 'catalan', 'Catalan (Italy)'),
('crh_UA', 'crh', 'crimean turkish', 'Crimean Turkish (Ukraine)'),
('csb_PL', 'csb', 'kashubian', 'Kashubian (Poland)'),
('cs_CZ', 'cs', 'czech', 'Czech (Czech Republic)'),
('cv_RU', 'cv', 'chuvash', 'Chuvash (Russia)'),
('cy_GB', 'cy', 'welsh', 'Welsh (United Kingdom)'),
('da_DK', 'da', 'danish', 'Danish (Denmark)'),
('de_AT', 'de', 'german', 'German (Austria)'),
('de_BE', 'de', 'german', 'German (Belgium)'),
('de_CH', 'de', 'german', 'German (Switzerland)'),
('de_DE', 'de', 'german', 'German (Germany)'),
('de_LI', 'de', 'german', 'German (Liechtenstein)'),
('de_LU', 'de', 'german', 'German (Luxembourg)'),
('dv_MV', 'dv', 'divehi', 'Divehi (Maldives)'),
('dz_BT', 'dz', 'dzongkha', 'Dzongkha (Bhutan)'),
('ee_GH', 'ee', 'ewe', 'Ewe (Ghana)'),
('el_CY', 'el', 'greek', 'Greek (Cyprus)'),
('el_GR', 'el', 'greek', 'Greek (Greece)'),
('en_AG', 'en', 'english', 'English (Antigua and Barbuda)'),
('en_AS', 'en', 'english', 'English (American Samoa)'),
('en_AU', 'en', 'english', 'English (Australia)'),
('en_BW', 'en', 'english', 'English (Botswana)'),
('en_CA', 'en', 'english', 'English (Canada)'),
('en_DK', 'en', 'english', 'English (Denmark)'),
('en_GB', 'en', 'english', 'English (United Kingdom)'),
('en_GU', 'en', 'english', 'English (Guam)'),
('en_HK', 'en', 'english', 'English (Hong Kong SAR China)'),
('en_IE', 'en', 'english', 'English (Ireland)'),
('en_IN', 'en', 'english', 'English (India)'),
('en_JM', 'en', 'english', 'English (Jamaica)'),
('en_MH', 'en', 'english', 'English (Marshall Islands)'),
('en_MP', 'en', 'english', 'English (Northern Mariana Islands)'),
('en_MU', 'en', 'english', 'English (Mauritius)'),
('en_NG', 'en', 'english', 'English (Nigeria)'),
('en_NZ', 'en', 'english', 'English (New Zealand)'),
('en_PH', 'en', 'english', 'English (Philippines)'),
('en_SG', 'en', 'english', 'English (Singapore)'),
('en_TT', 'en', 'english', 'English (Trinidad and Tobago)'),
('en_US', 'en', 'english', 'English (United States)'),
('en_VI', 'en', 'english', 'English (Virgin Islands)'),
('en_ZA', 'en', 'english', 'English (South Africa)'),
('en_ZM', 'en', 'english', 'English (Zambia)'),
('en_ZW', 'en', 'english', 'English (Zimbabwe)'),
('eo', 'eo', 'esperanto', 'Esperanto'),
('es_AR', 'es', 'spanish', 'Spanish (Argentina)'),
('es_BO', 'es', 'spanish', 'Spanish (Bolivia)'),
('es_CL', 'es', 'spanish', 'Spanish (Chile)'),
('es_CO', 'es', 'spanish', 'Spanish (Colombia)'),
('es_CR', 'es', 'spanish', 'Spanish (Costa Rica)'),
('es_DO', 'es', 'spanish', 'Spanish (Dominican Republic)'),
('es_EC', 'es', 'spanish', 'Spanish (Ecuador)'),
('es_ES', 'es', 'spanish', 'Spanish (Spain)'),
('es_GT', 'es', 'spanish', 'Spanish (Guatemala)'),
('es_HN', 'es', 'spanish', 'Spanish (Honduras)'),
('es_MX', 'es', 'spanish', 'Spanish (Mexico)'),
('es_NI', 'es', 'spanish', 'Spanish (Nicaragua)'),
('es_PA', 'es', 'spanish', 'Spanish (Panama)'),
('es_PE', 'es', 'spanish', 'Spanish (Peru)'),
('es_PR', 'es', 'spanish', 'Spanish (Puerto Rico)'),
('es_PY', 'es', 'spanish', 'Spanish (Paraguay)'),
('es_SV', 'es', 'spanish', 'Spanish (El Salvador)'),
('es_US', 'es', 'spanish', 'Spanish (United States)'),
('es_UY', 'es', 'spanish', 'Spanish (Uruguay)'),
('es_VE', 'es', 'spanish', 'Spanish (Venezuela)'),
('et_EE', 'et', 'estonian', 'Estonian (Estonia)'),
('eu_ES', 'eu', 'basque', 'Basque (Spain)'),
('eu_FR', 'eu', 'basque', 'Basque (France)'),
('fa_AF', 'fa', 'persian', 'Persian (Afghanistan)'),
('fa_IR', 'fa', 'persian', 'Persian (Iran)'),
('ff_SN', 'ff', 'fulah', 'Fulah (Senegal)'),
('fil_PH', 'fil', 'filipino', 'Filipino (Philippines)'),
('fi_FI', 'fi', 'finnish', 'Finnish (Finland)'),
('fo_FO', 'fo', 'faroese', 'Faroese (Faroe Islands)'),
('fr_BE', 'fr', 'french', 'French (Belgium)'),
('fr_BF', 'fr', 'french', 'French (Burkina Faso)'),
('fr_BI', 'fr', 'french', 'French (Burundi)'),
('fr_BJ', 'fr', 'french', 'French (Benin)'),
('fr_CA', 'fr', 'french', 'French (Canada)'),
('fr_CF', 'fr', 'french', 'French (Central African Republic)'),
('fr_CG', 'fr', 'french', 'French (Congo)'),
('fr_CH', 'fr', 'french', 'French (Switzerland)'),
('fr_CM', 'fr', 'french', 'French (Cameroon)'),
('fr_FR', 'fr', 'french', 'French (France)'),
('fr_GA', 'fr', 'french', 'French (Gabon)'),
('fr_GN', 'fr', 'french', 'French (Guinea)'),
('fr_GP', 'fr', 'french', 'French (Guadeloupe)'),
('fr_GQ', 'fr', 'french', 'French (Equatorial Guinea)'),
('fr_KM', 'fr', 'french', 'French (Comoros)'),
('fr_LU', 'fr', 'french', 'French (Luxembourg)'),
('fr_MC', 'fr', 'french', 'French (Monaco)'),
('fr_MG', 'fr', 'french', 'French (Madagascar)'),
('fr_ML', 'fr', 'french', 'French (Mali)'),
('fr_MQ', 'fr', 'french', 'French (Martinique)'),
('fr_NE', 'fr', 'french', 'French (Niger)'),
('fr_SN', 'fr', 'french', 'French (Senegal)'),
('fr_TD', 'fr', 'french', 'French (Chad)'),
('fr_TG', 'fr', 'french', 'French (Togo)'),
('fur_IT', 'fur', 'friulian', 'Friulian (Italy)'),
('fy_DE', 'fy', 'western frisian', 'Western Frisian (Germany)'),
('fy_NL', 'fy', 'western frisian', 'Western Frisian (Netherlands)'),
('ga_IE', 'ga', 'irish', 'Irish (Ireland)'),
('gd_GB', 'gd', 'scottish gaelic', 'Scottish Gaelic (United Kingdom)'),
('gez_ER', 'gez', 'geez', 'Geez (Eritrea)'),
('gez_ET', 'gez', 'geez', 'Geez (Ethiopia)'),
('gl_ES', 'gl', 'galician', 'Galician (Spain)'),
('gu_IN', 'gu', 'gujarati', 'Gujarati (India)'),
('gv_GB', 'gv', 'manx', 'Manx (United Kingdom)'),
('ha_NG', 'ha', 'hausa', 'Hausa (Nigeria)'),
('he_IL', 'he', 'hebrew', 'Hebrew (Israel)'),
('hi_IN', 'hi', 'hindi', 'Hindi (India)'),
('hr_HR', 'hr', 'croatian', 'Croatian (Croatia)'),
('hsb_DE', 'hsb', 'upper sorbian', 'Upper Sorbian (Germany)'),
('ht_HT', 'ht', 'haitian', 'Haitian (Haiti)'),
('hu_HU', 'hu', 'hungarian', 'Hungarian (Hungary)'),
('hy_AM', 'hy', 'armenian', 'Armenian (Armenia)'),
('ia', 'ia', 'interlingua', 'Interlingua'),
('id_ID', 'id', 'indonesian', 'Indonesian (Indonesia)'),
('ig_NG', 'ig', 'igbo', 'Igbo (Nigeria)'),
('ik_CA', 'ik', 'inupiaq', 'Inupiaq (Canada)'),
('is_IS', 'is', 'icelandic', 'Icelandic (Iceland)'),
('it_CH', 'it', 'italian', 'Italian (Switzerland)'),
('it_IT', 'it', 'italian', 'Italian (Italy)'),
('iu_CA', 'iu', 'inuktitut', 'Inuktitut (Canada)'),
('ja_JP', 'ja', 'japanese', 'Japanese (Japan)'),
('ka_GE', 'ka', 'georgian', 'Georgian (Georgia)'),
('kk_KZ', 'kk', 'kazakh', 'Kazakh (Kazakhstan)'),
('kl_GL', 'kl', 'kalaallisut', 'Kalaallisut (Greenland)'),
('km_KH', 'km', 'khmer', 'Khmer (Cambodia)'),
('kn_IN', 'kn', 'kannada', 'Kannada (India)'),
('kok_IN', 'kok', 'konkani', 'Konkani (India)'),
('ko_KR', 'ko', 'korean', 'Korean (South Korea)'),
('ks_IN', 'ks', 'kashmiri', 'Kashmiri (India)'),
('ku_TR', 'ku', 'kurdish', 'Kurdish (Turkey)'),
('kw_GB', 'kw', 'cornish', 'Cornish (United Kingdom)'),
('ky_KG', 'ky', 'kirghiz', 'Kirghiz (Kyrgyzstan)'),
('lg_UG', 'lg', 'ganda', 'Ganda (Uganda)'),
('li_BE', 'li', 'limburgish', 'Limburgish (Belgium)'),
('li_NL', 'li', 'limburgish', 'Limburgish (Netherlands)'),
('lo_LA', 'lo', 'lao', 'Lao (Laos)'),
('lt_LT', 'lt', 'lithuanian', 'Lithuanian (Lithuania)'),
('lv_LV', 'lv', 'latvian', 'Latvian (Latvia)'),
('mai_IN', 'mai', 'maithili', 'Maithili (India)'),
('mg_MG', 'mg', 'malagasy', 'Malagasy (Madagascar)'),
('mi_NZ', 'mi', 'maori', 'Maori (New Zealand)'),
('mk_MK', 'mk', 'macedonian', 'Macedonian (Macedonia)'),
('ml_IN', 'ml', 'malayalam', 'Malayalam (India)'),
('mn_MN', 'mn', 'mongolian', 'Mongolian (Mongolia)'),
('mr_IN', 'mr', 'marathi', 'Marathi (India)'),
('ms_BN', 'ms', 'malay', 'Malay (Brunei)'),
('ms_MY', 'ms', 'malay', 'Malay (Malaysia)'),
('mt_MT', 'mt', 'maltese', 'Maltese (Malta)'),
('my_MM', 'my', 'burmese', 'Burmese (Myanmar)'),
('naq_NA', 'naq', 'namibia', 'Namibia'),
('nb_NO', 'nb', 'norwegian bokmål', 'Norwegian Bokmål (Norway)'),
('nds_DE', 'nds', 'low german', 'Low German (Germany)'),
('nds_NL', 'nds', 'low german', 'Low German (Netherlands)'),
('ne_NP', 'ne', 'nepali', 'Nepali (Nepal)'),
('nl_AW', 'nl', 'dutch', 'Dutch (Aruba)'),
('nl_BE', 'nl', 'dutch', 'Dutch (Belgium)'),
('nl_NL', 'nl', 'dutch', 'Dutch (Netherlands)'),
('nn_NO', 'nn', 'norwegian nynorsk', 'Norwegian Nynorsk (Norway)'),
('no_NO', 'no', 'norwegian', 'Norwegian (Norway)'),
('nr_ZA', 'nr', 'south ndebele', 'South Ndebele (South Africa)'),
('nso_ZA', 'nso', 'northern sotho', 'Northern Sotho (South Africa)'),
('oc_FR', 'oc', 'occitan', 'Occitan (France)'),
('om_ET', 'om', 'oromo', 'Oromo (Ethiopia)'),
('om_KE', 'om', 'oromo', 'Oromo (Kenya)'),
('or_IN', 'or', 'oriya', 'Oriya (India)'),
('os_RU', 'os', 'ossetic', 'Ossetic (Russia)'),
('pap_AN', 'pap', 'papiamento', 'Papiamento (Netherlands Antilles)'),
('pa_IN', 'pa', 'punjabi', 'Punjabi (India)'),
('pa_PK', 'pa', 'punjabi', 'Punjabi (Pakistan)'),
('pl_PL', 'pl', 'polish', 'Polish (Poland)'),
('ps_AF', 'ps', 'pashto', 'Pashto (Afghanistan)'),
('pt_BR', 'pt', 'portuguese', 'Portuguese (Brazil)'),
('pt_GW', 'pt', 'portuguese', 'Portuguese (Guinea-Bissau)'),
('pt_PT', 'pt', 'portuguese', 'Portuguese (Portugal)'),
('ro_MD', 'ro', 'romanian', 'Romanian (Moldova)'),
('ro_RO', 'ro', 'romanian', 'Romanian (Romania)'),
('ru_RU', 'ru', 'russian', 'Russian (Russia)'),
('ru_UA', 'ru', 'russian', 'Russian (Ukraine)'),
('rw_RW', 'rw', 'kinyarwanda', 'Kinyarwanda (Rwanda)'),
('sa_IN', 'sa', 'sanskrit', 'Sanskrit (India)'),
('sc_IT', 'sc', 'sardinian', 'Sardinian (Italy)'),
('sd_IN', 'sd', 'sindhi', 'Sindhi (India)'),
('seh_MZ', 'seh', 'sena', 'Sena (Mozambique)'),
('se_NO', 'se', 'northern sami', 'Northern Sami (Norway)'),
('sid_ET', 'sid', 'sidamo', 'Sidamo (Ethiopia)'),
('si_LK', 'si', 'sinhala', 'Sinhala (Sri Lanka)'),
('sk_SK', 'sk', 'slovak', 'Slovak (Slovakia)'),
('sl_SI', 'sl', 'slovenian', 'Slovenian (Slovenia)'),
('sn_ZW', 'sn', 'shona', 'Shona (Zimbabwe)'),
('so_DJ', 'so', 'somali', 'Somali (Djibouti)'),
('so_ET', 'so', 'somali', 'Somali (Ethiopia)'),
('so_KE', 'so', 'somali', 'Somali (Kenya)'),
('so_SO', 'so', 'somali', 'Somali (Somalia)'),
('sq_AL', 'sq', 'albanian', 'Albanian (Albania)'),
('sq_MK', 'sq', 'albanian', 'Albanian (Macedonia)'),
('sr_BA', 'sr', 'serbian', 'Serbian (Bosnia and Herzegovina)'),
('sr_ME', 'sr', 'serbian', 'Serbian (Montenegro)'),
('sr_RS', 'sr', 'serbian', 'Serbian (Serbia)'),
('ss_ZA', 'ss', 'swati', 'Swati (South Africa)'),
('st_ZA', 'st', 'southern sotho', 'Southern Sotho (South Africa)'),
('sv_FI', 'sv', 'swedish', 'Swedish (Finland)'),
('sv_SE', 'sv', 'swedish', 'Swedish (Sweden)'),
('sw_KE', 'sw', 'swahili', 'Swahili (Kenya)'),
('sw_TZ', 'sw', 'swahili', 'Swahili (Tanzania)'),
('ta_IN', 'ta', 'tamil', 'Tamil (India)'),
('teo_UG', 'teo', 'teso', 'Teso (Uganda)'),
('te_IN', 'te', 'telugu', 'Telugu (India)'),
('tg_TJ', 'tg', 'tajik', 'Tajik (Tajikistan)'),
('th_TH', 'th', 'thai', 'Thai (Thailand)'),
('tig_ER', 'tig', 'tigre', 'Tigre (Eritrea)'),
('ti_ER', 'ti', 'tigrinya', 'Tigrinya (Eritrea)'),
('ti_ET', 'ti', 'tigrinya', 'Tigrinya (Ethiopia)'),
('tk_TM', 'tk', 'turkmen', 'Turkmen (Turkmenistan)'),
('tl_PH', 'tl', 'tagalog', 'Tagalog (Philippines)'),
('tn_ZA', 'tn', 'tswana', 'Tswana (South Africa)'),
('to_TO', 'to', 'tongan', 'Tongan (Tonga)'),
('tr_CY', 'tr', 'turkish', 'Turkish (Cyprus)'),
('tr_TR', 'tr', 'turkish', 'Turkish (Turkey)'),
('ts_ZA', 'ts', 'tsonga', 'Tsonga (South Africa)'),
('tt_RU', 'tt', 'tatar', 'Tatar (Russia)'),
('ug_CN', 'ug', 'uighur', 'Uighur (China)'),
('uk_UA', 'uk', 'ukrainian', 'Ukrainian (Ukraine)'),
('ur_PK', 'ur', 'urdu', 'Urdu (Pakistan)'),
('uz_UZ', 'uz', 'uzbek', 'Uzbek (Uzbekistan)'),
('ve_ZA', 've', 'venda', 'Venda (South Africa)'),
('vi_VN', 'vi', 'vietnamese', 'Vietnamese (Vietnam)'),
('wa_BE', 'wa', 'walloon', 'Walloon (Belgium)'),
('wo_SN', 'wo', 'wolof', 'Wolof (Senegal)'),
('xh_ZA', 'xh', 'xhosa', 'Xhosa (South Africa)'),
('yi_US', 'yi', 'yiddish', 'Yiddish (United States)'),
('yo_NG', 'yo', 'yoruba', 'Yoruba (Nigeria)'),
('zh_CN', 'zh', 'chinese', 'Chinese (China)'),
('zh_HK', 'zh', 'chinese', 'Chinese (Hong Kong SAR China)'),
('zh_SG', 'zh', 'chinese', 'Chinese (Singapore)'),
('zh_TW', 'zh', 'chinese', 'Chinese (Taiwan)'),
('zu_ZA', 'zu', 'zulu', 'Zulu (South Africa)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `label`, `link`, `icon`, `parent`, `sort`) VALUES
(1, 'dashboard', 'admin/dashboard', 'fa fa-dashboard', 0, 1),
(57, 'mailbox', '#', 'fa fa-credit-card', 0, 2),
(58, 'inbox', 'admin/mailbox/inbox', 'fa fa-inbox', 57, 1),
(59, 'draft', 'admin/mailbox/draft', 'fa fa-files-o', 57, 2),
(60, 'sent', 'admin/mailbox/sent', 'fa fa-paper-plane', 57, 3),
(61, 'task', 'admin/task/all_task', 'fa fa-tasks', 0, 3),
(64, 'notice', 'admin/notice', 'entypo-docs', 0, 4),
(65, 'events', 'admin/event/events', 'entypo-newspaper', 0, 5),
(66, 'attendance', '#', 'fa fa-file-text', 0, 6),
(67, 'timechange_request', 'admin/attendance/timechange_request', 'fa fa-file-text-o', 66, 1),
(68, 'attendance_report', 'admin/attendance/attendance_report', 'fa fa-file-text', 66, 2),
(69, 'overtime', 'admin/attendance/overtime', 'fa fa-dashboard', 0, 7),
(70, 'application_list', 'admin/application_list', 'fa fa-rocket', 0, 8),
(71, 'stock', '#', 'fa fa-bitbucket', 0, 9),
(72, 'expenses', 'admin/expense/expenses', 'fa fa-delicious', 0, 10),
(73, 'award', 'admin/award/employee_award', 'fa fa-trophy', 0, 11),
(74, 'payroll', '#', 'fa fa-usd', 0, 12),
(75, 'set_salary_details', 'admin/payroll/manage_salary_details', 'fa fa-usd', 74, 2),
(76, 'employee_salary_list', 'admin/payroll/employee_salary_list', 'entypo-users', 74, 3),
(77, 'make_payment', 'admin/payroll/make_payment', 'fa fa-tasks', 74, 4),
(78, 'generate_payslip', 'admin/payroll/generate_payslip', 'fa fa-file-text', 74, 5),
(80, 'training', 'admin/training/all_training', 'fa fa-sliders', 0, 14),
(81, 'department', 'admin/department/department_list', 'entypo-list-add', 0, 15),
(83, 'employee', '#', 'fa fa-user', 0, 16),
(84, 'manage_employee', 'admin/employee/employees', 'entypo-users', 83, 1),
(85, 'set_access_role', 'admin/user/user_list', 'fa fa-unlock-alt', 83, 2),
(86, 'settings', '#', 'fa fa-cogs', 0, 17),
(87, 'general_settings', 'admin/settings/general_settings', 'fa fa-cog', 86, 1),
(88, 'set_working_days', 'admin/settings/set_working_days', 'fa fa-calendar', 86, 2),
(89, 'personal_event', 'admin/settings/view_personal_event', 'fa fa-gift', 86, 3),
(90, 'leave_category', 'admin/settings/leave_category', 'fa fa-dedent', 86, 4),
(91, 'notification_settings', 'admin/settings/notification_settings', 'fa fa-bell-o', 86, 5),
(92, 'language_settings', 'admin/settings/language_settings', 'fa fa-language', 86, 6),
(93, 'database_backup', 'admin/settings/database_backup', 'fa fa-database', 0, 18),
(94, 'stock_category', 'admin/stock/stock_category', 'fa fa-dedent', 71, 1),
(95, 'add_stock', 'admin/stock/add_stock', 'fa fa-plus', 71, 2),
(96, 'stock_list', 'admin/stock/stock_list', 'fa fa-file-text-o', 71, 3),
(97, 'hourly_rate', 'admin/payroll/hourly_rate', 'fa fa-files-o', 74, 1),
(98, 'trash', 'admin/mailbox/trash', 'fa fa-trash-o', 57, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE IF NOT EXISTS `tbl_notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text,
  `employee_id` int(11) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL COMMENT '0 = unpublished, 1 = published',
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_overtime`
--

CREATE TABLE IF NOT EXISTS `tbl_overtime` (
  `overtime_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `overtime_date` date NOT NULL,
  `overtime_hours` varchar(20) NOT NULL,
  PRIMARY KEY (`overtime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payment` (
  `salary_payment_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `comments` text NOT NULL,
  `hourly_grade` varchar(200) NOT NULL,
  `hourly_rate` varchar(200) NOT NULL,
  `total_working_hour` varchar(200) NOT NULL,
  `total_working_amount` varchar(200) NOT NULL,
  `overitme_amount` varchar(200) NOT NULL,
  `overtime_hours` varchar(200) NOT NULL,
  `total_overtime_hour` varchar(20) NOT NULL,
  `award_name` text NOT NULL,
  `award_amount` varchar(200) NOT NULL DEFAULT '0',
  `payment_month` varchar(20) NOT NULL,
  `paid_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`salary_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payslip`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payslip` (
  `payslip_id` int(5) NOT NULL AUTO_INCREMENT,
  `payslip_number` varchar(100) DEFAULT NULL,
  `salary_payment_id` int(5) NOT NULL,
  `payslip_generate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`payslip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sent`
--

CREATE TABLE IF NOT EXISTS `tbl_sent` (
  `sent_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `to` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text,
  `attach_filename` text,
  `message_time` datetime NOT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`sent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_sub_category_id` int(11) NOT NULL,
  `item_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `total_stock` int(5) DEFAULT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_category`
--

CREATE TABLE IF NOT EXISTS `tbl_stock_category` (
  `stock_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_category` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`stock_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_sub_category`
--

CREATE TABLE IF NOT EXISTS `tbl_stock_sub_category` (
  `stock_sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_category_id` int(11) NOT NULL,
  `stock_sub_category` varchar(200) NOT NULL,
  PRIMARY KEY (`stock_sub_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE IF NOT EXISTS `tbl_task` (
  `task_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(200) NOT NULL,
  `task_description` text NOT NULL,
  `assigned_to` text NOT NULL,
  `task_start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `task_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `task_status` tinyint(1) NOT NULL COMMENT '0 = Pending, 1=Active, 2=Complete',
  `task_progress` int(2) NOT NULL,
  `task_hour` varchar(10) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_attachment`
--

CREATE TABLE IF NOT EXISTS `tbl_task_attachment` (
  `task_attachment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_id` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `upload_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`task_attachment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_task_comment` (
  `task_comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_id` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`task_comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_uploaded_files`
--

CREATE TABLE IF NOT EXISTS `tbl_task_uploaded_files` (
  `uploaded_files_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_attachment_id` int(11) NOT NULL,
  `files` text NOT NULL,
  `uploaded_path` text NOT NULL,
  `file_name` text NOT NULL,
  `size` int(10) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `is_image` int(2) NOT NULL,
  `image_width` int(5) NOT NULL,
  `image_height` int(5) NOT NULL,
  PRIMARY KEY (`uploaded_files_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timezone`
--

CREATE TABLE IF NOT EXISTS `tbl_timezone` (
  `timezone_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_code` char(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `timezone_name` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`timezone_id`),
  KEY `idx_zone_name` (`timezone_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=417 ;

--
-- Dumping data for table `tbl_timezone`
--

INSERT INTO `tbl_timezone` (`timezone_id`, `country_code`, `timezone_name`) VALUES
(1, 'AD', 'Europe/Andorra'),
(2, 'AE', 'Asia/Dubai'),
(3, 'AF', 'Asia/Kabul'),
(4, 'AG', 'America/Antigua'),
(5, 'AI', 'America/Anguilla'),
(6, 'AL', 'Europe/Tirane'),
(7, 'AM', 'Asia/Yerevan'),
(8, 'AO', 'Africa/Luanda'),
(9, 'AQ', 'Antarctica/McMurdo'),
(10, 'AQ', 'Antarctica/Rothera'),
(11, 'AQ', 'Antarctica/Palmer'),
(12, 'AQ', 'Antarctica/Mawson'),
(13, 'AQ', 'Antarctica/Davis'),
(14, 'AQ', 'Antarctica/Casey'),
(15, 'AQ', 'Antarctica/Vostok'),
(16, 'AQ', 'Antarctica/DumontDUrville'),
(17, 'AQ', 'Antarctica/Syowa'),
(18, 'AQ', 'Antarctica/Troll'),
(19, 'AR', 'America/Argentina/Buenos_Aires'),
(20, 'AR', 'America/Argentina/Cordoba'),
(21, 'AR', 'America/Argentina/Salta'),
(22, 'AR', 'America/Argentina/Jujuy'),
(23, 'AR', 'America/Argentina/Tucuman'),
(24, 'AR', 'America/Argentina/Catamarca'),
(25, 'AR', 'America/Argentina/La_Rioja'),
(26, 'AR', 'America/Argentina/San_Juan'),
(27, 'AR', 'America/Argentina/Mendoza'),
(28, 'AR', 'America/Argentina/San_Luis'),
(29, 'AR', 'America/Argentina/Rio_Gallegos'),
(30, 'AR', 'America/Argentina/Ushuaia'),
(31, 'AS', 'Pacific/Pago_Pago'),
(32, 'AT', 'Europe/Vienna'),
(33, 'AU', 'Australia/Lord_Howe'),
(34, 'AU', 'Antarctica/Macquarie'),
(35, 'AU', 'Australia/Hobart'),
(36, 'AU', 'Australia/Currie'),
(37, 'AU', 'Australia/Melbourne'),
(38, 'AU', 'Australia/Sydney'),
(39, 'AU', 'Australia/Broken_Hill'),
(40, 'AU', 'Australia/Brisbane'),
(41, 'AU', 'Australia/Lindeman'),
(42, 'AU', 'Australia/Adelaide'),
(43, 'AU', 'Australia/Darwin'),
(44, 'AU', 'Australia/Perth'),
(45, 'AU', 'Australia/Eucla'),
(46, 'AW', 'America/Aruba'),
(47, 'AX', 'Europe/Mariehamn'),
(48, 'AZ', 'Asia/Baku'),
(49, 'BA', 'Europe/Sarajevo'),
(50, 'BB', 'America/Barbados'),
(51, 'BD', 'Asia/Dhaka'),
(52, 'BE', 'Europe/Brussels'),
(53, 'BF', 'Africa/Ouagadougou'),
(54, 'BG', 'Europe/Sofia'),
(55, 'BH', 'Asia/Bahrain'),
(56, 'BI', 'Africa/Bujumbura'),
(57, 'BJ', 'Africa/Porto-Novo'),
(58, 'BL', 'America/St_Barthelemy'),
(59, 'BM', 'Atlantic/Bermuda'),
(60, 'BN', 'Asia/Brunei'),
(61, 'BO', 'America/La_Paz'),
(62, 'BQ', 'America/Kralendijk'),
(63, 'BR', 'America/Noronha'),
(64, 'BR', 'America/Belem'),
(65, 'BR', 'America/Fortaleza'),
(66, 'BR', 'America/Recife'),
(67, 'BR', 'America/Araguaina'),
(68, 'BR', 'America/Maceio'),
(69, 'BR', 'America/Bahia'),
(70, 'BR', 'America/Sao_Paulo'),
(71, 'BR', 'America/Campo_Grande'),
(72, 'BR', 'America/Cuiaba'),
(73, 'BR', 'America/Santarem'),
(74, 'BR', 'America/Porto_Velho'),
(75, 'BR', 'America/Boa_Vista'),
(76, 'BR', 'America/Manaus'),
(77, 'BR', 'America/Eirunepe'),
(78, 'BR', 'America/Rio_Branco'),
(79, 'BS', 'America/Nassau'),
(80, 'BT', 'Asia/Thimphu'),
(81, 'BW', 'Africa/Gaborone'),
(82, 'BY', 'Europe/Minsk'),
(83, 'BZ', 'America/Belize'),
(84, 'CA', 'America/St_Johns'),
(85, 'CA', 'America/Halifax'),
(86, 'CA', 'America/Glace_Bay'),
(87, 'CA', 'America/Moncton'),
(88, 'CA', 'America/Goose_Bay'),
(89, 'CA', 'America/Blanc-Sablon'),
(90, 'CA', 'America/Toronto'),
(91, 'CA', 'America/Nipigon'),
(92, 'CA', 'America/Thunder_Bay'),
(93, 'CA', 'America/Iqaluit'),
(94, 'CA', 'America/Pangnirtung'),
(95, 'CA', 'America/Resolute'),
(96, 'CA', 'America/Atikokan'),
(97, 'CA', 'America/Rankin_Inlet'),
(98, 'CA', 'America/Winnipeg'),
(99, 'CA', 'America/Rainy_River'),
(100, 'CA', 'America/Regina'),
(101, 'CA', 'America/Swift_Current'),
(102, 'CA', 'America/Edmonton'),
(103, 'CA', 'America/Cambridge_Bay'),
(104, 'CA', 'America/Yellowknife'),
(105, 'CA', 'America/Inuvik'),
(106, 'CA', 'America/Creston'),
(107, 'CA', 'America/Dawson_Creek'),
(108, 'CA', 'America/Vancouver'),
(109, 'CA', 'America/Whitehorse'),
(110, 'CA', 'America/Dawson'),
(111, 'CC', 'Indian/Cocos'),
(112, 'CD', 'Africa/Kinshasa'),
(113, 'CD', 'Africa/Lubumbashi'),
(114, 'CF', 'Africa/Bangui'),
(115, 'CG', 'Africa/Brazzaville'),
(116, 'CH', 'Europe/Zurich'),
(117, 'CI', 'Africa/Abidjan'),
(118, 'CK', 'Pacific/Rarotonga'),
(119, 'CL', 'America/Santiago'),
(120, 'CL', 'Pacific/Easter'),
(121, 'CM', 'Africa/Douala'),
(122, 'CN', 'Asia/Shanghai'),
(123, 'CN', 'Asia/Urumqi'),
(124, 'CO', 'America/Bogota'),
(125, 'CR', 'America/Costa_Rica'),
(126, 'CU', 'America/Havana'),
(127, 'CV', 'Atlantic/Cape_Verde'),
(128, 'CW', 'America/Curacao'),
(129, 'CX', 'Indian/Christmas'),
(130, 'CY', 'Asia/Nicosia'),
(131, 'CZ', 'Europe/Prague'),
(132, 'DE', 'Europe/Berlin'),
(133, 'DE', 'Europe/Busingen'),
(134, 'DJ', 'Africa/Djibouti'),
(135, 'DK', 'Europe/Copenhagen'),
(136, 'DM', 'America/Dominica'),
(137, 'DO', 'America/Santo_Domingo'),
(138, 'DZ', 'Africa/Algiers'),
(139, 'EC', 'America/Guayaquil'),
(140, 'EC', 'Pacific/Galapagos'),
(141, 'EE', 'Europe/Tallinn'),
(142, 'EG', 'Africa/Cairo'),
(143, 'EH', 'Africa/El_Aaiun'),
(144, 'ER', 'Africa/Asmara'),
(145, 'ES', 'Europe/Madrid'),
(146, 'ES', 'Africa/Ceuta'),
(147, 'ES', 'Atlantic/Canary'),
(148, 'ET', 'Africa/Addis_Ababa'),
(149, 'FI', 'Europe/Helsinki'),
(150, 'FJ', 'Pacific/Fiji'),
(151, 'FK', 'Atlantic/Stanley'),
(152, 'FM', 'Pacific/Chuuk'),
(153, 'FM', 'Pacific/Pohnpei'),
(154, 'FM', 'Pacific/Kosrae'),
(155, 'FO', 'Atlantic/Faroe'),
(156, 'FR', 'Europe/Paris'),
(157, 'GA', 'Africa/Libreville'),
(158, 'GB', 'Europe/London'),
(159, 'GD', 'America/Grenada'),
(160, 'GE', 'Asia/Tbilisi'),
(161, 'GF', 'America/Cayenne'),
(162, 'GG', 'Europe/Guernsey'),
(163, 'GH', 'Africa/Accra'),
(164, 'GI', 'Europe/Gibraltar'),
(165, 'GL', 'America/Godthab'),
(166, 'GL', 'America/Danmarkshavn'),
(167, 'GL', 'America/Scoresbysund'),
(168, 'GL', 'America/Thule'),
(169, 'GM', 'Africa/Banjul'),
(170, 'GN', 'Africa/Conakry'),
(171, 'GP', 'America/Guadeloupe'),
(172, 'GQ', 'Africa/Malabo'),
(173, 'GR', 'Europe/Athens'),
(174, 'GS', 'Atlantic/South_Georgia'),
(175, 'GT', 'America/Guatemala'),
(176, 'GU', 'Pacific/Guam'),
(177, 'GW', 'Africa/Bissau'),
(178, 'GY', 'America/Guyana'),
(179, 'HK', 'Asia/Hong_Kong'),
(180, 'HN', 'America/Tegucigalpa'),
(181, 'HR', 'Europe/Zagreb'),
(182, 'HT', 'America/Port-au-Prince'),
(183, 'HU', 'Europe/Budapest'),
(184, 'ID', 'Asia/Jakarta'),
(185, 'ID', 'Asia/Pontianak'),
(186, 'ID', 'Asia/Makassar'),
(187, 'ID', 'Asia/Jayapura'),
(188, 'IE', 'Europe/Dublin'),
(189, 'IL', 'Asia/Jerusalem'),
(190, 'IM', 'Europe/Isle_of_Man'),
(191, 'IN', 'Asia/Kolkata'),
(192, 'IO', 'Indian/Chagos'),
(193, 'IQ', 'Asia/Baghdad'),
(194, 'IR', 'Asia/Tehran'),
(195, 'IS', 'Atlantic/Reykjavik'),
(196, 'IT', 'Europe/Rome'),
(197, 'JE', 'Europe/Jersey'),
(198, 'JM', 'America/Jamaica'),
(199, 'JO', 'Asia/Amman'),
(200, 'JP', 'Asia/Tokyo'),
(201, 'KE', 'Africa/Nairobi'),
(202, 'KG', 'Asia/Bishkek'),
(203, 'KH', 'Asia/Phnom_Penh'),
(204, 'KI', 'Pacific/Tarawa'),
(205, 'KI', 'Pacific/Enderbury'),
(206, 'KI', 'Pacific/Kiritimati'),
(207, 'KM', 'Indian/Comoro'),
(208, 'KN', 'America/St_Kitts'),
(209, 'KP', 'Asia/Pyongyang'),
(210, 'KR', 'Asia/Seoul'),
(211, 'KW', 'Asia/Kuwait'),
(212, 'KY', 'America/Cayman'),
(213, 'KZ', 'Asia/Almaty'),
(214, 'KZ', 'Asia/Qyzylorda'),
(215, 'KZ', 'Asia/Aqtobe'),
(216, 'KZ', 'Asia/Aqtau'),
(217, 'KZ', 'Asia/Oral'),
(218, 'LA', 'Asia/Vientiane'),
(219, 'LB', 'Asia/Beirut'),
(220, 'LC', 'America/St_Lucia'),
(221, 'LI', 'Europe/Vaduz'),
(222, 'LK', 'Asia/Colombo'),
(223, 'LR', 'Africa/Monrovia'),
(224, 'LS', 'Africa/Maseru'),
(225, 'LT', 'Europe/Vilnius'),
(226, 'LU', 'Europe/Luxembourg'),
(227, 'LV', 'Europe/Riga'),
(228, 'LY', 'Africa/Tripoli'),
(229, 'MA', 'Africa/Casablanca'),
(230, 'MC', 'Europe/Monaco'),
(231, 'MD', 'Europe/Chisinau'),
(232, 'ME', 'Europe/Podgorica'),
(233, 'MF', 'America/Marigot'),
(234, 'MG', 'Indian/Antananarivo'),
(235, 'MH', 'Pacific/Majuro'),
(236, 'MH', 'Pacific/Kwajalein'),
(237, 'MK', 'Europe/Skopje'),
(238, 'ML', 'Africa/Bamako'),
(239, 'MM', 'Asia/Rangoon'),
(240, 'MN', 'Asia/Ulaanbaatar'),
(241, 'MN', 'Asia/Hovd'),
(242, 'MN', 'Asia/Choibalsan'),
(243, 'MO', 'Asia/Macau'),
(244, 'MP', 'Pacific/Saipan'),
(245, 'MQ', 'America/Martinique'),
(246, 'MR', 'Africa/Nouakchott'),
(247, 'MS', 'America/Montserrat'),
(248, 'MT', 'Europe/Malta'),
(249, 'MU', 'Indian/Mauritius'),
(250, 'MV', 'Indian/Maldives'),
(251, 'MW', 'Africa/Blantyre'),
(252, 'MX', 'America/Mexico_City'),
(253, 'MX', 'America/Cancun'),
(254, 'MX', 'America/Merida'),
(255, 'MX', 'America/Monterrey'),
(256, 'MX', 'America/Matamoros'),
(257, 'MX', 'America/Mazatlan'),
(258, 'MX', 'America/Chihuahua'),
(259, 'MX', 'America/Ojinaga'),
(260, 'MX', 'America/Hermosillo'),
(261, 'MX', 'America/Tijuana'),
(262, 'MX', 'America/Santa_Isabel'),
(263, 'MX', 'America/Bahia_Banderas'),
(264, 'MY', 'Asia/Kuala_Lumpur'),
(265, 'MY', 'Asia/Kuching'),
(266, 'MZ', 'Africa/Maputo'),
(267, 'NA', 'Africa/Windhoek'),
(268, 'NC', 'Pacific/Noumea'),
(269, 'NE', 'Africa/Niamey'),
(270, 'NF', 'Pacific/Norfolk'),
(271, 'NG', 'Africa/Lagos'),
(272, 'NI', 'America/Managua'),
(273, 'NL', 'Europe/Amsterdam'),
(274, 'NO', 'Europe/Oslo'),
(275, 'NP', 'Asia/Kathmandu'),
(276, 'NR', 'Pacific/Nauru'),
(277, 'NU', 'Pacific/Niue'),
(278, 'NZ', 'Pacific/Auckland'),
(279, 'NZ', 'Pacific/Chatham'),
(280, 'OM', 'Asia/Muscat'),
(281, 'PA', 'America/Panama'),
(282, 'PE', 'America/Lima'),
(283, 'PF', 'Pacific/Tahiti'),
(284, 'PF', 'Pacific/Marquesas'),
(285, 'PF', 'Pacific/Gambier'),
(286, 'PG', 'Pacific/Port_Moresby'),
(287, 'PG', 'Pacific/Bougainville'),
(288, 'PH', 'Asia/Manila'),
(289, 'PK', 'Asia/Karachi'),
(290, 'PL', 'Europe/Warsaw'),
(291, 'PM', 'America/Miquelon'),
(292, 'PN', 'Pacific/Pitcairn'),
(293, 'PR', 'America/Puerto_Rico'),
(294, 'PS', 'Asia/Gaza'),
(295, 'PS', 'Asia/Hebron'),
(296, 'PT', 'Europe/Lisbon'),
(297, 'PT', 'Atlantic/Madeira'),
(298, 'PT', 'Atlantic/Azores'),
(299, 'PW', 'Pacific/Palau'),
(300, 'PY', 'America/Asuncion'),
(301, 'QA', 'Asia/Qatar'),
(302, 'RE', 'Indian/Reunion'),
(303, 'RO', 'Europe/Bucharest'),
(304, 'RS', 'Europe/Belgrade'),
(305, 'RU', 'Europe/Kaliningrad'),
(306, 'RU', 'Europe/Moscow'),
(307, 'RU', 'Europe/Simferopol'),
(308, 'RU', 'Europe/Volgograd'),
(309, 'RU', 'Europe/Samara'),
(310, 'RU', 'Asia/Yekaterinburg'),
(311, 'RU', 'Asia/Omsk'),
(312, 'RU', 'Asia/Novosibirsk'),
(313, 'RU', 'Asia/Novokuznetsk'),
(314, 'RU', 'Asia/Krasnoyarsk'),
(315, 'RU', 'Asia/Irkutsk'),
(316, 'RU', 'Asia/Chita'),
(317, 'RU', 'Asia/Yakutsk'),
(318, 'RU', 'Asia/Khandyga'),
(319, 'RU', 'Asia/Vladivostok'),
(320, 'RU', 'Asia/Sakhalin'),
(321, 'RU', 'Asia/Ust-Nera'),
(322, 'RU', 'Asia/Magadan'),
(323, 'RU', 'Asia/Srednekolymsk'),
(324, 'RU', 'Asia/Kamchatka'),
(325, 'RU', 'Asia/Anadyr'),
(326, 'RW', 'Africa/Kigali'),
(327, 'SA', 'Asia/Riyadh'),
(328, 'SB', 'Pacific/Guadalcanal'),
(329, 'SC', 'Indian/Mahe'),
(330, 'SD', 'Africa/Khartoum'),
(331, 'SE', 'Europe/Stockholm'),
(332, 'SG', 'Asia/Singapore'),
(333, 'SH', 'Atlantic/St_Helena'),
(334, 'SI', 'Europe/Ljubljana'),
(335, 'SJ', 'Arctic/Longyearbyen'),
(336, 'SK', 'Europe/Bratislava'),
(337, 'SL', 'Africa/Freetown'),
(338, 'SM', 'Europe/San_Marino'),
(339, 'SN', 'Africa/Dakar'),
(340, 'SO', 'Africa/Mogadishu'),
(341, 'SR', 'America/Paramaribo'),
(342, 'SS', 'Africa/Juba'),
(343, 'ST', 'Africa/Sao_Tome'),
(344, 'SV', 'America/El_Salvador'),
(345, 'SX', 'America/Lower_Princes'),
(346, 'SY', 'Asia/Damascus'),
(347, 'SZ', 'Africa/Mbabane'),
(348, 'TC', 'America/Grand_Turk'),
(349, 'TD', 'Africa/Ndjamena'),
(350, 'TF', 'Indian/Kerguelen'),
(351, 'TG', 'Africa/Lome'),
(352, 'TH', 'Asia/Bangkok'),
(353, 'TJ', 'Asia/Dushanbe'),
(354, 'TK', 'Pacific/Fakaofo'),
(355, 'TL', 'Asia/Dili'),
(356, 'TM', 'Asia/Ashgabat'),
(357, 'TN', 'Africa/Tunis'),
(358, 'TO', 'Pacific/Tongatapu'),
(359, 'TR', 'Europe/Istanbul'),
(360, 'TT', 'America/Port_of_Spain'),
(361, 'TV', 'Pacific/Funafuti'),
(362, 'TW', 'Asia/Taipei'),
(363, 'TZ', 'Africa/Dar_es_Salaam'),
(364, 'UA', 'Europe/Kiev'),
(365, 'UA', 'Europe/Uzhgorod'),
(366, 'UA', 'Europe/Zaporozhye'),
(367, 'UG', 'Africa/Kampala'),
(368, 'UM', 'Pacific/Johnston'),
(369, 'UM', 'Pacific/Midway'),
(370, 'UM', 'Pacific/Wake'),
(371, 'US', 'America/New_York'),
(372, 'US', 'America/Detroit'),
(373, 'US', 'America/Kentucky/Louisville'),
(374, 'US', 'America/Kentucky/Monticello'),
(375, 'US', 'America/Indiana/Indianapolis'),
(376, 'US', 'America/Indiana/Vincennes'),
(377, 'US', 'America/Indiana/Winamac'),
(378, 'US', 'America/Indiana/Marengo'),
(379, 'US', 'America/Indiana/Petersburg'),
(380, 'US', 'America/Indiana/Vevay'),
(381, 'US', 'America/Chicago'),
(382, 'US', 'America/Indiana/Tell_City'),
(383, 'US', 'America/Indiana/Knox'),
(384, 'US', 'America/Menominee'),
(385, 'US', 'America/North_Dakota/Center'),
(386, 'US', 'America/North_Dakota/New_Salem'),
(387, 'US', 'America/North_Dakota/Beulah'),
(388, 'US', 'America/Denver'),
(389, 'US', 'America/Boise'),
(390, 'US', 'America/Phoenix'),
(391, 'US', 'America/Los_Angeles'),
(392, 'US', 'America/Metlakatla'),
(393, 'US', 'America/Anchorage'),
(394, 'US', 'America/Juneau'),
(395, 'US', 'America/Sitka'),
(396, 'US', 'America/Yakutat'),
(397, 'US', 'America/Nome'),
(398, 'US', 'America/Adak'),
(399, 'US', 'Pacific/Honolulu'),
(400, 'UY', 'America/Montevideo'),
(401, 'UZ', 'Asia/Samarkand'),
(402, 'UZ', 'Asia/Tashkent'),
(403, 'VA', 'Europe/Vatican'),
(404, 'VC', 'America/St_Vincent'),
(405, 'VE', 'America/Caracas'),
(406, 'VG', 'America/Tortola'),
(407, 'VI', 'America/St_Thomas'),
(408, 'VN', 'Asia/Ho_Chi_Minh'),
(409, 'VU', 'Pacific/Efate'),
(410, 'WF', 'Pacific/Wallis'),
(411, 'WS', 'Pacific/Apia'),
(412, 'YE', 'Asia/Aden'),
(413, 'YT', 'Indian/Mayotte'),
(414, 'ZA', 'Africa/Johannesburg'),
(415, 'ZM', 'Africa/Lusaka'),
(416, 'ZW', 'Africa/Harare');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE IF NOT EXISTS `tbl_todo` (
  `todo_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  PRIMARY KEY (`todo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE IF NOT EXISTS `tbl_training` (
  `training_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(5) NOT NULL,
  `training_name` varchar(100) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `training_start_date` date NOT NULL,
  `training_finish_date` date NOT NULL,
  `training_cost` int(11) NOT NULL,
  `training_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = pending, 1 = started, 2 = completed, 3 = terminated',
  `training_performance` tinyint(1) DEFAULT '0' COMMENT '0 = not concluded, 1 = satisfactory, 2 = average, 3 = poor, 4 = excellent',
  `training_remarks` text NOT NULL,
  PRIMARY KEY (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active 0 =block',
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `first_name`, `last_name`, `email`, `user_name`, `password`, `user_status`, `flag`) VALUES
(1, 'Tres', 'Coder', 'info@trescoder.com', 'admin', '27b0d575bd76125a167ccaee72a873336123e2e4c869a4468f6468160d2e7d69258b2a07a4d7ff882afcc6136f889984b415058f99d8605347f44c4c3479d819', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE IF NOT EXISTS `tbl_user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_working_days`
--

CREATE TABLE IF NOT EXISTS `tbl_working_days` (
  `working_days_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_id` int(5) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`working_days_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_working_hours`
--

CREATE TABLE IF NOT EXISTS `tbl_working_hours` (
  `working_hours_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_hours` time NOT NULL,
  `end_hours` time NOT NULL,
  PRIMARY KEY (`working_hours_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
