<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect("localhost","root","");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("videos",$conn);
if(!$db)
{
echo mysql_error();
}
$vname = $_POST['vname'];
$vlink = $_POST['vlink'];




$q ="INSERT INTO videosinfo VALUES('','$vname','$vlink')";

$r = mysql_query($q,$conn);
if($r)
{
echo "Information stored successfully";
}
else
{
echo mysql_error();
}


?>