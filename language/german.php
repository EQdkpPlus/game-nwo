<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date: 2013-01-12 22:52:22 +0100 (Sa, 12. Jan 2013) $
 * -----------------------------------------------------------------------
 * @author		$Author: wallenium $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 12817 $
 * 
 * $Id: german.php 12817 2013-01-12 21:52:22Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(

	'classes' => array(
		0 => 'Unbekannt',
		1 => 'Zweihandwaffenkämpfer',
		2 => 'Glaubenskleriker',
		3 => 'Trickserschurke',
		4 => 'Taktischer Magier',
		5 => 'Beschützender Kämpfer',
		6 => 'Wachsamer Waldläufer',
	),
	
	'races' => array(
		'Unbekannt',
		'Drow',
		'Zwerg',
		'Waldelf',
		'Halb-Elf',
		'Halbling',
		'Mensch',
		'Tiefling',
		'Menzo-Abtrünnigen',
		'Mondelf',
		'Sonnenelf',
		'Halb-Orc',
	),

	'lang' => array(
		'nwo' => 'Neverwinter Online',
		'plate'	=> 'Platte',
		'scale' => 'Schuppenrüstung',
		'heavy' => 'Schwere Rüstung',
		'medium' => 'Leder',
		'light' => 'Stoff',	
		
		// profile additions
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
	),
	
);
?>