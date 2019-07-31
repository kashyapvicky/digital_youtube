$(document).ready(function(){
$("#reset_button").click(function(){
	var eml = $("#reset_email").val();
	$.ajax({
		type:'POST',
		url:'inc/respsd4d6hf5hf6dfors.php',
		data:{
		eml:eml
		},
		dataType:'JSON',
		beforeSend:function(){
		document.getElementById('container_login_msg_porter').innerHTML="<img class='container_login_loading_image' src='img/loading.gif'>";
		},
		success:function(rep){
		if(rep == "not"){
		document.getElementById('container_login_msg_porter').innerHTML="";
		document.getElementById('container_login_msg_porter').innerHTML="<div class='wrong_box'>This is not an email</div>";	
		}
		if(rep == "done"){
		document.getElementById('reset_email').value="";
		document.getElementById('container_login_msg_porter').innerHTML="";
		document.getElementById('container_login_msg_porter').innerHTML="<div class='right_box_f_p'>We sent a new password to your email.</div>";
		}if(rep == "none"){
		document.getElementById('container_login_msg_porter').innerHTML="";
		document.getElementById('container_login_msg_porter').innerHTML="<div class='wrong_box'>This email is wrong.</div>";	
		}if(rep == "didnot"){
		document.getElementById('container_login_msg_porter').innerHTML="";
		document.getElementById('container_login_msg_porter').innerHTML="<div class='wrong_box'>Some thing went wrong, try again please.</div>";	
		}}
	});
});
});