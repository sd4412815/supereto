/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : supereto

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-06-27 16:05:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yy_ticket
-- ----------------------------
DROP TABLE IF EXISTS `yy_ticket`;
CREATE TABLE `yy_ticket` (
  `id` int(10) NOT NULL,
  `t_account_number` varchar(10) NOT NULL,
  `t_ticket_number` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
