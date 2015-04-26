-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 02:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university_testsection`
--

-- --------------------------------------------------------

--
-- Table structure for table `university_prep`
--

CREATE TABLE IF NOT EXISTS `university_prep` (
  `Exam` varchar(20) NOT NULL,
  `Video_tutorial` varchar(200) DEFAULT NULL,
  `Mock_test` varchar(200) NOT NULL,
  `Books` varchar(300) NOT NULL,
  `Cut_off` varchar(300) NOT NULL,
  `Additional_info` varchar(300) NOT NULL,
  PRIMARY KEY (`Exam`),
  UNIQUE KEY `Exam` (`Exam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university_prep`
--

INSERT INTO `university_prep` (`Exam`, `Video_tutorial`, `Mock_test`, `Books`, `Cut_off`, `Additional_info`) VALUES
('CAT', 'http://www.mba-tutorials.com/', 'https://www.wiziq.com/tests/cat', 'http://www.flipkart.com/gate-mechanical-engineering-2014-english-11th/p/itmdxu9yhgbj6zgz?pid=9788183557917&icmpid=reco_pp_hsame_book_book_1&ppid=9789350945353', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-me', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-me'),
('Gate_civil', 'freevideolectures.com/Subject/Civil-Engineering', 'http://www.jbigdeal.com/free-gate-civil-engineering-ce-mock-test-online-page-1', 'http://www.flipkart.com/gate-2015-civil-engineering-with-cd-english-12th/p/itm9789351441885', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-ce', 'http://en.wikipedia.org/wiki/Graduate_Aptitude_Test_in_Engineering'),
('Gate_cse', 'http://nptel.iitm.ac.in/courses.php', 'http://www.prep.youth4work.com/Engineering/GATE-Computer-Science-(CS)-Test', 'http://www.flipkart.com/gate-2015-computer-science-information-technology-with-dvd-english-12th/p/itm9789351441908', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-cse', 'http://en.wikipedia.org/wiki/Graduate_Aptitude_Test_in_Engineering'),
('Gate_ece', 'http://nptel.ac.in/courses.php?disciplineId=117', 'http://gate2015online.in/gate-2015-ece-mock-test-model-paper-ece-free-pdf-online/', 'http://www.flipkart.com/gate-2015-electronics-communication-engineering-with-dvd-english/p/itm9789351441861', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-ece', 'http://en.wikipedia.org/wiki/Graduate_Aptitude_Test_in_Engineering'),
('Gate_ee', 'freevideolectures.com/Subject/Electrical-Engineering', 'http://gate2015online.in/gate-2015-ece-mock-test-model-paper-ece-free-pdf-online/', 'http://www.flipkart.com/electrical-engineering-gate-refresher-english-1st/p/itmdytsf7meq5fja', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-ee', 'http://en.wikipedia.org/wiki/Graduate_Aptitude_Test_in_Engineering'),
('Gate_mech', 'http://freevideolectures.com/Subject/Mechanical', 'https://www.wiziq.com/tests/mechanical-engineering', 'http://www.flipkart.com/gate-mechanical-engineering-2014-english-11th/p/itmdxu9yhgbj6zgz?pid=9788183557917&icmpid=reco_pp_hsame_book_book_1&ppid=9789350945353', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-me', 'http://www.engineering.careers360.com/articles/gate-2015-cutoff-for-me'),
('Gmat', 'http://freevideolectures.com/Course/2557/GMAT-Problem-Solving', 'http://freegmattest.net/', 'http://www.flipkart.com/kaplan-gmat-premier-2015-6-practice-tests-book-dvd-online-mobile-english/p/itmdquzmapkb5j5z', 'http://www.mba.com/india/plan-for-business-school/choose-a-school/school-expert-qanda/indian-school-of-business.aspx', 'http://en.wikipedia.org/wiki/Graduate_Management_Admission_Test'),
('GRE', 'http://www.msinus.com/content/gre-video-tutorials-free-gre-video-tutorials-online-1171/#.VRY5P_mUfuI', 'https://www.ets.org/gre/revised_general/prepare/powerprep2', 'http://www.flipkart.com/barron-apos-s-new-gre-leader-test-preparation-2013-with-cd-rom-english-19th/p/itmdx5hvef35ykpy', 'http://magoosh.com/gre/2013/gre-scores-for-top-universities/', 'http://en.wikipedia.org/wiki/Graduate_Record_Examinations');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
