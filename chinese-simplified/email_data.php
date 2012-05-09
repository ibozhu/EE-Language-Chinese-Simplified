<?php
//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
有人订阅了你的邮件列表
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
一个新的邮件列表被接收.

邮件地址: {email}
邮件列表: {mailing_list}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
一个新的weblog条目被发表
EOF;
}

function admin_notify_entry()
{
return <<<EOF
一个新的条目被发表在下面的weblog:
{weblog_name}

条目的标题是:
{entry_title}

发表者: {name}
电子邮件: {email}

要阅读这个条目请访问:
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
新会员注册通知
EOF;
}

function admin_notify_reg()
{
return <<<EOF
下面的人已经提交了新的用户申请: {name}

在: {site_name}

你的控制面板地址: {control_panel_url}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
你刚刚接收到了一个评论
EOF;
}

function admin_notify_comment()
{
return <<<EOF
你刚刚在下面的weblog里接收到一个评论:
{weblog_name}

条目的标题是:
{entry_title}

地址是:
{comment_url}

发表者: {name}
电子邮箱: {email}
URL: {url}
地址: {location}

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
你刚刚收到了一个引用
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
你刚刚在下面的条目里收到一个引用:
{entry_title}

地址是:
{comment_url}

引用是从下面的weblog发送的:
{sending_weblog_name}

条目标题:
{sending_entry_title}

Weblog 地址:
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
下面是你的激活代码
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
感谢你的注册.

要激活你的帐号, 请访问下面的 URL:

{unwrap}{activation_url}{/unwrap}

再次感谢!

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
登录信息
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
{name},

要重设你的密码, 请访问下面的页面:

{reset_url}

你的密码将被自动重设, 新密码将用邮件发送给你.

如果你不想重设你的密码, 不要管这个信息. 24小时后它将过期.

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
新的登录信息
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

这里是你的新登录信息:

用户名: {username}
密码: {password}

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
你的会员帐号已经被激活
EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

你的会员帐号已经被激活, 你可以使用了.

谢谢!

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
你的会员帐号已经被拒绝
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

很抱歉我们不能通过你的帐号.

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
邮件确认
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
感谢你加入我们的邮件列表!

请点击下面的链接确认你的邮件.

如果你不想加入到我们的邮件列表里, 忽略这个邮件.

{unwrap}{activation_url}{/unwrap}

谢谢!

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
有人刚刚回复了你的评论
EOF;
}

function comment_notification()
{
return <<<EOF
有人刚刚在你订阅的条目里回复了:
{weblog_name}

条目的标题是:
{entry_title}

你可以在下面的地址查看评论:
{comment_url}

{comment}

要停止接受这个条目的评论通知, 点击这里:
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
你刚刚接收到一个评论
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
你刚刚在下面的相册里接收到一个评论:
{gallery_name}

条目的标题是:
{entry_title}

地址在:
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
有人刚刚回复了你的评论
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
有人刚刚在你定于的相册条目里回复了:
{gallery_name}

你可以在下面的地址查看评论:
{comment_url}

{comment}

要停止接受这个评论的邮件通知, 点击这里:
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
有人刚刚在 {forum_name} 发了帖子
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name_of_poster} 刚刚提交了一个新帖子在 {forum_name}

帖子的标题是:
{title}

帖子可以在这里查看:
{thread_url}

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
有人刚刚在 {forum_name} 发表了帖子
EOF;
}

function forum_post_notification()
{
return <<<EOF
有人刚刚回复了你订阅的帖子在:
{forum_name}

帖子的标题是:
{title}

可以在下面的地址查看帖子:
{thread_url}

{body}

要停止接收这个评论的邮件通知, 点击这里:
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
有人刚刚给你发送了一个私人消息
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} 刚刚发送了一个私人消息给你, 标题是 '{message_subject}'.

你可以登录后在你的邮件箱里查看这个私人消息:
{site_url}

要停止接受私人消息邮件通知, 在你的邮件设置里把这个选项关闭.
EOF;
}
// END


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
你是私人消息收件箱满了
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} 刚刚要给你发一个私人消息,但是你的收件箱满了,
超出了最大数目 {pm_storage_limit}.

请登录后从你的收件箱里删除不必要的消息:
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
{forum_name}的管理通知
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, 一个版主 {moderation_action} 你的帖子.

帖子标题是:
{title}

可以在这里查看你的帖子:
{thread_url}
EOF;
}
/* END */

/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
发表报告在 {forum_name}
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name} 刚刚报告了一个 {author} 写的帖子在:
{forum_name}

报告原因是:
{reasons}

{reporter_name}的附加记录:
{notes}

帖子可以在下面看到:
{post_url}

报告的内容是:
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

<title>System Offline</title>

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

<h1>系统关闭</h1>

<p>当前站点已经关闭</p>

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

<meta http-equiv='content-type' content='text/html; charset=utf-8' />

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

从列表中删除你的邮件,请点击这里:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */


?>