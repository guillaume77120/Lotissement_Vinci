-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2022 at 01:28 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_premium`
--

-- --------------------------------------------------------

--
-- Table structure for table `complementaircraftrates_i`
--

CREATE TABLE `complementaircraftrates_i` (
  `Id` char(40) NOT NULL,
  `CodeZone` char(1) NOT NULL,
  `Tarif_HT` char(6) NOT NULL,
  `SeuilDeclenchement` char(5) NOT NULL,
  `TrancheSurtaxe` char(5) NOT NULL,
  `DateDebutValidite` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complementaircraftrates_i`
--

INSERT INTO `complementaircraftrates_i` (`Id`, `CodeZone`, `Tarif_HT`, `SeuilDeclenchement`, `TrancheSurtaxe`, `DateDebutValidite`) VALUES
('G2', '1', '0.05', '20', '10', '2020-06-22'),
('G2', '2', '0.11', '20', '10', '2020-06-22'),
('G4', '1', '0.02', '20', '10', '2020-06-22'),
('G4', '2', '0.05', '20', '10', '2020-06-22'),
('I1', '1', '0.05', '20', '10', '2021-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `idmembre` int(11) NOT NULL,
  `mdp` text NOT NULL,
  `login` varchar(255) NOT NULL,
  `Connection` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`idmembre`, `mdp`, `login`, `Connection`) VALUES
(1, '202cb962ac59075b964b07152d234b70', 'admin', 0),
(2, '098f6bcd4621d373cade4e832627b4f6', 'User1', 0),
(3, 'a09bccf2b2963982b34dc0e08d8b582a', 'User2', 0),
(4, 'e5d2ad241ec44cf155bc78ae8d11f715', 'User3', 0),
(5, '5ad55d96abf0e50647d6de116530d6df', 'User4', 0),
(6, '50c22602b70659dde2893f3a2ba0ab82', 'User5', 0),
(7, '10ddead5bb8bcfaa4d62090acd7cdfb2', 'User6', 0),
(8, '98cd5d17f0660baca7d652995f0d17b6', 'User7', 0),
(9, 'd306313ac03787c5f5f41641773bfb9a', 'user8', 0),
(10, '2a19bc085beedfd33873400cb9249e4f', 'user9', 0),
(11, '31b083bc7281321ea98d3c1bc9701627', 'User10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zonescomplementaircraft_i`
--

CREATE TABLE `zonescomplementaircraft_i` (
  `CodeZoneDepart` char(2) NOT NULL,
  `CodeZoneArrivee` char(2) NOT NULL,
  `CodeZoneSurtaxe` char(2) NOT NULL,
  `Libelle` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonescomplementaircraft_i`
--

INSERT INTO `zonescomplementaircraft_i` (`CodeZoneDepart`, `CodeZoneArrivee`, `CodeZoneSurtaxe`, `Libelle`) VALUES
('1', '10', '2', 'ZONE 2'),
('1', '11', '2', 'ZONE 2'),
('1', '12', '1', 'ZONE 1'),
('1', '13', '1', 'ZONE 1'),
('1', '2', '1', 'ZONE 1'),
('1', '3', '1', 'ZONE 1'),
('1', '4', '1', 'ZONE 1'),
('1', '5', '1', 'ZONE 1'),
('1', '6', '1', 'ZONE 1'),
('1', '7', '1', 'ZONE 1'),
('1', '8', '2', 'ZONE 2'),
('1', '9', '2', 'ZONE 2');

-- --------------------------------------------------------

--
-- Table structure for table `zones_i`
--

CREATE TABLE `zones_i` (
  `BorneMin` char(9) NOT NULL,
  `BorneMax` char(9) NOT NULL,
  `Code` int(10) UNSIGNED NOT NULL,
  `Libelle` char(20) NOT NULL,
  `DateDebutValidite` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones_i`
--

INSERT INTO `zones_i` (`BorneMin`, `BorneMax`, `Code`, `Libelle`, `DateDebutValidite`) VALUES
('00001', '95999', 1, 'METROPOLE', '2010-07-01'),
('97001', '97132', 2, 'GUADELOUPE', '2010-07-01'),
('97133', '97133', 13, 'SAINT BARTHELEMY', '2010-07-01'),
('97134', '97149', 2, 'GUADELOUPE', '2010-07-01'),
('97150', '97150', 12, 'SAINT MARTIN', '2010-07-01'),
('97151', '97199', 2, 'GUADELOUPE', '2010-07-01'),
('97200', '97299', 3, 'MARTINIQUE', '2010-07-01'),
('97300', '97399', 4, 'GUYANE', '2010-07-01'),
('97400', '97499', 5, 'REUNION', '2010-07-01'),
('97500', '97500', 6, 'ST PIERRE & M.', '2010-07-01'),
('97600', '97699', 7, 'MAYOTTE', '2010-07-01'),
('97701', '97899', 5, 'REUNION', '2010-07-01'),
('98000', '98099', 1, 'METROPOLE', '2010-07-01'),
('98400', '98499', 8, 'TAAF', '2010-07-01'),
('98600', '98699', 9, 'WALLIS & FUTUNA', '2010-07-01'),
('98700', '98799', 10, 'POLYNESIE FRANCAISE', '2010-07-01'),
('98800', '98899', 11, 'NOUVELLE CALEDONIE', '2010-07-01'),
('AD100', 'AD100', 1, 'METROPOLE', '2010-07-01'),
('AD200', 'AD200', 1, 'METROPOLE', '2010-07-01'),
('AD300', 'AD300', 1, 'METROPOLE', '2010-07-01'),
('AD400', 'AD400', 1, 'METROPOLE', '2010-07-01'),
('AD500', 'AD500', 1, 'METROPOLE', '2010-07-01'),
('AD600', 'AD600', 1, 'METROPOLE', '2010-07-01'),
('AD700', 'AD700', 1, 'METROPOLE', '2010-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `_annonces`
--

CREATE TABLE `_annonces` (
  `ID` int(11) NOT NULL,
  `NomFichierAnnonce` char(255) NOT NULL DEFAULT '',
  `NumSequenceAnnonce` int(11) DEFAULT '0',
  `TypeAnnonce` int(11) DEFAULT '0',
  `DateAnnonce` char(30) NOT NULL DEFAULT '',
  `DateRetour` char(30) NOT NULL DEFAULT '',
  `StatutRetour` int(11) DEFAULT '0',
  `CodeCampagne` char(20) NOT NULL DEFAULT '',
  `NumDepot` char(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_annonces`
--

INSERT INTO `_annonces` (`ID`, `NomFichierAnnonce`, `NumSequenceAnnonce`, `TypeAnnonce`, `DateAnnonce`, `DateRetour`, `StatutRetour`, `CodeCampagne`, `NumDepot`) VALUES
(1, 'AP_CNA_99999999_20210510_000001.json', 1, 0, '10/05/2021', '', 0, '000001_99999999', '');

-- --------------------------------------------------------

--
-- Table structure for table `_infoadrretour`
--

CREATE TABLE `_infoadrretour` (
  `ID` int(11) NOT NULL,
  `Libelle` char(80) NOT NULL DEFAULT '',
  `AdrRetourL1` char(40) NOT NULL DEFAULT '',
  `AdrRetourL2` char(40) NOT NULL DEFAULT '',
  `AdrRetourL3` char(40) NOT NULL DEFAULT '',
  `AdrRetourL4` char(40) NOT NULL DEFAULT '',
  `AdrRetourL5` char(40) NOT NULL DEFAULT '',
  `AdrRetourL6` char(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_infobosco`
--

CREATE TABLE `_infobosco` (
  `COCLICO` char(11) NOT NULL,
  `CodeBosco` char(3) NOT NULL DEFAULT '',
  `Nom` char(38) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_infocampagne`
--

CREATE TABLE `_infocampagne` (
  `NumCampagne` char(6) NOT NULL,
  `CodeCampagne` char(20) NOT NULL,
  `DateDepot` char(10) NOT NULL DEFAULT '',
  `LibelleCampagne` char(50) NOT NULL DEFAULT '',
  `CoclicoLotisseur` char(10) NOT NULL DEFAULT '',
  `CoclicoDeposant` char(10) NOT NULL DEFAULT '',
  `CleReferentiel` char(1) NOT NULL DEFAULT '',
  `CodeProduit` char(40) NOT NULL DEFAULT '',
  `CodeFormat` char(40) NOT NULL DEFAULT '',
  `CodeContenant` char(40) NOT NULL DEFAULT '',
  `NbPlis` int(11) DEFAULT '0',
  `NbContenants` int(11) DEFAULT '0',
  `NbLots` int(11) DEFAULT '0',
  `StatutCampagne` int(11) DEFAULT '0',
  `ModeSuiviPli` int(11) DEFAULT '0',
  `NbPlisDD` int(11) DEFAULT '0',
  `NbPlisTF` int(11) DEFAULT '0',
  `MontantAffDD` char(15) DEFAULT '',
  `MontantAffTF` char(15) DEFAULT '',
  `MontantAffTotal` char(15) DEFAULT '',
  `ProduitOrigine` char(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_infocampagne`
--

INSERT INTO `_infocampagne` (`NumCampagne`, `CodeCampagne`, `DateDepot`, `LibelleCampagne`, `CoclicoLotisseur`, `CoclicoDeposant`, `CleReferentiel`, `CodeProduit`, `CodeFormat`, `CodeContenant`, `NbPlis`, `NbContenants`, `NbLots`, `StatutCampagne`, `ModeSuiviPli`, `NbPlisDD`, `NbPlisTF`, `MontantAffDD`, `MontantAffTF`, `MontantAffTotal`, `ProduitOrigine`) VALUES
('000001', '000001_99999999', '11/05/2021', 'CAMPAGNE 000001', '99999999', '99999999', 'I', 'G2', 'PL', 'KE7', 39774, 303, 90, 0, 0, 38625, 1149, '27518.61', '865.35', '28383.96', 'G2'),
('000002', '000002_99999999', '11/05/2021', 'CAMPAGNE 000001', '99999999', '99999999', 'I', 'G2', 'PL', 'KE7', 39774, 303, 90, 0, 0, 38625, 1149, '27518.61', '865.35', '28383.96', 'G2'),
('000003', '000003_99999999', '12/05/2021', 'CAMPAGNE 000003', '99999999', '99999999', 'I', 'G2', 'PL', 'KE7', 79548, 605, 101, 0, 0, 78968, 580, '87849.06', '669.30', '88518.36', 'G2'),
('000005', '000005_99999999', '12/05/2021', 'CAMPAGNE 000005', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 2000, 81, 4, 0, 0, 679, 1321, '349.01', '742.40', '1091.41', 'G4'),
('000006', '000006_99999999', '12/05/2021', 'CAMPAGNE 000368', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 35860, 1436, 51, 0, 0, 27391, 8469, '14078.97', '4759.58', '18838.55', 'G4'),
('000007', '000007_99999999', '12/05/2021', 'CAMPAGNE 000368', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 35860, 1436, 51, 0, 0, 27391, 8469, '14078.97', '4759.58', '18838.55', 'G4'),
('000008', '000008_99999999', '12/05/2021', 'CAMPAGNE 000008', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 2000, 81, 4, 0, 0, 679, 1321, '349.01', '742.40', '1091.41', 'G4'),
('000009', '000009_99999999', '12/05/2021', 'CAMPAGNE 000368', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 35860, 1436, 51, 0, 0, 27391, 8469, '14078.97', '4759.58', '18838.55', 'G4'),
('000010', '000010_99999999', '12/05/2021', 'CAMPAGNE 000368', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 35860, 1436, 51, 0, 0, 27391, 8469, '14078.97', '4759.58', '18838.55', 'G4'),
('000011', '000011_99999999', '12/05/2021', 'CAMPAGNE 000011', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 99999, 4000, 94, 0, 0, 97890, 2109, '50315.46', '1185.26', '51500.72', 'G4'),
('000012', '000012_99999999', '12/05/2021', 'CAMPAGNE 000012', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 99999, 4000, 94, 0, 0, 97890, 2109, '50315.46', '1185.26', '51500.72', 'G4'),
('000013', '000013_99999999', '12/05/2021', 'CAMPAGNE 000368', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 35860, 1436, 51, 0, 0, 27391, 8469, '14078.97', '4759.58', '18838.55', 'G4'),
('000014', '000014_99999999', '12/05/2021', 'CAMPAGNE 000014', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 2000, 81, 4, 0, 0, 679, 1321, '349.01', '742.40', '1091.41', 'G4'),
('000015', '000015_99999999', '12/05/2021', 'CAMPAGNE 000015', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 2000, 81, 4, 0, 0, 679, 1321, '349.01', '742.40', '1091.41', 'G4'),
('000016', '000016_99999999', '12/05/2021', 'CAMPAGNE 000368', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 35860, 1436, 51, 0, 0, 27391, 8469, '14078.97', '4759.58', '18838.55', 'G4'),
('000017', '000017_99999999', '12/05/2021', 'CAMPAGNE 000017', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 99999, 4000, 94, 0, 0, 97890, 2109, '50315.46', '1185.26', '51500.72', 'G4'),
('000018', '000018_99999999', '02/06/2021', 'essai 1', '99999999', '99999999', 'I', 'G4', 'PL', 'KE7', 39797, 1592, 90, 0, 0, 38643, 1154, '21702.35', '716.56', '22418.91', 'G4');

-- --------------------------------------------------------

--
-- Table structure for table `_infoclient`
--

CREATE TABLE `_infoclient` (
  `ID` int(11) NOT NULL,
  `RaisonSociale` char(32) NOT NULL DEFAULT '',
  `SIRET` char(20) NOT NULL DEFAULT '',
  `PossedeContrat` char(1) NOT NULL,
  `Adr2` char(40) NOT NULL DEFAULT '',
  `Adr3` char(40) NOT NULL DEFAULT '',
  `Adr4` char(40) NOT NULL DEFAULT '',
  `Adr5` char(40) NOT NULL DEFAULT '',
  `CP` char(6) NOT NULL DEFAULT '',
  `Commune` char(40) NOT NULL DEFAULT '',
  `NumContrat` char(30) NOT NULL DEFAULT '',
  `COCLICO` char(11) NOT NULL,
  `CodeBosco` char(3) NOT NULL DEFAULT '',
  `CodeAdresse` char(26) NOT NULL DEFAULT '',
  `TypeCodeAdresse` char(15) NOT NULL DEFAULT '',
  `NumContratPrestation` char(30) NOT NULL DEFAULT '',
  `Sous client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_infoclient`
--

INSERT INTO `_infoclient` (`ID`, `RaisonSociale`, `SIRET`, `PossedeContrat`, `Adr2`, `Adr3`, `Adr4`, `Adr5`, `CP`, `Commune`, `NumContrat`, `COCLICO`, `CodeBosco`, `CodeAdresse`, `TypeCodeAdresse`, `NumContratPrestation`, `Sous client`) VALUES
(1, 'DEMO', '', '1', '', '', 'XXX', '', '77000', 'CCCC', 'D999999', '99999999', '666', 'WWWW', 'wwww', '', 0),
(2, 'DEMOSC', '', '1', '', '', 'XXX', '', '77000', 'CCCC', 'D999990', '99999990', '666', 'WWWW', 'wwww', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_infocompteurs`
--

CREATE TABLE `_infocompteurs` (
  `NumCampagne` char(6) NOT NULL,
  `NumDepot` char(6) NOT NULL,
  `NumEtiquette` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_infocompteurs`
--

INSERT INTO `_infocompteurs` (`NumCampagne`, `NumDepot`, `NumEtiquette`) VALUES
('000019', '000001', '000001');

-- --------------------------------------------------------

--
-- Table structure for table `_infodeposant`
--

CREATE TABLE `_infodeposant` (
  `ID` int(11) NOT NULL,
  `LibelleDeposant` char(20) NOT NULL,
  `COCLICO` char(8) NOT NULL,
  `CodePointFabrication` char(6) NOT NULL,
  `ClePIC_prio` char(6) NOT NULL,
  `ClePIC_eco` char(6) NOT NULL,
  `CodeS3C` char(6) NOT NULL,
  `CP` char(10) NOT NULL,
  `PlageSD_Debut` bigint(20) NOT NULL DEFAULT '1',
  `PlageSD_Fin` bigint(20) DEFAULT '1',
  `PlageSD_Actuel` bigint(20) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_infodeposant`
--

INSERT INTO `_infodeposant` (`ID`, `LibelleDeposant`, `COCLICO`, `CodePointFabrication`, `ClePIC_prio`, `ClePIC_eco`, `CodeS3C`, `CP`, `PlageSD_Debut`, `PlageSD_Fin`, `PlageSD_Actuel`) VALUES
(1, 'DEMO', '99999999', '999999', '060', '060', '999999', '77000', 1, 100000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `_infodepot`
--

CREATE TABLE `_infodepot` (
  `ID` int(11) NOT NULL,
  `NumDepot` char(6) NOT NULL,
  `NumCampagne` char(6) NOT NULL,
  `CodeCampagne` char(20) NOT NULL,
  `DateDepot` char(12) NOT NULL DEFAULT '',
  `IdDepot` char(30) NOT NULL DEFAULT '',
  `Statut` char(1) NOT NULL,
  `CodeStatutPoste` char(4) NOT NULL,
  `DateHeureCloture` datetime DEFAULT NULL,
  `NbPlis` int(11) DEFAULT NULL,
  `NbContenant` int(11) DEFAULT NULL,
  `PoidsKg` char(10) NOT NULL,
  `NbDD` int(11) DEFAULT NULL,
  `NbTF` int(11) DEFAULT NULL,
  `TarifDD` char(10) NOT NULL,
  `TarifTF` char(10) NOT NULL,
  `TarifTotal` char(10) NOT NULL,
  `CodeProduit` char(40) NOT NULL DEFAULT '',
  `CodeFormat` char(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_infohorodatage`
--

CREATE TABLE `_infohorodatage` (
  `Id` int(10) UNSIGNED NOT NULL,
  `HeureGestionPoste` varchar(45) NOT NULL,
  `HeureSuperviseur` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_infohorodatage`
--

INSERT INTO `_infohorodatage` (`Id`, `HeureGestionPoste`, `HeureSuperviseur`) VALUES
(1, '2021-05-10 15:37:17', '2021-05-10 15:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `_infoimprimantemarquage`
--

CREATE TABLE `_infoimprimantemarquage` (
  `ID` int(11) NOT NULL,
  `LibelleImprimante` char(80) NOT NULL DEFAULT '',
  `TypeConnection` int(11) DEFAULT NULL,
  `TypeImprimante` int(11) DEFAULT NULL,
  `IP` char(80) NOT NULL DEFAULT '',
  `Port` int(11) DEFAULT NULL,
  `Com` int(11) DEFAULT NULL,
  `Bauds` int(11) DEFAULT NULL,
  `User` char(80) NOT NULL DEFAULT '',
  `Password` char(80) NOT NULL DEFAULT '',
  `NomMasque` char(80) NOT NULL DEFAULT '',
  `ObjetProduit` char(40) NOT NULL DEFAULT '',
  `ObjetPoste` char(40) NOT NULL DEFAULT '',
  `ObjetDateDepot` char(40) NOT NULL DEFAULT '',
  `ObjetAdrRetourL1` char(40) NOT NULL DEFAULT '',
  `ObjetAdrRetourL2` char(40) NOT NULL DEFAULT '',
  `ObjetAdrRetourL3` char(40) NOT NULL DEFAULT '',
  `ObjetAdrRetourL4` char(40) NOT NULL DEFAULT '',
  `ObjetAdrRetourL5` char(40) NOT NULL DEFAULT '',
  `ObjetAdrRetourL6` char(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_infointerchange`
--

CREATE TABLE `_infointerchange` (
  `ID` int(11) NOT NULL,
  `ModeTest` int(11) NOT NULL,
  `IdEmetteur` char(20) NOT NULL,
  `IdEmetteurTest` char(20) NOT NULL,
  `ParamFlux` char(20) NOT NULL,
  `NumSequence` int(11) NOT NULL,
  `NumSequenceTest` int(11) NOT NULL,
  `AdresseFTP` char(40) NOT NULL,
  `PortFTP` int(11) NOT NULL,
  `ID_FTP` char(40) NOT NULL,
  `PasswordFTP` char(40) NOT NULL,
  `ModeTransfert` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_infointerchange`
--

INSERT INTO `_infointerchange` (`ID`, `ModeTest`, `IdEmetteur`, `IdEmetteurTest`, `ParamFlux`, `NumSequence`, `NumSequenceTest`, `AdresseFTP`, `PortFTP`, `ID_FTP`, `PasswordFTP`, `ModeTransfert`) VALUES
(1, 1, '11111', '111111', '1111', 0, 1, 'ftp.bip.laposte.fr', 22022, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_infojourferie`
--

CREATE TABLE `_infojourferie` (
  `Date` char(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_infojournal`
--

CREATE TABLE `_infojournal` (
  `ID` int(11) NOT NULL,
  `Date` char(32) NOT NULL DEFAULT '',
  `Action` varchar(256) NOT NULL DEFAULT '',
  `Info` varchar(256) NOT NULL DEFAULT '',
  `Info2` varchar(256) NOT NULL DEFAULT '',
  `Info3` varchar(256) NOT NULL DEFAULT '',
  `Statut` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_info_serial`
--

CREATE TABLE `_info_serial` (
  `Serial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_info_serial`
--

INSERT INTO `_info_serial` (`Serial`) VALUES
('286905981908B124EC90C063610A3C98C59F43544CE41A6473E5D2B067C9C222CF67A874A6929F63D394F21A94C17BC5918F35444FA79567EAB7BC6103833D66D776C2FBD61BA27EF0655DA3ACC277C7');

-- --------------------------------------------------------

--
-- Table structure for table `_postetracabiliteplis`
--

CREATE TABLE `_postetracabiliteplis` (
  `ID` int(11) NOT NULL,
  `ID_SmartData` char(14) NOT NULL DEFAULT '',
  `Depot` char(6) NOT NULL DEFAULT '',
  `Campagne` char(16) NOT NULL DEFAULT '',
  `Coclico` char(8) NOT NULL DEFAULT '',
  `Bosco` char(3) NOT NULL DEFAULT '',
  `CompInfo1` varchar(40) NOT NULL DEFAULT '',
  `DateEvent` char(29) NOT NULL DEFAULT '',
  `CodeEvent` varchar(40) NOT NULL DEFAULT '',
  `DescriptionEvent` varchar(200) NOT NULL DEFAULT '',
  `DateDepot` char(8) NOT NULL DEFAULT '',
  `CodeProduit` char(40) NOT NULL DEFAULT '',
  `CodeFormat` char(40) NOT NULL DEFAULT '',
  `TarifPli` char(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_profil_lotissement`
--

CREATE TABLE `_profil_lotissement` (
  `Id` int(10) UNSIGNED NOT NULL,
  `NomClient` varchar(100) NOT NULL,
  `LibelleProfil` varchar(200) NOT NULL,
  `NomFicParam` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_referentiel`
--

CREATE TABLE `_referentiel` (
  `NomTable` char(40) NOT NULL,
  `CleReferentiel` char(2) NOT NULL,
  `DateDebutValidite` char(8) NOT NULL,
  `DateFinValidite` char(8) NOT NULL,
  `CodeAppli` char(1) NOT NULL,
  `DateCreation` char(10) NOT NULL,
  `NbLignes` int(11) NOT NULL,
  `DateImportation` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_referentiel`
--

INSERT INTO `_referentiel` (`NomTable`, `CleReferentiel`, `DateDebutValidite`, `DateFinValidite`, `CodeAppli`, `DateCreation`, `NbLignes`, `DateImportation`) VALUES
('combinations_I', 'I', '20210315', '20210606', '1', '20210315', 18, '2021-05-10 15:42:14'),
('complementAircraftRates_I', 'I', '20210315', '20210606', '1', '20210315', 5, '2021-05-10 15:42:14'),
('containers_I', 'I', '20210315', '20210606', '1', '20210315', 2, '2021-05-10 15:42:14'),
('destinations_I', 'I', '20210315', '20210606', '1', '20210315', 354, '2021-05-10 15:42:14'),
('formats_I', 'I', '20210315', '20210606', '1', '20210315', 4, '2021-05-10 15:42:15'),
('labelsContainer_I', 'I', '20210315', '20210606', '1', '20210315', 131, '2021-05-10 15:42:15'),
('postageRates_I', 'I', '20210315', '20210606', '1', '20210315', 3120, '2021-05-10 15:42:15'),
('processingSites_I', 'I', '20210315', '20210606', '1', '20210315', 35, '2021-05-10 15:42:16'),
('products_v17_I', 'I', '20210315', '20210606', '1', '20210315', 24, '2021-05-10 15:42:16'),
('reasons_I', 'I', '20210315', '20210606', '1', '20210315', 38, '2021-05-10 15:42:16'),
('status_I', 'I', '20210315', '20210606', '1', '20210315', 22, '2021-05-10 15:42:17'),
('translation_I', 'I', '20210315', '20210606', '1', '20210315', 90828, '2021-05-10 15:42:18'),
('weightCategories_I', 'I', '20210315', '20210606', '1', '20210315', 8, '2021-05-10 15:42:18'),
('zonesComplementAircraft_I', 'I', '20210315', '20210606', '1', '20210315', 12, '2021-05-10 15:42:18'),
('zones_I', 'I', '20210315', '20210606', '1', '20210315', 24, '2021-05-10 15:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `_version`
--

CREATE TABLE `_version` (
  `Outil` char(40) NOT NULL,
  `Version` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_version`
--

INSERT INTO `_version` (`Outil`, `Version`) VALUES
('Database', '1.0'),
('Lotissement', '1.0.4');

-- --------------------------------------------------------

--
-- Table structure for table `__update`
--

CREATE TABLE `__update` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Soft` char(80) NOT NULL DEFAULT '0',
  `Version` char(80) NOT NULL DEFAULT '0',
  `Data` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complementaircraftrates_i`
--
ALTER TABLE `complementaircraftrates_i`
  ADD PRIMARY KEY (`Id`,`CodeZone`,`DateDebutValidite`);

--
-- Indexes for table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idmembre`);

--
-- Indexes for table `zonescomplementaircraft_i`
--
ALTER TABLE `zonescomplementaircraft_i`
  ADD PRIMARY KEY (`CodeZoneDepart`,`CodeZoneArrivee`);

--
-- Indexes for table `zones_i`
--
ALTER TABLE `zones_i`
  ADD PRIMARY KEY (`BorneMin`,`BorneMax`,`DateDebutValidite`);

--
-- Indexes for table `_annonces`
--
ALTER TABLE `_annonces`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Idx` (`NomFichierAnnonce`);

--
-- Indexes for table `_infoadrretour`
--
ALTER TABLE `_infoadrretour`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `_infobosco`
--
ALTER TABLE `_infobosco`
  ADD PRIMARY KEY (`COCLICO`,`CodeBosco`);

--
-- Indexes for table `_infocampagne`
--
ALTER TABLE `_infocampagne`
  ADD PRIMARY KEY (`CodeCampagne`);

--
-- Indexes for table `_infoclient`
--
ALTER TABLE `_infoclient`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Index_2` (`COCLICO`,`SIRET`);

--
-- Indexes for table `_infocompteurs`
--
ALTER TABLE `_infocompteurs`
  ADD PRIMARY KEY (`NumDepot`);

--
-- Indexes for table `_infodeposant`
--
ALTER TABLE `_infodeposant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `_infodepot`
--
ALTER TABLE `_infodepot`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `_infohorodatage`
--
ALTER TABLE `_infohorodatage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `_infoimprimantemarquage`
--
ALTER TABLE `_infoimprimantemarquage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `_infointerchange`
--
ALTER TABLE `_infointerchange`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `_infojourferie`
--
ALTER TABLE `_infojourferie`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `_infojournal`
--
ALTER TABLE `_infojournal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `_postetracabiliteplis`
--
ALTER TABLE `_postetracabiliteplis`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Idx_5` (`ID_SmartData`,`DateEvent`,`CodeEvent`),
  ADD KEY `Idx_2` (`Depot`),
  ADD KEY `Idx_3` (`DateDepot`),
  ADD KEY `Idx_4` (`Campagne`);

--
-- Indexes for table `_profil_lotissement`
--
ALTER TABLE `_profil_lotissement`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `_referentiel`
--
ALTER TABLE `_referentiel`
  ADD PRIMARY KEY (`NomTable`);

--
-- Indexes for table `_version`
--
ALTER TABLE `_version`
  ADD PRIMARY KEY (`Outil`);

--
-- Indexes for table `__update`
--
ALTER TABLE `__update`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Index_2` (`Soft`,`Version`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membre`
--
ALTER TABLE `membre`
  MODIFY `idmembre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `_annonces`
--
ALTER TABLE `_annonces`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_infoadrretour`
--
ALTER TABLE `_infoadrretour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_infoclient`
--
ALTER TABLE `_infoclient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_infodeposant`
--
ALTER TABLE `_infodeposant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_infodepot`
--
ALTER TABLE `_infodepot`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_infohorodatage`
--
ALTER TABLE `_infohorodatage`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_infoimprimantemarquage`
--
ALTER TABLE `_infoimprimantemarquage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_infojournal`
--
ALTER TABLE `_infojournal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_postetracabiliteplis`
--
ALTER TABLE `_postetracabiliteplis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_profil_lotissement`
--
ALTER TABLE `_profil_lotissement`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `__update`
--
ALTER TABLE `__update`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
