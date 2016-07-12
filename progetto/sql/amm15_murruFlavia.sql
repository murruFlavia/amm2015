-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Lug 12, 2016 alle 18:33
-- Versione del server: 5.5.41-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flavia`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Prenotazioni`
--

CREATE TABLE IF NOT EXISTS `Prenotazioni` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `n_prenotati` int(11) NOT NULL,
  `sala` varchar(100) NOT NULL,
  `orario` time NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `sala` (`sala`),
  KEY `n_prenotati` (`n_prenotati`),
  KEY `sala_2` (`sala`),
  KEY `data` (`data`),
  KEY `orario` (`orario`),
  KEY `orario_2` (`orario`),
  KEY `sala_3` (`sala`),
  KEY `data_2` (`data`),
  KEY `data_3` (`data`,`sala`,`orario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Sale`
--

CREATE TABLE IF NOT EXISTS `Sale` (
  `nome` varchar(100) NOT NULL,
  `posti` int(11) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Sale`
--

INSERT INTO `Sale` (`nome`, `posti`) VALUES
('Kubrick', 80),
('Tarantino', 80);

-- --------------------------------------------------------

--
-- Struttura della tabella `Spettacoli`
--

CREATE TABLE IF NOT EXISTS `Spettacoli` (
  `sala` varchar(100) NOT NULL,
  `orario` time NOT NULL,
  `data` date NOT NULL,
  `film` varchar(100) NOT NULL,
  PRIMARY KEY (`sala`,`orario`,`data`),
  KEY `sala` (`sala`),
  KEY `orario` (`orario`),
  KEY `data` (`data`),
  KEY `film` (`film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Spettacoli`
--

INSERT INTO `Spettacoli` (`sala`, `orario`, `data`, `film`) VALUES
('Kubrick', '19:30:00', '2016-07-01', 'American History X'),
('Kubrick', '19:30:00', '2016-07-02', 'American History X'),
('Kubrick', '19:30:00', '2016-07-03', 'American History X'),
('Kubrick', '19:30:00', '2016-07-04', 'American History X'),
('Kubrick', '19:30:00', '2016-07-05', 'American History X'),
('Kubrick', '19:30:00', '2016-07-06', 'American History X'),
('Kubrick', '19:30:00', '2016-07-07', 'American History X'),
('Kubrick', '19:30:00', '2016-07-08', 'American History X'),
('Kubrick', '19:30:00', '2016-07-09', 'American History X'),
('Kubrick', '19:30:00', '2016-07-10', 'American History X'),
('Kubrick', '19:30:00', '2016-07-11', 'American History X'),
('Kubrick', '22:30:00', '2016-07-01', 'American History X'),
('Kubrick', '22:30:00', '2016-07-02', 'American History X'),
('Kubrick', '22:30:00', '2016-07-03', 'American History X'),
('Kubrick', '22:30:00', '2016-07-04', 'American History X'),
('Kubrick', '22:30:00', '2016-07-05', 'American History X'),
('Kubrick', '22:30:00', '2016-07-06', 'American History X'),
('Kubrick', '22:30:00', '2016-07-07', 'American History X'),
('Kubrick', '22:30:00', '2016-07-08', 'American History X'),
('Kubrick', '22:30:00', '2016-07-09', 'American History X'),
('Kubrick', '22:30:00', '2016-07-10', 'American History X'),
('Kubrick', '22:30:00', '2016-07-11', 'American History X'),
('Tarantino', '19:30:00', '2016-07-01', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-02', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-03', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-04', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-05', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-06', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-07', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-08', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-09', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-10', 'La Teoria del Tutto'),
('Tarantino', '19:30:00', '2016-07-11', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-01', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-02', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-03', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-04', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-05', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-06', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-07', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-08', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-09', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-10', 'La Teoria del Tutto'),
('Tarantino', '22:30:00', '2016-07-11', 'La Teoria del Tutto');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Prenotazioni`
--
ALTER TABLE `Prenotazioni`
  ADD CONSTRAINT `Prenotazioni_ibfk_3` FOREIGN KEY (`orario`) REFERENCES `Spettacoli` (`orario`) ON DELETE CASCADE,
  ADD CONSTRAINT `Prenotazioni_ibfk_1` FOREIGN KEY (`data`) REFERENCES `Spettacoli` (`data`) ON DELETE CASCADE,
  ADD CONSTRAINT `Prenotazioni_ibfk_2` FOREIGN KEY (`sala`) REFERENCES `Spettacoli` (`sala`) ON DELETE CASCADE;

--
-- Limiti per la tabella `Spettacoli`
--
ALTER TABLE `Spettacoli`
  ADD CONSTRAINT `Spettacoli_ibfk_1` FOREIGN KEY (`sala`) REFERENCES `Sale` (`nome`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
