<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1.0">
  <title>css3menu.com</title>
    <!-- Start css3menu.com HEAD section -->
  
  <!-- CSS styles for standard search box -->
<style type="text/css">



._css3m{display:none}


ul#css3menu1,ul#css3menu1 ul{
  margin:0;list-style:none;padding:0;background-color:#dedede;border-width:1px;border-style:solid;border-color:#5f5f5f;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}
ul#css3menu1 ul{
  display:none;position:absolute;left:0;top:100%;-moz-box-shadow:3.5px 3.5px 5px #000000;-webkit-box-shadow:3.5px 3.5px 5px #000000;box-shadow:3.5px 3.5px 5px #000000;background-color:#FFFFFF;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;border-color:#d4d4d4;padding:0 10px 10px;}
ul#css3menu1 li:hover>*{
  display:block;}
ul#css3menu1 li{
  position:relative;display:block;white-space:nowrap;font-size:0;float:left;}
ul#css3menu1 li:hover{
  z-index:1;}
ul#css3menu1 ul ul{
  position:absolute;left:100%;top:0;}
ul#css3menu1{
  font-size:0;z-index:999;position:relative;display:inline-block;zoom:1;padding:0;
  *display:inline;}
* html ul#css3menu1 li a{
  display:inline-block;}
ul#css3menu1>li{
  margin:0;}
ul#css3menu1 a:active, ul#css3menu1 a:focus{
  outline-style:none;}
ul#css3menu1 a{
  display:block;vertical-align:middle;text-align:left;text-decoration:none;font:bold 14px Trebuchet MS;color:#000000;text-shadow:#FFF 0 0 1px;cursor:pointer;padding:10px;background-color:#c1c1c1;background-image:url("mainbk.png");background-repeat:repeat;background-position:0 0;border-width:0 0 0 1px;border-style:solid;border-color:#C0C0C0;}
ul#css3menu1 ul li{
  float:none;margin:10px 0 0;}
ul#css3menu1 ul a{
  text-align:left;padding:4px;background-color:#FFFFFF;background-image:none;border-width:0;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;font:14px Arial,Helvetica,sans-serif;color:#000;text-decoration:none;}
ul#css3menu1 li:hover>a,ul#css3menu1 li a.pressed{
  background-color:#0c97e2;border-color:#C0C0C0;border-style:solid;color:#000000;text-shadow:#FFF 0 0 1px;background-image:url("mainbk.png");background-position:0 100px;}
ul#css3menu1 img{
  border:none;vertical-align:middle;margin-right:10px;}
ul#css3menu1 span{
  display:block;overflow:visible;background-position:right center;background-repeat:no-repeat;padding-right:0px;}
ul#css3menu1 ul span{
  background-image:url("arrowsub.png");padding-right:12px;}
ul#css3menu1 > li.switch{
  display:none;cursor:pointer;width:25px;height:20px;padding:10px;}
ul#css3menu1 > li.switch:before{
  content:"";position:absolute;display:block;height:4px;width:25px;border-radius:4px;background:#000000;-moz-box-shadow:0 8px #000000, 0 16px #000000;-webkit-box-shadow:0 8px #000000, 0 16px #000000;box-shadow:0 8px #000000, 0 16px #000000;}
ul#css3menu1 > li.switch:hover:before{
  background:#000000;-moz-box-shadow:0 8px #000000, 0 16px #000000;-webkit-box-shadow:0 8px #000000, 0 16px #000000;box-shadow:0 8px #000000, 0 16px #000000;}
.c3m-switch-input{
  display:none;}
ul#css3menu1 li:hover>a,ul#css3menu1 li > a.pressed{
  background-color:#0c97e2;background-image:url("mainbk.png");background-position:0 100px;border-style:solid;border-color:#C0C0C0;color:#000000;text-decoration:none;text-shadow:#FFF 0 0 1px;}
ul#css3menu1 ul li:hover>a,ul#css3menu1 ul li > a.pressed{
  background-color:#FFFFFF;background-image:none;color:#0978b3;text-decoration:underline;}
ul#css3menu1 li.toplast>a{
  border-radius:0 5px 5px 0;-moz-border-radius:0 5px 5px 0;-webkit-border-radius:0;-webkit-border-top-right-radius:5px;-webkit-border-bottom-right-radius:5px;}
@media screen and (max-width: 768px) {
  ul#css3menu1 > li {
    position: initial;}
  ul#css3menu1 ul .submenu,ul#css3menu1 li > ul {
    left: 0; right:auto; top: 100%;}
  ul#css3menu1 .submenu,ul#css3menu1 ul,ul#css3menu1 .column {
    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;padding-right: 0;width: 100% !important;}
}
@media screen and (max-width: 89px) {
  ul#css3menu1 {
    width: 100%;}
  ul#css3menu1 > li {
    display: none;    position: relative;   width: 100% !important;}
  ul#css3menu1 > li.switch,.c3m-switch-input:checked + ul#css3menu1 > li + li {
    display: block;}
  ul#css3menu1 > li.switch > label {    position: absolute;cursor: pointer;top: 0;left: 0;right: 0;bottom: 0;}}












  #tfheader{
    background-color:#003366;
    color:white;
    font-weight:bolder;
  }
  #tfnewsearch{
    float:right;
    padding:10px;
  }
  .tftextinput{
    margin: 0;
    padding: 5px 95px;
    font-family: monospace;, Helvetica, sans-serif;
    font-size:14px;
    border:1px solid #0076a3; border-right:0px;
    border-top-left-radius: 10px 5px;
    border-bottom-left-radius: 5px 5px;
  }
  .tfbutton {    margin: 0;

    padding: 5px 15px;
    font-family: monospace, Helvetica, sans-serif;
    font-size:14px;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    color: #000000;
    font-weight:bolder;
    border: solid 1px #0076a3; border-right:0px;
    background: #FFFFCC;
    border-top-right-radius: 5px 5px;
    border-bottom-right-radius: 5px 5px;
  }
  .tfbutton:hover {
    text-decoration: none;
    background: #007ead;
    background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
    background: -moz-linear-gradient(top,  #0095cc,  #00678e);
  }
  /* Fixes submit button height problem in Firefox */
  .tfbutton::-moz-focus-inner {
    border: 0;
  }
  .tfclear{
    clear:both;
  }

</style>
<title>Direct Your Dreams | College search</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html">Direct Your Dreams</a></h1>
      
    </div>
     <form action="#" method="post" id="login">
      <fieldset>
        <legend>Student Login</legend>
        <input type="password" />
        <input type="text" />
        <div id="forgot">Need <a href="#">Help ?</a> or <a href="#">Forgot Your Details ?</a></div>
        <input type="image" src="layout/images/sign_in.gif" id="signin" alt="Sign In" />
      </fieldset>
    </form>
 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li ><a href="index.html">Homepage</a></li>
      <li class="active"><a href="college-search.html">College search</a></li>
      
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="content">
    



  <!-- HTML for SEARCH BAR -->
  <div id="tfheader">
    <form id="tfnewsearch" method="get" action="combo1.php" style="font-family:monospace;font:black;font-size:18px;border-top-left-radius: 10px 5px;
    border-bottom-left-radius: 5px 5px;box-shadow: 10px 10px 5px #FFCC99;">

            <input type="text" class="tftextinput" name="q" size="38" maxlength="500" placeholder="Search for a college"><input type="button" value="search" class="tfbutton" >
</form>
  <div class="tfclear"></div>
 </div> 

 <div ontouchstart="" style="background-color:#EBEBEB">
<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu1" class="topmenu">
  <li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
  <li class="toplast"><a href="#" style="height:32px;line-height:32px;"><span><img src="find.png" alt=""/>Filter on</span></a>
  <ul>
    <li><a href="#"><span>Type of college</span></a>
    <ul>
      <li><a href="combo2.php?type_clg=Engineering">    Engineering</a></li>
      <li><a href="combo2.php?type_clg=Arts and Humanity">Arts and Humanity</a></li>
      <li><a href="combo2.php?type_clg=Medicine">Medicine</a></li>
      <li><a href="combo2.php?type_clg=Natural Sciences">Natural Sciences</a></li>
      <li><a href="combo2.php?type_clg=Social Science and Management">Social Science and Management</a></li>
    </ul></li>
    <li><a href="combo5.php">Ranking</a></li>
    
   <li><a href="#"><span>Location</span></a>
    <ul>
      <li><a href="combo4.php?loc=United States">  United States</a></li>
      <li><a href="combo4.php?loc=United Kingdom">United Kingdom</a></li>
      <li><a href="combo4.php?loc=Switzerland">Switzerland</a></li>
      <li><a href="combo4.php?loc=Singapore">Singapore</a></li>
      <li><a href="combo4.php?loc=Australia">Australia</a></li>
      <li><a href="combo4.php?loc=Sweden">Sweden</a></li>
      <li><a href="combo4.php?loc=Japan">Japan</a></li>
  </ul></li>
   <li><a href="#"><span>Professors</span></a>
   <ul>
   <li><a href="combo3.php?q=MIT">MIT</a></li>
      <li><a href="combo3.php?q=Harvard">Harvard University</a></li>
      <li><a href="combo3.php?q=Oxford">University of Oxford</a></li>
    
  </ul>
</li>
</ul><p class="_css3m">
</div>
<br/>
<br/>







<!--
<div style="align:right;width:100px;height:100px;">
<script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=12.966700&long=77.566700&zoom=6&width=250&height=200&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle=Bangalore"></script><br /><a href="http://www.webestools.com/google-maps-code-generator-insert-map-on-website-javascript-free-google-map-script.html">Google Maps code Generator</a>
</div>-->
<div style="background-color:#FFFFCC;font-family:'Tangerine',serif;font-size:20px;text-align:center;color:black;font-weight:bolder;">





<?php

?>
</div>
<br/><br/>
<div style="background-color:#FFFFCC;
    color:black;
    font-weight:bolder;box-shadow: 10px 10px 5px #888888;">
<table style="height:200;width:200;" >
  
<a href="#" class="stylish" style="box-shadow: 10px 10px 5px #888888;font-size:20px;text-align:center;font-family:monospace;"><div ><img src="match.png" style="width:120px;height:130px;"/><p>Find the best match</div></a>

 </table>
 <table style="height:200;width:300;" >
  
  <a href="#" class="stylish1"  style="box-shadow: 10px 10px 5px #888888;font-size:20px;text-align:center;font-family:monospace;"><div><img src="trust.png" style="width:113px;height:113px;"/><p>Trust the source</div></a>
 </table><table>
  <a href="#" class="stylish2"  style="box-shadow: 10px 10px 5px #888888;font-size:20px;text-align:center;font-family:monospace;"><div><img src="save1.png" style="width:103px;height:103px;"/><p>Save and continue</div></a>
    
   
     </table> 
   </div>
</div>

       
    
        
      
   
</body>
</html>

<?php

?>