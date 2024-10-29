-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 01:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muslimgive`
--

-- --------------------------------------------------------

--
-- Table structure for table `charities_ca1_ca2`
--

CREATE TABLE `charities_ca1_ca2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ca1_registerd` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `adt_fn_st_av` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`adt_fn_st_av`)),
  `py_ adt_fn_st_av` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`py_ adt_fn_st_av`)),
  `imp_epr_avl_wfi_inf` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`imp_epr_avl_wfi_inf`)),
  `ch_pr_qd _of_r` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ch_pr_qd _of_r`)),
  `Administrative_of_rv` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Administrative_of_rv`)),
  `other_pending` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`other_pending`)),
  `In_d_net_res` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`In_d_net_res`)),
  `pr_yr_r` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pr_yr_r`)),
  `total_reserve_at_year_end` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`total_reserve_at_year_end`)),
  `no._of_months_to_spend_the_reserve` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`no._of_months_to_spend_the_reserve`)),
  `transparency_20` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`transparency_20`)),
  `Cause Spending vs. other_spending_60` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Cause Spending vs. other_spending_60`)),
  `distribution vs accumulation_20` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`distribution vs accumulation_20`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `charities_ca3`
--

CREATE TABLE `charities_ca3` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `zak_pol_cle_lab_and_acc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`zak_pol_cle_lab_and_acc`)),
  `who_mak_up_gov_boa` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`who_mak_up_gov_boa`)),
  `shariah_advisory_board` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`shariah_advisory_board`)),
  `nam_of_sha_adv_boa_lis` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`nam_of_sha_adv_boa_lis`)),
  `ex_of_co_with_re_set_out_by_ca` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ex_of_co_with_re_set_out_by_ca`)),
  `exp_why_zak_fun_are_col_and_dis` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_why_zak_fun_are_col_and_dis`)),
  `exp_of_what_cha_of_cus_is_from_rec_zak` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_what_cha_of_cus_is_from_rec_zak`)),
  `zakat_funds_kept_separate` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`zakat_funds_kept_separate`)),
  `tur_time_for_zak_dis_sha` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tur_time_for_zak_dis_sha`)),
  `mention_of_zakat_to_minors` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mention_of_zakat_to_minors`)),
  `vet_pro_for_zak_fun_app` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`vet_pro_for_zak_fun_app`)),
  `me_of_whe_zak_is_dis_in_cash_or_oth_for` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`me_of_whe_zak_is_dis_in_cash_or_oth_for`)),
  `Internal_external_audit` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Internal_external_audit`)),
  `mention_of_zakat_elibility_formula` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mention_of_zakat_elibility_formula`)),
  `zakat_calculator` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`zakat_calculator`)),
  `men_of_zak_adm_cost_amo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`men_of_zak_adm_cost_amo`)),
  `public_fundrasing_costs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`public_fundrasing_costs`)),
  `zakat_education_bank` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`zakat_education_bank`)),
  `live_zakat_calculation_support` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`live_zakat_calculation_support`)),
  `for_app_on_zak_cam` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`for_app_on_zak_cam`)),
  `clear_public_zakat_policy` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`clear_public_zakat_policy`)),
  `zak_und_ove_1_lun_yea` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`zak_und_ove_1_lun_yea`)),
  `exp_of_the_cat_of_fu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_the_cat_of_fu`)),
  `exp_of_the_cat_of_mas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_the_cat_of_mas`)),
  `exp_of_the_cat_of_ami_ala` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_the_cat_of_ami_ala`)),
  `exp_of_the_cat_of_al-mua_qul` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_the_cat_of_al-mua_qul`)),
  `exp_of_the_cat_of_fi_ar-ri` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_the_cat_of_fi_ar-ri`)),
  `exp_of_the_cat_of_al-gh` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_the_cat_of_al-gh`)),
  `xap_of_the_cat_of_fi_sab` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`xap_of_the_cat_of_fi_sab`)),
  `exp_of_the_cat_of_Ibn_as-sa` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`exp_of_the_cat_of_Ibn_as-sa`)),
  `total` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`total`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `charities_ca4`
--

CREATE TABLE `charities_ca4` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `board_members_names_listed` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`board_members_names_listed`)),
  `board_members_photos_listed` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`board_members_photos_listed`)),
  `board members_at_arms_length` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`board members_at_arms_length`)),
  `leadership_team_names` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`leadership_team_names`)),
  `leadership_team_photos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`leadership_team_photos`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ic_charities`
--

CREATE TABLE `ic_charities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `link_to_cra_return` varchar(255) NOT NULL,
  `fiscal_year_end` varchar(255) NOT NULL,
  `auditors` varchar(255) NOT NULL,
  `charitable_reg_since` timestamp NULL DEFAULT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ic_charities`
--

INSERT INTO `ic_charities` (`id`, `title`, `logo`, `website`, `link_to_cra_return`, `fiscal_year_end`, `auditors`, `charitable_reg_since`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'IDRF (International Development and Relief Foundation)', 'images/7914b95eb3495096f4f07f4179dfc972.png', 'https://muslimgive.org/idrf-ca/', 'https://muslimgive.org/idrf-ca/', '2025', 'Content Here', NULL, 'Content Here', '2024-10-26 22:41:48', '2024-10-26 23:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `ic_charities_ca1_ca2`
--

CREATE TABLE `ic_charities_ca1_ca2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cr1_registerd` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr1_registerd`)),
  `cr2_adt_fn_st_av` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_adt_fn_st_av`)),
  `cr2_py_ adt_fn_st_av` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_py_ adt_fn_st_av`)),
  `cr2_imp_epr_avl_wfi_inf` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_imp_epr_avl_wfi_inf`)),
  `cr2_ch_pr_qd _of_r` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_ch_pr_qd _of_r`)),
  `cr2_Administrative_of_rv` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_Administrative_of_rv`)),
  `cr2_other_pending` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_other_pending`)),
  `cr2_total spent` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_total spent`)),
  `cr2_In_d_net_res` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_In_d_net_res`)),
  `cr2_pr_yr_r` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr2_pr_yr_r`)),
  `total_reserve_at_year_end` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`total_reserve_at_year_end`)),
  `no._of_months_to_spend_the_reserve` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`no._of_months_to_spend_the_reserve`)),
  `transparency_20` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`transparency_20`)),
  `Cause Spending vs. other_spending_60` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Cause Spending vs. other_spending_60`)),
  `distribution vs accumulation_20` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`distribution vs accumulation_20`)),
  `cr3_zakat policy clearly labeled and accessible` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr3_zakat policy clearly labeled and accessible`)),
  `cr3_who makes up governing board` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr3_who makes up governing board`)),
  `cr3_shariah_advisory_board` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr3_shariah_advisory_board`)),
  `cr3_names of shariah_advisory_board_listed` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cr3_names of shariah_advisory_board_listed`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ic_country`
--

CREATE TABLE `ic_country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_country`
--

INSERT INTO `ic_country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `ic_menu`
--

CREATE TABLE `ic_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `priority` int(11) NOT NULL DEFAULT 100,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_column` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Left',
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_menu`
--

INSERT INTO `ic_menu` (`id`, `title`, `parent_id`, `link`, `target`, `priority`, `menu_type`, `has_column`, `position`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Home', 0, '', '_self', 1, NULL, NULL, '0', 'Active', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Contact Us', 0, 'contact-us', '_self', 100, NULL, 'Yes', 'Right', 'Active', 0, '2018-10-30 18:01:50', '2020-02-01 22:41:29'),
(12, 'Registration Success', 0, 'registration-success', '_self', 100, NULL, NULL, '0', 'InActive', 0, '2018-11-10 16:46:54', '2018-12-05 01:42:45'),
(16, 'Products', 0, '#', '_self', 5, NULL, NULL, '0', 'Active', 1, '2018-12-18 01:54:09', '2018-12-18 01:54:09'),
(19, 'BRAKER pro', 16, 'product/braker-pro', '_self', 100, NULL, NULL, '0', 'Active', 0, '2018-12-18 16:15:20', '2019-01-17 13:25:05'),
(20, 'Others', 16, 'sponsor/others', '_self', 100, NULL, NULL, '0', 'Active', 0, '2018-12-18 16:15:28', '2018-12-18 16:16:11'),
(21, 'Service', 0, '#', '_self', 8, NULL, NULL, '0', 'Active', 1, '2018-12-20 01:47:20', '2018-12-20 01:47:20'),
(25, 'Trainers', 0, 'trainers', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-16 01:12:09', '2019-01-16 01:13:01'),
(26, 'Training', 0, '#', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-16 01:12:33', '2019-01-18 16:19:49'),
(27, 'Privacy and policy', 0, 'privacy-and-policy', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-16 13:54:01', '2019-01-16 13:54:01'),
(31, 'AUTOMATION', 21, 'service/automation', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-17 13:38:16', '2019-01-17 13:38:16'),
(32, 'Video', 0, 'video', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 04:45:44', '2019-01-18 04:45:44'),
(39, 'This for test', 26, 'training/this-for-test', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 10:03:58', '2019-01-18 16:22:44'),
(40, 'This course', 26, 'training/this-course', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 10:04:39', '2019-01-18 16:23:35'),
(41, 'PLC training', 26, 'training/plc-training', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 16:26:29', '2019-01-28 16:36:59'),
(42, 'PLC training', 26, 'training/plc-training', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-28 16:36:23', '2019-01-28 16:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `ic_migrations`
--

CREATE TABLE `ic_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_migrations`
--

INSERT INTO `ic_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_02_13_085619_create_products_table', 1),
(2, '2018_02_13_085716_create_product_photos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ic_model_has_permissions`
--

CREATE TABLE `ic_model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ic_model_has_roles`
--

CREATE TABLE `ic_model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_model_has_roles`
--

INSERT INTO `ic_model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(1, 12, 'App\\User'),
(2, 12, 'App\\User'),
(2, 34, 'App\\User'),
(3, 35, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `ic_pages`
--

CREATE TABLE `ic_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `template` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `extra_file` varchar(255) DEFAULT NULL,
  `venue_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extra1` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_pages`
--

INSERT INTO `ic_pages` (`id`, `title`, `short_description`, `slug`, `description`, `template`, `image`, `extra`, `extra_file`, `venue_image`, `created_at`, `updated_at`, `extra1`) VALUES
(1, 'Home', 'djyujytu', 'home', '<p>yiyuiyuiu</p>', 'home', NULL, 'a:7:{i:0;s:3:\"yes\";i:1;s:9:\"sgertyery\";i:2;s:24:\"https://www.youtube.com/\";i:3;s:17:\"<p>dhyrtytyut</p>\";i:4;s:9:\"sgertyery\";i:5;s:9:\"sgertyery\";i:6;s:9:\"sgertyery\";}', NULL, NULL, '2018-10-19 01:57:26', '2018-10-23 17:02:02', 'yes'),
(4, 'About Us', 'This for test', 'about-us', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Alhamdulillah Thousands Of Pilgrims Have Enjoyed Performing Hajj &amp; Umrah With Us Over The Years &hellip;. Here Are Some Of The Reasons Why&hellip;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">By the Grace of Almighty Allah,Engineershas established as a front-runner in a relatively short time ( since 2009 ) in offering Hajj &amp; Umrah packages.&nbsp; Alhamdulillah, Our main concern has always been to remain fair and honest in all our dealings, delivering what we promise and combining professionalism with firm adherence to the&nbsp;<strong style=\"box-sizing: border-box; font-weight: bold;\">Qur&rsquo;an &amp; Sunnah.</strong>&nbsp;We offering Hajj Package&nbsp; &amp; Umrah Hajj Package in Bangladesh at affordable price.&nbsp;</p>\r\n<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">As a result of this, we find that the majority of people who travel with us do so based on recommendations from previous customers [Hajji&rsquo;s].</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">we served happily a large group of High Officials, Alhamdulillah, all of them are very happy about our service. To know more about us , you can visit Haji list &amp; testimonials of this website, Even you can discuss with them before booking Hajj package.</p>\r\n<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We are specialized &amp; country leading company for&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">VIP 5 STAR HAJJ</strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;management at reasonable cost , Even we cater customized packages also to suit clients busy schedule. Hajj trip accompanied by religious person (Mufti Maolana) to guide Hajj rituals &amp; steps according to&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Qur&rsquo;an &amp; Sunnah</strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">. Skilled people appointed in Our Liaison offices in Holy Makkah &amp; Madinah to ensure Quality of service. we are improving our efficiency gradually to ensure Higher level of comfort to our respected Hajis. Jetway Hajj team consist of educated, experienced, skilled &amp; dedicated young peoples to serve respected Guest of Allah(Hajji) properly 24/7. Each &amp; every year we want to serve them at Holy Makkah - Madinah -Arafa-Mudalifa &amp; Jamara. Our aim is your complete satisfaction. we want your travel experience to be memorable in positive way. Our motivated and skilled team is totally committed in providing a reliable, efficient service to the successful completion of every Hajj &amp; umrah trip. We hope you find our web site to be informative and helpful. We always offer the&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Hajj package in Bangladesh</strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">. if you interested please feel free to contact us any time. if you would like to take our&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #ac9013; text-decoration: none; outline: none medium;\" href=\"https://hajjumrahinfobd.com/\" target=\"_blank\" rel=\"noopener\">Hajj and Umrah Hajj package</a></strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;then booking now. Our dedicated team will help you how to quick process on time.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">May Allah Help us to perform our Hajj properly. Jazak Allah Khair</p>', 'general_page', NULL, 'N;', NULL, NULL, '2018-10-24 01:46:23', '2018-12-05 02:07:45', NULL),
(9, 'Contact Us', 'Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'contact-us', NULL, 'contact_us', NULL, 'N;', NULL, NULL, '2018-10-30 18:01:50', '2018-10-30 18:01:50', NULL),
(10, 'Registration Success', NULL, 'registration-success', '<h2><span style=\"background-color: #ffffff; color: #0000ff;\">Your resgistration form successfully. Please check your email or spam to activate account.</span></h2>', 'general_page', NULL, 'N;', NULL, NULL, '2018-11-10 16:46:53', '2018-12-05 01:42:45', NULL),
(11, 'Offer', NULL, 'offer', '<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: #000000; margin-top: 0px; margin-bottom: 10px; font-size: 24px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Bring Your 4G Handset to Robi</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\" align=\"center\">Get 4GB Welcome Bonus &amp; for Six Month keep getting Buy-1 Get-1 Bonus</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">Offer details:</strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">If you have a 4G handset but not using in Robi 4.5G Network, we invite you to come Robi to avail 6 month long exciting benefits. As soon as you connect Robi and make 1<sup style=\"box-sizing: border-box; position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; top: -0.5em;\">st</sup> voice call using 4G handset with a 4G SIM you will get following benefits:</p>\r\n<p><span style=\"color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">How can you avail the offer?</strong></p>\r\n<div class=\"list_new\" style=\"box-sizing: border-box; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding-left: 25px;\">\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Make a Voice Call from your 4G Handset with Robi 4G SIM to register for the campaign</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Within 72 Hours you will get the Welcome Bonus (4GB)</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">On *Regular Pack purchase of above 100Tk MRP, you will get double bonus after Principal pack expire</li>\r\n</ul>\r\n</div>\r\n<p><span style=\"color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">Eligibility &amp; Conditions:</strong></p>\r\n<div class=\"list_new\" style=\"box-sizing: border-box; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding-left: 25px;\">\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Your 4G handset (Unique IMEI) should be New to Robi Network, never used before 17<sup style=\"box-sizing: border-box; position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; top: -0.5em;\">th</sup>Aug 2018. That is, if your 4G handset IMEI already used before 17<sup style=\"box-sizing: border-box; position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; top: -0.5em;\">th</sup>Aug 2018 in Robi network, you will not be eligible for the campaign.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">For multiple tagging (Unique IMEI + Multiple Mobile Number Or Multiple IMEI + Unique Mobile Number) you will not be eligible for the offers.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">You will get Welcome bonus (4GB)once only and can use from same handset IMEI &amp; SIM slot only.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Double bonus will be applicable for above 100Tk *Regular data pack purchase on Recharge or USSD (Not Auto Renew). In case of Auto Renew you will not get Double bonus benefits.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">In case of Repeat purchase within same pack validity, you will get Double bonus once, on expiry of Principal pack.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Double bonus benefit will be applicable from your successful registration (successfully received welcome bonus) to six months.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Benefits will be discontinued if the sim is detached from handset.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Benefits will be discontinued if no pack purchase found in 90 days.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Samsung&nbsp;<a class=\"inner_page_content_anchor\" style=\"box-sizing: border-box; background-color: transparent; color: #003399 !important; text-decoration: none; outline: 0px;\" href=\"https://www.robi.com.bd/current-offers/samsung-cash-back-offer?lang=eng\">Cash back offer</a>&nbsp;subscribers won&rsquo;t be eligible for this campaign.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">In-case of any conflict, Robi reserves the right to judge and assign eligibility towards freebees/rewards delivering.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Robi/authority reserves the right to change, modify, cancel/terminate/stop this competition/contest/ quiz/campaign without assigning any reason whatsoever</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Any decision in relation to the campaign given by the Authority/Robi&nbsp; shall be considered and or construed as full and final</li>\r\n</ul>\r\n</div>\r\n<p><span style=\"box-sizing: border-box; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><br style=\"box-sizing: border-box;\" /></span></p>', 'general_page', NULL, 'N;', NULL, NULL, '2018-12-04 16:20:45', '2018-12-05 01:28:47', NULL),
(13, 'Test page', NULL, 'test-page', '<p>Dasfsadfds</p>', 'general_page', NULL, 'N;', NULL, NULL, '2018-12-05 02:14:19', '2018-12-05 02:14:19', NULL),
(14, 'Trainers', NULL, 'trainers', NULL, 'trainers', NULL, 'N;', NULL, NULL, '2019-01-16 01:12:09', '2019-01-16 01:12:09', NULL),
(15, 'Training', NULL, 'training', NULL, 'training', NULL, 'N;', NULL, NULL, '2019-01-16 01:12:33', '2019-01-16 01:12:33', NULL),
(16, 'Privacy and policy', 'This is caption', 'privacy-and-policy', '<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px;\">movement for 10 <span style=\"color: #99cc00;\">minutes</span> over the last 10 years while his party couldn\'t get even 10 seats in the election. BNP has failed both in the movement and the election. He (Fakhrul) should resign taking the responsibility for the failures if he has the minimum sense of shame,\" he said.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><img src=\"/photos/1/org-m4.jpg\" alt=\"\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">A day after Fakhrul asked him to apologise publicly for committing the offence of \"vote rigging\" in the 11th parliamentary election, Quader hit back at his BNP counterpart while talking to reporters at AL\'s Bangabandhu Avenue central office after an extended meeting of Dhaka south city unit of Jubo League.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Quader, also the road transport and bridges minister, said those who turned down people\'s outstanding victory should apologise to the nation.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">He also said Fakhrul is now behaving like a \'reckless driver\', and urged all to remain alert about him to avert any accident.</p>', 'general_page', NULL, 'N;', NULL, NULL, '2019-01-16 13:54:01', '2019-01-16 13:54:01', NULL),
(17, 'Video', NULL, 'video', NULL, 'video', NULL, 'N;', NULL, NULL, '2019-01-18 04:45:44', '2019-01-18 04:45:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ic_permissions`
--

CREATE TABLE `ic_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_permissions`
--

INSERT INTO `ic_permissions` (`id`, `name`, `parent_id`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 0, 'web', '2018-04-21 22:34:11', '2018-08-16 12:54:10'),
(15, 'User List', 1, 'web', '2018-07-05 09:12:37', '2018-07-05 09:12:37'),
(16, 'Add User', 1, 'web', '2018-07-05 09:18:55', '2018-07-05 09:18:55'),
(21, 'Settings Manager', 0, 'web', '2018-07-22 12:34:36', '2018-07-22 12:34:36'),
(27, 'Pages Manager', 0, 'web', '2018-07-23 06:57:35', '2018-07-23 06:57:35'),
(28, 'Menu Manager', 0, 'web', '2018-07-30 09:04:58', '2018-07-30 09:04:58'),
(29, 'Sliders Manager', 0, 'web', '2018-08-01 06:21:59', '2018-08-01 06:21:59'),
(30, 'Roles Manager', 1, 'web', '2018-08-07 09:09:16', '2018-08-07 09:09:16'),
(32, 'Edit User', 1, 'web', '2018-08-07 09:11:46', '2018-08-07 09:11:46'),
(33, 'Delete User', 1, 'web', '2018-08-07 09:20:15', '2018-08-07 09:20:27'),
(37, 'News Manager', 0, 'web', '2018-10-30 16:07:23', '2018-10-30 16:07:23'),
(41, 'Product Manager', 0, 'web', '2018-12-18 01:49:53', '2018-12-18 01:49:53'),
(42, 'Service Manager', 0, 'web', '2018-12-20 01:30:32', '2018-12-20 01:30:32'),
(43, 'Trainaer Manager', 0, 'web', '2018-12-24 15:20:20', '2018-12-24 15:20:20'),
(44, 'Student Manager', 0, 'web', '2019-01-11 08:09:13', '2019-01-11 08:09:13'),
(45, 'Charity Profile Manager', 0, 'web', '2019-01-15 15:23:30', '2024-10-26 21:58:14'),
(46, 'Video Manager', 0, 'web', '2019-01-18 04:34:18', '2019-01-18 04:34:18'),
(47, 'Course Applicant', 0, 'web', '2019-01-18 14:16:04', '2019-01-18 14:16:04'),
(48, 'Branch Manager', 0, 'web', '2019-03-10 08:37:30', '2019-03-10 08:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `ic_roles`
--

CREATE TABLE `ic_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_roles`
--

INSERT INTO `ic_roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2018-04-21 22:34:11', '2018-10-17 01:39:33'),
(2, 'Staff', 'web', '2018-04-21 22:58:52', '2018-10-17 01:39:04'),
(3, 'Manager', 'web', '2019-01-16 13:39:24', '2019-01-16 13:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `ic_role_assign`
--

CREATE TABLE `ic_role_assign` (
  `id` int(11) NOT NULL,
  `client_role_id` varchar(45) DEFAULT 'null',
  `employee_role_id` varchar(45) DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_role_assign`
--

INSERT INTO `ic_role_assign` (`id`, `client_role_id`, `employee_role_id`) VALUES
(1, '5', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ic_settings`
--

CREATE TABLE `ic_settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_settings`
--

INSERT INTO `ic_settings` (`id`, `key`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_title', NULL, 'muslimgive', NULL, NULL),
(2, 'site_slogan', NULL, 'Empowering Donors & Charities', NULL, NULL),
(3, 'site_favicon', NULL, NULL, NULL, NULL),
(4, 'site_logo', NULL, '/photos/1/Engineers logo.png', NULL, NULL),
(5, 'header_logo_1', NULL, NULL, NULL, NULL),
(6, 'header_logo_2', NULL, NULL, NULL, NULL),
(7, 'footer_logo_1', NULL, NULL, NULL, NULL),
(8, 'footer_logo_2', NULL, NULL, NULL, NULL),
(9, 'site_phone', NULL, '01671971454', NULL, NULL),
(10, 'site_phone2', NULL, NULL, NULL, NULL),
(11, 'site_email', NULL, NULL, NULL, NULL),
(12, 'site_email2', NULL, NULL, NULL, NULL),
(13, 'site_address', NULL, NULL, NULL, NULL),
(14, 'site_facebook', NULL, 'bjvj', NULL, NULL),
(15, 'site_twitter', NULL, NULL, NULL, NULL),
(16, 'site_linkedin', NULL, NULL, NULL, NULL),
(17, 'site_instagram', NULL, NULL, NULL, NULL),
(18, 'count_down_time_title', NULL, NULL, NULL, NULL),
(19, 'countdown_ending_date', NULL, NULL, NULL, NULL),
(20, 'countdown_ending_time', NULL, '7:30 AM', NULL, NULL),
(21, 'home_page_about_us', NULL, NULL, NULL, NULL),
(22, 'home_page_registration', NULL, NULL, NULL, NULL),
(23, 'facebook', NULL, 'https://www.facebook.com/engrmdhafizur', NULL, NULL),
(24, 'twitter', NULL, 'https://twitter.com/l', NULL, NULL),
(25, 'google_plus', NULL, 'https://plus.google.com', NULL, NULL),
(26, 'youtube', NULL, 'https://www.youtube.com/', NULL, NULL),
(27, 'extra_day_passport_umrah', NULL, '30', NULL, NULL),
(28, 'site_lat', NULL, '23.775106', NULL, NULL),
(29, 'site_lon', NULL, '90.384533', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ic_users`
--

CREATE TABLE `ic_users` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_phone` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `father_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `upzilla_id` int(11) DEFAULT NULL,
  `per_post_office` varchar(255) DEFAULT NULL,
  `per_villlege` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(45) NOT NULL,
  `proffession` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `educational_institute` varchar(255) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `is_computer_laptop` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_users`
--

INSERT INTO `ic_users` (`id`, `title`, `name`, `email`, `password`, `phone`, `home_phone`, `reference`, `father_name`, `mother_name`, `present_address`, `division_id`, `district_id`, `upzilla_id`, `per_post_office`, `per_villlege`, `dob`, `gender`, `proffession`, `institute`, `educational_institute`, `passing_year`, `is_computer_laptop`, `image`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ma', 'Admin', 'admin@gmail.com', '$2y$10$E00Pww9HVtpaWsx0sSqIQeA.BW.qI0COQKRdEhwE0YKD.qGlI6tX6', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Admin', 'Active', 'ogMCT5wxkI3SG7pJi9R2UdXJa7JioUsFKEhODwxqHIwXa6WCHrXYkJyOZVbF', '2018-10-20 04:30:46', '2018-10-20 04:30:46'),
(2, 'Md.', 'rashed khan', 'rabiul0420@gmail.com', '$2y$10$yMpiuRwOiZ3AJrjbVjWw.ezlDA9Uh0QB8Od48s0irz/O7ver9Q5xC', '017874556678', '', '', 'abdur rahim', 'amena begum', '5th floor, House#17, Road#17, Mirpur, Dhaka', 2, 49, 133, 'Boro Dunail', 'Chor Dunail', '1900-12-30', 'Male', 'Job Holder', 'IT Clan Bangladesh', 'Ruet', 2013, '2009', 'images/cjbkigxPK7Jyd9s576IsgvrMTPSnUzAblKCcANnd.png', 'Student', 'Active', 'ELrokctucIz425T26TDTXVd8lx2pOKqJQkfibIJT38SL8tLW1KCnEYB2H2EI', '2018-10-20 04:34:32', '2018-10-27 08:38:13'),
(3, 'Md.', 'Bulbul Ahmed', 'bulbul@gmail.com', '$2y$10$QUSniCOFF7cOiJo6E4ovhu4.rlBXhvC9k4ksOO7cIgbXWJZHacjGS', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Active', 'prw9CYGYaJry5Kdk6cuKP5O2LI0PRXjgL60e3z9ZGlZTO2CnoJTVd0ae3TzF', '2018-10-26 14:08:58', '2018-10-26 14:08:58'),
(5, 'Md', 'Amir Sardar', 'amir04@gmail.com', '$2y$10$4WkC9xIMEzo6/OB1k/fumupaz9KjsCO/V9Baz6HBR4wTbSqZw21Vu', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', 'lnA0MnrkfLI874na6esC4eKw8VTWVj1rMdNTglxpKyJalAZIAVTe0HlNZUPo', '2018-10-29 01:20:11', '2018-10-29 01:20:11'),
(10, 'Md.', 'rabiul islam', 'rabiul04e@gmail.com', '$2y$10$H/CeAdldXYeH7TuknMusy.xDZftQ4GKf8uMLLSURoYWC8owawN3fq', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-11-07 17:32:59', '2018-11-07 17:32:59'),
(12, 'Md', 'rabiul islam', 'rabiul042044@gmail.com', '$2y$10$ucZ.pE45Jby1OzBw38ic0.QtkdyTotGV4rEWmNxoQ/GtR/Y/AILp.', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-11-07 17:38:57', '2018-11-07 17:38:57'),
(14, 'Md', 'rabiul islam', 'rabiul042o@gmail.com', '$2y$10$wvUMcIaHKN1Nn2dPdXap7elBIukc6vspsrIew5gLA17CBxOklSTgC', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-11-07 17:58:28', '2018-11-07 17:58:28'),
(15, NULL, 'rabiul islam', 'amir1@gmail.com', '$2y$10$lrxri6WE2abRsi8qEdm1Seslpfrv2.GjDml3PMEfmWfcchLzghP1.', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', 'r673BLl6lnlGasTCnpRZ3Z87ftJnmHyDRxvFE4EzkYCgbxjM9Dsou5eZII0Q', '2018-12-05 01:09:18', '2018-12-05 01:09:18'),
(16, NULL, 'halim khan', 'halim@gmail.com', '$2y$10$bi//Ou4KHH4Iwoikc.Ni8.btzZTgFgZKhyOtfeSr1L7QE7wQ0PJcS', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', 'XBnBmoRDIGKhdfUtSVv7hh8A4X4B2s8UFR6XuBMyWeB2HPnqKSGcccvpL2Yb', '2018-12-05 01:12:28', '2018-12-05 01:12:28'),
(17, NULL, 'rashed khan', 'rashed2@gmail.com', '$2y$10$JrDWvFYG3giKx6UallfBjeje9o4QNE7Zxf4T98/BD.1OWjCEOOvB6', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', 'QihEftEAdDIRQBaX0wEkumu2NH9f85CLczBKrL1zll2bZXMjItJ3ligLdr1W', '2018-12-05 01:35:37', '2018-12-05 01:35:37'),
(19, NULL, 'rashed khan', 'rabiul045@gmail.com', '$2y$10$fpejCDV4hnALUYH7uOLbTu3SXQ2FB9/i8F/MST01vh27x7lAn1uFy', '017874556678', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-12-07 15:58:46', '2018-12-07 15:58:46'),
(20, NULL, 'abdul khalek', 'khalek@gmail.com', '$2y$10$VxIZQJ4oxlzo/cn1S8K5nOcP9Dx.mlEK.BYA7b4o9.DL0ps1mEYuW', '0166789', 'rtyrt', 'tutyu65tu7657', 'abdur rahim', 'amena begum', '5th floor, House#17, Road#17, Mirpur, Dhaka', 1, 35, 15, NULL, 'Chor Dunail', '2018-12-14', '', '', '', '', 0000, '0000', 'images/mkkTvo2EzjDSXskCdJUG6wiG73TqaK37T7Qfn8LG.jpeg', 'Student', 'Active', '', '2018-12-09 02:41:05', '2018-12-09 04:13:11'),
(21, NULL, NULL, 'rabiutyl0420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:13:02', '2018-12-16 05:17:29'),
(22, NULL, NULL, 'rabiutyl0420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', '', '2018-12-16 05:14:34', '2018-12-16 05:14:34'),
(23, NULL, NULL, 'rabiutopyl0420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', '', NULL, NULL),
(24, NULL, NULL, 'rabiul0io420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', '', NULL, NULL),
(25, NULL, NULL, 'rabiul0io420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:29:48', '2018-12-16 05:30:06'),
(26, NULL, 'rashed khan', 'rabiul04204@gmail.com', '$2y$10$9C8dsQtLLP01b0/scuzN4OIUt/rFk1x78mrXPa79aoR3LMbD8ZCYq', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:38:12', '2018-12-16 05:38:35'),
(27, NULL, 'rashed khan', 'rabiul0gh420@gmail.com', '$2y$10$gV5pxuMFv3BnUsviOng26.Asp0CqTVRuTXJKfhhSQmBPgfzQgp8M6', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Pending', '', '2018-12-16 05:41:59', '2018-12-16 05:41:59'),
(28, NULL, 'rashed khan', 'rabiul0fgh420@gmail.com', '$2y$10$9spg6qLPGcRYpYs8W5SWa.AfP./4HIGWUYUSmqlb4oOMh684w1DuO', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:42:35', '2018-12-16 05:42:58'),
(29, NULL, 'rashed khan', 'rabiul.ruet04@gmail.com', '$2y$10$1FrInsARfbfkwBTkFyIZ..WYLvc6kTKFQw5jkUM0bV4xiKhUb4niq', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:57:56', '2018-12-16 05:58:17'),
(30, NULL, 'rashed khan', 'test1@gmail.com', '$2y$10$Pb3IPA.OVgDdIoEZWAY7k.g7BqFIJaBaN.WqvxPHR9WP9r2/CNJNe', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', 'robtN4wsChbsi4GgsZXnLiUP2Z05myYYKG2Xw8RWoZKtUrBfzlFthRBFaoAy', '2018-12-16 06:04:27', '2018-12-16 06:04:46'),
(31, NULL, 'Abul Ahad', 'rabiul04@gmail.com', '$2y$10$WtVpDBXPsdiFLYY2AjuyEuJjxjomlXpR6PkvuzPEsOpmTZv4anzkK', '016678', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '', '', 'Student', 'Pending', '', '2019-01-11 07:42:18', '2019-01-11 07:42:18'),
(32, NULL, 'Abul Ahad', 'rabiul02@gmail.com', '$2y$10$1rqp5BUG.THQGb9BaD7.DupqEPbRKd5BApdv9AMUjspPCtBpWFMgm', '016678', '', '', 'Abul khan', 'rabeya bosri', 'Dhaka', 0, NULL, NULL, NULL, NULL, '2018-11-07', '', '', '', 'Ruet', 0000, 'Yes', '', 'Student', 'Pending', '', '2019-01-11 07:52:47', '2019-01-11 07:52:47'),
(33, NULL, 'Abul Ahad', 'rabiul05@gmail.com', '$2y$10$IGcvXiMMYfZjQZxOzyW8tuc6hNwn/XlO6H6u8/xt185aOfYg.7kFy', '0166787899', '017892222', 'This for test', 'Abul khan', 'rabeya bosri', 'Dhaka', 2, 49, 127, NULL, 'Chor Dunail', '2019-03-20', '', '', '', '', 0000, 'Yes', 'images/gISmi9D98VZpcKslZI9Ls25vxoA45nxUndK55bo5.png', 'Student', 'Active', 'o6lsw8hQSzeAly9SOekU7QKvij2yMwGl5uYYbzyVwfbzyuk3dIXTu5ce6R5m', '2019-01-11 07:56:22', '2019-01-12 16:43:47'),
(34, NULL, 'Rabiul', 'rabiul@gmail.com', '$2y$10$E77bIMEyi/.gTUadIyNHGuawxvKStCSMUCDfBTecjZFzKk96aAb2e', '123456', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '', '/photos/1/LOGOg png.png', 'Admin', 'Active', 'ibEaui8GUObQ55o6qSnOOlL0CKPWsvsVtX9D44mOgtF1h0u2AhYny6JWHvOo', '2019-01-16 13:08:12', '2019-01-16 13:19:35'),
(35, NULL, 'Abul kashem', 'kashem@gmail.com', '$2y$10$4.JUGTzb.Esg5pql3nIEZOVsWzY3xdY7MYfaNjhBEM8bwcRnu8hIu', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '', '', 'Admin', 'Active', 'hF78XD6l43YI2DzUTdeG9R6hHMUadEBQZd2oOgfiEnPkZ1jirpJfcPs9JTfZ', '2019-01-16 13:40:33', '2019-01-16 13:40:33'),
(44, NULL, 'rabiul islam', 'rabiulitclan@gmail.com', '$2y$10$hXUM.ZLI8VO.Ym41mer9veACpvTcG0q/Q8K7Jc/MwQl/zHPl/maO.', '0172383', '', '', 'jhygew', 'ertgre', 'erytr', 0, NULL, NULL, NULL, NULL, '2019-02-25', '', '', '', 'yyrty', 0000, 'Yes', '', 'Student', 'Active', '', '2019-02-05 04:06:15', '2019-02-05 04:10:57'),
(45, NULL, 'Md Hafizur', 'pmtcorporate@gmail.com', '$2y$10$JBuAwhhX84mxDR3pW7rzQOdReynqDA0s61aKfh7Au3MNzfgsknnGW', '01731376671', '', '', 'sdf', 'sdf', 'dsf', 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', 'RUET', 0000, 'Yes', '', 'Student', 'Active', 'ZB3PQA3v1QiHfJ62UXFkF7rdOVLPj0BLi1zZDvlhSHHOQEjgJJJ1DaOMIE7S', '2019-03-02 17:56:33', '2019-03-02 17:59:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charities_ca1_ca2`
--
ALTER TABLE `charities_ca1_ca2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charities_ca3`
--
ALTER TABLE `charities_ca3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charities_ca4`
--
ALTER TABLE `charities_ca4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_charities`
--
ALTER TABLE `ic_charities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_charities_ca1_ca2`
--
ALTER TABLE `ic_charities_ca1_ca2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_country`
--
ALTER TABLE `ic_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_menu`
--
ALTER TABLE `ic_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_migrations`
--
ALTER TABLE `ic_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_model_has_permissions`
--
ALTER TABLE `ic_model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `ic_model_has_roles`
--
ALTER TABLE `ic_model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `ic_pages`
--
ALTER TABLE `ic_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_permissions`
--
ALTER TABLE `ic_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_roles`
--
ALTER TABLE `ic_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_role_assign`
--
ALTER TABLE `ic_role_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_settings`
--
ALTER TABLE `ic_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_users`
--
ALTER TABLE `ic_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charities_ca1_ca2`
--
ALTER TABLE `charities_ca1_ca2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charities_ca3`
--
ALTER TABLE `charities_ca3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charities_ca4`
--
ALTER TABLE `charities_ca4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ic_charities`
--
ALTER TABLE `ic_charities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ic_charities_ca1_ca2`
--
ALTER TABLE `ic_charities_ca1_ca2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ic_country`
--
ALTER TABLE `ic_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `ic_menu`
--
ALTER TABLE `ic_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ic_migrations`
--
ALTER TABLE `ic_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ic_pages`
--
ALTER TABLE `ic_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ic_permissions`
--
ALTER TABLE `ic_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `ic_roles`
--
ALTER TABLE `ic_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ic_role_assign`
--
ALTER TABLE `ic_role_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ic_settings`
--
ALTER TABLE `ic_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ic_users`
--
ALTER TABLE `ic_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ic_model_has_permissions`
--
ALTER TABLE `ic_model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `ic_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ic_model_has_roles`
--
ALTER TABLE `ic_model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `ic_roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
