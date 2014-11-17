<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liga de Futbol de Playa - Riviera Maya</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include('data/data.php');
$lfp_con = mysql_connect($db_host, $db_user, $db_pass);
mysql_select_db($db_base, $lfp_con);
?>
<div id="container">
<div id="header">
<h1>Liga de Futbol de Playa &quot;RIVIERA MAYA&quot;</h1>
</div>