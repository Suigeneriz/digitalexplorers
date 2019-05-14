-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 02:50 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalex`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_form` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_code` int(11) NOT NULL,
  `registration_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avtivation_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type`, `business_form`, `company_code`, `registration_code`, `email`, `address`, `mobile`, `avtivation_status`, `registration_date`, `created_at`, `updated_at`) VALUES
(1, 'RXKVAFMCUE', 'BankPayment institutionPayment institution', 'Payment institutions holding a licence for restricted activityBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 497712, 'HPKJ6C', 'uwlkgvm@gmail.com', 'VYEBRHDSTP', '+37094126735', 'Active', '19.04.1993', '2019-05-10 06:26:47', '2019-05-10 06:26:47'),
(2, 'WLFSCTPDUN', 'Payment institutionElectronic money institution intermediaryElectronic money institution intermediary', 'Payment institutions holding a licence for restricted activityBanks authorised in the Republic of LithuaniaBanks authorised in the Republic of Lithuania', 68710, 'AFKPSR', 'mltbwhg@gmail.com', 'YXZCPMGDHK', '+37034827015', 'Active', '05.02.2006', '2019-05-10 06:26:49', '2019-05-10 06:26:49'),
(3, 'FEZKCWNSAT', 'BankElectronic money institution intermediaryElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 399270, '10KSF9', 'yxdtoza@gmail.com', 'JBCYMTWADR', '+37047196253', 'Active', '29.01.2006', '2019-05-10 06:26:52', '2019-05-10 06:26:52'),
(4, 'HECMSUGJDV', 'Electronic money institution intermediaryElectronic money institution intermediaryBank', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of Lithuania', 371531, 'J64KCP', 'ceukxiy@gmail.com', 'TDWRMVASJZ', '+37025301846', 'Active', '31.03.2016', '2019-05-10 06:26:55', '2019-05-10 06:26:55'),
(5, 'MZENDFUKXV', 'BankElectronic money institution intermediaryPayment institution', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 650334, 'FMNYGX', 'bjkvfmx@gmail.com', 'VELPZNJURF', '+37076318254', 'Active', '26.02.1997', '2019-05-10 06:26:58', '2019-05-10 06:26:58'),
(6, 'CKZERGBJDX', 'BankPayment institutionBank', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 134285, '0EW099', 'lzwbcuy@gmail.com', 'HWRLJZEDCB', '+37001328694', 'Active', '09.04.2006', '2019-05-10 06:27:00', '2019-05-10 06:27:00'),
(7, 'CXKHLEAVZM', 'Payment institutionPayment institutionPayment institution', 'Banks authorised in the Republic of LithuaniaBanks authorised in the Republic of LithuaniaBanks authorised in the Republic of Lithuania', 642487, '80BC7B', 'jbskxph@gmail.com', 'ZYNPMXLHWS', '+37085163042', 'Active', '02.03.1998', '2019-05-10 06:27:03', '2019-05-10 06:27:03'),
(8, 'BLMJRKSVWA', 'Payment institutionBankBank', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 427990, 'NTZMSA', 'cbozyke@gmail.com', 'JWRFMUHYBA', '+37042108973', 'Active', '02.07.2006', '2019-05-10 06:27:05', '2019-05-10 06:27:05'),
(9, 'UDAJZVYBPX', 'BankElectronic money institution intermediaryElectronic money institution intermediary', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activity', 391405, '4TC0E3', 'lmrpkxo@gmail.com', 'VUESHTMXDP', '+37094870516', 'Active', '11.07.2015', '2019-05-10 06:27:06', '2019-05-10 06:27:06'),
(10, 'WZVEGDRSJU', 'Electronic money institution intermediaryBankPayment institution', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activity', 927513, '14DR1F', 'zgyhxid@gmail.com', 'KMGXLHZJTC', '+37050216897', 'Active', '11.08.2011', '2019-05-10 06:27:07', '2019-05-10 06:27:07'),
(11, 'UBKGPRTAXL', 'Payment institutionBankBank', 'Banks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 37712, 'NJ9XZH', 'hmtcvqb@gmail.com', 'HSCNFEVGPR', '+37014967803', 'Active', '20.08.1995', '2019-05-10 06:27:08', '2019-05-10 06:27:08'),
(12, 'MKCLUARSFD', 'Electronic money institution intermediaryElectronic money institution intermediaryPayment institution', 'Banks authorised in the Republic of LithuaniaBanks authorised in the Republic of LithuaniaBanks authorised in the Republic of Lithuania', 998376, 'T4AJ8G', 'aoehnvf@gmail.com', 'HBYMDCJZLT', '+37016873902', 'Active', '25.06.2001', '2019-05-10 06:27:09', '2019-05-10 06:27:09'),
(13, 'MNFKPCZBDW', 'BankBankBank', 'Payment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activity', 716073, 'WE74EZ', 'yzaowvp@gmail.com', 'NDVLPBWRJA', '+37061052489', 'Active', '01.10.2012', '2019-05-10 06:27:11', '2019-05-10 06:27:11'),
(14, 'BNCHLGRUXJ', 'Electronic money institution intermediaryElectronic money institution intermediaryPayment institution', 'Payment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activityBanks authorised in the Republic of Lithuania', 446118, 'GFBK8L', 'agncrvt@gmail.com', 'GYXTZFKJVP', '+37021395087', 'Active', '05.10.2017', '2019-05-10 06:27:12', '2019-05-10 06:27:12'),
(15, 'AXNTCMDERG', 'Payment institutionElectronic money institution intermediaryPayment institution', 'Payment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activity', 136261, 'WP1A51', 'xthydvo@gmail.com', 'CAUTLWFGSK', '+37094312875', 'Active', '14.07.2011', '2019-05-10 06:27:14', '2019-05-10 06:27:14'),
(16, 'ZALHRYMDTS', 'Electronic money institution intermediaryBankBank', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activityBanks authorised in the Republic of Lithuania', 248767, 'EUX63C', 'fbzwlxo@gmail.com', 'GRHXLDYMZB', '+37030765821', 'Active', '20.09.2017', '2019-05-10 06:27:15', '2019-05-10 06:27:15'),
(17, 'WBZNTHAVPY', 'Payment institutionElectronic money institution intermediaryBank', 'Banks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 190173, 'W01TFZ', 'zjrlath@gmail.com', 'DYJBZSGLET', '+37097162583', 'Active', '01.12.1994', '2019-05-10 06:27:16', '2019-05-10 06:27:16'),
(18, 'LXFDBANVZJ', 'Electronic money institution intermediaryBankElectronic money institution intermediary', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 878777, 'JSAXMB', 'kxilrut@gmail.com', 'ZFXNWTGMPJ', '+37021374906', 'Active', '19.06.2006', '2019-05-10 06:27:17', '2019-05-10 06:27:17'),
(19, 'ACLNFGHVPR', 'BankPayment institutionBank', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activity', 783523, 'DU8LPX', 'rsbajuw@gmail.com', 'KYZHATUJSM', '+37020781536', 'Active', '25.02.2017', '2019-05-10 06:27:18', '2019-05-10 06:27:18'),
(20, 'MYKEFWJRXP', 'Payment institutionBankPayment institution', 'Payment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activity', 357816, '6540ET', 'jzesaty@gmail.com', 'MWERCGHFXV', '+37021497083', 'Active', '26.02.2002', '2019-05-10 06:27:19', '2019-05-10 06:27:19'),
(21, 'CBEKVTLMRH', 'Payment institutionBankBank', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 41479, 'F3UR7G', 'duszhkp@gmail.com', 'LDRUBPCETJ', '+37075934168', 'Active', '11.11.2009', '2019-05-10 06:27:20', '2019-05-10 06:27:20'),
(22, 'PUJCWKVRNL', 'Electronic money institution intermediaryPayment institutionElectronic money institution intermediary', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activity', 721319, 'N6C9RX', 'dsjlkgm@gmail.com', 'GDRSPVXWEB', '+37090761584', 'Active', '15.03.2001', '2019-05-10 06:27:21', '2019-05-10 06:27:21'),
(23, 'AYVGRBESFX', 'BankPayment institutionElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 150971, 'R9XFZJ', 'ktaemxj@gmail.com', 'KMJAXUVYPB', '+37094503217', 'Active', '19.09.1997', '2019-05-10 06:27:22', '2019-05-10 06:27:22'),
(24, 'THUKPSXABM', 'Electronic money institution intermediaryPayment institutionBank', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of Lithuania', 292643, 'AU3FRG', 'uwsfptk@gmail.com', 'UHENASGMDF', '+37081570934', 'Active', '24.02.1999', '2019-05-10 06:27:24', '2019-05-10 06:27:24'),
(25, 'HEUXYCSPJT', 'BankElectronic money institution intermediaryElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 389808, '3YDFSE', 'jemdtsh@gmail.com', 'GJFRLKTUSH', '+37042586793', 'Active', '04.01.2008', '2019-05-10 06:27:26', '2019-05-10 06:27:26'),
(26, 'KGJAELMSNT', 'Payment institutionElectronic money institution intermediaryBank', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of Lithuania', 853520, 'V1WGP7', 'sbexrwo@gmail.com', 'FUTNRKLAZV', '+37054912870', 'Active', '17.07.2011', '2019-05-10 06:27:28', '2019-05-10 06:27:28'),
(27, 'ZAKXYMJWBU', 'Payment institutionBankPayment institution', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 909811, '5SUZ2P', 'fzwtbqd@gmail.com', 'JDZSRBNXLG', '+37018405963', 'Active', '06.01.2008', '2019-05-10 06:27:30', '2019-05-10 06:27:30'),
(28, 'BVZLHPDRWG', 'Electronic money institution intermediaryElectronic money institution intermediaryPayment institution', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activity', 36455, '3SLE2D', 'ylqpgjc@gmail.com', 'GFTCKXWSHJ', '+37049106528', 'Active', '23.04.2011', '2019-05-10 06:27:32', '2019-05-10 06:27:32'),
(29, 'PDUJENCRHF', 'Electronic money institution intermediaryPayment institutionElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 581834, 'R0JHG6', 'ezulsfo@gmail.com', 'VZUEWCJYDR', '+37047310296', 'Active', '14.05.2009', '2019-05-10 06:27:33', '2019-05-10 06:27:33'),
(30, 'CGHFWNTZRA', 'Electronic money institution intermediaryElectronic money institution intermediaryElectronic money institution intermediary', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 316107, 'LYGLZB', 'mtuqrgf@gmail.com', 'TUSNWKJLEG', '+37054869703', 'Active', '19.04.2005', '2019-05-10 06:27:35', '2019-05-10 06:27:35'),
(31, 'VUXFWKBCSM', 'Electronic money institution intermediaryElectronic money institution intermediaryPayment institution', 'Banks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activityBanks authorised in the Republic of Lithuania', 147382, '006F26', 'nimdcpo@gmail.com', 'RWUXGNMKCP', '+37018439265', 'Active', '06.06.2005', '2019-05-10 06:27:51', '2019-05-10 06:27:51'),
(32, 'CDMEBWJRNV', 'BankElectronic money institution intermediaryElectronic money institution intermediary', 'Payment institutions holding a licence for restricted activityBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 670638, '6AW72E', 'svtwyin@gmail.com', 'KGAPCFNBRW', '+37074153689', 'Active', '30.06.1999', '2019-05-10 06:27:56', '2019-05-10 06:27:56'),
(33, 'YKZJNUVHTC', 'Electronic money institution intermediaryPayment institutionBank', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 853529, '13XTPV', 'gtdwrio@gmail.com', 'NKWGMBZCUE', '+37069143570', 'Active', '08.03.1992', '2019-05-10 06:27:58', '2019-05-10 06:27:58'),
(34, 'XTHAVZWCJP', 'BankElectronic money institution intermediaryElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 989289, 'NWB37A', 'tbqaods@gmail.com', 'UBDXYHSVTN', '+37023581967', 'Active', '17.01.1992', '2019-05-10 06:28:01', '2019-05-10 06:28:01'),
(35, 'FSJKNPLTXG', 'Electronic money institution intermediaryPayment institutionElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activityBanks authorised in the Republic of Lithuania', 844571, 'A1BL9C', 'jeizmwr@gmail.com', 'YNFUCRGMTP', '+37060231748', 'Active', '03.12.2016', '2019-05-10 06:28:04', '2019-05-10 06:28:04'),
(36, 'UTGFLYEBMJ', 'BankBankBank', 'Payment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 651641, 'JTMK19', 'letocfk@gmail.com', 'XVSRDYBLNW', '+37025783910', 'Active', '24.02.1994', '2019-05-10 06:28:07', '2019-05-10 06:28:07'),
(37, 'PNESFZYBTL', 'Electronic money institution intermediaryPayment institutionPayment institution', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activity', 492386, '5NR6LZ', 'bkxgmjo@gmail.com', 'ZENMKLVDWU', '+37054213689', 'Active', '21.04.2004', '2019-05-10 06:28:10', '2019-05-10 06:28:10'),
(38, 'HBFVYAUNZG', 'Payment institutionBankElectronic money institution intermediary', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaBanks authorised in the Republic of Lithuania', 720944, '1T5FNM', 'njetbug@gmail.com', 'RACLUHKGFN', '+37004391652', 'Active', '07.04.1995', '2019-05-10 06:28:13', '2019-05-10 06:28:13'),
(39, 'KUXEGVJBFD', 'Payment institutionBankElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of Lithuania', 705740, 'UB2ZP9', 'pmqrlyo@gmail.com', 'ADLYGFXTSP', '+37030789145', 'Active', '17.11.1999', '2019-05-10 06:28:17', '2019-05-10 06:28:17'),
(40, 'ULBDVKMGNA', 'Payment institutionElectronic money institution intermediaryElectronic money institution intermediary', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of Lithuania', 169527, 'T4VY5C', 'vkdepya@gmail.com', 'LJDPBRFNCM', '+37097526831', 'Active', '20.10.2011', '2019-05-10 06:28:21', '2019-05-10 06:28:21'),
(41, 'EHWRJCZLXK', 'Electronic money institution intermediaryBankPayment institution', 'Payment institutions holding a licence for restricted activityBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 643758, 'PTUBS5', 'rcvwjbd@gmail.com', 'RYZGBAXDFW', '+37054107289', 'Active', '23.02.1996', '2019-05-10 06:28:24', '2019-05-10 06:28:24'),
(42, 'JTFHWYPXMD', 'BankPayment institutionBank', 'Payment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of Lithuania', 88999, 'KFJLYR', 'qntmyxi@gmail.com', 'TFNBJSEMXY', '+37052470389', 'Active', '08.09.1996', '2019-05-10 06:28:26', '2019-05-10 06:28:26'),
(43, 'UPTASRGFZD', 'Electronic money institution intermediaryElectronic money institution intermediaryElectronic money institution intermediary', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 975701, 'E45GGV', 'jorxzyb@gmail.com', 'XFCHBARTUN', '+37047628531', 'Active', '01.02.2009', '2019-05-10 06:28:28', '2019-05-10 06:28:28'),
(44, 'APTHWBFRXZ', 'Electronic money institution intermediaryPayment institutionElectronic money institution intermediary', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of Lithuania', 435438, '043MJ8', 'iakcusp@gmail.com', 'FHBARSKLJX', '+37068731259', 'Active', '23.05.1999', '2019-05-10 06:28:29', '2019-05-10 06:28:29'),
(45, 'NGJWLZXFEY', 'Payment institutionPayment institutionBank', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 558764, '4X1FBW', 'dvnurgc@gmail.com', 'JKZYDENMUB', '+37035918762', 'Active', '20.07.2015', '2019-05-10 06:28:32', '2019-05-10 06:28:32'),
(46, 'ZEHCURPXNW', 'Payment institutionBankBank', 'Banks authorised in the Republic of LithuaniaBanks authorised in the Republic of LithuaniaBanks authorised in the Republic of Lithuania', 436028, 'ACBCCG', 'xhidpew@gmail.com', 'UDBXSTKHGR', '+37040712965', 'Active', '20.12.1991', '2019-05-10 06:28:34', '2019-05-10 06:28:34'),
(47, 'XUMSDTPNGK', 'BankElectronic money institution intermediaryBank', 'Payment institutions holding a licence for restricted activityBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 956481, 'VRWAES', 'xjoqspk@gmail.com', 'FEXMUJHYZT', '+37092708536', 'Active', '08.12.2001', '2019-05-10 06:28:36', '2019-05-10 06:28:36'),
(48, 'HZNCLXYERT', 'Payment institutionPayment institutionElectronic money institution intermediary', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 813029, 'WXP8UW', 'pucjzqm@gmail.com', 'VXBTNRDPGF', '+37047390856', 'Active', '10.04.2001', '2019-05-10 06:28:37', '2019-05-10 06:28:37'),
(49, 'CULJHTRGVB', 'Payment institutionBankPayment institution', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 25389, 'ARJ4ZK', 'uthbqsv@gmail.com', 'BVXWRAGEYJ', '+37069538417', 'Active', '08.12.2012', '2019-05-10 06:28:40', '2019-05-10 06:28:40'),
(50, 'XJCDGZPTRS', 'BankElectronic money institution intermediaryElectronic money institution intermediary', 'Payment institutions holding a licence for restricted activityBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 255870, '0G0DMN', 'jeqlpuh@gmail.com', 'LADYENHWPJ', '+37056204971', 'Active', '04.07.2018', '2019-05-10 06:28:42', '2019-05-10 06:28:42'),
(51, 'NCPLVREWDG', 'Payment institutionBankPayment institution', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 510925, 'B5AYU4', 'hvorkel@gmail.com', 'XKLDZNAWRS', '+37064025819', 'Active', '21.05.2005', '2019-05-10 06:28:44', '2019-05-10 06:28:44'),
(52, 'WSXEHRVJAG', 'Electronic money institution intermediaryElectronic money institution intermediaryElectronic money institution intermediary', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaBanks authorised in the Republic of Lithuania', 773553, 'D7890S', 'vqgiflb@gmail.com', 'XBANGUYMWS', '+37093172508', 'Active', '26.03.1992', '2019-05-10 06:28:47', '2019-05-10 06:28:47'),
(53, 'BJPMWELXFZ', 'BankBankElectronic money institution intermediary', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaBanks authorised in the Republic of Lithuania', 950027, 'C3WV07', 'zjqfwbi@gmail.com', 'KFGSCVHYLP', '+37074589103', 'Active', '24.04.2008', '2019-05-10 06:28:48', '2019-05-10 06:28:48'),
(54, 'PHAYBKUTWE', 'Payment institutionElectronic money institution intermediaryPayment institution', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryBanks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 67250, 'U4R2CB', 'axzgeqj@gmail.com', 'MZXHLVYDNJ', '+37075216849', 'Active', '15.04.2016', '2019-05-10 06:28:51', '2019-05-10 06:28:51'),
(55, 'PYNMDXJAKS', 'Electronic money institution intermediaryElectronic money institution intermediaryPayment institution', 'Payment institutions holding a licence for restricted activityBanks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 694452, '9GU7AF', 'exhlgfu@gmail.com', 'NPFXEUSKHT', '+37009342865', 'Active', '24.08.2004', '2019-05-10 06:28:56', '2019-05-10 06:28:56'),
(56, 'HCUMRBSJVT', 'Payment institutionPayment institutionPayment institution', 'Payment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 861675, '2C6F2L', 'szkouei@gmail.com', 'TWKHXUMCFP', '+37013547068', 'Active', '16.08.2016', '2019-05-10 06:28:59', '2019-05-10 06:28:59'),
(57, 'LGNCEKVJYP', 'BankPayment institutionBank', 'Banks authorised in the Republic of LithuaniaElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activity', 702952, 'UBFD6R', 'iuajbfy@gmail.com', 'ZEWMCLHVXB', '+37030594872', 'Active', '07.10.2007', '2019-05-10 06:29:00', '2019-05-10 06:29:00'),
(58, 'JUTGEBZRWA', 'BankElectronic money institution intermediaryPayment institution', 'Banks authorised in the Republic of LithuaniaBanks authorised in the Republic of LithuaniaPayment institutions holding a licence for restricted activity', 538986, 'FMD19K', 'vynextg@gmail.com', 'VEWKXYBMDZ', '+37021308467', 'Active', '17.11.1994', '2019-05-10 06:29:02', '2019-05-10 06:29:02'),
(59, 'YECDKXRUJA', 'Electronic money institution intermediaryElectronic money institution intermediaryPayment institution', 'Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediaryPayment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activity', 194103, 'GE7L6Z', 'umcpqnr@gmail.com', 'NLEFMZGSDA', '+37018496235', 'Active', '09.11.1998', '2019-05-10 06:29:04', '2019-05-10 06:29:04'),
(60, 'APXDYTVFNK', 'Payment institutionPayment institutionBank', 'Payment institutions holding a licence for restricted activityPayment institutions holding a licence for restricted activityElectronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 581676, '9D0LLA', 'kfadioz@gmail.com', 'PTWEKHLJVA', '+37006715429', 'Active', '23.07.1993', '2019-05-10 06:29:11', '2019-05-10 06:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `average_salary` double NOT NULL,
  `social_insurance_taxes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turnover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_likes` int(11) NOT NULL,
  `social_media_followers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `company_id`, `vat`, `manager`, `employees`, `average_salary`, `social_insurance_taxes`, `turnover`, `social_media_likes`, `social_media_followers`, `year`, `created_at`, `updated_at`) VALUES
(1, 1, 'LT32194', 'DPYTWRZVJK', '250', 8051, '20437', '937510', 261795, '428760', '2016', '2019-05-10 13:07:28', '2019-05-10 13:07:28'),
(2, 2, 'LT54176', 'CZWYEDKGTA', '917', 3749, '31862', '617835', 975843, '549763', '2017', '2019-05-10 13:07:30', '2019-05-10 13:07:30'),
(3, 3, 'LT21935', 'THYECJPNXF', '195', 5978, '72568', '315024', 174206, '460832', '2015', '2019-05-10 13:07:30', '2019-05-10 13:07:30'),
(4, 4, 'LT82017', 'DVFPTYGESL', '560', 2580, '04539', '209436', 651204, '940715', '2015', '2019-05-10 13:07:31', '2019-05-10 13:07:31'),
(5, 5, 'LT54869', 'LPMHJXUNSA', '856', 8653, '21864', '528347', 95762, '603245', '2018', '2019-05-10 13:07:31', '2019-05-10 13:07:31'),
(6, 6, 'LT08963', 'KDPVLBHAYR', '319', 4098, '96731', '049653', 51394, '712869', '2015', '2019-05-10 13:07:32', '2019-05-10 13:07:32'),
(7, 7, 'LT74519', 'LJBDYGXAWE', '207', 3572, '68740', '915423', 398542, '294153', '2016', '2019-05-10 13:07:33', '2019-05-10 13:07:33'),
(8, 8, 'LT93085', 'PGJXRZNCFE', '530', 6043, '89342', '731205', 754968, '281940', '2017', '2019-05-10 13:07:33', '2019-05-10 13:07:33'),
(9, 9, 'LT24607', 'LNKDWRBJHF', '861', 2504, '25816', '125976', 984310, '712380', '2018', '2019-05-10 13:07:33', '2019-05-10 13:07:33'),
(10, 10, 'LT82146', 'GYUMPEHLCB', '784', 5846, '18409', '630785', 751648, '483592', '2015', '2019-05-10 13:07:34', '2019-05-10 13:07:34'),
(11, 11, 'LT43218', 'RFJBKZTYDM', '654', 4127, '69208', '765142', 985037, '785342', '2016', '2019-05-10 13:07:35', '2019-05-10 13:07:35'),
(12, 12, 'LT71589', 'MBKLHZXYVT', '236', 5321, '24396', '234607', 589742, '539187', '2017', '2019-05-10 13:07:35', '2019-05-10 13:07:35'),
(13, 13, 'LT89610', 'ELNGADBFZU', '975', 3246, '15092', '143972', 59236, '815637', '2018', '2019-05-10 13:07:36', '2019-05-10 13:07:36'),
(14, 14, 'LT14938', 'NJFPVRWKBA', '685', 853, '40628', '654718', 805176, '641390', '2018', '2019-05-10 13:07:36', '2019-05-10 13:07:36'),
(15, 15, 'LT20461', 'VCKRFGUWMJ', '560', 8203, '83761', '927361', 986031, '341926', '2016', '2019-05-10 13:07:37', '2019-05-10 13:07:37'),
(16, 16, 'LT59041', 'LZJSFHWREM', '497', 2654, '81206', '302691', 895621, '64385', '2017', '2019-05-10 13:07:37', '2019-05-10 13:07:37'),
(17, 17, 'LT54971', 'GAJDPZLFYR', '385', 7460, '63795', '764159', 496138, '423098', '2015', '2019-05-10 13:07:38', '2019-05-10 13:07:38'),
(18, 18, 'LT21934', 'NUJBSHLDKF', '169', 3849, '15076', '642981', 138672, '742958', '2017', '2019-05-10 13:07:38', '2019-05-10 13:07:38'),
(19, 19, 'LT37018', 'UBPRHDMAWJ', '186', 4602, '83169', '825490', 720546, '932154', '2018', '2019-05-10 13:07:39', '2019-05-10 13:07:39'),
(20, 20, 'LT91863', 'TUCNLAFGRJ', '452', 2310, '24916', '680731', 578962, '184960', '2017', '2019-05-10 13:07:39', '2019-05-10 13:07:39'),
(21, 21, 'LT68315', 'NHEDWCRLPT', '219', 8943, '39670', '217980', 957108, '103592', '2018', '2019-05-10 13:07:40', '2019-05-10 13:07:40'),
(22, 22, 'LT74539', 'AMLDHNEWPX', '143', 6541, '21367', '601893', 230478, '941725', '2017', '2019-05-10 13:07:40', '2019-05-10 13:07:40'),
(23, 23, 'LT74529', 'CVEPYKFMDG', '804', 5469, '30264', '475312', 42986, '915368', '2018', '2019-05-10 13:07:41', '2019-05-10 13:07:41'),
(24, 24, 'LT18324', 'DHUYCBVPXM', '803', 4620, '38290', '402631', 917564, '517340', '2015', '2019-05-10 13:07:41', '2019-05-10 13:07:41'),
(25, 25, 'LT28754', 'LMWFTVNXDS', '456', 5306, '53170', '409137', 95471, '975163', '2016', '2019-05-10 13:07:42', '2019-05-10 13:07:42'),
(26, 26, 'LT03429', 'JPZTDRXUMS', '870', 5291, '24016', '815064', 632507, '137254', '2016', '2019-05-10 13:07:42', '2019-05-10 13:07:42'),
(27, 27, 'LT49261', 'PCKEHAUVTY', '481', 926, '75964', '745910', 489561, '34251', '2018', '2019-05-10 13:07:43', '2019-05-10 13:07:43'),
(28, 28, 'LT19402', 'XCPWEKVUZH', '379', 3497, '81705', '681034', 176098, '641895', '2016', '2019-05-10 13:07:43', '2019-05-10 13:07:43'),
(29, 29, 'LT01345', 'JUGMZVLAWY', '480', 9158, '67023', '870129', 743982, '863794', '2017', '2019-05-10 13:07:43', '2019-05-10 13:07:43'),
(30, 30, 'LT27950', 'YMUGDJNBAL', '305', 8924, '13402', '236418', 849056, '839405', '2017', '2019-05-10 13:07:44', '2019-05-10 13:07:44'),
(31, 31, 'LT56029', 'YLCRAXBSEK', '603', 5748, '78065', '762980', 294360, '251679', '2017', '2019-05-10 13:07:45', '2019-05-10 13:07:45'),
(32, 32, 'LT07841', 'MLSGNHTCPV', '039', 3429, '39104', '914685', 408957, '918402', '2016', '2019-05-10 13:07:45', '2019-05-10 13:07:45'),
(33, 33, 'LT49028', 'PVERWJHUYX', '346', 6597, '59213', '639054', 892461, '142569', '2016', '2019-05-10 13:07:45', '2019-05-10 13:07:45'),
(34, 34, 'LT01438', 'XUMSDTPNGK', '259', 836, '87316', '437109', 821645, '563079', '2018', '2019-05-10 13:07:46', '2019-05-10 13:07:46'),
(35, 35, 'LT65701', 'AJLPEGXYUW', '963', 4265, '76314', '802371', 385640, '982745', '2015', '2019-05-10 13:07:46', '2019-05-10 13:07:46'),
(36, 36, 'LT23719', 'GLKCRZSXJE', '407', 6403, '13095', '043857', 263901, '490615', '2017', '2019-05-10 13:07:47', '2019-05-10 13:07:47'),
(37, 37, 'LT89075', 'XVYRAZDJHB', '357', 4598, '79318', '328947', 253718, '740985', '2016', '2019-05-10 13:07:47', '2019-05-10 13:07:47'),
(38, 38, 'LT51632', 'JZCLFDRPBX', '786', 6247, '80294', '896350', 427635, '635127', '2017', '2019-05-10 13:07:48', '2019-05-10 13:07:48'),
(39, 39, 'LT36781', 'WAPJGZERLS', '026', 7849, '61923', '435816', 976380, '910564', '2018', '2019-05-10 13:07:48', '2019-05-10 13:07:48'),
(40, 40, 'LT29851', 'PFTAUYGVLD', '928', 6849, '53809', '856042', 843569, '820675', '2016', '2019-05-10 13:07:48', '2019-05-10 13:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_10_025823_create_companies_table', 1),
(4, '2019_05_10_025906_create_company_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `sales` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `assets` int(11) NOT NULL,
  `debt` double NOT NULL,
  `customer_review` double NOT NULL,
  `turnover` double NOT NULL,
  `market_value` double NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `sales`, `profit`, `assets`, `debt`, `customer_review`, `turnover`, `market_value`, `status`) VALUES
(3, 68, 15, 151, 62, 0.38360960354335, 0.4135893648449, 182.3, 'MOST LIKELY'),
(4, 42, 8, 700, 51, 0.33709833604885, 0.67469879518072, 114.5, 'MOST LIKELY'),
(5, 38, 7, 651, 44, 0.21477674372836, 0.72916666666667, 99, 'MOST LIKELY'),
(6, 37, 5, 756, 18, 0.6582866779093, 0.75880758807588, 75.3, 'MOST LIKELY'),
(7, 34, 6, 660, 41, 0.55324899864885, 0.82352941176471, 83.9, 'MOST LIKELY'),
(8, 59, 2, 39, 93, 0.056543806791826, 0.47863247863248, 43.5, 'MOST LIKELY'),
(9, 25, 4, 36, 19, 0.53002730968139, 1.1336032388664, 58.1, 'MOST LIKELY'),
(10, 58, 2, 22, 94, 0.82777850724282, 0.48027444253859, 41.3, 'MOST LIKELY'),
(11, 19, 1, 119, 86, 0.22911632854053, 1.4432989690722, 13.5, 'MOST LIKELY'),
(12, 10, 1, 145, 44, 0.10009843523332, 2.7184466019417, 17.2, 'MOST LIKELY'),
(13, 1, 1, 5, 3691, 0.64635256148666, 20, 13.1, 'NOT LIKELY'),
(14, 11, -1, 16, 4028, 0.36164271666393, 2.5454545454545, 4.3, 'NOT LIKELY'),
(15, 2, 0, 52, 2032, 0.98712625031186, 13.333333333333, 3.1, 'NOT LIKELY'),
(16, 3, 0, 58, 469, 0.066058361094473, 10.37037037037, 2, 'NOT LIKELY'),
(17, 9, 0, 13, 2776, 0.49048502206677, 3.1460674157303, 0, 'NOT LIKELY'),
(18, 1, 0, 30, 2156, 0.25381423645513, 20, 0.7, 'NOT LIKELY'),
(19, 7, -2, 274, 743, 0.97417291356183, 4.1791044776119, 4.5, 'NOT LIKELY'),
(20, 8, 0, 10, 3766, 0.80251105553239, 3.4146341463415, 7.7, 'NOT LIKELY'),
(21, 4, 0, 85, 1304, 0.91329979811901, 6.5116279069767, 4.4, 'NOT LIKELY'),
(22, 6, 0, 25, 2272, 0.81517219031325, 4.6666666666667, 1.5, 'NOT LIKELY'),
(23, 3, 0, 68, 3826, 0.96984735459602, 9.6551724137931, 3.2, 'NOT LIKELY'),
(24, 2, -2, 58, 1919, 0.9878141871754, 15.555555555556, 2, 'NOT LIKELY'),
(25, 7, 0, 18, 4871, 0.99247219462617, 3.943661971831, 4.1, 'NOT LIKELY'),
(26, 2, 0, 45, 4575, 0.94767656844815, 13.333333333333, 2.2, 'NOT LIKELY'),
(27, 2, 0, 43, 360, 0.23126332582354, 14, 3.4, 'NOT LIKELY'),
(28, 4, 1, 3, 776, 0.34791205045843, 7.1794871794872, 4.3, 'NOT LIKELY'),
(29, 5, 0, 4, 1855, 0.13078371126448, 6.0869565217391, 7.7, 'NOT LIKELY'),
(30, 2, 0, 3, 4137, 0.9754405826226, 17.5, 10.6, 'NOT LIKELY'),
(31, 4, 0, 6, 3172, 0.97097070348257, 8, 8.4, 'NOT LIKELY'),
(32, 2, 0, 4, 852, 0.9035366631737, 13.333333333333, 9.7, 'NOT LIKELY'),
(33, 2, 0, 7, 3000, 0.57533503829482, 16.470588235294, 13.8, 'NOT LIKELY'),
(34, 10, 0, 6, 3913, 0.25896908386011, 2.7722772277228, 3.2, 'NOT LIKELY'),
(35, 5, 0, 6, 1274, 0.54249901142597, 5.9574468085106, 5.8, 'NOT LIKELY'),
(36, 3, 0, 3, 4665, 0.26272728625035, 8.4848484848485, 7.8, 'NOT LIKELY'),
(37, 1, 0, 2, 376, 0.11623895208478, 31.111111111111, 13.6, 'NOT LIKELY'),
(38, 3, 0, 23, 1922, 0.67619057585659, 9.0322580645161, 3.1, 'NOT LIKELY'),
(39, 6, 0, 18, 92, 0.78160558852536, 4.9122807017544, 15.8, 'LIKELY'),
(40, 6, 0, 40, 4474, 0.37247683659231, 4.4444444444444, 4.1, 'LIKELY'),
(41, 4, 1, 10, 1202, 0.55811707068028, 7.1794871794872, 10.1, 'LIKELY'),
(42, 9, 0, 57, 75, 0.7270915628354, 3.2558139534884, 3.5, 'LIKELY'),
(43, 9, 1, 13, 59, 0.047035525318416, 2.9787234042553, 7.7, 'LIKELY'),
(44, 14, 1, 10, 6, 0.47243013937969, 2.0289855072464, 7.1, 'LIKELY'),
(45, 7, 1, 13, 46, 0.61621547083477, 4, 6.7, 'LIKELY'),
(46, 4, 1, 18, 75, 0.098086774362498, 8, 12.1, 'LIKELY'),
(47, 4, 1, 18, 39, 0.20987394011922, 6.5116279069767, 7.2, 'LIKELY'),
(48, 11, 1, 5, 64, 0.66856857540375, 2.5225225225225, 8.9, 'LIKELY'),
(49, 6, 1, 23, 19, -0.25172104292474, 4.8275862068966, 5.2, 'LIKELY'),
(50, 4, 1, 20, 37, -0.30166657483934, 8, 7.7, 'LIKELY'),
(51, 1, 1, 16, 3316, 0.13531797076261, 23.333333333333, 4.7, 'LIKELY'),
(52, 6, -1, 28, 45, 0.11558986184005, 4.8275862068966, 44.6, 'LIKELY');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilege` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `privilege`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Izaiah Schulist', 'rollin50@example.org', 'Main_admin', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Eoq4AA2zMJ', '2019-05-10 03:47:09', '2019-05-10 03:47:09'),
(2, 'Prof. Marquis Schmeler Jr.', 'garnet85@example.org', 'Sub_admin', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '6ab7GU2Xps', '2019-05-10 03:47:10', '2019-05-10 03:47:10'),
(3, 'Prof. Deangelo Kuvalis', 'kasandra.barton@example.com', 'Main_admin', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '1mOVpbm94q', '2019-05-10 03:47:11', '2019-05-10 03:47:11'),
(4, 'Dr. Conor Roberts', 'brandon32@example.com', 'Sub_admin', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'I89BLNru45', '2019-05-10 03:47:11', '2019-05-10 03:47:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
