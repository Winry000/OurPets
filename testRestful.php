<?php
define("DB_HOST", 'qianwenxiecom.ipagemysql.com');  
define("DB_USER", 'qianwenxie');  
define("DB_PASS", '12345');  
define("DB_DATABASENAME", 'userdata');  
define("DB_TABLENAME", 'userdata');

$field = $_REQUEST['field'];
$query = $_REQUEST['query'];

if (isset($_REQUEST['query']) && isset($_REQUEST['field']) && $_REQUEST['field'] != "*" )
{
	$sql = "select * from ".DB_TABLENAME." where ".$field." like '%".$query."%'";
}
else
{
	$sql = "select * from ".DB_TABLENAME;
}

			
if (!($conn = mysql_connect(DB_HOST, DB_USER, DB_PASS)))
{
	die("Could not connect to database");
}

if (!mysql_select_db(DB_DATABASENAME, $conn))
{
	die("Could not open database");
}

if (!($result = mysql_query($sql, $conn)))
{
	print("Could not execute query! <br />");
	die(mysql_error());
}

$results = array();
while ($row = mysql_fetch_assoc($result)) {
	$results[] = $row;
}

echo json_encode($results);

mysql_free_result($result);
 
mysql_close($conn);
?>