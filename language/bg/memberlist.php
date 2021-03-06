<?php
/**
*
* memberlist [Bulgarian]
*
* @package language
* @version $Id: memberlist.php 8574 2008-05-29 13:59:47Z nacholibre $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Най-активен във форум',
	'ACTIVE_IN_TOPIC'		=> 'Най-активна тема',
	'ADD_FOE'				=> 'Добави враг',
	'ADD_FRIEND'			=> 'Добави приятел',
	'AFTER'					=> 'След',

	'ALL'					=> 'Всички',

	'BEFORE'				=> 'Преди',

	'CC_SENDER'				=> 'Изпрати копие до себе си.',
	'CONTACT_ADMIN'			=> 'Свържете се с администратора',

	'DEST_LANG'				=> 'Език',
	'DEST_LANG_EXPLAIN'		=> 'Избери подходящ език за получателя на това съобщение.',

	'EDIT_PROFILE'			=> 'Промени профил',

	'EMAIL_BODY_EXPLAIN'	=> 'Съобщението ще бъде изпратено като текст, без HTML и BBCode.',
	'EMAIL_DISABLED'		=> 'Всички функции свързани с email-a са изключени',
	'EMAIL_SENT'			=> 'Email-a беше изпратен.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Съобщението ще бъде изпратено като текст, без HTML и BBCode.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Адреса на получателя трябва да е валиден.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Трябва да въведете съобщение.',
	'EMPTY_MESSAGE_IM'      => 'Трябва да въведете съобщение.',
	'EMPTY_NAME_EMAIL'		=> 'Трябва да въведете реално име на получателя.',
	'EMPTY_SENDER_EMAIL'	=> 'Трябва да предоставите валиде имейл адрес.',
	'EMPTY_SENDER_NAME'		=> 'Трябва да предоставите име.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Трябва да въведете заглавие на email-а.',
	'EQUAL_TO'				=> 'Равно на',

	'FIND_USERNAME_EXPLAIN'	=> 'Използвай тази форма за търсене на потребители. Не е задължително да попълваш всички полета. Можеш да използваш * като маска. Когато въвеждаш дати използвай формата <kbd>YYYY-MM-DD</kbd>, пример <samp>2004-02-29</samp>. Използвай чекбоксовете за да избереш един или повече имена.',
	'FLOOD_EMAIL_LIMIT'		=> 'Вие не можете да изпратите още един email. Опитайте по късно.',

	'GROUP_LEADER'			=> 'Лидер на групата',

	'HIDE_MEMBER_SEARCH'	=> 'Скрии търсенето на потребител',

	'IM_ADD_CONTACT'		=> 'Добави контакт',
	'IM_DOWNLOAD_APP'		=> 'Свали',
	'IM_JABBER'				=> 'Важно! Потребителят може да е забранил получаването на съобщения от форуми.',
	'IM_JABBER_SUBJECT'		=> 'Това е автоматично генерирано съобщение, моля не отговаряйте! Съобщение от %1$s на %2$s',
	'IM_MESSAGE'			=> 'Вашето съобщение',
	'IM_NAME'				=> 'Вашето име',
	'IM_NO_DATA'         => 'Няма информация за потребителя.',
	'IM_NO_JABBER'			=> 'Директното изпращане на съобщения до Jabber потребители не се поддържа.',
	'IM_RECIPIENT'			=> 'Получател',
	'IM_SEND'				=> 'Изпрати',
	'IM_SEND_MESSAGE'		=> 'Изпрати',
	'IM_SENT_JABBER'		=> 'Съобщението до %1$s беше изпратено успешно.',
	'IM_USER'				=> 'Изпрати бързо съобщение',

	'LAST_ACTIVE'				=> 'Последно активен',
	'LESS_THAN'					=> 'По-малко от',
	'LIST_USERS'				=> array(
		1	=> '%d потребител',
		2	=> '%d потребителя',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да преглеждате списъците на екипите.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да имате достъп до листата с потребителите.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да търсите потребители.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да преглеждате профили.',

	'MANAGE_GROUP'			=> 'Управление на групата',
	'MORE_THAN'				=> 'Повече от',

	'NO_CONTACT_FORM'		=> 'Формата за връзка е изключена.',
	'NO_CONTACT_PAGE'		=> 'Страницата за връзка е изключена.',
	'NO_EMAIL'				=> 'Вие нямате право да изпращате email до този потребители.',
	'NO_VIEW_USERS'			=> 'Вие не можете да преглеждате профилите на потребителите.',

	'ORDER'					=> 'Тип',
	'OTHER'					=> 'Друг',

	'POST_IP'				=> 'IP/домейн',

	'REAL_NAME'				=> 'Име на получателя',
	'RECIPIENT'				=> 'Получател',
	'REMOVE_FOE'			=> 'Изтрий врага',
	'REMOVE_FRIEND'			=> 'Изтрий приятел',

	'SELECT_MARKED'			=> 'Избери маркираните',
	'SELECT_SORT_METHOD'	=> 'Избери сортиращ метод',
	'SEND_ICQ_MESSAGE'		=> 'Изпрати ICQ съобщение',
	'SENDER_EMAIL_ADDRESS'	=> 'Твоят имейл адрес',
	'SENDER_NAME'			=> 'Твоето име',
	'SEND_IM'				=> 'Бързо съобщение',
	'SEND_JABBER_MESSAGE'	=> 'Изпрати Jabber съобщение',
	'SEND_MESSAGE'			=> 'Съобщение',
	'SEND_YIM_MESSAGE'		=> 'Изпрати YIM съобщение',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Последно активен',
	'SORT_POST_COUNT'		=> 'Брой мнения',

	'USERNAME_BEGINS_WITH'	=> 'Име започващо с',
	'USER_ADMIN'			=> 'Администрирай',
	'USER_BAN'				=> 'Банване',
	'USER_FORUM'			=> 'Статистика',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Няма изпратени бележки в момента',
		1		=> '%1$d бележка изпратена<br />» %2$s',
		2		=> '%1$d бележки изпратени<br />» %2$s',
	),
	'USER_ONLINE'			=> 'На линия',
	'USER_PRESENCE'			=> 'Присъствие',
    'USERS_PER_PAGE'        => 'Потребители на страница',


	'VIEWING_PROFILE'		=> 'Преглеждане на профил - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Виж Facebook профила',
	'VIEW_SKYPE_PROFILE'	=> 'Виж Skype профил',
	'VIEW_TWITTER_PROFILE'	=> 'Виж Twitter профил',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Виж Youtube профил',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Виж Google+ профил',
));
