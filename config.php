<!php
$hostname_connect = "localhost";
$database_connect = "kanzt";
$username_connect = "root";
$password_connect = "";

$connect = mysql_pconnect($hostname_connect,$username_connect,$password_connect ) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_connect);
@mysql_query("set character_set_client='utf8'");
@mysql_query("set character_set_results='utf8'");
@mysql_query("set collation_connection='utf8_unicode_ci'");
