/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_kdo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2026-11-12 13:03:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sistem kendaraan dinas operasional_audit`
-- ----------------------------
DROP TABLE IF EXISTS `sistem kendaraan dinas operasional_audit`;
CREATE TABLE `sistem kendaraan dinas operasional_audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `ip` varchar(40) NOT NULL,
  `user` varchar(300) DEFAULT NULL,
  `table` varchar(300) DEFAULT NULL,
  `action` varchar(250) NOT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistem kendaraan dinas operasional_audit
-- ----------------------------
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('1', '2026-11-11 23:19:19', '127.0.0.1', 'admin', 'tbl_perangkat_daerah', 'add', '---Keys\r\nID : 1\r\n---Fields\r\nNAMA_INSTANSI [new]: Dinas Pendidikan\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('2', '2026-11-11 23:19:27', '127.0.0.1', 'admin', 'tbl_perangkat_daerah', 'add', '---Keys\r\nID : 2\r\n---Fields\r\nNAMA_INSTANSI [new]: Dinas Kesehatan\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('3', '2026-11-11 23:19:38', '127.0.0.1', 'admin', 'tbl_perangkat_daerah', 'add', '---Keys\r\nID : 3\r\n---Fields\r\nNAMA_INSTANSI [new]: Dinas Pekerjaan\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('4', '2026-11-11 23:24:23', '127.0.0.1', 'admin', 'tbl_pns', 'add', '---Keys\r\nID : 1\r\n---Fields\r\nnama_pegawai [new]: hasan\r\nNIP [new]: 1122\r\nJABATAN [new]: 3a\r\nGOLONGAN [new]: 3a\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('5', '2026-11-11 23:24:47', '127.0.0.1', 'admin', 'tbl_kendaraan', 'add', '---Keys\r\nID : 1\r\n---Fields\r\nNO_POLISI_KENDARAAN [new]: 1234\r\nMERK_KENDARAAN [new]: 243141\r\nTIPE_MODEL_KENDARAAN [new]: mpv\r\nTAHUN_PRODUKSI [new]: 5245234\r\nWARNA_KENDARAAN [new]: hitam\r\nKONDISI_STATUS_KENDARAAN [new]: BAIK\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('6', '2026-11-12 00:00:28', '127.0.0.1', 'admin', 'tbl_pns', 'edit', '---Keys\r\nID : 1\r\n---Fields\r\ninstansi [old]: \r\ninstansi [new]: Dinas Pekerjaan\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('7', '2026-11-12 00:24:05', '127.0.0.1', 'admin', 'tbl_kendaraan', 'edit', '---Keys\r\nID : 1\r\n---Fields\r\nMERK_KENDARAAN [old]: 243141\r\nMERK_KENDARAAN [new]: TOYOTA\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('8', '2026-11-12 00:24:17', '127.0.0.1', 'admin', 'tbl_kendaraan', 'edit', '---Keys\r\nID : 1\r\n');
INSERT INTO `sistem kendaraan dinas operasional_audit` VALUES ('9', '2026-11-12 00:31:48', '127.0.0.1', 'admin', 'admin_users', 'delete', '---Keys\r\nID : 2\r\n---Fields\r\nusername [old]: ce\r\npassword [old]: cece\r\n');

-- ----------------------------
-- Table structure for `sistem kendaraan dinas operasional_uggroups`
-- ----------------------------
DROP TABLE IF EXISTS `sistem kendaraan dinas operasional_uggroups`;
CREATE TABLE `sistem kendaraan dinas operasional_uggroups` (
  `GroupID` int(11) NOT NULL AUTO_INCREMENT,
  `Label` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistem kendaraan dinas operasional_uggroups
-- ----------------------------

-- ----------------------------
-- Table structure for `sistem kendaraan dinas operasional_ugmembers`
-- ----------------------------
DROP TABLE IF EXISTS `sistem kendaraan dinas operasional_ugmembers`;
CREATE TABLE `sistem kendaraan dinas operasional_ugmembers` (
  `UserName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL,
  PRIMARY KEY (`UserName`(50),`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistem kendaraan dinas operasional_ugmembers
-- ----------------------------
INSERT INTO `sistem kendaraan dinas operasional_ugmembers` VALUES ('admin', '-1');

-- ----------------------------
-- Table structure for `sistem kendaraan dinas operasional_ugrights`
-- ----------------------------
DROP TABLE IF EXISTS `sistem kendaraan dinas operasional_ugrights`;
CREATE TABLE `sistem kendaraan dinas operasional_ugrights` (
  `TableName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`TableName`(50),`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistem kendaraan dinas operasional_ugrights
-- ----------------------------
INSERT INTO `sistem kendaraan dinas operasional_ugrights` VALUES ('tbl_kendaraan', '-1', 'ADESPIM');
INSERT INTO `sistem kendaraan dinas operasional_ugrights` VALUES ('tbl_perangkat_daerah', '-1', 'ADESPIM');
INSERT INTO `sistem kendaraan dinas operasional_ugrights` VALUES ('tbl_pj_kendaraan', '-1', 'AEDSPI');
INSERT INTO `sistem kendaraan dinas operasional_ugrights` VALUES ('tbl_pns', '-1', 'ADESPIM');

-- ----------------------------
-- Table structure for `sistem kendaraan dinas operasional_users`
-- ----------------------------
DROP TABLE IF EXISTS `sistem kendaraan dinas operasional_users`;
CREATE TABLE `sistem kendaraan dinas operasional_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `groupid` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistem kendaraan dinas operasional_users
-- ----------------------------
INSERT INTO `sistem kendaraan dinas operasional_users` VALUES ('1', 'admin', 'admin', '', '', null, '1');
INSERT INTO `sistem kendaraan dinas operasional_users` VALUES ('3', '234', '12345', null, null, null, null);

-- ----------------------------
-- Table structure for `tbl_kendaraan`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kendaraan`;
CREATE TABLE `tbl_kendaraan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NO_POLISI_KENDARAAN` varchar(15) DEFAULT NULL,
  `MERK_KENDARAAN` varchar(50) DEFAULT NULL,
  `TIPE_MODEL_KENDARAAN` varchar(50) DEFAULT NULL,
  `TAHUN_PRODUKSI` varchar(50) DEFAULT NULL,
  `WARNA_KENDARAAN` varchar(50) DEFAULT NULL,
  `KONDISI_STATUS_KENDARAAN` varchar(50) DEFAULT NULL,
  `dibuat_tanggal` varchar(50) DEFAULT NULL,
  `dibuat_oleh` varchar(50) DEFAULT NULL,
  `diedit_tanggal` varchar(50) DEFAULT NULL,
  `diedit_oleh` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_kendaraan
-- ----------------------------
INSERT INTO `tbl_kendaraan` VALUES ('1', '1234', 'TOYOTA', 'mpv', '5245234', 'hitam', 'BAIK', null, null, null, null);

-- ----------------------------
-- Table structure for `tbl_perangkat_daerah`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_perangkat_daerah`;
CREATE TABLE `tbl_perangkat_daerah` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_INSTANSI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_perangkat_daerah
-- ----------------------------
INSERT INTO `tbl_perangkat_daerah` VALUES ('1', 'Dinas Pendidikan');
INSERT INTO `tbl_perangkat_daerah` VALUES ('2', 'Dinas Kesehatan');
INSERT INTO `tbl_perangkat_daerah` VALUES ('3', 'Dinas Pekerjaan');

-- ----------------------------
-- Table structure for `tbl_pj_kendaraan`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pj_kendaraan`;
CREATE TABLE `tbl_pj_kendaraan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NIP KARYAWAN` varchar(50) DEFAULT NULL,
  `NOMOR_POLISI_KENDARAAN` varchar(50) DEFAULT NULL,
  `TANGGAL_MULAI` date DEFAULT NULL,
  `TANGGAL_SELESAI` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_pj_kendaraan
-- ----------------------------
INSERT INTO `tbl_pj_kendaraan` VALUES ('1', '1122', '1234', '2026-11-04', '2026-11-12');

-- ----------------------------
-- Table structure for `tbl_pns`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pns`;
CREATE TABLE `tbl_pns` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `NIP` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(50) DEFAULT NULL,
  `GOLONGAN` varchar(50) DEFAULT NULL,
  `instansi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_pns
-- ----------------------------
INSERT INTO `tbl_pns` VALUES ('1', 'hasan', '1122', '3a', '3a', 'Dinas Pekerjaan');
