-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 12:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `AcctID` int(11) NOT NULL,
  `AcctName` varchar(250) NOT NULL,
  `InitialBalance` float NOT NULL,
  `SubCat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accttype`
--

CREATE TABLE `accttype` (
  `Assets` int(11) NOT NULL,
  `Liabilities` int(11) NOT NULL,
  `Revenue` int(11) NOT NULL,
  `Expenses` int(11) NOT NULL,
  `Equity` int(11) NOT NULL,
  `AcctID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `JobTitle` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `errormessges`
--

CREATE TABLE `errormessges` (
  `ErrorID` int(11) NOT NULL,
  `ErrorDesc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventlog`
--

CREATE TABLE `eventlog` (
  `EventID` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `EventDesc` varchar(250) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `TransID` int(11) NOT NULL,
  `TransDesc` varchar(250) NOT NULL,
  `TransDescID` int(11) NOT NULL,
  `TransDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `LedgerID` int(11) NOT NULL,
  `AcctID` int(11) NOT NULL,
  `AcctName` varchar(250) NOT NULL,
  `Debit` int(11) NOT NULL,
  `Credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransID` int(11) NOT NULL,
  `AcctID` int(11) NOT NULL,
  `TransCrAmt` float NOT NULL,
  `TransDrAmt` float NOT NULL,
  `TransDesc` varchar(250) NOT NULL,
  `TransDate` date NOT NULL,
  `TransDescID` varchar(250) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `ErrorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trial balance`
--

CREATE TABLE `trial balance` (
  `LedgerID` int(11) NOT NULL,
  `Debit` int(11) NOT NULL,
  `Credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `EmployeeID` int(11) NOT NULL,
  `RegEmp` int(11) NOT NULL,
  `Admin` int(11) NOT NULL,
  `Manager` int(11) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`AcctID`) USING BTREE;

--
-- Indexes for table `accttype`
--
ALTER TABLE `accttype`
  ADD PRIMARY KEY (`AcctID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `errormessges`
--
ALTER TABLE `errormessges`
  ADD PRIMARY KEY (`ErrorID`);

--
-- Indexes for table `eventlog`
--
ALTER TABLE `eventlog`
  ADD PRIMARY KEY (`EventID`),
  ADD UNIQUE KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`TransID`),
  ADD UNIQUE KEY `TransDescID` (`TransDescID`),
  ADD UNIQUE KEY `TransDesc` (`TransDesc`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`LedgerID`),
  ADD UNIQUE KEY `AcctID` (`AcctID`),
  ADD UNIQUE KEY `AcctName` (`AcctName`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransID`),
  ADD UNIQUE KEY `EmployeeID` (`EmployeeID`),
  ADD UNIQUE KEY `ErrorID` (`ErrorID`),
  ADD UNIQUE KEY `AcctID` (`AcctID`);

--
-- Indexes for table `trial balance`
--
ALTER TABLE `trial balance`
  ADD PRIMARY KEY (`LedgerID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EmployeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
