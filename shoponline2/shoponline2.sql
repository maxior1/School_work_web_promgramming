--
-- Database: `shoponline2`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`oid` int(7) unsigned zerofill NOT NULL,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL ,
  `member_id` int(7) NOT NULL
) ENGINE=MyISAM  CHARSET=utf8 COLLATE=utf8_unicode_ci  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `ototal`, `odate`, `member_id`) VALUES
(0000001, 3685, '2017-11-14 12:56:27', 0),
(0000002, 5080, '2017-11-14 12:57:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE IF NOT EXISTS `orders_detail` (
`od_id` int(6) NOT NULL,
  `oid` int(7) unsigned zerofill NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(1, 0000001, 7, 2),
(2, 0000001, 1, 1),
(3, 0000001, 9, 3),
(4, 0000002, 6, 2),
(5, 0000002, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(4) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` int(6) NOT NULL,
  `p_picture` varchar(200) NOT NULL,
  `p_type` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `p_type`) VALUES
(1, 'กระเป๋าถือ / กระเป๋าสะพายไหล่ PSV-1044', 'สินค้างานเกรดพรีเมี่ยม ตัดเย็บปราณีต มีสายสะพายไหล่ปรับสั้น-ยาวได้ สะพายได้ทุกโอกาส', 2690, 'IMG_5779.jpg', 1),
(2, 'กระเป๋าถือ / กระเป๋าสะพายไหล่ PSV-2022', 'กระเป๋าถือและสะพายไหล่สำหรับสุภาพสตรี สไตล์โมเดิร์น งานเกรดพรีเมียม', 2590, 'IMG_5784.jpg', 1),
(3, 'กระเป๋า Michael Kors สีชมพูอ่อน', 'งานเกรดพรีเมียม หนังแท้ รับประกัน 1 ปี', 8900, 'IMG_5789.jpg', 1),
(4, 'กระเป๋าถือ / กระเป๋าสะพายไหล่ PSV-2023 (สีเขียว)', 'กระเป๋าถือและสะพายไหล่สำหรับสุภาพสตรี สไตล์โมเดิร์น งานเกรดพรีเมียม', 1900, 'IMG_5792.jpg', 1),
(5, 'กระเป๋าเป้สะพายหลัง PSV-4011 (สีเขียว)', 'งานเกรดพรีเมี่ยม กันน้ำกันฝนได้ ขนาด 10"', 1590, 'IMG_5800.jpg', 2),
(6, 'กระเป๋าเป้สะพายหลัง PSV-4010 (สีแดง)', 'งานเกรดพรีเมี่ยม กันน้ำกันฝนได้ ขนาด 10"', 1590, 'IMG_5806.jpg', 2),
(7, 'เสื้อยืดคอกลมตัวการ์ตูน (สีแดง)', 'ผ้า cotton แท้ 100% งานเกรดพรีเมี่ยม เป็นตัวการ์ตูนแบบเย็บ ไม่ใช่ตัวการ์ตูนแบบสกรีน', 199, 'IMG_5808.jpg', 3),
(8, 'เสื้อยืดคอกลมตัวการ์ตูนหมวกแดง (สีชมพู) ', 'ผ้า cotton แท้ 100% งานเกรดพรีเมี่ยม เป็นตัวการ์ตูนแบบเย็บ ไม่ใช่ตัวการ์ตูนแบบสกรีน', 199, 'IMG_5824.jpg', 3),
(9, 'เสื้อยืดคอกลมตัวการ์ตูน (สีเหลือง)', 'ผ้า cotton แท้ 100% งานเกรดพรีเมี่ยม เป็นตัวการ์ตูนแบบเย็บ ไม่ใช่ตัวการ์ตูนแบบสกรีน', 199, 'IMG_5828.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `pt_id` int(3) NOT NULL,
  `pt_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `pt_name`) VALUES
(1, 'กระเป๋าถือ/กระเป๋าสะพาย'),
(2, 'กระเป๋าเป้'),
(3, 'เสื้อยืด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
 ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
 ADD PRIMARY KEY (`pt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `oid` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

