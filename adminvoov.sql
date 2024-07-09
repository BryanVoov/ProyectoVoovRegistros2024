-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 12:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminvoov`
--

-- --------------------------------------------------------

--
-- Table structure for table `asociadoevaluacionisa`
--

CREATE TABLE `asociadoevaluacionisa` (
  `idAsociadoEvaluacionISA` int(11) NOT NULL,
  `idAsociadoISA` int(11) NOT NULL,
  `fechaEvaluacion` date DEFAULT NULL,
  `aSat` int(11) DEFAULT NULL,
  `satisfaccionEmpleado` int(11) DEFAULT NULL,
  `tareasCompletadas` int(11) DEFAULT NULL,
  `capacidadAgente` int(11) DEFAULT NULL,
  `asistencia` int(11) DEFAULT NULL,
  `productividad` int(11) DEFAULT NULL,
  `promedioCompletado` int(11) DEFAULT NULL,
  `fortalezas` text DEFAULT NULL,
  `areasAMejorar` text DEFAULT NULL,
  `planDeAccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asociadoevaluacionmk`
--

CREATE TABLE `asociadoevaluacionmk` (
  `idAsociadoEvaluacionMK` int(11) NOT NULL,
  `idAsociadoMK` int(11) NOT NULL,
  `fechaEvaluacion` date DEFAULT NULL,
  `aSat` int(11) DEFAULT NULL,
  `cargaDeTrabajo` int(11) DEFAULT NULL,
  `diasTrabajados` int(11) DEFAULT NULL,
  `llegadasTarde` int(11) DEFAULT NULL,
  `reporteSemanal` varchar(10) DEFAULT NULL,
  `proyectos` text DEFAULT NULL,
  `soluciones` text DEFAULT NULL,
  `feedbackVoov` text DEFAULT NULL,
  `notasFeedback` text DEFAULT NULL,
  `refuerzoPositivo` text DEFAULT NULL,
  `areasAMejorar` text NOT NULL,
  `planDeAccion` text NOT NULL,
  `notasFinales` text NOT NULL,
  `puntuacionTareasSemanales` int(11) NOT NULL,
  `puntuacionCualitativaGeneral` int(11) NOT NULL,
  `notasPuntuacionAsat` text NOT NULL,
  `entrevistador` varchar(100) NOT NULL,
  `problemas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asociadoevaluacionva`
--

CREATE TABLE `asociadoevaluacionva` (
  `idAsociadoEvaluacionVA` int(11) NOT NULL,
  `idAsociadoVA` int(11) NOT NULL,
  `fechaEvaluacion` date DEFAULT NULL,
  `aSat` int(11) DEFAULT NULL,
  `satisfaccionEmpleado` text DEFAULT NULL,
  `tareasCompletadas` int(11) DEFAULT NULL,
  `capacidadAgente` int(11) DEFAULT NULL,
  `asistencia` int(11) DEFAULT NULL,
  `productividad` int(11) DEFAULT NULL,
  `promedioCompletado` int(11) DEFAULT NULL,
  `fortalezas` text DEFAULT NULL,
  `areasAMejorar` text DEFAULT NULL,
  `planDeAccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asociadoisa`
--

CREATE TABLE `asociadoisa` (
  `idAsociadoISA` int(11) NOT NULL,
  `nombreAsociado` varchar(100) NOT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `cumple` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `salarioInicial` decimal(10,2) DEFAULT NULL,
  `fechaContratacionV` date DEFAULT NULL,
  `fechaContratacionC` date DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `estadoActividad` varchar(50) DEFAULT NULL,
  `cargoCliente` varchar(100) DEFAULT NULL,
  `numeroEmpleado` int(20) DEFAULT NULL,
  `horarioEntrada` time DEFAULT NULL,
  `horarioSalida` time DEFAULT NULL,
  `tipoContrato` varchar(20) DEFAULT NULL,
  `foto` mediumblob DEFAULT NULL,
  `fechaTerminacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asociadomk`
--

CREATE TABLE `asociadomk` (
  `idAsociadoMK` int(11) NOT NULL,
  `nombreAsociado` varchar(100) NOT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `cumple` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `salarioInicial` decimal(10,2) DEFAULT NULL,
  `fechaContratacionV` date DEFAULT NULL,
  `fechaContratacionC` date DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `estadoActividad` varchar(50) DEFAULT NULL,
  `cargoCliente` varchar(100) DEFAULT NULL,
  `numeroEmpleado` int(20) DEFAULT NULL,
  `horarioEntrada` time DEFAULT NULL,
  `horarioSalida` time DEFAULT NULL,
  `tipoContrato` varchar(20) DEFAULT NULL,
  `foto` mediumblob DEFAULT NULL,
  `fechaTerminacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asociadova`
--

CREATE TABLE `asociadova` (
  `idAsociadoVA` int(11) NOT NULL,
  `nombreAsociado` varchar(100) NOT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `cumple` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `salarioInicial` decimal(10,2) DEFAULT NULL,
  `fechaContratacionV` date DEFAULT NULL,
  `fechaContratacionC` date DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `estadoActividad` varchar(50) DEFAULT NULL,
  `cargoCliente` varchar(100) DEFAULT NULL,
  `numeroEmpleado` int(20) DEFAULT NULL,
  `horarioEntrada` time DEFAULT NULL,
  `horarioSalida` time DEFAULT NULL,
  `tipoContrato` varchar(20) DEFAULT NULL,
  `foto` mediumblob DEFAULT NULL,
  `fechaTerminacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombreCliente` varchar(100) NOT NULL,
  `nombrePropietario` varchar(100) DEFAULT NULL,
  `sitioWeb` varchar(100) DEFAULT NULL,
  `correspondencia` text DEFAULT NULL,
  `carpetaCompartida` varchar(100) DEFAULT NULL,
  `estadoActividad` varchar(50) DEFAULT NULL,
  `tipoContrato` varchar(50) DEFAULT NULL,
  `aniversario` date DEFAULT NULL,
  `cuotaInstalacion` decimal(10,2) DEFAULT NULL,
  `estadoPago` varchar(50) DEFAULT NULL,
  `industria` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `zonaHoraria` varchar(50) DEFAULT NULL,
  `logo` mediumblob DEFAULT NULL,
  `estadoAsignacionPersonal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clienteevaluacion`
--

CREATE TABLE `clienteevaluacion` (
  `idClienteEvaluacion` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fechaEvaluacion` date DEFAULT NULL,
  `cSat` int(11) DEFAULT NULL,
  `feedback` varchar(300) DEFAULT NULL,
  `problemas` varchar(300) DEFAULT NULL,
  `proyectos` varchar(300) DEFAULT NULL,
  `comentarios` varchar(300) DEFAULT NULL,
  `reseñaGoogle` int(11) DEFAULT NULL,
  `nombrePOC` varchar(50) DEFAULT NULL,
  `nombreLiaison` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comentariocliente`
--

CREATE TABLE `comentariocliente` (
  `idComentario` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `comentarioCliente` text DEFAULT NULL,
  `fechaComentario` date DEFAULT NULL,
  `tituloComentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contratos`
--

CREATE TABLE `contratos` (
  `idContrato` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `contratosEnviados` int(11) DEFAULT NULL,
  `contratosFirmados` int(11) DEFAULT NULL,
  `contratosTerminados` int(11) DEFAULT NULL,
  `costoContratosFirmados` int(11) DEFAULT NULL,
  `costoContratosTerminados` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversionsnic`
--

CREATE TABLE `conversionsnic` (
  `idConversionsNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nConversionsMeta` int(11) DEFAULT NULL,
  `nConversionsLinkedin` int(11) DEFAULT NULL,
  `nConversionsTiktok` int(11) DEFAULT NULL,
  `nConversionsGooglePPC` int(11) DEFAULT NULL,
  `nConversionsEmail` int(11) DEFAULT NULL,
  `nConversionsReferrals` int(11) DEFAULT NULL,
  `nConversionsOthers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversionsusa`
--

CREATE TABLE `conversionsusa` (
  `idConversionsUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nConversionsMeta` int(11) DEFAULT NULL,
  `nConversionsLinkedin` int(11) DEFAULT NULL,
  `nConversionsTiktok` int(11) DEFAULT NULL,
  `nConversionsGooglePPC` int(11) DEFAULT NULL,
  `nConversionsEmail` int(11) DEFAULT NULL,
  `nConversionsReferrals` int(11) DEFAULT NULL,
  `nConversionsOthers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emailnic`
--

CREATE TABLE `emailnic` (
  `idEmailNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reNewsletterSent` int(11) DEFAULT NULL,
  `dripEmailSent` int(11) DEFAULT NULL,
  `nRecipientsRENL` int(11) DEFAULT NULL,
  `nRecipientsDripEmails` int(11) DEFAULT NULL,
  `openRateRENL` decimal(5,2) DEFAULT NULL,
  `openRateDripEmails` decimal(5,2) DEFAULT NULL,
  `ctrRENL` decimal(5,2) DEFAULT NULL,
  `ctrDripEmails` decimal(5,2) DEFAULT NULL,
  `linkClicksRENL` int(11) DEFAULT NULL,
  `linkClicksDripEmails` int(11) DEFAULT NULL,
  `appointmentEmails` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emailusa`
--

CREATE TABLE `emailusa` (
  `idEmailUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reNewsletterSent` int(11) DEFAULT NULL,
  `dripEmailSent` int(11) DEFAULT NULL,
  `nRecipientsRENL` int(11) DEFAULT NULL,
  `nRecipientsDripEmails` int(11) DEFAULT NULL,
  `openRateRENL` decimal(5,2) DEFAULT NULL,
  `openRateDripEmails` decimal(5,2) DEFAULT NULL,
  `ctrRENL` decimal(5,2) DEFAULT NULL,
  `ctrDripEmails` decimal(5,2) DEFAULT NULL,
  `linkClicksRENL` int(11) DEFAULT NULL,
  `linkClicksDripEmails` int(11) DEFAULT NULL,
  `appointmentEmails` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facebooknic`
--

CREATE TABLE `facebooknic` (
  `idFacebookNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reach` int(11) DEFAULT NULL,
  `pageVisits` int(11) DEFAULT NULL,
  `totalInteractions` int(11) DEFAULT NULL,
  `totalFans` int(11) DEFAULT NULL,
  `newFans` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facebookusa`
--

CREATE TABLE `facebookusa` (
  `idFacebookUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reach` int(11) DEFAULT NULL,
  `pageVisits` int(11) DEFAULT NULL,
  `totalInteractions` int(11) DEFAULT NULL,
  `totalFans` int(11) DEFAULT NULL,
  `newFans` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gmbnic`
--

CREATE TABLE `gmbnic` (
  `idGmbNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reach` int(11) DEFAULT NULL,
  `clics` int(11) DEFAULT NULL,
  `reviews` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gmbusa`
--

CREATE TABLE `gmbusa` (
  `idGmbUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reach` int(11) DEFAULT NULL,
  `clics` int(11) DEFAULT NULL,
  `reviews` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `googlenic`
--

CREATE TABLE `googlenic` (
  `idGoogleNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `paidImpressions` int(11) DEFAULT NULL,
  `organicImpressions` int(11) DEFAULT NULL,
  `clics` int(11) DEFAULT NULL,
  `CTR` int(11) DEFAULT NULL,
  `CPC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `googleusa`
--

CREATE TABLE `googleusa` (
  `idGoogleUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `paidImpressions` int(11) DEFAULT NULL,
  `organicImpressions` int(11) DEFAULT NULL,
  `clics` int(11) DEFAULT NULL,
  `CTR` int(11) DEFAULT NULL,
  `CPC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instagramnic`
--

CREATE TABLE `instagramnic` (
  `idInstagramNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reach` int(11) DEFAULT NULL,
  `profileVisits` int(11) DEFAULT NULL,
  `totalInteractions` int(11) DEFAULT NULL,
  `totalFollowers` int(11) DEFAULT NULL,
  `newFollowers` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instagramusa`
--

CREATE TABLE `instagramusa` (
  `idInstagramUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `reach` int(11) DEFAULT NULL,
  `profileVisits` int(11) DEFAULT NULL,
  `totalInteractions` int(11) DEFAULT NULL,
  `totalFollowers` int(11) DEFAULT NULL,
  `newFollowers` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liaison`
--

CREATE TABLE `liaison` (
  `idLiaison` int(11) NOT NULL,
  `nombreLiaison` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkedinnic`
--

CREATE TABLE `linkedinnic` (
  `idLinkedInNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `pageViews` int(11) DEFAULT NULL,
  `uniqueVisitors` int(11) DEFAULT NULL,
  `totalFollowers` int(11) DEFAULT NULL,
  `newFollowers` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL,
  `totalInteractions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkedinusa`
--

CREATE TABLE `linkedinusa` (
  `idLinkedInUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `pageViews` int(11) DEFAULT NULL,
  `uniqueVisitors` int(11) DEFAULT NULL,
  `totalFollowers` int(11) DEFAULT NULL,
  `newFollowers` int(11) DEFAULT NULL,
  `nPosts` int(11) DEFAULT NULL,
  `totalInteractions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagosasociadoisa`
--

CREATE TABLE `pagosasociadoisa` (
  `idPagoAsociadoISA` int(11) NOT NULL,
  `idAsociadoISA` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `costosAdministrativos` decimal(10,2) DEFAULT NULL,
  `costoSupervisor` decimal(10,2) DEFAULT NULL,
  `costoManagement` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagosasociadomk`
--

CREATE TABLE `pagosasociadomk` (
  `idPagoAsociadoMK` int(11) NOT NULL,
  `idAsociadoMK` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `costosAdministrativos` decimal(10,2) DEFAULT NULL,
  `costoSupervisor` decimal(10,2) DEFAULT NULL,
  `costoManagement` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagosasociadova`
--

CREATE TABLE `pagosasociadova` (
  `idPagoAsociadoVA` int(11) NOT NULL,
  `idAsociadoVA` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `costosAdministrativos` decimal(10,2) DEFAULT NULL,
  `costoSupervisor` decimal(10,2) DEFAULT NULL,
  `costoManagement` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagoscliente`
--

CREATE TABLE `pagoscliente` (
  `idPago` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idAsociado` int(11) NOT NULL,
  `sourceTable` enum('VA','MK','ISA') NOT NULL,
  `ingresoAsociado` decimal(10,2) NOT NULL,
  `descuento` decimal(10,2) NOT NULL,
  `ingresoClienteNuevo` decimal(10,2) NOT NULL,
  `ingresoComision` decimal(10,2) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforminvestmentnic`
--

CREATE TABLE `platforminvestmentnic` (
  `idInvestment` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `metaInvestment` decimal(10,2) DEFAULT NULL,
  `linkedinInvestment` decimal(10,2) DEFAULT NULL,
  `googleInvestment` decimal(10,2) DEFAULT NULL,
  `emailInvestment` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforminvestmentusa`
--

CREATE TABLE `platforminvestmentusa` (
  `idInvestment` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `metaInvestment` decimal(10,2) DEFAULT NULL,
  `linkedinInvestment` decimal(10,2) DEFAULT NULL,
  `googleInvestment` decimal(10,2) DEFAULT NULL,
  `emailInvestment` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platformleadsnic`
--

CREATE TABLE `platformleadsnic` (
  `idLeadsNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nLeadsMeta` int(11) DEFAULT NULL,
  `nLeadsLinkedin` int(11) DEFAULT NULL,
  `nLeadsTiktok` int(11) DEFAULT NULL,
  `nLeadsGooglePPC` int(11) DEFAULT NULL,
  `nLeadsEmail` int(11) DEFAULT NULL,
  `nLeadsReferrals` int(11) DEFAULT NULL,
  `nLeadsOthers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platformleadsusa`
--

CREATE TABLE `platformleadsusa` (
  `idLeadsUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nLeadsMeta` int(11) DEFAULT NULL,
  `nLeadsLinkedin` int(11) DEFAULT NULL,
  `nLeadsTiktok` int(11) DEFAULT NULL,
  `nLeadsGooglePPC` int(11) DEFAULT NULL,
  `nLeadsEmail` int(11) DEFAULT NULL,
  `nLeadsReferrals` int(11) DEFAULT NULL,
  `nLeadsOthers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poc`
--

CREATE TABLE `poc` (
  `idPOC` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `nombrePOC` varchar(100) DEFAULT NULL,
  `telefonoPOC` varchar(20) DEFAULT NULL,
  `cumplePOC` date DEFAULT NULL,
  `origenContacto` varchar(100) DEFAULT NULL,
  `emailPOC` varchar(100) DEFAULT NULL,
  `cargoPOC` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relacionasociadoclienteisa`
--

CREATE TABLE `relacionasociadoclienteisa` (
  `idAsociadoISA` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relacionasociadoclientemk`
--

CREATE TABLE `relacionasociadoclientemk` (
  `idAsociadoMK` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relacionasociadoclienteva`
--

CREATE TABLE `relacionasociadoclienteva` (
  `idAsociadoVA` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relacionasociadosupervisorisa`
--

CREATE TABLE `relacionasociadosupervisorisa` (
  `idAsociadoISA` int(11) NOT NULL,
  `idSupervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relacionasociadosupervisormk`
--

CREATE TABLE `relacionasociadosupervisormk` (
  `idAsociadoMK` int(11) NOT NULL,
  `idSupervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relacionasociadosupervisorva`
--

CREATE TABLE `relacionasociadosupervisorva` (
  `idAsociadoVA` int(11) NOT NULL,
  `idSupervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relacionevaluacioncliente`
--

CREATE TABLE `relacionevaluacioncliente` (
  `idCliente` int(11) NOT NULL,
  `idClienteEvaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `idSupervisor` int(11) NOT NULL,
  `nombreSupervisor` varchar(200) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiktoknic`
--

CREATE TABLE `tiktoknic` (
  `idTiktokNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `totalFollowers` int(11) DEFAULT NULL,
  `newFollowers` int(11) DEFAULT NULL,
  `totalViews` int(11) DEFAULT NULL,
  `newLikes` int(11) DEFAULT NULL,
  `totalTiktoks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiktokusa`
--

CREATE TABLE `tiktokusa` (
  `idTiktokUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `totalFollowers` int(11) DEFAULT NULL,
  `newFollowers` int(11) DEFAULT NULL,
  `totalViews` int(11) DEFAULT NULL,
  `newLikes` int(11) DEFAULT NULL,
  `totalTiktoks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `websitenic`
--

CREATE TABLE `websitenic` (
  `idWebsiteNic` int(11) NOT NULL,
  `websiteVisits` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nVisitors` int(11) DEFAULT NULL,
  `bounceRate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `websiteusa`
--

CREATE TABLE `websiteusa` (
  `idWebsiteUSA` int(11) NOT NULL,
  `websiteVisits` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nVisitors` int(11) DEFAULT NULL,
  `bounceRate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `youtubenic`
--

CREATE TABLE `youtubenic` (
  `idYoutubeNic` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `totalSubscribers` int(11) DEFAULT NULL,
  `newSubscribers` int(11) DEFAULT NULL,
  `nVideos` int(11) DEFAULT NULL,
  `totalViews` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `youtubeusa`
--

CREATE TABLE `youtubeusa` (
  `idYoutubeUSA` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `totalSubscribers` int(11) DEFAULT NULL,
  `newSubscribers` int(11) DEFAULT NULL,
  `nVideos` int(11) DEFAULT NULL,
  `totalViews` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asociadoevaluacionisa`
--
ALTER TABLE `asociadoevaluacionisa`
  ADD PRIMARY KEY (`idAsociadoEvaluacionISA`),
  ADD KEY `idAsociadoISA` (`idAsociadoISA`);

--
-- Indexes for table `asociadoevaluacionmk`
--
ALTER TABLE `asociadoevaluacionmk`
  ADD PRIMARY KEY (`idAsociadoEvaluacionMK`),
  ADD KEY `idAsociadoMK` (`idAsociadoMK`);

--
-- Indexes for table `asociadoevaluacionva`
--
ALTER TABLE `asociadoevaluacionva`
  ADD PRIMARY KEY (`idAsociadoEvaluacionVA`),
  ADD KEY `idAsociadoVA` (`idAsociadoVA`);

--
-- Indexes for table `asociadoisa`
--
ALTER TABLE `asociadoisa`
  ADD PRIMARY KEY (`idAsociadoISA`);

--
-- Indexes for table `asociadomk`
--
ALTER TABLE `asociadomk`
  ADD PRIMARY KEY (`idAsociadoMK`);

--
-- Indexes for table `asociadova`
--
ALTER TABLE `asociadova`
  ADD PRIMARY KEY (`idAsociadoVA`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `clienteevaluacion`
--
ALTER TABLE `clienteevaluacion`
  ADD PRIMARY KEY (`idClienteEvaluacion`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `comentariocliente`
--
ALTER TABLE `comentariocliente`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`idContrato`);

--
-- Indexes for table `conversionsnic`
--
ALTER TABLE `conversionsnic`
  ADD PRIMARY KEY (`idConversionsNic`);

--
-- Indexes for table `conversionsusa`
--
ALTER TABLE `conversionsusa`
  ADD PRIMARY KEY (`idConversionsUSA`);

--
-- Indexes for table `emailnic`
--
ALTER TABLE `emailnic`
  ADD PRIMARY KEY (`idEmailNic`);

--
-- Indexes for table `emailusa`
--
ALTER TABLE `emailusa`
  ADD PRIMARY KEY (`idEmailUSA`);

--
-- Indexes for table `facebooknic`
--
ALTER TABLE `facebooknic`
  ADD PRIMARY KEY (`idFacebookNic`);

--
-- Indexes for table `facebookusa`
--
ALTER TABLE `facebookusa`
  ADD PRIMARY KEY (`idFacebookUSA`);

--
-- Indexes for table `gmbnic`
--
ALTER TABLE `gmbnic`
  ADD PRIMARY KEY (`idGmbNic`);

--
-- Indexes for table `gmbusa`
--
ALTER TABLE `gmbusa`
  ADD PRIMARY KEY (`idGmbUSA`);

--
-- Indexes for table `googlenic`
--
ALTER TABLE `googlenic`
  ADD PRIMARY KEY (`idGoogleNic`);

--
-- Indexes for table `googleusa`
--
ALTER TABLE `googleusa`
  ADD PRIMARY KEY (`idGoogleUSA`);

--
-- Indexes for table `instagramnic`
--
ALTER TABLE `instagramnic`
  ADD PRIMARY KEY (`idInstagramNic`);

--
-- Indexes for table `instagramusa`
--
ALTER TABLE `instagramusa`
  ADD PRIMARY KEY (`idInstagramUSA`);

--
-- Indexes for table `liaison`
--
ALTER TABLE `liaison`
  ADD PRIMARY KEY (`idLiaison`);

--
-- Indexes for table `linkedinnic`
--
ALTER TABLE `linkedinnic`
  ADD PRIMARY KEY (`idLinkedInNic`);

--
-- Indexes for table `linkedinusa`
--
ALTER TABLE `linkedinusa`
  ADD PRIMARY KEY (`idLinkedInUSA`);

--
-- Indexes for table `pagosasociadoisa`
--
ALTER TABLE `pagosasociadoisa`
  ADD PRIMARY KEY (`idPagoAsociadoISA`),
  ADD KEY `idAsociadoISA` (`idAsociadoISA`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `pagosasociadomk`
--
ALTER TABLE `pagosasociadomk`
  ADD PRIMARY KEY (`idPagoAsociadoMK`),
  ADD KEY `idAsociadoMK` (`idAsociadoMK`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `pagosasociadova`
--
ALTER TABLE `pagosasociadova`
  ADD PRIMARY KEY (`idPagoAsociadoVA`),
  ADD KEY `idAsociadoVA` (`idAsociadoVA`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `pagoscliente`
--
ALTER TABLE `pagoscliente`
  ADD PRIMARY KEY (`idPago`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `platforminvestmentnic`
--
ALTER TABLE `platforminvestmentnic`
  ADD PRIMARY KEY (`idInvestment`);

--
-- Indexes for table `platforminvestmentusa`
--
ALTER TABLE `platforminvestmentusa`
  ADD PRIMARY KEY (`idInvestment`);

--
-- Indexes for table `platformleadsnic`
--
ALTER TABLE `platformleadsnic`
  ADD PRIMARY KEY (`idLeadsNic`);

--
-- Indexes for table `platformleadsusa`
--
ALTER TABLE `platformleadsusa`
  ADD PRIMARY KEY (`idLeadsUSA`);

--
-- Indexes for table `poc`
--
ALTER TABLE `poc`
  ADD PRIMARY KEY (`idPOC`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `relacionasociadoclienteisa`
--
ALTER TABLE `relacionasociadoclienteisa`
  ADD PRIMARY KEY (`idAsociadoISA`,`idCliente`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `relacionasociadoclientemk`
--
ALTER TABLE `relacionasociadoclientemk`
  ADD PRIMARY KEY (`idAsociadoMK`,`idCliente`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `relacionasociadoclienteva`
--
ALTER TABLE `relacionasociadoclienteva`
  ADD PRIMARY KEY (`idAsociadoVA`,`idCliente`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `relacionasociadosupervisorisa`
--
ALTER TABLE `relacionasociadosupervisorisa`
  ADD PRIMARY KEY (`idAsociadoISA`,`idSupervisor`),
  ADD KEY `idSupervisor` (`idSupervisor`);

--
-- Indexes for table `relacionasociadosupervisormk`
--
ALTER TABLE `relacionasociadosupervisormk`
  ADD PRIMARY KEY (`idAsociadoMK`,`idSupervisor`),
  ADD KEY `idSupervisor` (`idSupervisor`);

--
-- Indexes for table `relacionasociadosupervisorva`
--
ALTER TABLE `relacionasociadosupervisorva`
  ADD PRIMARY KEY (`idAsociadoVA`,`idSupervisor`),
  ADD KEY `idSupervisor` (`idSupervisor`);

--
-- Indexes for table `relacionevaluacioncliente`
--
ALTER TABLE `relacionevaluacioncliente`
  ADD PRIMARY KEY (`idCliente`,`idClienteEvaluacion`),
  ADD KEY `idClienteEvaluacion` (`idClienteEvaluacion`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`idSupervisor`);

--
-- Indexes for table `tiktoknic`
--
ALTER TABLE `tiktoknic`
  ADD PRIMARY KEY (`idTiktokNic`);

--
-- Indexes for table `tiktokusa`
--
ALTER TABLE `tiktokusa`
  ADD PRIMARY KEY (`idTiktokUSA`);

--
-- Indexes for table `websitenic`
--
ALTER TABLE `websitenic`
  ADD PRIMARY KEY (`idWebsiteNic`);

--
-- Indexes for table `websiteusa`
--
ALTER TABLE `websiteusa`
  ADD PRIMARY KEY (`idWebsiteUSA`);

--
-- Indexes for table `youtubenic`
--
ALTER TABLE `youtubenic`
  ADD PRIMARY KEY (`idYoutubeNic`);

--
-- Indexes for table `youtubeusa`
--
ALTER TABLE `youtubeusa`
  ADD PRIMARY KEY (`idYoutubeUSA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asociadoevaluacionisa`
--
ALTER TABLE `asociadoevaluacionisa`
  MODIFY `idAsociadoEvaluacionISA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asociadoevaluacionmk`
--
ALTER TABLE `asociadoevaluacionmk`
  MODIFY `idAsociadoEvaluacionMK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asociadoevaluacionva`
--
ALTER TABLE `asociadoevaluacionva`
  MODIFY `idAsociadoEvaluacionVA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asociadoisa`
--
ALTER TABLE `asociadoisa`
  MODIFY `idAsociadoISA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asociadomk`
--
ALTER TABLE `asociadomk`
  MODIFY `idAsociadoMK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asociadova`
--
ALTER TABLE `asociadova`
  MODIFY `idAsociadoVA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clienteevaluacion`
--
ALTER TABLE `clienteevaluacion`
  MODIFY `idClienteEvaluacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentariocliente`
--
ALTER TABLE `comentariocliente`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contratos`
--
ALTER TABLE `contratos`
  MODIFY `idContrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversionsnic`
--
ALTER TABLE `conversionsnic`
  MODIFY `idConversionsNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversionsusa`
--
ALTER TABLE `conversionsusa`
  MODIFY `idConversionsUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emailnic`
--
ALTER TABLE `emailnic`
  MODIFY `idEmailNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emailusa`
--
ALTER TABLE `emailusa`
  MODIFY `idEmailUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facebooknic`
--
ALTER TABLE `facebooknic`
  MODIFY `idFacebookNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facebookusa`
--
ALTER TABLE `facebookusa`
  MODIFY `idFacebookUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gmbnic`
--
ALTER TABLE `gmbnic`
  MODIFY `idGmbNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gmbusa`
--
ALTER TABLE `gmbusa`
  MODIFY `idGmbUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `googlenic`
--
ALTER TABLE `googlenic`
  MODIFY `idGoogleNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `googleusa`
--
ALTER TABLE `googleusa`
  MODIFY `idGoogleUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instagramnic`
--
ALTER TABLE `instagramnic`
  MODIFY `idInstagramNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instagramusa`
--
ALTER TABLE `instagramusa`
  MODIFY `idInstagramUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liaison`
--
ALTER TABLE `liaison`
  MODIFY `idLiaison` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkedinnic`
--
ALTER TABLE `linkedinnic`
  MODIFY `idLinkedInNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkedinusa`
--
ALTER TABLE `linkedinusa`
  MODIFY `idLinkedInUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagosasociadoisa`
--
ALTER TABLE `pagosasociadoisa`
  MODIFY `idPagoAsociadoISA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagosasociadomk`
--
ALTER TABLE `pagosasociadomk`
  MODIFY `idPagoAsociadoMK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagosasociadova`
--
ALTER TABLE `pagosasociadova`
  MODIFY `idPagoAsociadoVA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagoscliente`
--
ALTER TABLE `pagoscliente`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforminvestmentnic`
--
ALTER TABLE `platforminvestmentnic`
  MODIFY `idInvestment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforminvestmentusa`
--
ALTER TABLE `platforminvestmentusa`
  MODIFY `idInvestment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platformleadsnic`
--
ALTER TABLE `platformleadsnic`
  MODIFY `idLeadsNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platformleadsusa`
--
ALTER TABLE `platformleadsusa`
  MODIFY `idLeadsUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poc`
--
ALTER TABLE `poc`
  MODIFY `idPOC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `idSupervisor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiktoknic`
--
ALTER TABLE `tiktoknic`
  MODIFY `idTiktokNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiktokusa`
--
ALTER TABLE `tiktokusa`
  MODIFY `idTiktokUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `websitenic`
--
ALTER TABLE `websitenic`
  MODIFY `idWebsiteNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `websiteusa`
--
ALTER TABLE `websiteusa`
  MODIFY `idWebsiteUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtubenic`
--
ALTER TABLE `youtubenic`
  MODIFY `idYoutubeNic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtubeusa`
--
ALTER TABLE `youtubeusa`
  MODIFY `idYoutubeUSA` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asociadoevaluacionisa`
--
ALTER TABLE `asociadoevaluacionisa`
  ADD CONSTRAINT `asociadoevaluacionisa_ibfk_1` FOREIGN KEY (`idAsociadoISA`) REFERENCES `asociadoisa` (`idAsociadoISA`);

--
-- Constraints for table `asociadoevaluacionmk`
--
ALTER TABLE `asociadoevaluacionmk`
  ADD CONSTRAINT `asociadoevaluacionmk_ibfk_1` FOREIGN KEY (`idAsociadoMK`) REFERENCES `asociadomk` (`idAsociadoMK`);

--
-- Constraints for table `asociadoevaluacionva`
--
ALTER TABLE `asociadoevaluacionva`
  ADD CONSTRAINT `asociadoevaluacionva_ibfk_1` FOREIGN KEY (`idAsociadoVA`) REFERENCES `asociadova` (`idAsociadoVA`);

--
-- Constraints for table `clienteevaluacion`
--
ALTER TABLE `clienteevaluacion`
  ADD CONSTRAINT `clienteevaluacion_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `comentariocliente`
--
ALTER TABLE `comentariocliente`
  ADD CONSTRAINT `comentariocliente_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `pagosasociadoisa`
--
ALTER TABLE `pagosasociadoisa`
  ADD CONSTRAINT `pagosasociadoisa_ibfk_1` FOREIGN KEY (`idAsociadoISA`) REFERENCES `asociadoisa` (`idAsociadoISA`),
  ADD CONSTRAINT `pagosasociadoisa_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `pagosasociadomk`
--
ALTER TABLE `pagosasociadomk`
  ADD CONSTRAINT `pagosasociadomk_ibfk_1` FOREIGN KEY (`idAsociadoMK`) REFERENCES `asociadomk` (`idAsociadoMK`),
  ADD CONSTRAINT `pagosasociadomk_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `pagosasociadova`
--
ALTER TABLE `pagosasociadova`
  ADD CONSTRAINT `pagosasociadova_ibfk_1` FOREIGN KEY (`idAsociadoVA`) REFERENCES `asociadova` (`idAsociadoVA`),
  ADD CONSTRAINT `pagosasociadova_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `pagoscliente`
--
ALTER TABLE `pagoscliente`
  ADD CONSTRAINT `pagoscliente_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `poc`
--
ALTER TABLE `poc`
  ADD CONSTRAINT `poc_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `relacionasociadoclienteisa`
--
ALTER TABLE `relacionasociadoclienteisa`
  ADD CONSTRAINT `relacionasociadoclienteisa_ibfk_1` FOREIGN KEY (`idAsociadoISA`) REFERENCES `asociadoisa` (`idAsociadoISA`),
  ADD CONSTRAINT `relacionasociadoclienteisa_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `relacionasociadoclientemk`
--
ALTER TABLE `relacionasociadoclientemk`
  ADD CONSTRAINT `relacionasociadoclientemk_ibfk_1` FOREIGN KEY (`idAsociadoMK`) REFERENCES `asociadomk` (`idAsociadoMK`),
  ADD CONSTRAINT `relacionasociadoclientemk_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `relacionasociadoclienteva`
--
ALTER TABLE `relacionasociadoclienteva`
  ADD CONSTRAINT `relacionasociadoclienteva_ibfk_1` FOREIGN KEY (`idAsociadoVA`) REFERENCES `asociadova` (`idAsociadoVA`),
  ADD CONSTRAINT `relacionasociadoclienteva_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `relacionasociadosupervisorisa`
--
ALTER TABLE `relacionasociadosupervisorisa`
  ADD CONSTRAINT `relacionasociadosupervisorisa_ibfk_1` FOREIGN KEY (`idAsociadoISA`) REFERENCES `asociadoisa` (`idAsociadoISA`),
  ADD CONSTRAINT `relacionasociadosupervisorisa_ibfk_2` FOREIGN KEY (`idSupervisor`) REFERENCES `supervisor` (`idSupervisor`);

--
-- Constraints for table `relacionasociadosupervisormk`
--
ALTER TABLE `relacionasociadosupervisormk`
  ADD CONSTRAINT `relacionasociadosupervisormk_ibfk_1` FOREIGN KEY (`idAsociadoMK`) REFERENCES `asociadomk` (`idAsociadoMK`),
  ADD CONSTRAINT `relacionasociadosupervisormk_ibfk_2` FOREIGN KEY (`idSupervisor`) REFERENCES `supervisor` (`idSupervisor`);

--
-- Constraints for table `relacionasociadosupervisorva`
--
ALTER TABLE `relacionasociadosupervisorva`
  ADD CONSTRAINT `relacionasociadosupervisorva_ibfk_1` FOREIGN KEY (`idAsociadoVA`) REFERENCES `asociadova` (`idAsociadoVA`),
  ADD CONSTRAINT `relacionasociadosupervisorva_ibfk_2` FOREIGN KEY (`idSupervisor`) REFERENCES `supervisor` (`idSupervisor`);

--
-- Constraints for table `relacionevaluacioncliente`
--
ALTER TABLE `relacionevaluacioncliente`
  ADD CONSTRAINT `relacionevaluacioncliente_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `relacionevaluacioncliente_ibfk_2` FOREIGN KEY (`idClienteEvaluacion`) REFERENCES `clienteevaluacion` (`idClienteEvaluacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
