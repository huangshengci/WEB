/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : meitu

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-09-21 15:30:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for meitu_cart
-- ----------------------------
DROP TABLE IF EXISTS `meitu_cart`;
CREATE TABLE `meitu_cart` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meitu_cart
-- ----------------------------
INSERT INTO `meitu_cart` VALUES ('1', '1');
INSERT INTO `meitu_cart` VALUES ('2', '2');

-- ----------------------------
-- Table structure for meitu_cart_detail
-- ----------------------------
DROP TABLE IF EXISTS `meitu_cart_detail`;
CREATE TABLE `meitu_cart_detail` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `cartId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meitu_cart_detail
-- ----------------------------
INSERT INTO `meitu_cart_detail` VALUES ('1', '1', '1', '4');
INSERT INTO `meitu_cart_detail` VALUES ('2', '1', '2', '1');
INSERT INTO `meitu_cart_detail` VALUES ('4', '1', '3', '1');

-- ----------------------------
-- Table structure for meitu_product
-- ----------------------------
DROP TABLE IF EXISTS `meitu_product`;
CREATE TABLE `meitu_product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(128) DEFAULT NULL,
  `pname` varchar(64) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meitu_product
-- ----------------------------
INSERT INTO `meitu_product` VALUES ('1', 'images/57a9a8cf86cb727541.jpg!thumb220.jpg', '气球恐龙绿帽子', '188.00');
INSERT INTO `meitu_product` VALUES ('2', 'images/57a7f01f9cb6085162.jpg!thumb220.jpg', '美图V4s高透手机壳', '49.00');
INSERT INTO `meitu_product` VALUES ('3', 'images/57a06a2a9621c72275.jpg!thumb220.jpg', '美图M6 3D屏幕保护膜', '19.90');
INSERT INTO `meitu_product` VALUES ('4', 'images/5795a7f688e8313351.jpg!thumb220.jpg', '美图M6手机数据线', '188.00');
INSERT INTO `meitu_product` VALUES ('5', 'images/579f0829b30f234760.jpg!thumb220.jpg', 'MeituFamily笔记本', '20.00');
INSERT INTO `meitu_product` VALUES ('6', 'images/57b57aef8494e47741.jpg!thumb220.jpg', 'MeituFamily萌趣贴纸', '29.00');
INSERT INTO `meitu_product` VALUES ('7', 'images/5791bd559b61164756.jpg!thumb220.jpg', 'MeituFamily小笼包鸡购物袋', '99.00');
INSERT INTO `meitu_product` VALUES ('8', 'images/5791bc543cde790377.jpg!thumb220.jpg', 'MeituFamily雨伞', '189.00');
INSERT INTO `meitu_product` VALUES ('9', 'images/577a4e1717c8c41387.jpg!thumb220.jpg', 'MeituFamily印花移动电源', '198.00');
INSERT INTO `meitu_product` VALUES ('10', 'images/5735400e523ca84322.jpg!thumb220.jpg', 'MeituFamily X MLGB 夏日潮TEE', '198.00');
INSERT INTO `meitu_product` VALUES ('11', 'images/570c92e64879a59695.jpg!thumb220.jpg', '美图V4/V4s 360度旋转支架', '79.00');
INSERT INTO `meitu_product` VALUES ('12', 'images/56efc9c440cbd49231.jpg!thumb220.jpg', '美图V4/V4s钢化玻璃贴膜', '49.00');
INSERT INTO `meitu_product` VALUES ('13', 'images/56d80b511c3ce57438.jpg!thumb220.jpg', '美图V4/V4s/M6电源适配器', '29.00');
INSERT INTO `meitu_product` VALUES ('14', 'images/5694bafec3f0072720.jpg!thumb220.jpg', '美图V4透明手机壳', '49.00');
INSERT INTO `meitu_product` VALUES ('15', 'images/5637448bccc0d12917.jpg!thumb220.jpg', '美图遥控器第二代', '89.00');
INSERT INTO `meitu_product` VALUES ('16', 'images/563740ce3335452331.jpg!thumb220.jpg', '美图自拍补光灯', '99.00');
INSERT INTO `meitu_product` VALUES ('17', 'images/5621b24e25e6248824.jpg!thumb220.jpg', 'Meitu x MLGB潮牌手机壳', '129.00');
INSERT INTO `meitu_product` VALUES ('18', 'images/561e03a60e3cb47662.jpg!thumb220.jpg', '美图手机专属耳机', '79.00');
INSERT INTO `meitu_product` VALUES ('19', 'images/5577fd81cb20c65594.jpg!thumb220.jpg', '美图M4皮革手机壳', '79.00');
INSERT INTO `meitu_product` VALUES ('20', 'images/5555a36cde5d272584.jpg!thumb220.jpg', '美图M4TPU手机壳', '198.00');
INSERT INTO `meitu_product` VALUES ('21', 'images/5555a19d6f46e70436.jpg!thumb220.jpg', '美图M4编织手机壳', '99.00');
INSERT INTO `meitu_product` VALUES ('22', 'images/546d96814a45a31634.jpg!thumb220.jpg', 'MLGB x meitu 2016 睡眠装备', '99.00');
INSERT INTO `meitu_product` VALUES ('23', 'images/5436601baee3893413.jpg!thumb220.jpg', 'Meitu x MLGB 2016 Mirror T-shirt', '168.00');
INSERT INTO `meitu_product` VALUES ('24', 'images/5360648abca9a49725.jpg!thumb220.jpg', '美图手机2专属手机壳', '59.00');
INSERT INTO `meitu_product` VALUES ('25', 'images/5640734b8d52c37246.jpg!thumb220.jpg', '限量版美图公仔', '199.00');
INSERT INTO `meitu_product` VALUES ('26', 'images/52bd19692ea8821441.jpg!thumb220.jpg', '美图手机1S原装电池', '99.00');
INSERT INTO `meitu_product` VALUES ('27', 'images/52be697436e8161628.jpg!thumb220.jpg', '美图手机1代原装电池', '99.00');

-- ----------------------------
-- Table structure for meitu_user
-- ----------------------------
DROP TABLE IF EXISTS `meitu_user`;
CREATE TABLE `meitu_user` (
  `uid` int(110) NOT NULL AUTO_INCREMENT,
  `uname` varchar(32) DEFAULT NULL,
  `upwd` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uname` (`uname`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meitu_user
-- ----------------------------
INSERT INTO `meitu_user` VALUES ('1', '15531006501', '123456aa');
INSERT INTO `meitu_user` VALUES ('2', '13333333333', '123456aa');
DROP TRIGGER IF EXISTS `t_afterinsert_on_meitu_user`;
DELIMITER ;;
CREATE TRIGGER `t_afterinsert_on_meitu_user` AFTER INSERT ON `meitu_user` FOR EACH ROW BEGIN
     insert into meitu_cart values(null,new.uid);
END
;;
DELIMITER ;
