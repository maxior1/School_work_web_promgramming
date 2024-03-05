-- 
-- โครงสร้างตาราง `guestbook`
-- 

CREATE TABLE `guestbook` (
  `g_id` int(6) NOT NULL auto_increment,
  `g_name` varchar(50) NOT NULL,
  `g_email` varchar(50) NOT NULL,
  `g_message` text NOT NULL,
  `g_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `guestbook`
-- 

INSERT INTO `guestbook` VALUES (1, 'เอกชัย แน่นอุดร', 'nkcombat@hotmail.com', 'แวะมาทักทายครับ', '2014-10-26 11:24:39');
INSERT INTO `guestbook` VALUES (2, 'รักไทย ใจตะวัน', 'rukthai@msu.ac.th', 'สมุดเยี่ยมใช้งานได้ดีมาก', '2014-10-26 11:26:02');
