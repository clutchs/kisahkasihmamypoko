-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2015 at 12:26 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dentsu_kisahkasihmamypoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_captcha`
--

CREATE TABLE IF NOT EXISTS `tbl_captcha` (
  `id` int(11) unsigned NOT NULL,
  `time` int(11) DEFAULT NULL,
  `ip_address` varchar(16) DEFAULT NULL,
  `word` varchar(10) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1837 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_captcha`
--

INSERT INTO `tbl_captcha` (`id`, `time`, `ip_address`, `word`) VALUES
(1836, 1438079096, '::1', 'LTXBh'),
(1835, 1438079049, '::1', 'zSqMW');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ci_sessions`
--

INSERT INTO `tbl_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0bb5fdcc1c216d660f9cbe30ce4fa706', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0', 1438074182, ''),
('1b1f6d5f8fcd461753719f760fdc3390', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0', 1438077115, 'a:6:{s:9:"user_data";s:0:"";s:11:"module_list";s:639:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs"},"Module":{"modulelist{{slash}}/index":"Module Lists"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District"}}";s:20:"module_function_list";s:5377:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs","dashboard{{slash}}/add":"Add New Dashboard","dashboard{{slash}}/view":"View Dashboard","dashboard{{slash}}/edit":"Edit Dashboard","dashboard{{slash}}/delete":"Delete Dashboard","dashboard{{slash}}/change":"Change Dashboard Status","user{{slash}}/add":"Add User","user{{slash}}/view":"View User","user{{slash}}/edit":"Edit User","user{{slash}}/delete":"Delete User","user{{slash}}/change":"Change User Status","user{{slash}}/image":"Change User Image","user{{slash}}/upload":"Upload User Image","usergroup{{slash}}/add":"Add User Group","usergroup{{slash}}/view":"View User Group","usergroup{{slash}}/edit":"Edit User Group","usergroup{{slash}}/delete":"Delete User Group","usergroup{{slash}}/change":"Change User Group Status","language{{slash}}/add":"Add Language","language{{slash}}/view":"View Language","language{{slash}}/edit":"Edit Language","language{{slash}}/delete":"Delete Language","language{{slash}}/change":"Change Language Status","setting{{slash}}/add":"Add Setting","setting{{slash}}/view":"View Setting","setting{{slash}}/edit":"Edit Setting","setting{{slash}}/delete":"Delete Setting","setting{{slash}}/change":"Change Setting Status","serverlog{{slash}}/view":"View Server Log","serverlog{{slash}}/edit":"Edit Server Log","serverlog{{slash}}/delete":"Delete Server Log","serverlog{{slash}}/trash":"Trash Server Log"},"Module":{"modulelist{{slash}}/edit":"Edit Module","modulelist{{slash}}/trash":"Delete User Permission"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus","page{{slash}}/index{{slash}}/add":"Add Page","page{{slash}}/index{{slash}}/view":"View Page","page{{slash}}/index{{slash}}/edit":"Edit Page","page{{slash}}/index{{slash}}/delete":"Delete Page","page{{slash}}/index{{slash}}/change":"Change Page Status","page{{slash}}/index{{slash}}/export":"Export Page","page{{slash}}/index{{slash}}/print":"Print Page","pagemenu{{slash}}/index{{slash}}/add":"Add Page Menu","pagemenu{{slash}}/index{{slash}}/view":"View Page Menu","pagemenu{{slash}}/index{{slash}}/edit":"Edit Page Menu","pagemenu{{slash}}/index{{slash}}/delete":"Delete Page Menu","pagemenu{{slash}}/index{{slash}}/change":"Change Page Menu Status","pagemenu{{slash}}/index{{slash}}/export":"Export Page Menu","pagemenu{{slash}}/index{{slash}}/print":"Print Page Menu"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery","participant{{slash}}/index{{slash}}/add":"Add Participant","participant{{slash}}/index{{slash}}/view":"View Participant","participant{{slash}}/index{{slash}}/edit":"Edit Participant","participant{{slash}}/index{{slash}}/delete":"Delete Participant","participant{{slash}}/index{{slash}}/change":"Change Participant Status","participant{{slash}}/index{{slash}}/export":"Export Participant","participant{{slash}}/index{{slash}}/print":"Print Participant","gallery{{slash}}/index{{slash}}/add":"Add Gallery","gallery{{slash}}/index{{slash}}/view":"View Gallery","gallery{{slash}}/index{{slash}}/edit":"Edit Gallery","gallery{{slash}}/index{{slash}}/delete":"Delete Gallery","gallery{{slash}}/index{{slash}}/change":"Change Gallery Status","gallery{{slash}}/index{{slash}}/export":"Export Gallery","gallery{{slash}}/index{{slash}}/print":"Print Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District","province{{slash}}/index{{slash}}/add":"Add Province","province{{slash}}/index{{slash}}/view":"View Province","province{{slash}}/index{{slash}}/edit":"Edit Province","province{{slash}}/index{{slash}}/delete":"Delete Province","province{{slash}}/index{{slash}}/change":"Change Province Status","province{{slash}}/index{{slash}}/export":"Export Province","province{{slash}}/index{{slash}}/print":"Print Province","urbandistrict{{slash}}/index{{slash}}/add":"Add Urban District","urbandistrict{{slash}}/index{{slash}}/view":"View Urban District","urbandistrict{{slash}}/index{{slash}}/edit":"Edit Urban District","urbandistrict{{slash}}/index{{slash}}/delete":"Delete Urban District","urbandistrict{{slash}}/index{{slash}}/change":"Change Urban District Status","urbandistrict{{slash}}/index{{slash}}/export":"Export Urban District","urbandistrict{{slash}}/index{{slash}}/print":"Print Urban District","suburban{{slash}}/index{{slash}}/add":"Add Sub Urban","suburban{{slash}}/index{{slash}}/view":"View Sub Urban","suburban{{slash}}/index{{slash}}/edit":"Edit Sub Urban","suburban{{slash}}/index{{slash}}/delete":"Delete Sub Urban","suburban{{slash}}/index{{slash}}/change":"Change Sub Urban Status","suburban{{slash}}/index{{slash}}/export":"Export Sub Urban","suburban{{slash}}/index{{slash}}/print":"Print Sub Urban","district{{slash}}/index{{slash}}/add":"Add District","district{{slash}}/index{{slash}}/view":"View District","district{{slash}}/index{{slash}}/edit":"Edit District","district{{slash}}/index{{slash}}/delete":"Delete District","district{{slash}}/index{{slash}}/change":"Change District Status","district{{slash}}/index{{slash}}/export":"Export District","district{{slash}}/index{{slash}}/print":"Print District"}}";s:12:"user_session";O:8:"stdClass":8:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:8:"group_id";s:1:"1";s:6:"status";s:1:"1";s:10:"last_login";s:10:"1437980614";s:9:"logged_in";b:1;s:4:"name";s:21:"Administrator Website";}s:8:"curr_url";s:32:"admin-panel/page/index/ajax_list";s:8:"prev_url";s:31:"admin-panel/page/index/update/1";}'),
('3c6501ba8e347005d1519711bf668c77', '::1', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobil', 1438076821, 'a:5:{s:11:"module_list";s:639:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs"},"Module":{"modulelist{{slash}}/index":"Module Lists"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District"}}";s:20:"module_function_list";s:5377:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs","dashboard{{slash}}/add":"Add New Dashboard","dashboard{{slash}}/view":"View Dashboard","dashboard{{slash}}/edit":"Edit Dashboard","dashboard{{slash}}/delete":"Delete Dashboard","dashboard{{slash}}/change":"Change Dashboard Status","user{{slash}}/add":"Add User","user{{slash}}/view":"View User","user{{slash}}/edit":"Edit User","user{{slash}}/delete":"Delete User","user{{slash}}/change":"Change User Status","user{{slash}}/image":"Change User Image","user{{slash}}/upload":"Upload User Image","usergroup{{slash}}/add":"Add User Group","usergroup{{slash}}/view":"View User Group","usergroup{{slash}}/edit":"Edit User Group","usergroup{{slash}}/delete":"Delete User Group","usergroup{{slash}}/change":"Change User Group Status","language{{slash}}/add":"Add Language","language{{slash}}/view":"View Language","language{{slash}}/edit":"Edit Language","language{{slash}}/delete":"Delete Language","language{{slash}}/change":"Change Language Status","setting{{slash}}/add":"Add Setting","setting{{slash}}/view":"View Setting","setting{{slash}}/edit":"Edit Setting","setting{{slash}}/delete":"Delete Setting","setting{{slash}}/change":"Change Setting Status","serverlog{{slash}}/view":"View Server Log","serverlog{{slash}}/edit":"Edit Server Log","serverlog{{slash}}/delete":"Delete Server Log","serverlog{{slash}}/trash":"Trash Server Log"},"Module":{"modulelist{{slash}}/edit":"Edit Module","modulelist{{slash}}/trash":"Delete User Permission"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus","page{{slash}}/index{{slash}}/add":"Add Page","page{{slash}}/index{{slash}}/view":"View Page","page{{slash}}/index{{slash}}/edit":"Edit Page","page{{slash}}/index{{slash}}/delete":"Delete Page","page{{slash}}/index{{slash}}/change":"Change Page Status","page{{slash}}/index{{slash}}/export":"Export Page","page{{slash}}/index{{slash}}/print":"Print Page","pagemenu{{slash}}/index{{slash}}/add":"Add Page Menu","pagemenu{{slash}}/index{{slash}}/view":"View Page Menu","pagemenu{{slash}}/index{{slash}}/edit":"Edit Page Menu","pagemenu{{slash}}/index{{slash}}/delete":"Delete Page Menu","pagemenu{{slash}}/index{{slash}}/change":"Change Page Menu Status","pagemenu{{slash}}/index{{slash}}/export":"Export Page Menu","pagemenu{{slash}}/index{{slash}}/print":"Print Page Menu"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery","participant{{slash}}/index{{slash}}/add":"Add Participant","participant{{slash}}/index{{slash}}/view":"View Participant","participant{{slash}}/index{{slash}}/edit":"Edit Participant","participant{{slash}}/index{{slash}}/delete":"Delete Participant","participant{{slash}}/index{{slash}}/change":"Change Participant Status","participant{{slash}}/index{{slash}}/export":"Export Participant","participant{{slash}}/index{{slash}}/print":"Print Participant","gallery{{slash}}/index{{slash}}/add":"Add Gallery","gallery{{slash}}/index{{slash}}/view":"View Gallery","gallery{{slash}}/index{{slash}}/edit":"Edit Gallery","gallery{{slash}}/index{{slash}}/delete":"Delete Gallery","gallery{{slash}}/index{{slash}}/change":"Change Gallery Status","gallery{{slash}}/index{{slash}}/export":"Export Gallery","gallery{{slash}}/index{{slash}}/print":"Print Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District","province{{slash}}/index{{slash}}/add":"Add Province","province{{slash}}/index{{slash}}/view":"View Province","province{{slash}}/index{{slash}}/edit":"Edit Province","province{{slash}}/index{{slash}}/delete":"Delete Province","province{{slash}}/index{{slash}}/change":"Change Province Status","province{{slash}}/index{{slash}}/export":"Export Province","province{{slash}}/index{{slash}}/print":"Print Province","urbandistrict{{slash}}/index{{slash}}/add":"Add Urban District","urbandistrict{{slash}}/index{{slash}}/view":"View Urban District","urbandistrict{{slash}}/index{{slash}}/edit":"Edit Urban District","urbandistrict{{slash}}/index{{slash}}/delete":"Delete Urban District","urbandistrict{{slash}}/index{{slash}}/change":"Change Urban District Status","urbandistrict{{slash}}/index{{slash}}/export":"Export Urban District","urbandistrict{{slash}}/index{{slash}}/print":"Print Urban District","suburban{{slash}}/index{{slash}}/add":"Add Sub Urban","suburban{{slash}}/index{{slash}}/view":"View Sub Urban","suburban{{slash}}/index{{slash}}/edit":"Edit Sub Urban","suburban{{slash}}/index{{slash}}/delete":"Delete Sub Urban","suburban{{slash}}/index{{slash}}/change":"Change Sub Urban Status","suburban{{slash}}/index{{slash}}/export":"Export Sub Urban","suburban{{slash}}/index{{slash}}/print":"Print Sub Urban","district{{slash}}/index{{slash}}/add":"Add District","district{{slash}}/index{{slash}}/view":"View District","district{{slash}}/index{{slash}}/edit":"Edit District","district{{slash}}/index{{slash}}/delete":"Delete District","district{{slash}}/index{{slash}}/change":"Change District Status","district{{slash}}/index{{slash}}/export":"Export District","district{{slash}}/index{{slash}}/print":"Print District"}}";s:12:"user_session";O:8:"stdClass":8:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:8:"group_id";s:1:"1";s:6:"status";s:1:"1";s:10:"last_login";s:10:"1437980614";s:9:"logged_in";b:1;s:4:"name";s:21:"Administrator Website";}s:8:"curr_url";s:32:"admin-panel/page/index/ajax_list";s:8:"prev_url";s:31:"admin-panel/page/index/update/1";}'),
('4cb76df32d2403fa082e7675bc680149', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.36', 1438074825, ''),
('d98d54892829e801a85627f83d9290ce', '::1', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobil', 1438073757, ''),
('f9ea39c28759f8e181d22e8d533d225c', '::1', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobil', 1438078856, 'a:6:{s:9:"user_data";s:0:"";s:11:"module_list";s:639:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs"},"Module":{"modulelist{{slash}}/index":"Module Lists"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District"}}";s:20:"module_function_list";s:5377:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs","dashboard{{slash}}/add":"Add New Dashboard","dashboard{{slash}}/view":"View Dashboard","dashboard{{slash}}/edit":"Edit Dashboard","dashboard{{slash}}/delete":"Delete Dashboard","dashboard{{slash}}/change":"Change Dashboard Status","user{{slash}}/add":"Add User","user{{slash}}/view":"View User","user{{slash}}/edit":"Edit User","user{{slash}}/delete":"Delete User","user{{slash}}/change":"Change User Status","user{{slash}}/image":"Change User Image","user{{slash}}/upload":"Upload User Image","usergroup{{slash}}/add":"Add User Group","usergroup{{slash}}/view":"View User Group","usergroup{{slash}}/edit":"Edit User Group","usergroup{{slash}}/delete":"Delete User Group","usergroup{{slash}}/change":"Change User Group Status","language{{slash}}/add":"Add Language","language{{slash}}/view":"View Language","language{{slash}}/edit":"Edit Language","language{{slash}}/delete":"Delete Language","language{{slash}}/change":"Change Language Status","setting{{slash}}/add":"Add Setting","setting{{slash}}/view":"View Setting","setting{{slash}}/edit":"Edit Setting","setting{{slash}}/delete":"Delete Setting","setting{{slash}}/change":"Change Setting Status","serverlog{{slash}}/view":"View Server Log","serverlog{{slash}}/edit":"Edit Server Log","serverlog{{slash}}/delete":"Delete Server Log","serverlog{{slash}}/trash":"Trash Server Log"},"Module":{"modulelist{{slash}}/edit":"Edit Module","modulelist{{slash}}/trash":"Delete User Permission"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus","page{{slash}}/index{{slash}}/add":"Add Page","page{{slash}}/index{{slash}}/view":"View Page","page{{slash}}/index{{slash}}/edit":"Edit Page","page{{slash}}/index{{slash}}/delete":"Delete Page","page{{slash}}/index{{slash}}/change":"Change Page Status","page{{slash}}/index{{slash}}/export":"Export Page","page{{slash}}/index{{slash}}/print":"Print Page","pagemenu{{slash}}/index{{slash}}/add":"Add Page Menu","pagemenu{{slash}}/index{{slash}}/view":"View Page Menu","pagemenu{{slash}}/index{{slash}}/edit":"Edit Page Menu","pagemenu{{slash}}/index{{slash}}/delete":"Delete Page Menu","pagemenu{{slash}}/index{{slash}}/change":"Change Page Menu Status","pagemenu{{slash}}/index{{slash}}/export":"Export Page Menu","pagemenu{{slash}}/index{{slash}}/print":"Print Page Menu"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery","participant{{slash}}/index{{slash}}/add":"Add Participant","participant{{slash}}/index{{slash}}/view":"View Participant","participant{{slash}}/index{{slash}}/edit":"Edit Participant","participant{{slash}}/index{{slash}}/delete":"Delete Participant","participant{{slash}}/index{{slash}}/change":"Change Participant Status","participant{{slash}}/index{{slash}}/export":"Export Participant","participant{{slash}}/index{{slash}}/print":"Print Participant","gallery{{slash}}/index{{slash}}/add":"Add Gallery","gallery{{slash}}/index{{slash}}/view":"View Gallery","gallery{{slash}}/index{{slash}}/edit":"Edit Gallery","gallery{{slash}}/index{{slash}}/delete":"Delete Gallery","gallery{{slash}}/index{{slash}}/change":"Change Gallery Status","gallery{{slash}}/index{{slash}}/export":"Export Gallery","gallery{{slash}}/index{{slash}}/print":"Print Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District","province{{slash}}/index{{slash}}/add":"Add Province","province{{slash}}/index{{slash}}/view":"View Province","province{{slash}}/index{{slash}}/edit":"Edit Province","province{{slash}}/index{{slash}}/delete":"Delete Province","province{{slash}}/index{{slash}}/change":"Change Province Status","province{{slash}}/index{{slash}}/export":"Export Province","province{{slash}}/index{{slash}}/print":"Print Province","urbandistrict{{slash}}/index{{slash}}/add":"Add Urban District","urbandistrict{{slash}}/index{{slash}}/view":"View Urban District","urbandistrict{{slash}}/index{{slash}}/edit":"Edit Urban District","urbandistrict{{slash}}/index{{slash}}/delete":"Delete Urban District","urbandistrict{{slash}}/index{{slash}}/change":"Change Urban District Status","urbandistrict{{slash}}/index{{slash}}/export":"Export Urban District","urbandistrict{{slash}}/index{{slash}}/print":"Print Urban District","suburban{{slash}}/index{{slash}}/add":"Add Sub Urban","suburban{{slash}}/index{{slash}}/view":"View Sub Urban","suburban{{slash}}/index{{slash}}/edit":"Edit Sub Urban","suburban{{slash}}/index{{slash}}/delete":"Delete Sub Urban","suburban{{slash}}/index{{slash}}/change":"Change Sub Urban Status","suburban{{slash}}/index{{slash}}/export":"Export Sub Urban","suburban{{slash}}/index{{slash}}/print":"Print Sub Urban","district{{slash}}/index{{slash}}/add":"Add District","district{{slash}}/index{{slash}}/view":"View District","district{{slash}}/index{{slash}}/edit":"Edit District","district{{slash}}/index{{slash}}/delete":"Delete District","district{{slash}}/index{{slash}}/change":"Change District Status","district{{slash}}/index{{slash}}/export":"Export District","district{{slash}}/index{{slash}}/print":"Print District"}}";s:12:"user_session";O:8:"stdClass":8:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:8:"group_id";s:1:"1";s:6:"status";s:1:"1";s:10:"last_login";s:10:"1437980614";s:9:"logged_in";b:1;s:4:"name";s:21:"Administrator Website";}s:8:"curr_url";s:41:"admin-panel/pagemenu/index/ajax_list_info";s:8:"prev_url";s:41:"admin-panel/pagemenu/index/ajax_list_info";}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_configurations`
--

CREATE TABLE IF NOT EXISTS `tbl_configurations` (
  `parameter` varchar(150) NOT NULL DEFAULT '',
  `value` varchar(150) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_configurations`
--

INSERT INTO `tbl_configurations` (`parameter`, `value`) VALUES
('environment', '0'),
('install', '0'),
('maintenance', '0'),
('theme', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_districts`
--

CREATE TABLE IF NOT EXISTS `tbl_districts` (
  `id` int(11) unsigned NOT NULL,
  `sub_urban_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_group_permissions` (
  `id` int(11) unsigned NOT NULL,
  `permission_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `value` smallint(1) NOT NULL,
  `added` int(11) NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=910 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_group_permissions`
--

INSERT INTO `tbl_group_permissions` (`id`, `permission_id`, `group_id`, `value`, `added`, `modified`) VALUES
(1, 1, 1, 1, 1436797221, 0),
(2, 2, 1, 1, 1436797221, 0),
(3, 3, 1, 1, 1436797221, 0),
(4, 4, 1, 1, 1436797221, 0),
(5, 5, 1, 1, 1436797221, 0),
(6, 6, 1, 1, 1436797221, 0),
(7, 38, 1, 1, 1436797221, 0),
(8, 39, 1, 1, 1436797221, 0),
(9, 54, 1, 1, 1436797221, 0),
(10, 55, 1, 1, 1436797221, 0),
(11, 70, 1, 1, 1436797221, 0),
(12, 71, 1, 1, 1436797221, 0),
(13, 72, 1, 1, 1436797221, 0),
(14, 73, 1, 1, 1436797221, 0),
(15, 7, 1, 1, 1436797221, 0),
(16, 8, 1, 1, 1436797221, 0),
(17, 9, 1, 1, 1436797221, 0),
(18, 10, 1, 1, 1436797221, 0),
(19, 11, 1, 1, 1436797221, 0),
(20, 12, 1, 1, 1436797221, 0),
(21, 13, 1, 1, 1436797221, 0),
(22, 14, 1, 1, 1436797221, 0),
(23, 15, 1, 1, 1436797221, 0),
(24, 16, 1, 1, 1436797221, 0),
(25, 17, 1, 1, 1436797221, 0),
(26, 18, 1, 1, 1436797221, 0),
(27, 19, 1, 1, 1436797221, 0),
(28, 20, 1, 1, 1436797221, 0),
(29, 21, 1, 1, 1436797221, 0),
(30, 22, 1, 1, 1436797221, 0),
(31, 23, 1, 1, 1436797221, 0),
(32, 24, 1, 1, 1436797221, 0),
(33, 25, 1, 1, 1436797221, 0),
(34, 26, 1, 1, 1436797221, 0),
(35, 27, 1, 1, 1436797221, 0),
(36, 28, 1, 1, 1436797221, 0),
(37, 29, 1, 1, 1436797221, 0),
(38, 30, 1, 1, 1436797221, 0),
(39, 31, 1, 1, 1436797221, 0),
(40, 32, 1, 1, 1436797221, 0),
(41, 33, 1, 1, 1436797221, 0),
(42, 34, 1, 1, 1436797221, 0),
(43, 35, 1, 1, 1436797221, 0),
(44, 36, 1, 1, 1436797221, 0),
(45, 37, 1, 1, 1436797221, 0),
(46, 40, 1, 1, 1436797221, 0),
(47, 41, 1, 1, 1436797221, 0),
(48, 42, 1, 1, 1436797221, 0),
(49, 43, 1, 1, 1436797221, 0),
(50, 44, 1, 1, 1436797221, 0),
(51, 45, 1, 1, 1436797221, 0),
(52, 46, 1, 1, 1436797221, 0),
(53, 47, 1, 1, 1436797221, 0),
(54, 48, 1, 1, 1436797221, 0),
(55, 49, 1, 1, 1436797221, 0),
(56, 50, 1, 1, 1436797221, 0),
(57, 51, 1, 1, 1436797221, 0),
(58, 52, 1, 1, 1436797221, 0),
(59, 53, 1, 1, 1436797221, 0),
(60, 56, 1, 1, 1436797221, 0),
(61, 57, 1, 1, 1436797221, 0),
(62, 58, 1, 1, 1436797221, 0),
(63, 59, 1, 1, 1436797221, 0),
(64, 60, 1, 1, 1436797221, 0),
(65, 61, 1, 1, 1436797221, 0),
(66, 62, 1, 1, 1436797221, 0),
(67, 63, 1, 1, 1436797221, 0),
(68, 64, 1, 1, 1436797221, 0),
(69, 65, 1, 1, 1436797221, 0),
(70, 66, 1, 1, 1436797221, 0),
(71, 67, 1, 1, 1436797221, 0),
(72, 68, 1, 1, 1436797221, 0),
(73, 69, 1, 1, 1436797221, 0),
(74, 74, 1, 1, 1436797221, 0),
(75, 75, 1, 1, 1436797221, 0),
(76, 76, 1, 1, 1436797221, 0),
(77, 77, 1, 1, 1436797221, 0),
(78, 78, 1, 1, 1436797221, 0),
(79, 79, 1, 1, 1436797221, 0),
(80, 80, 1, 1, 1436797221, 0),
(81, 81, 1, 1, 1436797221, 0),
(82, 82, 1, 1, 1436797221, 0),
(83, 83, 1, 1, 1436797221, 0),
(84, 84, 1, 1, 1436797221, 0),
(85, 85, 1, 1, 1436797221, 0),
(86, 86, 1, 1, 1436797221, 0),
(87, 87, 1, 1, 1436797221, 0),
(88, 88, 1, 1, 1436797221, 0),
(89, 89, 1, 1, 1436797221, 0),
(90, 90, 1, 1, 1436797221, 0),
(91, 91, 1, 1, 1436797221, 0),
(92, 92, 1, 1, 1436797221, 0),
(93, 93, 1, 1, 1436797221, 0),
(94, 94, 1, 1, 1436797221, 0),
(95, 95, 1, 1, 1436797221, 0),
(96, 96, 1, 1, 1436797221, 0),
(97, 97, 1, 1, 1436797221, 0),
(98, 98, 1, 1, 1436797221, 0),
(99, 99, 1, 1, 1436797221, 0),
(100, 100, 1, 1, 1436797221, 0),
(101, 101, 1, 1, 1436797221, 0),
(102, 1, 2, 1, 1436797221, 0),
(103, 2, 2, 1, 1436797221, 0),
(104, 3, 2, 1, 1436797221, 0),
(105, 4, 2, 1, 1436797221, 0),
(106, 5, 2, 1, 1436797221, 0),
(107, 6, 2, 1, 1436797221, 0),
(108, 38, 2, 1, 1436797221, 0),
(109, 39, 2, 1, 1436797221, 0),
(110, 54, 2, 1, 1436797221, 0),
(111, 55, 2, 1, 1436797221, 0),
(112, 70, 2, 1, 1436797221, 0),
(113, 71, 2, 1, 1436797221, 0),
(114, 72, 2, 1, 1436797221, 0),
(115, 73, 2, 1, 1436797221, 0),
(116, 7, 2, 1, 1436797221, 0),
(117, 8, 2, 1, 1436797221, 0),
(118, 9, 2, 1, 1436797221, 0),
(119, 10, 2, 1, 1436797221, 0),
(120, 11, 2, 1, 1436797221, 0),
(121, 12, 2, 1, 1436797221, 0),
(122, 13, 2, 1, 1436797221, 0),
(123, 14, 2, 1, 1436797221, 0),
(124, 15, 2, 1, 1436797221, 0),
(125, 16, 2, 1, 1436797221, 0),
(126, 17, 2, 1, 1436797221, 0),
(127, 18, 2, 1, 1436797221, 0),
(128, 19, 2, 1, 1436797221, 0),
(129, 20, 2, 1, 1436797221, 0),
(130, 21, 2, 1, 1436797221, 0),
(131, 22, 2, 1, 1436797221, 0),
(132, 23, 2, 1, 1436797221, 0),
(133, 24, 2, 1, 1436797221, 0),
(134, 25, 2, 1, 1436797221, 0),
(135, 26, 2, 1, 1436797221, 0),
(136, 27, 2, 1, 1436797221, 0),
(137, 28, 2, 1, 1436797221, 0),
(138, 29, 2, 1, 1436797221, 0),
(139, 30, 2, 1, 1436797221, 0),
(140, 31, 2, 1, 1436797221, 0),
(141, 32, 2, 1, 1436797221, 0),
(142, 33, 2, 1, 1436797221, 0),
(143, 34, 2, 1, 1436797221, 0),
(144, 35, 2, 1, 1436797221, 0),
(145, 36, 2, 1, 1436797221, 0),
(146, 37, 2, 1, 1436797221, 0),
(147, 40, 2, 1, 1436797221, 0),
(148, 41, 2, 1, 1436797221, 0),
(149, 42, 2, 1, 1436797221, 0),
(150, 43, 2, 1, 1436797221, 0),
(151, 44, 2, 1, 1436797221, 0),
(152, 45, 2, 1, 1436797221, 0),
(153, 46, 2, 1, 1436797221, 0),
(154, 47, 2, 1, 1436797221, 0),
(155, 48, 2, 1, 1436797221, 0),
(156, 49, 2, 1, 1436797221, 0),
(157, 50, 2, 1, 1436797221, 0),
(158, 51, 2, 1, 1436797221, 0),
(159, 52, 2, 1, 1436797221, 0),
(160, 53, 2, 1, 1436797221, 0),
(161, 56, 2, 1, 1436797221, 0),
(162, 57, 2, 1, 1436797221, 0),
(163, 58, 2, 1, 1436797221, 0),
(164, 59, 2, 1, 1436797221, 0),
(165, 60, 2, 1, 1436797221, 0),
(166, 61, 2, 1, 1436797221, 0),
(167, 62, 2, 1, 1436797221, 0),
(168, 63, 2, 1, 1436797221, 0),
(169, 64, 2, 1, 1436797221, 0),
(170, 65, 2, 1, 1436797221, 0),
(171, 66, 2, 1, 1436797221, 0),
(172, 67, 2, 1, 1436797221, 0),
(173, 68, 2, 1, 1436797221, 0),
(174, 69, 2, 1, 1436797221, 0),
(175, 74, 2, 1, 1436797221, 0),
(176, 75, 2, 1, 1436797221, 0),
(177, 76, 2, 1, 1436797221, 0),
(178, 77, 2, 1, 1436797221, 0),
(179, 78, 2, 1, 1436797221, 0),
(180, 79, 2, 1, 1436797221, 0),
(181, 80, 2, 1, 1436797221, 0),
(182, 81, 2, 1, 1436797221, 0),
(183, 82, 2, 1, 1436797221, 0),
(184, 83, 2, 1, 1436797221, 0),
(185, 84, 2, 1, 1436797221, 0),
(186, 85, 2, 1, 1436797221, 0),
(187, 86, 2, 1, 1436797221, 0),
(188, 87, 2, 1, 1436797221, 0),
(189, 88, 2, 1, 1436797221, 0),
(190, 89, 2, 1, 1436797221, 0),
(191, 90, 2, 1, 1436797221, 0),
(192, 91, 2, 1, 1436797221, 0),
(193, 92, 2, 1, 1436797221, 0),
(194, 93, 2, 1, 1436797221, 0),
(195, 94, 2, 1, 1436797221, 0),
(196, 95, 2, 1, 1436797221, 0),
(197, 96, 2, 1, 1436797221, 0),
(198, 97, 2, 1, 1436797221, 0),
(199, 98, 2, 1, 1436797221, 0),
(200, 99, 2, 1, 1436797221, 0),
(201, 100, 2, 1, 1436797221, 0),
(202, 101, 2, 1, 1436797221, 0),
(203, 1, 99, 0, 1436797221, 0),
(204, 2, 99, 0, 1436797221, 0),
(205, 3, 99, 0, 1436797221, 0),
(206, 4, 99, 0, 1436797221, 0),
(207, 5, 99, 0, 1436797221, 0),
(208, 6, 99, 0, 1436797221, 0),
(209, 38, 99, 0, 1436797221, 0),
(210, 39, 99, 0, 1436797221, 0),
(211, 54, 99, 0, 1436797221, 0),
(212, 55, 99, 0, 1436797221, 0),
(213, 70, 99, 0, 1436797221, 0),
(214, 71, 99, 0, 1436797221, 0),
(215, 72, 99, 0, 1436797221, 0),
(216, 73, 99, 0, 1436797221, 0),
(217, 7, 99, 0, 1436797221, 0),
(218, 8, 99, 0, 1436797221, 0),
(219, 9, 99, 0, 1436797221, 0),
(220, 10, 99, 0, 1436797221, 0),
(221, 11, 99, 0, 1436797221, 0),
(222, 12, 99, 0, 1436797221, 0),
(223, 13, 99, 0, 1436797221, 0),
(224, 14, 99, 0, 1436797221, 0),
(225, 15, 99, 0, 1436797221, 0),
(226, 16, 99, 0, 1436797221, 0),
(227, 17, 99, 0, 1436797221, 0),
(228, 18, 99, 0, 1436797221, 0),
(229, 19, 99, 0, 1436797221, 0),
(230, 20, 99, 0, 1436797221, 0),
(231, 21, 99, 0, 1436797221, 0),
(232, 22, 99, 0, 1436797221, 0),
(233, 23, 99, 0, 1436797221, 0),
(234, 24, 99, 0, 1436797221, 0),
(235, 25, 99, 0, 1436797221, 0),
(236, 26, 99, 0, 1436797221, 0),
(237, 27, 99, 0, 1436797221, 0),
(238, 28, 99, 0, 1436797221, 0),
(239, 29, 99, 0, 1436797221, 0),
(240, 30, 99, 0, 1436797221, 0),
(241, 31, 99, 0, 1436797221, 0),
(242, 32, 99, 0, 1436797221, 0),
(243, 33, 99, 0, 1436797221, 0),
(244, 34, 99, 0, 1436797221, 0),
(245, 35, 99, 0, 1436797221, 0),
(246, 36, 99, 0, 1436797221, 0),
(247, 37, 99, 0, 1436797221, 0),
(248, 40, 99, 0, 1436797221, 0),
(249, 41, 99, 0, 1436797221, 0),
(250, 42, 99, 0, 1436797221, 0),
(251, 43, 99, 0, 1436797221, 0),
(252, 44, 99, 0, 1436797221, 0),
(253, 45, 99, 0, 1436797221, 0),
(254, 46, 99, 0, 1436797221, 0),
(255, 47, 99, 0, 1436797221, 0),
(256, 48, 99, 0, 1436797221, 0),
(257, 49, 99, 0, 1436797221, 0),
(258, 50, 99, 0, 1436797221, 0),
(259, 51, 99, 0, 1436797221, 0),
(260, 52, 99, 0, 1436797221, 0),
(261, 53, 99, 0, 1436797221, 0),
(262, 56, 99, 0, 1436797221, 0),
(263, 57, 99, 0, 1436797221, 0),
(264, 58, 99, 0, 1436797221, 0),
(265, 59, 99, 0, 1436797221, 0),
(266, 60, 99, 0, 1436797221, 0),
(267, 61, 99, 0, 1436797221, 0),
(268, 62, 99, 0, 1436797221, 0),
(269, 63, 99, 0, 1436797221, 0),
(270, 64, 99, 0, 1436797221, 0),
(271, 65, 99, 0, 1436797221, 0),
(272, 66, 99, 0, 1436797221, 0),
(273, 67, 99, 0, 1436797221, 0),
(274, 68, 99, 0, 1436797221, 0),
(275, 69, 99, 0, 1436797221, 0),
(276, 74, 99, 0, 1436797221, 0),
(277, 75, 99, 0, 1436797221, 0),
(278, 76, 99, 0, 1436797221, 0),
(279, 77, 99, 0, 1436797221, 0),
(280, 78, 99, 0, 1436797221, 0),
(281, 79, 99, 0, 1436797221, 0),
(282, 80, 99, 0, 1436797221, 0),
(283, 81, 99, 0, 1436797221, 0),
(284, 82, 99, 0, 1436797221, 0),
(285, 83, 99, 0, 1436797221, 0),
(286, 84, 99, 0, 1436797221, 0),
(287, 85, 99, 0, 1436797221, 0),
(288, 86, 99, 0, 1436797221, 0),
(289, 87, 99, 0, 1436797221, 0),
(290, 88, 99, 0, 1436797221, 0),
(291, 89, 99, 0, 1436797221, 0),
(292, 90, 99, 0, 1436797221, 0),
(293, 91, 99, 0, 1436797221, 0),
(294, 92, 99, 0, 1436797221, 0),
(295, 93, 99, 0, 1436797221, 0),
(296, 94, 99, 0, 1436797221, 0),
(297, 95, 99, 0, 1436797221, 0),
(298, 96, 99, 0, 1436797221, 0),
(299, 97, 99, 0, 1436797221, 0),
(300, 98, 99, 0, 1436797221, 0),
(301, 99, 99, 0, 1436797221, 0),
(302, 100, 99, 0, 1436797221, 0),
(303, 101, 99, 0, 1436797221, 0),
(304, 1, 111, 0, 1436797221, 0),
(305, 2, 111, 0, 1436797221, 0),
(306, 3, 111, 0, 1436797221, 0),
(307, 4, 111, 0, 1436797221, 0),
(308, 5, 111, 0, 1436797221, 0),
(309, 6, 111, 0, 1436797221, 0),
(310, 38, 111, 0, 1436797221, 0),
(311, 39, 111, 0, 1436797221, 0),
(312, 54, 111, 0, 1436797221, 0),
(313, 55, 111, 0, 1436797221, 0),
(314, 70, 111, 0, 1436797221, 0),
(315, 71, 111, 0, 1436797221, 0),
(316, 72, 111, 0, 1436797221, 0),
(317, 73, 111, 0, 1436797221, 0),
(318, 7, 111, 0, 1436797221, 0),
(319, 8, 111, 0, 1436797221, 0),
(320, 9, 111, 0, 1436797221, 0),
(321, 10, 111, 0, 1436797221, 0),
(322, 11, 111, 0, 1436797221, 0),
(323, 12, 111, 0, 1436797221, 0),
(324, 13, 111, 0, 1436797221, 0),
(325, 14, 111, 0, 1436797221, 0),
(326, 15, 111, 0, 1436797221, 0),
(327, 16, 111, 0, 1436797221, 0),
(328, 17, 111, 0, 1436797221, 0),
(329, 18, 111, 0, 1436797221, 0),
(330, 19, 111, 0, 1436797221, 0),
(331, 20, 111, 0, 1436797221, 0),
(332, 21, 111, 0, 1436797221, 0),
(333, 22, 111, 0, 1436797221, 0),
(334, 23, 111, 0, 1436797221, 0),
(335, 24, 111, 0, 1436797221, 0),
(336, 25, 111, 0, 1436797221, 0),
(337, 26, 111, 0, 1436797221, 0),
(338, 27, 111, 0, 1436797221, 0),
(339, 28, 111, 0, 1436797221, 0),
(340, 29, 111, 0, 1436797221, 0),
(341, 30, 111, 0, 1436797221, 0),
(342, 31, 111, 0, 1436797221, 0),
(343, 32, 111, 0, 1436797221, 0),
(344, 33, 111, 0, 1436797221, 0),
(345, 34, 111, 0, 1436797221, 0),
(346, 35, 111, 0, 1436797221, 0),
(347, 36, 111, 0, 1436797221, 0),
(348, 37, 111, 0, 1436797221, 0),
(349, 40, 111, 0, 1436797221, 0),
(350, 41, 111, 0, 1436797221, 0),
(351, 42, 111, 0, 1436797221, 0),
(352, 43, 111, 0, 1436797221, 0),
(353, 44, 111, 0, 1436797221, 0),
(354, 45, 111, 0, 1436797221, 0),
(355, 46, 111, 0, 1436797221, 0),
(356, 47, 111, 0, 1436797221, 0),
(357, 48, 111, 0, 1436797221, 0),
(358, 49, 111, 0, 1436797221, 0),
(359, 50, 111, 0, 1436797221, 0),
(360, 51, 111, 0, 1436797221, 0),
(361, 52, 111, 0, 1436797221, 0),
(362, 53, 111, 0, 1436797221, 0),
(363, 56, 111, 0, 1436797221, 0),
(364, 57, 111, 0, 1436797221, 0),
(365, 58, 111, 0, 1436797221, 0),
(366, 59, 111, 0, 1436797221, 0),
(367, 60, 111, 0, 1436797221, 0),
(368, 61, 111, 0, 1436797221, 0),
(369, 62, 111, 0, 1436797221, 0),
(370, 63, 111, 0, 1436797221, 0),
(371, 64, 111, 0, 1436797221, 0),
(372, 65, 111, 0, 1436797221, 0),
(373, 66, 111, 0, 1436797221, 0),
(374, 67, 111, 0, 1436797221, 0),
(375, 68, 111, 0, 1436797221, 0),
(376, 69, 111, 0, 1436797221, 0),
(377, 74, 111, 0, 1436797221, 0),
(378, 75, 111, 0, 1436797221, 0),
(379, 76, 111, 0, 1436797221, 0),
(380, 77, 111, 0, 1436797221, 0),
(381, 78, 111, 0, 1436797221, 0),
(382, 79, 111, 0, 1436797221, 0),
(383, 80, 111, 0, 1436797221, 0),
(384, 81, 111, 0, 1436797221, 0),
(385, 82, 111, 0, 1436797221, 0),
(386, 83, 111, 0, 1436797221, 0),
(387, 84, 111, 0, 1436797221, 0),
(388, 85, 111, 0, 1436797221, 0),
(389, 86, 111, 0, 1436797221, 0),
(390, 87, 111, 0, 1436797221, 0),
(391, 88, 111, 0, 1436797221, 0),
(392, 89, 111, 0, 1436797221, 0),
(393, 90, 111, 0, 1436797221, 0),
(394, 91, 111, 0, 1436797221, 0),
(395, 92, 111, 0, 1436797221, 0),
(396, 93, 111, 0, 1436797221, 0),
(397, 94, 111, 0, 1436797221, 0),
(398, 95, 111, 0, 1436797221, 0),
(399, 96, 111, 0, 1436797221, 0),
(400, 97, 111, 0, 1436797221, 0),
(401, 98, 111, 0, 1436797221, 0),
(402, 99, 111, 0, 1436797221, 0),
(403, 100, 111, 0, 1436797221, 0),
(404, 101, 111, 0, 1436797221, 0),
(405, 1, 112, 0, 1436797221, 0),
(406, 2, 112, 0, 1436797221, 0),
(407, 3, 112, 0, 1436797221, 0),
(408, 4, 112, 0, 1436797221, 0),
(409, 5, 112, 0, 1436797221, 0),
(410, 6, 112, 0, 1436797221, 0),
(411, 38, 112, 0, 1436797221, 0),
(412, 39, 112, 0, 1436797221, 0),
(413, 54, 112, 0, 1436797221, 0),
(414, 55, 112, 0, 1436797221, 0),
(415, 70, 112, 0, 1436797221, 0),
(416, 71, 112, 0, 1436797221, 0),
(417, 72, 112, 0, 1436797221, 0),
(418, 73, 112, 0, 1436797221, 0),
(419, 7, 112, 0, 1436797221, 0),
(420, 8, 112, 0, 1436797221, 0),
(421, 9, 112, 0, 1436797221, 0),
(422, 10, 112, 0, 1436797221, 0),
(423, 11, 112, 0, 1436797221, 0),
(424, 12, 112, 0, 1436797221, 0),
(425, 13, 112, 0, 1436797221, 0),
(426, 14, 112, 0, 1436797221, 0),
(427, 15, 112, 0, 1436797221, 0),
(428, 16, 112, 0, 1436797221, 0),
(429, 17, 112, 0, 1436797221, 0),
(430, 18, 112, 0, 1436797221, 0),
(431, 19, 112, 0, 1436797221, 0),
(432, 20, 112, 0, 1436797221, 0),
(433, 21, 112, 0, 1436797221, 0),
(434, 22, 112, 0, 1436797221, 0),
(435, 23, 112, 0, 1436797221, 0),
(436, 24, 112, 0, 1436797221, 0),
(437, 25, 112, 0, 1436797221, 0),
(438, 26, 112, 0, 1436797221, 0),
(439, 27, 112, 0, 1436797221, 0),
(440, 28, 112, 0, 1436797221, 0),
(441, 29, 112, 0, 1436797221, 0),
(442, 30, 112, 0, 1436797221, 0),
(443, 31, 112, 0, 1436797221, 0),
(444, 32, 112, 0, 1436797221, 0),
(445, 33, 112, 0, 1436797221, 0),
(446, 34, 112, 0, 1436797221, 0),
(447, 35, 112, 0, 1436797221, 0),
(448, 36, 112, 0, 1436797221, 0),
(449, 37, 112, 0, 1436797221, 0),
(450, 40, 112, 0, 1436797221, 0),
(451, 41, 112, 0, 1436797221, 0),
(452, 42, 112, 0, 1436797221, 0),
(453, 43, 112, 0, 1436797221, 0),
(454, 44, 112, 0, 1436797221, 0),
(455, 45, 112, 0, 1436797221, 0),
(456, 46, 112, 0, 1436797221, 0),
(457, 47, 112, 0, 1436797221, 0),
(458, 48, 112, 0, 1436797221, 0),
(459, 49, 112, 0, 1436797221, 0),
(460, 50, 112, 0, 1436797221, 0),
(461, 51, 112, 0, 1436797221, 0),
(462, 52, 112, 0, 1436797221, 0),
(463, 53, 112, 0, 1436797221, 0),
(464, 56, 112, 0, 1436797221, 0),
(465, 57, 112, 0, 1436797221, 0),
(466, 58, 112, 0, 1436797221, 0),
(467, 59, 112, 0, 1436797221, 0),
(468, 60, 112, 0, 1436797221, 0),
(469, 61, 112, 0, 1436797221, 0),
(470, 62, 112, 0, 1436797221, 0),
(471, 63, 112, 0, 1436797221, 0),
(472, 64, 112, 0, 1436797221, 0),
(473, 65, 112, 0, 1436797221, 0),
(474, 66, 112, 0, 1436797221, 0),
(475, 67, 112, 0, 1436797221, 0),
(476, 68, 112, 0, 1436797221, 0),
(477, 69, 112, 0, 1436797221, 0),
(478, 74, 112, 0, 1436797221, 0),
(479, 75, 112, 0, 1436797221, 0),
(480, 76, 112, 0, 1436797221, 0),
(481, 77, 112, 0, 1436797221, 0),
(482, 78, 112, 0, 1436797221, 0),
(483, 79, 112, 0, 1436797221, 0),
(484, 80, 112, 0, 1436797221, 0),
(485, 81, 112, 0, 1436797221, 0),
(486, 82, 112, 0, 1436797221, 0),
(487, 83, 112, 0, 1436797221, 0),
(488, 84, 112, 0, 1436797221, 0),
(489, 85, 112, 0, 1436797221, 0),
(490, 86, 112, 0, 1436797221, 0),
(491, 87, 112, 0, 1436797221, 0),
(492, 88, 112, 0, 1436797221, 0),
(493, 89, 112, 0, 1436797221, 0),
(494, 90, 112, 0, 1436797221, 0),
(495, 91, 112, 0, 1436797221, 0),
(496, 92, 112, 0, 1436797221, 0),
(497, 93, 112, 0, 1436797221, 0),
(498, 94, 112, 0, 1436797221, 0),
(499, 95, 112, 0, 1436797221, 0),
(500, 96, 112, 0, 1436797221, 0),
(501, 97, 112, 0, 1436797221, 0),
(502, 98, 112, 0, 1436797221, 0),
(503, 99, 112, 0, 1436797221, 0),
(504, 100, 112, 0, 1436797221, 0),
(505, 101, 112, 0, 1436797221, 0),
(506, 1, 113, 0, 1436797221, 0),
(507, 2, 113, 0, 1436797221, 0),
(508, 3, 113, 0, 1436797221, 0),
(509, 4, 113, 0, 1436797221, 0),
(510, 5, 113, 0, 1436797221, 0),
(511, 6, 113, 0, 1436797221, 0),
(512, 38, 113, 0, 1436797221, 0),
(513, 39, 113, 0, 1436797221, 0),
(514, 54, 113, 0, 1436797221, 0),
(515, 55, 113, 0, 1436797221, 0),
(516, 70, 113, 0, 1436797221, 0),
(517, 71, 113, 0, 1436797221, 0),
(518, 72, 113, 0, 1436797221, 0),
(519, 73, 113, 0, 1436797221, 0),
(520, 7, 113, 0, 1436797221, 0),
(521, 8, 113, 0, 1436797221, 0),
(522, 9, 113, 0, 1436797221, 0),
(523, 10, 113, 0, 1436797221, 0),
(524, 11, 113, 0, 1436797221, 0),
(525, 12, 113, 0, 1436797221, 0),
(526, 13, 113, 0, 1436797221, 0),
(527, 14, 113, 0, 1436797221, 0),
(528, 15, 113, 0, 1436797221, 0),
(529, 16, 113, 0, 1436797221, 0),
(530, 17, 113, 0, 1436797221, 0),
(531, 18, 113, 0, 1436797221, 0),
(532, 19, 113, 0, 1436797221, 0),
(533, 20, 113, 0, 1436797221, 0),
(534, 21, 113, 0, 1436797221, 0),
(535, 22, 113, 0, 1436797221, 0),
(536, 23, 113, 0, 1436797221, 0),
(537, 24, 113, 0, 1436797221, 0),
(538, 25, 113, 0, 1436797221, 0),
(539, 26, 113, 0, 1436797221, 0),
(540, 27, 113, 0, 1436797221, 0),
(541, 28, 113, 0, 1436797221, 0),
(542, 29, 113, 0, 1436797221, 0),
(543, 30, 113, 0, 1436797221, 0),
(544, 31, 113, 0, 1436797221, 0),
(545, 32, 113, 0, 1436797221, 0),
(546, 33, 113, 0, 1436797221, 0),
(547, 34, 113, 0, 1436797221, 0),
(548, 35, 113, 0, 1436797221, 0),
(549, 36, 113, 0, 1436797221, 0),
(550, 37, 113, 0, 1436797221, 0),
(551, 40, 113, 0, 1436797221, 0),
(552, 41, 113, 0, 1436797221, 0),
(553, 42, 113, 0, 1436797221, 0),
(554, 43, 113, 0, 1436797221, 0),
(555, 44, 113, 0, 1436797221, 0),
(556, 45, 113, 0, 1436797221, 0),
(557, 46, 113, 0, 1436797221, 0),
(558, 47, 113, 0, 1436797221, 0),
(559, 48, 113, 0, 1436797221, 0),
(560, 49, 113, 0, 1436797221, 0),
(561, 50, 113, 0, 1436797221, 0),
(562, 51, 113, 0, 1436797221, 0),
(563, 52, 113, 0, 1436797221, 0),
(564, 53, 113, 0, 1436797221, 0),
(565, 56, 113, 0, 1436797221, 0),
(566, 57, 113, 0, 1436797221, 0),
(567, 58, 113, 0, 1436797221, 0),
(568, 59, 113, 0, 1436797221, 0),
(569, 60, 113, 0, 1436797221, 0),
(570, 61, 113, 0, 1436797221, 0),
(571, 62, 113, 0, 1436797221, 0),
(572, 63, 113, 0, 1436797221, 0),
(573, 64, 113, 0, 1436797221, 0),
(574, 65, 113, 0, 1436797221, 0),
(575, 66, 113, 0, 1436797221, 0),
(576, 67, 113, 0, 1436797221, 0),
(577, 68, 113, 0, 1436797221, 0),
(578, 69, 113, 0, 1436797221, 0),
(579, 74, 113, 0, 1436797221, 0),
(580, 75, 113, 0, 1436797221, 0),
(581, 76, 113, 0, 1436797221, 0),
(582, 77, 113, 0, 1436797221, 0),
(583, 78, 113, 0, 1436797221, 0),
(584, 79, 113, 0, 1436797221, 0),
(585, 80, 113, 0, 1436797221, 0),
(586, 81, 113, 0, 1436797221, 0),
(587, 82, 113, 0, 1436797221, 0),
(588, 83, 113, 0, 1436797221, 0),
(589, 84, 113, 0, 1436797221, 0),
(590, 85, 113, 0, 1436797221, 0),
(591, 86, 113, 0, 1436797221, 0),
(592, 87, 113, 0, 1436797221, 0),
(593, 88, 113, 0, 1436797221, 0),
(594, 89, 113, 0, 1436797221, 0),
(595, 90, 113, 0, 1436797221, 0),
(596, 91, 113, 0, 1436797221, 0),
(597, 92, 113, 0, 1436797221, 0),
(598, 93, 113, 0, 1436797221, 0),
(599, 94, 113, 0, 1436797221, 0),
(600, 95, 113, 0, 1436797221, 0),
(601, 96, 113, 0, 1436797221, 0),
(602, 97, 113, 0, 1436797221, 0),
(603, 98, 113, 0, 1436797221, 0),
(604, 99, 113, 0, 1436797221, 0),
(605, 100, 113, 0, 1436797221, 0),
(606, 101, 113, 0, 1436797221, 0),
(607, 1, 114, 0, 1436797221, 0),
(608, 2, 114, 0, 1436797221, 0),
(609, 3, 114, 0, 1436797221, 0),
(610, 4, 114, 0, 1436797221, 0),
(611, 5, 114, 0, 1436797221, 0),
(612, 6, 114, 0, 1436797221, 0),
(613, 38, 114, 0, 1436797221, 0),
(614, 39, 114, 0, 1436797221, 0),
(615, 54, 114, 0, 1436797221, 0),
(616, 55, 114, 0, 1436797221, 0),
(617, 70, 114, 0, 1436797221, 0),
(618, 71, 114, 0, 1436797221, 0),
(619, 72, 114, 0, 1436797221, 0),
(620, 73, 114, 0, 1436797221, 0),
(621, 7, 114, 0, 1436797221, 0),
(622, 8, 114, 0, 1436797221, 0),
(623, 9, 114, 0, 1436797221, 0),
(624, 10, 114, 0, 1436797221, 0),
(625, 11, 114, 0, 1436797221, 0),
(626, 12, 114, 0, 1436797221, 0),
(627, 13, 114, 0, 1436797221, 0),
(628, 14, 114, 0, 1436797221, 0),
(629, 15, 114, 0, 1436797221, 0),
(630, 16, 114, 0, 1436797221, 0),
(631, 17, 114, 0, 1436797221, 0),
(632, 18, 114, 0, 1436797221, 0),
(633, 19, 114, 0, 1436797221, 0),
(634, 20, 114, 0, 1436797221, 0),
(635, 21, 114, 0, 1436797221, 0),
(636, 22, 114, 0, 1436797221, 0),
(637, 23, 114, 0, 1436797221, 0),
(638, 24, 114, 0, 1436797221, 0),
(639, 25, 114, 0, 1436797221, 0),
(640, 26, 114, 0, 1436797221, 0),
(641, 27, 114, 0, 1436797221, 0),
(642, 28, 114, 0, 1436797221, 0),
(643, 29, 114, 0, 1436797221, 0),
(644, 30, 114, 0, 1436797221, 0),
(645, 31, 114, 0, 1436797221, 0),
(646, 32, 114, 0, 1436797221, 0),
(647, 33, 114, 0, 1436797221, 0),
(648, 34, 114, 0, 1436797221, 0),
(649, 35, 114, 0, 1436797221, 0),
(650, 36, 114, 0, 1436797221, 0),
(651, 37, 114, 0, 1436797221, 0),
(652, 40, 114, 0, 1436797221, 0),
(653, 41, 114, 0, 1436797221, 0),
(654, 42, 114, 0, 1436797221, 0),
(655, 43, 114, 0, 1436797221, 0),
(656, 44, 114, 0, 1436797221, 0),
(657, 45, 114, 0, 1436797221, 0),
(658, 46, 114, 0, 1436797221, 0),
(659, 47, 114, 0, 1436797221, 0),
(660, 48, 114, 0, 1436797221, 0),
(661, 49, 114, 0, 1436797221, 0),
(662, 50, 114, 0, 1436797221, 0),
(663, 51, 114, 0, 1436797221, 0),
(664, 52, 114, 0, 1436797221, 0),
(665, 53, 114, 0, 1436797221, 0),
(666, 56, 114, 0, 1436797221, 0),
(667, 57, 114, 0, 1436797221, 0),
(668, 58, 114, 0, 1436797221, 0),
(669, 59, 114, 0, 1436797221, 0),
(670, 60, 114, 0, 1436797221, 0),
(671, 61, 114, 0, 1436797221, 0),
(672, 62, 114, 0, 1436797221, 0),
(673, 63, 114, 0, 1436797221, 0),
(674, 64, 114, 0, 1436797221, 0),
(675, 65, 114, 0, 1436797221, 0),
(676, 66, 114, 0, 1436797221, 0),
(677, 67, 114, 0, 1436797221, 0),
(678, 68, 114, 0, 1436797221, 0),
(679, 69, 114, 0, 1436797221, 0),
(680, 74, 114, 0, 1436797221, 0),
(681, 75, 114, 0, 1436797221, 0),
(682, 76, 114, 0, 1436797221, 0),
(683, 77, 114, 0, 1436797221, 0),
(684, 78, 114, 0, 1436797221, 0),
(685, 79, 114, 0, 1436797221, 0),
(686, 80, 114, 0, 1436797221, 0),
(687, 81, 114, 0, 1436797221, 0),
(688, 82, 114, 0, 1436797221, 0),
(689, 83, 114, 0, 1436797221, 0),
(690, 84, 114, 0, 1436797221, 0),
(691, 85, 114, 0, 1436797221, 0),
(692, 86, 114, 0, 1436797221, 0),
(693, 87, 114, 0, 1436797221, 0),
(694, 88, 114, 0, 1436797221, 0),
(695, 89, 114, 0, 1436797221, 0),
(696, 90, 114, 0, 1436797221, 0),
(697, 91, 114, 0, 1436797221, 0),
(698, 92, 114, 0, 1436797221, 0),
(699, 93, 114, 0, 1436797221, 0),
(700, 94, 114, 0, 1436797221, 0),
(701, 95, 114, 0, 1436797221, 0),
(702, 96, 114, 0, 1436797221, 0),
(703, 97, 114, 0, 1436797221, 0),
(704, 98, 114, 0, 1436797221, 0),
(705, 99, 114, 0, 1436797221, 0),
(706, 100, 114, 0, 1436797221, 0),
(707, 101, 114, 0, 1436797221, 0),
(708, 1, 116, 0, 1436797221, 0),
(709, 2, 116, 0, 1436797221, 0),
(710, 3, 116, 0, 1436797221, 0),
(711, 4, 116, 0, 1436797221, 0),
(712, 5, 116, 0, 1436797221, 0),
(713, 6, 116, 0, 1436797221, 0),
(714, 38, 116, 0, 1436797221, 0),
(715, 39, 116, 0, 1436797221, 0),
(716, 54, 116, 0, 1436797221, 0),
(717, 55, 116, 0, 1436797221, 0),
(718, 70, 116, 0, 1436797221, 0),
(719, 71, 116, 0, 1436797221, 0),
(720, 72, 116, 0, 1436797221, 0),
(721, 73, 116, 0, 1436797221, 0),
(722, 7, 116, 0, 1436797221, 0),
(723, 8, 116, 0, 1436797221, 0),
(724, 9, 116, 0, 1436797221, 0),
(725, 10, 116, 0, 1436797221, 0),
(726, 11, 116, 0, 1436797221, 0),
(727, 12, 116, 0, 1436797221, 0),
(728, 13, 116, 0, 1436797221, 0),
(729, 14, 116, 0, 1436797221, 0),
(730, 15, 116, 0, 1436797221, 0),
(731, 16, 116, 0, 1436797221, 0),
(732, 17, 116, 0, 1436797221, 0),
(733, 18, 116, 0, 1436797221, 0),
(734, 19, 116, 0, 1436797221, 0),
(735, 20, 116, 0, 1436797221, 0),
(736, 21, 116, 0, 1436797221, 0),
(737, 22, 116, 0, 1436797221, 0),
(738, 23, 116, 0, 1436797221, 0),
(739, 24, 116, 0, 1436797221, 0),
(740, 25, 116, 0, 1436797221, 0),
(741, 26, 116, 0, 1436797221, 0),
(742, 27, 116, 0, 1436797221, 0),
(743, 28, 116, 0, 1436797221, 0),
(744, 29, 116, 0, 1436797221, 0),
(745, 30, 116, 0, 1436797221, 0),
(746, 31, 116, 0, 1436797221, 0),
(747, 32, 116, 0, 1436797221, 0),
(748, 33, 116, 0, 1436797221, 0),
(749, 34, 116, 0, 1436797221, 0),
(750, 35, 116, 0, 1436797221, 0),
(751, 36, 116, 0, 1436797221, 0),
(752, 37, 116, 0, 1436797221, 0),
(753, 40, 116, 0, 1436797221, 0),
(754, 41, 116, 0, 1436797221, 0),
(755, 42, 116, 0, 1436797221, 0),
(756, 43, 116, 0, 1436797221, 0),
(757, 44, 116, 0, 1436797221, 0),
(758, 45, 116, 0, 1436797221, 0),
(759, 46, 116, 0, 1436797221, 0),
(760, 47, 116, 0, 1436797221, 0),
(761, 48, 116, 0, 1436797221, 0),
(762, 49, 116, 0, 1436797221, 0),
(763, 50, 116, 0, 1436797221, 0),
(764, 51, 116, 0, 1436797221, 0),
(765, 52, 116, 0, 1436797221, 0),
(766, 53, 116, 0, 1436797221, 0),
(767, 56, 116, 0, 1436797221, 0),
(768, 57, 116, 0, 1436797221, 0),
(769, 58, 116, 0, 1436797221, 0),
(770, 59, 116, 0, 1436797221, 0),
(771, 60, 116, 0, 1436797221, 0),
(772, 61, 116, 0, 1436797221, 0),
(773, 62, 116, 0, 1436797221, 0),
(774, 63, 116, 0, 1436797221, 0),
(775, 64, 116, 0, 1436797221, 0),
(776, 65, 116, 0, 1436797221, 0),
(777, 66, 116, 0, 1436797221, 0),
(778, 67, 116, 0, 1436797221, 0),
(779, 68, 116, 0, 1436797221, 0),
(780, 69, 116, 0, 1436797221, 0),
(781, 74, 116, 0, 1436797221, 0),
(782, 75, 116, 0, 1436797221, 0),
(783, 76, 116, 0, 1436797221, 0),
(784, 77, 116, 0, 1436797221, 0),
(785, 78, 116, 0, 1436797221, 0),
(786, 79, 116, 0, 1436797221, 0),
(787, 80, 116, 0, 1436797221, 0),
(788, 81, 116, 0, 1436797221, 0),
(789, 82, 116, 0, 1436797221, 0),
(790, 83, 116, 0, 1436797221, 0),
(791, 84, 116, 0, 1436797221, 0),
(792, 85, 116, 0, 1436797221, 0),
(793, 86, 116, 0, 1436797221, 0),
(794, 87, 116, 0, 1436797221, 0),
(795, 88, 116, 0, 1436797221, 0),
(796, 89, 116, 0, 1436797221, 0),
(797, 90, 116, 0, 1436797221, 0),
(798, 91, 116, 0, 1436797221, 0),
(799, 92, 116, 0, 1436797221, 0),
(800, 93, 116, 0, 1436797221, 0),
(801, 94, 116, 0, 1436797221, 0),
(802, 95, 116, 0, 1436797221, 0),
(803, 96, 116, 0, 1436797221, 0),
(804, 97, 116, 0, 1436797221, 0),
(805, 98, 116, 0, 1436797221, 0),
(806, 99, 116, 0, 1436797221, 0),
(807, 100, 116, 0, 1436797221, 0),
(808, 101, 116, 0, 1436797221, 0),
(809, 1, 100, 0, 1436797221, 0),
(810, 2, 100, 0, 1436797221, 0),
(811, 3, 100, 0, 1436797221, 0),
(812, 4, 100, 0, 1436797221, 0),
(813, 5, 100, 0, 1436797221, 0),
(814, 6, 100, 0, 1436797221, 0),
(815, 38, 100, 0, 1436797221, 0),
(816, 39, 100, 0, 1436797221, 0),
(817, 54, 100, 0, 1436797221, 0),
(818, 55, 100, 0, 1436797221, 0),
(819, 70, 100, 0, 1436797221, 0),
(820, 71, 100, 0, 1436797221, 0),
(821, 72, 100, 0, 1436797221, 0),
(822, 73, 100, 0, 1436797221, 0),
(823, 7, 100, 0, 1436797221, 0),
(824, 8, 100, 0, 1436797221, 0),
(825, 9, 100, 0, 1436797221, 0),
(826, 10, 100, 0, 1436797221, 0),
(827, 11, 100, 0, 1436797221, 0),
(828, 12, 100, 0, 1436797221, 0),
(829, 13, 100, 0, 1436797221, 0),
(830, 14, 100, 0, 1436797221, 0),
(831, 15, 100, 0, 1436797221, 0),
(832, 16, 100, 0, 1436797221, 0),
(833, 17, 100, 0, 1436797221, 0),
(834, 18, 100, 0, 1436797221, 0),
(835, 19, 100, 0, 1436797221, 0),
(836, 20, 100, 0, 1436797221, 0),
(837, 21, 100, 0, 1436797221, 0),
(838, 22, 100, 0, 1436797221, 0),
(839, 23, 100, 0, 1436797221, 0),
(840, 24, 100, 0, 1436797221, 0),
(841, 25, 100, 0, 1436797221, 0),
(842, 26, 100, 0, 1436797221, 0),
(843, 27, 100, 0, 1436797221, 0),
(844, 28, 100, 0, 1436797221, 0),
(845, 29, 100, 0, 1436797221, 0),
(846, 30, 100, 0, 1436797221, 0),
(847, 31, 100, 0, 1436797221, 0),
(848, 32, 100, 0, 1436797221, 0),
(849, 33, 100, 0, 1436797221, 0),
(850, 34, 100, 0, 1436797221, 0),
(851, 35, 100, 0, 1436797221, 0),
(852, 36, 100, 0, 1436797221, 0),
(853, 37, 100, 0, 1436797221, 0),
(854, 40, 100, 0, 1436797221, 0),
(855, 41, 100, 0, 1436797221, 0),
(856, 42, 100, 0, 1436797221, 0),
(857, 43, 100, 0, 1436797221, 0),
(858, 44, 100, 0, 1436797221, 0),
(859, 45, 100, 0, 1436797221, 0),
(860, 46, 100, 0, 1436797221, 0),
(861, 47, 100, 0, 1436797221, 0),
(862, 48, 100, 0, 1436797221, 0),
(863, 49, 100, 0, 1436797221, 0),
(864, 50, 100, 0, 1436797221, 0),
(865, 51, 100, 0, 1436797221, 0),
(866, 52, 100, 0, 1436797221, 0),
(867, 53, 100, 0, 1436797221, 0),
(868, 56, 100, 0, 1436797221, 0),
(869, 57, 100, 0, 1436797221, 0),
(870, 58, 100, 0, 1436797221, 0),
(871, 59, 100, 0, 1436797221, 0),
(872, 60, 100, 0, 1436797221, 0),
(873, 61, 100, 0, 1436797221, 0),
(874, 62, 100, 0, 1436797221, 0),
(875, 63, 100, 0, 1436797221, 0),
(876, 64, 100, 0, 1436797221, 0),
(877, 65, 100, 0, 1436797221, 0),
(878, 66, 100, 0, 1436797221, 0),
(879, 67, 100, 0, 1436797221, 0),
(880, 68, 100, 0, 1436797221, 0),
(881, 69, 100, 0, 1436797221, 0),
(882, 74, 100, 0, 1436797221, 0),
(883, 75, 100, 0, 1436797221, 0),
(884, 76, 100, 0, 1436797221, 0),
(885, 77, 100, 0, 1436797221, 0),
(886, 78, 100, 0, 1436797221, 0),
(887, 79, 100, 0, 1436797221, 0),
(888, 80, 100, 0, 1436797221, 0),
(889, 81, 100, 0, 1436797221, 0),
(890, 82, 100, 0, 1436797221, 0),
(891, 83, 100, 0, 1436797221, 0),
(892, 84, 100, 0, 1436797221, 0),
(893, 85, 100, 0, 1436797221, 0),
(894, 86, 100, 0, 1436797221, 0),
(895, 87, 100, 0, 1436797221, 0),
(896, 88, 100, 0, 1436797221, 0),
(897, 89, 100, 0, 1436797221, 0),
(898, 90, 100, 0, 1436797221, 0),
(899, 91, 100, 0, 1436797221, 0),
(900, 92, 100, 0, 1436797221, 0),
(901, 93, 100, 0, 1436797221, 0),
(902, 94, 100, 0, 1436797221, 0),
(903, 95, 100, 0, 1436797221, 0),
(904, 96, 100, 0, 1436797221, 0),
(905, 97, 100, 0, 1436797221, 0),
(906, 98, 100, 0, 1436797221, 0),
(907, 99, 100, 0, 1436797221, 0),
(908, 100, 100, 0, 1436797221, 0),
(909, 101, 100, 0, 1436797221, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE IF NOT EXISTS `tbl_languages` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `url` varchar(82) NOT NULL,
  `prefix` varchar(10) DEFAULT NULL,
  `file_name` varchar(128) NOT NULL,
  `default` tinyint(1) NOT NULL,
  `is_system` int(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `added` int(11) unsigned DEFAULT NULL,
  `modified` int(11) unsigned DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`id`, `name`, `url`, `prefix`, `file_name`, `default`, `is_system`, `status`, `added`, `modified`) VALUES
(1, 'Indonesia', 'indonesia', 'id', 'indonesia.jpg', 0, 0, 1, 1325742926, 1434966746),
(2, 'English', 'england', 'en', 'english.jpg', 1, 1, 1, 1325742950, 1434966299),
(3, 'Arab', 'arab', 'ar', 'arab.jpg', 0, 0, 1, 1325748808, 1434966683),
(4, 'French', 'french', 'fr', '', 0, 0, 1, 1429351625, 1434966692);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model_lists`
--

CREATE TABLE IF NOT EXISTS `tbl_model_lists` (
  `id` int(11) unsigned NOT NULL,
  `module_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_model_lists`
--

INSERT INTO `tbl_model_lists` (`id`, `module_id`, `model`) VALUES
(1, 1, 'admin/Users'),
(2, 1, 'admin/UserProfiles'),
(3, 1, 'admin/UserHistories'),
(4, 1, 'admin/ModulePermissions'),
(5, 1, 'admin/UserGroupPermissions'),
(6, 1, 'admin/Languages'),
(7, 1, 'admin/Settings'),
(8, 1, 'admin/ServerLogs'),
(9, 1, 'admin/Sessions'),
(10, 8, 'page/Pages'),
(11, 8, 'page/PageMenus'),
(12, 11, 'participant/Participants'),
(13, 11, 'participant/Gallery'),
(14, 14, 'region/Provinces'),
(15, 14, 'region/SubUrbans'),
(16, 14, 'region/UrbanDistricts'),
(17, 14, 'region/Districts');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_lists`
--

CREATE TABLE IF NOT EXISTS `tbl_module_lists` (
  `id` int(11) unsigned NOT NULL,
  `parent_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_link` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_module_lists`
--

INSERT INTO `tbl_module_lists` (`id`, `parent_id`, `module_name`, `module_link`, `order`) VALUES
(1, 0, 'admin', '#', 0),
(2, 1, 'Dashboard Panel', 'dashboard/index', 0),
(3, 1, 'Users', 'user/index', 1),
(4, 1, 'User Groups', 'usergroup/index', 2),
(5, 1, 'Languages', 'language/index', 3),
(6, 1, 'Settings', 'setting/index', 4),
(7, 1, 'Server Logs', 'serverlog/index', 5),
(8, 0, 'page', '#', 1),
(9, 8, 'Pages', 'page/index', 0),
(10, 8, 'Page Menus', 'pagemenu/index', 1),
(11, 0, 'participant', '#', 2),
(12, 11, 'Participant', 'participant/index', 0),
(13, 11, 'Gallery', 'gallery/index', 1),
(14, 0, 'region', '#', 3),
(15, 14, 'Province', 'province/index', 0),
(16, 14, 'Urban District', 'urbandistrict/index', 1),
(17, 14, 'Sub Urban', 'suburban/index', 2),
(18, 14, 'District', 'district/index', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_module_permissions` (
  `id` int(11) unsigned NOT NULL,
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_link` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_module_permissions`
--

INSERT INTO `tbl_module_permissions` (`id`, `module_id`, `module_name`, `module_link`, `order`) VALUES
(1, 1, 'Dashboard Panel', 'dashboard/index', 0),
(2, 1, 'Users', 'user/index', 1),
(3, 1, 'User Groups', 'usergroup/index', 2),
(4, 1, 'Languages', 'language/index', 3),
(5, 1, 'Settings', 'setting/index', 4),
(6, 1, 'Server Logs', 'serverlog/index', 5),
(7, 1, 'Add New Dashboard', 'dashboard/add', 6),
(8, 1, 'View Dashboard', 'dashboard/view', 7),
(9, 1, 'Edit Dashboard', 'dashboard/edit', 8),
(10, 1, 'Delete Dashboard', 'dashboard/delete', 9),
(11, 1, 'Change Dashboard Status', 'dashboard/change', 10),
(12, 1, 'Add User', 'user/add', 11),
(13, 1, 'View User', 'user/view', 12),
(14, 1, 'Edit User', 'user/edit', 13),
(15, 1, 'Delete User', 'user/delete', 14),
(16, 1, 'Change User Status', 'user/change', 15),
(17, 1, 'Change User Image', 'user/image', 16),
(18, 1, 'Upload User Image', 'user/upload', 17),
(19, 1, 'Add User Group', 'usergroup/add', 18),
(20, 1, 'View User Group', 'usergroup/view', 19),
(21, 1, 'Edit User Group', 'usergroup/edit', 20),
(22, 1, 'Delete User Group', 'usergroup/delete', 21),
(23, 1, 'Change User Group Status', 'usergroup/change', 22),
(24, 1, 'Add Language', 'language/add', 23),
(25, 1, 'View Language', 'language/view', 24),
(26, 1, 'Edit Language', 'language/edit', 25),
(27, 1, 'Delete Language', 'language/delete', 26),
(28, 1, 'Change Language Status', 'language/change', 27),
(29, 1, 'Add Setting', 'setting/add', 28),
(30, 1, 'View Setting', 'setting/view', 29),
(31, 1, 'Edit Setting', 'setting/edit', 30),
(32, 1, 'Delete Setting', 'setting/delete', 31),
(33, 1, 'Change Setting Status', 'setting/change', 32),
(34, 1, 'View Server Log', 'serverlog/view', 33),
(35, 1, 'Edit Server Log', 'serverlog/edit', 34),
(36, 1, 'Delete Server Log', 'serverlog/delete', 35),
(37, 1, 'Trash Server Log', 'serverlog/trash', 36),
(38, 8, 'Pages', 'page/index', 0),
(39, 8, 'Page Menus', 'pagemenu/index', 1),
(40, 8, 'Add Page', 'page/index/add', 2),
(41, 8, 'View Page', 'page/index/view', 3),
(42, 8, 'Edit Page', 'page/index/edit', 4),
(43, 8, 'Delete Page', 'page/index/delete', 5),
(44, 8, 'Change Page Status', 'page/index/change', 6),
(45, 8, 'Export Page', 'page/index/export', 7),
(46, 8, 'Print Page', 'page/index/print', 8),
(47, 8, 'Add Page Menu', 'pagemenu/index/add', 9),
(48, 8, 'View Page Menu', 'pagemenu/index/view', 10),
(49, 8, 'Edit Page Menu', 'pagemenu/index/edit', 11),
(50, 8, 'Delete Page Menu', 'pagemenu/index/delete', 12),
(51, 8, 'Change Page Menu Status', 'pagemenu/index/change', 13),
(52, 8, 'Export Page Menu', 'pagemenu/index/export', 14),
(53, 8, 'Print Page Menu', 'pagemenu/index/print', 15),
(54, 11, 'Participant', 'participant/index', 0),
(55, 11, 'Gallery', 'gallery/index', 1),
(56, 11, 'Add Participant', 'participant/index/add', 2),
(57, 11, 'View Participant', 'participant/index/view', 3),
(58, 11, 'Edit Participant', 'participant/index/edit', 4),
(59, 11, 'Delete Participant', 'participant/index/delete', 5),
(60, 11, 'Change Participant Status', 'participant/index/change', 6),
(61, 11, 'Export Participant', 'participant/index/export', 7),
(62, 11, 'Print Participant', 'participant/index/print', 8),
(63, 11, 'Add Gallery', 'gallery/index/add', 9),
(64, 11, 'View Gallery', 'gallery/index/view', 10),
(65, 11, 'Edit Gallery', 'gallery/index/edit', 11),
(66, 11, 'Delete Gallery', 'gallery/index/delete', 12),
(67, 11, 'Change Gallery Status', 'gallery/index/change', 13),
(68, 11, 'Export Gallery', 'gallery/index/export', 14),
(69, 11, 'Print Gallery', 'gallery/index/print', 15),
(70, 14, 'Province', 'province/index', 0),
(71, 14, 'Urban District', 'urbandistrict/index', 1),
(72, 14, 'Sub Urban', 'suburban/index', 2),
(73, 14, 'District', 'district/index', 3),
(74, 14, 'Add Province', 'province/index/add', 4),
(75, 14, 'View Province', 'province/index/view', 5),
(76, 14, 'Edit Province', 'province/index/edit', 6),
(77, 14, 'Delete Province', 'province/index/delete', 7),
(78, 14, 'Change Province Status', 'province/index/change', 8),
(79, 14, 'Export Province', 'province/index/export', 9),
(80, 14, 'Print Province', 'province/index/print', 10),
(81, 14, 'Add Urban District', 'urbandistrict/index/add', 11),
(82, 14, 'View Urban District', 'urbandistrict/index/view', 12),
(83, 14, 'Edit Urban District', 'urbandistrict/index/edit', 13),
(84, 14, 'Delete Urban District', 'urbandistrict/index/delete', 14),
(85, 14, 'Change Urban District Status', 'urbandistrict/index/change', 15),
(86, 14, 'Export Urban District', 'urbandistrict/index/export', 16),
(87, 14, 'Print Urban District', 'urbandistrict/index/print', 17),
(88, 14, 'Add Sub Urban', 'suburban/index/add', 18),
(89, 14, 'View Sub Urban', 'suburban/index/view', 19),
(90, 14, 'Edit Sub Urban', 'suburban/index/edit', 20),
(91, 14, 'Delete Sub Urban', 'suburban/index/delete', 21),
(92, 14, 'Change Sub Urban Status', 'suburban/index/change', 22),
(93, 14, 'Export Sub Urban', 'suburban/index/export', 23),
(94, 14, 'Print Sub Urban', 'suburban/index/print', 24),
(95, 14, 'Add District', 'district/index/add', 25),
(96, 14, 'View District', 'district/index/view', 26),
(97, 14, 'Edit District', 'district/index/edit', 27),
(98, 14, 'Delete District', 'district/index/delete', 28),
(99, 14, 'Change District Status', 'district/index/change', 29),
(100, 14, 'Export District', 'district/index/export', 30),
(101, 14, 'Print District', 'district/index/print', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE IF NOT EXISTS `tbl_pages` (
  `id` int(11) unsigned NOT NULL,
  `menu_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `synopsis` text,
  `text` text,
  `url` varchar(255) NOT NULL,
  `attribute` text,
  `publish_date` date DEFAULT NULL,
  `unpublish_date` date DEFAULT NULL,
  `allow_comment` tinyint(1) DEFAULT NULL,
  `tags` text,
  `order` tinyint(3) DEFAULT NULL,
  `user_id` tinyint(3) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` enum('publish','unpublish','deleted') DEFAULT 'publish',
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `menu_id`, `name`, `subject`, `synopsis`, `text`, `url`, `attribute`, `publish_date`, `unpublish_date`, `allow_comment`, `tags`, `order`, `user_id`, `count`, `status`, `added`, `modified`) VALUES
(1, 2, 'mechanism', 'Via Facebook', '<p>\r\n	Kirimkan foto dan cerita tersebut melalui salah satu cara berikut :</p>\r\n', '<div class="row hidden-xs">\r\n	<div class="col-xs-6 pembatas">\r\n		<img alt="cara kirim pakai FB" class="via-fb" src="../../assets/public/img/icon-up-fb.png" /></div>\r\n	<div class="col-xs-6">\r\n		<ul>\r\n			<li>\r\n				Foto boleh menggunakan ponsel atau kamera namun pastikan kualitas foto baik (Foto terang, tidak buram dan terlihat jelas)</li>\r\n			<li>\r\n				Kunjungi Facebook Mamypoko Indonesia (Tab Kisah Kasih Mamypoko)</li>\r\n			<li>\r\n				Login via Facebook</li>\r\n			<li>\r\n				Isi data diri secara lengkap</li>\r\n			<li>\r\n				Upload foto dan tulis cerita singkat yang menarik tentang Mamy, si Kecil dan MamyPoko</li>\r\n			<li>\r\n				Jika ingin mengikutsertakan lebih dari 1 orang anak, silakan ulangi proses mengisi data diri si Kecil dengan lengkap kemudian upload foto beserta cerita.</li>\r\n		</ul>\r\n	</div>\r\n</div>\r\n<div class="hidden-lg">\r\n<img alt="cara kirim pakai FB" class="via-fb img-ctr" src="../../assets/public/img/icon-up-fb.png" />\r\n            <ul>\r\n              <li>Foto boleh menggunakan ponsel atau kamera\r\n                namun pastikan kualitas foto baik (Foto terang,\r\n                tidak buram dan terlihat jelas)</li>\r\n              <li>Kunjungi Facebook Mamypoko Indonesia\r\n                (Tab Kisah Kasih Mamypoko)</li>\r\n              <li>Login via Facebook</li>\r\n              <li>Isi data diri secara lengkap</li>\r\n              <li>Upload foto dan tulis cerita singkat yang menarik\r\n                tentang Mamy, si Kecil dan MamyPoko</li>\r\n              <li>Jika ingin mengikutsertakan lebih dari 1 orang anak,\r\n                silakan ulangi proses mengisi data diri si Kecil\r\n                dengan lengkap kemudian upload foto beserta cerita.</li>\r\n            </ul>\r\n</div>\r\n', 'via-facebook', NULL, '2015-07-14', '2015-07-14', NULL, NULL, NULL, NULL, NULL, 'publish', 1436858857, 1438077127),
(2, 2, NULL, 'Via Pos', '<p>\r\n	Kirimkan foto dan cerita tersebut melalui salah satu cara berikut :</p>\r\n', '<div class="row visible-lg">\r\n	<div class="col-xs-7 pembatas">\r\n		<div class="via-pos-img">\r\n			<img alt="cara kirim foto via Pos" src="../../assets/public/img/icon-kirim-post.png" /></div>\r\n		<ul>\r\n			<li>\r\n				Dapatkan formulir pendaftaran di toko-toko terdekat <img alt="sample cara kirim foto via Pos" class="item-via-pos-img" src="../../assets/public/img/sample-kirim-post.png" /></li>\r\n			<li>\r\n				Isi formulir dengan lengkap sesuai petunjuk sertakan juga cerita singkat yang menarik tentang Mamy, si Kecil dan MamyPoko</li>\r\n		</ul>\r\n		<div class="bot-left-info vag-font">\r\n			Kirimkan via Pos ke<br />\r\n			PO BOX MamyPoko JKT 10000</div>\r\n	</div>\r\n	<div class="col-xs-5">\r\n		<ul>\r\n			<li>\r\n				Bila ingin mengikutsertakan lebih dari 1 anak, dapat ambil formulir sesuai dengan jumlah anak, isi data diri dengan lengkap lalu kirimkan dalam 1 amplop</li>\r\n			<li>\r\n				Kirimkan foto berukuran 2R (6x9 cm)</li>\r\n			<li>\r\n				Pengiriman via pos disertai dengan formulir, apabila Mamy tidak memiliki formulir Mamy dapat mengisi data lengkap dibelakang foto yang Mamy kirim.</li>\r\n			<li>\r\n				Data lengkap yang harus diisi berupa (Nama Mamy, No. KTP, Nama bayi, Tanggal lahir bayi, Alamat [RT,RW, Kode Pos], No Hp dan No telepon rumah)</li>\r\n		</ul>\r\n	</div>\r\n</div>\r\n\r\n<div class="row visible-xs">\r\n            <div>\r\n              <img class="img-ctr" src="../../assets/public/img/icon-kirim-post.png" alt="cara kirim foto via Pos">\r\n              <ul>\r\n                <li>Dapatkan formulir pendaftaran\r\n                  di toko-toko terdekat </li>\r\n                <li><img class="item-via-pos-img" src="../../assets/public/img/sample-kirim-post.png" alt="sample cara kirim foto via Pos"></li>\r\n                <li>Isi formulir dengan lengkap\r\n                    sesuai petunjuk sertakan\r\n                    juga cerita singkat yang menarik\r\n                    tentang Mamy, si Kecil dan\r\n                    MamyPoko</li>\r\n                <li>Bila ingin mengikutsertakan\r\n                  lebih dari 1 anak, dapat ambil formulir\r\n                  sesuai dengan jumlah anak, isi data diri\r\n                  dengan lengkap lalu kirimkan\r\n                  dalam 1 amplop</li>\r\n                <li>Kirimkan foto berukuran 2R (6x9 cm)</li>\r\n                <li>Pengiriman via pos disertai\r\n                  dengan formulir, apabila Mamy\r\n                  tidak memiliki formulir Mamy\r\n                  dapat mengisi data lengkap dibelakang foto\r\n                  yang Mamy kirim. </li>\r\n                <li>Data lengkap yang harus diisi berupa\r\n                  (Nama Mamy, No. KTP, Nama bayi,\r\n                  Tanggal lahir bayi,  Alamat [RT,RW, Kode Pos],\r\n                  No Hp dan No telepon rumah)</li>\r\n              </ul>\r\n              <!--<div class="bot-left-info vag-font">\r\n                Kirimkan via Pos ke<br>\r\n                PO BOX MamyPoko JKT 10000\r\n              </div>-->\r\n            </div>\r\n          </div>', 'via-pos', NULL, '2015-07-14', '2015-07-14', NULL, NULL, NULL, NULL, NULL, 'publish', 1436862068, 1438077397);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_menus`
--

CREATE TABLE IF NOT EXISTS `tbl_page_menus` (
  `id` int(11) unsigned NOT NULL,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `synopsis` text,
  `description` text,
  `url` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `sub_level` tinyint(3) DEFAULT NULL,
  `order` tinyint(3) DEFAULT NULL,
  `is_system` tinyint(3) DEFAULT NULL,
  `has_child` tinyint(3) DEFAULT NULL,
  `user_id` tinyint(3) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` enum('publish','unpublish','deleted') DEFAULT 'publish',
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_menus`
--

INSERT INTO `tbl_page_menus` (`id`, `parent_id`, `name`, `title`, `synopsis`, `description`, `url`, `media`, `position`, `sub_level`, `order`, `is_system`, `has_child`, `user_id`, `count`, `status`, `added`, `modified`) VALUES
(1, NULL, 'Terms', 'Syarat dan ketentuan', NULL, '<ul>\n	<li>\n		Saat foto, si Kecil harus memakai popok MamyPoko Tipe Celana / Pants (Standar/Extra Dry/Extra Soft)</li>\n	<li>\n		Kemasan produk tidak wajib ada di foto</li>\n	<li>\n		Si Kecil maksimal berusia 3 tahun sampai dengan akhir Desember 2015</li>\n	<li>\n		Satu anak hanya dapat diikutsertakan dalam 1 foto, jika mengirimkan lebih dari 1 foto maka akan didiskualifikasi</li>\n	<li>\n		Jika memiliki lebih dari 1 orang anak, semuanya dapat diikutsertakan dengan mengirimkan foto yang berbeda dan mengisi data diri masing-masing anak dengan lengkap</li>\n	<li>\n		Kompetisi berlangsung mulai 1 Agustus sampai 1 Oktober 2015</li>\n	<li>\n		Kompetisi ini tidak berlaku untuk staff dan karyawan MamyPoko / PT. Unicharm Indonesia serta agensi penyelenggara (biro iklan) beserta anggota keluarga maupun segala pihak yang berkaitan dengan kompetisi foto Kisah Kasih MamyPoko</li>\n	<li>\n		Setiap foto yang masuk ke Tim MamyPoko akan menjadi hak milik MamyPoko dan dapat digunakan sewaktu-waktu untuk kepentingan MamyPoko tanpa pemberitahuan sebelumnya dengan menyebutkan sumbernya</li>\n	<li>\n		Pemenang akan dipilih oleh Tim MamyPoko sebagai dewan juri. Keputusan tidak dapat diganggu gugat.</li>\n</ul>\n<h2 class="kriteria vag-font">\n	KRITERIA PENILAIAN</h2>\n<ul>\n	<li>\n		Keaslian cerita (bukan hasil mengutip dari mana pun)</li>\n	<li>\n		Cara penulisan cerita yang menarik dan kreatif</li>\n	<li>\n		Kesesuaian foto dengan tema serta cerita yang ditulis</li>\n	<li>\n		Ekspresi wajah baik si Kecil atau pun Mamy</li>\n	<li>\n		Produk MamyPoko yang digunakan nampak jelas</li>\n</ul>\n', 'terms', 'e9c8f-syarat.png', 'top', NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL),
(2, NULL, 'Mechanism', 'Mekanisme', '<p>\r\n	Kirimkan foto dan cerita tersebut melalui salah satu cara berikut :</p>\r\n', '<div class="row visible-lg">\r\n	<div class="col-xs-4 pembatas">\r\n		<img alt="cara satu" class="cara-satu" src="../assets/public/img/cara-satu.png" />\r\n		<ul>\r\n			<li>\r\n				Tunjukkan ekspresi bahagia dan penuh kasih antara Mamy dan si Kecil lewat foto</li>\r\n		</ul>\r\n	</div>\r\n	<div class="col-xs-4 pembatas">\r\n		<img alt="cara dua" class="cara-dua" src="../assets/public/img/cara-dua.png" />\r\n		<ul>\r\n			<li>\r\n				Pastikan si Kecil menggunakan popok MamyPoko Pants / Tipe Celana (Standar/Extra Dry/Extra Soft)</li>\r\n		</ul>\r\n	</div>\r\n	<div class="col-xs-4">\r\n		<img alt="cara tiga" class="cara-tiga" src="../assets/public/img/cara-tiga.png" />\r\n		<ul>\r\n			<li>\r\n				Ceritakan secara singkat dan menarik mengenai momen indah Mamy dan si Kecil bersama MamyPoko</li>\r\n		</ul>\r\n	</div>\r\n</div>\r\n\r\n<div class="row visible-xs">\r\n            <div>\r\n              <img class="cara-satu img-ctr" src="../assets/public/img/cara-satu.png" alt="cara satu">\r\n              <ul><li>Tunjukkan ekspresi bahagia dan penuh kasih antara Mamy dan si Kecil lewat foto</li></ul>\r\n            </div>\r\n            <div>\r\n              <img class="cara-dua img-ctr" src="../assets/public/img/cara-dua.png" alt="cara dua">\r\n              <ul><li>Pastikan si Kecil menggunakan popok MamyPoko Pants / Tipe Celana (Standar/Extra Dry/Extra Soft)</li></ul>\r\n            </div>\r\n            <div>\r\n              <img class="cara-tiga img-ctr" src="../assets/public/img/cara-tiga.png" alt="cara tiga">\r\n              <ul><li>Ceritakan secara singkat dan menarik mengenai momen indah Mamy dan si Kecil bersama MamyPoko</li></ul>\r\n            </div>\r\n          </div>\r\n', 'mechanism', '50fed-mekanisme.png', 'top', NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL),
(3, NULL, 'Hadiah', 'Hadiah', NULL, '<div class="visible-lg">\r\n  <img alt="brio hadiah page" class="brio-page-hadiah" src="../assets/public/img/brio-phadiah.png" /> \r\n  <img alt="hadiah page" class="brio-page-hadiah" src="../assets/public/img/page-hadiah.png" />\r\n</div>\r\n<div class="visible-xs">\r\n  <img class="brio-page-hadiah img-responsive" src="../assets/public/img/mbrio-phadiah.png" alt="brio hadiah page">\r\n  <img class="brio-page-hadiah img-responsive" src="../assets/public/img/pemenang-2-3.png" alt="hadiah page">\r\n  <img class="brio-page-hadiah img-responsive" src="../assets/public/img/mhadiah-hiburan.png" alt="hadiah page">\r\n</div>\r\n	<div class="note-hadiah1 vag-font">\r\n		<p>\r\n			Hadiah grand prize (untuk pemenang utama, kedua, ketiga dan hiburan) akan diumumkan tanggal <span class="date-announce">19 October 2015</span> di Tabloid Nova dan Facebook fan page MamyPoko Indonesia</p>\r\n	</div>\r\n	<div class="note-hadiah2 vag-font">\r\n		<p>\r\n			Pemenang beruntung akan diumumkan tiap 2 minggu dengan rincian:</p>\r\n		<p>\r\n			Pemenang beruntung gelombang 1: Tanggal <span class="date-event">18 Agustus 2015</span> diumumkan di Tabloid Nova dan Facebook fan page MamyPoko</p>\r\n		<p>\r\n			Pemenang beruntung gelombang 2: Tanggal <span class="date-event">31 Agustus 2015</span> diumumkan di Facebook fan page MamyPoko Indonesia</p>\r\n		<p>\r\n			Pemenang beruntung gelombang 3: Tanggal <span class="date-event">14 September 2015</span> diumumkan di Facebook fan page MamyPoko Indonesia</p>\r\n		<p>\r\n			Pemenang beruntung gelombang 4: Tanggal <span class="date-event">28 September 2015</span> diumumkan di Facebook fan page MamyPoko Indonesia</p>\r\n</div>\r\n', 'prize', '66ef1-hadiah.png', 'top', NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participants`
--

CREATE TABLE IF NOT EXISTS `tbl_participants` (
  `id` int(11) unsigned NOT NULL,
  `identifier_id` varchar(64) DEFAULT NULL,
  `identity` varchar(32) DEFAULT NULL,
  `profile_url` varchar(255) DEFAULT NULL,
  `photo_url` varchar(512) DEFAULT NULL,
  `email` varchar(72) DEFAULT NULL,
  `website` varchar(72) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(12) DEFAULT NULL,
  `age` tinyint(2) DEFAULT NULL,
  `nationality_id` int(11) DEFAULT NULL,
  `research_area` varchar(255) DEFAULT NULL,
  `occupation` varchar(64) DEFAULT NULL,
  `baby_name` varchar(42) DEFAULT NULL,
  `baby_birthday` varchar(12) DEFAULT NULL,
  `about` text,
  `address` varchar(512) DEFAULT NULL,
  `region` varchar(64) DEFAULT NULL,
  `phone_number` varchar(32) DEFAULT NULL,
  `phone_home` varchar(32) DEFAULT NULL,
  `id_number` varchar(32) DEFAULT NULL,
  `file_name` varchar(512) DEFAULT NULL,
  `verify` varchar(8) DEFAULT NULL,
  `completed` tinyint(1) DEFAULT NULL,
  `logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` int(11) DEFAULT NULL,
  `session_id` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_participants`
--

INSERT INTO `tbl_participants` (`id`, `identifier_id`, `identity`, `profile_url`, `photo_url`, `email`, `website`, `password`, `username`, `name`, `gender`, `age`, `nationality_id`, `research_area`, `occupation`, `baby_name`, `baby_birthday`, `about`, `address`, `region`, `phone_number`, `phone_home`, `id_number`, `file_name`, `verify`, `completed`, `logged_in`, `last_login`, `session_id`, `status`, `join_date`) VALUES
(23, '10204826679575324', 'Facebook', 'https://www.facebook.com/app_scoped_user_id/10204826679575324/', 'https://graph.facebook.com/10204826679575324/picture?width=150&height=150', 'permenmanishollyheads@rocketmail.com', '', NULL, NULL, 'Elma Effina Effendy', 'female', NULL, NULL, NULL, NULL, 'Haikal Rayyan Al Yarfi', '11/07/2014', 'Hai semua, ini baby haikal yang sudah masuk usia 1 tahun dan lagi senang2 nya belajar jalan', NULL, '', '081287323725', '0210868689', '03928393728900', 'e13435e975c03c08cf79fe762720d65d.jpg', 'AQqBi', 0, 0, 1437750532, '', 1, '2015-07-24 15:08:52'),
(22, '10207545992435105', 'Facebook', 'https://www.facebook.com/app_scoped_user_id/10207545992435105/', 'https://graph.facebook.com/10207545992435105/picture?width=150&height=150', 'qwik_chyp@yahoo.com', 'http://bebekbecek.deviantart.com\nhttp://www.plurk.com/bebekbecek\nhttp://', NULL, NULL, 'Indita Suwika Sari', 'female', NULL, NULL, NULL, NULL, 'Moi', '01/06/2015', 'Pipis sembarangan', NULL, 'Jakarta, Indonesia', '0811156307', '0217222525', '3174054511890001', '8936063f5d8cf599f49fd0ef19a0f53e.jpg', 'cxfwp', 0, 0, NULL, '', 1, '2015-07-24 12:48:33'),
(27, '1614594405486202', 'Facebook', 'https://www.facebook.com/app_scoped_user_id/1614594405486202/', 'https://graph.facebook.com/1614594405486202/picture?width=150&height=150', 'dyarfi20@gmail.com', '', NULL, NULL, 'Nairfed Ifray', 'male', NULL, NULL, NULL, NULL, 'Baby Zee', '28/07/2015', 'TEst Keterangan Deskripsi', NULL, '', '081807244697', '1231231', '123123123', 'bda92b08c0e040734448170bbb342eda.jpg', 'BrZDG', 0, 0, NULL, '', 1, '2015-07-27 19:34:06'),
(21, '152520338412513', 'Facebook', 'https://www.facebook.com/app_scoped_user_id/152520338412513/', 'https://graph.facebook.com/152520338412513/picture?width=150&height=150', 'muhammad.hilman@d3.dentsu.co.id', '', NULL, NULL, 'Iniakun Buattesting', 'male', NULL, NULL, NULL, NULL, 'anak kuda', '08/06/2015', 'ceritanya anka monkey king', NULL, '', '021355841565', '21355431215135', '12536987935', 'a48ca1018701b3e5bd09c44e6451c673.jpg', 'xlllN', 0, 0, NULL, '', 1, '2015-07-24 12:39:48'),
(24, '10153534732384322', 'Facebook', 'https://www.facebook.com/app_scoped_user_id/10153534732384322/', 'https://graph.facebook.com/10153534732384322/picture?width=150&height=150', 'arinda.ruby@gmail.com', '', NULL, NULL, 'Arinda Ruby', 'female', NULL, NULL, NULL, NULL, 'Arhata Malik', '27/07/2015', 'deqwfjdifh JWDNFKAN KCKDNFKSL BGBRDB', NULL, '', '0872463839', '77638281', '123456789', '47edcb453c495cdcbfd119bd618eeba7.JPG', 'sbFTi', 0, 0, NULL, '', 1, '2015-07-27 05:18:17'),
(28, '1594395950826798', 'Facebook', 'https://www.facebook.com/app_scoped_user_id/1594395950826798/', 'https://graph.facebook.com/1594395950826798/picture?width=150&height=150', 'pricilianapitupulu@yahoo.com', '', NULL, NULL, 'Pricilia Nikitta', 'female', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', 0, '2015-07-28 03:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participant_images`
--

CREATE TABLE IF NOT EXISTS `tbl_participant_images` (
  `id` int(11) unsigned NOT NULL,
  `part_id` int(11) unsigned DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_name` text,
  `count` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_participant_images`
--

INSERT INTO `tbl_participant_images` (`id`, `part_id`, `url`, `title`, `file_name`, `count`, `status`, `added`, `modified`) VALUES
(1, 7, 'asdasd', 'asdasdad', 'asdf', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinces`
--

CREATE TABLE IF NOT EXISTS `tbl_provinces` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_server_logs`
--

CREATE TABLE IF NOT EXISTS `tbl_server_logs` (
  `id` int(11) unsigned NOT NULL,
  `session_id` varchar(64) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `http_code` int(11) unsigned NOT NULL,
  `status_code` varchar(160) DEFAULT NULL,
  `bytes_served` int(11) DEFAULT NULL,
  `total_time` varchar(160) DEFAULT NULL,
  `ip_address` int(11) DEFAULT '0',
  `referrer` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `is_mobile` int(1) DEFAULT NULL,
  `status` int(1) unsigned NOT NULL,
  `added` int(11) unsigned NOT NULL,
  `modified` int(11) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `id` int(11) unsigned NOT NULL,
  `parameter` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `is_system` tinyint(1) DEFAULT '1',
  `status` tinyint(1) DEFAULT '1',
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `parameter`, `alias`, `value`, `is_system`, `status`, `added`, `modified`) VALUES
(1, 'email_marketing', 'Email Marketing', 'marketing@', 1, 1, 1334835773, NULL),
(2, 'email_administrator', 'Email Administrator', 'administrator@', 1, 1, 1334835773, 1336122482),
(3, 'email_hrd', 'Email HRD', 'hrd@', 1, 1, 1334835773, NULL),
(4, 'email_info', 'Email Info', 'info@d3.dentsu.co.id', 1, 1, 1334835773, NULL),
(5, 'email_template', 'Email Template', '&dash;', 1, 1, 1334835773, NULL),
(6, 'maintenance_template', 'Maintenance Mode Template', '<h2>The site is off for <span><h1>MAINTENANCE</h1></span></h2>', 1, 1, 1334835773, NULL),
(7, 'contactus_address', 'Contact Address', '22nd Floor, Mandiri Tower Plaza Bapindo <br/>\nJl. Jend. Sudirman Kav. 54-55 <br/>\nJakarta 12190, Indonesia', 1, 1, 1334835773, NULL),
(8, 'contactus_gmap', 'GMaps Location', 'http://maps.google.com/maps?q=-6.217668,106.812992&num=1&t=m&z=18', 1, 1, 1334835773, NULL),
(9, 'no_phone', 'Number Phone', '(021) 299-501-10 / (021) 526-0286', 1, 1, 1334835773, NULL),
(10, 'no_fax', 'Number Fax', '(021) 522.3718', 1, 1, 1334835773, NULL),
(11, 'title_default', 'Website Title Default', 'Lomba foto Kisah Kasih Mamy Poko', 1, 1, NULL, NULL),
(12, 'title_name', 'Company Title Name', 'PT. Default (Web Agency in Jakarta)', 1, 1, NULL, 1336118568),
(13, 'language', 'Default Language', 'en', 1, 1, NULL, 1336118568),
(14, 'counter', 'Site Counter', '123', 1, 1, NULL, 1336118568),
(15, 'copyright', 'Copyright', '© 2015 Mamy Poko Indonesia. All Rights Reserved.', 1, 1, NULL, 1336118568),
(16, 'site_name', 'Site Name', ' Default <br/> PT. Default (Web Agency in Jakarta).', 1, 1, NULL, 1336118568),
(17, 'site_quote', 'Quote', 'We provide solution for your Websites', 1, 1, NULL, 1336118568),
(18, 'site_description', 'Website Description', 'We provide solution for your Company Website ', 1, 1, NULL, 1336118568),
(19, 'socmed_facebook', 'Facebook', 'http://facebook.com', 1, 1, NULL, 1336118568),
(20, 'socmed_twitter', 'Twitter', 'http://twitter.com', 1, 1, NULL, 1336118568),
(21, 'socmed_gplus', 'Google Plus', 'http://plus.google.com', 1, 1, NULL, 1336118568),
(22, 'socmed_linkedin', 'LinkedIn', 'http://linkedin.com', 1, 1, NULL, 1424754067),
(23, 'socmed_pinterest', 'Pinterest', 'http://pinterest.com', 1, 1, NULL, 1336118568),
(24, 'registered_mark', 'Registered', 'We provide solution for your Websites', 1, 1, NULL, 1336118568),
(25, 'google_analytics', 'Analytics', 'Code Snippet', 1, 1, NULL, 1336118568),
(26, 'ext_link', 'Ext Link', 'http://www.apb-career.net', 1, 1, NULL, 1423732944);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_urbans`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_urbans` (
  `id` int(11) unsigned NOT NULL,
  `urban_district_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_urban_districts`
--

CREATE TABLE IF NOT EXISTS `tbl_urban_districts` (
  `id` int(11) unsigned NOT NULL,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `added` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(6) NOT NULL,
  `username` char(64) CHARACTER SET latin1 NOT NULL,
  `email` varchar(64) CHARACTER SET latin1 NOT NULL,
  `password` char(124) CHARACTER SET latin1 NOT NULL,
  `group_id` tinyint(1) unsigned NOT NULL,
  `last_login` int(11) NOT NULL,
  `logged_in` int(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `session_id` varchar(160) NOT NULL,
  `added` int(11) NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `password`, `group_id`, `last_login`, `logged_in`, `status`, `session_id`, `added`, `modified`) VALUES
(1, 'admin', 'admin@admin.com', 'dd94709528bb1c83d08f3088d4043f4742891f4f', 1, 1437980614, 1, 1, 'ef6604130dded7eac4aab804914682de', 0, 0),
(2, 'joni', 'admin1@admin.com', '9003d1df22eb4d3820015070385194c8', 2, 1417003004, 0, 1, '', 0, 1424687676),
(3, 'qc', 'asdf@asdf.com', 'fb00378895cf135de3b135f385c0012f3823e4fb', 3, 1417001008, 0, 1, '', 0, 1424689343),
(29, 'dyarfi', 'dyarfi20@gmail.com', '647dc5d75f6ce3c6a859eb3b91fa6ccaab05b245', 116, 0, 0, 1, '', 1417065898, 0),
(7, 'gmp', 'defrian.yarfi@gmail.com', '4d60cf3ac1381a533090412a84466000437eee1f', 4, 1417003001, 0, 1, '', 0, 0),
(28, 'public', 'defrian.yarfi@gmail.com', '616eae925a4c10a70f2675d13d5c9e909f4d60c6', 100, 1417001002, 1, 1, '', 1424854403, 1424689343),
(30, 'user.gen', 'defrian.yarfi@yahoo.com', '616eae925a4c10a70f2675d13d5c9e909f4d60c6', 100, 1417001002, 1, 1, '', 1416993998, 1424689343),
(31, 'zxcvxcvzxcv', 'defrian.yarfi@gmail.comv', '19bfae76572363c2fa22ce08024fece149ac3303', 100, 0, 0, 1, '', 1424854664, 0),
(32, 'admin@admin.com', 'admin@admin.com', '23aab64707ea295a6d8fa04d77a6db67e2d57c57', 100, 0, 0, 1, '', 1425380399, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_groups`
--

CREATE TABLE IF NOT EXISTS `tbl_user_groups` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `backend_access` tinyint(1) DEFAULT NULL,
  `full_backend_access` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_system` tinyint(1) NOT NULL DEFAULT '0',
  `added` int(11) unsigned NOT NULL,
  `modified` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_groups`
--

INSERT INTO `tbl_user_groups` (`id`, `name`, `backend_access`, `full_backend_access`, `status`, `is_system`, `added`, `modified`) VALUES
(1, 'Super Administrator', 1, 1, 1, 1, 1416499923, 0),
(2, 'Administrator', 1, 1, 1, 1, 1416499923, 0),
(99, 'User', 0, 0, 1, 1, 1416499923, 0),
(111, 'Manager', 1, 1, 1, 0, 0, 1425320008),
(112, 'Executive', 0, 0, 1, 0, 0, 0),
(113, 'Director', 0, 0, 1, 0, 0, 0),
(114, 'General', 0, 0, 1, 0, 0, 1424689329),
(116, 'Publisher', 1, 1, 1, 0, 0, 0),
(100, 'Employee', 1, NULL, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_histories`
--

CREATE TABLE IF NOT EXISTS `tbl_user_histories` (
  `id` int(11) unsigned NOT NULL,
  `module` varchar(24) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `controller` varchar(160) NOT NULL,
  `action` char(20) DEFAULT NULL,
  `time` int(11) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_user_profiles` (
  `user_id` int(11) unsigned NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `about` text,
  `first_name` varchar(64) DEFAULT NULL,
  `last_name` varchar(64) DEFAULT NULL,
  `division` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `state` varchar(64) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `address` text,
  `postal_code` varchar(8) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `mobile_phone` varchar(16) DEFAULT NULL,
  `fax` varchar(16) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `file_type` varchar(64) DEFAULT NULL,
  `file_name` varchar(48) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `added` int(11) unsigned NOT NULL,
  `modified` int(11) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_profiles`
--

INSERT INTO `tbl_user_profiles` (`user_id`, `gender`, `about`, `first_name`, `last_name`, `division`, `country`, `state`, `city`, `address`, `postal_code`, `birthday`, `phone`, `mobile_phone`, `fax`, `website`, `file_type`, `file_name`, `status`, `added`, `modified`) VALUES
(1, 'male', 'Top Administrator of this website and portal', 'Administrator', 'Website', 'Web Programmer', 'DKI Jakarta', 'Jakarta', 'Jl. Gading Putih 1 F2 No. 4', '14240', '', '2010-09-06', '1234', '081807244697', '0', 'http://google.com', 'image/jpeg', '03.jpg', 1, 1283760138, 1428349886),
(2, 'male', 'Administrator of this Website', '', '', 'Web Designer', 'DKI Jakarta', 'Jakarta', 'Jl. Gading Putih 1 F2 No. 4', '14240', '', '2010-09-06', '1234', '081807244697', '0', '', 'image/jpeg', '78d57b4b5a0c6048b75bb0c9d91a8392.jpg', 1, 1283760138, 1424687676),
(3, 'male', 'User of this Website', '', '', 'Jakarta', '', '', 'Jl. Pulomas Barat 1 No. 31', '', '', '0000-00-00', '1234', '', '', '', 'image/jpeg', 'a8a484572c007e1e17648ae2c7ad629c.jpg', 1, 1285152397, 1424689343),
(28, 'male', 'Test', 'Public', 'Viewers', 'Web Programmer', NULL, NULL, NULL, NULL, NULL, '0000-00-00', '909090090', '909090090', NULL, NULL, NULL, NULL, 1, 1424854403, 1424689343),
(29, 'male', 'Web Programmer not a full stack', 'Defrian', 'Yarfi', 'Web Programmer', NULL, NULL, NULL, NULL, NULL, '0000-00-00', '081807244697', '081807244697', NULL, NULL, NULL, NULL, 1, 1417065898, 0),
(111, 'male', '', 'Web Developer', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 1, 1333442128, 1333442192),
(110, 'male', '', 'Web Developer', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 1, 1333441986, 1333442058),
(31, 'male', 'Test', 'Defrian', 'Yarfi', 'Web Programmer', NULL, NULL, NULL, NULL, NULL, '2012-02-25', '081807244697', '909090090', NULL, NULL, NULL, NULL, 1, 1424854664, 0),
(32, 'male', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5cae9-_7___felix_boyeaux_studios_by_fixxxxx.png', 1, 1425380399, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_captcha`
--
ALTER TABLE `tbl_captcha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ci_sessions`
--
ALTER TABLE `tbl_ci_sessions`
  ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_configurations`
--
ALTER TABLE `tbl_configurations`
  ADD PRIMARY KEY (`parameter`,`value`);

--
-- Indexes for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_group_permissions`
--
ALTER TABLE `tbl_group_permissions`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`,`status`);

--
-- Indexes for table `tbl_model_lists`
--
ALTER TABLE `tbl_model_lists`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_module_lists`
--
ALTER TABLE `tbl_module_lists`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_module_permissions`
--
ALTER TABLE `tbl_module_permissions`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`), ADD KEY `menu_id` (`menu_id`,`name`,`publish_date`,`unpublish_date`,`allow_comment`,`order`);

--
-- Indexes for table `tbl_page_menus`
--
ALTER TABLE `tbl_page_menus`
  ADD PRIMARY KEY (`id`), ADD KEY `parent_id` (`parent_id`,`name`,`sub_level`,`order`,`status`);

--
-- Indexes for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_participant_images`
--
ALTER TABLE `tbl_participant_images`
  ADD PRIMARY KEY (`id`), ADD KEY `part_id` (`part_id`,`url`);

--
-- Indexes for table `tbl_provinces`
--
ALTER TABLE `tbl_provinces`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_server_logs`
--
ALTER TABLE `tbl_server_logs`
  ADD PRIMARY KEY (`id`), ADD KEY `url` (`url`,`user_id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`parameter`,`status`);

--
-- Indexes for table `tbl_sub_urbans`
--
ALTER TABLE `tbl_sub_urbans`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_urban_districts`
--
ALTER TABLE `tbl_urban_districts`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_groups`
--
ALTER TABLE `tbl_user_groups`
  ADD PRIMARY KEY (`id`), ADD KEY `parent_id` (`status`);

--
-- Indexes for table `tbl_user_histories`
--
ALTER TABLE `tbl_user_histories`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`,`module`,`user_id`);

--
-- Indexes for table `tbl_user_profiles`
--
ALTER TABLE `tbl_user_profiles`
  ADD KEY `user_id` (`user_id`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_captcha`
--
ALTER TABLE `tbl_captcha`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1837;
--
-- AUTO_INCREMENT for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_group_permissions`
--
ALTER TABLE `tbl_group_permissions`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=910;
--
-- AUTO_INCREMENT for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_model_lists`
--
ALTER TABLE `tbl_model_lists`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_module_lists`
--
ALTER TABLE `tbl_module_lists`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_module_permissions`
--
ALTER TABLE `tbl_module_permissions`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_page_menus`
--
ALTER TABLE `tbl_page_menus`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_participant_images`
--
ALTER TABLE `tbl_participant_images`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_provinces`
--
ALTER TABLE `tbl_provinces`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_server_logs`
--
ALTER TABLE `tbl_server_logs`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_sub_urbans`
--
ALTER TABLE `tbl_sub_urbans`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_urban_districts`
--
ALTER TABLE `tbl_urban_districts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_user_groups`
--
ALTER TABLE `tbl_user_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `tbl_user_histories`
--
ALTER TABLE `tbl_user_histories`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
