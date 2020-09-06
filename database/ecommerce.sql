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

 Date: 06/09/2020 19:52:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ec_goods
-- ----------------------------
DROP TABLE IF EXISTS `ec_goods`;
CREATE TABLE `ec_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_sn` varchar(255) DEFAULT NULL COMMENT '商品编号',
  `goods_name` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `thumb_img` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `goods_quantity` int(11) DEFAULT '1000' COMMENT '数量',
  `origin_price` decimal(10,2) DEFAULT NULL COMMENT '原价',
  `goods_price` decimal(10,2) DEFAULT NULL COMMENT '商城价格',
  `percentage` int(11) DEFAULT '0' COMMENT '优惠比例',
  `goods_standard` varchar(255) DEFAULT NULL COMMENT '规格',
  `goods_description` text COMMENT '描述',
  `type_id` int(11) DEFAULT NULL COMMENT '类别ID，外键',
  `is_recommend` tinyint(1) DEFAULT '0' COMMENT '是否在首页推荐，0不推荐，1推荐',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `goods_sn` (`goods_sn`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of ec_goods
-- ----------------------------
BEGIN;
INSERT INTO `ec_goods` VALUES (153, 'sn0001', 'TOUCHLESS BOTTLE', 'goods/20200727/76a8c9630a683f24c4e6a759fa4dc37c.jpg', 1000, 178.00, 125.00, 30, '', '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,stylish, and imbued with the laid back spirit of Taffle. Comfortably holds your sneakers and your laptop in addition to a plethora of other necessities, while keeping everything organized and well protected.</p> <p><strong>Material:</strong> Body — 100% cotton trims / other — 100% polyurethane.</p><p><strong>Care:</strong> Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595819207, 1595843594, NULL);
INSERT INTO `ec_goods` VALUES (154, 'sn0002', 'COFFEE MACHINE', 'goods/20200727/0c00ec51d518897af310c1a18b17c2c3.jpg', 1000, 178.00, 178.00, 0, '', '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,stylish, and imbued with the laid back spirit of Taffle. Comfortably holds your sneakers and your laptop in addition to a plethora of other necessities, while keeping everything organized and well protected.</p> <p><strong>Material:</strong> Body — 100% cotton trims / other — 100% polyurethane.</p><p><strong>Care:</strong> Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595819207, 1595839618, NULL);
INSERT INTO `ec_goods` VALUES (155, 'sn0003', 'WOOD TABLET DECK', 'goods/20200727/45243d7562e9321d7cdd508c88c380d3.jpg', 1000, 200.00, 25.00, 88, '', '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,stylish, and imbued with the laid back spirit of Taffle. Comfortably holds your sneakers and your laptop in addition to a plethora of other necessities, while keeping everything organized and well protected.</p> <p><strong>Material:</strong> Body — 100% cotton trims / other — 100% polyurethane.</p><p><strong>Care:</strong> Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 1, NULL, 1595819207, 1595843613, NULL);
INSERT INTO `ec_goods` VALUES (156, 'sn0004', 'STONE CARPET', 'goods/20200727/7624466a68704871f622bba6913bc646.jpg', 1000, 34.00, 34.00, 0, '', '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,stylish, and imbued with the laid back spirit of Taffle. Comfortably holds your sneakers and your laptop in addition to a plethora of other necessities, while keeping everything organized and well protected.</p> <p><strong>Material:</strong> Body — 100% cotton trims / other — 100% polyurethane.</p><p><strong>Care:</strong> Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595819207, 1595839592, NULL);
INSERT INTO `ec_goods` VALUES (157, 'sn0005', 'POLY KNIFE', 'goods/20200727/b030de1f4d6ec5d972c478e633627aa8.jpg', 1000, 8.00, 8.00, 0, '', '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,stylish, and imbued with the laid back spirit of Taffle. Comfortably holds your sneakers and your laptop in addition to a plethora of other necessities, while keeping everything organized and well protected.</p> <p><strong>Material:</strong> Body — 100% cotton trims / other — 100% polyurethane.</p><p><strong>Care:</strong> Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 0, NULL, 1595819207, 1595843542, NULL);
INSERT INTO `ec_goods` VALUES (158, 'sn0006', 'DUTCH GREY BAG', 'goods/20200727/e6a9f22e3445925128cdeb99e707ada1.jpg', 1000, 33.00, 30.00, 10, '', '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,stylish, and imbued with the laid back spirit of Taffle. Comfortably holds your sneakers and your laptop in addition to a plethora of other necessities, while keeping everything organized and well protected.</p> <p><strong>Material:</strong> Body — 100% cotton trims / other — 100% polyurethane.</p><p><strong>Care:</strong> Wipe clean with a damp sponge, do not dry clean, do not iron</p>', NULL, 1, NULL, 1595819207, 1595839552, NULL);
INSERT INTO `ec_goods` VALUES (159, 'sn0007', 'MONACO SET LAMP', 'goods/20200727/8d56d50ca396124fdc855ab45fe348f8.jpg', 1000, 19.00, 19.00, 0, '', '<p>Dutch Bag crafts high quality tees and accessories that are comfortable,stylish, and imbued with the laid back spirit of Taffle. Comfortably holds your sneakers and your laptop in addition to a plethora of other necessities, while keeping everything organized and well protected.</p> <p><strong>Material:</strong> Body — 100% cotton trims / other — 100% polyurethane.</p><p><strong>Care:</strong> Wipe clean with a damp sponge, do not dry clean, do not iron</p><p><img src=\"/storage/uploads/20200906/0c5ed743a7ffc4ce308280aa8445f6fc.jpg\" alt=\"undefined\"><br></p>', NULL, 0, NULL, 1595819207, 1599389715, NULL);
COMMIT;

-- ----------------------------
-- Table structure for ec_goods_img
-- ----------------------------
DROP TABLE IF EXISTS `ec_goods_img`;
CREATE TABLE `ec_goods_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL COMMENT '商品ID，外键',
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='商品预览图片表';

-- ----------------------------
-- Records of ec_goods_img
-- ----------------------------
BEGIN;
INSERT INTO `ec_goods_img` VALUES (17, 158, 'product-single-big-2.jpg', 1595498460, 1595498460, NULL);
INSERT INTO `ec_goods_img` VALUES (18, 158, 'product-single-big-3.jpg', 1595498460, 1595498460, NULL);
INSERT INTO `ec_goods_img` VALUES (19, 158, 'product-single-big-4.jpg', 1595498460, 1595498460, NULL);
INSERT INTO `ec_goods_img` VALUES (20, 158, 'product-single-big-5.jpg', 1595498460, 1595498460, NULL);
INSERT INTO `ec_goods_img` VALUES (21, NULL, NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for ec_users
-- ----------------------------
DROP TABLE IF EXISTS `ec_users`;
CREATE TABLE `ec_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '用户名（手机号）',
  `password` varchar(255) NOT NULL DEFAULT '111111' COMMENT '密码',
  `nickname` varchar(255) DEFAULT '' COMMENT '昵称',
  `is_admin` tinyint(1) DEFAULT '0' COMMENT '是否是管理员，1管理员，2普通用户',
  `remarks` varchar(255) DEFAULT '' COMMENT '备注',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COMMENT='用户表\n';

-- ----------------------------
-- Records of ec_users
-- ----------------------------
BEGIN;
INSERT INTO `ec_users` VALUES (55, 'zoeycheung', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Zoey Cheung', 1, '', 1595296519, 1595296519, NULL);
INSERT INTO `ec_users` VALUES (56, '13752139594', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Zhang Na', 1, '', 1595296519, 1595296519, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
