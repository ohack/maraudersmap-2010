<?
// We don't want caching!
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Pragma: no-cache'); 

require('../lib_common.php');
require_once('usernames.php');

DBConnect();

$maxNum = 24420;
$totalNum = 959931;

$heatmap["wh30,in,lounge"] = 24420;
$heatmap["oc30,in,rm325"] = 20847;
$heatmap["ac20,in,rm206"] = 18679;
$heatmap["wh30,in,rm309"] = 16346;
$heatmap["wh20,in,lounge"] = 16228;
$heatmap["eh20,in,rm215"] = 16219;
$heatmap["eh20,in,rm228f"] = 16128;
$heatmap["wh40,in,rm418"] = 14883;
$heatmap["wh30,in,rm306"] = 14870;
$heatmap["wh40,in,rm429"] = 14468;
$heatmap["eh30,in,rm307"] = 14094;
$heatmap["wh30,in,rm305"] = 13898;
$heatmap["wh40,in,rm415"] = 13665;
$heatmap["ac20,in,rm209"] = 13224;
$heatmap["wh30,in,antelounge"] = 12524;
$heatmap["wh50,in,rm504"] = 12241;
$heatmap["wh40,in,rm431"] = 11573;
$heatmap["eh30,in,rm317"] = 11488;
$heatmap["ac20,in,rm204"] = 11479;
$heatmap["wh40,in,rm423"] = 11160;
$heatmap["wh40,in,rm407"] = 11134;
$heatmap["ac30,in,rm304"] = 10446;
$heatmap["eh10,in,rm120"] = 10303;
$heatmap["eh40,in,rm405"] = 10245;
$heatmap["ac10,in,rm126"] = 10069;
$heatmap["wh40,in,lounge"] = 9877;
$heatmap["eh40,in,rm416"] = 9262;
$heatmap["wh20,in,rm218"] = 9224;
$heatmap["wh40,in,rm425"] = 9208;
$heatmap["eh40,in,rm415"] = 8867;
$heatmap["wh20,in,rm213"] = 8846;
$heatmap["eh20,in,rm207"] = 7676;
$heatmap["wh20,in,antelounge"] = 7609;
$heatmap["ac30,in,rm328"] = 7527;
$heatmap["wh20,in,rm231"] = 7477;
$heatmap["wh30,in,rm313"] = 7376;
$heatmap["wh40,in,antelounge"] = 7352;
$heatmap["wh20,in,rm226"] = 7198;
$heatmap["eh30,in,rm329b"] = 6957;
$heatmap["wh20,in,rm207"] = 6900;
$heatmap["ac40,in,rm413"] = 6788;
$heatmap["wh30,in,rm325"] = 6777;
$heatmap["ac30,in,rm306"] = 6685;
$heatmap["wh30,in,rm324"] = 6561;
$heatmap["wh40,in,rm414"] = 6478;
$heatmap["wh30,in,rm330"] = 6377;
$heatmap["eh40,in,rm428b"] = 6293;
$heatmap["eh30,in,rm315"] = 6234;
$heatmap["eh40,in,rm420"] = 6210;
$heatmap["wh30,in,rm303"] = 6034;
$heatmap["wh40,in,rm406"] = 5965;
$heatmap["eh30,in,rm306e"] = 5920;
$heatmap["ac20,in,rm213"] = 5880;
$heatmap["eh10,in,rm128 lounge"] = 5844;
$heatmap["eh30,in,rm329e"] = 5778;
$heatmap["eh10,in,rm129e"] = 5725;
$heatmap["wh40,in,rm404"] = 5577;
$heatmap["eh30,in,rm316c"] = 5537;
$heatmap["wh20,in,nook"] = 5485;
$heatmap["ac40,in,rm417"] = 5481;
$heatmap["wh30,in,rm329"] = 5348;
$heatmap["wh20,in,rm227"] = 5346;
$heatmap["wh20,in,rm209"] = 5189;
$heatmap["eh20,in,rm205"] = 4898;
$heatmap["wh40,in,rm411"] = 4849;
$heatmap["wh30,in,rm312"] = 4796;
$heatmap["wh20,in,rm223"] = 4796;
$heatmap["eh40,in,rm413"] = 4781;
$heatmap["oc10,in,library"] = 4720;
$heatmap["eh10,in,rm117"] = 4500;
$heatmap["wh20,in,rm230"] = 4445;
$heatmap["ac30,in,rm326"] = 4352;
$heatmap["wh20,in,rm210"] = 4348;
$heatmap["wh30,in,rm315"] = 4345;
$heatmap["wh20,in,rm224"] = 4326;
$heatmap["eh30,in,lounge"] = 4223;
$heatmap["eh10,in,rm115"] = 4218;
$heatmap["eh30,in,rm306c"] = 4032;
$heatmap["eh30,in,rm303"] = 4012;
$heatmap["wh30,in,rm304"] = 3960;
$heatmap["ac30,in,rm309"] = 3925;
$heatmap["wh40,in,rm401"] = 3838;
$heatmap["wh40,in,rm409"] = 3745;
$heatmap["wh20,in,rm212"] = 3669;
$heatmap["ac20,in,rm226 scope lab"] = 3662;
$heatmap["wh20,in,rm215"] = 3626;
$heatmap["wh20,in,rm205"] = 3620;
$heatmap["eh40,in,rm403"] = 3604;
$heatmap["eh30,in,rm316"] = 3565;
$heatmap["wh20,in,rm204"] = 3558;
$heatmap["wh20,in,rm225"] = 3528;
$heatmap["wh20,in,north wing nook"] = 3496;
$heatmap["eh40,in,rm4n suite lounge"] = 3453;
$heatmap["eh20,in,rm206f"] = 3418;
$heatmap["wh30,in,rm301"] = 3325;
$heatmap["ac30,in,rm318"] = 3275;
$heatmap["wh20,in,rm201"] = 3271;
$heatmap["eh30,in,rm313"] = 3178;
$heatmap["eh40,in,rm406d"] = 3137;
$heatmap["ac20,in,rm218"] = 3119;
$heatmap["eh20,in,rm228b"] = 3094;
$heatmap["eh30,in,rm306f"] = 3067;
$heatmap["wh40,in,rm405"] = 3049;
$heatmap["wh20,in,rm214"] = 3039;
$heatmap["wh20,in,rm229"] = 2993;
$heatmap["eh20,in,rm206g"] = 2992;
$heatmap["wh30,in,rm314"] = 2990;
$heatmap["eh30,in,rm305"] = 2959;
$heatmap["wh30,in,rm302"] = 2868;
$heatmap["ac40,in,rm409"] = 2865;
$heatmap["eh10,in,rm106f"] = 2837;
$heatmap["eh40,out,northwing"] = 2811;
$heatmap["eh20,in,221teamrm"] = 2810;
$heatmap["ac10,in,rm109"] = 2797;
$heatmap["ac10,in,rm128"] = 2764;
$heatmap["eh20,in,rm206 lounge"] = 2726;
$heatmap["ac10,in,rm113"] = 2673;
$heatmap["wh40,in,rm402"] = 2657;
$heatmap["cc10,in,tables"] = 2623;
$heatmap["wh40,in,rm403"] = 2608;
$heatmap["wh30,in,rm323"] = 2579;
$heatmap["wh30,in,northwing nook"] = 2535;
$heatmap["eh30,in,rm306b"] = 2467;
$heatmap["eh30,in,rm329 suite lounge"] = 2417;
$heatmap["wh20,in,north wing"] = 2390;
$heatmap["eh30,in,rm306g"] = 2353;
$heatmap["wh20,in,rm228"] = 2341;
$heatmap["oc00,in,library"] = 2316;
$heatmap["wh10,in,lounge"] = 2212;
$heatmap["ac40,out,rm419"] = 2186;
$heatmap["eh30,in,teamroom"] = 2170;
$heatmap["wh40,in,rm413"] = 2165;
$heatmap["eh40,in,rm406f"] = 2118;
$heatmap["wh30,in,rm331"] = 2077;
$heatmap["eh30,in,316c"] = 2065;
$heatmap["ac20,in,gill\\'s lab"] = 2060;//2060 + 1821=3,881
$heatmap["eh10,in,rm119"] = 2024;
$heatmap["eh30,in,rm328"] = 2002;
$heatmap["ac10,in,ac 126"] = 1979;
$heatmap["wh20,in,rm202"] = 1967;
$heatmap["cc10,in,dininghall"] = 1931;
$heatmap["eh10,in,lounge"] = 1919;
$heatmap["ac40,out,end"] = 1888;
$heatmap["eh30,in,rm301"] = 1879;
$heatmap["eh20,in,rm209"] = 1843;
$heatmap["ac20,in,gill\\\\\\'s lab"] = 1821;
//$heatmap["ac20,in,gills lab"] = 1821;
$heatmap["wh40,in,rm427"] = 1804;
$heatmap["cc10,in,cookies"] = 1796;
$heatmap["eh40,in,rm422"] = 1791;
$heatmap["eh40,in,rm417"] = 1762;
$heatmap["cc30,in,central area registrar"] = 1582;
$heatmap["ac20,in,rm228"] = 1570;
$heatmap["wh10,in,kitchen"] = 1548;
$heatmap["eh40,in,rm429f"] = 1523;
$heatmap["eh20,in,rm201team"] = 1506;
$heatmap["eh40,in,406d"] = 1481;
$heatmap["wh30,out,northwing"] = 1456;
$heatmap["wh40,in,rm412"] = 1370;
$heatmap["ac30,in,rm302"] = 1368;
$heatmap["eh40,in,teamroom"] = 1354;
$heatmap["wh20,in,rm206"] = 1344;
$heatmap["wh30,in,rm327"] = 1323;
$heatmap["eh10,in,rm128a"] = 1305;
$heatmap["wh30,in,rm318"] = 1303;
$heatmap["oc00,in,computer lab"] = 1250;
$heatmap["eh10,in,rm101teamrm"] = 1234;
$heatmap["eh40,in,rm401teamrm"] = 1215;
$heatmap["eh10,in,rm122"] = 1208;
$heatmap["cc10,in,computer bar"] = 1195;
$heatmap["eh10,in,rm126b"] = 1150;
$heatmap["ac40,out,rm417"] = 1138;
$heatmap["eh30,in,westteamrm"] = 1128;
$heatmap["cc20,in,dining hall mezzanine"] = 1113;
$heatmap["eh10,out,eastwing"] = 1111;
$heatmap["ac20,in,rm212"] = 1101;
$heatmap["eh30,in,rm329a"] = 1098;
$heatmap["eh40,in,lounge"] = 1053;
$heatmap["eh10,in,121 team"] = 1046;
$heatmap["ac30,out,rm309"] = 988;
$heatmap["wh20,in,rm28"] = 984;
$heatmap["ac10,in,rm102"] = 980;
$heatmap["wh30,in,rm307"] = 975;
$heatmap["cc20,in,cresecentrm"] = 974;
$heatmap["oc00,in,auditorium"] = 917;
$heatmap["eh40,in,eh405"] = 906;
$heatmap["eh40,in,rm421"] = 893;
$heatmap["wh40,out,northwing"] = 879;
$heatmap["eh20,in,rm228a"] = 864;
$heatmap["wh20,in,rm203"] = 861;
$heatmap["eh10,in,111 kitchen"] = 843;
$heatmap["ac40,in,rm428"] = 807;
$heatmap["ac30,in,rm313"] = 797;
$heatmap["wh10,in,north nook"] = 756;
$heatmap["eh30,in,rm316a"] = 749;
$heatmap["eh20,out,westwing"] = 727;
$heatmap["oc00,in,rm10 (it helpdesk)"] = 713;
$heatmap["wh30,out,westwing"] = 677;
$heatmap["ac40,out,rm409"] = 667;
$heatmap["ac40,out,rm428"] = 630;
$heatmap["eh10,in,rm129f"] = 609;
$heatmap["cc30,in,rm310"] = 608;
$heatmap["eh20,in,206 lounge"] = 580;
$heatmap["wh20,out,north wing nook"] = 572;
$heatmap["wh40,out,eastwing"] = 565;
$heatmap["oc20,in,mezzanine"] = 557;
$heatmap["wh30,out,rm309"] = 542;
$heatmap["oc00,in,auditorium_stage"] = 533;
$heatmap["eh40,in,rm429 suite"] = 530;
$heatmap["eh40,in,rm416e"] = 525;
$heatmap["ac10,out,middle"] = 515;
$heatmap["cc20,in,rm210"] = 505;
$heatmap["wh30,in,team room"] = 499;
$heatmap["wh30,in,rm311"] = 499;
$heatmap["eh20,in,rm219"] = 495;
$heatmap["eh30,in,329e"] = 494;
$heatmap["eh30,in,rm321"] = 477;
$heatmap["eh20,in,rm228 lounge"] = 473;
$heatmap["wh20,out,rm215"] = 446;
$heatmap["eh10,in,eh117"] = 438;
$heatmap["eh20,in,rm220"] = 429;
$heatmap["eh10,in,rm106g"] = 428;
$heatmap["wh40,in,the zebra lounge"] = 422;
$heatmap["wh40,out,westwing"] = 416;
$heatmap["eh40,in,rm409"] = 414;
$heatmap["wh40,in,wh423"] = 407;
$heatmap["wh40,in,rm410"] = 406;
$heatmap["wh10,out,westwing"] = 405;
$heatmap["wh10,out,northwing"] = 391;
$heatmap["eh10,in,rm106"] = 390;
$heatmap["eh20,out,eastwing"] = 375;
$heatmap["ac20,out,rm213"] = 367;
$heatmap["oc30,out,rm366"] = 363;
$heatmap["wh20,in,rm211"] = 360;
$heatmap["eh40,out,westwing"] = 359;
$heatmap["wh20,in,rm14"] = 341;
$heatmap["eh30,out,northwing"] = 328;
$heatmap["eh40,in,rm428"] = 310;
$heatmap["eh30,in,antelounge"] = 307;
$heatmap["eh20,in,antelounge"] = 290;
$heatmap["ac10,out,outside machine shop"] = 289;
$heatmap["wh30,in,wh 325"] = 285;
$heatmap["oc10,in,auditorium"] = 283;
$heatmap["eh20,in,lounge"] = 270;
$heatmap["ac40,in,rm407"] = 268;
$heatmap["ac30,out,rm302"] = 257;
$heatmap["eh10,in,rm106 suite lounge"] = 252;
$heatmap["cc00,in,game_room"] = 251;
$heatmap["wh40,in,rm02"] = 244;
$heatmap["cc20,in,rm214"] = 235;
$heatmap["wh20,in,wh212"] = 233;
$heatmap["ac30,in,rm314 (printer)"] = 231;
$heatmap["eh10,in,rm129 lounge"] = 219;
$heatmap["wh10,in,rm107"] = 213;
$heatmap["ac40,in,rm404"] = 208;
$heatmap["wh40,in,rm410 (the zebra lounge)"] = 203;
$heatmap["eh30,in,rm3westteam"] = 200;
$heatmap["eh10,in,rm116 (living room)"] = 196;
$heatmap["cc10,out,middle"] = 195;
$heatmap["cc30,in,central area hall"] = 186;
$heatmap["wh40,in,01"] = 183;
$heatmap["oc30,out,rm370"] = 183;
$heatmap["ac10,out,machine shop"] = 181;
$heatmap["wh10,in,rm105"] = 176;
$heatmap["ac10,out,the o"] = 174;
$heatmap["wh41,in,rm413"] = 172;
$heatmap["wh20,in,rm31"] = 170;
$heatmap["cc05,in,wooden_waterfall"] = 166;
$heatmap["ac40,out,rm407"] = 166;
$heatmap["oc30,in,faculty lobby"] = 164;
$heatmap["ac30,out,ac302"] = 163;
$heatmap["wh30,in,laundryrm"] = 162;
$heatmap["wh20,out,westwing"] = 160;
$heatmap["wh30,in,west wing windowseat"] = 156;
$heatmap["cc00,in,east_stairway"] = 155;
$heatmap["cc00,in,mail room"] = 152;
$heatmap["oc30,in,rm332"] = 151;
$heatmap["eh40,in,rm416c"] = 149;
$heatmap["eh30,in,306 lounge"] = 149;
$heatmap["oc10,in,rm110"] = 145;
$heatmap["eh30,out,eastwing"] = 145;
$heatmap["oc00,out,north_it"] = 141;
$heatmap["ac30,out, ac 318"] = 141;
$heatmap["oc30,in,rm335"] = 123;
$heatmap["ac30,in,rm308"] = 122;
$heatmap["ac30,in,08"] = 121;
$heatmap["eh20,in,206f"] = 113;
$heatmap["eh40,in,northteamrm"] = 111;
$heatmap["eh40,in,rm416f"] = 105;
$heatmap["eh40,in,rm418"] = 103;
$heatmap["cc30,in,central_area_registrar"] = 99;
$heatmap["ac40,in,rm407(joanne\\'soffice)"] = 96;
$heatmap["eh10,out,northwing"] = 94;
$heatmap["wh40,in,rm424"] = 93;
$heatmap["eh30,in,329b"] = 92;
$heatmap["oc30,in,rm321"] = 91;
$heatmap["eh10,in,antelounge"] = 90;
$heatmap["oc00,in,north_it"] = 89;
$heatmap["eh40,in,rm406a"] = 87;
$heatmap["wh10,out,rm124"] = 85;
$heatmap["eh30,in,inside eh329b"] = 85;
$heatmap["eh10,in,rm106a"] = 85;
$heatmap["cc10,in,wooden_waterfall"] = 84;
$heatmap["ac20,in,rm208"] = 82;
$heatmap["oc10,out,main stairway between oc"] = 79;
$heatmap["cc20,in,board room"] = 72;
$heatmap["wh30,in,rm310"] = 70;
$heatmap["eh10,out,outside eh front doors"] = 70;
$heatmap["ac30,in,rm301"] = 68;
$heatmap["wh40,in,rm420"] = 64;
$heatmap["cc10,in,entry"] = 64;
$heatmap["wh40,in,05"] = 63;
$heatmap["oc20,in,faculty lobby"] = 62;
$heatmap["oc00,in,library workroom"] = 61;
$heatmap["ac20,out,hallway"] = 60;
$heatmap["ac40,in,rm406"] = 59;
//$heatmap["inrm"] = 56;
$heatmap["wh30,in,laundry room"] = 55;
$heatmap["ac32,in,rm326"] = 54;
$heatmap["ac30,out,rm328"] = 54;
$heatmap["wh31,in,rm315"] = 52;
$heatmap["wh10,out,eastwing"] = 50;
$heatmap["eh30,in,306c"] = 50;
$heatmap["ac10,out,outside of ac 1st floor north"] = 49;
$heatmap["wh20,in,inside wh203"] = 46;
$heatmap["oc20,in,rm273"] = 46;
$heatmap["oc10,out,admissions"] = 46;
$heatmap["eh20,in,rm206c"] = 45;
$heatmap["oc10,out,library"] = 41;
$heatmap["wh30,in,rm301bathrm"] = 39;
$heatmap["wh40,in,northwing stairwell"] = 38;
$heatmap["wh30,in,rm301 bath"] = 38;
$heatmap["wh30,in,inside 3rd floor lounge"] = 36;
$heatmap["eh10,out,greatlawn "] = 36;
$heatmap["wh30,in,north wing"] = 35;
$heatmap["oc00,in,ll10 (it helpdesk)"] = 34;
$heatmap["eh41,in,rm417"] = 34;
$heatmap["cc10,in,pizza"] = 33;
$heatmap["cc30,in,central_area_hall"] = 32;
$heatmap["ac10,in,rm103"] = 31;
$heatmap["eh10,in,rm121"] = 30;
$heatmap["oc20,in,oc273"] = 29;
$heatmap["ac32,in,rm328"] = 29;
$heatmap["ac10,in,ac109"] = 29;
$heatmap["wh30,in,rm326"] = 28;
$heatmap["cc20,in,other_stairway"] = 27;
$heatmap["wh41,in,rm411"] = 25;
$heatmap["wh41,in,rm410"] = 25;
$heatmap["oc30,in,rm350"] = 25;
$heatmap["eh30,in,329a"] = 23;
$heatmap["cc30,in,central_stairway"] = 22;
$heatmap["eh10,in,rm111"] = 20;
$heatmap["oc20,in,rm200"] = 19;
$heatmap["eh40,in,antelounge"] = 19;
$heatmap["cc30,in,central_area"] = 19;
$heatmap["oc20,in,oc275"] = 17;
$heatmap["eh10,in,rm116(livingrm)"] = 17;
$heatmap["wh10,in,outside"] = 15;
$heatmap["oc20,out,rm227"] = 14;
$heatmap["ac30,in,rm305"] = 14;
$heatmap["wh10,out,sukkah"] = 12;
$heatmap["cc30,in,central area"] = 12;
$heatmap["ac30,out,rm325"] = 12;
$heatmap["cc00,in,mailrm"] = 11;
$heatmap["ac20,out,rm202"] = 11;
$heatmap["oc30,in,mezzanine"] = 10;
$heatmap["eh31,in,rm316"] = 10;
$heatmap["ac22,in,rm228"] = 10;
$heatmap["wh40,in,(5th floor) north stairwell"] = 9;
$heatmap["wh10,out,outside"] = 9;
$heatmap["wh10,in,rm118"] = 9;
$heatmap["wh10,in,antelounge"] = 9;
$heatmap["oc30,in,rm373"] = 9;
$heatmap["oc30,in,rm300"] = 9;
$heatmap["cc10,out,the o"] = 9;
$heatmap["wh10,in,lawn"] = 8;
$heatmap["cc20,in,central_stairway"] = 8;
$heatmap["wh40,out,antelounge"] = 7;
$heatmap["wh30,in,rm328"] = 7;
$heatmap["cc30,in,central stairway"] = 7;
$heatmap["wh10,in,rm104"] = 6;
$heatmap["mh32,in,rm325"] = 6;
$heatmap["cc25,in,central_stairway"] = 6;
$heatmap["ac10,in,rm106"] = 6;
$heatmap["wh43,in,rm431"] = 5;
$heatmap["wh42,in,rm429"] = 5;
$heatmap["wh42,in,rm427"] = 5;
$heatmap["wh41,in,rm418"] = 5;
$heatmap["wh41,in,rm415"] = 5;
$heatmap["wh41,in,rm414"] = 5;
$heatmap["wh32,in,rm329"] = 5;
$heatmap["wh30,in,309"] = 5;
$heatmap["wh22,in,rm223"] = 5;
$heatmap["eh32,in,rm329b"] = 5;
$heatmap["eh22,in,rm228f"] = 5;
$heatmap["eh22,in,rm228b"] = 5;
$heatmap["ac12,in,rm128"] = 5;
$heatmap["wh40,in,rm"] = 4;
$heatmap["oc00,in,rm22 (computer lab)"] = 4;
$heatmap["oc00,in,comptuer lab"] = 4;
$heatmap["eh40,in,rm426"] = 4;
$heatmap["cc25,in,other_stairway"] = 4;
$heatmap["wh30,in,test"] = 3;
$heatmap["wh30,in,rm321"] = 3;
$heatmap["eh40,in,rm404"] = 3;
$heatmap["eh10,in,rm116livingrm"] = 3;
$heatmap["0rm"] = 3;
$heatmap["wh40,in,testtesttest"] = 2;
$heatmap["wh30,in,testtesttest"] = 2;
$heatmap["wh30,in,room309"] = 2;
$heatmap["wh30,in,condomrm"] = 2;
$heatmap["oc30,out,rm329"] = 2;
$heatmap["oc30,in,rm357"] = 2;
$heatmap["oc10,out,lobby"] = 2;
$heatmap["oc10,in,milas hall lobby"] = 2;
$heatmap["oc00,in,testing"] = 2;
$heatmap["oc00,in,in olin way"] = 2;
$heatmap["eh40,in,rm416 f"] = 2;
$heatmap["eh30,in,06b"] = 2;
$heatmap["cc00,out,game_room"] = 2;
$heatmap["ac40,in,rm407(joanne'soffice)"] = 2;
$heatmap["ac20,out,rm219"] = 2;
$heatmap["ac20,in,gill's lab"] = 2;
$heatmap["wh40,in,rm504"] = 1;
$heatmap["wh40,in,rm311"] = 1;
$heatmap["wh40,in,rm310"] = 1;
$heatmap["wh40,in,rm308"] = 1;
$heatmap["wh40,in,rm304"] = 1;
$heatmap["wh40,in,rm210"] = 1;
$heatmap["wh30,in,rm404"] = 1;
$heatmap["wh30,in,rm320"] = 1;
$heatmap["wh30,in,rm308"] = 1;
$heatmap["oc00,out,in olin way"] = 1;
$heatmap["mh40,in,rm325"] = 1;
$heatmap["mh30,in,rm325"] = 1;
$heatmap["ehf0inrmf416"] = 1;
$heatmap["eh40,in,rm426a"] = 1;
$heatmap["eh40,in,rm306g"] = 1;
$heatmap["eh30,in,rm306h"] = 1;
$heatmap["cc15,in,other_stairway"] = 1;
$heatmap["cc10,out,outside"] = 1;
$heatmap["cc10,out,entry"] = 1;
$heatmap["ac40,out,rm406"] = 1;
$heatmap["ac40,in,rm415"] = 1;
$heatmap["ac30,out,rm305"] = 1;
$heatmap["ac30,out,middle"] = 1;
$heatmap["ac30,in,rm329"] = 1;
$heatmap["ac25,in,north"] = 1;
$heatmap["ac20,in,rm207"] = 1;


// This is data
$mapw = (int) $_GET['mapw'];
if (! $mapw) {echo 'no map'; exit;}


$debugShowHistory = false;
$historyInterval = 604800; //in seconds -- this is a week

if ($debugShowHistory)
$q = 'select users.username, point.mapx, point.mapy, point.placename from users inner join point on users.placename=point.placename where (unix_timestamp(NOW()) - unix_timestamp(users.lastupdated)<'.$historyInterval.') and point.mapw='.$mapw;
else
$q = 'select users.username, point.mapx, point.mapy, point.placename, users.lastupdated, users.icon from users inner join point on users.placename=point.placename where point.mapw='.$mapw . ' and (unix_timestamp(NOW()) - unix_timestamp(users.lastupdated)<'.$historyInterval.') order by users.lastupdated DESC';


$q = 'SELECT DISTINCT(placename),mapx,mapy FROM point WHERE mapw='.$mapw;
//~ $q = 'select users.username, point.mapx, point.mapy, point.placename from users inner join point on users.placename=point.placename where point.mapw='.$mapw;
list($res, $n) = DB($q);

$astr=array();
$usernames = array(); //Hash table containing usernames that have been used.
while ($arr = mysql_fetch_array($res))
{
	// $res is now a list of all points in the database
	
	// correlate these points to the data we have
	$thisPlace = strtolower($arr['placename']);
	$thisNum = $heatmap[$thisPlace];
	if (!$thisNum || $thisNum <= 0 || $thisNum == "")
	{
		$thisNum = 0;	
	}
	//echo $thisPlace . " > " . $thisNum . "<br>";

	// create an image that corresponds to this number of hits
	$heatSize = round(50 * $thisNum/$maxNum);
	if ($heatSize <= 0)
	{
		$heatSize = 5;
	}

//	$im = imagecreate($heatSize, $heatSize);
	$im = imagecreate(50, 50);
	$bgColor = imagecolorallocatealpha($im, 255, 255, 255, 127);
	$circleColor = imagecolorallocatealpha($im, 255, 0, 0, 40);
	imagefilledellipse($im, 25, 25, $heatSize, $heatSize, $circleColor);
	$icon = "heatmap/img" . $thisPlace . ".png";
	imagepng($im, $icon);
	$icon = "../" . $icon;
/*
	
	if (!$debugShowHistory)
	{
		if ($usernames[$arr['username']]) continue; //We have already recorded a point from that user. No duplicates.
		$usernames[$arr['username']] = 1;
	}
	$temp = ParseLocation($arr['placename']);
	$location = $temp[0];
	$floor = $temp[1];
	$usernameValue = $usernameArray[$arr['username']];
	if ($usernameValue == "")
	{
		$usernameValue = $arr['username'];
	}
	$icon = $arr['icon'];
	
	if ($icon == "")
	{
		//default icon
		$icon = "p.gif";
	} else
	{
		$icon = "../../" . $icon;
	}
	*/
	$usernameValue = $thisNum . " hits (" . sprintf("%.2f",$thisNum / $totalNum * 100) . "%)";
	$temp = ParseLocation($arr['placename']);
	$location = $temp[0];
	$floor = $temp[1];


	array_push($astr, $arr['mapx'].'|'.$arr['mapy'].'|'.$usernameValue.'|'.$location.'|'.date("Y-m-d H:i:00").'|'.$floor.'|'.$icon);

$str = implode(';',$astr);
}
echo 'success:' . $str;
//echo "success:74|411|Gray Thomas|Inside MH (LL) Library|2009-02-23 04:30:28|0|../../usericons/gthomas.gif;74|411|Matthew Alvarado|Inside MH (LL) Library|2009-02-23 04:08:26|0|p.gif;550|30|Raphael Cherney|Inside AC309|2009-02-23 03:32:08|3|p.gif;853|497|onionuser|Inside CCCresecent|2009-02-23 00:41:05|2|p.gif;586|44|Lindsay Kaye|Inside AC209|2009-02-22 14:52:31|2|p.gif;121|584|Zachary Newell|Inside MH325|2009-02-20 15:50:38|3|p.gif;650|60|Jayesh Gorasia|Inside AC413|2009-02-20 13:08:26|4|p.gif;884|194|Kevin Sihlanick|Inside AC128|2009-02-18 15:14:53|1|../../usericons/ksihlanick.gif;568|50|Laura Firstenberg|Inside AC409|2009-02-18 00:09:43|4|p.gif";

//echo "success:666|583|heatmap|Outside of EH 1st floor northwing|2009-02-18 05:09:43|1|../heatmap/imgeh10,out,northwing.png;526|601|heatmap|Inside EH 1st floor lounge|2009-02-18 00:09:43|1|../heatmap/imgeh10,in,lounge.png;455|655|heatmap|Outside of EH 1st floor eastwing|2009-02-18 00:09:43|1|../heatmap/imgeh10,out,eastwing.png";


function ParseLocation($location)
{
	
	// location strings look like WH,in,rm309
	$location = str_replace("OC", "MH", $location);
	$tempArray = explode(",", $location);
	$building = $tempArray[0];
	$inside = $tempArray[1];
	$description = $tempArray[2];
	
	$floorNum = substr($building, 2, 1);
	$building = substr($building, 0, 2);
	
	if ($inside == "in")
	{
		$inside = "inside";
	} elseif ($inside == "out")
	{
		$inside = "outside of";
	}

	if ($floorNum == "1")
	{
		$floor = "1st";
	} elseif ($floorNum == "2")
	{
		$floor = "2nd";
	} elseif ($floorNum == "3")
	{
		$floor = "3rd";
	} elseif ($floorNum == "4")
	{
		$floor = "4th";
	} elseif ($floorNum == "0")
	{
		$floor = "LL";
	}

	if (stripos($description, "rm") !== false || stripos($description, "room") !== false)
	{
		// this has a room
		$description = str_ireplace("rm", "", $description);
		$description = str_ireplace("room", "", $description);

		$location = $inside . " " . $building . $description;
	} else
	{
		if ($floor != "LL")
		{
			$location = $inside . " " . $building . " " . $floor . " floor " . $description;
		} else
		{
			$location = $inside . " " . $building . " (" . $floor . ") " . $description;
		}
	}
	
	$ret[0] = ucfirst($location);
	$ret[1] = $floorNum;
	return $ret;
}

function ParseUsername($username, $usernameArray)
{
	//change a username like "abarry" to "Andy Barry"
	
}



?>
