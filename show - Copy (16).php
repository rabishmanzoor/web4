<html>
<head>
<style type="text/css">
html , body, ul, li, a, div, img, h3,h5, marquee, marq {
padding:0;
margin:0;
border:0;
list-style:none;
text-decoration:none;
text-align:center;

}

h1,h2,h3,h4,h5,p{
 color: white;
}

body{background:black;}
//div{border:1px solid red;}
.viddiv{
width: 800px;

position:absolute;
//border:1px solid yellow;

}

.relatedvid{
width:1000;
height:800px;
position:absolute;
//border:1px solid red;
margin-top:600px;
float: left;
}


.head1{
//border:1px solid blue;
width:100%;
height:100px;
background:#666699 ;
-moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
}


.head1:hover { -moz-box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; box-shadow: 0 0 20px #ccc; } 

.viddiv{
box-shadow: 0px 0px 10px grey;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
z-index:-1;
}

.centerdiv{

 position: fixed; 
    width: 50%; /* Set your desired with */
height: 50%;
    z-index: 1; /* Make sure its above other items. */
    top: 50%;
    left: 20%;
    margin-top: -10%; /* Changes with height. */
    margin-left: -10%; /* Your width divided by 2. */
 
    /* You will not need the below, its only
       for styling   purposes.*/
    padding: 10px;
    border: 2px solid #555555;
    background-color: #ccc;
    border-radius: 5px;
    text-align: center;

}

.centerdivbutton{
 top: 50%;
position: fixed; 
z-index: 2;
 left: 20%;
}

.viddiv:hover { -moz-box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; box-shadow: 0 0 20px #ccc; } 

.relatedvid1{
width:220px;
height:180px;
float: left;
margin-left:10px;
//border:2px solid green;
list-style:none;
 text-align: 0 auto;
box-shadow: 0px 0px 10px grey;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
}

.relatedvid1:hover { -moz-box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; box-shadow: 0 0 20px #ccc; } 

.viddiv1{
box-shadow: 0px 0px 10px grey;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
}


.viddiv3{
width: 250px;
//margin-left:80%;
float: left;
margin-top:0px;
//border:2px solid green;
box-shadow: 5px 5px 5px grey;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
}

.viddiv2{
width: 250px;
//border:2px solid black;
float: right;
}

.viddiv1:hover { -moz-box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; box-shadow: 0 0 20px #ccc; } 

body{
width: 1250px;
//border:1px solid red;
text-align:center;
margin:0 auto;
}



</style>

<script type="text/javascript">
    function toggle_div_fun(id) {

       var divelement = document.getElementById(id);

       if(divelement.style.display == 'none')
          divelement.style.display = 'block';
       else
          divelement.style.display = 'none';
    }
   function toggle_div_fun1(id) {
   var divelement1 = document.getElementById(id);
  divelement1.style.display = 'none';
}
</script>
</head>

<body>


<button id="centerdivbutton" class="centerdivbutton" onclick="toggle_div_fun('centerdiv');toggle_div_fun1('centerdivbutton');">Click Here</button>

<?php

echo '<div class="head1" >

 <div><h1>Watch Amazing Videos</h1></div>
</div>
</div>';

echo '<div id="centerdiv" class="centerdiv" >
<div><h1>Watch Amazing Videos</h1></div>

</div>
</div>';

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



echo '<div >

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





echo '<div class="relatedvid">';
$q = "SELECT * FROM videosinfo ORDER BY RAND() LIMIT 6;";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$vlink=$row['vlink'];
$vname=$row['vname'];
$id=$row['id'];

echo '<div class="relatedvid1">
<ul>
<li><a href="http://localhost/web4/show.php?id='.$id.'"><img src=" '.$id.'.jpg " height="100" width="220"></a></li>
<li><p> <h5 >'.$vname.'</h5> </p></li>
</ul>
</div>';
}
}
else
{
echo mysqli_error();
}
echo '</div>';







echo '<div class="viddiv2">';
$q = "SELECT * FROM videosinfo ORDER BY RAND() LIMIT 25;";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$vlink=$row['vlink'];
$vname=$row['vname'];
$id=$row['id'];
echo '<div >
<div class="viddiv1">
 <a href="http://localhost/web4/show.php?id='.$id.'"><img src=" '.$id.'.jpg " height="80" width="200"></a>
  <h5 >'.$vname.'</h5>
</div>
</div>';
}
}
else
{
echo mysqli_error();
}
echo '</div>';





?>







</body>
</html>