/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : auscultation

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-05-17 16:37:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `case_study`
-- ----------------------------
DROP TABLE IF EXISTS `case_study`;
CREATE TABLE `case_study` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `owner` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of case_study
-- ----------------------------
INSERT INTO `case_study` VALUES ('65', 'oooo', '<p>oooooo</p>', '1');
INSERT INTO `case_study` VALUES ('72', 'ooonniafhif', '<p>ooooooo<b>v sdf sf f</b></p>', '1');
INSERT INTO `case_study` VALUES ('75', 'ewfewter', '<p>fdfgsdfsd</p>', '1');
INSERT INTO `case_study` VALUES ('76', 'hsoudfhaowfho', '<p>doifhoahgoaewhg</p>', '3');
INSERT INTO `case_study` VALUES ('77', 'cxvzv', '<p>dddddddddddddd</p>', '3');
INSERT INTO `case_study` VALUES ('78', 'zxczx', '<p>xxx</p>', '1');
INSERT INTO `case_study` VALUES ('82', 'aerfsdgvf', '<p>zxczxcz</p>', '1');
INSERT INTO `case_study` VALUES ('83', 'xCzxc', '<p>zxacxasc</p>', '1');
INSERT INTO `case_study` VALUES ('84', 'walmart', '<p>buybuybuy!!!</p>', '1');
INSERT INTO `case_study` VALUES ('85', 'zzzzzzzzzz', '<p>xxxxxxxxxxxx</p>', '3');
INSERT INTO `case_study` VALUES ('86', 'llll', '<p>ooooo</p>', '3');
INSERT INTO `case_study` VALUES ('89', 'aaa', '<p>ddd aass&nbsp;</p>', '7');
INSERT INTO `case_study` VALUES ('90', 'jj', '<p>jj ii</p>', '10');
INSERT INTO `case_study` VALUES ('91', 'tt', '<p>ttttt</p>', '1');
INSERT INTO `case_study` VALUES ('92', 'cc', '<p>cccc</p>', '1');
INSERT INTO `case_study` VALUES ('94', 'mmmmm', '<p>sssssssssss&nbsp;asdadsa<i> sdada&nbsp;<b> asdasfafas<a href=\"http://mmm\">http://mmm</a></b></i></p>', '1');
INSERT INTO `case_study` VALUES ('95', 'aaa', '<p>ssdasdasd</p>', '1');
INSERT INTO `case_study` VALUES ('96', '222222222222222', '<p>222222 222 22&nbsp;</p>', '1');
INSERT INTO `case_study` VALUES ('97', 'gggg', '<p>asfdsdfsdf</p>', '1');

-- ----------------------------
-- Table structure for `case_study_details`
-- ----------------------------
DROP TABLE IF EXISTS `case_study_details`;
CREATE TABLE `case_study_details` (
  `case_study_scenario_link_id` int(11) NOT NULL AUTO_INCREMENT,
  `cs_id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `title` varchar(1023) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`case_study_scenario_link_id`),
  KEY `cs_id` (`cs_id`),
  KEY `scenario_id` (`scenario_id`),
  CONSTRAINT `case_study_details_ibfk_1` FOREIGN KEY (`cs_id`) REFERENCES `case_study` (`id`),
  CONSTRAINT `case_study_details_ibfk_2` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`scenariosId`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of case_study_details
-- ----------------------------
INSERT INTO `case_study_details` VALUES ('20', '72', '115', '1', '', '');
INSERT INTO `case_study_details` VALUES ('21', '85', '116', '2', '', '');
INSERT INTO `case_study_details` VALUES ('22', '83', '117', '3', '', '');
INSERT INTO `case_study_details` VALUES ('23', '83', '118', '4', '', '');
INSERT INTO `case_study_details` VALUES ('24', '76', '119', '5', '', '');
INSERT INTO `case_study_details` VALUES ('26', '89', '121', '6', '', '');
INSERT INTO `case_study_details` VALUES ('28', '89', '123', '7', '', '');
INSERT INTO `case_study_details` VALUES ('29', '89', '124', '8', '', '');
INSERT INTO `case_study_details` VALUES ('30', '84', '125', '9', '', '');
INSERT INTO `case_study_details` VALUES ('31', '90', '126', '31', '', '');
INSERT INTO `case_study_details` VALUES ('32', '90', '127', '32', '', '');
INSERT INTO `case_study_details` VALUES ('33', '65', '128', '33', '', '');
INSERT INTO `case_study_details` VALUES ('34', '65', '129', '34', '', '');
INSERT INTO `case_study_details` VALUES ('35', '94', '130', '35', '', '');
INSERT INTO `case_study_details` VALUES ('36', '95', '131', '36', '', '');
INSERT INTO `case_study_details` VALUES ('37', '94', '132', '37', 'jjjjjashfisgfisdbfi11111111', '<p>9990090909</p>');
INSERT INTO `case_study_details` VALUES ('38', '96', '133', '38', '222333222222', '<p>2222222</p>');
INSERT INTO `case_study_details` VALUES ('39', '96', '134', '39', '0000', '<p>112123123123</p>');
INSERT INTO `case_study_details` VALUES ('40', '96', '135', '40', '0000', '<p>2233211</p>');
INSERT INTO `case_study_details` VALUES ('41', '96', '136', '41', '0000', '<p>2222</p>');
INSERT INTO `case_study_details` VALUES ('42', '96', '137', '42', '0000', '<p>0000</p>');
INSERT INTO `case_study_details` VALUES ('43', '96', '138', '43', '0000', '<p>00000</p>');
INSERT INTO `case_study_details` VALUES ('44', '96', '138', '44', '0000', '<p>00000</p>');
INSERT INTO `case_study_details` VALUES ('45', '96', '140', '45', '0000', '<p>0000000</p>');
INSERT INTO `case_study_details` VALUES ('46', '96', '141', '46', '0000000', '<p>fsfsdfsdfsdg&nbsp;<b> dsf sdfs</b> df<b>&nbsp;s</b>f sd<b> &nbsp;</b></p>');
INSERT INTO `case_study_details` VALUES ('48', '97', '143', '48', '0000000000000000000', '<p>9999999999999999999</p>');

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `groupId` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(1023) DEFAULT NULL,
  PRIMARY KEY (`groupId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'Administrators');
INSERT INTO `groups` VALUES ('2', 'Students');

-- ----------------------------
-- Table structure for `logs`
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `LogID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) DEFAULT NULL,
  `StartTime` datetime DEFAULT NULL,
  `EndTime` datetime DEFAULT NULL,
  `OrderCorrect` tinyint(1) DEFAULT NULL COMMENT 'Part 1',
  `ScenarioCorrect` int(11) DEFAULT NULL COMMENT 'Part 2',
  `ScenarioStudentResponse` int(11) DEFAULT NULL COMMENT 'Answer to Part 2',
  `ExtraQuestionsCount` int(11) DEFAULT NULL COMMENT 'Part 3 number of questions',
  `CorrectAnswers` int(11) DEFAULT NULL COMMENT 'Number of questions answered correctly in part 3',
  PRIMARY KEY (`LogID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of logs
-- ----------------------------

-- ----------------------------
-- Table structure for `newuser`
-- ----------------------------
DROP TABLE IF EXISTS `newuser`;
CREATE TABLE `newuser` (
  `newuserId` int(11) NOT NULL AUTO_INCREMENT,
  `newusername` varchar(1023) DEFAULT NULL,
  `newpassword` varchar(1023) DEFAULT NULL,
  `newfullname` varchar(1023) DEFAULT NULL,
  `newemail` varchar(1023) DEFAULT NULL,
  `newroles` varchar(1023) DEFAULT NULL,
  `newgroupId` int(11) DEFAULT NULL,
  `rejected` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`newuserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of newuser
-- ----------------------------

-- ----------------------------
-- Table structure for `questions`
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `questionId` int(11) NOT NULL AUTO_INCREMENT,
  `questionType` int(11) DEFAULT NULL,
  `questionText` varchar(8191) DEFAULT NULL,
  `correctAnswer` varchar(1023) DEFAULT NULL,
  `optionA` varchar(1023) DEFAULT NULL,
  `optionB` varchar(1023) DEFAULT NULL,
  `optionC` varchar(1023) DEFAULT NULL,
  `optionD` varchar(1023) DEFAULT NULL,
  PRIMARY KEY (`questionId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', '1', 'The trachea divides into right and left mainstem bronchus.  If there is concern of a foreign body aspiration, the area most likely will be:', 'B', 'Left bronchus', 'Right bronchus', 'Nasal cavity', 'Pharynx');
INSERT INTO `questions` VALUES ('2', '1', 'The right lobe has ____ lobes.  The left lobe has ____ lobes.', 'B', '2; 3', '3; 2', '3; 3', '2; 2');
INSERT INTO `questions` VALUES ('3', '1', 'Sympathetic stimulation of beta2 receptors throughout the lower airways facilitates', 'A', 'Smooth muscle relaxation', 'Smooth muscle contraction', 'Bronchoconstriction', 'Constriction of the trachea');
INSERT INTO `questions` VALUES ('4', '1', 'During inspiration, the diaphragm ______ towards the abdomen.', 'B', 'Relaxes and ascends', 'Flattens and descends', 'Relaxes and descends', 'Flattens and ascends');
INSERT INTO `questions` VALUES ('5', '1', 'Children are diaphragmatic breathers until what age?', 'D', '3 years', '4 years', '5 years', '6 years');
INSERT INTO `questions` VALUES ('6', '1', 'Anatomy of the chest wall resulting in increased anteroposterior diameter, increased stiffness of chest wall and flattening of the diaphragm occur in relation to:', 'A', 'Aging', 'Cystic fibrosis', 'Muscular dystrophy', 'Training for endurance sports');
INSERT INTO `questions` VALUES ('7', '1', 'The apex of the lungs is located at (the)', 'C', '5th intercostal space midclavicular lines', '3rd intercostal space along sternal border', '2-4 cm above the clavicles', 'Angle of Louis');
INSERT INTO `questions` VALUES ('8', '1', 'Bronchovesicular sounds are heard', 'A', 'Evenly over inspiration and expiration', 'More pronounced in inspiration', 'More pronounced in expiration', 'Evenly along the mainstem bronchi');
INSERT INTO `questions` VALUES ('9', '1', 'When auscultating the posterior chest, assessment of the _________ primarily occurs.', 'D', 'Right lobes', 'Left lobes', 'Upper lobes', 'Lower lobes');
INSERT INTO `questions` VALUES ('17', '1', 'What is the color of sky?', 'D', 'Red', 'Blue', 'Green', 'Yellow');

-- ----------------------------
-- Table structure for `scenarios`
-- ----------------------------
DROP TABLE IF EXISTS `scenarios`;
CREATE TABLE `scenarios` (
  `scenariosId` int(11) NOT NULL AUTO_INCREMENT,
  `scenarios_name` varchar(63) DEFAULT NULL,
  `scenarios_description` varchar(1023) DEFAULT NULL,
  `posteriorLeft1` varchar(63) DEFAULT NULL,
  `posteriorRight1` varchar(63) DEFAULT NULL,
  `posteriorLeft2` varchar(63) DEFAULT NULL,
  `posteriorRight2` varchar(63) DEFAULT NULL,
  `posteriorLeft3` varchar(63) DEFAULT NULL,
  `posteriorRight3` varchar(63) DEFAULT NULL,
  `posteriorLeft4` varchar(63) DEFAULT NULL,
  `posteriorRight4` varchar(63) DEFAULT NULL,
  `posteriorLeft5` varchar(63) DEFAULT NULL,
  `posteriorRight5` varchar(63) DEFAULT NULL,
  `posteriorLeft6` varchar(63) DEFAULT NULL,
  `posteriorRight6` varchar(63) DEFAULT NULL,
  `posteriorLeft7` varchar(63) DEFAULT NULL,
  `posteriorRight7` varchar(63) DEFAULT NULL,
  `posteriorLeft8` varchar(63) DEFAULT NULL,
  `posteriorRight8` varchar(63) DEFAULT NULL,
  `anteriorLeft1` varchar(63) DEFAULT NULL,
  `anteriorRight1` varchar(63) DEFAULT NULL,
  `anteriorLeft2` varchar(63) DEFAULT NULL,
  `anteriorRight2` varchar(63) DEFAULT NULL,
  `anteriorLeft3` varchar(63) DEFAULT NULL,
  `anteriorRight3` varchar(63) DEFAULT NULL,
  `anteriorLeft4` varchar(63) DEFAULT NULL,
  `anteriorRight4` varchar(63) DEFAULT NULL,
  `anteriorLeft5` varchar(63) DEFAULT NULL,
  `anteriorRight5` varchar(63) DEFAULT NULL,
  PRIMARY KEY (`scenariosId`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of scenarios
-- ----------------------------
INSERT INTO `scenarios` VALUES ('1', 'Case1Visit0', '', '', 'assets/02.mp3', 'assets/02_Sound.mp3', 'assets/02_Sound.mp3', 'assets/05.mp3', 'assets/06.mp3', 'assets/07.mp3', 'assets/07_Sound.mp3', 'assets/07_Sound.mp3', 'assets/07_Sound.mp3', 'assets/11.mp3', 'assets/12.mp3', 'assets/13.mp3', 'assets/14.mp3', 'assets/15.mp3', 'assets/16.mp3', 'assets/01_Sound.mp3', '', 'assets/02_Sound.mp3', 'assets/02_Sound.mp3', 'assets/07_Sound.mp3', 'assets/07_Sound.mp3', 'assets/07.mp3', 'assets/08.mp3', 'assets/09.mp3', 'assets/10.mp3');
INSERT INTO `scenarios` VALUES ('2', 'Case1Visit2', '', '', 'assets/01.mp3', 'assets/14_Sound.mp3', 'assets/14_Sound.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/14_Sound.mp3', '', 'assets/14_Sound.mp3', 'assets/14_Sound.mp3', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/01.mp3', 'assets/01.mp3');
INSERT INTO `scenarios` VALUES ('3', 'Case2Visit1', '', '', 'assets/02.mp3', 'assets/02_Sound.mp3', 'assets/02_Sound.mp3', 'assets/05.mp3', 'assets/06.mp3', 'assets/07.mp3', 'assets/08.mp3', 'assets/11_Sound.mp3', 'assets/11_Sound.mp3', 'assets/11.mp3', 'assets/12.mp3', 'assets/13.mp3', 'assets/14.mp3', 'assets/15.mp3', 'assets/16.mp3', 'assets/01_Sound.mp3', '', 'assets/02_Sound.mp3', 'assets/02_Sound.mp3', 'assets/11_Sound.mp3', 'assets/11_Sound.mp3', 'assets/07.mp3', 'assets/08.mp3', 'assets/09.mp3', 'assets/10.mp3');
INSERT INTO `scenarios` VALUES ('4', 'Case2Visit2', '', '', 'assets/02.mp3', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', 'assets/05.mp3', 'assets/06.mp3', 'assets/07.mp3', 'assets/08.mp3', 'assets/12_Sound.mp3', 'assets/10_Sound.mp3', 'assets/11.mp3', 'assets/12.mp3', 'assets/13.mp3', 'assets/14.mp3', 'assets/15.mp3', 'assets/16.mp3', 'assets/01_Sound.mp3', '', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', 'assets/12_Sound.mp3', 'assets/07.mp3', 'assets/08.mp3', 'assets/09.mp3', 'assets/10.mp3');
INSERT INTO `scenarios` VALUES ('5', 'Case1Visit1', '', '', '', 'assets/13_Sound.mp3', 'assets/13_Sound.mp3', '', '', '', '', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', '', '', '', '', '', '', 'assets/13_Sound.mp3', '', 'assets/13_Sound.mp3', 'assets/13_Sound.mp3', 'assets/10_Sound.mp3', 'assets/10_Sound.mp3', '', '', '', '');
INSERT INTO `scenarios` VALUES ('6', 'Fibrosis', 'The thickening and scarring of connective tissue, usually as a result of injury', 'assets/01.mp3', 'assets/02.mp3', 'assets/03.mp3', 'assets/04.mp3', 'assets/05.mp3', 'assets/06.mp3', 'assets/07.mp3', 'assets/08.mp3', 'assets/09.mp3', 'assets/10.mp3', 'assets/11.mp3', 'assets/12.mp3', 'assets/13.mp3', 'assets/14.mp3', 'assets/15.mp3', 'assets/16.mp3', 'assets/01.mp3', 'assets/02.mp3', 'assets/03.mp3', 'assets/04.mp3', 'assets/05.mp3', 'assets/06.mp3', 'assets/07.mp3', 'assets/08.mp3', 'assets/09.mp3', 'assets/10.mp3');
INSERT INTO `scenarios` VALUES ('11', 'pneumothorax', 'pneumothorax', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/74 Absent breath sounds (pneumothorax).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/74 Absent breath sounds (pneumothorax).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/74 Absent breath sounds (pneumothorax).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/72 Absent breath sounds (pneumothorax).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/72 Absent breath sounds (pneumothorax).mp3', 'assets/76 Normal breath sounds (pleural effusion).mp3', 'assets/72 Absent breath sounds (pneumothorax).mp3');
INSERT INTO `scenarios` VALUES ('107', 'gsdgrg', 'sdvsdvsvsavvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', ' assets/02_Sound.mp3  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('115', 'fdsfsd', 'cccc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'assets/07_Sound.mp3			', '', 'assets/02_Sound.mp3\n			', '', ' assets/10_Sound.mp3  ', '', '', '', ' assets/07_Sound.mp3  ');
INSERT INTO `scenarios` VALUES ('116', 'dddddddddddd', 'asdasdsa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/3fbb0d26d83fcf7c04498a0777917af69935.mp3  ', '', '', '', '', '', '', '', ' assets/3fbb0d26d83fcf7c04498a0777917af69935.mp3  ');
INSERT INTO `scenarios` VALUES ('117', 'hshsihd', 'jsaifhisdgbaib', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', ' assets/07_Sound.mp3  ', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('118', 'SASDCSC', 'DSFASF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/e5ed5ac2cfe8e8f549cc0aef97f799641494.mp3  ', '', '', '', '', '', '', ' assets/e5ed5ac2cfe8e8f549cc0aef97f799641494.mp3  ', '', '');
INSERT INTO `scenarios` VALUES ('119', 'oooooooo', 'zzzxxxcc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'assets/07_Sound.mp3			', ' assets/31961d726c4fa64dcee20fd0e97c62d214148.mp3  ', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('120', 'xzcsdvzd', 'zzzzzzzzzzzzz', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/e5ed5ac2cfe8e8f549cc0aef97f799641494.mp3  ', '', ' assets/1ad6bba4b046944c36c5e3bd34fe6faa24663.mp3  ');
INSERT INTO `scenarios` VALUES ('121', 'aaa1', '111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', ' assets/02_Sound.mp3  ', '', '', '', '');
INSERT INTO `scenarios` VALUES ('123', 'aas3', '3333', ' assets/07_Sound.mp3  ', '', ' assets/10_Sound.mp3  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('124', 'asasdsa44', '4444', 'assets/07_Sound.mp3', 'assets/13_Sound.mp3			', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('125', 'popo', 'opop', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', ' assets/13_Sound.mp3  ');
INSERT INTO `scenarios` VALUES ('126', 'ioioi', 'oioioi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/13_Sound.mp3  ', '', '');
INSERT INTO `scenarios` VALUES ('127', 'oioi9999', '00000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/6bca34bd781dde40b310be7b4204cf951099.mp3  ', '', '', '', '', '', '', '', '', ' assets/6bca34bd781dde40b310be7b4204cf951099.mp3  ');
INSERT INTO `scenarios` VALUES ('128', 'sdxd', '<p>zzxxx</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/02_Sound.mp3  ', '', '', ' assets/f315d6aea87736b301a6f4809f2a622314293.mp3  ');
INSERT INTO `scenarios` VALUES ('129', 'z', '<p><a href=\"news://bbb\">news://bbb</a></p>', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('130', 'kkkk', '<p>oj<b>ohoihb</b><b>&nbsp; </b><b>ih</b>ihih</p>', '', '', 'assets/11_Sound.mp3			', '', '', 'assets/02_Sound.mp3			', '', 'assets/02_Sound.mp3			', '', '', '', '', '', '', '', '', '', '', 'assets/785a9e402595be6a9d1e3d290ca05cb913563.mp3			', ' assets/02_Sound.mp3  ', 'assets/6926d0639ba328053f9e57f8dbae68af30346.mp3			', ' assets/07_Sound.mp3  ', 'assets/6926d0639ba328053f9e57f8dbae68af30346.mp3			', 'assets/6926d0639ba328053f9e57f8dbae68af30346.mp3			', 'assets/db273ddc30e78aa772825439f254253614616.mp3			', ' assets/6926d0639ba328053f9e57f8dbae68af30346.mp3  ');
INSERT INTO `scenarios` VALUES ('131', 'zxcxz', '<p>zxczxczx</p>', '', '', '', '', '', '', '', '', '', '', ' assets/6926d0639ba328053f9e57f8dbae68af30346.mp3  ', '', '', '', '', '', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', ' assets/10_Sound.mp3  ', '');
INSERT INTO `scenarios` VALUES ('132', 'jjjjjashfisgfisdbfi11111111', '<p>9990090909</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', '', '', '', '', '', '', '', ' assets/10_Sound.mp3  ');
INSERT INTO `scenarios` VALUES ('133', '222333222222', '<p>2222222</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', '', '', '', ' assets/07_Sound.mp3  ', '', '');
INSERT INTO `scenarios` VALUES ('134', '0000', '<p>112123123123</p>', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('135', '0000', '<p>2233211</p>', '', '', '', '', '', '', ' assets/01_Sound.mp3  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('136', '0000', '<p>2222</p>', '', '', '', '', '', '', ' assets/07_Sound.mp3  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('137', '0000', '<p>0000</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('138', '0000', '<p>00000</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('139', '0000', '<p>00000</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('140', '0000', '<p>0000000</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('141', '0000000', '<p>fsfsdfsdfsdg&nbsp;<b> dsf sdfs</b> df<b>&nbsp;s</b>f sd<b> &nbsp;</b></p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `scenarios` VALUES ('143', '0000000000000000000', '<p>9999999999999999999</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' assets/02_Sound.mp3  ', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `sounds`
-- ----------------------------
DROP TABLE IF EXISTS `sounds`;
CREATE TABLE `sounds` (
  `soundId` int(11) NOT NULL AUTO_INCREMENT,
  `soundName` varchar(1023) DEFAULT NULL,
  `soundDescription` varchar(4095) DEFAULT NULL,
  `file` varchar(4095) DEFAULT NULL,
  PRIMARY KEY (`soundId`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sounds
-- ----------------------------
INSERT INTO `sounds` VALUES ('1', 'Tracheal/Bronchial sounds', 'Tracheal/Bronchial sounds are loud, high-pitched sounds heard next to the trachea and are longer on exhalation.', 'assets/01_Sound.mp3');
INSERT INTO `sounds` VALUES ('2', 'Bronchovesicular breath sounds', 'Bronchovesicular sounds are medium in loudness and pitch. They have equal inhalation and exhalation.', 'assets/02_Sound.mp3');
INSERT INTO `sounds` VALUES ('3', 'Vesicular sounds', 'Vesicular sounds are soft, low-pitched and are longer on inhalation than exhalation', 'assets/07_Sound.mp3');
INSERT INTO `sounds` VALUES ('10', 'Diminished breath sounds', 'Diminished Breath Sounds are absent or difficult to hear and are usually related to decreased air flow but may be caused by pneumonia, heart failure or an abnormally of the lung tissue.', 'assets/10_Sound.mp3');
INSERT INTO `sounds` VALUES ('11', 'Coarse crackles', 'Crackles are intermittent and may be defined as fine or coarse. Coarse crackles are louder, lower in pitch, and longer.', 'assets/11_Sound.mp3');
INSERT INTO `sounds` VALUES ('12', 'Fine crackles', 'Fine crackles are soft, high-pitched, and very brief.', 'assets/12_Sound.mp3');
INSERT INTO `sounds` VALUES ('13', 'Wheezes', 'Wheezes are continuous, musical, high-pitched with a shrill quality.', 'assets/13_Sound.mp3');
INSERT INTO `sounds` VALUES ('250', '3', '3', 'assets/f315d6aea87736b301a6f4809f2a622314293.mp3');
INSERT INTO `sounds` VALUES ('253', '1', '1', 'assets/6926d0639ba328053f9e57f8dbae68af30346.mp3');
INSERT INTO `sounds` VALUES ('254', '2', '2', 'assets/785a9e402595be6a9d1e3d290ca05cb913563.mp3');
INSERT INTO `sounds` VALUES ('255', '3', '3', 'assets/db273ddc30e78aa772825439f254253614616.mp3');
INSERT INTO `sounds` VALUES ('256', '1', '1', 'assets/df8ff886173c27a39c0aa2bac9c1ace819810.mp3');
INSERT INTO `sounds` VALUES ('257', '2', '2', 'assets/603062883f24e5c418a927ef2a3f74db32499.mp3');
INSERT INTO `sounds` VALUES ('258', '3', '3', 'assets/d2caceaff788dbb79fa1f7862e8469f518352.mp3');
INSERT INTO `sounds` VALUES ('259', '4', '4', 'assets/b04a43aa4b9f9c139d2fb80a0f026e4f22057.mp3');

-- ----------------------------
-- Table structure for `sounds_description`
-- ----------------------------
DROP TABLE IF EXISTS `sounds_description`;
CREATE TABLE `sounds_description` (
  `soundId` int(11) NOT NULL,
  `soundFile` varchar(1023) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sounds_description
-- ----------------------------
INSERT INTO `sounds_description` VALUES ('1', 'assets/01_Desc.mp3');
INSERT INTO `sounds_description` VALUES ('2', 'assets/02_Desc.mp3');
INSERT INTO `sounds_description` VALUES ('3', 'assets/07_Desc.mp3');
INSERT INTO `sounds_description` VALUES ('10', 'assets/10_Desc.mp3');
INSERT INTO `sounds_description` VALUES ('11', 'assets/11_Desc.mp3');
INSERT INTO `sounds_description` VALUES ('12', 'assets/12_Desc.mp3');
INSERT INTO `sounds_description` VALUES ('13', 'assets/13_Desc.mp3');
INSERT INTO `sounds_description` VALUES ('14', 'assets/14_Desc.mp3');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(1023) DEFAULT NULL,
  `password` varchar(1023) DEFAULT NULL,
  `fullname` varchar(1023) DEFAULT NULL,
  `email` varchar(1023) DEFAULT NULL,
  `roles` varchar(1023) DEFAULT NULL,
  `groupId` int(11) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'pp7002', '0909', 'Pranjal Patra', 'pp7002@mun.ca', 'Administrator', '1');
INSERT INTO `user` VALUES ('2', 'md', '0909', 'Rahul Dave', 'rahul@mun.ca', 'superAD', '0');
INSERT INTO `user` VALUES ('3', 'kk', '0909', 'Pranjal Patra', 'pranjal.patra@gmail.com', 'Student', '1');
INSERT INTO `user` VALUES ('7', 'pro1', '0909', 'pro a', 'a@hotmail.com', 'Administrator', '1');
INSERT INTO `user` VALUES ('8', 'stu1', '0909', 'stu jj', 'jiachenxiao@hotmail.com', 'Student', '2');
INSERT INTO `user` VALUES ('9', 'stu2', '0909', 'jia 2', 'jia', 'Student', '2');
INSERT INTO `user` VALUES ('10', 'pro jia', '0909', 'jia 2', 'jia', 'Administrator', '1');
INSERT INTO `user` VALUES ('11', 'stu 1', '0909', 'jia', 'jia', 'Student', '2');
