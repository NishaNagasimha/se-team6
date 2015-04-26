<?PHP

$user_name = "root";
$password = "";
$database = "education";
$server = "127.0.0.1";
$link = mysql_connect('localhost', $user_name, $password);
$db = mysql_select_db("education",$link) ;
$new_notifications=mysql_query("SELECT college_name,tution_fee, rank FROM notifications,college WHERE c_name=college_name AND u_name='divya' AND seen=1");
$all_notifications=mysql_query("SELECT college_name,tution_fee, rank FROM notifications,college WHERE c_name=college_name AND u_name='divya'");


$notification_from=array();
$tution_fee=array();
$rank=array();
$all_notification_from=array();
$all_tution_fee=array();
$all_rank=array();


while($row1=mysql_fetch_array($new_notifications))
{
array_push($notification_from,$row1{'college_name'});
array_push($tution_fee,$row1{'tution_fee'});
array_push($rank,$row1{'rank'});
}
$notifications=mysql_query("SELECT c_name,college_name,tution_fee, rank FROM notifications,college WHERE c_name=college_name");
while($row1=mysql_fetch_array($all_notifications))
{
array_push($all_notification_from,$row1{'college_name'});
array_push($all_tution_fee,$row1{'tution_fee'});
array_push($all_rank,$row1{'rank'});
}
//print_r($rank);
$total=count($notification_from);
$all_total=count($all_notification_from);
?>
<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="notifications.css"/>
</head>
<body >
<div id="notification_button" onclick="display_notifications()" ><img style="width:100%;"src="notifications.png"/></div>
<div id="notification_tab" >
	<div id="see_all_notifications" onclick="display_all()">
		<div id="inner_div">
		<p id="a1">See ALL Notifications</p>
		</div>
	</div>
	<div id="scroll_window">
	<div id="new_notifications">
	<?php
	if($total>0){
		for ($i=0;$i<$total;$i++ )
		{
		echo '<div class="class"><div class="notification"><div class="notification_from"><p>';
		echo $notification_from[$i];
		echo '</p></div><div class="notification_info"><p><span class="highlight">Rank:</span> ';
		echo $rank[$i];
		echo '</p><p><span class="highlight"> Tution fees:</span> ';
		echo $tution_fee[$i];
		echo '</p></div></div></div>';
		}
	}
	else if($total==0){
	echo '<div class="error_notification"><h1> There are no new notifications</h1></div>';
	}
	?>
	</div>
	<div id="all_notifications">
	<?php
	if($all_total>0){
		for ($i=0;$i<$all_total;$i++ )
		{
		echo '<div class="class"><div class="notification"><div class="notification_from"><p>';
		echo $all_notification_from[$i];
		echo '</p></div><div class="notification_info"><p><span class="highlight">Rank:</span> ';
		echo $all_rank[$i];
		echo '</p><p><span class="highlight"> Tution fees:</span> ';
		echo $all_tution_fee[$i];
		echo '</p></div></div></div>';
		}
	}
	else if($all_total==0){
	echo '<div class="error_notification"><h1> There are no new notifications</h1></div>';
	}
	?>
	</div>
	</div>
</div>

<script>
notifications=1;
all_notifications=0;
function display_notifications(){
	if(notifications){
		document.getElementById('notification_tab').style.display="block";
		notifications=0;
	}
	else{
		document.getElementById('notification_tab').style.display="none";
		notifications=1;
		<?php
			mysql_query("UPDATE notifications SET seen='0' WHERE u_name='divya'");
		?>
		document.getElementById('new_notifications').innerHTML=<?php echo json_encode('<div class="error_notification"><h1> There are no new notifications</h1></div>'); ?>;
	}
}
function display_all(){
	if(all_notifications){
		document.getElementById('new_notifications').style.display="none";
		document.getElementById('all_notifications').style.display="block";
		document.getElementById('a1').innerHTML="See New Notifications";
		all_notifications=0;
	}
	else{
		document.getElementById('all_notifications').style.display="none";
		document.getElementById('new_notifications').style.display="block";
		document.getElementById('a1').innerHTML="See ALL Notifications";
		all_notifications=1;
	}
}

/*
var j=0;
var i=1;
var number=8;//<?php echo json_encode($total-1);?>;
var load_prev=1;
var load_next=0;
var load_notifications=0;
document.getElementById('notification_tab').style.display="none";
class1=document.getElementById('class1');
class2=document.getElementById('class2');
class3=document.getElementById('class3');
var n=7;
//var x[8]={1,2,3,4,5,6,7,8};
//alert(x);
asd=document.getElementById('asd');
function load_next_notifications(){
	
	for (i=1;i<4;i++)
	{	
		if(load_next){
			j++;
			while(j%3!=0){
				j++;
			}
			load_next=0;
		}
		switch(i){
		case 1: 
			class1.innerHTML="<div class='notification'><div class='notification_from'><p>"+<?php echo json_encode(next($notification_from));?>+"</p></div><div class='notification_info'>"+"<p> <span class='highlight'>Rank:</span> "+<?php echo json_encode(next($rank));?>+"</p>"+"<p><span class='highlight'> Tution fees:</span> "+<?php echo json_encode(next($tution_fee))?>+"</p>"+"</div></div>";
			break;
		case 2:
			class2.innerHTML="<div class='notification'><div class='notification_from'><p>"+<?php echo json_encode(next($notification_from));?>+"</p></div><div class='notification_info'>"+"<p> <span class='highlight'>Rank:</span> "+<?php echo json_encode(next($rank));?>+"</p>"+"<p><span class='highlight' > Tution fees:</span> "+<?php echo json_encode(next($tution_fee))?>+"</p>"+"</div></div>";
			break;
		case 3: 
			class3.innerHTML="<div class='notification'><div class='notification_from'><p>"+<?php echo json_encode(next($notification_from));?>+"</p></div><div class='notification_info'>"+"<p> <span class='highlight'>Rank:</span> "+<?php echo json_encode(next($rank));?>+"</p>"+"<p><span class='highlight'> Tution fees:</span> "+<?php echo json_encode(next($tution_fee))?>+"</p>"+"</div></div>";
			break;
		}
		
		if(j>number-1){
			switch (i){
			case 1: 
				class1.innerHTML="";
				j--;
				break;
			case 2:
				class2.innerHTML="";
				break;
				j--;
			case 3: 
				class3.innerHTML="";
				j--;
				break;
			}
			
		}
		
		j++;
		
		if(j==number){
			//disable the right button	
			document.getElementById('right').style.visibility="hidden";
		}
	}
	load_prev=1;
	
	document.getElementById('left').style.visibility="visible";
}
function load_previous_notifications(){
	
	if(load_prev){
		j--;
		while(j%3!=0){
			j--;
		}
		load_prev=0;
	}
	for (i=1;i<4;i++){	
		switch(i){
		case 3: 
			class1.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+<?php echo json_encode(prev($rank));?>+"</div></div>";
			break;
		case 2:
			class2.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+<?php echo json_encode(prev($rank));?>+"</div></div>";
			break;
		case 1: 
			class3.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+<?php echo json_encode(prev($rank));?>+"</div></div>";
			break;
		}
		if(j<0){
			switch (i){
			case 1: 
				class1.innerHTML="";
				break;
			case 2:
				class2.innerHTML="";
				break;
			case 3: 
				class3.innerHTML="";
				break;
			}	
		}
		
		j--;
		
		if(j==0){
			document.getElementById('left').style.visibility="hidden";
		}
		
	}
	load_next=1;
	
	//enable the right button
	document.getElementById('right').style.visibility="visible";
}
function display_notifications(){
	if(load_notifications){
		document.getElementById('notification_tab').style.display='none';
		load_notifications=0;
			
	}
	else{
		document.getElementById('notification_tab').style.display='block';
		j=0;
		i=1;
		load_next=0;
		load_prev=1;
		<?php reset($rank);?>
		<?php reset($tution_fee);?>
		<?php reset($notification_from);?>
		load_next_notifications();
		document.getElementById('left').style.visibility="hidden";
		if (number>3){
		document.getElementById('right').style.visibility="visible";}
		load_notifications=1;
	}
}
function remove_notifications(){
	document.getElementById('class1').childNodes[0].style.webkitAnimationName="moveleft";
	document.getElementById('class2').childNodes[0].style.webkitAnimationName="moveleft";
	document.getElementById('class3').childNodes[0].style.webkitAnimationName="moveleft";
}*/
</script>
</body>

</html>