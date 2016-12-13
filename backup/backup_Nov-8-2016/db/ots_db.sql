-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2016 at 09:59 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ots_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `isActive`) VALUES
(1, 'JAVA', 1),
(2, 'PHP', 1),
(3, 'DOTNET', 1),
(4, 'PHYSICS', 1),
(7, 'CHEMISTRY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login_type` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `login_type`, `isActive`) VALUES
(1, 'admin', 'pass', 'admin@admin.com', 'admin', 1),
(2, 'content', 'pass', 'content@content.com', 'content', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(400) NOT NULL,
  `category_id` int(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `category_id`, `level`, `isActive`) VALUES
(32, 'What is Serialization ?', 1, 'easy', 1),
(33, ' If result = 2 + 3 * 5, what is the value and type of â€˜resultâ€™ variable?', 1, 'easy', 1),
(34, ' What is the size of char variable?', 3, 'medium', 1),
(35, 'What is the default value of short variable?', 1, 'medium', 1),
(37, 'What is a Marker Interface?', 2, 'tough', 1),
(52, 'Which of the following is not true?', 2, 'medium', 1),
(53, 'In PHP the error control operator is _______ ?', 2, 'easy', 1),
(54, 'Which of following are compound data type ?', 2, 'easy', 1),
(55, 'Trace the odd data type?', 2, 'easy', 1),
(56, 'Which of the following function returns the number of characters in a string variable?', 2, 'easy', 1),
(82, 'Which of the collections allows null as the key ?', 1, 'easy', 1),
(83, 'Which of the following is not the use of this keyword ?', 1, 'easy', 1),
(84, 'Which of the following is true ?', 1, 'easy', 1),
(85, 'Which of the following is false ?', 1, 'easy', 1),
(86, 'Which interface does java.util.Hashtable implement ?', 1, 'easy', 1),
(87, 'Which of the following was not introduced with Java 5 ?', 1, 'easy', 1),
(88, 'Which of the following is not type of inner classes ?', 1, 'easy', 1),
(89, 'In what order the elements of a HashSet are retrieved ?', 1, 'easy', 1),
(90, 'If we try to add duplicate key to the HashMap, What will happen ?', 1, 'easy', 1),
(91, 'If we add Enum constants to a sorted collection ( Treemap , TreeSet ), What will be the order in which they will be maintained ?', 1, 'easy', 1),
(92, 'Which of the following collections stores its elements in insertion Order ?', 1, 'easy', 1),
(93, 'Which of the following collection maintain its elements in Natural Sorted order ?', 1, 'easy', 1),
(94, 'Interface can only have ...', 1, 'easy', 1),
(95, 'Which is of the following is NOT TRUE for JVM ?', 1, 'easy', 1),
(96, 'Which of the following cannot be marked static ?', 1, 'easy', 1),
(97, 'Which of the following can be marked static ?', 1, 'easy', 1),
(98, 'Which access specifiers can be used with top level class ?', 1, 'easy', 1),
(99, 'Which of the following is false about main method ?', 1, 'easy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question_choices`
--

CREATE TABLE IF NOT EXISTS `question_choices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question_id` int(10) NOT NULL,
  `is_Correct_Choice` varchar(4) NOT NULL,
  `choice1` varchar(300) NOT NULL,
  `choice2` varchar(300) NOT NULL,
  `choice3` varchar(300) NOT NULL,
  `choice4` varchar(300) NOT NULL,
  `choice5` varchar(300) NOT NULL,
  `choice6` varchar(300) NOT NULL,
  `choice7` varchar(300) NOT NULL,
  `choice8` varchar(300) NOT NULL,
  `choice9` varchar(300) NOT NULL,
  `choice10` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `question_choices`
--

INSERT INTO `question_choices` (`id`, `question_id`, `is_Correct_Choice`, `choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `choice6`, `choice7`, `choice8`, `choice9`, `choice10`) VALUES
(11, 32, 'A', 'Serialization is the process of writing the state of an object to another object', 'Serialization is the process of writing the state of an object to a byte stream.', 'Both of the above', 'None of the above', '', '', '', '', '', ''),
(12, 33, 'A', '17', '25', '20', 'None', '', '', '', '', '', ''),
(13, 34, 'B', '8 bit', '16 bit', '32 bit', '64 bit', '', '', '', '', '', ''),
(14, 35, 'B', '0.0', '0', 'null', 'not defined', '', '', '', '', '', ''),
(15, 37, 'C', 'marker interface is an interface with no method.', 'marker interface is an interface with single method, mark().', 'marker interface is an interface with single method, marker().', 'none of the above.', '', '', '', '', '', ''),
(25, 52, 'D', 'PHP makes a website dynamic.', 'PHP can be used to develop web applications.', 'PHP applications can not be compiled.', 'PHP can not be embedded into html.', '', '', '', '', '', ''),
(26, 53, 'A', '.', '*', '@', '&', '', '', '', '', '', ''),
(27, 54, 'C', 'Array', 'Objects', 'Both', 'None', '', '', '', '', '', ''),
(28, 55, 'D', 'floats', 'integer', 'doubles', 'Real number', '', '', '', '', '', ''),
(29, 56, 'D', 'len($variable)', 'count($variable)', 'strcount($variable)', 'strlen($variable)', '', '', '', '', '', ''),
(45, 82, 'A', 'HashTable', 'HashMap', 'TreeMap', 'LinkedHashMap', '', '', '', '', '', ''),
(46, 83, 'B', 'Passing itself to another method', 'To call the static method', 'Referring to the instance variable when local variable has the same name', 'Calling another constructor in constructor chaining', '', '', '', '', '', ''),
(47, 84, 'C', 'We can serialize static variables', 'We can serialize transient variables', 'We can serialize final variables', 'We can serialize instance methods', '', '', '', '', '', ''),
(48, 85, 'A', 'HashMap came before HashTable.', 'HashMap allows null values whereas Hashtable doesnâ€™t allow null values.', 'HashTable and HashMap allow Key-Value pairs.', 'Hashtable is synchronized whereas HashMap is not.', '', '', '', '', '', ''),
(49, 86, 'D', 'List', 'Set', 'Collection', 'Map', '', '', '', '', '', ''),
(50, 87, 'B', 'Generics', 'Strings within Switch', 'Enums', 'Annotations', '', '', '', '', '', ''),
(51, 88, 'C', 'Simple Inner Class', 'Static Nested Inner Class', 'Method Nested Static Inner Class', 'Anonymous Inner Class', '', '', '', '', '', ''),
(52, 89, 'A', 'Random Order', 'Insertion Order', 'Natural Sorting Order', 'Inverse Natural Sorting Order', '', '', '', '', '', ''),
(53, 91, 'C', 'Sorted Collection wont maintain them in any order.', 'Insertion Order', 'Order in which constants are declared.', 'Natural Sorting Order.', '', '', '', '', '', ''),
(54, 92, 'C', 'HashMap', 'TreeMap', 'LinkedHashMap', 'LinkedMap', '', '', '', '', '', ''),
(55, 93, 'B', 'HashMap', 'TreeMap', 'LinkedHashMap', 'LinkedMap', '', '', '', '', '', ''),
(56, 94, 'C', 'Member elements and Methods.', 'Static Variables and Static Methods.', 'Static Final Variables and Instance Method Declarations.', 'Member Elements , Instance Methods, Static variables and Static Methods.', '', '', '', '', '', ''),
(57, 95, 'C', 'JVM reads Byte Code and generates Machine Code.', 'JVM is a virtual Machine that acts as a intermediary between Java Application and Host Operating System.', 'JVM reads Source Code and generates Byte Code.', 'JVM acts as a translator that translates different Machine code ( on the basis of Host Machine ) for a common Byte Code.', '', '', '', '', '', ''),
(58, 96, 'C', 'Constructors , Classes ( Outer ) , Classes ( nested ), Interfaces , Local variables , Inner Class methods and instance variables. ', 'Constructors , Classes ( Outer ) , Interfaces , Local variables , Class variables , Class Methods , Inner Class methods and instance variables. ', 'Constructors , Classes ( Outer ) , Interfaces , Local variables , Inner Class methods and instance variables. ', 'Constructors , Classes ( Outer ) , Classes (Nested), Interfaces , Local variables , Inner Class methods and instance variables', '', '', '', '', '', ''),
(59, 97, 'D', 'Methods , Variables and Initialization Blocks.', 'Methods , Variables , Initialization Blocks and Outer Classes and nested Classes.', 'Methods , Variables , Initialization Blocks and Outer Classes.', 'Methods , Variables , Initialization Blocks and nested Classes.', '', '', '', '', '', ''),
(60, 98, 'A', 'public or default', 'public or private', 'public or protected', 'protected or default', '', '', '', '', '', ''),
(61, 99, 'C', ' It should be declared public and static', 'it should have only 1 argument of type String array', 'We can override main method', 'We can overload main method', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result_students`
--

CREATE TABLE IF NOT EXISTS `result_students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `total_marks` int(10) DEFAULT NULL,
  `attempt` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `result_students`
--

INSERT INTO `result_students` (`id`, `student_id`, `test_id`, `total_marks`, `attempt`) VALUES
(6, 2, 2, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `score_students`
--

CREATE TABLE IF NOT EXISTS `score_students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `question_id` int(11) NOT NULL,
  `correct` tinyint(1) DEFAULT NULL,
  `wrong` int(10) NOT NULL,
  `attempt` int(4) NOT NULL,
  `unattempt` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `score_students`
--

INSERT INTO `score_students` (`id`, `stud_id`, `test_id`, `question_id`, `correct`, `wrong`, `attempt`, `unattempt`) VALUES
(1, 2, 2, 53, 0, 1, 1, 0),
(2, 2, 2, 54, 0, 1, 1, 0),
(3, 2, 2, 55, 0, 1, 1, 0),
(4, 2, 2, 56, 0, 1, 1, 0),
(5, 2, 2, 37, 1, 0, 1, 0),
(6, 2, 2, 52, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login_type` varchar(50) NOT NULL,
  `studentcategory` varchar(10) NOT NULL,
  `stud_city` varchar(50) NOT NULL,
  `stud_phone` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `attendTest` int(1) NOT NULL DEFAULT '0',
  `test_id` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `username`, `password`, `email`, `login_type`, `studentcategory`, `stud_city`, `stud_phone`, `isActive`, `attendTest`, `test_id`, `score`) VALUES
(1, 'Student', 'student', 'pass', 'student@student.com', 'student', 'java', 'karnal', '123', 1, 0, 0, 0),
(2, 'Student1', 'student1', 'pass', 'email@email.com', 'student', 'php', 'karnal', '123', 1, 1, 2, 0),
(4, 'Student3', 'student3', 'pass', 'email@email.com', 'student', 'dotnet', 'karnal', '123', 1, 0, 0, 0),
(9, 'Student2', 'student2', 'pass', 'email@email.com', 'student', 'php', 'karnal', '123', 1, 0, 0, 0),
(10, 'Test', 'test', 'pass', 'email@test.com', 'student', 'physics', 'knl', '123', 1, 0, 0, 0),
(14, 'Laxman Rana', 'laxman', 'pass', 'test@test.com', 'student', 'php', 'karnal', '123', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test_students`
--

CREATE TABLE IF NOT EXISTS `test_students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `testlevel` varchar(20) NOT NULL,
  `testcategory` varchar(20) NOT NULL,
  `startdate` date NOT NULL,
  `starttime` time NOT NULL,
  `enddate` date NOT NULL,
  `endtime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `test_students`
--

INSERT INTO `test_students` (`id`, `testlevel`, `testcategory`, `startdate`, `starttime`, `enddate`, `endtime`) VALUES
(1, 'easy', 'java', '2016-11-02', '09:00:00', '2016-11-05', '06:00:00'),
(2, 'medium', 'php', '2016-11-03', '09:00:00', '2016-11-17', '18:00:00'),
(3, 'medium', 'php', '2016-11-04', '09:00:00', '2016-11-10', '18:00:00'),
(4, 'medium', 'php', '2016-11-04', '09:00:00', '2016-11-10', '18:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question_choices`
--
ALTER TABLE `question_choices`
  ADD CONSTRAINT `question_choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
