<?php
/**
*
* Posts Merging extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* Swedish translation by Holger (http://www.maskinisten.net)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_POSTS_MERGING'				=> 'Sammanslagning av inlägg',
	'ACP_POSTS_MERGING_EXPLAIN'		=> 'Här kan du ändra inställningarna för automatisk sammanslagning av inlägg.',
	'MERGE_INTERVAL'				=> 'Intervall för sammanslagning av inlägg',
	'MERGE_INTERVAL_EXPLAIN'		=> 'Om en medlem skickar fler än 2 på varandra följande inlägg inom denna tidsperiod så kommer dessa inlägg att läggas ihop till ett inlägg. Information om tiden mellan inläggen kommer att läggas till (för varje inlägg). Lämna fältet tomt eller ange 0 för att deaktivera sammanslagning av inlägg.',
	'MERGE_NO_TOPICS'				=> 'Uteslutna trådar',
	'MERGE_NO_TOPICS_EXPLAIN'		=> 'Komma-separerad lista med ämnes-IDn där sammanslagning ej bör utföras när denna funktion har aktiverats.',
	'MERGE_NO_FORUMS'				=> 'Uteslutna forum',
	'MERGE_NO_FORUMS_EXPLAIN'		=> 'Komma-separerad lista med forum-IDn där sammanslagning ej bör utföras när denna funktion har aktiverats.',
	'MERGE_SEPARATOR'				=> 'Separator',
	'MERGE_SEPARATOR_EXPLAIN'		=> 'Here you can configure the separator which will appear between the merged message parts.<br />You can use BBCodes which will be parsed in according to the board or message settings.<br /><br />You can also use any language string present in your language/ directory like this: {L_<em>&lt;STRINGNAME&gt;</em>} where <em>&lt;STRINGNAME&gt;</em> is the name of the translated string you want to add. For example, {L_WROTE} will be displayed as “wrote” or its translation according to user’s locale.<br /><br />Use <em>&#37;s</em> placeholder (once) to include the time passed between merging in the separator.',
));
