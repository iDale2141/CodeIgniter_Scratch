/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50724
Source Host           : 127.0.0.1:3306
Source Database       : tca_sis

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2019-12-02 08:31:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for other_schools_attended
-- ----------------------------
DROP TABLE IF EXISTS `other_schools_attended`;
CREATE TABLE `other_schools_attended` (
  `osa_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_id` int(11) DEFAULT NULL,
  `last_sy` varchar(255) DEFAULT NULL,
  `last_grade` varchar(255) DEFAULT NULL,
  `last_school` varchar(255) DEFAULT NULL,
  `last_school_id` varchar(255) DEFAULT NULL,
  `last_school_addr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`osa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of other_schools_attended
-- ----------------------------
INSERT INTO `other_schools_attended` VALUES ('6', '22', '2019-11-30', 'Grade 11', 'San Beda College of Law', 'SID_30123', 'San Beda');

-- ----------------------------
-- Table structure for parents_information
-- ----------------------------
DROP TABLE IF EXISTS `parents_information`;
CREATE TABLE `parents_information` (
  `pi_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_id` int(11) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `guardian_relationship` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of parents_information
-- ----------------------------
INSERT INTO `parents_information` VALUES ('18', '22', 'Ian Dale Blanco', 'Programmer', 'Sarah Jane Oropa', 'Manager', 'Liezl Blanco', 'Grandmother');

-- ----------------------------
-- Table structure for requirements_submitted
-- ----------------------------
DROP TABLE IF EXISTS `requirements_submitted`;
CREATE TABLE `requirements_submitted` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_id` int(11) DEFAULT NULL,
  `form137` int(1) DEFAULT NULL,
  `nso` int(1) DEFAULT NULL,
  `good_moral` int(1) DEFAULT NULL,
  `test_result` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of requirements_submitted
-- ----------------------------
INSERT INTO `requirements_submitted` VALUES ('3', '22', '1', '0', '1', '99.9');

-- ----------------------------
-- Table structure for student_enrollment_information
-- ----------------------------
DROP TABLE IF EXISTS `student_enrollment_information`;
CREATE TABLE `student_enrollment_information` (
  `sei_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_id` int(11) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `sy` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `grade_level` varchar(255) DEFAULT NULL,
  `track` varchar(255) DEFAULT NULL,
  `strand` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sei_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of student_enrollment_information
-- ----------------------------
INSERT INTO `student_enrollment_information` VALUES ('10', '22', 'Timber City Academy', '2018-2019', '1st', 'Grade 12', 'HUMSS', 'IDK', 'enrolled');

-- ----------------------------
-- Table structure for student_information
-- ----------------------------
DROP TABLE IF EXISTS `student_information`;
CREATE TABLE `student_information` (
  `si_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  PRIMARY KEY (`si_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of student_information
-- ----------------------------
INSERT INTO `student_information` VALUES ('22', 'Dash Hendrix', 'Mamac', 'Blanco', 'Dash', 'male', '2019-10-17', 'Agusan del Norte Provincial Hospital, Butuan CIty', 'P-8 Barangay Dumalagan, Butuan City', '09383881131', 'Filipino', '2019-12-01');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('15', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Timber City Personnel', 'active');
INSERT INTO `users` VALUES ('14', 'sarahjane', '21232f297a57a5a743894a0e4a801fc3', null, 'active');
INSERT INTO `users` VALUES ('1', '', '645edd2162ace2dd816125f8e243afad', 'developer', '');
INSERT INTO `users` VALUES ('18', 'dash', 'b999a7c3bcc5535b4c8e277e18b7b6e1', 'Timber City Personnel', 'active');
