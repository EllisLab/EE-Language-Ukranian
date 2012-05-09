<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
На Вашу розсилку підписався новий читач
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Прийнята нова підписка на розсилку.

Адреса електронної Пошти: {email}
Список Розсилки: {mailing_list}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Додано новий запис в блог
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Доданий новий запис в наступний блог:
{weblog_name}

Назва запису:
{entry_title}

Додано: {name}
Email: {email}

Для прочитання перейдіть по посиланню: 
{entry_url}

EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Повідомлення про реєстрацію нового користувача
EOF;
}

function admin_notify_reg()
{
return <<<EOF
Зареєстрований новий користувач: {name}

На сайті: {site_name}

Адреса Вашої панелі управління: {control_panel_url}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Новий коментар
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Новий коментар в блозі:
{weblog_name}

Назва запису:
{entry_title}

Посилання: 
{comment_url}

Додано: {name}
Email: {email}
URL: {url}
Місцезнаходження: {location}

{comment}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Новий трекбек
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Поступив трекбек до наступного запису:
{entry_title}

Посилання: 
{comment_url}

Трекбек відправлений з блога:
{sending_weblog_name}

Назва запису:
{sending_entry_title}

URL блогу:
{sending_weblog_url}
EOF;
}
// END


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Код активації Вашого аккаунта
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Шановний(а) {name}!
Ми дякуємо Вам за виявлену цікавість до нашого сайту і за реєстрацію на ньому.
Щоб активувати Ваш новий аккаунт, будь ласка, пройдіть по наступному посиланню: 
{unwrap}{activation_url}{/unwrap}

Дякуємо!

{site_name}

{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Інструкції по відновленню пароля
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
Шановний(а) {name},

Щоб скинути Ваш поточний пароль, а потім отримати новий, пройдіть по цьому посиланню:

{reset_url}

Ваш пароль буде автоматично змінений і встановлений новий. Новий пароль Ви отримаєте на цю адресу e-mail.

Якщо Ви не хочете змінювати свій пароль, просто не звертайте уваги на це повідомлення. Термін його дії закінчиться через 24 години.

{site_name}
{site_url}
EOF;
}
// END



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Нова інформація про Ваш логін
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

Це нова інформація про Ваш логін, використовуйте ці дані для входу в систему:

Логін: {username}
Новий пароль: {password}

Рекомендуємо Вам змінити цей пароль. Будь ласка, постарайтеся не забути новий пароль.

{site_name}
{site_url}
EOF;
}
// END



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Ваш аккаунт було активовано
EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

Ваш акаунт на сайті {site_name} був активований і готовий для використання.

Дякуємо!

{site_name}
{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Ваша реєстрація відхилена
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

Даруйте, Адміністратори нашого сайту ухвалили рішення про відмову Вам в реєстрації.

{site_name}
{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
Підтвердження підписаної e-mail адреси
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Дякуємо Вам за приєднання до нашого списку розсилки!

Будь ласка, підтвердіть Вашу адресу. Для цього необхідно пройти по посиланню, вказаному нижче.

Якщо Ви не хочете, щоб Ваша адреса опинилася в нашому списку розсилки, просто не звертайте уваги на це повідомлення. 

{unwrap}{activation_url}{/unwrap}

Дякуємо!

{site_name}
EOF;
}
// END



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
На Ваш коментар отримана відповідь
EOF;
}

function comment_notification()
{
return <<<EOF
У темі, на яку ви підписані, з\'явилися нові коментарі.
Тема розташована в розділі {weblog_name}, і її заголовок: 
{entry_title}

Ви можете прочитати цей коментар, пройшовши по посиланню, вказаному нижче:
{comment_url}

{comment}

Щоб відписатися від повідомлень по цій темі, натисніть на це посилання:
{notification_removal_url}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Новий коментар
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Надійшов новий коментар у фотоальбом:
{gallery_name}

Назва запису:
{entry_title}

Посилання: 
{comment_url}

{comment}
EOF;
}
// END

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
На Ваш коментар отримана відповідь
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Отримана відповідь до відстежуваної Вами теми у фотоальбомі:
{gallery_name}

Посилання:
{comment_url}

{comment}

Якщо Ви не хочете отримувати повідомлення по цій темі, натисніть на це посилання:
{notification_removal_url}
EOF;
}
// END



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Новий запис в {forum_name}
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name_of_poster} тільки що доданий новий запис в {forum_name}

Назва теми:
{title}

Посилання:
{post_url}

{body}
EOF;
}
// END


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Новий запис в {forum_name}
EOF;
}

function forum_post_notification()
{
return <<<EOF
Отримана нова відповідь у відстежуваній Вами темі:
{forum_name}

Назва теми:
{title}

Посилання:
{post_url}

{body}

Якщо Ви не хочете отримувати повідомлення по цій темі, натисніть на це посилання:
{notification_removal_url}
EOF;
}
// END


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Ви отримали нове приватне повідомлення
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} тільки що відправив Вам приватне повідомлення із назвою '{message_subject}'.

Ви можете прочитати його, увійшовши до системи сайту і переглянувши свою поштову скриньку InBox:
{site_url}

Якщо Ви не хочете отримувати повідомлення про приватні повідомлення, вимкніть цю опцію в своїх налагодженнях E-mail.
EOF;
}
// END


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
Ваша поштова скринька приватних повідомлень повна
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} була зроблена спроба відправити Вам приватне повідомлення
але Ваша поштова скринька InBox повна, перевищений ліміт {pm_storage_limit}.

Будь ласка, увійдіть до системи сайту і видаліть непотрібні повідомлення в InBox:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Повідомлення про модерацію в {forum_name}
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, модератор змінив Ваш запис, виконавши {moderation_action} .

Назва теми:
{title}

Посилання:
{post_url}
EOF;
}
/* END */

/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Уведомление о сообщении в {forum_name}
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name} тільки що повідомив про відповідь від {author} в:
{forum_name}

Причини повідомлення:
{reasons}

Додаткові примітки від {reporter_name}:
{notes}

Посилання:
{post_url}

Зміст повідомлення:
{body}
EOF;
}
/* END */

/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

function offline_template()
{
return <<<EOF
<html>
<head>

<title>Система відключена</title>

<style type="text/css">

body {
background-color:	#ffffff;
margin:				50px;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}

a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Система відключена</h1>

<p>На даний час цей сайт відключений</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

function message_template()
{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body {
background-color:	#ffffff;
margin:				50px;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}

a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

Для видалення Вашої адреси із цієї розсилкі натисніть на наступне посилання:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */

?>