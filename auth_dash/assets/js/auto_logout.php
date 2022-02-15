$(function()
	{	
		function timeChecker()
		{
			setInterval(function()
			{
				var storedTime = sessionStorage.getItem("last_activity");
				timeCompare(storedTime);
			},3000);
		}

		function timeCompare(timeString)
		{
			var maxMinutes  = 10;
			var currentTime = new Date();
			var pastTime    = new Date(timeString);
			var timeDiff    = currentTime - pastTime;
			var minPast     = Math.floor((timeDiff/60000));

			if (minPast > maxMinutes) 
			{
				sessionStorage.removeItem("last_activity");
				window.location = "<?= base_url() ?>/logout";
				return false;
			}
			else
			{
				// console.log(currentTime+" "+ pastTime +" - "+minPast+" min past");
			}
		}

		if (typeof(Storage)!== "undefined") 
		{
			$(document).mousemove(function(){
				var timeStamp = new Date();
				sessionStorage.setItem("last_activity",timeStamp);
			});	

			timeChecker();
		}
	});