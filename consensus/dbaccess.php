<?php
$link = mysql_connect('localhost', 'root', '')
or die('Could not connect: ' . mysql_error());
mysql_select_db('consensusv2') or die('Could not select database');
mysql_query("SET NAMES 'utf8'");
 