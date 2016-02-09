<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
session_start();
if (!isset($_SESSION['count'])) {
echo  $_SESSION['count'] = 0;
} else {
echo  $_SESSION['count']++;
}
?>
 
<style type="text/css">
html , body, ul, li, a, div, img, h3,h5, marquee,p, marq {
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

body{background:white;}
//div{border:1px solid red;}
.viddiv{
width: 800px;

position:absolute;
//border:1px solid yellow;

}



.head1{
//border:1px solid blue;
width:100%;
height:20%;
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
z-index:1;
//border:2px solid green;
width:60%;
height:70%;

}



.viddiv:hover { -moz-box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; box-shadow: 0 0 20px #ccc; } 

.relatedvid1{
width:20%;
height:25%;
float: left;
margin-left:10px;
margin-bottom:30px;
//border:2px solid green;
list-style:none;
 text-align: 0 auto;
box-shadow: 0px 0px 10px grey;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
}

.relatedvid1:hover { -moz-box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; box-shadow: 0 0 20px #ccc; } 

.viddiv1{
border:2px solid green;
width:100%;
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
width: 20%;
height:70%;
//border:2px solid yellow;
margin-left:60%;
}

.viddiv1:hover { -moz-box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; box-shadow: 0 0 20px #ccc; } 

body{
width: 100%;
height:100%;
//border:1px solid red;
text-align:center;
margin:0 auto;
}

.centerdiv{

 position: fixed; 
    width: 50%; /* Set your desired with */
height: 50%;
    z-index: 2; /* Make sure its above other items. */
    top: 20%;
    left: 20%;

 
    /* You will not need the below, its only
       for styling   purposes.*/
    padding: 10px;
//    border: 2px solid #555555;
    background-color: #ccc;
    border-radius: 5px;
    text-align: center;

}



.centerdivbutton{
position: fixed; 
 
    z-index: 3; /* Make sure its above other items. */
    top: 40%;
    left: 40%;
}


.buttoncover{
position: fixed; 
  width:20px;
height:30px;
    z-index: 4; /* Make sure its above other items. */
    top: 40%;
    left: 40%;
//border:2px solid yellow;
  background-color: #ccc;
}

.fb-like{
border:2px solid red;

}



img{
box-shadow: 0px 0px 10px grey;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
}

.relatedvid{
position:absolute;
width:65%;
height:100%;

//border:1px solid red;
margin-top: 3%;
float: left;
}


</style>

<script type="text/javascript">
 
    function toggle_div_fun(id) {

       var divelement = document.getElementById(id);

       
          divelement.style.display = 'none';

    }
   function toggle_div_fun1(id) {
   var divelement1 = document.getElementById(id);

  divelement1.style.display = 'none';

}
 function toggle_div_fun2(id) {
   var divelement2 = document.getElementById(id);

  divelement2.style.display = 'none';

}

</script>

<script>
window.onload = function(){
  //document.getElementById("centerdivbutton").click();
//  document.getElementById("fb-like1").click();
}
</script>
</head>

<body>

//<?php
//session_start();
//?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


 //       window.alert("The paragraph was clicked.");
 
</script>





<?php
if (!isset($_SESSION['count'])) {

$_SESSION['count'] = 0;
echo '<div id="centerdiv" class="centerdiv" >
<div><h4>Click on LIKE button to see Video</h4></div>
</div>';


echo '<div id="centerdivbutton" class="centerdivbutton" ><div id="fb-like1" class="fb-like"   data-href="https://www.facebook.com/petssaleinpak" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
<div id="buttoncover" class="buttoncover"></div></div>';

echo '<script>
$(document).ready(function() {
    $("#fb-like1").mouseover(function(){
  //      alert("button");
setTimeout(function(){
//toggle_div_fun("centerdiv");
//toggle_div_fun1("centerdivbutton");
$(".centerdiv").css({"z-index":"-2"});
$(".centerdivbutton").css({"z-index":"-2"});
toggle_div_fun("centerdiv");
toggle_div_fun1("centerdivbutton");
toggle_div_fun2("buttoncover");
$(".buttoncover").css({"z-index":"-2"});
}, 5000);
    }); 
});
</script>';
$ss=1;

}



echo '<div class="head1" >
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
 <a href="http://localhost/web4/show.php?id='.$id.'"><img src=" '.$id.'.jpg " height="15%" width="95%"></a>
  <h5 >'.$vname.'</h5>

</div>
</br>
</div>';
}
}
else
{
echo mysqli_error();
}
echo '</div>';






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
<li>
<a href="http://localhost/web4/show.php?id='.$id.'"><img src=" '.$id.'.jpg " height="100%" width="100%"></a>
<h5 >'.$vname.'</h5></li>
</ul>


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