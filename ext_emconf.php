<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "feuser_logout".
 *
 * Auto generated 18-03-2014 22:15
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Frontend-user logout',
	'description' => 'Create content to logout a frontent-user and redirect to loginpage',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.1.3',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Juergen Furrer',
	'author_email' => 'juergen.furrer@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.3.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:13:{s:12:"ext_icon.gif";s:4:"a9e4";s:17:"ext_localconf.php";s:4:"db82";s:14:"ext_tables.php";s:4:"a45c";s:28:"ext_typoscript_constants.txt";s:4:"a6b7";s:24:"ext_typoscript_setup.txt";s:4:"574f";s:13:"locallang.xml";s:4:"d373";s:16:"locallang_db.xml";s:4:"9c82";s:14:"doc/manual.sxw";s:4:"e588";s:14:"pi1/ce_wiz.gif";s:4:"1604";s:33:"pi1/class.tx_feuserlogout_pi1.php";s:4:"f0b0";s:41:"pi1/class.tx_feuserlogout_pi1_wizicon.php";s:4:"8677";s:13:"pi1/clear.gif";s:4:"cc11";s:17:"pi1/locallang.xml";s:4:"8498";}',
	'suggests' => array(
	),
);

?>