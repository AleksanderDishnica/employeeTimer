"use strict";

function showTime(){
	var today = new Date();
	var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
	var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
	var dateTime = date+' '+time;

	document.getElementById('dateTime').innerHTML = dateTime;

	setTimeout(showTime, 1000);
}

showTime();