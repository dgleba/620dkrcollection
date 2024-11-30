-- --------------------------------------------------------

--
-- Table structure for table `TABLE 2`
--

CREATE TABLE IF NOT EXISTS `projlistimport` (
  `number` varchar(217) DEFAULT NULL,
  `tech_radar_num` varchar(23) DEFAULT NULL,
  `folder` varchar(1102) DEFAULT NULL,
  `active_status` varchar(48) DEFAULT NULL,
  `priority` varchar(46) DEFAULT NULL,
  `ae_lead` varchar(116) DEFAULT NULL,
  `bd_lead_si_customer` varchar(125) DEFAULT NULL,
  `ae_objective` varchar(2555) DEFAULT NULL,

    `id` int(11) NOT NULL AUTO_INCREMENT,
  `fave_num` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE 2`
--

INSERT INTO `projlistimport` (`number`, `tech_radar_num`, `folder`, `active_status`, `priority`, `ae_lead`, `bd_lead_si_customer`, `ae_objective`) VALUES
('AE17-001', '', 'AE17-001 PMDA 8F Pump Components', 'closed', '', '', '', ''),
('AE17-003', '160', 'AE17-003 NVH Reduction', 'active', 'high', 'H. Ye', 'B. Ayre', 'Develop simulation capability to predict influence of material and geometry on component (gear) resonant damping and impulse transmission behaviour'),
('AE17-005', '151', 'AE17-005 10R Crowning Via Forming', 'active', 'high', 'J. Wilson', 'P. Kauffmann, R. Leishman', 'Develop new gear crowning process which may be more cost effective than crowning via gear grinding for 10R and/or future applications'),
('AE17-006', '38', 'AE17-006 Gear Misalignment Study', 'active', 'high', 'J. Wilson', '', 'Develop tools to predict gear shaft deflection and impact on transmission error using multiple simulation tools (ansys, kisssoft, etc.)'),
('AE17-007', '', 'AE17-007 Helical Compaction Development', 'active', 'high', 'F. Ma', '', ''),
('AE18-002', '', 'AE18-002 MTS torque cell calibration adaptor plates', 'closed', '', '', '', ''),
('AE18-003', '129', 'AE18-003 Compaction stage diagram, Powder Flow', 'active', 'medium', 'H. Ye', '', 'Improve feasibility process and Reduce development iterations by developing a simulation method to predict powder fill and compaction shear / density distributions'),
('AE18-004', '132', 'AE18-004 GF9 9T50 4th Gear Bearing Noise Issue', 'on hold', 'low', 'B. Ayre', 'B. Ayre', ''),
('AE19-10 ', '', 'AE19-10 Sona PF Bevel Gear', 'active', 'low', 'H. Ye', '', 'Develop ability to predict defects, optimize preform and tool design for Powder Forging'),
('AE19-26', '36', 'Gear Reverse Engineering', 'active', 'medium', 'A. Mo', 'B. Ayre', 'To be able to take an unknown gear and find the gear data, create a digital twin in Kisssoft, and benchmark against Stackpole design.\nProvide data to the "Gear Benchmarking project".'),
('AE19-27', '', 'Magna eGBX sprocket feasibility: welding, carbonitride distortion study', 'active', 'high', 'B. Ayre', 'N. Ahmed', 'of interest for multiple recent programs being quoted (sponda, 8hp hybrid pump, )'),
('AE19-33', '', 'Thin Vane Slot Variable Displacement Pump Rotor', 'closed', 'low', 'F. Ma', 'D. Qin, FPSC', ''),
('AE19-34 ', '', 'AE19-34 R&I 2-Stage Planetary Gearbox Support', 'closed', 'medium', 'B. Ayre', '', 'var''s'),
('AE19-35', '', 'Fatigue Design and Durability Prediction of PM Variable Displacement Pump Rotors', 'active', 'high', 'F. Ma', 'R. Lawcock', '1.  Define a '),
('AE-20-03', '16', 'PM Ring Gear Development for anticipated high volume "medium performance" market segment', 'active', 'high', 'N. Ahmed', 'M. Dhiman', ''),
('AE-20-26', '', 'AE-20-26 bloom mva', 'active', 'high', 'D. Gleba', 'B. Zaba', ''),
('RD-18-029', '', 'RD-18-029 PolE Prototypes', 'active', 'high', 'J. Wilson', '', 'var''s'),
('RD-18-20', '', 'RD-18-20 SMC for e-motors', 'on hold', '', '', '', ''),
('RD851300986 ', '', 'RD851300986 Bloom Energy Development', 'active', 'medium', 'D. Gleba', '', 'support PM-M [and Bloom] with MVA'),
('RD85170002', '', 'RD85170002 FCA Gear Testing', 'active', 'medium', 'B. Ayre', '', 'demonstrate PM speed gear feasibility and develop durability benchmarks for bending, pitting'),
('RD85170003', '149', 'RD85170003 VCST Gear Testing', 'active', 'medium', 'B. Ayre', 'P. Schaeflein', 'develop bending, pitting strength benchmarks for PM gear mat''ls, processes'),
('RD8518003 ', '', 'RD8518003 Hyundai DCT Speed Gears', 'active', 'medium', 'B. Ayre', 'P. Schaeflein', 'demonstrate PM speed gear feasibility and clutch ring weld feasibility, and develop durability benchmarks for bending, pitting'),
('RFQ-HSBC', '', 'RFQ-HSBC 20200310 Schaeffler China Clutch Components', 'active', 'high', 'C. Tao', 'P. Schaeflein', 'develop feasibility documentation for HSBC quote and production'),
('RFQ-HSC ', '', 'RFQ-HSC 20200226 HTS-VW Carrier', 'active', 'high', 'B. Ayre', 'S. Demir', '-Assess machined design to see if it can be machined differently to be more representative and/or more likely to pass the test\n-Assess new VW design to convince HTS we have a solution despite any testing they might want to do\n-Assess fixture design and boundary constraints compared to application, to check for opportunities'),
('RFQ10491', '', 'RFQ10491 Gates Sprocket Pulley', 'closed', '', '', '', ''),
('RFQ10502', '', 'RFQ10502 Whirlpool Assembly', 'closed', '', '', '', ''),
('RFQ10519', '', 'RFQ10519 Shengrui 6-Speed AT', 'closed', '', '', '', ''),
('RFQ10528', '', 'RFQ10528 Magna E-Axle Reduction', 'closed', '', '', '', ''),
('RFQ10534', '', 'RFQ10534 - Magna ATC14 T-Case Sprocket', 'closed', '', '', '', ''),
('RFQ10549', '', 'RFQ10549 Geely-VCST GEP3 Balancer Gear', 'closed', '', '', '', ''),
('RFQ10550', '', 'RFQ10550 Magna P4 eaxle reduction steyr', 'closed', '', '', '', ''),
('RFQ10565', '', 'RFQ10565 HKMC-VCST Sponda R-Engine Balancer', 'closed', '', '', '', ''),
('RFQ10589', '', 'RFQ10589 Hofer ElringKlinger AG Carrier', 'active', 'medium', 'B. Ayre', 'S. Wang', '-answer questions from pre-holiday break (involving thread yield, compressive yield from higher pre-tension)'),
('RFQ10601', '', 'RFQ10601 Magna Ford 8F35 OWC Inner & Outer race', 'closed', '', '', '', ''),
('RFQ10604', '', 'RFQ10604 Magna Ford 8F24 OWC Inner & Outer race', 'closed', '', '', '', ''),
('RFQ10617', '', 'RFQ10617 Magna-Audi P3a eDS48V', 'closed', '', '', '', ''),
('RFQ10624', '', 'RFQ10624 GM 10R80 Planetary Damper Concept', 'closed', '', '', '', ''),
('RFQ10642', '', 'RFQ10642 ZF 8HP 4th Gen Pump Gears', 'closed', '', '', '', ''),
('RFQ10648', '', 'RFQ10648 Magna Parking Lock Gear', 'closed', '', '', '', ''),
('RFQ10652', '', 'RFQ10652 Geely DHT Carriers', 'active', 'high', 'C. Tao', 'S. Wang', 'support BD, PM-S, HSBC with Front Carrier p''type and validation; support BD with Rear Carrier design, proto, validation'),
('RFQ10654', '', 'RFQ10654 Sona-Scania PF Latch Cones', 'closed', '', '', '', ''),
('RFQ10669', '', 'RFQ10669 Tanhas GAC Carrier', 'on hold', 'medium', 'C. Tao', 'S. Wang', 'support BD, HSC with P&PD'),
('RFQ10683', '', 'RFQ10683 Magna-Audi P3a Helical Gear', 'closed', '', '', '', ''),
('RFQ10691', '', 'RFQ10691 Magna EV Sprockets', 'active', 'high', 'N. Ahmed', 'M. Dhiman', ''),
('RFQ10704', '', 'RFQ10704 PMDA BW Cam', 'closed', '', '', '', ''),
('RFQ10707', '', 'RFQ10707 GM X76F-X77R Pump Gear', 'active', 'high', 'N. Ahmed', 'M. Dhiman', 'fill in!'),
('RFQ10708', '', 'RFQ10708 ZF-9HP Turbine Hub & Head Washer', 'closed', '', '', '', ''),
('RFQ10724', '', 'RFQ10724 ZF 8HP 4thGen Planet Pump Gear', 'on hold', '?', 'B. Ayre', 'P. Schaeflein', 'support BD, target plant with P&PD'),
('RFQ10727', '', 'RFQ10727 Daimler Synchronizer Hub', 'on hold', '', '', '', ''),
('RFQ10730', '', 'RFQ10730 GM GenVI Vane Pump Rotor', 'active', 'high', 'F. Ma', 'T. Griffin', 'support PM-A and FPS with design for manufacturing'),
('RFQ10733', '', 'RFQ10733 GM-FPS GRx Diesel Pump Gear', 'active', 'high', 'N. Ahmed', 'M. Dhiman', 'fill in!'),
('RFQ10735', '', 'RFQ10735 ZF 8HP Gen4 PHEV Planet Gear Assembly', 'on hold', '', '', '', ''),
('RFQ10739', '', 'RFQ10739 Tanhas-Dongan 6AT Forged Carrier Conversion', 'on hold', '', 'C. Tao', 'S. Wang', ''),
('RFQ10741', '', 'RFQ10741 Magna-Toyota Hybrid Coupling', 'closed', '', '', '', ''),
('RFQ10749', '', 'RFQ10749 VCST-VW EA288 Split Gear', 'active', 'medium', 'N. Ahmed', 'P. Schaeflein', 'fill in!'),
('RFQ10752', '', 'RFQ10752 Hofer ElringKlinger AG Gears', 'active', 'high', 'N. Ahmed', 'P. Schaeflein', 'fill in!'),
('RFQ10756', '', 'RFQ10756 Geely DHT Pump and Drive Gears', 'closed', 'low', 'C. Tao', 'S. Wang', 'work with finishing partner DVS to quote best process for HSC/HSBC-> Geely supply'),
('RFQ10765', '', 'RFQ10765 Dana Dual Speed EDU AMG Carrier', 'closed', 'high', 'B. Ayre', 'P. Schaeflein', 'support development and validation of 2 options: Option 1=2 piece, option 2= sinter brazed'),
('RFQ10770', '', 'RFQ10770 FPS-Ford 10R80 Pump Gears', 'on hold', 'high', 'N. Ahmed', 'M. Dhiman', ''),
('RFQ10771, AE20-23', '', 'RFQ10771 10R140 Helical Gears', 'active', 'high', 'N. Ahmed', 'M. Dhiman', ''),
('RFQ10775', '', 'RFQ10775 GM RFI Variable Density Gear Bodies', 'active', 'high', 'B. Ayre', 'M. Dhiman', ''),
('RFQ10794', '', 'RFQ10794 Borg Warner D7u Sprockets & Hub', 'on hold', 'high', 'B. Ayre', 'M. Dhiman', 'Support compact feasibility of hub (Charles) and 3 sprockets (Najeeb)'),
('RFQ107XX', '', 'RFQ107XX BW-VCST e-axle reduction planetary 31Oct19', 'closed', '', '', '', ''),
('RFQ107XX', '', 'RFQ107XX VCST Ford Panther Pulley 27Nov19', 'ignored', '', '', '', ''),
('RFQ10XXX', '', 'RFQ10XXX GWM-HYCET M-Pump Driven Gear', 'active', 'high', 'C. Tao', 'P. Schaeflein', 'work with finishing partners DVS and VCST to choose best partner and finishing process'),
('RFQ10XXX', '', 'RFQ10XXX Magna MFS Clutch Inner Race 25Jul19', 'closed', '', '', '', ''),
('RFQ10839', '', 'RFQ10839 Great Wall 9AT Carrier 1', 'active', 'high', 'C. Tao', 'S. Wang', 'Support conversion to PM design'),
('SBU17-128', '', 'SBU17-128 PMDM Core Rod Bolt', 'closed', '', '', '', ''),
('SBU17-47-', '', 'SBU17-47-PMDS AB1V carrier testing validation', 'closed', '', '', '', ''),
('SBU17-74 ', '', 'SBU17-74 PMDM Densification Roller FEA', 'closed', '', '', '', ''),
('SBU17-83 ', '', 'SBU17-83 PMDA 10R80 Rotor FEA', 'closed', '', '', '', ''),
('SBU18-034', '', 'SBU18-034 Line Densification Draw Bar Failure', 'closed', '', '', '', ''),
('SBU18-053', '', 'SBU18-053 T1XX Carrier Spline Durability', 'closed', '', '', '', ''),
('SBU18-115', '', 'SBU18-115  GFx 9T65 output carrier', 'closed', '', '', '', ''),
('SBU18-116', '', 'SBU18-116 269 Hydraulic Head', 'closed', '', '', '', ''),
('SBU18-XXX', '', 'SBU18-XXX Magna 5710 Carrier Spline Durability', 'closed', '', '', '', ''),
('SBU19-025', '', 'SBU19-025 PM-S AB1V Input Carrier Durability', 'active', 'medium', 'B. Ayre', 'Y. Praden', 'Redesign fixture to avoid spline interference, and make stress state more representative of transmission'),
('SBU19-054', '', 'SBU19-054 EBO3 Rotor FEA', 'closed', '', '', '', ''),
('CT projects', '', 'HSBC Capacity Plan', 'active', 'high', 'C. Tao', 'M. Dhiman', 'develop accurate capacity plans in SI format that can be maintained, for quoting and planning purposes.'),
('CT projects', '', 'Pump Component Orientation', 'active', 'high', 'C. Tao', 'n/a', 'develop accurate capacity plans in SI format that can be maintained, for quoting and planning purposes.'),
('CT projects', '', 'Pump Component projects (P6, gen2, etc.)', 'active', 'high', 'C. Tao', 'B. Farr', 'support improvement of HSBC technical capabilities to adequately support FPS-C'),
('AE20-22', '', 'PM-A Gear HT distortion study', 'active', 'high', 'N. Ahmed', 'R. Leishman', 'Generate data to understand and quantify distortion impact from various heat treatment methods; primarily to support GM 10L Diesel RFQ10733'),
('RFQ10813', '', 'RFI for GM ring gear', 'active', 'high', 'N. Ahmed', 'M. Dhiman', 'support BD, GM to generate new ring gear business and technology'),
('AE#tbd, TR#___', '', 'LS Dyna trials', 'active', 'high', 'H. Ye', 'B. Ayre', 'simulate key manufacturing processes to reduce development time, iterations, cost'),
('AE#tbd; TR#___', '', 'AVL-Preonlab trial', 'active', 'high', 'H. Ye', 'R&I', ''),
('RFQ#___________', '', 'new Hofer-Renault-Nissan ring gears (smaller, L&R drive application)', 'active', 'high', 'N. Ahmed', 'P. Schaeflein', 'fill in!'),
('tbd', 'n/a', 'Simulation disk space reduction, maintenance', 'active', 'medium', 'H. Ye', 'IT', 'fill in!'),
('n/a', 'n/a', 'gleason webinars', 'active', 'medium', 'N. Ahmed', 'B. Ayre', 'http://marc/AE/default.aspx?RootFolder=%2FAE%2FEngineering%20LIBRARY%2FHow%20to%20Gears%20Technology&FolderCTID=0x012000075B64AAE5AA2347B94EE979AC3E8608&View={F84BC0C3-FC28-45F1-B354-95A50CD6C10F}'),
('tbd', '', 'Intern Training Plan', 'closed', 'high', 'A. Mo, J. Wilson', 'B. Ayre', 'Intern Training Plan; onboarding 2020'),
('', '', '', 'active', 'high', 'N. Ahmed', 'M. Dhiman', 'PM Gear for FPS-C?  Awaiting feedback/intelligence'),
('', '', 'pdf fixture drawing cleanup', 'active', 'low', 'A. Mo, J. Wilson', 'B. Ayre', 'Make approved electronic fixture drawings organized and available to the tech services team'),
('', '', 'sona - ZF edapt', 'on hold?', 'medium', 'B. Ayre', 'P. Schaeflein', ''),
('AE PRJ #?', '', 'feasibility compaction and HT distortion trial plan for multiple hubbed gears, sponda, ZF8HPgen4, 10L?', 'active', 'medium', 'B. Ayre', 'P. Schaeflein', 'see ae19-27; but this doesn''t cover sponda hub and interrupted wall distortion (can we green machine a slot in hubs, then compare sinter & HT distortion)?  Use cutoff wheel?'),
('y', '', 'Digital Twin activities; put in separate team meetings?', 'active', 'medium', 'H. Ye', '', ''),
('', '', 'Departmental hardware optimization', 'active', 'medium', 'H. Ye', '', 'Identify opportunities to improve departmental productivity through incremental hardware improvements'),
('', '', 'Departmental software optimization', 'active', 'medium', 'H. Ye', '', 'Identify opportunities to improve departmental productivity through incremental software improvements'),
('', '', 'windchill login to old', 'active', 'high', 'B. Ayre', '', 'need to be able to access Frank''s CAD data when he is unavailable'),
('', '', 'upgrade to new windchill', 'active', 'high', 'B. Ayre', 'R. Leishman', 'Organize design data, work towards revision control, allow Frank to upgrade to Windows 10'),
('', '', 'VCST-Volvo-Geely ring gear', 'on hold', 'high', 'N. Ahmed', 'P. Schaeflein', ''),
('', '', '8f24 transfer to HSBC', 'active', 'high', 'C. Tao', 'J. Hartmann', '8f24 transfer to HSBC'),
('', '', 'new ea-288 VW volume non-split idler, gear system?', 'active', 'medium', 'B. Ayre', 'P. Schaeflein', ''),
('RFQ10766', '', 'RFQ10766 Punch Powertrain eDCT Carrier Assembly', 'active', 'high', 'F. Ma', 'P. Schaeflein', 'Support BD via PMDS redesign simulation and optimization'),
('', '', 'add gear pitting benchmarking, VCST and insource / outsource', 'active', 'high', 'N. Ahmed', 'M. Dhiman', ''),
('', '', 'R&I 2SPGS carrier protos', 'active', 'high', 'B. Ayre', 'Mayu', ''),
('', '', 'tech radar updates', 'active', 'medium', 'H. Ye', 'Mayu', ''),
('', '', 'SWI folder organization', 'active', 'high', 'A. Mo', 'B. Ayre', 'make our swi''s organized, and available to all of corp tech-services (BD and Yannic''s group), to be ready for upload to an electronic filing system (EtQ for example)');

