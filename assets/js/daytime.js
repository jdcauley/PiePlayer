

		var mydate=new Date()
		var year=mydate.getYear()
		if (year < 1000)
		year+=1900
		var day=mydate.getDay()
		var month=mydate.getMonth()
		var daym=mydate.getDate()
		if (daym<10)
		daym="0"+daym										
		var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
		var montharray=new Array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct","Nov","Dec")
		var date = dayarray[day]+"<br> "+montharray[month]+" "+daym+", "+year;
		if(date != document.getElementById('date').innerHTML) document.getElementById('date').innerHTML = date;

										
	<!-- JavaScript Clock Provided by getRank - http://www.getrank.org/ -->
	<!--
	function runMiniClock()
	{
	    var time = new Date();
	    var hours = time.getHours();
	    var minutes = time.getMinutes();
	    minutes=((minutes < 10) ? "0" : "") + minutes;
	    ampm = (hours >= 12) ? "PM" : "AM";
	    hours=(hours > 12) ? hours-12 : hours;
	    hours=(hours == 0) ? 12 : hours;
	    var clock = hours + ":" + minutes + " " + ampm;
	    if(clock != document.getElementById('miniclock').innerHTML) document.getElementById('miniclock').innerHTML = clock;
	    timer = setTimeout("runMiniClock()",1000);
	}
	runMiniClock();
	//-->
	
