<html>
<head>
<style type="text/css">
html , body, ul, li, a, div, img, h3, marquee, marq {
padding:0;
margin:0;
border:0;
list-style:none;
text-decoration:none;
text-align:center;
}



body{background:#666666;}
//div{border:1px solid red;}
.viddiv{
width: 800px;
margin-left:10%;
border:1px solid red;
position:absolute;
}
.viddiv3{
width: 250px;
margin-left:80%;
margin-top:0px;
border:2px solid green;
position:relative;
}
.viddiv2{
width: 250px;
border:2px solid black;
position:absolute;
margin-left:80%;
}
.outer{
border:1px solid red;
}

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


if($r)
{

if($row=mysql_fetch_array($r))
{
$vlink=$row['vlink'];

//echo $vlink;

echo '<div class="outer">';
echo '<div>
 <h3><a href="#">First</a></h3>
 <div class="viddiv"><p><b>'.$vlink.'</b><br /></p>
 <div>Lorem ipsum dolor sit amet.</div>
</div>
<div>';





}
}
else
{
echo mysqli_error();
}














echo '<div class="viddiv2">';
$q = "SELECT * FROM videosinfo";
$r = mysql_query("$q",$conn);
$picnum=$id;

if($r)
{
while($row=mysql_fetch_array($r))
{
$vlink=$row['vlink'];
$vname=$row['vname'];
$id=$row['id'];
echo '<div >
<div class="viddiv1">
 <h3 ><a href="http://localhost/web4/show.php?id='.$id.'"><img src=" '.$picnum.'.jpg " height="80" width="140"></a></h3>
  <h3 >'.$vname.'</h3>

</div>
</br>
<div>';

//echo "<a href='http://localhost/web4/show.php?id=$picnum'><img src=$picnum.jpg  height='130' width='150'></a>";
//echo "</br>";
//echo $row['vname'];
//echo "</br>";


$picnum=$picnum+1;

}
}
else
{
echo mysqli_error();
}

echo '</div>';
echo '</div>';
?>







</body>
</html>