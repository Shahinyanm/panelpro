/*
Navicat MySQL Data Transfer

Source Server         : DT
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : panelpro_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-05-18 13:53:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `countries`
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `idCountry` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`idCountry`)
) ENGINE=MyISAM AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO `countries` VALUES ('1', 'AD', 'Andorra');
INSERT INTO `countries` VALUES ('2', 'AE', 'United Arab Emirates');
INSERT INTO `countries` VALUES ('3', 'AF', 'Afghanistan');
INSERT INTO `countries` VALUES ('4', 'AG', 'Antigua and Barbuda');
INSERT INTO `countries` VALUES ('5', 'AI', 'Anguilla');
INSERT INTO `countries` VALUES ('6', 'AL', 'Albania');
INSERT INTO `countries` VALUES ('7', 'AM', 'Armenia');
INSERT INTO `countries` VALUES ('8', 'AO', 'Angola');
INSERT INTO `countries` VALUES ('9', 'AQ', 'Antarctica');
INSERT INTO `countries` VALUES ('10', 'AR', 'Argentina');
INSERT INTO `countries` VALUES ('11', 'AS', 'American Samoa');
INSERT INTO `countries` VALUES ('12', 'AT', 'Austria');
INSERT INTO `countries` VALUES ('13', 'AU', 'Australia');
INSERT INTO `countries` VALUES ('14', 'AW', 'Aruba');
INSERT INTO `countries` VALUES ('15', 'AX', 'Åland');
INSERT INTO `countries` VALUES ('16', 'AZ', 'Azerbaijan');
INSERT INTO `countries` VALUES ('17', 'BA', 'Bosnia and Herzegovina');
INSERT INTO `countries` VALUES ('18', 'BB', 'Barbados');
INSERT INTO `countries` VALUES ('19', 'BD', 'Bangladesh');
INSERT INTO `countries` VALUES ('20', 'BE', 'Belgium');
INSERT INTO `countries` VALUES ('21', 'BF', 'Burkina Faso');
INSERT INTO `countries` VALUES ('22', 'BG', 'Bulgaria');
INSERT INTO `countries` VALUES ('23', 'BH', 'Bahrain');
INSERT INTO `countries` VALUES ('24', 'BI', 'Burundi');
INSERT INTO `countries` VALUES ('25', 'BJ', 'Benin');
INSERT INTO `countries` VALUES ('26', 'BL', 'Saint Barthélemy');
INSERT INTO `countries` VALUES ('27', 'BM', 'Bermuda');
INSERT INTO `countries` VALUES ('28', 'BN', 'Brunei');
INSERT INTO `countries` VALUES ('29', 'BO', 'Bolivia');
INSERT INTO `countries` VALUES ('30', 'BQ', 'Bonaire');
INSERT INTO `countries` VALUES ('31', 'BR', 'Brazil');
INSERT INTO `countries` VALUES ('32', 'BS', 'Bahamas');
INSERT INTO `countries` VALUES ('33', 'BT', 'Bhutan');
INSERT INTO `countries` VALUES ('34', 'BV', 'Bouvet Island');
INSERT INTO `countries` VALUES ('35', 'BW', 'Botswana');
INSERT INTO `countries` VALUES ('36', 'BY', 'Belarus');
INSERT INTO `countries` VALUES ('37', 'BZ', 'Belize');
INSERT INTO `countries` VALUES ('38', 'CA', 'Canada');
INSERT INTO `countries` VALUES ('39', 'CC', 'Cocos [Keeling] Islands');
INSERT INTO `countries` VALUES ('40', 'CD', 'Democratic Republic of the Congo');
INSERT INTO `countries` VALUES ('41', 'CF', 'Central African Republic');
INSERT INTO `countries` VALUES ('42', 'CG', 'Republic of the Congo');
INSERT INTO `countries` VALUES ('43', 'CH', 'Switzerland');
INSERT INTO `countries` VALUES ('44', 'CI', 'Ivory Coast');
INSERT INTO `countries` VALUES ('45', 'CK', 'Cook Islands');
INSERT INTO `countries` VALUES ('46', 'CL', 'Chile');
INSERT INTO `countries` VALUES ('47', 'CM', 'Cameroon');
INSERT INTO `countries` VALUES ('48', 'CN', 'China');
INSERT INTO `countries` VALUES ('49', 'CO', 'Colombia');
INSERT INTO `countries` VALUES ('50', 'CR', 'Costa Rica');
INSERT INTO `countries` VALUES ('51', 'CU', 'Cuba');
INSERT INTO `countries` VALUES ('52', 'CV', 'Cape Verde');
INSERT INTO `countries` VALUES ('53', 'CW', 'Curacao');
INSERT INTO `countries` VALUES ('54', 'CX', 'Christmas Island');
INSERT INTO `countries` VALUES ('55', 'CY', 'Cyprus');
INSERT INTO `countries` VALUES ('56', 'CZ', 'Czech Republic');
INSERT INTO `countries` VALUES ('57', 'DE', 'Germany');
INSERT INTO `countries` VALUES ('58', 'DJ', 'Djibouti');
INSERT INTO `countries` VALUES ('59', 'DK', 'Denmark');
INSERT INTO `countries` VALUES ('60', 'DM', 'Dominica');
INSERT INTO `countries` VALUES ('61', 'DO', 'Dominican Republic');
INSERT INTO `countries` VALUES ('62', 'DZ', 'Algeria');
INSERT INTO `countries` VALUES ('63', 'EC', 'Ecuador');
INSERT INTO `countries` VALUES ('64', 'EE', 'Estonia');
INSERT INTO `countries` VALUES ('65', 'EG', 'Egypt');
INSERT INTO `countries` VALUES ('66', 'EH', 'Western Sahara');
INSERT INTO `countries` VALUES ('67', 'ER', 'Eritrea');
INSERT INTO `countries` VALUES ('68', 'ES', 'Spain');
INSERT INTO `countries` VALUES ('69', 'ET', 'Ethiopia');
INSERT INTO `countries` VALUES ('70', 'FI', 'Finland');
INSERT INTO `countries` VALUES ('71', 'FJ', 'Fiji');
INSERT INTO `countries` VALUES ('72', 'FK', 'Falkland Islands');
INSERT INTO `countries` VALUES ('73', 'FM', 'Micronesia');
INSERT INTO `countries` VALUES ('74', 'FO', 'Faroe Islands');
INSERT INTO `countries` VALUES ('75', 'FR', 'France');
INSERT INTO `countries` VALUES ('76', 'GA', 'Gabon');
INSERT INTO `countries` VALUES ('77', 'GB', 'United Kingdom');
INSERT INTO `countries` VALUES ('78', 'GD', 'Grenada');
INSERT INTO `countries` VALUES ('79', 'GE', 'Georgia');
INSERT INTO `countries` VALUES ('80', 'GF', 'French Guiana');
INSERT INTO `countries` VALUES ('81', 'GG', 'Guernsey');
INSERT INTO `countries` VALUES ('82', 'GH', 'Ghana');
INSERT INTO `countries` VALUES ('83', 'GI', 'Gibraltar');
INSERT INTO `countries` VALUES ('84', 'GL', 'Greenland');
INSERT INTO `countries` VALUES ('85', 'GM', 'Gambia');
INSERT INTO `countries` VALUES ('86', 'GN', 'Guinea');
INSERT INTO `countries` VALUES ('87', 'GP', 'Guadeloupe');
INSERT INTO `countries` VALUES ('88', 'GQ', 'Equatorial Guinea');
INSERT INTO `countries` VALUES ('89', 'GR', 'Greece');
INSERT INTO `countries` VALUES ('90', 'GS', 'South Georgia and the South Sandwich Islands');
INSERT INTO `countries` VALUES ('91', 'GT', 'Guatemala');
INSERT INTO `countries` VALUES ('92', 'GU', 'Guam');
INSERT INTO `countries` VALUES ('93', 'GW', 'Guinea-Bissau');
INSERT INTO `countries` VALUES ('94', 'GY', 'Guyana');
INSERT INTO `countries` VALUES ('95', 'HK', 'Hong Kong');
INSERT INTO `countries` VALUES ('96', 'HM', 'Heard Island and McDonald Islands');
INSERT INTO `countries` VALUES ('97', 'HN', 'Honduras');
INSERT INTO `countries` VALUES ('98', 'HR', 'Croatia');
INSERT INTO `countries` VALUES ('99', 'HT', 'Haiti');
INSERT INTO `countries` VALUES ('100', 'HU', 'Hungary');
INSERT INTO `countries` VALUES ('101', 'ID', 'Indonesia');
INSERT INTO `countries` VALUES ('102', 'IE', 'Ireland');
INSERT INTO `countries` VALUES ('103', 'IL', 'Israel');
INSERT INTO `countries` VALUES ('104', 'IM', 'Isle of Man');
INSERT INTO `countries` VALUES ('105', 'IN', 'India');
INSERT INTO `countries` VALUES ('106', 'IO', 'British Indian Ocean Territory');
INSERT INTO `countries` VALUES ('107', 'IQ', 'Iraq');
INSERT INTO `countries` VALUES ('108', 'IR', 'Iran');
INSERT INTO `countries` VALUES ('109', 'IS', 'Iceland');
INSERT INTO `countries` VALUES ('110', 'IT', 'Italy');
INSERT INTO `countries` VALUES ('111', 'JE', 'Jersey');
INSERT INTO `countries` VALUES ('112', 'JM', 'Jamaica');
INSERT INTO `countries` VALUES ('113', 'JO', 'Jordan');
INSERT INTO `countries` VALUES ('114', 'JP', 'Japan');
INSERT INTO `countries` VALUES ('115', 'KE', 'Kenya');
INSERT INTO `countries` VALUES ('116', 'KG', 'Kyrgyzstan');
INSERT INTO `countries` VALUES ('117', 'KH', 'Cambodia');
INSERT INTO `countries` VALUES ('118', 'KI', 'Kiribati');
INSERT INTO `countries` VALUES ('119', 'KM', 'Comoros');
INSERT INTO `countries` VALUES ('120', 'KN', 'Saint Kitts and Nevis');
INSERT INTO `countries` VALUES ('121', 'KP', 'North Korea');
INSERT INTO `countries` VALUES ('122', 'KR', 'South Korea');
INSERT INTO `countries` VALUES ('123', 'KW', 'Kuwait');
INSERT INTO `countries` VALUES ('124', 'KY', 'Cayman Islands');
INSERT INTO `countries` VALUES ('125', 'KZ', 'Kazakhstan');
INSERT INTO `countries` VALUES ('126', 'LA', 'Laos');
INSERT INTO `countries` VALUES ('127', 'LB', 'Lebanon');
INSERT INTO `countries` VALUES ('128', 'LC', 'Saint Lucia');
INSERT INTO `countries` VALUES ('129', 'LI', 'Liechtenstein');
INSERT INTO `countries` VALUES ('130', 'LK', 'Sri Lanka');
INSERT INTO `countries` VALUES ('131', 'LR', 'Liberia');
INSERT INTO `countries` VALUES ('132', 'LS', 'Lesotho');
INSERT INTO `countries` VALUES ('133', 'LT', 'Lithuania');
INSERT INTO `countries` VALUES ('134', 'LU', 'Luxembourg');
INSERT INTO `countries` VALUES ('135', 'LV', 'Latvia');
INSERT INTO `countries` VALUES ('136', 'LY', 'Libya');
INSERT INTO `countries` VALUES ('137', 'MA', 'Morocco');
INSERT INTO `countries` VALUES ('138', 'MC', 'Monaco');
INSERT INTO `countries` VALUES ('139', 'MD', 'Moldova');
INSERT INTO `countries` VALUES ('140', 'ME', 'Montenegro');
INSERT INTO `countries` VALUES ('141', 'MF', 'Saint Martin');
INSERT INTO `countries` VALUES ('142', 'MG', 'Madagascar');
INSERT INTO `countries` VALUES ('143', 'MH', 'Marshall Islands');
INSERT INTO `countries` VALUES ('144', 'MK', 'Macedonia');
INSERT INTO `countries` VALUES ('145', 'ML', 'Mali');
INSERT INTO `countries` VALUES ('146', 'MM', 'Myanmar [Burma]');
INSERT INTO `countries` VALUES ('147', 'MN', 'Mongolia');
INSERT INTO `countries` VALUES ('148', 'MO', 'Macao');
INSERT INTO `countries` VALUES ('149', 'MP', 'Northern Mariana Islands');
INSERT INTO `countries` VALUES ('150', 'MQ', 'Martinique');
INSERT INTO `countries` VALUES ('151', 'MR', 'Mauritania');
INSERT INTO `countries` VALUES ('152', 'MS', 'Montserrat');
INSERT INTO `countries` VALUES ('153', 'MT', 'Malta');
INSERT INTO `countries` VALUES ('154', 'MU', 'Mauritius');
INSERT INTO `countries` VALUES ('155', 'MV', 'Maldives');
INSERT INTO `countries` VALUES ('156', 'MW', 'Malawi');
INSERT INTO `countries` VALUES ('157', 'MX', 'Mexico');
INSERT INTO `countries` VALUES ('158', 'MY', 'Malaysia');
INSERT INTO `countries` VALUES ('159', 'MZ', 'Mozambique');
INSERT INTO `countries` VALUES ('160', 'NA', 'Namibia');
INSERT INTO `countries` VALUES ('161', 'NC', 'New Caledonia');
INSERT INTO `countries` VALUES ('162', 'NE', 'Niger');
INSERT INTO `countries` VALUES ('163', 'NF', 'Norfolk Island');
INSERT INTO `countries` VALUES ('164', 'NG', 'Nigeria');
INSERT INTO `countries` VALUES ('165', 'NI', 'Nicaragua');
INSERT INTO `countries` VALUES ('166', 'NL', 'Netherlands');
INSERT INTO `countries` VALUES ('167', 'NO', 'Norway');
INSERT INTO `countries` VALUES ('168', 'NP', 'Nepal');
INSERT INTO `countries` VALUES ('169', 'NR', 'Nauru');
INSERT INTO `countries` VALUES ('170', 'NU', 'Niue');
INSERT INTO `countries` VALUES ('171', 'NZ', 'New Zealand');
INSERT INTO `countries` VALUES ('172', 'OM', 'Oman');
INSERT INTO `countries` VALUES ('173', 'PA', 'Panama');
INSERT INTO `countries` VALUES ('174', 'PE', 'Peru');
INSERT INTO `countries` VALUES ('175', 'PF', 'French Polynesia');
INSERT INTO `countries` VALUES ('176', 'PG', 'Papua New Guinea');
INSERT INTO `countries` VALUES ('177', 'PH', 'Philippines');
INSERT INTO `countries` VALUES ('178', 'PK', 'Pakistan');
INSERT INTO `countries` VALUES ('179', 'PL', 'Poland');
INSERT INTO `countries` VALUES ('180', 'PM', 'Saint Pierre and Miquelon');
INSERT INTO `countries` VALUES ('181', 'PN', 'Pitcairn Islands');
INSERT INTO `countries` VALUES ('182', 'PR', 'Puerto Rico');
INSERT INTO `countries` VALUES ('183', 'PS', 'Palestine');
INSERT INTO `countries` VALUES ('184', 'PT', 'Portugal');
INSERT INTO `countries` VALUES ('185', 'PW', 'Palau');
INSERT INTO `countries` VALUES ('186', 'PY', 'Paraguay');
INSERT INTO `countries` VALUES ('187', 'QA', 'Qatar');
INSERT INTO `countries` VALUES ('188', 'RE', 'Réunion');
INSERT INTO `countries` VALUES ('189', 'RO', 'Romania');
INSERT INTO `countries` VALUES ('190', 'RS', 'Serbia');
INSERT INTO `countries` VALUES ('191', 'RU', 'Russia');
INSERT INTO `countries` VALUES ('192', 'RW', 'Rwanda');
INSERT INTO `countries` VALUES ('193', 'SA', 'Saudi Arabia');
INSERT INTO `countries` VALUES ('194', 'SB', 'Solomon Islands');
INSERT INTO `countries` VALUES ('195', 'SC', 'Seychelles');
INSERT INTO `countries` VALUES ('196', 'SD', 'Sudan');
INSERT INTO `countries` VALUES ('197', 'SE', 'Sweden');
INSERT INTO `countries` VALUES ('198', 'SG', 'Singapore');
INSERT INTO `countries` VALUES ('199', 'SH', 'Saint Helena');
INSERT INTO `countries` VALUES ('200', 'SI', 'Slovenia');
INSERT INTO `countries` VALUES ('201', 'SJ', 'Svalbard and Jan Mayen');
INSERT INTO `countries` VALUES ('202', 'SK', 'Slovakia');
INSERT INTO `countries` VALUES ('203', 'SL', 'Sierra Leone');
INSERT INTO `countries` VALUES ('204', 'SM', 'San Marino');
INSERT INTO `countries` VALUES ('205', 'SN', 'Senegal');
INSERT INTO `countries` VALUES ('206', 'SO', 'Somalia');
INSERT INTO `countries` VALUES ('207', 'SR', 'Suriname');
INSERT INTO `countries` VALUES ('208', 'SS', 'South Sudan');
INSERT INTO `countries` VALUES ('209', 'ST', 'São Tomé and Príncipe');
INSERT INTO `countries` VALUES ('210', 'SV', 'El Salvador');
INSERT INTO `countries` VALUES ('211', 'SX', 'Sint Maarten');
INSERT INTO `countries` VALUES ('212', 'SY', 'Syria');
INSERT INTO `countries` VALUES ('213', 'SZ', 'Swaziland');
INSERT INTO `countries` VALUES ('214', 'TC', 'Turks and Caicos Islands');
INSERT INTO `countries` VALUES ('215', 'TD', 'Chad');
INSERT INTO `countries` VALUES ('216', 'TF', 'French Southern Territories');
INSERT INTO `countries` VALUES ('217', 'TG', 'Togo');
INSERT INTO `countries` VALUES ('218', 'TH', 'Thailand');
INSERT INTO `countries` VALUES ('219', 'TJ', 'Tajikistan');
INSERT INTO `countries` VALUES ('220', 'TK', 'Tokelau');
INSERT INTO `countries` VALUES ('221', 'TL', 'East Timor');
INSERT INTO `countries` VALUES ('222', 'TM', 'Turkmenistan');
INSERT INTO `countries` VALUES ('223', 'TN', 'Tunisia');
INSERT INTO `countries` VALUES ('224', 'TO', 'Tonga');
INSERT INTO `countries` VALUES ('225', 'TR', 'Turkey');
INSERT INTO `countries` VALUES ('226', 'TT', 'Trinidad and Tobago');
INSERT INTO `countries` VALUES ('227', 'TV', 'Tuvalu');
INSERT INTO `countries` VALUES ('228', 'TW', 'Taiwan');
INSERT INTO `countries` VALUES ('229', 'TZ', 'Tanzania');
INSERT INTO `countries` VALUES ('230', 'UA', 'Ukraine');
INSERT INTO `countries` VALUES ('231', 'UG', 'Uganda');
INSERT INTO `countries` VALUES ('232', 'UM', 'U.S. Minor Outlying Islands');
INSERT INTO `countries` VALUES ('233', 'US', 'United States');
INSERT INTO `countries` VALUES ('234', 'UY', 'Uruguay');
INSERT INTO `countries` VALUES ('235', 'UZ', 'Uzbekistan');
INSERT INTO `countries` VALUES ('236', 'VA', 'Vatican City');
INSERT INTO `countries` VALUES ('237', 'VC', 'Saint Vincent and the Grenadines');
INSERT INTO `countries` VALUES ('238', 'VE', 'Venezuela');
INSERT INTO `countries` VALUES ('239', 'VG', 'British Virgin Islands');
INSERT INTO `countries` VALUES ('240', 'VI', 'U.S. Virgin Islands');
INSERT INTO `countries` VALUES ('241', 'VN', 'Vietnam');
INSERT INTO `countries` VALUES ('242', 'VU', 'Vanuatu');
INSERT INTO `countries` VALUES ('243', 'WF', 'Wallis and Futuna');
INSERT INTO `countries` VALUES ('244', 'WS', 'Samoa');
INSERT INTO `countries` VALUES ('245', 'XK', 'Kosovo');
INSERT INTO `countries` VALUES ('246', 'YE', 'Yemen');
INSERT INTO `countries` VALUES ('247', 'YT', 'Mayotte');
INSERT INTO `countries` VALUES ('248', 'ZA', 'South Africa');
INSERT INTO `countries` VALUES ('249', 'ZM', 'Zambia');
INSERT INTO `countries` VALUES ('250', 'ZW', 'Zimbabwe');

-- ----------------------------
-- Table structure for `country`
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `country_code` char(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `country_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  KEY `idx_country_code` (`country_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('AD', 'Andorra');
INSERT INTO `country` VALUES ('AE', 'United Arab Emirates');
INSERT INTO `country` VALUES ('AF', 'Afghanistan');
INSERT INTO `country` VALUES ('AG', 'Antigua and Barbuda');
INSERT INTO `country` VALUES ('AI', 'Anguilla');
INSERT INTO `country` VALUES ('AL', 'Albania');
INSERT INTO `country` VALUES ('AM', 'Armenia');
INSERT INTO `country` VALUES ('AN', 'Netherlands Antilles');
INSERT INTO `country` VALUES ('AO', 'Angola');
INSERT INTO `country` VALUES ('AQ', 'Antarctica');
INSERT INTO `country` VALUES ('AR', 'Argentina');
INSERT INTO `country` VALUES ('AS', 'American Samoa');
INSERT INTO `country` VALUES ('AT', 'Austria');
INSERT INTO `country` VALUES ('AU', 'Australia');
INSERT INTO `country` VALUES ('AW', 'Aruba');
INSERT INTO `country` VALUES ('AX', 'Aland Islands');
INSERT INTO `country` VALUES ('AZ', 'Azerbaijan');
INSERT INTO `country` VALUES ('BA', 'Bosnia and Herzegovina');
INSERT INTO `country` VALUES ('BB', 'Barbados');
INSERT INTO `country` VALUES ('BD', 'Bangladesh');
INSERT INTO `country` VALUES ('BE', 'Belgium');
INSERT INTO `country` VALUES ('BF', 'Burkina Faso');
INSERT INTO `country` VALUES ('BG', 'Bulgaria');
INSERT INTO `country` VALUES ('BH', 'Bahrain');
INSERT INTO `country` VALUES ('BI', 'Burundi');
INSERT INTO `country` VALUES ('BJ', 'Benin');
INSERT INTO `country` VALUES ('BL', 'Saint Barthélemy');
INSERT INTO `country` VALUES ('BM', 'Bermuda');
INSERT INTO `country` VALUES ('BN', 'Brunei');
INSERT INTO `country` VALUES ('BO', 'Bolivia');
INSERT INTO `country` VALUES ('BQ', 'Bonaire, Saint Eustatius and Saba ');
INSERT INTO `country` VALUES ('BR', 'Brazil');
INSERT INTO `country` VALUES ('BS', 'Bahamas');
INSERT INTO `country` VALUES ('BT', 'Bhutan');
INSERT INTO `country` VALUES ('BV', 'Bouvet Island');
INSERT INTO `country` VALUES ('BW', 'Botswana');
INSERT INTO `country` VALUES ('BY', 'Belarus');
INSERT INTO `country` VALUES ('BZ', 'Belize');
INSERT INTO `country` VALUES ('CA', 'Canada');
INSERT INTO `country` VALUES ('CC', 'Cocos Islands');
INSERT INTO `country` VALUES ('CD', 'Democratic Republic of the Congo');
INSERT INTO `country` VALUES ('CF', 'Central African Republic');
INSERT INTO `country` VALUES ('CG', 'Republic of the Congo');
INSERT INTO `country` VALUES ('CH', 'Switzerland');
INSERT INTO `country` VALUES ('CI', 'Ivory Coast');
INSERT INTO `country` VALUES ('CK', 'Cook Islands');
INSERT INTO `country` VALUES ('CL', 'Chile');
INSERT INTO `country` VALUES ('CM', 'Cameroon');
INSERT INTO `country` VALUES ('CN', 'China');
INSERT INTO `country` VALUES ('CO', 'Colombia');
INSERT INTO `country` VALUES ('CR', 'Costa Rica');
INSERT INTO `country` VALUES ('CS', 'Serbia and Montenegro');
INSERT INTO `country` VALUES ('CU', 'Cuba');
INSERT INTO `country` VALUES ('CV', 'Cape Verde');
INSERT INTO `country` VALUES ('CW', 'Curaçao');
INSERT INTO `country` VALUES ('CX', 'Christmas Island');
INSERT INTO `country` VALUES ('CY', 'Cyprus');
INSERT INTO `country` VALUES ('CZ', 'Czech Republic');
INSERT INTO `country` VALUES ('DE', 'Germany');
INSERT INTO `country` VALUES ('DJ', 'Djibouti');
INSERT INTO `country` VALUES ('DK', 'Denmark');
INSERT INTO `country` VALUES ('DM', 'Dominica');
INSERT INTO `country` VALUES ('DO', 'Dominican Republic');
INSERT INTO `country` VALUES ('DZ', 'Algeria');
INSERT INTO `country` VALUES ('EC', 'Ecuador');
INSERT INTO `country` VALUES ('EE', 'Estonia');
INSERT INTO `country` VALUES ('EG', 'Egypt');
INSERT INTO `country` VALUES ('EH', 'Western Sahara');
INSERT INTO `country` VALUES ('ER', 'Eritrea');
INSERT INTO `country` VALUES ('ES', 'Spain');
INSERT INTO `country` VALUES ('ET', 'Ethiopia');
INSERT INTO `country` VALUES ('FI', 'Finland');
INSERT INTO `country` VALUES ('FJ', 'Fiji');
INSERT INTO `country` VALUES ('FK', 'Falkland Islands');
INSERT INTO `country` VALUES ('FM', 'Micronesia');
INSERT INTO `country` VALUES ('FO', 'Faroe Islands');
INSERT INTO `country` VALUES ('FR', 'France');
INSERT INTO `country` VALUES ('GA', 'Gabon');
INSERT INTO `country` VALUES ('GB', 'United Kingdom');
INSERT INTO `country` VALUES ('GD', 'Grenada');
INSERT INTO `country` VALUES ('GE', 'Georgia');
INSERT INTO `country` VALUES ('GF', 'French Guiana');
INSERT INTO `country` VALUES ('GG', 'Guernsey');
INSERT INTO `country` VALUES ('GH', 'Ghana');
INSERT INTO `country` VALUES ('GI', 'Gibraltar');
INSERT INTO `country` VALUES ('GL', 'Greenland');
INSERT INTO `country` VALUES ('GM', 'Gambia');
INSERT INTO `country` VALUES ('GN', 'Guinea');
INSERT INTO `country` VALUES ('GP', 'Guadeloupe');
INSERT INTO `country` VALUES ('GQ', 'Equatorial Guinea');
INSERT INTO `country` VALUES ('GR', 'Greece');
INSERT INTO `country` VALUES ('GS', 'South Georgia and the South Sandwich Islands');
INSERT INTO `country` VALUES ('GT', 'Guatemala');
INSERT INTO `country` VALUES ('GU', 'Guam');
INSERT INTO `country` VALUES ('GW', 'Guinea-Bissau');
INSERT INTO `country` VALUES ('GY', 'Guyana');
INSERT INTO `country` VALUES ('HK', 'Hong Kong');
INSERT INTO `country` VALUES ('HM', 'Heard Island and McDonald Islands');
INSERT INTO `country` VALUES ('HN', 'Honduras');
INSERT INTO `country` VALUES ('HR', 'Croatia');
INSERT INTO `country` VALUES ('HT', 'Haiti');
INSERT INTO `country` VALUES ('HU', 'Hungary');
INSERT INTO `country` VALUES ('ID', 'Indonesia');
INSERT INTO `country` VALUES ('IE', 'Ireland');
INSERT INTO `country` VALUES ('IL', 'Israel');
INSERT INTO `country` VALUES ('IM', 'Isle of Man');
INSERT INTO `country` VALUES ('IN', 'India');
INSERT INTO `country` VALUES ('IO', 'British Indian Ocean Territory');
INSERT INTO `country` VALUES ('IQ', 'Iraq');
INSERT INTO `country` VALUES ('IR', 'Iran');
INSERT INTO `country` VALUES ('IS', 'Iceland');
INSERT INTO `country` VALUES ('IT', 'Italy');
INSERT INTO `country` VALUES ('JE', 'Jersey');
INSERT INTO `country` VALUES ('JM', 'Jamaica');
INSERT INTO `country` VALUES ('JO', 'Jordan');
INSERT INTO `country` VALUES ('JP', 'Japan');
INSERT INTO `country` VALUES ('KE', 'Kenya');
INSERT INTO `country` VALUES ('KG', 'Kyrgyzstan');
INSERT INTO `country` VALUES ('KH', 'Cambodia');
INSERT INTO `country` VALUES ('KI', 'Kiribati');
INSERT INTO `country` VALUES ('KM', 'Comoros');
INSERT INTO `country` VALUES ('KN', 'Saint Kitts and Nevis');
INSERT INTO `country` VALUES ('KP', 'North Korea');
INSERT INTO `country` VALUES ('KR', 'South Korea');
INSERT INTO `country` VALUES ('KW', 'Kuwait');
INSERT INTO `country` VALUES ('KY', 'Cayman Islands');
INSERT INTO `country` VALUES ('KZ', 'Kazakhstan');
INSERT INTO `country` VALUES ('LA', 'Laos');
INSERT INTO `country` VALUES ('LB', 'Lebanon');
INSERT INTO `country` VALUES ('LC', 'Saint Lucia');
INSERT INTO `country` VALUES ('LI', 'Liechtenstein');
INSERT INTO `country` VALUES ('LK', 'Sri Lanka');
INSERT INTO `country` VALUES ('LR', 'Liberia');
INSERT INTO `country` VALUES ('LS', 'Lesotho');
INSERT INTO `country` VALUES ('LT', 'Lithuania');
INSERT INTO `country` VALUES ('LU', 'Luxembourg');
INSERT INTO `country` VALUES ('LV', 'Latvia');
INSERT INTO `country` VALUES ('LY', 'Libya');
INSERT INTO `country` VALUES ('MA', 'Morocco');
INSERT INTO `country` VALUES ('MC', 'Monaco');
INSERT INTO `country` VALUES ('MD', 'Moldova');
INSERT INTO `country` VALUES ('ME', 'Montenegro');
INSERT INTO `country` VALUES ('MF', 'Saint Martin');
INSERT INTO `country` VALUES ('MG', 'Madagascar');
INSERT INTO `country` VALUES ('MH', 'Marshall Islands');
INSERT INTO `country` VALUES ('MK', 'Macedonia');
INSERT INTO `country` VALUES ('ML', 'Mali');
INSERT INTO `country` VALUES ('MM', 'Myanmar');
INSERT INTO `country` VALUES ('MN', 'Mongolia');
INSERT INTO `country` VALUES ('MO', 'Macao');
INSERT INTO `country` VALUES ('MP', 'Northern Mariana Islands');
INSERT INTO `country` VALUES ('MQ', 'Martinique');
INSERT INTO `country` VALUES ('MR', 'Mauritania');
INSERT INTO `country` VALUES ('MS', 'Montserrat');
INSERT INTO `country` VALUES ('MT', 'Malta');
INSERT INTO `country` VALUES ('MU', 'Mauritius');
INSERT INTO `country` VALUES ('MV', 'Maldives');
INSERT INTO `country` VALUES ('MW', 'Malawi');
INSERT INTO `country` VALUES ('MX', 'Mexico');
INSERT INTO `country` VALUES ('MY', 'Malaysia');
INSERT INTO `country` VALUES ('MZ', 'Mozambique');
INSERT INTO `country` VALUES ('NA', 'Namibia');
INSERT INTO `country` VALUES ('NC', 'New Caledonia');
INSERT INTO `country` VALUES ('NE', 'Niger');
INSERT INTO `country` VALUES ('NF', 'Norfolk Island');
INSERT INTO `country` VALUES ('NG', 'Nigeria');
INSERT INTO `country` VALUES ('NI', 'Nicaragua');
INSERT INTO `country` VALUES ('NL', 'Netherlands');
INSERT INTO `country` VALUES ('NO', 'Norway');
INSERT INTO `country` VALUES ('NP', 'Nepal');
INSERT INTO `country` VALUES ('NR', 'Nauru');
INSERT INTO `country` VALUES ('NU', 'Niue');
INSERT INTO `country` VALUES ('NZ', 'New Zealand');
INSERT INTO `country` VALUES ('OM', 'Oman');
INSERT INTO `country` VALUES ('PA', 'Panama');
INSERT INTO `country` VALUES ('PE', 'Peru');
INSERT INTO `country` VALUES ('PF', 'French Polynesia');
INSERT INTO `country` VALUES ('PG', 'Papua New Guinea');
INSERT INTO `country` VALUES ('PH', 'Philippines');
INSERT INTO `country` VALUES ('PK', 'Pakistan');
INSERT INTO `country` VALUES ('PL', 'Poland');
INSERT INTO `country` VALUES ('PM', 'Saint Pierre and Miquelon');
INSERT INTO `country` VALUES ('PN', 'Pitcairn');
INSERT INTO `country` VALUES ('PR', 'Puerto Rico');
INSERT INTO `country` VALUES ('PS', 'Palestinian Territory');
INSERT INTO `country` VALUES ('PT', 'Portugal');
INSERT INTO `country` VALUES ('PW', 'Palau');
INSERT INTO `country` VALUES ('PY', 'Paraguay');
INSERT INTO `country` VALUES ('QA', 'Qatar');
INSERT INTO `country` VALUES ('RE', 'Reunion');
INSERT INTO `country` VALUES ('RO', 'Romania');
INSERT INTO `country` VALUES ('RS', 'Serbia');
INSERT INTO `country` VALUES ('RU', 'Russia');
INSERT INTO `country` VALUES ('RW', 'Rwanda');
INSERT INTO `country` VALUES ('SA', 'Saudi Arabia');
INSERT INTO `country` VALUES ('SB', 'Solomon Islands');
INSERT INTO `country` VALUES ('SC', 'Seychelles');
INSERT INTO `country` VALUES ('SD', 'Sudan');
INSERT INTO `country` VALUES ('SE', 'Sweden');
INSERT INTO `country` VALUES ('SG', 'Singapore');
INSERT INTO `country` VALUES ('SH', 'Saint Helena');
INSERT INTO `country` VALUES ('SI', 'Slovenia');
INSERT INTO `country` VALUES ('SJ', 'Svalbard and Jan Mayen');
INSERT INTO `country` VALUES ('SK', 'Slovakia');
INSERT INTO `country` VALUES ('SL', 'Sierra Leone');
INSERT INTO `country` VALUES ('SM', 'San Marino');
INSERT INTO `country` VALUES ('SN', 'Senegal');
INSERT INTO `country` VALUES ('SO', 'Somalia');
INSERT INTO `country` VALUES ('SR', 'Suriname');
INSERT INTO `country` VALUES ('SS', 'South Sudan');
INSERT INTO `country` VALUES ('ST', 'Sao Tome and Principe');
INSERT INTO `country` VALUES ('SV', 'El Salvador');
INSERT INTO `country` VALUES ('SX', 'Sint Maarten');
INSERT INTO `country` VALUES ('SY', 'Syria');
INSERT INTO `country` VALUES ('SZ', 'Swaziland');
INSERT INTO `country` VALUES ('TC', 'Turks and Caicos Islands');
INSERT INTO `country` VALUES ('TD', 'Chad');
INSERT INTO `country` VALUES ('TF', 'French Southern Territories');
INSERT INTO `country` VALUES ('TG', 'Togo');
INSERT INTO `country` VALUES ('TH', 'Thailand');
INSERT INTO `country` VALUES ('TJ', 'Tajikistan');
INSERT INTO `country` VALUES ('TK', 'Tokelau');
INSERT INTO `country` VALUES ('TL', 'East Timor');
INSERT INTO `country` VALUES ('TM', 'Turkmenistan');
INSERT INTO `country` VALUES ('TN', 'Tunisia');
INSERT INTO `country` VALUES ('TO', 'Tonga');
INSERT INTO `country` VALUES ('TR', 'Turkey');
INSERT INTO `country` VALUES ('TT', 'Trinidad and Tobago');
INSERT INTO `country` VALUES ('TV', 'Tuvalu');
INSERT INTO `country` VALUES ('TW', 'Taiwan');
INSERT INTO `country` VALUES ('TZ', 'Tanzania');
INSERT INTO `country` VALUES ('UA', 'Ukraine');
INSERT INTO `country` VALUES ('UG', 'Uganda');
INSERT INTO `country` VALUES ('UM', 'United States Minor Outlying Islands');
INSERT INTO `country` VALUES ('US', 'United States');
INSERT INTO `country` VALUES ('UY', 'Uruguay');
INSERT INTO `country` VALUES ('UZ', 'Uzbekistan');
INSERT INTO `country` VALUES ('VA', 'Vatican');
INSERT INTO `country` VALUES ('VC', 'Saint Vincent and the Grenadines');
INSERT INTO `country` VALUES ('VE', 'Venezuela');
INSERT INTO `country` VALUES ('VG', 'British Virgin Islands');
INSERT INTO `country` VALUES ('VI', 'U.S. Virgin Islands');
INSERT INTO `country` VALUES ('VN', 'Vietnam');
INSERT INTO `country` VALUES ('VU', 'Vanuatu');
INSERT INTO `country` VALUES ('WF', 'Wallis and Futuna');
INSERT INTO `country` VALUES ('WS', 'Samoa');
INSERT INTO `country` VALUES ('XK', 'Kosovo');
INSERT INTO `country` VALUES ('YE', 'Yemen');
INSERT INTO `country` VALUES ('YT', 'Mayotte');
INSERT INTO `country` VALUES ('ZA', 'South Africa');
INSERT INTO `country` VALUES ('ZM', 'Zambia');
INSERT INTO `country` VALUES ('ZW', 'Zimbabwe');

-- ----------------------------
-- Table structure for `currency`
-- ----------------------------
DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(64) DEFAULT NULL,
  `currency_code` char(3) DEFAULT NULL,
  PRIMARY KEY (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of currency
-- ----------------------------
INSERT INTO `currency` VALUES ('1', 'Andorran Peseta', 'ADP');
INSERT INTO `currency` VALUES ('2', 'United Arab Emirates Dirham', 'AED');
INSERT INTO `currency` VALUES ('3', 'Afghanistan Afghani', 'AFA');
INSERT INTO `currency` VALUES ('4', 'Albanian Lek', 'ALL');
INSERT INTO `currency` VALUES ('5', 'Netherlands Antillian Guilder', 'ANG');
INSERT INTO `currency` VALUES ('6', 'Angolan Kwanza', 'AOK');
INSERT INTO `currency` VALUES ('7', 'Argentine Peso', 'ARS');
INSERT INTO `currency` VALUES ('9', 'Australian Dollar', 'AUD');
INSERT INTO `currency` VALUES ('10', 'Aruban Florin', 'AWG');
INSERT INTO `currency` VALUES ('11', 'Barbados Dollar', 'BBD');
INSERT INTO `currency` VALUES ('12', 'Bangladeshi Taka', 'BDT');
INSERT INTO `currency` VALUES ('14', 'Bulgarian Lev', 'BGN');
INSERT INTO `currency` VALUES ('15', 'Bahraini Dinar', 'BHD');
INSERT INTO `currency` VALUES ('16', 'Burundi Franc', 'BIF');
INSERT INTO `currency` VALUES ('17', 'Bermudian Dollar', 'BMD');
INSERT INTO `currency` VALUES ('18', 'Brunei Dollar', 'BND');
INSERT INTO `currency` VALUES ('19', 'Bolivian Boliviano', 'BOB');
INSERT INTO `currency` VALUES ('20', 'Brazilian Real', 'BRL');
INSERT INTO `currency` VALUES ('21', 'Bahamian Dollar', 'BSD');
INSERT INTO `currency` VALUES ('22', 'Bhutan Ngultrum', 'BTN');
INSERT INTO `currency` VALUES ('23', 'Burma Kyat', 'BUK');
INSERT INTO `currency` VALUES ('24', 'Botswanian Pula', 'BWP');
INSERT INTO `currency` VALUES ('25', 'Belize Dollar', 'BZD');
INSERT INTO `currency` VALUES ('26', 'Canadian Dollar', 'CAD');
INSERT INTO `currency` VALUES ('27', 'Swiss Franc', 'CHF');
INSERT INTO `currency` VALUES ('28', 'Chilean Unidades de Fomento', 'CLF');
INSERT INTO `currency` VALUES ('29', 'Chilean Peso', 'CLP');
INSERT INTO `currency` VALUES ('30', 'Yuan (Chinese) Renminbi', 'CNY');
INSERT INTO `currency` VALUES ('31', 'Colombian Peso', 'COP');
INSERT INTO `currency` VALUES ('32', 'Costa Rican Colon', 'CRC');
INSERT INTO `currency` VALUES ('33', 'Czech Republic Koruna', 'CZK');
INSERT INTO `currency` VALUES ('34', 'Cuban Peso', 'CUP');
INSERT INTO `currency` VALUES ('35', 'Cape Verde Escudo', 'CVE');
INSERT INTO `currency` VALUES ('36', 'Cyprus Pound', 'CYP');
INSERT INTO `currency` VALUES ('40', 'Danish Krone', 'DKK');
INSERT INTO `currency` VALUES ('41', 'Dominican Peso', 'DOP');
INSERT INTO `currency` VALUES ('42', 'Algerian Dinar', 'DZD');
INSERT INTO `currency` VALUES ('43', 'Ecuador Sucre', 'ECS');
INSERT INTO `currency` VALUES ('44', 'Egyptian Pound', 'EGP');
INSERT INTO `currency` VALUES ('45', 'Estonian Kroon (EEK)', 'EEK');
INSERT INTO `currency` VALUES ('46', 'Ethiopian Birr', 'ETB');
INSERT INTO `currency` VALUES ('47', 'Euro', 'EUR');
INSERT INTO `currency` VALUES ('49', 'Fiji Dollar', 'FJD');
INSERT INTO `currency` VALUES ('50', 'Falkland Islands Pound', 'FKP');
INSERT INTO `currency` VALUES ('52', 'British Pound', 'GBP');
INSERT INTO `currency` VALUES ('53', 'Ghanaian Cedi', 'GHC');
INSERT INTO `currency` VALUES ('54', 'Gibraltar Pound', 'GIP');
INSERT INTO `currency` VALUES ('55', 'Gambian Dalasi', 'GMD');
INSERT INTO `currency` VALUES ('56', 'Guinea Franc', 'GNF');
INSERT INTO `currency` VALUES ('58', 'Guatemalan Quetzal', 'GTQ');
INSERT INTO `currency` VALUES ('59', 'Guinea-Bissau Peso', 'GWP');
INSERT INTO `currency` VALUES ('60', 'Guyanan Dollar', 'GYD');
INSERT INTO `currency` VALUES ('61', 'Hong Kong Dollar', 'HKD');
INSERT INTO `currency` VALUES ('62', 'Honduran Lempira', 'HNL');
INSERT INTO `currency` VALUES ('63', 'Haitian Gourde', 'HTG');
INSERT INTO `currency` VALUES ('64', 'Hungarian Forint', 'HUF');
INSERT INTO `currency` VALUES ('65', 'Indonesian Rupiah', 'IDR');
INSERT INTO `currency` VALUES ('66', 'Irish Punt', 'IEP');
INSERT INTO `currency` VALUES ('67', 'Israeli Shekel', 'ILS');
INSERT INTO `currency` VALUES ('68', 'Indian Rupee', 'INR');
INSERT INTO `currency` VALUES ('69', 'Iraqi Dinar', 'IQD');
INSERT INTO `currency` VALUES ('70', 'Iranian Rial', 'IRR');
INSERT INTO `currency` VALUES ('73', 'Jamaican Dollar', 'JMD');
INSERT INTO `currency` VALUES ('74', 'Jordanian Dinar', 'JOD');
INSERT INTO `currency` VALUES ('75', 'Japanese Yen', 'JPY');
INSERT INTO `currency` VALUES ('76', 'Kenyan Schilling', 'KES');
INSERT INTO `currency` VALUES ('77', 'Kampuchean (Cambodian) Riel', 'KHR');
INSERT INTO `currency` VALUES ('78', 'Comoros Franc', 'KMF');
INSERT INTO `currency` VALUES ('79', 'North Korean Won', 'KPW');
INSERT INTO `currency` VALUES ('80', '(South) Korean Won', 'KRW');
INSERT INTO `currency` VALUES ('81', 'Kuwaiti Dinar', 'KWD');
INSERT INTO `currency` VALUES ('82', 'Cayman Islands Dollar', 'KYD');
INSERT INTO `currency` VALUES ('83', 'Lao Kip', 'LAK');
INSERT INTO `currency` VALUES ('84', 'Lebanese Pound', 'LBP');
INSERT INTO `currency` VALUES ('85', 'Sri Lanka Rupee', 'LKR');
INSERT INTO `currency` VALUES ('86', 'Liberian Dollar', 'LRD');
INSERT INTO `currency` VALUES ('87', 'Lesotho Loti', 'LSL');
INSERT INTO `currency` VALUES ('89', 'Libyan Dinar', 'LYD');
INSERT INTO `currency` VALUES ('90', 'Moroccan Dirham', 'MAD');
INSERT INTO `currency` VALUES ('91', 'Malagasy Franc', 'MGF');
INSERT INTO `currency` VALUES ('92', 'Mongolian Tugrik', 'MNT');
INSERT INTO `currency` VALUES ('93', 'Macau Pataca', 'MOP');
INSERT INTO `currency` VALUES ('94', 'Mauritanian Ouguiya', 'MRO');
INSERT INTO `currency` VALUES ('95', 'Maltese Lira', 'MTL');
INSERT INTO `currency` VALUES ('96', 'Mauritius Rupee', 'MUR');
INSERT INTO `currency` VALUES ('97', 'Maldive Rufiyaa', 'MVR');
INSERT INTO `currency` VALUES ('98', 'Malawi Kwacha', 'MWK');
INSERT INTO `currency` VALUES ('99', 'Mexican Peso', 'MXP');
INSERT INTO `currency` VALUES ('100', 'Malaysian Ringgit', 'MYR');
INSERT INTO `currency` VALUES ('101', 'Mozambique Metical', 'MZM');
INSERT INTO `currency` VALUES ('102', 'Namibian Dollar', 'NAD');
INSERT INTO `currency` VALUES ('103', 'Nigerian Naira', 'NGN');
INSERT INTO `currency` VALUES ('104', 'Nicaraguan Cordoba', 'NIO');
INSERT INTO `currency` VALUES ('105', 'Norwegian Kroner', 'NOK');
INSERT INTO `currency` VALUES ('106', 'Nepalese Rupee', 'NPR');
INSERT INTO `currency` VALUES ('107', 'New Zealand Dollar', 'NZD');
INSERT INTO `currency` VALUES ('108', 'Omani Rial', 'OMR');
INSERT INTO `currency` VALUES ('109', 'Panamanian Balboa', 'PAB');
INSERT INTO `currency` VALUES ('110', 'Peruvian Nuevo Sol', 'PEN');
INSERT INTO `currency` VALUES ('111', 'Papua New Guinea Kina', 'PGK');
INSERT INTO `currency` VALUES ('112', 'Philippine Peso', 'PHP');
INSERT INTO `currency` VALUES ('113', 'Pakistan Rupee', 'PKR');
INSERT INTO `currency` VALUES ('114', 'Polish Zloty', 'PLN');
INSERT INTO `currency` VALUES ('116', 'Paraguay Guarani', 'PYG');
INSERT INTO `currency` VALUES ('117', 'Qatari Rial', 'QAR');
INSERT INTO `currency` VALUES ('118', 'Romanian Leu', 'RON');
INSERT INTO `currency` VALUES ('119', 'Rwanda Franc', 'RWF');
INSERT INTO `currency` VALUES ('120', 'Saudi Arabian Riyal', 'SAR');
INSERT INTO `currency` VALUES ('121', 'Solomon Islands Dollar', 'SBD');
INSERT INTO `currency` VALUES ('122', 'Seychelles Rupee', 'SCR');
INSERT INTO `currency` VALUES ('123', 'Sudanese Pound', 'SDP');
INSERT INTO `currency` VALUES ('124', 'Swedish Krona', 'SEK');
INSERT INTO `currency` VALUES ('125', 'Singapore Dollar', 'SGD');
INSERT INTO `currency` VALUES ('126', 'St. Helena Pound', 'SHP');
INSERT INTO `currency` VALUES ('127', 'Sierra Leone Leone', 'SLL');
INSERT INTO `currency` VALUES ('128', 'Somali Schilling', 'SOS');
INSERT INTO `currency` VALUES ('129', 'Suriname Guilder', 'SRG');
INSERT INTO `currency` VALUES ('130', 'Sao Tome and Principe Dobra', 'STD');
INSERT INTO `currency` VALUES ('131', 'Russian Ruble', 'RUB');
INSERT INTO `currency` VALUES ('132', 'El Salvador Colon', 'SVC');
INSERT INTO `currency` VALUES ('133', 'Syrian Potmd', 'SYP');
INSERT INTO `currency` VALUES ('134', 'Swaziland Lilangeni', 'SZL');
INSERT INTO `currency` VALUES ('135', 'Thai Baht', 'THB');
INSERT INTO `currency` VALUES ('136', 'Tunisian Dinar', 'TND');
INSERT INTO `currency` VALUES ('137', 'Tongan Paanga', 'TOP');
INSERT INTO `currency` VALUES ('138', 'East Timor Escudo', 'TPE');
INSERT INTO `currency` VALUES ('139', 'Turkish Lira', 'TRY');
INSERT INTO `currency` VALUES ('140', 'Trinidad and Tobago Dollar', 'TTD');
INSERT INTO `currency` VALUES ('141', 'Taiwan Dollar', 'TWD');
INSERT INTO `currency` VALUES ('142', 'Tanzanian Schilling', 'TZS');
INSERT INTO `currency` VALUES ('143', 'Uganda Shilling', 'UGX');
INSERT INTO `currency` VALUES ('144', 'US Dollar', 'USD');
INSERT INTO `currency` VALUES ('145', 'Uruguayan Peso', 'UYU');
INSERT INTO `currency` VALUES ('146', 'Venezualan Bolivar', 'VEF');
INSERT INTO `currency` VALUES ('147', 'Vietnamese Dong', 'VND');
INSERT INTO `currency` VALUES ('148', 'Vanuatu Vatu', 'VUV');
INSERT INTO `currency` VALUES ('149', 'Samoan Tala', 'WST');
INSERT INTO `currency` VALUES ('150', 'CommunautÃ© FinanciÃ¨re Africaine BEAC, Francs', 'XAF');
INSERT INTO `currency` VALUES ('151', 'Silver, Ounces', 'XAG');
INSERT INTO `currency` VALUES ('152', 'Gold, Ounces', 'XAU');
INSERT INTO `currency` VALUES ('153', 'East Caribbean Dollar', 'XCD');
INSERT INTO `currency` VALUES ('154', 'International Monetary Fund (IMF) Special Drawing Rights', 'XDR');
INSERT INTO `currency` VALUES ('155', 'CommunautÃ© FinanciÃ¨re Africaine BCEAO - Francs', 'XOF');
INSERT INTO `currency` VALUES ('156', 'Palladium Ounces', 'XPD');
INSERT INTO `currency` VALUES ('157', 'Comptoirs FranÃ§ais du Pacifique Francs', 'XPF');
INSERT INTO `currency` VALUES ('158', 'Platinum, Ounces', 'XPT');
INSERT INTO `currency` VALUES ('159', 'Democratic Yemeni Dinar', 'YDD');
INSERT INTO `currency` VALUES ('160', 'Yemeni Rial', 'YER');
INSERT INTO `currency` VALUES ('161', 'New Yugoslavia Dinar', 'YUD');
INSERT INTO `currency` VALUES ('162', 'South African Rand', 'ZAR');
INSERT INTO `currency` VALUES ('163', 'Zambian Kwacha', 'ZMK');
INSERT INTO `currency` VALUES ('164', 'Zaire Zaire', 'ZRZ');
INSERT INTO `currency` VALUES ('165', 'Zimbabwe Dollar', 'ZWD');
INSERT INTO `currency` VALUES ('166', 'Slovak Koruna', 'SKK');
INSERT INTO `currency` VALUES ('167', 'Armenian Dram', 'AMD');

-- ----------------------------
-- Table structure for `installer`
-- ----------------------------
DROP TABLE IF EXISTS `installer`;
CREATE TABLE `installer` (
  `id` int(1) NOT NULL,
  `installer_flag` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of installer
-- ----------------------------
INSERT INTO `installer` VALUES ('1', '1');

-- ----------------------------
-- Table structure for `tbl_advisor`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_advisor`;
CREATE TABLE `tbl_advisor` (
  `advisor_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_contact_id` int(11) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `linkidn` varchar(255) DEFAULT NULL,
  `view_status` int(2) NOT NULL DEFAULT '2' COMMENT '2=unread, 1=read',
  `notify_me` int(2) NOT NULL DEFAULT '1' COMMENT '1=on, 0=off',
  `full_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`advisor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_advisor
-- ----------------------------
INSERT INTO `tbl_advisor` VALUES ('54', '5', '2', '2', 'sd', '2', '1', '2  ');
INSERT INTO `tbl_advisor` VALUES ('55', '5', '12', '12', '12', '2', '1', '23 ');
INSERT INTO `tbl_advisor` VALUES ('56', '5', 'asd', 'asd', 'ad', '2', '1', 'ads');

-- ----------------------------
-- Table structure for `tbl_application_list`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_application_list`;
CREATE TABLE `tbl_application_list` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_application_list
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_assign_item`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_assign_item`;
CREATE TABLE `tbl_assign_item` (
  `assign_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `assign_inventory` int(5) NOT NULL,
  `assign_date` date NOT NULL,
  PRIMARY KEY (`assign_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_assign_item
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_attendance`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_attendance`;
CREATE TABLE `tbl_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `leave_category_id` int(11) DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `attendance_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'status 0=absent 1=present 3 = onleave',
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_attendance
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_clock`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_clock`;
CREATE TABLE `tbl_clock` (
  `clock_id` int(11) NOT NULL AUTO_INCREMENT,
  `attendance_id` int(11) NOT NULL,
  `clockin_time` time DEFAULT NULL,
  `clockout_time` time DEFAULT NULL,
  `comments` text NOT NULL,
  `clocking_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1= clockin_time',
  PRIMARY KEY (`clock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_clock
-- ----------------------------
INSERT INTO `tbl_clock` VALUES ('1', '1', '11:06:13', '11:06:20', '', '0');

-- ----------------------------
-- Table structure for `tbl_clock_history`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_clock_history`;
CREATE TABLE `tbl_clock_history` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_clock_history
-- ----------------------------
INSERT INTO `tbl_clock_history` VALUES ('1', '19', '1', '00:00:00', '21:58:46', 'sdadad', '1', '1', '1', '2018-05-12 21:58:52');

-- ----------------------------
-- Table structure for `tbl_days`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_days`;
CREATE TABLE `tbl_days` (
  `day_id` int(5) NOT NULL AUTO_INCREMENT,
  `day` varchar(100) NOT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_days
-- ----------------------------
INSERT INTO `tbl_days` VALUES ('1', 'Saturday');
INSERT INTO `tbl_days` VALUES ('2', 'Sunday');
INSERT INTO `tbl_days` VALUES ('3', 'Monday');
INSERT INTO `tbl_days` VALUES ('4', 'Tuesday');
INSERT INTO `tbl_days` VALUES ('5', 'Wednesday');
INSERT INTO `tbl_days` VALUES ('6', 'Thursday');
INSERT INTO `tbl_days` VALUES ('7', 'Friday');

-- ----------------------------
-- Table structure for `tbl_department`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_department`;
CREATE TABLE `tbl_department` (
  `department_id` int(5) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_department
-- ----------------------------
INSERT INTO `tbl_department` VALUES ('1', 'Back End Developper');

-- ----------------------------
-- Table structure for `tbl_designations`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_designations`;
CREATE TABLE `tbl_designations` (
  `designations_id` int(5) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `designations` varchar(100) NOT NULL,
  PRIMARY KEY (`designations_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_designations
-- ----------------------------
INSERT INTO `tbl_designations` VALUES ('1', '1', 'PHP');

-- ----------------------------
-- Table structure for `tbl_draft`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_draft`;
CREATE TABLE `tbl_draft` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_draft
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_employee`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE `tbl_employee` (
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
  `present_address2` varchar(255) NOT NULL,
  `state_province_region` varchar(255) NOT NULL,
  `zip_postal` varchar(100) NOT NULL,
  `interac` varchar(255) NOT NULL,
  `paypal` varchar(255) NOT NULL,
  `bitcoin` varchar(255) NOT NULL,
  `bitcoin_account` varchar(255) NOT NULL,
  `etherum` varchar(255) NOT NULL,
  `etherum_account` varchar(255) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_employee
-- ----------------------------
INSERT INTO `tbl_employee` VALUES ('21', '', 'asdadad', 'asdada', '1990-06-18', 'Male', 'Married', 'asdadad', '7', '', 'img/uploads/^316AEC5E8D8E5CB814010BF06B4E9E458ECA9F6799790425FA^pimgpsh_fullsize_distr1.jpg', 'D:/WEB/xamp/htdocs/Mher/codeigniter/public/img/uploads/^316AEC5E8D8E5CB814010BF06B4E9E458ECA9F6799790425FA^pimgpsh_fullsize_distr1.jpg', 'asdadad', 'qweqwe', '7', '21313', 'asdasad', 'shahinyanm@gmail.com', '0', '0000-00-00', '1', 'asdada', 'asdad', 'asdad', 'adadad', 'asdadad', 'asdadad', '', 'asdadad', '');

-- ----------------------------
-- Table structure for `tbl_employee_award`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee_award`;
CREATE TABLE `tbl_employee_award` (
  `employee_award_id` int(11) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(100) NOT NULL,
  `employee_id` int(2) NOT NULL,
  `gift_item` varchar(300) NOT NULL,
  `award_amount` int(5) NOT NULL,
  `award_date` varchar(10) NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  PRIMARY KEY (`employee_award_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_employee_award
-- ----------------------------
INSERT INTO `tbl_employee_award` VALUES ('3', 'dsfsfsf', '19', 'sdfsfs', '0', '2018-05', '2', '1');

-- ----------------------------
-- Table structure for `tbl_employee_bank`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee_bank`;
CREATE TABLE `tbl_employee_bank` (
  `employee_bank_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `type_of_account` varchar(255) NOT NULL DEFAULT 'employee',
  `holder_name` varchar(255) NOT NULL,
  `bank_address` varchar(255) NOT NULL,
  `aba_check_routing_number` varchar(255) NOT NULL,
  `ach_routing_transit_number` varchar(255) NOT NULL,
  `wire_routing_nubmer` varchar(255) NOT NULL,
  `bank_account_number` varchar(255) NOT NULL,
  PRIMARY KEY (`employee_bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_employee_bank
-- ----------------------------
INSERT INTO `tbl_employee_bank` VALUES ('9', '19', 'asdadas', 'employee', 'asdadad', 'asdadad', 'asdada', 'asdasd', 'asdadad', '');
INSERT INTO `tbl_employee_bank` VALUES ('10', '21', 'asdadad', 'employee', 'asdadad', 'asdadad', '21313', '12313', '12313', '12313');

-- ----------------------------
-- Table structure for `tbl_employee_document`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee_document`;
CREATE TABLE `tbl_employee_document` (
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_employee_document
-- ----------------------------
INSERT INTO `tbl_employee_document` VALUES ('9', '19', 'img/uploads/Документ_Microsoft_Word.docx', 'D:/WEB/xamp/htdocs/Mher/codeigniter/public/img/uploads/Документ_Microsoft_Word.docx', 'Документ_Microsoft_Word.docx', 'img/uploads/Документ_Microsoft_Word1.docx', 'Документ_Microsoft_Word1.docx', 'D:/WEB/xamp/htdocs/Mher/codeigniter/public/img/uploads/Документ_Microsoft_Word1.docx', 'img/uploads/Документ_Microsoft_Word2.docx', 'Документ_Microsoft_Word2.docx', 'D:/WEB/xamp/htdocs/Mher/codeigniter/public/img/uploads/Документ_Microsoft_Word2.docx', 'img/uploads/Документ_Microsoft_Word3.docx', 'Документ_Microsoft_Word3.docx', 'D:/WEB/xamp/htdocs/Mher/codeigniter/public/img/uploads/Документ_Microsoft_Word3.docx', 'img/uploads/Документ_Microsoft_Word4.docx', 'Документ_Microsoft_Word4.docx', 'D:/WEB/xamp/htdocs/Mher/codeigniter/public/img/uploads/Документ_Microsoft_Word4.docx', 'img/uploads/Документ_Microsoft_Word5.docx', 'Документ_Microsoft_Word5.docx', 'D:/WEB/xamp/htdocs/Mher/codeigniter/public/img/uploads/Документ_Microsoft_Word5.docx');
INSERT INTO `tbl_employee_document` VALUES ('10', '21', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `tbl_employee_login`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee_login`;
CREATE TABLE `tbl_employee_login` (
  `employee_login_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `activate` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`employee_login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_employee_login
-- ----------------------------
INSERT INTO `tbl_employee_login` VALUES ('20', '21', 'shahinyanm@gmail.com', '03e092b2f7f3b896956d7c8e00a9094b7ec059d75225057a497338097dbb6fccc16d64da0f35ccbdbec761350c08561edaa59f022457c8c94df04f72c2cf66a5', '1');

-- ----------------------------
-- Table structure for `tbl_employee_payroll`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee_payroll`;
CREATE TABLE `tbl_employee_payroll` (
  `payroll_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `hourly_rate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`payroll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_employee_payroll
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_event`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_event`;
CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `event_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_event
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_expense`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_expense`;
CREATE TABLE `tbl_expense` (
  `expense_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `item_name` varchar(300) NOT NULL,
  `purchase_from` varchar(300) NOT NULL,
  `purchase_date` date NOT NULL,
  `amount` double NOT NULL,
  `expense_status` enum('pending','approved','cancel') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_expense
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_expense_bill_copy`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_expense_bill_copy`;
CREATE TABLE `tbl_expense_bill_copy` (
  `expense_bill_copy_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_id` int(11) NOT NULL,
  `bill_copy` text CHARACTER SET latin1 NOT NULL,
  `bill_copy_filename` text CHARACTER SET latin1 NOT NULL,
  `bill_copy_path` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`expense_bill_copy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_expense_bill_copy
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_gsettings`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_gsettings`;
CREATE TABLE `tbl_gsettings` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_gsettings
-- ----------------------------
INSERT INTO `tbl_gsettings` VALUES ('1', 'HR - Lite', 'img/uploads/lite2.png', 'E:/xampp/htdocs/hr_lite_main/img/uploads/lite2.png', 'admin@example.com', 'Dhaka', 'Dhaka', '19', '', '01723611125', '', '', '', 'USD', 'Asia/Dhaka');

-- ----------------------------
-- Table structure for `tbl_holiday`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_holiday`;
CREATE TABLE `tbl_holiday` (
  `holiday_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `assigned_to` text NOT NULL,
  `view_status` int(11) NOT NULL DEFAULT '2' COMMENT '1= read, 2 = unread',
  `notify_me` int(11) NOT NULL DEFAULT '1' COMMENT '1=on,0=off',
  PRIMARY KEY (`holiday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_holiday
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_hourly_rate`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hourly_rate`;
CREATE TABLE `tbl_hourly_rate` (
  `hourly_rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `hourly_grade` varchar(200) NOT NULL,
  `hourly_rate` varchar(50) NOT NULL,
  `overtime_hours` varchar(20) NOT NULL,
  PRIMARY KEY (`hourly_rate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_hourly_rate
-- ----------------------------
INSERT INTO `tbl_hourly_rate` VALUES ('1', 'sasdad', '23', '12');

-- ----------------------------
-- Table structure for `tbl_inbox`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_inbox`;
CREATE TABLE `tbl_inbox` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_inbox
-- ----------------------------
INSERT INTO `tbl_inbox` VALUES ('1', null, '1', 'shahinyanm@gmail.com', 'info@trescoder.com', 'asdada', '<p>asdad</p>\r\n', null, null, null, '2018-05-12 03:29:26', '1', '1', 'No');
INSERT INTO `tbl_inbox` VALUES ('2', null, '2', 'sada@mail.ru', 'info@trescoder.com', 'asdada', '<p>asdad</p>\r\n', null, null, null, '2018-05-12 03:29:26', '2', '1', 'No');
INSERT INTO `tbl_inbox` VALUES ('3', '19', null, 'info@trescoder.com', 'shahinyanm@gmail.com', 'sadadad', '<p>asdadad</p>\r\n', null, null, null, '2018-05-12 23:00:05', '1', '1', 'No');

-- ----------------------------
-- Table structure for `tbl_item_history`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_item_history`;
CREATE TABLE `tbl_item_history` (
  `item_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `inventory` int(5) NOT NULL,
  `purchase_date` date NOT NULL,
  PRIMARY KEY (`item_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_item_history
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_job_appliactions`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_job_appliactions`;
CREATE TABLE `tbl_job_appliactions` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_job_appliactions
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_job_circular`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_job_circular`;
CREATE TABLE `tbl_job_circular` (
  `job_circular_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_position` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `last_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=publish 2=unpublish',
  `published_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_circular_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_job_circular
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_languages`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_languages`;
CREATE TABLE `tbl_languages` (
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(2) DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_languages
-- ----------------------------
INSERT INTO `tbl_languages` VALUES ('en', 'english', 'us', '1');
INSERT INTO `tbl_languages` VALUES ('ru', 'russian', 'ru', '1');

-- ----------------------------
-- Table structure for `tbl_leave_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_leave_category`;
CREATE TABLE `tbl_leave_category` (
  `leave_category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `leave_quota` int(2) NOT NULL,
  PRIMARY KEY (`leave_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_leave_category
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_locales`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_locales`;
CREATE TABLE `tbl_locales` (
  `locale` varchar(10) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_locales
-- ----------------------------
INSERT INTO `tbl_locales` VALUES ('aa_DJ', 'aa', 'afar', 'Afar (Djibouti)');
INSERT INTO `tbl_locales` VALUES ('aa_ER', 'aa', 'afar', 'Afar (Eritrea)');
INSERT INTO `tbl_locales` VALUES ('aa_ET', 'aa', 'afar', 'Afar (Ethiopia)');
INSERT INTO `tbl_locales` VALUES ('af_ZA', 'af', 'afrikaans', 'Afrikaans (South Africa)');
INSERT INTO `tbl_locales` VALUES ('am_ET', 'am', 'amharic', 'Amharic (Ethiopia)');
INSERT INTO `tbl_locales` VALUES ('an_ES', 'an', 'aragonese', 'Aragonese (Spain)');
INSERT INTO `tbl_locales` VALUES ('ar_AE', 'ar', 'arabic', 'Arabic (United Arab Emirates)');
INSERT INTO `tbl_locales` VALUES ('ar_BH', 'ar', 'arabic', 'Arabic (Bahrain)');
INSERT INTO `tbl_locales` VALUES ('ar_DZ', 'ar', 'arabic', 'Arabic (Algeria)');
INSERT INTO `tbl_locales` VALUES ('ar_EG', 'ar', 'arabic', 'Arabic (Egypt)');
INSERT INTO `tbl_locales` VALUES ('ar_IN', 'ar', 'arabic', 'Arabic (India)');
INSERT INTO `tbl_locales` VALUES ('ar_IQ', 'ar', 'arabic', 'Arabic (Iraq)');
INSERT INTO `tbl_locales` VALUES ('ar_JO', 'ar', 'arabic', 'Arabic (Jordan)');
INSERT INTO `tbl_locales` VALUES ('ar_KW', 'ar', 'arabic', 'Arabic (Kuwait)');
INSERT INTO `tbl_locales` VALUES ('ar_LB', 'ar', 'arabic', 'Arabic (Lebanon)');
INSERT INTO `tbl_locales` VALUES ('ar_LY', 'ar', 'arabic', 'Arabic (Libya)');
INSERT INTO `tbl_locales` VALUES ('ar_MA', 'ar', 'arabic', 'Arabic (Morocco)');
INSERT INTO `tbl_locales` VALUES ('ar_OM', 'ar', 'arabic', 'Arabic (Oman)');
INSERT INTO `tbl_locales` VALUES ('ar_QA', 'ar', 'arabic', 'Arabic (Qatar)');
INSERT INTO `tbl_locales` VALUES ('ar_SA', 'ar', 'arabic', 'Arabic (Saudi Arabia)');
INSERT INTO `tbl_locales` VALUES ('ar_SD', 'ar', 'arabic', 'Arabic (Sudan)');
INSERT INTO `tbl_locales` VALUES ('ar_SY', 'ar', 'arabic', 'Arabic (Syria)');
INSERT INTO `tbl_locales` VALUES ('ar_TN', 'ar', 'arabic', 'Arabic (Tunisia)');
INSERT INTO `tbl_locales` VALUES ('ar_YE', 'ar', 'arabic', 'Arabic (Yemen)');
INSERT INTO `tbl_locales` VALUES ('ast_ES', 'ast', 'asturian', 'Asturian (Spain)');
INSERT INTO `tbl_locales` VALUES ('as_IN', 'as', 'assamese', 'Assamese (India)');
INSERT INTO `tbl_locales` VALUES ('az_AZ', 'az', 'azerbaijani', 'Azerbaijani (Azerbaijan)');
INSERT INTO `tbl_locales` VALUES ('az_TR', 'az', 'azerbaijani', 'Azerbaijani (Turkey)');
INSERT INTO `tbl_locales` VALUES ('bem_ZM', 'bem', 'bemba', 'Bemba (Zambia)');
INSERT INTO `tbl_locales` VALUES ('ber_DZ', 'ber', 'berber', 'Berber (Algeria)');
INSERT INTO `tbl_locales` VALUES ('ber_MA', 'ber', 'berber', 'Berber (Morocco)');
INSERT INTO `tbl_locales` VALUES ('be_BY', 'be', 'belarusian', 'Belarusian (Belarus)');
INSERT INTO `tbl_locales` VALUES ('bg_BG', 'bg', 'bulgarian', 'Bulgarian (Bulgaria)');
INSERT INTO `tbl_locales` VALUES ('bn_BD', 'bn', 'bengali', 'Bengali (Bangladesh)');
INSERT INTO `tbl_locales` VALUES ('bn_IN', 'bn', 'bengali', 'Bengali (India)');
INSERT INTO `tbl_locales` VALUES ('bo_CN', 'bo', 'tibetan', 'Tibetan (China)');
INSERT INTO `tbl_locales` VALUES ('bo_IN', 'bo', 'tibetan', 'Tibetan (India)');
INSERT INTO `tbl_locales` VALUES ('br_FR', 'br', 'breton', 'Breton (France)');
INSERT INTO `tbl_locales` VALUES ('bs_BA', 'bs', 'bosnian', 'Bosnian (Bosnia and Herzegovina)');
INSERT INTO `tbl_locales` VALUES ('byn_ER', 'byn', 'blin', 'Blin (Eritrea)');
INSERT INTO `tbl_locales` VALUES ('ca_AD', 'ca', 'catalan', 'Catalan (Andorra)');
INSERT INTO `tbl_locales` VALUES ('ca_ES', 'ca', 'catalan', 'Catalan (Spain)');
INSERT INTO `tbl_locales` VALUES ('ca_FR', 'ca', 'catalan', 'Catalan (France)');
INSERT INTO `tbl_locales` VALUES ('ca_IT', 'ca', 'catalan', 'Catalan (Italy)');
INSERT INTO `tbl_locales` VALUES ('crh_UA', 'crh', 'crimean turkish', 'Crimean Turkish (Ukraine)');
INSERT INTO `tbl_locales` VALUES ('csb_PL', 'csb', 'kashubian', 'Kashubian (Poland)');
INSERT INTO `tbl_locales` VALUES ('cs_CZ', 'cs', 'czech', 'Czech (Czech Republic)');
INSERT INTO `tbl_locales` VALUES ('cv_RU', 'cv', 'chuvash', 'Chuvash (Russia)');
INSERT INTO `tbl_locales` VALUES ('cy_GB', 'cy', 'welsh', 'Welsh (United Kingdom)');
INSERT INTO `tbl_locales` VALUES ('da_DK', 'da', 'danish', 'Danish (Denmark)');
INSERT INTO `tbl_locales` VALUES ('de_AT', 'de', 'german', 'German (Austria)');
INSERT INTO `tbl_locales` VALUES ('de_BE', 'de', 'german', 'German (Belgium)');
INSERT INTO `tbl_locales` VALUES ('de_CH', 'de', 'german', 'German (Switzerland)');
INSERT INTO `tbl_locales` VALUES ('de_DE', 'de', 'german', 'German (Germany)');
INSERT INTO `tbl_locales` VALUES ('de_LI', 'de', 'german', 'German (Liechtenstein)');
INSERT INTO `tbl_locales` VALUES ('de_LU', 'de', 'german', 'German (Luxembourg)');
INSERT INTO `tbl_locales` VALUES ('dv_MV', 'dv', 'divehi', 'Divehi (Maldives)');
INSERT INTO `tbl_locales` VALUES ('dz_BT', 'dz', 'dzongkha', 'Dzongkha (Bhutan)');
INSERT INTO `tbl_locales` VALUES ('ee_GH', 'ee', 'ewe', 'Ewe (Ghana)');
INSERT INTO `tbl_locales` VALUES ('el_CY', 'el', 'greek', 'Greek (Cyprus)');
INSERT INTO `tbl_locales` VALUES ('el_GR', 'el', 'greek', 'Greek (Greece)');
INSERT INTO `tbl_locales` VALUES ('en_AG', 'en', 'english', 'English (Antigua and Barbuda)');
INSERT INTO `tbl_locales` VALUES ('en_AS', 'en', 'english', 'English (American Samoa)');
INSERT INTO `tbl_locales` VALUES ('en_AU', 'en', 'english', 'English (Australia)');
INSERT INTO `tbl_locales` VALUES ('en_BW', 'en', 'english', 'English (Botswana)');
INSERT INTO `tbl_locales` VALUES ('en_CA', 'en', 'english', 'English (Canada)');
INSERT INTO `tbl_locales` VALUES ('en_DK', 'en', 'english', 'English (Denmark)');
INSERT INTO `tbl_locales` VALUES ('en_GB', 'en', 'english', 'English (United Kingdom)');
INSERT INTO `tbl_locales` VALUES ('en_GU', 'en', 'english', 'English (Guam)');
INSERT INTO `tbl_locales` VALUES ('en_HK', 'en', 'english', 'English (Hong Kong SAR China)');
INSERT INTO `tbl_locales` VALUES ('en_IE', 'en', 'english', 'English (Ireland)');
INSERT INTO `tbl_locales` VALUES ('en_IN', 'en', 'english', 'English (India)');
INSERT INTO `tbl_locales` VALUES ('en_JM', 'en', 'english', 'English (Jamaica)');
INSERT INTO `tbl_locales` VALUES ('en_MH', 'en', 'english', 'English (Marshall Islands)');
INSERT INTO `tbl_locales` VALUES ('en_MP', 'en', 'english', 'English (Northern Mariana Islands)');
INSERT INTO `tbl_locales` VALUES ('en_MU', 'en', 'english', 'English (Mauritius)');
INSERT INTO `tbl_locales` VALUES ('en_NG', 'en', 'english', 'English (Nigeria)');
INSERT INTO `tbl_locales` VALUES ('en_NZ', 'en', 'english', 'English (New Zealand)');
INSERT INTO `tbl_locales` VALUES ('en_PH', 'en', 'english', 'English (Philippines)');
INSERT INTO `tbl_locales` VALUES ('en_SG', 'en', 'english', 'English (Singapore)');
INSERT INTO `tbl_locales` VALUES ('en_TT', 'en', 'english', 'English (Trinidad and Tobago)');
INSERT INTO `tbl_locales` VALUES ('en_US', 'en', 'english', 'English (United States)');
INSERT INTO `tbl_locales` VALUES ('en_VI', 'en', 'english', 'English (Virgin Islands)');
INSERT INTO `tbl_locales` VALUES ('en_ZA', 'en', 'english', 'English (South Africa)');
INSERT INTO `tbl_locales` VALUES ('en_ZM', 'en', 'english', 'English (Zambia)');
INSERT INTO `tbl_locales` VALUES ('en_ZW', 'en', 'english', 'English (Zimbabwe)');
INSERT INTO `tbl_locales` VALUES ('eo', 'eo', 'esperanto', 'Esperanto');
INSERT INTO `tbl_locales` VALUES ('es_AR', 'es', 'spanish', 'Spanish (Argentina)');
INSERT INTO `tbl_locales` VALUES ('es_BO', 'es', 'spanish', 'Spanish (Bolivia)');
INSERT INTO `tbl_locales` VALUES ('es_CL', 'es', 'spanish', 'Spanish (Chile)');
INSERT INTO `tbl_locales` VALUES ('es_CO', 'es', 'spanish', 'Spanish (Colombia)');
INSERT INTO `tbl_locales` VALUES ('es_CR', 'es', 'spanish', 'Spanish (Costa Rica)');
INSERT INTO `tbl_locales` VALUES ('es_DO', 'es', 'spanish', 'Spanish (Dominican Republic)');
INSERT INTO `tbl_locales` VALUES ('es_EC', 'es', 'spanish', 'Spanish (Ecuador)');
INSERT INTO `tbl_locales` VALUES ('es_ES', 'es', 'spanish', 'Spanish (Spain)');
INSERT INTO `tbl_locales` VALUES ('es_GT', 'es', 'spanish', 'Spanish (Guatemala)');
INSERT INTO `tbl_locales` VALUES ('es_HN', 'es', 'spanish', 'Spanish (Honduras)');
INSERT INTO `tbl_locales` VALUES ('es_MX', 'es', 'spanish', 'Spanish (Mexico)');
INSERT INTO `tbl_locales` VALUES ('es_NI', 'es', 'spanish', 'Spanish (Nicaragua)');
INSERT INTO `tbl_locales` VALUES ('es_PA', 'es', 'spanish', 'Spanish (Panama)');
INSERT INTO `tbl_locales` VALUES ('es_PE', 'es', 'spanish', 'Spanish (Peru)');
INSERT INTO `tbl_locales` VALUES ('es_PR', 'es', 'spanish', 'Spanish (Puerto Rico)');
INSERT INTO `tbl_locales` VALUES ('es_PY', 'es', 'spanish', 'Spanish (Paraguay)');
INSERT INTO `tbl_locales` VALUES ('es_SV', 'es', 'spanish', 'Spanish (El Salvador)');
INSERT INTO `tbl_locales` VALUES ('es_US', 'es', 'spanish', 'Spanish (United States)');
INSERT INTO `tbl_locales` VALUES ('es_UY', 'es', 'spanish', 'Spanish (Uruguay)');
INSERT INTO `tbl_locales` VALUES ('es_VE', 'es', 'spanish', 'Spanish (Venezuela)');
INSERT INTO `tbl_locales` VALUES ('et_EE', 'et', 'estonian', 'Estonian (Estonia)');
INSERT INTO `tbl_locales` VALUES ('eu_ES', 'eu', 'basque', 'Basque (Spain)');
INSERT INTO `tbl_locales` VALUES ('eu_FR', 'eu', 'basque', 'Basque (France)');
INSERT INTO `tbl_locales` VALUES ('fa_AF', 'fa', 'persian', 'Persian (Afghanistan)');
INSERT INTO `tbl_locales` VALUES ('fa_IR', 'fa', 'persian', 'Persian (Iran)');
INSERT INTO `tbl_locales` VALUES ('ff_SN', 'ff', 'fulah', 'Fulah (Senegal)');
INSERT INTO `tbl_locales` VALUES ('fil_PH', 'fil', 'filipino', 'Filipino (Philippines)');
INSERT INTO `tbl_locales` VALUES ('fi_FI', 'fi', 'finnish', 'Finnish (Finland)');
INSERT INTO `tbl_locales` VALUES ('fo_FO', 'fo', 'faroese', 'Faroese (Faroe Islands)');
INSERT INTO `tbl_locales` VALUES ('fr_BE', 'fr', 'french', 'French (Belgium)');
INSERT INTO `tbl_locales` VALUES ('fr_BF', 'fr', 'french', 'French (Burkina Faso)');
INSERT INTO `tbl_locales` VALUES ('fr_BI', 'fr', 'french', 'French (Burundi)');
INSERT INTO `tbl_locales` VALUES ('fr_BJ', 'fr', 'french', 'French (Benin)');
INSERT INTO `tbl_locales` VALUES ('fr_CA', 'fr', 'french', 'French (Canada)');
INSERT INTO `tbl_locales` VALUES ('fr_CF', 'fr', 'french', 'French (Central African Republic)');
INSERT INTO `tbl_locales` VALUES ('fr_CG', 'fr', 'french', 'French (Congo)');
INSERT INTO `tbl_locales` VALUES ('fr_CH', 'fr', 'french', 'French (Switzerland)');
INSERT INTO `tbl_locales` VALUES ('fr_CM', 'fr', 'french', 'French (Cameroon)');
INSERT INTO `tbl_locales` VALUES ('fr_FR', 'fr', 'french', 'French (France)');
INSERT INTO `tbl_locales` VALUES ('fr_GA', 'fr', 'french', 'French (Gabon)');
INSERT INTO `tbl_locales` VALUES ('fr_GN', 'fr', 'french', 'French (Guinea)');
INSERT INTO `tbl_locales` VALUES ('fr_GP', 'fr', 'french', 'French (Guadeloupe)');
INSERT INTO `tbl_locales` VALUES ('fr_GQ', 'fr', 'french', 'French (Equatorial Guinea)');
INSERT INTO `tbl_locales` VALUES ('fr_KM', 'fr', 'french', 'French (Comoros)');
INSERT INTO `tbl_locales` VALUES ('fr_LU', 'fr', 'french', 'French (Luxembourg)');
INSERT INTO `tbl_locales` VALUES ('fr_MC', 'fr', 'french', 'French (Monaco)');
INSERT INTO `tbl_locales` VALUES ('fr_MG', 'fr', 'french', 'French (Madagascar)');
INSERT INTO `tbl_locales` VALUES ('fr_ML', 'fr', 'french', 'French (Mali)');
INSERT INTO `tbl_locales` VALUES ('fr_MQ', 'fr', 'french', 'French (Martinique)');
INSERT INTO `tbl_locales` VALUES ('fr_NE', 'fr', 'french', 'French (Niger)');
INSERT INTO `tbl_locales` VALUES ('fr_SN', 'fr', 'french', 'French (Senegal)');
INSERT INTO `tbl_locales` VALUES ('fr_TD', 'fr', 'french', 'French (Chad)');
INSERT INTO `tbl_locales` VALUES ('fr_TG', 'fr', 'french', 'French (Togo)');
INSERT INTO `tbl_locales` VALUES ('fur_IT', 'fur', 'friulian', 'Friulian (Italy)');
INSERT INTO `tbl_locales` VALUES ('fy_DE', 'fy', 'western frisian', 'Western Frisian (Germany)');
INSERT INTO `tbl_locales` VALUES ('fy_NL', 'fy', 'western frisian', 'Western Frisian (Netherlands)');
INSERT INTO `tbl_locales` VALUES ('ga_IE', 'ga', 'irish', 'Irish (Ireland)');
INSERT INTO `tbl_locales` VALUES ('gd_GB', 'gd', 'scottish gaelic', 'Scottish Gaelic (United Kingdom)');
INSERT INTO `tbl_locales` VALUES ('gez_ER', 'gez', 'geez', 'Geez (Eritrea)');
INSERT INTO `tbl_locales` VALUES ('gez_ET', 'gez', 'geez', 'Geez (Ethiopia)');
INSERT INTO `tbl_locales` VALUES ('gl_ES', 'gl', 'galician', 'Galician (Spain)');
INSERT INTO `tbl_locales` VALUES ('gu_IN', 'gu', 'gujarati', 'Gujarati (India)');
INSERT INTO `tbl_locales` VALUES ('gv_GB', 'gv', 'manx', 'Manx (United Kingdom)');
INSERT INTO `tbl_locales` VALUES ('ha_NG', 'ha', 'hausa', 'Hausa (Nigeria)');
INSERT INTO `tbl_locales` VALUES ('he_IL', 'he', 'hebrew', 'Hebrew (Israel)');
INSERT INTO `tbl_locales` VALUES ('hi_IN', 'hi', 'hindi', 'Hindi (India)');
INSERT INTO `tbl_locales` VALUES ('hr_HR', 'hr', 'croatian', 'Croatian (Croatia)');
INSERT INTO `tbl_locales` VALUES ('hsb_DE', 'hsb', 'upper sorbian', 'Upper Sorbian (Germany)');
INSERT INTO `tbl_locales` VALUES ('ht_HT', 'ht', 'haitian', 'Haitian (Haiti)');
INSERT INTO `tbl_locales` VALUES ('hu_HU', 'hu', 'hungarian', 'Hungarian (Hungary)');
INSERT INTO `tbl_locales` VALUES ('hy_AM', 'hy', 'armenian', 'Armenian (Armenia)');
INSERT INTO `tbl_locales` VALUES ('ia', 'ia', 'interlingua', 'Interlingua');
INSERT INTO `tbl_locales` VALUES ('id_ID', 'id', 'indonesian', 'Indonesian (Indonesia)');
INSERT INTO `tbl_locales` VALUES ('ig_NG', 'ig', 'igbo', 'Igbo (Nigeria)');
INSERT INTO `tbl_locales` VALUES ('ik_CA', 'ik', 'inupiaq', 'Inupiaq (Canada)');
INSERT INTO `tbl_locales` VALUES ('is_IS', 'is', 'icelandic', 'Icelandic (Iceland)');
INSERT INTO `tbl_locales` VALUES ('it_CH', 'it', 'italian', 'Italian (Switzerland)');
INSERT INTO `tbl_locales` VALUES ('it_IT', 'it', 'italian', 'Italian (Italy)');
INSERT INTO `tbl_locales` VALUES ('iu_CA', 'iu', 'inuktitut', 'Inuktitut (Canada)');
INSERT INTO `tbl_locales` VALUES ('ja_JP', 'ja', 'japanese', 'Japanese (Japan)');
INSERT INTO `tbl_locales` VALUES ('ka_GE', 'ka', 'georgian', 'Georgian (Georgia)');
INSERT INTO `tbl_locales` VALUES ('kk_KZ', 'kk', 'kazakh', 'Kazakh (Kazakhstan)');
INSERT INTO `tbl_locales` VALUES ('kl_GL', 'kl', 'kalaallisut', 'Kalaallisut (Greenland)');
INSERT INTO `tbl_locales` VALUES ('km_KH', 'km', 'khmer', 'Khmer (Cambodia)');
INSERT INTO `tbl_locales` VALUES ('kn_IN', 'kn', 'kannada', 'Kannada (India)');
INSERT INTO `tbl_locales` VALUES ('kok_IN', 'kok', 'konkani', 'Konkani (India)');
INSERT INTO `tbl_locales` VALUES ('ko_KR', 'ko', 'korean', 'Korean (South Korea)');
INSERT INTO `tbl_locales` VALUES ('ks_IN', 'ks', 'kashmiri', 'Kashmiri (India)');
INSERT INTO `tbl_locales` VALUES ('ku_TR', 'ku', 'kurdish', 'Kurdish (Turkey)');
INSERT INTO `tbl_locales` VALUES ('kw_GB', 'kw', 'cornish', 'Cornish (United Kingdom)');
INSERT INTO `tbl_locales` VALUES ('ky_KG', 'ky', 'kirghiz', 'Kirghiz (Kyrgyzstan)');
INSERT INTO `tbl_locales` VALUES ('lg_UG', 'lg', 'ganda', 'Ganda (Uganda)');
INSERT INTO `tbl_locales` VALUES ('li_BE', 'li', 'limburgish', 'Limburgish (Belgium)');
INSERT INTO `tbl_locales` VALUES ('li_NL', 'li', 'limburgish', 'Limburgish (Netherlands)');
INSERT INTO `tbl_locales` VALUES ('lo_LA', 'lo', 'lao', 'Lao (Laos)');
INSERT INTO `tbl_locales` VALUES ('lt_LT', 'lt', 'lithuanian', 'Lithuanian (Lithuania)');
INSERT INTO `tbl_locales` VALUES ('lv_LV', 'lv', 'latvian', 'Latvian (Latvia)');
INSERT INTO `tbl_locales` VALUES ('mai_IN', 'mai', 'maithili', 'Maithili (India)');
INSERT INTO `tbl_locales` VALUES ('mg_MG', 'mg', 'malagasy', 'Malagasy (Madagascar)');
INSERT INTO `tbl_locales` VALUES ('mi_NZ', 'mi', 'maori', 'Maori (New Zealand)');
INSERT INTO `tbl_locales` VALUES ('mk_MK', 'mk', 'macedonian', 'Macedonian (Macedonia)');
INSERT INTO `tbl_locales` VALUES ('ml_IN', 'ml', 'malayalam', 'Malayalam (India)');
INSERT INTO `tbl_locales` VALUES ('mn_MN', 'mn', 'mongolian', 'Mongolian (Mongolia)');
INSERT INTO `tbl_locales` VALUES ('mr_IN', 'mr', 'marathi', 'Marathi (India)');
INSERT INTO `tbl_locales` VALUES ('ms_BN', 'ms', 'malay', 'Malay (Brunei)');
INSERT INTO `tbl_locales` VALUES ('ms_MY', 'ms', 'malay', 'Malay (Malaysia)');
INSERT INTO `tbl_locales` VALUES ('mt_MT', 'mt', 'maltese', 'Maltese (Malta)');
INSERT INTO `tbl_locales` VALUES ('my_MM', 'my', 'burmese', 'Burmese (Myanmar)');
INSERT INTO `tbl_locales` VALUES ('naq_NA', 'naq', 'namibia', 'Namibia');
INSERT INTO `tbl_locales` VALUES ('nb_NO', 'nb', 'norwegian bokmål', 'Norwegian Bokmål (Norway)');
INSERT INTO `tbl_locales` VALUES ('nds_DE', 'nds', 'low german', 'Low German (Germany)');
INSERT INTO `tbl_locales` VALUES ('nds_NL', 'nds', 'low german', 'Low German (Netherlands)');
INSERT INTO `tbl_locales` VALUES ('ne_NP', 'ne', 'nepali', 'Nepali (Nepal)');
INSERT INTO `tbl_locales` VALUES ('nl_AW', 'nl', 'dutch', 'Dutch (Aruba)');
INSERT INTO `tbl_locales` VALUES ('nl_BE', 'nl', 'dutch', 'Dutch (Belgium)');
INSERT INTO `tbl_locales` VALUES ('nl_NL', 'nl', 'dutch', 'Dutch (Netherlands)');
INSERT INTO `tbl_locales` VALUES ('nn_NO', 'nn', 'norwegian nynorsk', 'Norwegian Nynorsk (Norway)');
INSERT INTO `tbl_locales` VALUES ('no_NO', 'no', 'norwegian', 'Norwegian (Norway)');
INSERT INTO `tbl_locales` VALUES ('nr_ZA', 'nr', 'south ndebele', 'South Ndebele (South Africa)');
INSERT INTO `tbl_locales` VALUES ('nso_ZA', 'nso', 'northern sotho', 'Northern Sotho (South Africa)');
INSERT INTO `tbl_locales` VALUES ('oc_FR', 'oc', 'occitan', 'Occitan (France)');
INSERT INTO `tbl_locales` VALUES ('om_ET', 'om', 'oromo', 'Oromo (Ethiopia)');
INSERT INTO `tbl_locales` VALUES ('om_KE', 'om', 'oromo', 'Oromo (Kenya)');
INSERT INTO `tbl_locales` VALUES ('or_IN', 'or', 'oriya', 'Oriya (India)');
INSERT INTO `tbl_locales` VALUES ('os_RU', 'os', 'ossetic', 'Ossetic (Russia)');
INSERT INTO `tbl_locales` VALUES ('pap_AN', 'pap', 'papiamento', 'Papiamento (Netherlands Antilles)');
INSERT INTO `tbl_locales` VALUES ('pa_IN', 'pa', 'punjabi', 'Punjabi (India)');
INSERT INTO `tbl_locales` VALUES ('pa_PK', 'pa', 'punjabi', 'Punjabi (Pakistan)');
INSERT INTO `tbl_locales` VALUES ('pl_PL', 'pl', 'polish', 'Polish (Poland)');
INSERT INTO `tbl_locales` VALUES ('ps_AF', 'ps', 'pashto', 'Pashto (Afghanistan)');
INSERT INTO `tbl_locales` VALUES ('pt_BR', 'pt', 'portuguese', 'Portuguese (Brazil)');
INSERT INTO `tbl_locales` VALUES ('pt_GW', 'pt', 'portuguese', 'Portuguese (Guinea-Bissau)');
INSERT INTO `tbl_locales` VALUES ('pt_PT', 'pt', 'portuguese', 'Portuguese (Portugal)');
INSERT INTO `tbl_locales` VALUES ('ro_MD', 'ro', 'romanian', 'Romanian (Moldova)');
INSERT INTO `tbl_locales` VALUES ('ro_RO', 'ro', 'romanian', 'Romanian (Romania)');
INSERT INTO `tbl_locales` VALUES ('ru_RU', 'ru', 'russian', 'Russian (Russia)');
INSERT INTO `tbl_locales` VALUES ('ru_UA', 'ru', 'russian', 'Russian (Ukraine)');
INSERT INTO `tbl_locales` VALUES ('rw_RW', 'rw', 'kinyarwanda', 'Kinyarwanda (Rwanda)');
INSERT INTO `tbl_locales` VALUES ('sa_IN', 'sa', 'sanskrit', 'Sanskrit (India)');
INSERT INTO `tbl_locales` VALUES ('sc_IT', 'sc', 'sardinian', 'Sardinian (Italy)');
INSERT INTO `tbl_locales` VALUES ('sd_IN', 'sd', 'sindhi', 'Sindhi (India)');
INSERT INTO `tbl_locales` VALUES ('seh_MZ', 'seh', 'sena', 'Sena (Mozambique)');
INSERT INTO `tbl_locales` VALUES ('se_NO', 'se', 'northern sami', 'Northern Sami (Norway)');
INSERT INTO `tbl_locales` VALUES ('sid_ET', 'sid', 'sidamo', 'Sidamo (Ethiopia)');
INSERT INTO `tbl_locales` VALUES ('si_LK', 'si', 'sinhala', 'Sinhala (Sri Lanka)');
INSERT INTO `tbl_locales` VALUES ('sk_SK', 'sk', 'slovak', 'Slovak (Slovakia)');
INSERT INTO `tbl_locales` VALUES ('sl_SI', 'sl', 'slovenian', 'Slovenian (Slovenia)');
INSERT INTO `tbl_locales` VALUES ('sn_ZW', 'sn', 'shona', 'Shona (Zimbabwe)');
INSERT INTO `tbl_locales` VALUES ('so_DJ', 'so', 'somali', 'Somali (Djibouti)');
INSERT INTO `tbl_locales` VALUES ('so_ET', 'so', 'somali', 'Somali (Ethiopia)');
INSERT INTO `tbl_locales` VALUES ('so_KE', 'so', 'somali', 'Somali (Kenya)');
INSERT INTO `tbl_locales` VALUES ('so_SO', 'so', 'somali', 'Somali (Somalia)');
INSERT INTO `tbl_locales` VALUES ('sq_AL', 'sq', 'albanian', 'Albanian (Albania)');
INSERT INTO `tbl_locales` VALUES ('sq_MK', 'sq', 'albanian', 'Albanian (Macedonia)');
INSERT INTO `tbl_locales` VALUES ('sr_BA', 'sr', 'serbian', 'Serbian (Bosnia and Herzegovina)');
INSERT INTO `tbl_locales` VALUES ('sr_ME', 'sr', 'serbian', 'Serbian (Montenegro)');
INSERT INTO `tbl_locales` VALUES ('sr_RS', 'sr', 'serbian', 'Serbian (Serbia)');
INSERT INTO `tbl_locales` VALUES ('ss_ZA', 'ss', 'swati', 'Swati (South Africa)');
INSERT INTO `tbl_locales` VALUES ('st_ZA', 'st', 'southern sotho', 'Southern Sotho (South Africa)');
INSERT INTO `tbl_locales` VALUES ('sv_FI', 'sv', 'swedish', 'Swedish (Finland)');
INSERT INTO `tbl_locales` VALUES ('sv_SE', 'sv', 'swedish', 'Swedish (Sweden)');
INSERT INTO `tbl_locales` VALUES ('sw_KE', 'sw', 'swahili', 'Swahili (Kenya)');
INSERT INTO `tbl_locales` VALUES ('sw_TZ', 'sw', 'swahili', 'Swahili (Tanzania)');
INSERT INTO `tbl_locales` VALUES ('ta_IN', 'ta', 'tamil', 'Tamil (India)');
INSERT INTO `tbl_locales` VALUES ('teo_UG', 'teo', 'teso', 'Teso (Uganda)');
INSERT INTO `tbl_locales` VALUES ('te_IN', 'te', 'telugu', 'Telugu (India)');
INSERT INTO `tbl_locales` VALUES ('tg_TJ', 'tg', 'tajik', 'Tajik (Tajikistan)');
INSERT INTO `tbl_locales` VALUES ('th_TH', 'th', 'thai', 'Thai (Thailand)');
INSERT INTO `tbl_locales` VALUES ('tig_ER', 'tig', 'tigre', 'Tigre (Eritrea)');
INSERT INTO `tbl_locales` VALUES ('ti_ER', 'ti', 'tigrinya', 'Tigrinya (Eritrea)');
INSERT INTO `tbl_locales` VALUES ('ti_ET', 'ti', 'tigrinya', 'Tigrinya (Ethiopia)');
INSERT INTO `tbl_locales` VALUES ('tk_TM', 'tk', 'turkmen', 'Turkmen (Turkmenistan)');
INSERT INTO `tbl_locales` VALUES ('tl_PH', 'tl', 'tagalog', 'Tagalog (Philippines)');
INSERT INTO `tbl_locales` VALUES ('tn_ZA', 'tn', 'tswana', 'Tswana (South Africa)');
INSERT INTO `tbl_locales` VALUES ('to_TO', 'to', 'tongan', 'Tongan (Tonga)');
INSERT INTO `tbl_locales` VALUES ('tr_CY', 'tr', 'turkish', 'Turkish (Cyprus)');
INSERT INTO `tbl_locales` VALUES ('tr_TR', 'tr', 'turkish', 'Turkish (Turkey)');
INSERT INTO `tbl_locales` VALUES ('ts_ZA', 'ts', 'tsonga', 'Tsonga (South Africa)');
INSERT INTO `tbl_locales` VALUES ('tt_RU', 'tt', 'tatar', 'Tatar (Russia)');
INSERT INTO `tbl_locales` VALUES ('ug_CN', 'ug', 'uighur', 'Uighur (China)');
INSERT INTO `tbl_locales` VALUES ('uk_UA', 'uk', 'ukrainian', 'Ukrainian (Ukraine)');
INSERT INTO `tbl_locales` VALUES ('ur_PK', 'ur', 'urdu', 'Urdu (Pakistan)');
INSERT INTO `tbl_locales` VALUES ('uz_UZ', 'uz', 'uzbek', 'Uzbek (Uzbekistan)');
INSERT INTO `tbl_locales` VALUES ('ve_ZA', 've', 'venda', 'Venda (South Africa)');
INSERT INTO `tbl_locales` VALUES ('vi_VN', 'vi', 'vietnamese', 'Vietnamese (Vietnam)');
INSERT INTO `tbl_locales` VALUES ('wa_BE', 'wa', 'walloon', 'Walloon (Belgium)');
INSERT INTO `tbl_locales` VALUES ('wo_SN', 'wo', 'wolof', 'Wolof (Senegal)');
INSERT INTO `tbl_locales` VALUES ('xh_ZA', 'xh', 'xhosa', 'Xhosa (South Africa)');
INSERT INTO `tbl_locales` VALUES ('yi_US', 'yi', 'yiddish', 'Yiddish (United States)');
INSERT INTO `tbl_locales` VALUES ('yo_NG', 'yo', 'yoruba', 'Yoruba (Nigeria)');
INSERT INTO `tbl_locales` VALUES ('zh_CN', 'zh', 'chinese', 'Chinese (China)');
INSERT INTO `tbl_locales` VALUES ('zh_HK', 'zh', 'chinese', 'Chinese (Hong Kong SAR China)');
INSERT INTO `tbl_locales` VALUES ('zh_SG', 'zh', 'chinese', 'Chinese (Singapore)');
INSERT INTO `tbl_locales` VALUES ('zh_TW', 'zh', 'chinese', 'Chinese (Taiwan)');
INSERT INTO `tbl_locales` VALUES ('zu_ZA', 'zu', 'zulu', 'Zulu (South Africa)');

-- ----------------------------
-- Table structure for `tbl_menu`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_menu
-- ----------------------------
INSERT INTO `tbl_menu` VALUES ('1', 'dashboard', 'admin/dashboard', 'fa fa-dashboard', '0', '1');
INSERT INTO `tbl_menu` VALUES ('57', 'mailbox', '#', 'fa fa-credit-card', '0', '2');
INSERT INTO `tbl_menu` VALUES ('58', 'inbox', 'admin/mailbox/inbox', 'fa fa-inbox', '57', '1');
INSERT INTO `tbl_menu` VALUES ('59', 'draft', 'admin/mailbox/draft', 'fa fa-files-o', '57', '2');
INSERT INTO `tbl_menu` VALUES ('60', 'sent', 'admin/mailbox/sent', 'fa fa-paper-plane', '57', '3');
INSERT INTO `tbl_menu` VALUES ('61', 'task', 'admin/task/all_task', 'fa fa-tasks', '100', '1');
INSERT INTO `tbl_menu` VALUES ('64', 'notice', 'admin/notice', 'entypo-docs', '0', '4');
INSERT INTO `tbl_menu` VALUES ('65', 'events', 'admin/event/events', 'entypo-newspaper', '0', '5');
INSERT INTO `tbl_menu` VALUES ('66', 'attendance', '#', 'fa fa-file-text', '0', '6');
INSERT INTO `tbl_menu` VALUES ('67', 'timechange_request', 'admin/attendance/timechange_request', 'fa fa-file-text-o', '66', '1');
INSERT INTO `tbl_menu` VALUES ('68', 'attendance_report', 'admin/attendance/attendance_report', 'fa fa-file-text', '66', '2');
INSERT INTO `tbl_menu` VALUES ('69', 'overtime', 'admin/attendance/overtime', 'fa fa-dashboard', '0', '7');
INSERT INTO `tbl_menu` VALUES ('70', 'application_list', 'admin/application_list', 'fa fa-rocket', '0', '8');
INSERT INTO `tbl_menu` VALUES ('71', 'stock', '#', 'fa fa-bitbucket', '0', '9');
INSERT INTO `tbl_menu` VALUES ('72', 'expenses', 'admin/expense/expenses', 'fa fa-delicious', '0', '10');
INSERT INTO `tbl_menu` VALUES ('73', 'award', 'admin/award/employee_award', 'fa fa-trophy', '0', '11');
INSERT INTO `tbl_menu` VALUES ('74', 'payroll', '#', 'fa fa-usd', '0', '12');
INSERT INTO `tbl_menu` VALUES ('75', 'set_salary_details', 'admin/payroll/manage_salary_details', 'fa fa-usd', '74', '2');
INSERT INTO `tbl_menu` VALUES ('76', 'employee_salary_list', 'admin/payroll/employee_salary_list', 'entypo-users', '74', '3');
INSERT INTO `tbl_menu` VALUES ('77', 'make_payment', 'admin/payroll/make_payment', 'fa fa-tasks', '74', '4');
INSERT INTO `tbl_menu` VALUES ('78', 'generate_payslip', 'admin/payroll/generate_payslip', 'fa fa-file-text', '74', '5');
INSERT INTO `tbl_menu` VALUES ('80', 'training', 'admin/training/all_training', 'fa fa-sliders', '0', '14');
INSERT INTO `tbl_menu` VALUES ('81', 'department', 'admin/department/department_list', 'entypo-list-add', '0', '15');
INSERT INTO `tbl_menu` VALUES ('83', 'employee', '#', 'fa fa-user', '0', '16');
INSERT INTO `tbl_menu` VALUES ('84', 'manage_employee', 'admin/employee/employees', 'entypo-users', '83', '1');
INSERT INTO `tbl_menu` VALUES ('85', 'set_access_role', 'admin/user/user_list', 'fa fa-unlock-alt', '83', '2');
INSERT INTO `tbl_menu` VALUES ('86', 'settings', '#', 'fa fa-cogs', '0', '17');
INSERT INTO `tbl_menu` VALUES ('87', 'general_settings', 'admin/settings/general_settings', 'fa fa-cog', '86', '1');
INSERT INTO `tbl_menu` VALUES ('88', 'set_working_days', 'admin/settings/set_working_days', 'fa fa-calendar', '86', '2');
INSERT INTO `tbl_menu` VALUES ('89', 'personal_event', 'admin/settings/view_personal_event', 'fa fa-gift', '86', '3');
INSERT INTO `tbl_menu` VALUES ('90', 'leave_category', 'admin/settings/leave_category', 'fa fa-dedent', '86', '4');
INSERT INTO `tbl_menu` VALUES ('91', 'notification_settings', 'admin/settings/notification_settings', 'fa fa-bell-o', '86', '5');
INSERT INTO `tbl_menu` VALUES ('92', 'language_settings', 'admin/settings/language_settings', 'fa fa-language', '86', '6');
INSERT INTO `tbl_menu` VALUES ('93', 'database_backup', 'admin/settings/database_backup', 'fa fa-database', '0', '18');
INSERT INTO `tbl_menu` VALUES ('94', 'stock_category', 'admin/stock/stock_category', 'fa fa-dedent', '71', '1');
INSERT INTO `tbl_menu` VALUES ('95', 'add_stock', 'admin/stock/add_stock', 'fa fa-plus', '71', '2');
INSERT INTO `tbl_menu` VALUES ('96', 'stock_list', 'admin/stock/stock_list', 'fa fa-file-text-o', '71', '3');
INSERT INTO `tbl_menu` VALUES ('97', 'hourly_rate', 'admin/payroll/hourly_rate', 'fa fa-files-o', '74', '1');
INSERT INTO `tbl_menu` VALUES ('98', 'trash', 'admin/mailbox/trash', 'fa fa-trash-o', '57', '4');
INSERT INTO `tbl_menu` VALUES ('99', 'task_contact', 'admin/task/all_task_contact', 'fa fa-tasks', '100', '2');
INSERT INTO `tbl_menu` VALUES ('100', 'tasks', '#', 'fa fa-tasks', '0', '3');

-- ----------------------------
-- Table structure for `tbl_notice`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_notice`;
CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text,
  `employee_id` int(11) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL COMMENT '0 = unpublished, 1 = published',
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  `assigned_to` text NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_notice
-- ----------------------------
INSERT INTO `tbl_notice` VALUES ('1', 'asadadad', 'asdadadsad', '<p>adasdad</p>\r\n', '1', '2018-05-13', '1', '1', '1', 'a:1:{s:11:\"assigned_to\";a:1:{i:0;s:2:\"19\";}}');
INSERT INTO `tbl_notice` VALUES ('2', 'adadad', 'asdadsadad', '<p>asdadadad</p>\r\n', '1', '2018-05-13', '1', '1', '1', '0');
INSERT INTO `tbl_notice` VALUES ('3', 'ads', 'ads', '<p>ads</p>\r\n', '1', '2018-05-13', '1', '1', '1', 'a:1:{s:11:\"assigned_to\";a:1:{i:0;s:2:\"16\";}}');
INSERT INTO `tbl_notice` VALUES ('4', 'ads', 'adsad', '<p>adadasd</p>\r\n', '1', '2018-05-13', '1', '1', '1', 'a:1:{s:11:\"assigned_to\";a:1:{i:0;s:2:\"19\";}}');

-- ----------------------------
-- Table structure for `tbl_overtime`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_overtime`;
CREATE TABLE `tbl_overtime` (
  `overtime_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `overtime_date` date NOT NULL,
  `overtime_hours` varchar(20) NOT NULL,
  PRIMARY KEY (`overtime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_overtime
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_partner`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_partner`;
CREATE TABLE `tbl_partner` (
  `partner_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_contact_id` int(11) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `linkidn` varchar(255) DEFAULT NULL,
  `view_status` int(2) NOT NULL DEFAULT '2' COMMENT '2=unread, 1=read',
  `notify_me` int(2) NOT NULL DEFAULT '1' COMMENT '1=on, 0=off',
  `full_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_partner
-- ----------------------------
INSERT INTO `tbl_partner` VALUES ('47', '5', '3', '3', '3', '2', '1', '3  ');
INSERT INTO `tbl_partner` VALUES ('48', '5', '', 'asdad', '', '2', '1', '2 ');
INSERT INTO `tbl_partner` VALUES ('49', '5', '1', '', '', '2', '1', '1 ');

-- ----------------------------
-- Table structure for `tbl_salary_payment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_salary_payment`;
CREATE TABLE `tbl_salary_payment` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_salary_payment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_salary_payslip`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_salary_payslip`;
CREATE TABLE `tbl_salary_payslip` (
  `payslip_id` int(5) NOT NULL AUTO_INCREMENT,
  `payslip_number` varchar(100) DEFAULT NULL,
  `salary_payment_id` int(5) NOT NULL,
  `payslip_generate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`payslip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_salary_payslip
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_sent`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_sent`;
CREATE TABLE `tbl_sent` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_sent
-- ----------------------------
INSERT INTO `tbl_sent` VALUES ('1', '1', null, 'shahinyanm@gmail.com', 'asdadad', '<p>asdadad</p>\r\n', null, null, null, '2018-05-12 01:55:52', 'No');
INSERT INTO `tbl_sent` VALUES ('2', '1', null, 'shahinyanm@gmail.com', 'asdada', '<p>asdad</p>\r\n', null, null, null, '2018-05-12 03:29:21', 'No');
INSERT INTO `tbl_sent` VALUES ('3', null, '19', 'info@trescoder.com', 'sadadad', '<p>asdadad</p>\r\n', null, null, null, '2018-05-12 22:59:58', 'No');

-- ----------------------------
-- Table structure for `tbl_stock`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_stock`;
CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_sub_category_id` int(11) NOT NULL,
  `item_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `total_stock` int(5) DEFAULT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_stock
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_stock_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_stock_category`;
CREATE TABLE `tbl_stock_category` (
  `stock_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_category` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`stock_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_stock_category
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_stock_sub_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_stock_sub_category`;
CREATE TABLE `tbl_stock_sub_category` (
  `stock_sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_category_id` int(11) NOT NULL,
  `stock_sub_category` varchar(200) NOT NULL,
  PRIMARY KEY (`stock_sub_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_stock_sub_category
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_task`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task`;
CREATE TABLE `tbl_task` (
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
  `view_status` int(1) NOT NULL DEFAULT '2' COMMENT '1read, 2 unread',
  `notify_me` int(1) NOT NULL DEFAULT '1' COMMENT '1 on 2 off',
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task
-- ----------------------------
INSERT INTO `tbl_task` VALUES ('1', 'dfsdfsd', '<p>sdfsdfdsf</p>\r\n', 'a:1:{s:11:\"assigned_to\";a:1:{i:0;s:2:\"21\";}}', '2018-05-16', '2018-05-17', '2018-05-17 16:08:34', '0', '34', '34', '2', '1');

-- ----------------------------
-- Table structure for `tbl_task_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task_attachment`;
CREATE TABLE `tbl_task_attachment` (
  `task_attachment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_id` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `upload_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`task_attachment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task_attachment
-- ----------------------------
INSERT INTO `tbl_task_attachment` VALUES ('2', '5', 'апва', 'пвапвп', '1', null, '2018-05-17 11:12:44');

-- ----------------------------
-- Table structure for `tbl_task_comment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task_comment`;
CREATE TABLE `tbl_task_comment` (
  `task_comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_id` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view_status` int(11) NOT NULL DEFAULT '2' COMMENT '2=unread, 1 = read',
  `notify_me` int(11) NOT NULL DEFAULT '1' COMMENT '1=on, 0=off',
  PRIMARY KEY (`task_comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_task_contact`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task_contact`;
CREATE TABLE `tbl_task_contact` (
  `task_contact_id` int(5) NOT NULL AUTO_INCREMENT,
  `assigned_to` text NOT NULL,
  `task_contact_start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `task_contact_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `task_contact_status` tinyint(1) NOT NULL COMMENT '0 = Pending, 1=Active, 2=Complete',
  `task_contact_progress` int(2) NOT NULL,
  `task_contact_hour` varchar(10) NOT NULL,
  `view_status` int(1) NOT NULL DEFAULT '2' COMMENT '1read, 2 unread',
  `notify_me` int(1) NOT NULL DEFAULT '1' COMMENT '1 on 2 off',
  `project_name` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `project_details` varchar(255) NOT NULL,
  PRIMARY KEY (`task_contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task_contact
-- ----------------------------
INSERT INTO `tbl_task_contact` VALUES ('5', 'a:1:{s:11:\"assigned_to\";a:1:{i:0;s:2:\"21\";}}', '2018-05-17', '2018-05-17', '2018-05-17 16:08:35', '0', '23', '23', '1', '1', 'asdad', 'asdad', '<p>asdadad</p>\r\n');
INSERT INTO `tbl_task_contact` VALUES ('6', 'a:1:{s:11:\"assigned_to\";a:1:{i:0;s:2:\"21\";}}', '2018-05-17', '2018-05-17', '2018-05-17 16:08:06', '0', '23', '23', '2', '1', 'asdad', 'asdad', '<p>asdadad</p>\r\n');

-- ----------------------------
-- Table structure for `tbl_task_contact_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task_contact_attachment`;
CREATE TABLE `tbl_task_contact_attachment` (
  `task_contact_attachment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_contact_id` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `upload_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`task_contact_attachment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task_contact_attachment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_task_contact_comment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task_contact_comment`;
CREATE TABLE `tbl_task_contact_comment` (
  `task_contact_comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_contact_id` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view_status` int(11) NOT NULL DEFAULT '2' COMMENT '2=unread, 1 = read',
  `notify_me` int(11) NOT NULL DEFAULT '1' COMMENT '1=on, 0=off',
  PRIMARY KEY (`task_contact_comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task_contact_comment
-- ----------------------------
INSERT INTO `tbl_task_contact_comment` VALUES ('21', '5', '1', null, 'ывавыаываыа', '2018-05-17 16:08:35', '1', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('22', '5', '1', null, 'фывфвыфв', '2018-05-17 16:08:35', '1', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('23', '5', '1', null, 'asdadad', '2018-05-17 16:08:35', '1', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('24', '5', null, '21', 'asdadad', '2018-05-17 16:08:35', '1', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('25', '5', '1', null, 'asdadsad', '2018-05-17 16:08:35', '1', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('26', '5', '1', null, 'asdadsad', '2018-05-17 16:08:35', '1', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('27', '6', '1', null, 'asdadad', '2018-05-17 16:08:19', '2', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('28', '6', '1', null, 'asdadad', '2018-05-17 16:08:19', '2', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('29', '6', '1', null, 'asdadasd', '2018-05-17 16:08:20', '2', '1');
INSERT INTO `tbl_task_contact_comment` VALUES ('30', '6', '1', null, 'asdadsad', '2018-05-17 16:08:21', '2', '1');

-- ----------------------------
-- Table structure for `tbl_task_contact_uploaded_files`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task_contact_uploaded_files`;
CREATE TABLE `tbl_task_contact_uploaded_files` (
  `contact_uploaded_files_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_contact_attachment_id` int(11) NOT NULL,
  `files` text NOT NULL,
  `uploaded_path` text NOT NULL,
  `file_name` text NOT NULL,
  `size` int(10) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `is_image` int(2) NOT NULL,
  `image_width` int(5) NOT NULL,
  `image_height` int(5) NOT NULL,
  PRIMARY KEY (`contact_uploaded_files_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task_contact_uploaded_files
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_task_uploaded_files`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_task_uploaded_files`;
CREATE TABLE `tbl_task_uploaded_files` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_task_uploaded_files
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE `tbl_team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_contact_id` int(11) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `linkidn` varchar(255) DEFAULT NULL,
  `view_status` int(2) NOT NULL DEFAULT '2' COMMENT '2=unread, 1=read',
  `notify_me` int(2) NOT NULL DEFAULT '1' COMMENT '1=on, 0=off',
  `full_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_team
-- ----------------------------
INSERT INTO `tbl_team` VALUES ('112', '5', '`', '1', '1', '2', '1', 'ASs  ');
INSERT INTO `tbl_team` VALUES ('113', '5', 'qweqe', '', 'qweqe12', '2', '1', 'qweqe ');
INSERT INTO `tbl_team` VALUES ('114', '5', 'w', 'w', 'w', '2', '1', 'asdad');

-- ----------------------------
-- Table structure for `tbl_timezone`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_timezone`;
CREATE TABLE `tbl_timezone` (
  `timezone_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_code` char(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `timezone_name` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`timezone_id`),
  KEY `idx_zone_name` (`timezone_name`)
) ENGINE=MyISAM AUTO_INCREMENT=417 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_timezone
-- ----------------------------
INSERT INTO `tbl_timezone` VALUES ('1', 'AD', 'Europe/Andorra');
INSERT INTO `tbl_timezone` VALUES ('2', 'AE', 'Asia/Dubai');
INSERT INTO `tbl_timezone` VALUES ('3', 'AF', 'Asia/Kabul');
INSERT INTO `tbl_timezone` VALUES ('4', 'AG', 'America/Antigua');
INSERT INTO `tbl_timezone` VALUES ('5', 'AI', 'America/Anguilla');
INSERT INTO `tbl_timezone` VALUES ('6', 'AL', 'Europe/Tirane');
INSERT INTO `tbl_timezone` VALUES ('7', 'AM', 'Asia/Yerevan');
INSERT INTO `tbl_timezone` VALUES ('8', 'AO', 'Africa/Luanda');
INSERT INTO `tbl_timezone` VALUES ('9', 'AQ', 'Antarctica/McMurdo');
INSERT INTO `tbl_timezone` VALUES ('10', 'AQ', 'Antarctica/Rothera');
INSERT INTO `tbl_timezone` VALUES ('11', 'AQ', 'Antarctica/Palmer');
INSERT INTO `tbl_timezone` VALUES ('12', 'AQ', 'Antarctica/Mawson');
INSERT INTO `tbl_timezone` VALUES ('13', 'AQ', 'Antarctica/Davis');
INSERT INTO `tbl_timezone` VALUES ('14', 'AQ', 'Antarctica/Casey');
INSERT INTO `tbl_timezone` VALUES ('15', 'AQ', 'Antarctica/Vostok');
INSERT INTO `tbl_timezone` VALUES ('16', 'AQ', 'Antarctica/DumontDUrville');
INSERT INTO `tbl_timezone` VALUES ('17', 'AQ', 'Antarctica/Syowa');
INSERT INTO `tbl_timezone` VALUES ('18', 'AQ', 'Antarctica/Troll');
INSERT INTO `tbl_timezone` VALUES ('19', 'AR', 'America/Argentina/Buenos_Aires');
INSERT INTO `tbl_timezone` VALUES ('20', 'AR', 'America/Argentina/Cordoba');
INSERT INTO `tbl_timezone` VALUES ('21', 'AR', 'America/Argentina/Salta');
INSERT INTO `tbl_timezone` VALUES ('22', 'AR', 'America/Argentina/Jujuy');
INSERT INTO `tbl_timezone` VALUES ('23', 'AR', 'America/Argentina/Tucuman');
INSERT INTO `tbl_timezone` VALUES ('24', 'AR', 'America/Argentina/Catamarca');
INSERT INTO `tbl_timezone` VALUES ('25', 'AR', 'America/Argentina/La_Rioja');
INSERT INTO `tbl_timezone` VALUES ('26', 'AR', 'America/Argentina/San_Juan');
INSERT INTO `tbl_timezone` VALUES ('27', 'AR', 'America/Argentina/Mendoza');
INSERT INTO `tbl_timezone` VALUES ('28', 'AR', 'America/Argentina/San_Luis');
INSERT INTO `tbl_timezone` VALUES ('29', 'AR', 'America/Argentina/Rio_Gallegos');
INSERT INTO `tbl_timezone` VALUES ('30', 'AR', 'America/Argentina/Ushuaia');
INSERT INTO `tbl_timezone` VALUES ('31', 'AS', 'Pacific/Pago_Pago');
INSERT INTO `tbl_timezone` VALUES ('32', 'AT', 'Europe/Vienna');
INSERT INTO `tbl_timezone` VALUES ('33', 'AU', 'Australia/Lord_Howe');
INSERT INTO `tbl_timezone` VALUES ('34', 'AU', 'Antarctica/Macquarie');
INSERT INTO `tbl_timezone` VALUES ('35', 'AU', 'Australia/Hobart');
INSERT INTO `tbl_timezone` VALUES ('36', 'AU', 'Australia/Currie');
INSERT INTO `tbl_timezone` VALUES ('37', 'AU', 'Australia/Melbourne');
INSERT INTO `tbl_timezone` VALUES ('38', 'AU', 'Australia/Sydney');
INSERT INTO `tbl_timezone` VALUES ('39', 'AU', 'Australia/Broken_Hill');
INSERT INTO `tbl_timezone` VALUES ('40', 'AU', 'Australia/Brisbane');
INSERT INTO `tbl_timezone` VALUES ('41', 'AU', 'Australia/Lindeman');
INSERT INTO `tbl_timezone` VALUES ('42', 'AU', 'Australia/Adelaide');
INSERT INTO `tbl_timezone` VALUES ('43', 'AU', 'Australia/Darwin');
INSERT INTO `tbl_timezone` VALUES ('44', 'AU', 'Australia/Perth');
INSERT INTO `tbl_timezone` VALUES ('45', 'AU', 'Australia/Eucla');
INSERT INTO `tbl_timezone` VALUES ('46', 'AW', 'America/Aruba');
INSERT INTO `tbl_timezone` VALUES ('47', 'AX', 'Europe/Mariehamn');
INSERT INTO `tbl_timezone` VALUES ('48', 'AZ', 'Asia/Baku');
INSERT INTO `tbl_timezone` VALUES ('49', 'BA', 'Europe/Sarajevo');
INSERT INTO `tbl_timezone` VALUES ('50', 'BB', 'America/Barbados');
INSERT INTO `tbl_timezone` VALUES ('51', 'BD', 'Asia/Dhaka');
INSERT INTO `tbl_timezone` VALUES ('52', 'BE', 'Europe/Brussels');
INSERT INTO `tbl_timezone` VALUES ('53', 'BF', 'Africa/Ouagadougou');
INSERT INTO `tbl_timezone` VALUES ('54', 'BG', 'Europe/Sofia');
INSERT INTO `tbl_timezone` VALUES ('55', 'BH', 'Asia/Bahrain');
INSERT INTO `tbl_timezone` VALUES ('56', 'BI', 'Africa/Bujumbura');
INSERT INTO `tbl_timezone` VALUES ('57', 'BJ', 'Africa/Porto-Novo');
INSERT INTO `tbl_timezone` VALUES ('58', 'BL', 'America/St_Barthelemy');
INSERT INTO `tbl_timezone` VALUES ('59', 'BM', 'Atlantic/Bermuda');
INSERT INTO `tbl_timezone` VALUES ('60', 'BN', 'Asia/Brunei');
INSERT INTO `tbl_timezone` VALUES ('61', 'BO', 'America/La_Paz');
INSERT INTO `tbl_timezone` VALUES ('62', 'BQ', 'America/Kralendijk');
INSERT INTO `tbl_timezone` VALUES ('63', 'BR', 'America/Noronha');
INSERT INTO `tbl_timezone` VALUES ('64', 'BR', 'America/Belem');
INSERT INTO `tbl_timezone` VALUES ('65', 'BR', 'America/Fortaleza');
INSERT INTO `tbl_timezone` VALUES ('66', 'BR', 'America/Recife');
INSERT INTO `tbl_timezone` VALUES ('67', 'BR', 'America/Araguaina');
INSERT INTO `tbl_timezone` VALUES ('68', 'BR', 'America/Maceio');
INSERT INTO `tbl_timezone` VALUES ('69', 'BR', 'America/Bahia');
INSERT INTO `tbl_timezone` VALUES ('70', 'BR', 'America/Sao_Paulo');
INSERT INTO `tbl_timezone` VALUES ('71', 'BR', 'America/Campo_Grande');
INSERT INTO `tbl_timezone` VALUES ('72', 'BR', 'America/Cuiaba');
INSERT INTO `tbl_timezone` VALUES ('73', 'BR', 'America/Santarem');
INSERT INTO `tbl_timezone` VALUES ('74', 'BR', 'America/Porto_Velho');
INSERT INTO `tbl_timezone` VALUES ('75', 'BR', 'America/Boa_Vista');
INSERT INTO `tbl_timezone` VALUES ('76', 'BR', 'America/Manaus');
INSERT INTO `tbl_timezone` VALUES ('77', 'BR', 'America/Eirunepe');
INSERT INTO `tbl_timezone` VALUES ('78', 'BR', 'America/Rio_Branco');
INSERT INTO `tbl_timezone` VALUES ('79', 'BS', 'America/Nassau');
INSERT INTO `tbl_timezone` VALUES ('80', 'BT', 'Asia/Thimphu');
INSERT INTO `tbl_timezone` VALUES ('81', 'BW', 'Africa/Gaborone');
INSERT INTO `tbl_timezone` VALUES ('82', 'BY', 'Europe/Minsk');
INSERT INTO `tbl_timezone` VALUES ('83', 'BZ', 'America/Belize');
INSERT INTO `tbl_timezone` VALUES ('84', 'CA', 'America/St_Johns');
INSERT INTO `tbl_timezone` VALUES ('85', 'CA', 'America/Halifax');
INSERT INTO `tbl_timezone` VALUES ('86', 'CA', 'America/Glace_Bay');
INSERT INTO `tbl_timezone` VALUES ('87', 'CA', 'America/Moncton');
INSERT INTO `tbl_timezone` VALUES ('88', 'CA', 'America/Goose_Bay');
INSERT INTO `tbl_timezone` VALUES ('89', 'CA', 'America/Blanc-Sablon');
INSERT INTO `tbl_timezone` VALUES ('90', 'CA', 'America/Toronto');
INSERT INTO `tbl_timezone` VALUES ('91', 'CA', 'America/Nipigon');
INSERT INTO `tbl_timezone` VALUES ('92', 'CA', 'America/Thunder_Bay');
INSERT INTO `tbl_timezone` VALUES ('93', 'CA', 'America/Iqaluit');
INSERT INTO `tbl_timezone` VALUES ('94', 'CA', 'America/Pangnirtung');
INSERT INTO `tbl_timezone` VALUES ('95', 'CA', 'America/Resolute');
INSERT INTO `tbl_timezone` VALUES ('96', 'CA', 'America/Atikokan');
INSERT INTO `tbl_timezone` VALUES ('97', 'CA', 'America/Rankin_Inlet');
INSERT INTO `tbl_timezone` VALUES ('98', 'CA', 'America/Winnipeg');
INSERT INTO `tbl_timezone` VALUES ('99', 'CA', 'America/Rainy_River');
INSERT INTO `tbl_timezone` VALUES ('100', 'CA', 'America/Regina');
INSERT INTO `tbl_timezone` VALUES ('101', 'CA', 'America/Swift_Current');
INSERT INTO `tbl_timezone` VALUES ('102', 'CA', 'America/Edmonton');
INSERT INTO `tbl_timezone` VALUES ('103', 'CA', 'America/Cambridge_Bay');
INSERT INTO `tbl_timezone` VALUES ('104', 'CA', 'America/Yellowknife');
INSERT INTO `tbl_timezone` VALUES ('105', 'CA', 'America/Inuvik');
INSERT INTO `tbl_timezone` VALUES ('106', 'CA', 'America/Creston');
INSERT INTO `tbl_timezone` VALUES ('107', 'CA', 'America/Dawson_Creek');
INSERT INTO `tbl_timezone` VALUES ('108', 'CA', 'America/Vancouver');
INSERT INTO `tbl_timezone` VALUES ('109', 'CA', 'America/Whitehorse');
INSERT INTO `tbl_timezone` VALUES ('110', 'CA', 'America/Dawson');
INSERT INTO `tbl_timezone` VALUES ('111', 'CC', 'Indian/Cocos');
INSERT INTO `tbl_timezone` VALUES ('112', 'CD', 'Africa/Kinshasa');
INSERT INTO `tbl_timezone` VALUES ('113', 'CD', 'Africa/Lubumbashi');
INSERT INTO `tbl_timezone` VALUES ('114', 'CF', 'Africa/Bangui');
INSERT INTO `tbl_timezone` VALUES ('115', 'CG', 'Africa/Brazzaville');
INSERT INTO `tbl_timezone` VALUES ('116', 'CH', 'Europe/Zurich');
INSERT INTO `tbl_timezone` VALUES ('117', 'CI', 'Africa/Abidjan');
INSERT INTO `tbl_timezone` VALUES ('118', 'CK', 'Pacific/Rarotonga');
INSERT INTO `tbl_timezone` VALUES ('119', 'CL', 'America/Santiago');
INSERT INTO `tbl_timezone` VALUES ('120', 'CL', 'Pacific/Easter');
INSERT INTO `tbl_timezone` VALUES ('121', 'CM', 'Africa/Douala');
INSERT INTO `tbl_timezone` VALUES ('122', 'CN', 'Asia/Shanghai');
INSERT INTO `tbl_timezone` VALUES ('123', 'CN', 'Asia/Urumqi');
INSERT INTO `tbl_timezone` VALUES ('124', 'CO', 'America/Bogota');
INSERT INTO `tbl_timezone` VALUES ('125', 'CR', 'America/Costa_Rica');
INSERT INTO `tbl_timezone` VALUES ('126', 'CU', 'America/Havana');
INSERT INTO `tbl_timezone` VALUES ('127', 'CV', 'Atlantic/Cape_Verde');
INSERT INTO `tbl_timezone` VALUES ('128', 'CW', 'America/Curacao');
INSERT INTO `tbl_timezone` VALUES ('129', 'CX', 'Indian/Christmas');
INSERT INTO `tbl_timezone` VALUES ('130', 'CY', 'Asia/Nicosia');
INSERT INTO `tbl_timezone` VALUES ('131', 'CZ', 'Europe/Prague');
INSERT INTO `tbl_timezone` VALUES ('132', 'DE', 'Europe/Berlin');
INSERT INTO `tbl_timezone` VALUES ('133', 'DE', 'Europe/Busingen');
INSERT INTO `tbl_timezone` VALUES ('134', 'DJ', 'Africa/Djibouti');
INSERT INTO `tbl_timezone` VALUES ('135', 'DK', 'Europe/Copenhagen');
INSERT INTO `tbl_timezone` VALUES ('136', 'DM', 'America/Dominica');
INSERT INTO `tbl_timezone` VALUES ('137', 'DO', 'America/Santo_Domingo');
INSERT INTO `tbl_timezone` VALUES ('138', 'DZ', 'Africa/Algiers');
INSERT INTO `tbl_timezone` VALUES ('139', 'EC', 'America/Guayaquil');
INSERT INTO `tbl_timezone` VALUES ('140', 'EC', 'Pacific/Galapagos');
INSERT INTO `tbl_timezone` VALUES ('141', 'EE', 'Europe/Tallinn');
INSERT INTO `tbl_timezone` VALUES ('142', 'EG', 'Africa/Cairo');
INSERT INTO `tbl_timezone` VALUES ('143', 'EH', 'Africa/El_Aaiun');
INSERT INTO `tbl_timezone` VALUES ('144', 'ER', 'Africa/Asmara');
INSERT INTO `tbl_timezone` VALUES ('145', 'ES', 'Europe/Madrid');
INSERT INTO `tbl_timezone` VALUES ('146', 'ES', 'Africa/Ceuta');
INSERT INTO `tbl_timezone` VALUES ('147', 'ES', 'Atlantic/Canary');
INSERT INTO `tbl_timezone` VALUES ('148', 'ET', 'Africa/Addis_Ababa');
INSERT INTO `tbl_timezone` VALUES ('149', 'FI', 'Europe/Helsinki');
INSERT INTO `tbl_timezone` VALUES ('150', 'FJ', 'Pacific/Fiji');
INSERT INTO `tbl_timezone` VALUES ('151', 'FK', 'Atlantic/Stanley');
INSERT INTO `tbl_timezone` VALUES ('152', 'FM', 'Pacific/Chuuk');
INSERT INTO `tbl_timezone` VALUES ('153', 'FM', 'Pacific/Pohnpei');
INSERT INTO `tbl_timezone` VALUES ('154', 'FM', 'Pacific/Kosrae');
INSERT INTO `tbl_timezone` VALUES ('155', 'FO', 'Atlantic/Faroe');
INSERT INTO `tbl_timezone` VALUES ('156', 'FR', 'Europe/Paris');
INSERT INTO `tbl_timezone` VALUES ('157', 'GA', 'Africa/Libreville');
INSERT INTO `tbl_timezone` VALUES ('158', 'GB', 'Europe/London');
INSERT INTO `tbl_timezone` VALUES ('159', 'GD', 'America/Grenada');
INSERT INTO `tbl_timezone` VALUES ('160', 'GE', 'Asia/Tbilisi');
INSERT INTO `tbl_timezone` VALUES ('161', 'GF', 'America/Cayenne');
INSERT INTO `tbl_timezone` VALUES ('162', 'GG', 'Europe/Guernsey');
INSERT INTO `tbl_timezone` VALUES ('163', 'GH', 'Africa/Accra');
INSERT INTO `tbl_timezone` VALUES ('164', 'GI', 'Europe/Gibraltar');
INSERT INTO `tbl_timezone` VALUES ('165', 'GL', 'America/Godthab');
INSERT INTO `tbl_timezone` VALUES ('166', 'GL', 'America/Danmarkshavn');
INSERT INTO `tbl_timezone` VALUES ('167', 'GL', 'America/Scoresbysund');
INSERT INTO `tbl_timezone` VALUES ('168', 'GL', 'America/Thule');
INSERT INTO `tbl_timezone` VALUES ('169', 'GM', 'Africa/Banjul');
INSERT INTO `tbl_timezone` VALUES ('170', 'GN', 'Africa/Conakry');
INSERT INTO `tbl_timezone` VALUES ('171', 'GP', 'America/Guadeloupe');
INSERT INTO `tbl_timezone` VALUES ('172', 'GQ', 'Africa/Malabo');
INSERT INTO `tbl_timezone` VALUES ('173', 'GR', 'Europe/Athens');
INSERT INTO `tbl_timezone` VALUES ('174', 'GS', 'Atlantic/South_Georgia');
INSERT INTO `tbl_timezone` VALUES ('175', 'GT', 'America/Guatemala');
INSERT INTO `tbl_timezone` VALUES ('176', 'GU', 'Pacific/Guam');
INSERT INTO `tbl_timezone` VALUES ('177', 'GW', 'Africa/Bissau');
INSERT INTO `tbl_timezone` VALUES ('178', 'GY', 'America/Guyana');
INSERT INTO `tbl_timezone` VALUES ('179', 'HK', 'Asia/Hong_Kong');
INSERT INTO `tbl_timezone` VALUES ('180', 'HN', 'America/Tegucigalpa');
INSERT INTO `tbl_timezone` VALUES ('181', 'HR', 'Europe/Zagreb');
INSERT INTO `tbl_timezone` VALUES ('182', 'HT', 'America/Port-au-Prince');
INSERT INTO `tbl_timezone` VALUES ('183', 'HU', 'Europe/Budapest');
INSERT INTO `tbl_timezone` VALUES ('184', 'ID', 'Asia/Jakarta');
INSERT INTO `tbl_timezone` VALUES ('185', 'ID', 'Asia/Pontianak');
INSERT INTO `tbl_timezone` VALUES ('186', 'ID', 'Asia/Makassar');
INSERT INTO `tbl_timezone` VALUES ('187', 'ID', 'Asia/Jayapura');
INSERT INTO `tbl_timezone` VALUES ('188', 'IE', 'Europe/Dublin');
INSERT INTO `tbl_timezone` VALUES ('189', 'IL', 'Asia/Jerusalem');
INSERT INTO `tbl_timezone` VALUES ('190', 'IM', 'Europe/Isle_of_Man');
INSERT INTO `tbl_timezone` VALUES ('191', 'IN', 'Asia/Kolkata');
INSERT INTO `tbl_timezone` VALUES ('192', 'IO', 'Indian/Chagos');
INSERT INTO `tbl_timezone` VALUES ('193', 'IQ', 'Asia/Baghdad');
INSERT INTO `tbl_timezone` VALUES ('194', 'IR', 'Asia/Tehran');
INSERT INTO `tbl_timezone` VALUES ('195', 'IS', 'Atlantic/Reykjavik');
INSERT INTO `tbl_timezone` VALUES ('196', 'IT', 'Europe/Rome');
INSERT INTO `tbl_timezone` VALUES ('197', 'JE', 'Europe/Jersey');
INSERT INTO `tbl_timezone` VALUES ('198', 'JM', 'America/Jamaica');
INSERT INTO `tbl_timezone` VALUES ('199', 'JO', 'Asia/Amman');
INSERT INTO `tbl_timezone` VALUES ('200', 'JP', 'Asia/Tokyo');
INSERT INTO `tbl_timezone` VALUES ('201', 'KE', 'Africa/Nairobi');
INSERT INTO `tbl_timezone` VALUES ('202', 'KG', 'Asia/Bishkek');
INSERT INTO `tbl_timezone` VALUES ('203', 'KH', 'Asia/Phnom_Penh');
INSERT INTO `tbl_timezone` VALUES ('204', 'KI', 'Pacific/Tarawa');
INSERT INTO `tbl_timezone` VALUES ('205', 'KI', 'Pacific/Enderbury');
INSERT INTO `tbl_timezone` VALUES ('206', 'KI', 'Pacific/Kiritimati');
INSERT INTO `tbl_timezone` VALUES ('207', 'KM', 'Indian/Comoro');
INSERT INTO `tbl_timezone` VALUES ('208', 'KN', 'America/St_Kitts');
INSERT INTO `tbl_timezone` VALUES ('209', 'KP', 'Asia/Pyongyang');
INSERT INTO `tbl_timezone` VALUES ('210', 'KR', 'Asia/Seoul');
INSERT INTO `tbl_timezone` VALUES ('211', 'KW', 'Asia/Kuwait');
INSERT INTO `tbl_timezone` VALUES ('212', 'KY', 'America/Cayman');
INSERT INTO `tbl_timezone` VALUES ('213', 'KZ', 'Asia/Almaty');
INSERT INTO `tbl_timezone` VALUES ('214', 'KZ', 'Asia/Qyzylorda');
INSERT INTO `tbl_timezone` VALUES ('215', 'KZ', 'Asia/Aqtobe');
INSERT INTO `tbl_timezone` VALUES ('216', 'KZ', 'Asia/Aqtau');
INSERT INTO `tbl_timezone` VALUES ('217', 'KZ', 'Asia/Oral');
INSERT INTO `tbl_timezone` VALUES ('218', 'LA', 'Asia/Vientiane');
INSERT INTO `tbl_timezone` VALUES ('219', 'LB', 'Asia/Beirut');
INSERT INTO `tbl_timezone` VALUES ('220', 'LC', 'America/St_Lucia');
INSERT INTO `tbl_timezone` VALUES ('221', 'LI', 'Europe/Vaduz');
INSERT INTO `tbl_timezone` VALUES ('222', 'LK', 'Asia/Colombo');
INSERT INTO `tbl_timezone` VALUES ('223', 'LR', 'Africa/Monrovia');
INSERT INTO `tbl_timezone` VALUES ('224', 'LS', 'Africa/Maseru');
INSERT INTO `tbl_timezone` VALUES ('225', 'LT', 'Europe/Vilnius');
INSERT INTO `tbl_timezone` VALUES ('226', 'LU', 'Europe/Luxembourg');
INSERT INTO `tbl_timezone` VALUES ('227', 'LV', 'Europe/Riga');
INSERT INTO `tbl_timezone` VALUES ('228', 'LY', 'Africa/Tripoli');
INSERT INTO `tbl_timezone` VALUES ('229', 'MA', 'Africa/Casablanca');
INSERT INTO `tbl_timezone` VALUES ('230', 'MC', 'Europe/Monaco');
INSERT INTO `tbl_timezone` VALUES ('231', 'MD', 'Europe/Chisinau');
INSERT INTO `tbl_timezone` VALUES ('232', 'ME', 'Europe/Podgorica');
INSERT INTO `tbl_timezone` VALUES ('233', 'MF', 'America/Marigot');
INSERT INTO `tbl_timezone` VALUES ('234', 'MG', 'Indian/Antananarivo');
INSERT INTO `tbl_timezone` VALUES ('235', 'MH', 'Pacific/Majuro');
INSERT INTO `tbl_timezone` VALUES ('236', 'MH', 'Pacific/Kwajalein');
INSERT INTO `tbl_timezone` VALUES ('237', 'MK', 'Europe/Skopje');
INSERT INTO `tbl_timezone` VALUES ('238', 'ML', 'Africa/Bamako');
INSERT INTO `tbl_timezone` VALUES ('239', 'MM', 'Asia/Rangoon');
INSERT INTO `tbl_timezone` VALUES ('240', 'MN', 'Asia/Ulaanbaatar');
INSERT INTO `tbl_timezone` VALUES ('241', 'MN', 'Asia/Hovd');
INSERT INTO `tbl_timezone` VALUES ('242', 'MN', 'Asia/Choibalsan');
INSERT INTO `tbl_timezone` VALUES ('243', 'MO', 'Asia/Macau');
INSERT INTO `tbl_timezone` VALUES ('244', 'MP', 'Pacific/Saipan');
INSERT INTO `tbl_timezone` VALUES ('245', 'MQ', 'America/Martinique');
INSERT INTO `tbl_timezone` VALUES ('246', 'MR', 'Africa/Nouakchott');
INSERT INTO `tbl_timezone` VALUES ('247', 'MS', 'America/Montserrat');
INSERT INTO `tbl_timezone` VALUES ('248', 'MT', 'Europe/Malta');
INSERT INTO `tbl_timezone` VALUES ('249', 'MU', 'Indian/Mauritius');
INSERT INTO `tbl_timezone` VALUES ('250', 'MV', 'Indian/Maldives');
INSERT INTO `tbl_timezone` VALUES ('251', 'MW', 'Africa/Blantyre');
INSERT INTO `tbl_timezone` VALUES ('252', 'MX', 'America/Mexico_City');
INSERT INTO `tbl_timezone` VALUES ('253', 'MX', 'America/Cancun');
INSERT INTO `tbl_timezone` VALUES ('254', 'MX', 'America/Merida');
INSERT INTO `tbl_timezone` VALUES ('255', 'MX', 'America/Monterrey');
INSERT INTO `tbl_timezone` VALUES ('256', 'MX', 'America/Matamoros');
INSERT INTO `tbl_timezone` VALUES ('257', 'MX', 'America/Mazatlan');
INSERT INTO `tbl_timezone` VALUES ('258', 'MX', 'America/Chihuahua');
INSERT INTO `tbl_timezone` VALUES ('259', 'MX', 'America/Ojinaga');
INSERT INTO `tbl_timezone` VALUES ('260', 'MX', 'America/Hermosillo');
INSERT INTO `tbl_timezone` VALUES ('261', 'MX', 'America/Tijuana');
INSERT INTO `tbl_timezone` VALUES ('262', 'MX', 'America/Santa_Isabel');
INSERT INTO `tbl_timezone` VALUES ('263', 'MX', 'America/Bahia_Banderas');
INSERT INTO `tbl_timezone` VALUES ('264', 'MY', 'Asia/Kuala_Lumpur');
INSERT INTO `tbl_timezone` VALUES ('265', 'MY', 'Asia/Kuching');
INSERT INTO `tbl_timezone` VALUES ('266', 'MZ', 'Africa/Maputo');
INSERT INTO `tbl_timezone` VALUES ('267', 'NA', 'Africa/Windhoek');
INSERT INTO `tbl_timezone` VALUES ('268', 'NC', 'Pacific/Noumea');
INSERT INTO `tbl_timezone` VALUES ('269', 'NE', 'Africa/Niamey');
INSERT INTO `tbl_timezone` VALUES ('270', 'NF', 'Pacific/Norfolk');
INSERT INTO `tbl_timezone` VALUES ('271', 'NG', 'Africa/Lagos');
INSERT INTO `tbl_timezone` VALUES ('272', 'NI', 'America/Managua');
INSERT INTO `tbl_timezone` VALUES ('273', 'NL', 'Europe/Amsterdam');
INSERT INTO `tbl_timezone` VALUES ('274', 'NO', 'Europe/Oslo');
INSERT INTO `tbl_timezone` VALUES ('275', 'NP', 'Asia/Kathmandu');
INSERT INTO `tbl_timezone` VALUES ('276', 'NR', 'Pacific/Nauru');
INSERT INTO `tbl_timezone` VALUES ('277', 'NU', 'Pacific/Niue');
INSERT INTO `tbl_timezone` VALUES ('278', 'NZ', 'Pacific/Auckland');
INSERT INTO `tbl_timezone` VALUES ('279', 'NZ', 'Pacific/Chatham');
INSERT INTO `tbl_timezone` VALUES ('280', 'OM', 'Asia/Muscat');
INSERT INTO `tbl_timezone` VALUES ('281', 'PA', 'America/Panama');
INSERT INTO `tbl_timezone` VALUES ('282', 'PE', 'America/Lima');
INSERT INTO `tbl_timezone` VALUES ('283', 'PF', 'Pacific/Tahiti');
INSERT INTO `tbl_timezone` VALUES ('284', 'PF', 'Pacific/Marquesas');
INSERT INTO `tbl_timezone` VALUES ('285', 'PF', 'Pacific/Gambier');
INSERT INTO `tbl_timezone` VALUES ('286', 'PG', 'Pacific/Port_Moresby');
INSERT INTO `tbl_timezone` VALUES ('287', 'PG', 'Pacific/Bougainville');
INSERT INTO `tbl_timezone` VALUES ('288', 'PH', 'Asia/Manila');
INSERT INTO `tbl_timezone` VALUES ('289', 'PK', 'Asia/Karachi');
INSERT INTO `tbl_timezone` VALUES ('290', 'PL', 'Europe/Warsaw');
INSERT INTO `tbl_timezone` VALUES ('291', 'PM', 'America/Miquelon');
INSERT INTO `tbl_timezone` VALUES ('292', 'PN', 'Pacific/Pitcairn');
INSERT INTO `tbl_timezone` VALUES ('293', 'PR', 'America/Puerto_Rico');
INSERT INTO `tbl_timezone` VALUES ('294', 'PS', 'Asia/Gaza');
INSERT INTO `tbl_timezone` VALUES ('295', 'PS', 'Asia/Hebron');
INSERT INTO `tbl_timezone` VALUES ('296', 'PT', 'Europe/Lisbon');
INSERT INTO `tbl_timezone` VALUES ('297', 'PT', 'Atlantic/Madeira');
INSERT INTO `tbl_timezone` VALUES ('298', 'PT', 'Atlantic/Azores');
INSERT INTO `tbl_timezone` VALUES ('299', 'PW', 'Pacific/Palau');
INSERT INTO `tbl_timezone` VALUES ('300', 'PY', 'America/Asuncion');
INSERT INTO `tbl_timezone` VALUES ('301', 'QA', 'Asia/Qatar');
INSERT INTO `tbl_timezone` VALUES ('302', 'RE', 'Indian/Reunion');
INSERT INTO `tbl_timezone` VALUES ('303', 'RO', 'Europe/Bucharest');
INSERT INTO `tbl_timezone` VALUES ('304', 'RS', 'Europe/Belgrade');
INSERT INTO `tbl_timezone` VALUES ('305', 'RU', 'Europe/Kaliningrad');
INSERT INTO `tbl_timezone` VALUES ('306', 'RU', 'Europe/Moscow');
INSERT INTO `tbl_timezone` VALUES ('307', 'RU', 'Europe/Simferopol');
INSERT INTO `tbl_timezone` VALUES ('308', 'RU', 'Europe/Volgograd');
INSERT INTO `tbl_timezone` VALUES ('309', 'RU', 'Europe/Samara');
INSERT INTO `tbl_timezone` VALUES ('310', 'RU', 'Asia/Yekaterinburg');
INSERT INTO `tbl_timezone` VALUES ('311', 'RU', 'Asia/Omsk');
INSERT INTO `tbl_timezone` VALUES ('312', 'RU', 'Asia/Novosibirsk');
INSERT INTO `tbl_timezone` VALUES ('313', 'RU', 'Asia/Novokuznetsk');
INSERT INTO `tbl_timezone` VALUES ('314', 'RU', 'Asia/Krasnoyarsk');
INSERT INTO `tbl_timezone` VALUES ('315', 'RU', 'Asia/Irkutsk');
INSERT INTO `tbl_timezone` VALUES ('316', 'RU', 'Asia/Chita');
INSERT INTO `tbl_timezone` VALUES ('317', 'RU', 'Asia/Yakutsk');
INSERT INTO `tbl_timezone` VALUES ('318', 'RU', 'Asia/Khandyga');
INSERT INTO `tbl_timezone` VALUES ('319', 'RU', 'Asia/Vladivostok');
INSERT INTO `tbl_timezone` VALUES ('320', 'RU', 'Asia/Sakhalin');
INSERT INTO `tbl_timezone` VALUES ('321', 'RU', 'Asia/Ust-Nera');
INSERT INTO `tbl_timezone` VALUES ('322', 'RU', 'Asia/Magadan');
INSERT INTO `tbl_timezone` VALUES ('323', 'RU', 'Asia/Srednekolymsk');
INSERT INTO `tbl_timezone` VALUES ('324', 'RU', 'Asia/Kamchatka');
INSERT INTO `tbl_timezone` VALUES ('325', 'RU', 'Asia/Anadyr');
INSERT INTO `tbl_timezone` VALUES ('326', 'RW', 'Africa/Kigali');
INSERT INTO `tbl_timezone` VALUES ('327', 'SA', 'Asia/Riyadh');
INSERT INTO `tbl_timezone` VALUES ('328', 'SB', 'Pacific/Guadalcanal');
INSERT INTO `tbl_timezone` VALUES ('329', 'SC', 'Indian/Mahe');
INSERT INTO `tbl_timezone` VALUES ('330', 'SD', 'Africa/Khartoum');
INSERT INTO `tbl_timezone` VALUES ('331', 'SE', 'Europe/Stockholm');
INSERT INTO `tbl_timezone` VALUES ('332', 'SG', 'Asia/Singapore');
INSERT INTO `tbl_timezone` VALUES ('333', 'SH', 'Atlantic/St_Helena');
INSERT INTO `tbl_timezone` VALUES ('334', 'SI', 'Europe/Ljubljana');
INSERT INTO `tbl_timezone` VALUES ('335', 'SJ', 'Arctic/Longyearbyen');
INSERT INTO `tbl_timezone` VALUES ('336', 'SK', 'Europe/Bratislava');
INSERT INTO `tbl_timezone` VALUES ('337', 'SL', 'Africa/Freetown');
INSERT INTO `tbl_timezone` VALUES ('338', 'SM', 'Europe/San_Marino');
INSERT INTO `tbl_timezone` VALUES ('339', 'SN', 'Africa/Dakar');
INSERT INTO `tbl_timezone` VALUES ('340', 'SO', 'Africa/Mogadishu');
INSERT INTO `tbl_timezone` VALUES ('341', 'SR', 'America/Paramaribo');
INSERT INTO `tbl_timezone` VALUES ('342', 'SS', 'Africa/Juba');
INSERT INTO `tbl_timezone` VALUES ('343', 'ST', 'Africa/Sao_Tome');
INSERT INTO `tbl_timezone` VALUES ('344', 'SV', 'America/El_Salvador');
INSERT INTO `tbl_timezone` VALUES ('345', 'SX', 'America/Lower_Princes');
INSERT INTO `tbl_timezone` VALUES ('346', 'SY', 'Asia/Damascus');
INSERT INTO `tbl_timezone` VALUES ('347', 'SZ', 'Africa/Mbabane');
INSERT INTO `tbl_timezone` VALUES ('348', 'TC', 'America/Grand_Turk');
INSERT INTO `tbl_timezone` VALUES ('349', 'TD', 'Africa/Ndjamena');
INSERT INTO `tbl_timezone` VALUES ('350', 'TF', 'Indian/Kerguelen');
INSERT INTO `tbl_timezone` VALUES ('351', 'TG', 'Africa/Lome');
INSERT INTO `tbl_timezone` VALUES ('352', 'TH', 'Asia/Bangkok');
INSERT INTO `tbl_timezone` VALUES ('353', 'TJ', 'Asia/Dushanbe');
INSERT INTO `tbl_timezone` VALUES ('354', 'TK', 'Pacific/Fakaofo');
INSERT INTO `tbl_timezone` VALUES ('355', 'TL', 'Asia/Dili');
INSERT INTO `tbl_timezone` VALUES ('356', 'TM', 'Asia/Ashgabat');
INSERT INTO `tbl_timezone` VALUES ('357', 'TN', 'Africa/Tunis');
INSERT INTO `tbl_timezone` VALUES ('358', 'TO', 'Pacific/Tongatapu');
INSERT INTO `tbl_timezone` VALUES ('359', 'TR', 'Europe/Istanbul');
INSERT INTO `tbl_timezone` VALUES ('360', 'TT', 'America/Port_of_Spain');
INSERT INTO `tbl_timezone` VALUES ('361', 'TV', 'Pacific/Funafuti');
INSERT INTO `tbl_timezone` VALUES ('362', 'TW', 'Asia/Taipei');
INSERT INTO `tbl_timezone` VALUES ('363', 'TZ', 'Africa/Dar_es_Salaam');
INSERT INTO `tbl_timezone` VALUES ('364', 'UA', 'Europe/Kiev');
INSERT INTO `tbl_timezone` VALUES ('365', 'UA', 'Europe/Uzhgorod');
INSERT INTO `tbl_timezone` VALUES ('366', 'UA', 'Europe/Zaporozhye');
INSERT INTO `tbl_timezone` VALUES ('367', 'UG', 'Africa/Kampala');
INSERT INTO `tbl_timezone` VALUES ('368', 'UM', 'Pacific/Johnston');
INSERT INTO `tbl_timezone` VALUES ('369', 'UM', 'Pacific/Midway');
INSERT INTO `tbl_timezone` VALUES ('370', 'UM', 'Pacific/Wake');
INSERT INTO `tbl_timezone` VALUES ('371', 'US', 'America/New_York');
INSERT INTO `tbl_timezone` VALUES ('372', 'US', 'America/Detroit');
INSERT INTO `tbl_timezone` VALUES ('373', 'US', 'America/Kentucky/Louisville');
INSERT INTO `tbl_timezone` VALUES ('374', 'US', 'America/Kentucky/Monticello');
INSERT INTO `tbl_timezone` VALUES ('375', 'US', 'America/Indiana/Indianapolis');
INSERT INTO `tbl_timezone` VALUES ('376', 'US', 'America/Indiana/Vincennes');
INSERT INTO `tbl_timezone` VALUES ('377', 'US', 'America/Indiana/Winamac');
INSERT INTO `tbl_timezone` VALUES ('378', 'US', 'America/Indiana/Marengo');
INSERT INTO `tbl_timezone` VALUES ('379', 'US', 'America/Indiana/Petersburg');
INSERT INTO `tbl_timezone` VALUES ('380', 'US', 'America/Indiana/Vevay');
INSERT INTO `tbl_timezone` VALUES ('381', 'US', 'America/Chicago');
INSERT INTO `tbl_timezone` VALUES ('382', 'US', 'America/Indiana/Tell_City');
INSERT INTO `tbl_timezone` VALUES ('383', 'US', 'America/Indiana/Knox');
INSERT INTO `tbl_timezone` VALUES ('384', 'US', 'America/Menominee');
INSERT INTO `tbl_timezone` VALUES ('385', 'US', 'America/North_Dakota/Center');
INSERT INTO `tbl_timezone` VALUES ('386', 'US', 'America/North_Dakota/New_Salem');
INSERT INTO `tbl_timezone` VALUES ('387', 'US', 'America/North_Dakota/Beulah');
INSERT INTO `tbl_timezone` VALUES ('388', 'US', 'America/Denver');
INSERT INTO `tbl_timezone` VALUES ('389', 'US', 'America/Boise');
INSERT INTO `tbl_timezone` VALUES ('390', 'US', 'America/Phoenix');
INSERT INTO `tbl_timezone` VALUES ('391', 'US', 'America/Los_Angeles');
INSERT INTO `tbl_timezone` VALUES ('392', 'US', 'America/Metlakatla');
INSERT INTO `tbl_timezone` VALUES ('393', 'US', 'America/Anchorage');
INSERT INTO `tbl_timezone` VALUES ('394', 'US', 'America/Juneau');
INSERT INTO `tbl_timezone` VALUES ('395', 'US', 'America/Sitka');
INSERT INTO `tbl_timezone` VALUES ('396', 'US', 'America/Yakutat');
INSERT INTO `tbl_timezone` VALUES ('397', 'US', 'America/Nome');
INSERT INTO `tbl_timezone` VALUES ('398', 'US', 'America/Adak');
INSERT INTO `tbl_timezone` VALUES ('399', 'US', 'Pacific/Honolulu');
INSERT INTO `tbl_timezone` VALUES ('400', 'UY', 'America/Montevideo');
INSERT INTO `tbl_timezone` VALUES ('401', 'UZ', 'Asia/Samarkand');
INSERT INTO `tbl_timezone` VALUES ('402', 'UZ', 'Asia/Tashkent');
INSERT INTO `tbl_timezone` VALUES ('403', 'VA', 'Europe/Vatican');
INSERT INTO `tbl_timezone` VALUES ('404', 'VC', 'America/St_Vincent');
INSERT INTO `tbl_timezone` VALUES ('405', 'VE', 'America/Caracas');
INSERT INTO `tbl_timezone` VALUES ('406', 'VG', 'America/Tortola');
INSERT INTO `tbl_timezone` VALUES ('407', 'VI', 'America/St_Thomas');
INSERT INTO `tbl_timezone` VALUES ('408', 'VN', 'Asia/Ho_Chi_Minh');
INSERT INTO `tbl_timezone` VALUES ('409', 'VU', 'Pacific/Efate');
INSERT INTO `tbl_timezone` VALUES ('410', 'WF', 'Pacific/Wallis');
INSERT INTO `tbl_timezone` VALUES ('411', 'WS', 'Pacific/Apia');
INSERT INTO `tbl_timezone` VALUES ('412', 'YE', 'Asia/Aden');
INSERT INTO `tbl_timezone` VALUES ('413', 'YT', 'Indian/Mayotte');
INSERT INTO `tbl_timezone` VALUES ('414', 'ZA', 'Africa/Johannesburg');
INSERT INTO `tbl_timezone` VALUES ('415', 'ZM', 'Africa/Lusaka');
INSERT INTO `tbl_timezone` VALUES ('416', 'ZW', 'Africa/Harare');

-- ----------------------------
-- Table structure for `tbl_todo`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_todo`;
CREATE TABLE `tbl_todo` (
  `todo_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  PRIMARY KEY (`todo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_todo
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_training`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_training`;
CREATE TABLE `tbl_training` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_training
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active 0 =block',
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'Tres', 'Coder', 'info@trescoder.com', 'admin', '27b0d575bd76125a167ccaee72a873336123e2e4c869a4468f6468160d2e7d69258b2a07a4d7ff882afcc6136f889984b415058f99d8605347f44c4c3479d819', '1', '1');

-- ----------------------------
-- Table structure for `tbl_user_role`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user_role`;
CREATE TABLE `tbl_user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user_role
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_working_days`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_working_days`;
CREATE TABLE `tbl_working_days` (
  `working_days_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_id` int(5) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`working_days_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_working_days
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_working_hours`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_working_hours`;
CREATE TABLE `tbl_working_hours` (
  `working_hours_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_hours` time NOT NULL,
  `end_hours` time NOT NULL,
  PRIMARY KEY (`working_hours_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_working_hours
-- ----------------------------
