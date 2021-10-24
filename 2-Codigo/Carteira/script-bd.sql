CREATE DATABASE afj;
USE afj;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `carteira` (
  `ctr_id` int(11) NOT NULL AUTO_INCREMENT,
  `ctr_cod` varchar(25) NOT NULL,
  `ctr_nome` varchar(100) NOT NULL,
  `ctr_desc` text NOT NULL,
  `ctr_data` date NOT NULL, 
  PRIMARY KEY (`ctr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
