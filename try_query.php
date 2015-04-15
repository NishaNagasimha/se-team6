<?php
$servername = "localhost";
$username = "root";
$password = "shivam1!";
$dbname = "education";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,url,location FROM school";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo"Details:"."<br/>";
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<div style='border:5px solid red'>";
        echo "<tr>".$row["name"]."</tr>"."<br/>";
        echo "<tr>".$row["url"]."</tr>"."<br/>";
        echo "<tr>".$row["location"]."</tr>"."<br/>";
        echo "</div>";
	}
	echo "</table>"; 
	
} else {
    echo "0 results";
}
$conn->close();
?>