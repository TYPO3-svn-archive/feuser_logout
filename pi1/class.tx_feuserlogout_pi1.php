<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Juergen Furrer <juergen.furrer@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

/**
 * Plugin 'Frontend-user logout' for the 'feuser_logout' extension.
 *
 * @author	Juergen Furrer <juergen.furrer@gmail.com>
 * @package	TYPO3
 * @subpackage	tx_feuserlogout
 */
class tx_feuserlogout_pi1 extends tslib_pibase
{
	public $prefixId      = 'tx_feuserlogout_pi1';
	public $scriptRelPath = 'pi1/class.tx_feuserlogout_pi1.php';
	public $extKey        = 'feuser_logout';
	public $pi_checkCHash = true;

	/**
	 * The main method of the PlugIn
	 *
	 * @param	string		$content: The PlugIn content
	 * @param	array		$conf: The PlugIn configuration
	 * @return	The content that is displayed on the website
	 */
	public function main($content, $conf)
	{
		$this->conf = $conf;
		$this->pi_setPiVarDefaults();
		$this->pi_loadLL();
		// Logoff the user
		$GLOBALS['TSFE']->fe_user->logoff();
		$GLOBALS['TSFE']->loginUser = 0;
		// create the link for redirect
		$logoutPid = $this->cObj->stdWrap($this->conf['logoutPid'], $this->conf['logoutPid.']);
		$link = $this->pi_getPageLink($logoutPid, '', array());
		$url = t3lib_div::locationHeaderUrl($link);
		// header for redirect
		t3lib_utility_Http::redirect($url);
		exit();
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/feuser_logout/pi1/class.tx_feuserlogout_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/feuser_logout/pi1/class.tx_feuserlogout_pi1.php']);
}
?>