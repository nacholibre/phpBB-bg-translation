<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
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
	'PLUPLOAD_ADD_FILES'		=> 'Добави файлове',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Добави файлове в опашката и натиснете бутона започни',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s вече е в опашката.',
	'PLUPLOAD_CLOSE'			=> 'Затвори',
	'PLUPLOAD_DRAG'				=> 'Провлачи файлове тук.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Дуплициран файл',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Можете да прикачите файлове като ги провлачите тук.',
	'PLUPLOAD_ERR_INPUT'		=> 'Грешка при отваряне на входният поток.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Грешка при преместване на качените файлове ',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Грепка при отваряне на изходният поток',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Файлът е прекалено голмя:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Грешка бройка файлове.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Невалидно разширение:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Свърши отделената памет.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'URL адреса за качване е грешен или не съществува.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Грешка файлово разширение.',
	'PLUPLOAD_FILE'				=> 'Файл: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Файл: %s, размер: %d, максимален размер: %d',
	'PLUPLOAD_FILENAME'			=> 'Име на файл',
	'PLUPLOAD_FILES_QUEUED'		=> '%d файла в опашката',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Обща грешка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP грешка.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Формата на снимката е грешен или не се поддържа.',
	'PLUPLOAD_INIT_ERROR'		=> 'Грешка.',
	'PLUPLOAD_IO_ERROR'			=> 'IO грешна.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'няма',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Грешка в сигурността.',
	'PLUPLOAD_SELECT_FILES'		=> 'Избери файлове',
	'PLUPLOAD_SIZE'				=> 'Размер',
	'PLUPLOAD_SIZE_ERROR'		=> 'Грешка файл размер.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Започни качването',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Стартирай опашката',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Спри качването',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Спри сегашното качване',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Качени %d/%d файла',
));
