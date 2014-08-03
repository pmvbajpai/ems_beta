-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2014 at 10:29 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `InstituteID` int(11) DEFAULT '0',
  `AcademicSessionID` int(11) DEFAULT '0',
  `OtherComponentName` varchar(255) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `SortOrder` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `AcademicSessionID` (`AcademicSessionID`),
  KEY `InstituteID` (`InstituteID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblfeeotherchargesdetials`
--

DROP TABLE IF EXISTS `tblfeeotherchargesdetials`;
CREATE TABLE IF NOT EXISTS `tblfeeotherchargesdetials` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `OtherComponentID` int(11) DEFAULT '0',
  `ClassID` int(11) DEFAULT '0',
  `AmountType` varchar(255) DEFAULT NULL,
  `Period` int(11) NOT NULL,
  `Charges` int(11) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`TableID`),
  KEY `ClassID` (`ClassID`),
  KEY `OtherComponentID` (`OtherComponentID`)
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `InstituteName` varchar(255) DEFAULT NULL,
  `InstituteLogo` varchar(255) DEFAULT NULL,
  `InstituteAddress1` varchar(255) DEFAULT NULL,
  `InstituteAddress2` varchar(255) DEFAULT NULL,
  `InstituteZipCode` varchar(6) DEFAULT '0',
  `InstituteCityId` smallint(6) DEFAULT '0',
  `InstituteStateId` smallint(6) DEFAULT '0',
  `InstituteCountryId` smallint(6) DEFAULT '0',
  `InstitutePhone1` varchar(15) DEFAULT '0',
  `InstitutePhone2` varchar(15) DEFAULT '0',
  `InsituteFax1` varchar(15) DEFAULT '0',
  `InstituteFax2` varchar(15) DEFAULT '0',
  `InstituteEmail1` varchar(255) DEFAULT NULL,
  `InstituteEmail2` varchar(255) DEFAULT NULL,
  `InsituteWebUrl` varchar(255) DEFAULT NULL,
  `InstituteDescription` blob,
  `InstituteAccreditionId` varchar(50) DEFAULT '0',
  `DateCreated` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`InstituteId`),
  KEY `InstituteCountryID` (`InstituteCountryId`),
  KEY `InstituteStateID` (`InstituteStateId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Constraints for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD CONSTRAINT `FK_tblattendance_tblperiodsubjectassociation` FOREIGN KEY (`PeriodSubjectAssociationId`) REFERENCES `tblperiodsubjectassociation` (`PeriodSubjectAssociationId`) ON UPDATE CASCADE;

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
-- Constraints for table `tblrolesresources`
--
ALTER TABLE `tblrolesresources`
  ADD CONSTRAINT `FK_tblrolesresources_tblresources` FOREIGN KEY (`ResourceId`) REFERENCES `tblresources` (`ResourceId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblrolesresources_tblroles` FOREIGN KEY (`RoleId`) REFERENCES `tblroles` (`RoleId`) ON UPDATE CASCADE;

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
