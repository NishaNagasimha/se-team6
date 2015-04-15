<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
    <!-- Start css3menu.com HEAD section -->
  
  <!-- CSS styles for standard search box -->
<style type="text/css">

















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
    <form id="tfnewsearch" method="get" action="combo1.php?q=MSRIT" style="font-family:monospace;font:black;font-size:18px;border-top-left-radius: 10px 5px;
    border-bottom-left-radius: 5px 5px;box-shadow: 10px 10px 5px #FFCC99;">

            <input type="text" class="tftextinput" name="q" size="38" maxlength="500" placeholder="Search for college, course or topic..."><input type="submit" value="search" class="tfbutton">


















   

    </form>
  <div class="tfclear"></div>
 </div> 

 





<!--
<div style="align:right;width:100px;height:100px;">
<script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=12.966700&long=77.566700&zoom=6&width=250&height=200&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle=Bangalore"></script><br /><a href="http://www.webestools.com/google-maps-code-generator-insert-map-on-website-javascript-free-google-map-script.html">Google Maps code Generator</a>
</div>-->
<div style="background-color:#FFFFCC;font-family:monotype;font-size:20px;text-align:center;color:black;font-weight:bolder;">
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
$y=(string)$_GET['q'];
 $doc=new DOMDocument();
 if ($y=="Harvard")
 {
$doc->loadHTMLFile("basic.html");
echo "<font size=20>";
echo "Professors at Harvard";
echo "<b>";
echo "<br/>";
echo $doc->saveHTML();
echo "</b>";
echo "</font>";
 }
if ($y=="MIT")
{
$doc->loadHTMLFile("basic1.html");?>

<font size=20> <b>
Professors at MIT
<?php
echo $doc->saveHTML();
?>

</b>
</font>
<?php
}
$conn->close();
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
