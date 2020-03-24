-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 01:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minipro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `building_id` varchar(5) NOT NULL,
  `building_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `building_name`) VALUES
('10', 'สำรวจ'),
('11', 'จักรกลหนัก'),
('13', 'เครื่องกล'),
('13A', 'วิศวกรรมเมคาทรอนิกส์'),
('15', 'วัสดุและโลหะการ'),
('16', 'อุตสาหการ'),
('17', 'เครื่องปรับอากาศ'),
('18', 'อาคารเรียนรวมวิศวกรรมไฟฟ้า'),
('19', 'วิทยาศาสตร์และศิลปศาสตร์'),
('22', 'สถาปัตยกรรม'),
('25', 'โรงงานช่างผลิตเครื่องมือและแม่พิมพ์'),
('3', 'เทคโนโลยีมัลติมีเดีย'),
('34', 'คณะวิทยาศาสตร์และศิลปศาสตร์'),
('36', 'อาคารปฏิบัติการคณะวิศวกรรมศาสตร์และสถาปัตยกรรมศาสตร์'),
('4', 'โยธา'),
('6', 'เกษตร'),
('9', 'วิศวกรรมสำรวจ');

-- --------------------------------------------------------

--
-- Table structure for table `cannot_teach`
--

CREATE TABLE `cannot_teach` (
  `cannot_teach_id` int(10) NOT NULL,
  `Date_begin` varchar(50) NOT NULL,
  `Date_end` varchar(50) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `code` int(10) NOT NULL,
  `Teacher_id` int(10) NOT NULL,
  `Semester` int(5) NOT NULL,
  `Academic_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cannot_teach`
--

INSERT INTO `cannot_teach` (`cannot_teach_id`, `Date_begin`, `Date_end`, `Note`, `code`, `Teacher_id`, `Semester`, `Academic_year`) VALUES
(1, '0000-00-00', '0000-00-00', 'ไปราชการ', 1733, 6851, 2, 2562),
(40, '01/01/2020 ', ' 31/12/2020', 'ggggggg', 1733, 6851, 2, 2562),
(41, '17/01/2020 ', ' 12/02/2020', 'สวัสดีครับ', 1733, 6851, 2, 2562),
(42, '1', '5', 'ไม่ว่าง', 1733, 6855, 2, 2562);

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `class_id` varchar(30) NOT NULL,
  `class_name` varchar(100) DEFAULT NULL,
  `keeper` varchar(15) DEFAULT NULL,
  `amount` int(5) DEFAULT NULL,
  `kind_id` int(5) NOT NULL,
  `building_id` varchar(5) NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`class_id`, `class_name`, `keeper`, `amount`, `kind_id`, `building_id`, `code`) VALUES
('36-408', 'ห้องปฎิบัติการคอมพิวเตอร์', '1469900298945', 32, 3, '36', 1733);

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `day_id` int(10) NOT NULL,
  `date_Title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`day_id`, `date_Title`) VALUES
(0, 'อาทิตย์'),
(1, 'จันทร์'),
(2, 'อังคาร'),
(3, 'พุธ'),
(4, 'พฤหัสบดี'),
(5, 'ศุกร์'),
(6, 'เสาร์');

-- --------------------------------------------------------

--
-- Table structure for table `ess_course`
--

CREATE TABLE `ess_course` (
  `COURSE_ID` int(10) NOT NULL COMMENT 'เลขที่วิชา',
  `YEARNO` int(4) DEFAULT NULL COMMENT 'ปีที่เปิดสอน',
  `COURSE_CODE` varchar(50) DEFAULT NULL COMMENT 'รหัสรายวิชา',
  `COURSE_TITLE` varchar(100) DEFAULT NULL COMMENT 'ชื่อวิชาภาษาไทย',
  `COURSE_TITLE_EN` varchar(100) DEFAULT NULL COMMENT 'ชื่อวิชาภาษาอังกฤษ',
  `code` int(10) NOT NULL,
  `LECT_CREDIT` int(2) DEFAULT NULL COMMENT 'หน่วยกิตทฤษฎี',
  `PERF_CREDIT` int(2) DEFAULT NULL COMMENT 'หน่วยกิตปฏิบัติ',
  `TOTAL_CREDIT` int(2) DEFAULT NULL COMMENT 'รวมหน่วยกิต',
  `LECT_TIME` int(3) DEFAULT NULL COMMENT 'เวลาเรียนทฤษฎี',
  `PERF_TIME` int(3) DEFAULT NULL COMMENT 'เวลาเรียนปฏิบัติ',
  `OVER_TIME` int(3) DEFAULT NULL COMMENT 'เวลาเรียนนอกเวลา',
  `STATUS` int(1) DEFAULT NULL COMMENT 'สถานะการใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ess_course`
--

INSERT INTO `ess_course` (`COURSE_ID`, `YEARNO`, `COURSE_CODE`, `COURSE_TITLE`, `COURSE_TITLE_EN`, `code`, `LECT_CREDIT`, `PERF_CREDIT`, `TOTAL_CREDIT`, `LECT_TIME`, `PERF_TIME`, `OVER_TIME`, `STATUS`) VALUES
(1123, 2007, '03-593-208', 'เครื่องมือวัดและควบคุม', 'Instrumentation and Control', 1733, 2, 1, 3, 2, 2, 2, 1),
(7949, 2010, '04-122-414', 'ไมโครคอนโทรลเลอร์', 'Microcontroller', 1733, 1, 2, 3, 2, 4, 6, 1),
(7951, 2010, '04-122-416', 'โครงข่ายสื่อสารคอมพิวเตอร์', 'Computer Communications Networks', 1733, 3, 0, 3, 2, 0, 6, 1),
(7995, 2010, '02-011-113', 'แคลคูลัส 1-2', 'Calculus 1-2', 1733, 3, 0, 3, 2, 0, 6, 1),
(8026, 2010, '02-070-102', 'สถิติเบื้องต้น', 'Introduction to Statistics', 1733, 3, 0, 3, 3, 0, 6, 1),
(8100, 2010, '11-017-402', 'โครงการ', 'Project', 1733, 1, 2, 3, 1, 6, 4, 1),
(8102, 2010, '11-021-201', 'วงจรไฟฟ้า 1', 'Electric Circuits 1', 1733, 3, 0, 3, 3, 0, 6, 1),
(8234, 2010, '11-062-031', 'ระบบฐานข้อมูลและการจัดการ', 'Database Management System', 1733, 2, 1, 3, 2, 3, 5, 1),
(8239, 2010, '11-062-221', 'การโปรแกรมคอมพิวเตอร์', 'Computer Programming', 1733, 2, 1, 3, 2, 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

CREATE TABLE `kind` (
  `kind_id` int(5) NOT NULL,
  `kind_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kind`
--

INSERT INTO `kind` (`kind_id`, `kind_name`) VALUES
(1, 'ทฤษฎี'),
(2, 'ปฏิบัติ'),
(3, 'คอมพิวเตอร์'),
(4, 'ห้องประชุม');

-- --------------------------------------------------------

--
-- Table structure for table `replace_compensate`
--

CREATE TABLE `replace_compensate` (
  `Replace_compensate_id` int(10) NOT NULL,
  `Cannot_teach_id` int(10) NOT NULL,
  `Teach_type` int(10) NOT NULL,
  `date_teach` int(10) NOT NULL,
  `Teacher_replace_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `replace_compensate`
--

INSERT INTO `replace_compensate` (`Replace_compensate_id`, `Cannot_teach_id`, `Teach_type`, `date_teach`, `Teacher_replace_id`) VALUES
(1, 1, 1, 2, 6851),
(2, 1, 2, 5, 6851),
(3, 42, 1, 5, 6855);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` varchar(20) NOT NULL,
  `Degree_id` int(10) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Student_amount` int(10) NOT NULL,
  `code_id` int(10) NOT NULL,
  `Std_type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `Degree_id`, `Course`, `Student_amount`, `code_id`, `Std_type`) VALUES
('6117201', 2, '4 ปี', 32, 1721, 2),
('6117231', 2, '4 ปี', 32, 1733, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_organization`
--

CREATE TABLE `s_organization` (
  `parent` varchar(8) NOT NULL COMMENT 'รหัสโครงสร้างบน',
  `code` int(10) NOT NULL COMMENT 'รหัสหน่วยงาน',
  `name` varchar(512) NOT NULL COMMENT 'ชื่อหน่วยงานภาษาไทย',
  `name_en` varchar(512) DEFAULT NULL COMMENT 'ชื่อหน่วยงานภาษาอังกฤษ',
  `level` int(11) NOT NULL DEFAULT 0 COMMENT 'ระดับชั้นตามโครงสร้าง',
  `type` int(11) NOT NULL DEFAULT 0 COMMENT 'ประเภทหน่วยงาน',
  `status` int(11) NOT NULL DEFAULT 0,
  `remark` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_organization`
--

INSERT INTO `s_organization` (`parent`, `code`, `name`, `name_en`, `level`, `type`, `status`, `remark`) VALUES
('1000', 1500, 'คณะบริหารธุรกิจ', NULL, 0, 30, 1, NULL),
('1500', 1520, 'กลุ่มสาขาบริหารธุรกิจ', NULL, 0, 0, 0, NULL),
('1520', 1521, 'สาขาการบัญชี', NULL, 0, 52, 1, NULL),
('1520', 1522, 'สาขาการเงิน', NULL, 0, 52, 1, NULL),
('1520', 1523, 'สาขาการตลาด', NULL, 0, 52, 1, NULL),
('1000', 1700, 'คณะวิศวกรรมศาสตร์และสถาปัตยกรรมศาสตร์', NULL, 0, 30, 1, NULL),
('1700', 1720, 'กลุ่มสาขาวิศวกรรมโยธา', 'NULL', 0, 41, 1, NULL),
('1720', 1721, 'สาขาวิศวกรรมโยธา', 'NULL', 0, 52, 1, NULL),
('1720', 1722, 'สาขาวิศวกรรมสำรวจ', 'NULL', 0, 52, 1, NULL),
('1700', 1730, 'กลุ่มสาขาวิศวกรรมไฟฟ้า', 'NULL', 0, 41, 1, NULL),
('1730', 1731, 'สาขาวิศวกรรมไฟฟ้า', 'NULL', 0, 52, 1, NULL),
('1730', 1732, 'สาขาวิศวกรรมโทรคมนาคม', 'NULL', 0, 52, 1, NULL),
('1730', 1733, 'สาขาวิศวกรรมคอมพิวเตอร์', 'NULL', 0, 52, 1, NULL),
('1730', 1734, 'สาขาวิศวกรรมอิเล็กทรอนิกส์', 'NULL', 0, 52, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_position`
--

CREATE TABLE `s_position` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'ชื่อตำแหน่งหน้าที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_position`
--

INSERT INTO `s_position` (`id`, `name`) VALUES
(291, 'admin'),
(292, 'user'),
(293, 'officer');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE `teaching` (
  `teaching_id` int(10) NOT NULL,
  `timetable_id` int(10) NOT NULL,
  `teacher_id` varchar(15) NOT NULL,
  `class_id` varchar(30) NOT NULL,
  `day_id` int(5) NOT NULL,
  `period_begin` int(5) NOT NULL,
  `period_end` int(5) NOT NULL,
  `theory_hours` int(5) NOT NULL,
  `practical_hours` int(5) NOT NULL,
  `code` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `std_nor` int(3) DEFAULT NULL,
  `std_spc` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`teaching_id`, `timetable_id`, `teacher_id`, `class_id`, `day_id`, `period_begin`, `period_end`, `theory_hours`, `practical_hours`, `code`, `start_date`, `end_date`, `std_nor`, `std_spc`) VALUES
(6851, 4495, '3249900298946', '36-408', 1, 1, 3, 1, 2, 1733, '2020-02-09', '2020-02-29', NULL, NULL),
(6852, 4495, '1469900298945', '36-408', 4, 1, 3, 3, 0, 1733, '2020-03-01', '2020-05-01', 2, NULL),
(6853, 4497, '1469900298945', '36-408', 1, 8, 10, 3, 0, 1733, '2020-03-01', '2020-04-30', NULL, NULL),
(6854, 4495, '1469900298947', '36-408', 1, 1, 3, 1, 2, 1733, '2020-03-12', '2020-03-12', NULL, NULL),
(6855, 4497, '3249900298946', '36-408', 5, 1, 5, 3, 0, 1733, '2020-03-10', '2020-03-31', NULL, NULL),
(6871, 4498, '1309901292161', '36-408', 3, 1, 3, 2, 1, 1721, '2020-03-02', '2020-03-10', NULL, NULL),
(6877, 4498, '3249900298946', '36-408', 0, 1, 1, 1, 1, 1721, '2020-03-05', '2020-06-26', 1, 1),
(6878, 4498, '1469900298945', '36-408', 5, 1, 6, 1, 5, 1721, '2020-03-10', '2020-03-31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(100) NOT NULL,
  `semester` int(5) NOT NULL COMMENT 'เทอม',
  `academic_year` int(10) NOT NULL COMMENT 'ปี',
  `std_id` varchar(20) NOT NULL,
  `course_id` int(10) NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `semester`, `academic_year`, `std_id`, `course_id`, `code`) VALUES
(4495, 2, 2562, '6117231', 7995, 1733),
(4497, 2, 2562, '6117231', 7951, 1733),
(4498, 1, 2563, '6117201', 8026, 1721);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title_id` int(10) NOT NULL,
  `title_name` varchar(100) NOT NULL,
  `title_short` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title_id`, `title_name`, `title_short`) VALUES
(1, 'ผู้ช่วยศาสตราจารย์', 'ผ.ศ.'),
(2, 'นาย', ''),
(3, 'นาง', ''),
(4, 'อาจารย์', 'อ.'),
(5, 'รองศาสตราจารย์', 'รศ.'),
(6, 'ศาสตราจารย์', 'ศ.'),
(7, 'นางสาว', 'น.ส.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_card` varchar(15) NOT NULL,
  `Title_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `code` int(10) NOT NULL,
  `position_id` int(10) NOT NULL,
  `status_id` int(5) NOT NULL,
  `allow_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_card`, `Title_id`, `name`, `lastname`, `password`, `code`, `position_id`, `status_id`, `allow_id`) VALUES
('1309901292161', 2, 'กิตติพงษ์', 'ปลิงกระโทก', '1309901292161', 1733, 292, 1, 1),
('1469900298945', 4, 'ประกาย ', 'นาดี', '12345678', 1733, 292, 1, 1),
('1469900298947', 1, 'พรภัสสร', 'อ่อนเกิด', '11111111', 1733, 293, 1, 1),
('3249900298946', 4, 'ทิพา', 'กองศรีมา', '123456789', 1733, 291, 1, 1),
('66666666666', 1, 'มานพ', 'มานะ', '11111111', 1733, 292, 0, 0),
('admin', 4, 'ทิพา', 'กองศรีมา', 'admin', 1733, 291, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `cannot_teach`
--
ALTER TABLE `cannot_teach`
  ADD PRIMARY KEY (`cannot_teach_id`),
  ADD KEY `FK_code_cannot_teach` (`code`),
  ADD KEY `FK_teaching_id` (`Teacher_id`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `kind_id` (`kind_id`),
  ADD KEY `FK_code_id` (`code`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `ess_course`
--
ALTER TABLE `ess_course`
  ADD PRIMARY KEY (`COURSE_ID`),
  ADD KEY `FK_code_ess` (`code`);

--
-- Indexes for table `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`kind_id`);

--
-- Indexes for table `replace_compensate`
--
ALTER TABLE `replace_compensate`
  ADD PRIMARY KEY (`Replace_compensate_id`),
  ADD KEY `FK_cannot_teach_id` (`Cannot_teach_id`),
  ADD KEY `FK_Replace_id` (`Teacher_replace_id`),
  ADD KEY `FK_Date_id` (`date_teach`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `code_id` (`code_id`);

--
-- Indexes for table `s_organization`
--
ALTER TABLE `s_organization`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `s_position`
--
ALTER TABLE `s_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`teaching_id`),
  ADD KEY `code` (`code`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `FK_teacher_id` (`teacher_id`),
  ADD KEY `FK_timetable_id` (`timetable_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `code` (`code`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_card`),
  ADD KEY `code` (`code`),
  ADD KEY `Title_id` (`Title_id`),
  ADD KEY `position_id` (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cannot_teach`
--
ALTER TABLE `cannot_teach`
  MODIFY `cannot_teach_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ess_course`
--
ALTER TABLE `ess_course`
  MODIFY `COURSE_ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'เลขที่วิชา', AUTO_INCREMENT=8240;

--
-- AUTO_INCREMENT for table `kind`
--
ALTER TABLE `kind`
  MODIFY `kind_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replace_compensate`
--
ALTER TABLE `replace_compensate`
  MODIFY `Replace_compensate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s_position`
--
ALTER TABLE `s_position`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT for table `teaching`
--
ALTER TABLE `teaching`
  MODIFY `teaching_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6879;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4499;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `title_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cannot_teach`
--
ALTER TABLE `cannot_teach`
  ADD CONSTRAINT `FK_code_cannot_teach` FOREIGN KEY (`code`) REFERENCES `s_organization` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_teaching_id` FOREIGN KEY (`Teacher_id`) REFERENCES `teaching` (`teaching_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `classroom`
--
ALTER TABLE `classroom`
  ADD CONSTRAINT `FK_building_id` FOREIGN KEY (`building_id`) REFERENCES `building` (`building_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_code_id` FOREIGN KEY (`code`) REFERENCES `s_organization` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_kind_id` FOREIGN KEY (`kind_id`) REFERENCES `kind` (`kind_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ess_course`
--
ALTER TABLE `ess_course`
  ADD CONSTRAINT `FK_code_ess` FOREIGN KEY (`code`) REFERENCES `s_organization` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `replace_compensate`
--
ALTER TABLE `replace_compensate`
  ADD CONSTRAINT `FK_Date_id` FOREIGN KEY (`date_teach`) REFERENCES `date` (`day_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `FK_Replace_id` FOREIGN KEY (`Teacher_replace_id`) REFERENCES `teaching` (`teaching_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cannot_teach_id` FOREIGN KEY (`Cannot_teach_id`) REFERENCES `cannot_teach` (`cannot_teach_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_code_std` FOREIGN KEY (`code_id`) REFERENCES `s_organization` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `FK_class_id` FOREIGN KEY (`class_id`) REFERENCES `classroom` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_code` FOREIGN KEY (`code`) REFERENCES `s_organization` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`Id_card`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_timetable_id` FOREIGN KEY (`timetable_id`) REFERENCES `timetable` (`timetable_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `FK_code_time` FOREIGN KEY (`code`) REFERENCES `s_organization` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_course_tb` FOREIGN KEY (`course_id`) REFERENCES `ess_course` (`COURSE_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_std_id` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_code1` FOREIGN KEY (`code`) REFERENCES `s_organization` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_position_id` FOREIGN KEY (`position_id`) REFERENCES `s_position` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_title_id` FOREIGN KEY (`Title_id`) REFERENCES `title` (`title_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
