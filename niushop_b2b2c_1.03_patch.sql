
DROP TABLE IF EXISTS ns_platform_activity;
CREATE TABLE ns_platform_activity (
  activity_id MEDIUMINT(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  activity_title VARCHAR(255) NOT NULL COMMENT '标题',
  activity_type ENUM('1','2') DEFAULT NULL COMMENT '活动类型 1:商品 2:团购',
  activity_banner VARCHAR(255) NOT NULL COMMENT '活动横幅大图片',
  activity_style VARCHAR(255) NOT NULL COMMENT '活动页面模板样式标识码',
  activity_desc VARCHAR(1000) NOT NULL COMMENT '描述',
  activity_start_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '开始时间',
  activity_end_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '结束时间',
  activity_sort TINYINT(1) UNSIGNED NOT NULL DEFAULT 255 COMMENT '排序',
  activity_state TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '活动状态 0为关闭 1为开启 2开始 3结束',
  PRIMARY KEY (activity_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 31
AVG_ROW_LENGTH = 1
CHARACTER SET utf8
COLLATE utf8_general_ci
COMMENT = '平台活动表';
DROP TABLE IF EXISTS ns_platform_activity_detail;
CREATE TABLE ns_platform_activity_detail (
  activity_detail_id MEDIUMINT(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  activity_id MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT 0 COMMENT '活动编号',
  item_id INT(11) NOT NULL COMMENT '商品或团购的编号',
  item_name VARCHAR(255) NOT NULL COMMENT '商品或团购名称',
  shop_id INT(11) NOT NULL COMMENT '店铺编号',
  shop_name VARCHAR(255) NOT NULL COMMENT '店铺名称',
  activity_detail_state INT(11) NOT NULL DEFAULT 0 COMMENT '状态 0:(默认)待审核 1:通过 2:未通过 3:已开始 4:已结束',
  activity_detail_sort TINYINT(1) UNSIGNED NOT NULL DEFAULT 255 COMMENT '排序',
  PRIMARY KEY (activity_detail_id),
  INDEX activity_id (activity_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 80
AVG_ROW_LENGTH = 1
CHARACTER SET utf8
COLLATE utf8_general_ci
COMMENT = '平台活动细节表';
INSERT INTO sys_module VALUES
(10060, '物流跟踪设置', 'platform', 'config', 'expressmessage', 652, 3, 'config/expressmessage', 1, 0, 6, '2017-09-22 10:01:29', NULL, '', '', '', 1);