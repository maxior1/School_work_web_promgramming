-- 
-- โครงสร้างตาราง `poll_choice`
-- 

CREATE TABLE `poll_choice` (
  `t_id` int(6) NOT NULL,
  `c_id` int(6) NOT NULL,
  `c_name` varchar(150) NOT NULL,
  `c_score` int(6) NOT NULL,
  PRIMARY KEY  (`t_id`,`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `poll_choice`
-- 

INSERT INTO `poll_choice` VALUES (1, 1, 'โปรแกรมเมอร์', 0);
INSERT INTO `poll_choice` VALUES (1, 2, 'นักวิเคราะห์และออกแบบระบบ', 0);
INSERT INTO `poll_choice` VALUES (1, 3, 'เว็บมาสเตอร์', 0);
INSERT INTO `poll_choice` VALUES (1, 4, 'ประกอบธุรกิจส่วนตัว', 0);
INSERT INTO `poll_choice` VALUES (1, 5, 'ไม่ทำอะไรเลย บ้านรวย', 0);
INSERT INTO `poll_choice` VALUES (2, 1, '.NET', 0);
INSERT INTO `poll_choice` VALUES (2, 2, 'Web Service', 0);
INSERT INTO `poll_choice` VALUES (2, 3, 'Graphic Animation', 0);
INSERT INTO `poll_choice` VALUES (2, 4, 'Robot', 0);
INSERT INTO `poll_choice` VALUES (2, 5, 'SAP', 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `poll_topic`
-- 

CREATE TABLE `poll_topic` (
  `t_id` int(6) NOT NULL auto_increment,
  `t_name` text NOT NULL,
  PRIMARY KEY  (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `poll_topic`
-- 

INSERT INTO `poll_topic` VALUES (1, 'เมื่อคุณเรียนจบในสาขาคอมพิวเตอร์ธุรกิจนี้แล้ว อยากจะไปประกอบอาชีพใด');
INSERT INTO `poll_topic` VALUES (2, 'เทคโนโลยีใดที่คุณชอบและสนใจที่จะศึกษามากที่สุด');
