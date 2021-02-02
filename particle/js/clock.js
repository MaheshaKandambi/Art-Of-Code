
/*
function digiClock(){

	const date=new Date()
	const time=date.toLocalTimeString()

	document.getElementById("clock").innerHTML=time;
}
setInterval(function(){digiClock()},1000);*/
setInterval(displayclock,1000);
function displayclock()
{
var time=new Date();
var hrs=time.getHours();
var min=time.getMinutes();
var sec=time.getSeconds();

if(hrs>12){
	hrs=hrs-12;
}
if(hrs==12){
	hrs=12;
}
 document.getElementById('clock').innerHTML=hrs+':'+min+':'+sec;


}