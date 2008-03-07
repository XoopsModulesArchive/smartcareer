<?php
/**
* $Id$
* Module: SmartCareer
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

$i = -1;

$i++;
$adminmenu[$i]['title'] = _MI_SCAREER_APPLICATIONS;
$adminmenu[$i]['link'] = "admin/application.php";

$i++;
$adminmenu[$i]['title'] = _MI_SCAREER_POSTINGS;
$adminmenu[$i]['link'] = "admin/posting.php";

$i++;
$adminmenu[$i]['title'] = _MI_SCAREER_USERS;
$adminmenu[$i]['link'] = "admin/user.php";

$i++;
$adminmenu[$i]['title'] = _MI_SCAREER_SEARCH;
$adminmenu[$i]['link'] = "admin/search.php";
$i++;
$adminmenu[$i]['title'] = _MI_SCAREER_STATS;
$adminmenu[$i]['link'] = "admin/stats.php";

if (isset($xoopsModule)) {

	$i = -1;

	$i++;
	$headermenu[$i]['title'] = _PREFERENCES;
	$headermenu[$i]['link'] = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $xoopsModule->getVar('mid');

	$i++;
	$headermenu[$i]['title'] = _CO_SOBJECT_GOTOMODULE;
	$headermenu[$i]['link'] = SMARTCAREER_URL;

	$i++;
	$headermenu[$i]['title'] = _CO_SOBJECT_UPDATE_MODULE;
	$headermenu[$i]['link'] = XOOPS_URL . "/modules/system/admin.php?fct=modulesadmin&op=update&module=" . $xoopsModule->getVar('dirname');

	$i++;
	$headermenu[$i]['title'] = _AM_SOBJECT_ABOUT;
	$headermenu[$i]['link'] = SMARTCAREER_URL . "admin/about.php";
}
?>
