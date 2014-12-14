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
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Great Weapon Fighter',
		2	=> 'Devoted Cleric',
		3	=> 'Trickster Rogue',
		4	=> 'Control Wizard',
		5	=> 'Guardian Fighter',
		6	=> 'Hunter Ranger',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Drow',
		2	=> 'Dwarf',
		3	=> 'Wood Elf',
		4	=> 'Half Elf',
		5	=> 'Halfling',
		6	=> 'Human',
		7	=> 'Tiefling',
		8	=> 'Menzoberranzan Renegade',
		9	=> 'Moon Elf',
		10	=> 'Sun Elf',
		11	=> 'Half Orc',
	),

	'lang' => array(
		'nwo'							=> 'Neverwinter Online',
		'plate'							=> 'Plate',
		'scale'							=> 'Scale',
		'heavy'							=> 'Heavy',
		'medium'						=> 'Leather',
		'light'							=> 'Cloth',	
		
		// profile additions
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',
	),
);
?>