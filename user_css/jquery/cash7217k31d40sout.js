$(document).ready(function(){
	$("#allpageinside_allthepage_inside_pagein_buyself_purchase").click(function(){
		var amount = $("#allpageinside_allthepage_inside_pagein_buyself_number_self").val();
		var bank = $("#allpageinside_allthepage_inside_cashoutbanks").val();
		$.ajax({
			type:'POST',
			url:'inc/cash72318d40sout.php',
			data:{
			amount:amount,
			bank:bank
			},
			dataType:'json',
			beforeSend:function(){
				document.getElementById('allpageinside_allthepage_inside_pagein_buyself_onceall_load').innerHTML="<img id='allpageinside_loadimg' src='img/loading.gif'>";
			},
			success:function(rep){
				if(rep[0] == "done"){
				document.getElementById('allpageinside_allthepage_inside_pagein_buyself_onceall_load').innerHTML="<div class='right_box'>Cashout request of <b>$"+rep[2]+"</b> is sent.</div>";
				$("#pad_pageindx_allcashout_trans_container").prepend(
				'<div class="pad_pageindx_allcashout_trans">'+
				'<div class="pad_pageindx_allcashout_trans_once">'+rep[3]+'</div>'+
				'<div class="pad_pageindx_allcashout_trans_once">$'+rep[2]+'</div>'+
				'<div class="pad_pageindx_allcashout_trans_once">'+rep[1]+'</div>'+
				'<div class="pad_pageindx_allcashout_trans_once">Pending...</div>'+
				'</div>');
				}if(rep[0] == "exist"){
			document.getElementById('allpageinside_allthepage_inside_pagein_buyself_onceall_load').innerHTML="<div class='wrong_box'>You already have a pending cashout.</div>";	
			}if(rep[0] == "lessearn"){
			document.getElementById('allpageinside_allthepage_inside_pagein_buyself_onceall_load').innerHTML="<div class='wrong_box'>You don't have <b>$ "+rep[2]+"</b> in Your Earnings.</div>";	
			}if(rep[0] == "min"){
			document.getElementById('allpageinside_allthepage_inside_pagein_buyself_onceall_load').innerHTML="<div class='wrong_box'>Minimum cashout is <b>5$</b>.</div>";	
			}if(rep[0] == "addbank"){
			document.getElementById('allpageinside_allthepage_inside_pagein_buyself_onceall_load').innerHTML="<div class='wrong_box'>You Must Add Your <b>Bank ID</b> in <b>My Settings Page</b>.</div>";	
			}if(rep[0] == "notint"){
			document.getElementById('allpageinside_allthepage_inside_pagein_buyself_onceall_load').innerHTML="<div class='wrong_box'>You can't cashout <b>$"+rep[2]+"</b>, Amount can only contain numbers. for example <b>$"+rep[4]+"</b>.</div>";	
			}
			}
		});
	});
});