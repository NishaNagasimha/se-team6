<?php
$con=mysql_connect("localhost","root","");
if(!$con){
echo "failed to connect to MySQL: ".mysql_error();
}
else
echo "connected to database....";
mysql_select_db("first",$con);
$result=mysql_query("SELECT * FROM second");
while($row = mysql_fetch_assoc($result)) {
  $output[]=$row;
}
print(json_encode($output));
mysql_close($con);
?>