<?php

echo "<pre>";

$countries = array(4 => array(4,"AF","AFG","Afghanistan"),
248 => array(248,"AX","ALA","Åland Islands"),
8 => array(8,"AL","ALB","Albania"),
12 => array(12,"DZ","DZA","Algeria"),
16 => array(16,"AS","ASM","American Samoa"),
20 => array(20,"AD","AND","Andorra"),
24 => array(24,"AO","AGO","Angola"),
660 => array(660,"AI","AIA","Anguilla"),
10 => array(10,"AQ","ATA","Antarctica"),
28 => array(28,"AG","ATG","Antigua and Barbuda"),
32 => array(32,"AR","ARG","Argentina"),
51 => array(51,"AM","ARM","Armenia"),
533 => array(533,"AW","ABW","Aruba"),
36 => array(36,"AU","AUS","Australia"),
40 => array(40,"AT","AUT","Austria"),
31 => array(31,"AZ","AZE","Azerbaijan"),
44 => array(44,"BS","BHS","Bahamas"),
48 => array(48,"BH","BHR","Bahrain"),
50 => array(50,"BD","BGD","Bangladesh"),
52 => array(52,"BB","BRB","Barbados"),
112 => array(112,"BY","BLR","Belarus"),
56 => array(56,"BE","BEL","Belgium"),
84 => array(84,"BZ","BLZ","Belize"),
204 => array(204,"BJ","BEN","Benin"),
60 => array(60,"BM","BMU","Bermuda"),
64 => array(64,"BT","BTN","Bhutan"),
68 => array(68,"BO","BOL","Bolivia (Plurinational State of)"),
535 => array(535,"BQ","BES","Bonaire, Sint Eustatius and Saba"),
70 => array(70,"BA","BIH","Bosnia and Herzegovina"),
72 => array(72,"BW","BWA","Botswana"),
74 => array(74,"BV","BVT","Bouvet Island"),
76 => array(76,"BR","BRA","Brazil"),
86 => array(86,"IO","IOT","British Indian Ocean Territory"),
96 => array(96,"BN","BRN","Brunei Darussalam"),
100 => array(100,"BG","BGR","Bulgaria"),
854 => array(854,"BF","BFA","Burkina Faso"),
108 => array(108,"BI","BDI","Burundi"),
132 => array(132,"CV","CPV","Cabo Verde"),
116 => array(116,"KH","KHM","Cambodia"),
120 => array(120,"CM","CMR","Cameroon"),
124 => array(124,"CA","CAN","Canada"),
136 => array(136,"KY","CYM","Cayman Islands"),
140 => array(140,"CF","CAF","Central African Republic"),
148 => array(148,"TD","TCD","Chad"),
152 => array(152,"CL","CHL","Chile"),
156 => array(156,"CN","CHN","China"),
162 => array(162,"CX","CXR","Christmas Island"),
166 => array(166,"CC","CCK","Cocos (Keeling) Islands"),
170 => array(170,"CO","COL","Colombia"),
174 => array(174,"KM","COM","Comoros"),
178 => array(178,"CG","COG","Congo"),
180 => array(180,"CD","COD","Congo (Democratic Republic of the)"),
184 => array(184,"CK","COK","Cook Islands"),
188 => array(188,"CR","CRI","Costa Rica"),
384 => array(384,"CI","CIV","Cªte d'Ivoire"),
191 => array(191,"HR","HRV","Croatia"),
192 => array(192,"CU","CUB","Cuba"),
531 => array(531,"CW","CUW","Curaçao"),
196 => array(196,"CY","CYP","Cyprus"),
203 => array(203,"CZ","CZE","Czech Republic"),
208 => array(208,"DK","DNK","Denmark"),
262 => array(262,"DJ","DJI","Djibouti"),
212 => array(212,"DM","DMA","Dominica"),
214 => array(214,"DO","DOM","Dominican Republic"),
218 => array(218,"EC","ECU","Ecuador"),
818 => array(818,"EG","EGY","Egypt"),
222 => array(222,"SV","SLV","El Salvador"),
226 => array(226,"GQ","GNQ","Equatorial Guinea"),
232 => array(232,"ER","ERI","Eritrea"),
233 => array(233,"EE","EST","Estonia"),
231 => array(231,"ET","ETH","Ethiopia"),
238 => array(238,"FK","FLK","Falkland Islands (Malvinas)"),
234 => array(234,"FO","FRO","Faroe Islands"),
242 => array(242,"FJ","FJI","Fiji"),
246 => array(246,"FI","FIN","Finland"),
250 => array(250,"FR","FRA","France"),
254 => array(254,"GF","GUF","French Guiana"),
258 => array(258,"PF","PYF","French Polynesia"),
260 => array(260,"TF","ATF","French Southern Territories"),
266 => array(266,"GA","GAB","Gabon"),
270 => array(270,"GM","GMB","Gambia"),
268 => array(268,"GE","GEO","Georgia"),
276 => array(276,"DE","DEU","Germany"),
288 => array(288,"GH","GHA","Ghana"),
292 => array(292,"GI","GIB","Gibraltar"),
300 => array(300,"GR","GRC","Greece"),
304 => array(304,"GL","GRL","Greenland"),
308 => array(308,"GD","GRD","Grenada"),
312 => array(312,"GP","GLP","Guadeloupe"),
316 => array(316,"GU","GUM","Guam"),
320 => array(320,"GT","GTM","Guatemala"),
831 => array(831,"GG","GGY","Guernsey"),
324 => array(324,"GN","GIN","Guinea"),
624 => array(624,"GW","GNB","Guinea-Bissau"),
328 => array(328,"GY","GUY","Guyana"),
332 => array(332,"HT","HTI","Haiti"),
334 => array(334,"HM","HMD","Heard Island and McDonald Islands"),
336 => array(336,"VA","VAT","Holy See"),
340 => array(340,"HN","HND","Honduras"),
344 => array(344,"HK","HKG","Hong Kong"),
348 => array(348,"HU","HUN","Hungary"),
352 => array(352,"IS","ISL","Iceland"),
356 => array(356,"IN","IND","India"),
360 => array(360,"ID","IDN","Indonesia"),
364 => array(364,"IR","IRN","Iran (Islamic Republic of)"),
368 => array(368,"IQ","IRQ","Iraq"),
372 => array(372,"IE","IRL","Ireland"),
833 => array(833,"IM","IMN","Isle of Man"),
376 => array(376,"IL","ISR","Israel"),
380 => array(380,"IT","ITA","Italy"),
388 => array(388,"JM","JAM","Jamaica"),
392 => array(392,"JP","JPN","Japan"),
832 => array(832,"JE","JEY","Jersey"),
400 => array(400,"JO","JOR","Jordan"),
398 => array(398,"KZ","KAZ","Kazakhstan"),
404 => array(404,"KE","KEN","Kenya"),
296 => array(296,"KI","KIR","Kiribati"),
408 => array(408,"KP","PRK","Korea (Democratic People's Republic of)"),
410 => array(410,"KR","KOR","Korea (Republic of)"),
414 => array(414,"KW","KWT","Kuwait"),
417 => array(417,"KG","KGZ","Kyrgyzstan"),
418 => array(418,"LA","LAO","Lao People's Democratic Republic"),
428 => array(428,"LV","LVA","Latvia"),
422 => array(422,"LB","LBN","Lebanon"),
426 => array(426,"LS","LSO","Lesotho"),
430 => array(430,"LR","LBR","Liberia"),
434 => array(434,"LY","LBY","Libya"),
438 => array(438,"LI","LIE","Liechtenstein"),
440 => array(440,"LT","LTU","Lithuania"),
442 => array(442,"LU","LUX","Luxembourg"),
446 => array(446,"MO","MAC","Macao"),
807 => array(807,"MK","MKD","Macedonia (the former Yugoslav Republic of)"),
450 => array(450,"MG","MDG","Madagascar"),
454 => array(454,"MW","MWI","Malawi"),
458 => array(458,"MY","MYS","Malaysia"),
462 => array(462,"MV","MDV","Maldives"),
466 => array(466,"ML","MLI","Mali"),
470 => array(470,"MT","MLT","Malta"),
584 => array(584,"MH","MHL","Marshall Islands"),
474 => array(474,"MQ","MTQ","Martinique"),
478 => array(478,"MR","MRT","Mauritania"),
480 => array(480,"MU","MUS","Mauritius"),
175 => array(175,"YT","MYT","Mayotte"),
484 => array(484,"MX","MEX","Mexico"),
583 => array(583,"FM","FSM","Micronesia (Federated States of)"),
498 => array(498,"MD","MDA","Moldova (Republic of)"),
492 => array(492,"MC","MCO","Monaco"),
496 => array(496,"MN","MNG","Mongolia"),
499 => array(499,"ME","MNE","Montenegro"),
500 => array(500,"MS","MSR","Montserrat"),
504 => array(504,"MA","MAR","Morocco"),
508 => array(508,"MZ","MOZ","Mozambique"),
104 => array(104,"MM","MMR","Myanmar"),
516 => array(516,"NA","NAM","Namibia"),
520 => array(520,"NR","NRU","Nauru"),
524 => array(524,"NP","NPL","Nepal"),
528 => array(528,"NL","NLD","Netherlands"),
540 => array(540,"NC","NCL","New Caledonia"),
554 => array(554,"NZ","NZL","New Zealand"),
558 => array(558,"NI","NIC","Nicaragua"),
562 => array(562,"NE","NER","Niger"),
566 => array(566,"NG","NGA","Nigeria"),
570 => array(570,"NU","NIU","Niue"),
574 => array(574,"NF","NFK","Norfolk Island"),
580 => array(580,"MP","MNP","Northern Mariana Islands"),
578 => array(578,"NO","NOR","Norway"),
512 => array(512,"OM","OMN","Oman"),
586 => array(586,"PK","PAK","Pakistan"),
585 => array(585,"PW","PLW","Palau"),
275 => array(275,"PS","PSE","Palestine, State of"),
591 => array(591,"PA","PAN","Panama"),
598 => array(598,"PG","PNG","Papua New Guinea"),
600 => array(600,"PY","PRY","Paraguay"),
604 => array(604,"PE","PER","Peru"),
608 => array(608,"PH","PHL","Philippines"),
612 => array(612,"PN","PCN","Pitcairn"),
616 => array(616,"PL","POL","Poland"),
620 => array(620,"PT","PRT","Portugal"),
630 => array(630,"PR","PRI","Puerto Rico"),
634 => array(634,"QA","QAT","Qatar"),
638 => array(638,"RE","REU","R_union"),
642 => array(642,"RO","ROU","Romania"),
643 => array(643,"RU","RUS","Russian Federation"),
646 => array(646,"RW","RWA","Rwanda"),
652 => array(652,"BL","BLM","Saint Barth_lemy"),
654 => array(654,"SH","SHN","Saint Helena, Ascension and Tristan da Cunha"),
659 => array(659,"KN","KNA","Saint Kitts and Nevis"),
662 => array(662,"LC","LCA","Saint Lucia"),
663 => array(663,"MF","MAF","Saint Martin (French part)"),
666 => array(666,"PM","SPM","Saint Pierre and Miquelon"),
670 => array(670,"VC","VCT","Saint Vincent and the Grenadines"),
882 => array(882,"WS","WSM","Samoa"),
674 => array(674,"SM","SMR","San Marino"),
678 => array(678,"ST","STP","Sao Tome and Principe"),
682 => array(682,"SA","SAU","Saudi Arabia"),
686 => array(686,"SN","SEN","Senegal"),
688 => array(688,"RS","SRB","Serbia"),
690 => array(690,"SC","SYC","Seychelles"),
694 => array(694,"SL","SLE","Sierra Leone"),
702 => array(702,"SG","SGP","Singapore"),
534 => array(534,"SX","SXM","Sint Maarten (Dutch part)"),
703 => array(703,"SK","SVK","Slovakia"),
705 => array(705,"SI","SVN","Slovenia"),
90 => array(90,"SB","SLB","Solomon Islands"),
706 => array(706,"SO","SOM","Somalia"),
710 => array(710,"ZA","ZAF","South Africa"),
239 => array(239,"GS","SGS","South Georgia and the South Sandwich Islands"),
728 => array(728,"SS","SSD","South Sudan"),
724 => array(724,"ES","ESP","Spain"),
144 => array(144,"LK","LKA","Sri Lanka"),
729 => array(729,"SD","SDN","Sudan"),
740 => array(740,"SR","SUR","Suriname"),
744 => array(744,"SJ","SJM","Svalbard and Jan Mayen"),
748 => array(748,"SZ","SWZ","Swaziland"),
752 => array(752,"SE","SWE","Sweden"),
756 => array(756,"CH","CHE","Switzerland"),
760 => array(760,"SY","SYR","Syrian Arab Republic"),
158 => array(158,"TW","TWN","Taiwan, Province of China[a]"),
762 => array(762,"TJ","TJK","Tajikistan"),
834 => array(834,"TZ","TZA","Tanzania, United Republic of"),
764 => array(764,"TH","THA","Thailand"),
626 => array(626,"TL","TLS","Timor-Leste"),
768 => array(768,"TG","TGO","Togo"),
772 => array(772,"TK","TKL","Tokelau"),
776 => array(776,"TO","TON","Tonga"),
780 => array(780,"TT","TTO","Trinidad and Tobago"),
788 => array(788,"TN","TUN","Tunisia"),
792 => array(792,"TR","TUR","Turkey"),
795 => array(795,"TM","TKM","Turkmenistan"),
796 => array(796,"TC","TCA","Turks and Caicos Islands"),
798 => array(798,"TV","TUV","Tuvalu"),
800 => array(800,"UG","UGA","Uganda"),
804 => array(804,"UA","UKR","Ukraine"),
784 => array(784,"AE","ARE","United Arab Emirates"),
826 => array(826,"GB","GBR","United Kingdom of Great Britain and Northern Ireland"),
840 => array(840,"US","USA","United States of America"),
581 => array(581,"UM","UMI","United States Minor Outlying Islands"),
858 => array(858,"UY","URY","Uruguay"),
860 => array(860,"UZ","UZB","Uzbekistan"),
548 => array(548,"VU","VUT","Vanuatu"),
862 => array(862,"VE","VEN","Venezuela (Bolivarian Republic of)"),
704 => array(704,"VN","VNM","Viet Nam"),
92 => array(92,"VG","VGB","Virgin Islands (British)"),
850 => array(850,"VI","VIR","Virgin Islands (U.S.)"),
876 => array(876,"WF","WLF","Wallis and Futuna"),
732 => array(732,"EH","ESH","Western Sahara"),
887 => array(887,"YE","YEM","Yemen"),
894 => array(894,"ZM","ZMB","Zambia"),
716 => array(716,"ZW","ZWE","Zimbabwe"));

print_r($countries);
echo "</pre>";
?>
