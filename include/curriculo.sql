-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 02:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curriculo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `value` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `value`, `active`) VALUES
(1, 1, 'user_photo', 'photo_profile.jpg', 1),
(2, 1, 'user_name', 'Alessandra Miria', 1),
(6, 1, 'user_birthday', '2000-05-18', 1),
(7, 1, 'user_address', 'Rua Manoel Gonçalves 11,\r\nWashington Pires - Ibirité MG', 1),
(8, 1, 'user_phone', '(31) 97121-2131', 1),
(9, 1, 'user_email', 'alessandramiri6@gmail.com', 1),
(10, 1, 'user_social', 'linkedin@alessandramiri6;github@Alessandramiria;', 1),
(11, 1, 'detail_aboutme', 'Minha História@Experiência no acompanhamento de venda de pós-vendas objetivando a total satisfação do cliente e o alcance dos objetivos empresarias. Criação de data base de clientes e prospectos, visando a lealdade do cliente a marca e a manutenção ou incremento das vendas. Análise de crédito, negociações, agilidades nos contratos, análise de viabilidade de retorno de capital, negociação e prospecção de clientes. Elaboração de pontos estratégicos de vendas, elaboração e envio de mala direta, acompanhamento e elaboração de contratos e propostas. Vendas manutenção preventiva e corretiva dos produtos, controle de estoques, conferência de materiais e obtenção de materiais necessários ao bom funcionamento da empresa.\r\n', 1),
(12, 1, 'detail_education', '16-18@Ensino Médio - Completo@Escola Estadual Pe. João Paulo II;21-23@Analise e Desenvolvimento de Sistemas@Pontifica Universidade Católica de Minas Gerais;', 1),
(13, 1, 'detail_works', 'jan-20@AlmavivA - Tempo Integral@Representante de Atendimento ao Cliente@Belo Horizonte, Minas Gerais, Brasil;nov-21@C&A@Atendimento ao Cliente@Contagem, Minas Gerais, Brasil;', 1),
(14, 1, 'detail_skills', ';illustrator@1;indesign@1;adobe flash@1;html@3;css@3;javascript@3;sketchup@4;Office@4;Scrum@3;Blender@2;Android Dev@2;IOS Dev@2;Linux@2;UML@2;', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
