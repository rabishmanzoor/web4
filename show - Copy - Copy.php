<?php
//show information
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = @mysql_connect("localhost","root","");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("videos",$conn);
if(!$db)
{
echo mysqli_error();
}

$q = "SELECT * FROM videosinfo";
$r = mysql_query("$q",$conn);
$picnum=1;
if($r)
{
while($row=mysql_fetch_array($r))
{
$vlink=$row['vlink'];
//header("Content-type: text/html");
//echo "<img src='/php_test/image_archive/" . $last_file[0] . " ' alt='error'>";
echo "<img src=$picnum.jpg  height='130' width='150'>";
echo "<a href='$vlink'><img src=$picnum.jpg  height='130' width='150'></a>";
echo "</br>";
echo $row['vname'];
echo "</br>";
echo $row['vlink'];
echo "</br>";
$picnum=$picnum+1;

}
}
else
{
echo mysqli_error();
}
?>