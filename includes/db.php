<?php
include("config.php");

$con = mysql_connect($config["DB_HOST"], $config["DB_USER"], $config["DB_PASSWORD"]);
$db = mysql_select_db($config["DB_NAME"], $con);
mysql_query("SET CHARACTER_SET_CLIENT='utf8'");
mysql_query("SET CHARACTER_SET_RESULTS='utf8'");
mysql_query("SET CHARACTER_SET_CONNECTION='utf8'");
