/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : kisiler

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 24/05/2019 16:27:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for person
-- ----------------------------
DROP TABLE IF EXISTS `person`;
CREATE TABLE `person`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_surname` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `exam1` int(3) NULL DEFAULT NULL,
  `exam2` int(3) NULL DEFAULT NULL,
  `exam3` int(3) NULL DEFAULT NULL,
  `exam4` int(3) NULL DEFAULT NULL,
  `exam5` int(3) NULL DEFAULT NULL,
  `exam6` int(3) NULL DEFAULT NULL,
  `exam7` int(3) NULL DEFAULT NULL,
  `exam8` int(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of person
-- ----------------------------
INSERT INTO `person` VALUES (1, 'Yunus Emre Nalbant', 50, 80, 40, 93, 73, 11, 77, 66);
INSERT INTO `person` VALUES (2, 'Veysel Demirel', 44, 88, 10, 100, 99, 9, 93, 77);
INSERT INTO `person` VALUES (3, 'Ali Kaya', 40, 100, 1, 7, 99, 100, 99, 44);
INSERT INTO `person` VALUES (4, 'Murat Güneş', 10, 79, 33, 55, 33, 11, 33, 56);
INSERT INTO `person` VALUES (5, 'Zeynep Çakır', 45, 87, 75, 76, 52, 88, 65, 81);

SET FOREIGN_KEY_CHECKS = 1;
