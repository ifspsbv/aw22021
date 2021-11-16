CREATE DATABASE afj;
USE afj;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Estrutura da tabela `transacoes`
-- trans_id........: Código identificador de cada transação [automaticamente incrementado]
-- trans_nome......: Nomeação/titulo da transação [obrigatório]
-- trans_descricao.: Texto descritivo inserido pelo usuário [opicional]
-- trans_valor.....: Valor da transação [obrigatório]
-- trans_cod.......: Código que identifica se a transação é verdadeira (depósito) ou negativa (gasto) [obrigatória]
--
CREATE TABLE `transacoes` (
  `trs_id` int(11) NOT NULL AUTO_INCREMENT,
  `trs_nome` varchar(50) NOT NULL,
  `trs_descricao` varchar(250) NULL,
  `trs_valor` decimal(10,2) NOT NULL,
  `trs_cod` varchar(1) not null,
  PRIMARY KEY (`trs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


