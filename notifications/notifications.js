var j=0;
var i=1;
var number=8;
var load_prev=1;
var load_next=0;
document.getElementById('notification_tab').style.display="none";
class1=document.getElementById('class1').innerHTML;
class2=document.getElementById('class2').innerHTML;
class3=document.getElementById('class3').innerHTML;
var n=7;
//var x[8]={1,2,3,4,5,6,7,8};
//alert(x);
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
			class1.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+(j+1)+"</div></div>";
			break;
		case 2:
			class2.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+(j+1)+"</div></div>";
			break;
		case 3: 
			class3.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+(j+1)+"</div></div>";
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
		
		if(j==number-1){
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
			class1.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+(j)+"</div></div>";
			break;
		case 2:
			class2.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+(j)+"</div></div>";
			break;
		case 1: 
			class3.innerHTML="<div class='notification'><div class='notification_from'></div><div class='notification_info'>"+(j)+"</div></div>";
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
	document.getElementById('notification_tab').style.display='block';
	load_next_notifications();
	document.getElementById('left').style.visibility="hidden";
}
function remove_notifications(){
	document.getElementById('class1').childNodes[0].style.webkitAnimationName="moveleft";
	document.getElementById('class2').childNodes[0].style.webkitAnimationName="moveleft";
	document.getElementById('class3').childNodes[0].style.webkitAnimationName="moveleft";
}