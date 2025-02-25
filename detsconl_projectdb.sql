-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2025 at 03:59 PM
-- Server version: 10.11.10-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detsconl_projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `correct_answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `email`, `correct_answer`) VALUES
(1, 1, 'fest@m', 'all of the above'),
(2, 2, 'fest@m', 'To store data temporarily'),
(3, 3, 'fest@m', 'var123'),
(4, 5, 'fest@m', 'The variable is assigned a default value of null'),
(5, 4, 'fest@m', '\'let\' variables can be reassigned, while \'const\' variables cannot');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `id` int(255) NOT NULL,
  `user_id` int(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `request` text NOT NULL,
  `response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`id`, `user_id`, `email`, `request`, `response`) VALUES
(1, 0, 'fredolotoin28@gmail.com', 'what is a variable?', 'a variable is an identofier'),
(2, 0, 'fredolotoin28@gmail.com', 'what is a variable?', 'ok'),
(3, 0, '', '', NULL),
(4, 0, '', '', NULL),
(5, 0, '', '', NULL),
(6, 0, '', '', NULL),
(7, 0, 'd@m', 'Ggg', NULL),
(8, 0, 'd@m', 'How are loops created?', 'Loopss'),
(9, 0, 'd@m', 'How is if statement important', NULL),
(10, 0, 'd@m', 'Hh', NULL),
(11, 0, 'd@m', 'Ggg', NULL),
(12, 0, 'd@m', 'Expanciate on while loops', NULL),
(13, 0, 'd@m', 'Good', NULL),
(14, 0, 'd@m', 'Good', NULL),
(15, 0, 'd@m', 'Ggggg', NULL),
(16, 0, 'fed@mmm', 'What are tenarry ooerators', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `if_answer`
--

CREATE TABLE `if_answer` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `email` text NOT NULL,
  `correct_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `if_answer`
--

INSERT INTO `if_answer` (`id`, `qid`, `email`, `correct_answer`) VALUES
(1, 1, 'fest@m', 'To execute a set of instructions based on a condition'),
(2, 2, 'fest@m', 'To execute a set of instructions based on a condition'),
(3, 3, 'fest@m', 'if condition: code'),
(4, 4, 'fest@m', 'The code inside the IF statement is skipped'),
(5, 5, 'fest@m', 'Yes'),
(6, 2, 'bobbyose@gmail.com', 'To declare a variable'),
(7, 3, 'bobbyose@gmail.com', 'if (condition) {code}');

-- --------------------------------------------------------

--
-- Table structure for table `if_questions`
--

CREATE TABLE `if_questions` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `option_a` text DEFAULT NULL,
  `option_b` text DEFAULT NULL,
  `option_c` text DEFAULT NULL,
  `option_d` text DEFAULT NULL,
  `correct_answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `if_questions`
--

INSERT INTO `if_questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
(1, 'What is the purpose of an IF statement in programming?', 'To repeat a set of instructions', 'To skip a set of instructions', 'To execute a set of instructions based on a condition', 'To declare a variable', 'To execute a set of instructions based on a condition'),
(2, 'What is the purpose of an IF statement in programming?', 'To repeat a set of instructions', 'To skip a set of instructions', 'To execute a set of instructions based on a condition', 'To declare a variable', 'To execute a set of instructions based on a condition'),
(3, 'What is the syntax for a simple IF statement in Python?', 'if (condition) {code}', 'if condition: code', 'if condition then code', 'if condition => code', 'if condition: code'),
(4, 'What happens when the condition in an IF statement is false?', 'The code inside the IF statement is executed', 'The code inside the IF statement is skipped', 'The program crashes', 'The program terminates', 'The code inside the IF statement is skipped'),
(5, 'Can an IF statement be nested inside another IF statement?', 'Yes', 'No', 'Only in certain programming languages', 'Only in certain situations', 'Yes'),
(6, 'Can an IF statement be nested inside another IF statement?', 'Yes', 'No', 'Only in certain programming languages', 'Only in certain situations', 'Yes'),
(7, 'Can an IF statement be nested inside another IF statement?', 'Yes', 'No', 'Only in certain programming languages', 'Only in certain situations', 'Yes'),
(8, 'Can an IF statement be nested inside another IF statement?', 'Yes', 'No', 'Only in certain programming languages', 'Only in certain situations', 'Yes'),
(9, 'Can an IF statement be nested inside another IF statement?', 'Yes', 'No', 'Only in certain programming languages', 'Only in certain situations', 'Yes'),
(10, NULL, NULL, NULL, NULL, NULL, 'they help in decision making'),
(11, 'If statement are very important because?', 'they help in decision making', 'they act as compilers', 'they act as interpreter', 'they are variables', 'they help in decision making');

-- --------------------------------------------------------

--
-- Table structure for table `loop_answer`
--

CREATE TABLE `loop_answer` (
  `id` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `loop_answer`
--

INSERT INTO `loop_answer` (`id`, `qid`, `email`, `correct_answer`) VALUES
(NULL, 1, 'fest@m', 'To repeat a set of instructions'),
(NULL, 2, 'fest@m', 'Using the BREAK statement');

-- --------------------------------------------------------

--
-- Table structure for table `loop_questions`
--

CREATE TABLE `loop_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  `topic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `loop_questions`
--

INSERT INTO `loop_questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `topic`) VALUES
(1, 'What is the purpose of a FOR loop in programming?', 'To skip a set of instructions', 'To repeat a set of instructions', 'To declare a variable', 'To assign a value to a variable', 'To repeat a set of instructions', 'Control Structures'),
(2, '                                \r\n                                How do you exit a FOR loop in programming?                                \r\n                                ', 'Using the BREAK statement', 'Using the CONTINUE statement', 'Using the RETURN statement', 'Using the EXIT statement cccc', 'Using the BREAK statement', 'Control Structures'),
(3, 'What is the difference between a FOR loop and a WHILE loop?', 'A FOR loop is used for arrays, while a WHILE loop is used for linked lists', 'A FOR loop is used for known number of iterations, while a WHILE loop is used for unknown number of iterations', 'A FOR loop is used for strings, while a WHILE loop is used for numbers', 'A FOR loop is used for objects, while a WHILE loop is used for functions', 'A FOR loop is used for known number of iterations, while a WHILE loop is used for unknown number of iterations', 'Control Structures'),
(4, 'How do you iterate over a collection using a FOR loop?', 'Using the INDEX variable', 'Using the ITERATOR variable', 'Using the ENUMERATOR variable', 'Using the CURSOR variable', 'Using the INDEX variable', 'Control Structures'),
(5, 'What is the purpose of a FOR loop in programming?', 'To skip a set of instructions', 'To repeat a set of instructions', 'To declare a variable', 'To assign a value to a variable', 'To repeat a set of instructions', 'Control Structures'),
(6, 'How do you exit a FOR loop in programming?', 'Using the BREAK statement', 'Using the CONTINUE statement', 'Using the RETURN statement', 'Using the EXIT statement', 'Using the BREAK statement', 'Control Structures'),
(7, 'What is the difference between a FOR loop and a WHILE loop?', 'A FOR loop is used for arrays, while a WHILE loop is used for linked lists', 'A FOR loop is used for known number of iterations, while a WHILE loop is used for unknown number of iterations', 'A FOR loop is used for strings, while a WHILE loop is used for numbers', 'A FOR loop is used for objects, while a WHILE loop is used for functions', 'A FOR loop is used for known number of iterations, while a WHILE loop is used for unknown number of iterations', 'Control Structures'),
(8, 'How do you iterate over a collection using a FOR loop?', 'Using the INDEX variable', 'Using the ITERATOR variable', 'Using the ENUMERATOR variable', 'Using the CURSOR variable', 'Using the INDEX variable', 'Control Structures'),
(9, 'What is the purpose of a FOR loop in programming?', 'To skip a set of instructions', 'To repeat a set of instructions', 'To declare a variable', 'To assign a value to a variable', 'To repeat a set of instructions', 'Control Structures'),
(10, 'How do you exit a FOR loop in programming?', 'Using the BREAK statement', 'Using the CONTINUE statement', 'Using the RETURN statement', 'Using the EXIT statement', 'Using the BREAK statement', 'Control Structures'),
(11, 'What is the difference between a FOR loop and a WHILE loop?', 'A FOR loop is used for arrays, while a WHILE loop is used for linked lists', 'A FOR loop is used for known number of iterations, while a WHILE loop is used for unknown number of iterations', 'A FOR loop is used for strings, while a WHILE loop is used for numbers', 'A FOR loop is used for objects, while a WHILE loop is used for functions', 'A FOR loop is used for known number of iterations, while a WHILE loop is used for unknown number of iterations', 'Control Structures'),
(12, 'How do you iterate over a collection using a FOR loop?', 'Using the INDEX variable', 'Using the ITERATOR variable', 'Using the ENUMERATOR variable', 'Using the CURSOR variable', 'Using the INDEX variable', 'Control Structures'),
(13, 'What is the purpose of a FOR loop in programming?', 'To skip a set of instructions', 'To repeat a set of instructions', 'To declare a variable', 'To assign a value to a variable', 'To repeat a set of instructions', 'Control Structures'),
(14, 'How do you exit a FOR loop in programming?', 'Using the BREAK statement', 'Using the CONTINUE statement', 'Using the RETURN statement', 'Using the EXIT statement', 'Using the BREAK statement', 'Control Structures'),
(16, 'How do you iterate over a collection using a FOR loop?', 'Using the INDEX variable', 'Using the ITERATOR variable', 'Using the ENUMERATOR variable', 'Using the CURSOR variable', 'Using the INDEX variable', 'Control Structures'),
(17, 'What is the purpose of a FOR loop in programming?', 'To skip a set of instructions', 'To repeat a set of instructions', 'To declare a variable', 'To assign a value to a variable', 'To repeat a set of instructions', 'Control Structures'),
(18, 'How do you exit a FOR loop in programming?', 'Using the BREAK statement', 'Using the CONTINUE statement', 'Using the RETURN statement', 'Using the EXIT statement', 'Using the BREAK statement', 'Control Structures');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `option_a` text DEFAULT NULL,
  `option_b` text DEFAULT NULL,
  `option_c` text DEFAULT NULL,
  `option_d` text DEFAULT NULL,
  `correct_answer` text DEFAULT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `topic`) VALUES
(1, 'What is the correct way to declare a variable in JavaScript?', 'var x=5;', 'const x=5;', 'let x=5;', 'all of the above', 'all of the above', 'variable'),
(2, 'What is the purpose of declaring variables in programming?', 'To store data temporarily', 'To improve code readability', 'To reduce code length', 'To increase code complexity', 'To store data temporarily', 'variable'),
(3, 'Which of the following is a valid variable name in JavaScript?', '123var', 'var123', 'var-123', '_var123', '_var123', 'variable'),
(4, 'What is the difference between \'let\' and \'const\' variables in JavaScript?', '\'let\' variables can be reassigned, while \'const\' variables cannot', '\'let\' variables are block-scoped, while \'const\' variables are function-scoped', '\'let\' variables are function-scoped, while \'const\' variables are block-scoped', 'There is no difference', '\'let\' variables can be reassigned, while \'const\' variables cannot', 'variable'),
(5, 'What happens when a variable is declared but not initialized in JavaScript?', 'The variable is assigned a default value of null', 'The variable is assigned a default value of undefined', 'The variable is not accessible', 'The variable is deleted', 'The variable is assigned a default value of undefined', 'variable'),
(6, 'Which of the following data types can be stored in a variable in JavaScript?', 'Number', 'String', 'Boolean', 'All of the above', 'All of the above', 'variable'),
(7, 'What is the purpose of declaring variables in programming?', 'To store data temporarily', 'To improve code readability', 'To reduce code length', 'To increase code complexity', 'To store data temporarily', 'variable'),
(8, 'Which of the following is a valid variable name in JavaScript?', '123var', 'var123', 'var-123', '_var123', '_var123', 'variable'),
(9, 'What is the difference between \'let\' and \'const\' variables in JavaScript?', '\'let\' variables can be reassigned, while \'const\' variables cannot', '\'let\' variables are block-scoped, while \'const\' variables are function-scoped', '\'let\' variables are function-scoped, while \'const\' variables are block-scoped', 'There is no difference', '\'let\' variables can be reassigned, while \'const\' variables cannot', 'variable'),
(10, 'What happens when a variable is declared but not initialized in JavaScript?', 'The variable is assigned a default value of null', 'The variable is assigned a default value of undefined', 'The variable is not accessible', 'The variable is deleted', 'The variable is assigned a default value of undefined', 'variable'),
(11, 'Which of the following data types can be stored in a variable in JavaScript?', 'Number', 'String', 'Boolean', 'All of the above', 'All of the above', 'variable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `date_of_birth`, `gender`, `address`, `country`, `city`, `region`, `postal_code`, `password`) VALUES
(1, 'b', 'b@n', '66', '66', 'g', 'gg', 'gg', 'gg', 'gg', '1d3', ''),
(2, 'rrr', 'kdkd@mail', '', '', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(3, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(4, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(5, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(6, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(7, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(8, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(9, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(10, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(11, '', '', '', '', '', '', '', '', '', '', ''),
(12, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT52783169410110'),
(13, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT128725011191064'),
(14, 'first', 'first@mail.com', '0808716262', '2024-12-22', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT129528103611104'),
(15, 'bread tea', 'fredolotoin28@gmail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT812111653104790'),
(16, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT110129705811642'),
(17, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT621105109731241'),
(18, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT56230798411011'),
(19, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT20108671125349'),
(20, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT365071221081141'),
(21, '', '', '', '', '', '', '', '', '', '', 'PROJECT614257910111283'),
(22, 'bread tea', 'fredolotoin28@gmail.com', '0808716262', '2024-12-24', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT43851011907216'),
(23, 'best', 'best@m', '0906235632', '2025-01-10', 'on', 'kest', 'just', 'just', '', '235', 'PROJECT311427081096125'),
(25, 'fed', 'fed@m', '0806235821', '2025-01-09', 'on', 'ddd', 'gg', 'ggg', '', '1235', 'PROJECT101201167938512'),
(26, 'fed', 'fed@m', '0806235821', '2025-01-09', 'on', 'ddd', 'gg', 'ggg', '', '1235', 'PROJECT571011298640123'),
(27, 'fed', 'fed@m', '0806235821', '2025-01-09', 'on', 'ddd', 'gg', 'ggg', '', '1235', 'PROJECT811910126325410'),
(28, 'fed', 'fed@m', '0806235821', '2025-01-09', 'on', 'ddd', 'gg', 'ggg', '', '1235', 'PROJECT100531171841292'),
(29, 'ggg', 'dd@h', '555', '2025-01-09', 'on', 'fff', 'ggg', 'hh', '', '258', 'PROJECT126112370109814'),
(30, 'ggg', 'dd@h', '555', '2025-01-09', 'on', 'fff', 'ggg', 'hh', 'hhh', 'undefined', 'PROJECT872119124035101'),
(31, 'ggg', 'dd@h', '555', '2025-01-09', 'on', 'fff', 'ggg', 'hh', 'hhh', 'undefined', 'PROJECT711685211049120'),
(32, 'ggg', 'dd@h', '555', '2025-01-09', 'on', 'fff', 'ggg', 'hh', 'hhh', 'undefined', 'PROJECT671005812341112'),
(33, 'ggg', 'dd@h', '555', '2025-01-09', 'on', 'fff', 'ggg', 'hh', 'hhh', 'undefined', 'PROJECT412611018937510'),
(34, 'ggg', 'dd@h', '555', '2025-01-09', 'on', 'fff', 'ggg', 'hh', 'hhh', 'undefined', 'PROJECT101082911312574'),
(35, 'ggg', 'dd@h', '555', '2025-01-09', 'on', 'fff', 'ggg', 'hh', 'hhh', 'undefined', 'PROJECT357101164912201'),
(36, 'fff', 'ff@h', '582582', '2025-01-09', 'on', 'fff', 'fff', 'ggg', 'ff', 'undefined', 'PROJECT118941327510012'),
(37, 'fff', 'ff@h', '582582', '2025-01-09', 'on', 'fff', 'fff', 'ggg', 'ff', 'undefined', 'PROJECT181210119450263'),
(38, 'fff', 'ff@h', '582582', '2025-01-09', 'on', 'fff', 'fff', 'ggg', 'ff', 'undefined', 'PROJECT167895211010312'),
(39, 'Gg', 'f@h', '5858866', '2025-01-10', 'on', 'Fff', 'Fff', 'Hh', 'Gg', 'undefined', 'PROJECT192438012105116'),
(40, 'Gg', 'f@h', '5858866', '2025-01-10', 'on', 'Fff', 'Fff', 'Hh', 'Gg', 'undefined', 'PROJECT560102319712114'),
(41, 'gg', 'g@m', '5802', '2025-01-10', 'on', 'ggg', 'hhh', 'hhh', 'hhh', 'undefined', 'PROJECT112124657109018'),
(42, 'dd', 'd@m', '555', '2025-01-10', 'on', 'fggg', 'ggg', 'hhh', 'fff', 'undefined', 'PROJECT64310791218025'),
(43, 'Grace', 'f@m', '5555', '2025-01-10', 'on', 'Fff', 'Fff', 'Fff', 'Fff', 'undefined', 'PROJECT073514810121129'),
(44, 'ned@m', 'fed@mmm', '555', '2025-01-12', 'on', 'fff', 'ggg', 'ggg', 'ggg', 'undefined', 'PROJECT834610025121119'),
(45, 'Jane ads Doe', 'chrsdpp77@gmail.com', '333333', '2000-04-04', 'on', '77 uahjh', 'Bahrain', 'yyyy', 'sfs', 'undefined', 'PROJECT803911106124257'),
(46, '', '', '', '', '', '', '', '', '', '', 'PROJECT401112135987102'),
(47, '', '', '', '', '', '', '', '', '', '', 'PROJECT91003612748521'),
(48, 'fresh', 'fresh@mail', '88000', '2025-01-31', 'on', 'gggg', 'gggg', 'ggg', 'hhh', 'undefined', 'PROJECT831110017521296'),
(49, 'gest', 'gest@m', '08085', '2025-01-31', 'on', 'ggg', 'f', 'ggg', 'fff', 'undefined', 'PROJECT486511209123107'),
(50, 'gest', 'gest@mair', '555', '2025-01-31', 'on', 'ffff', 'ggg', 'hhh', 'ggg', 'undefined', 'PROJECT54381272910610'),
(51, 'real', 'real@mail', '0805253', '2025-01-31', 'on', 'fred', 'ggg', 'hhh', 'ggg', 'undefined', 'PROJECT390471810125112'),
(52, 'd', 'd@m', '2585', '2025-01-31', 'on', 'gg', 'bbb', 'bb', 'bbb', 'undefined', 'PROJECT049101812113756'),
(53, 'G', 'g@m', '5225', '2025-02-04', 'on', 'Ff', 'Fff', 'Ff', 'Fff', 'undefined', 'PROJECT236128119105017'),
(54, 'fest', 'fest@m', '805822', '2025-02-03', 'on', 'ggg', 'gggg', 'ggg', 'ggg', 'undefined', 'PROJECT12811347602195'),
(55, 'gest', 'gest@s', '555', '2025-02-13', 'on', 'adddgg', 'ggg', 'ggg', 'ggg', 'undefined', 'PROJECT120411025369118'),
(56, 'ose', 'ose@gmail.com', '07356343334', '1996-04-23', 'on', 'Flat 9', 'United Kingdom', 'Dartford', 'Kent', 'undefined', 'PROJECT121046357112809'),
(57, 'Bobby ose', 'bobbyose@gmail.com', '08134839841', '2000-04-23', 'on', 'Sabo, Auchi ', 'Nigeria', 'Auchi ', 'Edo', 'undefined', 'PROJECT11412625170398');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_back`
--
ALTER TABLE `feed_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `if_answer`
--
ALTER TABLE `if_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `if_questions`
--
ALTER TABLE `if_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loop_questions`
--
ALTER TABLE `loop_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feed_back`
--
ALTER TABLE `feed_back`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `if_answer`
--
ALTER TABLE `if_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `if_questions`
--
ALTER TABLE `if_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loop_questions`
--
ALTER TABLE `loop_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
