-- 
-- โครงสร้างตาราง `a_webboard`
-- 

CREATE TABLE `a_webboard` (
  `a_id` int(6) NOT NULL auto_increment,
  `a_answer` text NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `q_id` int(6) NOT NULL,
  PRIMARY KEY  (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `a_webboard`
-- 

INSERT INTO `a_webboard` VALUES (1, 'ลงมือปฏิบัติบ่อยๆ ทั้งในและนอกห้องเรียน จะเก่งเองครับ', 'อนุวัฒน์', '2007-10-26 15:48:41', 1);
INSERT INTO `a_webboard` VALUES (2, 'นี่เลย เอกสารประกอบการสอนวิชา Internet Programming ของ อ.เอกชัย ไง', 'วิภา', '2007-10-26 15:55:21', 2);
INSERT INTO `a_webboard` VALUES (3, 'คู่มือการพัฒนาเว็บด้วย PHP5 และ MySQL5 (ซีเอ็ด)', 'น้ำฝน', '2007-10-26 15:57:06', 2);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `q_webboard`
-- 

CREATE TABLE `q_webboard` (
  `q_id` int(6) NOT NULL auto_increment,
  `q_question` text NOT NULL,
  `q_name` varchar(50) NOT NULL,
  `q_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `q_webboard`
-- 

INSERT INTO `q_webboard` VALUES (1, 'ทำอย่างไรหนูถึงจะเขียนโปรแกรมภาษา PHP เก่งค่ะ?', 'น้องแนน', '2007-10-26 15:46:21');
INSERT INTO `q_webboard` VALUES (2, 'ช่วยแนะนำหนังสือดี ๆ เกี่ยวกับ PHP ให้หน่อยครับ', 'สมศักดิ์', '2007-10-26 15:53:12');
