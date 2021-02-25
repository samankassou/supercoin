$(document).ready(function(){
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
	var percent 	= [10,12,15,20];
	var minMoney 	= [20,1001,5001,10001];
	var maxMoney	= [1000,5000,10000,100000];
	$("#amount").val(minMoney[0]);
	
	//Calculator
	function calc(){
		amount = parseFloat($("#amount").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= amount && amount <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)
		
		if(id != -1){
			profitDaily = amount / 100 * percent[id];
			profitDaily = profitDaily.toFixed(2);
			profitHourly = amount / 100 * percent[id]/24;
			profitHourly = profitHourly.toFixed(2);
			profitWeekly = profitDaily * 7;
			profitWeekly = profitWeekly.toFixed(2);
			profitMonthly = profitDaily * 30;
			profitMonthly = profitMonthly.toFixed(2);

			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitDaily").text("Error!");
				$("#profitHourly").text("Error!");
				$("#profitWeekly").text("Error!");
				$("#profitMonthly").text("Error!");
			} else {
				$("#profitDaily").text("$" + profitDaily);
				$("#profitHourly").text(profitHourly);
				$("#profitWeekly").text("$" + profitWeekly);
				$("#profitMonthly").text("$" + profitMonthly);
				
				$("#percentDaily").text("(" + percent[id] + "%)");
				$("#percentMonthly").text("(" + percent[id] * 30 + "%)");
			}
		} else {
			$("#profitDaily").text("Error!");
			$("#profitHourly").text("Error!");
			$("#profitWeekly").text("Error!");
			$("#profitMonthly").text("Error!");
		}
	}
	if($("#amount").length){
		calc();
	}
	$("#amount").keyup(function(){
		calc();
	});
});
