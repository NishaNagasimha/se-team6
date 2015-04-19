<html>
<body>
    <h1>Glucose Test</h1>
    <!-- Begin Page Content -->
    <div id="container">
   
       <form name="reg" action="code_exec1.php" onsubmit="return validateForm()" method="post">
            <label for="Patient Id">Patient Id:</label>
            <input type="text" id="Patient_Id" name="Patient_Id">
<br>
<label for="college">Date:</label>
            <input type="text" id="Date" name="Date">
<br>
<label for="school">Time of test:</label>
            <input type="text" id="Time_of_test" name="Time_of_test">
<br>
            <label for="email">Time of last feeding:</label>
            <input type="text" id="Time_of_last_feeding" name="Time_of_last_feeding">
<br>
<label for="email">Age:</label>
            <input type="text" id="Age" name="Age">
		<br>
		 <label for="birthday">Blood Draw Location:</label>
		 <input type="text" id="birthday" name="birthday">
<br>
<label for="birthday">Commercial Device:</label>
		 <input type="text" id="cd" name="cd">
<br>
<label for="birthday">uMED Device:</label>
		 <input type="text" id="umed" name="umed">
<br>
<label for="birthday">Comments and notes:</label>
		 <input type="text" id="comm" name="comm">
<br>
            <input type="radio" name="sex" value="female"> Female
		 <input type="radio" name="sex" value="male"> Male
		<tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
	
        </form>
    </div><!--/ container-->
    <!-- End Page Content -->
</body>
