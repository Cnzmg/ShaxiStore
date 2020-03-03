
DROP TABLE IF EXISTS ns_platform_activity;
CREATE TABLE ns_platform_activity (
  activity_id MEDIUMINT(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  activity_title VARCHAR(255) NOT NULL COMMENT '����',
  activity_type ENUM('1','2') DEFAULT NULL COMMENT '����� 1:��Ʒ 2:�Ź�',
  activity_banner VARCHAR(255) NOT NULL COMMENT '������ͼƬ',
  activity_style VARCHAR(255) NOT NULL COMMENT '�ҳ��ģ����ʽ��ʶ��',
  activity_desc VARCHAR(1000) NOT NULL COMMENT '����',
  activity_start_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '��ʼʱ��',
  activity_end_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '����ʱ��',
  activity_sort TINYINT(1) UNSIGNED NOT NULL DEFAULT 255 COMMENT '����',
  activity_state TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '�״̬ 0Ϊ�ر� 1Ϊ���� 2��ʼ 3����',
  PRIMARY KEY (activity_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 31
AVG_ROW_LENGTH = 1
CHARACTER SET utf8
COLLATE utf8_general_ci
COMMENT = 'ƽ̨���';
DROP TABLE IF EXISTS ns_platform_activity_detail;
CREATE TABLE ns_platform_activity_detail (
  activity_detail_id MEDIUMINT(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  activity_id MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT 0 COMMENT '����',
  item_id INT(11) NOT NULL COMMENT '��Ʒ���Ź��ı��',
  item_name VARCHAR(255) NOT NULL COMMENT '��Ʒ���Ź�����',
  shop_id INT(11) NOT NULL COMMENT '���̱��',
  shop_name VARCHAR(255) NOT NULL COMMENT '��������',
  activity_detail_state INT(11) NOT NULL DEFAULT 0 COMMENT '״̬ 0:(Ĭ��)����� 1:ͨ�� 2:δͨ�� 3:�ѿ�ʼ 4:�ѽ���',
  activity_detail_sort TINYINT(1) UNSIGNED NOT NULL DEFAULT 255 COMMENT '����',
  PRIMARY KEY (activity_detail_id),
  INDEX activity_id (activity_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 80
AVG_ROW_LENGTH = 1
CHARACTER SET utf8
COLLATE utf8_general_ci
COMMENT = 'ƽ̨�ϸ�ڱ�';
INSERT INTO sys_module VALUES
(10060, '������������', 'platform', 'config', 'expressmessage', 652, 3, 'config/expressmessage', 1, 0, 6, '2017-09-22 10:01:29', NULL, '', '', '', 1);