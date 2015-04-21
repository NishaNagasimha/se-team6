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
    


 </div> 

 





<!--
<div style="align:right;width:100px;height:100px;">
<script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=12.966700&long=77.566700&zoom=6&width=250&height=200&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle=Bangalore"></script><br /><a href="http://www.webestools.com/google-maps-code-generator-insert-map-on-website-javascript-free-google-map-script.html">Google Maps code Generator</a>
</div>-->
<div style="background-color:#FFFFE0;text-align:center;">
<font face="Comic sans MS">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dyd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$w=(string)$_GET['name'];

$sql = "SELECT image,url,tution_fee,rank,numbr_enrollment,location,settings FROM college where college_name='$w'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<br/>";
    echo "<table>";
    while($row = $result->fetch_assoc()) {
      echo "<font face='Comic sans MS' color='black' size=5 align='left'>";
      echo "<b>";
     // $i=$row["image"];
      if($w=="Harvard University")
      {
      echo "<img src='harvard.jpg' width=620 height=300 align='left' /><br/>";
      echo "College:".$w."<br/>";
      echo "<a href=".$row["url"].">"."url:".$row["url"]."</a><br/>";
      echo "Tution fee:".$row["tution_fee"]."<br/>";
      echo "Rank:".$row["rank"]."<br/>";
      echo "Number of enrollments".$row["numbr_enrollment"]."<br/>";
      echo "Location:".$row["location"]." (".$row["settings"].")"."<br/>";
     }}}
     /*if($row["name"]=="University of Cambridge")
      echo "<img src='cambridge.jpg' width=300 height=200 align='left' /><br/>";
 if($row["name"]=="Stanford University")
      echo "<img src='stanford.jpg' width=300 height=200 align='left' /><br/>";
if($row["name"]=="Princeton University")
      echo "<img src='princeton.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="Yale University")
      echo "<img src='yale.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="Massachusetts Institute of Technology (MIT)")
      echo "<img src='mit.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="University of Oxford")
      echo "<img src='oxford.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="University of California, Berkeley (UCB)")
      echo "<img src='california.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="University of California, Los Angeles (UCLA)")
      echo "<img src='california_los.jpg' width=300 height=200 align='left' /><br/>";
     if($row["name"]=="Australian National University (ANU)")
      echo "<img src='australian_uni.jpg' width=300 height=200 align='left' /><br/>";
      if($row["name"]=="New York University (NYU)")
      echo "<img src='newyork_uni.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="University of California, San Francisco (UCSF)")
      echo "<img src='sanfransisco.jpg' width=300 height=200 align='left' /><br/>";
     if($row["name"]=="Johns Hopkins University")
      echo "<img src='john.jpg' width=300 height=200 align='left' /><br/>";
if($row["name"]=="Karolinska Institute")
      echo "<img src='karloinska.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="Imperial College London")
      echo "<img src='imperial.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="UCL (University College London)")
      echo "<img src='unicol.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="London Business School")
      echo "<img src='londonbus.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="National University of Singapore (NUS)")
      echo "<img src='singapore.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="University of Chicago")
      echo "<img src='chicago.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="London School of Economics and Political Science (LSE)")
      echo "<img src='londonschool.jpg' width=300 height=200 align='left' /><br/>";
     if($row["name"]=="ETH Zurich (Swiss Federal Institute of Technology)")
      echo "<img src='ETH.jpg' width=300 height=200 align='left' /><br/>";
     if($row["name"]=="California Institute of Technology (Caltech)")
      echo "<img src='caltech.jpg' width=300 height=200 align='left' /><br/>";
    if($row["name"]=="The University of Tokyo")
      echo "<img src='tokyo.jpg' width=300 height=200 align='left' /><br/>";
     if($row["name"]=="Nanyang Technological University (NTU)")
      echo "<img src='ntu.jpg' width=300 height=200 align='left' /><br/>";
      if($row["name"]=="Ecole Polytechnique Federale de Lausanne (EPFL)")
      echo "<img src='ecole.jpg' width=300 height=200 align='left' /><br/>";
*/
      
     
     
       
     echo "</b>";
       echo "</font>";
    
?>
</font>
</div>



<br/><br/>

</div>

       
    
        
      
   
</body>
</html>
