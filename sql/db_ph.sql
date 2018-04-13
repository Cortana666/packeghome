/*
 Navicat Premium Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 50638
 Source Host           : localhost:3306
 Source Schema         : db_ph

 Target Server Type    : MySQL
 Target Server Version : 50638
 File Encoding         : 65001

 Date: 13/04/2018 19:36:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tb_company
-- ----------------------------
DROP TABLE IF EXISTS `tb_company`;
CREATE TABLE `tb_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_company
-- ----------------------------
BEGIN;
INSERT INTO `tb_company` VALUES (1, '顺丰');
INSERT INTO `tb_company` VALUES (2, '韵达');
INSERT INTO `tb_company` VALUES (3, '圆通');
INSERT INTO `tb_company` VALUES (4, '申通');
INSERT INTO `tb_company` VALUES (5, '京东');
INSERT INTO `tb_company` VALUES (6, '邮政');
INSERT INTO `tb_company` VALUES (7, '百世');
INSERT INTO `tb_company` VALUES (8, '天天');
COMMIT;

-- ----------------------------
-- Table structure for tb_dingdan
-- ----------------------------
DROP TABLE IF EXISTS `tb_dingdan`;
CREATE TABLE `tb_dingdan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `receiver` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_dingdan
-- ----------------------------
BEGIN;
INSERT INTO `tb_dingdan` VALUES (1, '顺丰', 0, '王壮', '陈骋昊', '2016/11/3', '0.5', '0.7', '0001', '收件');
INSERT INTO `tb_dingdan` VALUES (2, '申通', 1, '曹炳旭', '杨剑', '2016/11/6', '11', '0.5', '0002', '发件');
INSERT INTO `tb_dingdan` VALUES (3, '圆通', 1, '蓝如', '张剑文', '2016/11/18', '0.5', '0.6', '0003', '收件');
INSERT INTO `tb_dingdan` VALUES (4, '邮政', 1, '秦琪赢', '于婷婷', '2016/11/18', '0.5', '0.7', '0004', '收件');
INSERT INTO `tb_dingdan` VALUES (5, '韵达', 1, '刘璐新', '陈骋昊', '2016/11/18', '0.5', '0.3', '0005', '收件');
INSERT INTO `tb_dingdan` VALUES (6, '圆通', 1, '李颖', '于婷婷', '2016/11/19', '0.5', '0.1', '0006', '收件');
INSERT INTO `tb_dingdan` VALUES (7, '申通', 1, '孔维民', '于婷婷', '2016/11/19', '13', '0.3', '0007', '收件');
INSERT INTO `tb_dingdan` VALUES (8, '顺丰', 1, '叶淑学', '张剑文', '2016/11/20', '0.5', '0.5', '0008', '收件');
INSERT INTO `tb_dingdan` VALUES (9, '韵达', 1, '吕弘毅', '杨剑', '2016/11/21', '0.5', '0.5', '0009', '收件');
INSERT INTO `tb_dingdan` VALUES (10, '申通', 1, '赵耀磊', '陈骋昊', '2016/11/26', '0.5', '1', '0010', '收件');
INSERT INTO `tb_dingdan` VALUES (11, '顺丰', 1, '张蓓媛', '张剑文', '2016/12/16', '0.5', '2', '0011', '收件');
INSERT INTO `tb_dingdan` VALUES (12, '韵达', 1, '闫杰', '杨剑', '2016/12/20', '0.5', '0.3', '0012', '收件');
INSERT INTO `tb_dingdan` VALUES (13, '圆通', 1, '金正伟', '张剑文', '2016/12/21', '0.5', '0.9', '0013', '收件');
INSERT INTO `tb_dingdan` VALUES (14, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (15, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (16, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (17, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (18, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (19, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (20, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (21, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (22, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (23, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (24, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (25, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (26, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (27, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (28, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (29, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
INSERT INTO `tb_dingdan` VALUES (30, '顺丰', 1, '王壮', '陈骋昊', '2017/03/22', '12', '1', '0000', '');
COMMIT;

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `idcard` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ban` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tb_worker
-- ----------------------------
DROP TABLE IF EXISTS `tb_worker`;
CREATE TABLE `tb_worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cred` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
