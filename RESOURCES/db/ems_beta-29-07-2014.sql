-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2014 at 03:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ems_beta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblacademicsession`
--

DROP TABLE IF EXISTS `tblacademicsession`;
CREATE TABLE IF NOT EXISTS `tblacademicsession` (
  `AcademicSessionId` smallint(6) NOT NULL AUTO_INCREMENT,
  `SessionName` varchar(10) NOT NULL,
  `SessionStartDate` date NOT NULL,
  `SessionEndDate` date NOT NULL,
  `SortOrder` smallint(6) NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`AcademicSessionId`),
  UNIQUE KEY `SessionName` (`SessionName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblacademicsession`
--

INSERT INTO `tblacademicsession` (`AcademicSessionId`, `SessionName`, `SessionStartDate`, `SessionEndDate`, `SortOrder`, `Status`, `DateCreated`, `DateUpdated`) VALUES
(3, 'test', '2014-07-16', '2014-07-30', 1, 1, '2014-07-28 15:56:02', '2014-07-28 18:33:15'),
(5, 'testing', '2014-07-28', '2014-08-31', 2, 1, '2014-07-28 16:24:23', '2014-07-28 18:06:21'),
(6, 'newone', '2014-07-24', '2014-10-23', 4, 0, '2014-07-29 10:40:54', '2014-07-29 10:41:04'),
(7, 'anjil', '2014-07-31', '2014-10-25', 4, 1, '2014-07-29 11:33:25', '0000-00-00 00:00:00'),
(8, 'newtest', '2014-07-17', '2014-07-25', 5, 1, '2014-07-29 11:48:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncements`
--

DROP TABLE IF EXISTS `tblannouncements`;
CREATE TABLE IF NOT EXISTS `tblannouncements` (
  `AnnouncementId` int(11) NOT NULL AUTO_INCREMENT,
  `InstituteId` smallint(6) NOT NULL,
  `AcademicSessionId` smallint(6) NOT NULL,
  `Heading` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `ExpiryDate` datetime NOT NULL,
  `AnnouncementType` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`AnnouncementId`),
  KEY `AnnouncementType` (`AnnouncementType`),
  KEY `InstituteId` (`InstituteId`),
  KEY `AcademicSessionId` (`AcademicSessionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblannouncements`
--

INSERT INTO `tblannouncements` (`AnnouncementId`, `InstituteId`, `AcademicSessionId`, `Heading`, `Description`, `ExpiryDate`, `AnnouncementType`, `DateCreated`, `DateUpdated`) VALUES
(8, 2, 3, 'test', 'test', '2014-07-23 00:00:00', 3, '2014-07-29 12:04:11', '2014-07-29 12:13:07'),
(10, 2, 3, 'Eid Leave', 'This is eid', '2014-07-29 00:00:00', 1, '2014-07-29 12:13:33', '0000-00-00 00:00:00'),
(12, 4, 3, 'Eid', 'Holiday', '2014-07-24 00:00:00', 2, '2014-07-29 12:22:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

DROP TABLE IF EXISTS `tblattendance`;
CREATE TABLE IF NOT EXISTS `tblattendance` (
  `AttendanceId` int(11) NOT NULL AUTO_INCREMENT,
  `PeriodSubjectAssociationId` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `LeaveStatus` int(11) NOT NULL COMMENT 'MasterCollection',
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`AttendanceId`),
  KEY `PeriodSubjectAssociationId` (`PeriodSubjectAssociationId`,`StudentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblbus`
--

DROP TABLE IF EXISTS `tblbus`;
CREATE TABLE IF NOT EXISTS `tblbus` (
  `BusId` smallint(6) NOT NULL AUTO_INCREMENT,
  `InstituteId` smallint(6) NOT NULL,
  `BusName` varchar(50) NOT NULL,
  `BusNumber` varchar(10) NOT NULL,
  `Capacity` tinyint(3) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `SortOrder` smallint(6) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`BusId`),
  UNIQUE KEY `BusNumber` (`BusNumber`),
  KEY `InstituteId` (`InstituteId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblbus`
--

INSERT INTO `tblbus` (`BusId`, `InstituteId`, `BusName`, `BusNumber`, `Capacity`, `Description`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 3, 'Test', '1234', 50, 'only for test', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 5, 'Bus name 2', '4567', 45, 'test', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblbusroute`
--

DROP TABLE IF EXISTS `tblbusroute`;
CREATE TABLE IF NOT EXISTS `tblbusroute` (
  `BusRouteId` smallint(6) NOT NULL AUTO_INCREMENT,
  `InstituteId` smallint(6) NOT NULL,
  `AcademicSessionId` smallint(6) NOT NULL,
  `RouteName` varchar(50) NOT NULL,
  `BusId` smallint(6) NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `SortOrder` smallint(6) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`BusRouteId`),
  KEY `InstituteId` (`InstituteId`,`AcademicSessionId`,`BusId`),
  KEY `FK_tblbusroute_tblacademicsession` (`AcademicSessionId`),
  KEY `FK_tblbusroute_tblbus` (`BusId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblbusroute`
--

INSERT INTO `tblbusroute` (`BusRouteId`, `InstituteId`, `AcademicSessionId`, `RouteName`, `BusId`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 2, 3, 'demo', 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblbusroutedetail`
--

DROP TABLE IF EXISTS `tblbusroutedetail`;
CREATE TABLE IF NOT EXISTS `tblbusroutedetail` (
  `BusRouteDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `BusRouteId` smallint(6) NOT NULL,
  `PickupPointId` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`BusRouteDetailId`),
  KEY `BusRouteId` (`BusRouteId`),
  KEY `PickupPointId` (`PickupPointId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

DROP TABLE IF EXISTS `tblcity`;
CREATE TABLE IF NOT EXISTS `tblcity` (
  `CityId` int(11) NOT NULL AUTO_INCREMENT,
  `StateId` int(11) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`CityId`),
  UNIQUE KEY `CityName` (`CityName`),
  KEY `StateId` (`StateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`CityId`, `StateId`, `CityName`, `DateCreated`, `DateUpdated`) VALUES
(1, 1, 'jodhpur', '2014-07-29 17:59:00', '0000-00-00 00:00:00'),
(2, 1, 'pali', '2014-07-29 17:59:00', '0000-00-00 00:00:00'),
(3, 1, 'pilani', '2014-07-29 17:59:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

DROP TABLE IF EXISTS `tblclass`;
CREATE TABLE IF NOT EXISTS `tblclass` (
  `ClassId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(50) DEFAULT NULL,
  `ClassDisplayName` varchar(25) DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '1',
  `SortOrder` smallint(6) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ClassId`),
  UNIQUE KEY `ClassName` (`ClassName`),
  UNIQUE KEY `ClassDisplayName` (`ClassDisplayName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`ClassId`, `ClassName`, `ClassDisplayName`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 'PG', 'PG', 1, 0, NULL, NULL),
(2, 'NR', 'NR', 1, 0, '2014-07-29 12:24:26', NULL),
(3, 'KG', 'KG', 1, 0, '2014-07-16 12:25:33', NULL),
(4, 'LKG', 'LKG', 1, 0, '2014-07-29 14:53:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblclassexamassociation`
--

DROP TABLE IF EXISTS `tblclassexamassociation`;
CREATE TABLE IF NOT EXISTS `tblclassexamassociation` (
  `ClassExamAssociationId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) NOT NULL,
  `ExamId` int(11) NOT NULL,
  `InstituteId` smallint(6) DEFAULT NULL,
  `AcademicSessionId` smallint(6) DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '1',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ClassExamAssociationId`),
  KEY `ClassID` (`ClassId`),
  KEY `ExamID` (`ExamId`),
  KEY `InstituteId` (`InstituteId`),
  KEY `AcademicSessionId` (`AcademicSessionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblclassfeestructure`
--

DROP TABLE IF EXISTS `tblclassfeestructure`;
CREATE TABLE IF NOT EXISTS `tblclassfeestructure` (
  `ClassFeeStructureId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) DEFAULT '0',
  `ComponentId` int(11) DEFAULT '0',
  `Frequency` int(11) NOT NULL COMMENT 'Fee Collection Frequency',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ClassFeeStructureId`),
  KEY `ClassID` (`ClassId`),
  KEY `ComponentID` (`ComponentId`),
  KEY `Frequency` (`Frequency`),
  KEY `ComponentId_2` (`ComponentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblclassfeestructuredetails`
--

DROP TABLE IF EXISTS `tblclassfeestructuredetails`;
CREATE TABLE IF NOT EXISTS `tblclassfeestructuredetails` (
  `ClassFeeStructureDetailsId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassFeeStructureId` int(11) NOT NULL,
  `DueDate` datetime DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT '0.00',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ClassFeeStructureDetailsId`),
  KEY `ClassFeeStructureID` (`ClassFeeStructureId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblclassschedule`
--

DROP TABLE IF EXISTS `tblclassschedule`;
CREATE TABLE IF NOT EXISTS `tblclassschedule` (
  `ClassScheduleId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassSectionAssociationId` int(11) NOT NULL,
  `AttendanceType` int(11) NOT NULL,
  `TotalPeriods` tinyint(3) NOT NULL,
  `SortOrder` tinyint(3) NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`ClassScheduleId`),
  KEY `ClassSectionAssociationId` (`ClassSectionAssociationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblclasssectionassociation`
--

DROP TABLE IF EXISTS `tblclasssectionassociation`;
CREATE TABLE IF NOT EXISTS `tblclasssectionassociation` (
  `ClassSectionAssociationId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) NOT NULL,
  `SectionId` int(11) NOT NULL,
  `InsituteId` smallint(6) NOT NULL,
  `AcademicSessionId` smallint(6) NOT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ClassSectionAssociationId`),
  UNIQUE KEY `ClassId_2` (`ClassId`,`SectionId`,`InsituteId`,`AcademicSessionId`),
  KEY `AcademicID` (`AcademicSessionId`),
  KEY `ClassID` (`ClassId`),
  KEY `InsituteID` (`InsituteId`),
  KEY `SectionID` (`SectionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `tblclasssectionassociation`
--

INSERT INTO `tblclasssectionassociation` (`ClassSectionAssociationId`, `ClassId`, `SectionId`, `InsituteId`, `AcademicSessionId`, `Status`, `DateCreated`, `DateUpdated`) VALUES
(46, 2, 1, 3, 3, 1, '2014-07-29 17:47:09', NULL),
(48, 3, 1, 3, 3, 1, '2014-07-29 17:47:42', '2014-07-29 17:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasssectionexamassociation`
--

DROP TABLE IF EXISTS `tblclasssectionexamassociation`;
CREATE TABLE IF NOT EXISTS `tblclasssectionexamassociation` (
  `ClassSectionExamAssociationId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassExamAssociationId` int(11) DEFAULT '0',
  `SectionId` int(11) DEFAULT '0',
  `ExamStartDate` datetime DEFAULT NULL,
  `ExamEndDate` datetime DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ClassSectionExamAssociationId`),
  KEY `ClassExamID` (`ClassExamAssociationId`),
  KEY `SectionID` (`SectionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblclasssubjectassociation`
--

DROP TABLE IF EXISTS `tblclasssubjectassociation`;
CREATE TABLE IF NOT EXISTS `tblclasssubjectassociation` (
  `SubjectClassAssociationId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `IsOptional` tinyint(3) DEFAULT '0',
  `InstituteId` smallint(6) NOT NULL,
  `AcademiSessionId` smallint(6) NOT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`SubjectClassAssociationId`),
  KEY `ClassID` (`ClassId`),
  KEY `InstituteID` (`InstituteId`),
  KEY `SubjectID` (`SubjectId`),
  KEY `AcademiSessionId` (`AcademiSessionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcountry`
--

DROP TABLE IF EXISTS `tblcountry`;
CREATE TABLE IF NOT EXISTS `tblcountry` (
  `CountryId` smallint(6) NOT NULL AUTO_INCREMENT,
  `CountryCode` varchar(2) NOT NULL,
  `CountryName` varchar(50) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`CountryId`),
  UNIQUE KEY `CountryCode` (`CountryCode`,`CountryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblcountry`
--

INSERT INTO `tblcountry` (`CountryId`, `CountryCode`, `CountryName`, `DateCreated`, `DateUpdated`) VALUES
(1, 'IN', 'india', '2014-07-29 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

DROP TABLE IF EXISTS `tblemployee`;
CREATE TABLE IF NOT EXISTS `tblemployee` (
  `EmployeeId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `EmployeeCode` varchar(25) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Status` tinyint(3) DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`EmployeeId`),
  UNIQUE KEY `UserId` (`UserId`),
  KEY `EmployeeCode` (`EmployeeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployeedetails`
--

DROP TABLE IF EXISTS `tblemployeedetails`;
CREATE TABLE IF NOT EXISTS `tblemployeedetails` (
  `EmployeeDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT '0',
  `DOB` datetime DEFAULT NULL,
  `EmployeeType` smallint(6) DEFAULT '0',
  `Department` smallint(6) DEFAULT '0',
  `Gender` smallint(6) DEFAULT '0',
  `Religion` smallint(6) DEFAULT '0',
  `Category` smallint(6) DEFAULT '0',
  `CurrentAddress1` varchar(255) DEFAULT NULL,
  `CurrentAddress2` varchar(255) DEFAULT NULL,
  `CurrentSuburbId` int(11) DEFAULT '0',
  `CurrentCityId` smallint(6) DEFAULT '0',
  `CurrentZipcode` varchar(6) DEFAULT '0',
  `CurrentStateId` smallint(6) DEFAULT '0',
  `CurrentCountryId` smallint(6) DEFAULT '0',
  `PermaAddress1` varchar(255) DEFAULT NULL,
  `PermaAddress2` varchar(255) DEFAULT NULL,
  `PermaSuburbId` int(11) DEFAULT '0',
  `PermaCityId` smallint(6) DEFAULT '0',
  `PermaStateId` smallint(6) DEFAULT '0',
  `PermaCountryId` smallint(6) DEFAULT '0',
  `PermaZipcode` varchar(6) DEFAULT '0',
  `Mobile1` varchar(15) DEFAULT '0',
  `Mobile2` varchar(15) DEFAULT '0',
  `Phone1` varchar(15) DEFAULT '0',
  `Phone2` varchar(15) DEFAULT '0',
  `Fax1` varchar(15) DEFAULT '0',
  `Fax2` varchar(15) DEFAULT '0',
  `Email1` varchar(255) DEFAULT NULL,
  `Email2` varchar(255) DEFAULT NULL,
  `PassportNum` varchar(15) DEFAULT NULL,
  `DateofJoining` datetime DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '1',
  `Remarks` blob,
  `AdmissionRef` varchar(100) DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`EmployeeDetailId`),
  UNIQUE KEY `UserId` (`UserId`),
  KEY `CurrentCityID` (`CurrentCityId`),
  KEY `CurrentCountryID` (`CurrentCountryId`),
  KEY `CurrentPincode` (`CurrentZipcode`),
  KEY `CurrentStateID` (`CurrentStateId`),
  KEY `CurrentSuburbID` (`CurrentSuburbId`),
  KEY `EmployeeID` (`UserId`),
  KEY `PassportNum` (`PassportNum`),
  KEY `PermaCityID` (`PermaCityId`),
  KEY `PermaCountryID` (`PermaCountryId`),
  KEY `PermaPincode` (`PermaZipcode`),
  KEY `PermaStateID` (`PermaStateId`),
  KEY `PermaSuburbID` (`PermaSuburbId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployeereference`
--

DROP TABLE IF EXISTS `tblemployeereference`;
CREATE TABLE IF NOT EXISTS `tblemployeereference` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) DEFAULT '0',
  `Reference1Address1` varchar(255) DEFAULT NULL,
  `Reference1Address2` varchar(255) DEFAULT NULL,
  `Reference1CityID` int(11) DEFAULT '0',
  `Reference1Mobile` int(11) DEFAULT '0',
  `Reference1HomePhone` int(11) DEFAULT '0',
  `Reference1OfficePhone` int(11) DEFAULT '0',
  `Reference1Email` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `EmployeeID` (`EmployeeID`),
  KEY `Reference1CityID` (`Reference1CityID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployeesalary`
--

DROP TABLE IF EXISTS `tblemployeesalary`;
CREATE TABLE IF NOT EXISTS `tblemployeesalary` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) DEFAULT '0',
  `Grade` int(11) DEFAULT '0',
  `BasicSalary` int(11) DEFAULT '0',
  `TA` int(11) DEFAULT '0',
  `DA` int(11) DEFAULT '0',
  `HRA` int(11) DEFAULT '0',
  `Deduction` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblexamgrademaster`
--

DROP TABLE IF EXISTS `tblexamgrademaster`;
CREATE TABLE IF NOT EXISTS `tblexamgrademaster` (
  `GradeId` int(11) NOT NULL AUTO_INCREMENT,
  `GradeName` varchar(255) NOT NULL,
  `GradeMinRange` tinyint(3) NOT NULL DEFAULT '0',
  `GradeMaxRange` tinyint(3) NOT NULL,
  `InstituteId` smallint(6) NOT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`GradeId`),
  UNIQUE KEY `NewIndex1` (`GradeName`),
  KEY `InstituteID` (`InstituteId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblexammaster`
--

DROP TABLE IF EXISTS `tblexammaster`;
CREATE TABLE IF NOT EXISTS `tblexammaster` (
  `ExamId` int(11) NOT NULL AUTO_INCREMENT,
  `ExamName` varchar(255) NOT NULL,
  `ExamStartDate` datetime DEFAULT NULL,
  `ExamEndDate` datetime DEFAULT NULL,
  `AcademicSessionId` smallint(6) NOT NULL,
  `InstituteId` smallint(6) NOT NULL,
  `Status` tinyint(3) DEFAULT '1',
  `SortOrder` tinyint(3) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ExamId`),
  KEY `AcademicSessionID` (`AcademicSessionId`),
  KEY `InstituteID` (`InstituteId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblexammaster`
--

INSERT INTO `tblexammaster` (`ExamId`, `ExamName`, `ExamStartDate`, `ExamEndDate`, `AcademicSessionId`, `InstituteId`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(5, 'Class Test', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 3, 1, 0, '2014-07-29 14:05:39', '2014-07-29 14:23:53'),
(6, 'Monthly Test', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 3, 1, 0, '2014-07-29 14:27:12', NULL),
(7, 'Weekly Test', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 3, 1, 0, '2014-07-29 14:27:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblexamstructure`
--

DROP TABLE IF EXISTS `tblexamstructure`;
CREATE TABLE IF NOT EXISTS `tblexamstructure` (
  `ExamStructureId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassSectionExamAssociationId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `ComponentId` int(11) DEFAULT '0',
  `MaxMarks` smallint(6) NOT NULL,
  `Status` int(11) DEFAULT '1',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ExamStructureId`),
  KEY `Status` (`Status`),
  KEY `SubjectID` (`SubjectId`),
  KEY `ClassSectionExamID` (`ClassSectionExamAssociationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblexamsubjectcomponent`
--

DROP TABLE IF EXISTS `tblexamsubjectcomponent`;
CREATE TABLE IF NOT EXISTS `tblexamsubjectcomponent` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `ExamStructureID` int(11) DEFAULT '0',
  `ComponentID` int(11) DEFAULT '0',
  `ComponentMarks` int(11) DEFAULT '0',
  `Status` tinyint(1) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `ExamStructureID` (`ExamStructureID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblfeeothercharges`
--

DROP TABLE IF EXISTS `tblfeeothercharges`;
CREATE TABLE IF NOT EXISTS `tblfeeothercharges` (
  `FeeOtherChargesId` int(11) NOT NULL AUTO_INCREMENT,
  `InstituteId` smallint(6) NOT NULL,
  `AcademicSessionId` smallint(6) NOT NULL,
  `OtherComponentName` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `SortOrder` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`FeeOtherChargesId`),
  KEY `InstituteId` (`InstituteId`),
  KEY `AcademicSessionId` (`AcademicSessionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblfeeothercharges`
--

INSERT INTO `tblfeeothercharges` (`FeeOtherChargesId`, `InstituteId`, `AcademicSessionId`, `OtherComponentName`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 3, 3, 'Late Fees', 1, 0, NULL, NULL),
(2, 3, 3, 'Picnic Fees', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeeotherchargesdetails`
--

DROP TABLE IF EXISTS `tblfeeotherchargesdetails`;
CREATE TABLE IF NOT EXISTS `tblfeeotherchargesdetails` (
  `FeeOtherChargesDetailsId` int(11) NOT NULL AUTO_INCREMENT,
  `FeeOtherChargesId` int(11) DEFAULT '0',
  `ClassId` int(11) DEFAULT '0',
  `AmountType` varchar(255) DEFAULT NULL,
  `Period` int(11) NOT NULL,
  `Charges` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`FeeOtherChargesDetailsId`),
  KEY `ClassID` (`ClassId`),
  KEY `OtherComponentID` (`FeeOtherChargesId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblfeescomponentmaster`
--

DROP TABLE IF EXISTS `tblfeescomponentmaster`;
CREATE TABLE IF NOT EXISTS `tblfeescomponentmaster` (
  `ComponentId` int(11) NOT NULL AUTO_INCREMENT,
  `InstituteId` smallint(6) NOT NULL,
  `AcademicSessionId` smallint(6) NOT NULL,
  `ComponentName` varchar(100) NOT NULL,
  `IsRefundable` enum('0','1') DEFAULT '0',
  `Status` tinyint(3) DEFAULT '1',
  `SortOrder` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ComponentId`),
  KEY `IsRefundable` (`IsRefundable`),
  KEY `InstituteID` (`InstituteId`),
  KEY `InstituteId_2` (`InstituteId`),
  KEY `AcademicSessionId` (`AcademicSessionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblfeescomponentmaster`
--

INSERT INTO `tblfeescomponentmaster` (`ComponentId`, `InstituteId`, `AcademicSessionId`, `ComponentName`, `IsRefundable`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 3, 3, 'Addmission Fee', '0', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblgradecard`
--

DROP TABLE IF EXISTS `tblgradecard`;
CREATE TABLE IF NOT EXISTS `tblgradecard` (
  `GradeCardId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentAcademicHistoryId` int(11) NOT NULL,
  `ExamStructureId` int(11) NOT NULL,
  `Marks` float(4,2) DEFAULT '0.00',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`GradeCardId`),
  KEY `ExamSubjectComponentID` (`ExamStructureId`),
  KEY `Marks` (`Marks`),
  KEY `StudentAcademicID` (`StudentAcademicHistoryId`),
  KEY `tableID` (`GradeCardId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblholidaylist`
--

DROP TABLE IF EXISTS `tblholidaylist`;
CREATE TABLE IF NOT EXISTS `tblholidaylist` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `InstituteID` int(11) DEFAULT '0',
  `HolidayStartDate` datetime DEFAULT NULL,
  `HolidayEndDate` datetime DEFAULT NULL,
  `HolidayName` varchar(255) DEFAULT NULL,
  `Comment` longtext,
  `AcademicSessionID` int(11) DEFAULT '0',
  `Status` int(11) DEFAULT '0',
  `SortOrder` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `AcademicSessionID` (`AcademicSessionID`),
  KEY `InstituteID` (`InstituteID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblinstitute`
--

DROP TABLE IF EXISTS `tblinstitute`;
CREATE TABLE IF NOT EXISTS `tblinstitute` (
  `InstituteId` smallint(6) NOT NULL AUTO_INCREMENT,
  `InstituteName` varchar(255) NOT NULL,
  `InstituteLogo` varchar(255) DEFAULT NULL,
  `InstituteAddress1` varchar(255) NOT NULL,
  `InstituteAddress2` varchar(255) DEFAULT NULL,
  `InstituteZipCode` varchar(6) NOT NULL,
  `InstituteCityId` smallint(6) NOT NULL,
  `InstituteStateId` smallint(6) NOT NULL,
  `InstituteCountryId` smallint(6) NOT NULL,
  `InstitutePhone1` varchar(15) NOT NULL,
  `InstitutePhone2` varchar(15) DEFAULT NULL,
  `InsituteFax1` varchar(15) NOT NULL,
  `InstituteFax2` varchar(15) DEFAULT NULL,
  `InstituteEmail1` varchar(255) NOT NULL,
  `InstituteEmail2` varchar(255) DEFAULT NULL,
  `InsituteWebUrl` varchar(255) NOT NULL,
  `InstituteDescription` blob,
  `InstituteAccreditionId` varchar(50) NOT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`InstituteId`),
  UNIQUE KEY `InstituteName` (`InstituteName`),
  KEY `InstituteCountryID` (`InstituteCountryId`),
  KEY `InstituteStateID` (`InstituteStateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblinstitute`
--

INSERT INTO `tblinstitute` (`InstituteId`, `InstituteName`, `InstituteLogo`, `InstituteAddress1`, `InstituteAddress2`, `InstituteZipCode`, `InstituteCityId`, `InstituteStateId`, `InstituteCountryId`, `InstitutePhone1`, `InstitutePhone2`, `InsituteFax1`, `InstituteFax2`, `InstituteEmail1`, `InstituteEmail2`, `InsituteWebUrl`, `InstituteDescription`, `InstituteAccreditionId`, `DateCreated`, `DateUpdated`) VALUES
(2, 'Inst 2', NULL, 'test', 'tres', '1234', 1, 1, 1, '0', '0', '0', '0', 'test@test.com', 'trewst2@tst.com', '', '', '0', NULL, NULL),
(3, 'Inst 3', NULL, 'gdftht', 'tgrtchtgfv', '0', 1, 1, 1, '0', '0', '0', '0', 'adwivedi@ebizneeds.com', 'trewst2@tst.com', '', '', '0', NULL, NULL),
(4, 'Inst 4', NULL, 'd-34, Janpath', 'Shyam Nagar', '302019', 1, 1, 1, '253614128', '17412814', '258185', '744158284125', 'test@test.com', 'test@test.com', 'localhost/ca-ems/masters/institute', 0x43656e7472616c2041636164656d79, '5', NULL, NULL),
(5, 'Inst 5', NULL, 'test', 'tedsrt', '1234', 1, 1, 1, '12345678', '0', '0', '0', 'test@test.com', 'trewst2@tst.com', '', '', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmastercollection`
--

DROP TABLE IF EXISTS `tblmastercollection`;
CREATE TABLE IF NOT EXISTS `tblmastercollection` (
  `MasterCollectionId` int(11) NOT NULL AUTO_INCREMENT,
  `MasterCollectionTypeId` int(11) NOT NULL,
  `CollectionName` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`MasterCollectionId`),
  KEY `MasterCollectionTypeId` (`MasterCollectionTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblmastercollection`
--

INSERT INTO `tblmastercollection` (`MasterCollectionId`, `MasterCollectionTypeId`, `CollectionName`, `Description`, `Status`, `DateCreated`, `DateUpdated`) VALUES
(2, 14, 'UP Board', 'Uttar Pradesh Board', 1, '2014-07-28 15:32:24', '2014-07-28 15:32:24'),
(3, 7, 'B+', 'be positive', 1, '2014-07-28 15:35:23', '2014-07-28 15:35:23'),
(4, 4, 'Hindu', 'Hindu', 1, '2014-07-28 16:37:30', '0000-00-00 00:00:00'),
(5, 10, 'Computer Science ', 'Computer Science ', 1, '2014-07-28 16:49:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblmastercollectiontype`
--

DROP TABLE IF EXISTS `tblmastercollectiontype`;
CREATE TABLE IF NOT EXISTS `tblmastercollectiontype` (
  `MasterCollectionTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `MasterCollectionType` varchar(50) NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`MasterCollectionTypeId`),
  UNIQUE KEY `MasterCollectionType` (`MasterCollectionType`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tblmastercollectiontype`
--

INSERT INTO `tblmastercollectiontype` (`MasterCollectionTypeId`, `MasterCollectionType`, `Status`, `DateCreated`, `DateUpdated`) VALUES
(1, 'Section', 0, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(2, 'Time Period Abbreviation (AM,PM)', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(3, 'Gender', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(4, 'Religion', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(5, 'Structure Type', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(6, 'Title', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(7, 'Blood Group', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(8, 'Medium', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(9, 'Designation', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(10, 'Department', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(11, 'Occupation', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(12, 'Qualification', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(13, 'Basic Classes', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(14, 'Exam Board', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(15, 'Student type', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(16, 'Reserve category', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(17, 'Results', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(18, 'Relation', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(19, 'Annual Income', 1, '2012-10-01 15:26:02', '2012-10-01 15:26:02'),
(20, 'Grade', 1, '2012-10-18 11:30:40', '2012-10-18 11:30:43'),
(21, 'Marital Status', 1, '2012-10-18 11:30:40', '2012-10-18 11:30:43'),
(22, 'Leaves Type', 1, '2012-10-30 16:35:42', '2012-10-30 16:35:45'),
(23, 'Week Days', 1, '2012-10-30 16:35:42', '2012-10-30 16:35:45'),
(24, 'Attendance Modes', 1, '2012-10-30 16:35:42', '2012-10-30 16:35:45'),
(25, 'Fee Rule Mode', 1, '2012-11-23 09:37:29', '0000-00-00 00:00:00'),
(26, 'Fee Discount Mode', 1, '2012-11-26 14:15:33', '2012-11-26 14:15:36'),
(27, 'Attendance type', 1, '2012-12-13 18:35:18', '2012-12-13 18:35:26'),
(28, 'Student required informations', 1, '2012-12-13 18:35:18', '2012-12-13 18:35:26'),
(29, 'Employee required informations', 1, '2012-12-13 18:35:26', '2012-12-13 18:35:26'),
(30, 'Streams', 1, '2012-12-13 18:35:18', '2012-12-13 18:35:26'),
(31, 'Fee deposite period', 1, '2012-12-13 18:35:18', '2012-12-13 18:35:26'),
(32, 'Notes heading', 1, '2013-02-20 00:00:00', '2013-02-20 00:00:00'),
(33, 'Status', 1, '2013-02-22 05:33:41', '2013-02-22 05:33:41'),
(34, 'emp_streams', 1, '2013-02-23 00:00:00', '2013-02-24 00:00:00'),
(35, 'Conveyance Type', 1, '2013-03-06 15:26:02', '2013-03-06 15:26:02'),
(36, 'Subject Component Types', 1, '2013-03-26 06:07:00', '2013-03-26 03:40:35'),
(37, 'Cause of leaving School', 1, '2014-01-10 12:29:48', '2014-01-10 12:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalinfo`
--

DROP TABLE IF EXISTS `tblmedicalinfo`;
CREATE TABLE IF NOT EXISTS `tblmedicalinfo` (
  `MedicalInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT '0',
  `MedicalHistory` blob,
  `RegularDocName` varchar(100) DEFAULT NULL,
  `RegularDocAddress` varchar(255) DEFAULT NULL,
  `RegularDocMobile` varchar(15) DEFAULT '0',
  `RegularDocPhone` varchar(15) DEFAULT '0',
  `RegularDocEmail` varchar(255) DEFAULT NULL,
  `RegularHospName` varchar(255) DEFAULT NULL,
  `RegularHospPhone` varchar(15) DEFAULT '0',
  `RegularHospEmail` varchar(255) DEFAULT NULL,
  `RegularHospAddress` varchar(255) DEFAULT NULL,
  `Height` smallint(6) DEFAULT '0',
  `weight` smallint(6) DEFAULT '0',
  `BloodGroup` smallint(6) DEFAULT '0',
  `LeftEyeSight` varchar(5) DEFAULT '0',
  `RightEyeSight` varchar(5) DEFAULT '0',
  `IdentificationMark1` varchar(255) DEFAULT NULL,
  `IdentificationMark2` varchar(255) DEFAULT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`MedicalInfoId`),
  UNIQUE KEY `UserId` (`UserId`),
  KEY `IdentificationMark1` (`IdentificationMark1`),
  KEY `IdentificationMark2` (`IdentificationMark2`),
  KEY `RecordID` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblparent`
--

DROP TABLE IF EXISTS `tblparent`;
CREATE TABLE IF NOT EXISTS `tblparent` (
  `ParentId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Gender` smallint(6) DEFAULT '0',
  `Religion` smallint(6) DEFAULT '0',
  `Category` smallint(6) DEFAULT '0',
  `CurrentAddress1` varchar(255) DEFAULT NULL,
  `CurrentAddress2` varchar(255) DEFAULT NULL,
  `CurrentSuburbId` smallint(6) DEFAULT '0',
  `CurrentCityId` smallint(6) DEFAULT '0',
  `CurrentZipcode` varchar(6) DEFAULT '0',
  `CurrentStateId` smallint(6) DEFAULT '0',
  `CurrentCountryId` smallint(6) DEFAULT '0',
  `PermaAddress1` varchar(255) DEFAULT NULL,
  `PermaAddress2` varchar(255) DEFAULT NULL,
  `PermaSuburbId` smallint(6) DEFAULT '0',
  `PermaCityId` smallint(6) DEFAULT '0',
  `PermaStateId` smallint(6) DEFAULT '0',
  `PermaCountryId` smallint(6) DEFAULT '0',
  `PermaZipcode` varchar(6) DEFAULT '0',
  `Mobile1` varchar(15) DEFAULT '0',
  `Mobile2` varchar(15) DEFAULT '0',
  `Phone1` varchar(15) DEFAULT '0',
  `Phone2` varchar(15) DEFAULT '0',
  `Fax1` varchar(15) DEFAULT '0',
  `Fax2` varchar(15) DEFAULT '0',
  `Email1` varchar(255) DEFAULT NULL,
  `Email2` varchar(255) DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '0',
  `QualificationId` smallint(6) DEFAULT '0',
  `Occupation` smallint(6) DEFAULT '0',
  `Income` smallint(6) DEFAULT '0',
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`ParentId`),
  KEY `CurrentCityID` (`CurrentCityId`),
  KEY `CurrentCountryID` (`CurrentCountryId`),
  KEY `CurrentPincode` (`CurrentZipcode`),
  KEY `CurrentStateID` (`CurrentStateId`),
  KEY `CurrentSuburbID` (`CurrentSuburbId`),
  KEY `ParentId` (`ParentId`),
  KEY `PermaCityID` (`PermaCityId`),
  KEY `PermaCountryID` (`PermaCountryId`),
  KEY `PermaPincode` (`PermaZipcode`),
  KEY `PermaStateID` (`PermaStateId`),
  KEY `PermaSuburbID` (`PermaSuburbId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblperiodsubjectassociation`
--

DROP TABLE IF EXISTS `tblperiodsubjectassociation`;
CREATE TABLE IF NOT EXISTS `tblperiodsubjectassociation` (
  `PeriodSubjectAssociationId` int(11) NOT NULL AUTO_INCREMENT,
  `ClassScheduleId` int(11) NOT NULL,
  `PeriodNum` tinyint(3) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  `SortOrder` tinyint(3) NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`PeriodSubjectAssociationId`),
  KEY `ClassScheduleId` (`ClassScheduleId`,`SubjectId`,`UserId`),
  KEY `SubjectId` (`SubjectId`),
  KEY `EmployeeId` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpickuppoint`
--

DROP TABLE IF EXISTS `tblpickuppoint`;
CREATE TABLE IF NOT EXISTS `tblpickuppoint` (
  `PickupPointId` int(11) NOT NULL AUTO_INCREMENT,
  `InstituteId` smallint(6) NOT NULL,
  `PickupPointName` varchar(255) NOT NULL,
  `Amount` float NOT NULL,
  `ZipCode` varchar(6) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `Status` tinyint(3) NOT NULL,
  `SortOrder` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`PickupPointId`),
  KEY `InstituteId` (`InstituteId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblpickuppoint`
--

INSERT INTO `tblpickuppoint` (`PickupPointId`, `InstituteId`, `PickupPointName`, `Amount`, `ZipCode`, `Remarks`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 2, 'shastri nagar', 250, '0213', 'test', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, 'CHB', 200, '1234', 'test', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblresources`
--

DROP TABLE IF EXISTS `tblresources`;
CREATE TABLE IF NOT EXISTS `tblresources` (
  `ResourceId` int(11) NOT NULL AUTO_INCREMENT,
  `Module` varchar(50) NOT NULL,
  `Controller` varchar(50) NOT NULL,
  `Method` varchar(50) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`ResourceId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblresources`
--

INSERT INTO `tblresources` (`ResourceId`, `Module`, `Controller`, `Method`, `DateCreated`, `DateUpdated`) VALUES
(1, 'Default', 'Site', 'Page', '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(2, 'Default', 'Site', 'Index', '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(3, 'Default', 'Site', 'Logout', '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(4, 'Default', 'Site', 'Error', '2014-07-22 00:00:00', '2014-07-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblroles`
--

DROP TABLE IF EXISTS `tblroles`;
CREATE TABLE IF NOT EXISTS `tblroles` (
  `RoleId` int(11) NOT NULL AUTO_INCREMENT,
  `RoleName` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`RoleId`),
  UNIQUE KEY `RoleName` (`RoleName`),
  KEY `RolesTableId` (`RoleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblroles`
--

INSERT INTO `tblroles` (`RoleId`, `RoleName`, `DateCreated`, `DateUpdated`) VALUES
(1, 'ADMIN', '2014-07-23 00:00:00', '2014-07-23 00:00:00'),
(2, 'STUDENT', '2014-07-24 00:00:00', '2014-07-24 00:00:00'),
(3, 'EMPLOYEE', '2014-07-24 00:00:00', '2014-07-24 00:00:00'),
(4, 'PARENT', '2014-07-24 00:00:00', '2014-07-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblrolesresources`
--

DROP TABLE IF EXISTS `tblrolesresources`;
CREATE TABLE IF NOT EXISTS `tblrolesresources` (
  `RolesResourcesId` int(11) NOT NULL AUTO_INCREMENT,
  `RoleId` int(11) NOT NULL,
  `ResourceId` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`RolesResourcesId`),
  KEY `RoleId` (`RoleId`),
  KEY `ResourcesId` (`ResourceId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblrolesresources`
--

INSERT INTO `tblrolesresources` (`RolesResourcesId`, `RoleId`, `ResourceId`, `DateCreated`, `DateUpdated`) VALUES
(1, 3, 2, '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(2, 1, 2, '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(3, 1, 1, '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(4, 1, 3, '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(5, 3, 3, '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(6, 1, 4, '2014-07-22 00:00:00', '2014-07-24 00:00:00'),
(7, 3, 4, '2014-07-22 00:00:00', '2014-07-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsection`
--

DROP TABLE IF EXISTS `tblsection`;
CREATE TABLE IF NOT EXISTS `tblsection` (
  `SectionId` int(11) NOT NULL AUTO_INCREMENT,
  `SectionName` varchar(10) DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '1',
  `SortOrder` smallint(6) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`SectionId`),
  UNIQUE KEY `SectionName` (`SectionName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblsection`
--

INSERT INTO `tblsection` (`SectionId`, `SectionName`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 'A', 1, 0, '2014-07-29 12:33:11', NULL),
(2, 'B', 1, 0, '2014-07-29 12:33:16', NULL),
(3, 'C', 1, 0, '2014-07-29 12:33:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

DROP TABLE IF EXISTS `tblstate`;
CREATE TABLE IF NOT EXISTS `tblstate` (
  `StateId` int(11) NOT NULL AUTO_INCREMENT,
  `CountryId` smallint(6) NOT NULL,
  `StateName` varchar(50) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`StateId`),
  KEY `CountryId` (`CountryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`StateId`, `CountryId`, `StateName`, `DateCreated`, `DateUpdated`) VALUES
(1, 1, 'rajasthan', '2014-07-29 05:50:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
CREATE TABLE IF NOT EXISTS `tblstudent` (
  `StudentId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `ScholarNumber` varchar(25) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`StudentId`),
  UNIQUE KEY `UserId_2` (`UserId`),
  KEY `ScholarNum` (`ScholarNumber`),
  KEY `UserId` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentacademichistory`
--

DROP TABLE IF EXISTS `tblstudentacademichistory`;
CREATE TABLE IF NOT EXISTS `tblstudentacademichistory` (
  `StudentAcademicHistoryId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `AcademicSessionId` smallint(6) NOT NULL,
  `InstituteId` smallint(6) DEFAULT NULL,
  `ClassId` smallint(6) DEFAULT NULL,
  `SectionId` smallint(6) DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`StudentAcademicHistoryId`),
  KEY `AcademicSessionID` (`AcademicSessionId`),
  KEY `InstituteID` (`InstituteId`),
  KEY `SectionID` (`SectionId`),
  KEY `StudentID` (`UserId`),
  KEY `UserId` (`UserId`),
  KEY `AcademicSessionId_2` (`AcademicSessionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentdetails`
--

DROP TABLE IF EXISTS `tblstudentdetails`;
CREATE TABLE IF NOT EXISTS `tblstudentdetails` (
  `StudentDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT '0',
  `ClassId` int(11) DEFAULT '0',
  `DOB` datetime DEFAULT NULL,
  `StudentType` smallint(6) DEFAULT '0',
  `Gender` smallint(6) DEFAULT '0',
  `Religion` smallint(6) DEFAULT '0',
  `Category` smallint(6) DEFAULT '0',
  `CurrentAddress1` varchar(255) DEFAULT NULL,
  `CurrentAddress2` varchar(255) DEFAULT NULL,
  `CurrentSuburbId` int(11) DEFAULT '0',
  `CurrentCityId` smallint(6) DEFAULT '0',
  `CurrentZipcode` varchar(6) DEFAULT '0',
  `CurrentStateId` smallint(6) DEFAULT '0',
  `CurrentCountryId` smallint(6) DEFAULT '0',
  `PermaAddress1` varchar(255) DEFAULT NULL,
  `PermaAddress2` varchar(255) DEFAULT NULL,
  `PermaSuburbId` int(11) DEFAULT '0',
  `PermaCityId` smallint(6) DEFAULT '0',
  `PermaStateId` smallint(6) DEFAULT '0',
  `PermaCountryId` smallint(6) DEFAULT '0',
  `PermaZipcode` varchar(6) DEFAULT '0',
  `Mobile` varchar(15) DEFAULT '0',
  `Phone1` varchar(15) DEFAULT '0',
  `Phone2` varchar(15) DEFAULT '0',
  `Fax1` varchar(15) DEFAULT '0',
  `Fax2` varchar(15) DEFAULT '0',
  `Email1` varchar(255) DEFAULT NULL,
  `Email2` varchar(255) DEFAULT NULL,
  `PassportNum` varchar(15) DEFAULT NULL,
  `DateofJoining` datetime DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '1',
  `AdmissionReferencedBy` varchar(100) DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`StudentDetailId`),
  UNIQUE KEY `UserId` (`UserId`),
  KEY `CurrentCityID` (`CurrentCityId`),
  KEY `CurrentCountryID` (`CurrentCountryId`),
  KEY `CurrentPincode` (`CurrentZipcode`),
  KEY `CurrentStateID` (`CurrentStateId`),
  KEY `CurrentSuburbID` (`CurrentSuburbId`),
  KEY `PassportNum` (`PassportNum`),
  KEY `PermaCityID` (`PermaCityId`),
  KEY `PermaCountryID` (`PermaCountryId`),
  KEY `PermaPincode` (`PermaZipcode`),
  KEY `PermaStateID` (`PermaStateId`),
  KEY `PermaSuburbID` (`PermaSuburbId`),
  KEY `ClassID` (`ClassId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentexamcomponentbreakdown`
--

DROP TABLE IF EXISTS `tblstudentexamcomponentbreakdown`;
CREATE TABLE IF NOT EXISTS `tblstudentexamcomponentbreakdown` (
  `tableID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentExamResultID` int(11) DEFAULT '0',
  `SubjectComponentID` int(11) DEFAULT '0',
  `MarkObtained` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`tableID`),
  KEY `StudentExamResultID` (`StudentExamResultID`),
  KEY `SubjectComponentID` (`SubjectComponentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentexamresult`
--

DROP TABLE IF EXISTS `tblstudentexamresult`;
CREATE TABLE IF NOT EXISTS `tblstudentexamresult` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentAcademicID` int(11) DEFAULT '0',
  `ExamID` int(11) DEFAULT '0',
  `SubjectID` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `ExamID` (`ExamID`),
  KEY `SubjectID` (`SubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcomponent`
--

DROP TABLE IF EXISTS `tblsubjectcomponent`;
CREATE TABLE IF NOT EXISTS `tblsubjectcomponent` (
  `SubjectComponentId` int(11) NOT NULL AUTO_INCREMENT,
  `InstituteId` smallint(6) NOT NULL,
  `ComponentName` varchar(255) NOT NULL,
  `ComponentDisplayName` varchar(50) DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '1',
  `SortOrder` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`SubjectComponentId`),
  KEY `InstituteID` (`InstituteId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblsubjectcomponent`
--

INSERT INTO `tblsubjectcomponent` (`SubjectComponentId`, `InstituteId`, `ComponentName`, `ComponentDisplayName`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 3, 'test', 'test', 1, 1, NULL, NULL),
(6, 2, 'test', 'testing4', 1, 2, NULL, NULL),
(7, 5, 'test', 'testing4', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

DROP TABLE IF EXISTS `tblsubjects`;
CREATE TABLE IF NOT EXISTS `tblsubjects` (
  `SubjectId` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(255) DEFAULT NULL,
  `SubjectCode` varchar(255) DEFAULT NULL,
  `InstituteId` smallint(6) NOT NULL,
  `Comments` text,
  `Status` tinyint(3) NOT NULL DEFAULT '1',
  `SortOrder` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`SubjectId`),
  KEY `InstituteID` (`InstituteId`),
  KEY `SubjectCode` (`SubjectCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`SubjectId`, `SubjectName`, `SubjectCode`, `InstituteId`, `Comments`, `Status`, `SortOrder`, `DateCreated`, `DateUpdated`) VALUES
(1, 'Test', '001', 2, 'Testing', 1, 1, NULL, NULL),
(2, 'Computer', '001', 2, 'test', 1, 1, NULL, NULL),
(3, 'Computer', '001', 2, 'test', 1, 1, NULL, NULL),
(4, 'Computer', '001', 2, 'test', 1, 1, NULL, NULL),
(9, 'ENGLISH', 'ENG', 2, 'trest', 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectteacherassociation`
--

DROP TABLE IF EXISTS `tblsubjectteacherassociation`;
CREATE TABLE IF NOT EXISTS `tblsubjectteacherassociation` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) DEFAULT '0',
  `SubjectID` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `EmployeeID` (`EmployeeID`),
  KEY `SubjectID` (`SubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblteacherclassassociation`
--

DROP TABLE IF EXISTS `tblteacherclassassociation`;
CREATE TABLE IF NOT EXISTS `tblteacherclassassociation` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) DEFAULT '0',
  `ClassID` int(11) DEFAULT '0',
  `SectionID` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `EmployeeID` (`EmployeeID`),
  KEY `SectionID` (`SectionID`),
  KEY `ClassID` (`ClassID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RoleId` int(11) NOT NULL DEFAULT '0',
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `UserName` (`UserName`),
  KEY `RolesID` (`RoleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserId`, `UserName`, `Password`, `RoleId`, `DateCreated`, `DateUpdated`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2014-07-25 00:00:00', '2014-07-25 00:00:00'),
(2, 'vivek', '061a01a98f80f415b1431236b62bb10b', 2, '2014-07-22 00:00:00', '2014-07-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserdocument`
--

DROP TABLE IF EXISTS `tbluserdocument`;
CREATE TABLE IF NOT EXISTS `tbluserdocument` (
  `DocumentId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT '0',
  `DocumentType` smallint(6) DEFAULT '0',
  `FileName` varchar(255) DEFAULT NULL,
  `Comments` varchar(255) DEFAULT NULL,
  `Status` tinyint(3) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`DocumentId`),
  KEY `UserID` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserparentassociation`
--

DROP TABLE IF EXISTS `tbluserparentassociation`;
CREATE TABLE IF NOT EXISTS `tbluserparentassociation` (
  `UserParentAssociationId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `ParentId` int(11) NOT NULL,
  `RelationId` smallint(6) NOT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`UserParentAssociationId`),
  KEY `FamilyRelationID` (`ParentId`),
  KEY `StudentID` (`UserId`),
  KEY `RelationID` (`RelationId`),
  KEY `UserId` (`UserId`,`ParentId`,`RelationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserqualification`
--

DROP TABLE IF EXISTS `tbluserqualification`;
CREATE TABLE IF NOT EXISTS `tbluserqualification` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `QualificationOf` int(11) DEFAULT '0',
  `UserID` int(11) DEFAULT '0',
  `Education` int(11) DEFAULT '0',
  `Field` int(11) DEFAULT '0',
  `University` int(11) DEFAULT '0',
  `YearPassed` datetime DEFAULT NULL,
  `Grade` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblannouncements`
--
ALTER TABLE `tblannouncements`
  ADD CONSTRAINT `FK_tblannouncements_tblacademicsession` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblannouncements_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD CONSTRAINT `FK_tblattendance_tblperiodsubjectassociation` FOREIGN KEY (`PeriodSubjectAssociationId`) REFERENCES `tblperiodsubjectassociation` (`PeriodSubjectAssociationId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblbus`
--
ALTER TABLE `tblbus`
  ADD CONSTRAINT `FK_tblbus_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblbusroute`
--
ALTER TABLE `tblbusroute`
  ADD CONSTRAINT `FK_tblbusroute_tblacademicsession` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblbusroute_tblbus` FOREIGN KEY (`BusId`) REFERENCES `tblbus` (`BusId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblbusroute_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblbusroutedetail`
--
ALTER TABLE `tblbusroutedetail`
  ADD CONSTRAINT `FK_tblbusroutedetail_tblbusroute` FOREIGN KEY (`BusRouteId`) REFERENCES `tblbusroute` (`BusRouteId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblbusroutedetail_tblpickuppoint` FOREIGN KEY (`PickupPointId`) REFERENCES `tblpickuppoint` (`PickupPointId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD CONSTRAINT `FK_tblcity_tblstate` FOREIGN KEY (`StateId`) REFERENCES `tblstate` (`StateId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblclassexamassociation`
--
ALTER TABLE `tblclassexamassociation`
  ADD CONSTRAINT `FK_tblclassexamassociation_tblacademicsession` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclassexamassociation_tblclass` FOREIGN KEY (`ClassId`) REFERENCES `tblclass` (`ClassId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclassexamassociation_tblexammaster` FOREIGN KEY (`ExamId`) REFERENCES `tblexammaster` (`ExamId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclassexamassociation_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblclassfeestructure`
--
ALTER TABLE `tblclassfeestructure`
  ADD CONSTRAINT `FK_tblclassfeestructure` FOREIGN KEY (`ClassId`) REFERENCES `tblclass` (`ClassId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclassfeestructure_tblfeecomponentmaster` FOREIGN KEY (`ComponentId`) REFERENCES `tblfeescomponentmaster` (`ComponentId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblclassfeestructuredetails`
--
ALTER TABLE `tblclassfeestructuredetails`
  ADD CONSTRAINT `FK_tblclassfeestructuredetails_tblclassfeestructure` FOREIGN KEY (`ClassFeeStructureId`) REFERENCES `tblclassfeestructure` (`ClassFeeStructureId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblclassschedule`
--
ALTER TABLE `tblclassschedule`
  ADD CONSTRAINT `FK_tblclassschedule` FOREIGN KEY (`ClassSectionAssociationId`) REFERENCES `tblclasssectionassociation` (`ClassSectionAssociationId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblclasssectionassociation`
--
ALTER TABLE `tblclasssectionassociation`
  ADD CONSTRAINT `FK_tblclasssectionassociation` FOREIGN KEY (`InsituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclasssectionassociation_tblacademicsession` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclasssectionassociation_tblclass` FOREIGN KEY (`ClassId`) REFERENCES `tblclass` (`ClassId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclasssectionassociation_tblsection` FOREIGN KEY (`SectionId`) REFERENCES `tblsection` (`SectionId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblclasssectionexamassociation`
--
ALTER TABLE `tblclasssectionexamassociation`
  ADD CONSTRAINT `FK_tblclasssectionexamassociation_tblclassexamassociation` FOREIGN KEY (`ClassExamAssociationId`) REFERENCES `tblclassexamassociation` (`ClassExamAssociationId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclasssectionexamassociation_tblsection` FOREIGN KEY (`SectionId`) REFERENCES `tblsection` (`SectionId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblclasssubjectassociation`
--
ALTER TABLE `tblclasssubjectassociation`
  ADD CONSTRAINT `FK_tblclasssubjectassociation_tblacademicsession` FOREIGN KEY (`AcademiSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclasssubjectassociation_tblclass` FOREIGN KEY (`ClassId`) REFERENCES `tblclass` (`ClassId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclasssubjectassociation_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblclasssubjectassociation_tblsubject` FOREIGN KEY (`SubjectId`) REFERENCES `tblsubjects` (`SubjectId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD CONSTRAINT `FK_tblemployee_tblemployeedetails` FOREIGN KEY (`UserId`) REFERENCES `tblemployeedetails` (`UserId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblemployee_tbluser` FOREIGN KEY (`UserId`) REFERENCES `tbluser` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblemployeedetails`
--
ALTER TABLE `tblemployeedetails`
  ADD CONSTRAINT `FK_tblemployeedetails_tblparent` FOREIGN KEY (`UserId`) REFERENCES `tblemployee` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblexamgrademaster`
--
ALTER TABLE `tblexamgrademaster`
  ADD CONSTRAINT `FK_tblexamgrademaster_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblexammaster`
--
ALTER TABLE `tblexammaster`
  ADD CONSTRAINT `FK_tblexammaster_tblacademicsession` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblexammaster_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblexamstructure`
--
ALTER TABLE `tblexamstructure`
  ADD CONSTRAINT `FK_tblexamstructure_tblclasssubjectassociation` FOREIGN KEY (`SubjectId`) REFERENCES `tblclasssubjectassociation` (`SubjectId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblexamstructure_tblexamstructure` FOREIGN KEY (`ClassSectionExamAssociationId`) REFERENCES `tblclasssectionexamassociation` (`ClassSectionExamAssociationId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblfeeothercharges`
--
ALTER TABLE `tblfeeothercharges`
  ADD CONSTRAINT `Fk_tblfeeothercharges_tblacademicsession` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_tblfeeothercharges_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblfeeotherchargesdetails`
--
ALTER TABLE `tblfeeotherchargesdetails`
  ADD CONSTRAINT `FK_tblfeeotherchargesdetails_tblfeeothercharges` FOREIGN KEY (`FeeOtherChargesId`) REFERENCES `tblfeeothercharges` (`FeeOtherChargesId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblfeescomponentmaster`
--
ALTER TABLE `tblfeescomponentmaster`
  ADD CONSTRAINT `FK_tblfeescomponentmaster_tblacademicsession` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblfeescomponentmaster_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblgradecard`
--
ALTER TABLE `tblgradecard`
  ADD CONSTRAINT `FK_tblgradecard_tblexamstructure` FOREIGN KEY (`ExamStructureId`) REFERENCES `tblexamstructure` (`ExamStructureId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblgradecard_tblstudentacademichistory` FOREIGN KEY (`StudentAcademicHistoryId`) REFERENCES `tblstudentacademichistory` (`StudentAcademicHistoryId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblmastercollection`
--
ALTER TABLE `tblmastercollection`
  ADD CONSTRAINT `FK_tblmastercollection_tblmastercollectiontype` FOREIGN KEY (`MasterCollectionTypeId`) REFERENCES `tblmastercollectiontype` (`MasterCollectionTypeId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblmedicalinfo`
--
ALTER TABLE `tblmedicalinfo`
  ADD CONSTRAINT `FK_tblmedicalinfo_tbluser` FOREIGN KEY (`UserId`) REFERENCES `tbluser` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblperiodsubjectassociation`
--
ALTER TABLE `tblperiodsubjectassociation`
  ADD CONSTRAINT `FK_tblperiodsubjectassociation_tblclassschedule` FOREIGN KEY (`ClassScheduleId`) REFERENCES `tblclassschedule` (`ClassScheduleId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblperiodsubjectassociation_tblemployee` FOREIGN KEY (`UserId`) REFERENCES `tblemployee` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblpickuppoint`
--
ALTER TABLE `tblpickuppoint`
  ADD CONSTRAINT `FK_tblpickuppoint_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblrolesresources`
--
ALTER TABLE `tblrolesresources`
  ADD CONSTRAINT `FK_tblrolesresources_tblresources` FOREIGN KEY (`ResourceId`) REFERENCES `tblresources` (`ResourceId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblrolesresources_tblroles` FOREIGN KEY (`RoleId`) REFERENCES `tblroles` (`RoleId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD CONSTRAINT `FK_tblstate_tblcountry` FOREIGN KEY (`CountryId`) REFERENCES `tblcountry` (`CountryId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD CONSTRAINT `FK_tblstudent_tbluser` FOREIGN KEY (`UserId`) REFERENCES `tbluser` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblstudentacademichistory`
--
ALTER TABLE `tblstudentacademichistory`
  ADD CONSTRAINT `FK_tblstudentacademichistory` FOREIGN KEY (`AcademicSessionId`) REFERENCES `tblacademicsession` (`AcademicSessionId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblstudentacademichistory_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblstudentacademichistory_tblstudent` FOREIGN KEY (`UserId`) REFERENCES `tblstudent` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblstudentdetails`
--
ALTER TABLE `tblstudentdetails`
  ADD CONSTRAINT `FK_tblstudentdetails_tblstudent` FOREIGN KEY (`UserId`) REFERENCES `tblstudent` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblsubjectcomponent`
--
ALTER TABLE `tblsubjectcomponent`
  ADD CONSTRAINT `FK_tblsubjectcomponent_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD CONSTRAINT `FK_tblsubjects_tblinstitute` FOREIGN KEY (`InstituteId`) REFERENCES `tblinstitute` (`InstituteId`) ON UPDATE CASCADE;

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `FK_tbluser_tblroles` FOREIGN KEY (`RoleId`) REFERENCES `tblroles` (`RoleId`) ON UPDATE CASCADE;

--
-- Constraints for table `tbluserdocument`
--
ALTER TABLE `tbluserdocument`
  ADD CONSTRAINT `FK_tbluserdocument_tbluser` FOREIGN KEY (`UserId`) REFERENCES `tbluser` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `tbluserparentassociation`
--
ALTER TABLE `tbluserparentassociation`
  ADD CONSTRAINT `FK_tbluserparentassociation_tblparent` FOREIGN KEY (`ParentId`) REFERENCES `tblparent` (`ParentId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tbluserparentassociation_tbluser` FOREIGN KEY (`UserId`) REFERENCES `tbluser` (`UserId`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
