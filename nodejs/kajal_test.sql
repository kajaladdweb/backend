-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2021 at 07:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kajal_test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get1` ()  begin select * from employee; end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get2` ()  begin select * from employee; end$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `d_wage` (`wage` DECIMAL(10,2)) RETURNS DECIMAL(10,2) begin declare daily_wage decimal(10,2); set daily_wage=wage*8; return(daily_wage); end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `average_age`
--

CREATE TABLE `average_age` (
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `author`, `price`, `pages`) VALUES
('', 'darkness at noon', 'william', '200', '100'),
('', 'captch-22', 'Joseph', '300', '20'),
('', 'THE GRAPES OF WRATH', 'John', '300', '500'),
('', 'Under the valcano', 'malcom', '500', '300'),
('', 'The way of all flesh', 'sameul', '300', '500'),
('', 'Invisible man', 'Ralph', '100', '300'),
('', 'NATIVE SON', 'Richard', '200', '300'),
('', 'HENDERSON THE RAIN KING', 'saul', '200', '500'),
('', 'A PASSAGE TO INDIA', 'E .M. Forster', '100', '789'),
('', 'THE WINGS OF THE DOVE', 'Henry', '200', '800');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `university`, `city`, `state`) VALUES
(1, 'Ahmedabad Institute Of Nursing Sciences	', 'GTU', 'Ahmedabad', 'Gujrat'),
(2, 'Ahmedabad Institute Of Nursing Sciences', 'GTU', 'Ahmedabad', 'Gujrat'),
(3, 'H L college ', 'GU', 'Surat', 'Gujrat'),
(4, 'Anm Fhw Training School ,', 'GU', ' Ahmedabad', 'Gujrat'),
(5, 'B K School', 'GU', 'Nadiad', 'Gujrat'),
(6, 'J G college of nursing', 'GTU', 'Surat', 'Gujrat'),
(7, 'L J institute of Engineering', 'GTU', 'Patna', 'Bihar'),
(8, 'Kesarsal Medical College', 'GTU', 'Baroda', 'Gujrat'),
(9, 'IIM', 'GU', 'Ahmedabad', 'Gujrat'),
(10, 'K S School', 'GU', 'Ahmedabad', 'Gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_id` int(50) NOT NULL,
  `Cust_name` varchar(50) NOT NULL,
  `Cust_city` varchar(50) NOT NULL,
  `Cust_zip` varchar(50) NOT NULL,
  `Cust_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Cust_name`, `Cust_city`, `Cust_zip`, `Cust_email`) VALUES
(1, 'kajal', 'Ahmedabad', '198271', 'kajal@gmail.com'),
(2, 'mina', 'Jaipur', '563726', 'mina@gmail.com'),
(3, 'Anjani', 'Ahmedabad', '380001', 'Anjani@gmai.com'),
(4, 'Pooja', 'Rajkot', '837181', 'pooja@gmail.com'),
(5, 'juhi', 'Baroda', '8173920', 'juhi@gamil.com'),
(6, 'pina', 'Rajkot', '862910', 'pina@gmail.com'),
(8, 'Yash', 'gandhinagar', '883293', 'yash@gmail.com'),
(10, 'Riya', 'Ahmedabad', '898988', 'RIya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(50) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_city` varchar(50) NOT NULL,
  `emp_salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_city`, `emp_salary`) VALUES
(1, 'kajal', 'kajajl@gmail.com', 'Ahmedabad', '25000'),
(2, 'Anjani', 'Anjani@gmail.com', 'Ahmedabad', '25000'),
(3, 'Shriya', 'shriya@gmail.com', 'Ahmedabad', '25000'),
(4, 'Riya', 'Riya@gmail.com', 'Ahmedabad', '25000'),
(5, 'Avni', 'Avni@gmail.com', 'Ahmedabad', '25000'),
(6, 'Shreyanshi', 'Shreyanshi@gmail.com', 'Ahmedabad', '25000'),
(7, 'Devarsh', 'Devarsh@gmail.com', 'Ahmedabad', '25000'),
(8, 'manish', 'manish@gmail.com', 'Ahmedabad', '25000'),
(9, 'Ranjeet', 'ranjeet@gmail.com', 'Ahmedabad', '25000'),
(10, 'Jaydeep', 'jaydeep@gmail.com', 'ahmedabad', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(11) NOT NULL,
  `fac_name` varchar(50) NOT NULL,
  `fac_dept` varchar(50) NOT NULL,
  `fac_email` varchar(50) NOT NULL,
  `fac_mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`, `fac_dept`, `fac_email`, `fac_mobile`) VALUES
(11, 'kajal', 'IT', 'kajal@gmail.com', '87878788878'),
(12, 'priti', 'Purchase', 'priti@gmail.com', '907816526'),
(13, 'RIya', 'IT', 'RIya@gmail.com', '8791982910'),
(14, 'Rutu', 'Sales', 'Rutu@gmail.com', '83718010102'),
(15, 'Shreya', 'IT', 'Shreya@gmail.com', '9718283848'),
(16, 'Nima', 'Law', 'Nima@gmail.com', '8298010101'),
(17, 'Jalpa', 'Fianance', 'Jalpa@gmail.com', '72738947819'),
(18, 'Shikha', 'Sales', 'shikah@gmail.com', '9087263156'),
(19, 'Avni', 'Marketing', 'Avni@gmail.com', '7172877937'),
(20, 'Priti', 'IT', 'priti@gamil.com', '8198831878');

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `m_no` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Hospital`
--

INSERT INTO `Hospital` (`id`, `name`, `City`, `m_no`, `State`) VALUES
(1, 'Aakar', 'Rajkot', '938290191', 'Gujrat'),
(2, 'Aalok Ortho Care	', 'ahmedabad', '848029810', 'Gujrat'),
(3, 'Balaji', 'Baroda', '9829919190', 'Gujrat'),
(4, 'Chintan Orhopedic Center', 'Jaaipur', '903782821', 'Rajsthan'),
(5, 'Het  Eye Center', 'Junagadh', '89289381', 'Gujrat'),
(6, 'Kiran Surgical Hospital', 'Panji', '483939201', 'Goa'),
(7, 'Life care Hospital', 'Gandhinagar', '8473882921', 'Gujra'),
(8, 'Mamta hospital', 'Dispur', '8282809191', 'Asam'),
(9, 'Navjivan Hospital', 'Rajkot', '829829101', 'Gujrat'),
(10, 'Nidhi Hospital', 'Baroda', '9192892892', 'Gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `members`
--
DELIMITER $$
CREATE TRIGGER `after_members_insert` AFTER INSERT ON `members` FOR EACH ROW begin
if new.birthdate is null then 
insert into reminders(membersid,message)
values(new.id,concat('Hi',new.name,'please update birthdate'));
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amout` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `type`, `amout`, `status`, `date`) VALUES
(1, 'COD', '1500', 'Fulfilled', '12/02/2020'),
(2, 'Net banking', '3000', 'Pending', '4/05/2020'),
(3, 'Ewallets', '2000', 'fullfiled', '02/05/2021'),
(4, 'COD', '1000', 'Fullfiiled', '01/02/2020'),
(5, 'bank transfers', '3000', 'pending', '09/10/2020'),
(6, 'COD', '4000', 'Fullfilled', '03/12/2019'),
(7, 'Ewallet', '2000', 'pending', '03/03/2019'),
(8, 'Bank transfers', '1500', 'pending', '01/01/2019'),
(9, 'Ewallets', '5000', 'Fullfilled', '03/03/2017'),
(10, 'COD', '1000', 'Pending', '13/12/2019');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `age` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `age` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`age`, `name`) VALUES
(0, 'sod'),
(30, 'josh');

--
-- Triggers `peoples`
--
DELIMITER $$
CREATE TRIGGER `agecheck` BEFORE INSERT ON `peoples` FOR EACH ROW IF NEW.age<0
THEN SET NEW.age=0; END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `name` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `age`) VALUES
('mathew', 25),
('mark', 20),
('mathew', 25),
('mark', 20),
('mathew', 25),
('mark', 20),
('mathew', 25),
('mark', 20);

--
-- Triggers `person`
--
DELIMITER $$
CREATE TRIGGER `person_ad` AFTER DELETE ON `person` FOR EACH ROW update average_age set average=(select avg(person.age) from person)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `person_au` AFTER UPDATE ON `person` FOR EACH ROW update average_age set average=(select avg(age) from person)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `person_bd` BEFORE DELETE ON `person` FOR EACH ROW insert into person_archive (name,age)
values(old.name,old.age)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `person_bu` BEFORE UPDATE ON `person` FOR EACH ROW if new.age<18 then signal sqlstate '50002' set message_text='person must be older than 18'; end if
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person_archive`
--

CREATE TABLE `person_archive` (
  `name` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `qunty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `amount`, `category`, `qunty`) VALUES
(1, 'fan', '3000', 'electric', '2'),
(2, 'light', '2000', 'electric', '1'),
(3, 'mobile', '30000', 'Accesories', '2'),
(4, 'tshirt', '400', 'clothes', '2'),
(5, 'pants', '400', 'clothes', '3'),
(6, 'pen', '300', 'stationary', '2'),
(7, 'earings', '3000', 'jwellery', '3'),
(8, 'eyemakeup', '3000', 'cosmetics', '2'),
(9, 'rings', '2000', 'jwellery', '3'),
(10, 'necklace', '3000', 'jwellery', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `amount`, `dept`, `email`) VALUES
(1, 'Mina', '15000', 'HR', 'Mina@gmail.com'),
(2, 'Kajal', '20000', 'Fiannce', 'Kajal@gmail.com'),
(3, 'Anjani', '20000', 'Marketing', 'Anjani@gmail.com'),
(4, 'yash', '20000', 'HR', 'yash@gmail.com'),
(5, 'Riya', '20000', 'FInance', 'riya@gmail.com'),
(6, 'Shreya', '20000', 'Marketing', 'shreya@gmail.com'),
(7, 'Shriya', '20000', 'HR', 'Shriya@gmail.com'),
(8, 'Avni', '20000', 'Finance', 'Avni@gmail.com'),
(9, 'Anjani', '20000', 'fiannce', 'anjani@gmail.com'),
(10, 'Manish', '25000', 'Hr', 'manish@gmail.com'),
(11, 'jalpa', '20000', 'fiannce', 'jalpa@gmail.com'),
(12, 'RIya', '20000', 'HR', 'riya@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(50) NOT NULL,
  `std_fname` varchar(50) NOT NULL,
  `std_gender` varchar(50) NOT NULL,
  `std_rollno` int(11) NOT NULL,
  `std_mobileno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_fname`, `std_gender`, `std_rollno`, `std_mobileno`) VALUES
(1, 'kajal', 'Female', 1, '7041996269'),
(2, 'Anjani', 'Female', 2, '9087762616'),
(3, 'Shirya', 'Female', 3, '9024562717'),
(4, 'Shreyanshi', 'Female', 4, '8917271027'),
(5, 'RIya', 'Female', 5, '7041996980'),
(6, 'Devarsh', 'Male', 6, '5001996269'),
(7, 'manish', 'Male', 7, '8281818081'),
(8, 'jaydeep', 'Male', 8, '8912837848'),
(9, 'Ranjeet', 'Male', 9, '8283801090'),
(10, 'Manish', 'Male', 10, '8382181010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `Hospital`
--
ALTER TABLE `Hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`,`memberid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Hospital`
--
ALTER TABLE `Hospital`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
