<?php
$con=mysql_connect("localhost","root","","first");
if(!$con){
echo "failed to connect to MySQL: ".mysql_error();
}
else
echo "connected to database....";

$sql=mysql_query("INSERT INTO second (USN,name,sem,mobileno) VALUES ('1pi12cs161','shivam','5','9980371099')");
mysql_close($con);
?>