<html>
<head>
<style type="text/css">
body{background:#666666;}
div{border:1px solid red;}
</style>
</head>
<body>


<?php
//link rel="stylesheet" href="style.css" type="text/css">
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


$id=$_GET["id"];
$q = "SELECT * FROM videosinfo WHERE id='$id' ";
$r = mysql_query("$q",$conn);
$picnum=1;

if($r)
{

while($row=mysql_fetch_array($r))
{
$vlink=$row['vlink'];

echo $vlink;


echo '<div>
 <h3><a href="#">First</a></h3>
 <div class="textdetail"><p><b>'.$vlink.'</b><br /></p>
 <div>Lorem ipsum dolor sit amet.</div>
</div>
<div>';



$picnum=$picnum+1;

}
}
else
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

echo "<a href='$vlink'><img src=$picnum.jpg  height='130' width='150'></a>";
echo "</br>";
echo $row['vname'];
echo "</br>";

$picnum=$picnum+1;

}
}
else
{
echo mysqli_error();
}
?>

<iframe frameborder="0" width="480" height="270" src="https://www.dailymotion.com/video/x3mjluw_shahid-afridi-best-catch-of-2016-in-new-zealand_news" ></iframe>
</body>
</html>