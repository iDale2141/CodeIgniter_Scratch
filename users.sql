/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : acs

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2019-09-27 11:48:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_level` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_salt` varchar(255) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  `per_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `fk_users_personnel_1` (`per_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'cashier', 'b8fdfafc122df25a98fecf879714739b1a92812dbfc7f292aa410fa7fa59c4b5', '0', '4', 'cøçakoÄmÕÊ¨’0o@¬p¥Ø:ÝP^\"`¢ýtE', 'online', '2');
INSERT INTO `users` VALUES ('17', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', null, '4', null, null, null);
INSERT INTO `users` VALUES ('18', 'iandale', '8890ada06768846060133bb8162101d8', null, '4', null, null, null);
