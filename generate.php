<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$degree=$_POST['degree'];
$gpa1=$_POST['gpa1'];
$ins1=$_POST['ins1'];
$brd1=$_POST['brd1'];
$yr1=$_POST['yr1'];
$gpa2=$_POST['gpa2'];
$ins2=$_POST['ins2'];
$brd2=$_POST['brd2'];
$yr2=$_POST['yr2'];
$gpa3=$_POST['gpa3'];
$ins3=$_POST['ins3'];
$brd3=$_POST['brd3'];
$yr3=$_POST['yr3'];
$work=$_POST['work'];
$skill=$_POST['skill'];
$extra=$_POST['extra'];
$topic=$_POST['topic'];
$des=$_POST['des'];
$set=explode(",",$skill);
$ex=explode(",",$extra);
?>
<!DOCTYPE html>
<html>
<body><br/>
	<input type="button" value="Download " onclick="window.print();" style="border-radius:20px;height:50px;width:150px;background-color:#05EDFF	;font-weight:bold;font-size:20px"/><br/>
	&nbsp;&nbsp;&nbsp;<b><font size=15><?php echo "$name"?></font></b><br/>
	&nbsp;&nbsp;&nbsp;<u><font size=5 color='blue'><?php echo "$email"?></font></u><br/>
	&nbsp;&nbsp;&nbsp;<font size=5><?php echo "$phone"?></font><br/><br/><br/>
	<div style="height:30px;width:800px;padding-top: 10px;padding-bottom: 10px;border-radius:5px;background-color:#CCCCCC;font-size:20px;font-weight:bold;">&nbsp;&nbsp;&nbsp;Academic details</div><br/><br/>
	<table style='border:5px solid #CCCCCC' cellpadding='20px'>
<tr><td><b>Year</b></td><td><b>Degree</b></td><td><b>Institute</b></td><td><b>CGPA or %age</b></td></tr>
		<tr><td><?php echo "$yr1"?></td><td><?php echo "$degree"?></td><td><?php echo "$ins1".", "."$brd1"?></td><td><?php echo "$gpa1"?></td></tr>
		<tr><td><?php echo "$yr2"?></td><td>Class XII<?php echo ", "."$brd2"?></td><td><?php echo "$ins2"?></td><td><?php echo "$gpa2"?></td></tr>
		<tr><td><?php echo "$yr3"?></td><td>Class X<?php echo ", "."$brd3"?></td><td><?php echo "$ins3"?></td><td><?php echo "$gpa3"?></td></tr>
	</table><br/><br/>
	<div style="height:30px;width:800px;padding-top: 10px;padding-bottom: 10px;border-radius:5px;background-color:#CCCCCC;font-size:20px;font-weight:bold;">&nbsp;&nbsp;&nbsp;Workshops or Conferences attended</div><br/><br/>
	<div style='font-size:15px;color:black;'><?php echo "$work"?></div><br/><br/>
	<div style="height:30px;width:800px;padding-top: 10px;padding-bottom: 10px;border-radius:5px;background-color:#CCCCCC;font-size:20px;font-weight:bold;">&nbsp;&nbsp;&nbsp;Technical skills</div><br/>
	<div style='font-size:15px;color:black;'><ul><?php foreach($set as $val){echo "<li>"."$val"."&nbsp;&nbsp;&nbsp";}?></ul></div><br/><br/>
	<div style="background-color:#CCCCCC;font-size:20px;font-weight:bold;height:30px;width:800px;padding-top: 10px;padding-bottom: 10px;border-radius:5px;">&nbsp;&nbsp;&nbsp;Extra-curricular activities and Achievements</div><br/>
	<div style='font-size:15px;color:black;'><ol><?php foreach($ex as $val){echo "<li>"."$val"."<br/>";}?></ol></div><br/><br/>
	<div style="height:30px;width:800px;padding-top: 10px;padding-bottom: 10px;border-radius:5px;background-color:#CCCCCC;font-size:20px;font-weight:bold;">&nbsp;&nbsp;&nbsp;Projects</div><br/>
	<div style='font-size:15px;color:black;'><?php echo "<b><u>"."$topic"."</u></b>"."<br/>"."$des";?></div><br/><br/>
	<div style="background-color:#CCCCCC;font-size:20px;font-weight:bold;height:30px;width:800px;padding-top: 10px;padding-bottom: 10px;border-radius:5px;">&nbsp;&nbsp;&nbsp;Declaration</div><br/>
	<div style='font-size:15px;color:black;'>I hereby declare that all the details furnished above are true to the best of my knowledge and belief.</div>

</body>
</html>
