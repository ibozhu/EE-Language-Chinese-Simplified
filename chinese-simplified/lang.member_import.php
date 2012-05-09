<?php

$L = array(

"alphanumeric_not_allowed" =>
"不允许字母和数字分隔符 (a-z / 0-9)",

"assign_fields" =>
"指派表单",

"assign_fields_blurb" =>
"指派你的数据表单到 ExpressionEngine 的会员表单里",

"comma" =>
"逗号",

"confirm_details" =>
"确认资料",

"confirm_details_blurb" =>
"在导入数据之前请审查下面的详细资料. 如果有任何错误, 请返回做必要的修改.",

"confirm_field_assignment" =>
"确认表单分配",

"confirm_field_assignment_blurb" =>
"请审查你的表单指派.  如果有任何错误, 请返回做必要的修改.",

"convert_from_delimited" =>
"转换格式到 XML",

"convert_from_delimited_blurb" =>
"从其他的应用程序里限定的文本格式转换为一个 ExpressionEngine 会员 XML 文件",

"daylight_savings" =>
"夏令时保存时间",

"default_group_id" =>
"默认的组ID",

"default_settings" =>
"提供默认的选项",

"default_settings_blurb" =>
"设置你想用来作为默认配置的选项. 请注意这个默认的设置仅仅用在必要的数据中. 这些选项不会破坏XML数据.",


"delimited_file_loc" =>
"本地的会员文件",

"delimiter" =>
"分隔符",

"delimiter_blurb" =>
"这个字符用来分隔你的数据, 像 tab 键, 逗号, 竖线&quot;|&quot;, 等等.",

"download" =>
"下载 XML 文件",

"dst_enabled" =>
"启用 DST",

"duplicate_email" =>
"复制 email: ",

"duplicate_field_assignment" =>
"复制表单指派: %x",

"duplicate_member_id" =>
"复制会员 ID: &quot;%x&quot;&lt;br /&gt;我们推荐你不要使用 &lt;member_id&gt; 标签, 允许ExpressionEngine 自动增加 member_id",

"duplicate_screen_name" =>
"复制显示名: ",

"duplicate_username" =>
"复制用户名: ",

"enclosure" =>
"封闭字符",

"enclosure_blurb" =>
"如果这个字符存在的话它用来封闭你的数据. 下面是个例子, 封闭字符是双引号: &quot;",

"enclosure_example" =>
"&quot;John Doe&quot;, &quot;jdoe&quot;, &quot;john@example.com&quot;, ...",

"enclosure_label" =>
"封闭字符: ",

"encrypted_passwords" =>
"密码已经被加密",

"file_loc_blurb" =>
"这个文件必须放在你网站控制面板文件夹的相对目录下. 例如:如果在网站根目录下, 用 ../members.txt.",

"group_id" =>
"默认的会员组",

"import" =>
"导入!",

"import_from_xml" =>
"从 XML 文件导入",

"import_from_xml_blurb" =>
"这个功能允许你从一个XML文件导入会员到 ExpressionEngine 的会员XML格式",

"import_info" =>
"导入信息",

"import_success" =>
"会员导入成功",

"import_success_blurb" =>
"你的XML里的会员数据已经成功导入到你的数据库!",

"info_blurb" =>
"要用这个功能, 你必须首先把那个包含你要导入会员数据的文件放到你的服务器上, 然后提交那个文件的本地路径.",


"invalid_element" =>
"缺失或者无效的元素 - &lt;member&gt; ",

"invalid_path" =>
"无效的路径!  文件不存在: ",

"invalid_tag" =>
"无效的 XML 标签!",

"invalid_xml" =>
"你的 XML 文件有一个问题.  请查看 ExpressionEngine 会员XML文件格式的文档.",

"language" =>
"默认的语言",

"member_fields" =>
"会员表单",

"member_id_warning" =>
"警告: 如果在你的XML里有 &lt;member_id&gt; 标签, 已存在的相同 member_id 的会员将被覆盖!  请考虑好再继续!",

"member_import_utility" =>
"会员导入",

"member_import_welcome" =>
"这个功能允许你从其他系统导入会员到 ExpressionEngine",

"missing_birthday_child" =>
"缺失的子元素 &lt;birthday&gt;: &lt;day&gt; &lt;month&gt; &lt;year&gt; ",

"missing_email_field" =>
"你必须指派一个表单到 &quot;email&quot;",

"missing_screen_name_field" =>
"你必须指派一个表单到 &quot;screen_name&quot;",

"missing_username_field" =>
"你必须指派一个表单到 &quot;username&quot;",

"no" =>
"否",

"no_delimiter" =>
"你必须在 &quot;%x&quot; 选项里提供一个分隔符.",

"no_file_submitted" =>
"你必须提交你的会员数据文件的相对路径",

"no_read_access" =>
"无法读取文件: ",

"none" =>
"没有",

"not_enough_fields" =>
"你必须至少有3个表单: 用户名, 显示名, 和邮件地址",

"option" =>
"选项",

"other" =>
"其他:",

"password_field_warning" =>
"注意: 如果你没有一个匹配 &quot;Password&quot;的表单, 系统将指派一个随机的加密密码, 导入的用户将需要用 &quot;忘记密码&quot; 连接取回密码再登录.",


"password_warning" =>
"密码警告",

"password_warning_blurb" =>
"如果没有提供密码, 你的导入的会员将需要用 &quot;忘记密码&quot; 连接取回密码然后登录.  当然, 如果你的 ExpressionEngine 加密方式 (sha1/md5) 与你导入的数据的加密方式不一样, 密码将不能使用, 受影响的会员也将需要用&quot;忘记密码&quot; 连接.  纯文本 &quot;text&quot; 类型的密码将在导入的时候被加密.",




"plaintext_passwords" =>
"密码是纯文本",

"required_fields" =>
"* 用户名, 显示名, 和邮件地址是必填的.",

"tab" =>
"Tab 键",

"time_format" =>
"默认的时间格式",

"timezone" =>
"默认的时区",

"total_members_imported" =>
"共有 %x 个会员被导入.",

"value" =>
"值",

"view_in_browser" =>
"用浏览器查看",

"view_xml" =>
"查看 XML",

"within_user_record" =>
"没有用户记录",

"xml_file" =>
"XML 文件",

"xml_file_loc" =>
"本地的 XML 会员文件",

"xml_file_loc_blurb" =>
"这个文件必须放在你网站控制面板文件夹的相对目录下. 例如:如果在网站根目录下, 用 ../members.xml.",

"xml_imported" =>
"XML 会员数据导入",

"yes" =>
"是",

"your_data" =>
"你的数据",

/* END */
''=>''
);
?>