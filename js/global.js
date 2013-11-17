$(document).ready(function(){

	var status = "open";
	var statusEl ="";

	if(status=="open"){
		statusEl = $(".open");
	}else{
		statusEl = $(".occupied");
	}

	var random = Math.floor(Math.random() * statusEl.length);
	statusEl.eq(random).show();

});