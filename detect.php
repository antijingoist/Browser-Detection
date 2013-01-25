<?php
// Keyword compilation over the years by Eugenia Loli-Queru
// Updated PHP code by Adam Scheinberg
// Use/modify as you please, but give attribution to the original authors.

// Being modified by Abelardo Gonzalez Jr.
// To make more efficient. Original at http://osnews.com

$agent = getenv("HTTP_USER_AGENT");
$Browser="OTHER"; 

// This function exists like this just so to easily
// replace our old preg_match() way of doing things.
function istr($n,$h) { 
	return stristr($h,$n); 
}

// The main keywords captured
if (istr("Dillo", $agent)) { $Browser = "Dillo"; }
if (istr("MIDP-", $agent)) { $Browser = "MIDP-"; }
if (istr("Ericsson", $agent)) { $Browser = "Ericsson"; }
if (istr("SonyEricsson", $agent)) { $Browser = "SonyEricsson"; }
if (istr("AvantGo", $agent)) { $Browser = "AvantGo"; }
if (istr("ATTWS", $agent)) { $Browser = "ATTWS"; }
if (istr("i-mode", $agent)) { $Browser = "i-mode"; }
if (istr("SEC-", $agent)) { $Browser = "SEC-"; }
if (istr("R600", $agent)) { $Browser = "R600"; }
if (istr("R380", $agent)) { $Browser = "R380"; }
if (istr("PHILIPS", $agent)) { $Browser = "PHILIPS"; }
if (istr("Obigo", $agent)) { $Browser = "Obigo"; }
if (istr("Panasonic", $agent)) { $Browser = "Panasonic"; }
if (istr("SEC-SGH", $agent)) { $Browser = "SEC-SGH"; }
if (istr("SHARP-", $agent)) { $Browser = "SHARP-"; }
if (istr("Sendo", $agent)) { $Browser = "Sendo"; }
if (istr("TSM-", $agent)) { $Browser = "TSM-"; }
if (istr("Wapalizer", $agent)) { $Browser = "Wapalizer"; }
if (istr("Wapsilon", $agent)) { $Browser = "Wapsilon"; }
if (istr("Widcomm BtSendto", $agent)) { $Browser = "Widcomm BtSendto"; }
if (istr("WinWAP-PRO", $agent)) { $Browser = "WinWAP-PRO"; }
if (istr("Siemens", $agent)) { $Browser = "Siemens"; }
if (istr("ATTWS", $agent)) { $Browser = "ATTWS"; }
if (istr("Google WAP Proxy", $agent)) { $Browser = "Google WAP Proxy"; }
if (istr("BENQ-", $agent)) { $Browser = "BENQ-"; }
if (istr("EZOS", $agent)) { $Browser = "EZOS"; }
if (istr("IAC", $agent)) { $Browser = "IAC"; }
if (istr("Mitsu", $agent)) { $Browser = "Mitsu"; }
if (istr("Motorola-", $agent)) { $Browser = "Motorola-"; }
if (istr("Cellphone", $agent)) { $Browser = "Cellphone"; }
if (istr("MMEF", $agent)) { $Browser = "MMEF"; }
if (istr("PANTECH", $agent)) { $Browser = "PANTECH"; }
if (istr("PHILIPS", $agent)) { $Browser = "PHILIPS"; }
if (istr("R600", $agent)) { $Browser = "R600"; }
if (istr("WAPPER", $agent)) { $Browser = "WAPPER"; }
if (istr("Sunrise", $agent)) {  if (!istr("SunriseBrowser", $agent))  { $Browser = "Sunrise"; }}
if (istr("Smartphone", $agent)) { $Browser = "Smartphone"; }
if (istr("SAGEM", $agent)) { $Browser = "SAGEM"; }
if (istr("SIE-", $agent)) { $Browser = "SIE-"; }
if (istr("PHILIPS-", $agent)) { $Browser = "PHILIPS-"; }
if (istr("NEC-", $agent)) { $Browser = "NEC-"; }
if (istr("MOT-", $agent)) { $Browser = "MOT-"; }
if (istr("LGE-", $agent)) { $Browser = "LGE-"; }
if (istr("LG-", $agent)) { $Browser = "LG-"; }
if (istr("Alcatel", $agent)) { $Browser = "Alcatel"; }
if (istr("Arachne", $agent)) { $Browser = "Arachne"; }
if (istr("KBrowser", $agent)) { $Browser = "KBrowser"; }
if (istr("Windows CE", $agent)) { $Browser = "Windows CE"; }
if (istr("WebTV", $agent)) { $Browser = "WebTV"; }
if (istr("EPOC", $agent)) { $Browser = "EPOC"; }
if (istr("Minimo", $agent)) { $Browser = "Minimo"; $handheld = "yes";}
if (istr("PS2-PTV", $agent)) { $Browser = "PS2-PTV"; }
if (istr("Interactor", $agent)) { $Browser = "Interactor"; }
if (istr("Webster", $agent)) { $Browser = "Webster"; }
if (istr("ANTFresco", $agent)) { $Browser = "ANTFresco"; }
if (istr("ArcWeb", $agent)) { $Browser = "ArcWeb"; }
if (istr("Netgem", $agent)) { $Browser = "Netgem"; }
if (istr("Sophia", $agent)) { $Browser = "Sophia"; }
if (istr("opentv", $agent)) { $Browser = "opentv"; }
if (istr("Vagabond", $agent)) { if (!istr("Vagabondo", $agent)) {$Browser = "Vagabond"; } }
if (istr("DoCoMo", $agent)) { $Browser = "DoCoMo"; }
if (istr("sharp_pda_browser", $agent)) { $Browser = "sharp_pda_browser"; }
if (istr("DreamPassport", $agent)) { $Browser = "DreamPassport"; }
if (istr("SEGA", $agent)) { $Browser = "SEGA"; }
if (istr("CRI-Browser", $agent)) { $Browser = "CRI-Browser"; }
if (istr("Planetweb", $agent)) { $Browser = "Planetweb"; }
if (istr("DreamKey", $agent)) { $Browser = "DreamKey"; }
if (istr("Sonybrowser", $agent)) { $Browser = "Sonybrowser"; }
if (istr("PocketIE", $agent)) { $Browser = "PocketIE"; }
if (istr("Nokia-Communicator-WWW-Browser", $agent)) { $Browser = "Nokia-Communicator-WWW-Browser"; }
if (istr("OWF", $agent)) { $Browser = "OWF"; }
if (istr("Acorn", $agent)) { $Browser = "Acorn"; }
if (istr("portalmmm", $agent)) { $Browser = "portalmmm"; }
if (istr("ACS-NF", $agent)) { $Browser = "ACS-NF"; }
if (istr("NEC-", $agent)) { $Browser = "NEC-"; }
if (istr("KDDI", $agent)) { $Browser = "KDDI"; }
if (istr("Oregano", $agent)) { $Browser = "Oregano"; }
if (istr("WebsterXL", $agent)) { $Browser = "WebsterXL"; }
if (istr("Atari", $agent)) { $Browser = "Atari"; }
if (istr("iSiloWeb", $agent)) { $Browser = "iSiloWeb"; }
if (istr("EudoraWeb", $agent)) { $Browser = "EudoraWeb"; }
if (istr("Xiino", $agent)) { $Browser = "Xiino"; }
if (istr("Nokia", $agent)) { $Browser = "NokiaPhone"; }
if (istr("Plucker", $agent)) { $Browser = "Plucker"; }
if (istr("embedix", $agent)) { $Browser = "embedix"; }
if (istr("ELinks", $agent)) { $Browser = "ELinks"; }
if (istr("textmode", $agent)) { $Browser = "textmode"; }
if (istr("BlackBerr", $agent)) { $Browser = "BlackBerr"; }
if (istr("NCSA_Mosaic", $agent)) { $Browser = "NCSA_Mosaic"; }
if (istr("JPluck", $agent)) { $Browser = "JPluck"; }
if (istr("HotJava", $agent)) { $Browser = "HotJava"; }
if (istr("ALynx", $agent)) { $Browser = "ALynx"; }
if (istr("iSilo", $agent)) { $Browser = "iSilo"; }
if (istr("OPWV", $agent)) { $Browser = "OPWV"; }
if (istr("lynx", $agent)) { $Browser = "lynx"; }
if (istr("Links", $agent)) { if (!istr("NewsGator", $agent) && !istr("findlinks", $agent)) { $Browser = "Links";} }
if (istr("w3m", $agent)) { $Browser = "w3m"; }
if (istr("GeOS", $agent))  {  if (!istr("Geoscience", $agent))  { $Browser = "GeOS"; }}
if (istr("Symbian", $agent)) { $Browser = "Symbian"; }
if (istr("AU-MIC", $agent)) { $Browser = "AU-MIC"; }
if (istr("ReqwirelessWeb", $agent)) { $Browser = "ReqwirelessWeb"; }
if (istr("ICE Browser", $agent)) { $Browser = "ICE Browser"; }
if (istr("amaya", $agent)) { $Browser = "amaya"; }
if (istr("Elaine", $agent)) { $Browser = "Elaine"; }
if (istr("Danger", $agent)) { $Browser = "Danger"; }
if (istr("armv", $agent)) { $Browser = "armv"; }
if (istr("Qtopia", $agent)) { $Browser = "Qtopia"; }
if (istr("Qt Embedded", $agent)) { $Browser = "Qt Embedded"; }
if (istr("MobilePhone", $agent)) { $Browser = "MobilePhone"; }
if (istr("NeXTSTEP", $agent)) { $Browser = "NeXTSTEP"; }
if (istr("PDA", $agent)) { $Browser = "PDA"; }
if (istr("WenSuite", $agent)) { $Browser = "WenSuite"; }
if (istr("WorldWideWeb", $agent)) { $Browser = "WorldWideWeb"; }
if (istr("Contiki", $agent)) { $Browser = "Contiki"; }
if (istr("Cyberdog", $agent)) { $Browser = "Cyberdog"; }
if (istr("ThunderHawk", $agent)) { $Browser = "ThunderHawk"; }
if (istr("Bitstream", $agent)) { $Browser = "Bitstream"; }
if (istr("ftxPBrowser", $agent)) { $Browser = "ftxPBrowser"; }
if (istr("ThunderHawk", $agent)) { $Browser = "ThunderHawk"; }
if (istr("SAMSUNG", $agent)) { $Browser = "SAMSUNG"; }
if (istr("Airmax", $agent)) { $Browser = "Airmax"; }
if (istr("KDDI-S", $agent)) { $Browser = "KDDI"; }
if (istr("Acorn-Browse", $agent)) { $Browser = "Acorn-Browse"; }
if (istr("Palm OS", $agent)) { $Browser = "Palm OS";}
if (istr("WebPro", $agent)) { $Browser = "WebPro";}
if (istr("NetFront", $agent)) { $Browser = "NetFront";}
if (istr("Blazer", $agent)) { $Browser = "Blazer"; }
if (istr("PalmOS", $agent)) { $Browser = "PalmOS";}
if (istr("PalmSource", $agent)) { $Browser = "PalmSource"; }
if (istr("Telit-", $agent)) { $Browser = "Telit-"; }
if (istr("TELME", $agent)) { $Browser = "TELME"; }
if (istr("neomode", $agent)) { $Browser = "neomode"; }
if (istr("chea", $agent)) { $Browser = "chea"; }
if (istr("INNO", $agent)) { $Browser = "INNO"; }
if (istr("Kyocera", $agent)) { $Browser = "Kyocera"; }
if (istr("Maxon", $agent)) { $Browser = "Maxon"; }
if (istr("KPT", $agent)) { $Browser = "KPT"; }
if (istr("IRIS-", $agent)) { $Browser = "IRIS-"; }
if (istr("MODOTTEL", $agent)) { $Browser = "MODOTTEL"; }
if (istr("Vitelcom", $agent)) { $Browser = "Vitelcom"; }
if (istr("TSM-", $agent)) { $Browser = "TSM-"; }
if (istr("WIG Browser", $agent)) { $Browser = "WIG Browser"; }
if (istr("KGT", $agent)) { $Browser = "KGT"; }
if (istr("MobileExplorer", $agent)) { $Browser = "MobileExplorer"; }
if (istr("Rover", $agent)) { $Browser = "Rover"; }
if (istr("Benefon", $agent)) { $Browser = "Benefon"; }
if (istr("Sewon", $agent)) { $Browser = "Sewon"; }
if (istr("Haier", $agent)) { $Browser = "Haier"; }
if (istr("EzWAP", $agent)) { $Browser = "EzWAP"; }
if (istr("ERICY", $agent)) { $Browser = "ERICY"; }
if (istr("AUDIOVOX", $agent)) { $Browser = "AUDIOVOX"; }
if (istr("CDM-", $agent)) { $Browser = "CDM-"; }
if (istr("RIM9", $agent)) { $Browser = "RIM9"; }
if (istr("Go.Web", $agent)) { $Browser = "Go.Web"; }
if (istr("AU\/", $agent)) { $Browser = "AU"; }
if (istr("Vodafone", $agent)) { $Browser = "Vodafone"; }
if (istr("Compal", $agent)) { $Browser = "Compal"; }
if (istr("Klondike", $agent)) { $Browser = "Klondike"; }
if (istr("Scooter", $agent)) { $Browser = "Scooter"; }
if (istr("Skweezer", $agent)) { $Browser = "Skweezer"; }
if (istr("SCEJ PSP", $agent)) { $Browser = "SCEJ PSP"; }
if (istr("PlayStation", $agent)) { $Browser = "PlayStation"; }
if (istr("TCL-", $agent)) { $Browser = "TCL-"; }
if (istr("Xplore", $agent)) {  if (!istr("Internet Explorer", $agent)) { $Browser = "Xplore"; }}
if (istr("Escape", $agent)) {  if (!istr("Macintosh", $agent))  { $Browser = "Escape"; }}
if (istr("LG\/U", $agent)) { $Browser = "LG/U"; }
if (istr("Lenovo", $agent)) { $Browser = "Lenovo"; }
if (istr("LGE\/U", $agent)) { $Browser = "LGE/U"; }
if (istr("NEWGEN-", $agent)) { $Browser = "NEWGEN-"; }
if (istr("PT-G", $agent)) { $Browser = "PT-G"; }
if (istr("Sanyo", $agent)) { $Browser = "Sanyo"; }
if (istr("SCH-", $agent)) { $Browser = "SCH-"; }
if (istr("SGH-", $agent)) { $Browser = "SGH-"; }
if (istr("SEC-", $agent)) { $Browser = "SEC-"; }
if (istr("Siemens-", $agent)) { $Browser = "Siemens-"; }
if (istr("TDG-", $agent)) { $Browser = "TDG-"; }
if (istr("TELLME_", $agent)) { $Browser = "TELLME_"; }
if (istr("Tellit-", $agent)) { $Browser = "Tellit-"; }
if (istr("Snoopy", $agent)) { $Browser = "Snoopy"; }
if (istr("Sky MobileMedia", $agent)) { $Browser = "Sky MobileMedia"; }
if (istr("TMT Mobile Internet Browser", $agent)) { $Browser = "TMT Mobile Internet Browser"; }
if (istr("ZTE-", $agent)) { $Browser = "ZTE-"; }
if (istr("KONKA", $agent)) { $Browser = "KONKA"; }
if (istr("CECT", $agent)) { $Browser = "CECT"; }
if (istr("Arima", $agent)) { $Browser = "Arima"; }
if (istr("DAXIAN", $agent)) { $Browser = "DAXIAN"; }
if (istr("DBTEL", $agent)) { $Browser = "DBTEL"; }
if (istr("EASTCOM", $agent)) { $Browser = "EASTCOM"; }
if (istr("Dopod", $agent)) { $Browser = "Dopod"; }
if (istr("kejian", $agent)) { $Browser = "kejian"; }
if (istr("Soutec", $agent)) { $Browser = "Soutec"; }
if (istr("E715", $agent)) { $Browser = "E715"; }
if (istr("SED-", $agent)) { $Browser = "SED-"; }
if (istr("Capitel", $agent)) { $Browser = "Capitel"; }
if (istr("Amoi", $agent)) { $Browser = "Amoi"; }
if (istr("EMOL", $agent)) { $Browser = "EMOL"; }
if (istr("PANDA", $agent)) { $Browser = "PANDA"; }
if (istr("Novarra", $agent)) { $Browser = "Novarra"; }
if (istr("GoWeb", $agent)) { $Browser = "GoWeb"; }
if (istr("neomar", $agent)) { $Browser = "neomar"; }
if (istr("nweb", $agent)) { $Browser = "nweb"; }
if (istr("ibisBrowser", $agent)) { $Browser = "ibisBrowser"; }
if (istr("Nintendo", $agent)) { $Browser = "Nintendo"; }
if (istr("Nitro", $agent)) { $Browser = "Nitro"; }
if (istr("Helio", $agent)) { $Browser = "Helio"; }
if (istr("Google Wireless Transcoder", $agent)) { $Browser = "GWT"; }
if (istr("Syabas", $agent)) { $Browser = "Syabas"; }
if (istr("Huawei", $agent)) { $Browser = "Huawei"; }
if (istr("i-mobile", $agent)) { $Browser = "i-mobile"; }
if (istr("Minuet", $agent)) { $Browser = "Minuet"; }
if (istr("Universe", $agent)) { $Browser = "Universe"; }
if (istr("xbox", $agent)) { $Browser = "xbox"; }
if (istr("JRC\//", $agent)) { $Browser = "JRC"; }
if (istr("Archos", $agent)) { $Browser = "Archos"; }
if (istr("MediaHighway", $agent)) { $Browser = "MediaHighway"; }
if (istr("WILLCOM", $agent)) { $Browser = "WILLCOM"; }
if (istr("L-Mode", $agent)) { $Browser = "L-Mode"; }
if (istr("phonifier", $agent)) { $Browser = "phonifier"; }
if (istr("NGB", $agent)) { $Browser = "Helio"; }
if (istr("iPod", $agent)) { $Browser = "iPod"; }
if (istr("iPhone", $agent)) { $Browser = "iPhone"; }
if (istr("iPad", $agent)) { $Browser = "iPad"; }
if (istr("Android", $agent)) { $Browser = "Android"; }
if (istr($agent, "Fennec")) { $Browser = "Fennec"; }
if (istr($agent, "TeaShark")) { $Browser = "TeaShark"; }
if (istr($agent, "Skyfire")) { $Browser = "Skyfire"; }
if (istr("/Bolt\//i", $agent)) { $Browser = "Bolt"; }
if (istr("webOS", $agent)) { $Browser = "webOS"; }
if (istr("Kindle Fire", $agent)) { $Browser = "KindleFire"}

// Autodetect according to resolution reported
if (istr("320x200", $agent)) { $Browser = "320x200"; }
if (istr("240x320", $agent)) { $Browser = "240x320"; }
if (istr("320x240", $agent)) { $Browser = "320x240"; }
if (istr("160x120", $agent)) { $Browser = "160x120"; }
if (istr("640x480", $agent)) { $Browser = "640x480"; }
if (istr("360x640", $agent)) { $Browser = "360x640"; }
if (istr("640x360", $agent)) { $Browser = "640x360"; }
if (istr("640x240", $agent)) { $Browser = "640x240"; }
if (istr("320x480", $agent)) { $Browser = "320x480"; }
if (istr("480x640", $agent)) { $Browser = "480x640"; }
if (istr("320x320", $agent)) { $Browser = "320x320"; }
if (istr("160x160", $agent)) { $Browser = "160x160"; }
if (istr("176x220", $agent)) { $Browser = "176x220"; }
if (istr("160x220", $agent)) { $Browser = "160x220"; }
if (istr("120x120", $agent)) { $Browser = "120x120"; }
if (istr("120x160", $agent)) { $Browser = "120x160"; }
if (istr("584x", $agent)) { $Browser = "584x"; }
if (istr("512x", $agent)) { $Browser = "512x"; }

// Automatically redirect to your WAP site the WAP-only browsers
/*
if (istr("UP.Browser", $agent)) { 
	if (istr("UP\.Browser\/[45]", $agent)) { header("Location: http://wap.MYSITE.com/index.wml"); exit; 
	} else { $Browser = "UP.Browser"; }
}
*/

/*
if (istr("AnnyWay", $agent) || istr("ccWAP-Browser", $agent) || istr("Mitsu", $agent) || istr("PALM WAPPER", $agent) || istr("Jataayu", $agent) || istr("WapRunner", $agent) || istr("jBrowserr", $agent) || istr("WapView", $agent) || istr("Wapaka", $agent) || istr("Waptor", $agent) || istr("WinWAP", $agent) || istr("Pollex", $agent) ) { 
	header("Location: http://wap.MYSITE.com/index.wml"); exit;
}
*/
// Opera Mini check
if (istr("Opera Mini", $agent)) { $Browser = "Opera Mini"; $handheld = "yes"; }

// These phones can only display up to 12KBs of data
//so you might want to move them to the WAP-only site.
if (istr("J-PHONE", $agent)) { $Browser = "J-PHONE"; }

// Workaround for Opera's ugly SSR feature
if ($Browser!="OTHER") {  if (istr("Opera", $agent)) { $handheld = "yes"; } }

// Workaround for crawlers that happen to get caught by the keywords
if (istr("OmniExplorer", $agent)) { $Browser = "OTHER"; }
if (istr("Deepnet Explorer", $agent)) { $Browser = "OTHER"; }
if (istr("SP1 Administrative", $agent)) { $Browser = "OTHER"; }
if (istr("crawler", $agent)) { $Browser = "OTHER"; }
if (istr("Mediacom", $agent)) { $Browser = "OTHER"; }
if (istr("FunWebProducts", $agent)) { $Browser = "OTHER"; }
if (istr("Thunderbird", $agent)) { $Browser = "OTHER"; }
if (istr("Media Center", $agent)) { $Browser = "OTHER"; }
if (istr("MediaCenter", $agent)) { $Browser = "OTHER"; }
if (istr("Firefox", $agent)) {  if (!istr("armv5te", $agent)) { $Browser = "OTHER"; }}
if (istr("FiReflowfox", $agent)) { $Browser = "OTHER"; }
if (istr("MacNewz", $agent)) { $Browser = "OTHER"; }
if (istr("atlinks.jp", $agent)) { $Browser = "OTHER"; }
if (istr("htpdate", $agent)) { $Browser = "OTHER"; }
if (istr("CacheabilityEngine", $agent)) { $Browser = "OTHER"; }
if (istr("OfficeLiveConnector", $agent)) { $Browser = "OTHER"; }
if (istr("OfficeLivePatch", $agent)) { $Browser = "OTHER"; }
if (istr("InfoPath", $agent)) { $Browser = "OTHER"; }

?>