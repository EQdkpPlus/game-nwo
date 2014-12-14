<?php
/*	Project:	EQdkp-Plus
 *	Package:	Neverwinter online game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Zweihandwaffenkämpfer',
		2	=> 'Glaubenskleriker',
		3	=> 'Trickserschurke',
		4	=> 'Taktischer Magier',
		5	=> 'Beschützender Kämpfer',
		6	=> 'Wachsamer Waldläufer',
	),
	
	'races' => array(
		0	=> 'Unbekannt',
		1	=> 'Drow',
		2	=> 'Zwerg',
		3	=> 'Waldelf',
		4	=> 'Halb-Elf',
		5	=> 'Halbling',
		6	=> 'Mensch',
		7	=> 'Tiefling',
		8	=> 'Menzo-Abtrünnigen',
		9	=> 'Mondelf',
		10	=> 'Sonnenelf',
		11	=> 'Halb-Orc',
	),

	'lang' => array(
		'nwo'							=> 'Neverwinter Online',
		'plate'							=> 'Platte',
		'scale'							=> 'Schuppenrüstung',
		'heavy'							=> 'Schwere Rüstung',
		'medium'						=> 'Leder',
		'light'							=> 'Stoff',	
		
		// profile additions
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',
	),	
);
?>