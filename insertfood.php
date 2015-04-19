<?php
$con=mysqli_connect("localhost","root","","food");
if(mysqli_connect_errno()){
echo "failed to connect to MySQL:" .mysqli_connect_error();
}
else
echo "connected to database....";
$result=mysqli_query($con,"SELECT * FROM categories");
while($row = mysqli_fetch_array($result)) {
  echo $row['id']." ".$row['name'];
  echo "<br>";
}

mysqli_close($con);
?>