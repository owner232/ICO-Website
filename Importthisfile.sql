SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bonus_settings
-- ----------------------------
DROP TABLE IF EXISTS `bonus_settings`;
CREATE TABLE `bonus_settings`  (
  `bonus_id` int(12) NOT NULL AUTO_INCREMENT,
  `bonus_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `bonus_points` double NOT NULL,
  `tokenlimit` double NOT NULL,
  `soldtoken` double NOT NULL,
  `bonus_status` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  PRIMARY KEY (`bonus_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bonus_settings
-- ----------------------------
INSERT INTO `bonus_settings` VALUES (1, 'Stage 1', '2018-01-06', '2018-01-07', 0.005, 5000000, 0, 0, '2017-10-13', '0000-00-00');
INSERT INTO `bonus_settings` VALUES (2, 'Stage 2', '2018-01-12', '2018-01-28', 0.01, 10000000, 0, 0, '2017-10-13', '0000-00-00');
INSERT INTO `bonus_settings` VALUES (3, 'Stage 3', '2019-11-16', '2019-11-30', 0, 0, 0, 0, '2017-10-13', '0000-00-00');
INSERT INTO `bonus_settings` VALUES (4, 'Stage 4', '2017-12-01', '2017-12-15', 0, 0, 0, 0, '2017-10-13', '0000-00-00');
INSERT INTO `bonus_settings` VALUES (5, 'Stage 5', '2018-01-16', '2017-12-31', 0, 0, 0, 0, '2017-10-13', '0000-00-00');

-- ----------------------------
-- Table structure for coin_pointssettings
-- ----------------------------
DROP TABLE IF EXISTS `coin_pointssettings`;
CREATE TABLE `coin_pointssettings`  (
  `coin_id` int(11) NOT NULL AUTO_INCREMENT,
  `coin_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `coin_points` double NOT NULL,
  `coin_address` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  PRIMARY KEY (`coin_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of coin_pointssettings
-- ----------------------------
INSERT INTO `coin_pointssettings` VALUES (1, 'BTC', 123.34, 'ert', '2017-09-05', '0000-00-00');
INSERT INTO `coin_pointssettings` VALUES (2, 'LTC', 234.45, 'asd', '2017-09-05', '0000-00-00');
INSERT INTO `coin_pointssettings` VALUES (3, 'ETH', 1223, 'asdasd', '0000-00-00', '0000-00-00');
INSERT INTO `coin_pointssettings` VALUES (4, 'ZEC', 345.23, 'qweqweqwe', '0000-00-00', '0000-00-00');
INSERT INTO `coin_pointssettings` VALUES (5, 'BTS', 234.44, 'werwerwerewr', '0000-00-00', '0000-00-00');

-- ----------------------------
-- Table structure for coin_rpcsetting
-- ----------------------------
DROP TABLE IF EXISTS `coin_rpcsetting`;
CREATE TABLE `coin_rpcsetting`  (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `coin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `coinname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rpchost` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rpcuser` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rpcpass` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rpcport` int(5) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cid`) USING BTREE,
  UNIQUE INDEX `cid`(`cid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of coin_rpcsetting
-- ----------------------------
INSERT INTO `coin_rpcsetting` VALUES (1, 'Coin', 'Coin', '127.0.0.1', 'yourRPCUSER', 'yourRPCPASS', 22556);

-- ----------------------------
-- Table structure for currency_settings
-- ----------------------------
DROP TABLE IF EXISTS `currency_settings`;
CREATE TABLE `currency_settings`  (
  `currency_id` int(100) NOT NULL,
  `currency_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `currency_rate` double NOT NULL,
  PRIMARY KEY (`currency_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of currency_settings
-- ----------------------------
INSERT INTO `currency_settings` VALUES (1, 'USDEX', 0.01);
INSERT INTO `currency_settings` VALUES (2, 'LTC', 2689);
INSERT INTO `currency_settings` VALUES (3, 'XRP', 0.5688);
INSERT INTO `currency_settings` VALUES (4, 'ETH', 0.25987);

-- ----------------------------
-- Table structure for discount_settings
-- ----------------------------
DROP TABLE IF EXISTS `discount_settings`;
CREATE TABLE `discount_settings`  (
  `discount_id` int(12) NOT NULL AUTO_INCREMENT,
  `discount_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `discount_status` int(11) NOT NULL,
  `discount_percentage` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  PRIMARY KEY (`discount_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of discount_settings
-- ----------------------------
INSERT INTO `discount_settings` VALUES (1, 'discount1', '0000-00-00', '0000-00-00', 0, 0, '2017-09-11', '0000-00-00');
INSERT INTO `discount_settings` VALUES (2, 'discount2', '0000-00-00', '0000-00-00', 0, 0, '2017-09-11', '0000-00-00');
INSERT INTO `discount_settings` VALUES (3, 'discount3', '0000-00-00', '0000-00-00', 0, 0, '2017-09-11', '0000-00-00');

-- ----------------------------
-- Table structure for membertable
-- ----------------------------
DROP TABLE IF EXISTS `membertable`;
CREATE TABLE `membertable`  (
  `member_id` int(12) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `member_emailid` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_verification_code` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `member_password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `member_phoneno` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `profileimage` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `member_status` int(11) NOT NULL,
  `referal_id` int(5) NOT NULL,
  `reference_code` int(10) NOT NULL,
  `sponsor_id` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `member_refcode` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sms_status` int(5) NOT NULL,
  `chargingsms_status` int(5) NOT NULL,
  `smsreferal_status` int(5) NOT NULL,
  `letter_status` int(5) NOT NULL,
  `notification_status` int(5) NOT NULL,
  `user_type` int(10) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `member_address` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `member_zip` int(50) NOT NULL,
  `member_city` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `member_country` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `secret` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `onecode` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `randcode` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`member_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 637 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of membertable
-- ----------------------------
INSERT INTO `membertable` VALUES (1, 'admin', 'admin@ecapitalcoin.net', '', 'af513d95e7ae4ca89d141ee41ac73391', '11111111', 'uploads/userprofileimg/1blogpost.png', 1, 0, 654321, '0', '0', 0, 0, 0, 0, 0, 1, '2017-09-04', '0000-00-00', '', 0, '', '', '', '', '', '2018-01-14 16:52:33');

-- ----------------------------
-- Table structure for paymentgateway_settings
-- ----------------------------
DROP TABLE IF EXISTS `paymentgateway_settings`;
CREATE TABLE `paymentgateway_settings`  (
  `mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `public_key` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `private_key` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`mode_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of paymentgateway_settings
-- ----------------------------
INSERT INTO `paymentgateway_settings` VALUES (1, 'coinpayment', '', '');

-- ----------------------------
-- Table structure for preference_settings
-- ----------------------------
DROP TABLE IF EXISTS `preference_settings`;
CREATE TABLE `preference_settings`  (
  `preference_id` int(12) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `createdon` date NOT NULL,
  PRIMARY KEY (`preference_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of preference_settings
-- ----------------------------
INSERT INTO `preference_settings` VALUES (1, 'sms', 1, '0000-00-00');
INSERT INTO `preference_settings` VALUES (2, 'chargingsms', 1, '0000-00-00');
INSERT INTO `preference_settings` VALUES (3, 'smsreferal', 0, '0000-00-00');
INSERT INTO `preference_settings` VALUES (4, 'smsletter', 1, '0000-00-00');
INSERT INTO `preference_settings` VALUES (5, 'notification', 0, '0000-00-00');

-- ----------------------------
-- Table structure for site_settings
-- ----------------------------
DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE `site_settings`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `site_settingskey` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `site_settingsvalue` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of site_settings
-- ----------------------------
INSERT INTO `site_settings` VALUES (1, 'site_name', 'SITE NAME');
INSERT INTO `site_settings` VALUES (2, 'site_url', 'http://127.0.0.1:84');
INSERT INTO `site_settings` VALUES (3, 'admin_email', 'test@test.com');
INSERT INTO `site_settings` VALUES (4, 'admin_sitelogo', 'uploads/site_logo/Bitcoin1.png');
INSERT INTO `site_settings` VALUES (5, 'user_sitelogo', 'uploads/site_logo/Bitcoin1.png');
INSERT INTO `site_settings` VALUES (6, 'favicon_logo', '');
INSERT INTO `site_settings` VALUES (7, 'meta_title', 'ICO Coin');
INSERT INTO `site_settings` VALUES (8, 'meta_description', 'ICO Coin Description');
INSERT INTO `site_settings` VALUES (9, 'meta_key', 'ICO Coin');
INSERT INTO `site_settings` VALUES (10, 'footer_content', 'Copyright 2018 - yoursitedomain.com');
INSERT INTO `site_settings` VALUES (11, 'updated_on', '2018-01-16 07:36:53');
INSERT INTO `site_settings` VALUES (13, 'token_content', '                                                                                                   <h1>Enter your Welcome Message Here</h1>                                                                                                                                                                                                      ');
INSERT INTO `site_settings` VALUES (14, 'referal_content', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ');
INSERT INTO `site_settings` VALUES (15, 'current_currency_coin', 'YOURICOCOIN');
INSERT INTO `site_settings` VALUES (16, 'site_key', '6Le5YjcUAAAAAJm3HTlx8fP1KGrDbiDCvn_UbHzT');
INSERT INTO `site_settings` VALUES (17, 'secret_key', '6Le5YjcUAAAAAKERmVPoi1XDOuOHUrhw12PQaGw8');
INSERT INTO `site_settings` VALUES (18, 'contact_email', 'team@unifiedsociety.org');
INSERT INTO `site_settings` VALUES (19, 'company_name', 'Unified Society');
INSERT INTO `site_settings` VALUES (20, 'TFA', 'enable');
INSERT INTO `site_settings` VALUES (21, 'wallet_dllink', 'http://mywaletlink.url/poof.tgz');

-- ----------------------------
-- Table structure for tokensettings
-- ----------------------------
DROP TABLE IF EXISTS `tokensettings`;
CREATE TABLE `tokensettings`  (
  `token_id` int(11) NOT NULL AUTO_INCREMENT,
  `token_value` double NOT NULL,
  `token_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`token_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tokensettings
-- ----------------------------
INSERT INTO `tokensettings` VALUES (1, 23, '1 Token points');
INSERT INTO `tokensettings` VALUES (2, 1, '1 Token Price');
INSERT INTO `tokensettings` VALUES (3, 50000, 'Total Token');
INSERT INTO `tokensettings` VALUES (4, 10, 'BTC Deposit Limit');

-- ----------------------------
-- Table structure for transaction_history
-- ----------------------------
DROP TABLE IF EXISTS `transaction_history`;
CREATE TABLE `transaction_history`  (
  `history_id` int(12) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cash_type` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deposit_amount` double NOT NULL,
  `btcamount` double NOT NULL,
  `ecashcoin` double NOT NULL,
  `created_on` date NOT NULL,
  `member_id` int(12) NOT NULL,
  `type` double NOT NULL COMMENT '\'1\' =>Deposit, \'2\' => \'Debits\'',
  `token` int(200) NOT NULL,
  `tokentype` int(11) NOT NULL,
  `tokenpoints` double NOT NULL,
  `payment_status` int(11) NOT NULL COMMENT '1-pending,2-completed,3-rejected',
  PRIMARY KEY (`history_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for withdrawal_history
-- ----------------------------
DROP TABLE IF EXISTS `withdrawal_history`;
CREATE TABLE `withdrawal_history`  (
  `wid` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `amount` float NULL DEFAULT NULL,
  `txid` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `timestamp` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`wid`) USING BTREE,
  UNIQUE INDEX `wid`(`wid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
