/*
 Navicat Premium Data Transfer

 Source Server         : Homestead
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : 192.168.10.10:3306
 Source Schema         : ecommerce

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 24/07/2020 08:54:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ec_goods
-- ----------------------------
DROP TABLE IF EXISTS `ec_goods`;
CREATE TABLE `ec_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_sn` varchar(255) DEFAULT NULL,
  `goods_name` varchar(255) DEFAULT NULL,
  `thumb_img` varchar(255) DEFAULT NULL,
  `goods_quantity` int(11) DEFAULT '1000',
  `origin_price` decimal(10,2) DEFAULT NULL,
  `goods_price` decimal(10,2) DEFAULT NULL,
  `percentage` int(11) DEFAULT '0',
  `goods_standard` varchar(255) DEFAULT NULL,
  `goods_description` text,
  `type_id` int(11) DEFAULT NULL,
  `is_recommend` int(1) DEFAULT '0',
  `remarks` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ec_goods
-- ----------------------------
BEGIN;
INSERT INTO `ec_goods` VALUES (97, 'sn0001', 'TOUCHLESS BOTTLE', '02_catalogue_page_001.jpg', 1000, 178.00, 125.00, 30, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 1, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (98, 'sn0002', 'COFFEE MACHINE', '02_catalogue_page_002.jpg', 1000, 178.00, 178.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 1, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (99, 'sn0003', 'WOOD TABLET DECK', '01_home_page_007.jpg', 1000, 25.00, 25.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (100, 'sn0004', 'STONE CARPET', '02_catalogue_page_004.jpg', 1000, 34.00, 34.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (101, 'sn0005', 'POLY KNIFE', '02_catalogue_page_005.jpg', 1000, 8.00, 8.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (102, 'sn0006', 'DUTCH GREY BAG', '01_home_page_006.jpg', 1000, 33.00, 33.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (103, 'sn0007', 'MONACO SET LAMP', '02_catalogue_page_007.jpg', 1000, 19.00, 19.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (104, 'sn0008', 'COSMO ICE BOTTLE', '02_catalogue_page_008.jpg', 1000, 27.00, 27.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (105, 'sn0009', 'COGEN WARM LAMP', '01_home_page_005.jpg', 1000, 56.00, 56.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (106, 'sn0010', 'GREEN CARD PEN', '02_catalogue_page_010.jpg', 1000, 12.00, 12.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (107, 'sn0011', 'CONFETTI LAMP', '02_catalogue_page_011.jpg', 1000, 60.00, 45.00, 25, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 1, NULL, 1595484438, 1595484438, NULL);
INSERT INTO `ec_goods` VALUES (108, 'sn0012', 'HOP TABLET COVER', '02_catalogue_page_012.jpg', 1000, 20.00, 20.00, 0, NULL, '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,\n                                stylish, and imbued with the laid back spirit of Taffle. Comfortably holds\n                                your sneakers and your laptop in addition to a plethora of other\n                                necessities, while keeping everything organized and well protected.\n                            </p>\n                            <p><strong>Material:</strong>\n                                Body — 100% cotton trims / other — 100% polyurethane.</p>\n                            <p><strong>Care:</strong>\n                                Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 1, NULL, 1595484438, 1595484438, NULL);
COMMIT;

-- ----------------------------
-- Table structure for ec_goods_img
-- ----------------------------
DROP TABLE IF EXISTS `ec_goods_img`;
CREATE TABLE `ec_goods_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ec_goods_img
-- ----------------------------
BEGIN;
INSERT INTO `ec_goods_img` VALUES (17, 102, 'product-single-big-2.jpg', 1595498460, 1595498460, NULL);
INSERT INTO `ec_goods_img` VALUES (18, 102, 'product-single-big-3.jpg', 1595498460, 1595498460, NULL);
INSERT INTO `ec_goods_img` VALUES (19, 102, 'product-single-big-4.jpg', 1595498460, 1595498460, NULL);
INSERT INTO `ec_goods_img` VALUES (20, 102, 'product-single-big-5.jpg', 1595498460, 1595498460, NULL);
COMMIT;

-- ----------------------------
-- Table structure for ec_type
-- ----------------------------
DROP TABLE IF EXISTS `ec_type`;
CREATE TABLE `ec_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ec_users
-- ----------------------------
DROP TABLE IF EXISTS `ec_users`;
CREATE TABLE `ec_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '111111',
  `nickname` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `is_admin` int(1) DEFAULT '0',
  `remarks` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `is_recommend` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ec_users
-- ----------------------------
BEGIN;
INSERT INTO `ec_users` VALUES (55, 'zoeycheung', '123456', 'Zoey Cheung', 1, '', 1595296519, 1595296519, NULL, 0);
INSERT INTO `ec_users` VALUES (56, '13752139594', '123456', 'Zhang Na', 1, '', 1595296519, 1595296519, NULL, 0);
INSERT INTO `ec_users` VALUES (57, '13752139595', '222222', 'user05', 0, '', 1595296519, 1595296519, NULL, 0);
INSERT INTO `ec_users` VALUES (58, '13752139596', '222222', 'user07', 0, '', 1595296519, 1595296519, NULL, 0);
INSERT INTO `ec_users` VALUES (59, '13752139597', '222222', 'user07', 0, '', 1595296519, 1595296519, NULL, 0);
INSERT INTO `ec_users` VALUES (60, '13752139598', '222222', 'user08', 0, '', 1595296519, 1595296519, NULL, 0);
INSERT INTO `ec_users` VALUES (61, '13752139599', '222222', 'user09', 0, '', 1595296519, 1595296519, NULL, 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
