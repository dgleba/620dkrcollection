-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ar_internal_metadata`;
CREATE TABLE `ar_internal_metadata` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ar_internal_metadata` (`key`, `value`, `created_at`, `updated_at`) VALUES
('environment',	'development',	'2020-09-16 16:41:35',	'2020-09-16 16:41:35')
ON DUPLICATE KEY UPDATE `key` = VALUES(`key`), `value` = VALUES(`value`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `favorite_projects`;
CREATE TABLE `favorite_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fave_num` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_favorite_projects_on_project_id` (`project_id`),
  KEY `index_favorite_projects_on_user_id` (`user_id`),
  KEY `fave_num` (`fave_num`),
  CONSTRAINT `fk_rails_036516fd1d` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_rails_64cb6bd878` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `favorite_projects` (`id`, `project_id`, `user_id`, `fave_num`, `sort_order`, `active_status`, `created_at`, `updated_at`) VALUES
(9,	513,	1,	1,	NULL,	NULL,	'2020-09-20 19:29:21',	'2020-09-20 19:29:21'),
(10,	527,	1,	1,	NULL,	NULL,	'2020-09-20 19:30:17',	'2020-09-20 19:30:17'),
(13,	590,	4,	1,	NULL,	NULL,	'2020-09-20 21:10:37',	'2020-09-20 21:10:37'),
(15,	590,	1,	1,	NULL,	NULL,	'2020-09-21 01:21:15',	'2020-09-21 01:21:15'),
(16,	605,	1,	1,	NULL,	NULL,	'2020-09-21 11:20:53',	'2020-09-21 11:20:53'),
(17,	616,	1,	1,	NULL,	NULL,	'2020-09-21 11:22:02',	'2020-09-21 11:22:02'),
(18,	530,	1,	1,	NULL,	NULL,	'2020-09-21 13:27:52',	'2020-09-21 13:27:52')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `project_id` = VALUES(`project_id`), `user_id` = VALUES(`user_id`), `fave_num` = VALUES(`fave_num`), `sort_order` = VALUES(`sort_order`), `active_status` = VALUES(`active_status`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `tech_radar_num` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `ae_lead` varchar(255) DEFAULT NULL,
  `bd_lead_si_customer` varchar(255) DEFAULT NULL,
  `ae_objective` text,
  `sort_order` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `number` (`number`),
  KEY `tech_radar_num` (`tech_radar_num`),
  KEY `active` (`active`),
  KEY `priority` (`priority`),
  KEY `ae_lead` (`ae_lead`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `projects` (`id`, `name`, `number`, `tech_radar_num`, `active`, `priority`, `ae_lead`, `bd_lead_si_customer`, `ae_objective`, `sort_order`, `active_status`, `created_at`, `updated_at`) VALUES
(512,	'AE17-001 PMDA 8F Pump Components',	'AE17-001',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(513,	'AE17-003 NVH Reduction',	'AE17-003',	'160',	'active',	'high',	'H. Ye',	'B. Ayre',	'Develop simulation capability to predict influence of material and geometry on component (gear) resonant damping and impulse transmission behaviour',	NULL,	NULL,	NULL,	NULL),
(514,	'AE17-005 10R Crowning Via Forming',	'AE17-005',	'151',	'active',	'high',	'J. Wilson',	'P. Kauffmann, R. Leishman',	'Develop new gear crowning process which may be more cost effective than crowning via gear grinding for 10R and/or future applications',	NULL,	NULL,	NULL,	NULL),
(515,	'AE17-006 Gear Misalignment Study',	'AE17-006',	'38',	'active',	'high',	'J. Wilson',	'',	'Develop tools to predict gear shaft deflection and impact on transmission error using multiple simulation tools (ansys, kisssoft, etc.)',	NULL,	NULL,	NULL,	NULL),
(516,	'AE17-007 Helical Compaction Development',	'AE17-007',	'',	'active',	'high',	'F. Ma',	'',	'',	NULL,	NULL,	NULL,	NULL),
(517,	'AE18-002 MTS torque cell calibration adaptor plates',	'AE18-002',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(518,	'AE18-003 Compaction stage diagram, Powder Flow',	'AE18-003',	'129',	'active',	'medium',	'H. Ye',	'',	'Improve feasibility process and Reduce development iterations by developing a simulation method to predict powder fill and compaction shear / density distributions',	NULL,	NULL,	NULL,	NULL),
(519,	'AE18-004 GF9 9T50 4th Gear Bearing Noise Issue',	'AE18-004',	'132',	'on hold',	'low',	'B. Ayre',	'B. Ayre',	'',	NULL,	NULL,	NULL,	NULL),
(520,	'AE19-10 Sona PF Bevel Gear',	'AE19-10 ',	'',	'active',	'low',	'H. Ye',	'',	'Develop ability to predict defects, optimize preform and tool design for Powder Forging',	NULL,	NULL,	NULL,	NULL),
(521,	'Gear Reverse Engineering',	'AE19-26',	'36',	'active',	'medium',	'A. Mo',	'B. Ayre',	'To be able to take an unknown gear and find the gear data, create a digital twin in Kisssoft, and benchmark against Stackpole design.\nProvide data to the \"Gear Benchmarking project\".',	NULL,	NULL,	NULL,	NULL),
(522,	'Magna eGBX sprocket feasibility: welding, carbonitride distortion study',	'AE19-27',	'',	'active',	'high',	'B. Ayre',	'N. Ahmed',	'of interest for multiple recent programs being quoted (sponda, 8hp hybrid pump, )',	NULL,	NULL,	NULL,	NULL),
(523,	'Thin Vane Slot Variable Displacement Pump Rotor',	'AE19-33',	'',	'closed',	'low',	'F. Ma',	'D. Qin, FPSC',	'',	NULL,	NULL,	NULL,	NULL),
(524,	'AE19-34 R&I 2-Stage Planetary Gearbox Support',	'AE19-34 ',	'',	'closed',	'medium',	'B. Ayre',	'',	'var\'s',	NULL,	NULL,	NULL,	NULL),
(525,	'Fatigue Design and Durability Prediction of PM Variable Displacement Pump Rotors',	'AE19-35',	'',	'active',	'high',	'F. Ma',	'R. Lawcock',	'1.  Define a ',	NULL,	NULL,	NULL,	NULL),
(526,	'PM Ring Gear Development for anticipated high volume \"medium performance\" market segment',	'AE-20-03',	'16',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'',	NULL,	NULL,	NULL,	NULL),
(527,	'AE-20-26 bloom mva',	'AE-20-26',	'',	'active',	'high',	'D. Gleba',	'B. Zaba',	'',	NULL,	NULL,	NULL,	NULL),
(528,	'RD-18-029 PolE Prototypes',	'RD-18-029',	'',	'active',	'high',	'J. Wilson',	'',	'var\'s',	NULL,	NULL,	NULL,	NULL),
(529,	'RD-18-20 SMC for e-motors',	'RD-18-20',	'',	'on hold',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(530,	'RD851300986 Bloom Energy Development',	'RD851300986 ',	'',	'active',	'medium',	'D. Gleba',	'',	'support PM-M [and Bloom] with MVA',	NULL,	NULL,	NULL,	NULL),
(531,	'RD85170002 FCA Gear Testing',	'RD85170002',	'',	'active',	'medium',	'B. Ayre',	'',	'demonstrate PM speed gear feasibility and develop durability benchmarks for bending, pitting',	NULL,	NULL,	NULL,	NULL),
(532,	'RD85170003 VCST Gear Testing',	'RD85170003',	'149',	'active',	'medium',	'B. Ayre',	'P. Schaeflein',	'develop bending, pitting strength benchmarks for PM gear mat\'ls, processes',	NULL,	NULL,	NULL,	NULL),
(533,	'RD8518003 Hyundai DCT Speed Gears',	'RD8518003 ',	'',	'active',	'medium',	'B. Ayre',	'P. Schaeflein',	'demonstrate PM speed gear feasibility and clutch ring weld feasibility, and develop durability benchmarks for bending, pitting',	NULL,	NULL,	NULL,	NULL),
(534,	'RFQ-HSBC 20200310 Schaeffler China Clutch Components',	'RFQ-HSBC',	'',	'active',	'high',	'C. Tao',	'P. Schaeflein',	'develop feasibility documentation for HSBC quote and production',	NULL,	NULL,	NULL,	NULL),
(535,	'RFQ-HSC 20200226 HTS-VW Carrier',	'RFQ-HSC ',	'',	'active',	'high',	'B. Ayre',	'S. Demir',	'-Assess machined design to see if it can be machined differently to be more representative and/or more likely to pass the test\n-Assess new VW design to convince HTS we have a solution despite any testing they might want to do\n-Assess fixture design and boundary constraints compared to application, to check for opportunities',	NULL,	NULL,	NULL,	NULL),
(536,	'RFQ10491 Gates Sprocket Pulley',	'RFQ10491',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(537,	'RFQ10502 Whirlpool Assembly',	'RFQ10502',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(538,	'RFQ10519 Shengrui 6-Speed AT',	'RFQ10519',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(539,	'RFQ10528 Magna E-Axle Reduction',	'RFQ10528',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(540,	'RFQ10534 - Magna ATC14 T-Case Sprocket',	'RFQ10534',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(541,	'RFQ10549 Geely-VCST GEP3 Balancer Gear',	'RFQ10549',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(542,	'RFQ10550 Magna P4 eaxle reduction steyr',	'RFQ10550',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(543,	'RFQ10565 HKMC-VCST Sponda R-Engine Balancer',	'RFQ10565',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(544,	'RFQ10589 Hofer ElringKlinger AG Carrier',	'RFQ10589',	'',	'active',	'medium',	'B. Ayre',	'S. Wang',	'-answer questions from pre-holiday break (involving thread yield, compressive yield from higher pre-tension)',	NULL,	NULL,	NULL,	NULL),
(545,	'RFQ10601 Magna Ford 8F35 OWC Inner & Outer race',	'RFQ10601',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(546,	'RFQ10604 Magna Ford 8F24 OWC Inner & Outer race',	'RFQ10604',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(547,	'RFQ10617 Magna-Audi P3a eDS48V',	'RFQ10617',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(548,	'RFQ10624 GM 10R80 Planetary Damper Concept',	'RFQ10624',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(549,	'RFQ10642 ZF 8HP 4th Gen Pump Gears',	'RFQ10642',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(550,	'RFQ10648 Magna Parking Lock Gear',	'RFQ10648',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(551,	'RFQ10652 Geely DHT Carriers',	'RFQ10652',	'',	'active',	'high',	'C. Tao',	'S. Wang',	'support BD, PM-S, HSBC with Front Carrier p\'type and validation; support BD with Rear Carrier design, proto, validation',	NULL,	NULL,	NULL,	NULL),
(552,	'RFQ10654 Sona-Scania PF Latch Cones',	'RFQ10654',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(553,	'RFQ10669 Tanhas GAC Carrier',	'RFQ10669',	'',	'on hold',	'medium',	'C. Tao',	'S. Wang',	'support BD, HSC with P&PD',	NULL,	NULL,	NULL,	NULL),
(554,	'RFQ10683 Magna-Audi P3a Helical Gear',	'RFQ10683',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(555,	'RFQ10691 Magna EV Sprockets',	'RFQ10691',	'',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'',	NULL,	NULL,	NULL,	NULL),
(556,	'RFQ10704 PMDA BW Cam',	'RFQ10704',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(557,	'RFQ10707 GM X76F-X77R Pump Gear',	'RFQ10707',	'',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'fill in!',	NULL,	NULL,	NULL,	NULL),
(558,	'RFQ10708 ZF-9HP Turbine Hub & Head Washer',	'RFQ10708',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(559,	'RFQ10724 ZF 8HP 4thGen Planet Pump Gear',	'RFQ10724',	'',	'on hold',	'?',	'B. Ayre',	'P. Schaeflein',	'support BD, target plant with P&PD',	NULL,	NULL,	NULL,	NULL),
(560,	'RFQ10727 Daimler Synchronizer Hub',	'RFQ10727',	'',	'on hold',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(561,	'RFQ10730 GM GenVI Vane Pump Rotor',	'RFQ10730',	'',	'active',	'high',	'F. Ma',	'T. Griffin',	'support PM-A and FPS with design for manufacturing',	NULL,	NULL,	NULL,	NULL),
(562,	'RFQ10733 GM-FPS GRx Diesel Pump Gear',	'RFQ10733',	'',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'fill in!',	NULL,	NULL,	NULL,	NULL),
(563,	'RFQ10735 ZF 8HP Gen4 PHEV Planet Gear Assembly',	'RFQ10735',	'',	'on hold',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(564,	'RFQ10739 Tanhas-Dongan 6AT Forged Carrier Conversion',	'RFQ10739',	'',	'on hold',	'',	'C. Tao',	'S. Wang',	'',	NULL,	NULL,	NULL,	NULL),
(565,	'RFQ10741 Magna-Toyota Hybrid Coupling',	'RFQ10741',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(566,	'RFQ10749 VCST-VW EA288 Split Gear',	'RFQ10749',	'',	'active',	'medium',	'N. Ahmed',	'P. Schaeflein',	'fill in!',	NULL,	NULL,	NULL,	NULL),
(567,	'RFQ10752 Hofer ElringKlinger AG Gears',	'RFQ10752',	'',	'active',	'high',	'N. Ahmed',	'P. Schaeflein',	'fill in!',	NULL,	NULL,	NULL,	NULL),
(568,	'RFQ10756 Geely DHT Pump and Drive Gears',	'RFQ10756',	'',	'closed',	'low',	'C. Tao',	'S. Wang',	'work with finishing partner DVS to quote best process for HSC/HSBC-> Geely supply',	NULL,	NULL,	NULL,	NULL),
(569,	'RFQ10765 Dana Dual Speed EDU AMG Carrier',	'RFQ10765',	'',	'closed',	'high',	'B. Ayre',	'P. Schaeflein',	'support development and validation of 2 options: Option 1=2 piece, option 2= sinter brazed',	NULL,	NULL,	NULL,	NULL),
(570,	'RFQ10770 FPS-Ford 10R80 Pump Gears',	'RFQ10770',	'',	'on hold',	'high',	'N. Ahmed',	'M. Dhiman',	'',	NULL,	NULL,	NULL,	NULL),
(571,	'RFQ10771 10R140 Helical Gears',	'RFQ10771, AE20-23',	'',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'',	NULL,	NULL,	NULL,	NULL),
(572,	'RFQ10775 GM RFI Variable Density Gear Bodies',	'RFQ10775',	'',	'active',	'high',	'B. Ayre',	'M. Dhiman',	'',	NULL,	NULL,	NULL,	NULL),
(573,	'RFQ10794 Borg Warner D7u Sprockets & Hub',	'RFQ10794',	'',	'on hold',	'high',	'B. Ayre',	'M. Dhiman',	'Support compact feasibility of hub (Charles) and 3 sprockets (Najeeb)',	NULL,	NULL,	NULL,	NULL),
(574,	'RFQ107XX BW-VCST e-axle reduction planetary 31Oct19',	'RFQ107XX',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(575,	'RFQ107XX VCST Ford Panther Pulley 27Nov19',	'RFQ107XX',	'',	'ignored',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(576,	'RFQ10XXX GWM-HYCET M-Pump Driven Gear',	'RFQ10XXX',	'',	'active',	'high',	'C. Tao',	'P. Schaeflein',	'work with finishing partners DVS and VCST to choose best partner and finishing process',	NULL,	NULL,	NULL,	NULL),
(577,	'RFQ10XXX Magna MFS Clutch Inner Race 25Jul19',	'RFQ10XXX',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(578,	'RFQ10839 Great Wall 9AT Carrier 1',	'RFQ10839',	'',	'active',	'high',	'C. Tao',	'S. Wang',	'Support conversion to PM design',	NULL,	NULL,	NULL,	NULL),
(579,	'SBU17-128 PMDM Core Rod Bolt',	'SBU17-128',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(580,	'SBU17-47-PMDS AB1V carrier testing validation',	'SBU17-47-',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(581,	'SBU17-74 PMDM Densification Roller FEA',	'SBU17-74 ',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(582,	'SBU17-83 PMDA 10R80 Rotor FEA',	'SBU17-83 ',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(583,	'SBU18-034 Line Densification Draw Bar Failure',	'SBU18-034',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(584,	'SBU18-053 T1XX Carrier Spline Durability',	'SBU18-053',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(585,	'SBU18-115  GFx 9T65 output carrier',	'SBU18-115',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(586,	'SBU18-116 269 Hydraulic Head',	'SBU18-116',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(587,	'SBU18-XXX Magna 5710 Carrier Spline Durability',	'SBU18-XXX',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(588,	'SBU19-025 PM-S AB1V Input Carrier Durability',	'SBU19-025',	'',	'active',	'medium',	'B. Ayre',	'Y. Praden',	'Redesign fixture to avoid spline interference, and make stress state more representative of transmission',	NULL,	NULL,	NULL,	NULL),
(589,	'SBU19-054 EBO3 Rotor FEA',	'SBU19-054',	'',	'closed',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL),
(590,	'HSBC Capacity Plan',	'CT projects',	'',	'active',	'high',	'C. Tao',	'M. Dhiman',	'develop accurate capacity plans in SI format that can be maintained, for quoting and planning purposes.',	NULL,	NULL,	NULL,	NULL),
(591,	'Pump Component Orientation',	'CT projects',	'',	'active',	'high',	'C. Tao',	'n/a',	'develop accurate capacity plans in SI format that can be maintained, for quoting and planning purposes.',	NULL,	NULL,	NULL,	NULL),
(592,	'Pump Component projects (P6, gen2, etc.)',	'CT projects',	'',	'active',	'high',	'C. Tao',	'B. Farr',	'support improvement of HSBC technical capabilities to adequately support FPS-C',	NULL,	NULL,	NULL,	NULL),
(593,	'PM-A Gear HT distortion study',	'AE20-22',	'',	'active',	'high',	'N. Ahmed',	'R. Leishman',	'Generate data to understand and quantify distortion impact from various heat treatment methods; primarily to support GM 10L Diesel RFQ10733',	NULL,	NULL,	NULL,	NULL),
(594,	'RFI for GM ring gear',	'RFQ10813',	'',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'support BD, GM to generate new ring gear business and technology',	NULL,	NULL,	NULL,	NULL),
(595,	'LS Dyna trials',	'AE#tbd, TR#___',	'',	'active',	'high',	'H. Ye',	'B. Ayre',	'simulate key manufacturing processes to reduce development time, iterations, cost',	NULL,	NULL,	NULL,	NULL),
(596,	'AVL-Preonlab trial',	'AE#tbd; TR#___',	'',	'active',	'high',	'H. Ye',	'R&I',	'',	NULL,	NULL,	NULL,	NULL),
(597,	'new Hofer-Renault-Nissan ring gears (smaller, L&R drive application)',	'RFQ#___________',	'',	'active',	'high',	'N. Ahmed',	'P. Schaeflein',	'fill in!',	NULL,	NULL,	NULL,	NULL),
(598,	'Simulation disk space reduction, maintenance',	'tbd',	'n/a',	'active',	'medium',	'H. Ye',	'IT',	'fill in!',	NULL,	NULL,	NULL,	NULL),
(599,	'gleason webinars',	'n/a',	'n/a',	'active',	'medium',	'N. Ahmed',	'B. Ayre',	'http://marc/AE/default.aspx?RootFolder=%2FAE%2FEngineering%20LIBRARY%2FHow%20to%20Gears%20Technology&FolderCTID=0x012000075B64AAE5AA2347B94EE979AC3E8608&View={F84BC0C3-FC28-45F1-B354-95A50CD6C10F}',	NULL,	NULL,	NULL,	NULL),
(600,	'Intern Training Plan',	'tbd',	'',	'closed',	'high',	'A. Mo, J. Wilson',	'B. Ayre',	'Intern Training Plan; onboarding 2020',	NULL,	NULL,	NULL,	NULL),
(601,	'',	'',	'',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'PM Gear for FPS-C?  Awaiting feedback/intelligence',	NULL,	NULL,	NULL,	NULL),
(602,	'pdf fixture drawing cleanup',	'',	'',	'active',	'low',	'A. Mo, J. Wilson',	'B. Ayre',	'Make approved electronic fixture drawings organized and available to the tech services team',	NULL,	NULL,	NULL,	NULL),
(603,	'sona - ZF edapt',	'',	'',	'on hold?',	'medium',	'B. Ayre',	'P. Schaeflein',	'',	NULL,	NULL,	NULL,	NULL),
(604,	'feasibility compaction and HT distortion trial plan for multiple hubbed gears, sponda, ZF8HPgen4, 10L?',	'AE PRJ #?',	'',	'active',	'medium',	'B. Ayre',	'P. Schaeflein',	'see ae19-27; but this doesn\'t cover sponda hub and interrupted wall distortion (can we green machine a slot in hubs, then compare sinter & HT distortion)?  Use cutoff wheel?',	NULL,	NULL,	NULL,	NULL),
(605,	'Digital Twin activities; put in separate team meetings?',	'y',	'',	'active',	'medium',	'H. Ye',	'',	'',	NULL,	NULL,	NULL,	NULL),
(606,	'Departmental hardware optimization',	'',	'',	'active',	'medium',	'H. Ye',	'',	'Identify opportunities to improve departmental productivity through incremental hardware improvements',	NULL,	NULL,	NULL,	NULL),
(607,	'Departmental software optimization',	'',	'',	'active',	'medium',	'H. Ye',	'',	'Identify opportunities to improve departmental productivity through incremental software improvements',	NULL,	NULL,	NULL,	NULL),
(608,	'windchill login to old',	'',	'',	'active',	'high',	'B. Ayre',	'',	'need to be able to access Frank\'s CAD data when he is unavailable',	NULL,	NULL,	NULL,	NULL),
(609,	'upgrade to new windchill',	'',	'',	'active',	'high',	'B. Ayre',	'R. Leishman',	'Organize design data, work towards revision control, allow Frank to upgrade to Windows 10',	NULL,	NULL,	NULL,	NULL),
(610,	'VCST-Volvo-Geely ring gear',	'',	'',	'on hold',	'high',	'N. Ahmed',	'P. Schaeflein',	'',	NULL,	NULL,	NULL,	NULL),
(611,	'8f24 transfer to HSBC',	'',	'',	'active',	'high',	'C. Tao',	'J. Hartmann',	'8f24 transfer to HSBC',	NULL,	NULL,	NULL,	NULL),
(612,	'new ea-288 VW volume non-split idler, gear system?',	'',	'',	'active',	'medium',	'B. Ayre',	'P. Schaeflein',	'',	NULL,	NULL,	NULL,	NULL),
(613,	'RFQ10766 Punch Powertrain eDCT Carrier Assembly',	'RFQ10766',	'',	'active',	'high',	'F. Ma',	'P. Schaeflein',	'Support BD via PMDS redesign simulation and optimization',	NULL,	NULL,	NULL,	NULL),
(614,	'add gear pitting benchmarking, VCST and insource / outsource',	'',	'',	'active',	'high',	'N. Ahmed',	'M. Dhiman',	'',	NULL,	NULL,	NULL,	NULL),
(615,	'R&I 2SPGS carrier protos',	'',	'',	'active',	'high',	'B. Ayre',	'Mayu',	'',	NULL,	NULL,	NULL,	NULL),
(616,	'tech radar updates',	'',	'',	'active',	'medium',	'H. Ye',	'Mayu',	'',	NULL,	NULL,	NULL,	NULL),
(617,	'SWI folder organization',	'',	'',	'active',	'high',	'A. Mo',	'B. Ayre',	'make our swi\'s organized, and available to all of corp tech-services (BD and Yannic\'s group), to be ready for upload to an electronic filing system (EtQ for example)',	NULL,	NULL,	NULL,	NULL)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `number` = VALUES(`number`), `tech_radar_num` = VALUES(`tech_radar_num`), `active` = VALUES(`active`), `priority` = VALUES(`priority`), `ae_lead` = VALUES(`ae_lead`), `bd_lead_si_customer` = VALUES(`bd_lead_si_customer`), `ae_objective` = VALUES(`ae_objective`), `sort_order` = VALUES(`sort_order`), `active_status` = VALUES(`active_status`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `roles` (`id`, `name`, `description`, `active_status`, `sort`, `created_at`, `updated_at`) VALUES
(1,	'lr_minimal',	'Can\'t do much',	NULL,	NULL,	'2020-09-16 16:46:33',	'2020-09-16 16:46:33'),
(2,	'lr_future1',	'',	NULL,	NULL,	'2020-09-16 16:46:33',	'2020-09-16 16:46:33'),
(3,	'lr_readonly',	'',	NULL,	NULL,	'2020-09-16 16:46:33',	'2020-09-16 16:46:33'),
(4,	'lr_future2',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(5,	'lr_create',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(6,	'lr_future3',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(7,	'lr_regular',	'Can edit data, readonly lookup tables',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(8,	'lr_future4',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(9,	'lr_supervisor',	'Can edit lookup tables',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(10,	'lr_future5',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(11,	'lr_delete',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(12,	'lr_future6',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(13,	'lr_vip',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(14,	'lr_future7',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(15,	'lr_special1',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(16,	'lr_seller',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(17,	'lr_future8',	'',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34'),
(18,	'lr_admin',	'Can perform any CRUD operation on any resource',	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `description` = VALUES(`description`), `active_status` = VALUES(`active_status`), `sort` = VALUES(`sort`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `schema_migrations`;
CREATE TABLE `schema_migrations` (
  `version` varchar(255) NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `schema_migrations` (`version`) VALUES
('20150503194444'),
('20150503194452'),
('20150503194504'),
('20150503194508'),
('30170101010105'),
('30170101010106'),
('30170101010107'),
('30170101010108'),
('50161230223301'),
('50161230223307'),
('50161230223308'),
('50161230223309'),
('50161230223310'),
('50161230223311'),
('50161230223312'),
('50161230223313'),
('50161230223315')
ON DUPLICATE KEY UPDATE `version` = VALUES(`version`);

DROP TABLE IF EXISTS `time_logs`;
CREATE TABLE `time_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `log_date` date DEFAULT NULL,
  `log_hours` float DEFAULT NULL,
  `detail` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_time_logs_on_project_id` (`project_id`),
  KEY `index_time_logs_on_user_id` (`user_id`),
  KEY `log_date` (`log_date`),
  KEY `created_at` (`created_at`),
  CONSTRAINT `fk_rails_1124415415` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `fk_rails_4a7459a587` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `time_logs` (`id`, `project_id`, `log_date`, `log_hours`, `detail`, `user_id`, `created_at`, `updated_at`) VALUES
(3,	513,	'2020-09-20',	2.3,	'',	1,	'2020-09-20 20:07:19',	'2020-09-20 20:07:19'),
(4,	527,	'2020-09-20',	4,	'',	1,	'2020-09-21 01:54:43',	'2020-09-21 01:54:43')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `project_id` = VALUES(`project_id`), `log_date` = VALUES(`log_date`), `log_hours` = VALUES(`log_hours`), `detail` = VALUES(`detail`), `user_id` = VALUES(`user_id`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `encrypted_password` varchar(255) NOT NULL DEFAULT '',
  `reset_password_token` varchar(255) DEFAULT NULL,
  `reset_password_sent_at` datetime DEFAULT NULL,
  `remember_created_at` datetime DEFAULT NULL,
  `sign_in_count` int(11) NOT NULL DEFAULT '0',
  `current_sign_in_at` datetime DEFAULT NULL,
  `last_sign_in_at` datetime DEFAULT NULL,
  `current_sign_in_ip` varchar(255) DEFAULT NULL,
  `last_sign_in_ip` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT '1',
  `auditor_inMSaccess_reporter` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_users_on_email` (`email`),
  UNIQUE KEY `index_users_on_reset_password_token` (`reset_password_token`),
  UNIQUE KEY `index_users_on_auditor_inMSaccess_reporter` (`auditor_inMSaccess_reporter`),
  KEY `index_users_on_role_id` (`role_id`),
  CONSTRAINT `fk_rails_642f17018b` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `email`, `encrypted_password`, `reset_password_token`, `reset_password_sent_at`, `remember_created_at`, `sign_in_count`, `current_sign_in_at`, `last_sign_in_at`, `current_sign_in_ip`, `last_sign_in_ip`, `created_at`, `updated_at`, `name`, `role_id`, `auditor_inMSaccess_reporter`) VALUES
(1,	'dgleba',	'',	NULL,	NULL,	NULL,	9,	'2020-09-21 14:09:45',	'2020-09-21 01:16:43',	'172.27.0.7',	'10.5.253.52',	'2020-09-16 16:44:28',	'2020-09-21 14:09:45',	'David Gleba',	18,	NULL),
(2,	'a@e',	'',	NULL,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34',	'admin',	18,	NULL),
(3,	'a',	'',	NULL,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	'2020-09-16 16:46:34',	'2020-09-16 16:46:34',	'admin',	18,	NULL),
(4,	'bayre',	'',	NULL,	NULL,	NULL,	0,	NULL,	NULL,	'',	'',	'2020-09-18 15:31:16',	'2020-09-18 15:31:16',	'Brendan',	18,	NULL)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `email` = VALUES(`email`), `encrypted_password` = VALUES(`encrypted_password`), `reset_password_token` = VALUES(`reset_password_token`), `reset_password_sent_at` = VALUES(`reset_password_sent_at`), `remember_created_at` = VALUES(`remember_created_at`), `sign_in_count` = VALUES(`sign_in_count`), `current_sign_in_at` = VALUES(`current_sign_in_at`), `last_sign_in_at` = VALUES(`last_sign_in_at`), `current_sign_in_ip` = VALUES(`current_sign_in_ip`), `last_sign_in_ip` = VALUES(`last_sign_in_ip`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`), `name` = VALUES(`name`), `role_id` = VALUES(`role_id`), `auditor_inMSaccess_reporter` = VALUES(`auditor_inMSaccess_reporter`);

DROP TABLE IF EXISTS `versions`;
CREATE TABLE `versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_type` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `event` varchar(255) NOT NULL,
  `whodunnit` varchar(255) DEFAULT NULL,
  `object` longtext,
  `created_at` datetime DEFAULT NULL,
  `object_changes` longtext,
  `transaction_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_versions_on_item_type_and_item_id` (`item_type`,`item_id`),
  KEY `index_versions_on_transaction_id` (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `versions` (`id`, `item_type`, `item_id`, `event`, `whodunnit`, `object`, `created_at`, `object_changes`, `transaction_id`) VALUES
(1,	'User',	1,	'create',	NULL,	NULL,	'2020-09-16 16:44:28',	'---\nid:\n- \n- 1\nemail:\n- \'\'\n- dgleba\ncreated_at:\n- \n- 2020-09-16 16:44:28.000000000 +00:00\nupdated_at:\n- \n- 2020-09-16 16:44:28.000000000 +00:00\nrole_id:\n- 1\n- \n',	1),
(2,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 0\ncurrent_sign_in_at: \nlast_sign_in_at: \ncurrent_sign_in_ip: \nlast_sign_in_ip: \ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-16 16:44:28.000000000 +00:00\nname: \nrole_id: \nauditor_inMSaccess_reporter: \n',	'2020-09-16 16:44:28',	'---\nsign_in_count:\n- 0\n- 1\ncurrent_sign_in_at:\n- \n- 2020-09-16 16:44:28.000000000 +00:00\nlast_sign_in_at:\n- \n- 2020-09-16 16:44:28.000000000 +00:00\ncurrent_sign_in_ip:\n- \n- 10.5.253.10\nlast_sign_in_ip:\n- \n- 10.5.253.10\n',	2),
(3,	'User',	2,	'create',	NULL,	NULL,	'2020-09-16 16:46:34',	'---\nid:\n- \n- 2\nemail:\n- \'\'\n- a@e\ncreated_at:\n- \n- 2020-09-16 16:46:34.000000000 +00:00\nupdated_at:\n- \n- 2020-09-16 16:46:34.000000000 +00:00\nname:\n- \n- admin\nrole_id:\n- 1\n- 18\n',	3),
(4,	'User',	3,	'create',	NULL,	NULL,	'2020-09-16 16:46:34',	'---\nid:\n- \n- 3\nemail:\n- \'\'\n- a\ncreated_at:\n- \n- 2020-09-16 16:46:34.000000000 +00:00\nupdated_at:\n- \n- 2020-09-16 16:46:34.000000000 +00:00\nname:\n- \n- admin\nrole_id:\n- 1\n- 18\n',	4),
(5,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 1\ncurrent_sign_in_at: 2020-09-16 16:44:28.000000000 +00:00\nlast_sign_in_at: 2020-09-16 16:44:28.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.10\nlast_sign_in_ip: 10.5.253.10\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-16 16:44:28.000000000 +00:00\nname: \nrole_id: \nauditor_inMSaccess_reporter: \n',	'2020-09-16 16:47:21',	'---\ncurrent_sign_in_at:\n- 2020-09-16 16:44:28.000000000 +00:00\n- 2020-09-16 16:47:21.000000000 +00:00\nsign_in_count:\n- 1\n- 2\nrole_id:\n- \n- 1\nupdated_at:\n- 2020-09-16 16:44:28.000000000 +00:00\n- 2020-09-16 16:47:21.000000000 +00:00\n',	5),
(6,	'User',	1,	'update',	'1',	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 2\ncurrent_sign_in_at: 2020-09-16 16:47:21.000000000 +00:00\nlast_sign_in_at: 2020-09-16 16:44:28.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.10\nlast_sign_in_ip: 10.5.253.10\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-16 16:47:21.000000000 +00:00\nname: \nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-16 20:07:47',	'---\nname:\n- \n- dgleba\ncurrent_sign_in_at:\n- 2020-09-16 16:47:21.000000000 +00:00\n- 2020-09-16 16:47:00.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-16 16:44:28.000000000 +00:00\n- 2020-09-16 16:44:00.000000000 +00:00\nupdated_at:\n- 2020-09-16 16:47:21.000000000 +00:00\n- 2020-09-16 20:07:47.000000000 +00:00\n',	6),
(7,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 2\ncurrent_sign_in_at: 2020-09-16 16:47:00.000000000 +00:00\nlast_sign_in_at: 2020-09-16 16:44:00.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.10\nlast_sign_in_ip: 10.5.253.10\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-16 20:07:47.000000000 +00:00\nname: dgleba\nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-17 16:14:16',	'---\ncurrent_sign_in_at:\n- 2020-09-16 16:47:00.000000000 +00:00\n- 2020-09-17 16:14:16.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-16 16:44:00.000000000 +00:00\n- 2020-09-16 16:47:00.000000000 +00:00\ncurrent_sign_in_ip:\n- 10.5.253.10\n- 10.5.253.28\nsign_in_count:\n- 2\n- 3\nupdated_at:\n- 2020-09-16 20:07:47.000000000 +00:00\n- 2020-09-17 16:14:16.000000000 +00:00\n',	7),
(8,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 3\ncurrent_sign_in_at: 2020-09-17 16:14:16.000000000 +00:00\nlast_sign_in_at: 2020-09-16 16:47:00.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.28\nlast_sign_in_ip: 10.5.253.10\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-17 16:14:16.000000000 +00:00\nname: dgleba\nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-18 02:22:38',	'---\ncurrent_sign_in_at:\n- 2020-09-17 16:14:16.000000000 +00:00\n- 2020-09-18 02:22:38.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-16 16:47:00.000000000 +00:00\n- 2020-09-17 16:14:16.000000000 +00:00\ncurrent_sign_in_ip:\n- 10.5.253.28\n- 10.5.253.26\nlast_sign_in_ip:\n- 10.5.253.10\n- 10.5.253.28\nsign_in_count:\n- 3\n- 4\nupdated_at:\n- 2020-09-17 16:14:16.000000000 +00:00\n- 2020-09-18 02:22:38.000000000 +00:00\n',	8),
(9,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 4\ncurrent_sign_in_at: 2020-09-18 02:22:38.000000000 +00:00\nlast_sign_in_at: 2020-09-17 16:14:16.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.26\nlast_sign_in_ip: 10.5.253.28\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-18 02:22:38.000000000 +00:00\nname: dgleba\nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-18 15:08:44',	'---\ncurrent_sign_in_at:\n- 2020-09-18 02:22:38.000000000 +00:00\n- 2020-09-18 15:08:44.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-17 16:14:16.000000000 +00:00\n- 2020-09-18 02:22:38.000000000 +00:00\ncurrent_sign_in_ip:\n- 10.5.253.26\n- 10.5.253.24\nlast_sign_in_ip:\n- 10.5.253.28\n- 10.5.253.26\nsign_in_count:\n- 4\n- 5\nupdated_at:\n- 2020-09-18 02:22:38.000000000 +00:00\n- 2020-09-18 15:08:44.000000000 +00:00\n',	9),
(10,	'User',	4,	'create',	'1',	NULL,	'2020-09-18 15:31:16',	'---\nid:\n- \n- 4\nemail:\n- \'\'\n- bayre\ncurrent_sign_in_ip:\n- \n- \'\'\nlast_sign_in_ip:\n- \n- \'\'\ncreated_at:\n- \n- 2020-09-18 15:31:16.000000000 +00:00\nupdated_at:\n- \n- 2020-09-18 15:31:16.000000000 +00:00\nname:\n- \n- \'\'\nrole_id:\n- 1\n- 18\n',	10),
(11,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 5\ncurrent_sign_in_at: 2020-09-18 15:08:44.000000000 +00:00\nlast_sign_in_at: 2020-09-18 02:22:38.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.24\nlast_sign_in_ip: 10.5.253.26\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-18 15:08:44.000000000 +00:00\nname: dgleba\nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-19 16:17:40',	'---\ncurrent_sign_in_at:\n- 2020-09-18 15:08:44.000000000 +00:00\n- 2020-09-19 16:17:40.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-18 02:22:38.000000000 +00:00\n- 2020-09-18 15:08:44.000000000 +00:00\ncurrent_sign_in_ip:\n- 10.5.253.24\n- 10.5.253.46\nlast_sign_in_ip:\n- 10.5.253.26\n- 10.5.253.24\nsign_in_count:\n- 5\n- 6\nupdated_at:\n- 2020-09-18 15:08:44.000000000 +00:00\n- 2020-09-19 16:17:40.000000000 +00:00\n',	11),
(12,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 6\ncurrent_sign_in_at: 2020-09-19 16:17:40.000000000 +00:00\nlast_sign_in_at: 2020-09-18 15:08:44.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.46\nlast_sign_in_ip: 10.5.253.24\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-19 16:17:40.000000000 +00:00\nname: dgleba\nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-20 19:00:22',	'---\ncurrent_sign_in_at:\n- 2020-09-19 16:17:40.000000000 +00:00\n- 2020-09-20 19:00:22.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-18 15:08:44.000000000 +00:00\n- 2020-09-19 16:17:40.000000000 +00:00\ncurrent_sign_in_ip:\n- 10.5.253.46\n- 10.5.253.49\nlast_sign_in_ip:\n- 10.5.253.24\n- 10.5.253.46\nsign_in_count:\n- 6\n- 7\nupdated_at:\n- 2020-09-19 16:17:40.000000000 +00:00\n- 2020-09-20 19:00:22.000000000 +00:00\n',	12),
(13,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 7\ncurrent_sign_in_at: 2020-09-20 19:00:22.000000000 +00:00\nlast_sign_in_at: 2020-09-19 16:17:40.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.49\nlast_sign_in_ip: 10.5.253.46\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-20 19:00:22.000000000 +00:00\nname: David Gleba\nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-21 01:16:43',	'---\ncurrent_sign_in_at:\n- 2020-09-20 19:00:22.000000000 +00:00\n- 2020-09-21 01:16:43.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-19 16:17:40.000000000 +00:00\n- 2020-09-20 19:00:22.000000000 +00:00\ncurrent_sign_in_ip:\n- 10.5.253.49\n- 10.5.253.52\nlast_sign_in_ip:\n- 10.5.253.46\n- 10.5.253.49\nsign_in_count:\n- 7\n- 8\nupdated_at:\n- 2020-09-20 19:00:22.000000000 +00:00\n- 2020-09-21 01:16:43.000000000 +00:00\n',	13),
(14,	'User',	1,	'update',	NULL,	'---\nid: 1\nemail: dgleba\nencrypted_password: \'\'\nreset_password_token: \nreset_password_sent_at: \nremember_created_at: \nsign_in_count: 8\ncurrent_sign_in_at: 2020-09-21 01:16:43.000000000 +00:00\nlast_sign_in_at: 2020-09-20 19:00:22.000000000 +00:00\ncurrent_sign_in_ip: 10.5.253.52\nlast_sign_in_ip: 10.5.253.49\ncreated_at: 2020-09-16 16:44:28.000000000 +00:00\nupdated_at: 2020-09-21 01:16:43.000000000 +00:00\nname: David Gleba\nrole_id: 18\nauditor_inMSaccess_reporter: \n',	'2020-09-21 14:09:45',	'---\ncurrent_sign_in_at:\n- 2020-09-21 01:16:43.000000000 +00:00\n- 2020-09-21 14:09:45.000000000 +00:00\nlast_sign_in_at:\n- 2020-09-20 19:00:22.000000000 +00:00\n- 2020-09-21 01:16:43.000000000 +00:00\ncurrent_sign_in_ip:\n- 10.5.253.52\n- 172.27.0.7\nlast_sign_in_ip:\n- 10.5.253.49\n- 10.5.253.52\nsign_in_count:\n- 8\n- 9\nupdated_at:\n- 2020-09-21 01:16:43.000000000 +00:00\n- 2020-09-21 14:09:45.000000000 +00:00\n',	14)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `item_type` = VALUES(`item_type`), `item_id` = VALUES(`item_id`), `event` = VALUES(`event`), `whodunnit` = VALUES(`whodunnit`), `object` = VALUES(`object`), `created_at` = VALUES(`created_at`), `object_changes` = VALUES(`object_changes`), `transaction_id` = VALUES(`transaction_id`);

DROP TABLE IF EXISTS `version_associations`;
CREATE TABLE `version_associations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version_id` int(11) DEFAULT NULL,
  `foreign_key_name` varchar(255) NOT NULL,
  `foreign_key_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_version_associations_on_version_id` (`version_id`),
  KEY `index_version_associations_on_foreign_key` (`foreign_key_name`,`foreign_key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP VIEW IF EXISTS `vw_projectfavlookup`;
CREATE TABLE `vw_projectfavlookup` (`id` int(11), `number` varchar(255), `name` varchar(255), `active` varchar(255), `fave_num` int(11), `user_id` int(11));


DROP VIEW IF EXISTS `vw_timelog`;
CREATE TABLE `vw_timelog` (`log_date` date, `log_hours` float, `project_name` varchar(255), `project_number` varchar(255), `tech_radar_num` varchar(255), `project_active` varchar(255), `ae_lead` varchar(255), `bd_lead_si_customer` varchar(255), `email` varchar(255));


DROP TABLE IF EXISTS `vw_projectfavlookup`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_projectfavlookup` AS select `p`.`id` AS `id`,`p`.`number` AS `number`,`p`.`name` AS `name`,`p`.`active` AS `active`,`f`.`fave_num` AS `fave_num`,`f`.`user_id` AS `user_id` from (`projects` `p` left join `favorite_projects` `f` on((`f`.`project_id` = `p`.`id`))) where (`p`.`active` = 'active') order by `f`.`fave_num` desc,`p`.`name`;

DROP TABLE IF EXISTS `vw_timelog`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_timelog` AS select `t`.`log_date` AS `log_date`,`t`.`log_hours` AS `log_hours`,`p`.`name` AS `project_name`,`p`.`number` AS `project_number`,`p`.`tech_radar_num` AS `tech_radar_num`,`p`.`active` AS `project_active`,`p`.`ae_lead` AS `ae_lead`,`p`.`bd_lead_si_customer` AS `bd_lead_si_customer`,`u`.`email` AS `email` from ((`time_logs` `t` left join `projects` `p` on((`t`.`project_id` = `p`.`id`))) left join `users` `u` on((`t`.`user_id` = `u`.`id`)));

-- 2020-09-21 14:59:46
